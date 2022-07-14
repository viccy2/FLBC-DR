
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="fith" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/page.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
	<center>
	<div class="main">
		<div class="w3">
		
			<div class="signin-form profile">
				<h3>RESET PASSWORD</h3>
				<p style="color:red;"> <?php  
                   if (isset($msg)) {
                     echo $msg;
                   }
                   ?>
      </p>
				
				<div class="login-form">
					<form action="setts.php" method="post">
						<input type="text" name="email" placeholder="E-mail" required="">
						<input type="password" name="passwor" placeholder=" New Password" required="">
						<input type="password" name="password" placeholder=" Confirm Password" required="">
						<div class="tp">
							<input type="submit" value="SUBMIT">
						</div>
					</form>
				</div>
				
				
			</div>
			</center>
		</div>

	</div>
						
</body>
</html>