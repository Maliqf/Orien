<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:54 PM
 */?>

<?php

if(isset($_POST['add_refreshment'])){
    $ref_name = $_POST['refreshment_name'];
    $refreshmentType = $_POST['refreshmentType'];
    $price = $_POST['price'];
    $image_name = $_POST['image_name'];
    $availability = $_POST['availability'];

    $query = "INSERT INTO refreshment(Refreshment_name,Refreshment_type_id,price,availability,image_name)";
    $query .= " Values('{$ref_name}', '{$refreshmentType}', '{$price}', '{$availability}', '{$image_name}')";



    $create_refreshment_query = mysqli_query($connection, $query);

    confirm($create_refreshment_query);
    header("Location: refreshments.php");


}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="refreshment_name">Refreshment Name</label>
        <input type="text" class="form-control" name="refreshment_name">
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
        <input type="number" class="form-control" name="price" />
    </div>
    <div class="form-group">
        <label for="image_name">Image Name</label>
        <input type="text" class="form-control" name="image_name">
    </div>
    <div class="form-group">
        <label for="availability">Availability</label>
        <select name="availability" class="form-control">
            <option value='Yes'>Yes</option>
            <option value='No'>No</option>
        </select>
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add_refreshment" value="Insert Refreshment"
    </div>
</form>