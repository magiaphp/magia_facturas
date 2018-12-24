<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
presupuesto_id : %presupuesto_id%
presupuesto_id_factura : %presupuesto_id_factura%
presupuesto_cantidad : %presupuesto_cantidad%
presupuesto_descripcion : %presupuesto_descripcion%
presupuesto_valor : %presupuesto_valor%
presupuesto_porcentaje_iva : %presupuesto_porcentaje_iva%
";

                include "./presupuesto/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>