<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EXIMBNI | Dashboard</title>
  <!-- FAVICON -->
  <link rel="shortcut icon" href="favicon.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="plugins/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
   <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
   <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
 
    <script src="js/angular.min.js"></script>
    <script src="appJs/eximApp.js"></script>
    <script src="appJs/franchise.js"></script>
    <script src="appJs/leads.js"></script>
    <script src="appJs/notifyApp.js"></script>
    <script src="appJs/profileApp.js"></script>
    <script src="appJs/uppackApp.js"></script>
    <script src="appJs/webinar.js"></script>
    <script src="appJs/recharge.js"></script>
  <script> 
  var user_id = localStorage.getItem("userid");
  document.cookie = "user_id = " + user_id 
  console.log("User ID=", user_id);
  </script>
  <script> 
  var country_id = localStorage.getItem("country_id");
  document.cookie = "country_id = " + country_id
  console.log("Country ID=", country_id);
  </script>
   <script> 
  var isfranchise = localStorage.getItem("is_franchise");
  document.cookie = "is_franchise = " + isfranchise
  console.log("Is Franchise=", isfranchise);
  </script>
  <style>
    .nav-item >a
    {
      font-size: 14px !important;
    }
    .navbar-light .navbar-nav .nav-link
    {
      color: #e85a5a !important;
      font-weight: bold; 
      text-transform: uppercase;
      font-size: 14px;
    }
    .side-link{
    border-bottom: 1px solid #d6d6d6; 
    padding: 10px 0;  
    text-align: left; 
    font-weight: bold; 
    color: #e85a5a
    }
    .side-link >a
    {
      color: #e85a5a !important;
    }
   
  .li{
    padding:5px;
  }
  .dropdownmenu{
    margin-right: -11px;
  }
  .red-text{
      color:red;
    }
.btn-warning
{
  background: #e62f2d !important;
  color: #fff;
  border: 1px solid #e62f2d !important;
}
.btn-warning:hover
{
  background: #e62f2d !important;
  color: #fff;
  border: 1px solid #e62f2d !important;
}
.top-bar
{
background: red;
padding: 5px;
color: #fff;
height: 30px;
text-align: right;
font-size: 14px;
}
	input[type=number]::-webkit-inner-spin-button, 
	input[type=number]::-webkit-outer-spin-button { 
	  -webkit-appearance: none; 
	  margin: 0; 
	}
input[type="date"]::-webkit-inner-spin-button,
input[type="date"]::-webkit-calendar-picker-indicator {
     -webkit-appearance: none;
}
	
  </style>

   <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map1 {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
    }
    </script>
    
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    
  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php $isfranchise= $_COOKIE['is_franchise']; //echo "is franchise:".$isfranchise; ?>

<div class="wrapper">
   <div class="topbar top-bar">
             <div class="col-md-12" >
             info@eximbni.com | +91 800 800 9922
             </div>
    <div id="google_translate_element" style="position: absolute; right: 0; z-index: 1; top: 40px;"></div>
    <a href="index.html" class="brand-link">
       <img src="img/logos.png" alt="EXIMBNI Logo" class="brand-image elevation-3s" style="max-height: 76px;">
    </a>
    
<!--</div>

<div class="wrapper">-->

  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-white navbar-light"  style="margin-top:-10px;">
 
    <ul class="nav navbar-nav"  role="menu" data-accordion="false">
     <li class="dropdown nav-item">
        <a class="nav-link" href="dashboard.php">Home 
        </a>
      </li>
      <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" >
          Profile <span class="caret"></span> 
          
        </a>
        <ul class="dropdown-menu">
          <li class="nav-item" >
            <a href="profile.php" class="nav-link dropdownmenu">
              Update Profile
            </a>
          </li>
          <li class="nav-item" >
            <a href="mypackages.php" class="nav-link dropdownmenu">
              My Package Details
            </a>
          </li>
          <li class="nav-item" >
            <a href="myfavorites.php" class="nav-link dropdownmenu">
              My Favorites
            </a>
          </li>
           <li class="nav-item" >
            <a href="credits.php" class="nav-link dropdownmenu">
              Credits
            </a>
          </li>         
          
          <li class="nav-item" >
            <a href="notifications.php" class="nav-link dropdownmenu">
              Notifications
            </a>
          </li>
          <li class="nav-item" >
            <a href="postbanner.php" class="nav-link dropdownmenu">
              Post A Banner
            </a>
          </li>
          <li class="nav-item" >
            <a href="changepass.php" class="nav-link dropdownmenu">
            Change Password
          </a>
          </li>          
          <li class="nav-item" >
            <a href="profile_settings.php" class="nav-link dropdownmenu">
              Setting
            </a>
          </li>
        </ul>
      </li>

     <li class="dropdown nav-item">
        <a class="dropdown-toggle  nav-link" data-toggle="dropdown" href="#">Leads
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="nav-item" >
              <a href="postleads.php" class="nav-link dropdownmenu">
                  Post Leads
              </a>
          </li>
          <li class="nav-item" >
              <a href="allleads.php" class="nav-link dropdownmenu">
                  All Leads
              </a>
          </li>
          <li class="nav-item" >
              <a href="mypost.php" class="nav-link dropdownmenu">
                  My Postings
              </a>
          </li>
          <li class="nav-item" >
              <a href="mypurchase.php" class="nav-link dropdownmenu">
                  My Purchases
              </a>
          </li>
          <!--li class="nav-item" >
              <a href="myresponse.php" class="nav-link dropdownmenu">
                  <p>My Responses </p>
              </a>
          </li-->                                        

        </ul>
      </li>

     <li class="dropdown nav-item">
        <a class="nav-link" href="chat.php">Chat
        </a>
      </li>
     <li class="dropdown nav-item">
        <a class="nav-link" href="webinar.php">Webinar
        <span class="caret"></span></a>
      </li>
     <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Notification
        <span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <li class="nav-item" >
              <a href="inbox.php" class="nav-link dropdownmenu">
                  Inbox
              </a>
          </li>
          <li class="nav-item" >
              <a href="notifymesg.php" class="nav-link dropdownmenu">
                  Admin Notification
              </a>
          </li>
        </ul>
      </li>      
      
      
     <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Franchise
        <span class="caret"></span></a>
        <ul class="dropdown-menu ">
          <p style="display: none;">Dashboard</p>
		  <?php if($isfranchise==1){?>
          <li class="nav-item"><a href="/franchise/" class="nav-link dropdownmenu"><p>Franchise Dashboard </p></a></li>
           <?php } ?></a>
          <li class="nav-item"><a href="reqfranchise.php" class="nav-link dropdownmenu"><p>Request Franchise </p></a></li>
        </ul>
      </li>

     <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Packages
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="upgradepack.php" class="nav-link dropdownmenu"><p>Upgrade</p></a></li>
          <li class="nav-item"><a href="rechargepag.php" class="nav-link dropdownmenu"><p>Recharge </p></a></li>
        </ul>
      </li>
     <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Communication
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="nav-item"><a href="googlemap.php" class="nav-link dropdownmenu"><p>Google Maps </p></a></li>
        </ul>
      </li>
     <li class="dropdown nav-item">
        <a class="nav-link" href="logout.php">Sign out </a>
     </li> 
    </ul>
  </nav>
  <!-- /.navbar -->

  <div class="row col-sm-12">
  
 <?php
 $plan_name =  '';
$user_credits = '';
include("api/config.php");
$uid = $_COOKIE['user_id'];

$co_id = $_COOKIE['country_id'];

$sql = "SELECT s.plan_name,s.plan_type,w.credits as wallet_credits, w.rfq_credits FROM subscriptions as s, wallet as w where s.id = w.subscription_id AND w.user_id = '$uid' group by w.user_id";
  $result=mysqli_query($conn,$sql);
  if($result){
   while($row=mysqli_fetch_assoc($result)){
      $plan_name =  $row['plan_name'];
	  $plan_type =  $row['plan_type'];
      $user_credits = $row['wallet_credits'];
      $rfq_credits = $row['rfq_credits'];
    }
    
 print_r($row);
  }
         
?>  

    <div class="col-sm-2" style="background: #f4f6f9;">
       <div class="row">
     <div class="col col-md-12">
     <a href="#" class="btn btn-warning btn-block">Membership Details</a>
 
     </div>
     <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12" style="color:#f15822;background:#f4f6f9; min-height:100px">
    <div class="row">
        <div class="col-md-8 col-xs-12 col-sm-12 col-lg-6" >
          Membership:
        </div>
        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-6">
          <?php  echo $plan_name; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
          Credits:
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6" >
          <?php echo $user_credits; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
          RFQ Credits:
        </div>
        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6" >
          <?php echo $rfq_credits; ?>
        </div>
    </div>
	
    <div class="row">    
        <a class="btn btn-success" style="text-align:center; width:100%; margin-top:25px" href="upgradepack.php">Upgrade to premium </a>
    </div>
     </div>
     </div>
     <div class="row" style="margin-top:20px">
     <div class="col col-md-12">
    <a href="#" class="btn btn-warning btn-block">Quick Links</a>
     </div>
     <div class="col col-md-12" style="color:grey;background:#f4f6f9; min-height:200px">
    <div class="side-link">
    <a href="postleads.php">&raquo; Post lead </a>
    </div>
    <!-- <div style="border-bottom: 1px solid grey; min-height:40px">
    <a href="myresponse.php"><span> >> </span>Responses </a>
    </div> -->
    <div class="side-link">
    <a href="profile.php">&raquo;  My Profile </a>
    </div>
    <div class="side-link">
    <a href="webinar.php">&raquo;  Webinar </a>
    </div>
    <div  class="side-link">
    <a href="rechargepag.php">&raquo;  Recharge </a>
    </div>
    <div class="side-link">
    <a href="reqfranchise.php">&raquo;  Franchise Request </a>
    </div>
    <!-- <div style="min-height:40px">
    <a href="upgradepack.php"><span> >> </span> Upgrade </a>
    </div>-->
     </div>
     </div>
      <div class="row" style="margin-top:20px">
      <div class="col col-md-12" style="color:#111; background:#f4f6f9; min-height:100px">
    
     </div>
     </div>
    </div>
    <div class="col-sm-10">
