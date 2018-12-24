<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "notacs"=>[ "id"=>"$notacs_id",  
 "id_factura"=>"$notacs_id_factura",  
 "contacto_email"=>"$notacs_contacto_email",  
 "fecha_registro"=>"$notacs_fecha_registro",  
 "sub_total"=>"$notacs_sub_total",  
 "iva"=>"$notacs_iva",  
 "comentarios"=>"$notacs_comentarios",  
 "estatus"=>"$notacs_estatus",  
                ]
        ];  $html = str_replace('%notacs_id%',       $datos['notacs']['id'], $html); 
  $html = str_replace('%notacs_id_factura%',       $datos['notacs']['id_factura'], $html); 
  $html = str_replace('%notacs_contacto_email%',       $datos['notacs']['contacto_email'], $html); 
  $html = str_replace('%notacs_fecha_registro%',       $datos['notacs']['fecha_registro'], $html); 
  $html = str_replace('%notacs_sub_total%',       $datos['notacs']['sub_total'], $html); 
  $html = str_replace('%notacs_iva%',       $datos['notacs']['iva'], $html); 
  $html = str_replace('%notacs_comentarios%',       $datos['notacs']['comentarios'], $html); 
  $html = str_replace('%notacs_estatus%',       $datos['notacs']['estatus'], $html); 
