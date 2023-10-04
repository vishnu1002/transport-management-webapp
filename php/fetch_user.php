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

    $name = "select student_name from registered where email='$mail'and pass_word='$pass'";
    $rollno = "select reg_no from registered where email='$mail'and pass_word='$pass'";

    $result1 = mysqli_query($conn, $name);
    $result2 = mysqli_query($conn, $rollno);

    print($result1);
    print($result2);
?>