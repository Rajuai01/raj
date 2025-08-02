
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
    <title>Flexibility & Mobility Yoga Asanas</title>
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
            <h1>Flexibility & Mobility <span> Yoga Asanas</span></h1>
            <p>"These yoga poses will help you increase flexibility, improve joint mobility, and reduce stiffness. Great for athletes, desk workers, and anyone looking to improve movement."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for   <span> Flexibility & Mobility</span></h1>
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
            <h5>Downward-Facing Dog <span>(Adho Mukha Svanasana)</span></h5>
            <br>
            <img src="assets\yoga\dog.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
            <span>Benefits:</span> Stretches hamstrings, calves, and spine; improves overall flexibility
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Start in a plank position, lift hips up.
            <br>
            - Keep heels pressed down, hands shoulder-width apart.
            <br>
            - Hold for 30-60 sec.
            </p>
    </div>

    <div class="exercise">
        <h5>Cat-Cow Stretch <span>(Marjaryasana-Bitilasana)</span></h5>
        <br>
        <img src="assets\yoga\catcow.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span> Benefits:</span> Improves spine mobility, relieves back stiffness.
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Start on all fours, inhale, arch back (Cow).
            <br>
            - Exhale, round spine (Cat).
            <br>
            - Repeat 10-15 times.
            </p>
    </div>

    <div class="exercise">
        <h5>Cobra Pose <span>(Bhujangasana)</span></h5>
        <br>
        <img src="assets\yoga\cobra.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Increases spinal flexibility, strengthens lower back.
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Lie on your stomach, hands under shoulders.
            <br>
            - Inhale, lift chest while keeping elbows slightly bent.
            <br>
            - Hold for 20-30 sec.
            </p>
    </div>

    <div class="exercise">
        <h5>Seated Forward Fold <span>(Paschimottanasana)</span></h5>
        <br>
        <img src="assets\yoga\seatedforward.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Stretches hamstrings, spine, and lower back
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Sit with legs straight, reach forward.
            <br>
            - Keep back straight, relax into the stretch.
            <br>
            - Hold for 30-60 sec.
            </p>
    </div>
    
    <div class="exercise">
        <h5>Butterfly Pose <span>(Baddha Konasana)</span></h5>
        <br>
        <img src="assets\yoga\butterfly.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Opens hips, improves groin and inner thigh flexibility
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Sit with soles of feet touching, hold ankles.
            <br>
            - Gently press knees down, keep back straight.
            <br>
            - Hold for 30-60 sec.
            </p>
    </div>

    <div class="exercise">
        <h5>Pigeon Pose <span>(Eka Pada Rajakapotasana)</span></h5>
        <br>
        <img src="assets\yoga\pigeon.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span> Benefits:</span> Stretches hip flexors, glutes, and lower back
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Bring one leg forward, stretch the other back.
            <br>
            - Keep back straight, relax into stretch.
            <br>
            - Hold for 30 sec per side.
            </p>
    </div>

    <div class="exercise">
        <h5>Lizard Pose <span>(Utthan Pristhasana)</span></h5>
        <br>
        <img src="assets\yoga\lizard.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Deep hip stretch, improves lower body mobility
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Step one foot forward into a lunge, hands on the mat.
            <br>
            - Lower hips, keeping the back leg extended.
            <br>
            - Hold for 30 sec per side.
            </p>
    </div>

    <div class="exercise">
        <h5>Standing Forward Bend <span>(Uttanasana)</span></h5>
        <br>
        <img src="assets\yoga\standingforward.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Stretches hamstrings, calves, and lower back
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Stand tall, bend forward at the hips.
            <br>
            - Let your head hang, touch toes (if possible).
            <br>
            - Hold for 30-60 sec.
            </p>
    </div>

    <div class="exercise">
        <h5>Malasana <span>(Yogi Squat)</span></h5>
        <br>
        <img src="assets\yoga\malasana.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Opens hips, improves ankle and knee mobility.
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Squat down, feet wider than hips.
            <br>
            - Keep heels on the ground, chest lifted.
            <br>
            - Hold for 30-60 sec.
            </p>
    </div>

    <div class="exercise">
        <h5>Side Stretch <span>(Parsvakonasana)</span></h5>
        <br>
        <img src="assets\yoga\sidestretch.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Stretches side body, improves spinal flexibility
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Stand with feet wide, reach one arm overhead.
            <br>
            - Keep legs strong, lean sideways.
            <br>
            - Hold for 20-30 sec per side.
            </p>
    </div>

    <div class="exercise">
        <h5>Legs-Up-the-Wall Pose <span>(Viparita Karani)</span></h5>
        <br>
        <img src="assets\yoga\legup.jpg" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Improves circulation, relieves tension in legs and back.
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Lie on your back, legs up against the wall.
            <br>
            - Keep arms relaxed, breathe deeply.
            <br>
            - Hold for 1-2 min.
            </p>
    </div>

    <div class="exercise">
        <h5>Child’s Pose <span>(Balasana)</span></h5>
        <br>
        <img src="assets\yoga\child.gif" height="180px" width="180px">
        <br>
        <br>
        <p>
            <span>Benefits:</span> Stretches lower back, hips, and shoulders.
            <br>
            <br>
            <span>How to Do:</span>
            <br>
            - Sit on knees, extend arms forward.
            <br>
            - Rest forehead on the floor, relax completely.
            <br>
            - Hold for 30-60 sec.
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
<h1 class="heading" data-aos="zoom">Additional<span> Tips:</span></h1>
</div>
<div class="tip">
<p><span>Consistency is Key: </span> Practice at least 4-5 times a week for best results.
<br>
<br>
<span>Hold Poses Longer:</span> Try increasing hold time to 1-2 minutes for deeper flexibility.
<br>
<span>Breathe Deeply:</span> Helps muscles relax into the stretch.
<br>
<span>Modify as Needed:</span> Use props (pillows, yoga blocks) for comfort.
<br>
<span>Hydrate & Stay Active:</span> Helps reduce stiffness and improves mobility.
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
