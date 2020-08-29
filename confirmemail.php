<?php
include("config.php");
$x = "";
$user_id = $_GET['user_id'];

$getpack = "select * from users where id='$user_id'";
$respack = mysqli_query($conn,$getpack);
if($respack){
    while($packrow = mysqli_fetch_assoc($respack)){
        $sub_id = $packrow['subscription_id'];
    }
}
$pack_name="select * from subscriptions where id='$sub_id'";
$respack_name = mysqli_query($webcon,$pack_name);
if($respack_name){
    while($pname = mysqli_fetch_assoc($respack_name)){
        $user_pack = $pname['paln_name'];
    }
}
$chkmail = "select * from users where id='$user_id' and email_check=1";
$reschk = mysqli_query($conn,$chkmail);
if(mysqli_num_rows($reschk)>0){
    $x=3;
   // echo "Mail Already been verified. Go to your Application and login from there";
}

else{
    if($user_pack != "free"){
$chk = "select sponcer_id from users where id='$user_id'";
$res = mysqli_query($conn,$chk);
if(Mysqli_num_rows($res)>0){
    while($row= mysqli_fetch_assoc($res)){
        $sponcer_id = $row["sponcer_id"];
    }
    if($sponcer_id){
         $get_spid = "select id from users where ref_code='$sponcer_id'";
    $res_spid = mysqli_query($conn,$get_spid);
    while($srow = mysqli_fetch_assoc($res_spid)){
        $sp_id  = $srow["id"];
    }
    $sp_credits = "select * from wallet where user_id='$sp_id'";
    $res_sp = mysqli_query($conn,$sp_credits);
    while($scrow = mysqli_fetch_assoc($res_sp)){
        $scredits = $scrow["credits"];
    }
    $nscredits = $scredits+0;
    $updsc ="update wallet set credits='$nscredits' where user_id='$sp_id'";
    $resupdsc = mysqli_query($conn,$updsc);
    
    $ucredits = "select * from wallet where user_id = '$user_id'";
    $resuc = mysqli_query($conn,$ucredits);
    while($ucrow= mysqli_fetch_assoc($resuc)){
        $ucredits = $ucrow["credits"];
    }
    $nucredits = $ucredits+3;
    $upduc ="update wallet set credits='$nucredits' where user_id='$user_id'";
    $resupuc = mysqli_query($conn,$upduc);
    }
    }
    }
        
    $change = "update users set email_check=1 where id='$user_id'";
    $res = mysqli_query($conn,$change);
    if($res){
        //echo "email verified Sucessfully";
        $x = 1;
    }
    else{
        //echo "Something went wrong";
        $x = 0;
    }
}

?>
<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style type="text/css">
        @media screen {
            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 400;
                src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 700;
                src: local('Lato Bold'), local('Lato-Bold'), url(https://fonts.gstatic.com/s/lato/v11/qdgUG4U09HnJwhYI-uK18wLUuEpTyoUstqEm5AMlJo4.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 400;
                src: local('Lato Italic'), local('Lato-Italic'), url(https://fonts.gstatic.com/s/lato/v11/RYyZNoeFgb0l7W3Vu1aSWOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
            }

            @font-face {
                font-family: 'Lato';
                font-style: italic;
                font-weight: 700;
                src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://fonts.gstatic.com/s/lato/v11/HkF_qI1x_noxlxhrhMQYELO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
        }

        /* CLIENT-SPECIFIC STYLES */
        body,
        table,
        td,
        a {
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
        }

        table,
        td {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* RESET STYLES */
        img {
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
        }

        table {
            border-collapse: collapse !important;
        }

        body {
            height: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
        }

        /* iOS BLUE LINKS */
        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* MOBILE STYLES */
        @media screen and (max-width:600px) {
            h1 {
                font-size: 32px !important;
                line-height: 32px !important;
            }
        }

        /* ANDROID CENTER FIX */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }
        p{
        color :#3f449a;
        font-size:22px;
        }
    </style>
</head>

<body style="background-color: #e24f24; margin: 0 !important; padding: 0 !important;">
<?php if($x==1 || $x==3){ ?>
    <!-- HIDDEN PREHEADER TEXT -->
    <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> We're thrilled to have you here! Get ready to dive into your new account. </div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
            <td align="center">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 70%;">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> 
                        <img src="https://image.flaticon.com/icons/svg/1168/1168671.svg" width="7%" style="display: block;
    border: 0px;
    position: relative;
    margin: 0 auto;
    text-align: center;
    margin-bottom: -90px;
    background: white;
    padding: 12px;
    border-radius: 50%;" /></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td align="center" style="padding: 0px 10px 0px 10px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:  calc(100% - 10%);">
                    <tr>
                        <td bgcolor="#ffffff" align="center" valign="top" style="padding: 20px 20px 20px 20px; border-radius: 10px; color: #111111; font-family: Arial, sans-serif 'Lato', Helvetica,; font-size: 48px; font-weight: 400; letter-spacing: 0px; line-height: 48px; color:#34713a">
                        <img src="http://eximbin.com/new/img/eximbnilogo.svg" width="40%">
                        
                            <h1 style=" font-family:serif; font-size: 48px; line-height:0; margin: 2;">
                            Congratulations, Your Email is now Confirmed
                            </h1> 
                            <p>
                            Please login to mobile app and proceed the further steps.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
       
        
    </table>
<?php }elseif($x==2){ 
?>
<div>
<img src="img/failure.png" style="width: 700px; height: 500px; margin: 0% 0% 0% 15%;">
<h1 style="margin: 0% 0% 0% 25%; font-family: serif; font-size: 40px;color:red;">Email Not Verified. Please Try Again.</h1>
</div>
<?php }
?>

</body>
</html>