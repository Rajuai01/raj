
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
    <title>Overweight Advanced </title>
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
            <h1>Overweight Advanced<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom"><span>Advanced Fat Loss</span> Home Workout Plan (1 Hour Per Day)</h1>
    <br>
    <br>
    <div class="rest">
        <h5>Structure :</h5>
        <br>
        <p>Warm-up (10 minutes) – Dynamic stretches + light cardio
        <br>
        Workout (40 minutes) – High-intensity fat-burning exercises
        <br>
        Cooldown (10 minutes) – Stretching and mobility</p>
    </div>


    <h3 class="days"><span>Sunday :</span>Full-Body Fat Burn (HIIT Style)</h3>
    <br>
    <div class="exercise">
    <h5>Jump Squats <span>– 4 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\jumpsquats.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Squat deep, explode upward, land softly, and repeat.</p>
    </div>

    <div class="exercise">
        <h5>Burpees <span>– 4 sets × 15 reps</span></h5>
        <br>
        <img src="assets\owadv\burpees.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>        
        <p>Squat, place hands down, kick legs back, do a push-up, jump up.</p>
    </div>

    <div class="exercise">
        <h5>Push-ups to Shoulder Taps <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\owadv\shouldertap.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Do a push-up, then tap each shoulder one at a time.</p>
    </div>

    <div class="exercise">
        <h5>Jump Lunges <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\owadv\jumplunges.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Lunge, explode upward, switch legs in mid-air.</p>
    </div>

    <div class="exercise">
        <h5>Mountain Climbers <span>– 4 sets × 50 reps (each leg)</span></h5>
        <br>
        <img src="assets\owadv\mountain.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Get in a push-up position, bring knees towards your chest quickly.</p>
    </div>

    <div class="exercise">
        <h5>Plank-to-Frog Jump <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\owadv\plankfrog.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Start in a plank, jump both feet forward, then jump back.</p>
    </div>

    <div class="exercise">
        <h5>Side-to-Side Skaters <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\owadv\skater.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Jump laterally from one foot to the other.</p>
    </div>

    <div class="exercise">
        <h5>High Knees <span>– 3 sets × 40 sec</span></h5>
        <br>
        <img src="assets\owadv\highknee.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Run in place, bringing knees up high.</p>
    </div>

    <div class="exercise">
        <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
        <br>
        <img src="assets\owadv\bicycle.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>    
        <p>Lie on your back, bring opposite elbow to opposite knee.</p>
    </div>

    <div class="exercise">
        <h5>Plank Hold <span>– 3 sets × 45 sec</span></h5>
        <br>
        <img src="assets\owadv\plank.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Keep core tight, maintaining a forearm plank position.</p>
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
<h3 class="days"><span>Tuesday:</span>  Lower Body Strength & Endurance</h3>

<div class="exercise">
    <h5>Sumo Squats <span>– 4 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\sumo.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Stand wide, squat deep, keep chest up.</p>
</div>

<div class="exercise">
    <h5>Wall Sit <span>– 3 sets × 60 sec hold</span></h5>
    <br>
    <img src="assets\owadv\wall.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Sit against a wall with thighs parallel to the floor.</p>
</div>

<div class="exercise">
    <h5>Bulgarian Split Squats (Using a Chair) <span>– 3 sets × 12 reps (each leg)</span></h5>
    <br>
    <img src="assets\owadv\bulgariansplit.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Place one foot on an elevated surface, lower into a squat.</p>
</div>

<div class="exercise">
    <h5>Step-ups on Chair <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\owadv\stepup.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Step onto a chair, pushing through the heel.</p>
</div>

<div class="exercise">
    <h5>Calf Raises <span>– 4 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\calf.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Stand on your toes, hold, then lower.</p>

</div>

<div class="exercise">
    <h5>Glute Bridges <span>– 3 sets × 20 reps</span></h5>
    <br>    
    <img src="assets\owadv\glutebridge.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Lie on your back, lift hips up, squeeze glutes.</p>
</div>

<div class="exercise">
    <h5>Side-Lying Leg Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\owadv\sidelyingleg.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Lie on your side, lift top leg high, then lower.</p>
</div>

<div class="exercise">
    <h5>Jump Rope Simulation <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\owadv\jumprope.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Hop lightly as if skipping rope.</p>
</div>

<div class="exercise">
    <h5>Reverse Lunges <span>– 3 sets × 12 reps (each leg)</span></h5>
    <br>
    <img src="assets\owadv\reverselunges.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Step backward into a lunge, then push back up.</p>
</div>

<div class="exercise">
    <h5>Seated Leg Raises <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owadv\seatedleg.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Sit on the floor, lift legs slightly, hold briefly, lower.</p>
</div>

<br>
<br>
<h3 class="days"><span>Wednesday :</span>Upper Body & Core Focus</h3>
<div class="exercise">
    <h5>Wide Push-ups <span>– 4 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owadv\widearm.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Hands wider than shoulders, lower chest, and push up.</p>
</div>

<div class="exercise">
    <h5>Triceps Dips (Using a Couch/Chair) <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owadv\triceps.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Sit on an edge, lower your body, then push back up.</p>
</div>

<div class="exercise">
    <h5>Pike Push-ups <span>– 3 sets × 12 reps</span></h5>
    <br>
    <img src="assets\owadv\pike.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Get into a downward dog, lower head, then push up.</p>
</div>

<div class="exercise">
    <h5>Superman Hold <span>– 3 sets × 40 sec hold</span></h5>
    <br>
    <img src="assets\owadv\supermanhold.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Lie on your stomach, lift arms, chest, and legs off the ground.</p>
</div>

<div class="exercise">
    <h5>Side Plank with Reach Under <span>– 3 sets × 12 reps (each side)</span></h5>
    <br>
    <img src="assets\owadv\sideplank.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>In a side plank, reach under your body, then return.</p>
</div>

<div class="exercise">
    <h5>Push-up to Plank Hold <span>– 3 sets × 10 reps</span>
    <br>
    <img src="assets\owadv\plankpush.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Start in a push-up position, lower to a forearm plank, return to push-up.</p></h5>
</div>

<div class="exercise">
    <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
    <br>
    <img src="assets\owadv\bicycle.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Engage core, twist from side to side.</p>
</div>

<div class="exercise">
    <h5>Hollow Body Hold <span>– 3 sets × 40 sec hold</span></h5>
    <br>
    <img src="assets\owadv\hollowbody.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Lift shoulders and legs off the floor while keeping the lower back flat.</p></div>
</div>

<div class="exercise">
    <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\owadv\flutter.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Lie on your back, flutter your legs up and down.</p>
</div>

<div class="exercise">
    <h5>Plank Shoulder Taps <span>– 3 sets × 12 reps (each side)</span></h5>
    <br>
    <img src="assets\owadv\shouldertap.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>While in a plank, tap one shoulder at a time.</p>
</div>

<br>
<br>
<h3 class="days"><span>Thursday :</span> High-Intensity Cardio Burn(With more Intensity & less Rest Time)</h3>
<div class="exercise">
    <h5>Jump Squats <span>– 4 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\jumpsquats.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
    <p>Squat deep, explode upward, land softly, and repeat.</p>
    </div>

    <div class="exercise">
        <h5>Burpees <span>– 4 sets × 15 reps</span></h5>
        <br>
        <img src="assets\owadv\burpees.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>        
        <p>Squat, place hands down, kick legs back, do a push-up, jump up.</p>
    </div>

    <div class="exercise">
        <h5>Push-ups to Shoulder Taps <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\owadv\pushshoulder.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Do a push-up, then tap each shoulder one at a time.</p>
    </div>

    <div class="exercise">
        <h5>Jump Lunges <span>– 3 sets × 15 reps (each leg)</span></h5>
        <br>
        <img src="assets\owadv\jumplunges.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Lunge, explode upward, switch legs in mid-air.</p>
    </div>

    <div class="exercise">
        <h5>Mountain Climbers <span>– 4 sets × 50 reps (each leg)</span></h5>
        <br>
        <img src="assets\owadv\mountain.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Get in a push-up position, bring knees towards your chest quickly.</p>
    </div>

    <div class="exercise">
        <h5>Plank-to-Frog Jump <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\owadv\plankfrog.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Start in a plank, jump both feet forward, then jump back.</p>
    </div>

    <div class="exercise">
        <h5>Side-to-Side Skaters <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\owadv\skater.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Jump laterally from one foot to the other.</p>
    </div>

    <div class="exercise">
        <h5>High Knees <span>– 3 sets × 40 sec</span></h5>
        <br>
        <img src="assets\owadv\highknee.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Run in place, bringing knees up high.</p>
    </div>

    <div class="exercise">
        <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
        <br>
        <img src="assets\owadv\bicycle.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>    
        <p>Lie on your back, bring opposite elbow to opposite knee.</p>
    </div>

    <div class="exercise">
        <h5>Plank Hold <span>– 3 sets × 45 sec</span></h5>
        <br>
        <img src="assets\owadv\plank.gif" height="180px" width="180px" alt="jump squats">
        <br>
        <br>
        <p>Keep core tight, maintaining a forearm plank position.</p>
    </div>
<br>
<br>
<h3 class="days"><span>Friday:</span> Mobility & Flexibility (Active Recovery)</h3>
<br>
<div class="exercise">
    <h5>Downward Dog to Cobra Stretch <span>– 3 sets × 10 reps</span></h5>
    <br>
    <img src="assets\owadv\downdogcobra.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Seated Forward Fold <span>– 3 sets × 30 reps</span></h5>
    <br>
    <img src="assets\owadv\seatedforward.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>  Hip Flexor Stretch <span>– 3 sets × 30 sec each side</span></h5>
    <br>
    <img src="assets\owadv\hipflexor.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Cat-Cow Stretch <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owadv\catcow.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Neck & Shoulder Rolls <span>– 3 sets × 20 sec</span></h5>
    <br>
    <img src="assets\owadv\neckrolls.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>


<br>
<br>
<br>
<br>
<h3 class="days"><span>Saturday :</span> Full-Body Strength & Fat Burn</h3>
<div class="exercise">
    <h5>Burpees <span>– 4 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owadv\burpees.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Jump Lunges <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <img src="assets\owadv\jumplunges.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Plank Jacks <span>– 3 sets × 40 sec</span></h5>
    <br>
    <img src="assets\owadv\plankjacks.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Glute Bridges <span>– 3 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\glutebridge.gif" height="180px" width="180px" alt="jump squats">
    <br>
    <br>
</div>

<div class="exercise">
    <h5>Side-to-Side Skaters <span>– 3 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\skater.gif" height="180px" width="180px" alt="jump squats">
    <br>
</div>

<div class="exercise">
    <h5>Push-ups to Shoulder Taps <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owadv\shouldertap.gif" height="180px" width="180px" alt="jump squats">
    <br>
</div>

<div class="exercise">
    <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
    <br>
    <img src="assets\owadv\bicycle.gif" height="180px" width="180px" alt="jump squats">
    <br>
</div>

<div class="exercise">
    <h5>High Knees <span>– 3 sets × 40 sec</span></h5>
    <br>
    <img src="assets\owadv\highknee.gif" height="180px" width="180px" alt="jump squats">
    <br>
</div>

<div class="exercise">
    <h5>Plank Hold <span>– 3 sets × 45 sec</span></h5>
    <br>
    <img src="assets\owadv\plank.gif" height="180px" width="180px" alt="jump squats">
    <br>
</div>

<div class="exercise">
    <h5>Sumo Squats <span>– 3 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owadv\sumo.gif" height="180px" width="180px" alt="jump squats">
    <br>
</div>


<div class="rest">
        <h5>Key Benefits:</h5>
        <br>
        <p>Intense fat-burning with HIIT
        <br>
            Strength and endurance combined
        <br>
            No equipment needed
        <br>
            Builds core strength & stamina
    </div>
<br>
<br>


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
