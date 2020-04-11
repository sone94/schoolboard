<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "schoolboard";



$conn = mysqli_connect($server, $username, $password, $db);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}



?>