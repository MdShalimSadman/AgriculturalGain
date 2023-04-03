<?php
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
	$q="SELECT * from agriculturist_info";
	$result=$conn->query($q);
	$output='<table border="1" width=100%><tr><th>Username</th><th>Email</th><th>Gender</th><th>Expertizes</th><th>Institute</th><th>Address</th><th>About</th></tr>';
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$output.= "<tr><td>{$row["user_name"]}</td><td>{$row["Email"]}</td><td>{$row["Gender"]}</td><td>{$row["Expertizes"]}</td><td>{$row["Institute"]}</td><td>{$row["Address"]}</td><td>{$row["About"]}</td></tr>";
		}
		$output.='</table>';
	}
	else
		echo "O results";
	
	
}
$conn->close();
echo $output;
?>
