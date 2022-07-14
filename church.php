<?php
session_start();
require 'dc.php';
$name=$_POST['name'];
$email=$_POST['email'];
$state=$_POST['state'];
$town=$_POST['town'];
$country=$_POST['country'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");

$edit=mysqli_query($con,"insert into church_tb (name,email,state,town,country,date,time)values('$name','$email','$state','$town','$country','$date','$time')");
if ($edit) {
	$_SESSION['ocname']=$name;
	$_SESSION['ocemail']=$email;

	header("location:sign.php");
}


?>