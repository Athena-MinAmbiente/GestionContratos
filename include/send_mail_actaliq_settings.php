<?php
$tdatasend_mail_actaliq = array();
$tdatasend_mail_actaliq[".searchableFields"] = array();
$tdatasend_mail_actaliq[".ShortName"] = "send_mail_actaliq";
$tdatasend_mail_actaliq[".OwnerID"] = "";
$tdatasend_mail_actaliq[".OriginalTable"] = "q_ctrl_entrega_acta_liquidacion_001";


$tdatasend_mail_actaliq[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasend_mail_actaliq[".originalPagesByType"] = $tdatasend_mail_actaliq[".pagesByType"];
$tdatasend_mail_actaliq[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasend_mail_actaliq[".originalPages"] = $tdatasend_mail_actaliq[".pages"];
$tdatasend_mail_actaliq[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasend_mail_actaliq[".originalDefaultPages"] = $tdatasend_mail_actaliq[".defaultPages"];

//	field labels
$fieldLabelssend_mail_actaliq = array();
$fieldToolTipssend_mail_actaliq = array();
$pageTitlessend_mail_actaliq = array();
$placeHolderssend_mail_actaliq = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssend_mail_actaliq["Spanish"] = array();
	$fieldToolTipssend_mail_actaliq["Spanish"] = array();
	$placeHolderssend_mail_actaliq["Spanish"] = array();
	$pageTitlessend_mail_actaliq["Spanish"] = array();
	$fieldLabelssend_mail_actaliq["Spanish"]["Username"] = "Username";
	$fieldToolTipssend_mail_actaliq["Spanish"]["Username"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["Username"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["usr_email"] = "Usr Email";
	$fieldToolTipssend_mail_actaliq["Spanish"]["usr_email"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["usr_email"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["contractor_email"] = "Contractor Email";
	$fieldToolTipssend_mail_actaliq["Spanish"]["contractor_email"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["contractor_email"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["contractor_nombresfull"] = "Nombre | Razón Social";
	$fieldToolTipssend_mail_actaliq["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["cont_acta_liquidacion"] = "Cont Acta Liquidacion";
	$fieldToolTipssend_mail_actaliq["Spanish"]["cont_acta_liquidacion"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["cont_acta_liquidacion"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipssend_mail_actaliq["Spanish"]["cont_ano"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["cont_ano"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipssend_mail_actaliq["Spanish"]["cont_estado"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["cont_estado"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["cont_fecha_acta_liquidacion"] = "Fecha Acta Liquidacion";
	$fieldToolTipssend_mail_actaliq["Spanish"]["cont_fecha_acta_liquidacion"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["cont_fecha_acta_liquidacion"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["cont_fecha_inicio"] = "Fecha Inicio";
	$fieldToolTipssend_mail_actaliq["Spanish"]["cont_fecha_inicio"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["cont_fechafinal"] = "Fecha Final";
	$fieldToolTipssend_mail_actaliq["Spanish"]["cont_fechafinal"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["contractor_doc_id"] = "Documento";
	$fieldToolTipssend_mail_actaliq["Spanish"]["contractor_doc_id"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["contractor_email_mincit"] = "Contractor Email Mincit";
	$fieldToolTipssend_mail_actaliq["Spanish"]["contractor_email_mincit"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["dias_transcurridos_acta_liquidacion"] = "Dias Transcurridos Acta Liquidacion";
	$fieldToolTipssend_mail_actaliq["Spanish"]["dias_transcurridos_acta_liquidacion"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["dias_transcurridos_acta_liquidacion"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["dias_transcurridos_fechafinal"] = "Dias Transcurridos desde Fecha final";
	$fieldToolTipssend_mail_actaliq["Spanish"]["dias_transcurridos_fechafinal"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["dias_transcurridos_fechafinal"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["dpd_dsdpn_b"] = "Dependencia";
	$fieldToolTipssend_mail_actaliq["Spanish"]["dpd_dsdpn_b"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["dpd_dsdpn_b"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipssend_mail_actaliq["Spanish"]["id_cont"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["id_cont"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["NCONTRATO"] = "Numero de contrato";
	$fieldToolTipssend_mail_actaliq["Spanish"]["NCONTRATO"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["NCONTRATO"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["nomcar"] = "Nomcar";
	$fieldToolTipssend_mail_actaliq["Spanish"]["nomcar"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["nomcar"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["tiempo_transcurrido_acta_liquidacion"] = "Tiempo Transcurrido Acta Liquidacion";
	$fieldToolTipssend_mail_actaliq["Spanish"]["tiempo_transcurrido_acta_liquidacion"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["tiempo_transcurrido_acta_liquidacion"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["tiempo_transcurrido_fechafinal"] = "Tiempo Transcurrido desde Fecha final";
	$fieldToolTipssend_mail_actaliq["Spanish"]["tiempo_transcurrido_fechafinal"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["tiempo_transcurrido_fechafinal"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["usr_lname"] = "Apelidos Supervisor";
	$fieldToolTipssend_mail_actaliq["Spanish"]["usr_lname"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["usr_lname"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["usr_name"] = "Nombre supervisor";
	$fieldToolTipssend_mail_actaliq["Spanish"]["usr_name"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["usr_name"] = "";
	$fieldLabelssend_mail_actaliq["Spanish"]["usr_personalid"] = "Usr Personalid";
	$fieldToolTipssend_mail_actaliq["Spanish"]["usr_personalid"] = "";
	$placeHolderssend_mail_actaliq["Spanish"]["usr_personalid"] = "";
	if (count($fieldToolTipssend_mail_actaliq["Spanish"]))
		$tdatasend_mail_actaliq[".isUseToolTips"] = true;
}


	$tdatasend_mail_actaliq[".NCSearch"] = true;



$tdatasend_mail_actaliq[".shortTableName"] = "send_mail_actaliq";
$tdatasend_mail_actaliq[".nSecOptions"] = 0;

$tdatasend_mail_actaliq[".mainTableOwnerID"] = "";
$tdatasend_mail_actaliq[".entityType"] = 1;
$tdatasend_mail_actaliq[".connId"] = "dbct_at_localhost";


$tdatasend_mail_actaliq[".strOriginalTableName"] = "q_ctrl_entrega_acta_liquidacion_001";

	



$tdatasend_mail_actaliq[".showAddInPopup"] = false;

$tdatasend_mail_actaliq[".showEditInPopup"] = false;

$tdatasend_mail_actaliq[".showViewInPopup"] = false;

$tdatasend_mail_actaliq[".listAjax"] = false;
//	temporary
//$tdatasend_mail_actaliq[".listAjax"] = false;

	$tdatasend_mail_actaliq[".audit"] = false;

	$tdatasend_mail_actaliq[".locking"] = false;


$pages = $tdatasend_mail_actaliq[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasend_mail_actaliq[".edit"] = true;
	$tdatasend_mail_actaliq[".afterEditAction"] = 1;
	$tdatasend_mail_actaliq[".closePopupAfterEdit"] = 1;
	$tdatasend_mail_actaliq[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasend_mail_actaliq[".add"] = true;
$tdatasend_mail_actaliq[".afterAddAction"] = 1;
$tdatasend_mail_actaliq[".closePopupAfterAdd"] = 1;
$tdatasend_mail_actaliq[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasend_mail_actaliq[".list"] = true;
}



$tdatasend_mail_actaliq[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasend_mail_actaliq[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasend_mail_actaliq[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasend_mail_actaliq[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasend_mail_actaliq[".printFriendly"] = true;
}



$tdatasend_mail_actaliq[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasend_mail_actaliq[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasend_mail_actaliq[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasend_mail_actaliq[".isUseAjaxSuggest"] = true;



																								

$tdatasend_mail_actaliq[".ajaxCodeSnippetAdded"] = false;

$tdatasend_mail_actaliq[".buttonsAdded"] = false;

$tdatasend_mail_actaliq[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasend_mail_actaliq[".isUseTimeForSearch"] = false;


$tdatasend_mail_actaliq[".badgeColor"] = "5F9EA0";


$tdatasend_mail_actaliq[".allSearchFields"] = array();
$tdatasend_mail_actaliq[".filterFields"] = array();
$tdatasend_mail_actaliq[".requiredSearchFields"] = array();

$tdatasend_mail_actaliq[".googleLikeFields"] = array();
$tdatasend_mail_actaliq[".googleLikeFields"][] = "id_cont";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "NCONTRATO";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "cont_ano";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "usr_personalid";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "usr_name";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "usr_lname";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "Username";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "usr_email";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "contractor_doc_id";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "contractor_nombresfull";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "contractor_email";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "contractor_email_mincit";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "dpd_dsdpn_b";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "nomcar";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "cont_fecha_inicio";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "cont_fechafinal";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "cont_acta_liquidacion";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "cont_fecha_acta_liquidacion";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "dias_transcurridos_fechafinal";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "dias_transcurridos_acta_liquidacion";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "tiempo_transcurrido_fechafinal";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "tiempo_transcurrido_acta_liquidacion";
$tdatasend_mail_actaliq[".googleLikeFields"][] = "cont_estado";



$tdatasend_mail_actaliq[".tableType"] = "list";

$tdatasend_mail_actaliq[".printerPageOrientation"] = 0;
$tdatasend_mail_actaliq[".nPrinterPageScale"] = 100;

$tdatasend_mail_actaliq[".nPrinterSplitRecords"] = 40;

$tdatasend_mail_actaliq[".geocodingEnabled"] = false;










$tdatasend_mail_actaliq[".pageSize"] = 20;

$tdatasend_mail_actaliq[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasend_mail_actaliq[".strOrderBy"] = $tstrOrderBy;

$tdatasend_mail_actaliq[".orderindexes"] = array();


$tdatasend_mail_actaliq[".sqlHead"] = "SELECT id_cont,  	NCONTRATO,  	cont_ano,  	usr_personalid,  	usr_name,  	usr_lname,  	Username,  	usr_email,  	contractor_doc_id,  	contractor_nombresfull,  	contractor_email,  	contractor_email_mincit,  	dpd_dsdpn_b,  	nomcar,  	cont_fecha_inicio,  	cont_fechafinal,  	cont_acta_liquidacion,  	cont_fecha_acta_liquidacion,  	dias_transcurridos_fechafinal,  	dias_transcurridos_acta_liquidacion,  	tiempo_transcurrido_fechafinal,  	tiempo_transcurrido_acta_liquidacion,  	cont_estado";
$tdatasend_mail_actaliq[".sqlFrom"] = "FROM q_ctrl_entrega_acta_liquidacion_001";
$tdatasend_mail_actaliq[".sqlWhereExpr"] = "";
$tdatasend_mail_actaliq[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatasend_mail_actaliq[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasend_mail_actaliq[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasend_mail_actaliq[".arrGroupsPerPage"] = $arrGPP;

$tdatasend_mail_actaliq[".highlightSearchResults"] = true;

$tableKeyssend_mail_actaliq = array();
$tdatasend_mail_actaliq[".Keys"] = $tableKeyssend_mail_actaliq;


$tdatasend_mail_actaliq[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","id_cont");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont";

		$fdata["sourceSingle"] = "id_cont";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont";

	
	
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


	$tdatasend_mail_actaliq["id_cont"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "id_cont";
//	NCONTRATO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NCONTRATO";
	$fdata["GoodName"] = "NCONTRATO";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","NCONTRATO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NCONTRATO";

		$fdata["sourceSingle"] = "NCONTRATO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NCONTRATO";

	
	
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


	$tdatasend_mail_actaliq["NCONTRATO"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "NCONTRATO";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","cont_ano");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "cont_ano";

		$fdata["sourceSingle"] = "cont_ano";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_ano";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "cont_acta_liquidacion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasend_mail_actaliq["cont_ano"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "cont_ano";
//	usr_personalid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "usr_personalid";
	$fdata["GoodName"] = "usr_personalid";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","usr_personalid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_personalid";

		$fdata["sourceSingle"] = "usr_personalid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_personalid";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatasend_mail_actaliq["usr_personalid"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "usr_personalid";
//	usr_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "usr_name";
	$fdata["GoodName"] = "usr_name";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","usr_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_name";

		$fdata["sourceSingle"] = "usr_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_name";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatasend_mail_actaliq["usr_name"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "usr_name";
//	usr_lname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "usr_lname";
	$fdata["GoodName"] = "usr_lname";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","usr_lname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_lname";

		$fdata["sourceSingle"] = "usr_lname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_lname";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatasend_mail_actaliq["usr_lname"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "usr_lname";
//	Username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Username";
	$fdata["GoodName"] = "Username";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","Username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Username";

		$fdata["sourceSingle"] = "Username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Username";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdatasend_mail_actaliq["Username"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "Username";
//	usr_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "usr_email";
	$fdata["GoodName"] = "usr_email";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","usr_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "usr_email";

		$fdata["sourceSingle"] = "usr_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usr_email";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasend_mail_actaliq["usr_email"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "usr_email";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","contractor_doc_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_id";

		$fdata["sourceSingle"] = "contractor_doc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_id";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatasend_mail_actaliq["contractor_doc_id"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "contractor_doc_id";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","contractor_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_nombresfull";

		$fdata["sourceSingle"] = "contractor_nombresfull";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatasend_mail_actaliq["contractor_nombresfull"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","contractor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email";

		$fdata["sourceSingle"] = "contractor_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdatasend_mail_actaliq["contractor_email"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","contractor_email_mincit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email_mincit";

		$fdata["sourceSingle"] = "contractor_email_mincit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email_mincit";

	
	
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


	$tdatasend_mail_actaliq["contractor_email_mincit"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "contractor_email_mincit";
//	dpd_dsdpn_b
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "dpd_dsdpn_b";
	$fdata["GoodName"] = "dpd_dsdpn_b";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","dpd_dsdpn_b");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dpd_dsdpn_b";

		$fdata["sourceSingle"] = "dpd_dsdpn_b";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dpd_dsdpn_b";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "cont_acta_liquidacion";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasend_mail_actaliq["dpd_dsdpn_b"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "dpd_dsdpn_b";
//	nomcar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "nomcar";
	$fdata["GoodName"] = "nomcar";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","nomcar");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomcar";

		$fdata["sourceSingle"] = "nomcar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomcar";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatasend_mail_actaliq["nomcar"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "nomcar";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","cont_fecha_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fecha_inicio";

		$fdata["sourceSingle"] = "cont_fecha_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_inicio";

	
	
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


	$tdatasend_mail_actaliq["cont_fecha_inicio"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","cont_fechafinal");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechafinal";

		$fdata["sourceSingle"] = "cont_fechafinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechafinal";

	
	
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


	$tdatasend_mail_actaliq["cont_fechafinal"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "cont_fechafinal";
//	cont_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_acta_liquidacion";
	$fdata["GoodName"] = "cont_acta_liquidacion";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","cont_acta_liquidacion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_acta_liquidacion";

		$fdata["sourceSingle"] = "cont_acta_liquidacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_acta_liquidacion";

	
	
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


	$tdatasend_mail_actaliq["cont_acta_liquidacion"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "cont_acta_liquidacion";
//	cont_fecha_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cont_fecha_acta_liquidacion";
	$fdata["GoodName"] = "cont_fecha_acta_liquidacion";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","cont_fecha_acta_liquidacion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fecha_acta_liquidacion";

		$fdata["sourceSingle"] = "cont_fecha_acta_liquidacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_acta_liquidacion";

	
	
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


	$tdatasend_mail_actaliq["cont_fecha_acta_liquidacion"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "cont_fecha_acta_liquidacion";
//	dias_transcurridos_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dias_transcurridos_fechafinal";
	$fdata["GoodName"] = "dias_transcurridos_fechafinal";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","dias_transcurridos_fechafinal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_transcurridos_fechafinal";

		$fdata["sourceSingle"] = "dias_transcurridos_fechafinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_transcurridos_fechafinal";

	
	
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


	$tdatasend_mail_actaliq["dias_transcurridos_fechafinal"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "dias_transcurridos_fechafinal";
//	dias_transcurridos_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "dias_transcurridos_acta_liquidacion";
	$fdata["GoodName"] = "dias_transcurridos_acta_liquidacion";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","dias_transcurridos_acta_liquidacion");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_transcurridos_acta_liquidacion";

		$fdata["sourceSingle"] = "dias_transcurridos_acta_liquidacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_transcurridos_acta_liquidacion";

	
	
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


	$tdatasend_mail_actaliq["dias_transcurridos_acta_liquidacion"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "dias_transcurridos_acta_liquidacion";
//	tiempo_transcurrido_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "tiempo_transcurrido_fechafinal";
	$fdata["GoodName"] = "tiempo_transcurrido_fechafinal";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","tiempo_transcurrido_fechafinal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tiempo_transcurrido_fechafinal";

		$fdata["sourceSingle"] = "tiempo_transcurrido_fechafinal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tiempo_transcurrido_fechafinal";

	
	
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
			$edata["EditParams"].= " maxlength=58";

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


	$tdatasend_mail_actaliq["tiempo_transcurrido_fechafinal"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "tiempo_transcurrido_fechafinal";
//	tiempo_transcurrido_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "tiempo_transcurrido_acta_liquidacion";
	$fdata["GoodName"] = "tiempo_transcurrido_acta_liquidacion";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","tiempo_transcurrido_acta_liquidacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tiempo_transcurrido_acta_liquidacion";

		$fdata["sourceSingle"] = "tiempo_transcurrido_acta_liquidacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tiempo_transcurrido_acta_liquidacion";

	
	
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
			$edata["EditParams"].= " maxlength=58";

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


	$tdatasend_mail_actaliq["tiempo_transcurrido_acta_liquidacion"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "tiempo_transcurrido_acta_liquidacion";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "q_ctrl_entrega_acta_liquidacion_001";
	$fdata["Label"] = GetFieldLabel("send_mail_actaliq","cont_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_estado";

		$fdata["sourceSingle"] = "cont_estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_estado";

	
	
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


	$tdatasend_mail_actaliq["cont_estado"] = $fdata;
		$tdatasend_mail_actaliq[".searchableFields"][] = "cont_estado";


$tables_data["send_mail_actaliq"]=&$tdatasend_mail_actaliq;
$field_labels["send_mail_actaliq"] = &$fieldLabelssend_mail_actaliq;
$fieldToolTips["send_mail_actaliq"] = &$fieldToolTipssend_mail_actaliq;
$placeHolders["send_mail_actaliq"] = &$placeHolderssend_mail_actaliq;
$page_titles["send_mail_actaliq"] = &$pageTitlessend_mail_actaliq;


changeTextControlsToDate( "send_mail_actaliq" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["send_mail_actaliq"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["send_mail_actaliq"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_send_mail_actaliq()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  	NCONTRATO,  	cont_ano,  	usr_personalid,  	usr_name,  	usr_lname,  	Username,  	usr_email,  	contractor_doc_id,  	contractor_nombresfull,  	contractor_email,  	contractor_email_mincit,  	dpd_dsdpn_b,  	nomcar,  	cont_fecha_inicio,  	cont_fechafinal,  	cont_acta_liquidacion,  	cont_fecha_acta_liquidacion,  	dias_transcurridos_fechafinal,  	dias_transcurridos_acta_liquidacion,  	tiempo_transcurrido_fechafinal,  	tiempo_transcurrido_acta_liquidacion,  	cont_estado";
$proto0["m_strFrom"] = "FROM q_ctrl_entrega_acta_liquidacion_001";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "id_cont",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "send_mail_actaliq";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NCONTRATO",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto8["m_sql"] = "NCONTRATO";
$proto8["m_srcTableName"] = "send_mail_actaliq";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto10["m_sql"] = "cont_ano";
$proto10["m_srcTableName"] = "send_mail_actaliq";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_personalid",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto12["m_sql"] = "usr_personalid";
$proto12["m_srcTableName"] = "send_mail_actaliq";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_name",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto14["m_sql"] = "usr_name";
$proto14["m_srcTableName"] = "send_mail_actaliq";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_lname",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto16["m_sql"] = "usr_lname";
$proto16["m_srcTableName"] = "send_mail_actaliq";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Username",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto18["m_sql"] = "Username";
$proto18["m_srcTableName"] = "send_mail_actaliq";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "usr_email",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto20["m_sql"] = "usr_email";
$proto20["m_srcTableName"] = "send_mail_actaliq";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto22["m_sql"] = "contractor_doc_id";
$proto22["m_srcTableName"] = "send_mail_actaliq";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto24["m_sql"] = "contractor_nombresfull";
$proto24["m_srcTableName"] = "send_mail_actaliq";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto26["m_sql"] = "contractor_email";
$proto26["m_srcTableName"] = "send_mail_actaliq";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto28["m_sql"] = "contractor_email_mincit";
$proto28["m_srcTableName"] = "send_mail_actaliq";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "dpd_dsdpn_b",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto30["m_sql"] = "dpd_dsdpn_b";
$proto30["m_srcTableName"] = "send_mail_actaliq";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "nomcar",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto32["m_sql"] = "nomcar";
$proto32["m_srcTableName"] = "send_mail_actaliq";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto34["m_sql"] = "cont_fecha_inicio";
$proto34["m_srcTableName"] = "send_mail_actaliq";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto36["m_sql"] = "cont_fechafinal";
$proto36["m_srcTableName"] = "send_mail_actaliq";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_acta_liquidacion",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto38["m_sql"] = "cont_acta_liquidacion";
$proto38["m_srcTableName"] = "send_mail_actaliq";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_acta_liquidacion",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto40["m_sql"] = "cont_fecha_acta_liquidacion";
$proto40["m_srcTableName"] = "send_mail_actaliq";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_transcurridos_fechafinal",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto42["m_sql"] = "dias_transcurridos_fechafinal";
$proto42["m_srcTableName"] = "send_mail_actaliq";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_transcurridos_acta_liquidacion",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto44["m_sql"] = "dias_transcurridos_acta_liquidacion";
$proto44["m_srcTableName"] = "send_mail_actaliq";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "tiempo_transcurrido_fechafinal",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto46["m_sql"] = "tiempo_transcurrido_fechafinal";
$proto46["m_srcTableName"] = "send_mail_actaliq";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "tiempo_transcurrido_acta_liquidacion",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto48["m_sql"] = "tiempo_transcurrido_acta_liquidacion";
$proto48["m_srcTableName"] = "send_mail_actaliq";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "q_ctrl_entrega_acta_liquidacion_001",
	"m_srcTableName" => "send_mail_actaliq"
));

$proto50["m_sql"] = "cont_estado";
$proto50["m_srcTableName"] = "send_mail_actaliq";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "q_ctrl_entrega_acta_liquidacion_001";
$proto53["m_srcTableName"] = "send_mail_actaliq";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_cont";
$proto53["m_columns"][] = "NCONTRATO";
$proto53["m_columns"][] = "cont_ano";
$proto53["m_columns"][] = "usr_personalid";
$proto53["m_columns"][] = "usr_name";
$proto53["m_columns"][] = "usr_lname";
$proto53["m_columns"][] = "Username";
$proto53["m_columns"][] = "usr_email";
$proto53["m_columns"][] = "contractor_doc_id";
$proto53["m_columns"][] = "contractor_nombresfull";
$proto53["m_columns"][] = "contractor_email";
$proto53["m_columns"][] = "contractor_email_mincit";
$proto53["m_columns"][] = "dpd_dsdpn_b";
$proto53["m_columns"][] = "nomcar";
$proto53["m_columns"][] = "cont_fecha_inicio";
$proto53["m_columns"][] = "cont_fechafinal";
$proto53["m_columns"][] = "cont_acta_liquidacion";
$proto53["m_columns"][] = "cont_fecha_acta_liquidacion";
$proto53["m_columns"][] = "dias_transcurridos_fechafinal";
$proto53["m_columns"][] = "dias_transcurridos_acta_liquidacion";
$proto53["m_columns"][] = "tiempo_transcurrido_fechafinal";
$proto53["m_columns"][] = "tiempo_transcurrido_acta_liquidacion";
$proto53["m_columns"][] = "cont_estado";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "q_ctrl_entrega_acta_liquidacion_001";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "send_mail_actaliq";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="send_mail_actaliq";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_send_mail_actaliq = createSqlQuery_send_mail_actaliq();


	
												;

																							

$tdatasend_mail_actaliq[".sqlquery"] = $queryData_send_mail_actaliq;



$tdatasend_mail_actaliq[".hasEvents"] = false;

?>