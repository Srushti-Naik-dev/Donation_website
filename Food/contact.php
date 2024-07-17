<?php

include('connect.php');

$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$sql="insert into contact(username,email,phone,message) values ('$username','$email','$phone','$message');";

try{
    if($con->query($sql)==true){
        echo "We will contact you soon";
        $insert=true;
    }
}
catch(Exception $e){
    echo "Something went wrong";
}

$con->close();

?>