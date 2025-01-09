<!-- UPDATE WORK INFORMATION -->
<?php
//HIDE ERROR
error_reporting(0);
ini_set('display_errors', 0);

//SHOW ALL ERROR
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

if (isset($_POST['UpdateWorkInfo'])) {
include_once "connection.php";
$conn = dbConnect();
$Id =$_POST['Idd'];
$employee_id1 = $_POST['employee_idd'];
$employee_position = $_POST['employee_positiond'];
$employee_salarygrade = $_POST['employee_salarygraded'];
$employee_salarystep = $_POST['employee_salarystepd'];
$employee_salarycos = $_POST['employee_salarycosd'];
$employee_type = $_POST['employee_typed'];
$employee_status = $_POST['employee_statusd'];
$employee_department = $_POST['employee_departmentd'];
$employee_active = $_POST['employee_actived'];

$account_profile = $conn->prepare("UPDATE account SET employee_id ='$employee_id1',
employee_position ='$employee_position',employee_salarygrade ='$employee_salarygrade',employee_salarystep ='$employee_salarystep',employee_salarycos ='$employee_salarycos',employee_type ='$employee_type',employee_status ='$employee_status',employee_department ='$employee_department',employee_active ='$employee_active'
WHERE Id='$Id'");
$account_profile->execute();

  if($account_profile)
{
   
?>
<script >
         Swal.fire({
            title: "Successfuly Update Work Information!",
            text: "",
            icon: 'success',
            showConfirmButton: false,
            timer: 2500

        }).then(function() {
             window.location = "employee_account_update.php?edit=<?php echo$Id?>";
        });
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert('error occured while updating data');
</script>
<?php
}
// sql query execution function
}  

?>

