<?php
 
 require_once "../assets/employee_profile_query.php";


     include 'fpdf.php';   

// Include the PDF class
 
// Create instance of PDF class

//$pdf = new FPDF();
$pdf = new FPDF('P', 'mm', 'Legal');
$pdf->SetTitle("$employee_lastname PDS");
// Add 1 page in your PDF
$pdf->AddPage();
// Place image on top left with 100px width
$pdf->Image("pds/pds-1.jpg", 0, 0, 213,);
$pdf->SetFont("Arial", "B", 8);
$fontSize=8;
$tempFontSize=$fontSize;
$pdf->Multicell(80,35,'',0);

//PERSONAL INFORMATION
$pdf->Cell(30);
$pdf->Cell(20,6, "$employee_lastname",0,1);
$pdf->Cell(30);
$pdf->Cell(145,6, "$employee_firstname",0,0);
$pdf->Cell(25,6, "$employee_extensionname",0,1);
$pdf->Cell(30);
$pdf->Cell(50,6, "$employee_middlename",0,1);
//
$pdf->Cell(30);

$pdf->Cell(50,10.5, "$employee_datebirth",0,0);
//CITIZENSHIP
if ($employee_citizenship  == "Filipino") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(48.6);
    $pdf->Cell(50,10.5,"$check",0,1);

}     
else if ($employee_citizenship  == "Dual Citizenship") {
        $check = "4";
        $pdf->SetFont('ZapfDingbats','', 7);
        $pdf->Cell(67.8);
        $pdf->Cell(60,10.5, "$check",0,1);
  };

$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(30.5);
$cellWidth=45;
while($pdf->GetStringWidth($employee_placebirth) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7.5,$employee_placebirth,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
$pdf->Cell(32,6, "",0,0);

//GENDER CHECK BOX
if ($employee_sex  == "Male") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(26,6.8, "$check",0,0);

  } else if ($employee_sex  == "Female") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(29.5);
    $pdf->Cell(26,6.8, "$check",0,0);
  };
  
//CIVIL STATUS
$pdf->MultiCell(50,6, "",0);
$pdf->Cell(32);
//SINGLE
if ($employee_civilstatus  == "Single") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(43,7, "$check",0,0);
  } 
  //WIDOWED
  else if ($employee_civilstatus  == "Widowed") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(43,15, "$check",0,0);
  }
 //OTHER`S
  else if ($employee_civilstatus  == "Other/s") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(43,23.5, "$check",0,0);
  }
  //MARRIED
  else if ($employee_civilstatus  == "Married") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(29.5);
    $pdf->Cell(19,7, "$check",0,0);
  }
 //SEPARATED
  else if ($employee_civilstatus  == "Separated") {
    $check = "4";
    $pdf->SetFont('ZapfDingbats','', 7);
    $pdf->Cell(29.5);
    $pdf->Cell(19,15.3, "$check",0,0);

  };

  //RESIDENTIAL ADDRESS
$pdf->SetFont("Arial", "B", 7);
$pdf->Cell(41);
$pdf->Cell(30,8, "$employee_Rblock",0,0,'C');
$pdf->Cell(14);
$pdf->Cell(30,8, "$employee_Rstreet",0,1,'C');
//
$pdf->Cell(116);
$pdf->Cell(30,7, "$employee_Rvillage",0,0,'C');
$pdf->Cell(14);
$pdf->Cell(30,7, "$employee_Rbarangay",0,1,'C');
//
$pdf->Cell(30);
$pdf->Cell(50,6.8, "$employee_height",0,0);
$pdf->Cell(35);
$pdf->Cell(30,6.8, "$employee_Rcity",0,0,'C');
$pdf->Cell(15);
$pdf->Cell(30,6.8, "$employee_Rprovince",0,1,'C');
//
$pdf->Cell(30);
$pdf->Cell(50,6.2, "$employee_weight",0,0);
$pdf->Cell(30.5);
$pdf->Cell(89,6, "$employee_Rzipcode",0,1,'C');
//
$pdf->Cell(30);
$pdf->Cell(50,7.5, "$employee_bloodtype",0,0);
$pdf->Cell(35);
$pdf->Cell(30,7.5, "$employee_Pblock",0,0,'C');
$pdf->Cell(15);
$pdf->Cell(30,7.5, "$employee_Pstreet",0,1,'C');
//

$pdf->Cell(30);
$pdf->Cell(50,6.8, "$employee_gsis",0,0);
$pdf->Cell(35);
$pdf->Cell(30,6.8, "$employee_Pvillage",0,0,'C');
$pdf->Cell(15);
$pdf->Cell(30,6.8, "$employee_Pbarangay",0,1,'C');
//
$pdf->Cell(30);
$pdf->Cell(50,7.5, "$employee_pagibig",0,0);
$pdf->Cell(35);
$pdf->Cell(30,7.5, "$employee_Pcity",0,0,'C');
$pdf->Cell(15);
$pdf->Cell(30,7.5, "$employee_Pprovince",0,1,'C');
//
$pdf->Cell(30);
$pdf->Cell(50,7, "$employee_philhealth",1,0);
$pdf->Cell(30.5);
$pdf->Cell(89,7, "$employee_Pzipcode",1,1,'C');
//

$pdf->Cell(30);
$pdf->Cell(50,7, "$employee_sss",0,0);
$pdf->Cell(31);
$pdf->Cell(30,7, "$employee_telephone",0,1);
//
$pdf->Cell(30);
$pdf->Cell(50,7, "$employee_tin",0,0);
$pdf->Cell(31);
$pdf->Cell(30,7, "$employee_contact",0,1);
//
$pdf->Cell(30);
$pdf->Cell(50,7, "$employee_agency",0,0);
$pdf->Cell(30.5);
$pdf->Cell(75,7, "$employee_email",0,1);


//FAMILY BACKGROUND
$pdf->MultiCell(50,5, "",0);
$pdf->Cell(30);
$pdf->Cell(80,6, "$spouse_surname",0,1);
//
$pdf->Cell(30);
$pdf->Cell(50,6, "$spouse_firstname",0,0);
$pdf->SetFont("Arial", "B", 5);
$pdf->Cell(30,8, "$spouse_extension",0,0,'C');
$pdf->SetFont("Arial", "B", 7);
$pdf->Cell(60,6, "$child_name",0,0);
$pdf->Cell(30,6, "$child_birthdate",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$spouse_middlename",0,0);
$pdf->Cell(59.5,6, "$child_name1",0,0);
$pdf->Cell(30,6, "$child_birthdate1",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$spouse_middlename",0,0);
$pdf->Cell(59.5,6, "$child_name2",0,0);
$pdf->Cell(30,6, "$child_birthdate2",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$spouse_occupation",0,0);
$pdf->Cell(59.5,6, "$child_name3",0,0);
$pdf->Cell(30,6, "$child_birthdate3",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$spouse_business",0,0);
$pdf->Cell(59.5,6, "$child_name4",0,0);
$pdf->Cell(30,6, "$child_birthdate4",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$spouse_business_add",0,0);
$pdf->Cell(59.5,6, "$child_name5",0,0);
$pdf->Cell(30,6, "$child_birthdate5",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$spouse_no",0,0);
$pdf->Cell(59.5,6, "$child_name6",0,0);
$pdf->Cell(30,6, "$child_birthdate6",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(50,6, "$father_firstname",0,0);
$pdf->SetFont("Arial", "B", 5);
$pdf->Cell(30,8, "$father_extensionname",0,0,'C');
$pdf->SetFont("Arial", "B", 7);
$pdf->Cell(60,6, "$child_name7",0,0);
$pdf->Cell(30,6, "$child_birthdate7",0,1,'C');


$pdf->Cell(30);
$pdf->Cell(80.5,6, "$father_middlename",0,0);
$pdf->Cell(59.5,6, "$child_name8",0,0);
$pdf->Cell(30,6, "$child_birthdate8",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "",0,0);
$pdf->Cell(59.5,6, "$child_name9",0,0);
$pdf->Cell(30,6, "$child_birthdate9",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$mother_surname",0,0);
$pdf->Cell(59.5,6, "$child_name10",0,0);
$pdf->Cell(30,6, "$child_birthdate10",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(80.5,6, "$mother_firstname",0,0);
$pdf->Cell(59.5,6, "$child_name11",0,0);
$pdf->Cell(30,6, "$child_birthdate11",0,1,'C');

$pdf->Cell(30);
$pdf->Cell(71.3,5.5, "$mother_middlename",0,0);
$pdf->Cell(22);


///////////////////////////////////////////////////////////////////////////////////////////EDUCATION BACKGROUND
$pdf->MultiCell(50,24.5, "",0);
//////////////////////////////ELEMENTARY
$pdf->Cell(30.2);
$cellWidth=50;
while($pdf->GetStringWidth($elem_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$elem_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$cellWidth=45;
while($pdf->GetStringWidth($elem_degree) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$elem_degree,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$pdf->Cell(12,8, "$elem_from",0,0,'C');
$pdf->Cell(12.8,8, "$elem_to",0,0,'C');
$pdf->Cell(18.5,8, "$elem_earned",0,0,'C');
$pdf->Cell(15.5,8, "$elem_from",0,0,'C');
$cellWidth=15;
while($pdf->GetStringWidth($elem_honor) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$elem_honor,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

/////////////////////////////////SECONDARY
$pdf->Cell(30.2);
$cellWidth=49.7;
while($pdf->GetStringWidth($sec_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8,$sec_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$cellWidth=45;
while($pdf->GetStringWidth($sec_degree) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8,$sec_degree,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$pdf->Cell(12,8, "$sec_from",0,0,'C');
$pdf->Cell(12.8,8, "$sec_to",0,0,'C');
$pdf->Cell(18.5,8, "$sec_earned",0,0,'C');
$pdf->Cell(15.5,8, "$sec_from",0,0,'C');

$cellWidth=15;
while($pdf->GetStringWidth($sec_honor) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$sec_honor,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);


///////////////////////////////////VOCATIONAL
$pdf->Cell(30.2);
$cellWidth=49.7;
while($pdf->GetStringWidth($voc_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$voc_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$cellWidth=46;
while($pdf->GetStringWidth($voc_degree) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$voc_degree,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$pdf->Cell(12,8.2, "$voc_from",0,0,'C');
$pdf->Cell(12.8,8.2, "$voc_to",0,0,'C');
$pdf->Cell(18.5,8.2, "$voc_earned",0,0,'C');
$pdf->Cell(14.5,8.2, "$voc_from",0,0,'C');

$cellWidth=15;
while($pdf->GetStringWidth($voc_honor) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$voc_honor,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

/////////////////////////////////////////////COLLEGE
$pdf->Cell(30.2);
$cellWidth=49.7;
while($pdf->GetStringWidth($col_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$col_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$cellWidth=45;
while($pdf->GetStringWidth($col_degree) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$col_degree,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$pdf->Cell(13,8.2, "$col_from",0,0,'C');
$pdf->Cell(12.8,8.2, "$col_to",0,0,'C');
$pdf->Cell(18.5,8.2, "$col_earned",0,0,'C');
$pdf->Cell(14.5,8.2, "$col_from",0,0,'C');
$cellWidth=15;
while($pdf->GetStringWidth($col_honor) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$col_honor,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

/////////////////////////////////////////GRADUATE STUDIES//
$pdf->Cell(30.2);


$cellWidth=50;
while($pdf->GetStringWidth($gad_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8,$gad_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$cellWidth=46;
while($pdf->GetStringWidth($gad_degree) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8,$gad_degree,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$pdf->Cell(12,8, "$gad_from",0,0,'C');
$pdf->Cell(12.8,8, "$gad_to",0,0,'C');
$pdf->Cell(18.5,8, "$gad_earned",0,0,'C');
$pdf->Cell(14.5,8, "$gad_from",0,0,'C');
$cellWidth=15;
while($pdf->GetStringWidth($gad_honor) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,8.2,$gad_honor,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

$pdf->SetFont("Arial", "B", 10);
$pdf->Multicell(50,4, "",0);
$pdf->Cell(80.2);
$pdf->Cell(71,8, "",0,0);
date_default_timezone_get();
$currentdate = date("m-d-Y");
$pdf->Cell(48,8, "$currentdate",0,1,'C');










//-----------------------------------------------------------------Add 2 page in your PDF
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 7);
$fontSize=7;
$tempFontSize=$fontSize;
$pdf->SetMargins(4,4);
// Place image on top left with 100px width
$pdf->Image("pds/pds-2.jpg", 0, 0, 213);
//SPACE
$pdf->Multicell(60,14,'',0);

//ELIGIBILITY
ob_start();
include_once "../assets/connection.php";
$conn = dbConnect();
$Id = $_GET['edit'];
$account = $conn->prepare("SELECT * FROM emp_eligibility INNER JOIN account ON emp_eligibility.account_id = account.Id 
WHERE account.Id = $Id LIMIT 7");
$account->execute();
while($result = $account->fetch(PDO::FETCH_OBJ)){
               //Shrink Font size until it fits the cell width
                //ELIGIBILTY NAME
                $cellWidth=66;
                while($pdf->GetStringWidth($result->eligibility_name) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->eligibility_name,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $pdf->Cell(22,8.5, $result->eligibility_rating,0,0,'C');
                $pdf->Cell(25,8.5, $result->eligibility_date,0,0,'C');
                //Shrink Font size until it fits the cell width

                //ELIGIBILTY PLACE
                $cellWidth=62;
                while($pdf->GetStringWidth($result->eligibility_place) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->eligibility_place,0,0);
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                //Shrink Font size until it fits the cell width

                //ELIGIBILTY NUMBER
                $cellWidth=20;
                while($pdf->GetStringWidth($result->eligibility_number) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->eligibility_number,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                //ELIGIBILITY VALIDITY
                $pdf->Cell(14,8.5, $result->eligibility_validity,0,1,'C');
        
}
//SPACE
$pdf->Multicell(60,28,'',0);
//WORK
ob_start();
include_once "../assets/connection.php";
$conn = dbConnect();
$Id = $_GET['edit'];
$account = $conn->prepare("SELECT * FROM emp_work INNER JOIN account ON emp_work.account_id = account.Id 
WHERE account.Id = $Id LIMIT 28");
$account->execute();
while($result = $account->fetch(PDO::FETCH_OBJ)){
                $pdf->Cell(17,7.5, $result->work_from,0,0,'C');
                $pdf->Cell(17.5,7.5, $result->work_to,0,0,'C');
                //Shrink Font size until it fits the cell width

                // WORK POSITION
                $cellWidth=54;
                while($pdf->GetStringWidth($result->work_position) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->work_position,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                //Shrink Font size until it fits the cell width

                //WORK DEPARTMENT
                $cellWidth=55;
                while($pdf->GetStringWidth($result->work_department) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->work_department,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                //WORK SALARY & GRADE
                $pdf->Cell(15,7.5, $result->work_salary,0,0,'C');
                $pdf->Cell(17,7.5, $result->work_grade,0,0,'C');
                //Shrink Font size until it fits the cell width

                //WORK STATUS
                 $cellWidth=19;
                while($pdf->GetStringWidth($result->work_status) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->work_status,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                
                $pdf->Cell(14.5,7.5, $result->work_gov,0,1,'C');
        
}



$pdf->SetFont("Arial", "B", 10);
$pdf->Multicell(50,3, "",0);
$pdf->Cell(60);
$pdf->Cell(84,7, "",0,0);
date_default_timezone_get();
$currentdate = date("m-d-Y");
$pdf->Cell(65,7, "$currentdate",0,1,'C');




//------------------------------------------------------------------------ Add 3 page in your PDF
$pdf->AddPage();
$pdf->SetFont("Arial", "B", 7);
$fontSize=7;
$tempFontSize=$fontSize;
$pdf->SetMargins(4.5,4);
// Place image on top left with 100px width
$pdf->Image("pds/pds-3.jpg", 0, 0, 213);

$pdf->Multicell(60,25,'',0);
//ELIGIBILITY

ob_start();
include_once "../assets/connection.php";
$conn = dbConnect();
$Id = $_GET['edit'];
$account = $conn->prepare("SELECT * FROM emp_voluntary INNER JOIN account ON emp_voluntary.account_id = account.Id 
WHERE account.Id = $Id LIMIT 7");
$account->execute();
while($result = $account->fetch(PDO::FETCH_OBJ)){
                $cellWidth=91;
                while($pdf->GetStringWidth($result->voluntary_name) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->voluntary_name,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                $pdf->Cell(16.2,7.5, $result->voluntary_from,0,0,'C');
                $pdf->Cell(15.2,7.5, $result->voluntary_to,0,0,'C');
                $pdf->Cell(16.2,7.5, $result->voluntary_hours,0,0,'C');
                $cellWidth=69;
                while($pdf->GetStringWidth($result->voluntary_position) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->voluntary_position,0,1,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
}

$pdf->Multicell(60,24.5,'',0);

//ELIGIBILITY
ob_start();
include_once "../assets/connection.php";
$conn = dbConnect();
$Id = $_GET['edit'];
$account = $conn->prepare("SELECT * FROM emp_program_attended INNER JOIN account ON emp_program_attended.account_id = account.Id 
WHERE account.Id = $Id LIMIT 21");
$account->execute();
while($result = $account->fetch(PDO::FETCH_OBJ)){
                $cellWidth=91;
                while($pdf->GetStringWidth($result->attend_name) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,6.8,$result->attend_name,0,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                

                $pdf->Cell(16.2,6.8, $result->attend_from,0,0,'C');
                $pdf->Cell(15.5,6.8, $result->attend_to,0,0,'C');
                $pdf->Cell(16,6.8, $result->attend_hours,0,0);
                $pdf->Cell(17.5,6.8, $result->attend_ld,0,0,'C');

                $cellWidth=52.5;
                while($pdf->GetStringWidth($result->attend_sponsored) > $cellWidth) { //loop until string is smaller than cell width
                  $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,6.8,$result->attend_sponsored,0,1,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
               
        
}


$pdf->Multicell(60,15.5,'',0);
///HOBIIES
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);


//-------------------------------------------------------

///HOBIIES1
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name1) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name1,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION1
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name1) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name1,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION1
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name1) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name1,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
 ///-------------------------------------

///HOBIIES2
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name2) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name2,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION2
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name2) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name2,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION2
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name2) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name2,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//----------------------------------
///HOBIIES3
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name3) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name3,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION3
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name3) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name3,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION3
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name3) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name3,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);

//---------------------------
///HOBIIES4
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name4) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name4,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION4
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name4) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name4,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION4
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name4) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name4,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//--------------------------

///HOBIIES5
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name5) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name6,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION5
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name5) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name5,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION5
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name5) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name5,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);



///HOBIIES6
$cellWidth=53.5;
while($pdf->GetStringWidth($hobbies_name6) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$hobbies_name6,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//ORGANIZATION6
$cellWidth=102.5;
while($pdf->GetStringWidth($organization_name6) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$organization_name6,0,0,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
//DESITINCTION6
$cellWidth=52.5;
while($pdf->GetStringWidth($distinction_name6) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$distinction_name6,0,1,'C');
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);





$pdf->SetFont("Arial", "B", 10);
$pdf->Multicell(50,4, "",0);
$pdf->Cell(60);
$pdf->Cell(96,7, "",0,0);
date_default_timezone_get();
$currentdate = date("m-d-Y");
$pdf->Cell(53,7, "$currentdate",0,1,'C');


//----------------------------------------------------------------- Add 4 page in your PDF
$pdf->AddPage();
$pdf->SetMargins(4.5,4);
$pdf->SetFont("Arial", "B", 8);
$fontSize=8;
$tempFontSize=$fontSize;
// Place image on top left with 100px width
$pdf->Image("pds/pds-4.jpg", 0, 0, 213);
 
$pdf->MultiCell(20,20, "",0);
$pdf->Cell(155.8);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,6, "$check",0,1);
$pdf->Cell(155.8);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);

$pdf->MultiCell(20,11, "",0);
$pdf->Cell(156);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);

$pdf->MultiCell(20,12, "",0);
$pdf->Cell(157);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);
//
$pdf->MultiCell(20,16.5, "",0);
$pdf->Cell(158.2);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);

$pdf->MultiCell(20,11.5, "",0);
$pdf->Cell(158.5);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);

$pdf->MultiCell(20,9, "",0);
$pdf->Cell(160.2);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1); 

$pdf->MultiCell(20,5.5, "",0);
$pdf->Cell(160.5);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);   

$pdf->MultiCell(20,6.7, "",0);
$pdf->Cell(160.2);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);   

$pdf->MultiCell(20,20, "",0);
$pdf->Cell(160.8);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);   

$pdf->MultiCell(20,3.2, "",0);
$pdf->Cell(160.8);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);   

$pdf->MultiCell(20,4, "",0);
$pdf->Cell(160.8);
$check = "4";
$pdf->SetFont('ZapfDingbats','', 8);
$pdf->Cell(20,5.5, "$check",0,1);   

//REFERENCE
$pdf->SetFont('Arial','B', 7.5);
$pdf->MultiCell(20,18.5, "",0);
$pdf->Cell(79.5,7.5, "$reference_name",0,0);
$pdf->Cell(50,7.5, "$reference_address",0,0);   
$pdf->Cell(26,7.5, "$reference_tel",0,1);  

$pdf->Cell(79.5,7.5, "$reference_name1",0,0);
$pdf->Cell(50,7.5, "$reference_address1",0,0);   
$pdf->Cell(26,7.5, "$reference_tel1",0,1);  

$pdf->Cell(79.5,7.5, "$reference_name2",0,0);
$pdf->Cell(50,7.5, "$reference_address2",0,0);   
$pdf->Cell(26,7.5, "$reference_tel2",0,1);

//GOVERNMANT ID

$pdf->MultiCell(20,36, "",0);

$pdf->Cell(26);
$pdf->Cell(26,6.5, "$government_name",0,1);  
$pdf->Cell(27.5);
$pdf->Cell(26,7, "$government_no",0,1);  
$pdf->Cell(27);
$pdf->Cell(16,7, "$government_date /",0,0); 
$cellWidth=30;
while($pdf->GetStringWidth( $government_place) > $cellWidth) { //loop until string is smaller than cell width
  $pdf->SetFontSize($tempFontSize -= 0.1 );
}
$pdf->Cell($cellWidth,7,$government_place ,0,0);
//reset front size
$tempFontSize=$fontSize;
$pdf->SetFontSize($fontSize);
$pdf->Cell(30);

date_default_timezone_get();
$currentdate = date("m-d-Y");
$pdf->Cell(26,4, "$currentdate",0,1,'C'); 



 
// // Render the PDF in your browser
$pdf->output();
 
?>