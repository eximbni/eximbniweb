<?php
$postdata = $_POST;
$msg = '';
if (isset($postdata ['key'])) {
  $key        =   $postdata['key'];
  $salt       =   '0ZpAk7JVG4';//$postdata['salt'];
  $txnid        =   $postdata['txnid'];
    $amount         =   $postdata['amount'];
  $productInfo      =   $postdata['productinfo'];
  $firstname        =   $postdata['firstname'];
  $email            = $postdata['email'];
  $udf5       =   $postdata['udf5'];
  $mihpayid     = $postdata['mihpayid']; 
  $status       =   $postdata['status'];
  $resphash       =   $postdata['hash'];
  //Calculate response hash to verify 
  $keyString        =   $key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
  $keyArray         =   explode("|",$keyString);
  $reverseKeyArray  =   array_reverse($keyArray);
  $reverseKeyString = implode("|",$reverseKeyArray);
  $CalcHashString   =   strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));
  
  
  if ($status == 'success'  && $resphash == $CalcHashString) {
    $msg = 1;//"Transaction Successful and Hash Verified...";
    //Do success order processing here...
       //getSuccessFun($msg,$txnid,$amount,$firstname,$email,$status);
  }
  else {
    //tampered or failed
    $msg = 0;//"Payment failed for Hasn not verified...";
        //return getFailedFun($msg);
  } 
}
else exit(0);
?>
<?php
    require("header.php");
?>
<script src="js/jquery.min.js"></script>
<!-- BOLT Sandbox/test //-->
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper" ng-app="eximApp">
            <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                <div class="row mb-2">
                  <div class="col-sm-6">
                    <h6 class="m-0 text-dark">Response Details</h6> 
                    
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                      </li>
                      <li class="breadcrumb-item active">Payment Response</li>
                    </ol>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->

          <div class="card card-success card-outline" ng-controller="chapterCtrl" data-ng-init="init('<?= $msg.','.$productInfo.','.$txnid.','.$amount.','.$firstname.','.$email; ?>')">
            <div class="card-header">
              <h3 class="card-title">Payment Response Details</h3>
            </div>
            <!-- /.card-header -->
            <form action="#" id="payment_form">
            <div class="card-body table-responsive">


                <div class="row" align="center">
                    <div class="col-2"> </div>
                    <div class="col-8 col-xm-12">
                    <?php 
                        echo "<strong>Thank You.</strong> </br> Your ".$productInfo." status is <strong>". $status .".</strong></br>";
                        echo "Your <strong>Transaction ID</strong> for this transaction is <strong>".$txnid.".</strong></br>";
                        echo "We have received a payment of <strong>Rs. " . $amount . ".</strong> Your ".$productInfo." wallet  will soon be updated.</br> </br> ";
                    ?>
                    </div>
                    <div class="col-2"> </div>
                </div>

<!--                 <div class="row">

                    <div class="col-md-4 col-xm-12">
                        <label class="col-md-6 col-xm-12">Transaction ID:</label>
                        <span class="col-md-6 col-xm-12">
                            <?= $txnid; ?> 
                        </span>
                    </div>
                    
                    <div class="col-4 col-xm-12">
                        <label class="col-4 col-xm-12">Amount:</label>
                        <span class="col-8 col-xm-12"><?php echo $amount; ?></span>    
                    </div>
                                    
                    <div class="col-4 col-xm-12">
                        <label class="col-4 col-xm-12">First Name:</label>  
                        <span class="col-8 col-xm-12"><?php echo $firstname; ?></span>
                    </div>
                </div>

                <div class="row">   
                    <div class="col-4 col-xm-12">
                        <label class="col-4 col-xm-12">Email ID:</label>
                        <span class="col-8 col-xm-12"><?php echo $email; ?></span>
                    </div>

                    <div class="col-4 col-xm-12">
                        <label class="col-4 col-xm-12">Status:</label>
                        <span class="col-8 col-xm-12"><?php echo $status; ?></span>
                    </div>

                </div> -->

            </div>
            <!-- /.card-body -->
          </form>  <!-- / form -->
          </div>
          <!-- /.card -->
        </div>

<?php
    require("footer.php");
?>