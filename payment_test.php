<?php

if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
  //Request hash
  $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : ''; 
  
  if(strcasecmp($contentType, 'application/json') == 0){
    $data = json_decode(file_get_contents('php://input'));
    $hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
    $json=array();
    $json['success'] = $hash;
      echo json_encode($json);
  
  }
  exit(0);
} 
 
function getCallbackUrl()
{
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
 /* return  $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . 'response.php';*/
  
return  $protocol.'eximbin.com/response_test.php';

  //return  $protocol.'eximbni.com/eximbniweb/response.php';
  //return 'http://localhost/eximbniweb/response.php';
 
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


 <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>EximBni Payment Details</title>
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
 
  <div ng-app="eximApp" ng-controller="chapterCtrl">
    <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" align="center">
                <div class="col-md-12 col-sm-6 text-center ">
                    <img width="160" src="img/eximbnilogo.svg" alt="eximbni_logo" />
                </div>           
            </div>

            <div class="modal-body" >
                <form action="#" id="payment_form">
                  <div class="form-group" align="center">
                     <p align="center">Please Check details and click on Confirm details </p>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Amount </label>
                    <div class="select2-green">
                        <input type="hidden" class="form-control" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
                        <input type="hidden" class="form-control" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" /> 
                        <input type="hidden" class="form-control" id="key" name="key" placeholder="Merchant Key" value="BxmWSQ2r" />
                        <input type="hidden" class="form-control" id="salt" name="salt" placeholder="Merchant Salt" value="0ZpAk7JVG4" /> 
                        <input type="hidden" class="form-control" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" />                      
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount" value="{{amountdata}}" readonly="readonly">
                        <input type="hidden" class="form-control" id="pinfo" name="pinfo" placeholder="Product Info" value="{{ptype}}" />
                       
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label>First Name </label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{userdata.name}}">
                    </div>
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label>Email ID </label>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email ID" value="{{userdata.email}}">
                    </div>
                  </div>

                  <div class="form-group col-md-6">
                    <label>Mobile Number </label>
                    <div class="form-group">
                        <input type="text" class="form-control"  id="mobile" name="mobile" placeholder="Mobile/Cell Number" value="{{userdata.mobile}}">
                        <input type="hidden" class="form-control" id="hash" name="hash" placeholder="Hash" value="" />
                    </div>
                  </div>
            
                  <div class="form-group">
                    <input type="submit" class="btn btn-success col-2" value="Confirm Details" onclick="setHashlaunchBOLT(); return false;" />
                    </div>
                  </div>            
        
                </form>

            </div>

          </div>
      </div>
  </div>
      <!-- Default box -->

<script type="text/javascript">


$( document ).ready(function() {
   // console.log( "ready!" );
    //var SearchInput = $('#email');
$('#mobile').focus();

});

/*$('#payment_form').bind('keyup blur', function(){  

});*/

function setHashlaunchBOLT(){

        $.ajax({
          url: 'payment_test.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
            salt: $('#salt').val(),
            txnid: $('#txnid').val(),
            amount: $('#amount').val(),
            pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
            email: $('#email').val(),
            mobile: $('#mobile').val(),
            udf5: $('#udf5').val()
          }),
          contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
              $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            
            }else if (json['success']) { 
              $('#hash').val(json['success']);
              return launchBOLT();
            }
          }

        }); 

}


function launchBOLT()
{
  bolt.launch({
  key: $('#key').val(),
  txnid: $('#txnid').val(), 
  hash: $('#hash').val(),
  amount: $('#amount').val(),
  firstname: $('#fname').val(),
  email: $('#email').val(),
  phone: $('#mobile').val(),
  productinfo: $('#pinfo').val(),
  udf5: $('#udf5').val(),
  surl : $('#surl').val(),
  furl: $('#surl').val(),
  mode: 'dropout' 
},{ responseHandler: function(BOLT){
  if(BOLT.response.txnStatus != 'CANCEL') 
  {
    //Salt is passd here for demo purpose only. For practical use keep salt at server side only.
    var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
    '<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
    '<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
    '<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
    '<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
    '<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
    '<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
    '<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
    '<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
    '<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
    '<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
    '<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
    '</form>';
    var form = jQuery(fr);
    jQuery('body').append(form);                
    form.submit();
  }
},
  catchException: function(BOLT){
   // alert( BOLT.message );
     console.log("catchException : ", BOLT.message ); 
  }
});
}
//--
</script> 

