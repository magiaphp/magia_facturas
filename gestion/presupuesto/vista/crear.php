<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="presupuesto"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="presupuesto_id_factura" class="col-sm-2 control-label"><?php _t("Factura"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="presupuesto_id_factura" >
        <?php factura_add($presupuesto_id_factura); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuesto_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuesto_cantidad" id="presupuesto_cantidad" placeholder="<?php _t("Cantidad"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuesto_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuesto_descripcion" id="presupuesto_descripcion" placeholder="<?php _t("Descripcion"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuesto_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuesto_valor" id="presupuesto_valor" placeholder="<?php _t("Valor"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="presupuesto_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="presupuesto_porcentaje_iva" id="presupuesto_porcentaje_iva" placeholder="<?php _t("Porcentaje iva"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
