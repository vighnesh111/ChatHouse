<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatProject-Sign In</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signin.css" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="signin-form">
        <form action="" method="POST">
            <div class="form-header">
                <h2>Create New Password</h2>
                <p>ChatHouse</p>
            </div>
            <div class="form-group">
               <label>Enter Password</label>
               <input type="password" name="pass1" placeholder="Password" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label>Confirm Password</label>
               <input type="password" name="pass2" placeholder="Confirm Password" class="form-control" autocomplete="off" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="change">
                    Change 
                </button>
            </div>
        </form>
    </div>
    <?php
        session_start();
        include("include/connection.php");
        if(isset($_POST['change'])){
            $user = $_SESSION['user_email'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];

            if($pass1 != $pass2){
                echo"
                    <div class='alert alert-danger'>
                        <strong>Your new password didn't match with confirm password. Please try again.</strong>
                    </div>
                ";
            }
            if($pass1 < 9 AND $pass2 < 9){
                echo"
                <div class='alert alert-danger'>
                    <strong>Use 9 or more than 9 characters</strong>
                </div>
            ";
            }
            if($pass1 == $pass2){
                $update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
                session_destroy();
                echo "<script>alert('Go ahead and signin.')</script>";
                echo "<script>window.open('signin.php','_self')</script>";
            }
        }
    ?>
</body>
</html>