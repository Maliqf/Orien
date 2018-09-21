<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/3/2018
 * Time: 9:08 PM
 */

?>
<?php include "admin/functions.php"?>
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/mystyle.css?<?php echo time(); ?>">
	<link href="css/bootstrap.min.css?<?php echo time(); ?>" rel="stylesheet"/>
    
	<script src="jquery-3.3.1.min.js?<?php echo time(); ?>"></script>
	<script src="js/slick.js?<?php echo time(); ?>"></script>
	
	<title>Orien Cinema</title>
</head>
<body>
<div class="main-body-wrapper ">
<header style="min-height: '65px'; display: block;">
    <nav id="navbar" class="navbar ">
        <div class="select-overlay"></div>
        <div class="primary-header">
            <div class="header-col header-col-1">
                <div class="brand">
                    <img src="Logo4.png" height="80" width="150" style="border-radius: 8px;"/>
                </div>
            </div>
            <div class="header-col header-cal-2">
                <?php include "search.php"?>
                <div class="primary-nav">
                    <div class="inner-nav left-nav">
                        <ul>
                        <?php
                        $query = "Select * FROM Status";
                        $select_all_status = mysqli_query($connection, $query);

                        while($row = $select_all_status-> fetch_assoc()){
                            $status_title = $row['status_type'];
                            $status_id = $row['status_id'];
                            if($status_id==1)
                            {
                                echo "<li class='primary-menu __active'><a href='index.php' class='nav-link'>{$status_title}</a></li>";
                            }
                            else {
                                echo "<li class='primary-menu'><a href='#' class='nav-link'>{$status_title}</a></li>";
                            }

                        }

                        ?>
                            
                            <!--<li class="primary-menu __active">
                                <a href="" class="nav-link">Now Showing</a>
                            </li>
                            <li class="primary-menu">
                                <a href="" class="nav-link">Coming Soon</a>
                            </li>-->
                        </ul>
                    </div>
                </div>
            </div>
			<?php
			if(isset($_SESSION['user_role'])){
				$user_role = $_SESSION['user_role'];
				$profile_pic = $_SESSION['profile_pic'];
				if($user_role=='1'){
					$user_role = 'Admin';
				}
				else{
					$user_role = 'User';
				}
				echo "
			<div class='header-col header-cal-3'>
            <div class='header-limiter'>
				<div class='header-user-menu'>
					<img src='images/profile/{$profile_pic}' alt='User Image'/>
					<ul style='background-color:#22556E;'>
						<li><a href='#'>My Bookings</a></li>
						<li><a href='#'>Settings</a></li>";
						if($user_role==='Admin'){
						echo "
						<li><a href='admin'>Admin</a></li>";}
						echo"
						<li><a href='include/logout.php'>Logout</a></li>
					</ul>
				</div>
			</div>
			</div>";
			}else{
			echo "
			<div class='header-col header-cal-3'>
			<a href='registration.php'><input class='btn btn-primary' type='submit' value='Signup'></a>
			</div>
			";
			}
			
			?>
        </div>
		</nav>
</header>
