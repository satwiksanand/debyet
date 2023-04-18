<?php
require 'db.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Donor View</title>
</head>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Donor View Details
                            <a href="requests.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $donor_email = mysqli_real_escape_string($connection, $_GET['id']);
                            $query = "SELECT * FROM `users` WHERE `email`='$donor_email' ";
                            $query_run = mysqli_query($connection, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $donor = mysqli_fetch_array($query_run);
                        ?>

                                <div class="mb-3">
                                    <label>First Name</label>
                                    <p class="form-control">
                                        <?= $donor['first_name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Last Name</label>
                                    <p class="form-control">
                                        <?= $donor['last_name']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>City</label>
                                    <p class="form-control">
                                        <?= $donor['city']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Age</label>
                                    <p class="form-control">
                                        <?= $donor['age']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Email</label>
                                    <p class="form-control">
                                        <?= $donor['email']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Password</label>
                                    <p class="form-control">
                                        <?= $donor['password']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Blood_Group</label>
                                    <p class="form-control">
                                        <?= $donor['bgp']; ?>
                                    </p>
                                </div>
                                <div class="mb-3">
                                    <label>Phone</label>
                                    <p class="form-control">
                                        <?= $donor['contact']; ?>
                                    </p>
                                </div>

                        <?php
                            } else {
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