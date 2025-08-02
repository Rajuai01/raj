<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>FitPilot</title>
</head>
<body>
    <header>
        <a href="#" class="logo">Fit<span>Pilot</span></a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <ul class="navbar" id="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="top-btn">
            <a href="#" class="nav-btn" id="signup-btn">Sign Up</a>
            <a href="#" class="btn" id="login-btn">Login</a>
        </div>
    </header>

    <!-- Home Section Code -->
    <section class="home" id="home">
        <div class="home-content" data-aos="zoom-in-up">
            <h3>Be Fit and Healthy</h3>
            <h1>With our Fitness training</h1>
            <h3><span class="muliple-text"></span></h3>
            <p>"Unlock the power of movement and mindfulness. Embrace a journey where strength comes from within, and peace flows through every breath. Whether you're stretching into stillness or energizing your body with every step, find balance, harmony, and wellness in every moment. Your transformation starts here!"</p>
            <a href="#" class="btn" id="join-us-btn">Get Started !</a>
        </div>
        <div class="home-img" data-aos="zoom-in">
            <img src="assets/home.png" alt="Home Image">
        </div>
    </section>

    <!-- About Section Code -->
    <section class="about" id="about">
        <div class="about-img" data-aos="zoom-in-down">
            <img src="assets/bg.jpg" alt="About Image">
        </div>
        <div class="about-content" data-aos="zoom-in-up">
            <h2 class="heading">About <span>Us</span></h2>
            <p>Welcome to <span>FitPilot</span> where fitness meets freedom! We believe in a natural, equipment-free approach to wellness, helping you build strength, flexibility, and inner peace through mindful movement. Whether you're stretching into stillness or powering up with bodyweight exercises, our goal is to guide you toward a healthier, more balanced life. No machines, no limits—just you, your body, and a journey toward total well-being. <br> Let’s move, breathe, and transform together! </br> <br> <span> Your fitness. Your flow. Your journey. </span></p>
        </div>
    </section>

    <!-- Contact Section Code -->
    <section class="contact" id="contact" data-aos="zoom-in-down">
        <h2 class="heading">Contact <span>Us</span></h2>
        <div class="contact-content" data-aos="zoom-in-up">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                <p>If you have any questions or need further information, feel free to contact us.</p>
                <ul>
                    <li><i class='bx bxs-phone'></i> +91 9160481270</li>
                    <li><i class='bx bxs-envelope'></i> info@fitpilot.com</li>
                    <li><i class='bx bxs-map'></i> Banglore - 560016 , India</li>
                </ul>
            </div>
            <div class="contact-form" data-aos="zoom-in-down">
                <h3>Send Us a Message</h3>
                <?php
                if (isset($_SESSION['message_success'])) {
                    echo "<p style='color:green'>" . $_SESSION['message_success'] . "</p>";
                    unset($_SESSION['message_success']);
                }
                if (isset($_SESSION['message_error'])) {
                    echo "<p style='color:red'>" . $_SESSION['message_error'] . "</p>";
                    unset($_SESSION['message_error']);
                }
                ?>
                <form action="submit_message.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Login Modal -->
<div id="login-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-login">&times;</span>
        <h2>Login to FitPilot</h2>
        <?php
        if (isset($_SESSION['error'])) {
            echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['login_success'])) {
            echo "<p style='color:green'>" . $_SESSION['login_success'] . "</p>";
            unset($_SESSION['login_success']);
        }
        ?>
        <form action="server.php" method="post">
            <input type="hidden" name="login" value="1">
            <input type="email" name="email" placeholder="Enter Email" required>
            <div class="pass">
    <input type="password" name="password" id="login-password" placeholder="Enter Password" required>
    <i class="fas fa-eye" id="toggle-login-password" onclick="togglePassword('login-password', 'toggle-login-password')"></i>
</div>
            <button type="submit" class="btn">Login</button>
        </form>
        <p>Don't have an account? <a href="#" id="open-signup">Sign Up</a></p>
    </div>
</div>

    <!-- Signup Modal -->
<div id="signup-modal" class="modal">
    <div class="modal-content">
        <span class="close" id="close-signup">&times;</span>
        <h2>Sign Up for FitPilot</h2>
        <?php
        if (isset($_SESSION['signup_error'])) {
            echo "<p style='color:red'>" . $_SESSION['signup_error'] . "</p>";
            unset($_SESSION['signup_error']);
        }
        if (isset($_SESSION['signup_success'])) {
            echo "<p style='color:green'>" . $_SESSION['signup_success'] . "</p>";
            unset($_SESSION['signup_success']);
        }
        ?>
        <form action="server.php" method="POST">
            <input type="hidden" name="register" value="1">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <div class="pass">
    <input type="password" name="password" id="signup-password" placeholder="Your Password (must contain 6 letters) " required>
    <i class="fas fa-eye" id="toggle-signup-password" onclick="togglePassword('signup-password', 'toggle-signup-password')"></i>
</div>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        <p>Already have an account? <a href="#" id="open-login">Login</a></p>
    </div>
</div>

    <!-- Footer section code -->
    <footer class="footer">
        
        <p class="copyright">
            &copy; FitPilot 2025 - All Rights Reserved
        </p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1400,
        });
    </script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="script.js"></script>
    <script>
    function togglePassword(fieldId, toggleId) {
        var field = document.getElementById(fieldId);
        var toggle = document.getElementById(toggleId);
        if (field.type === "password") {
            field.type = "text";
            toggle.classList.remove("fa-eye");
            toggle.classList.add("fa-eye-slash");
        } else {
            field.type = "password";
            toggle.classList.remove("fa-eye-slash");
            toggle.classList.add("fa-eye");
        }
    }
</script>
</body>
</html>