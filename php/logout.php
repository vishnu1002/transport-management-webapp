
<?php
    session_start();
?>

<html>
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,400&display=swap" rel="stylesheet">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <link rel="stylesheet" href="../css/fun.css">
    </head> 
</html>

<?php

    if(isset($_SESSION['mail']))
    {
            print("
            
            <html>
                <head>
                    <meta http-equiv=\"refresh\" content=\"2;url=../index.html\">
                </head>
            </html>
            
            ");
            print("
            <center>
                <h1>Log out...</h1>
                <!-- <lottie-player src='https://assets5.lottiefiles.com/private_files/lf30_rn7m4pd6.json'  background='transparent'  speed='1'  style='width: 600px; height: 600px;'  loop  autoplay></lottie-player> -->
                <lottie-player class='logout' src='https://assets4.lottiefiles.com/packages/lf20_5AS6Bz.json'  background='transparent' speed='1' style='width: 300px; height: 300px;' loop  autoplay></lottie-playe>
            </center>
            ");
        session_destroy();
    }
    else
    {
        print("<script> location.href='../login.html' </script>");
    }

?>