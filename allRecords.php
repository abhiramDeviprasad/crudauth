<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		@font-face {
    font-family: 'Railway to Hells' ;
    src: url(Railway%20to%20Hells.ttf);
}
body {
    background-image:url("bg.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
html {
    height: 100%;
}
	</style>
</head>
<body>
	<a href="read.php"><img src="left-arrow.png" alt="" width="30" height="30" style="margin: auto; display: flex; margin-top: 20px;"></a>
	<a href="read.php" style="background-image: url(left-arrow.png); width: 30px; height: 30px;"></a>

	<h1 style="color:white; font-family:'Railway to Hells'; text-align:center; font-size:40px; margin-top:70px;" class="animated jackInTheBox">[ALL RECORDS]</h1>
	<?php 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "userdata";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 

		$sql = "SELECT * FROM abhiram_table";
		$result = $conn->query($sql);

		//echo "<p style='color:red;'>".$ip['cityName']."</p>";

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "<p style='color:grey;  font-family:Verdana, Geneva; text-align: center; font-size: 12px;'>"."id: " . $row["stu_id"]. " - First Name: " . $row["stu_fName"]. " - Last Name: " . $row["stu_lName"]. " - Email: " . $row["stu_eMail"]. " - Mobile Number: " . $row["stu_phone"]. " <br>"."</p>";
		        
		    }
		} else {
		    echo "0 results";
		}
	 ?>
<br><br>
	 <div  class="animated bounceInUp"><a href="home.php" style="text-decoration:none; text-align:center; color:red; font-family:Verdana, Geneva, sans-serif; display:block; text-align:center; font-weight: bold;">Back to C.R.U.D</a></div>
<br>
<h4 style="text-align: center; font-family: verdana;" class="animated rubberBand"><a href="logout.php?logout" style=" color: white; text-decoration: none; border: 1px solid #fff; padding: 10px;">Sign Out</a></h4>
</body>
</html>