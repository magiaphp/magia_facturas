<?php 
 /**  
 magia_version: 0.0.11 
 **/ 
  
 $datos= [
            "presupuestos"=>[ "id"=>"$presupuestos_id",  
 "contacto_email"=>"$presupuestos_contacto_email",  
 "fecha_registro"=>"$presupuestos_fecha_registro",  
 "sub_total"=>"$presupuestos_sub_total",  
 "iva"=>"$presupuestos_iva",  
 "comentarios"=>"$presupuestos_comentarios",  
 "expira"=>"$presupuestos_expira",  
 "estatus"=>"$presupuestos_estatus",  
                ]
        ];  $html = str_replace('%presupuestos_id%',       $datos['presupuestos']['id'], $html); 
  $html = str_replace('%presupuestos_contacto_email%',       $datos['presupuestos']['contacto_email'], $html); 
  $html = str_replace('%presupuestos_fecha_registro%',       $datos['presupuestos']['fecha_registro'], $html); 
  $html = str_replace('%presupuestos_sub_total%',       $datos['presupuestos']['sub_total'], $html); 
  $html = str_replace('%presupuestos_iva%',       $datos['presupuestos']['iva'], $html); 
  $html = str_replace('%presupuestos_comentarios%',       $datos['presupuestos']['comentarios'], $html); 
  $html = str_replace('%presupuestos_expira%',       $datos['presupuestos']['expira'], $html); 
  $html = str_replace('%presupuestos_estatus%',       $datos['presupuestos']['estatus'], $html); 
