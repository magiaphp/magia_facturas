 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO factura ( 
 id_factura 
 ,  cantidad 
 ,  descripcion 
 ,  valor 
 ,  porcentaje_iva 
 ) VALUES ( 
 :id_factura 
 ,  :cantidad 
 ,  :descripcion 
 ,  :valor 
 ,  :porcentaje_iva 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":id_factura"=>"$factura_id_factura" 
 ,  ":cantidad"=>"$factura_cantidad" 
 ,  ":descripcion"=>"$factura_descripcion" 
 ,  ":valor"=>"$factura_valor" 
 ,  ":porcentaje_iva"=>"$factura_porcentaje_iva" 
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