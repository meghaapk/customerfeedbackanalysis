<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
	$cid=$_POST['cid'];
	$mid=$_POST['mid'];
	$message=$_POST['message'];
	$rating=$_POST['rating'];
	$sql="INSERT INTO feedback(`f_id`,`c_id`,`mgr_id`,`suggestions`,`rating`,`action`)VALUES(NULL,'$cid','$mid','$message','$rating','pending')";
	if($conn->query($sql) === true){
		header('location:loggedin.php');
	}else{
		echo"<script>alert('Customer Already Exists or check your Manager ID')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FEEDBACK</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

	<div class="bg-contact2" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact2">
			<div class="wrap-contact2">
				<form class="contact2-form validate-form" method="POST">
					<span class="contact2-form-title">
						FEEDBACK
					</span>

					<div class="wrap-input2 validate-input" data-validate="customer ID is required">
						<input class="input2" type="text" name="cid">
						<span class="focus-input2" data-placeholder="customer ID"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Manager ID is required">
						<input class="input2" type="text" name="mid">
						<span class="focus-input2" data-placeholder="Manager ID"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate = "Rating is required">
						<input class="input2" type="number" min="1" max="5" name="rating">
						<span class="focus-input2" data-placeholder="RATING OUT OF 5"></span>
					</div>
					<div class="wrap-input2 validate-input" data-validate = "Message is required">
						<textarea class="input2" name="message"></textarea>
						<span class="focus-input2" data-placeholder="SUGGESTIONS"></span>
					</div>

					<div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button name="submit" class="contact2-form-btn">
								Send Your Feedback
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
