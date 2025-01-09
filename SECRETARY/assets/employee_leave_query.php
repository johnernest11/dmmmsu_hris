<?php
 include 'connection.php';

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
    $account = $conn->prepare("SELECT * FROM employee AS emp INNER JOIN emp_leave AS lea  where emp.employee_id = lea.employee_id AND leave_id = '$leave_id'");
    $account->execute();

    $update =true;  

    $result = $account->fetch(PDO::FETCH_ASSOC);
    $employee_id =$result['employee_id'];
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
    $leave_status =$result['leave_status'];
    $leave_date =$result['leave_date'];
    $leave_date_end =$result['leave_date_end'];
    $leave_destination =$result['leave_destination'];
    $leave_approved_for =$result['leave_approved_for'];
    $leave_recommendation =$result['leave_recommendation'];
    $leave_disapproved_due =$result['leave_disapproved_due'];
    $leave_commutation =$result['leave_commutation'];
    $leave_vacation =$result['leave_vacation'];
    $leave_sick =$result['leave_sick'];
   
   
}




//UPDATE LEAVE REQUEST DATA
if (isset($_POST['update'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $leave_id=$_POST['leave_id'];
    $leave_approved_for =$_POST['leave_approved_for'];
    $leave_recommendation =$_POST['leave_recommendation'];
    $leave_disapproved_due =$_POST['leave_disapproved_due'];
    $leave_vacation =$_POST['leave_vacation'];
    $leave_sick =$_POST['leave_sick'];
    $employee_vacation =$_POST['employee_vacation'];
    $employee_sick =$_POST['employee_sick'];
   
   

                 
    $account = $conn->prepare("UPDATE emp_leave AS lea INNER JOIN employee AS emp ON lea.employee_id= emp.employee_id SET lea.leave_id = '$leave_id', lea.leave_approved_for = '$leave_approved_for',
    lea.leave_recommendation='$leave_recommendation',lea.leave_disapproved_due = '$leave_disapproved_due' ,emp.employee_vacation='$employee_vacation',emp.employee_sick='$employee_sick ' WHERE lea.leave_id ='$leave_id'");
    $account->execute();

    

    header('Location:../employee_leave_approved_profile.php?edit='.$leave_id);
      
}

?>