<?php
session_start();
include('includes/config.php');
date_default_timezone_set('Asia/Kolkata');
$ai=$_SESSION['id'];

$date = date("Y/m/d");
$time = date("h:i:sa");

$r="SELECT MAX(`ind`) AS ma FROM `checkbox`;";
$ra=$con->query($r);
#echo $ra->fetch_assoc();
$row=$ra->fetch_array();
$l=$row['ma'];
echo $l;

$que="UPDATE `checkbox` SET `EndDate`='$date',`EndTime`='$time' WHERE `id`='$ai' AND `ind`='$l' ;";
		#echo $ai,$dstart;
		$run=$con->query($que);
if($run == TRUE)
{
	echo "<script>alert('Sucessfull Check-In');window.open('checkbox.php','_self');</script>";	 
}
else
{
	echo "<script>alert('Not Sucessfull Check-IN');window.open('checkbox.php','_self');</script>";
}
?>