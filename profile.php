<?php
    include("config.php");
    if(isset($_POST['upload'])){
        
    $uploaddir = 'api/uploads/';
    $filename = $_FILES['profileimg']['name'];
    $uploadfile = $uploaddir . basename($_FILES['profileimg']['name']);
    /* Upload file */
    if (move_uploaded_file($_FILES['profileimg']['tmp_name'], $uploadfile)) {
        //move_uploaded_file($_FILES['bannerimg']['tmp_name'],$uploadfile);
    		$profile_image=$filename;
    		$user_id = $_POST["user_id"];
    	    
    		$query = "update users set user_image = '$profile_image' where id='$user_id'";
    	    $result = mysqli_query($conn,$query);
    		if($result)
    		{
    			//echo "Profile Image Updated";
    			$successmessage = "Profile Image Updated Successfully";
    		}
    		else 
    		{
    		    //echo "Profile Image Updated";
    			$errormessge = "Something went wrong Please try again Later";
            }
    	}
    }

    require("header.php");
?>
<style>
.checked {
  color: orange;
}
label{
	float: left;
}
.top-bar{
	color: #000;
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
                    <br><span class='text-danger' style="color: #000;"> <?php echo $errormessage; ?> </span> <span class='text-success' style="color: #000;"> <?php echo $successmessage; ?> </span>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Profile</li>
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
                <div class="row">
                  <div class="col-3">

                    <!-- Profile Image -->
                    <div class="card card-success card-outline">
                        <div ng-show="showLoader" align="center">
	                    <img src="/img/loader1.gif" width="100px" height="100px" > 
	               </div> 
                      <div class="card-body box-profile" style="padding-bottom: 0px; padding-top: 18px;">
                          <div class="row col-12">
                            <div class="col-3" align="left"> 
                                <img src="https://eximbin.com/api/uploads/badge.jpg" style="float:left; height:40px;">
                            </div>
                            <div class="col-9" align="right">
                                <p ng-if="userdetail.stars==5">
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span>      
                                </p>
                                <p ng-if="userdetail.stars==4">
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span>      
                                </p>
                                <p ng-if="userdetail.stars==3"> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span>      
                                </p>
                                <p ng-if="userdetail.stars==2"> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span>      
                                </p>
                                <p ng-if="userdetail.stars==1">
                                    <span class="fa fa-star checked fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span>                    
                                </p>
                                <p ng-if="userdetail.stars=='none'">
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span> 
                                    <span class="fa fa-star fa-1x"></span>      
                                </p>
                                        
                             </div>
                          </div>
			
                        <div class="text-center">
                            <img ng-if="userdetail.user_image!='0'" src="https://eximbin.com/api/uploads/{{ userdetail.user_image }}" class="rounded-circle" width="80" height="75"/>
                            <div ng-if="userdetail.user_image=='0'">
                                <label for="file" style="margin-left: 35%;">
                                  <i class="fa fa-camera" aria-hidden="true" style="font-size:4.5em; text-align:center; background:  none; border-radius: 50%; color:red;"></i>
                                  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                                  <input type="hidden" name="user_id" value="{{ userdetail.id }}"/>
                                  <input type="file" id="file" style="display: none" name="profileimg" accept="image/gif,image/jpeg,image/jpg,image/png" data-original-title="upload photo"><br/>
                                  <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" name="upload" title="Upload"><i class="fa fa-upload fa-1x" aria-hidden="true"></i></button>
                                  </form>                                
                                </label>
                            </div>
                        </div>

                        
                       <!--  <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
                      </div>
                      <!-- /.card-body -->
						<div class="card-body box-profile" style="padding-bottom: 0px; padding-top: 2px;">
							<h3 class="profile-username text-center">{{ userdetail.name }} </h3>
							
							<p class="text-muted text-center">{{ userdetail.mobile }}  <br> {{ userdetail.email }} <br> Refer Code :  <span  style="color:rgb(255, 94, 0); "> {{ userdetail.ref_code }} </span> </p>
						</div>	
                    </div>
                    <!-- /.card -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-9">
                    <div class="card card-success card-outline">
                      <div class="card-header p-2">
                        <ul class="nav nav-pills">
                          <li class="nav-item">Update Profile  <p class="text-success"> {{ updatemsg }} </p>  </li>  
                        </ul>
                      </div><!-- /.card-header -->
                      <div class="card-body">
                        <div class="tab-content">
                          <form class="form-horizontal" name="updateFrom" ng-submit="upprofile()" >
                          <div class="active tab-pane" >
                            
                              <div class="form-group row">
                                  <div class="col-md-10 col-sm-12">
                                    <div class="col-sm-12">
                                      <label for="inputName" class="form-label" style="color:#6c757d!important;" >Name</label>  
                                      <input type="text" class="form-control" id="inputName" ng-model="fullname" ng-pattern="fname_valid" >
                                    </div>
                                  </div>
                              </div>

                              <div class="form-group row">

                                  <div class="col-md-10 col-sm-12">
                                    
                                    <div class="col-sm-12">
                                      <label for="inputEmail" class="form-label " style="color:#6c757d!important;">Business Name</label>  
                                      <input type="text" class="form-control"  id="business_name" ng-model="business_name" ng-pattern="business_add" >
                                       <input type="hidden" class="form-control" id="inputmobile" ng-model="mobile" ng-pattern="mob_numbr" readonly="readonly" >
                                        <input type="hidden" class="form-control" id="updateid" ng-model="updateid" readonly="readonly" >
                                    </div>
                                  </div>

                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-2 col-sm-10" align="right">
                                  <button type="submit" class="btn btn-success">Update</button>
                                </div>
                              </div>
                            
                          </div>
                          <!-- /.tab-pane -->
                        </form>

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
            <!--  Start Main Containt Inserted Here Ganesh  -->
          </div>
          <!-- /.content-wrapper -->
          <script>
              function btnclick() {
                  alert("Hi");
                    $("#uploadfile").click();
                }
          </script>
<?php
    require("footer.php");
?>