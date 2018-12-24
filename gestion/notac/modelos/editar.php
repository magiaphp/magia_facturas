 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE notac SET  
 id_notac = '$notac_id_notac'  
 ,  cantidad = '$notac_cantidad'  
 ,  descripcion = '$notac_descripcion'  
 ,  valor = '$notac_valor'  
 ,  porcentaje_iva = '$notac_porcentaje_iva'  
 WHERE id = '$notac_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$notac_id"=>"$notac_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }