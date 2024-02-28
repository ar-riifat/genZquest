<?php
include '../config.php';
$id = ''; // Initialize $id variable to avoid uninitialized variable warnint in the URL
if (isset($_GET['JOBID'])) {
    // Escape the 'id' parameter value for safe use in SQL query
    $id = mysqli_real_escape_string($conn, $_GET['JOBID']);
}
$job = mysqli_query($conn, "SELECT * FROM job WHERE JOBID = '$id'");
$row = mysqli_fetch_array($job);


?>
<style type="text/css">
.content-header {
	min-height: 50px;
	border-bottom: 1px solid #ddd;
	font-size: 15px;
	font-weight: bold;
}
.content-body {
	min-height: 350px;
	/*border-bottom: 1px solid #ddd;*/
}
.content-body >p {
	padding:10px;
	font-size: 12px;
	font-weight: bold;
	border-bottom: 1px solid #ddd;
}
.content-footer {
	min-height: 100px;
	border-top: 1px solid #ddd;

}
.content-footer > p {
	padding:5px;
	font-size: 15px;
	font-weight: bold; 
}
 
.content-footer textarea {
	width: 100%;
	height: 200px;
}
.content-footer  .submitbutton{  
	margin-top: 20px;
	/*padding: 0;*/

}
</style>
<form action="#" method="POST">
<div class="col-sm-12 content-header" style="">View Details</div>
<div class="col-sm-6 content-body" > 
	<p>Job Details</p> 
	<h3><?php echo $row['JOBTITLE']; ?></h3>
	<input type="hidden" name="JOBREGID" value="<?php echo $row['JOBID']; ?>">
	<input type="hidden" name="APPLICANTID" value="<?php echo $row['id'];?>">

	<div class="col-sm-6">
		<ul>
            <li><i class="fp-ht-bed"></i>Required No. of Employee's :<?php echo $row['REQ_NO_EMPLOYEES']; ?></li>
            <li><i class="fp-ht-food"></i>Salary : <?php echo $row['SALARIES']; ?></li>
            <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $row['DURATION_EMPLOYMENT']; ?></li>
        </ul>
	</div> 
	<div class="col-sm-6">
		<ul> 
            <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $row['PREFEREDSEX']; ?></li>
            <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $row['SECTOR_VACANCY']; ?></li>
        </ul>
	</div>
	<div class="col-sm-12">
		<p>Job Description : </p>   
		<p style="margin-left: 15px;"><?php echo $row['JOBDESCRIPTION']; ?></p>
	</div>
	<div class="col-sm-12"> 
		<p>Qualification/Work Experience : </p>
		<p style="margin-left: 15px;"><?php echo $row['QUALIFICATION']; ?></p>
	</div>
	<div class="col-sm-12"> 
		<p>Employeer : </p>
		<p style="margin-left: 15px;"><?php echo $row['COMPANYNAME']; ?></p> 
		<!-- <p style="margin-left: 15px;">BAGLADESH</p> -->
	</div>
</div>
<?php
include '../config.php';
$id = ''; // Initialize $id variable to avoid uninitialized variable warnint in the URL
if (isset($_GET['id'])) {
    // Escape the 'id' parameter value for safe use in SQL query
    $id = mysqli_real_escape_string($conn, $_GET['id']);
}
$applicants = mysqli_query($conn, "SELECT * FROM applicants WHERE id = '$id'");
$row = mysqli_fetch_array($applicants);
?>
<div class="col-sm-6 content-body" >
	<p>Applicant Infomation</p> 
	<!-- <h3> <?php echo $row['SECTOR_VACANCY']. ',' .$row['SECTOR_VACANCY'] ; ?></h3> -->
	<ul> 
		<li>Address : <?php echo $row['SECTOR_VACANCY']; ?></li>
		<li>Contact No. : <?php echo $row['SECTOR_VACANCY']; ?></li>
		<li>Email Address. : <?php echo $row['SECTOR_VACANCY']; ?></li>
		<li>Sex: <?php echo $row['SECTOR_VACANCY']; ?></li>
		<li>Age :<?php echo $row['SECTOR_VACANCY']; ?></li> 
	</ul>
	<div class="col-sm-12"> 
		<p>Educational Attainment : </p>
		<p style="margin-left: 15px;"><?php echo $row['SECTOR_VACANCY']; ?></p>
	</div>


</div> 
<div class="col-sm-12 content-footer">
<p><i class="fa fa-paperclip"></i>  Attachment Files</p>
	<div class="col-sm-12 slider">
		 <h3>Download Resume <a href="<?php echo web_root.'applicant/'.$attachmentfile->FILE_LOCATION; ?>">Here</a></h3>
	</div> 

	<div class="col-sm-12">
		<p>Feedback</p>
		<textarea class="input-group" name="REMARKS"><?php echo isset($jobreg->REMARKS) ? $jobreg->REMARKS : ""; ?></textarea>
	</div>
	<div class="col-sm-12  submitbutton "> 
		<button type="submit" name="submit" class="btn btn-primary">Send</button>
	</div> 
</div>
</form>