<?php
$tdatatparam_numsup = array();
$tdatatparam_numsup[".searchableFields"] = array();
$tdatatparam_numsup[".ShortName"] = "tparam_numsup";
$tdatatparam_numsup[".OwnerID"] = "";
$tdatatparam_numsup[".OriginalTable"] = "tparam_numsup";


$tdatatparam_numsup[".pagesByType"] = my_json_decode( "{}" );
$tdatatparam_numsup[".originalPagesByType"] = $tdatatparam_numsup[".pagesByType"];
$tdatatparam_numsup[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatatparam_numsup[".originalPages"] = $tdatatparam_numsup[".pages"];
$tdatatparam_numsup[".defaultPages"] = my_json_decode( "{}" );
$tdatatparam_numsup[".originalDefaultPages"] = $tdatatparam_numsup[".defaultPages"];

//	field labels
$fieldLabelstparam_numsup = array();
$fieldToolTipstparam_numsup = array();
$pageTitlestparam_numsup = array();
$placeHolderstparam_numsup = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstparam_numsup["Spanish"] = array();
	$fieldToolTipstparam_numsup["Spanish"] = array();
	$placeHolderstparam_numsup["Spanish"] = array();
	$pageTitlestparam_numsup["Spanish"] = array();
	$fieldLabelstparam_numsup["Spanish"]["numsup"] = "Numsup";
	$fieldToolTipstparam_numsup["Spanish"]["numsup"] = "";
	$placeHolderstparam_numsup["Spanish"]["numsup"] = "";
	$fieldLabelstparam_numsup["Spanish"]["numsupid"] = "Numsupid";
	$fieldToolTipstparam_numsup["Spanish"]["numsupid"] = "";
	$placeHolderstparam_numsup["Spanish"]["numsupid"] = "";
	if (count($fieldToolTipstparam_numsup["Spanish"]))
		$tdatatparam_numsup[".isUseToolTips"] = true;
}


	$tdatatparam_numsup[".NCSearch"] = true;



$tdatatparam_numsup[".shortTableName"] = "tparam_numsup";
$tdatatparam_numsup[".nSecOptions"] = 0;

$tdatatparam_numsup[".mainTableOwnerID"] = "";
$tdatatparam_numsup[".entityType"] = 0;
$tdatatparam_numsup[".connId"] = "dbct_at_localhost";


$tdatatparam_numsup[".strOriginalTableName"] = "tparam_numsup";

	



$tdatatparam_numsup[".showAddInPopup"] = false;

$tdatatparam_numsup[".showEditInPopup"] = false;

$tdatatparam_numsup[".showViewInPopup"] = false;

$tdatatparam_numsup[".listAjax"] = false;
//	temporary
//$tdatatparam_numsup[".listAjax"] = false;

	$tdatatparam_numsup[".audit"] = false;

	$tdatatparam_numsup[".locking"] = false;


$pages = $tdatatparam_numsup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatparam_numsup[".edit"] = true;
	$tdatatparam_numsup[".afterEditAction"] = 1;
	$tdatatparam_numsup[".closePopupAfterEdit"] = 1;
	$tdatatparam_numsup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatparam_numsup[".add"] = true;
$tdatatparam_numsup[".afterAddAction"] = 1;
$tdatatparam_numsup[".closePopupAfterAdd"] = 1;
$tdatatparam_numsup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatparam_numsup[".list"] = true;
}



$tdatatparam_numsup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatparam_numsup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatparam_numsup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatparam_numsup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatparam_numsup[".printFriendly"] = true;
}



$tdatatparam_numsup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatparam_numsup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatparam_numsup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatparam_numsup[".isUseAjaxSuggest"] = true;



																								

$tdatatparam_numsup[".ajaxCodeSnippetAdded"] = false;

$tdatatparam_numsup[".buttonsAdded"] = false;

$tdatatparam_numsup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatparam_numsup[".isUseTimeForSearch"] = false;


$tdatatparam_numsup[".badgeColor"] = "B22222";


$tdatatparam_numsup[".allSearchFields"] = array();
$tdatatparam_numsup[".filterFields"] = array();
$tdatatparam_numsup[".requiredSearchFields"] = array();

$tdatatparam_numsup[".googleLikeFields"] = array();
$tdatatparam_numsup[".googleLikeFields"][] = "numsupid";
$tdatatparam_numsup[".googleLikeFields"][] = "numsup";



$tdatatparam_numsup[".tableType"] = "list";

$tdatatparam_numsup[".printerPageOrientation"] = 0;
$tdatatparam_numsup[".nPrinterPageScale"] = 100;

$tdatatparam_numsup[".nPrinterSplitRecords"] = 40;

$tdatatparam_numsup[".geocodingEnabled"] = false;










$tdatatparam_numsup[".pageSize"] = 20;

$tdatatparam_numsup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatparam_numsup[".strOrderBy"] = $tstrOrderBy;

$tdatatparam_numsup[".orderindexes"] = array();


$tdatatparam_numsup[".sqlHead"] = "SELECT numsupid,  	numsup";
$tdatatparam_numsup[".sqlFrom"] = "FROM tparam_numsup";
$tdatatparam_numsup[".sqlWhereExpr"] = "";
$tdatatparam_numsup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatparam_numsup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatparam_numsup[".arrGroupsPerPage"] = $arrGPP;

$tdatatparam_numsup[".highlightSearchResults"] = true;

$tableKeystparam_numsup = array();
$tableKeystparam_numsup[] = "numsupid";
$tdatatparam_numsup[".Keys"] = $tableKeystparam_numsup;


$tdatatparam_numsup[".hideMobileList"] = array();




//	numsupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "numsupid";
	$fdata["GoodName"] = "numsupid";
	$fdata["ownerTable"] = "tparam_numsup";
	$fdata["Label"] = GetFieldLabel("tparam_numsup","numsupid");
	$fdata["FieldType"] = 16;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "numsupid";

		$fdata["sourceSingle"] = "numsupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numsupid";

	
	
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


	$tdatatparam_numsup["numsupid"] = $fdata;
		$tdatatparam_numsup[".searchableFields"][] = "numsupid";
//	numsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "numsup";
	$fdata["GoodName"] = "numsup";
	$fdata["ownerTable"] = "tparam_numsup";
	$fdata["Label"] = GetFieldLabel("tparam_numsup","numsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "numsup";

		$fdata["sourceSingle"] = "numsup";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numsup";

	
	
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


	$tdatatparam_numsup["numsup"] = $fdata;
		$tdatatparam_numsup[".searchableFields"][] = "numsup";


$tables_data["tparam_numsup"]=&$tdatatparam_numsup;
$field_labels["tparam_numsup"] = &$fieldLabelstparam_numsup;
$fieldToolTips["tparam_numsup"] = &$fieldToolTipstparam_numsup;
$placeHolders["tparam_numsup"] = &$placeHolderstparam_numsup;
$page_titles["tparam_numsup"] = &$pageTitlestparam_numsup;


changeTextControlsToDate( "tparam_numsup" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["tparam_numsup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["tparam_numsup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tparam_numsup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "numsupid,  	numsup";
$proto0["m_strFrom"] = "FROM tparam_numsup";
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
	"m_strName" => "numsupid",
	"m_strTable" => "tparam_numsup",
	"m_srcTableName" => "tparam_numsup"
));

$proto6["m_sql"] = "numsupid";
$proto6["m_srcTableName"] = "tparam_numsup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "numsup",
	"m_strTable" => "tparam_numsup",
	"m_srcTableName" => "tparam_numsup"
));

$proto8["m_sql"] = "numsup";
$proto8["m_srcTableName"] = "tparam_numsup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tparam_numsup";
$proto11["m_srcTableName"] = "tparam_numsup";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "numsupid";
$proto11["m_columns"][] = "numsup";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tparam_numsup";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tparam_numsup";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tparam_numsup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tparam_numsup = createSqlQuery_tparam_numsup();


	
												;

		

$tdatatparam_numsup[".sqlquery"] = $queryData_tparam_numsup;



$tdatatparam_numsup[".hasEvents"] = false;

?>