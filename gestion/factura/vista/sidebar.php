<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<div class="col-sm-3 col-md-2 sidebar"> 

<h2><?php _t("Buscar"); ?></h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="factura"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="factura_id_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="factura_id_factura" id="factura_id_factura" placeholder="<?php _t("Id_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad");?></label> 
       <input type="text" class="form-control" name="factura_cantidad" id="factura_cantidad" placeholder="<?php _t("Cantidad"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="factura_descripcion" id="factura_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="factura_valor" id="factura_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="factura_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje_iva");?></label> 
       <input type="text" class="form-control" name="factura_porcentaje_iva" id="factura_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
 </div> 
