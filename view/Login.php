<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
            integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="login.css">
        <title>Log In</title>
    </head>

<?php
include "../controller/LoginCheck.php";
$username=$password="";
$remember=false;

?>
<br>
<body>
<div class="container">
    <div class="login-details">
        <div class="header">
            <h2>Log In</h2>
        </div>
<center><h3 style="color:red;font-size:15px"><?php echo $wrong ?></h3>
<form action="#" method="post" onsubmit="return validate()">
 <div class="username">
       <label for="username">Username</label>
       <input type="text" value="<?php echo $_COOKIE["uname"]; ?>" id="uname" name="uname" placeholder="Username" >
       <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
                    </div>
                    <div class="password">
                        <label for="password">Password</label>
   
      <input type="password" value="<?php echo $_COOKIE["pass"]; ?>"id="pass" name="pass" placeholder="password">
                       <i class="fa-solid fa-circle-check"></i>
                        <i class="fa-solid fa-circle-exclamation"></i>
						 <br><input type="checkbox" name="remember" value="remember">Remember me<br>
                    </div>
                    <button type="submit"  name="btnclick" >Login</button></center>
	
</form>
</div>
          
        </div>
    </body>
</html>
	<script>
	function validate()
	{
		var username=document.getElementById('uname');
		var password=document.getElementById('pass');
		if(username.value=="" || password.value=="")
		{
			alert("Username or password is empty");
			return false;
		}
		else
			return true;
	}
	</script>

</div>

<br>
