<?php
$dalTablegestioncontratos_audit = array();
$dalTablegestioncontratos_audit["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablegestioncontratos_audit["datetime"] = array("type"=>135,"varname"=>"datetime", "name" => "datetime", "autoInc" => "0");
$dalTablegestioncontratos_audit["ip"] = array("type"=>200,"varname"=>"ip", "name" => "ip", "autoInc" => "0");
$dalTablegestioncontratos_audit["user"] = array("type"=>200,"varname"=>"user", "name" => "user", "autoInc" => "0");
$dalTablegestioncontratos_audit["table"] = array("type"=>200,"varname"=>"table", "name" => "table", "autoInc" => "0");
$dalTablegestioncontratos_audit["action"] = array("type"=>200,"varname"=>"action", "name" => "action", "autoInc" => "0");
$dalTablegestioncontratos_audit["description"] = array("type"=>201,"varname"=>"description", "name" => "description", "autoInc" => "0");
$dalTablegestioncontratos_audit["id"]["key"]=true;

$dal_info["dbct_at_localhost__gestioncontratos_audit"] = &$dalTablegestioncontratos_audit;
?>