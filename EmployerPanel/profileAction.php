<?php

include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company = $_POST['company'];
    $estd = $_POST['estd'];
    $type = $_POST['type'];
    $website = $_POST['website'];
    $city = $_POST['city'];
    $street = $_POST['street'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $about = $_POST['about'];
    $service = $_POST['service'];
    $userEmail = $_POST['email'];


    if (isset($_FILES["image"])) {
        $imageName = $_FILES["image"]["name"];
        $imageSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $destination = 'pic/' . $imageName;

        $extension = pathinfo($imageName, PATHINFO_EXTENSION);

        if (!in_array($extension, ['jpg', 'jpeg', 'png'])) {
            echo "File extension must be 'jpg', 'jpeg', 'png'";
        } elseif ($imageSize > 1200000) { // File shouldn't be larger than 1 Megabyte
            echo "File size too large!";
        } else {
            // Move the uploaded (temporary) file to the specified destination
            if (move_uploaded_file($tmpName, $destination)) {
                // Update the image column in the database
                $updateImageSql = "UPDATE `registration` SET `image` = '$imageName' WHERE `email` = '$userEmail'";
                mysqli_query($conn, $updateImageSql);
                echo "<script>alert('Image updated successfully');</script>";
            } else {
                echo "<script>alert('Error moving uploaded file');</script>";
            }
        }
    }

    $update = mysqli_query($conn, "UPDATE `registration` SET `firstname`='$company', `byear`='$estd', `type`='$type', `website`='$website', `city`='$city', `street`='$street', `zip`='$zip', `country`='$country', `about`='$about', `service`='$service', `email`='$email', `mobile`='$mobile' WHERE `id` = '$id' ");


if ($update) {
echo "<script>alert('Information Updated Successfully!!')</script>";
echo "<script>location.href='profile.php'</script>";
} else {
echo "<script>alert('Information Updated Failed!!')</script>";
echo "<script>location.href='joblist.php'</script>";
}

}


?>