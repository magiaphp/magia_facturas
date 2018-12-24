 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO presupuestos ( 
 contacto_email 
 ,  sub_total 
 ,  iva 
 ,  comentarios 
 ,  expira 
 ,  estatus 
 ) VALUES ( 
 :contacto_email 
 ,  :sub_total 
 ,  :iva 
 ,  :comentarios 
 ,  :expira 
 ,  :estatus 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":contacto_email"=>"$presupuestos_contacto_email" 
 ,  ":sub_total"=>"$presupuestos_sub_total" 
 ,  ":iva"=>"$presupuestos_iva" 
 ,  ":comentarios"=>"$presupuestos_comentarios" 
 ,  ":expira"=>"$presupuestos_expira" 
 ,  ":estatus"=>"$presupuestos_estatus" 
             ) 
 ); 


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