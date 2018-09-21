<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/7/2018
 * Time: 6:35 PM
 */?>

<?php

function confirm($result){
    global $connection;
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
        echo "Error";
    }

}

function check_show_day($hall_name, $showdate, $showTime){
     global $connection;
    $query = "SELECT * FROM film_shows WHERE Date_from <= '{$showdate}' <= Date_to AND Hall_id='{$hall_name}' AND Show_time_id='{$showTime}'";
    $select_film_show_query = mysqli_query($connection, $query);
    confirm($select_film_show_query);
    $row = mysqli_num_rows($select_film_show_query);
    if($row > 1){
        return true;
    }
    else{
        return false;
    }
}

?>

