
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
    <title>Strength & Muscle Building Yoga Asanas </title>
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
            <h1>Strength & Muscle Building <span> Yoga Asanas</span></h1>
            <p>"If you want to build strength, endurance, and muscle tone using yoga, these asanas focus on engaging multiple muscle groups, improving stability, and increasing flexibility without needing weights."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for   <span> Strength & Muscle Building</span></h1>
    <br>
    <br>

    <div class="exercise">
            <h5>🔥 Warm-Up (10 min) – Get the Heart Rate Up</h5>
            <br>
            
                 <p><span>Neck Rolls </span>– 10 reps
                 <br>
                 <img src="assets\yoga\neckrolls.gif" height="180px" width="180px">
            <br>
                <span>Shoulder Rolls </span>– 10 reps forward & backward
                <br>
                <img src="assets\yoga\shoulderroll.gif" height="180px" width="180px">
            <br>
                <span>Dynamic Side Bends </span>– 10 reps per side
                <br>
                <img src="assets\yoga\sidebend.gif" height="180px" width="180px">
            <br>
                <span>Standing Forward Bend (Uttanasana) </span>– 30 sec\
                <br>
                <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
            <br>
                <span>Sun Salutations (Surya Namaskar) </span>– 5 rounds</p>
                <br>
                <img src="assets\yoga\sun.gif" height="180px" width="180px">
        </div>

        <br>
        <br>
        <br>
        <br>

    <div class="exercise">
        <h5>Plank Pose <span>(Phalakasana)</span></h5>
        <br>
        <img src="assets\yoga\plankpose.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
        <span>Muscles Targeted:</span> Core, arms, shoulders, chest, back, legs
        <br>
        <br>
        <span>How to Do:</span>
        <br>
            - Get into a push-up position with arms straight.
            <br>
            - Keep your body in a straight line from head to heels.
            <br>
            - Engage your core and hold for 30-60 seconds.

            </p>
    </div>

    <div class="exercise">
        <h5>Side Plank <span>(Vasisthasana)</span></h5>
        <br>
        <img src="assets\yoga\sideplank.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span> Muscles Targeted:</span> Obliques, shoulders, arms, legs
            <br>
            <br>
            <span>How to Do:</span>
            <br>
                - From a plank position, shift your weight onto one arm.
                <br>
                - Stack your feet and lift your opposite arm toward the ceiling.
                <br>
                - Hold for 30 sec per side.
                </p>
    </div>

    <div class="exercise">
        <h5>Downward Dog to Upward Dog Flow</h5>
        <br>
        <img src="assets\yoga\downdog.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Muscles Targeted:</span> Arms, shoulders, core, back, legs
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Start in Downward Dog (hips up, arms & legs straight).
            <br>
            - Lower into a Chaturanga (low push-up), then move into Upward Dog (chest open, legs lifted).
            <br>
            - Repeat 10 reps.
            </p>
    </div>

    <div class="exercise">
        <h5>Chair Pose <span>(Utkatasana)</span></h5>
        <br>
        <img src="assets\yoga\chairpose.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Muscles Targeted:</span> Quads, glutes, core, shoulders
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Stand tall, then lower your hips as if sitting in a chair.
            <br>
            - Keep your arms extended overhead.
            <br>
            - Hold for 30-45 sec.
            </p>
    </div>

    <div class="exercise">
        <h5>Warrior II <span>(Virabhadrasana II)</span></h5>
        <br>
        <img src="assets\yoga\warrior2.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Muscles Targeted:</span> Legs, glutes, arms, core
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Step one foot forward, bend your front knee at 90 degrees.
            <br>
            - Extend both arms sideways at shoulder level.
            <br>
            - Hold for 30 sec per side.
            </p>
    </div>

    <div class="exercise">
        <h5>Warrior III <span>(Virabhadrasana III)</span></h5>
        <br>
        <img src="assets\yoga\warrior3.png" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Muscles Targeted:</span> Core, legs, glutes, arms
            <br>
            <br>
            <span>How to Do :</span>
            <br>
            - Balance on one leg, extend the other behind you.  
            <br>
            - Keep your torso parallel to the floor, arms extended forward.
            <br>
            - Hold for 30 sec per leg.
            </p>
    </div>

    <div class="exercise">
        <h5>Boat Pose <span>(Navasana)</span></h5>
        <br>
        <img src="assets\yoga\boatpose.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Muscles Targeted:</span> Core, hip flexors, spine
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Sit with knees bent, lift your legs to a 45-degree angle.
            <br>
            - Keep your arms extended parallel to the floor.
            <br>
            - Hold for 30-45 sec.
            </p>
        </div>

        <div class="exercise">
            <h5>Crow Pose <span>(Bakasana)</span></h5>
            <br>
            <img src="assets\yoga\crowpose.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Muscles Targeted:</span> Arms, shoulders, core
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Squat and place your hands on the floor.
                <br>
                - Shift your weight forward, lifting your feet off the ground.
                <br>
                - Balance on your hands for 10-20 sec.
                </p>
            </div>

        <div class="exercise">
            <h5>Bridge Pose <span>(Setu Bandhasana)</span></h5>
            <br>
            <img src="assets\yoga\bridge.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Muscles Targeted:</span> Glutes, hamstrings, lower back.
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Lie on your back, bend knees, feet flat on the floor.
                <br>
                - Lift your hips, squeezing your glutes.
                <br>
                - Hold for 30 sec.
                </p>
        </div>

    <div class="exercise">
        <h5>Locust Pose <span>(Salabhasana)</span></h5>
        <br>
        <img src="assets\yoga\locustpose.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Muscles Targeted:</span> Lower back, glutes, hamstrings
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Lie on your stomach, lift your arms, chest, and legs.
            <br>
            - Engage your back muscles.
            <br>
            - Hold for 30 sec.
            </p>

        </div>

        <div class="exercise">
            <h5>Dolphin Pose</h5>
            <br>
            <img src="assets\yoga\dolphin.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Muscles Targeted:</span> Shoulders, core, legs
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Get into a forearm plank, then lift your hips.
                <br>
                - Hold for 30 sec.
                </p>
        </div>

        <div class="exercise">
            <h5>Handstand <span>(Adho Mukha Vrksasana)</span> [Advanced]</h5>
            <br>
            <img src="assets\yoga\handstand.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Muscles Targeted:</span> Arms, shoulders, core
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Kick up against a wall, keeping your body straight.
                <br>
                - Engage your core for balance.
                <br>
                - Hold for 10-20 sec.
                </p>
        </div>


<div class="exercise">
        <h5>Cool Down & Relaxation (10 min)</h5>
        <br>
        <P>
            Seated Forward Bend <span>(Paschimottanasana)</span> – 30 sec
            <br>
            
            <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
            <br>
            <br>
            Butterfly Pose <span>(Baddha Konasana)</span> – 30 sec
            <br>
            <img src="assets\yoga\butterfly.jpg" height="180px" width="180px">
            <br>
            <br>
            Legs-Up-the-Wall Pose <span>(Viparita Karani)</span> – 1 min
            <br>
            <img src="assets\yoga\legup.jpg" height="180px" width="180px">
            <br>
            <br>
            Deep Breathing <span>(Nadi Shodhana)</span> – 2 min
            <br>
            <img src="assets\yoga\breathing.gif" height="180px" width="180px">
            <br>
            <br>
            Corpse Pose <span>(Savasana)</span> – 5 min
            <br>
            <img src="assets\yoga\corpse.gif" height="180px" width="180px">
            <br>
            <br>
            </P>
        
        <h5><span>Goal:</span> Reduce muscle tension, improve flexibility, and calm the mind</h5>
            </div>
        <br>
    <br>
   <div>
   <h1 class="heading" >Additional <span> Tips :</span></h1>
   </div>

   <div class="tip">
 <p>
<span>✔</span> Hold each pose longer to build endurance.
<br>
<span>✔</span> Repeat poses in circuits for muscle activation.
<br>
<span>✔</span> Engage core muscles in all poses for better strength.
<br>
<span>✔</span> Pair yoga with a high-protein diet for muscle growth.
<br>
<br>
</p>
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
