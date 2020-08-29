  <?php

  include('header.php');
  // include('sidebar.php');
?>
<style>	label{ color : #000; float : left;	}	.text-center { color : #000; } span { color : #000; float : left;}</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-app="WebinarPage" ng-controller="webCtrl">
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
              <li class="breadcrumb-item active">Webinar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <section class="content">
      <div class="container-fluid">
        <form class="form-horizontal">
        <div class="card card-success card-outline">
          <div class="card-header">
            <h3 class="card-title" style="color: black; float: left;">Scheduled A Webinar</h3><br/>
			        <span class="text-success"> {{ successresmsgs }} {{ invitesucessmsg }}</span> 
              <span class="text-danger"> {{ inviteerrorsmsg }} </span>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
                <div class="form-group col-md-6" style="text-align: left;">
                  <label style="color: #333; text-align: left;">Title</label>
                  <input type="text" name="webinartitle" ng-model="title" class="form-control" placeholder="Title">
                </div>
                <!-- /.form-group -->
                <div class="form-group col-md-6" style="text-align: left;">
                  <label style="color: #333; text-align: left;">Webinar Date</label>
                  <div class="input-group">
                    <!--div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div-->
                    <input type="date" class="form-control" id="datepicker" ng-model="webinardate">
                  </div>


                </div>
            </div>
              <div class="row">
                <div class="col-md-6" style="text-align: left;">
                  <label style="color: #333">Webinar Time</label>
                  <div class="row">
                  <div class="col-md-6">
                  <select class="form-control custom-select " ng-model="webinarhr"> 
                    <option value=''> Hours </option>
                    <?php 
                      for($i=0; $i< 24;$i++){
                        if($i < 10){
                          $ii = '0'.$i;
                        }else{
                          $ii = $i;
                        }
                    ?>
                    <option value='<?= $ii ?>'><?= $ii ?></option>
                    <?php 
                      }
                    ?>

                  </select>
                    </div>
                    <div class="col-md-6">
                      <select class="custom-select" ng-model="webinarmin"> 
                    <option value=''> Minutes </option>
                    <?php 
                      for($j=0; $j< 60;$j++){
                        if($j < 10){
                          $jj = '0'.$j;
                        }else{
                          $jj = $j;
                        }
                    ?>
                    <option value='<?= $jj ?>'><?= $jj ?></option>
                    <?php 
                      }
                    ?>

                  </select> 
                    </div>
                  </div>
                </div>

                <div class="col-md-6" style="text-align: left;">
                      <label style="color: #333">Duration</label>
                      <input type="text" name="webduration" id="timepicker" ng-model="webduration" class="form-control" placeholder=" in minutes">
                </div>
              </div>

           <!-- /.row -->
            <div class="row">
                <div class="form-group col-md-12" style="text-align: left;">
                  <label style="color: #333;">Description</label>
                  <textarea class="form-control" name="description" id="description" ng-model="webdiscription">
                  </textarea>
                 
                </div>
            </div>           
          
            <div class="row">
                <div class="form-group col-md-12">
                    <button type="button" class="btn btn-danger">Cancel</button>
                    <button class="btn pull-right btn-success" ng-click="submitRequest()">Submit</button>
                </div>
             </div>          
          <!-- /.card-body -->
          </div>
        </div>
        </form>
       </div>
     <!--   <div class="col-md-1 col-sm-2"> &nbsp;</div>      
      </div> --><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
          <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title" style="color: black;">Scheduled Webinar Details</h3>
              <span class="text-danger" id="joinerrorsmsg">   </span>
              <span class="text-success" id="joinsuccesssmsg">   </span>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="mypackagedetails" class="table table-bordered table-striped" style="color:#000;text-align: left;">
                <thead>
                <tr>
                    <!--th>Titles </th-->
                    <th>Meeting Date </th>
                    <th>Meeting Time </th>
                    <th>Meeting ID </th>
                    <th>Password </th>
                    <th>Link </th>
                    <th>Description </th>
                    <th>Status</th> 
                    <th>Action</th>                                       
                </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="wn in webin" ng-if="wn.title">
                      <!--td> {{wn.title}} </td-->
                      <td> {{wn.webinar_date}} </td>
                      <td> {{wn.webinar_time}} </td>
                      <td> {{wn.meeting_id}} </td>
                      <td> {{wn.meeting_pass}} </td>
                      <td> {{wn.webinar_link}} </td>
                      <td> {{wn.description}} 
                        <input type="hidden" id="webstitle{{wn.id}}" name="web1" value="{{wn.title}}">
                        <input type="hidden" id="websdate{{wn.id}}" name="websdate1" value="{{wn.webinar_date}}">
                        <input type="hidden" id="webstime{{wn.id}}" name="webstime1" value="{{wn.webinar_time}}">
                        <input type="hidden" id="webdurat{{wn.id}}" name="webdurat1" value="{{wn.duration}}">
                        <input type="hidden" id="webdescr{{wn.id}}" name="webdescr1" value="{{wn.description}}">
                        <input type="hidden" id="webdatetime{{wn.id}}" name="webdatetime" value="{{wn.webinar_datetime}}">
                        <input type="hidden" id="webstatus{{wn.id}}" name="webstatus" value="{{wn.status}}">
                     </td>
                      <td ng-if="wn.status == '0' "> Waiting for Approval
                      <td ng-if="wn.status != '0'" > Approved </td>
   
                      </td>
                      <td ng-if="wn.posted_by== user_id">
                        <input type="button" class="btn btn-success" name="start1" id="{{wn.id}}" value="Start Meeting" ng-click="startwebinar(wn.id,1)" >  
                        <input type="button" class="btn btn-success" name="delete1" id="{{wn.id}}" value="Delete" ng-click="deletewebinar(wn.id,1)" >  
                        <input type="button" class="btn btn-warning" id="{{wn.id}}" value="Share" onclick="return invitewebinar(this.id);" data-toggle="modal" >
                      </td>
                      <td ng-if="wn.posted_by != user_id ">
                        <input type="button" class="btn btn-success" name="start1" id="{{wn.id}}" value="Join" ng-click="startwebinar(wn.id,0)" > 

                      </td>


                    </tr>
                    <tr ng-repeat="wn1 in webin" ng-if="!(wn1.title)">
                      <td colspan="7" align="center" class="text-danger"><strong> No Records Found </strong>  </td>
                    </tr>
                    
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </section>
    <!-- /.content -->

<!-- Invite User for Webinar Modal -->

      <div class="modal fade" id="webinarinviteModal" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header">
                <div class="text-center ">
                    <strong> Invite Webinar </strong> <span id="txwebinartitle"></span>
                </div> 
                <button type="button" class="close" data-dismiss="modal">&times;</button>          
            </div>
            <form name="inviteForm" >
              <div class="modal-body">

                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Webinar Date : </label> <span id="txwebinarsdate"></span>
                    <input type="hidden" ng-model="webinarsdate" id="webinarsdate">
                    <input type="hidden" ng-model="webinartitle" id="webinartitle">
                    <input type="hidden" ng-model="webinarinsid" id="webinarinsid">                                       
                  </div>
                   <!-- /.form-group -->
                  <div class="form-group col-md-6">
                    <label>Start Time : </label> <span id="txwebinarstime"> </span> 
                      <input type="hidden" ng-model="webinarstime" id="webinarstime">
                  </div>
                </div>   

                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Duration : </label> <span id="txwebinarduration"> </span>
                      <input type="hidden" ng-model="webinarduration" id="webinarduration">   
                  </div>                  
                  <!-- /.form-group -->
                  <div class="form-group col-md-6">
                    <label>Description : </label> <span id="txwebinardescript"> </span> 
                      <input type="hidden" ng-model="webinardescript" id="webinardescript">
                  </div>
                </div> 

                <div class="row">
                  <div class="form-group col-md-12">
                    <label class="form-label"> Select Users </label>
                    <div class="select2-green">
                      <select  multiple="multiple" data-placeholder="Select A Users"  name="grpusers[]" ng-model="grpusers" style="width:100%" required>
                        <option ng-repeat="use in userlists" value="{{use.id+','+use.email}}">{{use.name}}</option>
                      </select>
                    </div>
                  </div>
                </div>    

              </div> 

              <div class="modal-footer">
                  <button type="button" class="btn btn-success btn-block" ng-click="inviteUsers()" data-dismiss="modal" >Invite Users </button>
                  <button type="button" class="btn btn-block" data-dismiss="modal">Close</button>
              </div>
            </form>           
          
          </div>
      </div>

    </div>


  </div>
  <!-- /.content-wrapper -->
<!-- End Invite User for Webinar Modal -->

<?php
  include('footer.php');
?>
<script>
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