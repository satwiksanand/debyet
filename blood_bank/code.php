<?php
session_start();
require ('db.php');

if (isset($_POST['delete_donor'])) {
    $donor_email = mysqli_real_escape_string($connection, $_POST['delete_donor']);

    $query = "DELETE FROM `users` WHERE `users`.`email`='$donor_email' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        // $_SESSION['message'] = "Donor Deleted Successfully";
        $_SESSION['del']=true;
        header("Location: requests.php");
        exit(0);
    } else {
        // $_SESSION['message'] = "Donor Not Deleted";
        $_SESSION['del']=true;
        header("Location: requests.php");
        exit(0);
    }
}

if (isset($_POST['update_donor'])) {
    $fn = mysqli_real_escape_string($connection, $_POST['fn']);

    $ln = mysqli_real_escape_string($connection, $_POST['ln']);
    $phone = mysqli_real_escape_string($connection, $_POST['contact']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $blood_group = mysqli_real_escape_string($connection, $_POST['bgp']);
    $city = mysqli_real_escape_string($connection, $_POST['city']);
    $age = mysqli_real_escape_string($connection, $_POST['age']);
    $pass = mysqli_real_escape_string($connection, $_POST['pass']);

    $query = "UPDATE `users` SET `first_name`='$fn', `last_name`='$ln', `email`='$email', `bgp`='$blood_group', `password` = '$pass', `contact`='$phone', `city`='$city', `age`='$age' WHERE `users`.`email`='$email' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        // $_SESSION['message'] = "Donor Updated Successfully";
        header("Location: requests.php");
        
    }
    
}


// if (isset($_POST['save_donor'])) {
//     $name = mysqli_real_escape_string($connection, $_POST['name']);
//     $phone = mysqli_real_escape_string($connection, $_POST['phone']);
//     $email = mysqli_real_escape_string($connection, $_POST['email']);
//     $blood_group = mysqli_real_escape_string($connection, $_POST['blood_group']);
//     $pincode = mysqli_real_escape_string($connection, $_POST['pincode']);

//     $query = "INSERT INTO donor (name,phone,email,blood_group,pincode) VALUES ('$name','$phone','$email','$blood_group','$pincode')";

//     $query_run = mysqli_query($connection, $query);
//     if ($query_run) {
//         $_SESSION['message'] = "Donor Created Successfully";
//         header("Location: donor-create.php");
//         exit(0);
//     } else {
//         $_SESSION['message'] = "Donor Not Created";
//         header("Location: donor-create.php");
//         exit(0);
//     }
// }
?>