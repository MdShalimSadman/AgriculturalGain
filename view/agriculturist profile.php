<?php 

session_start(); 

?>

<html>
<body>
<?php
 if(isset($_POST["btnClick0"])){
	 session_unset();
	 header("Location:../view/Home page.php");
 }
 if(isset($_POST["btnClick00"])){
	 $servername="localhost:3306";
     $usernamedb="root";
     $passwordDB="";
     $dbname="agriculturist";
	 $conn=new mysqli($servername,$usernamedb,$passwordDB,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	$q="DELETE FROM agriculturist_info where user_name='".$_SESSION["uname"]."'";
	session_unset();
	 header("Location:../view/Home page.php");
}
$result=$conn->query($q);
	if($result)
	  echo "data deleted";
    else
		echo "data not deleted";	
	
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
  background-image: url('../view/strw.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<br><br>

<?php
//include("F:\XAMP\htdocs\Model\Agriculturist sign up.php");
// Start the session
?>
<br><h1 style="color:White;font-size:60px;text-align: center;">Thanks for joinig us</h1>
<h3 style="color:White;font-size:20px;text-align: center;">Thank you for creating your account in agricultural gain. Here you can see your detailed information <br>and also can choose what you can do for farmers</h1><br><br>
<div style="background-color:white">
<div style = "background-color: RGB(46,139,87);" >
<h2 style="color:white">Agriculturist's profile:</h2>
</div>
<h1><b><?php echo $_SESSION["uname"]; ?></b></h2>

Email: <?php echo  $_SESSION["email"]; ?>

<br>Gender: <?php echo $_SESSION["gender"]; ?>

<br>Expertizes: <?php echo $_SESSION["sectors"] ?>

<br>Institute: <?php echo $_SESSION["institute"]; ?>

<br>Address: <?php echo $_SESSION["address"] ?>

<br>About: <?php echo $_SESSION["bio"]; ?>
<br><br>

<br><br>
<form action="update.php" method="post">
<input type="submit" style="background-color:RGB(46,139,87); color:white"  value="Update" name="btnClick">
</form>


<form action="#" method="post">
<input type="submit" style="background-color:RGB(46,139,87); color:white"  value="delete" name="btnClick00">
</form>
<br>
</div>

<div style="background-color:white">
<div style = "background-color: RGB(46,139,87);" >
<h2 style="color:white"><b>What can you do for farmers : </b></h2>
</div>



<a href="../Model/farmers list.php"><img src="../view/advice.png" height=45 style="float:left;" ><h2 style="color:RGB(46,139,87);font-size:20px;" ><u>See Farmers asking for advice </u> </h2></a><br>


<a href="../Model/faq.php"><img src="../view/FAQ.png" height=45 style="float:left;" ><h2 style="color:RGB(46,139,87);font-size:20px;"><u>Frequently Asked Questions </u> </h2></a><br>


<a href="../Model/contact.php"><img src="../view/contact.png" height=45 style="float:left;" ><h2 style="color:RGB(46,139,87);font-size:20px;"><u>Contact with other Agriculturists </u> </h2></a><br>

<a href="../Model/Blog.php"><img src="../view/blog.png" height=45 style="float:left;" ><h2 style="color:RGB(46,139,87);font-size:20px;"><u>Write or view Blogs </u> </h2></a><br>

</div>
<br><br>
<h1 style="color:White;font-size:11px;text-align: center;">2022 © <b> AGRICULTURAL GAIN</b> UNDER REGISTRATION<br>
DEVELOPED BY: <b> MD. SHALIM SADMAN</b> ID: 20-42303-1, WEBTECH[A], AMERICAN INTERNATIONAL UNIVERSITY BANGLADESH </h1>
<br>
</body>
</html>