<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function facturas_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM facturas WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function facturas_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($facturas = mysql_fetch_array($sql)) {
        //include "../gestion/facturas/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $facturas[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $facturas[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$facturas[$campo]\">$facturas[$campo]</option> \n";
    }
}

function facturas_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM facturas  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($facturas = mysql_fetch_array($sql)) {
    
        include "../gestion/facturas/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$facturas[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$facturas[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$facturas[0]\">$facturas[0]</option>";
   echo "value=\"$facturas[0]\">$facturas_facturas</option>";
} 
}
/**/
function facturas_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM facturas   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function facturas_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM facturas  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function facturas_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'facturas_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function facturas_thead($ganchos=array()){
    
    $campo_disponibles = facturas_campos_disponibles();   
    $facturas_campos_a_mostrar = facturas_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $facturas_campos_a_mostrar)){
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
function facturas_tfoot(){    
   facturas_thead();
}


