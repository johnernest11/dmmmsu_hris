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
            window.location = "profile.php";
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
            window.location = "profile.php";
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