<?php
  require 'db_conn.php';  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>StudyStack</title>
    <link rel="icon" href=" assets/img/title_logo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&family=Roboto+Slab:wght@300;400&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="leaves.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
</head>

<body>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VXXR3455NP"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-VXXR3455NP');
    </script>
    <!-- -------------Chatbot------------- -->
    <!-- <script>
    var body = document.getElementsByTagName("body");
    var div = document.createElement("div");
    var host = window.location.host ? window.location.origin : 'http://localhost/';
    div.innerHTML =
        `<iframe id="synvision_ai_iframe" name="synvision_ai_iframe" src="http://synvision.ai/chat-iframe?uuid=vphhfFWe&host=${host}" height = "760px" width = "550px" style="position:fixed;right:17px;bottom: 90px;z-index: 0;border:none"; @media(max-width:400px){ display:none;};" ></iframe>`;
    document.body.appendChild(div);
    </script> -->
    <!-- -------------Navbar------------- -->
    <div id="loader">

        <!-- <h1>MANNERS</h1>
        <h1>MAKETH</h1>
        <h1>MAN.</h1> -->

        <h1>ALL</h1>
        <h1>NOTES</h1>
        <h1>IN ONE PLACE</h1>
    </div>
    <div id="wrap">

        <section class="header" id="home">
            <div class="nav-bar">
                <nav>
                    <a href="index.php" class="logo"><img src="assets/img/logo1.png" alt="logo" /></a>
                    <div class="nav-links" id="navLinks">
                        <i class="fa-solid fa-xmark" onclick="hideMenu()"></i>
                        <ul>
                            <li><a id="nav--" href="notes.html" class="nav-link">NOTES</a></li>

                            <li><a id="nav--" href="pomodoro/index.html" class="nav-link">TICKTOCK</a></li>
                            <li><a id="nav--" href="https://forms.gle/Qq8YtiUUuF6YxUft7" class="nav-link"
                                    target="_blank">LEAVE-AUTH</a></li>
                            <li><a id="nav--" href="about-us.html" class="nav-link">ABOUT US</a></li>
                            <li>
                                <a href="login_form.php" class="nav-btn">login</a>
                            </li>
                        </ul>
                    </div>
                    <i class="fa-solid fa-bars" onclick="showMenu()"></i>
                </nav>
            </div>
            <div class="text-box">
                <h1>Web Resources</h1>
                <p>We Provide Quality Notes & Resources in One Place.</p>
                <div class="heroBtn">
                    <h4 class="hero-btn"> <a href="notes.html">Go to Notes</a>
                    </h4>
                    <h4 class="hero-btn-auth"><a href="#auth">Leave Auth</a>
                    </h4>
                </div>
            </div>
        </section>

        <!-- -------------Problem and Solutions Section------------- -->

        <section class="wrapper" id="blog">
            <div class="problem-solution">
                <div class="hero-content">
                    <div class="prob-col">
                        <h2><b>Problems</b> faced by Diploma Students</h2>

                        <p class="para-heading">1. Limited Knowledge Expansion:</p>

                        <p class="para-content">
                            Without access to reference books and proper guidance, students
                            may struggle to deepen their understanding of complex computer
                            technology concepts. This can limit their ability to explore
                            advanced topics and stay updated with the latest trends. This may
                            also weaken them and they may not compete with others properly.
                        </p>

                        <p class="para-heading">2. Incomplete Understanding:</p>

                        <p class="para-content">
                            Lack of reference materials can lead to an incomplete
                            understanding of certain subjects. This can hinder the students'
                            ability to grasp foundational concepts, potentially leading to
                            gaps in their knowledge.
                        </p>

                        <p class="para-heading">3. Hindered Skill Development:</p>

                        <p class="para-content">
                            For students aiming to develop practical skills in coding,
                            software development, or hardware design, the absence of reference
                            books and guidance can impede their progress. This might slow down
                            their ability to apply theoretical knowledge to real-world
                            projects.
                        </p>

                        <p class="para-heading">4. Lack of Guidance:</p>

                        <p class="para-content">
                            Guidance is the most important thing which students requires
                            (i.e.things to remember before paper).
                        </p>
                    </div>
                </div>
                <div class="hero-content">
                    <div class="sol-col">
                        <h2><b>Solutions</b> We Offer</h2>

                        <p>
                            1. <mark>Reference books</mark> are available for all subjects
                            taught in the computer technology branch.
                        </p>

                        <p>
                            2. <mark>Chapter-Wise Notes</mark> are Made Available for each
                            Semester.
                        </p>

                        <p>
                            3. The <mark>MSBTE syllabus</mark> and
                            <mark>most recent news</mark> are posted here to keep interested
                            students informed of any updates.
                        </p>

                        <p>
                            4. The most recent <mark>skills needed</mark> to land a great job
                            are posted here along with video lessons.
                        </p>

                        <p>
                            5. <mark>Chapter-Wise YouTube Videos</mark> are available here to
                            dispel any questions.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <hr class="hr--section" />

        <!-- -------------Go to Notes Section------------- -->
        <section class="notes">
            <div class="notes-wrapper">
                <h2>Boost Your Marks by using the right Resources at the right time!</h2>
                <div class="tips-wrapper">
                    <div class="tips">
                        <h3 class="tips-list">Tips on How to Ace Every Exams</h3>
                        <ul>
                            <li>Understanding the Core Concept behind the theory</li>
                            <li>Practicing the course Daily</li>
                            <li>Practice for the inevitable</li>
                            <li>Don't neglect the “easy” stuff</li>
                            <li>Divide big concepts from smaller details</li>
                        </ul>
                    </div>
                    <div class="tips-img">
                        <img src="  assets/img/note-taking.png" alt="notes-image" id="auth" />
                    </div>
                </div>
                <a href="notes.html" class="tips-hero-btn">Go to Notes</a>

            </div>

        </section>
        <hr class="hr--section" />

        <!-- -------------Auth Section------------- -->
        <div class="leave-wrapper">
            <div class="screen">
                <div class="content">
                    <div class="leave-title-wrapper">
                        <h1 class="leave-title">
                            <div id="darkMode-wrap-red-dot"></div>
                            <span></span><span class="feature-wrap">New <span id="feature">Feature</span> :
                                <span class="leave-span">Online Leave Authorizer</span></span>

                        </h1>
                    </div>
                    <p class="leave-content">
                        Wanted a <b>leave application</b> ?<br />
                        Just enter your details with the reason.
                    </p>
                    <a href="https://forms.gle/Qq8YtiUUuF6YxUft7" class="hero-btn-leave">Go to Leave-Auth</a>
                </div>
            </div>
        </div>
        <hr class="hr--section" />

        <!-- -------------ContactUs & Uploads Section------------- -->
        <section class="contact-wrapper" id="contact-us">
            <div class="contact">
                <form action="https://api.web3forms.com/submit" method="POST" id="form-id">
                    <div class="contact-title">
                        <h2>Contact Us!</h2>
                        <hr />
                    </div>
                    <input type="hidden" name="apikey" value="521464fc-5729-4b82-aeed-74174d2ab34d" />
                    <input type="text" name="name" placeholder="Full Name" id="name" class="item" autocomplete="off"
                        required />

                    <input type="email" name="email" placeholder="Email Address" id="email" class="item"
                        autocomplete="off" required />

                    <input type="text" name="text" placeholder="Subject" id="subject" class="item" autocomplete="off"
                        required />

                    <textarea name="message" id="message" cols="30" rows="7" placeholder="Your Message" class="item"
                        autocomplete="off" required></textarea>
                    <div class="h-captcha" data-captcha="true"></div>
                    <button type="submit">
                        Send Message<img src="assets/img/arrow_icon.png" class="arrow_img" alt="" />
                    </button>
                </form>
            </div>

        </section>

        <!-- -------------backToTop-button------------- -->
        <div id="progress">
            <span id="progress-value"><i class="fa-solid fa-arrow-up"></i></span>
        </div>

        <!-- -------------Footer------------- -->

        <section class="footer-wrapper">
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img src="/assets/img/logo1.png" alt="" class="logo" />
                            <p class="logo-text">
                                Provide Quality Notes & Resources in One Place.
                            </p>
                            <br />
                            <p class="email-id">
                                <i class="fa-solid fa-envelope"></i>studystack01@gmail
                            </p>
                            <div class="count">
                                <h4>Time : <span id="timer">00:00:00

                                    </span></h4>

                            </div>
                        </div>
                        <div class="col">
                            <h3>
                                Links
                                <div class="underline1"><span></span></div>
                            </h3>
                            <div class="col-links">
                                <a href="about-us.html">About Us</a>
                                <a href="https://www.poly.kkwagh.edu.in/">Official Website</a>
                                <a href="https://msbte.org.in/">MSBTE</a>
                            </div>
                        </div>

                        <div class="col">
                            <h3>
                                Follow Us
                                <div class="underline1"><span></span></div>
                            </h3>
                            <div class="social-links">
                                <a href="https://www.instagram.com/study_stack02/"><i
                                        class="fa-brands fa-instagram"></i></a>
                                <a href="https://www.youtube.com/@StudyStack01"><i class="fa-brands fa-youtube"></i></a>
                                <a href="https://discord.gg/qDcN9GEf"><i class="fa-brands fa-discord"></i></a>
                            </div>
                        </div>
                    </div>

                    <hr class="hr-bottom" />
                    <p class="made-with">Coded with Passion 🤍</p>
                </div>
            </div>
        </section>
    </div>
    <!-- -------------Javascript source------------- -->

    <script src="assets/js/script.js"></script>

    <script src="https://web3forms.com/client/script.js" async defer></script>
    <script>
    const form = document.getElementById('form-id');

    form.addEventListener('submit', function(e) {
        const hCaptcha = form.querySelector(
            'textarea[name=h-captcha-response]'
        ).value;

        if (!hCaptcha) {
            e.preventDefault();
            alert('Please fill out captcha field');
            return;
        }
    });
    </script>
    <!-- -------------Javascript for Swiper------------- -->

    <script src="js/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
    <!-- -------------Javascript for toggle------------- -->

    <script>
    var navLinks = document.getElementById('navLinks');
    var navList = document.getElementById('nav--');

    function showMenu() {
        navLinks.style.right = '0';
        navList.style.marginBottom = '100px';
    }

    function hideMenu() {
        navLinks.style.right = '-150px';
    }
    const getCurrentTime = () => {
        const timer = document.querySelector('#timer')
        setInterval(() => {
            const dt = new Date();
            const hours = dt.getHours().toString().padStart(2, 0);
            const minutes = dt.getMinutes().toString().padStart(2, 0);
            const seconds = dt.getSeconds().toString().padStart(2, 0);
            timer.innerHTML = `${hours}:${minutes}:${seconds}`;
        }, 1000)
    }
    getCurrentTime();
    </script>
</body>

</html>