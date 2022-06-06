<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style/all.css">
</head>
<body>
    <?php require "blocks/header.php"?>

    <div class="account">
        <h2>Account</h2>
        <div onclick="addActive(event)" class="account-item active">Profile</div>
        <div onclick="addActive(event)" class="account-item">Personal scores</div>
        <div onclick="addActive(event)" class="account-item">Password</div>
    </div>

    <div class="profile-info">
        <h2>Profile</h2>
        <p>Avatar</p>
        
        <form class="form" action="" method="">
            <fieldset class="edit-image">
                <fieldset class="account-image">
                    <img src="img/profile-account.png" alt="">
                </fieldset>
                <fieldset class="edit-image-button">
                    <button class="input-file">
                        <input  name="image">	
                        Upload
                    </button>
                </fieldset>
                <fieldset class="edit-image-button">
                    <button><a href="">Remove</a></button>
                </fieldset>
            </fieldset>

            <fieldset class="editInfo">
                <fieldset>
                    <label for="full_name">Full Name</label>
                    <input type="text" name="" id="full_name" value="Bayanov Azamat Muratovich">
                </fieldset>
                <fieldset>
                    <label for="phone_number">Phone number</label>
                    <input type="text" name="" id="phone_number" value="8 777 777 77 77">
                </fieldset>
            </fieldset>

            <fieldset class="account-submit">
                <button type="submit">Save Changes</button>
            </fieldset>
            
        </form>
    </div>  
    
    <div class="background-pics">
        <img src="img/Vector 1.png" alt="">
        <img src="img/Vector 2.png" alt="">
    </div>

    <script src="js/account.js"></script>
</body>
</html>