<?php

include '../config.php';

if (isset($_POST['profile'])) {
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

    // $update = mysqli_query($conn, "UPDATE `job` SET `JOBID`='$jobid',`COMPANYID`='$companyid',`COMPANYNAME`='$companyname',`CATEGORY`='$category',
    //     `OCCUPATIONTITLE`='$occTitle',`REQ_NO_EMPLOYEES`='$employee',`SALARIES`='$salaries',`DURATION_EMPLOYMENT`='$duration',
    //     `WORK_EXPERIENCE`='$exp',`JOBDESCRIPTION`='$jobdes',`PREFEREDSEX`='$gender',`SECTOR_VACANCY`='$sector',`JOBSTATUS`='$jobstatus',
    //     `status`= '$status' WHERE `JOBID`='$jobid'");
    $update = mysqli_query($conn, "UPDATE `registration` SET `firstname`='$company',`byear`='$estd',`email`='$email',`mobile`='$mobile',`type`='$type',`city`='$city',`street`='$street',`zip`='$zip',`country`='$country',`about`='$about',`service`='$service',`website`='$website' ");

    if ($update) {
        echo "<script>alert('Information Updated Successfully!!')</script>";
        echo "<script>location.href='profile.php'</script>";
    } else {
        echo "<script>alert('Information Updated Failed!!')</script>";
        echo "<script>location.href='profile.php'</script>";
    }

}

// if (isset($_GET['deleteid'])) {
//     $id = $_GET['deleteid'];

//     $deleteQuery = mysqli_query($conn, "DELETE FROM job WHERE JOBID='$id'");

//     if($deleteQuery) {
//         echo "<script>alert('Information Deleted Successfully!!')</script>";
//         echo "<script>location.href='joblist.php'</script>";
//     } else {
//         echo "<script>alert('Deletion Failed!!')</script>";
//         echo "<script>location.href='joblist.php'</script>";
//     }

// } else {
//     echo "<script>alert('Not Accessible')</script>";
//     echo "<script>location.href='joblist.php'</script>";
// }
?>