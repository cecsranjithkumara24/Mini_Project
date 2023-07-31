<?php
$con=new mysqli("localhost","root","","emp");
ob_start();
include_once 'FPDF/fpdf.php';
require_once ('process/dbh.php');
$pdf=new FPDF();
$pdf->addPage('L','A3');
$pdf->SetFont("Arial","B",13);
$pdf->setLeftMargin(10);
$pdf->cell(50,10,"EMP_ID",1,0,"C");
$pdf->cell(80,10,"NAME  ",1,0,"C");
$pdf->cell(89,10,"E-MAIL",1,0,"C");
$pdf->cell(30,10,"GENDER",1,0,"C");
$pdf->cell(38,10,"CONTACT",1,0,"C");
$pdf->cell(40,10,"DEPARTMENT",1,0,"C");
$pdf->cell(40,10,"DEGREE",1,1,"C");

$sql="SELECT id,firstname,email,birthday,gender,contact,address,dept,degree from employee";
$res =$con->query($sql);
if($res->num_rows>0)

{  
    $i=0;
     while($row=$res->fetch_assoc()){
           $i++;
           
           $pdf->cell(50,10,$row['id'],1,0,"C");
           $pdf->cell(80,10,$row['firstname'],1,0,"");
           $pdf->cell(89,10,$row['email'],1,0,"C");
           $pdf->cell(30,10,$row['gender'],1,0,"C");
           $pdf->cell(38,10,$row['contact'],1,0,"C");
           $pdf->cell(40,10,$row['dept'],1,0,"C");
           $pdf->cell(40,10,$row['degree'],1,1);
                      
        }
}



    
        
   
  

$pdf->Output();
?>