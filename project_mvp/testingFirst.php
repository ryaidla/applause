<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
    <link rel="stylesheet" href="style/all.css">
</head>
<body>
<?php require "blocks/headerForTest.php"?>



    <div class="testing1">
    <form method="post" action="">  
        <h2>Gender:</h2>
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female 
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>



    </div>
 
    
    <div class="background-pics-test">
        <img src="img/background-test-red.png" alt="">
        <img src="img/background-test.png" alt="">
    </div>

    <script src="js/account.js"></script>
</body>
</html>