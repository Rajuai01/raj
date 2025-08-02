
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
    <title>YOGA Categories</title>
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
        <h1 class="heading" data-aos="zoom-in-down">YOGA<span> Categories</span></h1>
        <br>
        <br>
        <div class="services-content" data-aos="zoom-in-up">
            <div class="row">
            <a href="weight-loss.php">
                <img src="assets/yoga/weightloss.jpg" alt="Weight Loss & Fat Burn Yoga">
                <h4>Weight Loss & Fat Burn<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="strength.php">
                <img src="assets/yoga/muscle.jpg" alt="Strength & Muscle Building Yoga">
                <h4>Strength & Muscle Building<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="flexibility.php">
                <img src="assets/yoga/flexibility.jpg" alt="Flexibility & Mobility Yoga">
                <h4>Flexibility & Mobility<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="stress-relief.php">
                <img src="assets/yoga/stress.jpg" alt="Stress Relief & Relaxation Yoga">
                <h4>Stress Relief & Relaxation<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="pain-relief.php">
                <img src="assets/yoga/pain.jpg" alt="Pain Relief & Recovery Yoga">
                <h4>Pain Relief & Recovery<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="digestion.php">
                <img src="assets/yoga/digestion.jpg" alt="Yoga for Digestion & Gut Health">
                <h4>Yoga for Digestion & Gut<span> Health</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="heart-health.php">
                <img src="assets/yoga/heart.jpg" alt="Heart Health & Blood Circulation Yoga">
                <h4>Heart Health & Blood Circulation<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="hormonal-balance.php">
                <img src="assets/yoga/hormonal.jpg" alt="Hormonal Balance & Women's Health Yoga">
                <h4>Hormonal Balance & Women's<span> Health Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="immunity.php">
                <img src="assets/yoga/immunity.jpg" alt="Immunity-Boosting Yoga">
                <h4>Immunity-Boosting<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="morning-energy.php">
                <img src="assets/yoga/energy.jpg" alt="Morning Energy-Boosting Yoga">
                <h4>Morning Energy-Boosting<span> Yoga</span></h4>
            </a>
        </div>
        <div class="row">
            <a href="it-employees.php">
                <img src="assets/yoga/it.jpg"  alt="Yoga asanas for IT employees">
                <h4>Yoga asanas for<span> IT employees</span></h4>
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
