<?php  
session_start(); 
$s=true;

if($s)
{
?>	
  


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="fith" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/page.css" rel="stylesheet" type="text/css" media="all" />
     <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">

<!--web-fonts-->
<!--//web-fonts-->
</head>
<body>
	<center>
	<div class="main">
		<div class="w3">
		
			<div class="signin-form profile">
				<h3>CHURCH REGISTRATION</h3>
				<div style="color:red"> <?php  
                   if (isset($_SESSION['notfound'])) {
                     echo $_SESSION['notfound'];
                     $_SESSION['notfound']="";
                   }
                   ?>
      </div>
				
				<div class="login-form">
					<form action="church.php" method="post">
						<input type="text" name="name" placeholder="Enter Church's Name" required="">
						<input type="text" name="email" placeholder="Enter Church's E-mail" required="">
						<input type="text" name="town" placeholder="Town" required="">
						<input type="text" name="state" placeholder="State" required="">
						<input type="text" name="country" placeholder="Country" required="">




						<div class="tp">
							<input type="submit" value="SUBMIT">
						</div>
					</form>
					</div>
			<p><a href="index.html"> Already have account?Login Here</a></p>
			</div>
				</div>
			
			
			</div>
			</center>
		</div>

	</div>
			
</body>
</html>

<script type="text/javascript">

// if (typeof(EventSource !== 'undefined')) {
// 	alert();
// 	console.log()
// }
	// var source = new EventSource("text.php");
	// source.onmessage= function(a) {
	// 	alert(a.data);
	// 	console.log(a.data)
		
	}
</script>
<?php

}


?>
