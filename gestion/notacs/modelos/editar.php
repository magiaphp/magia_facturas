 <?php  
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query(" UPDATE notacs SET  
 id_factura = '$notacs_id_factura'  
 ,  contacto_email = '$notacs_contacto_email'  
 ,  sub_total = '$notacs_sub_total'  
 ,  iva = '$notacs_iva'  
 ,  comentarios = '$notacs_comentarios'  
 ,  estatus = '$notacs_estatus'  
 WHERE id = '$notacs_id' 
 ",$conexion) or error(__DIR__, __FILE__, __LINE__);   


            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$sql"=>"$sql",
                    "\$notacs_id"=>"$notacs_id"
                );

                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";       
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }    
                echo "</table>";

            }