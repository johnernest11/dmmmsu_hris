<?php
// //HIDE ERROR
error_reporting(0);
ini_set('display_errors', 0);

//SHOW ALL ERROR
// error_reporting(E_ALL);
// ini_set('display_errors', 1);


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
    include_once "assets/connection.php";
    $conn = dbConnect();
    $leave_id = $_GET['edit'];
    $account = $conn->prepare("SELECT * FROM emp_profile AS emp 
    INNER JOIN emp_leave AS lea ON emp.account_id = lea.account_id
    INNER JOIN emp_credit AS cre ON cre.account_id = emp.account_id
    INNER JOIN (SELECT account_id,leave_id,cre_vbalance,cre_sbalance,MAX(cre_id) AS cre_id FROM emp_credit GROUP BY cre_id) AS dt 
    ON dt.leave_id =lea.leave_id 
    INNER JOIN account ON account.Id = emp.account_id
    WHERE  lea.leave_id = '$leave_id' ");
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
    $leave_filling =$result['leave_filling'];
    $leave_type =$result['leave_type'];
    $leave_from =$result['leave_from'];
    $leave_to =$result['leave_to'];
    $leave_spent =$result['leave_spent'];
    $leave_spent1 =$result['leave_spent1'];
    $leave_days =$result['leave_days'];
    $leave_commutation =$result['leave_commutation'];
    $leave_recommendation =$result['leave_recommendation'];
    $leave_status =$result['leave_status'];
    $app_picture ="../PICTURE/approved.png";
    $pen_picture ="../PICTURE/pending.png";
    $notapp_picture ="../PICTURE/not-aaproved.png";
    if($leave_recommendation =='Not Approved' ||  $leave_status =='Not Approved'){
        $pending_picture =$notapp_picture;
    } else if($leave_status =='Approved'){
        $pending_picture =$app_picture;
    } else if($leave_recommendation =='Pending' ||  $leave_status =='Pending') {
        $pending_picture=$pen_picture;
}
else{
    $pending_picture=$notapp_picture;
}
    

    $leave_recommendation_due =$result['leave_recommendation_due'];
    $leave_status_due =$result['leave_status_due'];

    $cre_vbalance = $result['cre_vbalance'];
     $cre_sbalance = $result['cre_sbalance'];
    
   
}

if (isset($_GET['editt'])){
    include_once "assets/connection.php";
    $conn = dbConnect();
    $leave_id = $_GET['edit'];
    $account = $conn->prepare("SELECT * FROM emp_profile AS emp 
    INNER JOIN emp_leave AS lea ON emp.account_id = lea.account_id
    INNER JOIN emp_credit AS cre ON cre.account_id = emp.account_id
    INNER JOIN (SELECT account_id,leave_id,cre_vbalance,cre_sbalance,MAX(cre_id) AS cre_id FROM emp_credit GROUP BY cre_id) AS dt 
    ON dt.leave_id =lea.leave_id 
    -- INNER JOIN account ON account.Id = emp.account_id
    WHERE  lea.leave_id = '$leave_id' ");
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
    $leave_filling =$result['leave_filling'];
    $leave_type =$result['leave_type'];
    $leave_from =$result['leave_from'];
    $leave_to =$result['leave_to'];
    $leave_spent =$result['leave_spent'];
    $leave_spent1 =$result['leave_spent1'];
    $leave_days =$result['leave_days'];
    $leave_commutation =$result['leave_commutation'];
    $leave_recommendation =$result['leave_recommendation'];
    $leave_status =$result['leave_status'];
    $app_picture ="../PICTURE/approved.png";
    $pen_picture ="../PICTURE/pending.png";
    $notapp_picture ="../PICTURE/not-aaproved.png";
    if($leave_recommendation =='Not Approved' ||  $leave_status =='Not Approved'){
        $pending_picture =$notapp_picture;
    } else if($leave_status =='Approved'){
        $pending_picture =$app_picture;
    } else if($leave_recommendation =='Pending' ||  $leave_status =='Pending') {
        $pending_picture=$pen_picture;
}
else{
    $pending_picture=$notapp_picture;
}
    

    $leave_recommendation_due =$result['leave_recommendation_due'];
    $leave_status_due =$result['leave_status_due'];

    $cre_vbalance = $result['cre_vbalance'];
     $cre_sbalance = $result['cre_sbalance'];
    
   
}




//UPDATE LEAVE REQUEST DATA
if (isset($_POST['update1'])) {
    include_once "assets/connection.php";
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

<?php
//INSERT DATA
if (isset($_POST['submit'])){
    include_once "assets/connection.php";
    $conn = dbConnect();
  
    $leave_filling =$_POST['leave_filling'];
    $leave_type =implode($_POST['leave_type']);
    $leave_from =$_POST['leave_from'];
    $leave_to =$_POST['leave_to'];
    $leave_spent =implode($_POST['leave_spent']);
    $leave_spent1 =implode($_POST['leave_spent1']);
    $leave_days =$_POST['leave_days'];
    $leave_commutation =implode($_POST['leave_commutation']);
    $leave_recommendation =$_POST['leave_recommendation'];
    $leave_status =$_POST['leave_status'];
    $month_date =$_POST['month_date'];
    $account_id =$_POST['account_id'];
   
  
    $account = $conn->prepare("INSERT INTO emp_leave (leave_filling,
    leave_type,leave_from,leave_to,leave_spent,leave_spent1,
    leave_days,leave_commutation,leave_recommendation,leave_status,month_date,account_id)
    VALUES ('$leave_filling', 
    '$leave_type','$leave_from','$leave_to','$leave_spent','$leave_spent1',
    '$leave_days','$leave_commutation','$leave_recommendation','$leave_status','$month_date','$account_id')");
    $account->execute(); 

    if( $account==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Request Leave .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
            window.location = "leave_request.php";
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
}

?>


<?php
//UPDATE DATA
if (isset($_POST['UpdateRequest'])){
    include_once "assets/connection.php";
    $conn = dbConnect();
  
    $leave_id=$_POST['leave_id'];
    $leave_filling =$_POST['leave_filling'];
    $leave_type =implode($_POST['leave_type']);
    $leave_from =$_POST['leave_from'];
    $leave_to =$_POST['leave_to'];
    $leave_spent =implode($_POST['leave_spent']);
    $leave_spent1 =implode($_POST['leave_spent1']);
    $leave_days =$_POST['leave_days'];
    $leave_commutation =implode($_POST['leave_commutation']);
   
  
    $account = $conn->prepare("UPDATE  emp_leave SET leave_filling='$leave_filling',
    leave_type='$leave_type',leave_from='$leave_from',leave_to='$leave_to',
    leave_spent='$leave_spent',leave_spent1='$leave_spent1',
    leave_days='$leave_days',leave_commutation='$leave_commutation'WHERE leave_id ='$leave_id'");
    $account->execute(); 

    if( $account==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Update Request Leave .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "leave_profile.php?edit=<?php echo$leave_id?>";
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
}

?>

<?php
//UPDATE DATA
if (isset($_POST['Delete'])){
    include_once "assets/connection.php";
    $conn = dbConnect();
  
    $leave_id=$_POST['leave_id'];
    
   
  
    $account1 = $conn->prepare("DELETE FROM emp_leave WHERE leave_Id='$leave_id'");
    $account1->execute(); 

    if( $account1==true)
    {  
        ?>
        <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Delete Request Leave .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                window.location = "leave_status.php";
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
}

?>