<html>
    <head>
        <title>School Borad System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>

<?php

session_start();

$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$query = "SELECT * FROM student s INNER JOIN school_board sc ON s.borad_id = sc.id ";

$result = mysqli_query($conn, $query);

$num = mysqli_num_rows($result);

$dataStudent = [];
$i = 0;


if($result){

    while($row = mysqli_fetch_array($result)) {
        $dataStudent[$i] = [
            'id' => $row['id'],
            'name' => $row['name'],
            'last_name' => $row['last_name'],
            'school_board' => $row['board_name']
        ];

        $i++;
}

}





?>



    <body>
        <div class="container">
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">School Borad</th>
                            <th scope="col">Grades</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $rb = 1;
                            foreach($dataStudent as $student): ?>
                            <tr>
                                <td><?php echo $rb; ?></td>
                                <td><?php echo $student['name']; ?></td>
                                <td><?php echo $student['last_name']; ?></td>
                                <td><?php echo $student['school_board']; ?></td>
                                <td><a href="student.php?id=<?php echo $student['id']; ?>&school_board=<?php echo $student['school_board']; ?>" class="btn btn-info">Go to student grades and stats</a></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="add_student_page.php" class="btn btn-warning">Add a new student</a> &nbsp; &nbsp; <a href="add_grade_to_student_page.php" class="btn btn-success">Add a grade to student</a>
                </div>
        </div>
    </body>

</html>
            