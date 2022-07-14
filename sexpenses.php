<?php session_start();
if (isset($_SESSION['email'])) {
  $_SESSION['cname'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staff Info</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
 
    <!-- Google fonts - Roboto -->
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/styless.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="#">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- Side Navbar -->
   <nav class="side-navbar" style="background:#0a4981">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center" style="background-color:#0a4981;">
          <!-- User Info-->
       <div class="sidenav-header-inner text-center">
           <?php echo "<img src='".$_SESSION['passport']."'  style='width:100px;height:100px;border-radius: 50%' >";?>
            <h2 class="h5"><?php echo $_SESSION['uname']; ?></h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="dashboard.php" class="brand-small text-center"> <strong></strong><strong class="text-primary"></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="dashboard.php"> <i class="fa fa-home"></i>Home </a></li>  
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Church Transaction</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-exchange"></i>Income & Expenses </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="transaction.php">Edit Income</a></li>
                 <li><a href="expenses.php">Edit Expenses</a></li>
               

               
              </ul>
            </li> 
          </ul>
        </div>
         <div class="admin-menu">
          <h5 class="sidenav-heading">Members Menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-book"></i>Attendance </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="sunday.php">Sunday Service</a></li>
                 <li><a href="others.php">Other Services</a></li>
               

               
              </ul>
            </li> 
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Admin Menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user"></i>Admin </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
          
                    <li><a href="sign.php"> <i class="fa fa-user"></i>Add admin </a></li>
                    <li><a href="member.php"> <i class="fa fa-user"></i>Add Member </a></li>
                    <li><a href="stransaction.php"> <i class="fa fa-user"></i>All Income </a></li>
                     <li><a href="#"> <i class="fa fa-user"></i>All Expenses </a></li>
                    <li><a href="sattendance.php"> <i class="fa fa-user"></i>Attendance(Sunday) </a></li>
                    <li><a href="new.php"> <i class="fa fa-user"></i>Attendance (Other Service)</a></li>  
                     <li><a href="smembers.php"> <i class="fa fa-user"></i>All members </a></li>

              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar" style="background:#0a4981">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn" style="background-color:white;color:#0a4981;"><i class="fa fa-bars"> </i></a><a href="dashboard.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span><h3><?php echo $_SESSION['cname'] ?> </span><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification d-flex justify-content-between">
                          <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                  </ul>
                </li>
                <!-- Messages dropdown-->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"></div>
                        <div class="msg-body">
                          <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> </div>
                        <div class="msg-body">
                          <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-profile"> </div>
                        <div class="msg-body">
                          <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Languages dropdown    -->
              
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
         
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
      
          <!-- Page Header-->
            <header> 
            <h1 class="h3 display"> All Expenses (Based On  Month)</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='January' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                            <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                          <th style='color:#0a4981;'>Edited By</th>
</tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>"."<td>".$r['edit']."</td>"."</td>"."</td>
</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>


        <header> 
            <h1 class="h3 display"> February </h1>
          </header>
            <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">

<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='February' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                            <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
</tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>
 
</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
                 <header> 
            <h1 class="h3 display"> March</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='March' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                           <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
              </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>
 
</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
               <header> 
            <h1 class="h3 display"> April</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='April' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                            <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
              </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
            <header> 
            <h1 class="h3 display"> May</h1>
          </header>

                  <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='May' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                           <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
          </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>


 <header> 
            <h1 class="h3 display">June</h1>
          </header>
  

                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 

require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='June' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
 <header> 
            <h1 class="h3 display"> July</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 

require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='July' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
               <header> 
            <h1 class="h3 display"> August</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 

require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='August' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
             <header> 
            <h1 class="h3 display">September</h1>
          </header>

                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 
 
require 'dc.php';
$result = mysqli_query($con, "select * from expenses_tb where month='September' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>

 <header> 
            <h1 class="h3 display"> October</h1>
          </header>

                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 

require 'dc.php';

$result = mysqli_query($con, "select * from expenses_tb where month='October' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?> </div>
            </div>
 <header> 
            <h1 class="h3 display"> November</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 

require 'dc.php';

$result = mysqli_query($con, "select * from expenses_tb where month='November' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
                           <th style='color:#0a4981;'>Edited By</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>


 <header> 
            <h1 class="h3 display"> December</h1>
          </header>
                   <div class="row" style='width:100%'>
           
              <div class="card" style="width:100%">
<?php 

require 'dc.php';

$result = mysqli_query($con, "select * from expenses_tb where month='December' and church='$_SESSION[cname]'");
// <table border=10 width=50% align=center style='margin-top:100px;color: white;background-color:#166A8F;border-color:#166A8F'><th>S/N</th><th>Surname</th><th>Firstname</th><th>Lastname</th></th><th>Change</th><th>Delete</th><th>Info</th>
echo " <div class='table-responsive' style='width:100%'>
                    <table class='table table-striped'>
                      <thead>
                        <tr>
                      <thead>
                        <tr>
                          <th>#</th>
                          <th style='color:#0a4981;'>Bulletin(For The Week)</th>
                          <th style='color:#0a4981;'>Fuel(For The Week)</th>
                          <th style='color:#0a4981;'>Electricty Bill</th>
                          <th style='color:#0a4981;'>Pastor</th>
                          <th style='color:#0a4981;'>Other</th>
                           <th style='color:#0a4981;'>Month</th>
                          <th style='color:#0a4981;'>Total</th>
                          <th style='color:#0a4981;'>Date</th>
                          <th style='color:#0a4981;'>Time</th>
 </tr>
                      </thead>
                      <tbody>
                       
                        
                      </tbody>
                 ";
while ($r = mysqli_fetch_array($result)) {
  $id = $r ['expenses_id'];
  echo  "<tr><td>".$id."</td><td>".'#'.$r['item1']."</td><td>".'#'.$r['item2']."</td><td>".'#'.$r['item3']."</td><td>".'#'.$r['item4']."</td><td>".'#'.$r['item5']."</td><td>".$r['month']."</td><td>".'#'.$r['total']."</td><td>".$r['date']."</td><td>".$r['time']."</td>".$r['edit']."</td>"."</td>"."</td>

</tr>";

}
echo "   </table>
                
            </div>";

 ?>
              </div>
            </div>
      </section>
      <footer class="main-footer"  style="background:#0a4981;color:white">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p style="color:white"><?php echo $_SESSION['cname'] ?> &copy; 2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p style="color:white">Powered by <a href="#" class="external">VAD</a></p>
            
            </div>
          </div>
        </div>
      </footer>
     
    </div>
    </form>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php
 } 
 else{
 include 'index.html';
 }
?>