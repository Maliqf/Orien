<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/9/2018
 * Time: 5:15 PM
 */?>

<?php

if(isset($_GET['s_id'])){
    $s_id = $_GET['s_id'];
}

    $query = "Select * FROM film_shows where show_id={$s_id}";
    $select_all_shows = mysqli_query($connection, $query);
    while($row = $select_all_shows-> fetch_assoc()) {
        $e_show_id = $row['show_id'];
        $e_movie_id = $row['Movie_id'];
        $e_hall_id = $row['Hall_id'];
        $e_showTime_id = $row['Show_time_id'];
        $e_date_from = $row['Date_from'];
        $e_date_to = $row['Date_to'];
        $e_show_end = $row['Show_end'];
        $e_available_seats = $row['Available_seats'];
    }


if(isset($_POST['update_show'])){
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
    }else {

    $query = "Select * FROM movies where movie_id='{$movie_name}'";
    $select_movie = mysqli_query($connection, $query);
    while ($row1 = $select_movie->fetch_assoc()) {
        $duration = $row1['Duration'];
    }

    $query = "Select * FROM show_times where show_time_id='{$show_time_id}'";
    $select_show_time = mysqli_query($connection, $query);
    while ($row1 = $select_show_time->fetch_assoc()) {
        $show_time = $row1['show_time'];
    }

    $timesplit = explode(':', $duration);
    $min = ($timesplit[0] * 60) + ($timesplit[1]) + ($timesplit[2] > 30 ? 1 : 0);

    $Show_end = date('h:i:s', strtotime("{$min} minutes", strtotime($show_time)));


    $query = "UPDATE film_shows SET ";
    $query .= "Movie_id='{$movie_name}', ";
    $query .= "Hall_id='{$hall_name}',";
    $query .= "Show_time_id='{$show_time_id}',";
    $query .= "Date_from='{$date_from}',";
    $query .= "Date_to='{$date_to}',";
    $query .= "Show_end='{$Show_end}',";
    $query .= "Available_seats='{$available_seats}' ";
    $query .= "WHERE show_id='{$s_id}'";

    echo "$query";

    $update_show_query = mysqli_query($connection, $query);

    confirm($update_show_query);

    if ($update_show_query) {
        header("Location: shows.php");
    }

}


}

?>


<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="movie_name">Movie Name</label>
        <select name="movie_name" class="form-control">
            <?php
            $query = "select * from movies where status_id='1'";
            $select_movie_query = mysqli_query($connection, $query);
            confirm($select_movie_query);
            while($row = mysqli_fetch_assoc($select_movie_query)){
                $movie_id = $row['Movie_id'];
                $movie_name = $row['Movie_name'];

                if($e_movie_id === $movie_id){
                    echo "<option value='$movie_id' selected>$movie_name</option>";
                }else{
                   echo "<option value='$movie_id'>$movie_name</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="hall_name">Hall Name</label>
        <select name="hall_name" class="form-control">
            <?php
            $query = "select * from halls";
            $select_hall_query = mysqli_query($connection, $query);
            confirm($select_hall_query);
            while($row = mysqli_fetch_assoc($select_hall_query)){
                $hall_id = $row['Hall_id'];
                $hall_name = $row['Hall_name'];

                if($e_hall_id === $hall_id){
                    echo "<option value='$hall_id' selected>$hall_name</option>";
                }else{
                    echo "<option value='$hall_id'>$hall_name</option>";
                }
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

                if($e_showTime_id === $showTime_id){
                    echo "<option value='$showTime_id' selected>$showTime</option>";
                }else{
                    echo "<option value='$showTime_id'>$showTime</option>";
                }
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="date_from">Date From</label>
        <input type="date" class="form-control" name="date_from"  value="<?php echo $e_date_from ?>"/>
    </div>
    <div class="form-group">
        <label for="date_to">Date To</label>
        <input type="date" class="form-control" name="date_to"  value="<?php echo $e_date_to ?>"/>
    </div>
    <div class="form-group">
        <label for="available_seats">Available Seats</label>
        <input type="number" class="form-control" name="available_seats"  value="<?php echo $e_available_seats ?>">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_show" value="Update Show">
    </div>
</form>
