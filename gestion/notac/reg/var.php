<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "notac"=>[ "id"=>"$notac_id",  
 "id_notac"=>"$notac_id_notac",  
 "cantidad"=>"$notac_cantidad",  
 "descripcion"=>"$notac_descripcion",  
 "valor"=>"$notac_valor",  
 "porcentaje_iva"=>"$notac_porcentaje_iva",  
                ]
        ];  $html = str_replace('%notac_id%',       $datos['notac']['id'], $html); 
  $html = str_replace('%notac_id_notac%',       $datos['notac']['id_notac'], $html); 
  $html = str_replace('%notac_cantidad%',       $datos['notac']['cantidad'], $html); 
  $html = str_replace('%notac_descripcion%',       $datos['notac']['descripcion'], $html); 
  $html = str_replace('%notac_valor%',       $datos['notac']['valor'], $html); 
  $html = str_replace('%notac_porcentaje_iva%',       $datos['notac']['porcentaje_iva'], $html); 
