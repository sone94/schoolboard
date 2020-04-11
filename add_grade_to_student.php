<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$student_id = $_POST['student_id'];
$grade_id = $_POST['grade_id'];


$insert = " INSERT INTO student_grades(student_id, grade_id) VALUES('$student_id', '$grade_id')";

$result = mysqli_query($conn, $insert);


if($result){
    echo 1;
}
else{
    echo 0;
}