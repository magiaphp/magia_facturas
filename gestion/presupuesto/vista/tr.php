<?php 
 /**  
 magia_version: 0.0.11 
 **/
   
 echo '<td>' . $i . '</td> ';  
 foreach ($campo_disponibles as $campo) {
                            if (in_array($campo, presupuesto_campos_a_mostrar())) {
                                echo "<td>$presupuesto[$campo]</td> ";
                            }
                        }  
 echo '<td>
<a href='.$_SERVER['PHP_SELF'].'?p=presupuesto&c=ver&presupuesto_id='.$presupuesto_id.'>'._tr("Ver").'</a> |  
<a href='.$_SERVER['PHP_SELF'].'?p=presupuesto&c=editar&presupuesto_id='.$presupuesto_id.'>'._tr("Editar").'</a>  
                      
                </td>';  