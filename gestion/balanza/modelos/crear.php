 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $sql = "INSERT INTO balanza ( 
 tipo 
 ,  ref 
 ,  descripcion 
 ,  ce 
 ,  sub_total 
 ,  iva 
 ,  fecha 
 ,  contacto_email 
 ,  factura 
 ,  banco 
 ,  anulada 
 ,  cod_anu 
 ) VALUES ( 
 :tipo 
 ,  :ref 
 ,  :descripcion 
 ,  :ce 
 ,  :sub_total 
 ,  :iva 
 ,  :fecha 
 ,  :contacto_email 
 ,  :factura 
 ,  :banco 
 ,  :anulada 
 ,  :cod_anu 
   )";  
 $stmt = $dbh->prepare($sql); 
 $stmt->execute(array( 
 ":tipo"=>"$balanza_tipo" 
 ,  ":ref"=>"$balanza_ref" 
 ,  ":descripcion"=>"$balanza_descripcion" 
 ,  ":ce"=>"$balanza_ce" 
 ,  ":sub_total"=>"$balanza_sub_total" 
 ,  ":iva"=>"$balanza_iva" 
 ,  ":fecha"=>"$balanza_fecha" 
 ,  ":contacto_email"=>"$balanza_contacto_email" 
 ,  ":factura"=>"$balanza_factura" 
 ,  ":banco"=>"$balanza_banco" 
 ,  ":anulada"=>"$balanza_anulada" 
 ,  ":cod_anu"=>"$balanza_cod_anu" 
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