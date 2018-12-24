<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("notacs"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=notacs&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); notacs_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "notacs", $_usuarios_grupo)){
             //   include "./notacs/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($notacs = mysql_fetch_array($sql)) {

                    include "./notacs/reg/reg.php";

                    $campo_disponibles = notacs_campos_disponibles();

                    echo "<tr>";
                    include "./notacs/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "notacs", $_usuarios_grupo)){
                            //   include "./notacs/vista/tr_anadir.php";

                           }
                  ?>
                   <?php notacs_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>