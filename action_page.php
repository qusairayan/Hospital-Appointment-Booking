 <?php 
include "config.php"; 
//get reservation informations
if (isset($_GET['name'],  $_GET['ID']) ) {
	
	$name = $_GET['name'];
	$ID = $_GET['ID'];
	$clinc = $_GET['clinc'];
	$tel = $_GET['tel'];
	$address = $_GET['address'];
	$date = $_GET['date'];
	$time = $_GET['time'];
	
	

//insert reservation informations into data base
	
				   $sql = "INSERT INTO reservation (ID, Name, tel,address,clinc,date,time)
VALUES ('$ID', '$name', '$tel','$address','$clinc','$date','$time')";
	//ensure data have inserted			
if ($con->query($sql) === TRUE) {
  echo "New Reservation created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();?>

<!doctype html>
     
<html>
	<head>
		<title>Saudi Hospital</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<img src="images/LOGO1.png" height="50" />
				<nav>
						
				<li>	<form method="post" action="">
            <input type="submit" value="Logout" name="but_logout">
        </form> </li>
		
					
					
				
				</nav>
			</header>

		<!-- Nav -->
			
			
			
    
	
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
				<img src="images/LOGO1.png" height="50" />
					<h1>المعلومات</h1>
					<p style="background:black; ">
					<?php 
					
					//sow reservation informations
					
					echo'
					الأسم:'.$name .'<br> الرقم الوطني:'.$ID.'<br>العيادة:'. $clinc.'<br> رقم الجوال:'.$tel.'<br> العنوان:'.$address.
					'<br> التاريخ والوقت:'. $date. $time;
}
?>  </p>
			</div>
			</section>
<br>
		
					
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>