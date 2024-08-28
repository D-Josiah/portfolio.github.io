<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!--Animate on Scroll-->
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <script src="script.js" defer></script>
    <title>Josiah Dalisay</title>
</head>
<body>
    <div class="padding" id="about">
    <nav >
        <ul>
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#tech-stack">TECH STACK</a></li>
            <li><a href="#projects">PROJECTS</a></li>
            <li><a href="#contact">CONTACT</a></li>
            <li class="name"><a href="#_jd" >_JD</a></li>
        </ul>
    </nav>
    <!--about-->
    <section class="about" >
        <div class="top">
            <div class="left">
                <div class="left-wrap">
                    <h1 class="greet">HELLO,</h1>
                    <h1 class="greet" >WORLD!</h1>
                    <h2 class="josiah" >&lt;name&gt; JOSIAH DALISAY &lt;/name&gt;</h2>
                </div>
                
            </div>
            <div class="right">
                <img class="profile" src="images/profile.png" alt="">
            </div>
        </div>
        <div class="bot">
            <p>>  I’m a full stack web developer based in the Philippines. With a strong foundation in both front-end and back-end technologies, I specialize in creating robust and scalable web applications that deliver exceptional user experiences. Got a project in mind? Let's give it a shot!</p>
        </div>
    </section>
    <!--tech stack-->
    <section class="techstack" id="tech-stack">
        <h2 class="sec-title">TECH STACK</h2>
        <div class="stack">
            <img src="images/html.png" data-aos="fade-right" >
            <img src="images/css.png" data-aos="fade-right" >
            <img src="images/javascript.png" data-aos="fade-right" >
            <img src="images/php.png" data-aos="fade-right" data-aos-delay="300">
            <img src="images/mysql.png" data-aos="fade-right" data-aos-delay="300">
            <img src="images/react.png" data-aos="fade-right" data-aos-delay="300">
            <img src="images/python.png" data-aos="fade-right" data-aos-delay="600">
            <img src="images/java.png" data-aos="fade-right" data-aos-delay="600">
            <img src="images/c.png" data-aos="fade-right" data-aos-delay="600">
            <img src="images/sass.png" data-aos="fade-right" data-aos-delay="900">
            <img src="images/tailwind.png" data-aos="fade-right" data-aos-delay="900">
            <img src="images/wordpress.png" data-aos="fade-right" data-aos-delay="900">

        </div>
    </section>
    <section class="projects" id="projects">
        <h2 class="sec-title" >PROJECTS</h2>
        <div class="cards-wrapper">
            <div class="card" data-aos="flip-up"> <!--Wedding-->
                <div class="title">
                    <img class="display" src="images/ring.png">
                    <p>MIGUEL AND SOPHIA'S WEDDING</p>
                </div>
           
                <p class="description">A wedding invitation website</p>
                <div class="stack-used">
                    <img class="tech" src="images/html-logo.png">
                    <img class="tech" src="images/sass-logo.png">
                    <img class="tech" src="images/js-logo.png">
                    <img class="tech" src="images/php-logo.png">
                </div>
                <a href="wedding/index.php">
                    <img src="images/btn.png" class="view-btn" >
                </a>
            </div>

            <div class="card" data-aos="flip-up"> <!--Crowdfunding-->
                <div class="title">
                    <img class="display" src="images/partnership.png">
                    <p>SOSYO</p>
                </div>
              
                <p class="description">A Crowdfunding Platform for Micro, Small, and Medium Enterprises</p>
                <div class="stack-used">
                    <img class="tech" src="images/html-logo.png">
                    <img  class="tech" src="images/sass-logo.png">
                    <img   class="tech" src="images/react-logo.png">
                    <img  class="tech" src="images/php-logo.png">
                    <img  class="tech" src="images/mysql-logo.png">
                </div>
                <a href="sosyo.html" > 
                    <img src="images/btn.png" class="view-btn" >
                </a>
            </div>

            <div class="card" data-aos="flip-up"> <!--Mock Exam-->
                <div class="title">
                    <img  class="display" src="images/exam.png">
                    <p>Mock Exam Generator</p>
                </div>
         
                <p class="description">A desktop application integrating the OPEN AI API to create a multiple choice exam about any topic!</p>
                <div class="stack-used">
                    <img  class="tech" src="images/java-logo.png">
                   
                </div>
                <a href="mock.html">
                    <img src="images/btn.png" class="view-btn" >
                </a>
            </div>
           
            <div class="card" data-aos="flip-up"> <!--Cemetery-->
                <div class="title">
                    <img class="display" src="images/cemetery.png">
                    <p>Garden of Peace Cemetery</p>
                </div>
         
                <p class="description">Cemetery Business Management System </p>
                <div class="stack-used">
                    <img  class="tech" src="images/wordpress-logo.png">
                   
                </div>
                <a href="cemetery.html">
                    <img src="images/btn.png" class="view-btn" >
                </a>
            </div>

        </div>
    </section>
    <!--Contact-->
    <section class="contact" id="contact">
        <hr>
        <h2 class="sec-title">CONTACT</h2>
        <div class="links">
        
            <!--
            <a href="jdtech">
                <img src="images/linkedin.png">
            </a>-->
            <a href="https://github.com/D-Josiah" target="_blank">
                <img src="images/github.png">
            </a>
            <a href="https://www.fiverr.com/s/0brbN1L" target="_blank">
                <img src="images/fiverr.png">
            </a>
            <a href="mailto:dalisayjosiah00@gmail.com?subject=Portfolio%20Inquiry&body=Hello%20there," target="_blank">
                <img src="images/gmail.png">
            </a>

        </div>
    </section>
    <footer>
        <div class="left">
            <p>© 2024</p>
            <p>ALL RIGHTS RESERVED.</p>
        </div>
        <div class="right">
            <p>_JD</p>
        </div>
    </footer>
    </div>
</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script><!--Animate on Scroll-->
<script>
    AOS.init();
</script>

</html>