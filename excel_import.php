<?php
//$message="";
include("config.php");
$fileName = 'Port.csv';
$file = fopen($fileName, "r");
        
//fgetcsv($file, 10000, ","); 

while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
	
	$counrty_id = $column[0];
	$port_code= $column[1];
	$port = $column[2];
	$port_type = $column[3];
	
	echo $sql = "INSERT INTO `port`(`country_id`, `port_code`, `port`, `port_type`) VALUES ('$counrty_id','$port_code','$port','$port_type')";
	echo "<br>";
	$res = mysqli_query($webconn,$sql);
	if($res)
	{
		echo "Inserted";echo "<br>";
	}
	else
	{
		echo "Not Inserted";
		echo mysqli_error($webconn);echo "<br>";
	}
}
?>