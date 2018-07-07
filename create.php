<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create</title>
<link rel="stylesheet" type="text/css" href="animate.css">
<style>
.modal {
	width: 100%;
	margin: auto;
	background-color: #000;
	height: 100%;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 1;
	background-color: rgba(0,0,0,.9);
	overflow: auto;
	opacity: 1/*display: none;*/
}
.modal-hide {
	opacity: 0;
}
.modal-cont {
	background-color: #0099ff;
	width: 100%;
	height: 130px;
	margin: auto;
	animation-name: abhi;
	animation-duration: .7s;
	margin-top: 15%;
}
.modal-body {
	background-color: #fff;
	width: 100%;
	height: 300px;
	border-left: 3px solid #0099ff;
	border-right: 3px solid #0099ff;
	box-sizing: border-box;
}
.modal-cont h1 {
	color: white;
	text-align: center;
	font-family: verdana;
	font-weight: 100;
	padding-top: 40px;
}
modal-content {
	width: 60%;
	margin: auto;
}
@keyframes abhi {
 from {
 top:-400px;
 opacity:0;
}
to {
	top: 0px;
	opacity: 1;
}
}
.close {
	color: black;
	font-size: 36px;
	float: right;
	margin-right: 10px;
	margin-top: -100px;
}
.close:hover {
	color: white;
	cursor: pointer;
}
.modal-content {
	width: 60%;
	margin: auto;
}
.modal-foot {
	width: 100%;
	height: 50px;
	background-color: #0099ff;
}
#myBtn button {
	background-color: #0099ff;
	border: none;
	padding: 10px 20px;
	color: white;
	font-family: verdana;
	display: flex;
	margin: auto;
	margin-top: 50px;
}
#myBtn button:hover {
	background-color: white;
	color: #0099ff;
	cursor: pointer;
	transition: all .7s ease-in-out;
}
.modal1 {
	width: 100%;
	margin: auto;
	background-color: #000;
	height: 100%;
	position: fixed;
	left: 0;
	top: 0;
	z-index: 1;
	background-color: rgba(0,0,0,.9);
	overflow: auto;
	opacity: 1/*display: none;*/
}
.modal-hide1 {
	opacity: 0;
}
.modal-cont1 {
	background-color: #0099ff;
	width: 100%;
	height: 130px;
	margin: auto;
	animation-name: abhi;
	animation-duration: .7s;
	margin-top: 15%;
}
.modal-body1 {
	background-color: #fff;
	width: 100%;
	height: 300px;
	border-left: 3px solid #0099ff;
	border-right: 3px solid #0099ff;
	box-sizing: border-box;
}
.modal-cont1 h1 {
	color: white;
	text-align: center;
	font-family: verdana;
	font-weight: 100;
	padding-top: 40px;
}
modal-content1 {
	width: 60%;
	margin: auto;
}
@keyframes abhi {
 from {
 top:-400px;
 opacity:0;
}
to {
	top: 0px;
	opacity: 1;
}
}
.clz {
	color: black;
	font-size: 36px;
	float: right;
	margin-right: 10px;
	margin-top: -100px;
}
.clz:hover {
	color: white;
	cursor: pointer;
}
.modal-content1 {
	width: 60%;
	margin: auto;
}
.modal-foot1 {
	width: 100%;
	height: 50px;
	background-color: #0099ff;
}
#myBtn1 button {
	background-color: #0099ff;
	border: none;
	padding: 10px 20px;
	color: white;
	font-family: verdana;
	display: flex;
	margin: auto;
	margin-top: 50px;
}
#myBtn1 button:hover {
	background-color: white;
	color: #0099ff;
	cursor: pointer;
	transition: all .7s ease-in-out;
}
.twice {
	opacity: 0;
}
@font-face {
    font-family: 'Railway to Hells' ;
    src: url(Railway%20to%20Hells.ttf);
}
</style>
</head>

<body style="background-image:url(bg.jpg); background-size:cover; height:100%; overflow:hidden; background-attachment:fixed;">
  <h1 style="color:white; font-family:'Railway to Hells'; text-align:center; font-size:60px; margin-top:50px;" class="animated jackInTheBox">[CREATE]</h1>
  <h1 class="animated bounceInUp" style="color:red; text-align:center; font-family:Verdana, Geneva, sans-serif; font-size:25px; ">Enter to store student's data!</h1>
  <form name="add_record" method="post" action="create.php" enctype="multipart/form-data" style="margin-top:40px;">
    
    <input type="text" class="animated zoomInLeft" placeholder="Enter first name" name="fName" style="border:none; height:30px;  font-family:verdana; background-color:#CCC; margin:auto; display:flex; margin-bottom:20px; width:400px; padding-left:10px; border-radius:5px;"/>
    
    <input type="text" class="animated zoomInRight" placeholder="Enter last name" name="lName" style="border:none; height:30px;  font-family:verdana; background-color:#CCC; margin:auto; display:flex; margin-bottom:20px; width:400px; padding-left:10px; border-radius:5px;"/>
    
    <input type="text" class="animated zoomInLeft" placeholder="Enter eMail ID" name="eMail" style="border:none; height:30px;  font-family:verdana; background-color:#CCC; margin:auto; display:flex; margin-bottom:20px; width:400px; padding-left:10px; border-radius:5px;"/>
    
    <input type="text" class="animated zoomInRight" placeholder="Enter mobile number" name="phone" style="border:none; height:30px;  font-family:verdana; background-color:#CCC; margin:auto; display:flex; margin-bottom:20px; width:400px; padding-left:10px; border-radius:5px;"/>
    
  <input type="submit" class="animated bounceInUp" name="go" style="display:flex; margin:auto; background-color:red; border:none; color:#fff; padding:10px 50px; margin-bottom:20px; margin-top:40px;"/>
  
  <div class="animated bounceInUp"><a href="home.php" style="text-decoration:none; text-align:center; color:red; font-family:Verdana, Geneva, sans-serif; display:block; text-align:center;">Back to C.R.U.D</a></div>
  </form>
  <br>
  <h4 style="text-align: center; font-family: verdana;" class="animated rubberBand"><a href="logout.php?logout" style=" color: white; text-decoration: none; border: 1px solid #fff; padding: 10px;">Sign Out</a></h4>
<?php
include_once 'config.php';
session_start();
$_SESSION["id"] = $row['id'];
?>
<?php
if(isset($_POST['go'])){
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$eMail = $_POST['eMail'];
$phone = $_POST['phone'];
$query = "insert into abhiram_table (stu_id, stu_fName, stu_lName, stu_eMail, stu_phone, current_login) values (NULL, '$fName', '$lName', '$eMail', '$phone', '".$row['id']."')";
$create_record = mysqli_query($connect,$query);
if($create_record){
		?>
<div class="modal" id="myModal" onClick="closeMann()">
  <div class="modal-content">
    <div class="modal-cont" id="cont">
      <h1>Data added sucessfully!!!</h1>
      <span class="close" id="close">&times;</span> </div>
    <div class="modal-body"> <img src="tick.gif" width="300px" height="220px" style="margin:auto;display:flex;">
      <h1 style="text-align:center; color:#0099FF; font-family:Verdana, Geneva, sans-serif; margin-top:-20px;">SUCCESS!!</h1>
    </div>
    <div class="modal-foot" style="text-align:center;"></div>
  </div>
</div>
</div>
<?php
}
else{
	?>
<div class="modal1" id="myModal1" onClick="closeMan()">
  <div class="modal-content1">
    <div class="modal-cont1" id="cont1">
      <h1>Failed to add the data!!!</h1>
      <span class="clz" id="clz" onClick="closeMan()">&times;</span>
       </div>
    <div class="modal-body1">
      <img src="hai.png" width="85px" height="85px" style="margin:auto;display:flex; position:relative; top:65px;">
      <h1 style="text-align:center; color:#0099FF; font-family:Verdana, Geneva, sans-serif; margin-top:110px;">FAILED!!</h1>
       </div>
      <div class="modal-foot1"> </div>
    </div>
  </div>
</div>
<?php
}
}
?>
<script>
var modal = document.getElementById('myModal');
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.opacity = 0;
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
function closeMann(){
	document.getElementById("myModal").className = "twice";	
}
var modal2 = document.getElementById('myModal1');
var btn2 = document.getElementById("myBtn1");
var span2 = document.getElementsByClassName("clz")[0];
btn2.onclick = function() {
    modal2.style.display = "block";
}
span2.onclick = function() {
    modal2.style.opacity = 0;;
}
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}
function closeMan(){
	document.getElementById("myModal1").className = "twice";	
}
</script>
</body>
</html>