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
                        <h2> Add a New Student </h2>
                            <form action="add_student.php">
                            <div class="form-group">
                                <label for="uname"><b>Name</b></label>
                                <input type="text" placeholder="Enter Username" class="form-control" id="txtName" name="txtName" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><b>Last Name</b></label>
                                <input type="text" placeholder="Enter Lastname " id="txtLastName" class="form-control" name="txtLastName" required>
                            </div>

                            <div class="form-group">
                                <label for="ddlSchoolBorad">Example select</label>
                                <select class="form-control" id="ddlSchoolBorad">

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

    var name = $("#txtName").val();
    var last_name = $("#txtLastName").val();
    var school_id = $("#ddlSchoolBorad").val();

    $.ajax({
                method:'POST',
                url:'add_student.php',
                data:{
                    'name' : name,
                    'last_name' : last_name,
                    'school_id' : school_id
                },
                success: function(data){
                    
                 alert(data);

                }
            });
});



    $.ajax({
                method:'POST',
                url:'get_school_borad.php',

                success: function(data){
                    
                    data = $.parseJSON(data);
                    $.each(data, function(i, item) {
                        $("#ddlSchoolBorad").append(new Option(data[i].name, data[i].id));
                    });

                }
            });



    });

    </script>
</html>