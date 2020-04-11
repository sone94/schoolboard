<?php
session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$query = "SELECT * FROM student ";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

$data = array();
$i = 0;


if($result){

    while($row = mysqli_fetch_array($result)) {
        $data[$i] = [
            'id' => $row['id'],
            'first_last_name' => $row['name']. " ". $row["last_name"]
        ];

        $i++;
}

}

echo json_encode($data);