<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$name = $_POST['name'];
$last_name = $_POST['last_name'];
$school_board = $_POST['school_id'];

$insert = " INSERT INTO student(name, last_name, borad_id) VALUES('$name', '$last_name', '$school_board')";

$result = mysqli_query($conn, $insert);


if($result){
    echo 1;
}
else{
    echo 0;
}