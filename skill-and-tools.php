<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Andre Causing Web Developer - Skill And Tools</title>
    
    <!-- Css -->
    <link rel="stylesheet" href="css/style.css">    
    <link rel="stylesheet" href="css/mq.css">
    <link rel="stylesheet" href="css/reset.css">

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/icons/favicon.ico">
</head>
<body>
    <!-- Start of Header -->
    <header class="header">
        <!-- Start of Overlay -->
        <div class="overlay">
            <a href="index.php">Home</a>
            <a href="about.php">About Me</a>
            <a href="projects.php">Projects</a>
            <a href="skill-and-tools.php">Skill and Tools</a>
            <a href="rates.php">Rates</a>
            <a href="contact.php">Contacts</a>
        </div> <!-- End of Overlay -->
        <!-- Start of Navigation Links-->
        <nav class="container nav-links">   
            <!-- Logo Text -->
            <a href="#"><b>AC</b></a>

            <!-- Navigation Links -->
            <ul class="hide-mobile">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a class="active" href="skill-and-tools.php">Skill and Tools</a></li>
                <li><a href="rates.php">Rates</a></li>
                <li><a href="contact.php">Contacts</a></li>
            </ul>

            <!-- Hamburger -->
            <div id="btnHamburgerJs" class="hamburger hide-desktop">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav> <!-- End of Navigation Links-->
    </header> <!-- End of Header -->

    <!-- Start of Skill Tools -->
    <section class="skills-and-tools">
        <div class="sat-title-section">
            <h1>Skills And Tools</h1>
            <p>My skill is enough to build a project. I already master these language and tools.</p>
        </div>

        <div class="sat-grid-container container">
            <div class="sat-item">
                <h3>Front-End</h3>
                <div>
                    <div class="sat-image-container">
                        <img src="images/icons/html5.png" alt="html5" width="64" height="64">
                        <img src="images/icons/css3.png" alt="css3" width="64" height="64">
                        <img src="images/icons/javascript.png" alt="javascript" width="64" height="64">
                    </div>
                    <div>
                        <img src="images/icons/jquery.svg" alt="jquery" width="128" height="64">
                    </div>
                </div>
            </div>

            <div class="sat-item">
                <h3>Back-End</h3>
                <div class="sat-image-container">
                    <img src="images/icons/php.png" alt="php" width="64" height="64">
                    <img src="images/icons/mysql.png" alt="mysql" width="64" height="64">
                </div>
            </div>

            <div class="sat-item">
                <h3>Tools</h3>
                <div class="sat-image-container">
                    <img src="images/icons/github.png" alt="github" width="64" height="64">
                    <img src="images/icons/vscode.png" alt="github" width="64" height="64">
                </div>
            </div>

            <div class="sat-item">
                <h3>Design</h3>
                <div class="sat-image-container">
                    <img src="images/icons/xd.png" alt="adobe-xd" width="64" height="64">
                    <img src="images/icons/ai.png" alt="adobe-illustrator" width="64" height="64">
                    <img src="images/icons/ps.png" alt="adobe-photoshop" width="64" height="64">
                </div>
            </div>
        </div>
    </section> <!-- End of Skills and Tools -->

    <footer class="footer">
        <div class="footer-grid-container container">
            <div class="footer-item">
                <div class="footer-titles-item">
                    <h3>Quick Links</h3>
                </div>
                <div class="footer-navigation-link-container">
                    <!-- Navigation Links -->
                    <a href="index.php">Home</a>
                    <a href="about.php">About Me</a>
                    <a href="projects.php">Projects</a>
                    <a class="active" href="skill-and-tools.php">Skill and Tools</a>
                    <a href="rates.php">Rates</a>
                    <a href="contact.php">Contacts</a>
                </div>
            </div>

            <div class="footer-item">
                <div class="footer-titles-item">
                    <h3>Social Media</h3>
                    <div class="footer-social-container">
                        <a href=""><img src="images/icons/facebook.png" alt=""></a>
                        <a href=""><img src="images/icons/instagram.png" alt="instagram" width="32" height="32"></a>
                        <a href=""><img src="images/icons/twitter.png" alt="twitter" width="32" height="32"></a>
                    </div>
                </div>
            </div>

            <div class="footer-item">
                <div class="footer-titles-item">
                    <h3>Location</h3>
                    <span>Philippines</span>
                </div>
            </div>

            <div class="footer-item">
                <div class="footer-titles-item">
                    <h3>Contact</h3>
                    <div class="footer-navigation-link-container">
                        <span>andrecausing33@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/btn-hamburger.js"></script>
</body>
</html>