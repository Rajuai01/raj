
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
    <title>Stress Relief & Relaxation Yoga Asanas  </title>
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
            <h1>Stress Relief & Relaxation <span> Yoga Asanas</span></h1>
            <p>"If you're feeling overwhelmed with work, anxiety, or daily stress, this yoga flow will help calm your mind, relax your body, and reduce tension."
            <br>
            Best Time: Practice these poses before bed for better sleep and deep relaxation.
            </p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for  <span> Stress Relief & Relaxation</span></h1>
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
            <h5>Child’s Pose <span>(Balasana)</span> – 30 sec to 1 min</h5>
            <br>
            <img src="assets\yoga\child.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Relieves tension in the back, shoulders, and neck.
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Kneel on the floor, sit back on heels, and extend arms forward.
                <br>
                - Rest forehead on the ground, relax deeply.
                </p>
        </div>

        <div class="exercise">
            <h5>Cat-Cow Pose <span>(Marjaryasana-Bitilasana)</span> – 10 reps</h5>
            <br>
            <img src="assets\yoga\catcow.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Reduces stress and improves spinal flexibility.
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Get on hands and knees.
                <br>
                - Inhale, arch your back (Cow Pose).
                <br>
                - Exhale, round your back (Cat Pose).
                </p>
        </div>
        
        <div class="exercise">
            <h5>Standing Forward Bend <span>(Uttanasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
            <span>Benefits:</span> Relieves anxiety and calms the nervous system.
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Stand with feet hip-width apart.
            <br>
            - Bend forward, let your head hang, and relax your arms.
            </p>
        </div>

        <div class="exercise">
            <h5>Seated Forward Bend <span>(Paschimottanasana)</span> – 30 sec to 1 min</h5>
            <br>
            <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
            <br>
            <br><p>
            <span>Benefits:</span> Releases stress from the lower back and calms the mind.
            <br>
            <span>How to Do:</span>
            <br>
            - Sit with legs extended forward.
            <br>
            - Reach toward your feet while keeping your spine straight.
            </p>
        </div>

        <div class="exercise">
            <H5>Legs-Up-the-Wall Pose <span>(Viparita Karani)</span> – 1 to 2 min</H5>
            <br>
            <img src="assets\yoga\legup.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Reduces stress, improves circulation, and helps with insomnia.
                <br>
                <br>
                <span>How to Do:</span>
                - Lie on your back and extend your legs up against a wall.
                <br>
                - Relax arms by your sides and breathe deeply.
                <br>
                </p>
        </div>
        <div class="exercise">
            <h5>Reclining Butterfly Pose <span>(Supta Baddha Konasana) </span>– 1 min</h5>
            <br>
            <img src="assets\yoga\recliningbutterfly.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Opens hips, reduces tension, and promotes deep relaxation.
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Lie on your back, bring soles of feet together, and let knees fall outward.
                <br>
                - Place hands on your belly or by your sides.
                </p>
        </div>

        <div class="exercise">
            <h5>Cobra Pose <span>(Bhujangasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            <p><span>Benefits:</span> Opens the chest, relieves stress, and improves posture.
            <br>
            <span>How to Do:</span>
            <br>
            - Lie on your stomach, place hands under shoulders.
            <br>
            - Lift chest while keeping elbows slightly bent.
            </p>
        </div>

        <div class="exercise">
            <h5>Alternate Nostril Breathing <span>(Nadi Shodhana)</span> – 2 min</h5>
            <br>
            <img src="assets\yoga\alterbreath.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Balances emotions, reduces stress, and clears the mind.
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Sit comfortably, close your right nostril, inhale through the left.
                <br>
                - Close left nostril, exhale through the right.
                <br>
                - Repeat for 2 minutes.
                </p>
        </div>

        <div class="exercise">
            <h5>Deep Belly Breathing <span>(Diaphragmatic Breathing)</span> – 2 min</h5>
            <br>
            <img src="assets\yoga\deepbreath.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Activates the relaxation response and lowers stress levels.
                <br>
                <br>
                <span>How to Do:</span>
                    <br>
                - Sit or lie down, place one hand on your belly.
                <br>
                - Inhale deeply through the nose, expand belly.
                <br>
                - Exhale slowly, feeling belly deflate.
                </p>
        </div>

        <div class="exercise">
            <h5>Corpse Pose <span>(Savasana)</span> – 5 to 10 min</h5>
            <br>
            <img src="assets\yoga\corpse.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span> Ultimate relaxation for the mind and body.
                <br>
                <br>
                <span>How to Do:</span>
                <br>
                - Lie on your back with arms relaxed by your sides.
                <br>
                - Close your eyes, take slow deep breaths, and let go of all tension.
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
   
<div>
<h1 class="heading" data-aos="zoom">Additional<span> Tips:</span></h1>
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

<br>
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
