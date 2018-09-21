<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 5:43 PM
 */?>

 <div class="form-group">
        <a href="halls.php"><input class="btn btn-success" type="button" value="Add Hall"></a>
</div>

<form action="" method="post">
            
        <?php
        if(isset($_GET['edit'])){
            $edit_hall_id = $_GET['edit'];
            $e_hall_name = "";
            $e_no_seats = "";
            $e_seat_price = "";
            $query = "Select * from halls where Hall_id ={$edit_hall_id}";
            $edit_chk_query = mysqli_query($connection, $query);
            while($row = $edit_chk_query-> fetch_assoc()){
                            $e_hall_name = $row['Hall_name'];
                            $e_no_seats = $row['No_of_seats'];
                            $e_seat_price = $row['seat_price'];
                        }
            ?>
            <div class="form-group">
            <label for="hall_name">Hall Name</label>
            <input value="<?php if(isset($edit_hall_id)){echo $e_hall_name;} ?>" type="text" class="form-control" name="hall_name"/>
            </div>
            <div class="form-group">
            <label for="no_seats">Hall Number</label>
            <input value="<?php if(isset($edit_hall_id)){echo $e_no_seats;} ?>" type="number" class="form-control" name="no_seats"/>
            </div>
            <div class="form-group">
            <label for="seat_price">Ticket Price</label>
            <input value="<?php if(isset($e_seat_price)){echo $e_seat_price;} ?>" type="number" class="form-control" name="seat_price"/>
            </div>

            <?php
        }
        ?>

        <?php
        if(isset($_POST['update_hall'])){
            $edit_hall_name = $_POST['hall_name'];
            $edit_no_seats = $_POST['no_seats'];
            $seat_price = $_POST['seat_price'];
            $query = "Update halls SET Hall_name='{$edit_hall_name}', No_of_seats='{$edit_no_seats}', seat_price='{$seat_price}' where hall_id ='{$edit_hall_id}'";
            $edit_query = mysqli_query($connection, $query);
            if(!$edit_query){
                die('Query Failed' . mysqli_error($connection));
            }
            header("Location: halls.php");
        }
        ?>

    
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_hall" value="Update Hall">
    </div>

    
</form>