<html>
    <head>
        <title>School Borad System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <script src="scripts/jquery-3.4.1.min"></script>
    </head>

    <body>
        <div class="container-login">
            <div class="login-box">
                <div class="row">
                        <div class="col-md-6">
                        <h2> Add grade to student </h2>
                            <form action="add_grade_to_student.php">
                            <div class="form-group">
                                <label for="ddlStudent">Student</label>
                                <select class="form-control" id="ddlStudent">

                                </select>
                            </div>


                            <div class="form-group">
                                <label for="ddlGrades">Grade</label>
                                <select class="form-control" id="ddlGrades">

                                </select>
                            </div>


                            <button type="button" id="btnAddStudent" class="btn btn-primary" >Add</button>

                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">


$( document ).ready(function() {

$("#btnAddStudent").click(function(){

    var student_id = $("#ddlStudent").val();
    var grade_id = $("#ddlGrades").val();


    $.ajax({
                method:'POST',
                url:'add_grade_to_student.php',
                data:{
                    'student_id' : student_id,
                    'grade_id' : grade_id,
                },
                success: function(data){
                    
                 alert(data);

                }
            });
});



    $.ajax({
                method:'POST',
                url:'get_students.php',

                success: function(data){
                    
                    data = $.parseJSON(data);
                    $.each(data, function(i, item) {
                        $("#ddlStudent").append(new Option(data[i].first_last_name, data[i].id));
                    });

                }
            });



    $.ajax({
                method:'POST',
                url:'get_grades.php',

                success: function(data){
                    
                    data = $.parseJSON(data);
                    $.each(data, function(i, item) {
                        $("#ddlGrades").append(new Option(data[i].grade, data[i].id));
                    });

                }
            });



    });

    </script>
</html>