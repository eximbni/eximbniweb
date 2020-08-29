<?php
    require("header.php");
?><style>	label{		color : #000;		float : left;	}	</style>
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
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Change Password</li>
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

                  <div class="col-md-8 offset-md-2">
                    <!-- form card change password -->
                    <div class="card card-outline card-success">
                        <div class="card-header">
                            <h3 class="mb-0" style="color: black; float: left;">Change Password</h3>
                             <span class='text-danger'> {{ errorpassmsgs }} </span> <span class='text-success'> {{ successpassmsgs }} </span> 
                        </div>
                        <form class="form-horizontal" name="changeFrom" ng-submit="changePass()">
                        <div class="card-body">
                                <div class="form-group">
                                    <label for="inputPasswordOld">Current Password</label>
                                    <input type="password" class="form-control" ng-model="oldpassword" required="">
                                    <input type="hidden" class="form-control" ng-model="mobile" required="" autocomplete="off">

                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNew">New Password</label>
                                    <input type="password" class="form-control" id="newpassword" name="password" ng-model="newpassword" required=""autocomplete="off" ng-pattern="password_valid"  >
                                    <span class="red-text" ng-if="changeFrom.password.$error.required && changeFrom.password.$dirty">Password is required</span><span class="red-text" ng-show="changeFrom.password.$error.pattern">Password requires one lower case letter, one upper case letter, one digit, 8-15 length, and no spaces.</span>  
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordNewVerify">Confirm Password</label>
                                    <input type="password" class="form-control" id="passwordVerify" ng-model="passwordVerify" required="" ng-change="verifyfun();" autocomplete="off">
                                    <span class='text-danger'> {{ errormsgs }} </span> <span class='text-success'> {{ successmsgs }} </span> 
                                    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success btn-lg float-right">Save</button>
                                </div>
                            
                        </div>
                      </form>
                    </div>
                    <!-- /form card change password -->
                  </div>
               
                </section>
                <!-- /.content -->


            <!--  Start Main Containt Inserted Here Ganesh  -->

          </div>
<?php
    require("footer.php");
?>