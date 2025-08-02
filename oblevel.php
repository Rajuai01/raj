
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
    <title>Obesity Levels</title>
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
            <h1>Choose <span>Exercise Level</span></h1>
            <p>" Hey There !, I'm Glad your here. You can now choose your Levels of Exercises you want"</p>
            <br><br>
            <a href="#levels" class="bmi">Click Here to Choose</a>
            </div>
    </section>


   <!-- Normalweight Levels  -->
   <section class="exercise-levels" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Obesity <span>Exercise Levels</span></h1>
    <br>
    <br>
    <br>
   </div>
   <div>
    <a href="obbeg.php" class="btn">Beginner</a>
    <br>
    <br>
    <br>
    
    <a href="obinter.php" class="btn">Intermediate</a>
    <br>
    <br>
    <br>
    <a href="obadv.php" class="btn">Advanced</a>
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
