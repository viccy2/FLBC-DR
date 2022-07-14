<?php  
session_start(); 
$s=true;

if($s)
{
?>	
  
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
				<h3>FORGOT PASSWORD</h3>
			<div style="color:red"> <?php  
                   if (isset($_SESSION['notfounds'])) {
                     echo $_SESSION['notfounds'];
                     $_SESSION['notfounds']="";
                   }
                   ?>
      </div>
				
				<div class="login-form">
					<form action="sett.php" method="post">
						<input type="text" name="email" placeholder="E-mail" required="">
						<input id="pass" type="text" class="input" placeholder="Username" name="username" required="true">
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
<?php

}


?>