<?php
session_start();
require('db.php');

$insert=false;
/*
? the flag2 variable ensures that the data table is shown only when the admin selects the type and city.
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($_SESSION['flag']==true){
    $bgp = $_POST['type'];
    $city = $_POST['city'];
    $flag2=true;
    //initializing a variable that will be used in displaying the result below.
    //we will check if the email and password is present in the database or not.
    //we will run a query and will fetch the email and password column from the table of user data.
    $query1 = "SELECT * FROM `donations` WHERE `bgp` = '$bgp' AND `city` = '$city'";
    $queryresult1 = mysqli_query($connection, $query1);
    $num = mysqli_num_rows($queryresult1);
    if ($num>0) {
        $insert=true;
    } 
    /*
    ! we have to use the else condition here in the html segment.
    */
    else {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>SORRY! </strong>could't find any results!
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>";
    }
}
else{
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>SORRY! </strong> Login first!
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <script defer src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="./js/script.js"></script>
    <title>Donations</title>
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
                    <a href="https://api.whatsapp.com/send?phone=+910000000000"><i
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
                <div class="path-directio" style="color: grey; display:inline-block;"> / Donations</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donations</h2>
            <hr class="line">
        </div>
        <div class="container">
            <form action="/projects/blood_bank/requests.php" method="post">
            <div class="row">
                <div class="col-lg-5">
                    <select name="type" id="">
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
                    <select name="city" id="">
                        <option value="" disabled selected>Select City</option>
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
                    <!-- <button><i class="col-lg-2 fas fa-search"></i></button> -->
                    <button type="submit">Send</button>
                </div>
                
            </div>
            </form>
            <?php
                if($insert==true){
                    for ($i=0; $i < $num; $i++) { 
                        $row=mysqli_fetch_assoc($queryresult1);
            ?>
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="type">
                                    <?php
                                    echo "<h2>" . $row['bgp'] . "</h2>";
                                    ?>
                                </div>
                            </div>
                            <div class="data col-lg-6">
                                <?php
                                echo "<h4>" . "Name: " . $row['name'] . "</h4>" .
                                "<h4>" . "Hospital: " . $row['hospital'] . "</h4>" .
                                "<h4>" . "City: " . $row['city'] . "</h4>";
                                ?>
                            </div>
                            <div class="col-lg-3">
                                <button onclick= "window.location.href = 'donator.php';">Details</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                    }
                }
                else{
                    echo "<div class='title'>" . 
                    "<h2>" . "SORRY No result available at the moment!" . "</h2>" .  
                "</div>";
                }
            ?>
            
            <div class="container">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>City</th>
                    <th>Age</th>
                    <th>E-mail</th>
                    <th>Password</th>
                    <th>Blood available</th>
                    <th>Contact</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM `users`";
                $query_run = mysqli_query($connection, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $donor) {
                ?>
                        <tr>
                            <td><?= $donor['first_name']; ?></td>
                            <td><?= $donor['last_name']; ?></td>
                            <td><?= $donor['city']; ?></td>
                            <td><?= $donor['age']; ?></td>
                            <td><?= $donor['email']; ?></td>
                            <td><?= $donor['password']; ?></td>
                            <td><?= $donor['bgp']; ?></td>
                            <td><?= $donor['contact']; ?></td>
                            <td>
                                <a href="donor-view.php?id=<?= $donor['email']; ?>" class="btn btn-info btn-sm">View</a>
                                <a href="donor-edit.php?id=<?= $donor['email']; ?>" class="btn btn-success btn-sm">Edit</a>
                                <form action="code.php" method="POST" class="d-inline">
                                    <button type="submit" name="delete_donor" value="<?= $donor['email']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                <?php
                    }
                } else {
                    echo "<h5> No Record Found </h5>";
                }
                ?>
            </tbody>
        </table>
    </div>
            <div class="page-num">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
        </div>
        
    </section>
    <!-- Requests End -->

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
