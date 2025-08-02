
<p?php
session_start();
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
    <title>Obesity Beginner </title>
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
            <h1>Obesity Beginner<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   
   <h1 class="heading" data-aos="zoom">7-Day Home Workout Plan for Fat Loss (Beginner Level, No Equipment)</h1>
    <br>
    <br>
    
    <h3 class="days"><span>Sunday :</span> Full-Body Fat Burn</h3>
    <br>
    <div class="exercise">
        <h5>Marching in Place <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obeg\march.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Wall Push-ups <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obeg\wall.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Chair Squats <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obeg\chair.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Leg Lifts <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\seatedleg.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Knee Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\standingknee.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obeg\arm circles.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Twists <span>– 3 sets × 15 reps (each side)</span></h5>
        <br>
        <img src="assets\obeg\seatedtwist.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Step Touch <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obeg\steptouch.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Side Leg Lifts <span>– 3 sets × 12 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\standingside.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Wall Sit <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obeg\wallsit.gif" height="180px" width="180px" >
        <br>
    </div>
        
    <br>
    <br>
    <h3 class="days"><span>Monday:</span> Active Recovery & Streching</h3>

    <div class="rest">
    <img src="assets\uwbeg\rest.gif" width="180px" height="180px" alt="Rest">
    <br>
    <br>
    <p>Go for a 20-30 minute walk, do light stretching, or try to have good sleep to improve flexibility and recovery.</p>
</div>
<br>
<br>
<br>
<br>
<h3 class="days"><span>Tuesday:</span> Lower Body & Cardio</h3>

<div class="exercise">
    <h5>High Knee Marching <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\highkneemarch.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Step Touch <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\steptouch.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Chair Squats <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\obeg\chair.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Seated Leg Lifts <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\seatedleg.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Standing Side Leg Lifts <span>– 3 sets × 12 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\standingside.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Standing Knee Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\standingknee.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Wall Sit <span>– 3 sets × 30 sec hold</span></h5>
    <br>
    <img src="assets\obeg\wallsit.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Seated Twists <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\obeg\seatedtwist.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obeg\arm circles.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Step Touch <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\steptouch.gif" height="180px" width="180px" >
    <br>
</div>


<br>
<br>
<h3 class="days"><span>Wednesday :</span>Upper Body & Core</h3>
<div class="exercise">
    <h5>Wall Push-ups <span>– 3 sets × 12 reps</span></h5>
    <br>
    <img src="assets\obeg\wall.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obeg\arm circles.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Seated Twists <span>– 3 sets × 15 reps (each side)</span></h5>
    <br>
    <img src="assets\obeg\seatedtwist.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Standing Knee Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\standingknee.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Chair Squats <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\obeg\chair.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Standing Side Leg Lifts <span>– 3 sets × 12 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\standingside.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obeg\flutter.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Marching in Place <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\march.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Wall Sit <span>– 3 sets × 30 sec hold</span></h5>
    <br>
    <img src="assets\obeg\wallsit.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Seated Leg Lifts <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\obeg\seatedleg.gif" height="180px" width="180px" >
    <br>
</div>

<br>
<br>
<h3 class="days"><span>Thursday :</span> Cardio & Fat Loss Boost</h3>
<div class="exercise">
    <h5>Step Touch <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\steptouch.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Marching in Place <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\march.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>High Knee Marching <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obeg\highkneemarch.gif" height="180px" width="180px" >
    <br>
</div>


<div class="exercise">
    <h5>Standing Knee Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\standingknee.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obeg\arm circles.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Seated Twists <span>– 3 sets × 15 reps (each side)</span></h5>
    <br>
    <img src="assets\obeg\seatedtwist.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obeg\flutter.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Standing Side Leg Lifts <span>– 3 sets × 12 reps (each leg)</span></h5>
    <br>
    <img src="assets\obeg\standingside.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Chair Squats <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\obeg\chair.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Wall Sit <span>– 3 sets × 30 sec hold</span></h5>
    <br>
    <img src="assets\obeg\wallsit.gif" height="180px" width="180px" >
    <br>
</div>
    

<br>
<br>
<h3 class="days"><span>Friday:</span> Full-Body Strength & Toning</h3>

    <div class="exercise">
        <h5>Wall Push-ups <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obeg\wall.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Chair Squats <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obeg\chair.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Side Leg Lifts <span>– 3 sets × 12 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\standingside.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Leg Lifts <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\seatedleg.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obeg\arm circles.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Twists <span>– 3 sets × 15 reps (each side)</span></h5>
        <br>
        <img src="assets\obeg\seatedtwist.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Knee Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\standingknee.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Marching in Place <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obeg\march.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Wall Sit <span>– 3 sets × 30 sec hold</span></h5>
        <br>
        <img src="assets\obeg\wallsit.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obeg\flutter.gif" height="180px" width="180px" >
        <br>
    </div>

<br>
<br>
<br>
<br>
<h3 class="days"><span>Saturday :</span> Cardio & Endurance Training</h3>
    <div class="exercise">
        <h5>High Knee Marching <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obeg\highkneemarch.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Step Touch <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obeg\steptouch.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Side Leg Lifts <span>– 3 sets × 12 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\standingside.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Chair Squats <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obeg\chair.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Knee Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\obeg\standingknee.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Twists <span>– 3 sets × 15 reps (each side)</span></h5>
        <br>
        <img src="assets\obeg\seatedtwist.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obeg\arm circles.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Wall Sit <span>– 3 sets × 30 sec hold</span></h5>
        <br>
        <img src="assets\obeg\wallsit.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obeg\flutter.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Marching in Place <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obeg\march.gif" height="180px" width="180px" >
        <br>
    </div>


<div>
<h1 class="heading" data-aos="zoom"> Key Tips for<span> Fat Loss :</span></h1>
</div>
<div class="tip">
<p>
<span>Stay Consistent :</span> Stick to the plan daily.
<br>
<br>
<span>Eat a Healthy Diet :</span> Include protein, fiber, and healthy fats. Avoid processed foods and sugary drinks.
<br>
<br>
<span>Rest :</span> Take 30 seconds of rest between sets or exercises.
<br>
<br>
<span>Drinking Water :</span> Stay hydrated to boost metabolism . 
<br>
<br>
<span>Increase Movement :</span> Walk more, take stairs, and stay active.
<br>
<br>
<span> Track Progress –</span> Measure weight, waist, or take photos every 2 weeks.
<br>
<br>
</p>
</div>
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
