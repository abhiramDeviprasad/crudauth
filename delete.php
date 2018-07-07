<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete</title>
<link rel="stylesheet" type="text/css" href="animate.css">
<style>
.modal4 {
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
	opacity:1
	/*display: none;*/
}
.modal-hide4 {
	opacity:0;
}
.modal-cont4 {
	background-color: #0099ff;
	width: 100%;
	height: 130px;
	margin: auto;
	animation-name: abhi;
	animation-duration: .7s;
	margin-top: 15%;
}
.modal-body4 {
	background-color: #fff;
	width: 100%;
	height: 300px;
	border-left: 3px solid #0099ff;
	border-right: 3px solid #0099ff;
	box-sizing: border-box;
}
.modal-cont4 h1 {
	color: white;
	text-align: center;
	font-family: verdana;
	font-weight: 100;
	padding-top: 40px;
}
modal-content4 {
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
.close4 {
	color: black;
	font-size: 36px;
	float: right;
	margin-right: 10px;
	margin-top: -100px;
}
.close4:hover {
	color: white;
	cursor: pointer;
}
.modal-content4 {
	width: 60%;
	margin: auto;
}
.modal-foot4 {
	width: 100%;
	height: 50px;
	background-color: #0099ff;
}
#myBtn4 button {
	background-color: #0099ff;
	border: none;
	padding: 10px 20px;
	color: white;
	font-family: verdana;
	display: flex;
	margin: auto;
	margin-top: 50px;
}
#myBtn4 button:hover {
	background-color: white;
	color: #0099ff;
	cursor: pointer;
	transition: all .7s ease-in-out;
}

.modal5 {
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
	opacity:1
	/*display: none;*/
}
.modal-hide5 {
	opacity:0;
}
.modal-cont5 {
	background-color: #0099ff;
	width: 100%;
	height: 130px;
	margin: auto;
	animation-name: abhi;
	animation-duration: .7s;
	margin-top: 15%;
}
.modal-body5 {
	background-color: #fff;
	width: 100%;
	height: 300px;
	border-left: 3px solid #0099ff;
	border-right: 3px solid #0099ff;
	box-sizing: border-box;
}
.modal-cont5 h1 {
	color: white;
	text-align: center;
	font-family: verdana;
	font-weight: 100;
	padding-top: 40px;
}
modal-content5 {
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
.clz1 {
	color: black;
	font-size: 36px;
	float: right;
	margin-right: 10px;
	margin-top: -100px;
}
.clz1:hover {
	color: white;
	cursor: pointer;
}
.modal-content5 {
	width: 60%;
	margin: auto;
}
.modal-foot5 {
	width: 100%;
	height: 50px;
	background-color: #0099ff;
}
#myBtn5 button {
	background-color: #0099ff;
	border: none;
	padding: 10px 20px;
	color: white;
	font-family: verdana;
	display: flex;
	margin: auto;
	margin-top: 50px;
}
#myBtn5 button:hover {
	background-color: white;
	color: #0099ff;
	cursor: pointer;
	transition: all .7s ease-in-out;
}
.twice1{
	opacity:0;	
}
@font-face {
    font-family: 'Railway to Hells' ;
    src: url(Railway%20to%20Hells.ttf);
}
</style>
</head>

<body style="background-image:url(bg.jpg); background-size:cover; overflow:hidden; background-attachment:fixed;">
<h1 style="color:white; font-family:'Railway to Hells'; text-align:center; font-size:60px; margin-top:70px;" class="animated jackInTheBox">[DELETE]</h1>
<p style="text-align: center; font-family:Verdana, Geneva, sans-serif;"><a href="allRecords.php" style="text-decoration: none; color: white;">Open all the records</a></p>
<h1 style="color:red; text-align:center; font-family:Verdana, Geneva, sans-serif; margin-top:30px; font-size:25px;" class="animated bounceInDown">Enter ID to delete student's detail!!</h1>
<form name="delete_record" method="post" action="delete.php">
<input type="text" class="animated zoomInLeft" placeholder="Enter student ID" name="stu_id" style="border:none; height:30px;  font-family:verdana; background-color:#CCC; margin:auto; display:flex; margin-bottom:20px; width:400px; padding-left:10px; border-radius:5px;"/><br>

<input type="submit" class="animated bounceInUp" name="submit" style="display:flex; margin:auto; background-color:red; border:none; color:#fff; padding:10px 20px; margin-top:10px; margin-bottom:20px;"/>

<div  class="animated bounceInUp"><a href="home.php" style="text-decoration:none; text-align:center; color:red; font-family:Verdana, Geneva, sans-serif; display:block; text-align:center;">Back to C.R.U.D</a></div>
</form>

<br>
<h4 style="text-align: center; font-family: verdana;" class="animated rubberBand"><a href="logout.php?logout" style=" color: white; text-decoration: none; border: 1px solid #fff; padding: 10px;">Sign Out</a></h4>
<?php
include_once 'config.php';
?>
<?php
if(isset($_POST['submit'])){
$stu_id = $_POST['stu_id'];
$query = "delete from abhiram_table where stu_id = $stu_id";
$delete_record = mysqli_query($connect,$query);
if($delete_record){
?>
<div class="modal4" id="myModal4">
  <div class="modal-content4">
    <div class="modal-cont4" id="cont4">
      <h1>Data deleted sucessfully!!!</h1>
      <span class="close4" id="close4" onClick="closeMan3()">&times;</span> 
      </div>
    <div class="modal-body4">
      <img src="tick.gif" width="300px" height="220px" style="margin:auto;display:flex;">
      <h1 style="text-align:center; color:#0099FF; font-family:Verdana, Geneva, sans-serif; margin-top:-20px;">DELETED!!</h1>
       </div>
      <div class="modal-foot4"> </div>
    </div>
  </div>
</div>
<?php
}
else{
	?>
    	<div class="modal5" id="myModal5" onClick="closeMan4()">
  <div class="modal-content5">
    <div class="modal-cont5" id="cont5">
      <h1>Failed to delete the data!!!</h1>
      <span class="clz1" id="clz1" onClick="closeMan()">&times;</span>
       </div>
    <div class="modal-body5">
      <img src="hai.png" width="85px" height="85px" style="margin:auto;display:flex; position:relative; top:65px;">
      <h1 style="text-align:center; color:#0099FF; font-family:Verdana, Geneva, sans-serif; margin-top:110px;">FAILED!!</h1>
       </div>
      <div class="modal-foot5"> </div>
    </div>
  </div>
</div>
<?php
}
}
?>
<script>
var modal4 = document.getElementById('myModal4');
var span4 = document.getElementsByClassName("close4")[0];
span4.onclick = function() {
    modal4.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal4) {
        modal4.style.display = "none";
    }
}
function closeMan3(){
	document.getElementById("myModal4").className = "twice1";	
}

var modal5 = document.getElementById('myModal5');
var btn5 = document.getElementById("myBtn5");
var span5 = document.getElementsByClassName("clz1")[0];
btn5.onclick = function() {
    modal5.style.display = "block";
}
span5.onclick = function() {
    modal5.style.opacity = 0;;
}
window.onclick = function(event) {
    if (event.target == modal5) {
        modal5.style.display = "none";
    }
}
function closeMan4(){
	document.getElementById("myModal5").className = "twice1";	
}
</script>
</body>
</html>