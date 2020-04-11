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
                        <h2> Register here </h2>
                            <form action="registration.php" method="post">
                            <div class="form-group">
                                <label for="uname"><b>Username</b></label>
                                <input type="text" placeholder="Enter Username" class="form-control" name="txtName" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password " class="form-control" name="txtPassword" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><b>Email</b></label>
                                <input type="email" placeholder="Enter Password " class="form-control" name="txtEmail" required>
                            </div>
                            <button type="submit" class="btn btn-primary" >Register</button>

                            </form>

                        </div>
                </div>
            </div>
    </div>
