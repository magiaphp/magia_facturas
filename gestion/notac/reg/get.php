<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
  //$notac_id = mysql_real_escape_string($_GET['notac_id']); 
    $notac_id_notac = (isset($_GET['notac_id_notac']))?mysql_real_escape_string($_GET['notac_id_notac']):null;   
    $notac_cantidad = (isset($_GET['notac_cantidad']))?mysql_real_escape_string($_GET['notac_cantidad']):null;   
    $notac_descripcion = (isset($_GET['notac_descripcion']))?mysql_real_escape_string($_GET['notac_descripcion']):null;   
    $notac_valor = (isset($_GET['notac_valor']))?mysql_real_escape_string($_GET['notac_valor']):null;   
    $notac_porcentaje_iva = (isset($_GET['notac_porcentaje_iva']))?mysql_real_escape_string($_GET['notac_porcentaje_iva']):null;   

                if ($config_debug) {
                    echo "<h3>Debug mode (" . __FILE__ . " )</h3>";    
                    echo "<table border>";
                    echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                    foreach ($_GET as $key => $value) {
                        echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                    }
                    echo "</table>";
                }