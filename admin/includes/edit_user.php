<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/9/2018
 * Time: 5:15 PM
 */?>

<?php

if(isset($_GET['u_id'])){
    $u_id = $_GET['u_id'];
}

    $query = "Select * FROM users where User_id={$u_id}";
    $select_all_users = mysqli_query($connection, $query);
    while($row = $select_all_users-> fetch_assoc()) {
        $e_user_id = $row['User_id'];
        $e_user_name = $row['User_name'];
        $e_royalty = $row['Royalty_Points'];
        $e_user_type_id = $row['user_type_id'];
    }


if(isset($_POST['update_user'])){
$userType = $_POST['userType'];
$royalty = $_POST['royalty'];

    $query = "UPDATE users SET ";
    $query .="user_type_id='{$userType}', ";
    $query .="Royalty_Points='{$royalty}' ";
    $query .= "WHERE User_id='{$u_id}'";

$update_user_query = mysqli_query($connection, $query);

confirm($update_user_query);

    if($update_user_query){
        header("Location: users.php");
    }


}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="user_name">User Name</label>
        <input type="text" class="form-control" name="user_name" value="<?php echo $e_user_name ?>" readonly>
    </div>
    <div class="form-group">
        <label for="royalty">Royalty Points</label>
        <input type="number" class="form-control" name="royalty" value="<?php echo $e_royalty ?>">
    </div>
    <div class="form-group">
        <label for="userType">User Type</label>

        <select name="userType" class="form-control">
            <?php
            $query = "select * from user_type";
            $select_userType_query = mysqli_query($connection, $query);
            confirm($select_userType_query);
            while($row = mysqli_fetch_assoc($select_userType_query)){
                $u_type_id = $row['User_type_id'];
                $u_type = $row['User_type'];
                if($e_user_type_id === $u_type_id){
                    echo "<option value='$u_type_id' selected>$u_type</option>";
                }else{
                    echo "<option value='$u_type_id'>$u_type</option>";
                }
                
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_user" value="Update User"
    </div>
</form>
