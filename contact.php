<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Andre Causing Web Developer - Contact</title>
    
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
                <li><a href="skill-and-tools.php">Skill and Tools</a></li>
                <li><a href="rates.php">Rates</a></li>
                <li><a class="active" href="contact.php">Contacts</a></li>
            </ul>

            <!-- Hamburger -->
            <div id="btnHamburgerJs" class="hamburger hide-desktop">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav> <!-- End of Navigation Links-->
    </header> <!-- End of Header -->

        <!-- Start of Contact -->
        <section class="contact container">
            <div class="contact-title-container">
                <h1>Have Some Question?</h1>
            </div>

            <div class="contact-grid-container">
                <div class="contact-item-image">
                    <div class="contact-container-email-social">
                        <img src="images/contact.svg" alt="contact" width="100%" height="270.42">
                        <div class="contact-e-s">   
                            <span>andrecausing@gmail.com</span>
                            <div class="contact-social">
                                <a href=""><img src="images/icons/facebook.png" alt=""></a>
                                <a href=""><img src="images/icons/instagram.png" alt="instagram" width="32" height="32"></a>
                                <a href=""><img src="images/icons/twitter.png" alt="twitter" width="32" height="32"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-item-form">
                    <form action="mail-question.php" method="post" id="formQuestion">
                        <div class="">
                            <!-- Name -->
                            <div>
                                <label for="name">Name</label>
                                <input class="contact-input-text" type="text" name="name" id="" form="formQuestion" required>
                            </div>
    
                            <!-- Email -->
                            <div>
                                <label for="email">Email</label>
                                <input class="contact-input-text" type="email" name="email" id="" form="formQuestion" required>
                            </div>
    
                            <!-- Comment -->
                            <div>
                                <label for="name">Comment</label> <br>
                                <textarea class="contact-textarea" name="comment" id="" form="formQuestion" required></textarea >
                            </div>

                            <!-- Submit -->
                            <div>
                                <input class="contact-btn-submit" type="submit" name="btnSubmitFormQuestion" value="Submit" form="formQuestion" required>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section> <!-- End of Contact -->

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
                    <a href="skill-and-tools.php">Skill and Tools</a>
                    <a href="rates.php">Rates</a>
                    <a class="active" href="contact.php">Contacts</a>
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