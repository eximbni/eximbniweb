<?php
$host = "3.17.67.186";
$user = "root";
$pass = "EximBni.2020";
$db = "eximbni";
$conn = mysqli_connect($host,$user,$pass,$db);
if($conn)
{
    echo "Connected";
}
else
{
    echo "Not Connected";
}
?>