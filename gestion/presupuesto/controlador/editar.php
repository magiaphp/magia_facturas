 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "presupuesto"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $presupuesto_id = mysql_real_escape_string($_REQUEST['presupuesto_id']);      
 include "./presupuesto/reg/post.php";  
 include "./presupuesto/modelos/editar.php";  

 include "./presupuesto/modelos/ver.php";  
 include "./presupuesto/reg/reg.php"; 
 include "./presupuesto/vista/ver.php";  
 }else{ 
 $presupuesto_id = mysql_real_escape_string($_REQUEST['presupuesto_id']);      
 include "./presupuesto/modelos/ver.php"; 
 include "./presupuesto/reg/reg.php"; 
 include "./presupuesto/vista/editar.php"; 
 }  
 } else { 
 permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$accion"=>"$accion",
                    "\$pagina"=>"$pagina",
                    "\$_usuarios_grupo"=>"$_usuarios_grupo",
                    "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)"=>permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo),
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",
                    "\$_REQUEST['a']"=>"$_REQUEST[a]",       
                    "$presupuesto_id"=>"$presupuesto_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }