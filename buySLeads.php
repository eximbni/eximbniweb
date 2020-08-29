<?php
    require("header.php");
?>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="leads" ng-controller="leadCtrl">
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
                      <li class="breadcrumb-item active">Seller Lead </li>
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
            <h3 class="card-title">Seller Lead Details</h3>
            <br><span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> 
          </div>

          <div class="card-body table-responsive">
            <table class="table table-borderless" style="color:#000">
            <tbody >
              <tr scope="row"  >
                <th scope="col"> <label > Lead Posted By : </label> </th>
                <td scope="col"> {{ getresbuysellid.name }} </td>
                <th scope="col" > <label > Email Id : </label> </th>                
                <td scope="col" > {{ getresbuysellid.email }} </td>
                <th scope="col" > <label > Lead Posted from Country : </label> </th> 
                <td scope="col"> {{ getresbuysellid.countryname }} </td>
              </tr>

              <tr scope="row"  >
                <th scope="col"> <label > Valid From : </label> </th>
                <td scope="col"> {{ getresbuysellid.posted_date }} </td>
                <th scope="col" > <label > To : </label> </th>                
                <td scope="col" > {{ getresbuysellid.expiry_date }} </td>
                <th scope="col" > <label > Reference Id : </label> </th> 
                <td scope="col"> {{ getresbuysellid.leadref_id }} </td>
              </tr>
              <tr>
                <th > <label > Chapter : </label> </th> 
                <td > {{ getresbuysellid.chapter_id }} </td>
                <th > <label > Quantity : </label> </th> 
                <td > {{ getresbuysellid.quantity+" "+getresbuysellid.uom }} </td>
                <th > <label > HSN Code : </label> </th> 
                <td > {{ getresbuysellid.hsn_id}} </td>                  
               </tr>
              <tr>
                <th> <label > Business Name  : </label> </th> 
                <td colspan="3"> {{ getresbuysellid.business_name }} </td>
                <th > <label > Lead Description  </label> </th> 
                <td > {{ getresbuysellid.description }} </td>
              </tr>               
<!--               <tr >  
                <th > <label > Country : </label> </th> 
                <td > {{ getresbuysellid.country}} </td>                  
                <th > <label > Lead Description  </label> </th> 
                <td colspan="5"> {{ getresbuysellid.description }} </td>
              </tr> --> 
              <tr align="center">  
                <th colspan="6"> 
                  <button type="button" class="col-2 btn btn-success" ng-click="respondSModel()"> Respond </button>
                  <button type="button" class="col-2 btn btn-success" ng-click="buy_add_chat(getresbuysellid.users_id)"> Chat </button>
                  <button type="button" class="col-2 btn btn-success" ng-click="open_chat_sell11()"> Remind Me Later </button>
                </th> 
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

     <section class="content responseS" style="color:#000">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-success card-outline" >
          <div class="card-header">
            <h3 class="card-title card-danger">Sell Lead Details</h3> 
            <br><span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> 
          </div>

          <div class="card-body table-responsive">
            <table class="table table-borderless">
              <form name="responseBForm" ng-submit="respondSSubmit()" >
              <tbody >
              <tr scope="row"  >
                <th scope="col"> <label > Lead Posted By : </label> </th>
                <td scope="col"> {{ getresbuysellid.name }} </td>
                <th scope="col" > <label > Email Id : </label> </th>                
                <td scope="col" > {{ getresbuysellid.email }} </td>
              </tr>

              <tr scope="row"  >                
                <th scope="col" > <label > Lead Posted from Country : </label> </th> 
                <td scope="col"> {{ getresbuysellid.countryname }} </td>

                <th scope="col"> <label > Requirement Type : </label> </th>
                <td scope="col">
                  <select class="form-control" ng-model="req_type" required="required" >
                    <option value=""> Select Requirement Type </option>
                    <option value="Immediate"> Immediate</option>
                    <option value="7 Days"> 7 Days</option>
                    <option value="30 Days"> 30 Days</option>
                    <option value="Regular"> Regular</option>
                  </select>
                </td>

              </tr>

              <tr>
                <th > <label > Required Quantity : </label> </th> 
                <td > <input class="form-control" type="text" name="response_quantity" ng-model="response_quantity" id="response_quantity" required="required"> </td>

                <th > <label > Description : </label> </th> 
                <td > <input class="form-control" type="text" name="description" ng-model="description" id="description"> </td>
            
               </tr>

              <tr align="center">  
                <th colspan="4"> 
                  <button type="submit" class="col-2 btn btn-success" > Submit </button>
                </th> 
              </tr> 
             
            </tbody>
            </form>
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
    require("footer.php");
?>