<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div style="background-color:white;">
<a href="../view/Home page.php"><img src="../view/logo.jpg" height=130 style="float:left;" ></a>
<h3 style="float: right; color: RGB(46,139,87)"><br><br><br><a style="color: RGB(46,139,87)" href="../view/login.php">Already have an account?</a></h3>
<br><h1 style= "color: cmyk(0,0,0,1);font-size:30px;font-family:'public sans'"> <b>AGRICULTURAL GAIN </b> </h1>
<h4 style= "color:RGB(105,105,105) ;font-size:18px;font-family:'public sans'"> A complete solution of farming <br></h4>

<h6 style="color:white">
<?php
$isPost=false;
$username="";
$email="";
$radio="";
$address="";
$bio="";


if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["uname"]!="")
		$username=$_POST["uname"];
	    

	 //echo "button clicked";
}
$password="";
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["pass"]!="")
		$password=$_POST["pass"];
	 //echo "button clicked";
}


if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["gender"]!="")
		$radio=$_POST["gender"];
	  //echo "button clicked";
}
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["address"]!="")
		$address=$_POST["address"];
	    

	 //echo "button clicked";
}
if(isset($_POST["btnClick"]))
{
	$isPost=true;
	if($_POST["bio"]!="")
		$bio=$_POST["bio"];
	    

	 //echo "button clicked";
}
?>
</h6>  
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
  background-image: url('Israel.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<br><br>
<br><h1 style="color:White;font-size:60px;text-align: center;">Create your account</h1>
<h3 style="color:White;font-size:20px;text-align: center;">Create your account, provide your information correctly and help farmers to gain more with agricultural gain</h1><br><br><br>
<div style="background-color:white;">
   <h1 style="color:Black;font-size:40px;">Agriculturist's registration</h1>
   <h3 style= "color: RGB(105,105,105);font-size:18px;font-family:'public sans'">Please provide your information properly</h3> 
   <br>
   

<form action="#" method="post">
<p style="font-size:15px;font-family:'public sans' ">Username: <input type="text" id="uname" name="uname">
<?php
if($isPost==true && $password=="")
 echo "<span style='color:red;'>Required</span>";
?>

<br><br>
Password: <input type="password" id="pass" name="pass">
<?php
if($isPost==true && $username=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Email: <input type="Email" id="email" name="email">
<?php
if($isPost==true && $email=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Gender: <input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Others">Others
<?php
if($isPost==true && $radio=="")
 echo "<span style='color:red;'>Select one</span>";
?>
<br><br>

Expertizes : <input type="checkbox" name="sectors[]" value="Veterinary">Veterinary
<input type="checkbox" name="sectors[]" value="Fisheries ">Fisheries
<input type="checkbox" name="sectors[]" value="Agriculture">Agriculture
<br><br>
Institution: <select name="institute">
<option value="Bangladesh krishi gobeshona institure">Bangladesh krishi gobeshona institure</option>
<option value="Krishi proshikkhon institute">Krishi proshikkhon institute</option>
<option value="Bangladesh poromanu krishi gobeshona institute">Bangladesh poromanu krishi gobeshona institute</option>
<option value="Soil resource development institute">soil resource development institute</option>
<option value="Bangladesh prani shompod gobeshona institute">Bangladesh prani shompod gobeshona institute</option>


</select><br><br>
Address: <textarea name="address" rowspan="3" colspan="30"></textarea>
<?php
if($isPost==true && $address=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
Bio: <textarea name="bio" rowspan="3" colspan="30"></textarea>
<?php
if($isPost==true && $bio=="")
 echo "<span style='color:red;'>Required</span>";
?>
<br><br>
<input type="submit" style="background-color:RGB(46,139,87); color:white"  value="Submit" name="btnClick">
</form>

<h5 style="float:right">Page 1 of 1</h5><br>


<h6 style="color:white">Session and write part
<?php
//storing sector array to a variable
$work="";
$txt4_2 =$_POST["sectors"] ;
 foreach ($txt4_2 as $expertize){
 
   $work=$work." ".$expertize;
}
?>
<?php
session_start();
if($_POST["uname"]!="" && $_POST["pass"]!="" && $_POST["email"]!="" && $_POST["gender"]!="" && $_POST["sectors"]!="" && $_POST["address"]!="" && $_POST["bio"]!="" )
{
$_SESSION["uname"] = $_POST["uname"];
$_SESSION["pass"] = $_POST["pass"];
$_SESSION["email"] = $_POST["email"];
$_SESSION["gender"] = $_POST["gender"];
$_SESSION["sectors"] = $_POST["sectors"];
$_SESSION["institute"] = $_POST["institute"];
$_SESSION["address"] = $_POST["address"];
$_SESSION["bio"] = $_POST["bio"];
$_SESSION["sectors"] = $work;


//TXT WRITE PART: 
$myfile = fopen("../Model/agriculturist.txt", "a") or die("Unable to open file!");
$txt =$_POST["uname"];
fwrite($myfile, "Username: ");
fwrite($myfile, $txt);
fwrite($myfile, " ");

$txt2 =$_POST["email"] ;
fwrite($myfile, "Email: ");
fwrite($myfile, $txt2);
fwrite($myfile, " ");

$txt3 =$_POST["pass"] ;
fwrite($myfile, "Password: ");
fwrite($myfile, $txt3);
fwrite($myfile, " ");

$txt4 =$_POST["gender"] ;
fwrite($myfile, "Gender: ");
fwrite($myfile, $txt4);
fwrite($myfile, " ");

$txt4_1 =$_POST["sectors"] ;
fwrite($myfile, "Expertize: ");
foreach ($txt4_1 as $expertize){
	fwrite($myfile, $expertize);
	fwrite($myfile, " ");
}



$txt5 =$_POST["institute"] ;
fwrite($myfile, "Institute: ");
fwrite($myfile, $txt5);
fwrite($myfile, " ");

$txt6 =$_POST["address"] ;
fwrite($myfile, "Address: ");
fwrite($myfile, $txt6);
fwrite($myfile, " ");

$txt6 =$_POST["bio"] ;
fwrite($myfile, "Bio: ");
fwrite($myfile, $txt6);
fwrite($myfile, " "); 

fclose($myfile); 


//JSON write part
$crdata=file_get_contents('../Model/Infor.json');
    $ar_data=json_decode($crdata,true);
    $put=array(
        'user'=>$_POST["uname"],
        'pw'=>$_POST["pass"],
        'email'=>$_POST["email"],
		'gender'=>$_POST["gender"],
		'institute'=>$_POST["institute"],
		'address'=>$_POST["address"],
		'sectors'=>$_POST["sectors"],
		'bio'=>$_POST["bio"]
    );
    $ar_data[]=$put;
    $final_data=json_encode($ar_data);
    file_put_contents('../Model/Infor.json',$final_data);
	header("Location:agriculturist profile.php");
}
 
 //database insertion part : agriculturist_info
$servername="localhost:3306";
$usernamedb="root";
$passwordDB="";
$dbname="agriculturist";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	echo "Successful connection";
	$q="INSERT INTO agriculturist_info(user_name,Password,Email,Gender,Expertizes,Institute,Address,About) VALUES('".$_POST["uname"]."','".$_POST["pass"]."','".$_POST["email"]."','".$_POST["gender"]."' ,'".$work."','".$_POST["institute"]."','".$_POST["address"]."','".$_POST["bio"]."')";

	$result=$conn->query($q);
	if($result)
	  echo "data inserted";
    else
		echo "data not inserted";	
}

//database insertion part : all_info
$servername="localhost:3306";
$usernamedb="root";
$passwordDB="";
$dbname="All";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	echo "Successful connection";
	$q="INSERT INTO all_info(user_name,Password,userType) VALUES('".$_POST["uname"]."','".$_POST["pass"]."','agriculturist')";

	$result=$conn->query($q);
	if($result)
	  echo "data inserted";
    else
		echo "data not inserted";	
}
?>  
</h6>
</div>
<br><br>
<h1 style="color:White;font-size:11px;text-align: center;">2022 © <b> AGRICULTURAL GAIN</b> UNDER REGISTRATION<br>
DEVELOPED BY: <b> MD. SHALIM SADMAN</b> ID: 20-42303-1, WEBTECH[A], AMERICAN INTERNATIONAL UNIVERSITY BANGLADESH </h1>
<br>
</body>
</html>
