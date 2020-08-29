<?php
    require("header.php");
?>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="eximApp">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h6 class="m-0 text-dark">Select Recharge Plan</h6> 
                    
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Recharge</li>
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
			
            

      <!-- Default box -->
          <div class="card card-success card-outline" ng-controller="chapterCtrl">
            <div class="card-header">
              <h3 class="card-title">Recharge Plan Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="mypackagedetails" class="table table-bordered table-striped" style="color:#000">
                <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Recharge Amount</th>
                    <th>RFQ</th>
                    <th>Credits </th>
                    <th>Banners </th> 
                    <th>Action </th>                                      
                </tr>
                </thead>
                <tbody>
				<!-- {{ rechargedata }} -->
                    <tr ng-repeat="rech in rechargedata" ng-if="rechargedata!='null'">
                      <td> {{ $index+1 }} </td>
                      <td> {{ rech.amount }} </td>
                      <td> {{ rech.rfq }} </td>
                      <td> {{ rech.credits }} </td>
                      <td> {{ rech.banners }} </td>
                      <td> 
                        <input type="button" class="btn btn-info" name="rechatgePackage" id="rechatgePackage" ng-click="rechatgePackage(rech.amount)" value="Select Plan">
                      </td>
                    </tr>
                    <tr ng-if="rechargedata=='null'">
						          <td colspan="6">No records found....</td>
					          </tr>
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
		</div>
		

<?php
    require("footer.php");
?>