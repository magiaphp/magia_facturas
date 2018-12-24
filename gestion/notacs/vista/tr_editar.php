<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "notacs", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=notacs&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="notacs">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="notacs_id" value="<?php echo $notacs_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="notacs_id_factura" value="<?php echo $notacs_id_factura; ?>" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="notacs_contacto_email" value="<?php echo $notacs_contacto_email; ?>" placeholder="<?php _t("Contacto_email"); ?>"></td> 
 <td><input class="form-control" type="text" name="notacs_fecha_registro" value="<?php echo $notacs_fecha_registro; ?>" placeholder="<?php _t("Fecha_registro"); ?>"></td> 
 <td><input class="form-control" type="text" name="notacs_sub_total" value="<?php echo $notacs_sub_total; ?>" placeholder="<?php _t("Sub_total"); ?>"></td> 
 <td><input class="form-control" type="text" name="notacs_iva" value="<?php echo $notacs_iva; ?>" placeholder="<?php _t("Iva"); ?>"></td> 
 <td><input class="form-control" type="text" name="notacs_comentarios" value="<?php echo $notacs_comentarios; ?>" placeholder="<?php _t("Comentarios"); ?>"></td> 
 <td><input class="form-control" type="text" name="notacs_estatus" value="<?php echo $notacs_estatus; ?>" placeholder="<?php _t("Estatus"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 