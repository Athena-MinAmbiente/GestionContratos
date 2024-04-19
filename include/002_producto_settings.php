<?php
$tdata002_producto = array();
$tdata002_producto[".searchableFields"] = array();
$tdata002_producto[".ShortName"] = "002_producto";
$tdata002_producto[".OwnerID"] = "";
$tdata002_producto[".OriginalTable"] = "002_producto";


$tdata002_producto[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdata002_producto[".originalPagesByType"] = $tdata002_producto[".pagesByType"];
$tdata002_producto[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdata002_producto[".originalPages"] = $tdata002_producto[".pages"];
$tdata002_producto[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdata002_producto[".originalDefaultPages"] = $tdata002_producto[".defaultPages"];

//	field labels
$fieldLabels002_producto = array();
$fieldToolTips002_producto = array();
$pageTitles002_producto = array();
$placeHolders002_producto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabels002_producto["Spanish"] = array();
	$fieldToolTips002_producto["Spanish"] = array();
	$placeHolders002_producto["Spanish"] = array();
	$pageTitles002_producto["Spanish"] = array();
	$fieldLabels002_producto["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTips002_producto["Spanish"]["PROD_ID"] = "";
	$placeHolders002_producto["Spanish"]["PROD_ID"] = "";
	$fieldLabels002_producto["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTips002_producto["Spanish"]["PRODUCTO"] = "";
	$placeHolders002_producto["Spanish"]["PRODUCTO"] = "";
	$fieldLabels002_producto["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTips002_producto["Spanish"]["DESCRIPCION"] = "";
	$placeHolders002_producto["Spanish"]["DESCRIPCION"] = "";
	if (count($fieldToolTips002_producto["Spanish"]))
		$tdata002_producto[".isUseToolTips"] = true;
}


	$tdata002_producto[".NCSearch"] = true;



$tdata002_producto[".shortTableName"] = "002_producto";
$tdata002_producto[".nSecOptions"] = 0;

$tdata002_producto[".mainTableOwnerID"] = "";
$tdata002_producto[".entityType"] = 0;
$tdata002_producto[".connId"] = "dbsep_at_127_0_0_1";


$tdata002_producto[".strOriginalTableName"] = "002_producto";

	



$tdata002_producto[".showAddInPopup"] = false;

$tdata002_producto[".showEditInPopup"] = false;

$tdata002_producto[".showViewInPopup"] = false;

$tdata002_producto[".listAjax"] = false;
//	temporary
//$tdata002_producto[".listAjax"] = false;

	$tdata002_producto[".audit"] = false;

	$tdata002_producto[".locking"] = false;


$pages = $tdata002_producto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata002_producto[".edit"] = true;
	$tdata002_producto[".afterEditAction"] = 1;
	$tdata002_producto[".closePopupAfterEdit"] = 1;
	$tdata002_producto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata002_producto[".add"] = true;
$tdata002_producto[".afterAddAction"] = 1;
$tdata002_producto[".closePopupAfterAdd"] = 1;
$tdata002_producto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata002_producto[".list"] = true;
}



$tdata002_producto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata002_producto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata002_producto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata002_producto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata002_producto[".printFriendly"] = true;
}



$tdata002_producto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata002_producto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata002_producto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata002_producto[".isUseAjaxSuggest"] = true;



																								

$tdata002_producto[".ajaxCodeSnippetAdded"] = false;

$tdata002_producto[".buttonsAdded"] = false;

$tdata002_producto[".addPageEvents"] = false;

// use timepicker for search panel
$tdata002_producto[".isUseTimeForSearch"] = false;


$tdata002_producto[".badgeColor"] = "1E90FF";


$tdata002_producto[".allSearchFields"] = array();
$tdata002_producto[".filterFields"] = array();
$tdata002_producto[".requiredSearchFields"] = array();

$tdata002_producto[".googleLikeFields"] = array();
$tdata002_producto[".googleLikeFields"][] = "PROD_ID";
$tdata002_producto[".googleLikeFields"][] = "PRODUCTO";
$tdata002_producto[".googleLikeFields"][] = "DESCRIPCION";



$tdata002_producto[".tableType"] = "list";

$tdata002_producto[".printerPageOrientation"] = 0;
$tdata002_producto[".nPrinterPageScale"] = 100;

$tdata002_producto[".nPrinterSplitRecords"] = 40;

$tdata002_producto[".geocodingEnabled"] = false;










$tdata002_producto[".pageSize"] = 20;

$tdata002_producto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdata002_producto[".strOrderBy"] = $tstrOrderBy;

$tdata002_producto[".orderindexes"] = array();


$tdata002_producto[".sqlHead"] = "SELECT PROD_ID,  PRODUCTO,  DESCRIPCION";
$tdata002_producto[".sqlFrom"] = "FROM `002_producto`";
$tdata002_producto[".sqlWhereExpr"] = "";
$tdata002_producto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata002_producto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata002_producto[".arrGroupsPerPage"] = $arrGPP;

$tdata002_producto[".highlightSearchResults"] = true;

$tableKeys002_producto = array();
$tableKeys002_producto[] = "PROD_ID";
$tdata002_producto[".Keys"] = $tableKeys002_producto;


$tdata002_producto[".hideMobileList"] = array();




//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto","PROD_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PROD_ID";

		$fdata["sourceSingle"] = "PROD_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_ID";

	
	
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


	$tdata002_producto["PROD_ID"] = $fdata;
		$tdata002_producto[".searchableFields"][] = "PROD_ID";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto","PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRODUCTO";

		$fdata["sourceSingle"] = "PRODUCTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRODUCTO";

	
	
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


	$tdata002_producto["PRODUCTO"] = $fdata;
		$tdata002_producto[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("002_producto","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["sourceSingle"] = "DESCRIPCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdata002_producto["DESCRIPCION"] = $fdata;
		$tdata002_producto[".searchableFields"][] = "DESCRIPCION";


$tables_data["002_producto"]=&$tdata002_producto;
$field_labels["002_producto"] = &$fieldLabels002_producto;
$fieldToolTips["002_producto"] = &$fieldToolTips002_producto;
$placeHolders["002_producto"] = &$placeHolders002_producto;
$page_titles["002_producto"] = &$pageTitles002_producto;


changeTextControlsToDate( "002_producto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["002_producto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["002_producto"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_002_producto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PROD_ID,  PRODUCTO,  DESCRIPCION";
$proto0["m_strFrom"] = "FROM `002_producto`";
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
	"m_strName" => "PROD_ID",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto"
));

$proto6["m_sql"] = "PROD_ID";
$proto6["m_srcTableName"] = "002_producto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto"
));

$proto8["m_sql"] = "PRODUCTO";
$proto8["m_srcTableName"] = "002_producto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "002_producto"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "002_producto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "002_producto";
$proto13["m_srcTableName"] = "002_producto";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "PROD_ID";
$proto13["m_columns"][] = "RUBRO_ID_FK";
$proto13["m_columns"][] = "VIGENCIA";
$proto13["m_columns"][] = "UEJ";
$proto13["m_columns"][] = "PRODUCTO";
$proto13["m_columns"][] = "DESCRIPCION";
$proto13["m_columns"][] = "REC";
$proto13["m_columns"][] = "FUENTE";
$proto13["m_columns"][] = "OBJ-ESPECIFICO";
$proto13["m_columns"][] = "INDICADORES";
$proto13["m_columns"][] = "RUBRO";
$proto13["m_columns"][] = "PROD_PRESUPUESTO";
$proto13["m_columns"][] = "UTILIZADO";
$proto13["m_columns"][] = "SALDO";
$proto13["m_columns"][] = "META";
$proto13["m_columns"][] = "META_ANIO";
$proto13["m_columns"][] = "PROGRAMADO";
$proto13["m_columns"][] = "SALDO_PROG";
$proto13["m_columns"][] = "Dependencia";
$proto13["m_columns"][] = "UsuarioResp";
$proto13["m_columns"][] = "TIPO";
$proto13["m_columns"][] = "sol_paa";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`002_producto`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "002_producto";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="002_producto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_002_producto = createSqlQuery_002_producto();


	
												;

			

$tdata002_producto[".sqlquery"] = $queryData_002_producto;



$tdata002_producto[".hasEvents"] = false;

?>