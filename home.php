<?php
ob_start();
 session_start();
 require_once 'config.php';
 require_once 'db_connect.php';
 if( !isset($_SESSION['user']) ) {
  header("Location: login.php");
  exit;
 }
 $res=mysql_query("SELECT * FROM abhiram WHERE id=".$_SESSION['user']);
 $row=mysql_fetch_array($res);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" type="text/css" href="animate.css">
<style>
.flex{
	width:60%;
	margin:auto;
	display:flex;
	justify-content:space-around;
	margin-top:200px;	
}
@font-face {
    font-family: 'Railway to Hells' ;
    src: url(Railway%20to%20Hells.ttf);
}
</style>
</head>

<body style="background-image:url(bg.jpg); background-size:cover; overflow:hidden; background-attachment:fixed;">
	<h1 style="text-transform: capitalize; color: white; text-align: center; font-family: verdana; font-weight: 100;">welcome, <?php echo $row['name'] ?></h1>
	<h5 style="text-transform: capitalize; color: white; text-align: center; font-family: verdana; font-weight: 100; margin-top: -15px;">Good to see you again!</h5>
<h1 class="animated fadeInUp" style="color:#fff; font-family:'Railway to Hells'; text-align:center; font-size:60px; margin-top:70px;">[C  R  U  D]</h1>
<p class="animated fadeInDownBig" style="font-family:Verdana, Geneva, sans-serif; font-weight:100; color:#fff; text-align:center; font-weight:bolder; margin-top:-30px;">Your details.. In safety!!</p>
<div class="flex">
<form name="create_record" method="post" action="create.php">
<input type="button" class="animated bounceIn" name="create" value="Create" onclick=" window.open('create.php','_self')" style="background-color:red; color:#FFFFFF; padding:25px 35px; border:none;margin-top:-30px;"/>
</form>

<form name="read_record" method="post" action="read.php">
<input type="button" class="animated bounceIn" name="read" value="Read" onclick=" window.open('read.php','_self')" style="background-color:red; color:#FFFFFF; padding:25px 40px; border:none;margin-top:-30px;"/>
</form>

<form name="update_record" method="post" action="update.php">
<input type="button" class="animated bounceIn" name="update" value="Update" onclick=" window.open('update.php','_self')" style="background-color:red; color:#FFFFFF; padding:25px 35px; border:none;margin-top:-30px;"/>
</form>

<form name="delete_record" method="post" action="delete.php">
<input type="button" class="animated bounceIn" name="delete" value="Delete" onclick=" window.open('delete.php','_self')" style="background-color:red; color:#FFFFFF; padding:25px 35px; border:none;margin-top:-30px;"/>
</form>
</div>
<br><br><br>
<h4 style="text-align: center; font-family: verdana;" class="animated rubberBand"><a href="logout.php?logout" style=" color: white; text-decoration: none; border: 1px solid #fff; padding: 10px;">Sign Out</a></h4>
</body>
</html>
<?php ob_end_flush(); ?>