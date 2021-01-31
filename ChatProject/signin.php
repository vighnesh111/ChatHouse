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
                <h2>Sign In</h2>
                <p>Login to iChat</p>
            </div>
            <div class="form-group">
               <label>Email</label>
               <input type="email" name="email" placeholder="someone@site.com" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label>Password</label>
               <input type="password" name="pass" placeholder="Password" class="form-control" autocomplete="off" required>
            </div>
            <div class="small">
                Forgot Password? <a href="forgot_pass.pgp">Click Here</a>
                <br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">
                    Sign In
                </button>
            </div>
            <?php include("signin_user.php"); ?>
        </form>
        <div class="text-center small" style="color: #674288;">
            Don't have and account? 
                <a href="signup.php">
                    Create One 
                </a> 
        </div>
    </div>
</body>
</html>