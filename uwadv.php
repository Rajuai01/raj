
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
    <title>Underweight Advanced </title>
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
            <h1>Underweight Advanced<span> Exercises</span></h1>
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
        <h5>Pistol Squats<span> - 4 sets of 8 reps per leg</span></h5>
        <br>
        <img src="assets\uwadv\pistol.gif" width="200px" height="200px" alt="Pistol Squats"> 
        <br>
        <br>
        <p>(Perform a full one-legged squat, keeping your balance and control.)</p>
    </div>
    <div class="exercise">
        <h5>Archer Push-Ups<span> - 4 sets of 10 reps per side</span></h5>
        <br>
        <img src="assets\uwadv\archer.gif" width="180px" height="180px" alt="Archer Push-Ups">
        <br>
        <br>
        <p>(Shift your weight to one arm while the other arm is extended out to the side.)</p>
        
    </div>
    <div class="exercise">
        <h5>Single-Leg Glute Bridges with Pulse<span> - 4 sets of 12 reps per leg</span></h5>
        <br>
        <img src="assets\uwadv\glutebridge.gif" width="180px" height="180px" alt="Single-Leg Glute Bridges with Pulse">
        <br>
        <br>
        <p>(Lift one leg and perform small pulses at the top of the glute bridge.)</p>
        
    </div>
    <div class="exercise">
        <h5>Plank to Push-Up<span> - 4 sets of 12 reps</span></h5>
        <br>
        <img src="assets\uwadv\plankpush.gif" width="180px" height="180px" alt="Plank to Push-Up">
        <br>
        <br>
        <p>(Start in a forearm plank, push up to a high plank, and lower back down.)</p>
    
        
    </div>
    <div class="exercise">
        <h5>Burpees with Push-Up<span> - 4 sets of 15 reps</span></h5>
        <br>
        <img src="assets\uwadv\burpees.gif" width="180px" height="180px" alt="Burpees with Push-Up">
        <br>
        <br>
        <p>(Perform a burpee with a full push-up at the bottom.)</p>
        
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
    <h5>Hanging Leg Raises (Using a Bar or Door Frame)<span> - 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwadv\hanging.gif" width="180px" height="180px" alt="Hanging Leg Raises">
    <br>
    <br>
    <p>(Hang from a bar and lift your legs to 90 degrees, keeping them straight.)</p>


    </div>
<div class="exercise">
    <h5>Dragon Flags (Modified)<span> - 4 sets of 8 reps</span></h5>
    <br>
    <img src="assets\uwadv\dragon.gif" width="180px" height="180px" alt="Dragon Flags (Modified)">
    <br>
    <br>
    <p>(Lie on your back, grip a sturdy object, and lift your legs and hips off the ground.)</p>


</div>
<div class="exercise">
    <h5>Side Plank with Hip Dips<span> - 4 sets of 12 reps per side</span></h5>
    <br>
    <img src="assets\uwadv\sidehip.gif" width="180px" height="180px" alt="Side Plank with Hip Dips">
    <br>
    <br>
    <p>(In a side plank, lower your hips and lift them back up.)</p>

</div>
<div class="exercise">
    <h5>V-Ups<span> - 4 sets of 15 reps</span></h5>
    <br>
    <img src="assets\uwadv\vup.gif" width="180px" height="180px" alt="V-Ups">
    <br>
    <br>
    <p>(Lie on your back, lift your legs and torso simultaneously to form a "V".)</p>

</div>
<div class="exercise">
    <h5>Superman Pulls with Hold<span> - 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwadv\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls with Hold">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, pull your elbows back, and hold for 2 seconds.)</p>
</div>>


<br>
<br>
<h3 class="days"><span>Wednesday :</span>Lower Body Focus</h3>
<div class="exercise">
    <h5>Bulgarian Split Squats (Using a Chair)<span> - 4 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\uwadv\bulgarian.gif" width="180px" height="180px" alt="Bulgarian Split Squats (Using a Chair)">
    <br>
    <br>
    <p>(Place one foot behind you on a chair and lower into a deep lunge.)</p>


</div>
<div class="exercise">
    <h5>Calf Raises (Single-Leg with Pulse)<span> - 4 sets of 15 reps per leg</span></h5>
    <br>
    <img src="assets\uwadv\calf.gif" width="180px" height="180px" alt="Calf Raises (Single-Leg with Pulse)">
    <br>
    <br>
    <p>(Stand on one leg, raise your heel, and perform small pulses at the top.)</p>

</div>

<div class="exercise">
    <h5>Side-Lying Leg Circles (Weighted Feel)<span> - 4 sets of 12 circles per leg</span></h5>
    <br>
    <img src="assets\uwadv\sidelying circles.gif" width="180px" height="180px" alt="Side-Lying Leg Circles (Weighted Feel)">
    <br>
    <br>
    <p>(Lie on your side, lift your top leg, and draw large circles in the air.)</p>

</div>

<div class="exercise">
    <h5>Wall Sit with Leg Lift and Hold<span> - 4 sets of 20 seconds per leg</span></h5>
    <br>
    <img src="assets\uwadv\wallsitleg.gif" width="180px" height="180px" alt="Wall Sit with Leg Lift and Hold">
    <br>
    <br>
    <p>(Hold a wall sit and lift one leg, holding it parallel to the ground.)</p>


</div>

<div class="exercise">
    <h5>Jump Lunges<span> - 4 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\uwadv\jumplunges.gif" width="180px" height="180px" alt="Jump Lunges">
    <br>
    <br>
    <p>(Explode upward from a lunge position, switching legs mid-air.)</p>

</div>
<br>
<br>
<h3 class="days"><span>Thursday :</span> Upper Body and Posture</h3>
<div class="exercise">
    <h5>Diamond Push-Ups with Feet Elevated <span>- 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwadv\diamond.gif" width="180px" height="180px" alt="Diamond Push-Ups with Feet Elevated">
    <br>    
    <br>
    <p>(Place your feet on a chair and perform diamond push-ups.)</p>

</div>
<div class="exercise">
    <h5>Pike Push-Ups with Feet Elevated<span>- 4 sets of 10 reps</span></h5>
    <br>
    <img src="assets\uwadv\pikedec.gif" width="180px" height="180px" alt="Pike Push-Ups with Feet Elevated">
    <br>
    <br>
    <p>(Place your feet on a chair and perform pike push-ups to target shoulders.)</p>

</div>
<div class="exercise">
    <h5>Superman Pulls with Arm Extension<span> - 4 sets of 12 reps</span></h5>
    <br>
    <img src="assets\uwadv\supermanpull.gif" width="180px" height="180px" alt="Superman Pulls with Arm Extension">
    <br>
    <br>
    <p>(Lie on your stomach, lift your arms and legs, pull your elbows back, and extend your arms forward.)</p>

</div>
<div class="exercise">
<h5>Plank to Downward Dog with Shoulder Tap<span>- 4 sets of 12 reps</span></h5>
<br>
<img src="assets\uwadv\plankdown.gif" width="180px" height="180px" alt="Plank to Downward Dog with Shoulder Tap">
<br>
<br>
<p>(Move from a plank to downward dog, then tap your opposite shoulder.)</p>

</div>
<div class="exercise">
    <h5>Arm Circles with Pulse<span>- 4 sets of 15 reps forward and backward</span></h5>
    <br>
    <img src="assets\uwadv\armcircle.gif" width="180px" height="180px" alt="Arm Circles with Pulse">
    <br>
    <br>
    <p>(Extend your arms and make large circles, adding a pulse at the top.)</p>

</div>
<br>
<br>
<h3 class="days"><span>Friday:</span> Rest or Light Activity</h3>
    <div class="rest">
        <img src="assets\uwadv\rest.gif" width="180px" height="180px" alt="Rest">
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
    <img src="assets\uwadv\sun.gif" width="180px" height="180px" alt="Sun Salutations (Yoga)">
    <br>
    <br>
    <p>(A dynamic flow to stretch and strengthen your entire body.)</p>

</div>
<div class="exercise">
    <h5>Standing Forward Fold with Twist <span>- Hold for 30 seconds per side</span></h5>
    <br>
    <img src="assets\uwadv\forwardfold.gif" width="180px" height="180px" alt="Standing Forward Fold with Twist">
    <br>
    <br>
    <p>(Bend forward and twist your torso to one side, reaching for the opposite foot.)</p>

</div>
<div class="exercise">
    <h5>Pigeon Pose<span> - Hold for 30 seconds per side</span></h5>
    <br>
    <img src="assets\uwadv\pigeon.gif" width="180px" height="180px" alt="Pigeon Pose">
    <br>
    <br>
    <p>(Stretch your hip flexors by bringing one leg forward in a bent position.)</p>

</div>
<div class="exercise">
    <h5>Seated Forward Fold <span>- Hold for 30 seconds</span></h5>
    <br>
    <img src="assets\uwadv\seatedforward.gif" width="180px" height="180px" alt="Seated Forward Fold">
    <br>
    <br>
    <p>(Sit with your legs straight and reach for your toes.)</p>

</div>
<div class="exercise">
    <h5>Deep Breathing Exercises <span>- 5 minutes</span></h5>
    <br>
    <img src="assets\uwadv\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
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
