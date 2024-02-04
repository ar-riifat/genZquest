<?php

include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $companyName = $_POST['companyName'];
    $category = $_POST['category'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $workExperience = $_POST['workExperience'];
    $employmentDuration = $_POST['employmentDuration'];
    $jobtype = $_POST['job-type'];
    $description = $_POST['description'];
    $qualification = $_POST['qualification'];

    $insertQuery = "INSERT INTO `job-post`(`job-title`, `company-name`, `category`, `city`, `country`, `experience`, `duration`, `job-type`, `description`, `qualification`) 
                    VALUES ('$title','$companyName','$category','$city','$country','$workExperience','$employmentDuration','$jobtype','$description','$qualification')";

    if (!mysqli_query($conn, $insertQuery)) {
        echo "<script>alert('Not Inserted!!')</script>";
        echo "<script>location.href = 'post-job.php'</script>";
    } else {
        echo "<script>alert('Information Updated Failed!!')</script>";
        echo "<script>location.href='post-job.php'</script>";
    }
}
?>
