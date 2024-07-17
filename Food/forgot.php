<?php

include('connect.php');

$email=$_POST['email'];
$newpassword=$_POST['newpassword'];
$conpassword=$_POST['conpassword'];

if ($newpassword==$conpassword){
    $sql="select password from register where email='$email';";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
}
if($count==1){
    $sql="update register set password='$conpassword' where email='$email';";
    header("location:login.html");
}
else{
    echo "There is some issue";
}

$con->close();

?>