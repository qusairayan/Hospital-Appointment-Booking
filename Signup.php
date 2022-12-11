
<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query ="INSERT INTO users(ID,password) VALUES ('$uname', '$password')";
        $result = mysqli_query($con,$sql_query);
       

        
    }
if ($result) {
	            echo "
                  <h3>Signup successfully.</h3>  <p>Click here to <a href='Login.php'>Signin</a> again.</p><br/>";
	
  
		  
		  
        } else {
            echo "
                  <h3>Required fields are missing.</h3><br/>
                  <p>Click here to <a href='Signup.php'>Signup</a> again.</p>
                  ";
        }
}
?>

<html lang="en">
<head>
	<title>Signup</title>
	
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form method="post" action="" class="login100-form validate-form">
				<span class="login100-form-title p-b-37">
					Signup
				</span>
  <form method="post" action="">
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" id="txt_uname" name="txt_uname" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password"  id="txt_uname" name="txt_pwd" placeholder="password">
					<span class="focus-input100"></span>
				</div>
<input type="submit" value="Submit" name="but_submit" id="but_submit" />
				<div class="container-login100-form-btn">
				
					<input type="submit" value="Signup" name="but_submit" id="but_submit"  class="login100-form-btn"  />
				</div>

			

				
<br>
				<div class="text-center">
					<a href="Login.php" class="txt2 hov1">
						Don you have an account?, Login!
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	


	
	
		

	
	
	
	
	
	
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>

