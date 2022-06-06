<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/all.css">
</head>
<body>
    <div class="login">
        <div class="login-item">
            <div><a href="index.php"><img src="img/logo.png" alt="" ></a></div>
            <img class="register-main-pic1" src="img/register1.png" alt="">
            <img class="register-main-pic" src="img/register2.png" alt="">
        </div>
        <div class="login-form">
            <h3>Registration</h3>
            <form class="form" method="post" action="validationPhp/registeration.php">
                <label>Full name</label>
                <p>
                    <input class="login-input"  type="text" name="fullName" placeholder="Enter full name">
                </p>
                <label>Phone number</label>
                <p>
                    <input class="login-input" type="text" name="phone" placeholder="Enter phone number">
                </p>
                <label>Email</label>
                <p>
                    <input class="login-input" id="login" type="text" name="email" placeholder="Enter email">
                </p>
                <label>Password</label>

                <p class="input">
                    <input id="password" type="password" name="password" placeholder="Enter password">
                  
                    <img id="togglePassword" class="closeeye" src="img/eye.png" alt="">
                </p>

                <h2 class="login-password">Forgot password?</h2>

              
                    <button type="submit">Register</button>
               
			</form>
            <h2>Already have an account? <a class="signinlink" href="login.php">Sign In</a>  here</h2>
        </div>
    </div>
</body>
</html>