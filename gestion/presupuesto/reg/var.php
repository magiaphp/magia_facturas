<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "presupuesto"=>[ "id"=>"$presupuesto_id",  
 "id_factura"=>"$presupuesto_id_factura",  
 "cantidad"=>"$presupuesto_cantidad",  
 "descripcion"=>"$presupuesto_descripcion",  
 "valor"=>"$presupuesto_valor",  
 "porcentaje_iva"=>"$presupuesto_porcentaje_iva",  
                ]
        ];  $html = str_replace('%presupuesto_id%',       $datos['presupuesto']['id'], $html); 
  $html = str_replace('%presupuesto_id_factura%',       $datos['presupuesto']['id_factura'], $html); 
  $html = str_replace('%presupuesto_cantidad%',       $datos['presupuesto']['cantidad'], $html); 
  $html = str_replace('%presupuesto_descripcion%',       $datos['presupuesto']['descripcion'], $html); 
  $html = str_replace('%presupuesto_valor%',       $datos['presupuesto']['valor'], $html); 
  $html = str_replace('%presupuesto_porcentaje_iva%',       $datos['presupuesto']['porcentaje_iva'], $html); 
