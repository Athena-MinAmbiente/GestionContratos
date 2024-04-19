<?php
$tdatacontrato_rp = array();
$tdatacontrato_rp[".searchableFields"] = array();
$tdatacontrato_rp[".ShortName"] = "contrato_rp";
$tdatacontrato_rp[".OwnerID"] = "";
$tdatacontrato_rp[".OriginalTable"] = "contrato_rp";


$tdatacontrato_rp[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_rp[".originalPagesByType"] = $tdatacontrato_rp[".pagesByType"];
$tdatacontrato_rp[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_rp[".originalPages"] = $tdatacontrato_rp[".pages"];
$tdatacontrato_rp[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_rp[".originalDefaultPages"] = $tdatacontrato_rp[".defaultPages"];

//	field labels
$fieldLabelscontrato_rp = array();
$fieldToolTipscontrato_rp = array();
$pageTitlescontrato_rp = array();
$placeHolderscontrato_rp = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_rp["Spanish"] = array();
	$fieldToolTipscontrato_rp["Spanish"] = array();
	$placeHolderscontrato_rp["Spanish"] = array();
	$pageTitlescontrato_rp["Spanish"] = array();
	$fieldLabelscontrato_rp["Spanish"]["rp_id"] = "Rp Id";
	$fieldToolTipscontrato_rp["Spanish"]["rp_id"] = "";
	$placeHolderscontrato_rp["Spanish"]["rp_id"] = "";
	$fieldLabelscontrato_rp["Spanish"]["id_cont_FK"] = "Id Cont FK";
	$fieldToolTipscontrato_rp["Spanish"]["id_cont_FK"] = "";
	$placeHolderscontrato_rp["Spanish"]["id_cont_FK"] = "";
	$fieldLabelscontrato_rp["Spanish"]["num_rp"] = "Número de RP";
	$fieldToolTipscontrato_rp["Spanish"]["num_rp"] = "";
	$placeHolderscontrato_rp["Spanish"]["num_rp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["fecha_rp"] = "Fecha de Registro";
	$fieldToolTipscontrato_rp["Spanish"]["fecha_rp"] = "";
	$placeHolderscontrato_rp["Spanish"]["fecha_rp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["avg_participacion"] = "% Participación";
	$fieldToolTipscontrato_rp["Spanish"]["avg_participacion"] = "";
	$placeHolderscontrato_rp["Spanish"]["avg_participacion"] = "";
	$fieldLabelscontrato_rp["Spanish"]["valor_participacion"] = "Valor participación";
	$fieldToolTipscontrato_rp["Spanish"]["valor_participacion"] = "";
	$placeHolderscontrato_rp["Spanish"]["valor_participacion"] = "";
	$fieldLabelscontrato_rp["Spanish"]["sys_last_upd"] = "Sys Last Upd";
	$fieldToolTipscontrato_rp["Spanish"]["sys_last_upd"] = "";
	$placeHolderscontrato_rp["Spanish"]["sys_last_upd"] = "";
	$fieldLabelscontrato_rp["Spanish"]["cdp"] = "CDP Asociado";
	$fieldToolTipscontrato_rp["Spanish"]["cdp"] = "";
	$placeHolderscontrato_rp["Spanish"]["cdp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["cont_nit_contra_ta"] = "NIT | Cédula";
	$fieldToolTipscontrato_rp["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHolderscontrato_rp["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelscontrato_rp["Spanish"]["dependencia"] = "Dependencia";
	$fieldToolTipscontrato_rp["Spanish"]["dependencia"] = "";
	$placeHolderscontrato_rp["Spanish"]["dependencia"] = "";
	$fieldLabelscontrato_rp["Spanish"]["dependencia_desc"] = "Dependencia Desc";
	$fieldToolTipscontrato_rp["Spanish"]["dependencia_desc"] = "";
	$placeHolderscontrato_rp["Spanish"]["dependencia_desc"] = "";
	$fieldLabelscontrato_rp["Spanish"]["obs"] = "Obs";
	$fieldToolTipscontrato_rp["Spanish"]["obs"] = "";
	$placeHolderscontrato_rp["Spanish"]["obs"] = "";
	$fieldLabelscontrato_rp["Spanish"]["rubro"] = "Rubro";
	$fieldToolTipscontrato_rp["Spanish"]["rubro"] = "";
	$placeHolderscontrato_rp["Spanish"]["rubro"] = "";
	$fieldLabelscontrato_rp["Spanish"]["valor_total_rp"] = "Valor del RP";
	$fieldToolTipscontrato_rp["Spanish"]["valor_total_rp"] = "";
	$placeHolderscontrato_rp["Spanish"]["valor_total_rp"] = "";
	$fieldLabelscontrato_rp["Spanish"]["cont_razon_social"] = "Cont Razon Social";
	$fieldToolTipscontrato_rp["Spanish"]["cont_razon_social"] = "";
	$placeHolderscontrato_rp["Spanish"]["cont_razon_social"] = "";
	$fieldLabelscontrato_rp["Spanish"]["cid_fk"] = "Consultar RP";
	$fieldToolTipscontrato_rp["Spanish"]["cid_fk"] = "";
	$placeHolderscontrato_rp["Spanish"]["cid_fk"] = "";
	if (count($fieldToolTipscontrato_rp["Spanish"]))
		$tdatacontrato_rp[".isUseToolTips"] = true;
}


	$tdatacontrato_rp[".NCSearch"] = true;



$tdatacontrato_rp[".shortTableName"] = "contrato_rp";
$tdatacontrato_rp[".nSecOptions"] = 0;

$tdatacontrato_rp[".mainTableOwnerID"] = "";
$tdatacontrato_rp[".entityType"] = 0;
$tdatacontrato_rp[".connId"] = "dbct_at_localhost";


$tdatacontrato_rp[".strOriginalTableName"] = "contrato_rp";

	



$tdatacontrato_rp[".showAddInPopup"] = false;

$tdatacontrato_rp[".showEditInPopup"] = false;

$tdatacontrato_rp[".showViewInPopup"] = false;

$tdatacontrato_rp[".listAjax"] = false;
//	temporary
//$tdatacontrato_rp[".listAjax"] = false;

	$tdatacontrato_rp[".audit"] = true;

	$tdatacontrato_rp[".locking"] = true;


$pages = $tdatacontrato_rp[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_rp[".edit"] = true;
	$tdatacontrato_rp[".afterEditAction"] = 1;
	$tdatacontrato_rp[".closePopupAfterEdit"] = 1;
	$tdatacontrato_rp[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_rp[".add"] = true;
$tdatacontrato_rp[".afterAddAction"] = 1;
$tdatacontrato_rp[".closePopupAfterAdd"] = 1;
$tdatacontrato_rp[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_rp[".list"] = true;
}



$tdatacontrato_rp[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_rp[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_rp[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_rp[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_rp[".printFriendly"] = true;
}



$tdatacontrato_rp[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_rp[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_rp[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_rp[".isUseAjaxSuggest"] = true;



																																																																								

$tdatacontrato_rp[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_rp[".buttonsAdded"] = false;

$tdatacontrato_rp[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_rp[".isUseTimeForSearch"] = false;


$tdatacontrato_rp[".badgeColor"] = "bc8f8f";


$tdatacontrato_rp[".allSearchFields"] = array();
$tdatacontrato_rp[".filterFields"] = array();
$tdatacontrato_rp[".requiredSearchFields"] = array();

$tdatacontrato_rp[".googleLikeFields"] = array();
$tdatacontrato_rp[".googleLikeFields"][] = "rp_id";
$tdatacontrato_rp[".googleLikeFields"][] = "cid_fk";
$tdatacontrato_rp[".googleLikeFields"][] = "id_cont_FK";
$tdatacontrato_rp[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdatacontrato_rp[".googleLikeFields"][] = "cont_razon_social";
$tdatacontrato_rp[".googleLikeFields"][] = "num_rp";
$tdatacontrato_rp[".googleLikeFields"][] = "fecha_rp";
$tdatacontrato_rp[".googleLikeFields"][] = "dependencia";
$tdatacontrato_rp[".googleLikeFields"][] = "dependencia_desc";
$tdatacontrato_rp[".googleLikeFields"][] = "rubro";
$tdatacontrato_rp[".googleLikeFields"][] = "cdp";
$tdatacontrato_rp[".googleLikeFields"][] = "avg_participacion";
$tdatacontrato_rp[".googleLikeFields"][] = "valor_participacion";
$tdatacontrato_rp[".googleLikeFields"][] = "valor_total_rp";
$tdatacontrato_rp[".googleLikeFields"][] = "obs";
$tdatacontrato_rp[".googleLikeFields"][] = "sys_last_upd";



$tdatacontrato_rp[".tableType"] = "list";

$tdatacontrato_rp[".printerPageOrientation"] = 0;
$tdatacontrato_rp[".nPrinterPageScale"] = 100;

$tdatacontrato_rp[".nPrinterSplitRecords"] = 40;

$tdatacontrato_rp[".geocodingEnabled"] = false;










$tdatacontrato_rp[".pageSize"] = 20;

$tdatacontrato_rp[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_rp[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_rp[".orderindexes"] = array();


$tdatacontrato_rp[".sqlHead"] = "SELECT rp_id,  	cid_fk,  	id_cont_FK,  	cont_nit_contra_ta,  	cont_razon_social,  	num_rp,  	fecha_rp,  	dependencia,  	dependencia_desc,  	rubro,  	cdp,  	avg_participacion,  	valor_participacion,  	valor_total_rp,  	obs,  	sys_last_upd";
$tdatacontrato_rp[".sqlFrom"] = "FROM contrato_rp";
$tdatacontrato_rp[".sqlWhereExpr"] = "";
$tdatacontrato_rp[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_rp[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_rp[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_rp[".highlightSearchResults"] = true;

$tableKeyscontrato_rp = array();
$tableKeyscontrato_rp[] = "rp_id";
$tdatacontrato_rp[".Keys"] = $tableKeyscontrato_rp;


$tdatacontrato_rp[".hideMobileList"] = array();




//	rp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rp_id";
	$fdata["GoodName"] = "rp_id";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","rp_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "rp_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rp_id";

	
	
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


	$tdatacontrato_rp["rp_id"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "rp_id";
//	cid_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cid_fk";
	$fdata["GoodName"] = "cid_fk";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","cid_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cid_fk";

		$fdata["sourceSingle"] = "cid_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cid_fk";

	
	
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
	$edata["LookupTable"] = "q_info_compromisos";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"cdp", 'lookupF'=>"CDP");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_nit_contra_ta", 'lookupF'=>"Identificacion");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_razon_social", 'lookupF'=>"Nombre Razon Social");
	$edata["autoCompleteFields"][] = array('masterF'=>"dependencia", 'lookupF'=>"Dependencia");
	$edata["autoCompleteFields"][] = array('masterF'=>"dependencia_desc", 'lookupF'=>"Dependencia Descripcion");
	$edata["autoCompleteFields"][] = array('masterF'=>"fecha_rp", 'lookupF'=>"Fecha de Registro");
	$edata["autoCompleteFields"][] = array('masterF'=>"num_rp", 'lookupF'=>"Numero Documento");
	$edata["autoCompleteFields"][] = array('masterF'=>"obs", 'lookupF'=>"Observaciones");
	$edata["autoCompleteFields"][] = array('masterF'=>"rubro", 'lookupF'=>"Rubro");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "qsearch";

	

	
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


	$tdatacontrato_rp["cid_fk"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "cid_fk";
//	id_cont_FK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_cont_FK";
	$fdata["GoodName"] = "id_cont_FK";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","id_cont_FK");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_FK";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_FK";

	
	
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
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
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


	$tdatacontrato_rp["id_cont_FK"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "id_cont_FK";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","cont_nit_contra_ta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_nit_contra_ta";

		$fdata["sourceSingle"] = "cont_nit_contra_ta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta";

	
	
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


	$tdatacontrato_rp["cont_nit_contra_ta"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "cont_nit_contra_ta";
//	cont_razon_social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_razon_social";
	$fdata["GoodName"] = "cont_razon_social";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","cont_razon_social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_razon_social";

		$fdata["sourceSingle"] = "cont_razon_social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_razon_social";

	
	
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


	$tdatacontrato_rp["cont_razon_social"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "cont_razon_social";
//	num_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "num_rp";
	$fdata["GoodName"] = "num_rp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","num_rp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "num_rp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "num_rp";

	
	
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


	$tdatacontrato_rp["num_rp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "num_rp";
//	fecha_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "fecha_rp";
	$fdata["GoodName"] = "fecha_rp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","fecha_rp");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_rp";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_rp";

	
	
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


	$tdatacontrato_rp["fecha_rp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "fecha_rp";
//	dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dependencia";
	$fdata["GoodName"] = "dependencia";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dependencia";

		$fdata["sourceSingle"] = "dependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencia";

	
	
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


	$tdatacontrato_rp["dependencia"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "dependencia";
//	dependencia_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dependencia_desc";
	$fdata["GoodName"] = "dependencia_desc";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","dependencia_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dependencia_desc";

		$fdata["sourceSingle"] = "dependencia_desc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencia_desc";

	
	
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


	$tdatacontrato_rp["dependencia_desc"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "dependencia_desc";
//	rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "rubro";
	$fdata["GoodName"] = "rubro";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rubro";

		$fdata["sourceSingle"] = "rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rubro";

	
	
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


	$tdatacontrato_rp["rubro"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "rubro";
//	cdp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cdp";
	$fdata["GoodName"] = "cdp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","cdp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cdp";

		$fdata["sourceSingle"] = "cdp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cdp";

	
	
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


	$tdatacontrato_rp["cdp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "cdp";
//	avg_participacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "avg_participacion";
	$fdata["GoodName"] = "avg_participacion";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","avg_participacion");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "avg_participacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avg_participacion";

	
	
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


	$tdatacontrato_rp["avg_participacion"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "avg_participacion";
//	valor_participacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "valor_participacion";
	$fdata["GoodName"] = "valor_participacion";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","valor_participacion");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_participacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_participacion";

	
	
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


	$tdatacontrato_rp["valor_participacion"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "valor_participacion";
//	valor_total_rp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "valor_total_rp";
	$fdata["GoodName"] = "valor_total_rp";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","valor_total_rp");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_total_rp";

		$fdata["sourceSingle"] = "valor_total_rp";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_total_rp";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
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


	$tdatacontrato_rp["valor_total_rp"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "valor_total_rp";
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "obs";

		$fdata["sourceSingle"] = "obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obs";

	
	
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


	$tdatacontrato_rp["obs"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "obs";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "contrato_rp";
	$fdata["Label"] = GetFieldLabel("contrato_rp","sys_last_upd");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_last_upd";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_upd";

	
	
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


	$tdatacontrato_rp["sys_last_upd"] = $fdata;
		$tdatacontrato_rp[".searchableFields"][] = "sys_last_upd";


$tables_data["contrato_rp"]=&$tdatacontrato_rp;
$field_labels["contrato_rp"] = &$fieldLabelscontrato_rp;
$fieldToolTips["contrato_rp"] = &$fieldToolTipscontrato_rp;
$placeHolders["contrato_rp"] = &$placeHolderscontrato_rp;
$page_titles["contrato_rp"] = &$pageTitlescontrato_rp;


changeTextControlsToDate( "contrato_rp" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_rp"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_rp"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_rp"][0] = $masterParams;
				$masterTablesData["contrato_rp"][0]["masterKeys"] = array();
	$masterTablesData["contrato_rp"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_rp"][0]["detailKeys"] = array();
	$masterTablesData["contrato_rp"][0]["detailKeys"][]="id_cont_FK";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_audit";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_audit";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_rp"][1] = $masterParams;
				$masterTablesData["contrato_rp"][1]["masterKeys"] = array();
	$masterTablesData["contrato_rp"][1]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_rp"][1]["detailKeys"] = array();
	$masterTablesData["contrato_rp"][1]["detailKeys"][]="id_cont_FK";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_rp()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rp_id,  	cid_fk,  	id_cont_FK,  	cont_nit_contra_ta,  	cont_razon_social,  	num_rp,  	fecha_rp,  	dependencia,  	dependencia_desc,  	rubro,  	cdp,  	avg_participacion,  	valor_participacion,  	valor_total_rp,  	obs,  	sys_last_upd";
$proto0["m_strFrom"] = "FROM contrato_rp";
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
	"m_strName" => "rp_id",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto6["m_sql"] = "rp_id";
$proto6["m_srcTableName"] = "contrato_rp";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cid_fk",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto8["m_sql"] = "cid_fk";
$proto8["m_srcTableName"] = "contrato_rp";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_FK",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto10["m_sql"] = "id_cont_FK";
$proto10["m_srcTableName"] = "contrato_rp";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto12["m_sql"] = "cont_nit_contra_ta";
$proto12["m_srcTableName"] = "contrato_rp";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_razon_social",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto14["m_sql"] = "cont_razon_social";
$proto14["m_srcTableName"] = "contrato_rp";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "num_rp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto16["m_sql"] = "num_rp";
$proto16["m_srcTableName"] = "contrato_rp";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_rp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto18["m_sql"] = "fecha_rp";
$proto18["m_srcTableName"] = "contrato_rp";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto20["m_sql"] = "dependencia";
$proto20["m_srcTableName"] = "contrato_rp";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_desc",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto22["m_sql"] = "dependencia_desc";
$proto22["m_srcTableName"] = "contrato_rp";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "rubro",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto24["m_sql"] = "rubro";
$proto24["m_srcTableName"] = "contrato_rp";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cdp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto26["m_sql"] = "cdp";
$proto26["m_srcTableName"] = "contrato_rp";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "avg_participacion",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto28["m_sql"] = "avg_participacion";
$proto28["m_srcTableName"] = "contrato_rp";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_participacion",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto30["m_sql"] = "valor_participacion";
$proto30["m_srcTableName"] = "contrato_rp";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_total_rp",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto32["m_sql"] = "valor_total_rp";
$proto32["m_srcTableName"] = "contrato_rp";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto34["m_sql"] = "obs";
$proto34["m_srcTableName"] = "contrato_rp";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "contrato_rp",
	"m_srcTableName" => "contrato_rp"
));

$proto36["m_sql"] = "sys_last_upd";
$proto36["m_srcTableName"] = "contrato_rp";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "contrato_rp";
$proto39["m_srcTableName"] = "contrato_rp";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "rp_id";
$proto39["m_columns"][] = "cid_fk";
$proto39["m_columns"][] = "id_cont_FK";
$proto39["m_columns"][] = "cont_nit_contra_ta";
$proto39["m_columns"][] = "cont_razon_social";
$proto39["m_columns"][] = "num_rp";
$proto39["m_columns"][] = "fecha_rp";
$proto39["m_columns"][] = "dependencia";
$proto39["m_columns"][] = "dependencia_desc";
$proto39["m_columns"][] = "rubro";
$proto39["m_columns"][] = "cdp";
$proto39["m_columns"][] = "avg_participacion";
$proto39["m_columns"][] = "valor_participacion";
$proto39["m_columns"][] = "valor_total_rp";
$proto39["m_columns"][] = "obs";
$proto39["m_columns"][] = "sys_last_upd";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "contrato_rp";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "contrato_rp";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_rp";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_rp = createSqlQuery_contrato_rp();


	
												;

																

$tdatacontrato_rp[".sqlquery"] = $queryData_contrato_rp;



$tdatacontrato_rp[".hasEvents"] = false;

?>