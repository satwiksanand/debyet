<?php
session_start();
require('db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <title>Donator</title>
</head>

<body>

    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <i class="fas fa-phone-volume" style="border-right: 1px solid gray;"> +91 0000000000
                                &nbsp; &nbsp; </i>
                        </li>
                        <li class="nav-item">
                            <i class="far fa-envelope" style="padding-left: 15px;"> BloodBank@gmail.com</i>
                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">
                    <a href="https://www.instagram.com/"><i
                            class="fab fa-instagram github">&nbsp;&nbsp;</i></a>
                    <a href="https://www.facebook.com/"><i
                            class="fab fa-facebook-f facebook">&nbsp;&nbsp;</i></a>
                    <a href="https://twitter.com/"><i class="fab fa-twitter twitter">&nbsp;&nbsp;</i></a>
                    <a href="https://api.whatsapp.com/send?phone=+910000000000 "><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link selected" style="border-right: 1px solid gray;" href="#">EN &nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="padding-left: 15px;" href="#">AR</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- Navbar 1 End -->

    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="Pictures/logo.png" width="18%"></img>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link selected" href="requests.php">Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="who-we-are.php">Who We Are ?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact-us.php">Contact Us</a>
                    </li>
                </ul>
                <?php
                    if($_SESSION['flag']==true){
                ?>
                    <button class="btn login" onclick= "window.location.href = 'profile.php';">profile</button>
                    <button class="btn login" onclick= "window.location.href = 'index.php';">log out</button>
                <?php
                }
                    else{
                ?>
                        <button class="btn signup" onclick= "window.location.href = 'signup.php';">New Account</button>
                        <button class="btn login" onclick= "window.location.href = 'index.php';">Login</button>
                <?php
                    }
                ?>
            </div>
        </nav>
    </section>
    <!-- Navbar 2 End -->

    <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-main" style="color: darkred; display:inline-block;">/ Donations</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Donator Details</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- donator Start -->
    <section id="donator">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name:</th>
                            <td>Omar Reda</td>
                        </tr>
                        <tr>
                            <th>Age:</th>
                            <td>21</td>
                        </tr>
                        <tr>
                            <th>Hospital:</th>
                            <td>Andalusia Hospital</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Blood Type:</th>
                        <td>A+</td>
                    </tr>
                    <tr>
                        <th>Number of Required Blood Bags:</th>
                        <td>4</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>+20 127 245 6884</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Hospital Address:</th>
                        <td>Alexandria - Somuha - Fouad St. - B122</td>
                    </tr>
                </table>
            </div>
            </div>
            <div class="details-container">
                <p>Blood donation is a voluntary procedure that can help save lives. Donating blood can help people with many health conditions, such as those who have internal or external bleeding due to an injury, have sickle cell disease or another illness that affects the blood, are undergoing cancer treatment, are undergoing surgery, such as cardiovascular or orthopedic surgery, have an inherited blood disorder, are undergoing a transplant, or need treatments involving plasma or other blood products1.

Donating blood has benefits for your emotional and physical health. According to a report by the Mental Health Foundation, helping others can reduce stress, improve your emotional well-being, benefit your physical health, help get rid of negative feelings, provide a sense of belonging and reduce isolation2.

Donating blood replenishes the body’s ability to perform needed tasks such as carrying oxygen from our lungs to the rest of our bodies and helping blood to clot when injuries occur3. Regular blood donation by a sufficient number of healthy people is needed to ensure that blood will always be available whenever and wherever it is needed
                </p>
            </div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13648.620397637154!2d29.9420796!3d31.2164321!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8476f62bb5008c82!2sAndalusia%20Smouha%20Hospital!5e0!3m2!1sen!2seg!4v1567936654125!5m2!1sen!2seg"
                width="1000" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </section>
    <!-- Who End -->

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="Pictures/logo.png" alt="">
                        <p>We Are India’s Largest Youth Run Initiative Working In The Field Of Blood Donation Trying To Make India Blood Sufficient.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="menu">
                        <a href="home.php">
                            <li>Home</li>
                        </a>
                        <a href="About-us.php">
                            <li>About Us</li>
                        </a>
                        <a href="#articles">
                            <li>Articles</li>
                        </a>
                        <a href="requests.php">
                            <li>Donations</li>
                        </a>
                        <a href="who-we-are.php">
                            <li>Who We Are?</li>
                        </a>
                        <a href="contact-us.php">
                            <li>Contact Us</li>
                        </a>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="options">
                        <li>
                            <h5>Available On</h5>
                        </li>
                        <li><img src="Pictures/ios1.png" alt=""></li>
                        <li><img src="Pictures/google1.png" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer End -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="js/swiper.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>