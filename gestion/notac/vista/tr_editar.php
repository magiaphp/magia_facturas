<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "notac", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=notac&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="notac">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="notac_id" value="<?php echo $notac_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="notac_id_notac" value="<?php echo $notac_id_notac; ?>" placeholder="<?php _t("Id_notac"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_cantidad" value="<?php echo $notac_cantidad; ?>" placeholder="<?php _t("Cantidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_descripcion" value="<?php echo $notac_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_valor" value="<?php echo $notac_valor; ?>" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="notac_porcentaje_iva" value="<?php echo $notac_porcentaje_iva; ?>" placeholder="<?php _t("Porcentaje_iva"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 