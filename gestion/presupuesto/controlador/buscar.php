 <?php 
 /**  
 magia_version: 0.0.11 
 **/ 
 $accion = "buscar"; 
 $pagina = "presupuesto"; 
 if (permisos_tiene_permiso($accion,$pagina, $_usuarios_grupo)) { 
       $inicia = (isset($_REQUEST['pag']) && $_REQUEST['pag'] != 0 ) ? $_REQUEST['pag'] * $cfg_limite_items_en_tablas : 0;  
     include "./presupuesto/modelos/buscar.php"; 
     include "./presupuesto/vista/buscar.php"; 
 } else { 
     permisos_sin_permiso($accion,$pagina,$_usuarios_usuario); 
 } 
