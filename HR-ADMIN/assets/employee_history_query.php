<?php
//INSERT DATA
if (isset($_POST['History'])){
include_once "connection.php";
$conn = dbConnect();
$account_id =$_POST['Idd'];
$work_history =$_POST['work_history'];
$work_position =$_POST['work_position'];
$work_status =$_POST['work_status'];
$date_work =$_POST['date_work'];

$ACCOUNT = $conn->prepare("INSERT INTO emp_history  (work_history,work_position,work_status,date_work,account_id)
VALUES('$work_history','$work_position','$work_status','$date_work','$account_id')");

$ACCOUNT->execute();
    
if($ACCOUNT)
{  
    ?>
    <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Update Work History .',
            showConfirmButton: false,
            timer: 2500
            }).then(function() {
                window.location = "employee_account_update.php?edit=<?php echo$account_id?>";
            // header('Location:../employee_leave_approved_profile.php?edit='.$leave_id);//
        });
</script>
<?php
}
else
{
?>
<?php
}
 
}
?>

<?php
//Insert Leave Credits Functions
if (isset($_POST['LeaveEarned'])){
include_once "connection.php";
$conn = dbConnect();
$account_id =$_POST['Idd'];
$cre_vearned =$_POST['cre_vearned'];
$cre_vbalance =$_POST['cre_vbalance'];
$cre_vbalance1 = $cre_vearned + $cre_vbalance;
$cre_searned =$_POST['cre_searned'];
$cre_sbalance =$_POST['cre_sbalance'];
$cre_sbalance1 = $cre_searned + $cre_sbalance;
$month_date =date('F');
$cre_status =$_POST['cre_status'];

$ACCOUNTa = $conn->prepare("INSERT INTO emp_credit (cre_vearned,cre_vbalance,cre_searned,cre_sbalance,month_date,cre_status,account_id)
VALUES('$cre_vearned','$cre_vbalance1','$cre_searned','$cre_sbalance1','$month_date','$cre_status','$account_id')");

$ACCOUNTa->execute();
    
if($ACCOUNTa)
{  
    ?>
    <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Update Leave Credits Earned .',
            showConfirmButton: false,
            timer: 2500
            }).then(function() {
                window.location = "employee_account_update.php?edit=<?php echo$account_id?>";
            // header('Location:../employee_leave_approved_profile.php?edit='.$leave_id);//
        });
</script>
<?php
}
else
{
?>
<?php
}
 
}
?>