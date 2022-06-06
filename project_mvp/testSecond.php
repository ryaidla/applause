<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
    <link rel="stylesheet" href="style/all.css">
</head>
<body>
<?php require "blocks/headerForTest.php"?>

    <div class="account test">
        <h2>Personal tests</h2>
        <a href="testFirst.php"><div class="account-item">Career guidance test</div></a>
        <div class="account-item  active">Psychological test</div>
    </div>

    <div class="start-test">
        <h2>A test to determine mental state</h2>
        <p>The Personal Accentuation (TPA) test is a modified version of the Pathoharacterological Diagnostic Questionnaire (PDO) developed by A. E. Lichko. The test is designed to diagnose the types of character accentuation and associated personality traits of adolescents and young men aged 14-20 years, however, according to the author, it is also effective for diagnosing people over 20 years old.</p>
        <div class="start-test-button">
            <a href="introToSecondTesting.php">Start the test</a>
        </div>
        
    </div>
 
    
    <div class="background-pics-test">
        <img src="img/background-test-red.png" alt="">
        <img src="img/background-test.png" alt="">
    </div>

    <script src="js/account.js"></script>
</body>
</html>