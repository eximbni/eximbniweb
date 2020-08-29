<?php
    require("header.php");
?>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/share.css">  
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
                      <li class="breadcrumb-item active">Profile Setting</li>
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
          <div class="col-md-12">
            <div class="card card-success card-outline">
                <div ng-show="showLoader" align="center">
	                    <img src="/img/loader1.gif" width="100px" height="100px" > 
	               </div> 
              <div class="card-header p-2">
                <div class="form-group">  <span class='text-danger'> {{ errorresmsgs }} </span> <span class='text-success'> {{ successresmsgs }} </span> </div>
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#feedback" data-toggle="tab">Feedback</a></li>
                  <li class="nav-item"><a class="nav-link" href="#share" data-toggle="tab">Share</a></li>
                  <li class="nav-item"><a class="nav-link" href="#rateus" data-toggle="tab">Rate Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="#setlang" data-toggle="tab">Set Language</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="feedback">
                    <form class="form-horizontal" name="feedbackFrom" ng-submit="feedbackForm()">

                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" ng-model="subject" placeholder="Subject">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Comments</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" ng-model="message" placeholder="Write Something Here"></textarea>
                        </div>
                      </div>

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="share">


                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-youtube"></a>
                        <a href="#" class="fa fa-skype"></a>
                        
<!--                        <a href="#" class="fa fa-google"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-snapchat-ghost"></a>
                        <a href="#" class="fa fa-android"></a>
                        <a href="#" class="fa fa-dribbble"></a>
                        <a href="#" class="fa fa-vimeo"></a>
                        <a href="#" class="fa fa-tumblr"></a>
                        <a href="#" class="fa fa-vine"></a>
                        <a href="#" class="fa fa-foursquare"></a>
                        <a href="#" class="fa fa-stumbleupon"></a>
                        <a href="#" class="fa fa-flickr"></a>
                        <a href="#" class="fa fa-yahoo"></a>
                        <a href="#" class="fa fa-reddit"></a>
                        <a href="#" class="fa fa-rss"></a>-->

                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="rateus">
                    rateus
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="setlang">
                    <form class="form-horizontal" name="languageFrom" ng-submit="languageForm()">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-3 col-form-label">Set Language</label>
                        <div class="col-sm-10">
                          <select class="form-control select2" ng-model="setlanguage" style="width: 100%;">
                            <option value="">Select Language </option>
                            <option ng-repeat="langu in languagesres" value="{{ langu.id }}"> {{ langu.name }} </option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                  

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


<?php
    require("footer.php");
?>