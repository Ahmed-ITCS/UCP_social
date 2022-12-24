<?php

$host = "localhost";
$user = "root";
$pass = "123321";
$db = "media";
$dbcon = mysqli_connect($host,$user,$pass,$db);
if(!$dbcon)
{
	echo "could not connect to database";
}


?>