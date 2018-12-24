<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h1><?php _t("Buscar"); ?></h1>

<form method="get" action="index.php">
    <input  type="hidden" name="p" value="factura">
    <input  type="hidden" name="c" value="buscar">
                    <div class="form-group">
                      <label for="Id_factura"><?php _t("Factura"); ?></label>
                      <input type="text" class="form-control" name="factura_id_factura" id="factura_id_factura" placeholder="<?php _t("Id_factura"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Cantidad"><?php _t("Cantidad"); ?></label>
                      <input type="text" class="form-control" name="factura_cantidad" id="factura_cantidad" placeholder="<?php _t("Cantidad"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Descripcion"><?php _t("Descripcion"); ?></label>
                      <input type="text" class="form-control" name="factura_descripcion" id="factura_descripcion" placeholder="<?php _t("Descripcion"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Valor"><?php _t("Valor"); ?></label>
                      <input type="text" class="form-control" name="factura_valor" id="factura_valor" placeholder="<?php _t("Valor"); ?>">
                    </div>
                     
                    <div class="form-group">
                      <label for="Porcentaje_iva"><?php _t("Porcentaje_iva"); ?></label>
                      <input type="text" class="form-control" name="factura_porcentaje_iva" id="factura_porcentaje_iva" placeholder="<?php _t("Porcentaje_iva"); ?>">
                    </div>
                         
  <button type="submit" class="btn btn-default"><?php _t("Buscar"); ?></button>
</form>