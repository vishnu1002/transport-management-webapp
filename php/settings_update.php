
<?php
 include "session.php";

$servername="localhost";
$username="root";
$password="";
$database="amrita_bus";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    echo("connection failed" .mysqli_connect_error());
    die();
}

$new_name=$_POST['name'];
$new_mail=$_POST['mail'];


$sql="UPDATE registered SET student_name='$new_name', email='$new_mail' WHERE email='$mail'";

if(mysqli_query($conn,$sql))
{
   // print ("Data Updated Successfully");
    session_destroy();
    echo "<script> alert('Email has been changed. Login again') </script>";
    echo "<script> location.href='../login.html'</script> ";
    
    
}
else
{
    echo " Error while updating " .mysqli_error($conn);
    die();
}

mysqli_close($conn);

?>