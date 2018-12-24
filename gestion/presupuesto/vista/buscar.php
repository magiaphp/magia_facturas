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
<th><?php _t("Cantidad"); ?></th> 
<th><?php _t("Descripcion"); ?></th> 
<th><?php _t("Valor"); ?></th> 
<th><?php _t("Porcentaje_iva"); ?></th> 
 <th><?php _t("Accion"); ?></th> 
 </tr>
    </thead>
    <tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "presupuesto", $_usuarios_grupo)){
             //   include "./presupuesto/vista/tr_buscar.php";
                
            }
   ?>
   

        <?php
        $i = 1;
        while ($presupuesto = mysql_fetch_array($sql)) {
            include "./presupuesto/reg/reg.php"; 
                if(permisos_tiene_permiso("editar", "presupuesto", $_usuarios_grupo)){
                    include "./presupuesto/vista/tr.php";
                   // include "./presupuesto/vista/tr_editar.php";
                }else{
                    include "./presupuesto/vista/tr.php";
                }
            $i++;    
        }
        ?>
    </tbody>
     <?php
   if(permisos_tiene_permiso("crear", "presupuesto", $_usuarios_grupo)){
             //   include "./presupuesto/vista/tr_anadir.php";
                
            }
   ?>
    
    
</table> 


