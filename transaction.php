  <?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Income</title>
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
  
  body{  background: url(images/f.jpg)   fixed;
    background-size: cover;
    -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    width: 100%;
    height: 100%;
    

}
</style>
</head>
<body>

<a href="dashboard.php" ><i class="fa fa-arrow-left fa-2x" style="width:40px;float:left;color:#0a4981;margin-top:-30px"></i></a>

  <div class="main" >
    <h1>Church Income</h1>
    <div id="wrapper" class="wrapper_w3layouts" style="margin-top:-50px">
      <form action="trans.php" class="testform" id="testform" method="post" enctype="multipart/form-data" >
        <fieldset class="personal-data w3_agileits_field">
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Tithes(Adult): <i class="required">*</i></label>
            <input type="text" id="name" name="tit" placeholder="Amount" />
          </span>
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Offering(Adult): <i class="required">*</i></label>
            <input type="text" id="name" name="off" placeholder=" Amount" />
          </span>
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Sunday School(Adult): <i class="required">*</i></label>
            <input type="text" id="name" name="sun" placeholder="Amount" />
          </span>
           

        </fieldset>

        <fieldset class="address-data-inputs w3_agileits_field agileinfo_field" style="margin-top:-10px">
         <span class="w3l_personal">
            <label class="agileits_label" for="name">Birthday Thanksgiving: <i class="required"></i></label>
            <input type="text" id="name" name="bir" placeholder="Amount" />
          </span>
           <span class="w3l_personal">
            <label class="agileits_label" for="name">End of the year Thanksgiving: <i class="required"></i></label>
            <input type="text" id="name" name="end" placeholder="Amount" />
          </span>
           <span class="agile_personal">
            <label class="agileits_label" for="town">Family Thanksgiving</label>
            <input type="text" id="town" name="fam" placeholder=" Amount"/>
          </span>

          <span class="w3layouts_personal">
            <label class="agileits_label" for="postal-code">Harvest Thanksgiving</label>
            <input type="text" id="postal-code" name="har" placeholder="Amount" />
          </span>
           <span class="w3_agileits_personal">
            <label class="agileits_label" for="address">Mid-Year Thanksgiving:</label>
            <input type="text" id="address" name="mid" placeholder="Amount" />
          </span>
         <span class="w3l_personal">
            <label class="agileits_label" for="name">Monthly Thanksgiving: <i class="required"></i></label>
            <input type="text" id="name" name="mon" placeholder="Amount" />
          </span>
       <span class="w3_agileits_personal">
            <label class="agileits_label" for="address">New Year Thanksgiving:</label>
            <input type="text" id="address" name="new" placeholder="Amount" />
          </span>
           <span class="w3_agileits_personal">
            <label class="agileits_label" for="address">Other Thanksgiving:</label>
            <input type="text" id="address" name="oth" placeholder="Amount" />
          </span>
           <span class="w3_agileits_personal">
            <label class="agileits_label" for="address">Project Thanksgiving:</label>
            <input type="text" id="address" name="pro" placeholder="Amount" />
          </span>
          <span class="w3l_personal">
            <label class="agileits_label" for="name">Special Thanksgiving: <i class="required"></i></label>
            <input type="text" id="name" name="spe" placeholder="Amount" />
          </span>
          
        </fieldset>

        <fieldset class="message-details w3_agileits_field">
        
          <span class="w3l_personal">
            <label class="agileits_label" for="name"> Offering(Children): <i class="required">*</i></label>
            <input type="text" id="name" name="chi" placeholder="Amount" />
          </span>
          <span class="w3l_personal">
            <label class="agileits_label" for="name"> Sunday School(Children): <i class="required">*</i></label>
            <input type="text" id="name" name="ssc" placeholder="Amount" />
          </span>
           <span class="w3l_personal">
            <label class="agileits_label" for="name">Dedication: <i class="required"></i></label>
            <input type="text" id="name" name="ded" placeholder="Amount " />
          </span>

          <span class="w3l_personal">
            <label class="agileits_label" for="name">Month: <i class="required">*</i></label>
            <input type="text" id="name" name="month" placeholder="Month" />
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