<?php
// Habilitar mensagens de erro para depuração
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Incluir o autoloader do Composer
require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars($_POST['message']);
    $uploadsDir = 'uploads/';
    $uploadedFiles = [];

    // Verificar se o email é válido
    if (!$email) {
        die('Por favor, forneça um email válido.');
    }

    // Criar pasta de uploads se não existir
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0777, true);
    }

    // Processar uploads de arquivos
    if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
            $fileName = basename($_FILES['images']['name'][$index]);
            $targetFilePath = $uploadsDir . $fileName;

            // Mover o arquivo para a pasta de uploads
            if (move_uploaded_file($tmpName, $targetFilePath)) {
                $uploadedFiles[] = $targetFilePath;
            } else {
                echo "Falha ao fazer upload do arquivo: $fileName<br>";
            }
        }
    }

    // Enviar email com o PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor de email
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'artyy.gus@gmail.com'; // Seu email
        $mail->Password = 'dusx yxho vywa ekos'; // Sua senha do email
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Configurações do remetente e destinatário
        $mail->setFrom($email, $name);
        $mail->addAddress('artyy.gus@gmail.com'); // Seu email de recebimento

        // Adicionar arquivos anexados
        foreach ($uploadedFiles as $file) {
            $mail->addAttachment($file);
        }

        // Configuração do conteúdo do email
        $mail->isHTML(false);
        $mail->Subject = 'New Request from ' . $name;
        $mail->Body = "Name: $name\nEmail: $email\nMessage: $message";

        // Enviar o email
        if ($mail->send()) {
            echo "Pedido enviado com sucesso!";
        } else {
            echo "Falha ao enviar o pedido.";
        }
    } catch (Exception $e) {
        echo "Erro ao enviar o pedido: {$mail->ErrorInfo}";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
