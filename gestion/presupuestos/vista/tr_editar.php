<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "presupuestos", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=presupuestos&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="presupuestos">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="presupuestos_id" value="<?php echo $presupuestos_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="presupuestos_contacto_email" value="<?php echo $presupuestos_contacto_email; ?>" placeholder="<?php _t("Contacto_email"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_fecha_registro" value="<?php echo $presupuestos_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_sub_total" value="<?php echo $presupuestos_sub_total; ?>" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_iva" value="<?php echo $presupuestos_iva; ?>" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_comentarios" value="<?php echo $presupuestos_comentarios; ?>" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_expira" value="<?php echo $presupuestos_expira; ?>" placeholder="<?php _t("Expira"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuestos_estatus" value="<?php echo $presupuestos_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 