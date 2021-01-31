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
                <h2>Forgot Password</h2>
                <p>iChat</p>
            </div>
            <div class="form-group">
               <label>Email</label>
               <input type="email" name="email" placeholder="someone@site.com" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label>Bestfriend's name</label>
               <input type="text" name="bf" placeholder="Enter your best friend's name" class="form-control" autocomplete="off" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">
                    Submit
                </button>
            </div>
        </form>
        <div class="text-center small" style="color: #674288;">
            Back to SignIn?
                <a href="signin.php">
                    Click here 
                </a> 
        </div>
    </div>
    <?php
        session_start();
        include("include/connection.php");
        if(isset($_POST['submit'])){
            $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
            $recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['bf']));

            $select_user = "select * from users where user_email='$email' AND forgotten_answer='$recovery_account'";

            $query = mysqli_query($con, $select_user);
            $check_user = mysqli_num_rows($query);

            if($check_user==1){
                $_SESSION['user_email']=$email;
                echo"<script>window.open('create_password.php','_self')</script>";
            }
            else{
                echo "<script>alert('Your email or bestfriend's name is incorrect.')</script>";
                echo"<script>window.open('forgot_pass.php','_self')</script>";
            }
        }
    ?>
</body>
</html>