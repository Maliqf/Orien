<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/8/2018
 * Time: 4:54 PM
 */?>

<?php

if(isset($_POST['add_show'])){
    $movie_name = $_POST['movie_name'];
    $hall_name = $_POST['hall_name'];
    $show_time_id = $_POST['show_time'];
    $date_from = date('Y-m-d', strtotime($_POST['date_from']));
    $date_to = date('Y-m-d', strtotime($_POST['date_to']));

    $available_seats = $_POST['available_seats'];

    if(check_show_day($hall_name, $date_from, $show_time_id)){
        echo "<p style='color:red;'>A Show Already Running on Selected Date Range in the selected Hall</p>";

    }elseif(check_show_day($hall_name, $date_to, $show_time_id)){
        echo "<p style='color:red;'>A Show Already Running on Selected Date Range in the selected Hall</p>";
    }else{


    $query = "Select * FROM movies where movie_id='{$movie_name}'";
    $select_movie = mysqli_query($connection, $query);
    while($row1 = $select_movie-> fetch_assoc()){
        $duration = $row1['Duration'];
    }

    $query = "Select * FROM show_times where show_time_id='{$show_time_id}'";
    $select_show_time = mysqli_query($connection, $query);
    while($row1 = $select_show_time-> fetch_assoc()){
        $show_time = $row1['show_time'];
    }

    $timesplit = explode(':',$duration);
    $min=($timesplit[0]*60)+($timesplit[1])+($timesplit[2]>30?1:0);

    $Show_end = date('h:i:s', strtotime("{$min} minutes", strtotime($show_time)));



    $query = "INSERT INTO film_shows(Movie_id,Hall_id,Show_time_id,Date_from,Date_to,Show_end,Available_seats)";
    $query .= " Values('{$movie_name}', '{$hall_name}', '{$show_time_id}', '{$date_from}', '{$date_to}', '{$Show_end}', '{$available_seats}')";


   /* $create_show_query = mysqli_query($connection, $query);

    confirm($create_show_query);
    header("Location: shows.php");*/
    }


}

?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="movie_name">Movie Name</label>
        <select name="movie_name" class="form-control">
            <option value="" disabled selected>Select a Movie</option>
            <?php
            $query = "select * from movies where status_id='1'";
            $select_movie_query = mysqli_query($connection, $query);
            confirm($select_movie_query);
            while($row = mysqli_fetch_assoc($select_movie_query)){
                $movie_id = $row['Movie_id'];
                $movie_name = $row['Movie_name'];
                echo "<option value='$movie_id'>$movie_name</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="hall_name">Hall Name</label>
        <select name="hall_name" class="form-control">
            <option value="" disabled selected>Select a Hall</option>
            <?php
            $query = "select * from halls";
            $select_hall_query = mysqli_query($connection, $query);
            confirm($select_hall_query);
            while($row = mysqli_fetch_assoc($select_hall_query)){
                $hall_id = $row['Hall_id'];
                $hall_name = $row['Hall_name'];
                echo "<option value='$hall_id'>$hall_name</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="show_time">Show Time</label>
        <select name="show_time" class="form-control">
            <option value="" disabled selected>Select a Show Time</option>
            <?php
            $query = "select * from show_times";
            $select_showTimes_query = mysqli_query($connection, $query);
            confirm($select_showTimes_query);
            while($row = mysqli_fetch_assoc($select_showTimes_query)){
                $showTime_id = $row['show_time_id'];
                $showTime = $row['show_time'];
                echo "<option value='$showTime_id'>$showTime</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="date_from">Date From</label>
        <input type="date" class="form-control" name="date_from" />
    </div>
    <div class="form-group">
        <label for="date_to">Date To</label>
        <input type="date" class="form-control" name="date_to" />
    </div>
    <div class="form-group">
        <label for="available_seats">Available Seats</label>
        <input type="number" class="form-control" name="available_seats">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="add_show" value="Insert Show">
    </div>
</form>