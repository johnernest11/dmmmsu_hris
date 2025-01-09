<?php
// Include the PDF class
require_once "fpdf.php";
 
// Create instance of PDF class
require_once "../assets/employee_profile_query.php";

$pdf = new FPDF();
$pdf = new FPDF('P', 'mm', 'Legal', true,);
$pdf->SetTitle("ACCOUNTS");
$fontSize=7;
$tempFontSize=$fontSize;
$pdf->SetMargins(4,4);

$pdf->AddPage();
$pdf->SetFont("Arial", "B", 20);
$pdf->Image("pds/dmmmsu.png",10,10,-200 );
//SPACE
$pdf->Multicell(205.5,35,'Employee Account',1,'C');
$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(30,7.5,"Employee ID",1,0,'C');
$pdf->Cell(60,7.5, "Employee Name",1,0,'C');
$pdf->Cell(55.2,7.5, "Employee Position",1,0,'C');
$pdf->Cell(60.2,7.5, "Employee Password",1,1,'C');
ob_start();
include_once "../assets/connection.php"; $conn = dbConnect();
$account = $conn->prepare("SELECT * FROM account 
INNER JOIN emp_profile ON emp_profile.account_id = account.Id");
$account->execute();
while($result = $account->fetch(PDO::FETCH_OBJ)){
                $cellWidth=30;
                while($pdf->GetStringWidth($result->employee_id) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->employee_id,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $cellWidth=60;
                while($pdf->GetStringWidth($result->employee_firstname) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->employee_firstname,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                $cellWidth=55.2;
                while($pdf->GetStringWidth($result->employee_position) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->employee_position,1,0,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);

                
                $cellWidth=60.2;
                while($pdf->GetStringWidth($result->password) > $cellWidth) { //loop until string is smaller than cell width
                $pdf->SetFontSize($tempFontSize -= 0.1 );
                }
                $pdf->Cell($cellWidth,7.5,$result->password,1,1,'C');
                //reset front size
                $tempFontSize=$fontSize;
                $pdf->SetFontSize($fontSize);
                
              
               
}

 
// // Render the PDF in your browser
$pdf->output();
 
?>