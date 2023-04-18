<?php
//using the connection;
session_start();
require('db.php');

if (!$connection) {
    echo "Error! " . mysqli_connect_error();
}

//fetching all the necessary inputs.
if($_SERVER['REQUEST_METHOD']=='POST'){
    $fn = $_POST['fn'];
    $ln = $_POST['ln'];
    $city = $_POST['city'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $bgp = $_POST['type'];
    $age = $_POST['age'];

    $query2 = "SELECT * FROM `users` WHERE `email` LIKE '$email'";
    $queryresult2 = mysqli_query($connection, $query2);
    // $num=mysqli_num_rows($queryresult3);
    if (mysqli_fetch_assoc($queryresult2) == NULL) {
        $query3 = "INSERT INTO `users` (`first_name`, `last_name`, `age`, `email`, `password`, `city`, `bgp`, `contact`) VALUES ('$fn', '$ln', '$age', '$email', '$password', '$city', '$bgp', '$contact')";
        $queryresult3 = mysqli_query($connection, $query3);
        //rather than all this shit i will just ask the user to login again using a alert message.
        if ($queryresult3) {
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>SUCCESS!</strong> Please Login!
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
        }
    } else {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        Email already in use Please Login instead!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
}
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

    <title>Sign Up</title>
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
            <img src="Pictures/logo.png" width="18%"></img>
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

    <!-- Navigator Start -->
    <section id="navigator">
        <div class="container">
            <div class="path">
                <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Sign up</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Sign Up Start -->
    <section id="sign-up">
        <div class="container">
                <img src="Pictures/logo.png" alt="">
                <form action="/projects/blood_bank/signup.php" method="post">
                    <input type="text" placeholder="First Name" required name="fn">
                    <input type="text" placeholder="Second Name" required name="ln">
                    <input type="number" placeholder="Age" required name="age">
                    <select name="type" id="type" required="">
                        <option value="Blood Type" disabled>Blood Type</option>
                        <option value="AB+">A+</option>
                        <option value="AB+">A-</option>
                        <option value="AB+">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="B">AB-</option>
                        <option value="O">O+</option>
                        <option value="O">O-</option>
                    </select>
                    <select name="city" id="Gov" required="">
                        <option value="Governorate" disabled>Governorate</option>
                        <option value="Alexandria">Patna</option>
                        <option value="Cairo">New Delhi</option>
                        <option value="Giza1">Bangalore</option>
                        <option value="Giza2">Mumbai</option>
                        <option value="Giza3">Kolkata</option>
                    </select>
                    <input type="Phone" placeholder="Phone Number" required name="contact"> 
                    <input type="email" placeholder="Email" required name="email">
                    <input type="password" name="pass" placeholder="password">  
                    <div class="reg-group">
                        <input class="check" type="checkbox" required="" style="height: auto; display:inline; margin: 0 auto;">Agree on terms and conditions<br>
                        <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Submit</button>
                    </div>
                </form>
        </div>
    </section>
    <!-- Sign Up End -->

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
                        <a href="article.php">
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