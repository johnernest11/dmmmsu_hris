<?php
ob_start();
include_once "connection.php";
$conn = dbConnect();
$voluntaryy = $_POST['Id'];

//echo $didd


$account = $conn->prepare("SELECT * FROM emp_voluntary where voluntary_id = '$voluntaryy'");
$account->execute();
$result = $account->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);




ob_end_flush();
?>


