<?php
    require("header.php");
?>
    <script src="appJs/dashApp.js"></script>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="dashApp" ng-controller="dashCtrl">
            <!-- Content Header (Page header) -->
            <div class="content-header" >
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Welcome {{ username }}</h1> 
                    
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content" >
              <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                  <!-- ./col -->
                  <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box" style="background-color:#488aff; color:#fff;">
                      <div class="inner">
                        <h3 align="right">{{ userprofiles.posted_leads }}</h3>
                        <p>Total Lead Posted</p>
                      </div>
                      <div class="icon"> <i class="ion ion-person-add"></i>
                      </div> <a href="mypost.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box" style="background-color: rgb(255, 94, 0); color:#fff;">
                      <div class="inner">
                        <h3 align="right">{{ userprofiles.purchase_sales }}</h3> 
                        <p>Total Purchase Sell Lead</p>
                      </div>
                      <div class="icon"> <i class="ion ion-pie-graph"></i>
                      </div> <a href="mypurchase.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box" style="background-color:#DAA520; color:#fff;">
                      <div class="inner">
                        <h3 align="right">{{ userprofiles.purchase_buys }}</h3>
                        <p>Total Purchase Buy Lead </p>
                      </div>
                      <div class="icon"> <i class="ion ion-person-add"></i>
                      </div> <a href="mypurchase.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                  <div class="col-lg-3 col-3">
                    <!-- small box -->
                    <div class="small-box" style="background-color: #008000; color:#fff;">
                      <div class="inner">
                        <h3 align="right">{{ userprofiles.credits }} <sup style="font-size: 20px"> </sup></h3>
                        <p>Credit Balance</p>
                      </div>
                      <div class="icon"> <i class="ion ion-stats-bars"></i>
                      </div> <a href="credits.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
          </div>
<?php
    require("footer.php");
?>