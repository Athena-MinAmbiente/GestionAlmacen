<?php
$tdataq_ctrl_numasientos = array();
$tdataq_ctrl_numasientos[".searchableFields"] = array();
$tdataq_ctrl_numasientos[".ShortName"] = "q_ctrl_numasientos";
$tdataq_ctrl_numasientos[".OwnerID"] = "";
$tdataq_ctrl_numasientos[".OriginalTable"] = "q_ctrl_numasientos";


$tdataq_ctrl_numasientos[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataq_ctrl_numasientos[".originalPagesByType"] = $tdataq_ctrl_numasientos[".pagesByType"];
$tdataq_ctrl_numasientos[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataq_ctrl_numasientos[".originalPages"] = $tdataq_ctrl_numasientos[".pages"];
$tdataq_ctrl_numasientos[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataq_ctrl_numasientos[".originalDefaultPages"] = $tdataq_ctrl_numasientos[".defaultPages"];

//	field labels
$fieldLabelsq_ctrl_numasientos = array();
$fieldToolTipsq_ctrl_numasientos = array();
$pageTitlesq_ctrl_numasientos = array();
$placeHoldersq_ctrl_numasientos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_ctrl_numasientos["Spanish"] = array();
	$fieldToolTipsq_ctrl_numasientos["Spanish"] = array();
	$placeHoldersq_ctrl_numasientos["Spanish"] = array();
	$pageTitlesq_ctrl_numasientos["Spanish"] = array();
	$fieldLabelsq_ctrl_numasientos["Spanish"]["ascodalmacen"] = "Ascodalmacen";
	$fieldToolTipsq_ctrl_numasientos["Spanish"]["ascodalmacen"] = "";
	$placeHoldersq_ctrl_numasientos["Spanish"]["ascodalmacen"] = "";
	$fieldLabelsq_ctrl_numasientos["Spanish"]["as_nroasiento"] = "As Nroasiento";
	$fieldToolTipsq_ctrl_numasientos["Spanish"]["as_nroasiento"] = "";
	$placeHoldersq_ctrl_numasientos["Spanish"]["as_nroasiento"] = "";
	if (count($fieldToolTipsq_ctrl_numasientos["Spanish"]))
		$tdataq_ctrl_numasientos[".isUseToolTips"] = true;
}


	$tdataq_ctrl_numasientos[".NCSearch"] = true;



$tdataq_ctrl_numasientos[".shortTableName"] = "q_ctrl_numasientos";
$tdataq_ctrl_numasientos[".nSecOptions"] = 0;

$tdataq_ctrl_numasientos[".mainTableOwnerID"] = "";
$tdataq_ctrl_numasientos[".entityType"] = 0;
$tdataq_ctrl_numasientos[".connId"] = "dbrf_at_127_0_0_1";


$tdataq_ctrl_numasientos[".strOriginalTableName"] = "q_ctrl_numasientos";

	



$tdataq_ctrl_numasientos[".showAddInPopup"] = false;

$tdataq_ctrl_numasientos[".showEditInPopup"] = false;

$tdataq_ctrl_numasientos[".showViewInPopup"] = false;

$tdataq_ctrl_numasientos[".listAjax"] = false;
//	temporary
//$tdataq_ctrl_numasientos[".listAjax"] = false;

	$tdataq_ctrl_numasientos[".audit"] = false;

	$tdataq_ctrl_numasientos[".locking"] = false;


$pages = $tdataq_ctrl_numasientos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_ctrl_numasientos[".edit"] = true;
	$tdataq_ctrl_numasientos[".afterEditAction"] = 1;
	$tdataq_ctrl_numasientos[".closePopupAfterEdit"] = 1;
	$tdataq_ctrl_numasientos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_ctrl_numasientos[".add"] = true;
$tdataq_ctrl_numasientos[".afterAddAction"] = 1;
$tdataq_ctrl_numasientos[".closePopupAfterAdd"] = 1;
$tdataq_ctrl_numasientos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_ctrl_numasientos[".list"] = true;
}



$tdataq_ctrl_numasientos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_ctrl_numasientos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_ctrl_numasientos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_ctrl_numasientos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_ctrl_numasientos[".printFriendly"] = true;
}



$tdataq_ctrl_numasientos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_ctrl_numasientos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_ctrl_numasientos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_ctrl_numasientos[".isUseAjaxSuggest"] = true;



												

$tdataq_ctrl_numasientos[".ajaxCodeSnippetAdded"] = false;

$tdataq_ctrl_numasientos[".buttonsAdded"] = false;

$tdataq_ctrl_numasientos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_ctrl_numasientos[".isUseTimeForSearch"] = false;


$tdataq_ctrl_numasientos[".badgeColor"] = "CD853F";


$tdataq_ctrl_numasientos[".allSearchFields"] = array();
$tdataq_ctrl_numasientos[".filterFields"] = array();
$tdataq_ctrl_numasientos[".requiredSearchFields"] = array();

$tdataq_ctrl_numasientos[".googleLikeFields"] = array();
$tdataq_ctrl_numasientos[".googleLikeFields"][] = "ascodalmacen";
$tdataq_ctrl_numasientos[".googleLikeFields"][] = "as_nroasiento";



$tdataq_ctrl_numasientos[".tableType"] = "list";

$tdataq_ctrl_numasientos[".printerPageOrientation"] = 0;
$tdataq_ctrl_numasientos[".nPrinterPageScale"] = 100;

$tdataq_ctrl_numasientos[".nPrinterSplitRecords"] = 40;

$tdataq_ctrl_numasientos[".geocodingEnabled"] = false;










$tdataq_ctrl_numasientos[".pageSize"] = 20;

$tdataq_ctrl_numasientos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_ctrl_numasientos[".strOrderBy"] = $tstrOrderBy;

$tdataq_ctrl_numasientos[".orderindexes"] = array();


$tdataq_ctrl_numasientos[".sqlHead"] = "SELECT ascodalmacen,  	as_nroasiento";
$tdataq_ctrl_numasientos[".sqlFrom"] = "FROM q_ctrl_numasientos";
$tdataq_ctrl_numasientos[".sqlWhereExpr"] = "";
$tdataq_ctrl_numasientos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_ctrl_numasientos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_ctrl_numasientos[".arrGroupsPerPage"] = $arrGPP;

$tdataq_ctrl_numasientos[".highlightSearchResults"] = true;

$tableKeysq_ctrl_numasientos = array();
$tdataq_ctrl_numasientos[".Keys"] = $tableKeysq_ctrl_numasientos;


$tdataq_ctrl_numasientos[".hideMobileList"] = array();




//	ascodalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ascodalmacen";
	$fdata["GoodName"] = "ascodalmacen";
	$fdata["ownerTable"] = "q_ctrl_numasientos";
	$fdata["Label"] = GetFieldLabel("q_ctrl_numasientos","ascodalmacen");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "ascodalmacen";

		$fdata["sourceSingle"] = "ascodalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ascodalmacen";

	
	
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


	$tdataq_ctrl_numasientos["ascodalmacen"] = $fdata;
		$tdataq_ctrl_numasientos[".searchableFields"][] = "ascodalmacen";
//	as_nroasiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "as_nroasiento";
	$fdata["GoodName"] = "as_nroasiento";
	$fdata["ownerTable"] = "q_ctrl_numasientos";
	$fdata["Label"] = GetFieldLabel("q_ctrl_numasientos","as_nroasiento");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "as_nroasiento";

		$fdata["sourceSingle"] = "as_nroasiento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "as_nroasiento";

	
	
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


	$tdataq_ctrl_numasientos["as_nroasiento"] = $fdata;
		$tdataq_ctrl_numasientos[".searchableFields"][] = "as_nroasiento";


$tables_data["q_ctrl_numasientos"]=&$tdataq_ctrl_numasientos;
$field_labels["q_ctrl_numasientos"] = &$fieldLabelsq_ctrl_numasientos;
$fieldToolTips["q_ctrl_numasientos"] = &$fieldToolTipsq_ctrl_numasientos;
$placeHolders["q_ctrl_numasientos"] = &$placeHoldersq_ctrl_numasientos;
$page_titles["q_ctrl_numasientos"] = &$pageTitlesq_ctrl_numasientos;


changeTextControlsToDate( "q_ctrl_numasientos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_ctrl_numasientos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_ctrl_numasientos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_ctrl_numasientos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ascodalmacen,  	as_nroasiento";
$proto0["m_strFrom"] = "FROM q_ctrl_numasientos";
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
	"m_strName" => "ascodalmacen",
	"m_strTable" => "q_ctrl_numasientos",
	"m_srcTableName" => "q_ctrl_numasientos"
));

$proto6["m_sql"] = "ascodalmacen";
$proto6["m_srcTableName"] = "q_ctrl_numasientos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "as_nroasiento",
	"m_strTable" => "q_ctrl_numasientos",
	"m_srcTableName" => "q_ctrl_numasientos"
));

$proto8["m_sql"] = "as_nroasiento";
$proto8["m_srcTableName"] = "q_ctrl_numasientos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "q_ctrl_numasientos";
$proto11["m_srcTableName"] = "q_ctrl_numasientos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ascodalmacen";
$proto11["m_columns"][] = "as_nroasiento";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "q_ctrl_numasientos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "q_ctrl_numasientos";
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
$proto0["m_srcTableName"]="q_ctrl_numasientos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_ctrl_numasientos = createSqlQuery_q_ctrl_numasientos();


	
								;

		

$tdataq_ctrl_numasientos[".sqlquery"] = $queryData_q_ctrl_numasientos;



$tdataq_ctrl_numasientos[".hasEvents"] = false;

?>