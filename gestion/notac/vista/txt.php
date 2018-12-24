<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $html = "
notac_id : %notac_id%
notac_id_notac : %notac_id_notac%
notac_cantidad : %notac_cantidad%
notac_descripcion : %notac_descripcion%
notac_valor : %notac_valor%
notac_porcentaje_iva : %notac_porcentaje_iva%
";

                include "./notac/reg/var.php";

                echo "<h1>Variables disponibles</h1><pre>$html</pre>";
                ?>