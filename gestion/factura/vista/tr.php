<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, factura_campos_a_mostrar())) {
                                echo "<td>$factura[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=factura&c=ver&factura_id='.$factura_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=factura&c=editar&factura_id='.$factura_id.'>'._tr("Editar").'</a>  
                      
                </td>';  