<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$cid=$_POST['cid'];
	$phone=$_POST['phone'];
	$dob=$_POST['dob'];	
	$sql="INSERT INTO `customer`(`c_id`, `c_name`, `c_phno`, `email_id`, `dob`) VALUES('$cid','$name','$phone','$email','$dob')";
	if($conn->query($sql) === true){
		header('location:feedback.php');
	}else{
		echo"<script>alert('Customer Already Exists')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Details</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor1/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor1/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor1/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css1/util.css">
	<link rel="stylesheet" type="text/css" href="css1/main.css">
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					CUSTOMERDETAILS
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" id="name" type="text" name="name" placeholder="Name">
					<label class="label-input100" for="name">
						<span class="lnr lnr-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" id="email" type="text" name="email" placeholder="Email">
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Phone is required">
					<input class="input100" id="phone" type="tel" maxlength="10" name="phone" placeholder="Phone">
					<label class="label-input100" for="phone">
						<span class="lnr lnr-phone-handset"></span>
					</label>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "customerid is required">
					<input class="input100" id="cid" type="text" name="cid" placeholder="CustomerId">
					<label class="label-input100" for="phone">
						
					</label>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "dob is required">
					<input class="input100" id="dob" type="date" name="dob" placeholder="Date of birth">
					<label class="label-input100" for="phone">
						
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button name="submit" class="contact100-form-btn">
							submit
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>
