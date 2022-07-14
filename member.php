<?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Church Members Registration</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<!-- //js -->
<link href="css/now.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<style>
  
  body{  background: url(images/e2.jpg)   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    height: 150pc;
    
    overflow: hidden;

}
</style>
</head>
<body>

<a href="dashboard.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:#0a4981;margin-top:-30px"></i></a>

  <div class="main">
    <h1>Member Registration</h1>
    <div id="wrapper" class="wrapper_w3layouts">
      <form action="mem.php" class="testform" id="testform" method="post" enctype="multipart/form-data" style="margin-top:-50px">
        <fieldset class="personal-data w3_agileits_field">
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Surname: <i class="required">*</i></label>
            <input type="text" id="name" name="sname" placeholder="Victor" />
          </span>
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Firstname: <i class="required">*</i></label>
            <input type="text" id="name" name="fname" placeholder=" David" />
          </span>
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Other Name: <i class="required">*</i></label>
            <input type="text" id="name" name="lname" placeholder="Vad" />
          </span>
          <span class="w3ls_personal">
            <label class="agileits_label" for="email">Email: <i class="required">*</i></label>
            <input type="email" name="email" id="email" placeholder="example@mail.com" />
          </span>
          <span class="agileits_personal">
            <label class="agileits_label" for="name">Month:</label>
            <input type="text" name="month" id="name" placeholder="Month" />
          </span>
        </fieldset>

        <fieldset class="address-data-inputs w3_agileits_field agileinfo_field" style="margin-top:-10px">
        <span class="agileits_personal">
            <label class="agileits_label" for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone" placeholder="000-000-000" />
          </span>
          <span class="w3_agileits_personal">
            <label class="agileits_label" for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Address" />
          </span>

          <span class="agile_personal">
            <label class="agileits_label" for="town">Town:</label>
            <input type="text" id="town" name="town" placeholder=" Town"/>
          </span>
          <span class="w3layouts_personal">
            <label class="agileits_label" for="postal-code">State:</label>
            <input type="text" id="postal-code" name="state" placeholder="Lagos" />
          </span>
          <span class="w3_agile_personal">
            <label class="agileits_label" for="country">Country:</label>
            <input type="text" id="country" name="country" placeholder="San Luis Obispo"/>
          </span>
          
        </fieldset>
        <div class="clear"></div>
      </form>
     
    </div>
    <script src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/simpleform.min.js"></script>
    <script type="text/javascript">
      $(".testform").simpleform({
        speed : 500,
        transition : 'fade',
        progressBar : true,
        showProgressText : true,
        validate: true
      });

      function validateForm(formID, Obj){

        switch(formID){
          case 'testform' :
            Obj.validate({
              rules: {
                email: {
                  required: true,
                  email: true
                },
                name: {
                  required: true
                },
                street: {
                  required: true
                }
              },
              messages: {
                email: {
                  required: "Please enter an email address",
                  email: "Not a valid email address"
                },
                name: {
                  required: "Please enter your name"
                },
                street: {
                  required: "Please enter street name"
                }
              }
            });
          return Obj.valid();
          break;
        }
      }
      </script>
    <div class="agileits_copyright">
      
    </div>
  </div>
</body>
</html>
<?php
 } 
 else{
 include 'index.html';
 }
?>