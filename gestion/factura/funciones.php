<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function factura_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM factura WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function factura_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($factura = mysql_fetch_array($sql)) {
        //include "../gestion/factura/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $factura[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $factura[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$factura[$campo]\">$factura[$campo]</option> \n";
    }
}

function factura_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM factura  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($factura = mysql_fetch_array($sql)) {
    
        include "../gestion/factura/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$factura[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$factura[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$factura[0]\">$factura[0]</option>";
   echo "value=\"$factura[0]\">$factura_factura</option>";
} 
}
/**/
function factura_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM factura   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function factura_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM factura  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    while ($reg = mysql_fetch_array($sql)) {
        $data[$reg[0]] = $reg[0];
    }
    
    return $data;
}
/**
 * Son los campos que se debe mostrar en la tabla del index
 * @global type $conexion
 * @return type
 */
function factura_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'factura_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function factura_thead($ganchos=array()){
    
    $campo_disponibles = factura_campos_disponibles();   
    $factura_campos_a_mostrar = factura_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $factura_campos_a_mostrar)){
            echo "<th>"._tr($value)."</th> "; 
        }        
    }
    

    if ($gancho) {
        $i = 0;
        while ($i < count($gancho)) {
            echo "<th>$gancho[$i]</th>";
            $i++;
        }
    }
    



    echo "<th>"._tr("Acción")."</th> "; // accion             
    echo "    </tr>
    </thead>"; 
}
/**
 * 
 */
function factura_tfoot(){    
   factura_thead();
}


