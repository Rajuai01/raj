
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
    <title>Obesity Advanced</title>
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
            <h1>Obesity Advanced<span> Exercises</span></h1>
            <p>"Hey, here is your Weekly Workout plan !. Go Fit,Healthy and Dynamic!"</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Home Workout Plan for Fat Loss (Advanced Level, No Equipment)</h1>
    <br>
    <br>
    
    <h3 class="days">How to Progress Each Week?</h3>
    <div class="exercise">
        <p>✔ Increase reps by 2-5 each week.
            <br>
            ✔ Reduce rest time between sets.
            <br>
            ✔ Add intensity by performing exercises faster while maintaining good form.
            <br>
            ✔ Stay consistent – results come with time!
    </div>

    <h3 class="days"><span>Sunday :</span> Full-Body HIIT</h3>
    <br>
    
    <p>(Perform exercises back-to-back, rest 30 sec between rounds)
    <br>    
    🔁 Repeat Circuit 3-4 Times
    </p>

        <div class="exercise">
            <h5>Jump Squats <span>– 3 sets × 15 reps</span></h5>
            <br>
            <img src="assets\obadv\jumpsquats.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Push-ups (Regular or Wide) <span>– 3 sets × 15 reps</span></h5>
            <br>
            <img src="assets\obadv\pushups.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>High Knees <span>– 3 sets × 45 sec</span></h5>
            <br>
            <img src="assets\obadv\highknees.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Plank Shoulder Taps <span>– 3 sets × 15 reps (each side)</span></h5>
            <br>
            <img src="assets\obadv\plankshoulder.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Jump Lunges <span>– 3 sets × 12 reps (each leg)</span></h5>
            <br>
            <img src="assets\obadv\jumplunges.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
            <br>
            <img src="assets\obadv\bicycle.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Burpees <span>– 3 sets × 12 reps</span></h5>
            <br>
            <img src="assets\obadv\burpees.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Mountain Climbers <span>– 3 sets × 45 sec</span></h5>
            <br>
            <img src="assets\obadv\mountain.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
            <br>
            <img src="assets\obadv\flutter.gif" height="180px" width="180px" >
            <br>
        </div>

        <div class="exercise">
            <h5>Plank Hold <span>– 3 sets × 45 sec</span></h5>
            <br>
            <img src="assets\obadv\plank.gif" height="180px" width="180px" >
            <br>
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
<h3 class="days"><span>Tuesday:</span> Lower Body & Explosive Power</h3>


Repeat Circuit 3-4 Times
    <div class="exercise">
        <h5>Jump Rope (without a rope) <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obadv\jumprope.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Squat Pulses <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\obadv\squatpulse.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Bulgarian Split Squats (using a chair) <span>– 3 sets × 12 reps (each leg)</span></h5>
        <br>
        <img src="assets\obadv\bulgarian.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Glute Bridges <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\glute.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Lateral Lunges <span>– 3 sets × 12 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\lateral.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Calf Raises <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\obadv\calf.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Jump Squats <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\jumpsquats.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Standing Knee-to-Elbow Crunches <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\obadv\standingknee.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Wall Sit <span>– 3 sets × 45 sec</span></h5>
        <br>
        <img src="assets\obadv\wallsit.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Burpees <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\burpees.gif" height="180px" width="180px" >
        <br>
    </div>
    

<br>
<br>
<h3 class="days"><span>Wednesday :</span> Upper Body & Core Strength</h3>

Repeat Circuit 3-4 Times
    <div class="exercise">
        <h5>Push-ups (Regular, Diamond, or Archer) <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\archer.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Plank Shoulder Taps <span>– 3 sets × 15 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\plankshoulder.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Superman Hold <span>– 3 sets × 40 sec</span></h5>
        <br>
        <img src="assets\obadv\supermanhold.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Triceps Dips (Using a Couch/Chair) <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\triceps.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5> Pike Push-ups <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\pike.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Twists <span>– 3 sets × 20 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\seatedtwist.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obadv\flutter.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Hanging Leg Raises (lying on the floor) <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\hangingleg.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Hollow Body Hold <span>– 3 sets × 40 sec</span></h5>
        <br>
        <img src="assets\obadv\hollow.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Burpees <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\burpees.gif" height="180px" width="180px" >
        <br>
    </div>

<br>
<br>
<h3 class="days"><span>Thursday :</span>  Intense Cardio & Fat Burn</h3>

(Perform exercises back-to-back, rest 30 sec between rounds)
🔁 Repeat Circuit 3-4 Times
<br>
<div class="exercise">
    <h5>Jump Rope (without a rope) <span>– 3 sets × 60 sec</span></h5>
    <br>
    <img src="assets\obadv\jumprope.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>High Knees <span>– 3 sets × 45 sec</span></h5>
    <br>
    <img src="assets\obadv\highknees.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Jump Squats <span>– 3 sets × 15 reps</span></h5>
    <br>
    <img src="assets\obadv\jumpsquats.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Mountain Climbers <span>– 3 sets × 45 sec</span></h5>
    <br>
    <img src="assets\obadv\mountain.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Step-ups (on a sturdy surface) <span>– 3 sets × 12 reps (each leg),/</span></h5>
    <br>
    <img src="assets\obadv\stepup.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Lateral Hops <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obadv\lateralhop.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
    <br>
    <img src="assets\obadv\bicycle.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
    <br>
    <img src="assets\obadv\flutter.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Plank-to-Push-up <span>– 3 sets × 12 reps</span></h5>
    <br>
    <img src="assets\obadv\plankpush.gif" height="180px" width="180px" >
    <br>
</div>

<div class="exercise">
    <h5>Burpees <span>– 3 sets × 12 reps</span></h5>
    <br>
    <img src="assets\obadv\burpees.gif" height="180px" width="180px" >
    <br>
</div>
    

<br>
<br>
<h3 class="days"><span>Friday:</span> Strength & Muscle Endurance</h3>
🔁 Repeat Circuit 3-4 Times
<br>
    <div class="exercise">
        <h5>Squat Pulses <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\obadv\squatpulse.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Glute Bridges <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\glute.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Push-ups (Archer or Wide) <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\archer.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Plank Shoulder Taps <span>– 3 sets × 15 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\plankshoulder.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Bulgarian Split Squats (using a chair) <span>– 3 sets × 12 reps (each leg)</span></h5>
        <br>
        <img src="assets\obadv\bulgarian.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Seated Twists <span>– 3 sets × 20 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\seatedtwist.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obadv\flutter.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\bicycle.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Jump Lunges <span>– 3 sets × 12 reps (each leg)</span></h5>
        <br>
        <img src="assets\obadv\jumplunges.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5> Burpees <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\burpees.gif" height="180px" width="180px" >
        <br>
    </div>

<br>
<br>
<br>
<br>
<h3 class="days"><span>Saturday :</span> Speed & Agility Training</h3>
Repeat Circuit 3-4 Times
<br>
    <div class="exercise">
        <h5>Jump Rope (without a rope) <span>– 3 sets × 60 sec</span></h5>
        <br>
        <img src="assets\obadv\jumprope.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>High Knees <span>– 3 sets × 45 sec</span></h5>
        <br>
        <img src="assets\obadv\highknees.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5> Squats <span>– 3 sets × 20 reps</span></h5>
        <br>
        <img src="assets\obadv\squats.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Push-ups (Regular or Wide) <span>– 3 sets × 15 reps</span></h5>
        <br>
        <img src="assets\obadv\pushups.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Bicycle Crunches <span>– 3 sets × 20 reps (each side)</span></h5>
        <br>
        <img src="assets\obadv\bicycle.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Flutter Kicks <span>– 3 sets × 30 sec</span></h5>
        <br>
        <img src="assets\obadv\flutter.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Mountain Climbers <span>– 3 sets × 45 sec</span></h5>
        <br>
        <img src="assets\obadv\mountain.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Plank-to-Push-up <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\plankpush.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Burpees <span>– 3 sets × 12 reps</span></h5>
        <br>
        <img src="assets\obadv\burpees.gif" height="180px" width="180px" >
        <br>
    </div>

    <div class="exercise">
        <h5>Wall Sit <span>– 3 sets × 45 sec</span></h5>
        <br>
        <img src="assets\obadv\wallsit.gif" height="180px" width="180px" >
        <br>
    </div>

    

<div>
<h1 class="heading" data-aos="zoom">Tips for<span> Success :</span></h1>
</div>
<div class="tip">
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
