<?php
/**
 * Created by PhpStorm.
 * User: Maliq
 * Date: 9/3/2018
 * Time: 8:40 PM
 */

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "orien";


foreach($db as $key => $value){
define(strtoupper($key),$value);

}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

/*if($connection)
{
    echo "We are connected";
}*/


?>