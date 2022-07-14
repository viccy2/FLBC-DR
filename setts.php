<?php
session_start();
require 'dc.php';
$_SESSION['datas'];
$email=$_POST['email'];
$password= sha1($_POST['password']);
$pass= sha1($_POST['passwor']);
if ($password==$pass) {
$edit = mysqli_query($con, "update admin_tb set password ='$password' where admin_id= '$_SESSION[datas]'");
	 if ($edit) {
	 echo "<script>alert('Changes Saved')</script>";
	 include 'index.html';
	 }

}
 
else{
	$msg="Wrong Password or Email !!!";
	include 'remembers.php';
}

?>