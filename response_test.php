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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


 <head>
  <title>EximBni Payment Response </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>       

<!-- <script src="js/jquery.min.js"></script> -->

        <script src="js/angular.min.js"></script>
        <script src="appJs/eximApp.js"></script> 
<!-- BOLT Sandbox/test //-->
<script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js" bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>

          <!-- Content Wrapper. Contains page content -->
 
  <div ng-app="eximApp" ng-controller="chapterCtrl" data-ng-init="init('<?= $msg.','.$productInfo.','.$txnid.','.$amount.','.$firstname.','.$email; ?>')">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" align="center">
                <div class="col-md-12 col-sm-6 text-center ">
                    <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
                </div>           
            </div>

            <div class="modal-body" >
                  <div class="row" align="center">
                    <div class="col-2"> Payment Response </div>
                    <div class="col-8 col-xm-12">
                    <?php 
                        echo "<strong>Thank You.</strong> </br> Your ".$productInfo." status is <strong>". $status .".</strong></br>";
                        echo "Your <strong>Transaction ID</strong> for this transaction is <strong>".$txnid.".</strong></br>";
                        echo "We have received a payment of <strong>Rs. " . $amount . ".</strong> Your ".$productInfo." wallet  will soon be updated.</br> </br> ";
                    ?>
                    </div>
                    <div class="col-2"> </div>
                  </div>
             </div>
          </div>
      </div>
  </div>
      <!-- Default box -->
