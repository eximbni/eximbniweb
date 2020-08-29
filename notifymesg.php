<?php
    require("header.php");
?>
<style type="text/css">
	.card-row {
        margin-bottom: 2%;
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
                      <li class="breadcrumb-item"><a href="dashboard.php">Notification</a>
                      </li>
                      <li class="breadcrumb-item active">Admin Notification</li>
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
          <div class="card-header" style="background: #fd7e14; color: #ffffff;">
            <h3 class="card-title" align="center" >Admin Notification</h3>
          </div>
          <!-- /.card-header -->
		 
          <div class="card-body" ng-controller="userCtrl">
                    <div ng-show="showLoader" align="center">
	                    <img src="/img/loader1.gif" width="100px" height="100px" > 
	               </div> 
            <div class="col-md-12 card-row" ng-repeat="usernotify in usernotification | orderBy : id : false" >
                <div class="row col-12">
                     <label style="color:#0e0e0ec9">{{ usernotify.title }}</label>
                      <span class="fdate" >  {{ usernotify.created | date:'dd-MM-yyyy' }}</span> 
                </div>
                <div class="row col-12 card-text">
                    {{ usernotify.notification }}
                </div>
                <hr/>
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