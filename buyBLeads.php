<?php
    require("header.php");
?>
          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="leads" ng-controller="leadCtrl" style="color:#000">
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
                      <li class="breadcrumb-item active">Buyer Lead</li>
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
        <div class="card card-danger card-outline" >
          <div class="card-header">
            <h3 class="card-title">Buyer Lead Details</h3> 
            <br><span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> 
          </div>

          <div class="card-body table-responsive">
            <table class="table table-borderless">
            <tbody >
              <tr scope="row"  >
                <th scope="col"> <label > Lead Posted By : </label> </th>
                <td scope="col"> {{ getsbuylead.name }} </td>
                <th scope="col" > <label > Email Id : </label> </th>                
                <td scope="col" > {{ getsbuylead.email }} </td>
                <th scope="col" > <label > Lead Posted from Country : </label> </th> 
                <td scope="col"> {{ getsbuylead.countryname }} </td>
              </tr>

              <tr scope="row"  >
                <th scope="col"> <label > Valid From : </label> </th>
                <td scope="col"> {{ getsbuylead.posted_date }} </td>
                <th scope="col" > <label > To : </label> </th>                
                <td scope="col" > {{ getsbuylead.expiry_date }} </td>
                <th scope="col" > <label > Reference Id : </label> </th> 
                <td scope="col"> {{ getsbuylead.leadref_id }} </td>
              </tr>
              <tr>
                <th > <label > Chapter : </label> </th> 
                <td > {{ getsbuylead.chapter_id }} </td>
                <th > <label > Quantity : </label> </th> 
                <td > {{ getsbuylead.quantity+" "+getsbuylead.uom }} </td>
                <th > <label > HSN Code : </label> </th> 
                <td > {{ getsbuylead.hsn_id}} </td>                   
               </tr>
              <tr>
                <th> <label > Business Name  : </label> </th> 
                <td colspan="3"> {{ getsbuylead.business_name }} </td>
                <th> <label > Lead Description  </label> </th> 
                <td > {{ getsbuylead.description }} </td>                               
               </tr>               
          <!-- <tr >
                <th > <label > Country : </label> </th> 
                <td > {{ getsbuylead.country}} </td>  
                <th > <label > Lead Description  </label> </th> 
                <td colspan="5"> {{ getsbuylead.description }} </td>
              </tr>  -->
              <tr align="center">  
                <th colspan="6"> 
                  <button type="button" class="col-2 btn btn-danger" ng-click="respondBModel()"> Respond </button>
                  <button type="button" class="col-2 btn btn-danger" ng-click="buy_add_chat(getsbuylead.users_id)"> Chat </button>
                  <button type="button" class="col-2 btn btn-danger" ng-click="open_chat_sell11()"> Remind Me Later </button>
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

     <section class="content responseB">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-danger card-outline" >
          <div class="card-header">
            <h3 class="card-title card-success">Buy Lead Details</h3> 
            <br><span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> 
          </div>

          <div class="card-body table-responsive">
            <table class="table table-borderless">
              <form name="responseBForm" ng-submit="respondBSubmit()" >
              <tbody >
              <tr scope="row"  >
                <th scope="col"> <label > Lead Posted By : </label> </th>
                <td scope="col"> {{ getsbuylead.name }} </td>
                <th scope="col" > <label > Email Id : </label> </th>                
                <td scope="col" > {{ getsbuylead.email }} </td>
              </tr>

              <tr scope="row"  >                
                <th scope="col" > <label > Lead Posted from Country : </label> </th> 
                <td scope="col"> {{ getsbuylead.countryname }} </td>

                <th scope="col"> <label > Unit of Measure : </label> </th>
                <td scope="col"> {{ getsbuylead.uom }} </td>

              </tr>

              <tr scope="row"  >    

<!--                 <th scope="col"> <label > Requirement Type : </label> </th>
                <td scope="col">
                  <select class="form-control" ng-model="req_type" >
                    <option value=""> Select Requirement Type </option>
                    <option value="Immediate"> Immediate</option>
                    <option value="7 Days"> 7 Days</option>
                    <option value="30 Days"> 30 Days</option>
                    <option value="Regular"> Regular</option>
                  </select>
                </td> -->
           
                <th scope="col" > <label > Cost Per Unit : </label> </th>                
                <td scope="col" > <input class="form-control" type="text" name="costperunit" ng-model="costperunit" id="costperunit"required="required" > </td>
                <th scope="col" > <label > Total Cost : </label> </th> 
                <td scope="col"> <input class="form-control" type="text" name="totalcost" ng-model="totalcost" id="totalcost" required="required"> </td>

              </tr>

              <tr scope="row"  >                   
                <th > <label > Available Quantity : </label> </th> 
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
<!-- Template Modal -->
<div class="modal fade" id="templateModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
            <div class="col-md-12 col-sm-6 text-center ">
               <!--  <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" /> -->
            </div>           
        </div>
        <div class="modal-body" ng-controller="leadCtrl">
          <form name="templateForm">
            <div class="row form-group col-12">
                <label class="col-4">Select Template</label>
                <div class="form-group col-8" >
                  <select class="form-control select2-green col-10" ng-model="template" >
                    <option value="">Select Template</option>
                    <option ng-repeat="temp in templist" value="{{ temp.id}}">{{ temp.template_name }}</option>
                  </select>
                </div>
            </div>

            <div align="center">
              <button type="button" class="col-2 btn btn-light" ng-click="buyLeadRespond()">Preview</button>
              &nbsp;
              <button type="button" class="col-2 btn btn-success" ng-click="submitTemplate()">Use</button>

            </div>            
          </form>           
        </div>
      </div>
    </div>
  </div>
<!-- Template Modal -->

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