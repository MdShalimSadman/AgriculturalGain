<?php 

session_start(); 

?>

<html>
<head>
</head>
<body>
<?php
 if(isset($_POST["btnClick0"])){
	 session_unset();
	 header("Location:../view/Home page.php");
 }
 
?>
<div style = "background-color: white;" >
<a href="../view/Home page.php"><img src="../view/logo.jpg" height=130 style="float:left;" ></a>
	 <h3 style="float: right; color: RGB(46,139,87)"><br><br><a style="color: RGB(46,139,87)" href="../view/agriculturist profile.php"><img src="../view/profile.png" height=30 style="float:left;" ><?php echo $_SESSION["uname"] ; ?></a></h3>
	 
<br><h1 style= "color: cmyk(0,0,0,1);font-size:30px;font-family:'public sans'"> <b>AGRICULTURAL GAIN </b> </h1>
<h4 style= "color:RGB(105,105,105) ;font-size:18px;font-family:'public sans'"> A complete solution of farming </h4>

<form action="#" method="post">
<input type="submit" style="background-color:white; color:RGB(46,139,87);font-size:15px; float:right; border:white"  value="Sign Out" name="btnClick0"><img src="../view/logout.png" height=30 style="float:right;" >
</form>
<br>


<div style = "background-color: RGB(46,139,87);" >

<form action="../view/Home page.php" method="post">
<input type="submit" style="background-color:RGB(46,139,87); color:white;font-size:19px; border:RGB(46,139,87); float:left"  value="         Home          " name="btnClick101">
</form>
<form action="../view/about.php" method="post">
<input type="submit" style="background-color:RGB(46,139,87); color:white;font-size:19px; border:RGB(46,139,87); float:left"  value="         About        " name="btnClick102">
</form>
<form action="../view/contact us.php" method="post">
<input type="submit" style="background-color:RGB(46,139,87); color:white;font-size:19px; border:RGB(46,139,87)"  value="         Contact us         " name="btnClick103">
</form>

</div>
</div>

<style>
body {
  background-image: url('../view/dhan.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>


<!DOCTYPE html>
<html>
<body>
<br><br>
<div style = "background-color: RGB(46,139,87);">
<h3 style="color:white;font-size:30px"><?php

// Echo session variables that were set on previous page
echo "Agriculturist :" . $_SESSION["uname"] . ".<br>";

?></h3>
</div>


<div style = "background-color: white;">
<div style = "background-color: RGB(46,139,87);">
<h3 style="color:white;">List of Farmers asking for advice : </h3>
</div>
<p>
<style>
table,th,tr
{

    border: 1px solid;
 
}
table
{
    border-collapse: collapse;
  width: 100%
}

table.center {
  margin-left: auto; 
  margin-right: auto;
}
td {
  text-align: center;
}
</style>
<?php

//READ PART: 
$myfile = fopen("farmers.txt", "r") or die("Unable to open file!"); ?>
<table class="center">
<?php   
while(!feof($myfile)) {
	?>
  <tr>
  <td style="text-align: center"><?php echo fgets($myfile)?></td>
  </tr>
  <?php
}
fclose($myfile)
?>
</p>
</table>
</div>

<br><br>
<h1 style="color:White;font-size:11px;text-align: center;">2022 © <b> AGRICULTURAL GAIN</b> UNDER REGISTRATION<br>
DEVELOPED BY: <b> MD. SHALIM SADMAN</b> ID: 20-42303-1, WEBTECH[A], AMERICAN INTERNATIONAL UNIVERSITY BANGLADESH </h1>
<br>
</body>
</html>