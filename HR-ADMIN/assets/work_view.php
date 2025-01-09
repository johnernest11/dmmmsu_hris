<?php
ob_start();
include_once "connection.php";
$conn = dbConnect();
$workk = $_POST['Id'];

//echo $didd


$account = $conn->prepare("SELECT * FROM emp_work where work_id = '$workk'");
$account->execute();
$result = $account->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($result);




ob_end_flush();
?>


