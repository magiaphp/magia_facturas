<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
  //$presupuestos_id = mysql_real_escape_string($_POST['presupuestos_id']); 
    $presupuestos_contacto_email = (isset($_POST['presupuestos_contacto_email']))?mysql_real_escape_string($_POST['presupuestos_contacto_email']):null;   
 #    $presupuestos_fecha_registro = (isset($_POST['presupuestos_fecha_registro']))?mysql_real_escape_string($_POST['presupuestos_fecha_registro']):CURRENT_TIMESTAMP;   
    $presupuestos_sub_total = (isset($_POST['presupuestos_sub_total']))?mysql_real_escape_string($_POST['presupuestos_sub_total']):0.00;   
    $presupuestos_iva = (isset($_POST['presupuestos_iva']))?mysql_real_escape_string($_POST['presupuestos_iva']):0.00;   
    $presupuestos_comentarios = (isset($_POST['presupuestos_comentarios']))?mysql_real_escape_string($_POST['presupuestos_comentarios']):null;   
    $presupuestos_expira = (isset($_POST['presupuestos_expira']))?mysql_real_escape_string($_POST['presupuestos_expira']):null;   
    $presupuestos_estatus = (isset($_POST['presupuestos_estatus']))?mysql_real_escape_string($_POST['presupuestos_estatus']):1;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }