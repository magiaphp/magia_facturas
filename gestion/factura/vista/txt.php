<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
factura_id : %factura_id%
factura_id_factura : %factura_id_factura%
factura_cantidad : %factura_cantidad%
factura_descripcion : %factura_descripcion%
factura_valor : %factura_valor%
factura_porcentaje_iva : %factura_porcentaje_iva%
";

                include "./factura/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>