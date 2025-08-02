
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
    <title>Normalweight Beginner </title>
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
            <h1>Normalweight Beginner<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- NW Beginner plan  -->
   <section class="beginner" id="levels">
   
   <h1 class="heading" data-aos="zoom"> Weekly Workout Plan for<span> Normal weight Beginner</span></h1>
    <br>
    <br>

    <h3 class="days"><span>Sunday :</span> Full Body Strength</h3>
    <br>
    <div class="exercise">
        <h5><span>Warm-Up (5 minutes):</span></h5>
        <br>
        <br>
        <p>March in place (1 minute)
        <br>
        Arm circles (1 minute forward, 1 minute backward)
        <br>
        Bodyweight squats (1 minute)
        <br>
        Standing side leg lifts (1 minute per side)</p>
        
    </div>

    <div class="exercise">
        <h5>Bodyweight Squats<span>- 3 sets of 12 reps</span></h5>
        <br>
        <img src="assets\uwbeg\squats.gif" width="180px" height="180px" alt="Bodyweight Squats">
        <br>
        <br>
        <p><span>How to do it:</span> Stand with feet shoulder-width apart. Lower your body by bending your knees and pushing your hips back, as if sitting in a chair. Keep your chest up and knees aligned with your toes. Return to standing.
        <br>
        <span>Assistance: </span>Use a chair for support if needed. Sit down lightly and stand back up.</p>
    </div>
    <div class="exercise">
        <h5>Wall Push-Ups <span>- 3 sets of 10 reps</span></h5>
        <br>
        <img src="assets\uwbeg\wall.gif" width="180px" height="180px" alt="Wall Push-Ups">
        <br>
        <br>
        <p><span>How to do it:</span> Stand facing a wall, place your hands on it at shoulder height. 
        Step back slightly and lower your chest toward the wall by bending your elbows. Push back to the start.

            <span>Assistance:</span> Move closer to the wall to make it easier.</p>    
        
    </div>
    <div class="exercise">
        <h5>Glute Bridges <span>- 3 sets of 12 reps</span></h5>
        <br>
        <img src="assets\uwadv\glutebridge.gif" width="180px" height="180px" alt="Glute Bridges">
        <br>
        <br>
        <p><span>How to do it:</span> Lie on your back with knees bent and feet flat on the floor. 
        Lift your hips toward the ceiling, squeezing your glutes at the top. Lower back down.
        <br>
        <span>Assistance:</span> Place your hands on your hips for stability.</p>
        
    </div>
    <div class="exercise">
        <h5>Plank (Knee Modification) <span>- 3 sets of 15-20 seconds</span></h5>
        <br>
        <img src="assets\uwbeg\plank.gif" width="180px" height="180px" alt="Plank (Knee Modification)">
        <br>
        <br>
        <p><span>How to do it:</span> Start on your hands and knees. Step your feet back to form a straight line from head to knees. Hold the position, keeping your core tight.
<br>
        <span>Assistance:</span> Rest on your knees instead of your toes for an easier version</p>
        
    </div>
    <div class="exercise">
        <h5>Standing Side Leg Lifts <span>- 3 sets of 10 reps per leg</span></h5>
        <br>
        <img src="assets\uwbeg\side leg lifts.gif" width="180px" height="180px" alt="Standing Side Leg Lifts">
        <br>
        <br>
        <p><span>How to do it:</span> Stand tall and lift one leg out to the side, keeping it straight. Lower it back down. Repeat on the other side.
        <br>
        <span>Assistance:</span> Hold onto a wall or chair for balance.</p>
        
    </div>
    <div class="exercise">
        <h5>Step-Back Lunges <span>- 3 sets of 10 reps per leg</span></h5>
        <br>
        <img src="assets\uwbeg\stepback.gif" width="180px" height="180px" alt="Step-Back Lunges">
        <br>
        <br>
        <p><span>How to do it:</span> Step one leg back and lower into a lunge, keeping your front knee over your ankle. Push back to standing.
        <br>
        <span>Assistance:</span> Use a chair for balance if needed.</p>
    </div>
    
    <div class="exercise">
        <h5>Superman Hold<span> - 3 sets of 15 seconds </span></h5>
        <br>
        <img src="assets\nwbeg\supermanhold.gif" width="180px" height="180px" alt="Superman Hold">
        <br>
        <br>
        <p><span>How to do it:</span> Lie on your stomach with arms and legs extended. Lift your arms, chest, and legs off the ground. Hold for the specified time.
        <br>
        <span>Assistance:</span> Lift only your arms or legs if lifting both is too challenging.</p>
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
    <h5>Warm Up (5mins) :</h5>
    <br>
    <br>
    <p>- March in place (1 minute).
        <br>
        - Arm circles (1 minute forward, 1 minute backward)
        <br>
        - Cat-Cow stretch (1 minute)
        <br>
        - Standing knee-to-elbow (1 minute)</p>
</div>

<div class="exercise">
    <h5>Modified Sit-Ups <span>- 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwbeg\situps.gif" width="180px" height="180px" alt="Modified Sit-Ups">
    <br>
    <br>
    <p><span>How to do it:</span> Lie on your back with knees bent and feet flat.
     Place your hands on your thighs and curl your upper body up until your hands reach your knees. Lower back down.
    <br>
    <span>Assistance:</span> Keep your feet flat and use your hands to slide up your thighs.</p>

    </div>
<div class="exercise">
    <h5>Bird Dog <span>- 3 sets of 10 reps per side</span></h5>
    <br>
    <img src="assets\nwbeg\bird.gif" width="180px" height="180px" alt="Bird Dog">
    <br>
    <br>
    <p><span>How to do it:</span> On all fours, extend one arm and the opposite leg simultaneously. Hold for 2 seconds, then return to the start.
    <br>
    <span>Assistance:</span> Perform the movement without holding, or only extend one limb at a time.</p>


</div>
<div class="exercise">
    <h5>Standing Knee-to-Elbow <span>- 3 sets of 10 reps per side</span></h5>
    <br>
    <img src="assets\nwbeg\standingknee.gif" width="180px" height="180px" alt="Standing Knee-to-Elbow">
    <br>
    <br>
    <p><span>How to do it: </span>Stand tall and bring one knee up to meet the opposite elbow. Lower and repeat on the other side.
<br>
<span>Assistance:</span> Hold onto a wall for balance.</p>

</div>
<div class="exercise">
    <h5>Side-Lying Leg Lifts <span>- 3 sets of 10 reps per leg</span></h5>
    <br>
    <img src="assets\nwbeg\sidelyingleg.gif" width="180px" height="180px" alt="Side-Lying Leg Lifts">
    <br>
    <br>
    <p><span>How to do it:</span> Lie on your side with legs stacked. Lift the top leg straight up, then lower it back down.
<br>
<span>Assistance:</span> Bend the bottom leg for stability.

</p>

</div>
<div class="exercise">
    <h5>Dead Bug <span>- 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwbeg\deadbug.gif" width="180px" height="180px" alt="Dead Bug">
    <br>
    <br>
    <p><span>How to do it:</span> Lie on your back with arms and legs in the air. Lower one arm and the opposite leg toward the floor, then return to the start.
    <br>
    <span>Assistance:</span> Keep your feet on the floor and only move your arms.</p>
</div>
<div class="exercise">
    <h5>Russian Twists<span> - 3 sets of 20 twists (10 per side)</span></h5>
    <br>
    <img src="assets\nwbeg\russian.gif" width="180px" height="180px" alt="Russian Twists">
    <br>
    <br>
    
   
</div>

<div class="exercise">
    <h5>Cool-Down (5 minutes):</h5>
    <br>
    <p>- Standing forward fold (30 seconds)
    <br>
    - Child's pose (30 seconds)
    <br>
    - Seated spinal twist (30 seconds per side)
    <br>
    - Deep breathing (2 minutes)</p>
    </div>
<br>
<br>
<h3 class="days"><span>Wednesday :</span>Lower Body Focus</h3>
<div class="exercise">
    <h5>Warm-Up (5 minutes):</h5>
    <br>
    <p>- March in place (1 minute)
    <br>
    - Arm circles (1 minute forward, 1 minute backward)
    <br>
    - Bodyweight squats (1 minute)
    <br>
    - Standing side leg lifts (1 minute per side)</p>
    <br>


</div>
<div class="exercise">
    <h5>Main Workout (35 minutes):</h5>
    <br>
</div>

<div class="exercise">
    <h5>Step-Back Lunges<span> - 3 sets of 12 reps per leg</span></h5>
    <br>
    <img src="assets\nwbeg\stepback.gif" width="180px" height="180px" alt="Step-Back Lunges">
    <br>
    <br>
    <p><span>How to do it:</span> Step one leg back and lower into a lunge, keeping your front knee over your ankle. Push back to standing.
    <br>
    <span>Assistance:</span> Use a chair for balance.
    </p>

</div>

<div class="exercise">
  <h5>Calf Raises <span>- 3 sets of 15 reps</span></h5>
    <br>
    <img src="assets\nwbeg\calf.gif" width="180px" height="180px" alt="Calf Raises">
    <br>
    <br>
    <p><span>How to do it:</span> Stand tall and rise onto your toes, then lower back down.
    <br>
    <span>Assistance:</span> Hold onto a wall or chair for balance.</p>

</div>

<div class="exercise">
    <h5>Side-Lying Clamshells <span>- 3 sets of 12 reps per side</span></h5>
    <br>
    <img src="assets\nwbeg\Clamshells.gif" width="180px" height="180px" alt="Side-Lying Clamshells">
    <br>
    <br>
    <p><span>How to do it:</span> Lie on your side with knees bent. Open your top knee like a clamshell, then close it.
    <br>
    <span>Assistance:</span> Place your hand on your hip for stability.</p>
    

</div>

<div class="exercise">
    <h5>Wall Sit <span>- 3 sets of 20 seconds</span></h5>
    <br>
    <img src="assets\nwbeg\wallsit.gif" width="180px" height="180px" alt="Wall Sit">
    <br>
    <br>
    <p><span>How to do it:</span> Slide your back down a wall until your thighs are parallel to the floor. Hold the position.
    <br>
    <span>Assistance:</span> Sit higher up the wall to make it easier.</p>

</div>

<div class="exercise">
    <h5>Standing Marching in Place <span>- 3 sets of 20 steps</span></h5>
    <br>
    <img src="assets\nwbeg\march.gif" width="180px" height="180px" alt="Standing Marching in Place">
    <br>
    <br>
    <p><span>How to do it:</span> March in place, lifting your knees high.
    <br>
    <span>Assistance:</span> Hold onto a wall or chair for balance.</p>


</div>
<div class="exercise">
    <h5>Glute Bridges <span>- 3 sets of 15 reps</span></h5>
    <br>
    <img src="assets\uwadv\glutebridge.gif" width="180px" height="180px" alt="Glute Bridges">
    <br>
    <br>
    <P><span>How to do it:</span> Lie on your back with knees bent and feet flat. Lift your hips toward the ceiling, squeezing your glutes at the top.
    <br>
    <span>Assistance:</span> Place your hands on your hips for stability.</P>


    </div>
    <div class="exercise">
        <h5>Jump Squats <span>- 3 sets of 15 reps</span></h5>
        <br>
        <img src="assets\nwbeg\jumpsquats.gif" width="180px" height="180px" alt="Jump Squats">
        <br>
        <br>
        <P><span>How to do it:</span> Lower into a squat, then explode upward into a jump. Land softly.
        <br>
        <span>Assistance:</span> Perform regular squats without jumping.</P>

        </div>

    <div class="exercise">
        <h5>Cool-Down (5 minutes):</h5>
        <br>
        <p>- Standing forward fold (30 seconds)
            <br>
            - Child's pose (30 seconds)
            <br>
            - Seated spinal twist (30 seconds per side)
            <br>
            - Deep breathing (2 minutes)</p>
    </div>
<br>
<br>
<h3 class="days"><span>Thursday :</span> Upper Body and Posture</h3>
<div class="exercise">
    <h5>Warm-Up (5 minutes):</h5>
    <br>
    <p>- March in place (1 minute)
    <br>
    - Arm circles (1 minute forward, 1 minute backward)
    <br>
    - Cat-Cow stretch (1 minute)
    <br>
    - Standing knee-to-elbow (1 minute)</p>
    
</div>

    <h5>Main Workout (35 minutes):</h5>
<div class="exercise">
    <h5>Incline Push-Ups (Using a Table or Chair) <span>- 3 sets of 12 reps</span> </h5>
    <br>
    <img src="assets\nwbeg\incline.gif" width="180px" height="180px" alt="Incline Push-Ups">
    <br>
    <br>
    <P><span>How to do it:</span> Place your hands on a sturdy surface and perform push-ups at an angle.
    <br>
    <span>Assistance:</span> Use a higher surface to make it easier.</P>

</div>    
<div class="exercise">
    <h5>Superman Hold<span> - 3 sets of 20 seconds</span></h5>
    <br>
    <img src="assets\nwbeg\supermanhold.gif" width="180px" height="180px" alt="Superman Hold">
    <br>
    <br>
    <p><span>How to do it:</span> Lie on your stomach and lift your arms, chest, and legs off the ground. Hold the position.
    <br>
    <span>Assistance:</span> Lift only your arms or legs.</p>


</div>
<div class="exercise">
    <h5>Arm Circles <span>- 3 sets of 12 reps forward and backward</span></h5>
    <br>
    <img src="assets\uwadv\armcircle.gif" width="180px" height="180px" alt="Arm Circles">
    <br>
    <br>
    <p><span>How to do it:</span> Extend your arms out to the sides and make small circles.
    <br>
    <span>Assistance:</span> Reduce the size of the circles.</p>

</div>
<div class="exercise">
    <h5>Cat-Cow Stretch<span> - 3 sets of 10 reps</span></h5>
    <br>
    <img src="assets\nwbeg\catcow.gif" width="180px" height="180px" alt="Cat-Cow Stretch">
    <br>
    <br>
    <p><span>How to do it:</span> On all fours, alternate between arching your back (cat) and dipping your belly (cow).
    <br>
    <span>Assistance:</span> Move slowly and focus on breathing.</p>


</div>
<div class="exercise">
    <h5>Shoulder Blade Squeezes <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwbeg\shoulderblade.gif" width="180px" height="180px" alt="Shoulder Blade Squeezes">
    <br>
    <br>
    <p><span>How to do it:</span> Sit or stand, squeeze your shoulder blades together, and hold for 2 seconds.
    <br>
    <span>Assistance:</span> Perform without holding.</p>


</div>
<div class="exercise">
    <h5>Plank to Push-Up <span>- 3 sets of 12 reps</span></h5>
    <br>
    <img src="assets\nwbeg\plankpush.gif" width="180px" height="180px" alt="Plank to Push-Up">
    <br>
    <br>
    <p><span>How to do it:</span> Start in a forearm plank, push up to a high plank, and lower back down.
    <br>
    <span>Assistance:</span> Perform on your knees.</p>


</div>
<div class="exercise">
    <h5>Mountain Climbers<span> - 3 sets of 30 seconds</span></h5>
    <br>
    <img src="assets\nwbeg\mountain.gif" width="180px" height="180px" alt="Mountain Climbers">
    <br>
    <br>
    <p><span>How to do it:</span> In a plank position, drive your knees toward your chest in a fast, alternating motion.
    <br>
    <span>Assistance:</span> Perform slowly or on your knees.</p>
    

</div>
<div class="exercise">
    <h5>Cool-Down (5 minutes):</h5>
    <br>
    <p>- Standing forward fold (30 seconds)
        <br>
        - Child's pose (30 seconds)
        <br>
        - Seated spinal twist (30 seconds per side)
        <br>
        - Deep breathing (2 minutes)</p>
    

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
    <h5>Warm-Up (5 minutes):</h5>
    <br>
    <p>- March in place (1 minute)
    <br>
    - Arm circles (1 minute forward, 1 minute backward)
    <br>
    - Cat-Cow stretch (1 minute)
    <br>
    - Standing knee-to-elbow (1 minute)</p>
    
</div>
<div class="exercise">
    <h5>Main Workout (35 minutes):</h5>

</div>
<div class="exercise">
    <h5>Sun Salutations (Yoga) <span>- 4 rounds</span></h5>
    <br>
    <img src="assets\uwadv\sun.gif" width="180px" height="180px" alt="Sun Salutations (Yoga)">
    <br>
    <br>
    <P><Span>How to do it:</Span> Follow a flowing sequence of yoga poses (e.g., downward dog, forward fold, plank).
    <br>
    <span>Assistance:</span> Move slowly and modify poses as needed.</P>


</div>
<div class="exercise">
    <h5>Standing Forward Fold with Twist <span>- Hold for 30 seconds per side</span></h5>
    <br>
    <img src="assets\nwbeg\standingforwardtwist.gif" width="180px" height="180px" alt="Standing Forward Fold with Twist">
    <br>
    <br>
    <p><span>How to do it:</span> Bend forward and twist your torso to one side, reaching for the opposite foot.
    <br>
    <span>Assistance:</span> Bend your knees slightly.</p>

</div>
<div class="exercise">
    <h5>Pigeon Pose <span>- Hold for 30 seconds per side</span></h5>
    <br>
    <img src="assets\nwbeg\pigeon.gif" width="180px" height="180px" alt="Pigeon Pose">
    <br>
    <br>
    <p><span>How to do it:</span> Bring one leg forward in a bent position and stretch the other leg back.
    <br>
    <span>Assistance:</span> Use a cushion under your hip for support.</p>


</div>
<div class="exercise">
    <h5>Seated Forward Fold <span>- Hold for 30 seconds</span></h5>
    <br>
    <img src="assets\nwbeg\seatedforward.gif" width="180px" height="180px" alt="Seated Forward Fold">
    <br>
    <br>
    <p><span>How to do it:</span> Sit with your legs straight and reach for your toes.
    <br>
    <span>Assistance:</span> Bend your knees slightly.</p>


</div>
<div class="exercise">
    <h5>Deep Breathing Exercises <span>- 5 minutes</h5>
    <br>
    <img src="assets\uwadv\breathing.gif" width="180px" height="180px" alt="Deep Breathing Exercises">
    <br>
    <br>
    <p><span>How to do it:</span> Sit comfortably, inhale deeply through your nose, and exhale slowly.
    <br>
    <span>Assistance:</span> Focus on slow, controlled breaths.</p>


</div>
<div class="exercise">
    <h5>Cool-Down (5 minutes):</h5>
    <br>
    <p>- Standing forward fold (30 seconds)
        <br>
        - Child's pose (30 seconds)
        <br>
        - Seated spinal twist (30 seconds per side)
        <br>
        - Deep breathing (2 minutes)
</p>

</div>

<div>
<h1 class="heading" data-aos="zoom">Tips for<span> Success :</span></h1>
</div>
<div class="tip">
<p><span>Progression :</span> Start with the suggested reps and sets. As you get stronger, increase reps or add a third set (e.g., move from 15 to 18 reps).
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
<span>Consistency :</span> Stick to your workout plan and make adjustments as needed based on your progress.
<br>
<br>
This plan is designed to be gentle yet effective for Advanced people. Stick with it for 4-6 weeks, and then you can gradually increase intensity or add more advanced exercises. Let me know if you need further guidance! 💪
</p>
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
