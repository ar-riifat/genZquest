<?php
require('config.php'); // Include the database configuration

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the user's search query
    $searchQuery = $_POST['keyword'];

    // Split the search query into an array of keywords
    $keywords = explode(',', $searchQuery);

    // Create an array to store the conditions for each keyword
    $conditions = array();

    // Build conditions for each keyword
    foreach ($keywords as $keyword) {
        $conditions[] = "(j.`JOBTITLE` LIKE '%$keyword%'
                     
                        OR j.`keyword` LIKE '%$keyword%')";
    }
    


    // Combine conditions using OR
    $conditionsString = implode(' OR ', $conditions);

    // SQL query to retrieve job details matching the search query
    $sql = "SELECT * FROM `company` c, `job` j 
            WHERE c.`COMPANYID` = j.`COMPANYID` AND ($conditionsString) 
            ORDER BY j.`DATEPOSTED` DESC";

    // Execute the query
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            // Display the search results
            while ($row = $result->fetch_assoc()) {
                ?>
                 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Job Details</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Add your additional CSS and styles here -->
     <link href="CSS/style.css" rel="stylesheet">
     <style>
        
    .apply-button {

    background: #8282e7;
    color: white;
    border-color: #8282e7;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 0;
    display: inline-block;
    text-align: center;
}


 
         .job-details-container {
             border: 1px solid #ccc;
             border-radius: 5px;
             padding: 20px;
             margin: 10px;
             width: 100%; /* Adjust the width as needed */
          
             box-sizing: border-box;
         }
     </style>
 </head>
 <body>
     <?php require('include/header.php'); ?>
 
     
 
  
        
         <div class="job-details-container">
          <div class="container-fluid py-3 text-center">

    <h1 >Job details</h1>
        </div>
             <h1><?php echo $row['JOBTITLE']; ?></h1>
             <p>Date Posted: <?php echo date_format(date_create($row['DATEPOSTED']), 'M d, Y'); ?></p>
 
             <!-- Display other job details here -->
             <ul>
                 <li>Required No. of Employees: <?php echo $row['REQ_NO_EMPLOYEES']; ?></li>
                 <li>Salary: <?php echo number_format($row['SALARIES'], 2); ?></li>
                 <li>Duration of Employment: <?php echo $row['DURATION_EMPLOYEMENT']; ?></li>
                 <li>Prefered Sex : <?php echo  $row['PREFEREDSEX']; ?></li>
                 <li>Sector of Vacancy : <?php echo  $row['SECTOR_VACANCY'];  ?></li>
                 
             </ul>
 
             <p>Qualification/Work Experience: <?php echo $row['WORK_EXPERIENCE']; ?></p>
             <p>Experience Requirement : <?php echo $row['keyword']; ?></p>
             
    
             <p>Job Description:<?php echo $row['JOBDESCRIPTION']; ?></p>
            <p>Employer: <?php echo $row['COMPANYNAME']; ?></p>
            <p>Location: <?php echo $row['COMPANYADDRESS']; ?></p>
            <!-- Add the link to view job details with JOBID included in the URL -->
            <a href="http://localhost/genzquest/jobapplication.php?search=<?php echo $row['JOBID']; ?>" class="btn btn-main btn-next-tab apply-button">Apply Now</a>

         </div>
     </section>
     
     </div>


 
   
		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
 </body>
 </html>
                <?php
            }

            // Free the result set after the loop
            $result->free_result();
        } else {
            // No results found
            echo '<h1>No result found!.....</h1>';
        }
    } else {
        // Handle query error
        echo "Error: " . $conn->error;
    }
}
?>