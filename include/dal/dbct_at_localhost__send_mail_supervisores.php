<?php
$dalTablesend_mail_supervisores = array();
$dalTablesend_mail_supervisores["send_id"] = array("type"=>3,"varname"=>"send_id", "name" => "send_id", "autoInc" => "1");
$dalTablesend_mail_supervisores["send_to"] = array("type"=>200,"varname"=>"send_to", "name" => "send_to", "autoInc" => "0");
$dalTablesend_mail_supervisores["send_msj"] = array("type"=>200,"varname"=>"send_msj", "name" => "send_msj", "autoInc" => "0");
$dalTablesend_mail_supervisores["send_date"] = array("type"=>135,"varname"=>"send_date", "name" => "send_date", "autoInc" => "0");
$dalTablesend_mail_supervisores["send_id"]["key"]=true;

$dal_info["dbct_at_localhost__send_mail_supervisores"] = &$dalTablesend_mail_supervisores;
?>