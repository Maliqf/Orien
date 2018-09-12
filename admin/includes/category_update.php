<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 5:43 PM
 */?>

<form action="" method="post">
    <div class="form-group">
        <label for="cat_title">Update Category</label>
        <?php
        if(isset($_GET['edit'])){
            $edit_status_id = $_GET['edit'];
            $query = "Select * from status where status_id ={$edit_status_id}";
            $edit_chk_query = mysqli_query($connection, $query);
            ?>

            <input value="<?php if(isset($edit_status_id)){echo $edit_status_id;} ?>" type="text" class="form-control" name="cat_title"/>

            <?php
        }
        ?>

        <?php
        if(isset($_POST['update_category'])){
            $edit_status_title = $_POST['cat_title'];
            $query = "Update status SET status_type='{$edit_status_title}' where status_id ={$edit_status_id}";
            $edit_query = mysqli_query($connection, $query);
            if(!$edit_query){
                die('Query Failed' . mysqli_error($connection));
            }
        }
        ?>

    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
    </div>
</form>