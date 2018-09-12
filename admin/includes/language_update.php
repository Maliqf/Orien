<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 5:43 PM
 */?>

<form action="" method="post">
    <div class="form-group">
        <label for="lang_title">Update Category</label>
        <?php
        if(isset($_GET['edit'])){
            $edit_lang_id = $_GET['edit'];
            $e_lang_title = "";
            $query = "Select * from language where Language_id ={$edit_lang_id}";
            $edit_chk_query = mysqli_query($connection, $query);
            while($row = $edit_chk_query-> fetch_assoc()){
                            $e_lang_title = $row['Language_name'];
                        }
            ?>

            <input value="<?php if(isset($edit_lang_id)){echo $e_lang_title;} ?>" type="text" class="form-control" name="lang_title"/>

            <?php
        }
        ?>

        <?php
        if(isset($_POST['update_category'])){
            $edit_lang_title = $_POST['lang_title'];
            $query = "Update language SET Language_name='{$edit_lang_title}' where Language_id ='{$edit_lang_id}'";
            $edit_query = mysqli_query($connection, $query);
            if(!$edit_query){
                die('Query Failed' . mysqli_error($connection));
            }
            header("Location: language.php");
        }
        ?>

    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
    </div>
</form>