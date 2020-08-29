<?php

  include('header.php');
  // include('sidebar.php');
?>
        <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css.map">  
        <link rel="stylesheet" href="dist/css/select2.css"> 
 <style type="text/css">
   
.select2-purple .select2-dropdown .select2-search__field:focus,.select2-container--default .select2-purple .select2-search--inline .select2-search__field:focus,.select2-container--default .select2-purple.select2-dropdown .select2-search__field:focus,.select2-purple .select2-container--default .select2-dropdown .select2-search__field:focus,.select2-purple .select2-container--default .select2-search--inline .select2-search__field:focus,.select2-purple .select2-container--default.select2-dropdown .select2-search__field:focus{border:1px solid #b8a2e0}.select2-container--default .select2-purple .select2-results__option--highlighted,.select2-purple .select2-container--default .select2-results__option--highlighted{background-color:#f15822;color:#fff}.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected],.select2-container--default .select2-purple .select2-results__option--highlighted[aria-selected]:hover,.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected],.select2-purple .select2-container--default .select2-results__option--highlighted[aria-selected]:hover{background-color:#f15822;color:#fff}.select2-container--default .select2-purple .select2-selection--multiple:focus,.select2-purple .select2-container--default .select2-selection--multiple:focus{border-color:#f15822}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice{background-color:#f15822;border-color:#643ab0;color:#fff}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove{color:rgba(255,255,255,.7)}.select2-container--default .select2-purple .select2-selection--multiple .select2-selection__choice__remove:hover,.select2-purple .select2-container--default .select2-selection--multiple .select2-selection__choice__remove:hover{color:#fff}.select2-container--default .select2-purple.select2-container--focus .select2-selection--multiple;

</style>

<style type="text/css">

	p{
		color: #000;
		float: right;
	}
	.card-row {
        margin-bottom: 2%;
        border-bottom: 1px solid #1F3689;
        border-top: 1px solid #1F3689;
        border-right: 1px solid #1F3689;
        border-left: 1px solid #1F3689;
        
    }
    
    label{
        font-weight: 700;
        float: left;
        color: black;
    }
	
	.preview{
	    color: #000;
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

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}


</style>
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" ng-app="leads" ng-controller="leadCtrl">
  
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0 text-dark">Update Profile</h1> -->
            <span class="text-success"> {{ successmsg }} </span>
            <span class="text-danger"> {{ erromsg }} </span>
             
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Post Leads </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" id="postleadsection1">
      <div class="container-fluid">
       <div class="row" id="postleadsection3" >
          <div class="col-md-12 row">
            <div class="col-md-1"> &nbsp; </div>
            <div class="col-sm-4 col-md-6">
               <input type="button" name="dontknow" id="dontknow" value="I Don't Know HSCODES" class="btn btn-success" data-toggle="modal" data-target="#dontknowhscodeModal" >
            </div>
             <div class="col-md-1"> </div>
            <div class="col-sm-4 col-md-4">
               <input type="button" name="newhscode" id="newhscode" value="Add HSCODE" class="btn btn-success pull-right" data-toggle="modal" data-target="#addhscodeModal" >
            </div>          
          </div>
        </div>
        <div class="row"> &nbsp; </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline" >
                <div ng-show="showLoader" align="center">
	              <img src="/img/loader1.gif" width="100px" height="100px" > 
	            </div> 
			<form id="leadForm" name="leadForm">
              <div class="card-header">
                <h3 class="card-title">Post Leads</h3>
              </div>
            <div class="tab">            
              <div class="card-body">
                <div class="row know" style="display:none;">
                  <div class="row form-group col-md-12">
                      <div class="col-md-6">
                        <label>Chapter : </label> <span id="txchapter"></span>
                      </div>
                      <!-- /.form-group -->
                      <div class="col-md-6">
                        <label>Description : </label> <span id="txdesc"> </span> 
                        <!--<label>Level : </label> <span id="txlevel"> </span>-->
                          <input type="hidden" class="form-control" ng-model="category" id="categorytx">
    					  <input type="hidden" class="form-control" ng-model="chapter" id="chaptertx">
    					  <input type="hidden" class="form-control" ng-model="level" id="leveltx">
    					  <input type="hidden" class="form-control" ng-model="hscode" id="hscodetx">
    					  <input type="hidden" class="form-control" ng-model="description" id="descriptiontx">
    					  <input type="hidden" class="form-control" id="validate" value="0">
						  	
                      </div>
                  </div>
                </div>
                <div class="row">
					<div class="form-group col-md-6">
                    <label>Lead Type <span class="text-danger">*</span></label>
                    <div class="select2-green">
                      <select class="form-control" id="leadtype" ng-model="leadtype" ng-change="leadtypeSelected()" data-placeholder="Select Lead Type" data-dropdown-css-class="select2-green" style="width:100%" required>
                        <option value="">Select Lead Type</option>
                        <option value="Sell">Sell</option>
                        <option value="Buy">Buy</option>
                      </select>
                      
					  <span class="red-text" id="leadtype_error"></span>
					  </span>
                    </div>
                  </div>	
                  <div class="form-group dontknow col-md-6">
                    <label>Category <span class="text-danger">*</span></label>
                    <div class="select2-purple">
                      <select class="form-control" data-placeholder="Select Category" ng-change="categorySelected()" ng-model="category" id="category" style="width:100%" required>
                        <option value="">Select Category</option>
						<option ng-repeat="x in categories" value="{{ x.id}}"> {{ x.category_name }}</option>
                      </select>
					  <span class="red-text" id="category_error"></span>
                    </div>
                  </div>
                  <!-- /.form-group -->
                  
                </div>
                <div class="row">
					<div class="form-group dontknow col-md-6">
                    <label>Chapter <span class="text-danger">*</span></label>
                        <div class="select2-purple">
                            <select class="form-control" data-placeholder="Select Chapter" ng-change="chapterSelected()" ng-model="chapter" id="chapter" style="width:100%" required>
                                <option value="">Select Chapter</option>
                                <option ng-repeat="ch in chapterslist" value="{{ ch.id }}"> {{ ch.chapter_name }}</option>	
                            </select>
							<span class="red-text" id="chapter_error"></span>
                        </div>	
                  </div>
                  <div class="form-group dontknow col-md-6" >
                    <label>HS Code <span class="text-danger">*</span></label>
                    <div class="select2-purple">
                            <select class="form-control" data-placeholder="Select Chapter" ng-model="hscode" id="hscode" style="width:100%" required>
                                <option value="">Select HS Code</option>
                                <option ng-repeat="hsn in hsncodelist" value="{{ hsn.hscode  }}"> {{ hsn.MyColumn }}</option>	
                            </select>                        
                        
					  <span class="red-text" id="hscode_error"></span>
                    </div>
                  </div>
                  <div class="form-group know col-md-6" style="display:none;">
                    <label>HS Code <span class="text-danger">*</span></label>
                    <div class="select2-green">
                         <span id="txhscode"> </span> 
                    </div>
                  </div>            
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Unit of Measure <span class="text-danger">*</span></label>
					<div class="select2-green">
                      <select class="form-control" data-placeholder="Unit of Measure" data-dropdown-css-class="select2-green" ng-model="unitmeasure" id="unitmeasure" style="width:100%" required>
                        <option value="">Select Unit of Measure</option>
						<option ng-repeat="u in UOMlist" value="{{ u.id}}"> {{u.uom}}</option>
                      </select>
					  <span class="red-text" id="unitmeasure_error"></span>
                    </div>
					
                  </div>
                  <!-- /.form-group -->
				  <div class="form-group col-md-6">
                    <label>Expiry Date <span class="text-danger">*</span></label><span class="red-text" id="expiry_date_error"></span>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="far fa-calendar-alt"></i>
                        </span>
                      </div>
                      <input type="date" ng-model="expiry_date" id="expiry_date" class="form-control" id="datepicker" placeholder="Expiry Date" required>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <label>Quantity <span class="text-danger">*</span></label>
                      <input type="number" ng-model="quantity" id="quantity" class="form-control" placeholder="Numbers only" required>
					  <span class="red-text" id="quantity_error"></span>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group col-md-6">
                    <label>Price Model<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" data-placeholder="Select Price" ng-model="price_option" id="price_option" style="width:100%" required>
                                <option value="">Select Price Options</option>
                                <option value="FOB"> FOB </option>	
                                <option value="CIF"> CIF </option>	
                                <option value="CNF"> CNF </option>
                                <option value="EX_Factory"> Ex Factory </option>
                            </select>
							<span class="red-text" id="price_option_error"></span>
                        </div>	
                  </div>                  
                </div>

				
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Select Currency<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control" data-placeholder="Select Price" ng-model="currency" id="currency" style="width:100%" required>
                                <option value="">Select Currency</option>
                                <option ng-repeat="cur in Currencylist" value="{{ cur.id}}"> {{cur.code}}</option>
                            </select>
							<span class="red-text" id="price_option_error"></span>
                        </div>	
                  </div>    
                  <div class="form-group col-md-6">
                    <label>Price<span class="text-danger">*</span></label>
                    <div class="form-group">
                      <input type="text" ng-model="price_inusd" id="price_inusd" class="form-control" placeholder="Enter Price In USD" required>
					  <span class="red-text" id="price_inusd_error"></span>
                    </div>
                  </div>
                </div>
				<div class="row">
                  <div class="form-group col-md-6">
                    <label>International Quality Certifying Agency <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="inspection_auth" ng-model="inspection_auth" style="width:100%" required>
					  <span class="red-text" id="inspection_auth_error"></span>
                    </div>
                  </div>
				   				  
                 <div class="form-group col-md-6">
                    <label>Remark /Quality Assessments <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="remark" ng-model="remark" style="width:100%" required>
					  <span class="red-text" id="remark_error"></span>
                    </div>
                  </div>
                  
                </div>
				
				<div class="row">
				  <div class="form-group col-md-6">
                    <label> Special Instruction <span class="text-danger">*</span></label><span class="red-text" id="special_instruc_error"></span>
                    <div class="input-group">
                      <textarea class="form-control" ng-model="special_instruc" id="special_instruc" required> Write instruction </textarea>
                    </div>
                  </div>    
                  <div class="form-group col-md-6">
                    <label> Business Address <span class="text-danger">*</span></label> <span class="red-text" id="business_address_error"></span>
                    <div class="input-group">
                      <textarea class="form-control" ng-model="business_address" id="business_address" required> </textarea>

                    </div>
                  </div>               
                </div>
				
				<div class="row">
                 <!--div class="form-group col-md-6">
                    <label><input type="checkbox" name="indexed_prod" id="indexed_prod" onClick="checkindexdis()" > Indexed Product</label>
                    <div class="form-group">
                      <input type="text" ng-model="index_discount" id="index_discount" class="form-control" placeholder="Enter Indexed Discount In Percentage" readonly>
					  <span class="red-text" id="index_discount_error"></span>
                    </div>
                  </div--> 
                       
                  <div class="form-group col-md-6">
                    <label> Description <span class="text-danger">*</span></label><span class="red-text" id="description_error"></span>
                    <div class="input-group">
                      <textarea class="form-control" ng-model="description" id="description" required> Write Description </textarea>
                    </div>
                  </div>
                </div>
				
				
				
				
                
				
				
                
                <div class="row">
                  <div class="form-group col-md-12" align="right" style="float:right;">
                    <!--button type="button" class="btn btn-default" id="prevBtn" onclick="nextPrev(-1)">Previous</button-->
                    <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
                   <!-- <button type="button" class="btn btn-success pull-right">Submit</button>-->
                  </div>

                </div>
                
              </div><!-- /.card-body -->
	</div>
	<div class="tab">			<!-- Posted For Country -->
             <div class="card-body">
                <div class="row">
                  <div class="form-group col-md-12">
                        <p style="color:black;">Select your country where the lead has to be posted</p> 
                  </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Continent<span class="text-danger">*</span></label>
                        <div class="form-group">
							<select class="continent" multiple="multiple" data-placeholder="Select Continent" ng-model="continent_id" id="continent_id" ng-change="continentSelected()" style="width:100%" required>
                                <option value="">Select Continent</option>
                                <option ng-repeat="cont in continentList" value="{{ cont.id}}"> {{cont.gcontinent}}</option>
                            </select>
							<span class="red-text" id="continent_id_error"></span>
                        </div>	
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group col-md-6">
                    <label>Region<span class="text-danger">*</span></label>
                        <div class="form-group">
                            <select class="form-control region" multiple="multiple" data-placeholder="Select Region" ng-model="region_id" id="region_id" ng-change="regionSelected()" style="width:100%" required>
                                <option value="">Select Region</option>
                                <option ng-repeat="reg in regionlist" value="{{reg.id}}">{{reg.continent}}</option>
                            </select>
							<span class="red-text" id="region_id_error"></span>
                        </div>	
                  </div>                  
                </div>
				
				<div class="row">
                    <label>Country<span class="text-danger">*</span></label><br>
                        <div class="form-group">
                            <select class="select2 form-control" multiple="multiple" data-placeholder="Select Country" ng-model="country_id" id="country_id" style="width:100%" required>
                                <option value="">Select Country</option>
                                <option ng-repeat="contr1 in countrylist" value="{{contr1.country_id}}">{{contr1.name}}</option>
                            </select>
							<span class="red-text" id="continent_id_error"></span>
                        </div>	
                  </div>
                  <!-- /.form-group -->                  
                </div>			
                <!-- Posted For Country -->						
                
                <!-- Loading Port -->             
                
                <div class="card-body">                
                    <div class="row">                  
                        <div class="form-group col-md-12">                        
                            <p style="color:black;">Select Port Of Loading</p>                   
                        </div>                
                    </div>                                
                    <div class="row">                  
                        <div class="form-group col-md-6">                    
                            <label style="width:100%; text-align:left;">Country<span class="text-danger">*</span></label>                        
                            <div class="form-group">                            
                                <select class="form-control" data-placeholder="Select Country" ng-model="lport_country_id" id="lport_country_id" style="width:100%" required>                                
                                    <option value="">Select Country</option>                                
                                    <option ng-repeat="contr in Countrylist" value="{{contr.country_id}}">{{contr.name}}</option>
                                </select>							
                                <span class="red-text" id="continent_id_error"></span>                        
                            </div>	                  
                        </div>                                    
                        <div class="form-group col-md-6">                   
                            <label>Port TYpe<span class="text-danger">*</span></label>                       
                            <div class="form-group">                            
                                <select class="form-control" data-dropdown-css-class="select2-purple" data-placeholder="Select Port Type" ng-model="lport_type_id" id="lport_type_id" ng-change="lporttypeSelected()" style="width:100%" required>                                
                                    <option value="">Select Port Type</option>                                
                                    <option value="Air">Air</option> 
                                    <option value="Sea">Sea</option>
                                    <option value="Land">Land</option>
                                </select>							
                                <span class="red-text" id="port_type_id_error"></span>                        
                            </div>	                 
                        </div>                                  
                    </div>								
                    <div class="row">                    
                        <label>Port<span class="text-danger">*</span></label>                    
                        <div class="form-group">                        
                            <select class="form-control" data-placeholder="Select Port" ng-model="lport_id" id="lport_id" style="width:100%" required>                                
                                <option value="">Select Port</option>                            
                                <option ng-repeat="lport in lportlist" value="{{lport.port_code}}">{{lport.port}}</option>                           
                            </select>							
                            <span class="red-text" id="lport_error"></span>                        
                        </div>	                  
                    </div>                                                   
                </div>			
            <!-- Loading Port -->
			
			<!-- Destination Port -->             
                
                <div class="card-body">                
                    <div class="row">                  
                        <div class="form-group col-md-12">                        
                            <p style="color:black;">Select Port Of Destination</p>                   
                        </div>                
                    </div>                                
                    <div class="row">                  
                        <div class="form-group col-md-6">                    
                            <label>Country<span class="text-danger">*</span></label>                        
                            <div class="form-group">                            
                                <select class="form-control" data-placeholder="Select Country" ng-model="dport_country_id" id="dport_country_id" style="width:100%" required>                                
                                    <option value="">Select Country</option>                                
                                    <option ng-repeat="contr in Countrylist" value="{{contr.country_id}}">{{contr.name}}</option>
                                </select>							
                                <span class="red-text" id="continent_id_error"></span>                        
                            </div>	                  
                        </div>                                    
                        <div class="form-group col-md-6">                   
                            <label>Port Type<span class="text-danger">*</span></label>                       
                            <div class="form-group">                            
                                <select class="form-control" data-dropdown-css-class="select2-purple" data-placeholder="Select Port Type" ng-model="dport_type_id" id="dport_type_id" ng-change="dporttypeSelected()" style="width:100%" required>                                
                                    <option value="">Select Port Type</option>                                
                                    <option value="Air">Air</option> 
                                    <option value="Sea">Sea</option>
                                    <option value="Land">Land</option>
                                </select>							
                                <span class="red-text" id="port_type_id_error"></span>                        
                            </div>	                 
                        </div>                                  
                    </div>								
                    <div class="row">                    
                        <label>Port<span class="text-danger">*</span></label>                    
                        <div class="form-group">                        
                            <select class="form-control" data-placeholder="Select Port" ng-model="dport_id" id="dport_id" style="width:100%" required>                                
                                <option value="">Select Port</option>                            
                                <option ng-repeat="dport in dportlist" value="{{dport.port_code}}">{{dport.port}}</option>                           
                            </select>							
                            <span class="red-text" id="dport_error"></span>                        
                        </div>	                  
                    </div>                                                   
                </div>			
            <!-- Destination Port -->
                
                <!--div class="row">
                  <div class="form-group col-md-12">
                      <div class="row table-responsive">
                          <input class="form-control " type="text" ng-model="seachcountry" placeholder="Search" >
                          <table class="table" >
                              <thead> 
                                <tr><span id="country_error" class="text-danager"> </span>
                                    <th><input type="checkbox" name="selectall" id="selectall" class="form-input" onclick="checkfun()" > Select All </th>
                                    <th> Country Name  </th>
                                    <th>Export Policy  </th>
                                    <th>Import Policy  </th>
                                </tr>
                              </thead>
                              <tbody> 
                                <tr ng-repeat="country in countrieslist  | filter:seachcountry" ng-if="country.country_id!=null">
                                    <td> <input type="checkbox" name="countriescode" id="countriescode"  class="form-input countriescode" value="{{ country.country_id }}">  </td>
                                    <td>{{ country.name }} </td>
                                    <td>{{ country.country_id }}  </td>
                                    <td>{{ country.country_id }}</td>
                                </tr>
                              </tbody> 
                          </table>
                      </div>
                     
                  </div>
                </div-->
                <div class="row">
                  <div class="form-group col-md-12" align="right" style="float:right;">
                    <button type="button" class="btn btn-default" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
                  </div>

                </div>
                
        
</div>
<div class="tab">
             <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-12">
                       <h4 align="center" style="color:#000;"> Lead Preview  </h4> 
                    </div>
                </div>
				<div class="row">
                    <div class="form-group col-md-6">
                        <label> Business Name : </label> <span class="preview" id="business_name_pre"> {{ userprofile.business_name }} </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Business Address : </label> <span class="preview" id="business_address_pre">  </span>
                    </div>                
                </div>
				<div class="row">
                    <div class="form-group col-md-6">
                        <label> Business Email : </label> <span class="preview" id="business_email_pre"> {{ userprofile.email }}</span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Register Number : </label> <span class="preview" id="regdnumber_pre"> {{ userprofile.ieccode }} </span>
                    </div>                
                </div>
				<div class="row">
                    <div class="form-group col-md-6">
                        <label> Available Time : </label> <span class="preview" id="available_time_pre"> {{ userprofile.from_time+" To "+userprofile.to_time }} </span>
                    </div>
                    <div class="form-group col-md-6">
                       <label> Contact No : </label> <span class="preview" id="business_mobile"> {{ userprofile.mobile }} </span>
                    </div>                
                </div>
                <hr>
				<div class="row">
                    <div class="form-group col-md-6">
                        <label> Product HSCODE : </label> <span class="preview" id="hscode_pre"> {{ userprofile.hscode }} </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Lead Description : </label> <span class="preview" id="description_pre"> </span>
                    </div>                
                </div>
				<div class="row">
				    <div class="form-group col-md-6">
                        <label> UOM : </label> <span class="preview" id="unitmeasure_pre"> {{ userprofile.uom }} </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Quantity : </label> <span class="preview" id="quantity_pre"> {{ userprofile.quantity }} </span>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label> Price Option : </label> <span class="preview" id="price_option_pre"></span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Price Mentioned : </label> <span class="preview" id="price_inusd_pre"> </span>
                    </div>                
                </div>
				<div class="row">
                    <div class="form-group col-md-6">
                        <label> Loading Port : </label> <span class="preview" id="lport_id_pre"> </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Destination Port : </label> <span class="preview" id="dport_id_pre"> </span>
                    </div>                
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label> Loading Port Type : </label> <span class="preview" id="lport_type_pre"> </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label> Destination Port Type : </label> <span class="preview" id="dport_type_pre"> </span>
                    </div>                
                </div>
				<div class="row">
                    <div class="form-group col-md-6">
                        <label> Special Instruction : </label> <span class="preview" id="special_instruc_pre"> </span>
                    </div>                
                </div>
                <hr>
                <div class="row">
                  <div class="form-group col-md-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  id="doc1" name="doc1">
                      <label class="custom-file-label" for="customFile">Doc 1</label>
                    </div> 
                  </div>
                  <div class="form-group col-md-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  id="doc2" name="doc2">
                      <label class="custom-file-label" for="customFile">Doc 2</label>
                    </div> 
                  </div>
                  <div class="form-group col-md-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  id="doc3" name="doc3">
                      <label class="custom-file-label" for="customFile">Doc 3</label>
                    </div> 
                  </div>
                  <div class="form-group col-md-3">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input"  id="doc4" name="doc4">
                      <label class="custom-file-label" for="customFile">Doc 4</label>
                    </div> 
                  </div>                  
                </div>
                <hr>
				<div class="row">
                    <div class="form-group col-md-12">
                        <label><input type="checkbox" name="terms" id="terms" value="1"> I agree to terms and policies of lead posting in EXIMBNI </label>
                        <br><span class="text-danger" id="terms_error"> </span>
                    </div>
                </div>                
                <div class="row">
                  <div class="form-group col-md-12" align="right" style="float:right;">
                    <button type="button" class="btn btn-default" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" ng-click="submitRequest()" class="btn btn-success">Submit</button>
                  </div>

                </div>
                
              </div> 
</div>



<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>


				</form>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


<!-- Start Add HSCODE Modal -->

  <div class="modal fade" id="addhscodeModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
            <div class="text-center ">
                Add New HSCode
            </div> 
            <button type="button" class="close" data-dismiss="modal">&times;</button>          
        </div>
        <form action="#" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label class="form-label"> Category </label>
				<div class="form-group">
				  <select class="form-control" data-placeholder="Select Category" ng-change="categorySelected()" ng-model="category" id="categoryadd" style="width:100%">
                        <option value="">Select Category</option>
						<option ng-repeat="cat1 in categories" value="{{ cat1.id}}"> {{ cat1.category_name }}</option>
                      </select>
					  <span class="red-text" id="categoryadd_error"></span>
				</div>
            </div>
            <div class="form-group">
              <label class="form-label"> Chapter </label>
				<div class="form-group">
				    <select class="form-control" data-placeholder="Select Chapter" ng-change="chapterSelected()" ng-model="chapter" id="chapteradd" style="width:100%">
						<option value="">Select Chapter</option>
						<option ng-repeat="ch in chapterslist" value="{{ ch.id }}"> {{ ch.ch_description }}</option>	
					</select>
					<span class="red-text" id="chapteradd_error"></span>
				</div>
            </div> 
            <div class="form-group">
              <label class="form-label"> Product Name </label>
               <input type="text" class="form-control input" ng-model="product_nameadd" id="product_nameadd" placeholder="Product Name" required>
            </div>
			<span class="red-text" id="product_nameadd_error"></span>
            <div class="form-group">
              <label class="form-label"> Description </label>
              <div class="input-group">
                <textarea class="form-control" ng-model="addhscodedesc" id="addhscodedesc" required> More details for us to understand </textarea>
              </div>
			  <span class="red-text" id="addhscodedesc_error"></span>
            </div>          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-block" data-dismiss="modal">Close</button>
            <button type="button" ng-click="addProduct()" class="btn btn-success btn-block">Submit </button>
          </div>
        </form>   

        </div>
      </div>
    </div>

<!-- End Add HSCODE Modal -->

<!-- Start Don't Know HSCODE Modal -->

  <div class="modal fade" id="dontknowhscodeModal" role="dialog"  data-backdrop="static" data-keyboard="false" >
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <div class="text-center">
                <strong > I Don't Know HSCode </strong>
            </div>
             <button type="button" class="close" data-dismiss="modal">&times;</button>    
        </div>
        <form action="#" method="post">
          <div class="modal-body">
            <div class="form-group row">
              <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                <label class="form-label">Search Product Name </label>
              </div>
              <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                <input type="text" class="form-control search" ng-model="productname" id="searchprod" placeholder="Product Name" autocomplete="off" required>
				<span class="red-text" id="searchprod_error"></span>
              </div>
              <div class="col-lg-4 col-xs-12 col-sm-12 col-md-4">
                <!--input type="button" ng-click="searchProduct()" class="btn btn-success col-md-4" value="Search"-->
				<button type="button" ng-click="searchProduct()" class="btn btn-primary col-lg-4 col-xs-12 col-sm-12 col-md-4">Search</button>
              </div>
            </div><!--  form-group row -->   
              <div id="searchresult">
              <div class="row form-group" ng-if="products != 0"> 
                             <input type="hidden" class="search" placeholder="Search" ng-model="searchrestxt" >
                            <div class="row col-lg-12 col-xs-12 col-sm-12 col-md-12 " ng-repeat="searchres in products | filter:searchrestxt" > 
                                <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 card-row">
                              		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 " style=" background: rgb(243, 93, 93); color: white;"> HS CODE: {{ searchres.hscode }} </div>
                              		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 "><span style="color:#ff8c00;"> Description :  </span> {{ searchres.english }}  </div>
                              		<div class="row col-lg-12 col-xs-12 col-sm-12 col-md-12 ">
                              		    <div class="col-lg-3 col-xs-12 col-sm-12 col-md-12 "> 
                              		        <span style="color:#ff8c00;"> Chapter : </span> {{ searchres.chapter_id }}
                              		    </div> 
                              		    <div class="col-lg-9 col-xs-12 col-sm-12 col-md-12 ">
                                  		    <input type="hidden" id="hscode{{ searchres.id }}" ng-model="hscode1" value="{{ searchres.hscode }}">
                							<input type="hidden" id="chapter{{searchres.id}}" ng-model="chapter1" value="{{ searchres.chapter_id }}">
                							<input type="hidden" id="descri{{searchres.id}}" ng-model="descri1" value="{{ searchres.english }}">
                							<input type="hidden" id="level{{searchres.id}}" ng-model="level1" value="{{ searchres.level }}">
                							<input type="button" value="Select" class="btncls btn-primary" ng-click="gethscode(searchres.id)">                           		    
                              		    </div>
                              		</div>
                              		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 "><span style="color:#ff8c00;">Import Policy : &nbsp; </span><span ng-if="searchres.imp_policy"> {{ searchres.imp_policy }} </span> <span ng-if="!searchres.imp_policy"> NA </span> </div>	
                              		<div class="col-lg-12 col-xs-12 col-sm-12 col-md-12 "><span style="color:#ff8c00;">Export Policy : &nbsp; </span><span ng-if="searchres.exp_policy"> {{ searchres.exp_policy }} </span> <span ng-if="!searchres.exp_policy"> NA </span> </div>
                              		
                                </div>
                            </div>
                            <div class="clearfix"> </div>                    
              </div>
                        <div class="form-group row col-lg-12 col-xs-12 col-sm-12 col-md-12 "  ng-if="products==0" style="color:red" align="center" >
                                <div  class="col-lg-12 "> <!-- style="color:#488aff" -->
                              		<div class="col-12" style="font-size:16px;"> No Records Found... </div>
                              		<div class="clearfix"> </div>   
                              		<div class="col-3" > 
                              		    <input type="button" name="newhscode" id="newhscode" value="Add HSCODE" class="btncls btn-success " data-dismiss="modal" data-toggle="modal" data-target="#addhscodeModal" >
                              		</div>                      		
                              	</div> 
                                
                            </div>
            </div><!--  searchresult -->
          </div><!--  modal-body -->
        </form>           
        </div>
<!--         <div class="modal-footer">
          <button type="button" class="btn btn-block" data-dismiss="modal">Close</button>
        </div> -->
      </div>
    </div>

<!-- End Don't Know HSCODE Modal -->

<!-- New POST Lead -->
<!-- Main content -->
    <section class="content" id="postleadsection2" style="display: none">
      <div class="container-fluid">
		<form name="leadform">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
              <div class="card-header">
                <h3 class="card-title">Post Leads</h3>
              </div>
                <div class="card-body">
                    <div class="row">
    				
                      <div class="form-group col-md-3">
                        <label>Chapter : </label> <span id="txchapter"></span>
                        <input type="hidden" class="form-control" ng-model="chapterdont" id="chaptertx">
                      </div>
                      <div class="form-group col-md-3">
                        <label>HSCODE : </label> <span id="txhscode"> </span>
                          <input type="hidden" class="form-control" ng-model="hscodedont" id="hscodetx">   
                      </div>                  
                      <!-- /.form-group -->
                      <div class="form-group col-md-3">
                        <label>Description : </label> <span id="txdesc"> </span> 
                          <input type="hidden" class="form-control" ng-model="category" id="categorytx">
    					  <input type="hidden" class="form-control" ng-model="descdont" id="desctx">
                      </div>
    				  <div class="form-group col-md-3">
                        <label>Level : </label> <span id="txlevel"> </span> 
                          <input type="hidden" class="form-control" ng-model="leveldont" id="leveltx">
                      </div>
                    </div>
                    <div class="row">
                       <div class="form-group col-md-6">
                        <label>Lead Type <span class="">*</span></label>
                        <div class="select2-green">
                          <select class="form-control" ng-model="leadtype" id="leadtypedont" data-placeholder="Select Lead Type" data-dropdown-css-class="select2-green" style="width:100%">
                            <option value="">Select Lead Type</option>
                            <option value="sell">Sell</option>
                            <option value="buy">Buy</option>
                          </select>
    					  <span class="red-text" id="leadtypedont_error"></span>
                        </div>
                      </div>                 
                      <!-- /.form-group -->
                      <div class="form-group col-md-6">
                        <label>Unit of Measure <span class="">*</span></label>
                        <div class="select2-green">
                          <select class="form-control" data-placeholder="Unit of Measure" data-dropdown-css-class="select2-green" ng-model="unitmeasure" id="unitmeasuredont" style="width:100%">
                            <option value="">Select Unit of Measure</option>
    						<option ng-repeat="u in UOMlist" value="{{ u.id}}"> {{u.uom}}</option>
                          </select>
    					  <span class="red-text" id="unitmeasuredont_error"></span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-6">
                        <label>Expiry Date <span class="">*</span></label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="far fa-calendar-alt"></i>
                            </span>
                          </div>
                          <input type="date" ng-model="expiry_date" id="expirydate1" class="form-control" placeholder="Expiry Date">
    					  <span class="red-text" id="expirydate1_error"></span>
                        </div>
                        
                      </div>
                      <!-- /.form-group -->
                      <div class="form-group col-md-6">
                          <label>Quantity <span class="">*</span></label>
                          <input type="number" ng-model="quantity" id="quantity1" class="form-control" placeholder="Numbers only">
    					  <span class="red-text" id="quantity1_error"></span>
    				  </div>
                    </div>
                    <div class="row">
                      <!-- /.form-group -->
                      <div class="form-group col-md-12">
                        <label> Description </label>
                        <div class="input-group">
                          <textarea class="form-control" ng-model="description" id="description1"> Write description </textarea>
                        </div>
    					<span class="red-text" id="description1_error"></span>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"  id="doc1" name="doc1">
                          <label class="custom-file-label" for="customFile">Doc 1</label>
                        </div> 
                      </div>
                      <div class="form-group col-md-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"  id="doc2" name="doc2">
                          <label class="custom-file-label" for="customFile">Doc 2</label>
                        </div> 
                      </div>
                      <div class="form-group col-md-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"  id="doc3" name="doc3">
                          <label class="custom-file-label" for="customFile">Doc 3</label>
                        </div> 
                      </div>
                      <div class="form-group col-md-3">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input"  id="doc4" name="doc4">
                          <label class="custom-file-label" for="customFile">Doc 4</label>
                        </div> 
                      </div>                  
                    </div> 
                    <div class="row">
                       <button type="button" ng-click="submitRequestdont()" class="btn btn-success pull-right">Submit</button>
                    </div>                
                </div><!-- /.card-body -->

            </div>
          </div>
          <!-- /.col -->
        </div>
		</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

<!-- New POST Lead -->

<!-- OTP Modal -->
<div class="modal fade" id="optverifyModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <!--button type="button" class="close" data-dismiss="modal">&times;</button-->
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body" ng-controller="leadCtrl">
          <form name="verifyForm">
            <div class="form-group">
               <p align="center"> Enter The Verification code. We just sent you on your mobile </p>
               <p  align="center" class="red-text" > {{ verifymsg }} </p>
            </div>
           
            <div class="form-group">
               <input type="text" class="form-control input" name="votp" id="votp" ng-model="votp" placeholder="Enter OTP" ng-pattern="verify_code"  ng-required="true" autocomplete="off" >
               <span class="red-text" ng-if="verifyForm.votp.$error.required && verifyForm.votp.$dirty">OTP is a required</span>
               <span class="red-text" ng-show="verifyForm.votp.$error.pattern">Please enter OTP</span>
            </div>

            <div class="row">
               <button type="button" class="btn btn-info form-control" ng-click="verifyotp()" id="verifybtn">Verify</button>
               <!--button type="button" ng-click="verifyotp()" class="btn btn-success" id="verifybtn">Verify</button-->
		
            </div>  
            <p align="center" class="red-text" id="otptimer"> </p>
            <div class="form-group">
               <p align="center" class="red-text form-control"  ng-click='resendotp()'> Resend OTP </p>
            </div>            
          </form>           
        </div>
      </div>
    </div>
  </div>
<!-- OTP Modal -->

<!-- Template Modal -->
<div class="modal fade" id="templateModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
                <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
            </div>           
        </div>
        <div class="modal-body" ng-controller="leadCtrl">
          <form name="templateForm">
            <div class="form-group">
               <p align="center"> Select Template </p>
               <p  align="center" class="red-text" > {{ verifymsg }} </p>
            </div>
           
            <div class="form-group">
                <label>Select Template <span class="">*</span></label>
				<div class="select2-green">
				  <select class="form-control" data-placeholder="Select Template" ng-change="templateSelected()" ng-model="template" style="width:100%">
					<option value="">Select Template</option>
					<option ng-repeat="temp in templist" value="{{ temp.id}}">{{ temp.template_name }}</option>
				  </select>
				  <span class="red-text" id="template_error"></span>
				</div>
            </div>

            <div class="form-group">
               <button type="submit" class="btn btn-info form-control" ng-click="submitTemplate()">Use</button>
            </div>            
          </form>           
        </div>
      </div>
    </div>
  </div>
<!-- Template Modal -->



  </div>
  <!-- /.content-wrapper -->
<?php
  include('footer.php');
?>





<script type="text/javascript">
  $(document).ready(function(){
    //alert();
    $(".hsncode").hide();
    $(".hsnuserlist").hide();
    //$('.region').select2();
  });
  
  $(document).ready(function(){
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        //alert(maxDate);
        $('#datepicker').attr('min', maxDate);
    });
  });
  
  $(".modal").on("hidden.bs.modal", function(){
   // $("#searchresult").html("");
});
  
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()
	});

  function openchat(id){
    alert("Chat window is open for User "+id+". Please start chat with User "+id+".");
    //window.open("http://localhost/eximbniweb/dashboard.php");
  }

  function showhsn(chapterid){
    $(".hsncode").hide();
    $("#hsncode"+chapterid+"").show();
  }

  function showhsnusers(hsnid){
    //alert(hsnid);
    $(".hsnuserlist").hide();
    $("#hsnuserlist"+hsnid+"").show();

  }
  
/* function searchProduct(){
    if($("#productname").val() ==''){
      alert("Please Enter Product Name");
      $("#productname").focus();
      return false;
    }
    //$("#searchresult").show();
  } */

/*  function gethscode(id){
	alert(id);
    $('#dontknowhscodeModal').modal('toggle');
    $("#postleadsection1").hide();

    var hscode = $("#hscode"+id+"").val();
    var chapter = $("#chapter"+id+"").val();
	var chapter1 = chapter.substr(0, 2);
    var descri = $("#descri"+id+"").val();
	var level = $("#level"+id+"").val();
    alert(hscode+" HSCODE "+chapter1+" Chapter "+descri+" Level");   
    $("#txchapter").text(chapter1);
    $("#txhscode").text(hscode);
    $("#txdesc").text(descri);
    $("#txlevel").text(level);

    $("#chaptertx").val(chapter1);
    $("#hscodetx").val(hscode);    
    $("#desctx").val(descri);
    $("#leveltx").val(level);
    $("#postleadsection2").show();

  }*/
  
function showterm()
{
	$("#termsandcondition").css("display","block");
}
</script>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  fixStepIndicator(n)
}

function nextPrev(n) {
  var x = document.getElementsByClassName("tab");
  // console.log("nextPrev :", n);
  if(!validateForm()){
      console.log("Please fill out all * fields :");
      return false;
  }
   
  x[currentTab].style.display = "none";
  currentTab = currentTab + n;
  
 // console.log("currentTab :", currentTab);
  if (currentTab >= x.length) {
    console.log("Submited");
    return false;
  }else{
       showTab(currentTab);
  }
 
}

function validateForm() {

if($("#validate").val()=='0'){
	if($("#leadtype").val()=='')	{		$("#leadtype_error").text("Please select lead type");		$("#leadtype").focus();		return false;	}	else	{	    console.log("Lead Type=",$("#leadtype").val());		$("#leadtype_error").text('');	}	
	if($("#category").val()=='')
	{
		$("#category_error").text("Please select category");
		$("#category").focus();
		return false;
	}
	else
	{
	    console.log("Category=",$("#category").val());
		$("#category_error").text('');
	}		
	if($("#chapter").val()=='')
	{
		$("#chapter_error").text("Please select chapter");
		$("#chapter").focus();
		return false;
	}
	else
	{
	    console.log("Chapter=",$("#chapter").val());
		$("#chapter_error").text('');
	}
	
	
	if($("#hscode").val()=='')
	{
		$("#hscode_error").text("Please select hscode");
		$("#hscode").focus();
		return false;
	}
	else
	{
	    console.log("HS Code=",$("#hscode").val());
		$("#hscode_error").text('');
	}   
  
    $("#hscode_pre").text($("#hscode option:selected").html());
}else{
    
    $("#hscode_pre").text($("#hscodetx").val());
}
	
	
	
	if($("#unitmeasure").val()=='')
	{
		$("#unitmeasure_error").text("Please select unit measure");
		$("#unitmeasure").focus();
		return false;
	}
	else
	{
	    console.log("Unit=",$("#unitmeasure").val());
		$("#unitmeasure_error").text('');
	}
	
	if($("#expiry_date").val()=='')
	{
		$("#expiry_date_error").text("Please select expiry date");
		$("#expiry_date").focus();
		return false;
	}
	else
	{
	    console.log("Expiry Date=",$("#expiry_date").val());
		$("#expiry_date_error").text('');
	}
	
	if($("#quantity").val()=='')
	{
		$("#quantity_error").text("Please enter quantity");
		$("#quantity").focus();
		return false;
	}
	else
	{
	    console.log("Quantity=",$("#quantity").val());
		$("#quantity_error").text('');
	}
	
	if($("#price_option").val()=='')
	{
		$("#price_option_error").text("Please Select Price Options");
		$("#price_option").focus();
		return false;
	}
	else
	{
	    console.log("Price Modal=",$("#price_option").val());
		$("#price_option_error").text('');
	}	
	
	if($("#price_inusd").val()=='')
	{
		$("#price_inusd_error").text("Please Enter Price in USD");
		$("#price_inusd").focus();
		return false;
	}
	else
	{
	    console.log("Price In USD=",$("#price_inusd").val());
		$("#price_inusd_error").text('');
	}		
	
	if($("#currency").val()=='')
	{
		$("#currency_error").text("Please Select Currency");
		$("#currency").focus();
		return false;
	}
	else
	{
	    console.log("Currency=",$("#currency").val());
		$("#currency_error").text('');
	}
	
    if($('input:checkbox[name=indexed_prod]').is(':checked') == true){
    	if($("#index_discount").val()=='')
    	{
    		$("#index_discount_error").text("Please Enter Price in USD");
    		$("#index_discount").focus();
    		return false;
    	}
    	else
    	{
    	    console.log("Index Discount=",$("#index_discount").val());
    		$("#index_discount_error").text('');
    	}		
    }else {
    		$("#index_discount_error").text('');
    }	
	
	
	if($("#description").val()=='')
	{
		$("#description_error").text("Please Enter Description");
		$("#description").focus();
		return false;
	}
	else
	{
	    console.log("Description=",$("#description").val());
		$("#description_error").text('');
	}
	
	if($("#special_instruc").val()=='')
	{
		$("#special_instruc_error").text("Please Enter Special Instruction");
		$("#special_instruc").focus();
		return false;
	}
	else
	{
	    console.log("Special Instruction=",$("#special_instruc").val());
		$("#special_instruc_error").text('');
	}	
	
	if($("#business_address").val()=='')
	{
		$("#business_address_error").text("Please Enter Business Address");
		$("#business_address").focus();
		return false;
	}
	else
	{
	    console.log("Business Address=",$("#business_address").val());
		$("#business_address_error").text('');
	}	
	
	if($("#port_id").val()=='')
	{
		$("#port_id_error").text("Please Select Nearest Port");
		$("#port_id").focus();
		return false;
	}
	else
	{
		$("#port_id_error").text('');
	}			
	

	if($("#leadtype").val()=='Sell')
	{
     	if($("#inspection_auth").val()=='')
    	{
    		$("#inspection_auth_error").text("Please Select Inspection Auth");
    		$("#inspection_auth").focus();
    		return false;
    	}
    	else
    	{
    		$("#inspection_auth_error").text('');
    	}	
	}else {
    		$("#inspection_auth_error").text('');
    }	

		$("#hscode_pre").text($("#hscode option:selected").html());
		$("#unitmeasure_pre").text($("#unitmeasure option:selected").html());
	    $("#quantity_pre").text($("#quantity").val());
		$("#expiry_date_pre").text($("#expiry_date").val());
		$("#price_option_pre").text($("#price_option option:selected").html());		
		$("#price_inusd_pre").text($("#price_inusd").val());		
		$("#description_pre").text($("#description").val());
		$("#special_instruc_pre").text($("#special_instruc").val());		
		$("#business_address_pre").text($("#business_address").val());		
		$("#lport_id_pre").text($("#lport_id option:selected").html());
	    $("#dport_id_pre").text($("#dport_id option:selected").html());
	    $("#lport_type_pre").text($("#lport_type_id option:selected").html());
	    $("#dport_type_pre").text($("#dport_type_id option:selected").html());
	    
	return true;
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  x[n].className += " active";
}

function checkfun(){
   // console.log("select all ", $('input:checkbox[name=selectall]').is(':checked'));
    if($('input:checkbox[name=selectall]').is(':checked') == true){
        $('input:checkbox[name=countriescode]').attr('checked','checked');
    }else{
        $('input:checkbox[name=countriescode]').removeAttr('checked');
    }
}

function checkindexdis(){
   // console.log("select all ", $('input:checkbox[name=selectall]').is(':checked'));
    if($('input:checkbox[name=indexed_prod]').is(':checked') == true){
        $('#index_discount').attr("readonly", false);
        $('#index_discount').focus();
        
    }else{
        $('#index_discount').attr("readonly", true);
        $('index_discount').attr('placeholder', 'Indexed Discount In Percentage');
    }
}

</script>
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