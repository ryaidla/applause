<header class="header">
        <div><a href="index.php"><img src="img/logo.png" alt="" ></a></div>
        <div class="header-links">
            <a href="">Home Page</a>
            <a href="testFirst.php">Tesing</a>
            <a href="result.php">Prediction</a>
        </div>
        <div class="header-buttons">
           
        <?php
            if(!empty($_COOKIE['user'])):
        ?>    
            <a href="login.php">Login</a>
            <a href="register.php">Registration</a>
        
        <?php else: ?>
        <a href="validationPhp/logout.php">logout</a>

        <?php endif; ?>
    
        
        </div>                
    </header>