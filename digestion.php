
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
    <title> Yoga for Digestion & Gut Health</title>
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
            <h1>Yoga for Digestion & Gut Health <span> Yoga Asanas</span></h1>
            <p>"Practicing yoga can help improve digestion, reduce bloating, relieve constipation, and promote gut health by stimulating the digestive organs and enhancing blood flow."</p>
            <br>
            <a href="#levels" class="bmi">Click Here</a>
            </div>
    </section>


   <!-- Advanced plan  -->
   <section class="beginner" id="levels">
   <div>
   <h1 class="heading" data-aos="zoom">Yoga Asanas for <span> Digestion & Gut Health</span></h1>
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
            <h5>Seated Spinal Twist <span>(Ardha Matsyendrasana)</span></h5>
            <br>
            <img src="assets\yoga\seatedspine.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Sit with legs extended, bend your right knee, and place the right foot over the left leg.
                <br>
                - Place your right hand behind you and left elbow on the right knee.
                <br>
                - Twist your torso and look over your right shoulder.
                <br>
                - Hold for 30 sec, repeat on the other side.
                <br>
                <br>
                <span>Benefits:</span> Stimulates digestion, relieves constipation, and detoxifies the liver.
                </p>
        </div>

        <div class="exercise">
            <h5>Wind-Relieving Pose <span>(Pavanamuktasana)</span></h5>
            <br>
            <img src="assets\yoga\wind.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie on your back and bring both knees to your chest.
                <br>
                - Hug your knees and gently rock side to side.
                <br>
                - Hold for 30 sec.
                <br>
                <br>
                <span>Benefits:</span> Reduces bloating, relieves gas, and improves digestion.
                </p>
        </div>

        <div class="exercise">
            <h5>Cobra Pose <span>(Bhujangasana)</span></h5>
            <br>
            <img src="assets\yoga\cobra.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie on your stomach, place hands under shoulders, and lift your chest.
                <br>
                - Hold for 30 sec while breathing deeply.
                <br>
                <br>
                <span>Benefits:</span> Strengthens abdominal muscles and improves bowel movements.
                </p>
        </div>

        <div class="exercise">
            <h5>Cat-Cow Pose <span>(Marjaryasana-Bitilasana)</span></h5>
            <br>
            <img src="assets\yoga\catcow.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Start in a tabletop position (hands & knees).
                <br>
                - Inhale, arch your back (Cow Pose), lifting your head and tailbone.
                <br>
                - Exhale, round your back (Cat Pose), tucking your chin to your chest.
                <br>
                - Repeat 10 times.
                <br>
                <br>
                <span>Benefits:</span> Improves gut motility, massages abdominal organs, relieves bloating.
                </p>
        </div>

        <div class="exercise">
            <h5>Bow Pose <span>(Dhanurasana)</span></h5>
            <br>
            <img src="assets\yoga\bowpose.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie on your stomach, bend your knees, and grab your ankles.
                <br>
                - Lift your chest and legs off the ground, pulling your feet up.
                <br>
                - Hold for 20-30 sec.
                <br>
                <br>
                <span>Benefits:</span> Strengthens digestion, relieves constipation, and stimulates metabolism.
                </p>
        </div>

        <div class="exercise">
            <h5>Child’s Pose <span>(Balasana)</span></h5>
            <br>
            <img src="assets\yoga\child.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Sit on your heels, extend arms forward, and lower your chest.
                <br>
                - Hold for 30 sec to 1 min.
                <br>
                <br>
                <span>Benefits:</span> Relaxes abdominal muscles, reduces stress, and aids digestion.
                </p>
        </div>

        <div class="exercise">
            <h5>Bridge Pose <span>(Setu Bandhasana)</span></h5>
            <br>
            <img src="assets\yoga\bridge.jpg" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie on your back, bend knees, and place feet hip-width apart.
                <br>
                - Lift hips while pressing feet into the mat.
                <br>
                - Hold for 30 sec.
                <br>
                <br>
                <span>Benefits:</span> Improves blood circulation to digestive organs and prevents acidity.
                </p>
            </div>

        <div class="exercise">
            <h5>Downward Dog <span>(Adho Mukha Svanasana)</span></h5>
            <br>
            <img src="assets\yoga\downwarddog.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Start in a tabletop position, lift your hips, and straighten your legs.
                <br>
                - Keep your heels slightly off the ground and press palms firmly.
                <br>
                - Hold for 30 sec.
                <br>
                <br>
                <span>Benefits:</span> Enhances digestion by increasing blood flow to the abdomen.
                </p>
        </div>

        <div class="exercise">
            <h5>Reclining Twist <span>(Supta Matsyendrasana)</span></h5>
            <br>
            <img src="assets\yoga\recliningtwist.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Lie on your back, bring knees to your chest, and drop them to one side.
                <br>
                - Extend arms and turn your head opposite to your knees.
                <br>
                - Hold for 30 sec per side.
                <br>
                <br>
                <span>Benefits:</span> Stimulates digestion and relieves gas and bloating.
                </p>
        </div>

        <div class="exercise">
            <h5>Deep Belly Breathing <span>(Diaphragmatic Breathing)</span></h5>
            <br>
            <img src="assets\yoga\deepbreath.gif" height="180px" width="180px">
            <br>
            <br>
            <p>
                <span>How to Do:</span>
                <br>
                - Sit in a comfortable position, inhale deeply, filling your belly with air.
                <br>
                - Exhale slowly, drawing the navel towards the spine.
                <br>
                - Repeat 10 times.
                <br>
                <br>
                <span>Benefits:</span> Reduces stress, improves gut-brain connection, and promotes digestion.
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
<p><span>Stay Hydrated :</span> Drink warm water in the morning.
<br>
<br>
<span>Eat Mindfully :</span> Chew food properly and avoid overeating.
<br>
<br>
<span>Reduce Stress :</span> Stress affects digestion; practice meditation or deep breathing.
<br>
<br>
<span>Avoid Eating Late at Night :</span> It can slow digestion and cause bloating.
<br>
<br>
<span>Walk After Meals :</span> A short 10-15 min walk can improve digestion.
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
