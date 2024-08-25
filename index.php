<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Personal Website</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header Section -->
    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <h1>Your Name</h1>
                </div>
                <ul class="nav-links">
                    <li><a href="#about">About</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Welcome to My Personal Website</h2>
            <p>Hi, I'm [Your Name], a [Your Profession] based in [Your City]. I specialize in [Your Specialty].</p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2>About Me</h2>
            <p>I'm a [Your Profession] with a passion for [Your Passion]. With experience in [Your Skills or Experience], I enjoy creating solutions that make a difference.</p>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <div class="portfolio-items">
                <div class="portfolio-item">
                    <img src="https://via.placeholder.com/300" alt="Project 1">
                    <h3>Project 1</h3>
                    <p>Description of your project 1.</p>
                </div>
                <div class="portfolio-item">
                    <img src="https://via.placeholder.com/300" alt="Project 2">
                    <h3>Project 2</h3>
                    <p>Description of your project 2.</p>
                </div>
                <div class="portfolio-item">
                    <img src="https://via.placeholder.com/300" alt="Project 3">
                    <h3>Project 3</h3>
                    <p>Description of your project 3.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2>Contact Me</h2>
            <p>If you'd like to get in touch, please fill out the form below:</p>
            <form action="submit_form.php" method="POST">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <p>&copy; 2024 Your Name. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>