<?php
session_start();
$_SESSION['cname'];
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

$save = mysqli_query($con,"update member_tb set surname='$surname',firstname='$firstname',lastname='$lastname',email='$email',month='$month',phone='$phone',address='$address',town='$town',state='$state',country='$country',date='$date',time='$time',church='$_SESSION[cname]' where member_id= '$_SESSION[ctid]'");
if ($save) {
echo "<script>alert(' Successfull')</script>";
	include 'smembers.php';
}
else{
	echo "<script>alert(' Unsuccessfull')</script>";
	include 'member.php';
}

?>