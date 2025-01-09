<?php

//INSERT DATA
if (isset($_POST['submit'])){
    include_once "connection.php";
    $conn = dbConnect();
    
    $department_name =$_POST['department_name'];
    $department_code =$_POST['department_code'];

    $account = $conn->prepare("INSERT INTO department (dept_name,dept_code)
              VALUES('$department_name','$department_code')");
    $account->execute(); 
    
    if($account )
   {  
      ?>

      <script >
          Swal.fire({
              position: 'bottom-end',
              icon: 'success',
              title: 'Successfuly Add Department .',
              showConfirmButton: false,
              timer: 3000
              }).then(function() {
                    window.location = "department.php";
                   
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
//UPDATE HOBBIES INFORMATION DATA
if (isset($_POST['updateDepartment'])) {
    
    include_once "assets/connection.php";
    $conn = dbConnect();
    $dept_id =$_POST['dept_ide'];
    $dept_name =$_POST['dept_namee'];
    $dept_code =$_POST['dept_codee'];
    
    
   
    
    
    $hobbies_query = $conn->prepare("UPDATE department SET dept_id ='$dept_id',dept_name = '$dept_name',
        dept_code = '$dept_code'
    WHERE dept_id ='$dept_id'");
   
    $hobbies_query->execute();

if($hobbies_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Department Information.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "department.php";
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