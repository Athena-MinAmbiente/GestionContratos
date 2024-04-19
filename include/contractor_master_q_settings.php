<?php
$tdatacontractor_master_q = array();
$tdatacontractor_master_q[".searchableFields"] = array();
$tdatacontractor_master_q[".ShortName"] = "contractor_master_q";
$tdatacontractor_master_q[".OwnerID"] = "";
$tdatacontractor_master_q[".OriginalTable"] = "contractor_master";


$tdatacontractor_master_q[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontractor_master_q[".originalPagesByType"] = $tdatacontractor_master_q[".pagesByType"];
$tdatacontractor_master_q[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontractor_master_q[".originalPages"] = $tdatacontractor_master_q[".pages"];
$tdatacontractor_master_q[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontractor_master_q[".originalDefaultPages"] = $tdatacontractor_master_q[".defaultPages"];

//	field labels
$fieldLabelscontractor_master_q = array();
$fieldToolTipscontractor_master_q = array();
$pageTitlescontractor_master_q = array();
$placeHolderscontractor_master_q = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontractor_master_q["Spanish"] = array();
	$fieldToolTipscontractor_master_q["Spanish"] = array();
	$placeHolderscontractor_master_q["Spanish"] = array();
	$pageTitlescontractor_master_q["Spanish"] = array();
	$fieldLabelscontractor_master_q["Spanish"]["contractor_id"] = "ID";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_id"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_id"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_type"] = "Tipo de documento";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_type"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_type"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_doc_id"] = "NIT / Documento";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_doc_id"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_doc_id"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_nombresfull"] = "Razón Social / Nombre";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_nombresfull"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_email"] = "Correo personal";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_email"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_email"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_email_mincit"] = "Correo institucional";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_email_mincit"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_address"] = "Dirección postal";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_address"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_address"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_phone"] = "Teléfono fijo";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_phone"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_phone"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_mobile"] = "Celular";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_mobile"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_mobile"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_city"] = "Ciudad residencia";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_city"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_city"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["bank_name"] = "Banco";
	$fieldToolTipscontractor_master_q["Spanish"]["bank_name"] = "";
	$placeHolderscontractor_master_q["Spanish"]["bank_name"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["bank_cta_type"] = "Tipo de cuenta";
	$fieldToolTipscontractor_master_q["Spanish"]["bank_cta_type"] = "";
	$placeHolderscontractor_master_q["Spanish"]["bank_cta_type"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["bank_cta_number"] = "Número de cuenta";
	$fieldToolTipscontractor_master_q["Spanish"]["bank_cta_number"] = "";
	$placeHolderscontractor_master_q["Spanish"]["bank_cta_number"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["groupid"] = "Groupid";
	$fieldToolTipscontractor_master_q["Spanish"]["groupid"] = "";
	$placeHolderscontractor_master_q["Spanish"]["groupid"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["active"] = "Estado";
	$fieldToolTipscontractor_master_q["Spanish"]["active"] = "";
	$placeHolderscontractor_master_q["Spanish"]["active"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["contractor_doc_dv"] = "Dígito de verificación";
	$fieldToolTipscontractor_master_q["Spanish"]["contractor_doc_dv"] = "";
	$placeHolderscontractor_master_q["Spanish"]["contractor_doc_dv"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["iva_regimen"] = "Régimen tributario";
	$fieldToolTipscontractor_master_q["Spanish"]["iva_regimen"] = "";
	$placeHolderscontractor_master_q["Spanish"]["iva_regimen"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["ct_fecha_nacimiento"] = "Fecha de nacimiento";
	$fieldToolTipscontractor_master_q["Spanish"]["ct_fecha_nacimiento"] = "";
	$placeHolderscontractor_master_q["Spanish"]["ct_fecha_nacimiento"] = "";
	$fieldLabelscontractor_master_q["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipscontractor_master_q["Spanish"]["nombres"] = "";
	$placeHolderscontractor_master_q["Spanish"]["nombres"] = "";
	if (count($fieldToolTipscontractor_master_q["Spanish"]))
		$tdatacontractor_master_q[".isUseToolTips"] = true;
}


	$tdatacontractor_master_q[".NCSearch"] = true;


	$tdatacontractor_master_q[".scrollGridBody"] = true;

$tdatacontractor_master_q[".shortTableName"] = "contractor_master_q";
$tdatacontractor_master_q[".nSecOptions"] = 0;

$tdatacontractor_master_q[".mainTableOwnerID"] = "";
$tdatacontractor_master_q[".entityType"] = 1;
$tdatacontractor_master_q[".connId"] = "dbct_at_localhost";


$tdatacontractor_master_q[".strOriginalTableName"] = "contractor_master";

	



$tdatacontractor_master_q[".showAddInPopup"] = false;

$tdatacontractor_master_q[".showEditInPopup"] = false;

$tdatacontractor_master_q[".showViewInPopup"] = false;

$tdatacontractor_master_q[".listAjax"] = false;
//	temporary
//$tdatacontractor_master_q[".listAjax"] = false;

	$tdatacontractor_master_q[".audit"] = true;

	$tdatacontractor_master_q[".locking"] = true;


$pages = $tdatacontractor_master_q[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontractor_master_q[".edit"] = true;
	$tdatacontractor_master_q[".afterEditAction"] = 1;
	$tdatacontractor_master_q[".closePopupAfterEdit"] = 1;
	$tdatacontractor_master_q[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontractor_master_q[".add"] = true;
$tdatacontractor_master_q[".afterAddAction"] = 1;
$tdatacontractor_master_q[".closePopupAfterAdd"] = 1;
$tdatacontractor_master_q[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontractor_master_q[".list"] = true;
}



$tdatacontractor_master_q[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontractor_master_q[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontractor_master_q[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontractor_master_q[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontractor_master_q[".printFriendly"] = true;
}



$tdatacontractor_master_q[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontractor_master_q[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontractor_master_q[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontractor_master_q[".isUseAjaxSuggest"] = true;



		
																							

$tdatacontractor_master_q[".ajaxCodeSnippetAdded"] = false;

$tdatacontractor_master_q[".buttonsAdded"] = true;

$tdatacontractor_master_q[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacontractor_master_q[".isUseTimeForSearch"] = false;


$tdatacontractor_master_q[".badgeColor"] = "CFAE83";


$tdatacontractor_master_q[".allSearchFields"] = array();
$tdatacontractor_master_q[".filterFields"] = array();
$tdatacontractor_master_q[".requiredSearchFields"] = array();

$tdatacontractor_master_q[".googleLikeFields"] = array();
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_id";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_type";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_doc_id";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_doc_dv";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_nombresfull";
$tdatacontractor_master_q[".googleLikeFields"][] = "nombres";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_email";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_email_mincit";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_address";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_phone";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_mobile";
$tdatacontractor_master_q[".googleLikeFields"][] = "contractor_city";
$tdatacontractor_master_q[".googleLikeFields"][] = "bank_name";
$tdatacontractor_master_q[".googleLikeFields"][] = "bank_cta_type";
$tdatacontractor_master_q[".googleLikeFields"][] = "bank_cta_number";
$tdatacontractor_master_q[".googleLikeFields"][] = "groupid";
$tdatacontractor_master_q[".googleLikeFields"][] = "active";
$tdatacontractor_master_q[".googleLikeFields"][] = "iva_regimen";
$tdatacontractor_master_q[".googleLikeFields"][] = "ct_fecha_nacimiento";



$tdatacontractor_master_q[".tableType"] = "list";

$tdatacontractor_master_q[".printerPageOrientation"] = 0;
$tdatacontractor_master_q[".nPrinterPageScale"] = 100;

$tdatacontractor_master_q[".nPrinterSplitRecords"] = 40;

$tdatacontractor_master_q[".geocodingEnabled"] = false;




$tdatacontractor_master_q[".isDisplayLoading"] = true;






$tdatacontractor_master_q[".pageSize"] = 20;

$tdatacontractor_master_q[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontractor_master_q[".strOrderBy"] = $tstrOrderBy;

$tdatacontractor_master_q[".orderindexes"] = array();


$tdatacontractor_master_q[".sqlHead"] = "SELECT contractor_id,  contractor_type,  contractor_doc_id,  contractor_doc_dv,  contractor_nombresfull,  concat_ws(' -- ',contractor_doc_id,contractor_nombresfull)as nombres,  contractor_email,  contractor_email_mincit,  contractor_address,  contractor_phone,  contractor_mobile,  contractor_city,  bank_name,  bank_cta_type,  bank_cta_number,  groupid,  active,  iva_regimen,  ct_fecha_nacimiento";
$tdatacontractor_master_q[".sqlFrom"] = "FROM contractor_master";
$tdatacontractor_master_q[".sqlWhereExpr"] = "";
$tdatacontractor_master_q[".sqlTail"] = "";

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
$tdatacontractor_master_q[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontractor_master_q[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontractor_master_q[".arrGroupsPerPage"] = $arrGPP;

$tdatacontractor_master_q[".highlightSearchResults"] = true;

$tableKeyscontractor_master_q = array();
$tableKeyscontractor_master_q[] = "contractor_id";
$tableKeyscontractor_master_q[] = "contractor_doc_id";
$tdatacontractor_master_q[".Keys"] = $tableKeyscontractor_master_q;


$tdatacontractor_master_q[".hideMobileList"] = array();




//	contractor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "contractor_id";
	$fdata["GoodName"] = "contractor_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "contractor_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_id";

	
	
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


	$tdatacontractor_master_q["contractor_id"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_id";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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
	$edata["LookupTable"] = "tipo_docidentidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "nombre";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "contractor_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontractor_master_q["contractor_type"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_type";
//	contractor_doc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "contractor_doc_id";
	$fdata["GoodName"] = "contractor_doc_id";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_doc_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Documento ingresado ya existe!", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatacontractor_master_q["contractor_doc_id"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_doc_id";
//	contractor_doc_dv
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "contractor_doc_dv";
	$fdata["GoodName"] = "contractor_doc_dv";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_doc_dv");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_doc_dv";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_doc_dv";

	
	
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


	$tdatacontractor_master_q["contractor_doc_dv"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_doc_dv";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_nombresfull";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "contractor_nombresfull_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontractor_master_q["contractor_nombresfull"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_nombresfull";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","nombres");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombres";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat_ws(' -- ',contractor_doc_id,contractor_nombresfull)";

	
	
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


	$tdatacontractor_master_q["nombres"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "nombres";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatacontractor_master_q["contractor_email"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_email_mincit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email_mincit";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Correo %value% ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatacontractor_master_q["contractor_email_mincit"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_email_mincit";
//	contractor_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contractor_address";
	$fdata["GoodName"] = "contractor_address";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_address";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_address";

	
	
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


	$tdatacontractor_master_q["contractor_address"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_address";
//	contractor_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "contractor_phone";
	$fdata["GoodName"] = "contractor_phone";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_phone";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_phone";

	
	
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


	$tdatacontractor_master_q["contractor_phone"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_phone";
//	contractor_mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_mobile";
	$fdata["GoodName"] = "contractor_mobile";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_mobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_mobile";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_mobile";

	
	
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


	$tdatacontractor_master_q["contractor_mobile"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_mobile";
//	contractor_city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "contractor_city";
	$fdata["GoodName"] = "contractor_city";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","contractor_city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_city";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_city";

	
	
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
	$edata["LookupTable"] = "q_divipola";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontractor_master_q["contractor_city"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "contractor_city";
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","bank_name");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "bank_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_name";

	
	
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
	$edata["LookupTable"] = "tipo_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "banco_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nom_banco";

	

	
	$edata["LookupOrderBy"] = "nom_banco";

	
	
	
	

	
	
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


	$tdatacontractor_master_q["bank_name"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "bank_name";
//	bank_cta_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "bank_cta_type";
	$fdata["GoodName"] = "bank_cta_type";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","bank_cta_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "bank_cta_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_cta_type";

	
	
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
	$edata["LookupTable"] = "tipo_cta_banco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "cta_numero";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "des_cuenta";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatacontractor_master_q["bank_cta_type"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "bank_cta_type";
//	bank_cta_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "bank_cta_number";
	$fdata["GoodName"] = "bank_cta_number";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","bank_cta_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bank_cta_number";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_cta_number";

	
	
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


	$tdatacontractor_master_q["bank_cta_number"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "bank_cta_number";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","groupid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "groupid";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatacontractor_master_q["groupid"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "active";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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
	$edata["LookupTable"] = "global_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "id_status";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "status_name";

	

	
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


	$tdatacontractor_master_q["active"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "active";
//	iva_regimen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "iva_regimen";
	$fdata["GoodName"] = "iva_regimen";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","iva_regimen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "iva_regimen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iva_regimen";

	
	
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
	$edata["LookupTable"] = "tparam_tipo_ct_regimen_tribut";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "rt_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "Regimen_Tributario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatacontractor_master_q["iva_regimen"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "iva_regimen";
//	ct_fecha_nacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ct_fecha_nacimiento";
	$fdata["GoodName"] = "ct_fecha_nacimiento";
	$fdata["ownerTable"] = "contractor_master";
	$fdata["Label"] = GetFieldLabel("contractor_master_q","ct_fecha_nacimiento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "ct_fecha_nacimiento";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_fecha_nacimiento";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 0;

	
	
	
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


	$tdatacontractor_master_q["ct_fecha_nacimiento"] = $fdata;
		$tdatacontractor_master_q[".searchableFields"][] = "ct_fecha_nacimiento";


$tables_data["contractor_master_q"]=&$tdatacontractor_master_q;
$field_labels["contractor_master_q"] = &$fieldLabelscontractor_master_q;
$fieldToolTips["contractor_master_q"] = &$fieldToolTipscontractor_master_q;
$placeHolders["contractor_master_q"] = &$placeHolderscontractor_master_q;
$page_titles["contractor_master_q"] = &$pageTitlescontractor_master_q;


changeTextControlsToDate( "contractor_master_q" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contractor_master_q"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contractor_master_q"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contractor_master_q()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "contractor_id,  contractor_type,  contractor_doc_id,  contractor_doc_dv,  contractor_nombresfull,  concat_ws(' -- ',contractor_doc_id,contractor_nombresfull)as nombres,  contractor_email,  contractor_email_mincit,  contractor_address,  contractor_phone,  contractor_mobile,  contractor_city,  bank_name,  bank_cta_type,  bank_cta_number,  groupid,  active,  iva_regimen,  ct_fecha_nacimiento";
$proto0["m_strFrom"] = "FROM contractor_master";
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
	"m_strName" => "contractor_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto6["m_sql"] = "contractor_id";
$proto6["m_srcTableName"] = "contractor_master_q";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "contractor_master_q";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_id",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto10["m_sql"] = "contractor_doc_id";
$proto10["m_srcTableName"] = "contractor_master_q";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_doc_dv",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto12["m_sql"] = "contractor_doc_dv";
$proto12["m_srcTableName"] = "contractor_master_q";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto14["m_sql"] = "contractor_nombresfull";
$proto14["m_srcTableName"] = "contractor_master_q";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_CUSTOM";
$proto17["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "' -- '"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "contractor_doc_id"
));

$proto17["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "contractor_nombresfull"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "concat_ws";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "concat_ws(' -- ',contractor_doc_id,contractor_nombresfull)";
$proto16["m_srcTableName"] = "contractor_master_q";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "nombres";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto21["m_sql"] = "contractor_email";
$proto21["m_srcTableName"] = "contractor_master_q";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto23["m_sql"] = "contractor_email_mincit";
$proto23["m_srcTableName"] = "contractor_master_q";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_address",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto25["m_sql"] = "contractor_address";
$proto25["m_srcTableName"] = "contractor_master_q";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_phone",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto27["m_sql"] = "contractor_phone";
$proto27["m_srcTableName"] = "contractor_master_q";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_mobile",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto29["m_sql"] = "contractor_mobile";
$proto29["m_srcTableName"] = "contractor_master_q";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_city",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto31["m_sql"] = "contractor_city";
$proto31["m_srcTableName"] = "contractor_master_q";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto33["m_sql"] = "bank_name";
$proto33["m_srcTableName"] = "contractor_master_q";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_cta_type",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto35["m_sql"] = "bank_cta_type";
$proto35["m_srcTableName"] = "contractor_master_q";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_cta_number",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto37["m_sql"] = "bank_cta_number";
$proto37["m_srcTableName"] = "contractor_master_q";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto39["m_sql"] = "groupid";
$proto39["m_srcTableName"] = "contractor_master_q";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto41["m_sql"] = "active";
$proto41["m_srcTableName"] = "contractor_master_q";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "iva_regimen",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto43["m_sql"] = "iva_regimen";
$proto43["m_srcTableName"] = "contractor_master_q";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_fecha_nacimiento",
	"m_strTable" => "contractor_master",
	"m_srcTableName" => "contractor_master_q"
));

$proto45["m_sql"] = "ct_fecha_nacimiento";
$proto45["m_srcTableName"] = "contractor_master_q";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "contractor_master";
$proto48["m_srcTableName"] = "contractor_master_q";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "contractor_id";
$proto48["m_columns"][] = "contractor_type";
$proto48["m_columns"][] = "contractor_naturaleza";
$proto48["m_columns"][] = "contractor_doc_id";
$proto48["m_columns"][] = "contractor_doc_dv";
$proto48["m_columns"][] = "contractor_pwd";
$proto48["m_columns"][] = "contractor_nombresfull";
$proto48["m_columns"][] = "contractor_name";
$proto48["m_columns"][] = "contractor_lname";
$proto48["m_columns"][] = "contractor_image";
$proto48["m_columns"][] = "enlace_sigep";
$proto48["m_columns"][] = "contractor_email";
$proto48["m_columns"][] = "contractor_email_mincit";
$proto48["m_columns"][] = "contractor_address";
$proto48["m_columns"][] = "contractor_phone";
$proto48["m_columns"][] = "contractor_mobile";
$proto48["m_columns"][] = "contractor_city";
$proto48["m_columns"][] = "contractor_sup_jerarquico";
$proto48["m_columns"][] = "contractor_dependencia";
$proto48["m_columns"][] = "contractor_tiposangre";
$proto48["m_columns"][] = "bank_name";
$proto48["m_columns"][] = "bank_cta_type";
$proto48["m_columns"][] = "bank_cta_number";
$proto48["m_columns"][] = "iva_regimen";
$proto48["m_columns"][] = "factura";
$proto48["m_columns"][] = "actividad_economica";
$proto48["m_columns"][] = "responsabilidades";
$proto48["m_columns"][] = "sys_user";
$proto48["m_columns"][] = "sys_date";
$proto48["m_columns"][] = "sys_level";
$proto48["m_columns"][] = "sys_status";
$proto48["m_columns"][] = "sys_last_upd";
$proto48["m_columns"][] = "groupid";
$proto48["m_columns"][] = "active";
$proto48["m_columns"][] = "contractor_dependientes";
$proto48["m_columns"][] = "contractor_medicinapre_file";
$proto48["m_columns"][] = "contractor_picmonetaria_file";
$proto48["m_columns"][] = "contractor_decljur";
$proto48["m_columns"][] = "contractor_eps";
$proto48["m_columns"][] = "contractor_fondopensiones";
$proto48["m_columns"][] = "contractor_cajacompensacion";
$proto48["m_columns"][] = "contractor_arl";
$proto48["m_columns"][] = "ubica_dep";
$proto48["m_columns"][] = "ubica_extension";
$proto48["m_columns"][] = "dem_genero";
$proto48["m_columns"][] = "dem_ocupacion";
$proto48["m_columns"][] = "dem_profesion";
$proto48["m_columns"][] = "ct_fecha_nacimiento";
$proto48["m_columns"][] = "ct_fecha_nacimiento_mun";
$proto48["m_columns"][] = "ct_nacionalidad";
$proto48["m_columns"][] = "dem_edad";
$proto48["m_columns"][] = "dem_educacion";
$proto48["m_columns"][] = "dem_discapacidad";
$proto48["m_columns"][] = "emergencia";
$proto48["m_columns"][] = "terms_msj";
$proto48["m_columns"][] = "terms_acepta";
$proto48["m_columns"][] = "signature";
$proto48["m_columns"][] = "pin";
$proto48["m_columns"][] = "reset_token";
$proto48["m_columns"][] = "reset_date";
$proto48["m_columns"][] = "reset_token1";
$proto48["m_columns"][] = "reset_date1";
$proto48["m_columns"][] = "fp_code";
$proto48["m_columns"][] = "fp_fecha";
$proto48["m_columns"][] = "fp_file";
$proto48["m_columns"][] = "sys_update";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "contractor_master";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "contractor_master_q";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contractor_master_q";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contractor_master_q = createSqlQuery_contractor_master_q();


	
												;

																			

$tdatacontractor_master_q[".sqlquery"] = $queryData_contractor_master_q;



include_once(getabspath("include/contractor_master_q_events.php"));
$tdatacontractor_master_q[".hasEvents"] = true;

?>