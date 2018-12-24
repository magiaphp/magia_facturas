<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<?php include "tabs.php"; ?>
<h2> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php echo _t("presupuesto"); ?> 
<a type="button" class="btn btn-primary navbar-btn" href="?p=presupuesto&c=crear"> 
 <?php _t("Nuevo"); ?> 
</a>
</h2>

<table class="table table-striped"><?php $ganchos=array(); presupuesto_thead($ganchos); ?><tbody>
    
 <?php
   if(permisos_tiene_permiso("ver", "presupuesto", $_usuarios_grupo)){
             //   include "./presupuesto/vista/tr_buscar.php";
                
            }
   ?><?php
                $i = 1; // cuenta lineas
                while ($presupuesto = mysql_fetch_array($sql)) {

                    include "./presupuesto/reg/reg.php";

                    $campo_disponibles = presupuesto_campos_disponibles();

                    echo "<tr>";
                    include "./presupuesto/vista/tr.php";            
                    echo "</tr>";

                    $i++;
                }
                ?></tbody>
                    <?php
                  if(permisos_tiene_permiso("crear", "presupuesto", $_usuarios_grupo)){
                            //   include "./presupuesto/vista/tr_anadir.php";

                           }
                  ?>
                   <?php presupuesto_tfoot(); ?>

               </table> 

               <?php  
               //echo paginacion($p, $c, isset($_REQUEST['pag'])); 
               echo paginacion_master($p, $c, $total_items, $pag);
               ?>