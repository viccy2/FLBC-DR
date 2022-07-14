<?php
session_start();
require 'dc.php'; 
$email=$_POST['email'];
$username= $_POST['username'];
$_SESSION['cname'];
$edit=mysqli_query($con, "select * from admin_tb where email='$email' and username='$username' ");
$log=true;
while ($wow=mysqli_fetch_array($edit)) {
		$id=$wow['admin_id'];
		$_SESSION['datas']=$id;
		$log=false;
}
if ($log) {
	$_SESSION['notfounds']="
			<div class='alert alert-danger'>
					<strong>Wrong Information !!!</strong>
			</div>
	";
	header("location:forgot.php");
}

else{
	header("location:remembers.php");
}

?>