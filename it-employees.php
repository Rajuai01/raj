
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
    <title>Yoga Routine for IT Employees</title>
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
            <h1>Yoga Routine for<span> IT Employees</span></h1>
            <p>"This 1-hour yoga routine helps IT employees combat the negative effects of prolonged sitting, including back pain, neck stiffness, wrist strain, poor posture, and stress."</p>
            <br>
            <br>
        
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for   <span> IT Employees</span></h1>
    <br>
    <br>
</div>
<div class="exercise">
    <h5><span>Focus Areas:</span></h5>
        <br>
        <br>
        <p>
     - Neck & Shoulder Relief (From screen time)
     <br>
     <br>
     - Spine & Back Flexibility (To prevent stiffness)
     <br>
     <br>
     - Wrist & Hand Mobility (For typing strain)
     <br>
     <br>
     - Hip & Leg Stretching (From prolonged sitting)
     <br>
     <br>
     - Stress & Mental Relaxation
    </p>
    </div>
<br>
<br>
<div class="exercise">
    <h5><span>Warm-Up (10 min) – Loosen Stiff Muscles</span></h5>
    <br>
    <br>
    <h4>Neck Rolls (Sitting or Standing) – 10 reps clockwise & counterclockwise</h4>
    <br>
    <img src="assets\yoga\neckrot.gif" height="180px" width="180px">
    <br>
    <br>
    <p>Relieves neck tension from screen time</p>
    <br>
    <br>

    <h4>Shoulder Rolls – 10 reps forward & backward</h4>
    <br>
    <img src="assets\yoga\shoulderroll.gif" height="180px" width="180px">
    <br>
    <br>
    <p>Opens tight shoulders from poor posture</p>
    <br>
    <br>

    <h4>Seated Spinal Twist (Ardha Matsyendrasana) – 30 sec per side</h4>
    <br>
    <img src="assets\yoga\seatedspine.jpg" height="180px" width="180px">
    <br>
    <br>
    <p>Relieves stiffness in the lower back</p>
    <br>
    <br>


    <h4>Wrist & Finger Stretch – 30 sec per hand</h4>
    <br>
    <img src="assets\yoga\finger.gif" height="180px" width="180px">
    <br>
    <br>
    <p>Reduces wrist pain from typing</p>
    <br>
    <br>


    <h4>Standing Forward Bend (Uttanasana) – 30 sec</h4>
    <br>
    <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
    <br>
    <br>
    <p>Stretches hamstrings & relaxes the spine</p>
    <br>
    <br>
</div>



    <div class="exercise">
        <h5><span>Strength & Posture Improvement (20 min) – Core & Spine Focus</span></h5>
        <br>
        <br>
        <h4>Cat-Cow Pose (Marjaryasana-Bitilasana) – 10 reps</h4>
        <br>
        <img src="assets\yoga\catcow.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Improves spinal flexibility & relieves back pain</p>
        <br>
        <br>

        <h4>Cobra Pose (Bhujangasana) – 30 sec</h4>
        <br>
        <img src="assets\yoga\cobra.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Strengthens the lower back & reduces stiffness</p>
        <br>
        <br>

        <h4>Downward Dog (Adho Mukha Svanasana) – 30 sec</h4>
        <br>
        <img src="assets\yoga\dog.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Stretches the entire body, improves blood flow</p>
        <br>
        <br>
        
        <h4>Plank Pose – 30 sec</h4>
        <br>
        <img src="assets\yoga\plankpose.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>Strengthens the core, prevents slouching</p>
        <br>
        <br>

        <h4>Chair Pose (Utkatasana) – 30 sec</h4>
        <br>
        <img src="assets\yoga\chairpose.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Engages leg & core muscles, boosts metabolism</p>
        <br>
        <br>
    </div>

    <div class="exercise">
        <h5><span>Hip & Leg Flexibility (15 min) – Reduce Stiffness from Sitting</span></h5>
        <br>
        <br>

        <h4>Pigeon Pose (Eka Pada Rajakapotasana) – 30 sec per side</h4>
        <br>
        <img src="assets\yoga\pigeon.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Opens tight hips from long hours of sitting</p>
        <br>
        <br>

        <h4>Butterfly Pose (Baddha Konasana) – 30 sec</h4>
        <br>
        <img src="assets\yoga\butterfly.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>Improves blood circulation in the lower body</p>
        <br>
        <br>

        <h4>Standing Quad Stretch – 30 sec per side</h4>
        <br>
        <img src="assets\yoga\quad.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Releases tension in thighs & knees</p>
        <br>
        <br>

        <h4>Seated Forward Fold (Paschimottanasana) – 30 sec</h4>
        <br>
        <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Stretches hamstrings & improves spinal health</p>
        <br>
        <br>

        <h4>Legs-Up-the-Wall Pose (Viparita Karani) – 1 min</h4>
        <br>
        <img src="assets\yoga\legup.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>Reduces swelling in legs, improves circulation</p>
        <br>
    </div>

    
    <div class="exercise">
        <h5><span>Relaxation & Stress Relief (15 min) – Mental Clarity & Calmness</span></h5>
        <br>
        <br>
        <h4>Child’s Pose (Balasana) – 30 sec</h4>
        <br>
        <img src="assets\yoga\child.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Relaxes the mind, relieves lower back pain</p>
        <br>
        <br>

        <h4>Seated Neck Stretch – 30 sec per side</h4>
        <br>
        <img src="assets\yoga\neck.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Reduces tension in the neck and upper back</p>
        <br>
        <br>

        <h4>Alternate Nostril Breathing (Nadi Shodhana Pranayama) – 2 min</h4>
        <br>
        <img src="assets\yoga\alterbreath.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Improves focus and reduces stress</p>
        <br>

        <h4>Deep Belly Breathing (Diaphragmatic Breathing) – 2 min</h4>
        <br>
        <img src="assets\yoga\deepbreath.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Enhances lung capacity and relaxation</p>
        <br>

        <h4>Corpse Pose (Savasana) – 5 min</h4>
        <br>
        <img src="assets\yoga\corpse.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Allows complete relaxation and mental clarity</p>
        <br>
    </div>
    
    



<div>
<h1 class="heading" data-aos="zoom">Additional Tips for<span> IT Employees :</span></h1>
</div>
<div class="tip">
<p><span>Take Breaks:</span> Stand up & stretch every 1-2 hours.
<br>
<br>
<span>Stay Hydrated:</span> Drink water to prevent muscle cramps.
<br>
<br>
<span>Improve Posture:</span> Keep your feet flat, shoulders relaxed, and screen at eye level.
<br>
<br>
<span>Use a Standing Desk (if possible):</span> Switch between sitting & standing.
<br>
<br>
<span>Incorporate Desk Yoga:</span> Do wrist, neck, and shoulder stretches while working.
<br>
<br>
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
