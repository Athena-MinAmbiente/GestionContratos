<?php
$tdatainforme_intersup4 = array();
$tdatainforme_intersup4[".searchableFields"] = array();
$tdatainforme_intersup4[".ShortName"] = "informe_intersup4";
$tdatainforme_intersup4[".OwnerID"] = "inf_intersup";
$tdatainforme_intersup4[".OriginalTable"] = "informe_intersup";


$tdatainforme_intersup4[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatainforme_intersup4[".originalPagesByType"] = $tdatainforme_intersup4[".pagesByType"];
$tdatainforme_intersup4[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatainforme_intersup4[".originalPages"] = $tdatainforme_intersup4[".pages"];
$tdatainforme_intersup4[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatainforme_intersup4[".originalDefaultPages"] = $tdatainforme_intersup4[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup4 = array();
$fieldToolTipsinforme_intersup4 = array();
$pageTitlesinforme_intersup4 = array();
$placeHoldersinforme_intersup4 = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup4["Spanish"] = array();
	$fieldToolTipsinforme_intersup4["Spanish"] = array();
	$placeHoldersinforme_intersup4["Spanish"] = array();
	$pageTitlesinforme_intersup4["Spanish"] = array();
	$fieldLabelsinforme_intersup4["Spanish"]["inf_id"] = "Inf Id";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_id"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_id"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["id_cont_fk"] = "ID";
	$fieldToolTipsinforme_intersup4["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_consecutivo"] = "No. de Pago";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_hash"] = "Código de informe";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_hash"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_hash"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_estado"] = "Estado del informe";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_estado"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_estado"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_fechapresenta"] = "Fecha de presentación";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_fechapresenta"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_fechapresenta"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_periodicidad"] = "Inf Periodicidad";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_periodicidad"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_periodicidad"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_fecharep_i"] = "Fecha inicial";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_fecharep_f"] = "Fecha final";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_numerocontrato"] = "Número de contrato";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_numerocontrato"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_numerocontrato"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_doccontratista"] = "Documento contratista";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_doccontratista"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_doccontratista"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_nombrecontratista"] = "Nombre | Razón Social";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_nombrecontratista"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_nombrecontratista"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_valorcontrato"] = "Valor del contrato";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_adicionreduc"] = "Inf Adicionreduc";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_adicionreduc"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_adicionreduc"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_cdp"] = "CDP";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_cdp"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_cdp"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_rp"] = "Registro Presupuestal";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_rp"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_rp"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_rubrocode"] = "Rubro";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_rubrocode"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_rubrocode"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_rubroname"] = "Unidad Ejecutora";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_rubroname"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_rubroname"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_objeto"] = "Objeto";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_objeto"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_objeto"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_fechasuscripcion"] = "Fecha de suscripción";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_fechasuscripcion"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_fechasuscripcion"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_fechacont_i"] = "Fecha incial del contrato";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_fechacont_i"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_fechacont_i"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_fechacont_f"] = "Fecha final del contrato";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_fechacont_f"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_fechacont_f"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_plazo"] = "Plazo";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_plazo"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_plazo"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_vigencia"] = "Vigencia";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_vigencia"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_vigencia"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_modificacionesplazo"] = "Inf Modificacionesplazo";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_modificacionesplazo"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_modificacionesplazo"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_intersup"] = "Documento supervisor";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_intersup"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_intersup"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_nombre"] = "Nombre del supervisor";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_nombre"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_nombre"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_cargo"] = "Cargo";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_cargo"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_cargo"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_dependencia"] = "Dependencia";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_dependencia"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_dependencia"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_avgejecucion"] = "% ejecución";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_avgejecucion"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_avgejecucion"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_actividades"] = "Desarollo de actividad";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_actividades"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_actividades"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_declarainconf"] = "¿Declara inconformidad?";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_declarainconf"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_declarainconf"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_declarainconf_obs"] = "Escriba la razón";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_declarainconf_obs"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_declarainconf_obs"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_incumplimiento"] = "¿Declara incumplimiento?";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_incumplimiento"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_incumplimiento"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_incumplimiento_obs"] = "Escriba la razón";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_incumplimiento_obs"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_incumplimiento_obs"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_otrosaspectostecnicos"] = "Inf Otrosaspectostecnicos";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_otrosaspectostecnicos"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_otrosaspectostecnicos"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_recomyobserva"] = "Inf Recomyobserva";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_recomyobserva"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_recomyobserva"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_date"] = "Sign Date";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_date"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_date"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_hash"] = "Sign Hash";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_hash"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_hash"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_file"] = "Sign File";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_file"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_file"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_mailnot"] = "Sign Mailnot";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_mailnot"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_mailnot"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["file_verifica"] = "File Verifica";
	$fieldToolTipsinforme_intersup4["Spanish"]["file_verifica"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["file_verifica"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_verificacert"] = "Clave dinámica";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_verificacert"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_verificacert"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["cert_date"] = "Cert Date";
	$fieldToolTipsinforme_intersup4["Spanish"]["cert_date"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["cert_date"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["cert_file"] = "Cert File";
	$fieldToolTipsinforme_intersup4["Spanish"]["cert_file"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["cert_file"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["cert_mail"] = "Cert Mail";
	$fieldToolTipsinforme_intersup4["Spanish"]["cert_mail"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["cert_mail"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["cert_compare"] = "Cert Compare";
	$fieldToolTipsinforme_intersup4["Spanish"]["cert_compare"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["cert_compare"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_ultimopago"] = "Inf Ultimopago";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_ultimopago"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_ultimopago"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipsinforme_intersup4["Spanish"]["sys_date"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sys_date"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_anio"] = "Vigencia";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_anio"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_anio"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_prenum"] = "Pre-número";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_prenum"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_prenum"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_mail_a"] = "Correo personal";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_mail_a"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_mail_a"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["inf_mail_b"] = "Correo institucional";
	$fieldToolTipsinforme_intersup4["Spanish"]["inf_mail_b"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["inf_mail_b"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["url_secop"] = "Enlace a SECOP";
	$fieldToolTipsinforme_intersup4["Spanish"]["url_secop"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["url_secop"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["num_poliza"] = "Número de póliza";
	$fieldToolTipsinforme_intersup4["Spanish"]["num_poliza"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["num_poliza"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["mun_ejec"] = "Municipio de ejecución";
	$fieldToolTipsinforme_intersup4["Spanish"]["mun_ejec"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["mun_ejec"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["cont_cesion"] = "Cesión";
	$fieldToolTipsinforme_intersup4["Spanish"]["cont_cesion"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["cont_cesion"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["cont_modifica"] = "Modificación";
	$fieldToolTipsinforme_intersup4["Spanish"]["cont_modifica"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["cont_modifica"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["qty_inf"] = "Programados";
	$fieldToolTipsinforme_intersup4["Spanish"]["qty_inf"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["qty_inf"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["qty_inf_compare"] = "Gestionados";
	$fieldToolTipsinforme_intersup4["Spanish"]["qty_inf_compare"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["qty_inf_compare"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["qty_inf_verifica"] = "Aprobados";
	$fieldToolTipsinforme_intersup4["Spanish"]["qty_inf_verifica"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["qty_inf_verifica"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_verificacert_ip"] = "Sign Verificacert Ip";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_verificacert_ip"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_verificacert_ip"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_verificacert_user"] = "Sign Verificacert User";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_verificacert_user"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_verificacert_user"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["sign_verificacert_date"] = "Fecha de firma";
	$fieldToolTipsinforme_intersup4["Spanish"]["sign_verificacert_date"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["sign_verificacert_date"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["hashfirmado"] = "Certificado";
	$fieldToolTipsinforme_intersup4["Spanish"]["hashfirmado"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["hashfirmado"] = "";
	$fieldLabelsinforme_intersup4["Spanish"]["id_cont_fk2"] = "Número de contrato";
	$fieldToolTipsinforme_intersup4["Spanish"]["id_cont_fk2"] = "";
	$placeHoldersinforme_intersup4["Spanish"]["id_cont_fk2"] = "";
	$pageTitlesinforme_intersup4["Spanish"]["print"] = "Informe de actividades";
	if (count($fieldToolTipsinforme_intersup4["Spanish"]))
		$tdatainforme_intersup4[".isUseToolTips"] = true;
}


	$tdatainforme_intersup4[".NCSearch"] = true;



$tdatainforme_intersup4[".shortTableName"] = "informe_intersup4";
$tdatainforme_intersup4[".nSecOptions"] = 1;

$tdatainforme_intersup4[".mainTableOwnerID"] = "inf_intersup";
$tdatainforme_intersup4[".entityType"] = 1;
$tdatainforme_intersup4[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup4[".strOriginalTableName"] = "informe_intersup";

	



$tdatainforme_intersup4[".showAddInPopup"] = false;

$tdatainforme_intersup4[".showEditInPopup"] = false;

$tdatainforme_intersup4[".showViewInPopup"] = false;

$tdatainforme_intersup4[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup4[".listAjax"] = false;

	$tdatainforme_intersup4[".audit"] = true;

	$tdatainforme_intersup4[".locking"] = true;


$pages = $tdatainforme_intersup4[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup4[".edit"] = true;
	$tdatainforme_intersup4[".afterEditAction"] = 1;
	$tdatainforme_intersup4[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup4[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup4[".add"] = true;
$tdatainforme_intersup4[".afterAddAction"] = 1;
$tdatainforme_intersup4[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup4[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup4[".list"] = true;
}



$tdatainforme_intersup4[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup4[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup4[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup4[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup4[".printFriendly"] = true;
}



$tdatainforme_intersup4[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup4[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup4[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup4[".isUseAjaxSuggest"] = true;



																																																																								

$tdatainforme_intersup4[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup4[".buttonsAdded"] = false;

$tdatainforme_intersup4[".addPageEvents"] = true;

// use timepicker for search panel
$tdatainforme_intersup4[".isUseTimeForSearch"] = false;


$tdatainforme_intersup4[".badgeColor"] = "2f4f4f";


$tdatainforme_intersup4[".allSearchFields"] = array();
$tdatainforme_intersup4[".filterFields"] = array();
$tdatainforme_intersup4[".requiredSearchFields"] = array();

$tdatainforme_intersup4[".googleLikeFields"] = array();
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_id";
$tdatainforme_intersup4[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup4[".googleLikeFields"][] = "id_cont_fk2";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_consecutivo";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_hash";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_estado";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_fechapresenta";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_periodicidad";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_fecharep_i";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_fecharep_f";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_numerocontrato";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_anio";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_prenum";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_doccontratista";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_nombrecontratista";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_valorcontrato";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_adicionreduc";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_cdp";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_rp";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_rubrocode";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_rubroname";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_objeto";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_fechasuscripcion";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_fechacont_i";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_fechacont_f";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_plazo";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_vigencia";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_modificacionesplazo";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_intersup";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_nombre";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_cargo";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_dependencia";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_avgejecucion";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_actividades";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_declarainconf";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_declarainconf_obs";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_incumplimiento";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_incumplimiento_obs";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_otrosaspectostecnicos";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_recomyobserva";
$tdatainforme_intersup4[".googleLikeFields"][] = "file_verifica";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_ultimopago";
$tdatainforme_intersup4[".googleLikeFields"][] = "sys_date";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_mail_a";
$tdatainforme_intersup4[".googleLikeFields"][] = "inf_mail_b";
$tdatainforme_intersup4[".googleLikeFields"][] = "url_secop";
$tdatainforme_intersup4[".googleLikeFields"][] = "num_poliza";
$tdatainforme_intersup4[".googleLikeFields"][] = "mun_ejec";
$tdatainforme_intersup4[".googleLikeFields"][] = "cont_cesion";
$tdatainforme_intersup4[".googleLikeFields"][] = "cont_modifica";
$tdatainforme_intersup4[".googleLikeFields"][] = "qty_inf";
$tdatainforme_intersup4[".googleLikeFields"][] = "qty_inf_compare";
$tdatainforme_intersup4[".googleLikeFields"][] = "qty_inf_verifica";
$tdatainforme_intersup4[".googleLikeFields"][] = "cert_mail";
$tdatainforme_intersup4[".googleLikeFields"][] = "cert_file";
$tdatainforme_intersup4[".googleLikeFields"][] = "cert_date";
$tdatainforme_intersup4[".googleLikeFields"][] = "cert_compare";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_hash";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_date";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_mailnot";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_verificacert";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_file";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_verificacert_ip";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_verificacert_user";
$tdatainforme_intersup4[".googleLikeFields"][] = "sign_verificacert_date";
$tdatainforme_intersup4[".googleLikeFields"][] = "hashfirmado";



$tdatainforme_intersup4[".tableType"] = "list";

$tdatainforme_intersup4[".printerPageOrientation"] = 0;
$tdatainforme_intersup4[".nPrinterPageScale"] = 100;

$tdatainforme_intersup4[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup4[".geocodingEnabled"] = false;




$tdatainforme_intersup4[".isDisplayLoading"] = true;



$tdatainforme_intersup4[".noRecordsFirstPage"] = true;



$tdatainforme_intersup4[".pageSize"] = 20;

$tdatainforme_intersup4[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup4[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup4[".orderindexes"] = array();


$tdatainforme_intersup4[".sqlHead"] = "SELECT inf_id,  id_cont_fk,  id_cont_fk AS id_cont_fk2,  inf_consecutivo,  inf_hash,  inf_estado,  inf_fechapresenta,  inf_periodicidad,  inf_fecharep_i,  inf_fecharep_f,  inf_numerocontrato,  inf_anio,  inf_prenum,  inf_doccontratista,  inf_nombrecontratista,  inf_valorcontrato,  inf_adicionreduc,  inf_cdp,  inf_rp,  inf_rubrocode,  inf_rubroname,  inf_objeto,  inf_fechasuscripcion,  inf_fechacont_i,  inf_fechacont_f,  inf_plazo,  inf_vigencia,  inf_modificacionesplazo,  inf_intersup,  inf_nombre,  inf_cargo,  inf_dependencia,  inf_avgejecucion,  inf_actividades,  inf_declarainconf,  inf_declarainconf_obs,  inf_incumplimiento,  inf_incumplimiento_obs,  inf_otrosaspectostecnicos,  inf_recomyobserva,  file_verifica,  inf_ultimopago,  sys_date,  inf_mail_a,  inf_mail_b,  url_secop,  num_poliza,  mun_ejec,  cont_cesion,  cont_modifica,  qty_inf,  qty_inf_compare,  qty_inf_verifica,  cert_mail,  cert_file,  cert_date,  cert_compare,  sign_hash,  sign_date,  sign_mailnot,  sign_verificacert,  sign_file,  sign_verificacert_ip,  sign_verificacert_user,  sign_verificacert_date,  concat_ws('|', inf_consecutivo, inf_hash, inf_numerocontrato, inf_doccontratista, inf_nombrecontratista, inf_intersup, inf_nombre) AS hashfirmado";
$tdatainforme_intersup4[".sqlFrom"] = "FROM informe_intersup";
$tdatainforme_intersup4[".sqlWhereExpr"] = "(sign_file = 2)";
$tdatainforme_intersup4[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup4[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup4[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup4[".highlightSearchResults"] = true;

$tableKeysinforme_intersup4 = array();
$tableKeysinforme_intersup4[] = "inf_id";
$tdatainforme_intersup4[".Keys"] = $tableKeysinforme_intersup4;


$tdatainforme_intersup4[".hideMobileList"] = array();




//	inf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inf_id";
	$fdata["GoodName"] = "inf_id";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "inf_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_id"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_bandejaentrada_supervisores2";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_periodicidad", 'lookupF'=>"cont_periodicidad");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_numerocontrato", 'lookupF'=>"numcontrato");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_anio", 'lookupF'=>"cont_ano");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_prenum", 'lookupF'=>"pre_contnumero");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_doccontratista", 'lookupF'=>"cont_nit_contra_ta");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_nombrecontratista", 'lookupF'=>"contractor_nombresfull");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_valorcontrato", 'lookupF'=>"cont_valorinicial");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_cdp", 'lookupF'=>"numregistro");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_rp", 'lookupF'=>"prenumero");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_rubrocode", 'lookupF'=>"cont_codrubro");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_rubroname", 'lookupF'=>"cont_tipopre");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_objeto", 'lookupF'=>"cont_objeto");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_fechasuscripcion", 'lookupF'=>"cont_fechaapertura");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_fechacont_i", 'lookupF'=>"cont_fecha_inicio");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_fechacont_f", 'lookupF'=>"cont_fechafinal");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_plazo", 'lookupF'=>"PLAZO");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_vigencia", 'lookupF'=>"cont_ano");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_intersup", 'lookupF'=>"documento_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_nombre", 'lookupF'=>"nombresupfull");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_cargo", 'lookupF'=>"nombre_cargo");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_dependencia", 'lookupF'=>"nombre_dependencia");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_mail_a", 'lookupF'=>"contractor_email");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_mail_b", 'lookupF'=>"contractor_email_mincit");
	$edata["autoCompleteFields"][] = array('masterF'=>"url_secop", 'lookupF'=>"cont_secop_enlace");
	$edata["autoCompleteFields"][] = array('masterF'=>"num_poliza", 'lookupF'=>"cont_numpoliza");
	$edata["autoCompleteFields"][] = array('masterF'=>"mun_ejec", 'lookupF'=>"cont_munejec");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_cesion", 'lookupF'=>"cont_cesion");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_modifica", 'lookupF'=>"cont_modifica");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "inf_consecutivo";
				$edata["DependentLookups"][] = "inf_consecutivo";

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["id_cont_fk"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "id_cont_fk";
//	id_cont_fk2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_cont_fk2";
	$fdata["GoodName"] = "id_cont_fk2";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","id_cont_fk2");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_bandejaentrada_supervisores";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_intersup", 'lookupF'=>"documento_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_cargo", 'lookupF'=>"cargo_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_dependencia", 'lookupF'=>"dependencia_id");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "numcontrato";

	

	
	$edata["LookupOrderBy"] = "numcontrato";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "inf_anio", "lookup" => "cont_ano" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["id_cont_fk2"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "id_cont_fk2";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_consecutivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_consecutivo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_consecutivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_plan_pagos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_fecharep_i", 'lookupF'=>"inf_fecharep_i");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_fecharep_f", 'lookupF'=>"inf_fecharep_f");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_avgejecucion", 'lookupF'=>"avgavance");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "inf_consecutivo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "inf_consecutivo";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont_fk" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_plan_pagos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "inf_consecutivo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "inf_consecutivo";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont_fk" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "inf_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_consecutivo"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_consecutivo";
//	inf_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_hash";
	$fdata["GoodName"] = "inf_hash";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_hash";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_hash";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_hash"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_hash";
//	inf_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inf_estado";
	$fdata["GoodName"] = "inf_estado";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_estado";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
		
	$edata["LinkField"] = "estadoi_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadoname";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_estado"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_estado";
//	inf_fechapresenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inf_fechapresenta";
	$fdata["GoodName"] = "inf_fechapresenta";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_fechapresenta");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechapresenta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechapresenta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_fechapresenta"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_fechapresenta";
//	inf_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "inf_periodicidad";
	$fdata["GoodName"] = "inf_periodicidad";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_periodicidad");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_periodicidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_periodicidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_periodicidad"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_periodicidad";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_fecharep_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_i";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_fecharep_i"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_fecharep_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_f";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "inf_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 3;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_fecharep_f"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_fecharep_f";
//	inf_numerocontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "inf_numerocontrato";
	$fdata["GoodName"] = "inf_numerocontrato";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_numerocontrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_numerocontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_numerocontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_numerocontrato"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_numerocontrato";
//	inf_anio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "inf_anio";
	$fdata["GoodName"] = "inf_anio";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_anio");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "inf_anio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_anio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "vigencia";

				$edata["LookupWhere"] = "vigencia >= 2021";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_cont_fk2";

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "inf_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_anio"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_anio";
//	inf_prenum
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "inf_prenum";
	$fdata["GoodName"] = "inf_prenum";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_prenum");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_prenum";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_prenum";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_prenum"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_prenum";
//	inf_doccontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "inf_doccontratista";
	$fdata["GoodName"] = "inf_doccontratista";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_doccontratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_doccontratista";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_doccontratista";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_doccontratista"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_doccontratista";
//	inf_nombrecontratista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "inf_nombrecontratista";
	$fdata["GoodName"] = "inf_nombrecontratista";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_nombrecontratista");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_nombrecontratista";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombrecontratista";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "inf_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_nombrecontratista"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_nombrecontratista";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_valorcontrato"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_valorcontrato";
//	inf_adicionreduc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "inf_adicionreduc";
	$fdata["GoodName"] = "inf_adicionreduc";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_adicionreduc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_adicionreduc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_adicionreduc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_adicionreduc"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_adicionreduc";
//	inf_cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "inf_cdp";
	$fdata["GoodName"] = "inf_cdp";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_cdp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_cdp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cdp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_cdp"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_cdp";
//	inf_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "inf_rp";
	$fdata["GoodName"] = "inf_rp";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_rp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rp";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_rp"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_rp";
//	inf_rubrocode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "inf_rubrocode";
	$fdata["GoodName"] = "inf_rubrocode";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_rubrocode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rubrocode";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubrocode";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_rubrocode"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_rubrocode";
//	inf_rubroname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "inf_rubroname";
	$fdata["GoodName"] = "inf_rubroname";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_rubroname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_rubroname";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_rubroname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_rubroname"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_rubroname";
//	inf_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "inf_objeto";
	$fdata["GoodName"] = "inf_objeto";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_objeto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_objeto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_objeto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_objeto"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_objeto";
//	inf_fechasuscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "inf_fechasuscripcion";
	$fdata["GoodName"] = "inf_fechasuscripcion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_fechasuscripcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechasuscripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechasuscripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_fechasuscripcion"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_fechasuscripcion";
//	inf_fechacont_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "inf_fechacont_i";
	$fdata["GoodName"] = "inf_fechacont_i";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_fechacont_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechacont_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_i";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_fechacont_i"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_fechacont_i";
//	inf_fechacont_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "inf_fechacont_f";
	$fdata["GoodName"] = "inf_fechacont_f";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_fechacont_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fechacont_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fechacont_f";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_fechacont_f"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_fechacont_f";
//	inf_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "inf_plazo";
	$fdata["GoodName"] = "inf_plazo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_plazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_plazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_plazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_plazo"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_plazo";
//	inf_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "inf_vigencia";
	$fdata["GoodName"] = "inf_vigencia";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_vigencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_vigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_vigencia"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_vigencia";
//	inf_modificacionesplazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "inf_modificacionesplazo";
	$fdata["GoodName"] = "inf_modificacionesplazo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_modificacionesplazo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_modificacionesplazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_modificacionesplazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_modificacionesplazo"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_modificacionesplazo";
//	inf_intersup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "inf_intersup";
	$fdata["GoodName"] = "inf_intersup";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_intersup");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_intersup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_intersup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_intersup"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_intersup";
//	inf_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "inf_nombre";
	$fdata["GoodName"] = "inf_nombre";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_nombre"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_nombre";
//	inf_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "inf_cargo";
	$fdata["GoodName"] = "inf_cargo";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_cargo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_cargo"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_cargo";
//	inf_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "inf_dependencia";
	$fdata["GoodName"] = "inf_dependencia";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_dependencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_dependencia"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_dependencia";
//	inf_avgejecucion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "inf_avgejecucion";
	$fdata["GoodName"] = "inf_avgejecucion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_avgejecucion");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_avgejecucion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_avgejecucion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_avgejecucion"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_avgejecucion";
//	inf_actividades
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "inf_actividades";
	$fdata["GoodName"] = "inf_actividades";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_actividades");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "inf_actividades";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_actividades";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_actividades"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_actividades";
//	inf_declarainconf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "inf_declarainconf";
	$fdata["GoodName"] = "inf_declarainconf";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_declarainconf");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_declarainconf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadosn_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_declarainconf"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_declarainconf";
//	inf_declarainconf_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "inf_declarainconf_obs";
	$fdata["GoodName"] = "inf_declarainconf_obs";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_declarainconf_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_declarainconf_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_declarainconf_obs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_declarainconf_obs"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_declarainconf_obs";
//	inf_incumplimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "inf_incumplimiento";
	$fdata["GoodName"] = "inf_incumplimiento";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_incumplimiento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_incumplimiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_sn";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "estadosn_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estadosn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_incumplimiento"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_incumplimiento";
//	inf_incumplimiento_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "inf_incumplimiento_obs";
	$fdata["GoodName"] = "inf_incumplimiento_obs";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_incumplimiento_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_incumplimiento_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_incumplimiento_obs";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_incumplimiento_obs"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_incumplimiento_obs";
//	inf_otrosaspectostecnicos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "inf_otrosaspectostecnicos";
	$fdata["GoodName"] = "inf_otrosaspectostecnicos";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_otrosaspectostecnicos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_otrosaspectostecnicos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_otrosaspectostecnicos";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_otrosaspectostecnicos"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_otrosaspectostecnicos";
//	inf_recomyobserva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "inf_recomyobserva";
	$fdata["GoodName"] = "inf_recomyobserva";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_recomyobserva");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_recomyobserva";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_recomyobserva";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_recomyobserva"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_recomyobserva";
//	file_verifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "file_verifica";
	$fdata["GoodName"] = "file_verifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","file_verifica");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "file_verifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "file_verifica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["file_verifica"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "file_verifica";
//	inf_ultimopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "inf_ultimopago";
	$fdata["GoodName"] = "inf_ultimopago";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_ultimopago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_ultimopago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_ultimopago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_ultimopago"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_ultimopago";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sys_date"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sys_date";
//	inf_mail_a
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "inf_mail_a";
	$fdata["GoodName"] = "inf_mail_a";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_mail_a");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_mail_a";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_mail_a";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_mail_a"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_mail_a";
//	inf_mail_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "inf_mail_b";
	$fdata["GoodName"] = "inf_mail_b";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","inf_mail_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "inf_mail_b";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_mail_b";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["inf_mail_b"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "inf_mail_b";
//	url_secop
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "url_secop";
	$fdata["GoodName"] = "url_secop";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","url_secop");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "url_secop";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "url_secop";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 0;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["url_secop"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "url_secop";
//	num_poliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "num_poliza";
	$fdata["GoodName"] = "num_poliza";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","num_poliza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_poliza";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_poliza";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["num_poliza"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "num_poliza";
//	mun_ejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "mun_ejec";
	$fdata["GoodName"] = "mun_ejec";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","mun_ejec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mun_ejec";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mun_ejec";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["mun_ejec"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "mun_ejec";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","cont_cesion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_cesion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cesion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["cont_cesion"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "cont_cesion";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","cont_modifica");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_modifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modifica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["cont_modifica"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "cont_modifica";
//	qty_inf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "qty_inf";
	$fdata["GoodName"] = "qty_inf";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","qty_inf");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qty_inf";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_inf";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["qty_inf"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "qty_inf";
//	qty_inf_compare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "qty_inf_compare";
	$fdata["GoodName"] = "qty_inf_compare";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","qty_inf_compare");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qty_inf_compare";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_inf_compare";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["qty_inf_compare"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "qty_inf_compare";
//	qty_inf_verifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "qty_inf_verifica";
	$fdata["GoodName"] = "qty_inf_verifica";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","qty_inf_verifica");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "qty_inf_verifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qty_inf_verifica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["qty_inf_verifica"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "qty_inf_verifica";
//	cert_mail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "cert_mail";
	$fdata["GoodName"] = "cert_mail";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","cert_mail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_mail";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_mail";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["cert_mail"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "cert_mail";
//	cert_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "cert_file";
	$fdata["GoodName"] = "cert_file";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","cert_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["cert_file"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "cert_file";
//	cert_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 56;
	$fdata["strName"] = "cert_date";
	$fdata["GoodName"] = "cert_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","cert_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cert_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["cert_date"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "cert_date";
//	cert_compare
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 57;
	$fdata["strName"] = "cert_compare";
	$fdata["GoodName"] = "cert_compare";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","cert_compare");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cert_compare";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cert_compare";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["cert_compare"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "cert_compare";
//	sign_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 58;
	$fdata["strName"] = "sign_hash";
	$fdata["GoodName"] = "sign_hash";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_hash";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_hash";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_hash"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_hash";
//	sign_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 59;
	$fdata["strName"] = "sign_date";
	$fdata["GoodName"] = "sign_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sign_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_date"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_date";
//	sign_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 60;
	$fdata["strName"] = "sign_mailnot";
	$fdata["GoodName"] = "sign_mailnot";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_mailnot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_mailnot";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_mailnot";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_mailnot"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_mailnot";
//	sign_verificacert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 61;
	$fdata["strName"] = "sign_verificacert";
	$fdata["GoodName"] = "sign_verificacert";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_verificacert");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_verificacert"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_verificacert";
//	sign_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 62;
	$fdata["strName"] = "sign_file";
	$fdata["GoodName"] = "sign_file";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_file");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sign_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_file"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_file";
//	sign_verificacert_ip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 63;
	$fdata["strName"] = "sign_verificacert_ip";
	$fdata["GoodName"] = "sign_verificacert_ip";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_verificacert_ip");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert_ip";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_ip";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_verificacert_ip"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_verificacert_ip";
//	sign_verificacert_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 64;
	$fdata["strName"] = "sign_verificacert_user";
	$fdata["GoodName"] = "sign_verificacert_user";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_verificacert_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign_verificacert_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_verificacert_user"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_verificacert_user";
//	sign_verificacert_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 65;
	$fdata["strName"] = "sign_verificacert_date";
	$fdata["GoodName"] = "sign_verificacert_date";
	$fdata["ownerTable"] = "informe_intersup";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","sign_verificacert_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sign_verificacert_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sign_verificacert_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Long Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["sign_verificacert_date"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "sign_verificacert_date";
//	hashfirmado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 66;
	$fdata["strName"] = "hashfirmado";
	$fdata["GoodName"] = "hashfirmado";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("informe_intersup4","hashfirmado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "hashfirmado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat_ws('|', inf_consecutivo, inf_hash, inf_numerocontrato, inf_doccontratista, inf_nombrecontratista, inf_intersup, inf_nombre)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatainforme_intersup4["hashfirmado"] = $fdata;
		$tdatainforme_intersup4[".searchableFields"][] = "hashfirmado";


$tables_data["informe_intersup4"]=&$tdatainforme_intersup4;
$field_labels["informe_intersup4"] = &$fieldLabelsinforme_intersup4;
$fieldToolTips["informe_intersup4"] = &$fieldToolTipsinforme_intersup4;
$placeHolders["informe_intersup4"] = &$placeHoldersinforme_intersup4;
$page_titles["informe_intersup4"] = &$pageTitlesinforme_intersup4;


changeTextControlsToDate( "informe_intersup4" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup4"] = array();
//	informe_intersup_oe
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_oe";
		$detailsParam["dOriginalTable"] = "informe_intersup_oe";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_oe";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_oe");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup4"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"][]="inf_id";

				$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"][]="inf_id_fk";
//	q_consulta_op
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="q_consulta_op";
		$detailsParam["dOriginalTable"] = "q_consulta_op";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "q_consulta_op";
	$detailsParam["dCaptionTable"] = GetTableCaption("q_consulta_op");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup4"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"][]="id_cont_fk";
//	contrato_attached
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_attached";
		$detailsParam["dOriginalTable"] = "contrato_attached";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_attached";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_attached");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup4"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"][]="id_cont_fk";

				$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"][]="id_cont_fk";
//	informe_intersup_anexos_supervisor
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_anexos_supervisor";
		$detailsParam["dOriginalTable"] = "informe_intersup_anexos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_anexos_supervisor";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_anexos_supervisor");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["informe_intersup4"][$dIndex] = $detailsParam;

	
		$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["masterKeys"][]="inf_id";

				$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["informe_intersup4"][$dIndex]["detailKeys"][]="inf_id_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup4"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_audit";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_audit";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup4"][0] = $masterParams;
				$masterTablesData["informe_intersup4"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup4"][0]["masterKeys"][]="id_cont";
				$masterTablesData["informe_intersup4"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup4"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup4"][1] = $masterParams;
				$masterTablesData["informe_intersup4"][1]["masterKeys"] = array();
	$masterTablesData["informe_intersup4"][1]["masterKeys"][]="id_cont";
				$masterTablesData["informe_intersup4"][1]["detailKeys"] = array();
	$masterTablesData["informe_intersup4"][1]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup4()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inf_id,  id_cont_fk,  id_cont_fk AS id_cont_fk2,  inf_consecutivo,  inf_hash,  inf_estado,  inf_fechapresenta,  inf_periodicidad,  inf_fecharep_i,  inf_fecharep_f,  inf_numerocontrato,  inf_anio,  inf_prenum,  inf_doccontratista,  inf_nombrecontratista,  inf_valorcontrato,  inf_adicionreduc,  inf_cdp,  inf_rp,  inf_rubrocode,  inf_rubroname,  inf_objeto,  inf_fechasuscripcion,  inf_fechacont_i,  inf_fechacont_f,  inf_plazo,  inf_vigencia,  inf_modificacionesplazo,  inf_intersup,  inf_nombre,  inf_cargo,  inf_dependencia,  inf_avgejecucion,  inf_actividades,  inf_declarainconf,  inf_declarainconf_obs,  inf_incumplimiento,  inf_incumplimiento_obs,  inf_otrosaspectostecnicos,  inf_recomyobserva,  file_verifica,  inf_ultimopago,  sys_date,  inf_mail_a,  inf_mail_b,  url_secop,  num_poliza,  mun_ejec,  cont_cesion,  cont_modifica,  qty_inf,  qty_inf_compare,  qty_inf_verifica,  cert_mail,  cert_file,  cert_date,  cert_compare,  sign_hash,  sign_date,  sign_mailnot,  sign_verificacert,  sign_file,  sign_verificacert_ip,  sign_verificacert_user,  sign_verificacert_date,  concat_ws('|', inf_consecutivo, inf_hash, inf_numerocontrato, inf_doccontratista, inf_nombrecontratista, inf_intersup, inf_nombre) AS hashfirmado";
$proto0["m_strFrom"] = "FROM informe_intersup";
$proto0["m_strWhere"] = "(sign_file = 2)";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "sign_file = 2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sign_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 2";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto6["m_sql"] = "inf_id";
$proto6["m_srcTableName"] = "informe_intersup4";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "informe_intersup4";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto10["m_sql"] = "id_cont_fk";
$proto10["m_srcTableName"] = "informe_intersup4";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "id_cont_fk2";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto12["m_sql"] = "inf_consecutivo";
$proto12["m_srcTableName"] = "informe_intersup4";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_hash",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto14["m_sql"] = "inf_hash";
$proto14["m_srcTableName"] = "informe_intersup4";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_estado",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto16["m_sql"] = "inf_estado";
$proto16["m_srcTableName"] = "informe_intersup4";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechapresenta",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto18["m_sql"] = "inf_fechapresenta";
$proto18["m_srcTableName"] = "informe_intersup4";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_periodicidad",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto20["m_sql"] = "inf_periodicidad";
$proto20["m_srcTableName"] = "informe_intersup4";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto22["m_sql"] = "inf_fecharep_i";
$proto22["m_srcTableName"] = "informe_intersup4";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto24["m_sql"] = "inf_fecharep_f";
$proto24["m_srcTableName"] = "informe_intersup4";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_numerocontrato",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto26["m_sql"] = "inf_numerocontrato";
$proto26["m_srcTableName"] = "informe_intersup4";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_anio",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto28["m_sql"] = "inf_anio";
$proto28["m_srcTableName"] = "informe_intersup4";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_prenum",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto30["m_sql"] = "inf_prenum";
$proto30["m_srcTableName"] = "informe_intersup4";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_doccontratista",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto32["m_sql"] = "inf_doccontratista";
$proto32["m_srcTableName"] = "informe_intersup4";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombrecontratista",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto34["m_sql"] = "inf_nombrecontratista";
$proto34["m_srcTableName"] = "informe_intersup4";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto36["m_sql"] = "inf_valorcontrato";
$proto36["m_srcTableName"] = "informe_intersup4";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_adicionreduc",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto38["m_sql"] = "inf_adicionreduc";
$proto38["m_srcTableName"] = "informe_intersup4";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cdp",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto40["m_sql"] = "inf_cdp";
$proto40["m_srcTableName"] = "informe_intersup4";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rp",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto42["m_sql"] = "inf_rp";
$proto42["m_srcTableName"] = "informe_intersup4";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubrocode",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto44["m_sql"] = "inf_rubrocode";
$proto44["m_srcTableName"] = "informe_intersup4";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_rubroname",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto46["m_sql"] = "inf_rubroname";
$proto46["m_srcTableName"] = "informe_intersup4";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_objeto",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto48["m_sql"] = "inf_objeto";
$proto48["m_srcTableName"] = "informe_intersup4";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechasuscripcion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto50["m_sql"] = "inf_fechasuscripcion";
$proto50["m_srcTableName"] = "informe_intersup4";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_i",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto52["m_sql"] = "inf_fechacont_i";
$proto52["m_srcTableName"] = "informe_intersup4";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fechacont_f",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto54["m_sql"] = "inf_fechacont_f";
$proto54["m_srcTableName"] = "informe_intersup4";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_plazo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto56["m_sql"] = "inf_plazo";
$proto56["m_srcTableName"] = "informe_intersup4";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_vigencia",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto58["m_sql"] = "inf_vigencia";
$proto58["m_srcTableName"] = "informe_intersup4";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_modificacionesplazo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto60["m_sql"] = "inf_modificacionesplazo";
$proto60["m_srcTableName"] = "informe_intersup4";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_intersup",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto62["m_sql"] = "inf_intersup";
$proto62["m_srcTableName"] = "informe_intersup4";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_nombre",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto64["m_sql"] = "inf_nombre";
$proto64["m_srcTableName"] = "informe_intersup4";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_cargo",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto66["m_sql"] = "inf_cargo";
$proto66["m_srcTableName"] = "informe_intersup4";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_dependencia",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto68["m_sql"] = "inf_dependencia";
$proto68["m_srcTableName"] = "informe_intersup4";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_avgejecucion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto70["m_sql"] = "inf_avgejecucion";
$proto70["m_srcTableName"] = "informe_intersup4";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_actividades",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto72["m_sql"] = "inf_actividades";
$proto72["m_srcTableName"] = "informe_intersup4";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto74["m_sql"] = "inf_declarainconf";
$proto74["m_srcTableName"] = "informe_intersup4";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_declarainconf_obs",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto76["m_sql"] = "inf_declarainconf_obs";
$proto76["m_srcTableName"] = "informe_intersup4";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto78["m_sql"] = "inf_incumplimiento";
$proto78["m_srcTableName"] = "informe_intersup4";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_incumplimiento_obs",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto80["m_sql"] = "inf_incumplimiento_obs";
$proto80["m_srcTableName"] = "informe_intersup4";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_otrosaspectostecnicos",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto82["m_sql"] = "inf_otrosaspectostecnicos";
$proto82["m_srcTableName"] = "informe_intersup4";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_recomyobserva",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto84["m_sql"] = "inf_recomyobserva";
$proto84["m_srcTableName"] = "informe_intersup4";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "file_verifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto86["m_sql"] = "file_verifica";
$proto86["m_srcTableName"] = "informe_intersup4";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_ultimopago",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto88["m_sql"] = "inf_ultimopago";
$proto88["m_srcTableName"] = "informe_intersup4";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto90["m_sql"] = "sys_date";
$proto90["m_srcTableName"] = "informe_intersup4";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_mail_a",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto92["m_sql"] = "inf_mail_a";
$proto92["m_srcTableName"] = "informe_intersup4";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_mail_b",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto94["m_sql"] = "inf_mail_b";
$proto94["m_srcTableName"] = "informe_intersup4";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "url_secop",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto96["m_sql"] = "url_secop";
$proto96["m_srcTableName"] = "informe_intersup4";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "num_poliza",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto98["m_sql"] = "num_poliza";
$proto98["m_srcTableName"] = "informe_intersup4";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "mun_ejec",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto100["m_sql"] = "mun_ejec";
$proto100["m_srcTableName"] = "informe_intersup4";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto102["m_sql"] = "cont_cesion";
$proto102["m_srcTableName"] = "informe_intersup4";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto104["m_sql"] = "cont_modifica";
$proto104["m_srcTableName"] = "informe_intersup4";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_inf",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto106["m_sql"] = "qty_inf";
$proto106["m_srcTableName"] = "informe_intersup4";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_inf_compare",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto108["m_sql"] = "qty_inf_compare";
$proto108["m_srcTableName"] = "informe_intersup4";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "qty_inf_verifica",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto110["m_sql"] = "qty_inf_verifica";
$proto110["m_srcTableName"] = "informe_intersup4";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_mail",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto112["m_sql"] = "cert_mail";
$proto112["m_srcTableName"] = "informe_intersup4";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto114["m_sql"] = "cert_file";
$proto114["m_srcTableName"] = "informe_intersup4";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
						$proto116=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto116["m_sql"] = "cert_date";
$proto116["m_srcTableName"] = "informe_intersup4";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "";
$obj = new SQLFieldListItem($proto116);

$proto0["m_fieldlist"][]=$obj;
						$proto118=array();
			$obj = new SQLField(array(
	"m_strName" => "cert_compare",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto118["m_sql"] = "cert_compare";
$proto118["m_srcTableName"] = "informe_intersup4";
$proto118["m_expr"]=$obj;
$proto118["m_alias"] = "";
$obj = new SQLFieldListItem($proto118);

$proto0["m_fieldlist"][]=$obj;
						$proto120=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_hash",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto120["m_sql"] = "sign_hash";
$proto120["m_srcTableName"] = "informe_intersup4";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "";
$obj = new SQLFieldListItem($proto120);

$proto0["m_fieldlist"][]=$obj;
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto122["m_sql"] = "sign_date";
$proto122["m_srcTableName"] = "informe_intersup4";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "";
$obj = new SQLFieldListItem($proto122);

$proto0["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_mailnot",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto124["m_sql"] = "sign_mailnot";
$proto124["m_srcTableName"] = "informe_intersup4";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto0["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto126["m_sql"] = "sign_verificacert";
$proto126["m_srcTableName"] = "informe_intersup4";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto0["m_fieldlist"][]=$obj;
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_file",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto128["m_sql"] = "sign_file";
$proto128["m_srcTableName"] = "informe_intersup4";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "";
$obj = new SQLFieldListItem($proto128);

$proto0["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_ip",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto130["m_sql"] = "sign_verificacert_ip";
$proto130["m_srcTableName"] = "informe_intersup4";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto0["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_user",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto132["m_sql"] = "sign_verificacert_user";
$proto132["m_srcTableName"] = "informe_intersup4";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto0["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "sign_verificacert_date",
	"m_strTable" => "informe_intersup",
	"m_srcTableName" => "informe_intersup4"
));

$proto134["m_sql"] = "sign_verificacert_date";
$proto134["m_srcTableName"] = "informe_intersup4";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto0["m_fieldlist"][]=$obj;
						$proto136=array();
			$proto137=array();
$proto137["m_functiontype"] = "SQLF_CUSTOM";
$proto137["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'|'"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_consecutivo"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_hash"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_numerocontrato"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_doccontratista"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_nombrecontratista"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_intersup"
));

$proto137["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "inf_nombre"
));

$proto137["m_arguments"][]=$obj;
$proto137["m_strFunctionName"] = "concat_ws";
$obj = new SQLFunctionCall($proto137);

$proto136["m_sql"] = "concat_ws('|', inf_consecutivo, inf_hash, inf_numerocontrato, inf_doccontratista, inf_nombrecontratista, inf_intersup, inf_nombre)";
$proto136["m_srcTableName"] = "informe_intersup4";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "hashfirmado";
$obj = new SQLFieldListItem($proto136);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto146=array();
$proto146["m_link"] = "SQLL_MAIN";
			$proto147=array();
$proto147["m_strName"] = "informe_intersup";
$proto147["m_srcTableName"] = "informe_intersup4";
$proto147["m_columns"] = array();
$proto147["m_columns"][] = "inf_id";
$proto147["m_columns"][] = "id_cont_fk";
$proto147["m_columns"][] = "inf_consecutivo";
$proto147["m_columns"][] = "inf_hash";
$proto147["m_columns"][] = "inf_estado";
$proto147["m_columns"][] = "inf_fechapresenta";
$proto147["m_columns"][] = "inf_periodicidad";
$proto147["m_columns"][] = "inf_fecharep_i";
$proto147["m_columns"][] = "inf_fecharep_f";
$proto147["m_columns"][] = "inf_numerocontrato";
$proto147["m_columns"][] = "inf_anio";
$proto147["m_columns"][] = "inf_prenum";
$proto147["m_columns"][] = "inf_doccontratista";
$proto147["m_columns"][] = "inf_nombrecontratista";
$proto147["m_columns"][] = "inf_valorcontrato";
$proto147["m_columns"][] = "inf_adicionreduc";
$proto147["m_columns"][] = "inf_cdp";
$proto147["m_columns"][] = "inf_rp";
$proto147["m_columns"][] = "inf_rubrocode";
$proto147["m_columns"][] = "inf_rubroname";
$proto147["m_columns"][] = "inf_usopresupuestal";
$proto147["m_columns"][] = "inf_objeto";
$proto147["m_columns"][] = "inf_fechasuscripcion";
$proto147["m_columns"][] = "inf_fechacont_i";
$proto147["m_columns"][] = "inf_fechacont_f";
$proto147["m_columns"][] = "inf_plazo";
$proto147["m_columns"][] = "inf_vigencia";
$proto147["m_columns"][] = "inf_modificacionesplazo";
$proto147["m_columns"][] = "inf_intersup";
$proto147["m_columns"][] = "inf_nombre";
$proto147["m_columns"][] = "inf_cargo";
$proto147["m_columns"][] = "inf_dependencia";
$proto147["m_columns"][] = "inf_supervisoremail";
$proto147["m_columns"][] = "inf_avgejecucion";
$proto147["m_columns"][] = "inf_actividades";
$proto147["m_columns"][] = "inf_declarainconf";
$proto147["m_columns"][] = "inf_declarainconf_obs";
$proto147["m_columns"][] = "inf_incumplimiento";
$proto147["m_columns"][] = "inf_incumplimiento_obs";
$proto147["m_columns"][] = "inf_otrosaspectostecnicos";
$proto147["m_columns"][] = "inf_recomyobserva";
$proto147["m_columns"][] = "file_verifica";
$proto147["m_columns"][] = "inf_ultimopago";
$proto147["m_columns"][] = "sys_date";
$proto147["m_columns"][] = "inf_mail_a";
$proto147["m_columns"][] = "inf_mail_b";
$proto147["m_columns"][] = "url_secop";
$proto147["m_columns"][] = "num_poliza";
$proto147["m_columns"][] = "mun_ejec";
$proto147["m_columns"][] = "cont_cesion";
$proto147["m_columns"][] = "cont_modifica";
$proto147["m_columns"][] = "qty_inf";
$proto147["m_columns"][] = "qty_inf_compare";
$proto147["m_columns"][] = "qty_inf_verifica";
$proto147["m_columns"][] = "qty_inf_procesa";
$proto147["m_columns"][] = "cert_process";
$proto147["m_columns"][] = "cert_modalidad";
$proto147["m_columns"][] = "cert_mes";
$proto147["m_columns"][] = "cert_msj";
$proto147["m_columns"][] = "cert_mail";
$proto147["m_columns"][] = "cert_file";
$proto147["m_columns"][] = "cert_date";
$proto147["m_columns"][] = "cert_compare";
$proto147["m_columns"][] = "sign_hash";
$proto147["m_columns"][] = "sign_date";
$proto147["m_columns"][] = "sign_mailnot";
$proto147["m_columns"][] = "sign_verificacert";
$proto147["m_columns"][] = "sign_file";
$proto147["m_columns"][] = "sign_verificacert_ip";
$proto147["m_columns"][] = "sign_verificacert_user";
$proto147["m_columns"][] = "sign_verificacert_date";
$proto147["m_columns"][] = "inf_msj";
$proto147["m_columns"][] = "supa_idusrglobal_fk";
$proto147["m_columns"][] = "supa_documento_id";
$proto147["m_columns"][] = "supa_nombres";
$proto147["m_columns"][] = "supa_apellidos";
$proto147["m_columns"][] = "supa_cargo_id";
$proto147["m_columns"][] = "supa_dependencia_id";
$proto147["m_columns"][] = "supa_email";
$proto147["m_columns"][] = "supa_fecha";
$proto147["m_columns"][] = "supb_idusrglobal_fk";
$proto147["m_columns"][] = "supb_documento_id";
$proto147["m_columns"][] = "supb_nombres";
$proto147["m_columns"][] = "supb_apellidos";
$proto147["m_columns"][] = "supb_cargo_id";
$proto147["m_columns"][] = "supb_dependencia_id";
$proto147["m_columns"][] = "supb_email";
$proto147["m_columns"][] = "supb_fecha";
$proto147["m_columns"][] = "num_sup";
$obj = new SQLTable($proto147);

$proto146["m_table"] = $obj;
$proto146["m_sql"] = "informe_intersup";
$proto146["m_alias"] = "";
$proto146["m_srcTableName"] = "informe_intersup4";
$proto148=array();
$proto148["m_sql"] = "";
$proto148["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto148["m_column"]=$obj;
$proto148["m_contained"] = array();
$proto148["m_strCase"] = "";
$proto148["m_havingmode"] = false;
$proto148["m_inBrackets"] = false;
$proto148["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto148);

$proto146["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto146);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup4";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup4 = createSqlQuery_informe_intersup4();


	
												;

																																																																		

$tdatainforme_intersup4[".sqlquery"] = $queryData_informe_intersup4;



include_once(getabspath("include/informe_intersup4_events.php"));
$tdatainforme_intersup4[".hasEvents"] = true;

?>