<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function presupuesto_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM presupuesto WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function presupuesto_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($presupuesto = mysql_fetch_array($sql)) {
        //include "../gestion/presupuesto/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $presupuesto[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $presupuesto[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$presupuesto[$campo]\">$presupuesto[$campo]</option> \n";
    }
}

function presupuesto_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM presupuesto  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($presupuesto = mysql_fetch_array($sql)) {
    
        include "../gestion/presupuesto/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$presupuesto[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$presupuesto[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$presupuesto[0]\">$presupuesto[0]</option>";
   echo "value=\"$presupuesto[0]\">$presupuesto_presupuesto</option>";
} 
}
/**/
function presupuesto_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM presupuesto   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function presupuesto_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM presupuesto  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function presupuesto_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'presupuesto_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function presupuesto_thead($ganchos=array()){
    
    $campo_disponibles = presupuesto_campos_disponibles();   
    $presupuesto_campos_a_mostrar = presupuesto_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $presupuesto_campos_a_mostrar)){
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
function presupuesto_tfoot(){    
   presupuesto_thead();
}


