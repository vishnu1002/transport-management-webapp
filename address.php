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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/address.css">

    <script src="https://kit.fontawesome.com/f6ec98831b.js" crossorigin="anonymous"></script>
    <title>Update Address</title>
</head>
<body>
    
    <div class="container">

        <h1>Update Address</h1>
        <center>
        <form class="form" action="php/address_update.php" method="post">
            
            <p>Apartment no/Door no</p>
            <input class="input-field" type="text" placeholder="Door No" name="a_no">
            <p>Street name</p>
            <input class="input-field" type="text" placeholder="Street Name" name="s_name">
            <p>Landmark</p>
            <input class="input-field" type="text" placeholder="Landmark" name="landmark">
            <p>Pincode</p>
            <input class="input-field" type="text" placeholder="Pincode" name="pin"> <br> <br>
            <input class="btn" type="submit" value="Save">
        </form>
        </center>
    </div>

</body>
</html>