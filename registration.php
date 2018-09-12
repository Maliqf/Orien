<?php  include "include/db.php"; ?>
 <?php  include "include/header.php"; ?>


  <!-- Navigation -->

<?php

if(isset($_POST['submit'])){
    echo "Working";
    $user_name = strtolower($_POST['username']);
    $email = strtolower($_POST['email']);
    $phone = $_POST['phone'];
    $gender = $_POST['gender1'];
    $password = $_POST['password'];
    $profile_pic = "default_male.jpg";
    if($gender=='Female'){
        $profile_pic = "default_female.jpg";
    }

    if(!empty($user_name) && !empty($email) && !empty($phone) && !empty($password)){

        $user_name = mysqli_real_escape_string($connection, $user_name);
        $email = mysqli_real_escape_string($connection, $email);
        $phone = mysqli_real_escape_string($connection, $phone);
        $password = mysqli_real_escape_string($connection, $password);

        $query = "SELECT randSalt from users";
        $select_randsalt_query = mysqli_query($connection, $query);

        confirm($select_randsalt_query);

        $row = mysqli_fetch_array($select_randsalt_query);
        $salt = $row['randSalt'];

        $password = crypt($password, $salt);
        echo $password;

        $query = "INSERT INTO users(User_name,Email,Phone,Joint_date,City,Royalty_Points,Subscription,Gender,DOB,Profile_pic,Password,user_status_id,user_type_id)";
        $query .= " Values('{$user_name}', '{$email}', '{$phone}', Now(), 'Colombo', '100', '1', '{$gender}', Now(), '{$profile_pic}', '{$password}', '1', '2')";


        $create_user_query = mysqli_query($connection, $query);

        confirm($create_user_query);

    }


}

?>

 
    <!-- Page Content -->
    <div class="container">
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="registration.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter Desired Username">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="somebody@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="sr-only">phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group">
                            <label for="gender1" class="sr-only">Gender</label>
                            <select class="form-control selcls" name="gender1">
                                <option value="Male">Select Your Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>


        <hr>



<?php include "include/footer.php";?>
