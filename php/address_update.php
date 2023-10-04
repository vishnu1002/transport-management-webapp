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

$door_no=$_POST['a_no'];
$street=$_POST['s_name'];
$landmark=$_POST['landmark'];
$pincode=$_POST['pin'];

$sql="UPDATE registered SET door_no='$door_no', street_name='$street', landmark='$landmark', pincode='$pincode' WHERE email='$mail'";

if(mysqli_query($conn,$sql))
{
   // print ("Address Updated Successfully");
    echo "<script> alert('Address updated') </script>";
    echo "<script> location.href='../homepage.php'</script> ";
    
    
}
else
{
    echo " Error while updating " .mysqli_error($conn);
    die();
}

mysqli_close($conn);

?>