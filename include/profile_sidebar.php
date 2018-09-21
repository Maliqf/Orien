<?php
if(!isset($_SESSION['user_role'])){
	echo "
	<div class='well' style='background: #fff;'>
		<h4>Login</h4>
		<form action='include/login.php' method='post'>
			<div class='form-group'>
				<input name='username' type='text' class='form-control' placeholder='Enter Username'>
			</div>
			<div class='input-group'>
				<input name='password' type='password' class='form-control' placeholder='Enter Password'>
				<span class='input-group-btn'>
				   <button class='btn btn-primary' name='login' type='submit'>Login</button>
				</span>
			</div>
		</form>
	</div>	
	";    
}else{
	$user_name = ucfirst($_SESSION['user_name']);
	$user_role = $_SESSION['user_role'];
	$profile_pic = $_SESSION['profile_pic'];
	if($user_role=='1'){
		$user_role = 'Admin';
	}
	else{
		$user_role = 'User';
	}
	
	echo "
	<div class='well' style='background: #fff;'>
			<div class='profile-sidebar'>
				<div class='profile-userpic'>
					<img style='float: none; margin: 0 auto; width: 40%; height: 50%; -webkit-border-radius: 40% !important; -moz-border-radius: 50% !important; border-radius: 50% !important;' src='images/profile/{$profile_pic}' class='img-responsive' alt=''>
				</div>
				<div class='profile-usertitle' style='text-align: center; margin-top: 20px;'>
					<div class='profile-usertitle-name' style='color: #5a7391; font-size: 16px; font-weight: 600; margin-bottom: 7px;'>
					{$user_name}
					</div>
					<div class='profile-usertitle-job' style='text-transform: uppercase; color: #5b9bd1; font-size: 12px; font-weight: 600;  margin-bottom: 15px;'>
					{$user_role}
					</div>
				</div>
				<div class='profile-usermenu' style='margin-top: 30px;'>
					<ul class='nav'>
						<li class='active'>
							<a href='#'>
							<i class='glyphicon glyphicon-home'></i>
							My Bookings </a>
						</li><li>
							<a href='#'>
							<i class='glyphicon glyphicon-user'></i>
							Account Settings </a>
						</li>";
						if($user_role==='Admin'){
						echo"<li>
							<a href='admin/'>
							<i class='glyphicon glyphicon-cog'></i>
							Admin </a>
						</li>";}
						echo "
						<li>
							<a href='include/logout.php'>
							<i class='glyphicon glyphicon-log-out'></i>
							Logout </a>
						</li>						
					</ul>
				</div>
			</div>
		</div>
	";
    
}

?>

<!--Login st -->

<!--Login end -->