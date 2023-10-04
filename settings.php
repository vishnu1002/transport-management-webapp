<?php
    include "php/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/fav4.png">
    <link rel="icon" type="image/x-icon" href="images/fav4.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/settings.css">
    
    <script src="https://kit.fontawesome.com/f6ec98831b.js" crossorigin="anonymous"></script>
    <title>Settings | Bus Transport</title>
</head>
<body>
    
    <div class="container">
        <h1>Settings</h1>
        
        <center>
        <h2>Update information</h2>
        <form class="form" action="php/settings_update.php" method="post">
            
            <p>Name</p>
            <i class="fa solid fa-pen"></i>
            <input class="input-field" type="text" name="name"
                        pattern="[a-z]{5,}$"
                        oninvalid="this.setCustomValidity('Minimum 5 characters')"
                        onchange="try{setCustomValidity('')}catch(e){}"
                        oninput="setCustomValidity(' ')"> 
            <p>Email</p>
            <i class="fa solid fa-pen"></i>
            <input class="input-field" type="text" name="mail"
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                        oninvalid="this.setCustomValidity('Sorry , we dont recognize this email.')"
                        onchange="try{setCustomValidity('')}catch(e){}"
                        oninput="setCustomValidity(' ')">
            <br>
            <input class="btn" type="submit" value="Save Changes">
            
        </form>

        <br><br>
        <a href="address.php">
            <button class="add-btn" >Update Address ></button>
        </a>
        </center>

        <br><br>
        <center>
        <div class="logout" >
            <a href="php/logout.php">
                <button class="logout-btn" >Logout</button>
            </a>
        </div>
        </center>

    </div>
</body>
</html>