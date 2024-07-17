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
$nongo=$_POST['nongo'];
	
$sql="insert into donate(fname,lname,email,phone,alphone,address,state,district,city,typeofdonation,nongo) values ('$fname','$lname','$email','$phone','$alphone','$address','$state','$district','$city','$typeofdonation','$nongo');";

try{
    if($con->query($sql)==true){
        echo "Donation successfull";
        $insert=true;
        header("location:certificate.html");
    }
}
catch(Exception $e){
    echo "Something went wrong";
}

$con->close();
?>
