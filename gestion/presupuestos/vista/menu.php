<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="presupuestos">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Contacto_email"><?php _t("Contacto_email"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_contacto_email" id="presupuestos_contacto_email" placeholder="<?php _t("Contacto_email"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Fecha_registro"><?php _t("Fecha_registro"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_fecha_registro" id="presupuestos_fecha_registro" placeholder="<?php _t("Fecha_registro"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Sub_total"><?php _t("Sub_total"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_sub_total" id="presupuestos_sub_total" placeholder="<?php _t("Sub_total"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Iva"><?php _t("Iva"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_iva" id="presupuestos_iva" placeholder="<?php _t("Iva"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Comentarios"><?php _t("Comentarios"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_comentarios" id="presupuestos_comentarios" placeholder="<?php _t("Comentarios"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Expira"><?php _t("Expira"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_expira" id="presupuestos_expira" placeholder="<?php _t("Expira"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Estatus"><?php _t("Estatus"); ?></label>
                      <input type="text" class="form-control" name="presupuestos_estatus" id="presupuestos_estatus" placeholder="<?php _t("Estatus"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>