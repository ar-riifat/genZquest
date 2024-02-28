
<?php
include '../config.php';
$id = ''; // Initialize $id variable to avoid uninitialized variable warnint in the URL
if (isset($_GET['id'])) {
    // Escape the 'id' parameter value for safe use in SQL query
    $id = mysqli_real_escape_string($conn, $_GET['id']);
}
$profile = mysqli_query($conn, "SELECT * FROM registration WHERE id = '$id'");
$row = mysqli_fetch_array($profile);
?>
<style>
    .GridLex-col-3_sm-4_xs-12 {
    /* CSS rules defining the column behavior */
}

/* Media query for small screens */
@media (max-width: 400px) {
    .GridLex-col-3_sm-4_xs-12 {
        /* CSS rules for small screens */
    }
}

/* Media query for extra small screens */
@media (max-width: 576px) {
    .GridLex-col-3_sm-4_xs-12 {
        /* CSS rules for extra small screens */
    }
}

    .admin-sidebar {
    background: #F5F5F5;
    border: 1px solid #E6E6E6;
    padding: 0;
    padding-top: 60px;
    margin-top: -51px;
    padding-bottom: 50px;
    margin-bottom: -10px;
    width: 30%;
    padding-right: 50px;
}
.admin-user-item {
    text-align: center;
    border-bottom: 1px solid #E1E1E1;
    line-height: 1.2;
    padding-bottom: 30px;
}

.admin-user-item .image {
    width: 100px;
    margin: 0 auto 15px;
    border-radius: 50%;
    border: 6px double #33B6CB;
    padding: 2px;
}

.admin-user-item h4,
.admin-user-item h5 {
    line-height: 1.2;
    margin: 0 0 5px;
}

.admin-user-item .user-role {
    font-weight: 600;
}

.admin-user-action {
    border-bottom: 1px solid #E1E1E1;
    padding-top: 20px;
    padding-bottom: 20px;
}

.admin-user-item.for-employer .image {
    width: 200px;
    margin: 0 auto 15px;
    border-radius: 0;
    border: 1px double #E6E6E6;
    padding: 10px 20px;
    background: #F7FCFC;
}
.admin-container-wrapper {
    padding-top: 50px;
}

.admin-content-wrapper {
    margin-bottom: 50px;
    width: 100%;
    padding-left: 10px;
}
</style>

<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
										
									<div class="admin-user-item for-employer">
										
										<div class="image">
										<?php 
										
										echo '<center><img alt="image" title="'.$firstname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($profilePicture).'"/></center>';	
										
										?><br>
										</div>
										
										<h4><?php echo $row['firstname']; ?></h4>
										
									</div>
									
									<div class="admin-user-action text-center">
									
										<a href="post-job.php" class="btn btn-primary btn-sm btn-inverse">Post a Job</a>
										
									</div>
									
									<ul class="admin-user-menu clearfix">
										<li  class="active">
											<a href="./"><i class="fa fa-user"></i> Profile</a>
										</li>
										<li class="">
										<a href="change-password.php"><i class="fa fa-key"></i> Change Password</a>
										</li>
			
										<li>
											<a href="../company.php?ref=<?php echo "$myid"; ?>"><i class="fa fa-briefcase"></i> Company Overview</a>
										</li>
										<li>
											<a href="my-jobs.php"><i class="fa fa-bookmark"></i> Posted Jobs</a>
										</li>
										<li>
											<a href="../logout.php"><i class="fa fa-sign-out"></i> Logout</a>
										</li>
									</ul>
									
								</div>

							</div>