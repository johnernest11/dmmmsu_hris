<?php


$output='';
$update=false;
$employee_id=0;
$employee_firstname='';
$employee_middlename='';
$employee_lastname='';
$employee_extensionname='';
$employee_datebirth ='';
$employee_placebirth ='';
$employee_sex ='';
$employee_civilstatus ='';
$employee_nationality ='';
$employee_age ='';
$employee_civilstatus ='';
$employee_height ='';
$employee_weight ='';
$employee_bloodtype ='';
$employee_citizenship ='';
$employee_residentialaddress ='';
$employee_permanentaddress ='';
$employee_zipcode ='';
$employee_telephone ='';
$employee_contact ='';
$employee_gsis ='';
$employee_pagibig ='';
$employee_philhealth ='';
$employee_sss ='';
$employee_tin  ='';
$employee_dependants  ='';
$employee_position ='';
$employee_department ='';
$employee_salarygrade ='';
$employee_accountprivilage= '';
$employee_type ='';
$employee_status ='';
$leave_status = '';


//EDIT
if (isset($_GET['edit'])){
    include_once "connection.php";
    $conn = dbConnect();
    $leave_id = $_GET['edit'];
    $account = $conn->prepare("SELECT * FROM emp_profile AS emp INNER JOIN emp_leave AS lea ON emp.account_id = lea.Account_id
    INNER JOIN account ON account.Id=emp.account_id WHERE leave_id = '$leave_id'");
    $account->execute();

    $update =true;  

    $result = $account->fetch(PDO::FETCH_ASSOC);
    $employee_id =$result['employee_id'];
    $employee_picture=$result['employee_picture'];
    $default_picture ="../../../PICTURE/default.png";
    if(file_exists($employee_picture)){
        $profile_picture =$employee_picture;
    }else{
        $profile_picture =$default_picture;
    }
    $employee_firstname =$result['employee_firstname'];
    $employee_middlename =$result['employee_middlename'];
    $employee_lastname =$result['employee_lastname'];
    $employee_extensionname =$result['employee_extensionname'];
    $employee_datebirth =$result['employee_datebirth'];
    $employee_position =$result['employee_position'];
    $employee_salarygrade =$result['employee_salarygrade'];
    $employee_sick =$result['employee_sick'];
    $employee_vacation =$result['employee_vacation'];
    $employee_department =$result['employee_department'];
    $leave_type =$result['leave_type'];
    $leave_from =$result['leave_from'];
    $leave_to =$result['leave_to'];
    $leave_where =$result['leave_where'];
    $leave_approved =$result['leave_approved'];
    $leave_recommendation =$result['leave_recommendation'];
    $leave_disapproved =$result['leave_disapproved'];
    $leave_commutation =$result['leave_commutation'];
    $leave_vacation =$result['leave_vacation'];
    $leave_sick =$result['leave_sick'];
   
   
}




//UPDATE LEAVE REQUEST DATA
if (isset($_POST['update'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $leave_id=$_POST['leave_id'];
    $leave_approved =$_POST['leave_approved'];
    $leave_recommendation =$_POST['leave_recommendation'];
    $leave_disapproved =$_POST['leave_disapproved'];
    $leave_vacation =$_POST['leave_vacation'];
    $leave_sick =$_POST['leave_sick'];
    $employee_vacation =$_POST['employee_vacation'];
    $employee_sick =$_POST['employee_sick'];
   
   

                 
    $account = $conn->prepare("UPDATE emp_leave AS lea INNER JOIN emp_profile AS emp ON lea.account_id= emp.account_id 
    SET lea.leave_id = '$leave_id', lea.leave_approved = '$leave_approved',
    lea.leave_recommendation='$leave_recommendation',lea.leave_disapproved = '$leave_disapproved' ,
    emp.employee_vacation='$employee_vacation',emp.employee_sick='$employee_sick '
     WHERE lea.leave_id ='$leave_id'");
    $account->execute();

    if($account )
{  
    ?>

    <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Action Leave Request .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "employee_leave_profile.php?edit=<?php echo$Id?>";
               
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

//UPDATE LEAVE REQUEST DATA
if (isset($_POST['update1'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $leave_id=$_POST['leave_id'];
    $leave_recommendation =$_POST['leave_disapproved'];
    $leave_disapproved =$_POST['leave_disapproved'];
    $leave_recommendation =$_POST['leave_recommendation1'];
   
                 
    $account = $conn->prepare("UPDATE emp_leave AS lea  SET lea.leave_id = '$leave_id', lea.leave_approved = '$leave_approved',
    lea.leave_recommendation='$leave_recommendation',lea.leave_disapproved = '$leave_disapproved'  WHERE lea.leave_id ='$leave_id'");
    $account->execute();

    if($account )
{  
    ?>

    <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'error',
            title: ' Leave Request Disapproved .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "employee_leave_profile.php?edit=<?php echo$Id?>";
               
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





    
