<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="notac"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="notac_id_notac" class="col-sm-2 control-label"><?php _t("Notac");?></label> 
       <input type="text" class="form-control" name="notac_id_notac" id="notac_id_notac" placeholder="<?php _t("Id_notac"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad");?></label> 
       <input type="text" class="form-control" name="notac_cantidad" id="notac_cantidad" placeholder="<?php _t("Cantidad"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="notac_descripcion" id="notac_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="notac_valor" id="notac_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notac_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje_iva");?></label> 
       <input type="text" class="form-control" name="notac_porcentaje_iva" id="notac_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
