<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rita Cardoso</title>
    <link rel="stylesheet" href="./styles/myProjects/import.css">
    <link rel="icon" type="image/png" href="./images/logo/logoRC.png">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;700&display=swap"
        rel="stylesheet">

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const scrollToTopButton = document.getElementById("scrollToTop");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 300) {
                scrollToTopButton.style.display = "flex";
            } else {
                scrollToTopButton.style.display = "none";
            }
        });

        scrollToTopButton.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });
    </script>
</head>

<body>

    <!-- Botão de rolagem para o topo -->
    <button id="scrollToTop" class="scroll-to-top">&#8679;</button>

    <div id="popup" class="popup" style="display: none;"></div>

    <header class="head">
        <nav class="navbar">
            <div class="logo">
                <div class="logo-container">
                    <img src="./images/logo/logo1.png" alt="Logo Base" class="logo-base" />
                    <img src="./images/logo/logo2.png" alt="Logo Top" class="logo-top" />
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#order-form">Services</a></li>
            </ul>
            <div class="social-links">
                <a href="https://www.instagram.com/rita.sousa.cardoso/" target="_blank" aria-label="Instagram">
                    <img src="./images/sociais/instagram.png" alt="Instagram" />
                </a>
                <a href="https://www.linkedin.com/in/rita-cardoso-95566118b/" target="_blank" aria-label="LinkedIn">
                    <img src="./images/sociais/linkedin.png" alt="LinkedIn" />
                </a>
                <a href="https://pt.pinterest.com/ritadesousacardoso/" target="_blank" aria-label="Pinterest">
                    <img src="./images/sociais/pinterest.png" alt="Pinterest" />
                </a>
            </div>
        </nav>
        <div class="head-wrapper">
            <div class="head-content">
                <h1>Find Inspiration in My Projects</h1>
                <p>Explore a collection of my drawings, designs, and creative works.</p>
                <a href="#projects" class="btn">Explore now</a>
            </div>
            <div class="head-gallery">
                <div class="slider">
                    <div class="slides">
                        <img src="./images/partners/partner6.jpg" alt="Kreativ House">
                        <img src="./images/partners/partner7.jpg" alt="V Design">
                        <img src="./images/partners/partner2.jpg" alt="Interior">
                        <img src="./images/partners/partner4.jpg" alt="Kitchen">
                        <img src="./images/partners/partner5.jpg" alt="Heintz">
                    </div>
                </div>
            </div>
        </div>
    </header>



    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2025 Rita Cardoso. All Rights Reserved.</p>
            <nav class="footer-links">
                <a href="#about">About</a>
                <a href="#projects">Projects</a>
                <a href="#order-form">Services</a>
            </nav>
            <div class="footer-social-links">
                <a href="https://www.instagram.com/rita.sousa.cardoso/" target="_blank" aria-label="Instagram">
                    <img src="./images/sociais/instagram.png" alt="Instagram">
                </a>
                <a href="https://www.linkedin.com/in/rita-cardoso-95566118b/" target="_blank" aria-label="LinkedIn">
                    <img src="./images/sociais/linkedin.png" alt="LinkedIn">
                </a>
                <a href="https://pt.pinterest.com/ritadesousacardoso/" target="_blank" aria-label="Pinterest">
                    <img src="./images/sociais/pinterest.png" alt="Pinterest">
                </a>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        let index = 0;
        const images = document.querySelectorAll(".slides img"); // Seleciona todas as imagens dentro da .slides

        if (images.length === 0) {
            console.log("Nenhuma imagem encontrada na galeria.");
            return; // Se não houver imagens, o código não vai continuar
        }

        // Função para exibir a próxima imagem
        function showNextImage() {
            images.forEach((img, i) => {
                img.style.opacity = i === index ? "1" :
                "0"; // Mostra a imagem correta e esconde as outras
            });

            index = (index + 1) % images.length; // Avança o índice, voltando ao início após a última imagem
        }

        // Exibe a primeira imagem logo ao carregar a página
        showNextImage();

        // Configura o intervalo para trocar a imagem a cada 5 segundos
        setInterval(showNextImage, 5000);
    });
    </script>

</body>

</html>