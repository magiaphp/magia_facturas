 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "notac"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $notac_id 		= mysql_real_escape_string($_REQUEST['notac_id']);   
     include "./notac/modelos/var.php"; 
     include "./notac/reg/reg.php"; 
     $html = file_get_contents("./notac/vista/var.php"); 
     include "./notac/reg/var.php"; 
     // aca la traduccion no va ya que imprimimos el html directo 
     echo $html; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 

            if($config_debug){
                echo "<h3>Debug mode (".__FILE__." )</h3>";

                $variables = array(
                    "\$accion"=>"$accion",
                    "\$pagina"=>"$pagina",
                    "\$_usuarios_grupo"=>"$_usuarios_grupo",
                    "permisos_tiene_permiso(\$accion, \$pagina, \$_usuarios_grupo)"=>permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)
                       
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }