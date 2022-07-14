
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="fith" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/page.css" rel="stylesheet" type="text/css" media="all" />
<!--web-fonts-->
<link rel="manifest" href="ma.json">
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">


<!--//web-fonts-->
</head>
<body>
<a href="dashboard.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:#0a4981;margin-top:-30px"></i></a>	
	<div class="main">
		<div class="w3">
		</div>
		<center>
		<div class="agile">
			<div class="signin-form profile">
				<h3>ADMIN REGISTRATION </h3>
				<p style="color:red;"> <?php  
                   if (isset($msg)) {
                     echo $msg;
                     $msg="";
                   }
                   ?>
                   	<?php 
				
            if (isset($msgit)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgit."</marquee>"."</div>";
              
            }
          ?>
           <?php 
            if (isset($msgis)) {
              echo "<div class='alert alert-danger'>"."<marquee>".$msgis."</marquee>"."</div>";
            }
          ?>
      </p>
				<div class="login-form">
					<form action="signs.php" method="post" enctype="multipart/form-data">
					<input type="text" name="surname" placeholder="Surname" required="">
					<input type="text" name="firstname" placeholder="Firstname" required="">
					<input type="text" name="username" placeholder="Username" required="">
					<input type="text" name="email" placeholder="E-mail" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<label class="custom-file-upload">
						<input type="file" name="fileToUpload" id="files" hidden="hidden">
						<p style="color:white" class="btn btn-primary">Select Profile Picture</p>
					</label>
						<input type="submit" value="REGISTER">
					</form>
				</div>
				<p><a href="#"> By clicking register, I agree to your terms</a></p>
			</div>
		</div>
		<div class="clear"></div>
		</center>	
	</div>
						
</body>
</html>
