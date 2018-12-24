 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "factura"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $factura_id 		= mysql_real_escape_string($_REQUEST['factura_id']);   
     include "./factura/modelos/ver.php"; 
     include "./factura/reg/reg.php"; 
     include "./factura/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
