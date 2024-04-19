<?php
$tdatacontrato_planilla_liq = array();
$tdatacontrato_planilla_liq[".searchableFields"] = array();
$tdatacontrato_planilla_liq[".ShortName"] = "contrato_planilla_liq";
$tdatacontrato_planilla_liq[".OwnerID"] = "";
$tdatacontrato_planilla_liq[".OriginalTable"] = "contrato_planilla_liq";


$tdatacontrato_planilla_liq[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_planilla_liq[".originalPagesByType"] = $tdatacontrato_planilla_liq[".pagesByType"];
$tdatacontrato_planilla_liq[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_planilla_liq[".originalPages"] = $tdatacontrato_planilla_liq[".pages"];
$tdatacontrato_planilla_liq[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_planilla_liq[".originalDefaultPages"] = $tdatacontrato_planilla_liq[".defaultPages"];

//	field labels
$fieldLabelscontrato_planilla_liq = array();
$fieldToolTipscontrato_planilla_liq = array();
$pageTitlescontrato_planilla_liq = array();
$placeHolderscontrato_planilla_liq = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_planilla_liq["Spanish"] = array();
	$fieldToolTipscontrato_planilla_liq["Spanish"] = array();
	$placeHolderscontrato_planilla_liq["Spanish"] = array();
	$pageTitlescontrato_planilla_liq["Spanish"] = array();
	$fieldLabelscontrato_planilla_liq["Spanish"]["base_liq"] = "Base Liquidación (40%)";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["base_liq"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["base_liq"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["clase"] = "Clase";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["clase"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["clase"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["id_cont_fk"] = "ID";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["nombre"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["nombre"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["order_id"] = "Order Id";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["order_id"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["order_id"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["pago_mensual"] = "Pago Mensual programado";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["pago_mensual"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["pago_mensual"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["tipo_administradora"] = "Administradora";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["tipo_administradora"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["tipo_administradora"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["valor_avg"] = "Base %";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["valor_avg"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["valor_avg"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["valor_ref"] = "Cotización obligatoria";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["valor_ref"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["valor_ref"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["contrato_num"] = "Contrato";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["contrato_num"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["contrato_num"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["contrato_vigencia"] = "Vigencia";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["contrato_vigencia"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["contrato_vigencia"] = "";
	$fieldLabelscontrato_planilla_liq["Spanish"]["tipo_subsistema"] = "Subsistema";
	$fieldToolTipscontrato_planilla_liq["Spanish"]["tipo_subsistema"] = "";
	$placeHolderscontrato_planilla_liq["Spanish"]["tipo_subsistema"] = "";
	if (count($fieldToolTipscontrato_planilla_liq["Spanish"]))
		$tdatacontrato_planilla_liq[".isUseToolTips"] = true;
}


	$tdatacontrato_planilla_liq[".NCSearch"] = true;



$tdatacontrato_planilla_liq[".shortTableName"] = "contrato_planilla_liq";
$tdatacontrato_planilla_liq[".nSecOptions"] = 0;

$tdatacontrato_planilla_liq[".mainTableOwnerID"] = "";
$tdatacontrato_planilla_liq[".entityType"] = 0;
$tdatacontrato_planilla_liq[".connId"] = "dbct_at_localhost";


$tdatacontrato_planilla_liq[".strOriginalTableName"] = "contrato_planilla_liq";

	



$tdatacontrato_planilla_liq[".showAddInPopup"] = false;

$tdatacontrato_planilla_liq[".showEditInPopup"] = false;

$tdatacontrato_planilla_liq[".showViewInPopup"] = false;

$tdatacontrato_planilla_liq[".listAjax"] = false;
//	temporary
//$tdatacontrato_planilla_liq[".listAjax"] = false;

	$tdatacontrato_planilla_liq[".audit"] = false;

	$tdatacontrato_planilla_liq[".locking"] = false;


$pages = $tdatacontrato_planilla_liq[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_planilla_liq[".edit"] = true;
	$tdatacontrato_planilla_liq[".afterEditAction"] = 1;
	$tdatacontrato_planilla_liq[".closePopupAfterEdit"] = 1;
	$tdatacontrato_planilla_liq[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_planilla_liq[".add"] = true;
$tdatacontrato_planilla_liq[".afterAddAction"] = 1;
$tdatacontrato_planilla_liq[".closePopupAfterAdd"] = 1;
$tdatacontrato_planilla_liq[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_planilla_liq[".list"] = true;
}



$tdatacontrato_planilla_liq[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_planilla_liq[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_planilla_liq[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_planilla_liq[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_planilla_liq[".printFriendly"] = true;
}



$tdatacontrato_planilla_liq[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_planilla_liq[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_planilla_liq[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_planilla_liq[".isUseAjaxSuggest"] = true;



																																																

$tdatacontrato_planilla_liq[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_planilla_liq[".buttonsAdded"] = false;

$tdatacontrato_planilla_liq[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_planilla_liq[".isUseTimeForSearch"] = false;


$tdatacontrato_planilla_liq[".badgeColor"] = "7b68ee";


$tdatacontrato_planilla_liq[".allSearchFields"] = array();
$tdatacontrato_planilla_liq[".filterFields"] = array();
$tdatacontrato_planilla_liq[".requiredSearchFields"] = array();

$tdatacontrato_planilla_liq[".googleLikeFields"] = array();
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "order_id";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "contrato_num";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "contrato_vigencia";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "pago_mensual";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "base_liq";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "tipo_administradora";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "tipo_subsistema";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "clase";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "nombre";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "valor_avg";
$tdatacontrato_planilla_liq[".googleLikeFields"][] = "valor_ref";



$tdatacontrato_planilla_liq[".tableType"] = "list";

$tdatacontrato_planilla_liq[".printerPageOrientation"] = 0;
$tdatacontrato_planilla_liq[".nPrinterPageScale"] = 100;

$tdatacontrato_planilla_liq[".nPrinterSplitRecords"] = 40;

$tdatacontrato_planilla_liq[".geocodingEnabled"] = false;










$tdatacontrato_planilla_liq[".pageSize"] = 20;

$tdatacontrato_planilla_liq[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_planilla_liq[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_planilla_liq[".orderindexes"] = array();


$tdatacontrato_planilla_liq[".sqlHead"] = "SELECT order_id,  	id_cont_fk,  	contrato_num,  	contrato_vigencia,  	pago_mensual,  	base_liq,  	tipo_administradora,  	tipo_subsistema,  	clase,  	nombre,  	valor_avg,  	valor_ref";
$tdatacontrato_planilla_liq[".sqlFrom"] = "FROM contrato_planilla_liq";
$tdatacontrato_planilla_liq[".sqlWhereExpr"] = "";
$tdatacontrato_planilla_liq[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_planilla_liq[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_planilla_liq[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_planilla_liq[".highlightSearchResults"] = true;

$tableKeyscontrato_planilla_liq = array();
$tableKeyscontrato_planilla_liq[] = "order_id";
$tdatacontrato_planilla_liq[".Keys"] = $tableKeyscontrato_planilla_liq;


$tdatacontrato_planilla_liq[".hideMobileList"] = array();




//	order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "order_id";
	$fdata["GoodName"] = "order_id";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","order_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "order_id";

		$fdata["sourceSingle"] = "order_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_id";

	
	
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


	$tdatacontrato_planilla_liq["order_id"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "order_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["sourceSingle"] = "id_cont_fk";

	
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
	$edata["LookupTable"] = "q_001_dashboard";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"base_liq", 'lookupF'=>"cont_valorbasecotizacion");
	$edata["autoCompleteFields"][] = array('masterF'=>"contrato_num", 'lookupF'=>"CONTRATOID");
	$edata["autoCompleteFields"][] = array('masterF'=>"contrato_vigencia", 'lookupF'=>"VIGENCIA");
	$edata["autoCompleteFields"][] = array('masterF'=>"pago_mensual", 'lookupF'=>"cont_valormensual");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

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


	$tdatacontrato_planilla_liq["id_cont_fk"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "id_cont_fk";
//	contrato_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contrato_num";
	$fdata["GoodName"] = "contrato_num";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","contrato_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contrato_num";

		$fdata["sourceSingle"] = "contrato_num";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato_num";

	
	
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


	$tdatacontrato_planilla_liq["contrato_num"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "contrato_num";
//	contrato_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contrato_vigencia";
	$fdata["GoodName"] = "contrato_vigencia";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","contrato_vigencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contrato_vigencia";

		$fdata["sourceSingle"] = "contrato_vigencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contrato_vigencia";

	
	
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


	$tdatacontrato_planilla_liq["contrato_vigencia"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "contrato_vigencia";
//	pago_mensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pago_mensual";
	$fdata["GoodName"] = "pago_mensual";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","pago_mensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "pago_mensual";

		$fdata["sourceSingle"] = "pago_mensual";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pago_mensual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_planilla_liq["pago_mensual"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "pago_mensual";
//	base_liq
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "base_liq";
	$fdata["GoodName"] = "base_liq";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","base_liq");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "base_liq";

		$fdata["sourceSingle"] = "base_liq";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "base_liq";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_planilla_liq["base_liq"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "base_liq";
//	tipo_administradora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "tipo_administradora";
	$fdata["GoodName"] = "tipo_administradora";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","tipo_administradora");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_administradora";

		$fdata["sourceSingle"] = "tipo_administradora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_administradora";

	
	
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
	$edata["LookupTable"] = "tparam_administradora";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "adm_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre_adm";

	

	
	$edata["LookupOrderBy"] = "adm_id";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "tipo_subsistema";

	
	
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


	$tdatacontrato_planilla_liq["tipo_administradora"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "tipo_administradora";
//	tipo_subsistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_subsistema";
	$fdata["GoodName"] = "tipo_subsistema";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","tipo_subsistema");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tipo_subsistema";

		$fdata["sourceSingle"] = "tipo_subsistema";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_subsistema";

	
	
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
	$edata["LookupTable"] = "tparam_administradora_spa";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"clase", 'lookupF'=>"clase");
	$edata["autoCompleteFields"][] = array('masterF'=>"nombre", 'lookupF'=>"nombre");
	$edata["autoCompleteFields"][] = array('masterF'=>"valor_avg", 'lookupF'=>"valor_avg");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "spa_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "tipo_administradora", "lookup" => "adm_id_fk" );

	
	

	
	
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


	$tdatacontrato_planilla_liq["tipo_subsistema"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "tipo_subsistema";
//	clase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "clase";
	$fdata["GoodName"] = "clase";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","clase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "clase";

		$fdata["sourceSingle"] = "clase";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "clase";

	
	
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


	$tdatacontrato_planilla_liq["clase"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "clase";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

		$fdata["sourceSingle"] = "nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdatacontrato_planilla_liq["nombre"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "nombre";
//	valor_avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "valor_avg";
	$fdata["GoodName"] = "valor_avg";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","valor_avg");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_avg";

		$fdata["sourceSingle"] = "valor_avg";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_avg";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
	
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


	$tdatacontrato_planilla_liq["valor_avg"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "valor_avg";
//	valor_ref
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "valor_ref";
	$fdata["GoodName"] = "valor_ref";
	$fdata["ownerTable"] = "contrato_planilla_liq";
	$fdata["Label"] = GetFieldLabel("contrato_planilla_liq","valor_ref");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_ref";

		$fdata["sourceSingle"] = "valor_ref";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_ref";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_planilla_liq["valor_ref"] = $fdata;
		$tdatacontrato_planilla_liq[".searchableFields"][] = "valor_ref";


$tables_data["contrato_planilla_liq"]=&$tdatacontrato_planilla_liq;
$field_labels["contrato_planilla_liq"] = &$fieldLabelscontrato_planilla_liq;
$fieldToolTips["contrato_planilla_liq"] = &$fieldToolTipscontrato_planilla_liq;
$placeHolders["contrato_planilla_liq"] = &$placeHolderscontrato_planilla_liq;
$page_titles["contrato_planilla_liq"] = &$pageTitlescontrato_planilla_liq;


changeTextControlsToDate( "contrato_planilla_liq" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_planilla_liq"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_planilla_liq"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="q_bandejaentrada_supervisores";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="q_bandejaentrada_supervisores";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "q_bandejaentrada_supervisores";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_planilla_liq"][0] = $masterParams;
				$masterTablesData["contrato_planilla_liq"][0]["masterKeys"] = array();
	$masterTablesData["contrato_planilla_liq"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_planilla_liq"][0]["detailKeys"] = array();
	$masterTablesData["contrato_planilla_liq"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_planilla_liq()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "order_id,  	id_cont_fk,  	contrato_num,  	contrato_vigencia,  	pago_mensual,  	base_liq,  	tipo_administradora,  	tipo_subsistema,  	clase,  	nombre,  	valor_avg,  	valor_ref";
$proto0["m_strFrom"] = "FROM contrato_planilla_liq";
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
	"m_strName" => "order_id",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto6["m_sql"] = "order_id";
$proto6["m_srcTableName"] = "contrato_planilla_liq";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_planilla_liq";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contrato_num",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto10["m_sql"] = "contrato_num";
$proto10["m_srcTableName"] = "contrato_planilla_liq";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contrato_vigencia",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto12["m_sql"] = "contrato_vigencia";
$proto12["m_srcTableName"] = "contrato_planilla_liq";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pago_mensual",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto14["m_sql"] = "pago_mensual";
$proto14["m_srcTableName"] = "contrato_planilla_liq";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "base_liq",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto16["m_sql"] = "base_liq";
$proto16["m_srcTableName"] = "contrato_planilla_liq";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_administradora",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto18["m_sql"] = "tipo_administradora";
$proto18["m_srcTableName"] = "contrato_planilla_liq";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_subsistema",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto20["m_sql"] = "tipo_subsistema";
$proto20["m_srcTableName"] = "contrato_planilla_liq";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "clase",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto22["m_sql"] = "clase";
$proto22["m_srcTableName"] = "contrato_planilla_liq";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto24["m_sql"] = "nombre";
$proto24["m_srcTableName"] = "contrato_planilla_liq";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_avg",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto26["m_sql"] = "valor_avg";
$proto26["m_srcTableName"] = "contrato_planilla_liq";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_ref",
	"m_strTable" => "contrato_planilla_liq",
	"m_srcTableName" => "contrato_planilla_liq"
));

$proto28["m_sql"] = "valor_ref";
$proto28["m_srcTableName"] = "contrato_planilla_liq";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "contrato_planilla_liq";
$proto31["m_srcTableName"] = "contrato_planilla_liq";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "order_id";
$proto31["m_columns"][] = "id_cont_fk";
$proto31["m_columns"][] = "contrato_num";
$proto31["m_columns"][] = "contrato_vigencia";
$proto31["m_columns"][] = "pago_mensual";
$proto31["m_columns"][] = "base_liq";
$proto31["m_columns"][] = "tipo_administradora";
$proto31["m_columns"][] = "tipo_subsistema";
$proto31["m_columns"][] = "clase";
$proto31["m_columns"][] = "nombre";
$proto31["m_columns"][] = "valor_avg";
$proto31["m_columns"][] = "valor_ref";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "contrato_planilla_liq";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "contrato_planilla_liq";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_planilla_liq";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_planilla_liq = createSqlQuery_contrato_planilla_liq();


	
												;

												

$tdatacontrato_planilla_liq[".sqlquery"] = $queryData_contrato_planilla_liq;



include_once(getabspath("include/contrato_planilla_liq_events.php"));
$tdatacontrato_planilla_liq[".hasEvents"] = true;

?>