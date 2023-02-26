<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Andre Causing Web Developer - Rates</title>
    
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
                <li><a class="active" href="rates.php">Rates</a></li>
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

    <!-- Start of Rates -->
    <section class="rates container">
        <div class="rates-title-section">
            <h1>I’m excited to build your project. <br>
                Ready to get started?</h1>
        </div>
        
        <div class="rates-form">
            <form method="post" action="mail-project.php" id="formRates">
                <div class="rates-grid-form-container">
                    <!-- Name -->
                    <div>
                        <label for="name">Name</label>
                        <input class="rates-input-text" type="text" name="name" form="formRates" required>
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email">Email</label>
                        <input class="rates-input-text" type="email" name="email" form="formRates" required>
                    </div>

                    <!-- Budget -->
                    <div>
                        <label for="budget">Budget</label>
                        <select class="rates-input-text" name="budget" form="formRates" required>
                            <option value="">- Select Budget -</option>
                            <option value="Basic - $500">Basic - $500</option>
                            <option value="Standard - $1000">Standard - $1000</option>
                            <option value="Premium - $2500">Premium - $2500</option>
                        </select>
                    </div>
                </div>

                <div class="rates-grid-form-container-text-area">
                    <!-- Details -->
                    <div>
                        <label for="name">Details</label> <br>
                        <textarea class="rates-textarea" name="details" form="formRates" required></textarea>
                    </div>
                    <!-- Submit -->
                    <div>
                        <input class="rates-btn-submit" type="submit" name="btnRatesSubmit" value="Submit" form="formRates">
                    </div>
                </div>
            </form>
        </div>
    </section> <!-- End of Rates -->

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
                    <a class="active" href="rates.php">Rates</a>
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