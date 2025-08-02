
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
    <title>Pain Relief & Recovery Yoga Asanas</title>
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
            <h1>Pain Relief & Recovery <span> Yoga Asanas</span></h1>
            <p>"These yoga poses help relieve pain, improve mobility, and aid recovery from stiffness, soreness, or chronic pain."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for <span> Pain Relief & Recovery</span></h1>
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
            <h5>Child’s Pose <span>(Balasana)</span> – For Back & Hip Pain</h5>
            <br>
            <img src="assets\yoga\child.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Sit on your knees, stretch your arms forward, and lower your chest to the ground.
                <br>
                - Relax your forehead on the floor and hold for 30-60 sec.
                <br>
                <br>
                <span> Benefits:</span>
                <br>
                - Relieves lower back pain and hip tension
                <br>
                - Stretches spine and shoulders
                <br>
                - Promotes deep relaxation
                </p>
        </div>

        <div class="exercise">
            <h5>Cat-Cow Pose <span>(Marjaryasana-Bitilasana)</span> – For Spine Flexibility</h5>
            <br>
            <img src="assets\yoga\catcow.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Get on all fours, inhale and arch your back (Cow Pose).
                <br>
                - Exhale, round your spine and tuck your chin (Cat Pose).
                <br>
                - Repeat for 10 slow reps.
                <br>
                <br>
                <span>Benefits:</span>
                <br>
                - Eases lower back stiffness
                <br>
                - Increases spinal mobility
                <br>
                - Relieves tension from prolonged sitting
                <br>
            </p>
        </div>

        <div class="exercise">
            <h5>Downward Dog <span>(Adho Mukha Svanasana)</span> – For Full-Body Stretch</h5>
            <br>
            <img src="assets\yoga\downwarddog.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
            <span>How to do it:</span>
            <br>
            - Start in a push-up position, lift your hips up, and form an inverted ‘V’.
            <br>
            - Keep your heels down and hold for 30 sec.
            <br>
            <br>
            <span>Benefits:</span>
            <br>
            - Stretches spine, hamstrings & calves
            <br>
            - Relieves shoulder and back tension
            <br>
            - Improves blood circulation
            <br>
            </p>
        </div>

        <div class="exercise">
            <h5>Cobra Pose <span>(Bhujangasana)</span> – For Back Pain & Posture</h5>
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Lie on your stomach, place hands under shoulders, and lift your chest up.
                <br>
                - Hold for 30 sec, keeping elbows slightly bent.
                <br>
                <br>
                <span>Benefits:</span>
                <br>
                - Relieves lower back pain
                <br>
                - Opens the chest and improves posture
                <br>
                - Strengthens the spine
                </p>
        </div>

        <div class="exercise">
            <h5>Seated Spinal Twist <span>(Ardha Matsyendrasana)</span> – For Back & Shoulder Pain</h5>
            <br>
            <img src="assets\yoga\seatedspine.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                    <br>
                    - Sit with legs extended, bend your right knee over your left leg.
                    <br>
                    - Place right hand behind, left elbow outside the right knee, and twist.
                    <br>
                    - Hold for 30 sec per side.
                    <br>
                    <br>
                    <span>Benefits:</span>
                    <br>
                    - Relieves spinal stiffness
                    <br>
                    - Eases back & shoulder pain
                    <br>
                    - Improves digestion
                    <br>
                    </p>
        </div>

        <div class="exercise">
            <h5>Legs-Up-the-Wall Pose <span>(Viparita Karani)</span> – For Leg & Foot Pain</h5>
            <br>
            <img src="assets\yoga\legup.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Lie on your back and rest your legs against a wall.
                <br>
                - Hold for 1-2 min, breathing deeply.
                <br>
                <br>
                <span>Benefits:</span>
                <br>
                - Reduces leg swelling & fatigue
                <br>
                - Relieves varicose veins & improves circulation
                <br>
                - Eases lower back pain
                </p>
            </div>

        <div class="exercise">
            <h5>Butterfly Pose <span>(Baddha Konasana)</span> – For Hip & Knee Pain</h5>
            <br>
            <img src="assets\yoga\butterfly.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Sit with soles of your feet together, knees open wide.
                <br>
                - Hold your feet and gently press knees toward the floor.
                <br>
                - Hold for 30 sec.
                <br>
                <br>
                <span>Benefits:</span>
                <br>
                - Relieves hip and groin tightness
                <br>
                - Improves knee flexibility
                <br>
                - Helps with lower body recovery
                </p>
        </div>

        <div class="exercise">
            <h5>Reclining Twist <span>(Supta Matsyendrasana)</span> – For Lower Back & Sciatic Pain</h5>
            <br>
            <img src="assets\yoga\recliningtwist.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Lie on your back, bring one knee to the chest, and twist it across your body.
                <br>
                - Extend the opposite arm and hold for 30 sec per side.
                <br>
                <br>
                <span>Benefits:</span>
                <br>
                - Relieves lower back & sciatic pain
                <br>
                - Improves spinal mobility
                <br>
                - Helps with stress relief
                </p>

            </div>

        <div class="exercise">
            <h5>Standing Forward Fold <span>(Uttanasana)</span> – For Hamstring & Back Relief</h5>
            <br>
            <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to do it:</span>
                <br>
                - Stand with feet hip-width apart, bend forward, and let your head hang.
                <br>
                - Hold for 30 sec, keeping knees slightly bent if needed.
                <br>
                <br>
                <span>Benefits:</span>
                <br>
                - Stretches hamstrings & lower back
                <br>
                - Reduces stress and tension
                <br>
                - Improves blood flow to the brain
                <br>
            </p>
        </div>

        <div class="exercise">
            <h5>Corpse Pose <span>(Savasana)</span> – For Full-Body Recovery</h5>
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
            <span>How to do it:</span>
            <br>
            - Lie on your back, arms at your sides, palms facing up.
            <br>
            - Close your eyes, breathe deeply, and relax for 5 min.
            <br>
            <br>
            <span>Benefits:</span>
            <br>
            - Relieves stress and fatigue
            <br>
            - Promotes deep relaxation & healing
            <br>
            - Helps in mental and physical recovery
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
<span>Go Slow: </span>Avoid forcing any pose; listen to your body.
<br>
<br>
<span>Use support :</span> A cushion or folded blanket can help in seated poses.
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
