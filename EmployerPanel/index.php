<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Company Profile</title>
	<meta name="description" content="Online Job Management / Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta property="og:image" content="http://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:secure_url" content="https://<?php echo "$actual_link"; ?>/images/banner.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="300" />
    <meta property="og:image:alt" content="Bwire Jobs" />
    <meta property="og:description" content="Online Job Management / Job Portal" />

	<link rel="shortcut icon" href="../images/ico/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	
	<link rel="stylesheet" href="../icons/linearicons/style.css">
	<link rel="stylesheet" href="../icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="../icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="../icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="../icons/rivolicons/style.css">
	<link rel="stylesheet" href="../icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="../icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="../icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="../icons/flaticon-ventures/flaticon-ventures.css">

	<link href="../css/style.css" rel="stylesheet">
	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<div class="main-wrapper">
		
			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list booking-step">
						<li><span>Profile</span></li>
					</ol>
					
				</div>
				
			</div>

			
			<div class="admin-container-wrapper">

				<div class="container">
				
					<div class="GridLex-gap-15-wrappper">
					
						<div class="GridLex-grid-noGutter-equalHeight">
						
							<div class="GridLex-col-3_sm-4_xs-12">
							
								<div class="admin-sidebar">
										
										
									<div class="admin-user-item for-employer">
										
										<div class="image">
										<br>
										</div>
										
										<h4></h4>
										
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



    <div class="container d-flex justify-content-center mt-5">
        <form action="postJobAction.php" method="POST">
            <div>
                <h2 class="mb-4">Post a Job</h2>
            </div>
            <div class="form-group">
                <label for="title">Job Title</label>
                <input type="text" class="form-control" id="title" name="jobTitle" required>
            </div>


            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="JOBID">Job Id</label>
                    <input type="number" class="form-control" id="JOBID" name="JOBID" required>
                </div>

                <div class="">
                    <label for="JOBSTATUS">Job Status</label>
                    <input type="text" class="form-control" id="JOBSTATUS" name="JOBSTATUS" required>
                </div>
            </div>



            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="companyName">Company Name</label>
                    <input type="text" class="form-control" id="companyName" name="companyName" required>
                </div>

                <div class="">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" required>
                </div>
            </div>

            <div class="d-flex gap-5 mt-4">
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
            </div>

            <div class="d-flex gap-5 mt-4">
                <div class="">
                    <label for="workExperience">Work Experience</label>
                    <input type="text" class="form-control" id="workExperience" name="workExperience" required>
                </div>

                <div class="">
                    <label for="employmentDuration">Duration of Employment</label>
                    <input type="text" class="form-control" id="employmentDuration" name="employmentDuration" required>
                </div>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Job Description" id="jobDescription" style="height: 100px"
                    name="jobDescription"></textarea>
                <label for="jobDescription">Job Description</label>
            </div>

            <div class="mt-4 form-floating">
                <textarea class="form-control" placeholder="Qualifications" id="qualifications" style="height: 100px"
                    name="qualifications"></textarea>
                <label for="qualifications">Qualifications</label>
            </div>

            <button type="submit" class="btn btn-primary mt-4">Post Job</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links here if needed -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


							
						</div>

					</div>

				</div>
			
			</div>

			
		</div>

	</div>

 
 
<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>


<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="../js/bootstrap-modal.js"></script>
<script type="text/javascript" src="../js/smoothscroll.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="../js/wow.min.js"></script>
<script type="text/javascript" src="../js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="../js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="../js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.js"></script>
<script type="text/javascript" src="../js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="../js/handlebars.min.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.js"></script>
<script type="text/javascript" src="../js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="../js/slick.min.js"></script>
<script type="text/javascript" src="../js/easy-ticker.js"></script>
<script type="text/javascript" src="../js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="../js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="../js/customs.js"></script>


</body>



</html>