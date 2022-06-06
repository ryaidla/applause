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
    <div class="testing-information">
        <h2>The Personal Accentuation test</h2>
        <p>Carefully read each of the statements, and answer to what extent it is typical for you (YES) or not typical (NO), using the suggested answer options.
            <br><br>
            Try to use extreme answers more often ("YES, it's entirely about me" and "NO, it's not about me at all"), if, of course, they correspond to reality.
            <br><br>
            Answer sincerely, without hesitation for a long time.</p>
        <div class="testing2-variants">
            <p>Your gender:</p>
            <div class="mail-variant">Male</div>
            <div class="femail-variant">Female</div>
            <a href="testingSecond.php">Start test</a>
            <span>specify your gender</span>
        </div>
    </div>
    
    <div class="background-pics-test">
        <img src="img/background-test-red.png" alt="">
        <img src="img/background-test.png" alt="">
    </div>

    <script src="js/account.js"></script>
</body>
</html>