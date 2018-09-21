<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 5:43 PM
 */?>

 <?php
if(isset($_POST['submit'])){

    $hall_name = trim($_POST["hall_name"]);
    $NoSeats = trim($_POST["NoSeats"]);
    $Seat_price = trim($_POST["Seat_price"]);

    if($hall_name == "" || empty($hall_name)){
        echo "Hall Name field is empty";
    }else{

        $query = "Select * FROM language WHERE Language_name='" . $hall_name . "'";
        $select_hall_exist = mysqli_query($connection, $query);
        if(mysqli_fetch_row($select_hall_exist)){
            echo "Data already exist!";
        }
        else{

        $in_query = "INSERT into halls(Hall_name, No_of_seats, seat_price) ";
        $in_query .= "VALUE('{$hall_name}', '{$NoSeats}'), '{$Seat_price}'";

        $create_category_query = mysqli_query($connection, $in_query);
        if(!$create_category_query){
            echo "Query Failed";
            die('Query Failed' . mysqli_error($connection));
        }
        header("Location: halls.php");
        }
    }


}

?>

<form action="" method="post">
    <div class="form-group">
        <label for="hall_name">Hall Name</label>
        <input class="form-control" type="text" name="hall_name" />
    </div>
    <div class="form-group">
        <label for="NoSeats">No of Seats</label>
        <input class="form-control" type="number" name="NoSeats" />
    </div>
    <div class="form-group">
        <label for="Seat_price">Ticket Price</label>
        <input class="form-control" type="number" name="Seat_price" />
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Add Hall">
    </div>
</form>