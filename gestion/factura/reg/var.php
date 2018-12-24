<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "factura"=>[ "id"=>"$factura_id",  
 "id_factura"=>"$factura_id_factura",  
 "cantidad"=>"$factura_cantidad",  
 "descripcion"=>"$factura_descripcion",  
 "valor"=>"$factura_valor",  
 "porcentaje_iva"=>"$factura_porcentaje_iva",  
                ]
        ];  $html = str_replace('%factura_id%',       $datos['factura']['id'], $html); 
  $html = str_replace('%factura_id_factura%',       $datos['factura']['id_factura'], $html); 
  $html = str_replace('%factura_cantidad%',       $datos['factura']['cantidad'], $html); 
  $html = str_replace('%factura_descripcion%',       $datos['factura']['descripcion'], $html); 
  $html = str_replace('%factura_valor%',       $datos['factura']['valor'], $html); 
  $html = str_replace('%factura_porcentaje_iva%',       $datos['factura']['porcentaje_iva'], $html); 
