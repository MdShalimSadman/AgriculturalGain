<?php 

session_start(); 

?>
<!DOCTYPE html>
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
<br><br>


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
  background-image: url('../view/apple.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>


<h1 style="color:white;font-size:50px">Frequently Asked Questions </h1>


<?php
$firstQuestion =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<q1>What to do if any virus attacks the rice?</q1>
<topic>(agriculture)</topic>

</note>";
?>
<div style="background-color:white">
<div style="background-color:RGB(46,139,87)">
<h1 style="color:white;font-size:30px">
Question:
<?php
$xml=simplexml_load_string($firstQuestion) or die("Error: Cannot create object");
print_r($firstQuestion);
?>
</h1>
</div>


<h2 style="color: RGB(46,139,87)"><b>Expert Answers:</b><br><br></h2>
<?php
//JSON read part
$crdata=file_get_contents('../Model/Answers.json');
    $ar_data=json_decode($crdata,true);
	for($a=0; $a<=sizeof($ar_data)-1;$a++){
		if($ar_data[$a]['question']==$firstQuestion){
		?>
		<img src="../view/profile.png" height=20 style="float:left;" ><b><?php echo $ar_data[$a]['user']; ?> :</b>
		<?php echo $ar_data[$a]['answer']; ?><br><br>
<?php
	 }
	}
?>
<br>

<form action="#" method="post">
<b>Your Answer:</b> <input type="text" id="answer" name="answer">
<input type="submit" style="background-color:RGB(46,139,87); color:white"  value="Post" name="btnClick">
</form>
<h6 style="color:white">JSON read write:
<?php		
//Json write part:
if($_POST["answer"]!=""){
	$crdata=file_get_contents('../Model/Answers.json');
    $ar_data=json_decode($crdata,true);
    $put=array(
		'question'=>$firstQuestion,
        'user'=>$_SESSION["uname"],
        'answer'=>$_POST["answer"]
    );
    $ar_data[]=$put;
    $final_data=json_encode($ar_data);
    file_put_contents('../Model/Answers.json',$final_data);
	header("Location:faq.php");
}	
?></h6>
</div>




<?php
$secondQuestion =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<q1>What is soil health?</q1>
<topic>(agriculture)</topic>

</note>";
?>
<div style="background-color:white">
<div style="background-color:RGB(46,139,87)">
<h1 style="color:white;font-size:30px">
Question:
<?php
$xml=simplexml_load_string($secondQuestion) or die("Error: Cannot create object");
print_r($secondQuestion);
?>
</h1>
</div>


<h2 style="color: RGB(46,139,87)"><b>Expert Answers:</b><br><br></h2>
<?php
//JSON read part
$crdata=file_get_contents('../Model/Answers.json');
    $ar_data=json_decode($crdata,true);
	for($a=0; $a<=sizeof($ar_data)-1;$a++){
		if($ar_data[$a]['question']==$secondQuestion){
		?>
		<img src="../view/profile.png" height=20 style="float:left;" ><b><?php echo $ar_data[$a]['user']; ?> :</b>
		<?php echo $ar_data[$a]['answer']; ?><br><br>
<?php
	 }
	}
?>
<br>

<form action="#" method="post">
<b>Your Answer:</b> <input type="text2" id="answer2" name="answer2">
<input type="submit" style="background-color:RGB(46,139,87); color:white"  value="Post" name="btnClick2">
</form>
<h6 style="color:white">
<?php		
//Json write part:
if($_POST["answer2"]!=""){
	$crdata=file_get_contents('../Model/Answers.json');
    $ar_data=json_decode($crdata,true);
    $put=array(
		'question'=>$secondQuestion,
        'user'=>$_SESSION["uname"],
        'answer'=>$_POST["answer2"]
    );
    $ar_data[]=$put;
    $final_data=json_encode($ar_data);
    file_put_contents('../Model/Answers.json',$final_data);
	header("Location:faq.php");
}	
?></h6>
</div>


<?php
$thirdQuestion =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<q1>What are the common insecticides?</q1>
<topic>(agriculture)</topic>

</note>";
?>
<div style="background-color:white">
<div style="background-color:RGB(46,139,87)">
<h1 style="color:white;font-size:30px">
Question:
<?php
$xml=simplexml_load_string($thirdQuestion) or die("Error: Cannot create object");
print_r($thirdQuestion);
?>
</h1>
</div>

<h2 style="color: RGB(46,139,87)"><b>Expert Answers:</b><br><br></h2>
<?php
//JSON read part
$crdata=file_get_contents('../Model/Answers.json');
    $ar_data=json_decode($crdata,true);
	for($a=0; $a<=sizeof($ar_data)-1;$a++){
		if($ar_data[$a]['question']==$thirdQuestion){
		?>
		<img src="../view/profile.png" height=20 style="float:left;" ><b><?php echo $ar_data[$a]['user']; ?> :</b>
		<?php echo $ar_data[$a]['answer']; ?><br><br>
<?php
	 }
	}
?>
<br>

<form action="#" method="post">
<b>Your Answer:</b> <input type="text" id="answer3" name="answer3">
<input type="submit" style="background-color:RGB(46,139,87); color:white"  value="Post" name="btnClick3">
</form>
<h6 style="color:white">
<?php		
//Json write part:
if($_POST["answer3"]!=""){
	$crdata=file_get_contents('../Model/Answers.json');
    $ar_data=json_decode($crdata,true);
    $put=array(
		'question'=>$thirdQuestion,
        'user'=>$_SESSION["uname"],
        'answer'=>$_POST["answer3"]
    );
    $ar_data[]=$put;
    $final_data=json_encode($ar_data);
    file_put_contents('../Model/Answers.json',$final_data);
	header("Location:faq.php");
}	
?></h6>
</div>

<br><br>
<h1 style="color:White;font-size:11px;text-align: center;">2022 © <b> AGRICULTURAL GAIN</b> UNDER REGISTRATION<br>
DEVELOPED BY: <b> MD. SHALIM SADMAN</b> ID: 20-42303-1, WEBTECH[A], AMERICAN INTERNATIONAL UNIVERSITY BANGLADESH </h1>
<br>
</body>
</html>