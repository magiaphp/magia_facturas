<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, notacs_campos_a_mostrar())) {
                                echo "<td>$notacs[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=notacs&c=ver&notacs_id='.$notacs_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=notacs&c=editar&notacs_id='.$notacs_id.'>'._tr("Editar").'</a>  
                      
                </td>';  