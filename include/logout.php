<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/9/2018
 * Time: 3:40 PM
 */?>

<?php session_start(); ?>
<?php
$_SESSION['user_name'] = null;
$_SESSION['user_id'] = null;
$_SESSION['user_role'] = null;
$_SESSION['profile_pic'] = null;

header("Location: ../index.php");

?>
