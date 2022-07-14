<?php
session_start();
require 'dc.php';
$name = $_POST['fname'];
$set=mysqli_query($con, "select * from church_tb where name = '$name' ");
$log=true;
while ($wow=mysqli_fetch_array($set)) {
	$log=false;
}
if ($log) {
	$_SESSION['notfound']="
			<div class='alert alert-danger'>
					<strong>Record not found, you are advised to register below</strong>
			</div>
	";
	header("location:churchs.php");
}
else{
	$test=mysqli_query($con, "select * from church_tb where name = '$name'");
	while ($r=mysqli_fetch_array($test)) {
		$_SESSION['cname']=$r['name'];
		$_SESSION['cemail']=$r['email'];
	}

	header("location:login.php");

	

}





?>