<?php
include("config.php");
	
	$referal_code = $_POST['referal_code'];
    $phone = $_POST['phone'];
	$ipaddress = $_SERVER['REMOTE_ADDR'];
    
    $sql = "INSERT INTO `referal_users`(`mobile`, `referal_code`, `status`, `ipaddress`) VALUES('$phone','$referal_code','1','$ipaddress')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        //header("Location: https://play.google.com/store/apps/details?id=com.miios.eximbni&hl=en");
		$x = 1;
    }
    else
    {
        //$msg= "Please enter your mobile number";
        //header("Location: referal_downloads.php?referal_code=$referal_code");
		$x= 0;
    }
echo json_encode($x);
?>