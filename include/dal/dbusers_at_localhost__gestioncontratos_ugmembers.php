<?php
$dalTablegestioncontratos_ugmembers = array();
$dalTablegestioncontratos_ugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablegestioncontratos_ugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablegestioncontratos_ugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablegestioncontratos_ugmembers["UserName"]["key"]=true;
$dalTablegestioncontratos_ugmembers["GroupID"]["key"]=true;
$dalTablegestioncontratos_ugmembers["Provider"]["key"]=true;

$dal_info["dbusers_at_localhost__gestioncontratos_ugmembers"] = &$dalTablegestioncontratos_ugmembers;
?>