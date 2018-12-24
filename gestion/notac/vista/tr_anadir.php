<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>

            <form method="post" action="index.php" >
                <input type="hidden" name="p" value="notac">
                <input type="hidden" name="c" value="crear">    
                <input type="hidden" name="a" value="crear">    
                <tr> <td><input class="form-control" type="text" name="notac_id_notac" value="" placeholder="<?php _t("Id_notac"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_cantidad" value="" placeholder="<?php _t("Cantidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_descripcion" value="" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_valor" value="" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_porcentaje_iva" value="" placeholder="<?php _t("Porcentaje_iva"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" ></td>        
    </tr>
</form> 