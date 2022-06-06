
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="login">
        <div class="login-item">
        <div><a href="index.php"><img src="img/logo.png" alt="" ></a></div>
            <img class="login-main-pic" src="img/login1.png" alt="">
        </div>
        <div class="login-form">
            <h3>Log in</h3>
            <form class="form" method="post" action="validationPhp/auth.php">
                <label>Email</label>
                    <p>
                        <input class="login-input" type="text" name="email" placeholder="Enter email">
                    </p>
                <label>Password</label>
                    <p class="input">
                        <input  type="password" name="password" placeholder="Enter password">
                        <img id="togglePassword" class="closeeye" src="img/eye.png" alt="">
                    </p>
                <button type="submit"> Log in </button>
                
			</form>
            <h2>Don’t have an account? <a class="redisterlink" href="register.php">Create now</a> </h2>
        </div>
    </div>

</body>
</html>