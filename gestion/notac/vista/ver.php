<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1> 
<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Detalles"); ?> 
</h1> 
     <form class="form-horizontal" method="" action=""> 
     <input type="hidden" name="p" value="notac"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="notac_id" value="<?php echo $notac_id; ?>"> 
 <div class="form-group"> 
     <label for="notac_id_notac" class="col-sm-2 control-label"><?php _t("Notac"); ?></label> 
     <div class="col-sm-10"> 
        <select class="form-control" name="notac_id_notac" disabled>
        <?php notac_add($notac_id_notac); ?>
        </select>
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_cantidad" id="notac_cantidad" placeholder="<?php _t("Cantidad"); ?>" value="<?php echo $notac_cantidad; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_descripcion" id="notac_descripcion" placeholder="<?php _t("Descripcion"); ?>" value="<?php echo $notac_descripcion; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_valor" class="col-sm-2 control-label"><?php _t("Valor"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_valor" id="notac_valor" placeholder="<?php _t("Valor"); ?>" value="<?php echo $notac_valor; ?>"  disabled > 
     </div> 
   </div> 


 <div class="form-group"> 
     <label for="notac_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje iva"); ?></label> 
     <div class="col-sm-10"> 
       <input type="text" class="form-control" name="notac_porcentaje_iva" id="notac_porcentaje_iva" placeholder="<?php _t("Porcentaje iva"); ?>" value="<?php echo $notac_porcentaje_iva; ?>"  disabled > 
     </div> 
   </div> 


   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
 <a href="index.php?p=notac&c=txt&notac_id=<?php echo $notac_id; ?>">Formato texto</a> 
