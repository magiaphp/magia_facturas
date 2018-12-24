 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "editar"; 
 $pagina = "notacs"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
 if(isset($_REQUEST['a'])=='editar'){ 
 $notacs_id = mysql_real_escape_string($_REQUEST['notacs_id']);      
 include "./notacs/reg/post.php";  
 include "./notacs/modelos/editar.php";  

 include "./notacs/modelos/ver.php";  
 include "./notacs/reg/reg.php"; 
 include "./notacs/vista/ver.php";  
 }else{ 
 $notacs_id = mysql_real_escape_string($_REQUEST['notacs_id']);      
 include "./notacs/modelos/ver.php"; 
 include "./notacs/reg/reg.php"; 
 include "./notacs/vista/editar.php"; 
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
                    "$notacs_id"=>"$notacs_id"        
                );
                echo "<table border>";
                echo "<tr><td><b>Variable</b></td><td><b>Valor</b></td></tr>";
                foreach ($variables as $key => $value) {
                    echo "<tr><td><b>$key:</b></td><td>$value</td></tr>";
                }
                echo "</table>";
            }