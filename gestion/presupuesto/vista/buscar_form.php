<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="presupuesto"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="presupuesto_id_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="presupuesto_id_factura" id="presupuesto_id_factura" placeholder="<?php _t("Id_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuesto_cantidad" class="col-sm-2 control-label"><?php _t("Cantidad");?></label> 
       <input type="text" class="form-control" name="presupuesto_cantidad" id="presupuesto_cantidad" placeholder="<?php _t("Cantidad"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuesto_descripcion" class="col-sm-2 control-label"><?php _t("Descripcion");?></label> 
       <input type="text" class="form-control" name="presupuesto_descripcion" id="presupuesto_descripcion" placeholder="<?php _t("Descripcion"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuesto_valor" class="col-sm-2 control-label"><?php _t("Valor");?></label> 
       <input type="text" class="form-control" name="presupuesto_valor" id="presupuesto_valor" placeholder="<?php _t("Valor"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="presupuesto_porcentaje_iva" class="col-sm-2 control-label"><?php _t("Porcentaje_iva");?></label> 
       <input type="text" class="form-control" name="presupuesto_porcentaje_iva" id="presupuesto_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
