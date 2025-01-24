<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rita Cardoso</title>
    <link rel="stylesheet" href="./styles/home.css">
</head>
<body>
    <header class="hero">
        <nav class="navbar">
            <a href="#" class="logo">Rita Cardoso</a>
            <ul class="nav-links">
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#order-form">Services</a></li>
            </ul>
            <div class="social-links">
                <a href="https://www.instagram.com/rita.sousa.cardoso/" target="_blank" aria-label="Instagram">
                    <img src="./images/sociais/instagram_icon.png" alt="Instagram" />
                </a>
                <a href="https://www.linkedin.com/in/rita-cardoso-95566118b/" target="_blank" aria-label="LinkedIn">
                    <img src="./images/sociais/linkedin_icon.png" alt="LinkedIn" />
                </a>
                <a href="https://pt.pinterest.com/ritadesousacardoso/" target="_blank" aria-label="Pinterest">
                    <img src="./images/sociais/pinterest_icon.png" alt="Pinterest" />
                </a>
            </div>
        </nav>
        <div class="hero-content">
            <h1>We design <br> the future</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
        </div>
    </header>

    <section class="partners">
        <div class="image-container">
            <img src="./images/partners/partner1.jpeg" alt="Kreativ House">
            <img src="./images/partners/partner2.jpg" alt="V Design">
            <img src="./images/partners/partner3.jpg" alt="Interior">
            <img src="./images/partners/partner4.jpg" alt="Kitchen">
            <img src="./images/partners/partner5.jpg" alt="Heintz">
        </div>
    </section>

    <section class="about" id="about">
        <h2>About Me</h2>
        <div class="about-content">
            <p>
                Hi! I'm Rita Cardoso, a creative designer passionate about crafting unique experiences 
                through innovative design solutions. With years of experience in interior design, branding, 
                and visual storytelling, I aim to blend functionality with aesthetics in every project.
            </p>
            <p>
                Whether it's a cozy home redesign or a large-scale commercial project, I believe in the 
                power of design to transform spaces and elevate experiences. Let’s create something 
                beautiful together!
            </p>
        </div>
    </section>

    <section class="order-form" id="order-form">
        <h2>Make a Request</h2>
        <form action="order-form.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="message">Your Request:</label>
                <textarea id="message" name="message" rows="5" required placeholder="Describe your request"></textarea>
            </div>
            <div class="form-group">
                <label for="images">Upload Images (up to 3):</label>
                <input type="file" id="images" name="images[]" multiple accept="image/*" required>
            </div>
            <button type="submit" class="btn-submit">Submit Request</button>
        </form>
    </section>
</body>
</html>
