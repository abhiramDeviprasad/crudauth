<?php
ob_start();
session_start();
	if( isset($_SESSION['user'])!="" ){
	  header("Location: home.php");
	}
require_once 'db_connect.php';
$error = false;
if(isset($_POST['reg-btn'])){
	$name = trim($_POST['name']);
	$name = strip_tags($name);
	$name = htmlspecialchars($name);

	$email = trim($_POST['email']);
	$email = strip_tags($email);
	$email = htmlspecialchars($email);

	$mobile = trim($_POST['mobile']);
	$mobile = strip_tags($mobile);
	$mobile = htmlspecialchars($mobile);

	$password = trim($_POST['password']);
	$password = strip_tags($password);
	$password = htmlspecialchars($password);
if(empty($name)){
	$error = true;
	$nameError = "Name cannot be empty!";
}
else if (strlen($name) < 3) {
	$error = true;
	$nameError = "Name must have more than 3 characters";
}
else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
	$error = true;
	$nameError = "Name must contain alphabets only";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
	$error = true;
	$emailError = "Please enter valid email address";
}
else{
	$query = "SELECT email FROM abhiram WHERE email='$email'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
		if($count != 0){
			$error = true;
			$emailError = "Email id already exists!";
		}
}
if(empty($mobile)){
	$error = true;
	$mobileError = "Mobile number cannot be empty";
}
else if(!preg_match("/^[0-9]{10}$/", $mobile)){
	$error = true;
	$mobileError = "Only numbers are allowed";
}
else if(strlen($mobile) != 10){
	$error = true;
	$mobileError = "Only 10 numbers are allowed";
}
if(empty($password)){
	$error = true;
	$passError = "Password cannot be empty";
}
else if(strlen($password) < 6){
	$error = true;
	$passError = "Password must be more than 6 characters";
}
$pass = hash("sha256", $password);
if(!$error){
	$query = "INSERT INTO abhiram(name,email,mobile,password) VALUES('$name','$email','$mobile','$pass')";
	$res = mysql_query($query);
		if($res){
			$errorType = "success";
			$errorMsg = "Sucessfully registered! You may login now!";
			unset($email);
			unset($name);
			unset($mobile);
			unset($password);
		}
		else{
			$errorType = "danger";
			$errorMsg = "Something went wrong, try again later..";
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Register here</title>
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
		background: linear-gradient(to right, #000000 , #434343); width: 300px; height: 380px; border-radius: 15px; margin: auto;
	}
}
@media only screen and (min-width:994px){
	.divElement{
		background: linear-gradient(to right, #000000 , #434343); width: 300px; height: 380px; border-radius: 15px;
	}
}
</style>
<body style="background-image:url(bg.jpg); background-size:cover; height:100%; overflow:hidden; background-attachment:fixed;">
<div class="container">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<div class="col-md-6 col-md-offset-3">
			<div class="form-group">
				<!-- <h1 style="text-align: center;">Sign-Up</h1> -->
				<h1 class="animated fadeInUp" style="color:#fff; font-family:'Railway to Hells'; text-align:center; font-size:60px; margin-top:70px;">[C  R  U  D]</h1>
			</div>
			<div class="form-group" style="margin-top: 100px;">
			</div>
			<?php
				if(isset($errorMsg)){
			?>
			<div class="form-group">
				<div class="alert alert-<?php echo (errorType == "success") ? "success" : $errorType; ?>" style="text-align: center; margin-top: -70px;">
					<span class="glyphicon glyphicon-info-sign"><span style="font-family: verdana; text-align: center;"> <?php echo $errorMsg; ?></span></span>
				</div>
			</div>
			<?php
				}
			?>
			<!-- <div class="form-group"> -->
				<div class="form-group col-md-6 col-md-offset-3 divElement">
				<img src="account.png" style="text-align: center; margin: auto; display: flex; margin-top:-30px;">
			<div class="form-group col-md-12" style="margin-top: 40px;">
				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-user" style="color: #757376;"></span>
					</span>
					<input type="text" name="name" class="form-control" placeholder="Enter your name" value="<?php echo $name; ?>">
				</div>
				<span class="text-danger"><?php echo $nameError; ?></span>
			</div>
			<div class="form-group col-md-12">
				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-envelope" style="color: #757376;"></span>
					</span>
					<input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo $email; ?>">
				</div>
				<span class="text-danger"><?php echo $emailError; ?></span>
			</div>
			<div class="form-group col-md-12">
				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-earphone" style="color: #757376;"></span>
					</span>
					<input type="text" name="mobile" class="form-control" placeholder="Enter your mobile number" value="<?php echo $mobile; ?>">
				</div>
				<span class="text-danger"><?php echo $mobileError; ?></span>
			</div>
			<div class="form-group col-md-12">
				<div class="input-group">
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-lock" style="color: #757376;"></span>
					</span>
					<input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?php echo $password; ?>">
				</div>
				<span class="text-danger"><?php echo $passError; ?></span>
			</div>
			<!-- <div class="form-group col-md-10 col-md-offset-1">
			</div> -->
			<div class="form-group col-md-6 col-md-offset-3">
				<button type="submit" class="btn btn-block" name="reg-btn" style="background-color: #e52d27; color: white;">Sign-Up</button>
			</div>
			<div class="form-group">
			</div>
			<div class="form-group text-center col-md-12" style="padding-top: 10px;">
				<a href="login.php" style="color: grey;">Login here..</a>
			</div>
		</div>
	</div>
	</form>
</div>
</body>
</html>
<?php ob_end_flush(); ?>