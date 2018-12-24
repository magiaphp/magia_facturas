<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $notacs_id = (isset($_REQUEST['notacs_id']))?mysql_real_escape_string($_REQUEST['notacs_id']):null;   
    $notacs_id_factura = (isset($_REQUEST['notacs_id_factura']))?mysql_real_escape_string($_REQUEST['notacs_id_factura']):null;   
    $notacs_contacto_email = (isset($_REQUEST['notacs_contacto_email']))?mysql_real_escape_string($_REQUEST['notacs_contacto_email']):null;   
   # $notacs_fecha_registro = (isset($_REQUEST['notacs_fecha_registro']))?mysql_real_escape_string($_REQUEST['notacs_fecha_registro']):CURRENT_TIMESTAMP;   
    $notacs_sub_total = (isset($_REQUEST['notacs_sub_total']))?mysql_real_escape_string($_REQUEST['notacs_sub_total']):null;   
    $notacs_iva = (isset($_REQUEST['notacs_iva']))?mysql_real_escape_string($_REQUEST['notacs_iva']):null;   
    $notacs_comentarios = (isset($_REQUEST['notacs_comentarios']))?mysql_real_escape_string($_REQUEST['notacs_comentarios']):null;   
    $notacs_estatus = (isset($_REQUEST['notacs_estatus']))?mysql_real_escape_string($_REQUEST['notacs_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }