<?php
session_start();
require ('db.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Donor Edit</title>
</head>
<body>
  
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donor Edit 
                            <a href="requests.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $donor_email = mysqli_real_escape_string($connection, $_GET['id']);
                            $query = "SELECT * FROM `users` WHERE `email`='$donor_email' ";
                            $query_run = mysqli_query($connection, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $donor = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="email" value="<?= $donor['email']; ?>">
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="fn" value="<?=$donor['first_name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="ln" value="<?=$donor['last_name'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label>City</label>
                                        <input type="text" name="city" value="<?=$donor['city'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Age</label>
                                        <input type="number" name="age" value="<?=$donor['age'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Password</label>
                                        <input type="password" name="pass" value="<?=$donor['password'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Blood_Group</label>
                                        <input type="text" name="bgp" value="<?=$donor['bgp'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phone</label>
                                        <input type="text" name="contact" value="<?=$donor['contact'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_donor" class="btn btn-primary">
                                            Update donor
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>