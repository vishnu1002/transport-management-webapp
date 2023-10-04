
<?php
    session_start();

    $mail = $_SESSION['mail'];
    //$pass = $_SESSION['pass'];

    $conn = mysqli_connect('localhost','root','','amrita_bus');

    if(!$conn)
    {
        echo "Error creating" .mysqli_connect_error(); die();
    }

    $name = "select student_name from registered where email='$mail'";
    $rollno = "select reg_no from registered where email='$mail'";

    $result1 = mysqli_query($conn, $name);
    $result2 = mysqli_query($conn, $rollno);

    if(isset($_SESSION['mail']))
    {

    }
    else
    {
        print("<script>alert('Your Logged out...')</script>");
        print("<script>location.href='./login.html'</script>");
    }
?>