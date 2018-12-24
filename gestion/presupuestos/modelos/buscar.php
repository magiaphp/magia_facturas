 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM presupuestos  
 WHERE  
 contacto_email like '%$presupuestos_contacto_email%'    
 AND  fecha_registro like '%$presupuestos_fecha_registro%'    
 AND  sub_total like '%$presupuestos_sub_total%'    
 AND  iva like '%$presupuestos_iva%'    
 AND  comentarios like '%$presupuestos_comentarios%'    
 AND  expira like '%$presupuestos_expira%'    
 AND  estatus like '%$presupuestos_estatus%'    
 ORDER BY id DESC    
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);  
 $total_items = mysql_num_rows(mysql_query("$comando ", $conexion)); 


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }