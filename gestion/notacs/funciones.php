<?php 
 /**  
 magia_version: 0.0.11 
 **/
 function notacs_campo($campo, $id) {
    global $conexion;
    $sql = mysql_query(
            "SELECT $campo FROM notacs WHERE id = $id   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql); 
    
    
    
    if($reg[$campo]){
        return $reg[$campo];
    } else {
        return false;
    }
}
function notacs_campo_add($campo, $label, $selecionado = "", $excluir = "") {
    global $conexion;
    $sql = mysql_query(
            "SELECT DISTINCT $campo FROM _menu order by $campo   ", $conexion) 
            or error(__DIR__, __FILE__, __LINE__);
    while ($notacs = mysql_fetch_array($sql)) {
        //include "../gestion/notacs/reg/reg.php"; 

        echo "<option ";
        if ($selecionado == $notacs[$campo]) {
            echo " selected ";
        } else {
            echo "";
        }
        if ($excluir == $notacs[$campo]) {
            echo " disabled ";
        } else {
            echo "";
        }
        echo "value=\"$notacs[$campo]\">$notacs[$campo]</option> \n";
    }
}

function notacs_add($selecionado="",$excluir=""){  
global $conexion; 
$sql=mysql_query(
        "SELECT * FROM notacs  ",$conexion) or error(__DIR__, __FILE__, __LINE__);
while ($notacs = mysql_fetch_array($sql)) {
    
        include "../gestion/notacs/reg/reg.php"; 
    
   echo "<option "; 
   if($selecionado==$notacs[0]) {echo " selected "; } else {echo ""; }
   if($excluir==$notacs[0] ) {echo " disabled "; } else {echo ""; }
   //echo "value=\"$notacs[0]\">$notacs[0]</option>";
   echo "value=\"$notacs[0]\">$notacs_notacs</option>";
} 
}
/**/
function notacs_numero_actual() {
    global $conexion;
    $sql = mysql_query(
            "SELECT MAX(id) FROM notacs   ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    $reg = mysql_fetch_array($sql);

    if ($reg[0]) {
        return $reg[0];
    } else {
        return false;
    }
}


function notacs_campos_disponibles(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SHOW COLUMNS FROM notacs  ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
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
function notacs_campos_a_mostrar(){
     global $conexion;
    $data = array();
     $sql = mysql_query( "SELECT valor FROM _opciones WHERE opcion = 'notacs_thead' ", $conexion) or error(__DIR__, __FILE__, __LINE__);
    
    $reg = mysql_fetch_array($sql);
    
    return json_decode($reg[0],true);
}

function notacs_thead($ganchos=array()){
    
    $campo_disponibles = notacs_campos_disponibles();   
    $notacs_campos_a_mostrar = notacs_campos_a_mostrar();        
    echo "
     <thead>
        <tr> ";
    echo "<th>"._tr("#")."</th> "; // numero de linea
    foreach ($campo_disponibles as $value) {        
        if(in_array($value, $notacs_campos_a_mostrar)){
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
function notacs_tfoot(){    
   notacs_thead();
}


