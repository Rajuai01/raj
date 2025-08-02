
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
    <title>Weight Loss & Fat Burn Yoga </title>
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
            <h1>Weight Loss & Fat Burn  <span> Yoga Asanas</span></h1>
            <p>" This power yoga routine is designed to help burn fat, boost metabolism, and improve flexibility. It combines dynamic movements and static holds for maximum fat-burning benefits."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Weight Loss & Fat Burn  <span> Yoga Asanas</span></h1>
    <br>
    <br>
    <h3 class="days"><span> 1-Hour Daily Yoga Plan for </span> Fat Loss</h3>
    <br>
    
        <div class="exercise">
            <h5>🔥 Warm-Up (10 min) – Get the Heart Rate Up</h5>
                <p><span>Neck Rolls </span>– 10 reps
                <br>
                <img src="assets\yoga\neckrolls.gif" height="180px" width="180px">
                <br>
                <br>
            <br>
                <span>Shoulder Rolls </span>– 10 reps forward & backward
                <br>
                <img src="assets\yoga\shoulderroll.gif" height="180px" width="180px">
                <br>
                <br>
            <br>
                <span>Dynamic Side Bends </span>– 10 reps per side
                <br>
                <img src="assets\yoga\sidebend.gif" height="180px" width="180px">
            <br>
                <span>Standing Forward Bend (Uttanasana) </span>– 30 sec\
                <br>
                <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
            <br>
                <span>Sun Salutations (Surya Namaskar) </span>– 5 rounds
                <br>
                <img src="assets\yoga\sun.gif" height="180px" width="180px">
            </p>
            </div>

    <h5><span> Goal:</span> Activate muscles, increase blood flow, and warm up the body</h5>
        <br>
        <h5> Fat Burn Yoga Asanas (40 min)</h5>
    
    <div class="exercise">
        <h5>Chair Pose (Utkatasana) <span>– 30 sec × 3 sets</span></h5>
        <br>
        <img src="assets\yoga\chairpose.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Stand with feet together, bend knees as if sitting in a chair.
            <br>
            Keep arms raised, back straight
            </p>
        <h4><span>Benefits:</span> Strengthens thighs, glutes, and core</h4>
    </div>

    <div class="exercise">
        <h5>Warrior II (Virabhadrasana II) <span>– 30 sec per side × 3 sets</span></h5>
        <br>
        <img src="assets\yoga\warrior2.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Stand wide, bend front knee at 90°.
            <br>
            Stretch arms out parallel, engage core
        </p>
        <h4><span>Benefits:</span> Tones legs, burns belly fat</h4>

    </div>

    <div class="exercise">
        <h5>High Plank to Low Plank <span>(Chaturanga Dandasana)</span>– 10 reps × 3 sets</h5>
        <br>
        <img src="assets\yoga\highplank.gif" height="180px" width="180px">
        <br>
        <br>
        <p>Start in a high plank.
            <br>    
        Lower down into a push-up, keeping elbows close.
        </p>
        <h4><span>Benefits:</span> Strengthens arms, core, and burns fat.</h4>

    </div>

    <div class="exercise">
        <h5>Downward Dog to Knee Drive <span>– 10 reps per side × 3 sets</span></h5>
        <br>
        <img src="assets\yoga\downwarddog.gif" height="180px" width="180px">
        <br>
        <br>
        <p>From downward dog, shift forward, bring knee toward chest.
            <br>
            Return and repeat
            </p>
        <h4><span>Benefits:</span> Engages core, tones abs, and builds upper body strength.</h4></div>

    </div>

<div class="exercise">
    <h5>Boat Pose <span>(Navasana)</span> – 30 sec × 3 sets</h5>
    <br>
    <img src="assets\yoga\boatpose.gif" height="180px" width="180px">
    <br>
    <br>
    <p>Sit, lift legs off the ground, balance on tailbone.
        <br>
        Hold arms extended forward.
        </p>
    <h4><span>Benefits:</span> Burns belly fat, strengthens core.</h4>
</div>

<div class="exercise">
    <h5>Crescent Lunge <span>(Anjaneyasana)</span> – 30 sec per side × 3 sets</h5>
    <br>
    <img src="assets\yoga\crescent.jpg" height="180px" width="180px">
    <br>
    <br>
    <p>Step one foot forward, bend knee, and extend arms up
    <br>
    Keep back leg straight, engage thighs
    </p>
    <br>
    <h4><span>Benefits:</span> Builds leg muscles, tones lower body</h4>
    
</div>

<div class="exercise">
    <h5>Bridge Pose <span>(Setu Bandhasana) </span>0– 30 sec × 3 sets</h5>
    <br>
    <img src="assets\yoga\bridge.jpg" height="180px" width="180px">
    <br>
    <br>
    <p>
    Lie on your back, bend knees, lift hips
    <br>
    Keep feet flat and squeeze glutes
        </p>
    <h4><span>Benefits:</span> Strengthens lower back, burns belly fat.</h4>
</div>

<div class="exercise">
    <h5>Twisting Chair Pose <span>– 30 sec per side × 3 sets</span></h5>
    <br>
    <img src="assets\yoga\twistingchair.gif" height="180px" width="180px">
    <br>
    <br>
    <p>
    Sit into Chair Pose, twist torso to one side
    <br>
    Keep knees aligned, hold position
        </p>
    <h4><span>Benefits:</span> Engages obliques, tones waist.</h4>
</div>

<div class="exercise">
    <h5>Side Plank <span>(Vasisthasana)</span> – 30 sec per side × 3 sets</h5>
    <br>
    <img src="assets\yoga\sideplank.jpg" height="180px" width="180px">
    <br>
    <br>
    <p>From a plank, shift to one arm, keep body aligned
    <br>
        Engage core and hold
    <h4><span>Benefits:</span> Strengthens obliques and burns fat</h4>
        </p>

</div>

<div class="exercise">
    <h5>Bow Pose <span>(Dhanurasana)</span> – 30 sec × 3 sets</h5>
    <br>
    <img src="assets\yoga\bowpose.jpg" height="180px" width="180px">
    <br>
    <br>
    <p>Lie on stomach, grab ankles, and lift chest.
        <br>
    Hold and breathe deeply
    </p>
    <h4><span>Benefits:</span> Stretches abs, improves digestion, and burns fat</h4>

</div>

<br>

<br>
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
