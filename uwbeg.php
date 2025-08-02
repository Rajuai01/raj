
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
    <title>Underweight Beginner </title>
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
            <h1>Underweight Beginner<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- beginner plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Workout Plan for<span> Beginner</span></h1>
    <br>
    <br>
    <div">
    <h3 class="days"><span>Sunday :</span> Full Body Strength</h3>
    <br>
    <div class="exercise">
        <h5>Bodyweight Squats <span>- 2 sets of 10 reps</span></h5>
        <img src="assets\uwbeg\squats.gif" width="180px" height="180px" alt="Bodyweight Squats">
        <br>
        <br>
        <p>(Focus on proper form: keep your chest up and knees aligned with toes.)</p>
    </div>
    <div class="exercise">
        <h5>Wall Push-Ups<span> - 2 sets of 10 reps</span></h5>
        <img src="assets\uwbeg\wall.gif" width="180px" height="180px" alt="Wall Push-Ups">
        <br>
        <br>

        <p>(Stand facing a wall, place your hands on it, and perform push-ups at an angle.)</p>
    </div>
    <div class="exercise">
        <h5>Glute Bridges<span> - 2 sets of 12 reps</span></h5>
        <img src="assets\uwbeg\glutebridge.gif" width="180px" height="180px" alt="Glute Bridges">
        <br>
        <br>
        <p>(Lie on your back, knees bent, and lift your hips toward the ceiling.)</p>
    </div>
    <div class="exercise">
        <h5>Plank (Knee Modification)<span> - 2 sets of 15-20 seconds</span></h5>
        <img src="assets\uwbeg\plank.gif" width="180px" height="180px" alt="Plank">
        <br>
        <br>
        <p>(Keep your body straight, resting on your knees if needed.)</p>
    </div>
    <div class="exercise">
        <h5>Standing Side Leg Lifts -<span> 2 sets of 10 reps per leg</span></h5>
        <img src="assets\uwbeg\side leg lifts.gif" width="180px" height="180px" alt="Standing Side Leg Lifts">
        <p>(Stand tall and lift one leg to the side, keeping it straight.)</p>
    </div>
    <br>
    <br>
    <h3 class="days"><span>Monday:</span> Rest or Light Activity</h3>

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
<h3 class="days"><span>Tuesday:</span>  Core and Stability</h3>
<div class="exercise">
    <h5>Modified Sit-Ups <span> -3 sets of 10 reps</span></h5>
    <img src="assets\uwbeg\situps.gif" width="180px" height="180px" alt="Modified Sit-Ups">
    <br>
    <br>
    <p>(Bend your knees and keep your feet flat on the floor.)</p>
</div>
<div class="exercise">
<h5>Bird Dog <span>- 3 sets of 10 reps per side</span></h5>
<img src="assets\uwbeg\bird dog.gif" width="180px" height="180px" alt="Bird Dog">
<br>
<br>
<p>(On all fours, extend one arm and the opposite leg, hold for 2 seconds.)</p>
    </div>
    <div class="exercise">
<h5>Standing Knee-to-Elbow <span>- 3 sets of 10 reps per side</span></h5>
<img src="assets\uwbeg\standing.gif" width="180px" height="180px" alt="Standing Knee-to-Elbow">
<br>
<br>
<p>(Engage your core by bringing your knee to the opposite elbow.)</p>
</div>
<div class="exercise">
<h5> Side-Lying Leg Lifts <span>- 3 sets of 10 reps per leg</span></h5>
<img src="assets\uwbeg\sidelying.gif" width="180px" height="180px" alt="Side-Lying Leg Lifts">
<br>
<br>
<p>(Lie on your side and lift your top leg slowly.)</p>
</div>
<div class="exercise">
<h5>Dead Bug<span>- 3 sets of 10 reps</span></h5>
<img src="assets\uwbeg\deadbug.gif" width="180px" height="180px" alt="Dead Bug">
<br>
<br>
<p>(Lie on your back, extend one arm and the opposite leg, alternate.)</p>
</div>

<br>
<br>
<h3 class="days"><span>Wednesday :</span>Lower Body Focus</h3>
<div class="exercise">
<h5>Step-Back Lunges<span> - 3 sets of 8 reps per leg</span></h5>
<img src="assets\uwbeg\stepback.gif" width="180px" height="180px" alt="Step-Back Lunges">
<br>
<br>
<p>(Step one leg back and lower into a lunge, keeping your front knee over your ankle.)</p>
</div>
<div class="exercise">
<h5>Calf Raises <span>- 3 sets of 15 reps</span></h5>
<img src="assets\uwbeg\calf.gif" width="180px" height="180px" alt="Calf Raises">
<br>
<br>
<p>(Stand on your toes, then slowly lower back down.)</p>
</div>

<div class="exercise">
<h5>Side-Lying Clamshells <span>- 3 sets of 12 reps per side</span></h5>
<img src="assets\uwbeg\clamshell.gif" width="180px" height="180px" alt="Side-Lying Clamshells">
<br>
<br>
<p>(Lie on your side, knees bent, and open your top knee like a clamshell.)</p>
</div>
<div class="exercise">
<h5>Wall Sit<span> - 3 sets of 15-20 seconds</span></h5>
<img src="assets\uwbeg\wall-sit.gif" width="180px" height="180px" alt="Wall Sit">
<br>
<br>
<p>(Slide your back down a wall until your thighs are parallel to the floor.)</p>
</div>
<div class="exercise">
<h5>Standing Marching in Place <span> - 3 sets of 20 steps</span></h5>
<img src="assets\uwbeg\march.gif" width="180px" height="180px" alt="Standing Marching in Place">
<br>
<br>
<p>(Lift your knees high while standing in place.)</p>
</div>
<br>
<br>
<h3 class="days"><span>Thursday :</span> Upper Body and Focus</h3>
<div class="exercise">
<h5>Incline Push-Ups (Using a Table or Chair) <span>- 3 sets of 10 reps</span></h5>
<img src="assets\uwbeg\inclin.gif" width="180px" height="180px" alt="Incline Push-Ups">
<br>
<br>
<p>(Place your hands on a sturdy surface and perform push-ups at an angle.)</p>
</div>
<div class="exercise">
<h5>Superman Hold<span> - 3 sets of 15 seconds</span></h5>
<img src="assets\uwbeg\super.gif" width="180px" height="180px" alt="Superman Hold">
<br>
<br>
<p>(Lie on your stomach, lift your arms and legs off the ground, and hold.)</p>
</div>
<div class="exercise">
<h5>Arm Circles<span> - 3 sets of 10 reps forward and backward</span></h5>

<img src="assets\uwbeg\arm circles.gif" width="180px" height="180px" alt="Arm Circles">
<br>
<br>
<p>(Extend your arms out to the sides and make small circles.)</p>
</div>
<div class="exercise">
<h5>Cat-Cow Stretch<span> - 3 sets of 10 reps</span></h5>
<img src="assets\uwbeg\catcow.gif" width="180px" height="180px" alt="Cat-Cow Stretch">
<br>
<br>
<p>(On all fours, alternate between arching and rounding your back.)</p>
</div>
<div class="exercise">
<h5>Shoulder Blade Squeezes<span> - 3 sets of 12 reps</span></h5>
<img src="assets\uwbeg\shoulder.gif" width="180px" height="180px" alt="Shoulder Blade Squeezes">
<br>
<br>
<p>(Sit or stand, squeeze your shoulder blades together, and hold for 2 seconds.)</p>
</div>
<br>
<br>
<h3 class="days"><span>Friday:</span> Rest or Light Activity</h3>
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
<h3 class="days"><span>Saturday :</span> Active Recovery and Flexibility</h3>
<div class="exercise">
<h5>Sun Salutations (Yoga)<span> - 3 rounds</span></h5>
<img src="assets\uwbeg\sun.gif" width="180px" height="180px" alt="Sun Salutations (Yoga)">
<br>
<br>
<p>(A gentle flow to stretch and strengthen your entire body.)</p>
</div>
<div class="exercise">
<h5>Standing Forward Fold<span> - Hold for 30 seconds</span></h5>
<img src="assets\uwbeg\fold.gif" width="180px" height="180px" alt="Standing Forward Fold">
<br>
<br>
<p>(Bend at your hips and let your upper body hang loosely.)</p>
</div>
<div class="exercise">
<h5>Child's Pose <span>- Hold for 30 seconds</span></h5>
<img src="assets\uwbeg\child.gif" width="180px" height="180px" alt="Child's Pose">
<br>
<br>
<p>(Sit back on your heels, stretch your arms forward, and relax.)</p>
</div>
<div class="exercise">
<h5>Seated Spinal Twist<span> - Hold for 20 seconds per side</span></h5>
<img src="assets\uwbeg\spinal twist.png" width="180px" height="180px" alt="Seated Spinal Twist">
<br>
<br>
<p>(Sit with one leg crossed over the other and twist your torso.)</p>
</div>
<div class="exercise">
<h5>Deep Breathing Exercises<span> - 5 minutes</span></h5>
<img src="assets\uwbeg\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
<br>
<br>
<p>(Sit comfortably, inhale deeply through your nose, and exhale slowly.)</p>
</div>
<div>
<h1 class="heading" data-aos="zoom">Tips for<span> Success :</span></h1>
</div>
<div class="tip">
<p><span>Progression :</span> Start with the suggested reps and sets. As you get stronger, increase reps or add a third set.
<br>
<br>
<span>Form First :</span> Focus on proper form to avoid injury. If an exercise feels too hard, modify it (e.g., knee push-ups instead of regular push-ups).
<br>
<br>
<span>Rest :</span> Take 30-60 seconds of rest between sets or exercises.
<br>
<br>
<span>Nutrition :</span> Since you're underweight, ensure you're eating enough calories and protein to support muscle growth and recovery. Include nutrient-dense foods like nuts, eggs, lean meats, whole grains, and healthy fats.
<br>
<br>
<span>Hydration :</span> Drink plenty of water before, during, and after your workouts.
<br>
<br>
This plan is designed to be gentle yet effective for beginners. Stick with it for 4-6 weeks, and then you can gradually increase intensity or add more advanced exercises. Let me know if you need further guidance! 💪
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
