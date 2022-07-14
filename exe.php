<?php
session_start();
$_SESSION['uname'];
$_SESSION['cname'];
require 'dc.php';
$item1 = $_POST['bul'];
$item2 = $_POST['fue'];
$item3 = $_POST['ele'];
$item4 = $_POST['pas'];
$item5 = $_POST['oth'];
$month = $_POST['month'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$total=$item1 + $item2 + $item3 + $item4 + $item5;
$edit=mysqli_query($con, "insert into expenses_tb(item1,item2,item3,item4,item5,total,date,time,edit,month,church)values('$item1','$item2','$item3','$item4','$item5','$total','$date','$time','$_SESSION[uname]','$month','$_SESSION[cname]')");
if ($edit) {
	echo "<script>alert('Transaction Successfull')</script>";
	header("location:sexpenses.php");
	
}
else{
	echo "<script>alert('Transaction Unsuccessfull')</script>";
	include 'expenses.php';
}
