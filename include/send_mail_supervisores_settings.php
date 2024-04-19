<?php
$tdatasend_mail_supervisores = array();
$tdatasend_mail_supervisores[".searchableFields"] = array();
$tdatasend_mail_supervisores[".ShortName"] = "send_mail_supervisores";
$tdatasend_mail_supervisores[".OwnerID"] = "";
$tdatasend_mail_supervisores[".OriginalTable"] = "send_mail_supervisores";


$tdatasend_mail_supervisores[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasend_mail_supervisores[".originalPagesByType"] = $tdatasend_mail_supervisores[".pagesByType"];
$tdatasend_mail_supervisores[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasend_mail_supervisores[".originalPages"] = $tdatasend_mail_supervisores[".pages"];
$tdatasend_mail_supervisores[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasend_mail_supervisores[".originalDefaultPages"] = $tdatasend_mail_supervisores[".defaultPages"];

//	field labels
$fieldLabelssend_mail_supervisores = array();
$fieldToolTipssend_mail_supervisores = array();
$pageTitlessend_mail_supervisores = array();
$placeHolderssend_mail_supervisores = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelssend_mail_supervisores["Spanish"] = array();
	$fieldToolTipssend_mail_supervisores["Spanish"] = array();
	$placeHolderssend_mail_supervisores["Spanish"] = array();
	$pageTitlessend_mail_supervisores["Spanish"] = array();
	$fieldLabelssend_mail_supervisores["Spanish"]["send_date"] = "Send Date";
	$fieldToolTipssend_mail_supervisores["Spanish"]["send_date"] = "";
	$placeHolderssend_mail_supervisores["Spanish"]["send_date"] = "";
	$fieldLabelssend_mail_supervisores["Spanish"]["send_id"] = "Send Id";
	$fieldToolTipssend_mail_supervisores["Spanish"]["send_id"] = "";
	$placeHolderssend_mail_supervisores["Spanish"]["send_id"] = "";
	$fieldLabelssend_mail_supervisores["Spanish"]["send_msj"] = "Send Msj";
	$fieldToolTipssend_mail_supervisores["Spanish"]["send_msj"] = "";
	$placeHolderssend_mail_supervisores["Spanish"]["send_msj"] = "";
	$fieldLabelssend_mail_supervisores["Spanish"]["send_to"] = "Send To";
	$fieldToolTipssend_mail_supervisores["Spanish"]["send_to"] = "";
	$placeHolderssend_mail_supervisores["Spanish"]["send_to"] = "";
	if (count($fieldToolTipssend_mail_supervisores["Spanish"]))
		$tdatasend_mail_supervisores[".isUseToolTips"] = true;
}


	$tdatasend_mail_supervisores[".NCSearch"] = true;



$tdatasend_mail_supervisores[".shortTableName"] = "send_mail_supervisores";
$tdatasend_mail_supervisores[".nSecOptions"] = 0;

$tdatasend_mail_supervisores[".mainTableOwnerID"] = "";
$tdatasend_mail_supervisores[".entityType"] = 0;
$tdatasend_mail_supervisores[".connId"] = "dbct_at_localhost";


$tdatasend_mail_supervisores[".strOriginalTableName"] = "send_mail_supervisores";

	



$tdatasend_mail_supervisores[".showAddInPopup"] = false;

$tdatasend_mail_supervisores[".showEditInPopup"] = false;

$tdatasend_mail_supervisores[".showViewInPopup"] = false;

$tdatasend_mail_supervisores[".listAjax"] = false;
//	temporary
//$tdatasend_mail_supervisores[".listAjax"] = false;

	$tdatasend_mail_supervisores[".audit"] = false;

	$tdatasend_mail_supervisores[".locking"] = false;


$pages = $tdatasend_mail_supervisores[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasend_mail_supervisores[".edit"] = true;
	$tdatasend_mail_supervisores[".afterEditAction"] = 1;
	$tdatasend_mail_supervisores[".closePopupAfterEdit"] = 1;
	$tdatasend_mail_supervisores[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasend_mail_supervisores[".add"] = true;
$tdatasend_mail_supervisores[".afterAddAction"] = 1;
$tdatasend_mail_supervisores[".closePopupAfterAdd"] = 1;
$tdatasend_mail_supervisores[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasend_mail_supervisores[".list"] = true;
}



$tdatasend_mail_supervisores[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasend_mail_supervisores[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasend_mail_supervisores[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasend_mail_supervisores[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasend_mail_supervisores[".printFriendly"] = true;
}



$tdatasend_mail_supervisores[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasend_mail_supervisores[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasend_mail_supervisores[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasend_mail_supervisores[".isUseAjaxSuggest"] = true;



																								

$tdatasend_mail_supervisores[".ajaxCodeSnippetAdded"] = false;

$tdatasend_mail_supervisores[".buttonsAdded"] = false;

$tdatasend_mail_supervisores[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasend_mail_supervisores[".isUseTimeForSearch"] = false;


$tdatasend_mail_supervisores[".badgeColor"] = "6B8E23";


$tdatasend_mail_supervisores[".allSearchFields"] = array();
$tdatasend_mail_supervisores[".filterFields"] = array();
$tdatasend_mail_supervisores[".requiredSearchFields"] = array();

$tdatasend_mail_supervisores[".googleLikeFields"] = array();
$tdatasend_mail_supervisores[".googleLikeFields"][] = "send_id";
$tdatasend_mail_supervisores[".googleLikeFields"][] = "send_to";
$tdatasend_mail_supervisores[".googleLikeFields"][] = "send_msj";
$tdatasend_mail_supervisores[".googleLikeFields"][] = "send_date";



$tdatasend_mail_supervisores[".tableType"] = "list";

$tdatasend_mail_supervisores[".printerPageOrientation"] = 0;
$tdatasend_mail_supervisores[".nPrinterPageScale"] = 100;

$tdatasend_mail_supervisores[".nPrinterSplitRecords"] = 40;

$tdatasend_mail_supervisores[".geocodingEnabled"] = false;










$tdatasend_mail_supervisores[".pageSize"] = 20;

$tdatasend_mail_supervisores[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasend_mail_supervisores[".strOrderBy"] = $tstrOrderBy;

$tdatasend_mail_supervisores[".orderindexes"] = array();


$tdatasend_mail_supervisores[".sqlHead"] = "SELECT send_id,  	send_to,  	send_msj,  	send_date";
$tdatasend_mail_supervisores[".sqlFrom"] = "FROM send_mail_supervisores";
$tdatasend_mail_supervisores[".sqlWhereExpr"] = "";
$tdatasend_mail_supervisores[".sqlTail"] = "";

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
$tdatasend_mail_supervisores[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasend_mail_supervisores[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasend_mail_supervisores[".arrGroupsPerPage"] = $arrGPP;

$tdatasend_mail_supervisores[".highlightSearchResults"] = true;

$tableKeyssend_mail_supervisores = array();
$tableKeyssend_mail_supervisores[] = "send_id";
$tdatasend_mail_supervisores[".Keys"] = $tableKeyssend_mail_supervisores;


$tdatasend_mail_supervisores[".hideMobileList"] = array();




//	send_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "send_id";
	$fdata["GoodName"] = "send_id";
	$fdata["ownerTable"] = "send_mail_supervisores";
	$fdata["Label"] = GetFieldLabel("send_mail_supervisores","send_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "send_id";

		$fdata["sourceSingle"] = "send_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "send_id";

	
	
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


	$tdatasend_mail_supervisores["send_id"] = $fdata;
		$tdatasend_mail_supervisores[".searchableFields"][] = "send_id";
//	send_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "send_to";
	$fdata["GoodName"] = "send_to";
	$fdata["ownerTable"] = "send_mail_supervisores";
	$fdata["Label"] = GetFieldLabel("send_mail_supervisores","send_to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "send_to";

		$fdata["sourceSingle"] = "send_to";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "send_to";

	
	
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


	$tdatasend_mail_supervisores["send_to"] = $fdata;
		$tdatasend_mail_supervisores[".searchableFields"][] = "send_to";
//	send_msj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "send_msj";
	$fdata["GoodName"] = "send_msj";
	$fdata["ownerTable"] = "send_mail_supervisores";
	$fdata["Label"] = GetFieldLabel("send_mail_supervisores","send_msj");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "send_msj";

		$fdata["sourceSingle"] = "send_msj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "send_msj";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasend_mail_supervisores["send_msj"] = $fdata;
		$tdatasend_mail_supervisores[".searchableFields"][] = "send_msj";
//	send_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "send_date";
	$fdata["GoodName"] = "send_date";
	$fdata["ownerTable"] = "send_mail_supervisores";
	$fdata["Label"] = GetFieldLabel("send_mail_supervisores","send_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "send_date";

		$fdata["sourceSingle"] = "send_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "send_date";

	
	
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


	$tdatasend_mail_supervisores["send_date"] = $fdata;
		$tdatasend_mail_supervisores[".searchableFields"][] = "send_date";


$tables_data["send_mail_supervisores"]=&$tdatasend_mail_supervisores;
$field_labels["send_mail_supervisores"] = &$fieldLabelssend_mail_supervisores;
$fieldToolTips["send_mail_supervisores"] = &$fieldToolTipssend_mail_supervisores;
$placeHolders["send_mail_supervisores"] = &$placeHolderssend_mail_supervisores;
$page_titles["send_mail_supervisores"] = &$pageTitlessend_mail_supervisores;


changeTextControlsToDate( "send_mail_supervisores" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["send_mail_supervisores"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["send_mail_supervisores"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_send_mail_supervisores()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "send_id,  	send_to,  	send_msj,  	send_date";
$proto0["m_strFrom"] = "FROM send_mail_supervisores";
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
	"m_strName" => "send_id",
	"m_strTable" => "send_mail_supervisores",
	"m_srcTableName" => "send_mail_supervisores"
));

$proto6["m_sql"] = "send_id";
$proto6["m_srcTableName"] = "send_mail_supervisores";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "send_to",
	"m_strTable" => "send_mail_supervisores",
	"m_srcTableName" => "send_mail_supervisores"
));

$proto8["m_sql"] = "send_to";
$proto8["m_srcTableName"] = "send_mail_supervisores";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "send_msj",
	"m_strTable" => "send_mail_supervisores",
	"m_srcTableName" => "send_mail_supervisores"
));

$proto10["m_sql"] = "send_msj";
$proto10["m_srcTableName"] = "send_mail_supervisores";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "send_date",
	"m_strTable" => "send_mail_supervisores",
	"m_srcTableName" => "send_mail_supervisores"
));

$proto12["m_sql"] = "send_date";
$proto12["m_srcTableName"] = "send_mail_supervisores";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "send_mail_supervisores";
$proto15["m_srcTableName"] = "send_mail_supervisores";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "send_id";
$proto15["m_columns"][] = "send_to";
$proto15["m_columns"][] = "send_msj";
$proto15["m_columns"][] = "send_date";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "send_mail_supervisores";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "send_mail_supervisores";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="send_mail_supervisores";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_send_mail_supervisores = createSqlQuery_send_mail_supervisores();


	
												;

				

$tdatasend_mail_supervisores[".sqlquery"] = $queryData_send_mail_supervisores;



include_once(getabspath("include/send_mail_supervisores_events.php"));
$tdatasend_mail_supervisores[".hasEvents"] = true;

$query = &$queryData_send_mail_supervisores;
$table = "send_mail_supervisores";
// here goes EVENT_INIT_TABLE event
if( postvalue("ajaxMail") != false ){
$response = array("totalSent" => 0, "errors" => 0,"mailed" => 0);

// number of records to process per step
$recCount = postvalue("mail_per_step");

// starting record
$startRecord = intval(postvalue("ajaxstep"))*$recCount;

// name of the email field
$email_field = "usr_email";
$email_empresa = "contractor_nombresfull";

// sql query
$sql = "select * from q_ctrl_entrega_acta_liquidacion_001 limit ".$startRecord.",".$recCount;
$rs = DB::Query($sql);

// the main cycle where we perform our tasks

$bodymsj = "<!DOCTYPE html>
<html lang='es'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Acta de Liquidación de Contratos</title>
  <style>
    /* Estilos CSS para dar formato al contenido */
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      margin: 0;
      padding: 20px;
    }
    .container {
      max-width: 600px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1, p {
      margin-bottom: 20px;
    }
    .footer {
      margin-top: 20px;
      font-size: 14px;
      color: #555;
    }
    .link {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <!-- Contenedor principal -->
  <div class='container'>
    <!-- Encabezado -->
    <h1>Pendiente Entrega de Acta de Liquidación de Contratos</h1>
    <!-- Saludo -->
    <p>Cordial saludo,</p>
    <!-- Cuerpo del mensaje -->
    <p>Espero que al recibo de este mensaje le encuentre bien. La presente comunicación es para informarle que, hasta la fecha, se encuentra pendiente la entrega del acta de liquidación de contrato(s) bajo su supervisión.</p>
    <p>La correcta finalización y documentación de los contratos son procesos fundamentales para nuestra entidad. Solicito por favor, su colaboración para completar este paso crucial lo antes posible.</p>
    <p>Agradezco de antemano su atención y pronta acción en este asunto.</p>
    <!-- Enlace a la plataforma de contratos -->
    <p>Para más información, por favor consulte la plataforma de contratos ubicada en la siguiente URL: <a class='link' href='https://gestion.mincit.gov.co/Athena/GestionContratos/' target='_blank'>https://gestion.mincit.gov.co/Athena/GestionContratos/</a></p>
    <!-- Firma y despedida -->
    <div class='footer'>
      <p>Atentamente,</p>
      <p>Grupo de Contratos | Secretaría General</p>
      <p>Ministerio de Comercio, Industria y Turismo</p>
    </div>
  </div>
</body>
</html>";

while($data = $rs->fetchAssoc()){
$mail_params = array('to' => $data[$email_field], 'bcc' => 'agutierrezd@mincit.gov.co', 'subject' => "Pendiente Entrega de Acta de Liquidación de Contratos", 'htmlbody' => $bodymsj);

$mailed = runner_mail($mail_params);
if($mailed["mailed"])
$response["mailed"]++;
else
$response["errors"]++;
$response["totalSent"]++;
}
// return the response
echo my_json_encode($response);
exit();
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;
unset($query);
?>