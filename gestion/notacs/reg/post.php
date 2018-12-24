<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$notacs_id = mysql_real_escape_string($_POST['notacs_id']); 
    $notacs_id_factura = (isset($_POST['notacs_id_factura']))?mysql_real_escape_string($_POST['notacs_id_factura']):null;   
    $notacs_contacto_email = (isset($_POST['notacs_contacto_email']))?mysql_real_escape_string($_POST['notacs_contacto_email']):null;   
 #    $notacs_fecha_registro = (isset($_POST['notacs_fecha_registro']))?mysql_real_escape_string($_POST['notacs_fecha_registro']):CURRENT_TIMESTAMP;   
    $notacs_sub_total = (isset($_POST['notacs_sub_total']))?mysql_real_escape_string($_POST['notacs_sub_total']):null;   
    $notacs_iva = (isset($_POST['notacs_iva']))?mysql_real_escape_string($_POST['notacs_iva']):null;   
    $notacs_comentarios = (isset($_POST['notacs_comentarios']))?mysql_real_escape_string($_POST['notacs_comentarios']):null;   
    $notacs_estatus = (isset($_POST['notacs_estatus']))?mysql_real_escape_string($_POST['notacs_estatus']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }