
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
    <title>Overweight Beginner </title>
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
            <h1>Overweight Beginner<span> Exercises</span></h1>
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

    <h3 class="days"><span>Sunday :</span> Strength & Power (Upper Body Focus)</h3>
    <br>
    <div class="exercise">
    <h5>Plyometric Push-ups <span>– 4 sets × 12 reps</span></h5>
    <br>
    <img src="assets\owbeg\pylo.gif" width="180px" height="180px" alt="Plyometric Push-ups">
    <br>
    <br>
    <p> - Get into a push-up position.
    <br>
   - Lower your chest to the floor and push explosively so your hands leave the ground.
   <br>
    - Land softly and repeat.
    </p>
        
    </div>

    <div class="exercise">
    <h5> Dive Bomber Push-ups <span>– 4 sets × 10 reps</span></h5>
    <br>
    <img src="assets\owbeg\divebomb.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>

    <p>- Start in a downward dog position.
        <br>
        - Lower your chest towards the floor in an arching motion, then press up into an upward dog position.
        <br>
        - Reverse the movement to return.</p>
    </div>

    <div class="exercise">
        <h5>Superman Hold <span>– 3 sets × 40 sec hold</span></h5>
        <br>
        <img src="assets\owbeg\supermanhold.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
        <br>
        <br>
        <p>- Lie face down with arms extended forward.
            <br>
        - Lift arms, chest, and legs off the ground.
        <br>
        - Hold the position while engaging your back.</p>
        </div>

    <div class="exercise">    
        <h5>Plank-to-Push-up <span>– 4 sets × 12 reps</span></h5>
        <br>
        <img src="assets\owbeg\plankpush.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
        <br>
        <br>
        <p>- Start in a forearm plank.
            <br>
            - Push up into a full plank (one arm at a time).
            <br>
            - Lower back down and repeat.
        </p>
    </div>

    <div class="exercise">
    <h5> Diamond Push-ups <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owbeg\diamond.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>- Form a diamond shape with your hands under your chest.
        <br>
        - Perform push-ups while keeping elbows close to your body.
    </p>
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
<h5>Bulgarian Split Squats <span>– 4 sets × 15 reps (each leg)</span></h5>
<br>
<img src="assets\owbeg\bulgariansplit.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Place one foot on an elevated surface (couch/chair).
    <br>
    - Lower yourself into a squat until your back knee nearly touches the floor.
    <br>
    - Push up through your front leg.
</p>
</div>

<div class="exercise">  
<h5>Jump Squats <span>– 4 sets × 20 reps</span></h5>
<br>
<img src="assets\owbeg\jump.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Perform a deep squat.
    <br>
    - Jump explosively, then land softly into the next squat.
</p>
</div>

<div class="exercise">

<h5> Wall Sit <span>– 3 sets × 60 sec hold</span></h5>
<br>
<img src="assets\owbeg\wall.gif" width="180px" height="180px" alt="Wall Sit">
<br>
<br>
<p>- Sit against a wall with thighs parallel to the floor.
    <br>
    - Hold the position, keeping your back flat against the wall.
</p>
</div>

<div class="exercise">
    <h5>Calf Raises <span>– 4 sets × 20 reps</span></h5>
    <br>
    <img src="assets\owbeg\calf.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>- Stand on your toes and slowly lower back down.</p>
</div>

<div class="exercise">
<h5>Step-ups on Chair/Couch <span>– 3 sets × 15 reps (each leg)</span></h5>
<br>
<img src="assets\owbeg\stepup.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>    
<br>
<p>- Step onto an elevated surface, pushing through your heel.
    <br>
    - Lower yourself back down and switch legs.
</p>
    </div>

<br>
<br>
<h3 class="days"><span>Wednesday :</span>Lower Body Focus</h3>
<div class="exercise">    
<h5> Hollow Body Hold <span>– 3 sets × 40 sec hold</span></h5>
<br>
<img src="assets\owbeg\hollowbody.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Lie on your back, lift legs and shoulders off the ground.
    <br>
    - Keep your lower back flat and hold.
</p>
</div>
<div class="exercise">
<h5> Bicycle Crunches <span>– 4 sets × 25 reps (each side)</span></h5>
<br>
<img src="assets\owbeg\bicycle.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Lie down, bring opposite elbow to the opposite knee.
    <br>
    - Keep the movement slow and controlled.
</p>
</div>

<div class="exercise">
<h5> Side Plank with Reach Under <span>– 3 sets × 12 reps (each side)</span></h5>
<br>
<img src="assets\owbeg\sideplankreach.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Get into a side plank.
    <br>
    - Reach your top arm under your body and return to starting position.
    </p>
</div>

<div class="exercise">
<h5> Leg Raises <span>– 4 sets × 15 reps</span></h5>
<br>
<img src="assets\owbeg\legraise.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Lie flat, lift legs up without arching your lower back.
</p>
</div>

<div class="exercise">
<h5>Mountain Climbers <span>– 3 sets × 50 reps</span></h5>
<br>
<img src="assets\owbeg\mountain.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Get into a push-up position.
    <br>
    - Bring knees towards the chest in a fast-paced motion.
</p>
</div>

<br>
<br>
<h3 class="days"><span>Thursday :</span> Upper Body and Posture</h3>
<div class="exercise">
    <h5>Burpees <span>– 4 sets × 15 reps</span></h5>
    <br>
    <img src="assets\owbeg\burpees.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>- Squat, place hands on the floor, kick legs back, do a push-up, jump up.
    </p>
</div>

<div class="exercise">
<h5>Jump Lunges <span>– 3 sets × 15 reps (each leg)</span></h5>
<br>
<img src="assets\owbeg\jumplunges.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Jump into a lunge, switch legs in mid-air.
</p>
</div>  

<div class="exercise">
<h5>High Knees <span>– 4 sets × 40 sec</span></h5>
<br>
<img src="assets\owbeg\highknees.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Run in place with knees coming up to waist height.
</p>
</div>

<div class="exercise">
<h5>Skater Jumps <span>– 3 sets × 12 reps</span></h5>
<br>
<img src="assets\owbeg\skaterjump.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Jump sideways, landing on one foot, then the other.
</p>
</div>

<div class="exercise">
<h5>Push-up to Jump Squat <span>– 3 sets × 10 reps</span></h5>
<br>
<img src="assets\owbeg\pushupjump.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Do a push-up, then jump into a squat.
</p>
</div>

<br>
<br>
<h3 class="days"><span>Friday:</span> Rest or Light Activity</h3>

<div class="exercise">

<h5>Downward Dog to Cobra Stretch <span>– 3 sets × 10 reps</span></h5>
<br>
<img src="assets\owbeg\downwardcobra.gif" width="180px" height="180px" alt="Dive Bomber Push-ups"> 
<br>
<br>
<p> Move between downward dog and cobra stretch.
</p>
</div>

<div class="exercise">
<h5>Cat-Cow Stretch <span>– 3 sets × 15 reps</span></h5>
<br>
<img src="assets\owbeg\catcow.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>Arch and round your back in a tabletop position.
</p>
</div>

<div class="exercise">
    <h5>Seated Forward Fold <span>– 3 sets × 30 sec hold</span></h5>
    <br>
    <img src="assets\owbeg\seatedforward.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>Sit with legs extended, reach for your toes.
    </p>
</div>

<div class="exercise">
    <h5>Bridge Pose Hold <span>– 3 sets × 40 sec</span></h5>
    <br>
    <img src="assets\owbeg\bridgepose.jpg" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>Lie on your back, lift your hips off the ground.
    </p>
</div>

<div class="exercise">
<h5>Spinal Twists <span>– 3 sets × 30 sec (each side)</span></h5>
<br>
<img src="assets\owbeg\spinaltwist.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>
Lie on your back, twist legs to one side.
</p>
</div>


<br>
<br>
<br>
<br>
<h3 class="days"><span>Saturday :</span> Active Recovery and Flexibility</h3>
<div class="exercise">
    <h5>Handstand Progressions (Against Wall) <span>– 3 sets × 30 sec hold</span></h5>
    <br>
    <img src="assets\owbeg\wallhandstand.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>- Kick up into a handstand, using a wall for support.
    </p>
</div>

<div class="exercise">
<h5>Pistol Squats <span>– 3 sets × 12 reps (each leg)</span></h5>
<br>
<img src="assets\owbeg\pistol.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Squat down on one leg while keeping the other leg extended.
</p>
</div>

<div class="exercise">
    <h5>Superman Push-ups <span>– 4 sets × 10 reps</span></h5>
    <br>
    <img src="assets\owbeg\supermanpush.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>- Perform a push-up and lift hands and feet off the ground at the bottom.
    </p>
</div>

<div class="exercise">
    <h5>Side Plank Dips <span>– 3 sets × 15 reps (each side)</span></h5>
    <br>
    <img src="assets\owbeg\sideplankdip.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
    <br>
    <br>
    <p>- In a side plank, dip hips down and back up.
    </p>
</div>

<div class="exercise">
<h5>Burpees to Tuck Jump <span>– 3 sets × 12 reps</span></h5>
<br>
<img src="assets\owbeg\burpeestuck.gif" width="180px" height="180px" alt="Dive Bomber Push-ups">
<br>
<br>
<p>- Perform a burpee and add a tuck jump at the end.
</p>
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
