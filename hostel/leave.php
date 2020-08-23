<?php
session_start();
include('includes/config.php');
date_default_timezone_set('Asia/Kolkata');
$ai=$_SESSION['id'];
if(isset($_POST['submit']))
{

	$date = date("Y/m/d");
	$dstart=$_POST['dstart'];
	$dend=$_POST['dend'];
	$reson=$_POST['reason'];
	#$tstart=$_POST['tstart'];
	#$tend=$_POST['tend'];
	#$tstart=$_POST['tstart'];
	#$tend=$_POST['tend'];
	if($dstart>$date)
	{
		if($dend>$dstart)
		{
			$que="INSERT INTO `checkinout` (`id`, `StartDate`,`EndDate`,`reason`) VALUES ('$ai', '$dstart','$dend','$reson');";
			#echo $ai,$dstart;
			$run=$con->query($que);
			if($run==True)
			{
				echo "<script>window.alert('Student Succssfully register');
				window.open('dashboard.php');</script>";	
			}
			else
			{
				echo "<script>alert('Student NOT register');</script>";	
			}
		}
		else
		{
			echo "<script>window.alert('Please Choose valid date')</script>";
		}
	}
	else
	{
		echo "<script>window.alert('Please Choose valid date')</script>";
	}
}
?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Check-In/Out</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>


</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">leave Request</h2>
	
						<div class="row">
								<form action="" method="post">
								<div class="col-md-10">
								<div class="panel panel-default">
                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Check-Out Date </label>
                                    <div class="col-sm-8">
                                    <input type="date" name="dstart" id="dstart"  class="" >
                                    <!-- <input type="time" name="tstart" id="tstart"  class="" > -->
                                    </div></div><br />

                                    <div class="form-group">
                                    <label class="col-sm-2 control-label">Check-In Date </label>
                                    <div class="col-sm-8">
                                    <input type="date" name="dend" id="dend"  class="" >
                                    </div></div><br />
									
									<div class="form-group">
                                    <label class="col-sm-2 control-label">Reason </label>
                                    <div class="col-sm-8">
									<textarea name="reason" id="reason" row="1" cols="100"></textarea>
                                    </div></div>


									<br>
									<br />

									<div class="col-sm-6 col-sm-offset-4">
													<button class="btn btn-default" type="submit">Cancel</button>
													<input type="submit" name="submit" Value="submit" class="btn btn-primary">
											</div>
							</div>
							</div>
						
									
							

							</div>
						</div>

					</div>
				</div> 	
				

			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>


</body>

</html>