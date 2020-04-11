<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$name = $_POST['txtName'];
$pass = $_POST['txtPassword'];
$email = $_POST['txtEmail'];

$query = "SELECT * FROM users WHERE name = '$name'";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

$hashed = hash('sha512', $pass);

if($num == 1){
    echo "Username Already Taken";
}
else{
    $reg = " INSERT INTO users(name, password, email) VALUES('$name', '$hashed', '$email')";
    mysqli_query($conn, $reg);

    echo "Registation success, go to <a href='login.php'>Login Page</a>";
}