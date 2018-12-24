<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>

<h2> 

<span class="glyphicon glyphicon-search"></span> 

<?php _t("Resultados de su busqueda en "); ?>

</h2>


<table class="table table-striped">
    <thead>
        <tr> 
<th><?php _t("Factura"); ?></th> 
<th><?php _t("Contacto_email"); ?></th> 
<th><?php _t("Fecha_registro"); ?></th> 
<th><?php _t("Sub_total"); ?></th> 
<th><?php _t("Iva"); ?></th> 
<th><?php _t("Comentarios"); ?></th> 
<th><?php _t("Estatus"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "notacs", $_usuarios_grupo)){
             //   include "./notacs/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($notacs = mysql_fetch_array($sql)) {
            include "./notacs/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "notacs", $_usuarios_grupo)){
                    include "./notacs/vista/tr.php";
                   // include "./notacs/vista/tr_editar.php";
                }else{
                    include "./notacs/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "notacs", $_usuarios_grupo)){
             //   include "./notacs/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


