<?php
if (isset($_POST['UpdateBtn'])) {
include_once "connection.php";
$conn = dbConnect();
$Id =$_SESSION['Id'];
$password = $_POST['password'];
$pass =md5($password);
$account = $conn->prepare("UPDATE account SET password ='$pass'WHERE Id=$Id");
$account->execute();


$_SESSION['password']=$password;
  if($account)
{
   
?>
<script >
         Swal.fire({
            title: "Successfuly Change Password!",
            text: "",
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "hr_profile.php";
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


<?php
if (isset($_POST['changePicture'])) {
include_once "connection.php";
$conn = dbConnect();
$Id =$_SESSION['Id'];


$filename = $_FILES['uploadfile']['name'];
$filetmpname = $_FILES['uploadfile']['tmp_name'];
$folder = '../../../PICTURE/';
move_uploaded_file($filetmpname, $folder.$filename);


$picture_query = $conn->prepare("UPDATE emp_profile SET  employee_picture ='$folder$filename '
WHERE account_id = '$Id'");
$picture_query->execute();


  if($picture_query)
{
   
?>
<script >
         Swal.fire({
            title: "Successfuly Change Picture!",
            text: "",
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "hr_profile.php";
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

<!-- RESET PASSWORD OF USER BY HR -->
<?php
if (isset($_POST['Reset_pass'])) {
include_once "connection.php";
$conn = dbConnect();
$Id =$_POST['Reset_password'];


$password="abcdefghijklmopqrstuvwxyz0123456789ABSCDEFGHIJKLMOPQRSTUVWXYZ";
$password=str_shuffle($password);
$password=substr($password,0,5);

$accountq = $conn->prepare("UPDATE account SET password ='$password'WHERE Id=$Id");
$accountq->execute();


  if($accountq)
{
   
?>
<script >
         Swal.fire({
            title: "Successfuly Reset Password!",
            text: "",
            icon: 'success',
            showConfirmButton: false,
            timer: 2500
        }).then(function() {
            window.location = "employee_account.php";
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


