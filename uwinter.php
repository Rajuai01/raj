
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
            <h1>Underweight Intermediate<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- intermediate plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Workout Plan for<span> Intermediate</span></h1>
    <br>
    <br>
    <div">
    <h3 class="days"><span>Sunday :</span> Full Body Strength</h3>
    <br>
    <div class="exercise">
        <h5>Pistol Squats(Assisted) <span>- 3 sets of 8 reps per leg</span></h5>
        <br>
        <img src="assets\uwinter\pistol.gif" width="180px" height="180px" alt="Pistol Squats">
        <br>
        <br>
        <p>(Sit back into a squat on one leg, using a chair for support if needed.)</p>
        <br>
    </div>
    <div class="exercise">
        <h5>Push-Ups <span>- 3 sets of 12-15 reps</span></h5>
        <br>
        <img src="assets\uwinter\pushups.gif" width="180px" height="180px" alt="Push-Ups">
        <br>
        <br>
        <p>(Keep your body straight and lower yourself until your chest nearly touches the floor.)</p>
    </div>
    <div class="exercise">
        <h5>Single-Leg Glute Bridges <span>- 3 sets of 10 reps per leg</span></h5>
        <br>
        <img src="assets\uwinter\singleleg.gif" width="180px" height="180px" alt="Single-Leg Glute Bridges">
        <br>
        <br>
        <p>(Lift one leg and drive through the heel of the other leg to raise your hips.)</p>
    </div>
    <div class="exercise">
        <h5>Plank with Shoulder Taps<span> - 3 sets of 20 taps (10 per side)</span></h5>
        <br>
        <img src="assets\uwinter\Plankshoulder.gif" width="180px" height="180px" alt="Plank with Shoulder Taps">   
        <br>
        <br>
        <p>(In a plank position, tap your opposite shoulder while keeping your hips stable.)</p>

    </div>
    <div class="exercise">
        <h5>Mountain Climbers<span>-3 sets of 30 seconds</span></h5>
        <br>
        <img src="assets\uwinter\Mountain_Climbers.gif" width="180px" height="180px" alt="Mountain Climbers">
        <br>
        <br>
        <p>(Drive your knees toward your chest in a fast, alternating motion.)</p>
        
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
    
</div>
<div class="exercise">
    <h5>Bicycle Crunches <span>- 3 sets of 15 reps per side </span></h5>
    <br>
    <img src="assets\uwinter\bicycle.gif" width="180px" height="180px" alt="Bicycle Crunches">
    <br>
    <br>
    <p>(Lie on your back, bring your opposite elbow to your knee in a cycling motion.)</p>
    </div>
<div class="exercise">
    <h5>Side Plank (Knee Modification)<span> - 3 sets of 20 seconds per side</span></h5>
    <br>
    <img src="assets\uwinter\side plank.gif" width="180px" height="180px" alt="Side Plank">
    <br>
    <br>
    <p>(Rest on your forearm and knees, lifting your hips to form a straight line.)</p>
</div>
<div class="exercise">
    <h5>Russian Twists <span> - 3 sets of 20 twists (10 per side)</span></h5>
    <br>
    <img src="assets\uwinter\russian.gif" width="180px" height="180px" alt="Russian Twists">
    <br>
    <br>
    <p>(Sit on the floor, lean back slightly, and twist your torso side to side.)</p>

</div>
<div class="exercise">
    <h5>Leg Raises <span> - 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwinter\Leg_Lifts_GIF.gif" width="180px" height="180px" alt="Leg Raises">
    <br>
    <br>
    <p>(Lie on your back, keep your legs straight, and lift them to 90 degrees.)</p>

</div>
<div class="exercise">
    <h5>Superman Hold <span> - 3 sets of 20 seconds</span></h5>
    <br>
    <img src="assets\uwinter\super.gif" width="180px" height="180px" alt="Superman Hold">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs off the ground, and hold.)</p>

</div>
<br>
<br>
<h3 class="days"><span>Wednesday :</span>Lower Body Focus</h3>
<div class="exercise">

</div>
<div class="exercise">
    <h5>Bulgarian Split Squats (Using a Chair)<span> - 3 sets of 10 reps per leg</span></h5>
    <br>
    <img src="assets\uwinter\bulgarian.gif" width="180px" height="180px" alt="Bulgarian Split Squats">
    <br>
    <br>
    <p>(Place one foot behind you on a chair and lower into a lunge.)</p>

</div>

<div class="exercise">
    <h5>Calf Raises (Single-Leg)<span>- 3 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\uwinter\calf.gif" width="180px" height="180px" alt="Calf Raises">
    <br>
    <br>
    <p>(Stand on one leg and raise your heel as high as possible.)</p>

</div>

<div class="exercise">
    <h5>Side-Lying Leg Circles<span> - 3 sets of 10 circles per leg</span></h5>
    <br>
    <img src="assets\uwinter\sidelying circles.gif" width="180px" height="180px" alt="Side-Lying Leg Circles">
    <br>
    <br>
    <p>(Lie on your side, lift your top leg, and draw small circles in the air.)</p>

</div>

<div class="exercise">
    <h5>Wall Sit with Leg Lift<span> - 3 sets of 15 seconds per leg</span></h5>
    <br>
    <img src="assets\uwinter\wallsitleg.gif" width="180px" height="180px" alt="Wall Sit with Leg Lift">
    <br>
    <br>
    <p>(Hold a wall sit and alternate lifting one leg at a time.)</p>

</div>
<div class="exercise">
    <h5>Jump Squats <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwinter\jumpsquats.gif" width="180px" height="180px" alt="Jump Squats">
    <br>
    <br>
    <p>(Explode upward from a squat position, landing softly.)</p>
</div>
<br>
<br>
<h3 class="days"><span>Thursday :</span> Upper Body and Posture</h3>
<div class="exercise">
    <h5>Diamond Push-Ups<span> - 3 sets of 10-12 reps</span></h5>
    <br>
    <img src="assets\uwinter\Diamond.gif" width="180px" height="180px" alt="Diamond Push-Ups">
    <br>
    <br>
    <p>(Place your hands close together under your chest to target triceps.)</p>

</div>
<div class="exercise">
    <h5>Superman Pulls<span> - 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwinter\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, and pull your elbows back.)</p>

</div>
<div class="exercise">
    <h5>Plank to Downward Dog<span> - 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\uwinter\dog.gif" width="180px" height="180px" alt="Plank to Downward Dog">
    <br>
    <br>
    <p>(Move from a plank position to a downward dog position, stretching your hamstrings.)</p>

</div>
<div class="exercise">
<h5>Arm Circles (Weighted Feel)<span> - 3 sets of 15 reps forward and backward</span></h5>
<br>
<img src="assets\uwinter\armcircles.gif" width="180px" height="180px" alt="Arm Circles">    
<br>
<br>
<p>(Extend your arms and make large, controlled circles.)</p>

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
    <h5>Sun Salutations (Yoga)<span> - 4 rounds</span></h5>
    <br>
    <img src="assets\uwinter\sun.gif" width="180px" height="180px" alt="Sun Salutations">
    <br>
    <br>
    <p>(A dynamic flow to stretch and strengthen your entire body.)</p>

</div>
<div class="exercise">
    <h5>Standing Forward Fold with Twist<span> - Hold for 20 seconds per side</span></h5>
    <br>
    <img src="assets\uwinter\forwardfold.gif" width="180px" height="180px" alt="Standing Forward Fold with Twist">
    <br>
    <br>
    <p>(Bend forward and twist your torso to one side, reaching for the opposite foot.)</p>

</div>
<div class="exercise">
    <h5>Pigeon Pose <span>- Hold for 30 seconds per side</span></h5>
    <br>
    <img src="assets\uwinter\pigeon.gif" width="180px" height="180px" alt="Pigeon Pose">
    <br>
    <br>
    <p>(Stretch your hip flexors by bringing one leg forward in a bent position.)</p>
</div>
<div class="exercise">
    <h5>Seated Forward Fold<span> - Hold for 30 seconds</span></h5>
    <br>
    <img src="assets\uwinter\seatedforward.gif" width="180px" height="180px" alt="Seated Forward Fold">
    <br>
    <br>
    <p>(Sit with your legs straight and reach for your toes.)</p>

</div>
<div class="exercise">
    <h5>Deep Breathing Exercises<span> - 5 minutes</span></h5>
    <br>
    <img src="assets\uwinter\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
    <br>
    <br>
    <p>(Sit comfortably, inhale deeply through your nose, and exhale slowly.)</p>

</div>
<div>
<h1 class="heading" data-aos="zoom">Tips for<span> Success :</span></h1>
</div>
<div class="tip">
<p><span>Progressive Overload :</span> Gradually increase reps, sets, or intensity as you get stronger (e.g., move from 12 to 15 reps).
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
This plan is designed to be gentle yet effective for Intermediate. Stick with it for 4-6 weeks, and then you can gradually increase intensity or add more advanced exercises. Let me know if you need further guidance! 💪
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
