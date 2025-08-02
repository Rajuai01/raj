
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
    <title>Overweight Intermediate </title>
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
            <h1>Overweight Intermediate<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Workout Plan for<span> Beginners</span></h1>
    <br>
    <br>
    <h3 class="days"><span>Sunday :</span> Full Body Strength & Fat Loss</h3>
    <br>
    <div class="exercise">
    <h5>Bodyweight Squats <span>– 4 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owinter\bodyweight.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>

    <p>Stand with feet shoulder-width apart, lower hips until thighs are parallel to the floor, then push back up.
    </p>
    </div>

    <div class="exercise">
    
    <h5>Incline Push-ups <span>– 3 sets × 12 reps</span></h5>
    <br>
    <br>
    <img src="assets\owinter\incline.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Place hands on an elevated surface (couch or wall) and do push-ups.</p>
    </div>

    <div class="exercise">
    <h5>Glute Bridges <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owinter\glutebridge.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lie on your back, knees bent, lift hips up while squeezing glutes.</p>
</div>

<div class="exercise">
    <h5>Standing Knee Raises <span>– 3 sets × 20 reps (each leg)</span></h5>
    <br>
    <img src="assets\owinter\standingknee.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lift knees toward the chest one at a time in a controlled motion.</p>
</div>

    <div class="exercise">
    <h5>Step Touch Jumps <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\owinter\steptouch.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Step side-to-side, adding a small jump in between.</p>
        
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
<h3 class="days"><span>Tuesday:</span>  Lower Body & Core Focus</h3>

<div class="exercise">
    <h5>Step-ups (Using a Sturdy Chair/Couch) <span>– 4 sets × 12 reps (each leg)</span></h5>
    <br>
    <img src="assets\owinter\stepups.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Step onto an elevated surface, pushing through the heel, then switch legs.</p>
</div>

<div class="exercise">
    <h5>Wall Sit <span>– 3 sets × 40 sec hold</span></h5>
    <br>
    <img src="assets\owinter\wallsit.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Sit against a wall with thighs parallel to the floor, keeping back straight.</p>
    </div>

<div class="exercise">
    <h5>Side-Lying Leg Raises <span>– 3 sets × 15 reps (each leg)</span></h5>
    <br>
    <br>
    <img src="assets\owinter\sidelyingleg.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lie on one side, lift the top leg up, and lower slowly.
        </p>
</div>

<div class="exercise">
    <h5>Standing Oblique Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
    <br>
    <img src="assets\owinter\oblique.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
        <p>Stand tall, bring elbow and knee together in a crunching motion.</p>
</div>

<div class="exercise">
    <h5>Seated Leg Lifts <span>– 3 sets × 12 reps</span></h5>
    <br>
    <img src="assets\owinter\SeatedLeg.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Sit on the floor, lift legs up a few inches, hold briefly, then lower.</p>
</div>
<br>
<br>
<h3 class="days"><span>Wednesday :</span>Upper Body & Endurance</h3>
<div class="exercise">
    <h5>Knee Push-ups <span>– 4 sets × 12 reps</span></h5>
    <br>
    <img src="assets\owinter\kneepush.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Start in a push-up position but with knees on the ground. Lower chest to floor, then push back up.</p>
</div>

<div class="exercise">
    <h5>Arm Circles <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\owinter\armcircles.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Rotate arms forward and backward to strengthen shoulders.</p>
</div>

<div class="exercise">

    <h5>Modified Plank Hold <span>– 3 sets × 30 sec hold</span></h5>
    <br>
    <img src="assets\owinter\plank.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Keep core tight in a forearm plank position.</p>
</div>

<div class="exercise">
    <h5>Shadow Boxing <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\owinter\shadowbox.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
<p>Throw quick punches in the air while staying light on your feet.</p>
</div>

<div class="exercise">
    <h5>Low-Impact Jumping Jacks <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\owinter\jumpingjacks.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Step side-to-side while raising arms overhead.</p>
</div>

<br>
<br>
<h3 class="days"><span>Thursday :</span> Fat Burning Cardio & Core</h3>
<div class="exercise">
    <h5>Marching in Place <span>– 4 sets × 30 sec</span></h5>
    <br>
    <img src="assets\owinter\march.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lift knees up in place at a steady pace.</p>
</div>

<div class="exercise">
    <h5>Side-to-Side Lunges <span>– 3 sets × 12 reps (each side)</span></h5>
    <br>
    <img src="assets\owinter\sidelunges.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Step sideways into a lunge, keeping the opposite leg straight.</p>
</div>

<div class="exercise">
    <h5> Crunches <span>– 3 sets × 15 reps (each side)</span></h5>
    <br>
    <img src="assets\owinter\crunches.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lie down, bring the opposite knee to the elbow in a pedaling motion.</p>
</div>

<div class="exercise">
    
    <h5>Standing Calf Raises <span>– 3 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owinter\calf.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lift onto toes and slowly lower back down.</p>
</div>

<div class="exercise">
    <h5>Toe Touch Reach <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owinter\toetouch.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Stand tall, bend forward, and touch toes while keeping legs straight.</p>
</div>

<br>
<br>
<h3 class="days"><span>Friday:</span> Mobility & Flexibility (Active Recovery)</h3>
    <div class="exercise">
        <h5>Neck & Shoulder Rolls <span>– 3 sets × 20 sec</span></h5>
        <br>
        <img src="assets\owinter\neckrolls.gif" height="180px" width="180px" alt="Walking">
        <br>
        <br>
        <p>Slowly roll neck and shoulders in circles.
            </p>
    </div>

<div class="exercise">
    <h5>Cat-Cow Stretch <span>– 3 sets × 10 reps</span></h5>
    <br>
    <img src="assets\owinter\catcow.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Arch and round your back while on all fours.</p>
</div>

<div class="exercise">
    
<h5>Seated Forward Fold <span>– 3 sets × 20 sec hold</span></h5>
    <br>
    <img src="assets\owinter\seatedforward.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>    
        <p>Sit with legs extended, reach for your toes.</p>


</div>

<div class="exercise">
    <h5>Hip Flexor Stretch <span>– 3 sets × 20 sec (each side)</span></h5>
    <br>
    <img src="assets\owinter\hipflexor.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Lunge forward and hold, stretching the hip flexor.</p>
</div>

<div class="exercise">
    <h5>Deep Breathing & Meditation <span>– 5 min</span></h5>
    <br>
    <img src="assets\uwadv\breathing.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Focus on deep inhales and exhales for relaxation.</p>

</div>


<br>
<br>
<br>
<br>
<h3 class="days"><span>Saturday :</span>Strength & Fat Burn Combo </h3>
<div class="exercise">
    <h5> Wall Push-ups <span>– 4 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owinter\wallpush.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Perform push-ups against a wall to build upper body strength.</p>
</div>

<div class="exercise">
    <h5>Sumo Squats <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owinter\sumo.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Stand wide with toes pointing outward, squat down deeply.</p>

</div>

<div class="exercise">
    <h5>Modified Plank Taps <span>– 3 sets × 12 reps</span></h5>
    <br>
    <img src="assets\owinter\shouldertaps.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>In a plank, tap one shoulder at a time while keeping hips stable.</p>

</div>


<div class="exercise">
    <h5>Seated Core Twists <span>– 3 sets × 15 reps (each side)</span></h5>
    <br>
    <img src="assets\owinter\seatedcore.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Sit, rotate torso side to side, engaging the core.</p>
</div>

<div class="exercise">
    <h5>Walking in Place <span>– 3 sets × 2 min</span></h5>
    <br>
    <img src="assets\owinter\walking.gif" height="180px" width="180px" alt="Walking">
    <br>
    <br>
    <p>Walk with high knees to keep the heart rate up.</p>
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
