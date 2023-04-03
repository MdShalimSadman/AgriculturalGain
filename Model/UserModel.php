<?php
function Login($username,$password)
{
	session_start();

$servername="localhost:3306";
$usernamedb="root";
$passwordDB="";
$dbname="All";
$conn=new mysqli($servernamedb,$username,$passwordDB,$dbname);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
else
{
	
	$q="SELECT * FROM all_info where user_name='".$username."' and password='".$password."'";
	$result=$conn->query($q);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
		
		 $_SESSION["userType"]=$row["userType"];
		
		}
		if($_SESSION["userType"]=='agriculturist'){
			$dbname="Agriculturist";
			$conn=new mysqli($servernamedb,$username,$passwordDB,$dbname);
			if($conn->connect_error)
			{
				die("Connection failed:".$conn->connect_error);
			}
		else
		{
	
		  $q="SELECT * FROM agriculturist_info where user_name='".$username."' and password='".$password."'";
		  $result=$conn->query($q);
		  if($result->num_rows>0)
		  {
			while($row=$result->fetch_assoc())
			{
		
			$_SESSION["email"]=$row["Email"];
			$_SESSION["gender"]=$row["Gender"];
		    $_SESSION["institute"]=$row["Institute"];
			$_SESSION["address"]=$row["Address"];
			$_SESSION["bio"]=$row["About"];
			$_SESSION["sectors"]=$row["Expertizes"];
		
			}
			 return true;
		  }
	    }
	}
	else
	{
	 return false;	
	}
 }
}
}
?>
