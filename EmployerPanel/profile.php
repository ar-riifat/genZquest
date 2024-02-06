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









<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>

<?php require('header.php'); ?>

    <div class="container d-flex justify-content-center mt-5">
        <form action="" method="POST">
            <div>
                <h2 class="mb-4">Profile</h2>
            </div>
            <div class="form-group">
                <label for="title">Company Name</label>
                <input type="text" placeholder="Enter Your Company Name" class="form-control" id="title" name="company" required>
            </div>


            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="estd">Established In</label>
                    <input type="text" placeholder="2021, 2022, 2023, 2024" class="form-control" id="estd" name="estd" required>
                </div>

                <div class="">
                    <label for="type">Type</label>
                    <input type="text" placeholder="Ex: It, Travel" class="form-control" id="type" name="type" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="website">Website</label>
                    <input type="text" placeholder="Enter Your Website" class="form-control" id="website" name="website" required>
                </div>

                <div class="">
                    <label for="city">City/Town</label>
                    <input type="text" placeholder="Enter Your City" class="form-control" id="city" name="city" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="street">Street</label>
                    <input type="text" placeholder="Enter Your Street" class="form-control" id="street" name="street" required>
                </div>

                <div class="">
                    <label for="zip">Zip Code</label>
                    <input type="text" placeholder="Enter Your Zip Code" class="form-control" id="zip" name="zip" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="country">Country</label>
                    <input type="text" placeholder="Bangladesh" class="form-control" id="country" name="country" required>
                </div>

                <div class="">
                    <label for="mobile">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone Number" class="form-control" id="mobile" name="mobile" required>
                </div>
            </div>
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="email">Email</label>
                    <input type="email" placeholder="Enter Your Email" class="form-control" id="email" name="email" required>
                </div>

                <!-- <div class="">
                    <label for="JOBSTATUS">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone umber" class="form-control" id="JOBSTATUS" name="JOBSTATUS" required>
                </div> -->
            </div>



            <!-- <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" required>
                </div>

                <div class="">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
            </div> -->

            <!-- <div class="d-flex gap-5 mt-4">
                <div class="" style="width: 14rem;">
                    <label for="city" class="form-label">City</label>
                    <select class="form-select" name="city" required="">
                        <option value="">Choose...</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Chottogram">Chottogram</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Barishal">Barishal</option>
                    </select>
                </div>

                <div class="">
                    <label for="country">Country</label>
                    <input type="text" class="form-control" id="country" name="country" required>
                </div>
            </div> -->

            <!-- <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="workExperience">Work Experience</label>
                    <input type="text" class="form-control" id="workExperience" name="workExperience" required>
                </div>

                <div class="">
                    <label for="employmentDuration">Duration of Employment</label>
                    <input type="text" class="form-control" id="employmentDuration" name="employmentDuration" required>
                </div>
            </div> -->

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Company Background" id="about" style="height: 100px"
                    name="about"></textarea>
                <label for="companyBackground">Company Background</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Service" id="service" style="height: 100px"
                    name="service"></textarea>
                <label for="service">Serivce</label>
            </div>

            <button type="submit" class="btn btn-primary mt-4 mb-4">Update</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>