<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="presupuestos">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="presupuestos_contacto_email" value="" placeholder="<?php _t("Contacto_email"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_fecha_registro" value="" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_sub_total" value="" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_iva" value="" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_comentarios" value="" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_expira" value="" placeholder="<?php _t("Expira"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_estatus" value="" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 