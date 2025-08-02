
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
    <title> Immunity-Boosting Yoga Asanas  </title>
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
            <h1> Immunity-Boosting <span> Yoga Asanas</span></h1>
            <p>"Regular yoga practice can strengthen the immune system, reduce stress, and improve blood circulation. These yoga asanas help detoxify the body, enhance lung capacity, and improve digestion, all of which contribute to a stronger immune system."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for<span> Immunity-Boosting</span></h1>
    <br>
    <br>

    <div class="exercise">
            <h5>🔥 Warm-Up (10 min) – Get the Heart Rate Up</h5>
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

        <div class="exercise">
            <h5>Mountain Pose <span>(Tadasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\mountain.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Improves posture, promotes blood circulation.
                <br>
                <br>
                <span>How to do:</span> 
                <br>
                - Stand tall, feet together, arms by your side.
                <br>
                - Raise arms overhead, stretch upward.
                <br>
                - Breathe deeply, hold for 30 sec.
                </p>
        </div>

        <div class="exercise">
            <h5>Downward Dog <span>(Adho Mukha Svanasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\downdog.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Boosts blood flow, strengthens respiratory system.
                <br>
                <br>
                <span>How to do:</span>
                <br>
                - Start on hands and knees, lift hips upward.
                <br>
                - Keep arms and legs straight, heels pressing down.
                <br>
                - Hold for 30 sec while breathing deeply.
                </p>
        </div>

        <div class="exercise">
            <h5>Cobra Pose <span>(Bhujangasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\corpse.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Opens lungs, strengthens back, relieves stress.
                <br>
                <br>
                <span>How to do:</span> 
                <br>
                - Lie on your stomach, hands under shoulders.       
                <br>
                - Lift chest upward while keeping elbows slightly bent.
                <br>
                - Hold for 30 sec, breathing deeply.
                </p>
        </div>

        <div class="exercise">
            <h5>Bridge Pose <span>(Setu Bandhasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\bridge.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Improves lung function, stimulates thymus (immune system gland).
                <br>
                <br>
                <span>How to do:</span>
                <br>
                - Lie on your back, bend knees, feet flat.
                <br>
                - Lift hips while pressing feet into the floor.
                <br>
                - Hold for 30 sec.
                </p>
        </div>

        <div class="exercise">
            <h5>Child’s Pose <span>(Balasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\child.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Relieves stress, improves digestion
                <br>
                <br>
                <span>How to do:</span>
                <br>
                - Sit on heels, stretch arms forward, forehead on the floor.
                <br>
                - Relax and breathe deeply.
                </p>
        </div>

        <div class="exercise">
            <h5>Seated Spinal Twist <span>(Ardha Matsyendrasana)</span> – 30 sec per side</h5>
            <br>
            <img src="assets\yoga\seatedspine.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Detoxifies organs, stimulates digestion.
                <br>
                <br>
                <span>How to do:</span>
                <br>
                - Sit with legs extended, bend right knee, place right foot over left thigh.
                <br>
                - Twist torso to the right, hold, then switch sides.
                </p>
        </div>

        <div class="exercise">
            <h5>Bow Pose <span>(Dhanurasana)</span> – 30 sec</h5>
            <br>    
            <img src="assets\yoga\bowpose.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Strengthens lungs, enhances digestion.
                <br>
                <br>
                <span>How to do:</span>
                <br>
                - Lie on your stomach, grab ankles, lift chest and legs.
                <br>
                - Hold for 30 sec while breathing deeply.
                </p>
            </div>

            <div class="exercise">
                <h5>Kapalabhati Pranayama <span>(Skull Shining Breath)</span> – 2 min</h5>
                <br>
                <img src="assets\yoga\skull.gif" height="180px" width="180px">
                <br>
                <br>
                <p>
                    <span>Benefits:</span> Detoxifies lungs, clears nasal passages.
                    <br>
                    <br>
                    <span>How to do:</span>
                    <br>
                    - Sit comfortably, inhale deeply.
                    <br>
                    - Exhale forcefully through the nose, pulling the belly in.
                    <br>
                    - Continue in short, rhythmic bursts for 2 min.
                    </p>
            </div>

            <div class="exercise">
                <h5>Legs-Up-the-Wall Pose <span>(Viparita Karani)</span> – 2 min</h5>
                <br>
                <img src="assets\yoga\legup.jpg" height="180px" width="180px">
                <br>
                <br>
                <p>
                    <span>Benefits:</span> Improves circulation, reduces stress.
                    <br>
                    <br>
                    <span>How to do:</span>
                    <br>
                    - Lie on your back, extend legs up against a wall.
                    <br>
                    - Breathe deeply and relax.
                    </p>
            </div>

            <div class="exercise">
                <h5>Corpse Pose <span>(Savasana)</span> + Deep Breathing – 5 min</h5>
                <br>
                <img src="assets\yoga\corpse.gif" height="180px" width="180px">
                <br>
                <br>
                <p>
                    <span>Benefits:</span> Relaxes the body, reduces cortisol (stress hormone).
                    <br>
                    <br>
                    <span>How to do:</span>
                    <br>
                    - Lie flat, arms relaxed, focus on breathing deeply.
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
            </div>
        <br>
    <br>
   
<div>
<h1 class="heading" data-aos="zoom">Tips for<span> Fat Loss:</span></h1>
</div>
<div class="tip">
<p><span>Stay Consistent :</span> Practice daily for best results.
<br>
<br>
<span>Eat Clean :</span> Follow a healthy diet with balanced macros.
<br>
<br>
<span>Hydrate Well :</span> Drink 2-3L water daily.
<br>
<br>
<span>Breathe Correctly :</span> Focus on deep, mindful breathing.
<br>
<br>
<span>increase intensity :</span> Hold poses longer or increase reps.
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
