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
 $pdf->Cell($w * 1, $h, _tr("cantidad"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("descripcion"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("valor"), $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, _tr("porcentaje_iva"), $border, $ln, $align, $fill, $link);
 $pdf->Ln();
                //********************
                $i = 1;
                include "./factura/modelos/pdf.php";
                while ($factura = mysql_fetch_array($sql)) {
                    include "./factura/reg/reg.php";
                    $pdf->Cell($w * 1, $h, $i, $border, $ln, $align, $fill, $link); $pdf->Cell($w * 1, $h, $factura_id_factura, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_cantidad, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_descripcion, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_valor, $border, $ln, $align, $fill, $link);
 $pdf->Cell($w * 1, $h, $factura_porcentaje_iva, $border, $ln, $align, $fill, $link);


                    $pdf->Ln();
                    $i++;
                }
                //********************
                $pdf->Output();

                  
