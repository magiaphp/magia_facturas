<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
   
$borrar = (permisos_tiene_permiso("borrar", "presupuesto", $_usuarios_grupo))?'<a class="btn btn-danger" href="index.php?p=presupuesto&c=borrar&a=borrar&id='.$id.'">Borrar</a>':''; ?><form method="post" action="index.php" >
            <input type="hidden" name="p" value="presupuesto">
            <input type="hidden" name="c" value="editar">    
            <input type="hidden" name="a" value="editar">    
            <input type="hidden" name="presupuesto_id" value="<?php echo $presupuesto_id; ?>">    
            <tr> <td><input class="form-control" type="text" name="presupuesto_id_factura" value="<?php echo $presupuesto_id_factura; ?>" placeholder="<?php _t("Id_factura"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_cantidad" value="<?php echo $presupuesto_cantidad; ?>" placeholder="<?php _t("Cantidad"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_descripcion" value="<?php echo $presupuesto_descripcion; ?>" placeholder="<?php _t("Descripcion"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_valor" value="<?php echo $presupuesto_valor; ?>" placeholder="<?php _t("Valor"); ?>"></td> 
 <td><input class="form-control" type="text" name="presupuesto_porcentaje_iva" value="<?php echo $presupuesto_porcentaje_iva; ?>" placeholder="<?php _t("Porcentaje_iva"); ?>"></td> 
<td><input class="btn btn-primary" type="submit" value="<?php _t("Registrar"); ?>" >
        <?php echo $borrar; ?>
        </td>        
    </tr>
</form> 