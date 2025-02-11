<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rita Cardoso</title>
    <link rel="stylesheet" href="./styles/index/import.css">
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

    <header class="hero">
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
        <div class="hero-content">
            <h1>We design <br> the future</h1>
            <p>I turn ideas into reality. I combine innovative design with functionality to create
                spaces and projects that tell unique stories.</p>
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

</body>

</html>