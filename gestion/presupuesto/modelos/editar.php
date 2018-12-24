 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE presupuesto SET  
 id_factura = '$presupuesto_id_factura'  
 ,  cantidad = '$presupuesto_cantidad'  
 ,  descripcion = '$presupuesto_descripcion'  
 ,  valor = '$presupuesto_valor'  
 ,  porcentaje_iva = '$presupuesto_porcentaje_iva'  
 WHERE id = '$presupuesto_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$presupuesto_id"=>"$presupuesto_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }