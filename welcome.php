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
    <title>Welcome to FitPilot</title>
</head>
<body>
<header>
    <a href="welcome.php" class="logo" id="home">Fit<span>Pilot</span></a>
    <div class="top-btn">
        <a href="logout.php" class="btn" id="logout-btn">Logout</a>
    </div>
</header>

<section class="welcome" id="welcome">
    <div class="welcome-content" data-aos="zoom-in">
        <h1>Welcome to <span>FitPilot</span>, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h1>
        <p>" Hey Buddy! You’re one step closer to your best self." <br>" Let’s move, breathe, and grow together with FitPilot! 💙 "</p>
        <br><br>
        <a href="#services" class="btn">Explore</a>
        <br>
        <br>
        <br>
        <br>
        <a href="#bmi-calculator" class="bmi">Click Here to Calculate Your BMI</a>
    </div>
</section>

<!-- BMI Calculator Section -->
<section class="bmi-calculator" id="bmi-calculator" data-aos="zoom-in-down">
    <div class="bmi-content" data-aos="zoom-in-up">
        <h2>Calculate Your BMI</h2>
        <form id="bmi-form" onsubmit="calculateBMI(); return false;">
            <div class="input-container">
                <label for="height">Height:</label>
                <input type="number" id="height" placeholder="Height (cm)" required>
            </div>
            <div class="input-container">
                <label for="weight">Weight:</label>
                <input type="number" id="weight" placeholder="Weight (kg)" required>
            </div>
            <button type="submit" class="submit-btn">Calculate BMI</button>
        </form>
        <div class="bmi-result">
            <h3 id="result"></h3>
        </div>
    </div>
</section>

<!-- Service section code -->
<section class="services" id="services">
    <h1 class="heading" data-aos="zoom-in-down">Our <span>Services</span></h1>
    <div class="services-content" data-aos="zoom-in-up">
        <div class="row">
            <a href="bmi_exercises.php">
                <img src="assets/Image 1.png" alt="bmi_exercises.php">
                <h4 class="gym"><span>GYM</span> (Without Equipment)</h4>
            </a>
        </div>
        <div class="row">
            <a href="yoga.php">
                <img src="assets/yoga.jpg" alt="yoga.php">
                <h4><span>YOGA</span></h4>
            </a>
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