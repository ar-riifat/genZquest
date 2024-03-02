<?php
include '../config.php';
$id = $_GET['id'];
$applicants = mysqli_query($conn, "SELECT * FROM applicants WHERE id = '$id'");
$row = mysqli_fetch_array($applicants);
?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Approval</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            border-radius: 40px;
        }

        body {
            background-color: #c2caf2;
        }
    </style>
</head>

<body>

    <?php require('header.php'); ?>

    <div class="container d-flex justify-content-center mt-5">

        <form action="applicantAction.php" method="POST" enctype="multipart/form-data">
            <!-- <div>
                <h2 class="text-alight-center mb-5">Profile</h2>
            </div> -->

            <div class="form-group">
                <label for="title">Applicant Name</label>
                <input type="text" placeholder="" class="form-control" id="title" name="company"
                    value="<?php echo $row['applicants']; ?>" readonly>
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="email">Email</label>
                    <input type="text" placeholder="" class="form-control" id="email" name="email"
                        value="<?php echo $row['email']; ?>" readonly>
                </div>

            </div>  
            <div class="d-flex gap-5 mt-4">
                <div>
                    <label for="country">Country</label>
                    <input type="text" placeholder="Bangladesh" class="form-control" id="country" name="country"
                        value="<?php echo $row['country']; ?>" readonly>
                </div>
                
            </div>
            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="mobile">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone Number" class="form-control" id="mobile"
                        name="mobile" value="<?php echo $row['contact']; ?>" readonly>
                </div>
            </div>
            <br>

            <div class="d-flex">
                            <div class="col-lg-3 ms-5">
                                <p>Verified STATUS</p>
                            </div>
                            <i class=" mt-2"></i>
                            <div class="d-flex ms-4 mt-1">
                                <div class="form-check">
                                    <input type="radio" name="status" value="1" <?php echo ($row['status'] == 1 ? "checked" : "") ?>>Approved
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="status" value="0" <?php echo ($row['status'] == 0 ? "checked" : "") ?>>Not Approved
                                </div>
                            </div>
                        </div>

            <button type="submit" class="btn btn-primary mt-4 mb-4">Save & Changes</button>

           

        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

</body >
</html >