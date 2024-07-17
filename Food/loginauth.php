<?php

include('connect.php');

$email=$_POST['email'];
$password=$_POST['password'];

//sqli injection
$email=stripcslashes($email);
$password=stripcslashes($password);
$email=mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);

$sql = "select * from register where email='$email' and password='$password';";

$result = mysqli_query($con,$sql);
$row  = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count==1)
{
    echo "Login successful";
    header("location:donateO.html");
}
else{
    echo "Login failed";
}

$con->close();

?>