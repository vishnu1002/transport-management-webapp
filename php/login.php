
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
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "amrita_bus";

    $mail = $_POST['mail'];
    $pass = $_POST['pass'];

    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn)
    {
        echo "Error creating" .mysqli_connect_error(); die();
    }

    $sql = "select * from registered where email='$mail'and pass_word='$pass'";
    $res = mysqli_query($conn,$sql);
    $count = mysqli_num_rows($res);

    if($count)
    {   
        if(isset($_SESSION['mail']))
        {
            print("
            <center>
                <meta http-equiv=\"refresh\" content=\"2; url = ../homepage.php\">
                <h1>Loggin in...</h1>
                <lottie-player src='https://assets5.lottiefiles.com/private_files/lf30_rn7m4pd6.json'  background='transparent'  speed='1'  style='width: 600px; height: 600px;'  loop  autoplay></lottie-player>
            </center>
            <div class='lorem'>
                <a href='../js/lorem.html' target='_blank'>
                    <p>🎃</p>
                </a>
            </div>
            ");
        }
        else
        {
            if($_POST['mail'] == $mail && $_POST['pass'] == $pass)
            {
                $_SESSION['mail'] = $mail;

            }
            else
            {
                print("
                
                <script>
                    alert(\"Email or Password incorrect 😕\");
                </script>

                ");

                print(" <script> location.href='../login.html'</script> ");
            }
        }
    }
    else
    {
        print("
                
                <script>
                    alert(\"Email not Found 😕\");
                </script>

                ");

        print(" <script> location.href='../login.html'</script> ");
    
    }  

?>