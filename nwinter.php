
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
    <title>Normalweight Intermediate </title>
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
            <h1>Normalweight Intermediate<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!--Intermediate plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Workout Plan for<span> Advanced</span></h1>
    <br>
    <br>
    
    <h3 class="days"><span>Sunday :</span> Full Body Strength</h3>
    <br>
    <div class="exercise">
        <h5>Bodyweight Squats <span>- 3 sets of 15 reps</span></h5>
        <br>
        <img src="assets\nwinter\bodyweight.gif" width="180px" height="180px" alt="Bodyweight Squats">
        <br>
        <br>
        <p>(Focus on proper form: keep your chest up and knees aligned with toes.)</p>


    </div>
    <div class="exercise">
        <h5>Push-Ups <span>- 3 sets of 12-15 reps</span></h5>
        <br>
        <img src="assets\nwinter\pushup.gif" width="180px" height="180px" alt="Push-Ups">
        <br>
        <br>
        <p>(Keep your body straight and lower yourself until your chest nearly touches the floor.)</p>
        
    </div>
    <div class="exercise">
        <h5>Glute Bridges <span>- 3 sets of 15 reps</span></h5>
        <br>
        <img src="assets\nwinter\glutebridge.gif" width="180px" height="180px" alt="Glute Bridges">
        <br>
        <br>
        <P>(Lie on your back, knees bent, and lift your hips toward the ceiling.)</P>
        
    </div>
    <div class="exercise">
        <h5>Plank with Shoulder Taps <span>- 3 sets of 20 taps (10 per side)</span></h5>
        <br>
        <img src="assets\nwinter\shouldertaps.gif" width="180px" height="180px" alt="Plank with Shoulder Taps">
        <br>
        <br>
        <p>(In a plank position, tap your opposite shoulder while keeping your hips stable.)</p>
        
    </div>
    <div class="exercise">
        <h5>Mountain Climbers <span>- 3 sets of 30 seconds</span></h5>
        <br>
        <img src="assets\nwinter\mountain.gif" width="180px" height="180px" alt="Mountain Climbers">
        <br>
        <br>
        <p>(Drive your knees toward your chest in a fast, alternating motion.)</p>
        
    </div>
    <div class="exercise">
        <h5>Step-Back Lunges <span>- 3 sets of 12 reps per leg</span></h5>
        <br>
        <img src="assets\nwinter\stepback.gif" width="180px" height="180px" alt="Step-Back Lunges">
        <br>
        <br>
        <p>(Step one leg back and lower into a lunge, keeping your front knee over your ankle.)</p>
        
        
    </div>
    <div class="exercise">
        <h5>Superman Hold <span>- 3 sets of 20 seconds</span></h5>
        <br>
        <img src="assets\nwinter\supermanhold.gif" width="180px" height="180px" alt="Superman Hold">
        <br>
        <br>
        <p>(Lie on your stomach, lift your arms and legs off the ground, and hold.)</p>
        
    </div>
    <div class="exercise">
        <h5>Standing Side Leg Lifts <span>- 3 sets of 12 reps per leg</span></h5>
        <br>
        <img src="assets\nwinter\side leg lifts.gif" width="180px" height="180px" alt="Standing Side Leg Lifts">
        <br>
        <br>
        <p>(Strengthen your hips and outer thighs.)</p>
    
        
    </div>
    <div class="exercise">
        <h5>Bird Dog <span>- 3 sets of 12 reps per side</span></h5>
        <br>
        <img src="assets\nwinter\bird.gif" width="180px" height="180px" alt="Bird Dog">
        <br>
        <br>
        <p>(On all fours, extend one arm and the opposite leg, hold for 2 seconds.)</p>
        
        
    </div>
    <div class="exercise">
        <h5>Deep Breathing Exercises <span>- 5 minutes</span></h5>
        <br>
        <img src="assets\nwinter\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
        <br>
        <br>
        <p>(Sit comfortably, inhale deeply through your nose, and exhale slowly.)</p>

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
    <h5>Bicycle Crunches <span>- 3 sets of 15 reps per side</span></h5>
    <br>
    <img src="assets\nwinter\bicycle.gif" width="180px" height="180px" alt="Bicycle Crunches">
    <br>
    <br>
    <p>(Lie on your back, bring your opposite elbow to your knee in a cycling motion.)</p>
    

</div>
<div class="exercise">
    <h5>Side Plank (Knee Modification) <span>- 3 sets of 20 seconds per side</span></h5>
    <br>
    <img src="assets\nwinter\sideplank.gif" width="180px" height="180px" alt="Side Plank (Knee Modification)">
    <br>
    <br>
    <p>(Rest on your forearm and knees, lifting your hips to form a straight line.)</p>
    
</div>
<div class="exercise">
    <h5>Russian Twists <span>- 3 sets of 20 twists (10 per side)</span></h5>
    <br>
    <img src="assets\nwinter\russian.gif" width="180px" height="180px" alt="Russian Twists">
    <br>
    <br>
    <p>(Sit on the floor, lean back slightly, and twist your torso side to side.)</p>
    

</div>
<div class="exercise">
    <h5>Leg Raises <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\legraises.gif" width="180px" height="180px" alt="Leg Raises">
    <br>
    <br>
    <p>(Lie on your back, keep your legs straight, and lift them to 90 degrees.)</p>
    

</div>
<div class="exercise">
    <h5>Superman Pulls <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, pull your elbows back.)</p>
    
</div>
<div class="exercise">
    <h5>Plank to Downward Dog <span>- 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwinter\plankdownward.gif" width="180px" height="180px" alt="Plank to Downward Dog">
    <br>
    <br>
    <p>(Move from a plank position to a downward dog position, stretching your hamstrings.)</p>
    

</div>
<div class="exercise">
    <h5>Standing Knee-to-Elbow <span>- 3 sets of 12 reps per side</span></h5>
    <br>
    <img src="assets\nwinter\standingknee.gif" width="180px" height="180px" alt="Standing Knee-to-Elbow">
    <br>
    <br>
    <p>(Engage your core by bringing your knee to the opposite elbow.)</p>
    

</div>
<div class="exercise">
    <h5>Side-Lying Leg Lifts <span>- 3 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwinter\sidelyingleg.gif" width="180px" height="180px" alt="Side-Lying Leg Lifts">
    <br>
    <br>
    <p>(Lie on your side and lift your top leg slowly.)</p>
    

</div>
<div class="exercise">
    <h5>Dead Bug <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\deadbug.gif" width="180px" height="180px" alt="Dead Bug">
    <br>
    <br>
    <p>(Lie on your back, extend one arm and the opposite leg, alternate.)</p>
    

</div>
<div class="exercise">
    <h5>Deep Breathing Exercises <span>- 5 minutes</span></h5>
    <br>
    <img src="assets\nwinter\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
    <br>
    <br>
    <p>(Sit comfortably, inhale deeply through your nose, and exhale slowly.)</p>
    

</div>


<br>
<br>
<h3 class="days"><span>Wednesday :</span>Lower Body Focus</h3>
<div class="exercise">
    <h5>Bulgarian Split Squats (Using a Chair) <span>- 3 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwinter\bulgarian.gif" width="180px" height="180px" alt="Bulgarian Split Squats (Using a Chair)">
    <br>
    <br>
    <p>(Place one foot behind you on a chair and lower into a lunge.)</p>

</div>
<div class="exercise">
    <h5>Calf Raises (Single-Leg) <span>- 3 sets of 15 reps per leg</span></h5>
    <br>
    <img src="assets\nwinter\calf.gif" width="180px" height="180px" alt="Calf Raises (Single-Leg)">
    <br>
    <br>
    <p>(Stand on one leg and raise your heel as high as possible.)</p>
    

</div>
<div class="exercise">
    <h5>Side-Lying Leg Circles <span>- 3 sets of 12 circles per leg</span></h5>
    <br>
    <img src="assets\nwinter\sidelyingcircles.gif" width="180px" height="180px" alt="Side-Lying Leg Circles">
    <br>
    <br>
    <p>(Lie on your side, lift your top leg, and draw small circles in the air.)</p>
    

</div>
<div class="exercise">
    <h5>Wall Sit with Leg Lift <span>- 3 sets of 20 seconds per leg</span></h5>
    <br>
    <img src="assets\nwinter\wallsitsingle.gif" width="180px" height="180px" alt="Wall Sit with Leg Lift">
    <br>
    <br>
    <p>(Hold a wall sit and alternate lifting one leg at a time.)</p>

</div>
<div class="exercise">
    <h5>Jump Squats <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\jump.gif" width="180px" height="180px" alt="Jump Squats">
    <br>
    <br>
    <p>(Explode upward from a squat position, landing softly.)</p>

</div>
<div class="exercise">
    <h5>Step-Back Lunges <span>- 3 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwinter\stepback.gif" width="180px" height="180px" alt="Step-Back Lunges">
    <br>
    <br>
    <p>(Step one leg back and lower into a lunge, keeping your front knee over your ankle.)</p>

</div>

<div class="exercise">
    <h5>Glute Bridges with Pulse <span>- 3 sets of 15 reps</span></h5>
    <br>
    <img src="assets\nwinter\glutebridgepulse.gif" width="180px" height="180px" alt="Glute Bridges with Pulse">
    <br>
    <br>
    <p>(Lie on your back, knees bent, and lift your hips, adding small pulses at the top.)</p>
    
   
</div>

<div class="exercise">
    <h5>Standing Marching in Place <span>- 3 sets of 20 steps</span></h5>
    <br>
    <img src="assets\nwinter\march.gif" width="180px" height="180px" alt="Standing Marching in Place">
    <br>
    <br>
    <p>(Lift your knees high while standing in place.)</p>
    

</div>

<div class="exercise">
    <h5>Side-Lying Clamshells <span>- 3 sets of 12 reps per side</span></h5>
    <br>
    <img src="assets\nwinter\clamshells.gif" width="180px" height="180px" alt="Side-Lying Clamshells">
    <br>
    <br>
    <p>(Lie on your side, knees bent, and open your top knee like a clamshell.)</p>

</div>

<div class="exercise">
    <h5>Deep Breathing Exercises <span>- 5 minutes</span></h5>
    <br>
    <img src="assets\nwinter\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
    <br>
    <br>
    <p>(Sit comfortably, inhale deeply through your nose, and exhale slowly.)</p>
    

</div>
<br>
<br>
<h3 class="days"><span>Thursday :</span> Upper Body and Posture</h3>
<div class="exercise">
    <h5>Diamond Push-Ups <span>- 3 sets of 10-12 reps</span></h5>
    <br>
    <img src="assets\nwinter\diamond.gif" width="180px" height="180px" alt="Diamond Push-Ups">
    <br>
    <br>
    <p>(Place your hands close together under your chest to target triceps.)</p>
    
</div>
<div class="exercise">
    <h5>Pike Push-Ups <span>- 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwinter\pikepush.gif" width="180px" height="180px" alt="Pike Push-Ups">
    <br>
    <br>
    <p>(Form an inverted "V" shape with your body and perform push-ups.)</p>
    
</div>
<div class="exercise">
    <h5>Superman Pulls <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, pull your elbows back.)</p>
    
</div>
<div class="exercise">
    <h5>Plank to Downward Dog <span>- 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwinter\plankdownward.gif" width="180px" height="180px" alt="Plank to Downward Dog">
    <br>
    <br>
    <p>(Move from a plank position to a downward dog position, stretching your hamstrings.)</p>
    
</div>
<div class="exercise">
    <h5>Arm Circles (Weighted Feel) <span>- 3 sets of 15 reps forward and backward</span></h5>
    <br>
    <img src="assets\nwinter\armcircles.gif" width="180px" height="180px" alt="Arm Circles (Weighted Feel)">
    <br>
    <br>
    <p>(Extend your arms and make large, controlled circles.)</p>
    
</div>
<div class="exercise">
    <h5>Incline Push-Ups (Using a Table or Chair) <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\incline.gif" width="180px" height="180px" alt="Incline Push-Ups (Using a Table or Chair)">
    <br>
    <br>
    <p>(Place your hands on a sturdy surface and perform push-ups at an angle.)</p>
    
</div>
<div class="exercise">
    <h5>Superman Hold <span>- 3 sets of 20 seconds</span></h5>
    <br>
    <img src="assets\nwinter\supermanhold.gif" width="180px" height="180px" alt="Superman Hold">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs off the ground, and hold.)</p>
    
</div>
<div class="exercise">
    <h5>Cat-Cow Stretch <span>- 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwinter\catcow.gif" width="180px" height="180px" alt="Cat-Cow Stretch">
    <br>
    <br>
    <p>(On all fours, alternate between arching and rounding your back.)</p>
    

</div>
<div class="exercise">
    <h5>Shoulder Blade Squeezes <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\shoulderblade.gif" width="180px" height="180px" alt="Shoulder Blade Squeezes">
    <br>
    <br>
    <p>(Sit or stand, squeeze your shoulder blades together, and hold for 2 seconds.)</p>


</div>
<div class="exercise">
    <h5>Deep Breathing Exercises <span>- 5 minutes</span></h5>
    <br>
    <img src="assets\nwinter\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
    <br>
    <br>
    <p>(Sit comfortably, inhale deeply through your nose, and exhale slowly.)</p>
    

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
    <img src="assets\nwinter\sun.gif" width="180px" height="180px" alt="Sun Salutations (Yoga)">
    <br>
    <br>
    <p>(A dynamic flow to stretch and strengthen your entire body.)</p>
    
</div>
<div class="exercise">
    <h5>Standing Forward Fold with Twist <span>- Hold for 20 seconds per side</span></h5>
    <br>
    <img src="assets\nwbeg\standingforwardtwist.gif" width="180px" height="180px" alt="Standing Forward Fold with Twist">
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
    <h5>Seated Forward Fold <span>- Hold for 30 seconds</span></h5>
    <br>
    <img src="assets\nwinter\seatedforward.gif" width="180px" height="180px" alt="Seated Forward Fold">
    <br>
    <br>
    <p>(Sit with your legs straight and reach for your toes.)</p>
    

</div>
<div class="exercise">
    <h5>Deep Breathing Exercises <span>- 5 minutes</span></h5>
    <br>
    <img src="assets\nwinter\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
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
This plan is designed to be gentle yet effective for Advanced people. Stick with it for 4-6 weeks, and then you can gradually increase intensity or add more advanced exercises. Let me know if you need further guidance! 💪
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
