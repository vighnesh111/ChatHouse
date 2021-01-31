<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatProject-Sign Up</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/signup.css" type="text/css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="signup-form">
        <form action="" method="POST">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Register here and start chatting with your friends</p>
            </div>
            <div class="form-group">
               <label>Username</label>
               <input type="text" name="user_name" placeholder="Example: Vighnesh" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label>Password</label>
               <input type="password" name="user_pass" placeholder="Password" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label>Email Address</label>
               <input type="email" name="user_email" placeholder="someone@site.com" class="form-control" autocomplete="off" required>
            </div>
            <div class="form-group">
               <label>Country</label>
                <select class="form-control" name="user_country" required>
                    <option disabled>Select a country</option>
                    <option>India</option>
                    <option>China</option>
                    <option>Bangladesh</option>
                    <option>United States of America</option>
                    <option>Japan</option>
                    <option>Italy</option>
                    <option>Spain</option>
                    <option>Germany</option>
                    <option>France</option>
                </select>
            </div>
            <div class="form-group">
               <label>Gender</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled>Select your Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline">
                    <input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">
                    Sign Up
                </button>
            </div>
            <?php include("signup_user.php"); ?>
        </form>
        <div class="text-center small" style="color: #674288;">
            Already have an account? 
                <a href="signin.php">
                    Sign In
                </a> 
        </div>
    </div>
</body>
</html>