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
    }

}

?>

