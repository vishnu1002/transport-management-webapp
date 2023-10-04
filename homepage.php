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
    <link rel="stylesheet" href="css/homepage.css">
    
    <script src="https://kit.fontawesome.com/f6ec98831b.js" crossorigin="anonymous"></script>

    <title>Homepage | Bus Management</title>
</head>
<body>

    <div id="preloader"></div>

    <div class="container">

        <div class="map">

            <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.202011626158!2d76.60245181489904!3d12.302178591297517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf7adaee3aaa5f%3A0xd3981ac6f2720365!2sAmrita%20Vishwa%20Vidyapeetham%2C%20Mysore%20Campus!5e0!3m2!1sen!2sin!4v1658147107168!5m2!1sen!2sin" 
                width="800" 
                height="600" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            
            <div class="floating">
                <div class="location">
                    <h4>Current location</h4>
                    <p>Gokulam</p>
                </div>
                <div class="distance">
                    <h4>Distance</h4>
                    <p>2 Km</p>
                </div>    
            </div>

            <div class="bus">
                <h1 class="bus-no">BO2</h1>
            </div>

            <div class="driver">
                <div class="profile-driver">
                    <p class="b" >Driver Name</p>
                    <p class="d" > B02 Bus Driver</p>
                </div>

                <div class="call">
                    <a href="comingsoon.html">
                        <button class="call-btn" >
                            <p>Call</p>
                        </button>
                    </a>
                </div>

                <div class="reg">
                    <p class="d" >Registration</p>
                    <p class="b" >KA 09 N9846</p>
                </div>
                <div class="exp">
                    <p class="d" >Experience</p>
                    <p class="b" >10 year</p>
                </div>
                <div class="phone">
                    <p class="d" >Phone no</p>
                    <p class="b" >9873618374</p>
                </div>
                <div class="badge">
                    <p class="d" >Badge No</p>
                    <p class="b" >LVM Licence</p>
                </div>

            </div> 
        </div>

        <div id="side-panel" class="side-panel">
            <h3>Bus Transportation Management</h3>

            <nav class="nav" >
                <a href="available_bus.html">
                    <button class="btn" >Available Bus</button>
                </a> <br> <br>

                <a href="comingsoon.html">
                    <button class="btn" >Fee Details</button> <br> <br>
                </a>
                <a href="comingsoon.html">
                    <button class="btn" >Rules and Regulations</button> <br> <br>
                </a>
                <a href="settings.php">
                    <button class="btn" >Settings</button>
                </a>
                
            </nav>
            <br> <br> <br> <br>
            
            <div class="profile">
                <p class="std-name" >
                    Student Name
                </p>
                <p class="std-roll" >MY.SC.I5MCA20**</p>
            </div>
        </div>

        <a href="index.html">
            <img class="amrita-logo" src="images/amrita-logo.png" alt="amrita-logo">  
        </a>

    </div>

    <script>
        var loader = document.getElementById("preloader");
        const fadeEffect = setInterval(() => 
        {
            if (!preloader.style.opacity) 
            {
                preloader.style.opacity = 1;
            }
            if (preloader.style.opacity > 0) 
            {
                preloader.style.opacity -= 0.1;
            } 
            else 
            {
                clearInterval(fadeEffect);
                loader.style.display = "none";
            }
            
        }, 100);

        window.addEventListener('load', fadeEffect);
    </script>
    
</body>
</html>