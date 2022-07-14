<?php
session_start();
$_SESSION['uname'];
$_SESSION['cname'];
require 'dc.php';
$item1 = $_POST['tit'];
$item2 = $_POST['off'];
$item3 = $_POST['sun'];
$item4 = $_POST['bir'];
$item5 = $_POST['end'];
$item6 = $_POST['fam'];
$item7 = $_POST['har'];
$item8 = $_POST['mid'];
$item9 = $_POST['mon'];
$item10 = $_POST['new'];
$item11 = $_POST['oth'];
$item12 = $_POST['pro'];
$item13 = $_POST['spe'];
$item14 = $_POST['chi'];
$item15 = $_POST['ssc'];
$item16 = $_POST['ded'];
date_default_timezone_set('Africa/Lagos');
$date=date("Y-m-d");
$time= date("h:i:sa");
$month = $_POST['month'];
if ($item1 == "" || $item2 == ""|| $item3 == "" || $item4 == "" || $item5 == "" || $item6 == "" || $item7 == "" || $item8 == "" || $item9 == "" || $item10 == "" || $item11 == "" || $item12 == "" || $item13 == "" || $item14 == "" || $item15 == "" || $item16 == "")
 {
	$total=$item1 + $item2 + $item3 + $item4 + $item5 + $item6 + $item7 + $item8 + $item9 + $item10 + $item11 + $item12 + $item13 + $item14 + $item15+$item16;
	$edit=mysqli_query($con, "insert into income_tb(item1,item2,item3,item4,item5,item6,item7,item8,item9,item10,item11,item12,item13,item14,item15,total,date,time,edit,month,church)values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$total','$date','$time','$_SESSION[uname]','$month','$_SESSION[cname]')");
if ($edit) {
	echo "<script>alert('Transaction Successfull')</script>";
	header("location:stransaction.php");
}
else{
	echo "<script>alert('Transaction Unsuccessfull')</script>";
	include 'transaction.php';
}
}
else{

$total=$item1 + $item2 + $item3 + $item4 + $item5 + $item6 + $item7 + $item8 + $item9 + $item10 + $item11 + $item12 + $item13 + $item14 + $item15;
$edit=mysqli_query($con, "insert into income_tb(item1,item2,item3,item4,item5,item6,item7,item8,item9,item10,item11,item12,item13,item14,item15,total,date,time,edit,month,church)values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$total','$date','$time','$_SESSION[uname]','$month','$_SESSION[cname]')");
if ($edit) {
	echo "<script>alert('Transaction Successfull')</script>";
	header("location:stransaction.php");
}
else{
	echo "<script>alert('Transaction Unsuccessfull')</script>";
	include 'transaction.php';
}
}


?>