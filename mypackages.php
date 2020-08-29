<?php
    require("header.php");
?>
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
                      <li class="breadcrumb-item active">Package Details</li>
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
      <!-- Default box -->
        <div class="card card-success card-outline" ng-repeat="up in userprofiles">
            <div class="card-header">
              <h3 class="card-title" style="color:red;">My Subscription Plan <strong > {{ up.plan_name }} </strong></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive">
              <table class="table table-bordered" style="color: #252f6a; font-weight: bold;">
                <thead>
                <tr style="background-color:#252f6a; color:#fff;">
                    <th>Description </th>
                    <th>Counts </th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                      <td >Total Lead Posted</td> 
                      <td >{{ up.posted_leads }}</td> 
                    </tr> 
                    <tr>
                      <td>Total Purchase Buy Lead</td> 
                      <td>{{ up.purchase_buys }}</td> 
                    </tr>
                    <tr>
                      <td>Total Purchase Sell Lead</td> 
                      <td>{{ up.purchase_sales }}</td> 
                    </tr>
                    <tr>
                      <td>No of Banners Posted</td> 
                      <td>{{ up.posted_banners }}</td> 
                    </tr>
                    <tr>
                      <td>No Of RFQs</td> 
                      <td>{{ up.rfq }}</td> 
                    </tr>
                    <tr>
                      <td>No of Chapters</td> 
                      <td>{{ up.chapters }}</td> 
                    </tr>
                    <tr>
                      <td>No of Chat Users Added</td> 
                      <td>{{ up.chatusers }}</td> 
                    </tr>
                    <tr>
                      <td>No of Webinars Hosted</td> 
                      <td>{{ up.webinars }}</td> 
                    </tr>
                    <tr>
                      <td>Credit Balance</td> 
                      <td>{{ up.credits }}</td> 
                    </tr>
                    
                    <tr>
                      <td>Package Duration</td> 
                      <td>{{ up.plan_duration }}</td> 
                    </tr>
                    <tr>
                      <td>Package Start Date</td> 
                      <td>{{ userdetail.subscription_start | date:'dd-MM-yyyy' }}</td> 
                    </tr>
                    <tr>
                      <td>Package Expiry Date</td> 
                      <td>{{ userdetail.subscription_end | date:'dd-MM-yyyy' }}</td> 
                    </tr>
                    <tr>
                      <td >Selected Chapters</td> 
                      <td><span ng-repeat="uc in userchapters">{{ uc.chapter_name  }} &nbsp; </span></td> 
                    </tr>
                </tbody>

             </table>     
			</div>

			</div>
           </section>
    <!-- /.content -->

<!--  Start Main Containt Inserted Here Ganesh  -->





          </div>
          <!-- /.content-wrapper -->

<?php
    require("footer.php");
?>