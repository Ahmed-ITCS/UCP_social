<?php


if($_POST['submit'] == "Login")
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	include('connection.php');
	$qry = "SELECT * FROM register";
	$data = mysqli_query($dbcon ,$qry);
	
	while($register = mysqli_fetch_assoc($data))
	{
		if($register['registername']==$name)
		{
			if($register['registerpass']==$password)
			{
				//echo"login success";
				include('ucpsocial.html');
			}
			else
			{
				echo "login failed";
			}
		}
		else
		{
			echo "login failed";
		}
	}	
}
else if($_POST['submit'] =="Register")
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	include('connection.php');
	$qry = "INSERT INTO register(registeremail,registername,registerpass) VALUES('$name','$name','$password')";
	$send = mysqli_query($dbcon , $qry);
	if(!$send)
	{
		echo"couldn't Register you";
	}
	else
	{
		echo "registered ";
	}
}
 

?>