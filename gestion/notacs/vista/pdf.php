<?php 
 
                        // Instanciation of inherited class
                        $pdf = new PDF();
                        $pdf->AliasNbPages();
                        $pdf->AddPage();
                        $pdf->SetFont("Times", "", 12);


                        $pdf->Cell($w*12, $h, "$p", 0, $ln, $align, $fill, $link);
                        $pdf->Ln(10);
                        //********************
                        $pdf->Cell($w * 1, $h, "#", $border, $ln, $align, $fill, $link);

                         $pdf->Cell($w * 1, $h, _tr("id_factura"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("contacto_email"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("fecha_registro"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("sub_total"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("iva"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("comentarios"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("estatus"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./notacs/modelos/pdf.php";
                while ($notacs = mysql_fetch_array($sql)) {
                    include "./notacs/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $notacs_id_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notacs_contacto_email, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notacs_fecha_registro, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notacs_sub_total, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notacs_iva, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notacs_comentarios, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $notacs_estatus, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
