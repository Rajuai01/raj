
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
    <title>Hormonal Balance & Women’s Health </title>
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
            <h1>Hormonal Balance & Women’s Health <span> Yoga Asanas</span></h1>
            <p>"Hormonal imbalances can lead to issues like irregular periods, PCOS, thyroid problems, menopause symptoms, mood swings, and stress. Yoga helps regulate hormones by stimulating the endocrine system, reducing stress, and improving circulation."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for<span> Hormonal Balance & Women's Health</span></h1>
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
            <h5>Butterfly Pose <span>(Baddha Konasana)</span> – 1 min</h5>
            <br>
            <img src="assets\yoga\butterfly.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Regulates menstrual cycles
                <br>
                ✔ Improves blood flow to pelvic organs
                <br>
                ✔ Reduces PCOS symptoms
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Sit with your spine straight.
                <br>
                - Bring your feet together and let your knees drop to the sides.
                <br>
                -Hold your feet and gently flap your legs like butterfly wings.
                </p>
        </div>

        <div class="exercise">
            <h5>Cat-Cow Pose <span>(Marjaryasana-Bitilasana)</span> – 10 reps</h5>
            <br>
            <img src="assets\yoga\catcow.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Stimulates thyroid function  
                <br>
                ✔ Relieves stress and anxiety
                <br>
                ✔ Enhances spinal flexibility
                <br>
                <br>
                <span>How to do it:</span>
                <br>               
                - Start on all fours.
                <br>
                - Inhale, arch your back (cow pose).
                <br>
                - Exhale, round your back (cat pose).
                </p>
        </div>

        <div class="exercise">
            <h5>Cobra Pose <span>(Bhujangasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Stimulates adrenal glands
                <br>
                ✔ Improves thyroid function
                <br>
                ✔ Reduces stress and anxiety
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Lie on your stomach, hands under shoulders.
                <br>
                - Press into your hands and lift your chest.
                <br>
                - Keep elbows slightly bent and look up.
                </p>
        </div>

        <div class="exercise">
            <h5>Child’s Pose <span>(Balasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\child.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Calms the nervous system
                <br>
                ✔ Relieves stress and anxiety
                <br>
                ✔ Regulates cortisol (stress hormone)
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Sit on your knees, bring your forehead to the mat.
                <br>
                - Extend your arms forward or keep them beside your body.
                </p>
        </div>

        <div class="exercise">
            <h5>Seated Forward Bend <span>(Paschimottanasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                    <br>
                ✔ Stimulates ovaries and uterus
                <br>
                ✔ Helps with PCOS and menstrual cramps
                <br>
                ✔ Relieves stress and fatigue
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Sit with legs straight.
                <br>
                - Inhale, lengthen your spine.
                <br>
                - Exhale, bend forward, reaching for your feet.
                </p>
        </div>

        <div class="exercise">
            <h5>Bridge Pose <span>(Setu Bandhasana)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\bridge.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Stimulates reproductive organs
                <br>
                ✔ Balances estrogen and progesterone levels
                <br>
                ✔ Strengthens lower back and pelvic floor
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Lie on your back, knees bent, feet hip-width apart.
                <br>
                - Lift your hips while pressing into your feet.
                <br>
                - Hold for 30 seconds, then release.
                </p>
        </div>

        <div class="exercise">
            <h5>Reclining Butterfly Pose <span>(Supta Baddha Konasana)</span> – 1 min</h5>
            <br>
            <img src="assets\yoga\recliningbutterfly.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Regulates menstrual cycles
                <br>
                ✔ Reduces PCOS symptoms
                <br>
                ✔ Improves blood flow to reproductive organs
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Lie on your back, bring your feet together.
                <br>
                - Let your knees drop to the sides.
                <br>
                - Place hands on belly or by your sides.
                </p>
        </div>

        <div class="exercise">
            <h5>Legs-Up-the-Wall Pose <span>(Viparita Karani)</span> – 2 min</h5>
            <br>
            <img src="assets\yoga\legup.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Boosts blood circulation
                <br>
                ✔ Regulates thyroid and adrenal glands
                <br>
                ✔ Reduces menstrual cramps and bloating
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Lie on your back, legs resting against a wall.
                <br>
                - Keep arms relaxed at your sides.
                </p>
        </div>

        <div class="exercise">
            <h5>Alternate Nostril Breathing <span>(Nadi Shodhana)</span> – 3 min</h5>
            <br>
            <img src="assets\yoga\alterbreath.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Balances hormones naturally
                <br>
                ✔ Improves oxygen supply to the brain
                <br>
                ✔ Reduces stress and anxiety
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Sit comfortably, close your right nostril with your thumb.
                <br>
                - Inhale through the left nostril, close it, and exhale through the right.
                <br>
                - Repeat on the other side.
                </p>
        </div>

        <div class="exercise">
            <h5>Corpse Pose <span>(Savasana)</span> + Meditation – 5 min</h5>
            <br>
            <img src="assets\yoga\corpse.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>Benefits:</span>
                <br>
                ✔ Reduces cortisol levels
                <br>
                ✔ Promotes relaxation and deep rest
                <br>
                ✔ Supports overall hormonal health
                <br>
                <br>
                <span>How to do it:</span>
                <br>
                - Lie on your back, arms relaxed at your sides.
                <br>
                - Focus on deep breathing and let go of all tension.
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
<h1 class="heading" data-aos="zoom">Additional <span> Tips:</span></h1>
</div>
<div class="tip">
<p> <span>Stay Hydrated –</span> Drink warm water with lemon or herbal teas.
<br>
<br>
<span>Eat a Balanced Diet –</span> Include fiber, healthy fats, and protein.
<br>
<br>
<span>Reduce Sugar & Caffeine –</span> Helps regulate insulin and cortisol.
<br>
<br>
<span>Sleep Well –</span> 7-8 hours of quality sleep for hormonal balance.
<br>
<br>
<span>Practice Daily Yoga & Meditation –</span> Helps regulate mood and stress.
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
