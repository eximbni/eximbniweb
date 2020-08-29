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
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <script src="js/angular.min.js"></script>
    <script src="appJs/leads.js"></script>

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

  .li{
    padding:5px;
  }
  .dropdownmenu{
    margin-right: -11px;
  }
  .red-text{
      color:red;
    }

}
  

      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

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

  </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" align="center">
    <a href="index.html" class="brand-link">
       <img src="img/eximbnilogo.svg" alt="EXIMBNI Logo" class="brand-image elevation-3s">
      <span class="brand-text font-weight-light"></span>
    </a>
      <div class="user-panel mt-3 mb-3 d-flex">    </div>

</div>
          <div class="content-header"> </div>
<div class="wrapper">


  <div class="row col-sm-12">  </div>
   
        <div class="content-wrapper" ng-app="leads" ng-controller="leadCtrl">
          <!-- Content Header (Page header) -->
          <div class="content-header"> </div>
          <!-- /.content-header -->

        
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card ">
                    <div class="card-header p-2">
                         <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#sell" data-toggle="tab">Seller </a></li>
                            <li class="nav-item"><a class="nav-link" href="#buy" data-toggle="tab"> Buyer</a></li>
                          </ul>
                    </div><!-- /.card-header -->
                    <div class="card-body" >
                      <div class="tab-content">
                          <div class="active tab-pane" id="sell">
                              <div class="card-body">
                                  <input class="search" placeholder="Search" ng-model="sellsearch" >
                                  <p style="text-align:justify; font-size:16px"><br> Click <strong>Heart</strong> <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ></i> button if you would like to add Lead's <strong>HSCODE</strong> as your favorite. Please Login to Buy Leads. Click Here for <strong><a href="index.html" target="_blank">Login</a></strong></p>
                                  <div class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-repeat="selllead1 in hscode_sellleads | filter:sellsearch" ng-if="hscode_sellleads != 0"> 
                                  <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row">
                                    <div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                                        <div class="col-5">
                                            Lead ID:  {{ selllead1.leadref_id }} 
                                        </div>
                                        <div class="col-6">
                                            HScode:  {{ selllead1.hsn_id }} 
                                        </div>
                                        <div class="col-1">
                                           <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ng-click="mysfav(selllead1.hsn_id)"></i> 
                                        </div>
                                    </div>
                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-6" style="border-right: 0.5px solid grey;">{{ selllead1.description }} </div>
                                        <div class="col-6" >Quantity: {{ selllead1.quantity+" "+selllead1.uom }} </div>
                                    </div>
                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="col-6" > <span style="background: green; color:#fff">Posted:</span> {{ selllead1.posted_date | date : 'dd-MM-yyyy' }} </div>
                                        <div class="col-6" > <span style="background: red; color:#fff"> Expires:</span> {{ selllead1.expiry_date | date : 'dd-MM-yyyy'}} </div>                         
                                    </div>

                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                                        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" > 
                                            <input type="hidden" id="chapter_{{ selllead1.id }}" value="{{ selllead1.chapter_id }}">
                                            <input type="hidden" id="leadref_id_{{ selllead1.id }}" value="{{ selllead1.leadref_id }}">
                                            <button type="button" class="btncls1  btn-primary" ng-click="skipslead(selllead1.id)">Skip Lead</button>
                            </div>
                                        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" >
                                              <button type="button" class="btncls1 btn-danger"  ng-click="buyslead(selllead1.id)" >Buy Lead</button>                                 
                                        </div>
                                        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-4" {{ msg }}>
                                            <button type="button" class="btncls1 btn-primary" ng-click="remind(selllead1.id,selllead1.description)" >Remind Me Later</button>   
                                        </div>  
                                        <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                                    </div>
                                  </div>
                                </div>
                                
                                  <div class="clearfix"> </div>
                                  <div class="row col-lg-12" >
                                      <div  class=" form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> <!-- style="color:#488aff" -->
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12" align="center" style="font-size:16px;">  Didn't Find your Requirement? </div>
                                        <div class="col-lg-8 col-xs-4 col-sm-4 col-md-9" align="center" > <button type="button" class="btncls btn-success" ng-click="postlead()">Click Here To Post a Sell Lead</button>  </div>                         
                                      </div> 
                                      
                                  </div>
                    </div>
                              <!-- /.post -->
                          </div>
                          
                          <div class="tab-pane" id="buy">
                              <div class="card-body">
                                  <input class="search" placeholder="Search" ng-model="buysearch" >
                                  <p style="text-align:justify; font-size:16px"><br> Click <strong>Heart</strong> <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ></i> button if you would like to add Lead's <strong>HSCODE</strong> as your favorite. Please Login to Buy Leads. Click Here for <strong><a href="index.html" target="_blank">Login</a></strong></p>
                                  <p style="text-align:justify; font-size:16px"></p>
                                  <div class="row col-lg-12" ng-repeat="buyl in hscode_buyleads | filter:buysearch" ng-if="hscode_buyleads != 0"> 
                                  <div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row">
                                    <div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                                        <div class="col-5">
                                            Lead ID:  {{ buyl.leadref_id }} 
                                        </div>
                                        <div class="col-6">
                                            HScode:  {{ buyl.hsn_id }} 
                                        </div>
                                        <div class="col-1">
                                           <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ng-click="mybfav(buyl.hsn_id)"></i> 
                                        </div>
                                    </div>
                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-6" style="border-right: 0.5px solid grey;">{{ buyl.description }} </div>
                                        <div class="col-6" >Quantity: {{ buyl.quantity+" "+buyl.uom }} </div>
                                    </div>
                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="col-6" > <span style="background: green; color:#fff">Posted:</span> {{ buyl.posted_date | date : 'dd-MM-yyyy' }} </div>
                                        <div class="col-6" > <span style="background: red; color:#fff"> Expires:</span> {{ buyl.expiry_date | date : 'dd-MM-yyyy'}} </div>                          
                                    </div>

                                    <div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                                        <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                                        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" > 
                                            <input type="hidden" id="chapter_{{ buyl.id }}" value="{{ buyl.chapter_id }}">
                                <input type="hidden" id="leadref_id_{{ buyl.id }}" value="{{ buyl.leadref_id }}">
                                <button type="button" class="btncls1  btn-primary" ng-click="skipslead(buyl.id)">Skip Lead</button>
                            </div>
                                        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" >
                                              <button type="button" class="btncls1 btn-danger"  ng-click="buyslead(buyl.id)">Buy Lead</button>                                
                                        </div>
                                        <div class="col-lg-2 col-xs-12 col-sm-12 col-md-4" >
                                            <button type="button" class="btncls1 btn-primary" ng-click="remind(buyl.id,buyl.description)" >Remind Me Later</button>   
                                        </div>  
                                        <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                                    </div>
                                  </div>
                                </div>
                                
                                  <div class="clearfix"> </div>
                                  <div class="row col-lg-12" >
                                      <div  class=" form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> <!-- style="color:#488aff" -->
                                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12" align="center" style="font-size:16px;">  Didn't Find your Requirement? </div>
                                        <div class="col-lg-8 col-xs-4 col-sm-4 col-md-9" align="center"> <button type="button" class="btncls btn-success" ng-click="postlead()">Click Here To Post a Buy Lead</button>  </div>                         
                                      </div> 
                                      
                                  </div>
                    </div>
                              <!-- /.buy -->
                          </div>
                          
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

            <div class="modal fade" id="remindModal" role="dialog">
              <div class="modal-dialog modal-md">
                <div class="modal-content">
                      
                  <form name="remindForm" ng-submit="remindmelead()">          
                  <div class="modal-header">
                      <div class="col-md-12 col-sm-6 text-center ">
                          <h5> Remind Me Later </h5>
                         <span >{{ message }} </span>
                      </div>
                  </div>
                  <div class="modal-body">
                      <div class="form-group">
                          <label> Select Remind Me Date : </label>
                          <input type="hidden" id="lead_id" ng-model="lead_id" >
                          <input type="hidden" id="lead_desc" ng-model="lead_desc" >
                          <input type="date" name="remind_date" id="remind_date" class="form-control input" ng-model="reminddate" min="2020-04-20" autocomplete="off">
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

        </div>
<!--  
-->

<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
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
</body>
</html>