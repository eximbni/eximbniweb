<?php 
include("config.php");
$id = $_POST['id'];
$user_id = $_POST['user_id'];
$status = $_POST['upstatus'];
if($status ==0){
   $status = 1; 
}else{
   $status = 0;  
}

$websql = "SELECT * FROM `webinar` where posted_by ='$user_id' and id='$id'";
$res_websql = mysqli_query($conn,$websql);
$cnt_websql = mysqli_num_rows($res_websql);
if($cnt_websql > 0){
    
    $up_sql = "UPDATE `webinar` SET `status` = '$status' WHERE `id` = '$id'";
    $res_sql = mysqli_query($conn,$up_sql);
    if($res_sql)
    {
    	$outp = 1;
    	//echo "Updated";
    }
    else
    {
    	$outp = 0;
    	//echo "Not Updated";
    }

}else{
        $outp = 2;
}
echo json_encode($outp);
?>