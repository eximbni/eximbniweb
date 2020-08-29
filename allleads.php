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
  <div class="content-wrapper" ng-app="leads" ng-controller="leadCtrl" data-ng-init="init()">
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
              <li class="breadcrumb-item active">Leads</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    
	<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
               
              <div class="card-header p-2">
                  <div class="row form-control col-lg-12 col-xs-12 col-sm-12 col-md-12" style=" background: rgb(243, 93, 93); color: white;" align="center"> My Credit Balance {{totalcredits}}</div> 
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#sell" data-toggle="tab"><!--<img src="../img/leads/seller.svg" class="lead-type-img" /> -->Sell Leads </a></li>
                      <li class="nav-item"><a class="nav-link" href="#buy" data-toggle="tab"> <!--<img src="../img/leads/buyer.svg" class="lead-type-img" />--> Buy Leads</a></li>
                    </ul>
              </div><!-- /.card-header -->
              <div class="card-body" >
                <div class="tab-content">
                <div ng-show="showLoader" align="center">
	              <img src="/img/loader1.gif" width="100px" height="100px" > 
	            </div>  
                    <div class="active tab-pane" id="sell">
                        <div class="card-body" style="color:#000">
                            <input class="search" placeholder="Search" ng-model="sellsearch" >
                            <p style="text-align:justify; font-size:16px; color:black;"><br> Click <strong>Heart</strong> <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ></i> button if you would like to add Lead's <strong>HSCODE</strong> as your favorite</p>
                            <span class="text-success"> {{ allsuccesssleadmsg }}</span>
                            <span class="text-danger"> {{ allerrorsleadmsg }}</span> 
                            <div class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" ng-repeat="selllead1 in allsellleads | filter:sellsearch" ng-if="allsellleads != 0">
                                
                          	<div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" ng-if="selllead1.laterstate == todayDate">
                          		<div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                          		    <div class="col-3" >
                          		      <span style="background:rgb(255, 94, 0); color:#fff"> Todays Reminder  </span>
                          		    </div>
                          		    <div class="col-4">
                          		       Lead ID:   {{ selllead1.leadref_id }}
                          		    </div>
                          		    <div class="col-4">
                          		        HScode:  {{ selllead1.hsn_id }} 
                          		    </div>
                           		    <div class="col-1" >
                          		       <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ng-if="selllead1.hsstate==1"></i> 
                          		       <span class="fa-1x far fa-heart js-filler" style="font-size: 1.3em;" ng-click="mysfav(selllead1.hsn_id)" ng-if="selllead1.hsstate==0"></span>
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
                          		    <b style="color:#ffa500;" >Import Policy : &nbsp;</b><button type="button" class="btncls1" ng-click="import_policy(selllead1.hsn_id,selllead1.country_id)"style="background-color: #DAA520; color:#fff;" >view</button> 
                          		</div>
                          		

                          		<div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" > 
                              		    <input type="hidden" id="chapter_{{ selllead1.id }}" value="{{ selllead1.chapter_id }}">
        							    <input type="hidden" id="leadref_id_{{ selllead1.id }}" value="{{ selllead1.leadref_id }}">
        							    <button type="button" class="btncls1" ng-click="skipslead(selllead1.id)" style="background-color: rgb(255, 94, 0); color:#fff;">Skip Lead</button>
    							    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" >
                                        <button type="button" class="btncls1"  ng-click="buyslead(selllead1.id)" style="background-color: #488aff; color:#fff;">Buy Lead</button>                     		        
                          		    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-4" >
                          		        <button type="button" class="btncls1" ng-click="remind(selllead1.id,selllead1.description,selllead1.expiry_date)" style="background-color: #DAA520; color:#fff;" >Remind Me Later</button>   
                          		    </div>  
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		</div>
                          	</div>                          	
                          	
                          	<div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" ng-if="selllead1.laterstate !== todayDate || selllead1.laterstate === null">
                          	   
                          		<div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                          		    <div class="col-5">
                          		        Lead ID:  {{ selllead1.leadref_id }}
                          		    </div>
                          		    <div class="col-6">
                          		        HScode:  {{ selllead1.hsn_id }} 
                          		    </div>
                           		    <div class="col-1" >
                          		       <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ng-if="selllead1.hsstate==1"></i> 
                          		       <!--i class="fa fa-heart fa-lg" aria-hidden="true" ng-click="mysfav(selllead1.hsn_id)" ng-if="selllead1.hsstate==0"></i-->
                          		       <span class="fa-1x far fa-heart js-filler" style="font-size: 1.3em;" ng-click="mysfav(selllead1.hsn_id)" ng-if="selllead1.hsstate==0"></span>
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
                          		    <b style="color:#ffa500;" >Import Policy : &nbsp;</b><button type="button" class="btncls1" ng-click="import_policy(selllead1.hsn_id,selllead1.country_id)"style="background-color: #DAA520; color:#fff;" >View</button> 
                          		</div>

                          		<div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" > 
                              		    <input type="hidden" id="chapter_{{ selllead1.id }}" value="{{ selllead1.chapter_id }}">
        							    <input type="hidden" id="leadref_id_{{ selllead1.id }}" value="{{ selllead1.leadref_id }}">
        							    <button type="button" class="btncls1" ng-click="skipslead(selllead1.id)" style="background-color: rgb(255, 94, 0); color:#fff;">Skip Lead</button>
    							    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" >
                                        <button type="button" class="btncls1"  ng-click="buyslead(selllead1.id)" style="background-color: #488aff; color:#fff;">Buy Lead</button>                     		        
                          		    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-4" >
                          		        <button type="button" class="btncls1" ng-click="remind(selllead1.id,selllead1.description,selllead1.expiry_date)" style="background-color: #DAA520; color:#fff;" >Remind Me Later</button>   
                          		    </div>  
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		</div>
                          	</div>
                          </div>
                          
                          	<div class="clearfix" ng-if="allsellleads == 0"> 
                          	    <p style="color:red">There are no leads</p>
                          	</div>
                            <div class="row col-lg-12" >
                                <div  class=" form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> <!-- style="color:#488aff" -->
                              		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12" align="center" style="font-size:16px;color:black;">  Didn't Find your Requirement? </div>
                              		<div class="col-lg-8 col-xs-4 col-sm-4 col-md-9" align="center"> <button type="button" class="btncls btn-success" ng-click="postlead()">Click Here To Post a Sell Lead</button>  </div>                      		
                              	</div> 
                                
                            </div>
    					</div>
                        <!-- /.post -->
                        </div>
                    
                    <div class="tab-pane" id="buy">
                        <div class="card-body"  style="color:#000">
                            <input class="search" placeholder="Search" ng-model="buysearch" >
                            <p style="text-align:justify; font-size:16px;color:black;"><br> Click <strong>Heart</strong> <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ></i> button if you would like to add Lead's <strong>HSCODE</strong> as your favorite</p>
            
                            <span class="text-success"> {{ allsuccessbuyleadmsg }}</span>
                            <span class="text-danger"> {{ allerrorbuyleadmsg }}</span> 
                            <div class="row col-lg-12" ng-repeat="buyl in allbuyleads | filter:buysearch" ng-if="allbuyleads != 0"> 
                            
                          	<div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" ng-if="buyl.laterstate == todayDate">
                          		<div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                          		    <div class="col-3" >
                          		      <span style="background:rgb(255, 94, 0); color:#fff"> Todays Reminder  </span>
                          		    </div>  
                          		    <div class="col-4">
                          		        Lead ID:  XXXXXXXXXX <!-- {{ buyl.leadref_id }} -->
                          		    </div>
                          		    <div class="col-4">
                          		        HScode:  {{ buyl.hsn_id }} 
                          		    </div>
                           		    <div class="col-1">
                          		       <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ng-if="buyl.hsstate==1"></i> 
                          		       <!--i class="fa fa-heart fa-lg" aria-hidden="true" ng-click="mybfav(buyl.hsn_id)" ng-if="buyl.hsstate==0"></i-->
                          		       <span class="fa-1x far fa-heart js-filler" style="font-size: 1.3em;" ng-click="mybfav(buyl.hsn_id)" ng-if="buyl.hsstate==0"></span>
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
                          		    <b style="color:#ffa500;" >Export Policy : </b><button type="button" class="btncls1" ng-click="export_policy(buyl.hsn_id,buyl.country_id)"style="background-color: #DAA520; color:#fff;" >view</button>                     		
                          		</div>
                          		<div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" > 
                              		    <input type="hidden" id="chapter_{{ buyl.id }}" value="{{ buyl.chapter_id }}">
        							    <input type="hidden" id="leadref_id_{{ buyl.id }}" value="{{ buyl.leadref_id }}">
        							    <button type="button" class="btncls1" ng-click="skipslead(buyl.id)" style="background-color: rgb(255, 94, 0); color:#fff;">Skip Lead</button>
    							    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" >
                                        <button type="button" class="btncls1"  ng-click="buyslead(buyl.id)"  style="background-color: #488aff; color:#fff;">Buy Lead</button>                     		        
                          		    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-4" >
                          		        <button type="button" class="btncls1" ng-click="remind(buyl.id,buyl.description,buy1.expiry_date)"style="background-color: #DAA520; color:#fff;" >Remind Me Later</button>   
                          		    </div>  
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		</div>
                          	</div>
                          	
                          	<div class="form-group col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row" ng-if="buyl.laterstate !== todayDate || buyl.laterstate === null" >
                          		<div  class="row col-lg-12 col-xs-12 col-sm-12 col-md-12" style="background: #fff; color: rgb(243, 93, 93); border-bottom: 1px solid grey;">
                          		    <div class="col-5">
                          		        Lead ID:  XXXXXXXXXX <!-- {{ buyl.leadref_id }} -->
                          		    </div>
                          		    <div class="col-6">
                          		        HScode:  {{ buyl.hsn_id }} 
                          		    </div>
                           		    <div class="col-1">
                          		       <i class="fa fa-heart fa-lg" aria-hidden="true" style="color:red;" ng-if="buyl.hsstate==1"></i> 
                          		       <!--i class="fa fa-heart fa-lg" aria-hidden="true" ng-click="mybfav(buyl.hsn_id)" ng-if="buyl.hsstate==0"></i-->
                          		       <span class="fa-1x far fa-heart js-filler" style="font-size: 1.3em;" ng-click="mybfav(buyl.hsn_id)" ng-if="buyl.hsstate==0"></span>
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
                          		    <b style="color:#ffa500;" >Export Policy : </b><button type="button" class="btncls1" ng-click="export_policy(buyl.hsn_id,buyl.country_id)"style="background-color: #DAA520; color:#fff;" >View</button>                        		
                          		</div>
                          		<div  class="row form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> 
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" > 
                              		    <input type="hidden" id="chapter_{{ buyl.id }}" value="{{ buyl.chapter_id }}">
        							    <input type="hidden" id="leadref_id_{{ buyl.id }}" value="{{ buyl.leadref_id }}">
        							    <button type="button" class="btncls1" ng-click="skipslead(buyl.id)" style="background-color: rgb(255, 94, 0); color:#fff;">Skip Lead</button>
    							    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-3" >
                                        <button type="button" class="btncls1"  ng-click="buyblead(buyl.id)"  style="background-color: #488aff; color:#fff;">Buy Lead</button>                     		        
                          		    </div>
                          		    <div class="col-lg-2 col-xs-12 col-sm-12 col-md-4" >
                          		        <button type="button" class="btncls1" ng-click="remind(buyl.id,buyl.description,buyl.expiry_date)"style="background-color: #DAA520; color:#fff;" >Remind Me Later</button>   
                          		    </div>  
                          		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-1"> </div>
                          		</div>
                          	</div>
                            
                           </div>
                          
                          	<div class="clearfix" ng-if="allbuyleads == 0"> 
                          	    <p style="color:red">There are no leads</p>
                          	</div>
                            <div class="row col-lg-12" >
                                <div  class=" form-group col-lg-12 col-xs-12 col-sm-12 col-md-12"> <!-- style="color:#488aff" -->
                              		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12" align="center" style="font-size:16px;color:black;">  Didn't Find your Requirement? </div>
                              		<div class="col-lg-8 col-xs-4 col-sm-4 col-md-9" align="center"> <button type="button" class="btncls btn-success" ng-click="postlead()">Click Here To Post a Sell Lead</button>  </div>                      		
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
    <!-- /.content -->

<!-- Start Remind Me Modal -->

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

<!-- End Remind Me Modal -->


  </div>
  <!-- /.content-wrapper -->
<script type="text/javascript">
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

