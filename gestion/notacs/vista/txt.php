<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
notacs_id : %notacs_id%
notacs_id_factura : %notacs_id_factura%
notacs_contacto_email : %notacs_contacto_email%
notacs_fecha_registro : %notacs_fecha_registro%
notacs_sub_total : %notacs_sub_total%
notacs_iva : %notacs_iva%
notacs_comentarios : %notacs_comentarios%
notacs_estatus : %notacs_estatus%
";

                include "./notacs/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>