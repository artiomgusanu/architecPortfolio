<?php
// Habilita exibição de erros para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir o autoloader do Composer
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Configurações do banco de dados
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root123';
$dbName = 'rita';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Erro na conexão: " . $conn->connect_error]));
}

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(["status" => "error", "message" => "Método inválido."]);
    exit();
}

// Validação dos campos
$name = htmlspecialchars($_POST['name'] ?? '');
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars($_POST['message'] ?? '');

if (!$name || !$email || !$message) {
    echo json_encode(["status" => "error", "message" => "Todos os campos são obrigatórios."]);
    exit();
}

// Diretório de uploads
$uploadsDir = 'uploads/';
if (!is_dir($uploadsDir)) {
    mkdir($uploadsDir, 0777, true);
}

$uploadedFiles = [];
$allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
$maxFileSize = 5 * 1024 * 1024; // 5MB

// Processamento dos arquivos
if (!empty($_FILES['images']['name'][0])) {
    foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
        $fileName = basename($_FILES['images']['name'][$index]);
        $fileType = $_FILES['images']['type'][$index];
        $fileSize = $_FILES['images']['size'][$index];
        $targetFilePath = $uploadsDir . $fileName;

        if (!in_array($fileType, $allowedTypes)) {
            echo json_encode(["status" => "error", "message" => "Formato de arquivo inválido: " . $fileName]);
            exit();
        }

        if ($fileSize > $maxFileSize) {
            echo json_encode(["status" => "error", "message" => "Arquivo muito grande: " . $fileName]);
            exit();
        }

        if (move_uploaded_file($tmpName, $targetFilePath)) {
            $uploadedFiles[] = $targetFilePath;
        } else {
            echo json_encode(["status" => "error", "message" => "Erro ao enviar: " . $fileName]);
            exit();
        }
    }
}

// Configuração do PHPMailer
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'artyy.gus@gmail.com';
    $mail->Password = 'dusx yxho vywa ekos';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;

    $mail->setFrom($email, $name);
    $mail->addAddress('artyy.gus@gmail.com');

    foreach ($uploadedFiles as $file) {
        $mail->addAttachment($file);
    }

    $mail->isHTML(false);
    $mail->Subject = 'Novo Pedido de ' . $name;
    $mail->Body = "Nome: $name\nEmail: $email\nMensagem: $message";

    if ($mail->send()) {
        // Insere no banco de dados
        $images = implode(',', $uploadedFiles);
        $stmt = $conn->prepare("INSERT INTO requests (name, email, message, images) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $message, $images);
        $stmt->execute();
        $stmt->close();

        echo json_encode(["status" => "success", "message" => "Pedido enviado com sucesso!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Falha no envio do email."]);
    }
} catch (Exception $e) {
    echo json_encode(["status" => "error", "message" => "Erro no email: " . $mail->ErrorInfo]);
}

// Fecha a conexão
$conn->close();
?>
