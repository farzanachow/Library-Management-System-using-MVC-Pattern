<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="library";

$conn=new mysqli ($servername,$username,$password);
if($conn->connect_error){
	die("connection failed".$conn->connect_error);
}
else{
	mysqli_select_db($conn,$dbname);
	echo "connection successful";
}




?>