<?php

$host ="localhost";
$uname = "root";
$pwd = '';
$db_name = "porto";

$conn = mysqli_connect ($host, $uname, $pwd, $db_name); 
if (!$conn) { 
 die ("Database tidak dapat dibuka"); 
error_log('Connection error: ' . mysqli_connect_error()); 
}

    ?>