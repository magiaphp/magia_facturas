<?php 
 /**  
 magia_version: 0.0.11 
 **/
  
    $factura_id = (isset($_REQUEST['factura_id']))?mysql_real_escape_string($_REQUEST['factura_id']):null;   
    $factura_id_factura = (isset($_REQUEST['factura_id_factura']))?mysql_real_escape_string($_REQUEST['factura_id_factura']):null;   
    $factura_cantidad = (isset($_REQUEST['factura_cantidad']))?mysql_real_escape_string($_REQUEST['factura_cantidad']):null;   
    $factura_descripcion = (isset($_REQUEST['factura_descripcion']))?mysql_real_escape_string($_REQUEST['factura_descripcion']):null;   
    $factura_valor = (isset($_REQUEST['factura_valor']))?mysql_real_escape_string($_REQUEST['factura_valor']):null;   
    $factura_porcentaje_iva = (isset($_REQUEST['factura_porcentaje_iva']))?mysql_real_escape_string($_REQUEST['factura_porcentaje_iva']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_REQUEST as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }