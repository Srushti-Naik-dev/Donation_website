<?php

include('connect.php');

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$alphone=$_POST['alphone'];
$address=$_POST['address'];
$state=$_POST['state'];
$district=$_POST['district'];
$city=$_POST['city'];
$typeofdonation=$_POST['typeofdonation'];
$orphanage=$_POST['orphanage'];

$sql="insert into donate_orp(fname,lname,email,phone,alphone,address,state,district,city,typeofdonation,orphanage) values ('$fname','$lname','$email','$phone','$alphone','$address','$state','$district','$city','$typeofdonation','$orphanage');";

try{
    if($con->query($sql)==true){
        echo "Donation successfull";
        header("location:certificate.html");
        $insert=true;
    }
}
catch(Exception $e){
    echo "Something went wrong";
}

$con->close();
?>