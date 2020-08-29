<?php

  include('header.php');
  // include('sidebar.php');
?><style type="text/css">	h1, h2, h3, h4, h5, h6{		color: #000;	}</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-app="leads" ng-controller="leadCtrl">
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Update Profile</h1> -->
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Post Leads </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" id="postleadsection1">
      <div class="container-fluid">
       
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline" >
              <div class="card-header">
                <!-- <h3 class="card-title">Thank You !</h3> -->
              </div>
              <div class="card-body">
                <div class="row form-group">
                  <h3>Thankyou for submitting your requirement</h3> 
				  <h5>Our team will review your request and get back to you within 72 hours</h5>
                </div>
                <div class="row form-group">
                    <button type="button" ng-click="submitthankyou()" class="col-2 btn btn-success"> Ok </button>
                  </div>  
              </div><!-- /.card-body -->

            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
  include('footer.php');
?>
 