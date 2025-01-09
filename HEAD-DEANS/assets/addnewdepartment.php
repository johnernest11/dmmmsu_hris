<?php
ob_start();
include_once "connection.php";
$conn = dbConnect();
$departmentname = $_POST['departmentname'];
$departmentshortcut = $_POST['departmentshortcut'];




$account = $conn->prepare("INSERT INTO department (department_name, department_shortcut) VALUES ('$departmentname','$departmentshortcut')");
$account->execute();
$result = $account->fetch(PDO::FETCH_ASSOC);


ob_end_flush();
?>

