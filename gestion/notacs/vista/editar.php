<?php 
 /**  
 magia_version: 0.0.11 
 **/ ?>
<h2>

<span class="glyphicon glyphicon-<?php echo _menu_icono_segun_pagina($p); ?>"></span> 

<?php _t("Editar"); ?></h2> 

</h2> 

     <form class="form-horizontal" method="post" action="index.php"> 
     <input type="hidden" name="p" value="notacs"> 
     <input type="hidden" name="c" value="editar"> 
     <input type="hidden" name="a" value="editar"> 
     <input type="hidden" name="notacs_id" value="<?php echo $notacs_id; ?>"> 

 <?php 
                        $campos = array(array(
"type" => "text",
"name" => "notacs_id_factura",
"value" => "$notacs_id_factura",                                                                        
    
"for" => "notacs_id_factura",
"label" => "id_factura",
"class" => "form-control",
"id" => "notacs_id_factura",
"placeholder" => "id_factura",
                    ),array(
"type" => "text",
"name" => "notacs_contacto_email",
"value" => "$notacs_contacto_email",                                                                        
    
"for" => "notacs_contacto_email",
"label" => "contacto_email",
"class" => "form-control",
"id" => "notacs_contacto_email",
"placeholder" => "contacto_email",
                    ),array(
"type" => "text",
"name" => "notacs_fecha_registro",
"value" => "$notacs_fecha_registro",                                                                        
    
"for" => "notacs_fecha_registro",
"label" => "fecha_registro",
"class" => "form-control",
"id" => "notacs_fecha_registro",
"placeholder" => "fecha_registro",
                    ),array(
"type" => "text",
"name" => "notacs_sub_total",
"value" => "$notacs_sub_total",                                                                        
    
"for" => "notacs_sub_total",
"label" => "sub_total",
"class" => "form-control",
"id" => "notacs_sub_total",
"placeholder" => "sub_total",
                    ),array(
"type" => "text",
"name" => "notacs_iva",
"value" => "$notacs_iva",                                                                        
    
"for" => "notacs_iva",
"label" => "iva",
"class" => "form-control",
"id" => "notacs_iva",
"placeholder" => "iva",
                    ),array(
"type" => "text",
"name" => "notacs_comentarios",
"value" => "$notacs_comentarios",                                                                        
    
"for" => "notacs_comentarios",
"label" => "comentarios",
"class" => "form-control",
"id" => "notacs_comentarios",
"placeholder" => "comentarios",
                    ),array(
"type" => "text",
"name" => "notacs_estatus",
"value" => "$notacs_estatus",                                                                        
    
"for" => "notacs_estatus",
"label" => "estatus",
"class" => "form-control",
"id" => "notacs_estatus",
"placeholder" => "estatus",
                    ),);

        foreach ($campos as $key => $value) {

        // echo var_dump($value);


        switch ($value['type']) {
            /**
             * hidden
             */
            case 'hidden':
                echo ' <input type="hidden" name="' . $value['name'] . '" value="' . $value['value'] . '">  ';
                break;
            /**
             * P
             * 
             */
            case 'p':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                               <p class="form-control-static">'.$value['value'].'</p>
                            </div> 
                          </div> ';


                break;
            /**
             * Texto
             */
            case 'text':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="text" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            /**
             * Email
             */
            case 'email':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <input 
                                  type="email" 
                                  class="form-control" 
                                  name="' . $value['name'] . '" 
                                  id="' . $value['id'] . '" 
                                  placeholder="' . _tr($value['placeholder']) . '" 
                                  value="' . $value['value'] . '"  
                                  > 
                            </div> 
                          </div> ';


                break;
            case 'textarea':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                              <textarea class="form-control" >' . $value['value'] . '</textarea> 
                            </div> 
                          </div> ';


                break;
            /**
             * Campo tipo menu deruante 
             * <select></select>
             */
            case 'select':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> 
                                <select class="' . $value['class'] . '" name="' . $value['name'] . '" id="' . $value['id'] . '">
                                    ';
                foreach ($value['options'] as $option_key => $option_value) {
                    $selected = ( $value['selected'] == $option_key ) ? " selected=\"\" " : "";
                    echo '<option value="' . $option_key . '" ' . $selected . ' >' . $option_value . '</option>';
                }
                echo '
                                </select>
                            </div> 
                          </div> ';
                break;
            /**
             * 
             */
            case 'checkbox':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $checkbox_key => $checkbox_value) {

                    $checked = ( in_array($checkbox_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '<input type="checkbox" value="' . $checkbox_key . '" ' . $checked . '> ' . $checkbox_value . '<br>';
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;
                /**
                 * 
                 */
            case 'radio':
                echo ' <div class="form-group"> 
                            <label for="' . $value['for'] . '" class="col-sm-2 control-label">' . _tr($value['label']) . '</label> 
                            <div class="col-sm-10"> ';

                foreach ($value['options'] as $radio_key => $radio_value) {


                    $checked = ( in_array($radio_key, $value['selected']) ) ? " checked=\"\" " : "";

                    echo '    <input type="radio" name="'.$value['name'].'" value="'.$value['value'].'" '.$checked.'> ' .$radio_value . '<br>'; 
                }
                echo '
                                
                            </div> 
                          </div> ';

                break;



            /**
             * Submit
             */
            case 'submit':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="submit" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;
            /**
             * reset
             */
            case 'reset':
                echo '<div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                    <button type="reset" class="' . $value['class'] . '">' . _tr($value['label']) . '</button> 
                </div> 
            </div>  ';
                break;


            default:
                break;
        }
        
    }
    
?>

   <div class="form-group"> 
 <div class="col-sm-offset-2 col-sm-10"> 
       <button type="submit" class="btn btn-primary"><?php _t("Editar"); ?></button> 
     </div> 
   </div>     
 </form> 
