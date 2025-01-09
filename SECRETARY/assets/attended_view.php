<?php
ob_start();
include_once "connection.php";
$conn = dbConnect();
$programm = $_POST['Id'];

//echo $didd


$account = $conn->prepare("SELECT * FROM emp_program_attended where attend_id = '$programm'");
$account->execute();
$result = $account->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);




ob_end_flush();
?>


