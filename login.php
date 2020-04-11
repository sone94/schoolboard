<html>
    <head>
        <title>School Borad System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-login">
            <div class="login-box">
                <div class="row">
                        <div class="col-md-6">
                        <h2> Login here </h2>
                            <form action="login_validation.php">
                            <div class="form-group">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" class="form-control" name="txtName" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password " class="form-control" name="txtPassword" required>
                            </div>
                            <button type="submit" class="btn btn-primary" >Login</button>

                            </form>
                            <a href="registration.php">Don't have account? Click to register</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </body>

</html>