<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/9/2018
 * Time: 5:15 PM
 */?>

<?php

if(isset($_GET['r_id'])){
    $r_id = $_GET['r_id'];
}

    $query = "Select * FROM refreshment where refreshment_id={$r_id}";
    $select_all_refreshment = mysqli_query($connection, $query);
    while($row = $select_all_refreshment-> fetch_assoc()) {
        $e_ref_id = $row['Refreshment_id'];
        $e_ref_name = $row['Refreshment_name'];
        $e_ref_type_id = $row['Refreshment_type_id'];
        $e_price = $row['price'];
        $e_availability = $row['availability'];
        $e_image_name = $row['image_name'];
    }


if(isset($_POST['update_refreshment'])){
    $ref_name = $_POST['refreshment_name'];
    $refreshmentType = $_POST['refreshmentType'];
    $price = $_POST['price'];
    $image_name = $_POST['image_name'];
    $availability = $_POST['availability'];

    $query = "UPDATE refreshment SET ";
    $query .="Refreshment_name='{$ref_name}',";
    $query .="Refreshment_type_id='{$refreshmentType}',";
    $query .="price='{$price}',";
    $query .="availability='{$availability}',";
    $query .="image_name='{$image_name}' ";
    $query .= "WHERE refreshment_id='{$r_id}'";

    $update_ref_query = mysqli_query($connection, $query);

    confirm($update_ref_query);

        if($update_ref_query){
            header("Location: refreshments.php");
        }


    }

?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="refreshment_name">Refreshment Name</label>
        <input type="text" class="form-control" name="refreshment_name" value="<?php echo $e_ref_name ?>">
    </div>
    <div class="form-group">
        <label for="language">Refreshment Type</label>
        <select name="refreshmentType" class="form-control">
            <?php
            $query = "select * from refreshment_type";
            $select_ref_query = mysqli_query($connection, $query);
            confirm($select_ref_query);
            while($row = mysqli_fetch_assoc($select_ref_query)){
                $ref_typ_id = $row['refreshment_type_id'];
                $ref_type = $row['refreshment_type'];
                echo "<option value='$ref_typ_id'>$ref_type</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="price">Item Price</label>
        <input type="number" class="form-control" name="price" value="<?php echo $e_price ?>" />
    </div>
    <div class="form-group">
        <label for="image_name">Image Name</label>
        <input type="text" class="form-control" name="image_name" value="<?php echo $e_image_name ?>">
    </div>
    <div class="form-group">
        <label for="availability">Availability</label>
        <select name="availability" class="form-control">
            <option value='Yes'>Yes</option>
            <?php
            if($e_availability === 'No'){
                echo "<option value='No' selected>No</option>";}else{
                echo "<option value='No'>No</option>";
            }
            ?>

        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_refreshment" value="Update Refreshment">
    </div>
</form>
