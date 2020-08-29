<?php
  include('header.php');
  // include('sidebar.php');
?>

<style type="text/css">
  .card-row {
/*        margin-bottom: 2%; */

    margin: 8px;
    border-radius: 2px;
    width: calc(100% - 24px);
    background: #fff;
    -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
    
    }
    
  
    .search{
        padding: 4px 20px;
        border-radius: 0px;
        background-position: left 4px center;
        font-size: 1.2rem;
        font-weight: 200;
        line-height: 1rem;
        color: #141414;
        background-color: #fff;
        
        border-radius: 30px !important;
        /*box-shadow: none !important;*/
        border: 1px solid #a5a5a5;      
        
        display: block;
        width: 98%;
        /* border: 0;*/
        font-family: inherit;
    
    }
    
    .btncls {
        border-width: 1px;
        border-style: solid;
        border-color: #488aff;
        color:#f8f9fa;
    /*  color: #488aff;
        background-color: white;*/
        box-shadow: none;
        
        border-radius: 64px;
        padding: 0 2.6rem;   
        
        height: 2.1em;
        /*font-size: 1.3rem;*/
        
        float: right !important;
        
        text-align: center;
        position: relative;
        z-index: 0;
        display: inline-block;
        text-overflow: ellipsis;
        text-transform: none;
        white-space: nowrap;
        cursor: pointer;
        vertical-align: top;
        transition: background-color, opacity 100ms linear;
        user-select: none;
        contain: content;
    
        border: 0;
        font-family: inherit;
        font-style: inherit;
        font-variant: inherit;
        line-height: 1;
        
        box-sizing: border-box;
        
    }

    .btncls1{
        color: #fff;
        border-radius: 64px;
        padding: 0 2.6rem; 
        height: 1.7em;
        font-size: 1.1rem;   
        overflow: hidden;    
        font-weight: 500;
        text-transform: uppercase;     
        text-align: center;
        position: relative;
        z-index: 0;
        display: inline-block;
        text-overflow: ellipsis;
        text-transform: none;
        white-space: nowrap;
        cursor: pointer;
        vertical-align: top;
        transition: background-color, opacity 100ms linear;
        user-select: none;
        contain: content;       
        border: 0;
        font-family: inherit;
        font-style: inherit;
        font-variant: inherit;
        line-height: 1;      
        
        
        
        
        
    }

</style>
  <script src="js/angular.min.js"></script>
  <script src="appJs/leads.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-app="leads">
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
              <li class="breadcrumb-item active">My Post Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
  <!-- Main content -->
    <section class="content" ng-controller="leadCtrl">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header p-2">
                 <div class="row form-control col-lg-12 col-xs-12 col-sm-12 col-md-12" style=" background: rgb(243, 93, 93); color: white;" align="center"> My Credit Balance {{totalcredits}}</div>  
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#sell" data-toggle="tab">Sell Leads</a></li>
                  <li class="nav-item"><a class="nav-link" href="#buy" data-toggle="tab">Buy Leads</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body" >
                <div class="tab-content">
                    <div ng-show="showLoader" align="center">
	                    <img src="/img/loader1.gif" width="100px" height="100px" > 
	                </div> 
	                <div class="active tab-pane" id="sell">
                      
                    <div class="card-body">
                            <input class="search" placeholder="Search" ng-model="sellsearch" >
                        <div class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-repeat="selllead1 in sellleads | filter:sellsearch" ng-if="sellleads != 0"> 
                            
                            <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" style="color:#000; text-align:left;">
                              <div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                                  <div class="col-6">
                                      Lead ID:  {{ selllead1.leadref_id }} 
                                  </div>
                                  <div class="col-6">
                                      HScode:  {{ selllead1.hsn_id }} 
                                  </div>
                                 
                              </div>
                              <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                  <div class="col-6" style="border-right: 0.5px solid grey;">{{ selllead1.description }} </div>
                                  <div class="col-6" >Quantity: {{ selllead1.quantity+" "+selllead1.uom }} </div>
                              </div>
                              <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                  <div class="col-6" > <span style="background: green;">Posted:</span> <span style="color:#000">{{ selllead1.posted_date | date : 'dd-MM-yyyy' }}</span> </div>
                                  <div class="col-6" > <span style="background: red; "> Expires:</span> <span style="color:#000">{{ selllead1.expiry_date | date : 'dd-MM-yyyy'}}</span> </div> 
                              </div>
                              <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                          		    <div class="col-6" ><b style="color:#ffa500;" >Import Policy : &nbsp;</b><button type="button" class="btncls1" ng-click="import_policy(selllead1.hsn_id,selllead1.country_id)"style="background-color: #DAA520; color:#fff;" >View</button></div>
                          		    <div class="col-6" ><b style="color:#ffa500;" >Export Policy : &nbsp;</b><button type="button" class="btncls1" ng-click="export_policy(selllead1.hsn_id,selllead1.country_id)"style="background-color: #DAA520; color:#fff;" >View</button></div>
                      		  </div>
                              <div class="col-12">
                                 <button type="button" class="btncls1 btn-primary" ng-click="view_mypostselllead(selllead1.id)">View</button> 
                              </div>
                            </div>                            
                            
                        </div>
                          
                        <div class="clearfix"> </div>
                        <div class="row col-lg-12" ng-if="sellleads <= 0">
                          <div  class=" form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> <!-- style="color:#488aff" -->
                            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 text-danger" align="center" >  <strong> No records found.</strong> </div>
                          </div> 
                                
                        </div>
                      </div> 
                    <!-- /.post -->
                  </div>                      
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="buy">
                      
                        <div class="card-body">
                            <input class="search" placeholder="Search" ng-model="buysearch" >
                            <div class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-repeat="blead in buyleads | filter:buysearch" ng-if="buyleads != 0"> 
                            
                            
                            <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row"  style="color:#000;  text-align:left;">
                              <div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                                  <div class="col-6">
                                      Lead ID:  {{ blead.leadref_id }} 
                                  </div>
                                  <div class="col-6">
                                      HScode:  {{ blead.hsn_id }} 
                                  </div>
                                 
                              </div>
                              <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                  <div class="col-6" style="border-right: 0.5px solid grey;">{{ blead.description }} </div>
                                  <div class="col-6" >Quantity: {{ blead.quantity+" "+blead.uom }} </div>
                              </div>
                              <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                  <div class="col-6" > <span style="background: green; color:#fff">Posted:</span> {{ blead.posted_date | date : 'dd-MM-yyyy' }} </div>
                                  <div class="col-6" > <span style="background: red; color:#fff"> Expires:</span> {{ blead.expiry_date | date : 'dd-MM-yyyy'}} </div> 
                              </div>
                              <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                      		      <div class="col-6"><b style="color:#ffa500;" >Import Policy : &nbsp;</b><button type="button" class="btncls1" ng-click="import_policy(blead.hsn_id,blead.country_id)"style="background-color: #DAA520; color:#fff;" >View</button></div>
                      		      <div class="col-6"><b style="color:#ffa500;" >Export Policy : &nbsp;</b><button type="button" class="btncls1" ng-click="export_policy(blead.hsn_id,blead.country_id)"style="background-color: #DAA520; color:#fff;" >View</button></div>                     		
                      		  </div>
                              <div>
                                  <button type="button" class="btncls1 btn-primary" ng-click="view_mypostbuylead(blead.id)">View</button> 
                              </div>

                            </div> 
                          </div>
                          
                            <div class="clearfix"> </div>
                            <div class="row col-lg-12" ng-if="buyleads == 0">
                                <div  class=" form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> <!-- style="color:#488aff" -->
                                  <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 text-danger" align="center" >  <strong> No records found.</strong> </div>
                                </div> 
                                
                            </div>            
              
                        </div>                      
                      
                      
                  </div>
                  <!-- /.tab-pane -->

     

                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
  <script>
$(document).ready(function(){
    function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        /* Applying the top margin on modal dialog to align it vertically center */
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   
});
</script>
<?php
  include('footer.php');
?>