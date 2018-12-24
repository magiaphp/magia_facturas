<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$presupuesto_id = mysql_real_escape_string($_GET['presupuesto_id']); 
    $presupuesto_id_factura = (isset($_GET['presupuesto_id_factura']))?mysql_real_escape_string($_GET['presupuesto_id_factura']):null;   
    $presupuesto_cantidad = (isset($_GET['presupuesto_cantidad']))?mysql_real_escape_string($_GET['presupuesto_cantidad']):null;   
    $presupuesto_descripcion = (isset($_GET['presupuesto_descripcion']))?mysql_real_escape_string($_GET['presupuesto_descripcion']):null;   
    $presupuesto_valor = (isset($_GET['presupuesto_valor']))?mysql_real_escape_string($_GET['presupuesto_valor']):null;   
    $presupuesto_porcentaje_iva = (isset($_GET['presupuesto_porcentaje_iva']))?mysql_real_escape_string($_GET['presupuesto_porcentaje_iva']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }