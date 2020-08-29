<?php
include("config.php");
$referal_code = $_GET['referal_code'];
$get_user = "select * from users where ref_code='$referal_code'";
$res_user = mysqli_query($conn,$get_user);
$row_user = mysqli_fetch_assoc($res_user);
$username = $row_user['name'];
$msg="";
?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>EXIMBNI : World's First of it's kind HSCODE based EXIM Business Application. Add the power of Technology to your business to multiply your Imports/Exports all over the world </title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
body{
  background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#bfbfbf42)) fixed;
  display:block;
   height: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
  margin:5%;
}


@media (max-width: 500px) {
  .intl-tel-input .country-list {
    white-space: normal;
  }
}



@media only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (min--moz-device-pixel-ratio: 2),
only screen and (-o-min-device-pixel-ratio: 2 / 1),
only screen and (min-device-pixel-ratio: 2),
only screen and (min-resolution: 192dpi),
only screen and (min-resolution: 2dppx) {
  .iti-flag {
    background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/img/flags@2x.png");
  }
}

.iti-flag.np {
  background-color: transparent;
}

* {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.hide {
  display: none;
}

pre {
  margin: 0 !important;
  display: inline-block;
}

.token.operator,
.token.entity,
.token.url,
.language-css .token.string,
.style .token.string,
.token.variable {
  background: none;
}

input,
button {
  height: 35px;
  margin: 0;
  padding: 6px 12px;
  border-radius: 2px;
  font-family: inherit;
  font-size: 100%;
  color: inherit;
}

input[disabled],
button[disabled] {
  background-color: #eee;
}


::-webkit-input-placeholder {
  color: #BBB;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #BBB;
  opacity: 1;
}

:-ms-input-placeholder {
  color: #BBB;
}

button {
  color: #FFF;
  background-color: #428BCA;
  border: 1px solid #357EBD;
}

button:hover {
  background-color: #3276B1;
  border-color: #285E8E;
  cursor: pointer;
}

#result {
  margin-bottom: 100px;
}

.intl-tel-input
{
width: 66% !important;
margin: 7rem 0 2rem 0;
}

.intl-tel-input.separate-dial-code .selected-dial-code
{padding-left:5px !important;}

</style>

<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
</head>
<body>
<div class="container-fluid text-center">
<div class="col-md-12"><img src="https://eximbni.com/img/eximbnilogo.svg" alt="logo" width="50%"></div>
<br><br>
<h1 style="font-size:3rem; color:green;">You are Invited to EXIMBNI.</h1>
<br>
<h2 style="font-size:2rem; color:orange;">Earn Additional 3 Leads on Registration.</h2>
<p style="color:orange;">
  <span style="font-size:2rem;"> *Terms & Condition Apply.</span>  
</p>
<br>
<img src="img/referal/referrals.png" alt="Referal" width="60%" >
<br><br>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<label style="font-size:2rem; color:orange;">Congratulations!!! You are invited to Join the worlds first of its kind Exporters & Importers online Platform , please enter your Mobile Number</label>



  <div align="center">
  <br> <br>
  <input id="phonenumber" name="phonenumber" type="tel" placeholder="Enter mobile number with countrycode" class="form-control" style="width: 100%; font-size:3rem; border:0px; border-bottom:1px solid grey; border-radius:20px; ">
  <span style="color:red;font-size:2rem;" id="error-msg"> </span>
</div>

<input id="referal_code" name="referal_code" type="hidden" class="form-control" value=<?php echo $referal_code; ?>>
<!--div width="50%"><input type="submit" style="width: 65%; height: 75px; font-size: 2rem; border-radius: 3rem;" value="submit" class="btn btn-success"></div-->
</form>
<br><br><br>
<!--img src="img/referal/store.png" alt="download"-->
<div class="row">
<div class="col-md-6"><img src="img/referal/ios.png" width="200" height="200" id="IOS"></div>
<div class="col-md-6"><img src="img/referal/android.png" width="200" height="200" id="Android"></div>
</div>
<br>
<p style="position: absolute; bottom: 0px; padding-left: 27%;">EXIMBNI &copy;, All Rights Reserved, powered by : MIIOS</p>
</div>

</body>
<script>
$('#Android').on("click", function () {
    //alert("android");
    var phone = $("#phonenumber").val();
    var referal_code = $("#referal_code").val();
    console.log(phone);
    console.log(referal_code);
    $("#error-msg").text("");

  if(phone ==''){
   $("#error-msg").text("Please Enter Mobile Number.");
   $("#phonenumber").focus();
    return false;
  }  
    //$('#referal_form').submit();
  var a = $('#continent').val();
  $.ajax({
    type:"POST",
    url:"android_refer.php",
    data:{
      phone:phone,
      referal_code:referal_code
    },
    dataType:'json',
    success:function(response)
    {
      console.log(response);
      var a = response;
      if(a===1)
      {
        window.location.href = "https://play.google.com/store/apps/details?id=com.miios.eximbni&hl=en";
      }
    },
    error:function(error)
    {
      console.log(error);
    },
  });
  
});

$('#IOS').on("click", function () {
    //alert("IOS");
    var phone = $("#phonenumber").val();
    var referal_code = $("#referal_code").val();
    console.log(phone);
    console.log(referal_code);
    //$('#referal_form').submit();
     $("#error-msg").text("");
  if(phone ==''){
    $("#error-msg").text("Please Enter Mobile Number.");
    $("#phonenumber").focus();
    return false;
  }  
  $.ajax({
    type:"POST",
    url:"ios_refer.php",
    data:{
      phone:phone,
      referal_code:referal_code
    },
    dataType:'json',
    success:function(response)
    {
      console.log(response);
      var a = response;
      if(a===1)
      {
        alert("Success");
       //window.location.href = "https://play.google.com/store/apps/details?id=com.miios.eximbni&hl=en";
      }
    },
    error:function(error)
    {
      console.log(error);
    },
  });
});

var telInput = $("#phone"),
  errorMsg = $("#error-msg"),
  validMsg = $("#valid-msg");



var reset = function() {
  telInput.removeClass("error");
  errorMsg.addClass("hide");
  validMsg.addClass("hide");
};

// on blur: validate
telInput.blur(function() {
  reset();
  if ($.trim(telInput.val())) {
    if (telInput.intlTelInput("isValidNumber")) {
      validMsg.removeClass("hide");
    } else {
      telInput.addClass("error");
      errorMsg.removeClass("hide");
    }
  }
});

// on keyup / change flag: reset
telInput.on("keyup change", reset);

</script>
</html>