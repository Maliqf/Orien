<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 12:26 PM
 */?>
<?php include "db.php"; ?>
<?php session_start();?>


<?php


if(isset($_POST['login'])){
    $user_name = strtolower($_POST['username']);
    $password = $_POST['password'];

    $user_name = mysqli_real_escape_string($connection, $user_name);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "SELECT * FROM USERS WHERE User_name='{$user_name}'";
    $select_user_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user_query)){
        $db_id = $row['User_id'];
        $db_user_name = $row['User_name'];
        $db_email = $row['Email'];
        $db_role = $row['user_type_id'];
        $db_password = $row['Password'];
		$db_profile_pic = $row['Profile_pic'];
    }
	
	$password = crypt($password, $db_password);

    if($user_name !== $db_user_name || $password !== $db_password){
        header("Location: ../index.php ");
    }else if($user_name == $db_user_name && $password == $db_password){
        $_SESSION['user_name'] = $db_user_name;
        $_SESSION['user_id'] = $db_id;
        $_SESSION['user_role'] = $db_role;
		$_SESSION['profile_pic'] = $db_profile_pic;

        header("Location: ../index.php");
    }else{
        header("Location: ../index.php ");
    }

}

?>