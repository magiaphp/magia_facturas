 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql=mysql_query( 
         "SELECT *  
 FROM facturas  
 WHERE  
 id_presupuesto like '%$facturas_id_presupuesto%'    
 AND  id_notac like '%$facturas_id_notac%'    
 AND  contacto_email like '%$facturas_contacto_email%'    
 AND  fecha_registro like '%$facturas_fecha_registro%'    
 AND  sub_total like '%$facturas_sub_total%'    
 AND  iva like '%$facturas_iva%'    
 AND  anticipo like '%$facturas_anticipo%'    
 AND  saldo like '%$facturas_saldo%'    
 AND  comentarios like '%$facturas_comentarios%'    
 AND  r1 like '%$facturas_r1%'    
 AND  r2 like '%$facturas_r2%'    
 AND  r3 like '%$facturas_r3%'    
 AND  fecha_cobro like '%$facturas_fecha_cobro%'    
 AND  expira like '%$facturas_expira%'    
 AND  ce like '%$facturas_ce%'    
 AND  estatus like '%$facturas_estatus%'    
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