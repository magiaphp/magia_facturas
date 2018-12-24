 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "ver"; 
 $pagina = "notacs"; 
 if (permisos_tiene_permiso($accion,$pagina,$_usuarios_grupo)) { 
     $notacs_id 		= mysql_real_escape_string($_REQUEST['notacs_id']);   
     include "./notacs/modelos/ver.php"; 
     include "./notacs/reg/reg.php"; 
     include "./notacs/vista/txt.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina, $_usuarios_usuario); 
 } 
