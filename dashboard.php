<?php session_start();
if (isset($_SESSION['email'])) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Church Dashboard</title>
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
    <nav class="side-navbar" style="background:#0a4981;">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center" style="background-color:#0a4981;">
          <!-- User Info-->
       <div class="sidenav-header-inner text-center">
           <?php echo "<img src='".$_SESSION['passport']."'  style='width:100px;height:100px;border-radius: 50%' >";?>
            <h2 class="h5"><?php echo $_SESSION['uname']; ?></h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="#" class="brand-small text-center"> <strong></strong><strong class="text-primary"></strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="#"> <i class="fa fa-home"></i>Home </a></li>  
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
                     <li><a href="sexpenses.php"> <i class="fa fa-user"></i>All Expenses </a></li>
                    <li><a href="sattendance.php"> <i class="fa fa-user"></i>Attendance </a></li>
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
        <nav class="navbar" style="background-color:#0a4981;">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header" ><a id="toggle-btn" href="#" class="menu-btn" style="background-color:white;color:#0a4981"><i class="fa fa-bars"> </i></a><a href="#" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span> <h3><?php echo $_SESSION['cname'] ?></span><strong class="text-primary">Dashboard</strong></div></a></div>
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
                        <div class="msg-profile"> </div>
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
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-user"></i></div>
                <div class="name"><strong class="text-uppercase">New Members</strong><span>Last 7 days</span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>
        
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-user-circle-o"></i></div>
                <div class="name"><strong class="text-uppercase">Activities</strong><span>Last 2 months</span>
                  <div class="count-number">342</div>
                </div>
              </div>
            </div>
           
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-book"></i></div>
                <div class="name"><strong class="text-uppercase">Programmes</strong><span>Last 3 months</span>
                  <div class="count-number">92</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="fa fa-book"></i></div>
                <div class="name"><strong class="text-uppercase">Works</strong><span>Last 7 days</span>
                  <div class="count-number">70</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-3 col-md-6">
              <div class="card to-do">
                <h2 class="display h4">Members List</h2>
                <p>Based On Month.</p>
                <ul class="check-lists list-unstyled">
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-1" name="list-1" class="form-control-custom">
                    <label for="list-1">January</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
                    <label for="list-2">February</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
                    <label for="list-3">March </label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
                    <label for="list-4">April</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-5" name="list-5" class="form-control-custom">
                    <label for="list-5">May</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">June</label>
                  </li>
                   <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">July</label>
                  </li>
                   <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">August</label>
                  </li>
                   <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">September</label>
                  </li>
                   <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">October</label>
                  </li>
                   <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">November</label>
                  </li>
                   <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">December</label>
                  </li>
                  
                </ul>
              </div>
            </div>
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Church Administration progress</h2>
                <p> .</p>
                <div class="pie-chart">
                  <canvas id="pieChart" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Church Activities Statistics</h2>
                <p>Church Activities </p>
                <div class="line-chart">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Statistics Section-->
      
      <!-- Updates Section -->
      
      <footer class="main-footer"  style="background:#0a4981;color:white">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p style="color:white"><?php echo $_SESSION['cname'] ?> &copy; 2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p style="color:white">Powered by <a href="#" class="external">VAD</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
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