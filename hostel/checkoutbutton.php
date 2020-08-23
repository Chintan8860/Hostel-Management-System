<?php
session_start();
include('includes/config.php');
date_default_timezone_set('Asia/Kolkata');
$ai=$_SESSION['id'];

$date = date("Y/m/d");
$time = date("h:i:sa");

$que="INSERT INTO `checkbox` (`id`, `StartDate`,`StartTime`) VALUES ('$ai', '$date','$time');";
		#echo $ai,$dstart;
		$run=$con->query($que);
if($run == TRUE)
{
	echo "<script>alert('Sucessfull Check-Out');</script>";	 
}
else
{
	echo "<script>alert('Not Sucessfull Check-Out');window.open('checkbox.php','_self');</script>";
}
?>