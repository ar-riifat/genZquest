<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Not Accessible!')</script>";
    echo "<script>location.href='../login.php'</script>";
    exit();
}

include '../config.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Fontawesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

    <style>
        .sidebar span {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="d-flex flex-nowrap">
        <?php include 'sidebar.php' ?>

        <!-- Form -->

        <div class="" style="width: 100%;">
            <?php include 'adminheader.php'; ?>


            <div style="flex: 1;">
                <div class="d-flex row justify-content-center container-fluid">
                    <div class="border-secondary col-lg-12 col-md-12 col-sm-12 rounded m-4">
                        <h4 class="mb-4"> Applicants</h4>

                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col" style="width: 15%;">Profile</th>
                                    <th scope="col" style="width: 10%;">Applicants</th>
                                    <th scope="col" style="width: 15%;">Mobile</th>
                                    <th scope="col" style="width: 20%;">Job Title</th>
                                    <th scope="col" style="width: 10%;">Company </th>
                                    <th scope="col" style="width: 20%;">Applied Date</th>
                                    <th scope="col" style="width: 25%;">Comments</th>
                                    <th scope="col" style="width: 20%;">Application Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $applicants = mysqli_query($conn, "SELECT * FROM `applicants`");
                                while ($row = mysqli_fetch_array($applicants)) {
                                    echo "<tr>
                                                <td>
                                                    <div class='d-flex align-items-center'>
                                                        <img src='" . $row['profile'] . "' alt='logo' style='width: 45px; height: 45px' class='rounded-circle'/>
                                                    </div>
                                                </td>
                                                <td>" . $row['applicants'] . "</td>
                                                <td>
                                                <span class='badge bg-primary'>" . $row['contact'] . "</span>
                                            </td>
                                                <td>" . $row['jobtitle'] . "</td>
                                                <td>
                                                <span class='badge bg-info'>" . $row['companyname'] . "</span>
                                            </td>
                                                <td>" . $row['applieddate'] . "</td>
                                                <td>" . $row['comments'] . "</td>
                                                <td><span class='badge text-bg-" . ($row['status'] == 0 ? "warning" : "success") . "'>" . ($row['status'] == 0 ? "Pending" : "Approved") . "</span></td>
                                            </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS and DataTables JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
                crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
            <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
            <script>
                // DataTable
                $(document).ready(function () {
                    $('#datatable').DataTable();
                });
            </script>
        </div>
    </div>
</body>

</html>