<?php
	
	$id = $_GET['id'];
	
	$conn = mysqli_connect("localhost:3307","root","","crud") or die("Connection Failed");
	
	$sql = "DELETE FROM crud_data WHERE id = {$id}";
	$result = mysqli_query($conn,$sql) or die("Query Unsucessful");

	header('location: index.php');

	mysqli_close($conn);
?>