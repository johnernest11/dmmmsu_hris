<?php
$output='';
$update=false;
$emp_Id=0;
$employee_picture='';
$employee_number='';
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
$employee_vacation ='';
$employee_sick ='';
$employee_start = '';

$Id = $_SESSION['Id'];
//FETCH ALL THE DATA IN EMP PROFILE AND FAMILY
include_once "connection.php";
$conn = dbConnect();
$account = $conn->prepare("SELECT * FROM emp_profile INNER JOIN account ON emp_profile.account_id = account.Id 
    INNER JOIN emp_family ON emp_family.account_id =account.Id 
    INNER JOIN emp_education ON   emp_education.account_id =account.Id
    INNER JOIN  emp_child ON emp_child.account_id = account.Id
    INNER JOIN emp_hobbies ON emp_hobbies.account_id = account.Id 
    INNER JOIN emp_organization ON emp_organization.account_id = account.Id 
    INNER JOIN emp_distinction ON emp_distinction.account_id = account.Id 
    INNER JOIN emp_reference ON emp_reference.account_id = account.Id
    INNER JOIN emp_gov_id ON emp_gov_id.account_id = account.Id
WHERE account.Id = $Id ");
$account->execute();
$update =true;  

$result = $account->fetch(PDO::FETCH_ASSOC);
$Id=$result['Id'];
$employee_id =$result['employee_id'];
$employee_picture=$result['employee_picture'];
    $default_picture ="../PICTURE/default.png";
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
$employee_placebirth =$result['employee_placebirth'];
$employee_sex =$result['employee_sex'];
$employee_civilstatus =$result['employee_civilstatus'];
$employee_height =$result['employee_height'];
$employee_weight =$result['employee_weight'];
$employee_bloodtype=$result['employee_bloodtype'];
$employee_citizenship =$result['employee_citizenship'];
$employee_Rblock =$result['employee_Rblock'];
$employee_Rstreet =$result['employee_Rstreet'];
$employee_Rvillage =$result['employee_Rvillage'];
$employee_Rbarangay =$result['employee_Rbarangay'];
$employee_Rcity =$result['employee_Rcity'];
$employee_Rprovince =$result['employee_Rprovince'];
$employee_Rzipcode =$result['employee_Rzipcode'];
$employee_Pblock =$result['employee_Pblock'];
$employee_Pstreet =$result['employee_Pstreet'];
$employee_Pvillage =$result['employee_Pvillage'];
$employee_Pbarangay =$result['employee_Pbarangay'];
$employee_Pcity =$result['employee_Pcity'];
$employee_Pprovince =$result['employee_Pprovince'];
$employee_Pzipcode =$result['employee_Pzipcode'];
$employee_telephone =$result['employee_telephone'];
$employee_contact =$result['employee_contact'];
$employee_gsis =$result['employee_gsis'];
$employee_pagibig =$result['employee_pagibig'];
$employee_philhealth =$result['employee_philhealth'];
$employee_sss =$result['employee_sss'];
$employee_tin =$result['employee_tin'];
$employee_agency =$result['employee_agency'];
$employee_email =$result['employee_email'];
$employee_position =$result['employee_position'];
$employee_department =$result['employee_department'];
$employee_salarygrade =$result['employee_salarygrade'];
$employee_type =$result['employee_type'];
$employee_status =$result['employee_status'];
$employee_start =$result['employee_start'];

//FAMILY BACKGORUND TABLE 
$fam_id =$result['fam_id'];
$spouse_surname =$result['spouse_surname'];
$spouse_firstname =$result['spouse_firstname'];
$spouse_middlename =$result['spouse_middlename'];
$spouse_extension =$result['spouse_extension'];
$spouse_occupation=$result['spouse_occupation'];
$spouse_business =$result['spouse_business'];
$spouse_business_add =$result['spouse_business_add'];
$spouse_no =$result['spouse_no'];
$father_surname =$result['father_surname'];
$father_firstname =$result['father_firstname'];
$father_middlename =$result['father_middlename'];
$father_extensionname =$result['father_extensionname'];
$mother_surname =$result['mother_surname'];
$mother_firstname =$result['mother_firstname'];
$mother_middlename =$result['mother_middlename'];

//EDUCATION BACKGORUND TABLE 
//ELEMENTARY
$education_id =$result['education_id'];
$elem_name =$result['elem_name'];
$elem_degree =$result['elem_degree'];
$elem_from =$result['elem_from'];
$elem_to =$result['elem_to'];
$elem_earned=$result['elem_earned'];
$elem_honor =$result['elem_honor'];
//HIGH SCHOOL
$sec_name =$result['sec_name'];
$sec_degree =$result['sec_degree'];
$sec_from =$result['sec_from'];
$sec_to =$result['sec_to'];
$sec_earned=$result['sec_earned'];
$sec_honor =$result['sec_honor'];
//VOCATIONAL
$voc_name =$result['voc_name'];
$voc_degree =$result['voc_degree'];
$voc_from =$result['voc_from'];
$voc_to =$result['voc_to'];
$voc_earned=$result['voc_earned'];
$voc_honor =$result['voc_honor'];
//VOCATIONAL
$col_name =$result['col_name'];
$col_degree =$result['col_degree'];
$col_from =$result['col_from'];
$col_to =$result['col_to'];
$col_earned=$result['col_earned'];
$col_honor =$result['col_honor'];
//VOCATIONAL
$gad_name =$result['gad_name'];
$gad_degree =$result['gad_degree'];
$gad_from =$result['gad_from'];
$gad_to =$result['gad_to'];
$gad_earned=$result['gad_earned'];
$gad_honor =$result['gad_honor'];
//VOCATIONAL
$gad_namee =$result['gad_namee'];
$gad_degreee =$result['gad_degreee'];
$gad_frome =$result['gad_frome'];
$gad_toe =$result['gad_toe'];
$gad_earnede=$result['gad_earnede'];
$gad_honore =$result['gad_honore'];

//CHILDREN
$child_id=$result['child_id'];
$child_name =$result['child_name'];
$child_birthdate =$result['child_birthdate'];
$child_name1 =$result['child_name1'];
$child_birthdate1 =$result['child_birthdate1']; ;
$child_name2 =$result['child_name2'];
$child_birthdate2 =$result['child_birthdate2']; 
$child_name3 =$result['child_name3'];
$child_birthdate3 =$result['child_birthdate3']; 
$child_name4 =$result['child_name4'];
$child_birthdate4 =$result['child_birthdate4']; 
$child_name5 =$result['child_name5'];
$child_birthdate5 =$result['child_birthdate5'];
$child_name6 =$result['child_name6'];
$child_birthdate6 =$result['child_birthdate6'];
$child_name7 =$result['child_name7'];
$child_birthdate7 =$result['child_birthdate7'];
$child_name8 =$result['child_name8'];
$child_birthdate8 =$result['child_birthdate8'];
$child_name9 =$result['child_name9'];
$child_birthdate9 =$result['child_birthdate9'];;
$child_name10 =$result['child_name10'];
$child_birthdate10 =$result['child_birthdate10'];
$child_name11 =$result['child_name11'];
$child_birthdate11 =$result['child_birthdate11'];

//HOBIIES
$hobbies_id =$result['hobbies_id'];
$hobbies_name =$result['hobbies_name'];
$hobbies_name1 =$result['hobbies_name1'];
$hobbies_name2 =$result['hobbies_name2'];
$hobbies_name3 =$result['hobbies_name3'];
$hobbies_name4 =$result['hobbies_name4'];
$hobbies_name5 =$result['hobbies_name5'];
$hobbies_name6 =$result['hobbies_name6'];

//ORGANIZATION
$organization_id =$result['organization_id'];
$organization_name =$result['organization_name'];
$organization_name1 =$result['organization_name1'];
$organization_name2 =$result['organization_name2'];
$organization_name3 =$result['organization_name3'];
$organization_name4 =$result['organization_name4'];
$organization_name5 =$result['organization_name5'];
$organization_name6 =$result['organization_name6'];

//ORGANIZATION
$distinction_id =$result['distinction_id'];
$distinction_name =$result['distinction_name'];
$distinction_name1 =$result['distinction_name1'];
$distinction_name2 =$result['distinction_name2'];
$distinction_name3 =$result['distinction_name3'];
$distinction_name4 =$result['distinction_name4'];
$distinction_name5 =$result['distinction_name5'];
$distinction_name6 =$result['distinction_name6'];

//REFERENCE
$reference_id =$result['reference_id'];
$reference_name =$result['reference_name'];
$reference_address =$result['reference_address'];
$reference_tel =$result['reference_tel'];
$reference_name1 =$result['reference_name1'];
$reference_address1 =$result['reference_address1'];
$reference_tel1 =$result['reference_tel1'];
$reference_name2 =$result['reference_name2'];
$reference_address2 =$result['reference_address2'];
$reference_tel2 =$result['reference_tel2'];

 //GOVERNMENT ID
 $government_id =$result['government_id'];
 $government_name =$result['government_name'];
 $government_no =$result['government_no'];
 $government_date =$result['government_date'];
 // Creating timestamp from given date
 $government_date = strtotime($government_date);
 // Creating new date format from that timestamp
 $government_date = date("m-d-Y", $government_date);
 $government_place =$result['government_place'];


//UPDATE PERSONAL INFORMATION DATA
if (isset($_POST['Update'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $Id =$_POST['Id'];
    $employee_firstname =$_POST['employee_firstname'];
    $employee_middlename =$_POST['employee_middlename'];
    $employee_lastname =$_POST['employee_lastname'];
    $employee_extensionname =$_POST['employee_extensionname'];
    $employee_datebirth =$_POST['employee_datebirth'];
    $employee_placebirth =$_POST['employee_placebirth'];
    $employee_sex =$_POST['employee_sex'];
    $employee_civilstatus =$_POST['employee_civilstatus'];
    $employee_height =$_POST['employee_height'];
    $employee_weight =$_POST['employee_weight'];
    $employee_bloodtype=$_POST['employee_bloodtype'];
    $employee_citizenship =$_POST['employee_citizenship'];
    $employee_Rblock =$_POST['employee_Rblock'];
    $employee_Rstreet =$_POST['employee_Rstreet'];
    $employee_Rvillage =$_POST['employee_Rvillage'];
    $employee_Rbarangay =$_POST['employee_Rbarangay'];
    $employee_Rcity =$_POST['employee_Rcity'];
    $employee_Rprovince =$_POST['employee_Rprovince'];
    $employee_Rzipcode =$_POST['employee_Rzipcode'];
    $employee_Pblock =$_POST['employee_Pblock'];
    $employee_Pstreet =$_POST['employee_Pstreet'];
    $employee_Pvillage =$_POST['employee_Pvillage'];
    $employee_Pbarangay =$_POST['employee_Pbarangay'];
    $employee_Pcity =$_POST['employee_Pcity'];
    $employee_Pprovince =$_POST['employee_Pprovince'];
    $employee_Pzipcode =$_POST['employee_Pzipcode'];
    $employee_telephone =$_POST['employee_telephone'];
    $employee_contact =$_POST['employee_contact'];
    $employee_gsis =$_POST['employee_gsis'];
    $employee_pagibig =$_POST['employee_pagibig'];
    $employee_philhealth =$_POST['employee_philhealth'];
    $employee_sss =$_POST['employee_sss'];
    $employee_tin =$_POST['employee_tin'];
    $employee_agency =$_POST['employee_agency'];
    $employee_email =$_POST['employee_email'];
   
    
    $profile_query = $conn->prepare("UPDATE emp_profile SET profile_id ='$Id', employee_firstname = '$employee_firstname',
        employee_middlename = '$employee_middlename',employee_lastname='$employee_lastname',employee_extensionname = '$employee_extensionname',
        employee_datebirth = '$employee_datebirth',employee_placebirth='$employee_placebirth',employee_sex = '$employee_sex',
        employee_civilstatus = '$employee_civilstatus',employee_height='$employee_height',employee_weight = '$employee_weight',
        employee_bloodtype = '$employee_bloodtype',employee_citizenship='$employee_citizenship',employee_Rblock = '$employee_Rblock',
        employee_Rstreet = '$employee_Rstreet',employee_Rvillage = '$employee_Rvillage',employee_Rbarangay = '$employee_Rbarangay',
        employee_Rcity = '$employee_Rcity',employee_Rprovince = '$employee_Rprovince',employee_Rstreet = '$employee_Rstreet',
        employee_Rzipcode = '$employee_Rzipcode',employee_Pblock = '$employee_Pblock',employee_Pstreet = '$employee_Pstreet', 
        employee_Pvillage = '$employee_Pvillage',employee_Pbarangay = '$employee_Pbarangay',employee_Pcity = '$employee_Pcity',
        employee_Pprovince = '$employee_Pprovince',employee_Pstreet = '$employee_Pstreet',employee_Pzipcode = '$employee_Pzipcode',
        employee_telephone = '$employee_telephone',employee_contact = '$employee_contact', employee_gsis='$employee_gsis',
        employee_pagibig = '$employee_pagibig',employee_philhealth = '$employee_philhealth', employee_sss='$employee_sss',
        employee_tin = '$employee_tin',employee_agency = '$employee_agency',employee_email = '$employee_email'
    WHERE profile_id ='$Id'");
   
    $profile_query->execute();

if($profile_query )
{  
    ?>
    <script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Personal Information.',
            showConfirmButton: false,
            timer: 1500
            // }).then(function() {
            // window.location = "hr_PDS.php";
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
//UPDATE FAMILY INFORMATION DATA
if (isset($_POST['updatefamily'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $fam_id =$_POST['fam_id'];
    $spouse_surname =$_POST['spouse_surname'];
    $spouse_firstname =$_POST['spouse_firstname'];
    $spouse_middlename =$_POST['spouse_middlename'];
    $spouse_extension =$_POST['spouse_extension'];
    $spouse_occupation =$_POST['spouse_occupation'];
    $spouse_business =$_POST['spouse_business'];
    $spouse_business_add =$_POST['spouse_business_add'];
    $spouse_no =$_POST['spouse_no'];
    $father_surname =$_POST['father_surname'];
    $father_firstname =$_POST['father_firstname'];
    $father_middlename =$_POST['father_middlename'];
    $father_extensionname =$_POST['father_extensionname'];
    $mother_surname =$_POST['mother_surname'];
    $mother_firstname =$_POST['mother_firstname'];
    $mother_middlename =$_POST['mother_middlename'];
    
              
    $family_query = $conn->prepare("UPDATE emp_family SET fam_id ='$fam_id', spouse_surname= '$spouse_surname', 
        spouse_firstname = '$spouse_firstname',spouse_middlename='$spouse_middlename',
        spouse_extension = '$spouse_extension',spouse_occupation = '$spouse_occupation',
        spouse_business = '$spouse_business',  spouse_business_add = '$spouse_business_add', 
        spouse_no='$spouse_no',father_surname = '$father_surname',
        father_firstname = '$father_firstname',father_middlename='$father_middlename',
        father_extensionname = '$father_extensionname',mother_surname = '$mother_surname',
        mother_firstname='$mother_firstname',mother_middlename = '$mother_middlename'
    WHERE fam_id ='$fam_id'");
   
    $family_query->execute();

if($family_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Family Profile.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
//UPDATE EDUCATION  INFORMATION DATA
if (isset($_POST['updateEducation'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $education_id =$_POST['education_id'];
    $elem_name =$_POST['elem_name'];
    $elem_degree =$_POST['elem_degree'];
    $elem_from =$_POST['elem_from'];
    $elem_to =$_POST['elem_to'];
    $elem_earned=$_POST['elem_earned'];
    $elem_honor =$_POST['elem_honor'];
    //HIGH SCHOOL
    $sec_name =$_POST['sec_name'];
    $sec_degree =$_POST['sec_degree'];
    $sec_from =$_POST['sec_from'];
    $sec_to =$_POST['sec_to'];
    $sec_earned=$_POST['sec_earned'];
    $sec_honor =$_POST['sec_honor'];
    //VOCATIONAL
    $voc_name =$_POST['voc_name'];
    $voc_degree =$_POST['voc_degree'];
    $voc_from =$_POST['voc_from'];
    $voc_to =$_POST['voc_to'];
    $voc_earned=$_POST['voc_earned'];
    $voc_honor =$_POST['voc_honor'];
    //COLLEGE
    $col_name =$_POST['col_name'];
    $col_degree =$_POST['col_degree'];
    $col_from =$_POST['col_from'];
    $col_to =$_POST['col_to'];
    $col_earned=$_POST['col_earned'];
    $col_honor =$_POST['col_honor'];

    //GRADUATE STUDIES
    $gad_name =$_POST['gad_name'];
    $gad_degree =$_POST['gad_degree'];
    $gad_from =$_POST['gad_from'];
    $gad_to =$_POST['gad_to'];
    $gad_earned=$_POST['gad_earned'];
    $gad_honor =$_POST['gad_honor'];

    //GRADUATE STUDIES
    $gad_namee =$_POST['gad_namee'];
    $gad_degreee =$_POST['gad_degreee'];
    $gad_frome =$_POST['gad_frome'];
    $gad_toe =$_POST['gad_toe'];
    $gad_earnede=$_POST['gad_earnede'];
    $gad_honore =$_POST['gad_honore'];
       
    $education_query = $conn->prepare("UPDATE emp_education SET education_id ='$education_id', elem_name= '$elem_name', 
    elem_degree = '$elem_degree',elem_from='$elem_from',elem_to = '$elem_to',elem_earned = '$elem_earned',elem_honor = '$elem_honor',
    sec_name='$sec_name',sec_degree = '$sec_degree',sec_from = '$sec_from',sec_to='$sec_to',
    sec_earned = '$sec_earned',sec_honor = '$sec_honor',
    voc_name='$voc_name',voc_degree = '$voc_degree',voc_from='$voc_from',voc_to = '$voc_to',
    voc_earned='$voc_earned',voc_honor = '$voc_honor',
    col_name='$col_name',col_degree = '$col_degree',col_from='$col_from',col_to = '$col_to',
    col_earned='$col_earned',col_honor = '$col_honor',
    gad_name='$gad_name',gad_degree = '$gad_degree',gad_from='$gad_from',gad_to = '$gad_to',
    gad_earned='$gad_earned',gad_honor = '$gad_honor',
    gad_namee='$gad_namee',gad_degreee = '$gad_degreee',gad_frome='$gad_frome',gad_toe = '$gad_toe',
    gad_earnede='$gad_earnede',gad_honore = '$gad_honore'
    WHERE education_id ='$education_id'");
   
   $education_query->execute();

if($education_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Educational Background.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
//UPDATE CHILDREN  INFORMATION DATA
if (isset($_POST['updateChildren'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $child_id =$_POST['child_id'];
    $child_name =$_POST['child_name'];
    $child_birthdate =$_POST['child_birthdate'];
    $child_name1 =$_POST['child_name1'];
    $child_birthdate1 =$_POST['child_birthdate1']; ;
    $child_name2 =$_POST['child_name2'];
    $child_birthdate2 =$_POST['child_birthdate2']; 
    $child_name3 =$_POST['child_name3'];
    $child_birthdate3 =$_POST['child_birthdate3']; 
    $child_name4 =$_POST['child_name4'];
    $child_birthdate4 =$_POST['child_birthdate4']; 
    $child_name5 =$_POST['child_name5'];
    $child_birthdate5 =$_POST['child_birthdate5'];
    $child_name6 =$_POST['child_name6'];
    $child_birthdate6 =$_POST['child_birthdate6'];
    $child_name7 =$_POST['child_name7'];
    $child_birthdate7 =$_POST['child_birthdate7'];
    $child_name8 =$_POST['child_name8'];
    $child_birthdate8 =$_POST['child_birthdate8'];
    $child_name9 =$_POST['child_name9'];
    $child_birthdate9 =$_POST['child_birthdate9'];;
    $child_name10 =$_POST['child_name10'];
    $child_birthdate10 =$_POST['child_birthdate10'];
    $child_name11 =$_POST['child_name11'];
    $child_birthdate11 =$_POST['child_birthdate11'];
       
    $children_query = $conn->prepare("UPDATE emp_child SET child_id ='$child_id', child_name= '$child_name',child_birthdate= '$child_birthdate',
        child_name1= '$child_name1',child_birthdate1= '$child_birthdate1',child_name2= '$child_name2',child_birthdate2= '$child_birthdate2',
        child_name3= '$child_name3',child_birthdate3= '$child_birthdate3',child_name4= '$child_name4',child_birthdate4= '$child_birthdate4',
        child_name5= '$child_name5',child_birthdate5= '$child_birthdate5',child_name6= '$child_name6',child_birthdate6= '$child_birthdate6',
        child_name7= '$child_name7',child_birthdate7= '$child_birthdate7',child_name8= '$child_name8',child_birthdate8= '$child_birthdate8',
        child_name9= '$child_name9',child_birthdate9= '$child_birthdate9',child_name10= '$child_name10',child_birthdate10= '$child_birthdate10',
        child_name11= '$child_name11',child_birthdate11= '$child_birthdate11'
    WHERE child_id ='$child_id'");
   
   $children_query->execute();

if($children_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Children Information.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
if (isset($_POST['updateEligibility'])) {
    
    include_once "connection.php";
    $conn = dbConnect();
    $eligibility_id =$_POST['eligibility_ide'];
    $eligibility_name =$_POST['eligibility_namee'];
    $eligibility_rating =$_POST['eligibility_ratinge'];
    $eligibility_date =$_POST['eligibility_datee'];
    $eligibility_place =$_POST['eligibility_placee'];
    $eligibility_number =$_POST['eligibility_numbere'];
    $eligibility_validity =$_POST['eligibility_validitye'];
   
    
    
    $hobbies_query = $conn->prepare("UPDATE emp_eligibility SET eligibility_id ='$eligibility_id',eligibility_name = '$eligibility_name',
        eligibility_rating = '$eligibility_rating',eligibility_date='$eligibility_date',eligibility_place = '$eligibility_place',
        eligibility_number = '$eligibility_number',eligibility_validity='$eligibility_validity'
    WHERE eligibility_id ='$eligibility_id'");
   
    $hobbies_query->execute();

if($hobbies_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Eligibility Information.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
if (isset($_POST['updateWork'])) {
    
    include_once "connection.php";
    $conn = dbConnect();
    $work_id =$_POST['work_ida'];
    $work_from =$_POST['work_froma'];
    $work_to =$_POST['work_toa'];
    $work_position =$_POST['work_positiona'];
    $work_department =$_POST['work_departmenta'];
    $work_salary =$_POST['work_salarya'];
    $work_grade =$_POST['work_gradea'];
    $work_status =$_POST['work_statusa'];
    $work_gov =$_POST['work_gova'];
   
    
    
    $hobbies_query = $conn->prepare("UPDATE emp_work SET work_id ='$work_id',work_from = '$work_from',
        work_to = '$work_to',work_position='$work_position',work_department = '$work_department',
        work_salary = '$work_salary',work_grade='$work_grade',work_status='$work_status',work_gov='$work_gov'
    WHERE work_id ='$work_id'");
   
    $hobbies_query->execute();

if($hobbies_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Work Experience.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
if (isset($_POST['updateVoluntary'])) {
    
    include_once "connection.php";
    $conn = dbConnect();
    $voluntary_id =$_POST['voluntary_idv'];
    $voluntary_name =$_POST['voluntary_namev'];
    $voluntary_address =$_POST['voluntary_addressv'];
    $voluntary_from =$_POST['voluntary_fromv'];
    $voluntary_to =$_POST['voluntary_tov'];
    $voluntary_hours =$_POST['voluntary_hoursv'];
    $voluntary_position =$_POST['voluntary_positionv'];
    
   
    
    
    $hobbies_query = $conn->prepare("UPDATE emp_voluntary SET voluntary_id ='$voluntary_id',voluntary_name = '$voluntary_name',
        voluntary_address = '$voluntary_address',voluntary_from='$voluntary_from',voluntary_to = '$voluntary_to',
        voluntary_hours = '$voluntary_hours',voluntary_position='$voluntary_position'
    WHERE voluntary_id ='$voluntary_id'");
   
    $hobbies_query->execute();

if($hobbies_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Voluntary Organization.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
if (isset($_POST['updateProgram'])) {
    
    include_once "connection.php";
    $conn = dbConnect();
    $attend_id =$_POST['attend_idc'];
    $attend_name =$_POST['attend_namec'];
    $attend_from =$_POST['attend_fromc'];
    $attend_to =$_POST['attend_toc'];
    $attend_hours =$_POST['attend_hoursc'];
    $attend_ld =$_POST['attend_ldc'];
    $attend_sponsored =$_POST['attend_sponsoredc'];
    
   
    
    
    $hobbies_query = $conn->prepare("UPDATE emp_program_attended SET attend_id ='$attend_id',attend_name = '$attend_name',
        attend_from = '$attend_from',attend_to='$attend_to',attend_hours = '$attend_hours',
        attend_ld = '$attend_ld',attend_sponsored='$attend_sponsored'
    WHERE attend_id ='$attend_id'");
   
    $hobbies_query->execute();

if($hobbies_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Program Attended.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
if (isset($_POST['updateHobbies'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $hobbies_id =$_POST['hobbies_id'];
    $hobbies_name =$_POST['hobbies_name'];
    $hobbies_name1 =$_POST['hobbies_name1'];
    $hobbies_name2 =$_POST['hobbies_name2'];
    $hobbies_name3 =$_POST['hobbies_name3'];
    $hobbies_name4 =$_POST['hobbies_name4'];
    $hobbies_name5 =$_POST['hobbies_name5'];
    $hobbies_name6 =$_POST['hobbies_name6'];
    
    
    $hobbies_query = $conn->prepare("UPDATE emp_hobbies SET hobbies_id ='$hobbies_id',hobbies_name = '$hobbies_name',
        hobbies_name1 = '$hobbies_name1',hobbies_name2='$hobbies_name2',hobbies_name3 = '$hobbies_name3',
        hobbies_name4 = '$hobbies_name4',hobbies_name5='$hobbies_name5',hobbies_name6 = '$hobbies_name6'
    WHERE hobbies_id ='$hobbies_id'");
   
    $hobbies_query->execute();

if($hobbies_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Hobbies .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
//UPDATE ORGANIZATION INFORMATION DATA
if (isset($_POST['updateOrganization'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $organization_id =$_POST['organization_id'];
    $organization_name =$_POST['organization_name'];
    $organization_name1 =$_POST['organization_name1'];
    $organization_name2 =$_POST['organization_name2'];
    $organization_name3 =$_POST['organization_name3'];
    $organization_name4 =$_POST['organization_name4'];
    $organization_name5 =$_POST['organization_name5'];
    $organization_name6 =$_POST['organization_name6'];
    
    
    $organization_query = $conn->prepare("UPDATE emp_organization SET organization_id ='$organization_id',organization_name = '$organization_name',
        organization_name1 = '$organization_name1',organization_name2='$organization_name2',organization_name3 = '$organization_name3',
        organization_name4 = '$organization_name4',organization_name5='$organization_name5',organization_name6 = '$organization_name6'
    WHERE organization_id ='$organization_id'");
   
    $organization_query->execute();

if($organization_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Organization .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
//UPDATE DISTINCTION INFORMATION DATA
if (isset($_POST['updateDistinction'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $distinction_id =$_POST['distinction_id'];
    $distinction_name =$_POST['distinction_name'];
    $distinction_name1 =$_POST['distinction_name1'];
    $distinction_name2 =$_POST['distinction_name2'];
    $distinction_name3 =$_POST['distinction_name3'];
    $distinction_name4 =$_POST['distinction_name4'];
    $distinction_name5 =$_POST['distinction_name5'];
    $distinction_name6 =$_POST['distinction_name6'];
    
    
    $organization_query = $conn->prepare("UPDATE emp_distinction SET distinction_id ='$distinction_id',distinction_name = '$distinction_name',
        distinction_name1 = '$distinction_name1',distinction_name2='$distinction_name2',distinction_name3 = '$distinction_name3',
        distinction_name4 = '$distinction_name4',distinction_name5='$distinction_name5',distinction_name6 = '$distinction_name6'
    WHERE distinction_id ='$distinction_id'");
   
    $organization_query->execute();

if($organization_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Distinction .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
//UPDATE REFERENCES INFORMATION DATA
if (isset($_POST['updateReferences'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $reference_id =$_POST['reference_id'];
    $reference_name =$_POST['reference_name'];
    $reference_address =$_POST['reference_address'];
    $reference_tel =$_POST['reference_tel'];
    $reference_name1 =$_POST['reference_name1'];
    $reference_address1 =$_POST['reference_address1'];
    $reference_tel1 =$_POST['reference_tel1'];
    $reference_name2 =$_POST['reference_name2'];
    $reference_address2 =$_POST['reference_address2'];
    $reference_tel2 =$_POST['reference_tel2'];
    
    
    $reference_query = $conn->prepare("UPDATE emp_reference SET reference_id ='$reference_id',
        reference_name = '$reference_name',reference_address='$reference_address',reference_tel = '$reference_tel',
        reference_name1 = '$reference_name1',reference_address1='$reference_address1',reference_tel1 = '$reference_tel1',
        reference_name2 = '$reference_name2',reference_address2='$reference_address2',reference_tel2 = '$reference_tel2'
    WHERE reference_id ='$reference_id'");
   
    $reference_query->execute();

if($reference_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Reference .',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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
//UPDATE GOVERNMENT ID INFORMATION DATA
if (isset($_POST['updateGovernment'])) {
    include_once "connection.php";
    $conn = dbConnect();
    $government_id =$_POST['government_id'];
    $government_name =$_POST['government_name'];
    $government_no =$_POST['government_no'];
    $government_date =$_POST['government_date'];
    $government_place =$_POST['government_place'];
    

    $government_query = $conn->prepare("UPDATE emp_gov_id SET government_id ='$government_id',
        government_name = '$government_name',government_no='$government_no',
        government_date = '$government_date',government_place = '$government_place'
    WHERE government_id ='$government_id'");
   
    $government_query->execute();

if($government_query )
{  
    ?>
<script >
        Swal.fire({
            position: 'bottom-end',
            icon: 'success',
            title: 'Successfuly Updated Government Issued Id.',
            showConfirmButton: false,
            timer: 1500
            }).then(function() {
                // window.location = "hr_PDS.php";
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





