<?php
include 'connect.php';
$conn = OpenCon();
if(isset($_POST['submit'])){
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $sql1="SELECT * FROM `login` WHERE `login_id`='$user' and `pswd`='$pass'";
        $sql="SELECT 'mgr_id' FROM `login` WHERE `login_id`='$user' and `pswd`='$pass'";
        $result = $conn->query($sql1);
        $row = mysqli_fetch_assoc($result);
        $mgr_id = $row['mgr_id'];
        // $mgr_id = $conn->query($sql);
        echo "Connection successful";
        // $count= $result->num_rows;
        if($result->num_rows==1){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['mgr_id']= $mgr_id;
        header("location:loggedin.php"); 
        }
        else {
            echo"<script>alert('Wrong Credentials. Please Try Again')</script>";
        }
    }
}
?>
<!doctype html>
<html>
<head>
    <title>Login</title>
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
						Login
                    </span>
                    <div class="wrap-input2 validate-input" data-validate="customer ID is required">
						<input class="input2" type="text"  name="user" id="user">
						<span class="focus-input2" data-placeholder="Username:"></span>
					</div>

					<div class="wrap-input2 validate-input" data-validate="Manager ID is required">
						<input class="input2" type="text" name="pass" id="pass">
                        <span class="focus-input2" data-placeholder="Password:"></span>
                    </div>
                    <div class="container-contact2-form-btn">
						<div class="wrap-contact2-form-btn">
							<div class="contact2-form-bgbtn"></div>
							<button name="submit" class="contact2-form-btn">
                            Login
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
</body>
</html>