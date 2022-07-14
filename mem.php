<?php
session_start();
$_SESSION['cname'];
$_SESSION['uname'];
require 'dc.php';
$surname = $_POST['sname'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email=    $_POST['email'];
$month =   $_POST['month'] ;
$phone=$_POST['phone'];
$address=$_POST['address'];
$town=$_POST['town'];
$state=$_POST['state'];
$country=$_POST['country'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");

$save = mysqli_query($con,"insert into member_tb (surname,firstname,lastname,email,month,phone,address,town,state,country,date,time,church,edit) values('$surname','$firstname','$lastname', '$email','$month','$phone', '$address','$town','$state','$country', '$date', '$time','$_SESSION[cname]','$_SESSION[uname]')");
if ($save) {
echo "<script>alert(' Successfull')</script>";
	include 'smembers.php';
}
else{
	echo "<script>alert(' Unsuccessfull')</script>";
	include 'member.php';
}

?>