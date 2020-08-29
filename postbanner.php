<?php
include("config.php");
if(isset($_POST['submit'])){
$uploaddir = 'api/uploads/';
$filename = $_FILES['bannerimg']['name'];
$uploadfile = $uploaddir . basename($_FILES['bannerimg']['name']);
/* Upload file */
if (move_uploaded_file($_FILES['bannerimg']['tmp_name'], $uploadfile)) {
    //move_uploaded_file($_FILES['bannerimg']['tmp_name'],$uploadfile);
		$banner_image=$filename;
		$chapter_id = $_POST["chapter_id"];
	    $category_id = $_POST["category_id"];
	    $posted_by = $_POST["user_id"];
		$country = $_POST["country"];
		
		$query="INSERT INTO banner (posted_by,banner_image,category_id,chapter_id) values ('$posted_by','$banner_image','$category_id','$chapter_id')";
	    $result = mysqli_query($conn,$query);
		if($result){
			$sel = "select * from banner where posted_by='$posted_by' order by id desc limit 1";
			$rel = mysqli_query($conn,$sel);
			if($rel){
				while($row = mysqli_fetch_assoc($rel)){
					$banner_id = $row["id"];
				}
				if($country !='null'){
		        
					/* foreach($country as $key => $value ){
						
						$country_id[$key] = $value->country_id; 
					} */
					
					foreach($country as $val){
						$portsql = "INSERT INTO banner_display_countries (banner_id,countries,chapter_id) VALUES('$banner_id','$val','$chapter_id')";
						$resport = mysqli_query($conn, $portsql);
						
					}
					
				}
				$chkemail="select country_id from users where id='$posted_by'";
				$chkresmail = mysqli_query($conn,$chkemail);
				$row = mysqli_fetch_array($chkresmail);
				$usercountry = $row['country_id'];
			  
				$message = "Your Banner Posted Successfully";
				
				$ins_inbox= "INSERT INTO `inbox` (`user_id`, `country_id`, `title`, `notification`, `type`, `created`) VALUES ('$user_id', '$usercountry', 'Banner Posted Successfully.', '$message', '1', '$todaysdate')";
				$result_inbox = mysqli_query($conn,$ins_inbox);
				
				$ins_unotify= "INSERT INTO `user_notification` (`user_id`, `country_id`, `title`, `notification`, `type`, `created`) VALUES ('$user_id', '$usercountry', 'Banner Posted Successfully', '$message', '1', '$todaysdate')";
				$result_unotify = mysqli_query($conn,$ins_unotify);
				
				if($result_unotify){
					$successmessage="Banner Posted Successfully";
				}
			}
		 
		} 
		else {
			$errormessge = "Something went wrong Please try again Later";
}
		
}
else{
	$errormessge = "File Upload Error. Please try again Later";
}

}

if(isset($_POST['submitfeedback']))
{
    $subject = $_POST['subject'];
    $desc = $_POST['desc'];
    
    $feedbackins = "insert into banner_display_countries (banner_id,countries,status) values ('$subject', '$desc', '1')";
	$resfeedbackins = mysqli_query($webconn,$feedbackins);
	if($resfeedbackins){
		 $successmessage="Feedback Submited Successfully";
	}
	else 
	{
		$errormessge = "Something went wrong Please try again Later";
    }
}

?>
<?php
    require("header.php");
?>
<style>
	label{
		color : #000;
		float : left;
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
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Post A Banner</li>
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
            <h3 class="card-title">Post A Banner</h3>
            <br><span class='text-danger'> <?php echo $errormessage; ?> </span> <span class='text-success'> <?php echo $successmessage; ?> </span> 
          </div>
          <!-- /.card-header -->
		  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
		  <input type="hidden" name="user_id" value="{{userid}}"/>
          <div class="card-body">
                <div ng-show="showLoader" align="center">
	                    <img src="/img/loader1.gif" width="100px" height="100px" > 
	               </div> 
            <div class="row">
                <div class="form-group col-md-6">
                  <label>Category</label>
                  <select class="select2" style="width: 100%;" ng-model="category_id" name="category_id" ng-change="categorySelected()" >
                    <option  value="">Select Category</option>
                    <option ng-repeat="cat in acategories | orderBy : 'id'" value="{{cat.id}}"> {{cat.category_name}} </option>
                    
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group col-md-6">
                  <label>Chapter</label>
                  <select class="form-control select2" style="width: 100%;" name="chapter_id" >
                    <option value="">Select Chapters </option>
                    <option ng-repeat="chapter in chapteroption | orderBy : 'chapter_name'" value="{{chapter.id}}"> {{chapter.chapter_name}} </option>
                  </select>
                </div>
                <!-- /.form-group -->
              <!-- /.col -->
            </div>
            <div class="row">
              
                <div class="form-group col-md-6">
                  <label>Country</label>
                  <select class="select2" multiple="multiple"  name="country[]" style="width: 100%;">
                      <option value="">Select Country</option>
                      <option ng-repeat="country in countries | orderBy : name " value="{{ country.country_id}}"> {{ country.name }}</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group col-md-6">
                  <label>Banner Image</label>
				  <div class="custom-file">
					<input type="file" class="custom-file-input" id="bannerimg" name="bannerimg">
					<label class="custom-file-label" for="customFile" style="color:#000;" id="filename"></label>
				  </div>
                </div>
                <!-- /.form-group -->
              <!-- /.col -->
            </div>
           <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <input type="submit" name="submit" class="btn btn-danger">
          </div>
        </div>
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      <p style="margin-left: 39%;" onclick="showForm()">Click here to Contact Admin</p>
      <div id="feedback" style="display:none;">
          <h4 style="margin-left: 35%;">Fill Form to contact admin</h4>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
          <div class="row">    
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="subject" placeholder="Subject">  
            </div>
            <div class="form-group col-md-6">
                  <textarea name="desc" class="form-control" rows="5" cols="20" placeholder="Write Something Here"></textarea>
            </div>
          </div>    
          <input type="submit" name="submitfeedback" class="btn btn-info" style="margin-left: 44%;"> 
        </form>      
          
      </div>
    </section>
    <!-- /.content -->


<!--  Start Main Containt Inserted Here Ganesh  -->

          </div>
          <!-- /.content-wrapper -->
<script>
	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()
	});
    function showForm()
    {
        var x = document.getElementById('feedback');
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
	
	$('.custom-file-input').on('change',function(){
		alert("Hi");
		//get the file name
		var fileName = $(this).val();
		//replace the "Choose a file" label
		console.log(filename);
		$(this).next('.custom-file-label').html(fileName);
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
<?php
    require("footer.php");
?>