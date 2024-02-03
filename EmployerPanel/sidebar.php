<div class="admin-container-wrapper">

<div class="container">

    <div class="GridLex-gap-15-wrappper">
    
        <div class="GridLex-grid-noGutter-equalHeight">
        
            <div class="GridLex-col-3_sm-4_xs-12">
            
                <div class="admin-sidebar">
                        
                        
                    <!-- <div class="admin-user-item for-employer">
                        
                        <div class="image">
                        <?php 
                        if ($logo == null) {
                        print '<center>Company Logo Here</center>';
                        }else{
                        echo '<center><img alt="image" title="'.$compname.'" width="180" height="100" src="data:image/jpeg;base64,'.base64_encode($logo).'"/></center>';	
                        }
                        ?><br>
                        </div>
                        
                        <h4><?php echo "$compname"; ?></h4>
                        
                    </div> -->
                    
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