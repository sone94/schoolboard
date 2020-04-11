<?php
session_start();
require('xmlresponse.php');
$conn = mysqli_connect('localhost', 'root', '');

mysqli_select_db($conn, 'schoolborad');

$student_id = $_GET['id'];
$school_borad = $_GET['school_board'];

$avg = "SELECT *, AVG(grade)
FROM student as s
JOIN student_grades as sg
    ON s.id = sg.student_id
JOIN grades as g
    ON sg.grade_id = g.id
WHERE s.id = $student_id. ";

$resultAVG = mysqli_query($conn, $avg);

$data = [];

$i = 0;

if($resultAVG){
    $avgGradeStudent =  mysqli_fetch_assoc($resultAVG);
}

$data = array(
    'data' => [
       'name' => $avgGradeStudent['name']. " " . $avgGradeStudent['last_name'],
       'average' => $avgGradeStudent['AVG(grade)'],
       'status' => $avgGradeStudent['AVG(grade)'] > 7 ? 'Pass' : 'Fail'
    ]

);




 $student_grades = "SELECT * FROM grades g INNER JOIN student_grades sg ON g.id = sg.grade_id WHERE sg.student_id = '$student_id' ";




$resultGrades = mysqli_query($conn, $student_grades);


if($resultGrades) {

    while($row = mysqli_fetch_assoc ($resultGrades)){
           
        $data['data']['grades'][$i] = array(
            'grade' => $row['grade']
        );
        $i++;
    }

}


if($school_borad == 'CSM'){
    

    echo json_encode($data);
  


}



 if($school_borad == 'CSMB'){
    //var_dump($data['data']['grades']);
    $xml = new SimpleXMLElement('<xml/>');


        $track = $xml->addChild('student');
        $track->addChild('average', $data['data']['average']);
        $track->addChild('name', $data['data']['name']);
        $track->addChild('status', $data['data']['status']);
        $track = $xml->addChild('grades');
        foreach($data['data']['grades'] as $key => $grade){

            //var_dump($grade);
            $track->addChild('grade', $data['data']['grades'][$key]['grade']);
        }


    
    Header('Content-type: text/xml');
    print($xml->asXML());


}




