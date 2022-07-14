<?php
session_start();
$_SESSION['uname'];
$_SESSION['cname'];
require 'dc.php';
$item1 = $_POST['susa'];
$item2 = $_POST['susc'];
$month = $_POST['month'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$edit=mysqli_query($con, "insert into services_tb(item1,item2,date,time,edit,month,church)values('$item1','$item2','$date','$time','$_SESSION[uname]','$month','$_SESSION[cname]')");
if ($edit) {
	echo "<script>alert(' Successfull')</script>";
	include 'others.php';
}
else{
	echo "<script>alert(' Unsuccessfull')</script>";
	include 'others.php';
}
	