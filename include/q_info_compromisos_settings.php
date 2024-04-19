<?php
$tdataq_info_compromisos = array();
$tdataq_info_compromisos[".searchableFields"] = array();
$tdataq_info_compromisos[".ShortName"] = "q_info_compromisos";
$tdataq_info_compromisos[".OwnerID"] = "";
$tdataq_info_compromisos[".OriginalTable"] = "q_info_compromisos";


$tdataq_info_compromisos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataq_info_compromisos[".originalPagesByType"] = $tdataq_info_compromisos[".pagesByType"];
$tdataq_info_compromisos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataq_info_compromisos[".originalPages"] = $tdataq_info_compromisos[".pages"];
$tdataq_info_compromisos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataq_info_compromisos[".originalDefaultPages"] = $tdataq_info_compromisos[".defaultPages"];

//	field labels
$fieldLabelsq_info_compromisos = array();
$fieldToolTipsq_info_compromisos = array();
$pageTitlesq_info_compromisos = array();
$placeHoldersq_info_compromisos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_info_compromisos["Spanish"] = array();
	$fieldToolTipsq_info_compromisos["Spanish"] = array();
	$placeHoldersq_info_compromisos["Spanish"] = array();
	$pageTitlesq_info_compromisos["Spanish"] = array();
	$fieldLabelsq_info_compromisos["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsq_info_compromisos["Spanish"]["CDP"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["CDP"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["CID"] = "CID";
	$fieldToolTipsq_info_compromisos["Spanish"]["CID"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["CID"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Dependencia"] = "Dependencia";
	$fieldToolTipsq_info_compromisos["Spanish"]["Dependencia"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Dependencia"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Dependencia_Descripcion"] = "Dependencia Descripcion";
	$fieldToolTipsq_info_compromisos["Spanish"]["Dependencia_Descripcion"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Dependencia_Descripcion"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Fecha_de_Registro"] = "Fecha de Registro";
	$fieldToolTipsq_info_compromisos["Spanish"]["Fecha_de_Registro"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Fecha_de_Registro"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Identificacion"] = "Identificacion";
	$fieldToolTipsq_info_compromisos["Spanish"]["Identificacion"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Identificacion"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Nombre_Razon_Social"] = "Nombre Razon Social";
	$fieldToolTipsq_info_compromisos["Spanish"]["Nombre_Razon_Social"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Nombre_Razon_Social"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Numero_Documento"] = "Numero Documento";
	$fieldToolTipsq_info_compromisos["Spanish"]["Numero_Documento"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Numero_Documento"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Observaciones"] = "Observaciones";
	$fieldToolTipsq_info_compromisos["Spanish"]["Observaciones"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Observaciones"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["Rubro"] = "Rubro";
	$fieldToolTipsq_info_compromisos["Spanish"]["Rubro"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["Rubro"] = "";
	$fieldLabelsq_info_compromisos["Spanish"]["qsearch"] = "BUSCAR";
	$fieldToolTipsq_info_compromisos["Spanish"]["qsearch"] = "";
	$placeHoldersq_info_compromisos["Spanish"]["qsearch"] = "";
	if (count($fieldToolTipsq_info_compromisos["Spanish"]))
		$tdataq_info_compromisos[".isUseToolTips"] = true;
}


	$tdataq_info_compromisos[".NCSearch"] = true;



$tdataq_info_compromisos[".shortTableName"] = "q_info_compromisos";
$tdataq_info_compromisos[".nSecOptions"] = 0;

$tdataq_info_compromisos[".mainTableOwnerID"] = "";
$tdataq_info_compromisos[".entityType"] = 0;
$tdataq_info_compromisos[".connId"] = "dbsep_at_127_0_0_1";


$tdataq_info_compromisos[".strOriginalTableName"] = "q_info_compromisos";

	



$tdataq_info_compromisos[".showAddInPopup"] = false;

$tdataq_info_compromisos[".showEditInPopup"] = false;

$tdataq_info_compromisos[".showViewInPopup"] = false;

$tdataq_info_compromisos[".listAjax"] = false;
//	temporary
//$tdataq_info_compromisos[".listAjax"] = false;

	$tdataq_info_compromisos[".audit"] = true;

	$tdataq_info_compromisos[".locking"] = true;


$pages = $tdataq_info_compromisos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_info_compromisos[".edit"] = true;
	$tdataq_info_compromisos[".afterEditAction"] = 1;
	$tdataq_info_compromisos[".closePopupAfterEdit"] = 1;
	$tdataq_info_compromisos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_info_compromisos[".add"] = true;
$tdataq_info_compromisos[".afterAddAction"] = 1;
$tdataq_info_compromisos[".closePopupAfterAdd"] = 1;
$tdataq_info_compromisos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_info_compromisos[".list"] = true;
}



$tdataq_info_compromisos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_info_compromisos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_info_compromisos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_info_compromisos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_info_compromisos[".printFriendly"] = true;
}



$tdataq_info_compromisos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_info_compromisos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_info_compromisos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_info_compromisos[".isUseAjaxSuggest"] = true;



																								

$tdataq_info_compromisos[".ajaxCodeSnippetAdded"] = false;

$tdataq_info_compromisos[".buttonsAdded"] = false;

$tdataq_info_compromisos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_info_compromisos[".isUseTimeForSearch"] = false;


$tdataq_info_compromisos[".badgeColor"] = "00C2C5";


$tdataq_info_compromisos[".allSearchFields"] = array();
$tdataq_info_compromisos[".filterFields"] = array();
$tdataq_info_compromisos[".requiredSearchFields"] = array();

$tdataq_info_compromisos[".googleLikeFields"] = array();
$tdataq_info_compromisos[".googleLikeFields"][] = "CID";
$tdataq_info_compromisos[".googleLikeFields"][] = "Numero Documento";
$tdataq_info_compromisos[".googleLikeFields"][] = "CDP";
$tdataq_info_compromisos[".googleLikeFields"][] = "Fecha de Registro";
$tdataq_info_compromisos[".googleLikeFields"][] = "Identificacion";
$tdataq_info_compromisos[".googleLikeFields"][] = "Nombre Razon Social";
$tdataq_info_compromisos[".googleLikeFields"][] = "Dependencia";
$tdataq_info_compromisos[".googleLikeFields"][] = "Dependencia Descripcion";
$tdataq_info_compromisos[".googleLikeFields"][] = "Rubro";
$tdataq_info_compromisos[".googleLikeFields"][] = "Observaciones";
$tdataq_info_compromisos[".googleLikeFields"][] = "qsearch";



$tdataq_info_compromisos[".tableType"] = "list";

$tdataq_info_compromisos[".printerPageOrientation"] = 0;
$tdataq_info_compromisos[".nPrinterPageScale"] = 100;

$tdataq_info_compromisos[".nPrinterSplitRecords"] = 40;

$tdataq_info_compromisos[".geocodingEnabled"] = false;










$tdataq_info_compromisos[".pageSize"] = 20;

$tdataq_info_compromisos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_info_compromisos[".strOrderBy"] = $tstrOrderBy;

$tdataq_info_compromisos[".orderindexes"] = array();


$tdataq_info_compromisos[".sqlHead"] = "SELECT CID,  `Numero Documento`,  CDP,  `Fecha de Registro`,  Identificacion,  `Nombre Razon Social`,  Dependencia,  `Dependencia Descripcion`,  Rubro,  Observaciones,  qsearch";
$tdataq_info_compromisos[".sqlFrom"] = "FROM q_info_compromisos";
$tdataq_info_compromisos[".sqlWhereExpr"] = "";
$tdataq_info_compromisos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_info_compromisos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_info_compromisos[".arrGroupsPerPage"] = $arrGPP;

$tdataq_info_compromisos[".highlightSearchResults"] = true;

$tableKeysq_info_compromisos = array();
$tableKeysq_info_compromisos[] = "CID";
$tableKeysq_info_compromisos[] = "Identificacion";
$tableKeysq_info_compromisos[] = "Numero Documento";
$tdataq_info_compromisos[".Keys"] = $tableKeysq_info_compromisos;


$tdataq_info_compromisos[".hideMobileList"] = array();




//	CID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CID";
	$fdata["GoodName"] = "CID";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","CID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CID";

		$fdata["sourceSingle"] = "CID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CID";

	
	
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


	$tdataq_info_compromisos["CID"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "CID";
//	Numero Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Numero Documento";
	$fdata["GoodName"] = "Numero_Documento";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Numero_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Numero Documento";

		$fdata["sourceSingle"] = "Numero Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Numero Documento`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["Numero Documento"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Numero Documento";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CDP";

		$fdata["sourceSingle"] = "CDP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["CDP"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "CDP";
//	Fecha de Registro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Fecha de Registro";
	$fdata["GoodName"] = "Fecha_de_Registro";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Fecha_de_Registro");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Fecha de Registro";

		$fdata["sourceSingle"] = "Fecha de Registro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Fecha de Registro`";

	
	
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


	$tdataq_info_compromisos["Fecha de Registro"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Fecha de Registro";
//	Identificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Identificacion";
	$fdata["GoodName"] = "Identificacion";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Identificacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Identificacion";

		$fdata["sourceSingle"] = "Identificacion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Identificacion";

	
	
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


	$tdataq_info_compromisos["Identificacion"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Identificacion";
//	Nombre Razon Social
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Nombre Razon Social";
	$fdata["GoodName"] = "Nombre_Razon_Social";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Nombre_Razon_Social");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre Razon Social";

		$fdata["sourceSingle"] = "Nombre Razon Social";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nombre Razon Social`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["Nombre Razon Social"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Nombre Razon Social";
//	Dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Dependencia";
	$fdata["GoodName"] = "Dependencia";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia";

		$fdata["sourceSingle"] = "Dependencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Dependencia";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["Dependencia"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Dependencia";
//	Dependencia Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Dependencia Descripcion";
	$fdata["GoodName"] = "Dependencia_Descripcion";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Dependencia_Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Dependencia Descripcion";

		$fdata["sourceSingle"] = "Dependencia Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Dependencia Descripcion`";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["Dependencia Descripcion"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Dependencia Descripcion";
//	Rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Rubro";
	$fdata["GoodName"] = "Rubro";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Rubro";

		$fdata["sourceSingle"] = "Rubro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rubro";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["Rubro"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Rubro";
//	Observaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Observaciones";
	$fdata["GoodName"] = "Observaciones";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","Observaciones");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Observaciones";

		$fdata["sourceSingle"] = "Observaciones";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observaciones";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_info_compromisos["Observaciones"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "Observaciones";
//	qsearch
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "qsearch";
	$fdata["GoodName"] = "qsearch";
	$fdata["ownerTable"] = "q_info_compromisos";
	$fdata["Label"] = GetFieldLabel("q_info_compromisos","qsearch");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "qsearch";

		$fdata["sourceSingle"] = "qsearch";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qsearch";

	
	
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


	$tdataq_info_compromisos["qsearch"] = $fdata;
		$tdataq_info_compromisos[".searchableFields"][] = "qsearch";


$tables_data["q_info_compromisos"]=&$tdataq_info_compromisos;
$field_labels["q_info_compromisos"] = &$fieldLabelsq_info_compromisos;
$fieldToolTips["q_info_compromisos"] = &$fieldToolTipsq_info_compromisos;
$placeHolders["q_info_compromisos"] = &$placeHoldersq_info_compromisos;
$page_titles["q_info_compromisos"] = &$pageTitlesq_info_compromisos;


changeTextControlsToDate( "q_info_compromisos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_info_compromisos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_info_compromisos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_info_compromisos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CID,  `Numero Documento`,  CDP,  `Fecha de Registro`,  Identificacion,  `Nombre Razon Social`,  Dependencia,  `Dependencia Descripcion`,  Rubro,  Observaciones,  qsearch";
$proto0["m_strFrom"] = "FROM q_info_compromisos";
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
	"m_strName" => "CID",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto6["m_sql"] = "CID";
$proto6["m_srcTableName"] = "q_info_compromisos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Numero Documento",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto8["m_sql"] = "`Numero Documento`";
$proto8["m_srcTableName"] = "q_info_compromisos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto10["m_sql"] = "CDP";
$proto10["m_srcTableName"] = "q_info_compromisos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Fecha de Registro",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto12["m_sql"] = "`Fecha de Registro`";
$proto12["m_srcTableName"] = "q_info_compromisos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Identificacion",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto14["m_sql"] = "Identificacion";
$proto14["m_srcTableName"] = "q_info_compromisos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre Razon Social",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto16["m_sql"] = "`Nombre Razon Social`";
$proto16["m_srcTableName"] = "q_info_compromisos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto18["m_sql"] = "Dependencia";
$proto18["m_srcTableName"] = "q_info_compromisos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Dependencia Descripcion",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto20["m_sql"] = "`Dependencia Descripcion`";
$proto20["m_srcTableName"] = "q_info_compromisos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Rubro",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto22["m_sql"] = "Rubro";
$proto22["m_srcTableName"] = "q_info_compromisos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Observaciones",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto24["m_sql"] = "Observaciones";
$proto24["m_srcTableName"] = "q_info_compromisos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "qsearch",
	"m_strTable" => "q_info_compromisos",
	"m_srcTableName" => "q_info_compromisos"
));

$proto26["m_sql"] = "qsearch";
$proto26["m_srcTableName"] = "q_info_compromisos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "q_info_compromisos";
$proto29["m_srcTableName"] = "q_info_compromisos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "CID";
$proto29["m_columns"][] = "Numero Documento";
$proto29["m_columns"][] = "Fecha de Registro";
$proto29["m_columns"][] = "Dependencia";
$proto29["m_columns"][] = "Dependencia Descripcion";
$proto29["m_columns"][] = "Rubro";
$proto29["m_columns"][] = "Tipo Identificacion";
$proto29["m_columns"][] = "Identificacion";
$proto29["m_columns"][] = "Nombre Razon Social";
$proto29["m_columns"][] = "Valor Inicial";
$proto29["m_columns"][] = "Valor Actual";
$proto29["m_columns"][] = "CDP";
$proto29["m_columns"][] = "Observaciones";
$proto29["m_columns"][] = "qsearch";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "q_info_compromisos";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "q_info_compromisos";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_info_compromisos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_info_compromisos = createSqlQuery_q_info_compromisos();


	
												;

											

$tdataq_info_compromisos[".sqlquery"] = $queryData_q_info_compromisos;



$tdataq_info_compromisos[".hasEvents"] = false;

?>