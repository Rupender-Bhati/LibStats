<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password,"bookDB");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$Book=$_POST["BookName"];
$res =$conn->query("Select * from LPU_Books where Name ='$Book'");
if($res->num_rows > 0)
{
	//output
	while($row = $res -> fetch_assoc())
	{
		echo("id : ".$row["id"])."  -  Name:".$row["Name"]."<br>";
	}
} else {
	echo(" NO RESULTS FOUND");
}
?>

<html>
	<head>SAMPLE</head>
	<input type="text" placeholder="name" id ="a">
	<button type="button" value="Search"></button>
</html>