<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Andre Causing Web Developer - Home</title>
    
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
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="about.php">About Me</a></li>
                <li><a href="projects.php">Projects</a></li>
                <li><a href="skill-and-tools.php">Skill and Tools</a></li>
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

    <main class="main">
        <!-- Start of Hero -->
        <section class="hero">
            <div class="container grid-container-1 hero-content">
                <!-- Description -->
                <div class="hero-description-item">
                    <h1>Hi I am Andre. <br>
                        A Web Developer  <br>
                    </h1>
                    <p>I have serious passion for coding. I can handle pressure. 
                        I can finish the task before the deadline come.</p>
                </div>
                <!-- Image -->
                <div class="hero-image-item">
                    <img src="images/programming.svg" alt="programming" width="100%" height="100%">
                </div>
            </div>
        </section> <!-- End of Hero -->
    
        <!-- Start of About Me -->
        <section class="about-me">
            <!-- Image -->
            <div class="about-me-item">
                <img src="images/andre.jpg" alt="andre causing" width="200" height="200">
            </div>

            <!-- Description -->
            <div class="about-me-content-item">
                <p>I am a full stack web developer. My strongest skills are in HTML5 CSS3 JQUERY MYSQL PHP. 
                    I love coding and it shows in my work. I like to create elegant and simple designs for the web.
                    I'm the perfect person to create a website. I can do it all, with minimal effort.</p>
            </div>
        </section> <!-- End of About Me -->

        <!-- Start of Projects -->
        <section class="projects">
            <div class="title-section">
                <h1>Projects</h1>
                <p>My front-end and back-end web development projects are listed below.</p>
            </div>

            <div class="project-btn-container">
                <a class="btn" href="projects.php">View All Projects</a>
            </div>
            <!-- Start of grid -->
            <div class="project-grid-container container">
                <div class="project-items">
                    <h3>Portfolio</h3>
                    <p>Front-End</p>
                    <img src="images/projects/andre-portfolio.png" alt="andre-portfolio" width="260" height="125">
                    <div class="project-link-container">
                        <a class="project-link-website" target="_blank" href="http://andrecausing.cf/">Preview Live</a>
                    </div>
                </div>

                <div class="project-items">
                    <h3>Yotnek</h3>
                    <p>Front-End</p>
                    <img src="images/projects/yotnek.png" alt="yotnek" width="260" height="125">
                    <div class="project-link-container">
                        <a class="project-link-website" target="_blank" href="https://andrecausingg.github.io/yotnek/">Preview Live</a>
                    </div>
                </div>

                <div class="project-items">
                    <h3>Togaslacol</h3>
                    <p>Front-End / Back-End</p>
                    <img src="images/projects/togaslacol.png" alt="togaslacol" width="260" height="125">
                    <div class="project-link-container">
                        <a class="project-link-website" target="_blank" href="http://togaslacol.cf">Preview Live</a>
                    </div>
                </div>

                <div class="project-items">
                    <h3>Four card <br> feature section <br> master</h3>
                    <p>Front-End</p>
                    <img src="images/projects/four-card-feature-section-master.png" alt="andre-portfolio" width="260" height="125">
                    <div class="project-link-container">
                        <a class="project-link-website" target="_blank" href="https://andrecausingg.github.io/four-card-feature-section-master/">Preview Live</a>
                    </div>
                </div>
            </div> <!-- End of Grid -->
        </section> <!-- End of Projects -->

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
                            <span>andrecausing33@gmail.com</span>
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
    </main>

    <footer class="footer">
        <div class="footer-grid-container container">
            <div class="footer-item">
                <div class="footer-titles-item">
                    <h3>Quick Links</h3>
                </div>
                <div class="footer-navigation-link-container">
                    <!-- Navigation Links -->
                    <a class="active" href="/">Home</a>
                    <a href="about.php">About Me</a>
                    <a href="projects.php">Projects</a>
                    <a href="skill-and-tools.php">Skill and Tools</a>
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