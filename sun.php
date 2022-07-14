<?php
session_start();
$_SESSION['uname'];
$_SESSION['cname'];
require 'dc.php';
$item1 = $_POST['susa'];
$item2 = $_POST['susc'];
$item3 = $_POST['ssa'];
$item4 = $_POST['ssc'];
$month = $_POST['month'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$total=$item3 + $item4;
$edit=mysqli_query($con, "insert into service_tb(item1,item2,item3,item4,date,time,edit,month,total,church)values('$item1','$item2','$item3','$item4','$date','$time','$_SESSION[uname]','$month','$total','$_SESSION[cname]')");
if ($edit) {
	echo "<script>alert(' Successfull')</script>";
	include 'sattendance.php';
}
else{
	echo "<script>alert(' Unsuccessfull')</script>";
	include 'sunday.php';
}

