<?php
ob_start();
include_once "connection.php";
$conn = dbConnect();
$childd = $_POST['Id'];

//echo $didd


$account = $conn->prepare("SELECT * FROM emp_child where child_id = '$childd'");
$account->execute();
$result = $account->fetchAll(PDO::FETCH_ASSOC);
//echo "SELECT * FROM eligibility where eligibility_id = '$didd'";
echo json_encode($result);
//echo "SELECT * FROM hris_user_accts WHERE usenrm = '$uname' and pwd = '$pwd'";






ob_end_flush();
?>


