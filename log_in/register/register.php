<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="valid.js"></script>
</head>
<body>
<div class="dad_container">
<form action="process.php" method="post">
<div class="container">
        <div class="login">
            <div class="login_logo">
                <img src="../login_logo.png" height="100px">
            </div>
            <div class="login_form">
                <form>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name"> <br>
                    <input type="email" name="email" id="email" placeholder="Enter Your Email"> <br>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password"> <br>
                    <div class="error" id="error"></div>
                </form> 
            </div>
                
            </div>
            <div>
                <button onclick="return check()" type="submit" class="sign_in">
                    Sign In
                </button>
            </div>
        </div>
</div>
</form>
</div>
</body>
</html>