
<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>BMI Exercise Categories</title>
</head>
<body>
<header>
    <a href="welcome.php" class="logo" id="home">Fit<span>Pilot</span></a>
    <div class="top-btn">
        <a href="logout.php" class="btn" id="logout-btn">Logout</a>
    </div>
</header>


    <!-- BMI category section code -->
    <section class="bmi-category" id="category">
        <h1 class="heading" data-aos="zoom-in-down">BMI Exercise<span> Categories</span></h1>
        <div class="services-content" data-aos="zoom-in-up">
            <div class="row">
                <a href="uwlevel.php">
                    
                <img src="assets/underweight.png" alt="uwlevel.php">
                <br>
                <br>
                <h4><span>Underweight</span> Exercises</h4>
                </a>
            </div>
            <div class="row">
            <a href="nwlevel.php">

                <img src="assets/normal (1).png" alt="nwlevel.php">
                <h4>Normalweight<span> Exercises</span></h4>
            </div>
            <div class="row">
            <a href="owlevel.php">

                <img src="assets/overweight (1).png" alt="owlevel.php">
                <h4>Overweight<span> Exercises</span></h4>
            </div>
            <div class="row">
            <a href="oblevel.php">
                <img src="assets/obesity (1).png" alt="oblevel.php">
                <h4>Obesity<span> Exercises</span></h4>
            </div>
        </div>
    
    </section>

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
</body>
</html>
