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
  background-image: url('../view/research2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>

<center><h1 style="color:white;font-size:50px"><u><b>Agricultural Blog</u></b></h1></center>

<div style="background-color:white">
<div style="background-color:RGB(46,139,87)">
<center><h2 style="color:white">Write your Blog:</h2></center>
</div>
<form action="#" method="post">
<center><b>Title:</b> <input type="text" id="title" name="title"><br><br></center>
<center><b>Text :</b><textarea name="text" rowspan="3" colspan="30"></textarea><br><br></center>
<center><input type="submit" style="background-color:RGB(46,139,87); color:white"  value="Post" name="btnClick"></center>
</form>
<br>
<h6 style="font-size:0px">Json read and write 
<?php		
//Json write part:
if($_POST["text"]!=""){
	$crdata=file_get_contents('../Model/blog.json');
    $ar_data=json_decode($crdata,true);
    $put=array(
		'title'=>$_POST["title"],
        'user'=>$_SESSION["uname"],
        'text'=>$_POST["text"]
    );
    $ar_data[]=$put;
    $final_data=json_encode($ar_data);
    file_put_contents('../Model/blog.json',$final_data);
	header("Location:Blog.php");
}	
?></h6>
</div>
<div style="background-color:white">
<div style="background-color:RGB(46,139,87)">
<center><h2 style="color:white">Newsfeed:</h2></center>


</div>

<?php
//JSON read part
$crdata=file_get_contents('../Model/blog.json');
    $ar_data=json_decode($crdata,true);
	for($a=0; $a<=sizeof($ar_data)-1;$a++){
		?>
		<h1 style="font-size:40px"><b><?php echo $ar_data[$a]['title']; ?> :</b></h1>
		<h4 style= "color:RGB(105,105,105)"><b>Author:</b><?php echo $ar_data[$a]['user']; ?></h4><br>
		<?php echo $ar_data[$a]['text']; ?><br><br><br><br>
<?php
	}
?>
</div>

<br><br>
<h1 style="color:White;font-size:11px;text-align: center;">2022 © <b> AGRICULTURAL GAIN</b> UNDER REGISTRATION<br>
DEVELOPED BY: <b> MD. SHALIM SADMAN</b> ID: 20-42303-1, WEBTECH[A], AMERICAN INTERNATIONAL UNIVERSITY BANGLADESH </h1>
<br>
</body>
</html>