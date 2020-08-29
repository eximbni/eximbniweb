<?php
 require("header.php");
?>
<style>
body {
  padding : 10px ;
  
}


#exTab1 .tab-content {
  color : white;
  background-color: #428bca;
  padding : 5px 15px;
}

#exTab1 .nav-pills > li > a {
  border-radius: 0;
}

.circle {
  position: relative;
  display: block;
/*  margin: 2em 0;*/
  background-color: transparent;
  color: #222;
  text-align: center;
}

.circle-red
{
    background:red;
}
.circle:after {
  display: block;
  padding-bottom: 150px;
  width: 150px;
  height: 0;
  border-radius: 50%;
  background-color: #4CAF50;
  content: "";
}

.circle__inner {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 150px;
  height: 150px;
}

.circle__wrapper {
  display: table;
  width: 150px;
  height: 150px;
}

.circle__content {
  display: table-cell;
  padding: 1em;
  vertical-align: middle;
   color: #fff;
}

@media (min-width: 480px) {
  .circle__content {
    font-size: 2em;
  }
}

@media (min-width: 768px) {
  .circle__content {
    font-size: 2em;
  }
}




</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Credits</li>
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
        <div class="row">
          <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">

            <!-- Profile Image -->
            <div class="card card-success card-outline">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-3 col-xm-3 col-md-5 col-sm-5"> </div>
                        <div class="col-lg-3 col-xm-3 col-md-3 col-sm-3" style="margin-bottom:30px">
                            <div class="circle">
                              <div class="circle__inner">
                                <div class="circle__wrapper">
                                    
                                  <div class="circle__content">{{ creditsres.credits }}</div>
                                </div>
                              <label style="color:#000; text-align:center">Lead Credits</label>
                              </div>
                              
                            </div>
                            
                        </div>
                        <div class="col-lg-4 col-xm-4 col-md-4 col-sm-4"> 
                            <div class="col-lg-3 col-xm-3 col-md-3 col-sm-3" style="margin-bottom:30px">
                                
                            <div class="circle">
                              <div class="circle__inner">
                                <div class="circle__wrapper">
                                    
                                  <div class="circle__content">{{ creditsres.rfq_credits }}</div>
                                </div>
                                <label style="color:#000;">RFQ Credits</label>
                              </div>
                            </div>
                            
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="card-body">
                    <div class="row">
                        <ul class="nav nav-pills">
                          <li class="nav-item"><a class="nav-link active" href="#plans" data-toggle="tab">Recharge Offers </a></li>
                          <li class="nav-item"><a class="nav-link" href="#histroy" data-toggle="tab">Credit History</a></li>
                          <li class="nav-item"><a class="nav-link" href="#rfqhistroy" data-toggle="tab">RFQ History</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="active tab-pane" id="plans"> 

                            <div class="table-responsive" style="color:#000">
                              <table id="mypackagedetails" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Recharge</th>
                                    <th>Credits </th>
                                    <th>Banners </th> 
                                    <th>RFQ</th>
                                    <th>Action </th>                                      
                                </tr>
                                </thead>
                                <tbody>
                				<!-- {{ rechargedata }} -->
                                    <tr ng-repeat="rech in rechargedata" ng-if="rechargedata!='null'">
                                      <td> {{ $index+1 }} </td>
                                      <td> {{ rech.amount }} </td>
                                      <td> {{ rech.credits }} </td>
                                      <td> {{ rech.banners }} </td>
                                      <td> {{ rech.rfq }} </td>
                                      <td> 
                                        <input type="button" class="btn btn-info" name="rechatgePackage" id="rechatgePackage" ng-click="rechatgePackage(rech.amount,rech.credits,'Recharge')" value="Select {{ rech.amount }}">
                                      </td>
                                    </tr>
                                    <tr ng-if="rechargedata=='null'">
                						          <td colspan="6">No records found....</td>
                					          </tr>
                                </tbody>
                
                              </table>
                              
                            </div>
                            
                        </div>
                        
                        <div class="tab-pane" id="histroy"> 
                            <div class="table-responsive">
                              <table id="mypackagedetails" class="table table-bordered table-striped" style="color:#000">
                                <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Trans ID </th>
                                    <th>Trans Date </th>
                                    <th>Trans Detail </th> 
                                    <th>Particulars</th>
                                    <th>Credit </th>                                      
                                </tr>
                                </thead>
                                <tbody>
                				<!-- {{ rechargehistory }} -->
                                    <tr ng-repeat="rechistroy in rechargehistory" ng-if="rechargehistory!='null' && rechistroy.txn_for!='RFQ Credit'">
                                      <td> {{ $index+1 }} </td>
                                      <td> {{ rechistroy.txn_id }} </td>
                                      <td> {{ rechistroy.txn_date }} </td>
                                      <td> {{ rechistroy.txn_for }} </td>
                                      <td> {{ rechistroy.lead_ref_id }} </td>
                                      <td> {{ rechistroy.txn_amount }} </td>
                                    </tr>
                                    <tr ng-if="rechargehistory=='null'">
                						          <td colspan="6">No records found....</td>
                					          </tr>
                                </tbody>
                
                              </table>
                              
                            </div>
                        </div>  
                        
                         <div class="tab-pane" id="rfqhistroy"> 
                            <div class="table-responsive">
                              <table id="mypackagedetails" class="table table-bordered table-striped" style="color:#000">
                                <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Trans ID </th>
                                    <th>Trans Date </th>
                                    <th>Trans Detail </th> 
                                    <th>Particulars</th>
                                    <th>Credit </th>                                      
                                </tr>
                                </thead>
                                <tbody>
                				<!-- {{ rechargehistory }} -->
                                    <tr ng-repeat="rechistroy in rechargehistory" ng-if="rechargehistory!='null' && rechistroy.txn_for=='RFQ Credit'">
                                      <td> {{ $index1+1 }} </td>
                                      <td> {{ rechistroy.txn_id }} </td>
                                      <td> {{ rechistroy.txn_date }} </td>
                                      <td> {{ rechistroy.txn_for }} </td>
                                      <td> {{ rechistroy.lead_ref_id }} </td>
                                      <td> {{ rechistroy.txn_amount }} </td>
                                    </tr>
                                    <tr ng-if="rechargehistory=='null'">
                						          <td colspan="6">No records found....</td>
                					          </tr>
                                </tbody>
                
                              </table>
                              
                            </div>
                        </div>  
                        
                    </div>
               <!--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
           <div class="col-md-1"> &nbsp; </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


          </div>
          <!-- /.content-wrapper -->
<?php
    require("footer.php");
?>