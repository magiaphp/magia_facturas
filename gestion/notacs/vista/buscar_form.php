<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-search"></span>

<?php _t("Buscar"); ?> 

</h2> 

<form class="" action="index.php" method="get"> 
<input type="hidden" name="p" value="notacs"> 
<input type="hidden" name="c" value="buscar"> 
     <div class="form-group"> 
     <label for="notacs_id_factura" class="col-sm-2 control-label"><?php _t("Factura");?></label> 
       <input type="text" class="form-control" name="notacs_id_factura" id="notacs_id_factura" placeholder="<?php _t("Id_factura"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notacs_contacto_email" class="col-sm-2 control-label"><?php _t("Contacto_email");?></label> 
       <input type="text" class="form-control" name="notacs_contacto_email" id="notacs_contacto_email" placeholder="<?php _t("Contacto_email"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notacs_fecha_registro" class="col-sm-2 control-label"><?php _t("Fecha_registro");?></label> 
       <input type="text" class="form-control" name="notacs_fecha_registro" id="notacs_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notacs_sub_total" class="col-sm-2 control-label"><?php _t("Sub_total");?></label> 
       <input type="text" class="form-control" name="notacs_sub_total" id="notacs_sub_total" placeholder="<?php _t("Sub_total"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notacs_iva" class="col-sm-2 control-label"><?php _t("Iva");?></label> 
       <input type="text" class="form-control" name="notacs_iva" id="notacs_iva" placeholder="<?php _t("Iva"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notacs_comentarios" class="col-sm-2 control-label"><?php _t("Comentarios");?></label> 
       <input type="text" class="form-control" name="notacs_comentarios" id="notacs_comentarios" placeholder="<?php _t("Comentarios"); ?> "> 
   </div> 


     <div class="form-group"> 
     <label for="notacs_estatus" class="col-sm-2 control-label"><?php _t("Estatus");?></label> 
       <input type="text" class="form-control" name="notacs_estatus" id="notacs_estatus" placeholder="<?php _t("Estatus"); ?> "> 
   </div> 


       <button type="submit" class="btn btn-primary"><?php _t("Buscar"); ?></button> 
 </form> 
