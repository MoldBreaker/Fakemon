<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<div class="dad_container">
    <form action="process.php" method="post">
<div class="container">
        <div class="login">
            <div class="login_logo">
                <img src="login_logo.png" height="100px">
            </div>
            <div class="login_form">
                <form>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email"> <br>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password"> <br>
                </form> 
            </div>
                
            </div>
            <div class="warning">
                <?php if(isset($_GET['error'])){
                    $error = $_GET['error'];
                    if($error == 'Sign In Failed' || $error == 'You haven\'t log in now'){
                        echo $error;
                    } else { ?>
                        <div class="success">
                            <?php echo $error ?>
                        </div>
                <?php }
                } 
                ?>
            </div>
            <div>
                <button type="submit" class="sign_in">
                    Sign In
                </button>
            </div>
        </div>
        <div class="forgot_pass">Not have acount yet?<a href="register/register.php">Click Me</a> </div> 
</div>
</form>
</div>
</body>
</html>