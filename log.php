<?php
session_start();
$_SESSION['cname'];
$_SESSION['cemail'];
require 'dc.php';
$email=$_POST['email'];
$_SESSION['email']=$email;
$pwd=sha1($_POST['pwd']);

$app=mysqli_query($con, "select * from admin_tb where email='$email' and password='$pwd' and church='$_SESSION[cname]'and chmail='$_SESSION[cemail]'");
$log=true;
while ($tes=mysqli_fetch_array($app)) {
	$log=false;
}
if ($log) {
	$msg='Incorrect Email or Password';
	include 'index.html';
}
else{
	$app=mysqli_query($con, "select * from admin_tb where email='$email' and password='$pwd' and church='$_SESSION[cname]'and chmail='$_SESSION[cemail]'");
	while ($r=mysqli_fetch_array($app)){

	$_SESSION['id']=$r['user_id'];
	$_SESSION['sname']=$r['surname'];
	$_SESSION['uname']=$r['username'];
	$_SESSION['passport']=$r['passport'];
	}

	header("location:dashboard.php");

	

}





?>