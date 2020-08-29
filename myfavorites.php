<?php
    require("header.php");
?>
<style>
    .fdate{
        margin-left: auto;
        margin-top: 0%;
    }
</style>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="profileApp" ng-controller="userCtrl">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <!-- <h1 class="m-0 text-dark">Dashboard</h1> -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Profile</a>
                      </li>
                      <li class="breadcrumb-item active">My Favorites</li>
                    </ol>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

<!--  Start Main Containt Inserted Here Ganesh  -->

    <!-- Main content -->
   <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
         
        <div class="card card-outline">
          <div class="card-header" style="background: #ff0000b0; color: #ffffff;">
            <h3 class="card-title" align="center" >My Favorites</h3>
          </div>
          <!-- /.card-header -->
		 
          <div class="card-body" ng-controller="userCtrl" align="center">
              <div class="row form-group col-lg-12" style="background: #488aff; height:30px; color: #ffffff;">
                  <div class="col-lg-4"> HS Code </div>
                  <div class="col-lg-4"> Description </div>
                  <div class="col-lg-4 pull-right"> Added Date </div>
              </div>
              <div class="row form-group col-lg-12" ng-repeat="favhs in favhscode" style="color: #000000;">
                  <div class="col-lg-4"> {{ favhs.hscode }} </div>
                  <div class="col-lg-4"> {{ favhs.english }} </div>
                  <div class="col-lg-4"> {{ favhs.crated_date | date:'dd-MM-yyyy' }} </div>
              </div>              
           <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!--  Start Main Containt Inserted Here Ganesh  -->

          </div>
          <!-- /.content-wrapper -->


<?php
    require("footer.php");
?>