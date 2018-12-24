<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
presupuestos_id : %presupuestos_id%
presupuestos_contacto_email : %presupuestos_contacto_email%
presupuestos_fecha_registro : %presupuestos_fecha_registro%
presupuestos_sub_total : %presupuestos_sub_total%
presupuestos_iva : %presupuestos_iva%
presupuestos_comentarios : %presupuestos_comentarios%
presupuestos_expira : %presupuestos_expira%
presupuestos_estatus : %presupuestos_estatus%
";

                include "./presupuestos/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>