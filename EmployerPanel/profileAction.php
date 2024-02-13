<?php

include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $company = $_POST['company'];
    $estd = $_POST['estd'];
    $type = $_POST['type'];
    $website = $_POST['website'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    // $mobile = $_POST['mobile'];
    // $email = $_POST['email'];
    $about = $_POST['about'];
    $service = $_POST['service'];

    $insertQuery = "INSERT INTO `employer`(`estd`,`type`, `city`, `street`, `zip`, `country`, `about`, `service`,`website`) VALUES ('$estd','$type','$city','$street','$zip','$country','$about','$service','$website')";
    
    if(!mysqli_query($conn, $insertQuery)) {
        echo "<script>alert('Not update!!')</script>";
        echo "<script>location.href = 'profile.php'</script>";
    } else {
        echo "<script>alert('update!!')</script>";
        echo "<script>location.href='profile.php'</script>";
    }
}

?>
