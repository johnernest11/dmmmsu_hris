<?php
session_start();

if (!isset($_SESSION['Id'])) {
	header("Location: ../../../index.php");
	exit;
}

$user_check = $_SESSION['Id'];

include_once "connection.php";
$conn = dbConnect();

// Use a prepared statement with parameter binding
$ses_sql = $conn->prepare("SELECT Id FROM account WHERE Id = :id");
$ses_sql->bindParam(':id', $user_check, PDO::PARAM_INT);
$ses_sql->execute();

$row = $ses_sql->fetch(PDO::FETCH_ASSOC);

if ($row) {
	$login_session = $row['Id'];
} else {
	// No user found → force logout
	session_destroy();
	header("Location: ../../../index.php");
	exit;
}
?>
