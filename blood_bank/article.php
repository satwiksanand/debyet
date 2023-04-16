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

    <title>Article</title>
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
                    <a href="https://api.whatsapp.com/send?phone=+010000000000"><i
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
                        <a class="nav-link" href="#">Articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="requests.php">Donations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link selected" href="who-we-are.php">Who We Are ?</a>
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
                <div class="path-main" style="color: darkred; display:inline-block;">/ Articles</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Disease Protection</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- article Start -->
    <section id="article">
        <div class="container">
            <img class="head-img" src="Pictures/p4.jpg" alt="">
            <div class="details-container">
                <div class="title">Donations Benefits</div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere qui eius asperiores, animi adipisci
                    quia eum beatae incidunt, laborum velit quibusdam debitis totam, et reiciendis ad? Commodi
                    cupiditate velit vero?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum aspernatur est magnam, nesciunt
                    culpa provident sit nobis molestias possimus? A optio dolores dolorum, odio nam est ducimus quis
                    quisquam vero.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae modi veritatis iste provident
                    quis consectetur animi soluta, rerum dicta dolorem suscipit facere quas, porro, pariatur tempora
                    consequuntur ad accusamus. Voluptatem?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere qui eius asperiores, animi adipisci
                    quia eum beatae incidunt, laborum velit quibusdam debitis totam, et reiciendis ad? Commodi
                    cupiditate velit vero?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum aspernatur est magnam, nesciunt
                    culpa provident sit nobis molestias possimus? A optio dolores dolorum, odio nam est ducimus quis
                    quisquam vero.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae modi veritatis iste provident
                    quis consectetur animi soluta, rerum dicta dolorem suscipit facere quas, porro, pariatur tempora
                    consequuntur ad accusamus. Voluptatem?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere qui eius asperiores, animi adipisci
                    quia eum beatae incidunt, laborum velit quibusdam debitis totam, et reiciendis ad? Commodi
                    cupiditate velit vero?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum aspernatur est magnam, nesciunt
                    culpa provident sit nobis molestias possimus? A optio dolores dolorum, odio nam est ducimus quis
                    quisquam vero.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae modi veritatis iste provident
                    quis consectetur animi soluta, rerum dicta dolorem suscipit facere quas, porro, pariatur tempora
                    consequuntur ad accusamus. Voluptatem?
                </p>
                <strong><a>Share this article:</a></strong>
                <div class="icons">
                    <i class="fab fa-facebook-square fa-3x"></i>
                    <i class="fab fa-google-plus-square fa-3x"></i>
                    <i class="fab fa-twitter-square fa-3x"></i>
                </div>

            </div>
            <!-- Articles Start -->
            <section id="articles">
                <div class="container">
                    <h2 style="display: inline-block;">Articles</h2>
                    <div class="swiper-container">
                        <div class="button-area" style="display: inline-block; margin-left: 850px;">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            </button>
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
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Nobis
                                            laborum
                                            dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea
                                            sed
                                            nihil
                                            dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
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
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Nobis
                                            laborum
                                            dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea
                                            sed
                                            nihil
                                            dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
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
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Nobis
                                            laborum
                                            dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea
                                            sed
                                            nihil
                                            dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
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
                                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Nobis
                                            laborum
                                            dolor minus quibusdam sequi asperiores? Fugiat aut consectetur laudantium ea
                                            sed
                                            nihil
                                            dolore, in mollitia blanditiis, rem omnis recusandae maiores?</p>
                                        <div class="btn-cont">
                                            <button class="card-btn"
                                                onclick="window.location.href = 'article.php';">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Articles End -->

        </div>
    </section>
    <!-- Article End -->

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