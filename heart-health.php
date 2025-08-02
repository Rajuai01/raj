
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
    <title>Heart Health & Blood Circulation Yoga  </title>
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
            <h1>Heart Health & Blood Circulation <span> Yoga Asanas</span></h1>
            <p>"This yoga routine improves blood flow, reduces stress, and strengthens the heart by enhancing oxygen supply, lowering blood pressure, and promoting overall cardiovascular well-being."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for<span> Heart Health & Blood Circulation</span></h1>
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
            <h5>Tadasana <span>(Mountain Pose)</span> – 30 sec</h5>
            <br>
            <<img src="assets\yoga\mountain.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Stand tall with feet together.
                <br>
                - Stretch arms overhead, interlock fingers, and rise onto your toes.
                <br>
                - Hold for 30 seconds while breathing deeply.
                <br>
                <br>
                <span>Benefits:</span>Improves circulation and posture, strengthens heart muscles.
                </p>
        </div>

        <div class="exercise">
            <h5>Vrikshasana <span>(Tree Pose)</span> – 30 sec per side</h5>
            <br>
            <img src="assets\yoga\tree.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Stand on one leg, place the other foot on your inner thigh.
                <br>
                - Balance with hands in prayer position.
                <br>
                - Hold for 30 seconds, switch sides.
                <br>
                <br>
                <span>Benefits:</span> Enhances balance, improves blood circulation, reduces stress.
                </p>
        </div>

        <div class="exercise">
            <h5>Bhujangasana <span>(Cobra Pose)</span> – 30 sec</h5>
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie on your stomach, place hands under shoulders.
                <br>
                - Lift your chest while keeping elbows soft.
                <br>
                - Hold for 30 seconds and breathe deeply.
                <br>
                <br>
                <span>Benefits:</span> Opens the heart and lungs, improves oxygen supply.
                </p>
        </div>

        <div class="exercise">
            <h5>Adho Mukha Svanasana (Downward Dog) – 30 sec</h5>
            <br>
            <img src="assets\yoga\downdog.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Form an inverted V-shape with your body, feet, and hands on the mat.
                <br>
                - Press heels toward the floor and stretch arms forward.
                <br>
                - Hold for 30 seconds.
                <br>
                <br>
                <span>Benefits:</span> Enhances blood flow, reduces heart strain.
                </p>
        </div>

        <div class="exercise">
            <h5>Setu Bandhasana (Bridge Pose) <span>– 30 sec</span></h5>
            <br>
            <img src="assets\yoga\bridge.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                - Lie on your back, bend knees, and place feet flat.
                <br>
                - Lift your hips while keeping shoulders grounded.
                <br>
                - Hold for 30 seconds.
                <br>
                <br>
                <span>Benefits:</span> Increases circulation, strengthens the heart.
                <br>
                </p>
        </div>

        <div class="exercise">
            <h5>Ustrasana (Camel Pose) <span>– 30 sec</span></h5>
            <br>
            <img src="assets\yoga\camel.png" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Kneel on the mat, hands on lower back.
                <br>
                - Lean back, touching heels with hands.
                <br>
                - Hold for 30 seconds.
                <br>
                <br>
                <span>Benefits:</span> Opens the chest, improves heart function.
                </p>
        </div>

        <div class="exercise">
            <h5>Paschimottanasana (Seated Forward Bend) <span>– 30 sec</span></h5>
            <br>
            <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Sit with legs extended, reach forward, and hold your feet.
                <br>
                - Keep back straight and hold for 30 seconds.
                <br>
                <br>
                <span>Benefits:</span> Calms the mind, improves blood circulation.
                </p>
        </div>

        <div class="exercise">
            <h5>Anulom Vilom (Alternate Nostril Breathing) <span>– 5 min</span></h5>
            <br>
            <img src="assets\yoga\alterbreath.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Close right nostril, inhale through left.
                <br>
                - Close left nostril, exhale through right.
                <br>
                - Repeat for 5 minutes.
                <br>
                <br>
                <span>Benefits:</span> Reduces blood pressure, balances heart rate.
                </p>
        </div>

        <div class="exercise">
            <h5>Shavasana (Corpse Pose) <span>– 5 min</span></h5>
            <br>
            <img src="assets\yoga\corpse.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie flat on your back, arms relaxed.
                <br>
                - Close your eyes, breathe deeply.
                <br>
                <br>
                <span>Benefits:</span> Lowers stress, stabilizes heart rate.
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
<p><span>Stay Active :</span> Walk for 30 mins daily.
<br>
<br>
<span>Eat Heart-Healthy Foods:</span> Leafy greens, nuts, and omega-3-rich foods.
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
