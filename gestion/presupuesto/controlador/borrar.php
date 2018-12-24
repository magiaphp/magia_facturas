 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "borrar"; 
 $pagina = "presupuesto"; 
 if (permisos_tiene_permiso($accion, $pagina, $_usuarios_grupo)) { 
 $presupuesto_id 		= mysql_real_escape_string($_REQUEST['presupuesto_id']); 
 include "./presupuesto/modelos/borrar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
