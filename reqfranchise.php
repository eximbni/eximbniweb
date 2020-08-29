<?php

  include('header.php');
  // include('sidebar.php');
?>
	<script src="js/angular.min.js"></script>
	<script src="appJs/franchise.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-app="franchise">
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
              <li class="breadcrumb-item active">Request Franchise </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <form name="reqfranchise" ng-controller="chapCtrl">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Franchise Request Form</h3></br>
				<p class="text-success"> {{ successresmsgs }} </p>
              </div>
              <div class="card-body" >
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Franchise Type <span class="">*</span></label>
                    <div class="select2-green">
                      <select class="form-control" data-placeholder="Select Franchise Type" ng-model="franchisetype" style="width:100%">
                        <option value="">Select Franchise Type</option>
                        <option ng-repeat="fr in franchiselist" value="{{ fr.id }}"> {{ fr.franchise }}</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Chapters <span class="">*</span></label>
                    <div class="form-group">
						<select class="form-control" data-placeholder="Select Chapter" ng-model="chapter" style="width:100%">
							<option value="">Select Chapter</option>
							<option ng-repeat="ch in chapterslist" value="{{ ch.id }}"> {{ ch.chapter_name }}</option>
                      </select>
					</div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Country <span class="">*</span></label>
                    <div class="select2-green">
                      <select class="form-control" data-placeholder="Select Country" ng-change="countrySelected()" ng-model="country" style="width:100%">
                        <option value="">Select Country</option>
                        <option ng-repeat="cntry in Countrylist" value="{{ cntry.country_id }}"> {{ cntry.name }}</option>
                      </select>
                    </div>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group col-md-6">
                    <label>State <span class="">*</span></label>
                    <div class="select2-green">
                      <select class="form-control" data-placeholder="Select State" ng-model="states" style="width:100%">
                        <option value="">Select State</option>
                        <option ng-repeat="state in frstatelist" value="{{ state.zone_id }}"> {{ state.name }}</option>
                      </select>
                    </div>
                  </div> 
                </div>

                <div class="row">
                  <div class="form-group  col-md-12">
                    <label> Description </label>
                    <div class="input-group">
                      <textarea class="form-control" ng-model="description" name="description" id="description"> Write description</textarea>
                    </div>
                  </div>
                </div>
 
              </div><!-- /.card-body -->
              <div class="card-footer">
                  <div class="form-group">
                    <button class="btn btn-success pull-right" ng-click="submitRequest()">Submit</button>
                  </div>
              </div>

            </div>
            </form>
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