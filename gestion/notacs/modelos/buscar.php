 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM notacs  
 WHERE  
 id_factura like '%$notacs_id_factura%'    
 AND  contacto_email like '%$notacs_contacto_email%'    
 AND  fecha_registro like '%$notacs_fecha_registro%'    
 AND  sub_total like '%$notacs_sub_total%'    
 AND  iva like '%$notacs_iva%'    
 AND  comentarios like '%$notacs_comentarios%'    
 AND  estatus like '%$notacs_estatus%'    
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