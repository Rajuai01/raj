
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
    <title>Normalweight Advanced </title>
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
            <h1>Normalweight Advanced<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Workout Plan for<span> Advanced</span></h1>
    <br>
    <br>

    <h3 class="days"><span>Sunday :</span> Full Body Strength</h3>
    <br>
    <div class="exercise">
        <h5>Pistol Squats <span>- 4 sets of 8 reps per leg</span></h5>
        <br>
        <img src="assets\nwadv\pistolsquats.gif" width="180px" height="180px" alt="Pistol Squats">
        <br>
        <br>
        <p>(Perform a full one-legged squat, keeping your balance and control.)</p>
        
    </div>
    <div class="exercise">
        <h5>Archer Push-Ups <span>- 4 sets of 10 reps per side</span></h5>
        <br>
        <img src="assets\nwadv\archer.gif" width="180px" height="180px" alt="Archer Push-Ups">
        <br>
        <br>
        <p>(Shift your weight to one arm while the other arm is extended out to the side.)</p>
        
    </div>
    <div class="exercise">
        <h5>Single-Leg Glute Bridges with Pulse <span>- 4 sets of 12 reps per leg</span></h5>
        <br>
        <img src="assets\nwadv\glutebridge.gif" width="180px" height="180px" alt="Single-Leg Glute Bridges with Pulse">
        <br>
        <br>
        <p>(Lift one leg and perform small pulses at the top of the glute bridge.)</p>
        
    </div>
    <div class="exercise">
        <h5>Plank to Push-Up <span>- 4 sets of 12 reps</span></h5>
        <br>
        <img src="assets\nwadv\plankpush.gif" width="180px" height="180px" alt="Plank to Push-Up">
        <br>
        <br>
        <p>(Start in a forearm plank, push up to a high plank, and lower back down.)</p>
    
        
    </div>
    <div class="exercise">
        <h5>Burpees with Push-Up <sppan>- 4 sets of 15 reps</sppan></h5>
        <br>
        <img src="assets\nwadv\burpee.gif" width="180px" height="180px" alt="Burpees with Push-Up">
        <br>
        <br>
        <p>(Perform a burpee with a full push-up at the bottom.)</p>
        
    </div>
    <div class="exercise">
        <h5>Mountain Climbers <span>- 4 sets of 30 seconds</span></h5>
        <br>
        <img src="assets\nwadv\mountain.gif" width="180px" height="180px" alt="Mountain Climbers">
        <br>
        <br>
        <p>(Drive your knees toward your chest in a fast, alternating motion.)</p>
        
        
    </div>
    <div class="exercise">
        <h5>Superman Hold <span>- 4 sets of 20 seconds</span></h5>
        <br>
        <img src="assets\nwadv\supermanhold.gif" width="180px" height="180px" alt="Superman Hold">
        <br>
        <br>
        <p>(Lie on your stomach, lift your arms and legs off the ground, and hold.)</p>
        
        
    </div>
    <div class="exercise">
        <h5>Standing Side Leg Lifts <span>- 4 sets of 12 reps per leg</span></h5>
        <br>
        <img src="assets\nwadv\standingsideleg.gif" width="180px" height="180px" alt="Standing Side Leg Lifts">
        <br>
        <br>
        <p>(Strengthen your hips and outer thighs.)</p>
        
    </div>
    <div class="exercise">
        <h5>Bird Dog <span>- 4 sets of 12 reps per side</span></h5>
        <br>
        <img src="assets\nwadv\bird.gif" width="180px" height="180px" alt="Bird Dog">
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
    <h5>Hanging Leg Raises (Using a Bar or Door Frame) <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwadv\hangingleg.gif" width="180px" height="180px" alt="Hanging Leg Raises">
    <br>
    <br>
    <p>(Hang from a bar and lift your legs to 90 degrees, keeping them straight.)</p>


</div>
<div class="exercise">
    <h5>Dragon Flags (Modified) <span>- 4 sets of 8 reps</span></h5>
    <br>
    <img src="assets\nwadv\dragonflag.gif" width="180px" height="180px" alt="Dragon Flags">
    <br>
    <br>
    <p>(Lie on your back, grip a sturdy object, and lift your legs and hips off the ground.)</p>
    

</div>
<div class="exercise">
    <h5>Side Plank with Hip Dips <span>- 4 sets of 12 reps per side</span></h5>
    <br>
    <img src="assets\nwadv\sideplankhip.gif" width="180px" height="180px" alt="Side Plank with Hip Dips">
    <br>
    <br>
    <p>(In a side plank, lower your hips and lift them back up.)</p>
    
</div>
<div class="exercise">
    <h5>V-Ups <span>- 4 sets of 15 reps</span></h5>
    <br>
    <img src="assets\nwadv\vup.gif" width="180px" height="180px" alt="V-Ups">
    <br>
    <br>
    <p>(Lie on your back, lift your legs and torso simultaneously to form a "V".)</p>
    
</div>
<div class="exercise">
    <h5>Superman Pulls with Hold <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwadv\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls with Hold">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, pull your elbows back, and hold for 2 seconds.)</p>
    
</div>
<div class="exercise">
    <h5>Plank to Downward Dog <span>- 4 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwadv\standingdownward.gif" width="180px" height="180px" alt="Plank to Downward Dog">
    <br>
    <br>
    <p>(Move from a plank position to a downward dog position, stretching your hamstrings.)</p>
    
</div>
<div class="exercise">
    <h5>Standing Knee-to-Elbow <span>- 4 sets of 12 reps per side</span></h5>
    <br>
    <img src="assets\nwadv\standingknee.gif" width="180px" height="180px" alt="Standing Knee-to-Elbow">
    <br>
    <br>
    <p>(Engage your core by bringing your knee to the opposite elbow.)</p>
    
</div>
<div class="exercise">
    <h5>Side-Lying Leg Lifts <span>- 4 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwadv\sidelyingleglift.gif" width="180px" height="180px" alt="Side-Lying Leg Lifts">
    <br>
    <br>
    <p>(Lie on your side and lift your top leg slowly.)</p>
    
</div>
<div class="exercise">
    <h5>Dead Bug <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwadv\deadbug.gif" width="180px" height="180px" alt="Dead Bug">
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
    <h5>Bulgarian Split Squats (Using a Chair) <span>- 4 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwadv\bulgariansplit.gif" width="180px" height="180px" alt="Bulgarian Split Squats">
    <br>
    <br>
    <p>(Place one foot behind you on a chair and lower into a deep lunge.)</p>
    
</div>
<div class="exercise">
    <h5>Calf Raises (Single-Leg with Pulse) <span>- 4 sets of 15 reps per leg</span></h5>
    <br>
    <img src="assets\nwadv\calf.gif" width="180px" height="180px" alt="Calf Raises">
    <br>
    <br>
    <p>(Stand on one leg, raise your heel, and perform small pulses at the top.)</p>
    
</div>

<div class="exercise">
    <h5>Side-Lying Leg Circles (Weighted Feel) <span>- 4 sets of 12 circles per leg</span></h5>
    <br>
    <img src="assets\nwadv\legcircles.gif" width="180px" height="180px" alt="Side-Lying Leg Circles">
    <br>
    <br>
    <p>(Lie on your side, lift your top leg, and draw large circles in the air.)</p>

</div>
<div class="exercise">
    <h5>Wall Sit with Leg Lift and Hold <span>- 4 sets of 20 seconds per leg</span></h5>
    <br>
    <img src="assets\nwadv\wallsitleg.gif" width="180px" height="180px" alt="Wall Sit with Leg Lift and Hold">
    <br>
    <br>
    <p>(Hold a wall sit and lift one leg, holding it parallel to the ground.)</p>
    
</div>
<div class="exercise">
    <h5>Jump Lunges <span>- 4 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwadv\jumplunge.gif" width="180px" height="180px" alt="Jump Lunges">
    <br>
    <br>
    <p>(Explode upward from a lunge position, switching legs mid-air.)</p>
    
</div>
<div class="exercise">
    <h5>Step-Back Lunges <span>- 4 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwinter\stepback.gif" width="180px" height="180px" alt="Step-Back Lunges">
    <br>
    <br>
    <p>(Step one leg back and lower into a lunge, keeping your front knee over your ankle.)</p>
    
</div>
<div class="exercise">
    <h5>Glute Bridges with Pulse <span>- 4 sets of 15 reps</span></h5>
    <br>
    <img src="assets\nwinter\glutebridge.gif" width="180px" height="180px" alt="Glute Bridges with Pulse">
    <br>
    <br>
    <p>(Lie on your back, knees bent, and lift your hips, adding small pulses at the top.)</p>
    
</div>
<div class="exercise">
    <h5>Standing Marching in Place <span>- 4 sets of 20 steps</span></h5>
    <br>
    <img src="assets\nwinter\march.gif" width="180px" height="180px" alt="Standing Marching in Place">
    <br>
    <br>
    <p>(Lift your knees high while standing in place.)</p>
    
</div>
<div class="exercise">
    <h5>Side-Lying Clamshells <span>- 4 sets of 12 reps per side</span></h5>
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
    <h5>Diamond Push-Ups with Feet Elevated <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\diamond.gif" width="180px" height="180px" alt="Diamond Push-Ups with Feet Elevated">
    <br>
    <br>
    <p>(Place your feet on a chair and perform diamond push-ups.)</p>
    
</div>
<div class="exercise">
    <h5>Pike Push-Ups with Feet Elevated <span>- 4 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwinter\pikepush.gif" width="180px" height="180px" alt="Pike Push-Ups with Feet Elevated">
    <br>
    <br>
    <p>(Place your feet on a chair and perform pike push-ups to target shoulders.)</p>
    
</div>
<div class="exercise">
    <h5>Superman Pulls with Arm Extension <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls with Arm Extension">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, pull your elbows back, and extend your arms forward.)</p>
    
</div>
<div class="exercise">
    <h5>Plank to Downward Dog with Shoulder Tap <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\plankdownward.gif" width="180px" height="180px" alt="Plank to Downward Dog with Shoulder Tap">
    <br>
    <br>
    <p>(Move from a plank to downward dog, then tap your opposite shoulder.)</p>

</div>
<div class="exercise">
    <h5>Arm Circles with Pulse <span>- 4 sets of 15 reps forward and backward</span></h5>
    <br>
    <img src="assets\nwinter\armcircles.gif" width="180px" height="180px" alt="Arm Circles with Pulse">
    <br>
    <br>
    <p>(Extend your arms and make large circles, adding a pulse at the top.)</p>
    
</div>
<div class="exercise">
    <h5>Incline Push-Ups (Using a Table or Chair) <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwinter\incline.gif" width="180px" height="180px" alt="Incline Push-Ups">
    <br>
    <br>
    <p>(Place your hands on a sturdy surface and perform push-ups at an angle.)</p>
    
</div>
<div class="exercise">
    <h5>Superman Hold <span>- 4 sets of 20 seconds</span></h5>
    <br>
    <img src="assets\nwinter\supermanhold.gif" width="180px" height="180px" alt="Superman Hold">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs off the ground, and hold.)</p>
    
</div>
<div class="exercise">
    <h5>Cat-Cow Stretch <span>- 4 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwinter\catcow.gif" width="180px" height="180px" alt="Cat-Cow Stretch">
    <br>
    <br>
    <p>(On all fours, alternate between arching and rounding your back.)</p>
    
</div>
<div class="exercise">
    <h5>Shoulder Blade Squeezes <span>- 4 sets of 12 reps</span></h5>
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
    <h5>Sun Salutations (Yoga) <span>- 5 rounds</span></h5>
    <br>
    <img src="assets\nwinter\sun.gif" width="180px" height="180px" alt="Sun Salutations (Yoga)">
    <br>
    <br>
    <p>(A dynamic flow to stretch and strengthen your entire body.)</p>
    
</div>
<div class="exercise">
    <h5>Standing Forward Fold with Twist <span>- Hold for 30 seconds per side</span></h5>
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
