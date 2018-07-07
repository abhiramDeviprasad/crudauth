<?php

session_start();
require_once 'db_connect.php';
	if(isset($_SESSION['user']) != ""){
		header("Location: home.php");
		exit;
	}
$error = false;
if(isset($_POST['log-btn'])){
	$email = trim($_POST['email']);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);

	$password = trim($_POST['password']);
	$password = strip_tags($password);
	$password = htmlspecialchars($password);

		if(empty($email)){
			$error = true;
			$emailError = "Email cannot be empty";
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$error = true;
			$emailError = "Please enter the valid email address";
		}
		if(empty($password)){
			$error = true;
			$passError = "Password cannot be empty";
		}
		if(!$error){
			$pass = hash('sha256', $password);
			$result = mysql_query("SELECT id, name, password FROM abhiram WHERE email='$email'");
			$row = mysql_fetch_array($result);
			$count = mysql_num_rows($result);
				if($count == 1 && $row['password'] == $pass){
					$_SESSION['user'] = $row['id'];
					header("Location: home.php");
				}
				else{
					$errorMsg = "Incorrect credentials. Please try again!";
				}
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login here</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	@font-face {
    font-family: 'Railway to Hells' ;
    src: url(Railway%20to%20Hells.ttf);
}
@media only screen and (max-width:995px){
	.divElement{
		background: linear-gradient(to right, #000000 , #434343); width: 300px; height: 300px; border-radius: 15px; margin: auto;
	}
}
@media only screen and (min-width:994px){
	.divElement{
		background: linear-gradient(to right, #000000 , #434343); width: 300px; height: 300px; border-radius: 15px;
	}
}
</style>
<body style="background-image:url(bg.jpg); background-size:cover; height:100%; overflow:hidden; background-attachment:fixed;">

<div class="container">

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<h1 class="animated fadeInUp" style="color:#fff; font-family:'Railway to Hells'; text-align:center; font-size:60px; margin-top:70px;">[C  R  U  D]</h1>
				<!-- <h1 style="text-align: center; color: white; margin-top: 100px;">Login</h1> -->
			</div>
			<div class="form-group" style="margin-top: 100px;">
			</div>
			<?php
				if(isset($errorMsg)){
			?>
			<div class="form-group">
				<div class="alert alert-danger" style="text-align: center; margin-top: -70px;">
					<span class="glyphicon glyphicon-info-sign"><span style="font-family: verdana;"> <?php echo $errorMsg; ?></span></span>
				</div>
			</div>
			<?php
				}
			?>
			<div class="form-group col-md-6 col-md-offset-3 divElement">
				<img src="account.png" style="text-align: center; margin: auto; display: flex; margin-top:-30px;">
			<div class="form-group col-md-12" style="margin-top: 50px;">
				<div class="input-group">
					<span class="input-group-addon" style="background-color: white;">
						<span class="glyphicon glyphicon-envelope" style="color: #757376;"></span>
					</span>
					<input type="email" name="email" class="form-control" placeholder="Enter your email">
				</div>
				<span class="text-danger"><?php echo $emailError ?></span>
			</div>
			<div class="form-group col-md-12">
				<div class="input-group">
					<span class="input-group-addon" style="background-color: white;">
						<span class="glyphicon glyphicon-lock" style="color: #757376;"></span>
					</span>
					<input type="password" name="password" class="form-control" placeholder="Enter your password">
				</div>
				<span class="text-danger"><?php echo $passError ?></span>
			</div>
			<div class="form-group">
			</div>
			<div class="form-group col-md-6 col-md-offset-3">
				<button type="submit" class="btn btn-block" name="log-btn" style="background-color: #e52d27; color: white;">Login</button>
			</div>
			<div class="form-group">
			</div>
			<div class="form-group text-center col-md-10 col-md-offset-1" style="padding-top: 10px;">
				<a href="register.php" style="color: grey;">Register here..</a>
			</div>
			</div>
		</div>
	</form>
</div>
</body>
</html>