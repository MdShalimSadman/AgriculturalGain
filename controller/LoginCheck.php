<?php
//session_start();
require ('../Model/UserModel.php');?>
<h2 style="font-size:0px;">login check:
<?php
$wrong="";
if(isset($_POST['btnclick']))
{
    $username=$_POST['uname'];
    $password=$_POST['pass'];
	$remember=$_POST['remember'];
    if($username !=null && $password !=null){
    $status=Login($username,$password);
    if($status)
    {
		
        $_SESSION['uname'] = $username;
		$_SESSION['pass'] = $password;
		if($remember==true){
		setcookie("uname",$username,time()+(86400*2),"/");
		setcookie("pass",$password,time()+(86400*2),"/");
		}
        header("Location:../view/agriculturist profile.php");
    }
    else
    {
		
        $wrong= "You have entered wrong username or password.Please Enter Your Information Correctly";
    }
}
}

?>
</h2>