<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Nuevo"); ?></h2> 

</h2> 

<form class="form-horizontal" action="index.php" method="post"> 
<input type="hidden" name="p" value="notac"> 
<input type="hidden" name="c" value="crear"> 
<input type="hidden" name="a" value="crear"> 

 <div class="form-group"> 
     <label for="notac_id_notac" class="col-sm-2 control-label"><?php _t("Notac"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="notac_id_notac" >
        <?php notac_add($notac_id_notac); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_cantidad" id="notac_cantidad" placeholder="<?php _t("Cantidad"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_descripcion" id="notac_descripcion" placeholder="<?php _t("Descripcion"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_valor" id="notac_valor" placeholder="<?php _t("Valor"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_porcentaje_iva" id="notac_porcentaje_iva" placeholder="<?php _t("Porcentaje iva"); ?>" value=""   > 
     </div> 
   </div> 


 <div class="form-group"> 
     <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Registrar"); ?></button> 
     </div> 
   </div> 
 </form> 
