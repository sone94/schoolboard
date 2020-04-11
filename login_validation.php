<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$name = $_POST['txtName'];
$pass = $_POST['txtPassword'];

$hashed = hash('sha512', $pass);

$query = "SELECT * FROM users WHERE name = '$name' && password = '$hashed' ";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);



if($num == 1){
    header('location:dashboard.php');
}
else{

    header('location:login.php');        
}