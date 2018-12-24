 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "notacs"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $notacs_id 		= mysql_real_escape_string($_REQUEST['notacs_id']); 
 include "./notacs/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
