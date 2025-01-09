<?php
 

 $output='';
 $update=false;
 $eid=0;
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
 $employee_agency ='';
 $employee_email ='';
 $employee_position ='';
 $employee_department ='';
 $employee_salarygrade ='';
 $employee_type ='';
 $employee_status ='';
 $employee_vacation ='';
 $employee_sick ='';
 $employee_start = '';
 


//EDIT
if (isset($_GET['edit'])){
    include_once "connection.php";
    $conn = dbConnect();
    $Id = $_GET['edit'];
    $account = $conn->prepare("SELECT * FROM account 
    INNER JOIN emp_profile  ON emp_profile.account_id = account.Id 
    INNER JOIN emp_family  ON emp_family.account_id = account.Id 
    INNER JOIN emp_education ON emp_education.account_id = account.Id 
    INNER JOIN emp_child ON emp_child.account_id = account.Id 
    INNER JOIN emp_hobbies ON emp_hobbies.account_id = account.Id 
    INNER JOIN emp_organization ON emp_organization.account_id = account.Id 
    INNER JOIN emp_distinction ON emp_distinction.account_id = account.Id 
    INNER JOIN emp_reference ON emp_reference.account_id = account.Id 
    INNER JOIN emp_gov_id ON emp_gov_id.account_id = account.Id 
    WHERE  account.Id = $Id");
    $account->execute();

    $update =true;  

    $result = $account->fetch(PDO::FETCH_ASSOC);
    $Id=$result['Id'];
    $profile_id =$result['profile_id'];
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
    // Creating timestamp from given date
    $employee_datebirth = strtotime($employee_datebirth);
    // Creating new date format from that timestamp
    $employee_datebirth = date("m/d/Y", $employee_datebirth);
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
    $employee_Pblock =$result['employee_Rblock'];
    $employee_Pstreet =$result['employee_Rstreet'];
    $employee_Pvillage =$result['employee_Rvillage'];
    $employee_Pbarangay =$result['employee_Rbarangay'];
    $employee_Pcity =$result['employee_Rcity'];
    $employee_Pprovince =$result['employee_Rprovince'];
    $employee_Pzipcode =$result['employee_Rzipcode'];
    $employee_telephone =$result['employee_telephone'];
    $employee_contact =$result['employee_contact'];
    $employee_gsis =$result['employee_gsis'];
    $employee_pagibig =$result['employee_pagibig'];
    $employee_philhealth =$result['employee_philhealth'];
    $employee_sss =$result['employee_sss'];
    $employee_tin =$result['employee_tin'];
    $employee_agency =$result['employee_agency'];
    $employee_email =$result['employee_email'];

    //ACCOUNT
    $employee_position =$result['employee_position'];
    $employee_department =$result['employee_department'];
    $employee_salarygrade =$result['employee_salarygrade'];
    $employee_salarystep =$result['employee_salarystep'];
    $employee_salarycos =$result['employee_salarycos'];
    $employee_type =$result['employee_type'];
    $employee_status =$result['employee_status'];
    $employee_agency =$result['employee_agency'];
    $employee_email =$result['employee_email'];
    $employee_start =$result['employee_start'];
    $employee_active =$result['employee_active'];
    $employee_id =$result['employee_id'];



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
    //COLLEGE
    $col_name =$result['col_name'];
    $col_degree =$result['col_degree'];
    $col_from =$result['col_from'];
    $col_to =$result['col_to'];
    $col_earned=$result['col_earned'];
    $col_honor =$result['col_honor'];
    //GRADUATE STUDIES
    $gad_name =$result['gad_name'];
    $gad_degree =$result['gad_degree'];
    $gad_from =$result['gad_from'];
    $gad_to =$result['gad_to'];
    $gad_earned=$result['gad_earned'];
    $gad_honor =$result['gad_honor'];
     //GRADUATE STUDIES
     $gad_namee =$result['gad_namee'];
     $gad_degreee =$result['gad_degreee'];
     $gad_frome =$result['gad_frome'];
     $gad_toe =$result['gad_toe'];
     $gad_earnede=$result['gad_earnede'];
     $gad_honore =$result['gad_honore'];

    //CHILDREN

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
    $hobbies_name =$result['hobbies_name'];
    $hobbies_name1 =$result['hobbies_name1'];
    $hobbies_name2 =$result['hobbies_name2'];
    $hobbies_name3 =$result['hobbies_name3'];
    $hobbies_name4 =$result['hobbies_name4'];
    $hobbies_name5 =$result['hobbies_name5'];
    $hobbies_name6 =$result['hobbies_name6'];

    //ORGANIZATION
    $organization_name =$result['organization_name'];
    $organization_name1 =$result['organization_name1'];
    $organization_name2 =$result['organization_name2'];
    $organization_name3 =$result['organization_name3'];
    $organization_name4 =$result['organization_name4'];
    $organization_name5 =$result['organization_name5'];
    $organization_name6 =$result['organization_name6'];

    //ORGANIZATION
    $distinction_name =$result['distinction_name'];
    $distinction_name1 =$result['distinction_name1'];
    $distinction_name2 =$result['distinction_name2'];
    $distinction_name3 =$result['distinction_name3'];
    $distinction_name4 =$result['distinction_name4'];
    $distinction_name5 =$result['distinction_name5'];
    $distinction_name6 =$result['distinction_name6'];

    //REFERENCE
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
    $government_name =$result['government_name'];
    $government_no =$result['government_no'];
    $government_date =$result['government_date'];
    // Creating timestamp from given date
    $government_date = strtotime($government_date);
    // Creating new date format from that timestamp
    $government_date = date("d-m-Y", $government_date);
    $government_place =$result['government_place'];

    
}


?>




