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
                    <h6 class="m-0 text-dark">Select Payment Gateway</h6> 
                    
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Payment Gateway List</li>
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
              <h3 class="card-title">Select Your Payment Gateway</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="mypackagedetails" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Sr.No.</th>
                    <th>Payment Gateway </th>                         
                </tr>
                </thead>
                <tbody>
				<!-- {{ rechargedata }} -->
                    <tr ng-repeat="payg in gatewaylist" ng-if="gatewaylist!='0'">
                      <td> {{ $index+1 }} </td>
                      <td><input type="radio" name="getpaygateway" id="getpaygateway"  > <a href="{{payg.gateway_page_path}}"  ><img src="api/uploads/{{ payg.img_path }}" width="200px" height="80px"> </a></td>
                    </tr>
                    <tr ng-if="gatewaylist=='0'">
						 <td colspan="3">No Payment Gateway found....</td>
					</tr>
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
		</div>
		
<!-- Start Payment Gateway Modal -->

  <div class="modal fade" id="remindModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
            
        <form name="remindForm" ng-submit="remindmelead()">          
        <div class="modal-header">
            <div class="col-md-12 col-sm-6 text-center ">
                <h5> Please select your Payment Gateway </h5>
               <span >{{ message }} </span>
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label> Select Remind Me Date : </label>
                <input type="hidden" id="lead_id" ng-model="lead_id" >
                <input type="hidden" id="lead_desc" ng-model="lead_desc" >
                <input type="hidden" id="lead_exp" ng-model="lead_exp" >
                <input type="date" name="remind_date" id="remind_date" class="form-control input" ng-model="reminddate" min="<?= date('Y-m-d'); ?>" autocomplete="off">
                <span class="red-text" ng-if="remindForm.remind_date.$error.required && remindForm.remind_date.$dirty">Reminder Date is required</span>
            </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-primary pull-left" data-dismiss="modal" value="Cancel">
            <button type="submit" class="btn btn-success " > Submit </button>
            
        </div>
        </form>
      </div>
    </div>
  </div>

<!-- End Payment Gateway Modal -->		
		
<?php
    require("footer.php");
?>