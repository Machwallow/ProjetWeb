<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 29/01/2019
 * Time: 17:09
 */

require_once (PATH_ENTITY.'fpdf.php');


class Pdf extends FPDF
{
    function createTable($header, $data)
    {
        // Colors, line width and bold font
        $this->SetFillColor(255,255,255);
        //$this->SetTextColor();
        $this->SetDrawColor(0,0,128);
        $this->SetLineWidth(.3);
        $this->SetFont('','B');
        // Header
        $w = array(60, 35, 40);
        for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
        $this->Ln();
        // Color and font restoration
        $this->SetFillColor(224,235,255);
        $this->SetTextColor(0);
        $this->SetFont('');
        // Data
        $fill = false;
        foreach($data as $row)
        {
            $this->Cell($w[0],6,iconv('UTF-8', 'windows-1252', $row[0]),'LR',0,'L',$fill);
            $this->Cell($w[1],6,iconv('UTF-8', 'windows-1252', $row[1]),'LR',0,'R',$fill);
            $this->Cell($w[2],6,$row[2],'LR',0,'R',$fill);
            $this->Ln();
            $fill = !$fill;
        }
        // Closing line
        $this->Cell(array_sum($w),0,'','T');
    }

    function createInfos($orderNum){
        
        $this->SetFont('Arial','B',14);
        $this->AddPage();
        $this->Cell(40,10,'Facture de votre commande N '.$orderNum);
        $this->Ln(20);
        $this->SetFont('');
        $this->Cell(40,10,'M ou Mme '.$_SESSION['surname']);
        $this->Ln(8);
        $this->Cell(40,10,'Tel : '.$_SESSION['phone']);
        $this->Ln(8);
        $this->Cell(40,10,'Mail : '.$_SESSION['email']);
        $this->Ln(40);
        $this->SetFont('','B');
        $this->Cell(40,10,'Adresse de livraison :');
        $this->SetFont('');
        $this->Ln(20);

        $this->Cell(60,10,$_SESSION['add1']);
        $this->Ln(8);
        $this->Cell(60,10,$_SESSION['add2']);
        $this->Ln(8);
        $this->Cell(60,10,$_SESSION['postcode']);
        $this->Ln(8);

    }

}