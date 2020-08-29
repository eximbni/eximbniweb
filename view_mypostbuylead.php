<?php
    require("header.php");
?>
<style>
label
{
	color : #000;
	float : left;
}
td
{
	color : #000;
}
</style>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="leads" ng-controller="leadpostCtrl">
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
                      <li class="breadcrumb-item active">Buyer Post Lead</li>
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
        <div class="card card-success card-outline">
          <div class="card-header">
            <h3 class="card-title">Buyer Post Lead Details</h3>
            <br><span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> 
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">

            <table class="table">
            <tbody >
              <tr >
                <th> <label > Valid From : </label> </th>
                <td> {{ mybleads.posted_date | date : 'dd-MM-yyyy' }} </td>
                <th> <label > Reference Id : </label> </th> 
                <td> {{ mybleads.leadref_id }} </td>
                <th> <label > Quantity : </label> </th> 
                <td > {{ mybleads.quantity+" "+mybleads.uom }} </td>
                
              </tr>
              <tr>
                <th> <label > Valid To : </label> </th>                
                <td> {{ mybleads.expiry_date | date : 'dd-MM-yyyy' }} </td>
                <th> <label > Lead Description : </label> </th> 
                <td colspan="3"> {{ mybleads.description }} </td>                
               </tr>
               
<!--               <tr >
                <th> <label > Product : </label> </th> 
                <td colspan="3"> {{ mybleads.product }} </td>                
                <th > <label > Lead Description  </label> </th> 
                <td colspan="5"> {{ mybleads.description }} </td>
              </tr>  -->
              <tr align="center">  
                <th colspan="6"> <label > Responses  </label> </th> 
              </tr> 
              <tr align="center" ng-if="(respbuyleads==0)">  
                <td colspan="6" class="text-danger"><strong>  No Response Records Available </strong> </td>
              </tr>
              <tr ng-if="!(respbuyleads==0)">  
                <td colspan="6" >
                  
                  <table class="table table-borderless" width="100%" border="1" ng-repeat="respons in respbuyleads">
                    <tbody >
                      <tr scope="row">
                        <th scope="col"> <label > Name : </label> </th>
                        <td scope="col"> {{ respons.name}} </td>
                        <th scope="col"> <label > Business Name : </label> </th>                
                        <td scope="col"> {{ respons.business_name}} </td>

                      </tr>                  
                      <tr scope="row">  
                        <th> <label > Reponse Date : </label> </th> 
                        <td> {{ respons.response_date.substring(0, 10) | date : 'dd-MM-yyyy' }} </td>
                        <th> <label > Country : </label> </th> 
                        <td> {{ respons.country}} </td>                                              
                      </tr> 

                      <tr >                        
                        <th> <label > Response Quantity : </label> </th>
                        <td> {{ respons.response_quantity+" "+respons.uom}} </td>
                        <th> <label > Cost Per Unit  : </label> </th>                
                        <td> {{ respons.costperunit}} </td>
                      </tr> 
                      
                      <tr >                          
                        <th> <label > Total Cost  : </label> </th> 
                        <td> {{ respons.totalcost}} </td>
                        <th> <label > Chat : </label> </th> 
                        <td> <button type="button" class="col-4 btn btn-success" ng-click="add_chat(respons.users_id)"> Chat </button> </td>
                      </tr>                  

                      <tr >  
                        <th > <label > Lead Description  </label> </th> 
                        <td colspan="3" > {{ respons.description }} </td>
                      </tr> 

                 </table>

                </td>
              </tr>              
            </tbody>

            </table>

           <!-- /.row -->
          </div>
          <!-- /.card-body -->
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