
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

<link rel="manifest" href="manifestss.json">
<!--//web-fonts-->
</head>
<body>
	<center>
	<div class="main">
		<div class="w3">
		
			<div class="signin-form profile">
				<h3>Login</h3>
				<p style="color:red;"> <?php  
                   if (isset($msg)) {
                     echo $msg;
                   }
                   ?>
      </p>
				
				<div class="login-form">
					<form action="log.php" method="post">
						<input type="text" name="email" placeholder="E-mail" required="">
						<input type="password" name="pwd" placeholder="Password" required="">


						<div class="tp">
							<input type="submit" value="LOG-IN">
						</div>
					</form>
				</div>
				<div class="header-social wthree">
							<a href="#" class="face"><h5>Facebook</h5></a>
							<a href="#" class="goog"><h5>Google+</h5></a>
							<div class="clear"></div>
						</div>
				<p><a href="forgot.php"> Forgot Password?</a></p>
			</div>
			</center>
		</div>

	</div>

   <script>
   	 if ('serviceWorker' in navigator) {
    navigator.serviceWorker
             .register('service-worker.js')
             .then(function() { console.log('Service Worker Registered'); });
  }
;
   </script>
			
</body>
</html>