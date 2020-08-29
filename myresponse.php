<?php
  include('header.php');
  // include('sidebar.php');
?>
	<script src="js/angular.min.js"></script>
	<script src="appJs/leads.js"></script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
              <li class="breadcrumb-item active">My Responses Details</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">My Responses Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table id="myresponsedetails22" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Chapter Name </th>
                    <th>HSN Codes </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td> Chapter 1 </td>
                      <td> HSN Code 1001 </td>
                    </tr>
                    <tr>
                      <td> Chapter 1 </td>
                      <td> HSN Code 1002 </td>
                    </tr>
                    <tr>
                      <td> Chapter 2 </td>
                      <td> HSN Code 201 </td>
                    </tr>   
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


    </section>
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<?php
  include('footer.php');
?>

