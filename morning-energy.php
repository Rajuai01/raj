
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
    <title>Morning Energy-Boosting Yoga </title>
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
            <h1>Morning Energy-Boosting  <span> Yoga Asanas</span></h1>
            <p>"Start your day feeling fresh, focused, and full of energy with this 60-minute morning yoga sequence. It will help wake up your body, improve circulation, and boost energy for the day ahead."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for <span>Morning Energy-Boosting</span></h1>
    <br>
    <br>

    <div class="exercise">
        <h5>Warm-Up (10 min) – <span>Wake Up Your Body</span></h5>
        <br>
        <br>
        <br>
        <h4>Neck Rolls – <span>10 reps (clockwise & counterclockwise)</span>
            <br>
            <img src="assets\yoga\neckrolls.gif" height="180px" width="180px"> 
            <br>
            <br>
        Shoulder Rolls – <span>10 reps forward & backward</span>
        <br>
        <img src="assets\yoga\shoulderroll.gif" height="180px" width="180px"> 
        <br>
        <br>
        Seated Spinal Twist -<span> 30 sec per side</span>
        <br>
        <img src="assets\yoga\seatedspine.jpg" height="180px" width="180px"> 
        <br>
        <br>
        Cat-Cow Pose <span>(Marjaryasana-Bitilasana)</span> – 10 reps
        <br>
        <img src="assets\yoga\catcow.gif" height="180px" width="180px"> 
        <br>
        <br>
         Standing Side Stretch – <span>30 sec per side</span>
         <br>
         <img src="assets\yoga\standingside.jpg" height="180px" width="180px"> 
         <br>
         <br>
         <br>
         </h4>
        <h3><span>Goal:</span> Loosen stiff muscles and improve flexibility.</h3>
    </div>


    <div class="exercise">
        <h5>Sun Salutations <span>(Surya Namaskar)</span> – 5 Rounds (15 min)</h5>
        <br>
        <br>
        <br>
        <br>

    <h2><span>Sun Salutation Sequence:</span></h2>
        <br>
        <br>
        <br>
    <h4>
    1.Mountain Pose <span>(Tadasana)</span> – Stand tall, inhale deeply.
    <br>
    <img src="assets\yoga\mountain.gif" height="180px" width="180px">
    <br>
    <br>
    2.Upward Salute <span>(Urdhva Hastasana)</span> – Stretch arms up.
    <br>
    <img src="assets\yoga\upward.jpg" height="180px" width="180px">
    <br>
    <br>
    3.Standing Forward Bend <span>(Uttanasana)</span> – Bend forward.
    <br>
    <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
    <br>
    <br>
    4.Halfway Lift <span>(Ardha Uttanasana)</span> – Straighten back.
    <br>
    <img src="assets\yoga\halfway.png" height="180px" width="180px">
    <br>
    <br>
    5.Plank Pose – <span>Strengthens the core</span>
    <br>
    <img src="assets\yoga\plankpose.jpg" height="180px" width="180px">
    <br>
    <br>
    6.<span>Chaturanga Dandasana</span> (Low Plank) – Strengthens arms
    <br>
    <img src="assets\yoga\lowplank.jpg" height="180px" width="180px">
    <br>
    <br>
    7.Upward-Facing Dog <span>(Urdhva Mukha Svanasana)</span> – Opens chest
    <br>
    <img src="assets\yoga\upwarddog.gif" height="180px" width="180px">
    <br>
    <br>
    8.Downward-Facing Dog <span>(Adho Mukha Svanasana)</span> – Stretches whole body
    <br>
    <img src="assets\yoga\downdog.gif" height="180px" width="180px">
    <br>
    <br>
    9.Halfway Lift → Forward Bend → Mountain Pose (Repeat)
        <br>
        <br>
        <br>
    <h3><span>Goal:</span> Improve flexibility, build strength, and energize the body</h3>
    <br>
    </h4>
    </div>

    <div class="exercise">
        <h5>Strength & Activation (15 min)</h5>
        <br>
        <br>
        <br>
        <h4>
            Chair Pose <span>(Utkatasana)</span> – 30 sec (Strengthens legs & core)
            <br>
            <img src="assets\yoga\chairpose.gif" height="180px" width="180px">
            <br>
            <br>
   
         Warrior II Pose <span>(Virabhadrasana II)</span> – 30 sec per side (Boosts endurance)
         <br>
         <img src="assets\yoga\warrior2.gif" height="180px" width="180px">
         <br>
         <br>
        Triangle Pose <span>(Trikonasana)</span> – 30 sec per side (Improves balance)
        <br>
        <img src="assets\yoga\triangle.gif" height="180px" width="180px">
        <br>
        <br>
        Tree Pose <span>(Vrikshasana)</span> – 30 sec per side (Enhances focus)
        <br>
        <img src="assets\yoga\tree.jpg" height="180px" width="180px">
        <br>
        <br>
        Boat Pose <span>(Navasana)</span> – 30 sec (Strengthens core)
        <br>
        <img src="assets\yoga\boatpose.gif" height="180px" width="180px">
        <br>
        <br>
        <br>
        <h3><span>Goal:</span> Activate muscles and build morning strength</h3>
        <br>
        </h4>
    </div>

    <div class="exercise">
        <h5>Flexibility & Mobility (10 min)</h5>
        <br>
        <br>
        <br>
        <h4>
            Pigeon Pose <span>(Eka Pada Rajakapotasana)</span> – 30 sec per side
            <br>
            <img src="assets\yoga\pigeon.gif" height="180px" width="180px">
            <br>
            <br>
            Seated Forward Fold <span>(Paschimottanasana)</span> – 30 sec
            <br>    
            <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
            <br>
            <br>
            
            Butterfly Pose <span>(Baddha Konasana)</span> – 30 sec
            <br>
            <img src="assets\yoga\butterfly.jpg" height="180px" width="180px">
            <br>
            <br>
            Cobra Pose <span>(Bhujangasana)</span> – 30 sec
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            Downward-Facing Dog <span>(Adho Mukha Svanasana)</span> – 30 sec
            <br>
            <img src="assets\yoga\dog.gif" height="180px" width="180px">
            <br>
            <br>

            <br>
            <h3><span>Goal:</span>Improve flexibility and release tension</h3>
            <br>
        </h4>
    </div>

    <div class="exercise">
        <h5>Cool Down & Relaxation (10 min)</h5>
        <br>
        <br>
        <br>
        <h4>
            Child’s Pose <span>(Balasana)</span> – 30 sec
            <br>
            <img src="assets\yoga\child.gif" height="180px" width="180px">
            <br>
            <br>
            Legs-Up-the-Wall Pose <span>(Viparita Karani)</span> – 1 min
            <br>
            <img src="assets\yoga\legup.jpg" height="180px" width="180px">
            <br>
            <br>
            Alternate Nostril Breathing <span>(Nadi Shodhana)</span> – 2 min
            <br>
            <img src="assets\yoga\alterbreath.gif" height="180px" width="180px">
            <br>
            <br>
            Deep Belly Breathing <span>(Diaphragmatic Breathing)</span> – 2 min
            <br>
            <img src="assets\yoga\deepbreath.gif" height="180px" width="180px">
            <br>
            <br>
            Corpse Pose <span>(Savasana)</span> + Meditation – 5 min
            <br>
            <img src="assets\yoga\corpse.gif" height="180px" width="180px">
            <br>
            <br>
            <br>
            
            <h3><span>Goal:</span> Relax the nervous system, calm the mind, and reduce stress</h3>
            <br>
            </h4>
    </div>


   
<div>
<h1 class="heading" data-aos="zoom">Additional<span> Tips:</span></h1>
</div>
<div class="tip">
<p><span>Stay Hydrated :</span>Drink warm water before yoga.
<br>
<br>
<span>Breathe Deeply :</span>Focus on slow, controlled breathing.
<br>
<br>
<span>Stay Consistent :</span> Do it daily for best energy levels.
<br>
<br>
<span>Listen to Your Body :</span> Modify poses if needed.
<br>
<br>
</p>
</div>

   
</section>

    <!-- Footer section code -->
    <footer class="footer">
        <br>
        <br>
        <p class="copyright">
            &copy; FitPilot 2025 - All Rights Reserved
        </p>
        <br>
        <br>
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
