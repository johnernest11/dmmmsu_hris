<?php
	session_start();

	$user_check = $_SESSION['Id'];
	
	include_once "connection.php";
	$conn = dbConnect();
	$ses_sql = $conn->prepare("select Id from account where Id = '$user_check' ");

	$row = $ses_sql->fetch(PDO::FETCH_BOTH);

	$login_sessiom =$row['Id'];


	if (!isset($_SESSION['Id'])) {
		// $mysqli->close();



		header("location:../../../index.php");
		# code...
	}
?>


