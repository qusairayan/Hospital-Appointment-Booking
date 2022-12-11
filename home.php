<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: Login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: Login.php');
}
?>
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
				<img src="images/Logo1.png" height="50" />
				<nav>
						
				<li>	<form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
        </form> </li>
		
					
					
				
				</nav>
			</header>

		<!-- Nav -->
			
			
			

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
				<img src="images/Logo1.png" height="50" />
					<h1>المستشفى السعودي</h1>
					<p>يقع في قلب مدينة الرياض عاصمة المملكة العربية السعودية ، أصبح مستشفى المركز الطبي التخصصي بأبراجها الثلاثة أحد المعالم الحديثة في المملكة منذ إنشائها في عام 1999.
</p>
		<a href="#res"><button type="button">احجز موعد الان</button></a>		</div>
			</section>
<br>
		<!-- Highlights -->
	<!-- Get reservation informations	 -->
		
				<div id="res" class="inner">
					<div style="font-size:20px;">
  <form action="action_page.php">
    <label for="name">الاسم</label>
    <input type="text" id="fname" name="name" placeholder="الاسم">
 <label for="fname"> الرقم الوطني</label>
    <input type="tel" id="tel" name="ID" placeholder="الرقم الوطني">
	<label for="fname"> رقم الجوال</label>
    <input type="tel" id="tel" name="tel" placeholder="رقم الجوال">

    <label for="address">العنون</label>
    <input type="text" id="address" name="address" placeholder="العنوان..">
	<label for="address">التاريخ</label>
    <input type="date" id="date" name="date" placeholder="العنوان.."> 
	<label for="address">الوقت</label>
    <input type="time" id="time" name="time" placeholder="العنوان..">

    <label for="clinc">العيادة</label>
    <select id="clinc" name="clinc">
      <option value="العظام">العظام</option>
      <option value="العظام">العظام</option>
      <option value="الأسنان">الأسنان</option> 
	  <option value="التجميل">التجميل</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

								
							</div>
						
			
					
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>