<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="facturas"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="facturas_id_presupuesto" class="col-sm-2 control-label"><?php _t("Presupuesto");?></label> 
       <input type="text" class="form-control" name="facturas_id_presupuesto" id="facturas_id_presupuesto" placeholder="<?php _t("Id_presupuesto"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_id_notac" class="col-sm-2 control-label"><?php _t("Notac");?></label> 
       <input type="text" class="form-control" name="facturas_id_notac" id="facturas_id_notac" placeholder="<?php _t("Id_notac"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_contacto_email" class="col-sm-2 control-label"><?php _t("Contacto_email");?></label> 
       <input type="text" class="form-control" name="facturas_contacto_email" id="facturas_contacto_email" placeholder="<?php _t("Contacto_email"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha_registro");?></label> 
       <input type="text" class="form-control" name="facturas_fecha_registro" id="facturas_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_sub_total" class="col-sm-2 control-label"><?php _t("Sub_total");?></label> 
       <input type="text" class="form-control" name="facturas_sub_total" id="facturas_sub_total" placeholder="<?php _t("Sub_total"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_iva" class="col-sm-2 control-label"><?php _t("Iva");?></label> 
       <input type="text" class="form-control" name="facturas_iva" id="facturas_iva" placeholder="<?php _t("Iva"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_anticipo" class="col-sm-2 control-label"><?php _t("Anticipo");?></label> 
       <input type="text" class="form-control" name="facturas_anticipo" id="facturas_anticipo" placeholder="<?php _t("Anticipo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_saldo" class="col-sm-2 control-label"><?php _t("Saldo");?></label> 
       <input type="text" class="form-control" name="facturas_saldo" id="facturas_saldo" placeholder="<?php _t("Saldo"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios");?></label> 
       <input type="text" class="form-control" name="facturas_comentarios" id="facturas_comentarios" placeholder="<?php _t("Comentarios"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_r1" class="col-sm-2 control-label"><?php _t("R1");?></label> 
       <input type="text" class="form-control" name="facturas_r1" id="facturas_r1" placeholder="<?php _t("R1"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_r2" class="col-sm-2 control-label"><?php _t("R2");?></label> 
       <input type="text" class="form-control" name="facturas_r2" id="facturas_r2" placeholder="<?php _t("R2"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_r3" class="col-sm-2 control-label"><?php _t("R3");?></label> 
       <input type="text" class="form-control" name="facturas_r3" id="facturas_r3" placeholder="<?php _t("R3"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_fecha_cobro" class="col-sm-2 control-label"><?php _t("Fecha_cobro");?></label> 
       <input type="text" class="form-control" name="facturas_fecha_cobro" id="facturas_fecha_cobro" placeholder="<?php _t("Fecha_cobro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_expira" class="col-sm-2 control-label"><?php _t("Expira");?></label> 
       <input type="text" class="form-control" name="facturas_expira" id="facturas_expira" placeholder="<?php _t("Expira"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_ce" class="col-sm-2 control-label"><?php _t("Ce");?></label> 
       <input type="text" class="form-control" name="facturas_ce" id="facturas_ce" placeholder="<?php _t("Ce"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="facturas_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="facturas_estatus" id="facturas_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
