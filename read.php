<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Read</title>
<link rel="stylesheet" type="text/css" href="animate.css">
<style>
.modal3 {
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
.modal-hide3 {
	opacity:0;
}
.modal-cont3 {
	background-color: #0099ff;
	width: 100%;
	height: 130px;
	margin: auto;
	animation-name: abhi;
	animation-duration: .7s;
	margin-top: 15%;
}
.modal-body3 {
	background-color: #fff;
	width: 100%;
	height: 300px;
	border-left: 3px solid #0099ff;
	border-right: 3px solid #0099ff;
	box-sizing: border-box;
}
.modal-cont3 h1 {
	color: white;
	text-align: center;
	font-family: verdana;
	font-weight: 100;
	padding-top: 40px;
}
modal-content3 {
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
.close3 {
	color: black;
	font-size: 36px;
	float: right;
	margin-right: 10px;
	margin-top: -100px;
}
.close3:hover {
	color: white;
	cursor: pointer;
}
.modal-content3 {
	width: 60%;
	margin: auto;
}
.modal-foot3 {
	width: 100%;
	height: 50px;
	background-color: #0099ff;
}
#myBtn3 button {
	background-color: #0099ff;
	border: none;
	padding: 10px 20px;
	color: white;
	font-family: verdana;
	display: flex;
	margin: auto;
	margin-top: 50px;
}
#myBtn3 button:hover {
	background-color: white;
	color: #0099ff;
	cursor: pointer;
	transition: all .7s ease-in-out;
}
.twice{
	opacity:0;	
}
@font-face {
    font-family: 'Railway to Hells' ;
    src: url(Railway%20to%20Hells.ttf);
}
</style>
</head>

<body style="background-image:url(bg.jpg); background-size:cover; overflow:hidden; background-attachment:fixed;">
<h1 style="color:white; font-family:'Railway to Hells'; text-align:center; font-size:60px; margin-top:70px;" class="animated jackInTheBox">[READ]</h1>
<p style="text-align: center; font-family:Verdana, Geneva, sans-serif;"><a href="allRecords.php" style="text-decoration: none; color: white;">Open all the records</a></p>
<h1 class="animated bounceInDown" style="color:red; text-align:center; font-family:Verdana, Geneva, sans-serif; font-size:25px; margin-top:30px;">Enter ID to view student's detail!!</h1>
<form name="read_record" method="post" action="read.php">
<input type="text" class="animated zoomInLeft" placeholder="Enter student ID" name="stu_id" style="border:none; height:30px;  font-family:verdana; background-color:#CCC; margin:auto; display:flex; margin-bottom:20px; width:400px; padding-left:10px; border-radius:5px;"/><br>
<input type="submit" class="animated bounceInUp" name="submit" style="display:flex; margin:auto; background-color:red; border:none; color:#fff; padding:10px 20px; margin-top:10px; margin-bottom:20px;"/>
<div  class="animated bounceInUp"><a href="home.php" style="text-decoration:none; text-align:center; color:red; font-family:Verdana, Geneva, sans-serif; display:block; text-align:center;">Back to C.R.U.D</a></div>
<br>
<h4 style="text-align: center; font-family: verdana;" class="animated rubberBand"><a href="logout.php?logout" style=" color: white; text-decoration: none; border: 1px solid #fff; padding: 10px;">Sign Out</a></h4>
<?php
include_once 'config.php';
?>
<?php
if(isset($_POST['submit'])){
$stu_id = $_POST['stu_id'];
$query = "select * from abhiram_table where stu_id = $stu_id";
$read_record = mysqli_query($connect,$query);
$rows = mysqli_num_rows($read_record);	
?>
<div class="modal3" id="myModal3">
  <div class="modal-content3">
    <div class="modal-cont3" id="cont3">
      <h1>Requested Student's details</h1>
      <span class="close3" id="close3"  onClick="closeMan()">&times;</span> 
      </div>
<table width="50%" cellpadding="20" align="center" style="margin-top:-280px; text-align:center; color:#666; font-family:Verdana, Geneva, sans-serif; font-weight:100; font-size:14px; border:1px solid #000;">
<tr align="center" style="">
<th>stu_id</th>
<th>stu_fName</th>
<th>stu_lName</th>
<th>stu_eMail</th>
<th>stu_phone</th>
</tr>
<?php
if($rows > 0){
	while($record = mysqli_fetch_array($read_record)){
?>
    <div class="modal-body3">
            <tr align="center" style="text-align:center;">
                <th><?php echo $record['stu_id'];?></th>
                <th><?php echo $record['stu_fName'];?></th>
                <th><?php echo $record['stu_lName'];?></th>
                <th><?php echo $record['stu_eMail'];?></th>
                <th><?php echo $record['stu_phone'];?></th>
            </tr>
       </div>
      <div class="modal-foot3"> </div>
    </div>
  </div>
</div>


<?php
	}
}
?>
</table>
<?php
}
?>
<script>
var modal3 = document.getElementById('myModal3');
var btn3 = document.getElementById("myBtn3");
var span3 = document.getElementsByClassName("close3")[0];
btn3.onclick = function() {
    modal3.style.display = "block";
}
span3.onclick = function() {
    modal3.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3.style.display = "none";
    }
}
function closeMan(){
	document.getElementById("myModal3").className = "twice";	
}
</script>
</body>
</html>