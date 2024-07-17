<?php

include('connect.php');

$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$phone=$_POST['phone'];

$sql = "insert into register(username,email,password,phone) values('$username','$email','$password','$phone');";

try{
    if($con->query($sql)==true)
    {
        echo "Register succesful";
        $insert=true;
        header("location:donateO.html");
    }
}
catch(Exception $e)
{
    echo "Something went wrong";
}

$con->close();

?>