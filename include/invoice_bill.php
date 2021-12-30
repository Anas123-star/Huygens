<?php
    include_once("../database/constants.php");
    include_once("../fpdf/fpdf.php");
    if ($_GET["c_id"]){
        $pdf = new FPDF('P','mm',array(58,150));
        $pdf->SetLeftMargin(3);
        $pdf->SetRightMargin(3);
        $pdf->SetTopMargin(3);
        $pdf->AddPage();
        $pdf->Image('../images/logo_small.jpg',3,3,-3200);
        $pdf->setFont("Arial","B",6);
        $pdf->Cell(30,3,"",0,0);
        $pdf->setFont("Arial","B",6);
	    $pdf->Cell(22,3,"Huygens",0,1);
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(15,2,"",0,0);
        $pdf->Cell(15,2,"",0,0);
	    $pdf->Cell(22,2,"www.Huygens.com",0,1);
        $pdf->Cell(15,2,"",0,0);
        $pdf->Cell(15,2,"",0,0);
	    $pdf->Cell(22,2,"Helpdesk@huygens.com",0,1);
        $pdf->Cell(15,2,"",0,0);
        $pdf->Cell(15,2,"",0,0);
	    $pdf->Cell(22,2,"Aligarh, 202001",0,1);
        $pdf->Cell(52,3,"",0,1);
        $pdf->Cell(52,3,"",0,1);
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","B",5);
        $pdf->Cell(52,2,"Invoice Details",0,1,"C");
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->Cell(15,2,"Invoice No:",0,0);
        $pdf->Cell(15,2,"".$_GET["invoice_no"],0,0);
        $pdf->Cell(10,2,"Date :",0,0,"C");
        $pdf->Cell(10,2,"".$_GET["invoice_date"],0,1);
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(15,2,"Employee Id:",0,0);
        $pdf->Cell(15,2,"".$_SESSION["employee_id"],0,1);
        $pdf->Cell(15,2,"Complaint id :",0,0);
        $pdf->Cell(15,2,"".$_GET["c_id"],0,0);
	    $pdf->Cell(22,2,"",0,1);
        $pdf->Cell(15,2,"Customer Name:",0,0);
        $pdf->Cell(15,2,"".$_SESSION["customer_name"],0,0);
	    $pdf->Cell(22,2,"",0,1);
        $pdf->Cell(52,3,"",0,1);
	    $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","B",5);
        $pdf->Cell(52,2,"Services",0,1,"C");
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","IU",5);
        $pdf->Cell(12,3,"#",0,0,"C");
        $pdf->Cell(20,3,"Service Name",0,0,"C");
        $pdf->Cell(20,3,"Price",0,1,"C");
        $pdf->setFont("Arial",null,5);
        for ($i=0; $i < count($_GET["ser_id"]) ; $i++) { 
            $pdf->Cell(12,3, ($i+1) ,0,0,"C");
            $pdf->Cell(20,3, $_GET["ser_name"][$i],0,0,"C");
            $pdf->Cell(20,3, $_GET["price"][$i],0,1,"C");
        }
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->Cell(52,3,"",0,1);
        
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","B",5);
        $pdf->Cell(52,2,"Other Services",0,1,"C");
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","IU",5);
        $pdf->Cell(12,3,"#",0,0,"C");
        $pdf->Cell(20,3,"Other Service Name",0,0,"C");
        $pdf->Cell(20,3,"Price",0,1,"C");
        $pdf->setFont("Arial",null,5);
        for ($i=0; $i < count($_GET["other_ser_name"]) ; $i++) { 
            if ($_GET["other_ser_price"][$i] != "") {
            $pdf->Cell(12,3, ($i+1) ,0,0,"C");
            $pdf->Cell(20,3, $_GET["other_ser_name"][$i],0,0,"C");
            $pdf->Cell(20,3, $_GET["other_ser_price"][$i],0,1,"C");
            }
        }
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->Cell(52,2,"",0,1);
        $pdf->setFont("Arial","B",6);
        $pdf->Cell(20,3,"",0,0,"R");
        $pdf->Cell(12,3,"Sub Total",1,0,"R");
        $pdf->Cell(19,3,"".$_GET["sub_total"],1,1,"C");
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(52,2,"",0,1);
        
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","B",5);
        $pdf->Cell(52,2,"Products",0,1,"C");
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->setFont("Arial","IU",5);
        $pdf->Cell(3,3,"#",0,0,"C");
        $pdf->Cell(11,3,"Name",0,0,"C");
        $pdf->Cell(11,3,"company",0,0,"C");
        $pdf->Cell(11,3,"Retailer",0,0,"C");
        $pdf->Cell(8,3,"Qty x Price",0,0,"C");
        $pdf->Cell(8,3,"Total",0,1,"C");
        $pdf->setFont("Arial",null,5);
        for ($i=0; $i < count($_GET["p_name"]) ; $i++) { 
            if ($_GET["p_price"][$i] != "") {
            $pdf->Cell(3,3, ($i+1) ,0,0,"C");
            $pdf->Cell(11,3, $_GET["p_name"][$i],0,0,"C");
            $pdf->Cell(11,3, $_GET["p_comp"][$i],0,0,"C");
            $pdf->Cell(11,3, $_GET["retailer"][$i],0,0,"C");
            $pdf->Cell(8,3, $_GET["qty"][$i]."x".$_GET["p_price"][$i],0,0,"C");
            $pdf->Cell(8,3, $_GET["qty"][$i] *$_GET["p_price"][$i],0,1,"C");

            }
        }
        $pdf->Cell(52,1,"-------------------------------------------------------------------------------------",0,1);
        $pdf->Cell(52,3,"",0,1);
        $pdf->setFont("Arial","B",6);
        $pdf->Cell(15,3,"Net Total",0,0);
        $pdf->Cell(37,3,": ".$_GET["new_total"],0,1);
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(15,3,"Visiting Chaarge",0,0);
        $pdf->Cell(37,3,": ".$_GET["vis_charge"],0,1);
        $pdf->Cell(15,3,"Discount",0,0);
        $pdf->Cell(37,3,": ".$_GET["discount"],0,1);
        $pdf->setFont("Arial","B",6);
        $pdf->Cell(15,3,"Grand Total",0,0);
        $pdf->Cell(37,3,": ".$_GET["grand_total"],0,1);
        $pdf->setFont("Arial",null,5);
        $pdf->Cell(15,3,"Paid",0,0);
        $pdf->Cell(37,3,": ".$_GET["paid"],0,1);
        $pdf->Cell(15,3,"Due Amount",0,0);
        $pdf->Cell(37,3,": ".$_GET["due"],0,1);
        $pdf->Cell(15,3,"Payment Type",0,0);
        $pdf->Cell(37,3,": ".$_GET["payment_type"],0,1);

        $pdf->Output("../PDF_INVOICE/".$_GET["invoice_no"].".pdf","F");
        
        $pdf->Output();

    }
?>