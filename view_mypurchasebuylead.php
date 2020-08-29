<?php
    require("header.php");
?><style>label{	color : #000;	float : left;}td{	color : #000;}</style>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="leads" ng-controller="leadpurchCtrl">
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
                      <li class="breadcrumb-item active">Buyer Purchase Lead </li>
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
        <div class="card card-success card-outline" >
          <div class="card-header">
            <h3 class="card-title">Buyer Purchase Lead Details</h3>
            <br><span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> 
          </div>
          <!-- /.card-header -->

          <div class="card-body table-responsive">
            <table class="table table-borderless">
            <tbody >
              <tr scope="row" >  
               <td scope="col" colspan="6"> <!-- <img class="pro-img" src="../../assets/imgs/user.jpg"><br> --> </td>
              </tr> 
              <tr scope="row"  >
                <th scope="col"> <label > Lead Posted By : </label> </th>
                <td scope="col"> {{ purbuyleads.name }} </td>
                <th scope="col" > <label > Email Id : </label> </th>                
                <td scope="col" > {{ purbuyleads.email }} </td>
                <th scope="col" > <label > Lead Posted from Country : </label> </th> 
                <td scope="col"> {{ purbuyleads.countryname }} </td>                
              </tr>

              <tr scope="row"  >
                <th scope="col"> <label > Valid From : </label> </th>
                <td scope="col"> {{ purbuyleads.posted_date }} </td>
                <th scope="col" > <label > To : </label> </th>                
                <td scope="col" > {{ purbuyleads.expiry_date }} </td>
                <th scope="col" > <label > Reference Id : </label> </th> 
                <td scope="col"> {{ purbuyleads.leadref_id }} </td>
              </tr>
              <tr>
                <th > <label > Chapter : </label> </th> 
                <td > {{ purbuyleads.chapter_id }} </td>
                <th > <label > Quantity : </label> </th> 
                <td > {{ purbuyleads.quantity+" "+purbuyleads.uom }} </td>
                <td colspan="2">
                  <button type="button" class="col-4 btn btn-success" ng-click="add_chat(purbuyleads.users_id)"> Chat </button>
                </td>
                <!-- <th > <label > Country : </label> </th> 
                <td > {{ purbuyleads.country}} </td>    -->                
               </tr>
              <tr>
                <th> <label > Business Name  : </label> </th> 
                <td colspan="5"> {{ purbuyleads.business_name }} </td>                   
               </tr>               
              <tr >  
                <th > <label > Lead Description  </label> </th> 
                <td colspan="5"> {{ purbuyleads.description }} </td>
              </tr> 
              <tr align="center">  
                <th colspan="6"> <label > Responses  </label> </th> 
              </tr> 
              <tr align="center" ng-if="(purrespsellleads==0)">  
                <td colspan="6" class="text-danger"><strong>  No Response Records Available </strong> </td>
              </tr>
              <tr ng-if="!(purrespsellleads==0)">  
                <td colspan="6" >
                  
                  <table class="table table-borderless" width="100%" border="1" ng-repeat="respons in purrespbuyleads">
                    <tbody >
                
                      <tr scope="row">  
                        <th scope="col"> <label > Responded on : </label> </th> 
                        <td scope="col"> {{ respons.reponse_date}} {{ respons.response_date.substring(0, 10) | date : 'dd-MM-yyyy' }}</td>
                        <th scope="col"> <label > Country : </label> </th> 
                        <td scope="col"> {{ respons.country}} </td>                                              
                      </tr>

                      <tr scope="row">
                        <th > <label > Name : </label> </th>
                        <td > {{ respons.name}} </td>
                        <th > <label > Business Name : </label> </th>                
                        <td > {{ respons.business_name}} </td>

                      </tr> 
                      <tr >                        
                        <th> <label > Requirement Quantity : </label> </th>
                        <td> {{ respons.response_quantity+" "+respons.uom}} </td>
                        <th> <label > Requirement Type  : </label> </th>                
                        <td> {{ respons.req_type}} </td>
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