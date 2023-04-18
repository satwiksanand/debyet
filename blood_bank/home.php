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

    <title>Blood Bank</title>
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
                    <a href="https://api.whatsapp.com/send?phone=+91 0000000000"><i
                            class="fab fa-whatsapp whats">&nbsp;&nbsp;</i></a>
                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link selected" style="border-right: 1px solid gray;" href="#">EN &nbsp;</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="padding-left: 15px;" href="#">HI</a>
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
            <img src="./Pictures/logo.png" width="18%"/>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link selected" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="article.php">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="requests.php">Donations</a>
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
    <!-- Header Start -->
    <!-- /*
    ! image not loading here.
    */ -->
    <section id="header">
        <img src="./Pictures/header2.jpg" width ="100%" height="100%" alt="home-image"> 
        <!-- <div class="container">-->
            <!-- <h1>We are seeking for a better community health.</h1>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora repellat inventore nemo repudiandae
                ipsum quos.</h4>
            <button class="btn more" onclick= "window.location.href = 'About-us.html';">More</button> -->
        </div>
    </section>
    <!-- Header End -->

    <!-- Sub Header Start -->
    <!--<section id="sub-header">
        <img src="Pictures/1.jpg" width = 100% height="100%" alt=""> 
        <div class="container">
           <h3>A SINGLE PINT CAN SAVE THREE LIVES, A SINGLE GESTURE CAN CREATE A MILLION SMILES.</h3>
        </div>
    </section>-->
    <!-- Sub Header End -->

    <!-- Articles Start -->
    <section id="articles">
        <div class="container">
            <h2 style="display: inline-block;">Articles</h2>
            <div class="swiper-container">
            <div class="button-area" style="display: inline-block; margin-left: 850px;">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                <!-- </button> -->
            </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="Pictures/p3.jpg" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Blood Types</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.php';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="Pictures/p4.jpg" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Donations Benefits</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.php';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card ">
                            <div class="card-img-top" style="position: relative;">
                                <img src="Pictures/p1.jpg" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Disease Protection</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.php';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <div class="card-img-top" style="position: relative;">
                                <img src="Pictures/p5.jpg" alt="Card image">
                                <button class="like"><i class="fas fa-heart icon-large"></i></button>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">How To Donate?</h4>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis
                                    laborum
                                    dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea sed
                                    nihil
                                    dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                <div class="btn-cont">
                                    <button class="card-btn" onclick= "window.location.href = 'article.php';">Details</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Articles End -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donations</h2>
            <hr class="line">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <select name="Type" id="">
                        <option value="" disabled selected>Select Blood Type</option>
                        <option value="AB+">A+</option>
                        <option value="AB+">A-</option>
                        <option value="AB+">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="B">AB-</option>
                        <option value="O">O+</option>
                        <option value="O">O-</option>
                    </select>
                </div>
                <div class="col-lg-5">
                    <select name="City" id="">
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadweep">Lakshadweep</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        </select>
                </div>
                <div class="search">
                    <button><i class="col-lg-2 fas fa-search"></i></button>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>AB+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: ABC Kumar</h4>
                            <h4>Hospital: Central Hospitals</h4>
                            <h4>City: New Delhi</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.php';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>B+</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: ABC Kumar</h4>
                            <h4>Hospital: Central Hospitals</h4>
                            <h4>City: New Delhi</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.php';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="type">
                                <h2>A-</h2>
                            </div>
                        </div>
                        <div class="data col-lg-6">
                            <h4>Name: ABC Kumar</h4>
                            <h4>Hospital: Central Hospitals</h4>
                            <h4>City: New Delhi</h4>
                        </div>
                        <div class="col-lg-3">
                            <button onclick= "window.location.href = 'donator.php';">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-req">
                <button onclick= "window.location.href = 'requests.php';">More</button>
            </div>
        </div>
    </section>
    <!-- Requests End -->

    <!-- Call us Start -->
    <section id="call-us">
        <div class="layer">
            <div class="container">
                <h1>Call Us</h1>
                <h4>You can whatsapp us on</h4>
                <div class="whats">
                    <img src="Pictures/whats.png" alt="">
                    <h3>+91 0000000000</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- Call us End -->

    <!-- App Start -->
    <section id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info">
                        <h1>Blood Bank Application</h1>
                        <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae earum officiis et eligendi nam
                            harum corporis saepe deserunt.</h3>
                        <h4>Available On</h4>
                        <img src="Pictures/ios.png" alt="">
                        <img src="Pictures/google.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="app-screen" src="Pictures/app_img.jpg" width="80%" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- App End -->    

    <!-- Footer Start -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="foot-info">
                        <img src="Pictures/logo.png" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quos ut sit natus earum ea cum
                            doloremque fugit. Sit non ex suscipit fugiat molestias, ipsa rerum tempore voluptates
                            adipisci rem cum?</p>
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