 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "presupuesto"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $presupuesto_id 		= mysql_real_escape_string($_REQUEST['presupuesto_id']);   
     include "./presupuesto/modelos/ver.php"; 
     include "./presupuesto/reg/reg.php"; 
     include "./presupuesto/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
