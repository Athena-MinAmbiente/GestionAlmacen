<?php
$tdataalmovconsdia_egresos = array();
$tdataalmovconsdia_egresos[".searchableFields"] = array();
$tdataalmovconsdia_egresos[".ShortName"] = "almovconsdia_egresos";
$tdataalmovconsdia_egresos[".OwnerID"] = "";
$tdataalmovconsdia_egresos[".OriginalTable"] = "almovconsdiae";


$tdataalmovconsdia_egresos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalmovconsdia_egresos[".originalPagesByType"] = $tdataalmovconsdia_egresos[".pagesByType"];
$tdataalmovconsdia_egresos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalmovconsdia_egresos[".originalPages"] = $tdataalmovconsdia_egresos[".pages"];
$tdataalmovconsdia_egresos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalmovconsdia_egresos[".originalDefaultPages"] = $tdataalmovconsdia_egresos[".defaultPages"];

//	field labels
$fieldLabelsalmovconsdia_egresos = array();
$fieldToolTipsalmovconsdia_egresos = array();
$pageTitlesalmovconsdia_egresos = array();
$placeHoldersalmovconsdia_egresos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmovconsdia_egresos["Spanish"] = array();
	$fieldToolTipsalmovconsdia_egresos["Spanish"] = array();
	$placeHoldersalmovconsdia_egresos["Spanish"] = array();
	$pageTitlesalmovconsdia_egresos["Spanish"] = array();
	$fieldLabelsalmovconsdia_egresos["Spanish"]["almovconsdiae_id"] = "No. nterno";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["almovconsdiae_id"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["almovconsdiae_id"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["almovconsdia_id_fk"] = "Id. Transac.";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["almovconsdia_id_fk"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["almovconsdia_id_fk"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["almovconsdiae_cantidad"] = "Cantidad asignada";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["almovconsdiae_cantidad"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["almovconsdiae_cantidad"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["sys_user"] = "Gestionado por:";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["sys_user"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["sys_user"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["sys_fecha"] = "Sys Fecha";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["sys_fecha"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["sys_fecha"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["sys_time"] = "Sys Time";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["sys_time"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["sys_time"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["sys_status"] = "Sys Status";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["sys_status"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["sys_status"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["sys_document_func"] = "Cédula ";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["sys_document_func"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["sys_document_func"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["sys_doclasedoc_id_fk"] = "Documento";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["sys_doclasedoc_id_fk"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["sys_doclasedoc_id_fk"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["mcdalmacen"] = "Almacén";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["mcdalmacen"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["mcdalmacen"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["mcdcuenta"] = "Cuenta";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["mcdcuenta"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["mcdcuenta"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["mcdcodelem"] = "Código elemento";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["mcdcodelem"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["mcdcodelem"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["mcdnomelem"] = "Nombre del elemento";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["mcdnomelem"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["mcdnomelem"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["consumo_id_fk"] = "";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["consumo_id_fk"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["consumo_id_fk"] = "";
	$fieldLabelsalmovconsdia_egresos["Spanish"]["ctrl_saldo"] = "Saldo disponible";
	$fieldToolTipsalmovconsdia_egresos["Spanish"]["ctrl_saldo"] = "";
	$placeHoldersalmovconsdia_egresos["Spanish"]["ctrl_saldo"] = "";
	if (count($fieldToolTipsalmovconsdia_egresos["Spanish"]))
		$tdataalmovconsdia_egresos[".isUseToolTips"] = true;
}


	$tdataalmovconsdia_egresos[".NCSearch"] = true;



$tdataalmovconsdia_egresos[".shortTableName"] = "almovconsdia_egresos";
$tdataalmovconsdia_egresos[".nSecOptions"] = 0;

$tdataalmovconsdia_egresos[".mainTableOwnerID"] = "";
$tdataalmovconsdia_egresos[".entityType"] = 1;
$tdataalmovconsdia_egresos[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmovconsdia_egresos[".strOriginalTableName"] = "almovconsdiae";

	



$tdataalmovconsdia_egresos[".showAddInPopup"] = false;

$tdataalmovconsdia_egresos[".showEditInPopup"] = false;

$tdataalmovconsdia_egresos[".showViewInPopup"] = false;

$tdataalmovconsdia_egresos[".listAjax"] = false;
//	temporary
//$tdataalmovconsdia_egresos[".listAjax"] = false;

	$tdataalmovconsdia_egresos[".audit"] = false;

	$tdataalmovconsdia_egresos[".locking"] = false;


$pages = $tdataalmovconsdia_egresos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmovconsdia_egresos[".edit"] = true;
	$tdataalmovconsdia_egresos[".afterEditAction"] = 0;
	$tdataalmovconsdia_egresos[".closePopupAfterEdit"] = 1;
	$tdataalmovconsdia_egresos[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataalmovconsdia_egresos[".add"] = true;
$tdataalmovconsdia_egresos[".afterAddAction"] = 0;
$tdataalmovconsdia_egresos[".closePopupAfterAdd"] = 1;
$tdataalmovconsdia_egresos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmovconsdia_egresos[".list"] = true;
}



$tdataalmovconsdia_egresos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmovconsdia_egresos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmovconsdia_egresos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmovconsdia_egresos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmovconsdia_egresos[".printFriendly"] = true;
}



$tdataalmovconsdia_egresos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmovconsdia_egresos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmovconsdia_egresos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmovconsdia_egresos[".isUseAjaxSuggest"] = true;



																								

$tdataalmovconsdia_egresos[".ajaxCodeSnippetAdded"] = false;

$tdataalmovconsdia_egresos[".buttonsAdded"] = false;

$tdataalmovconsdia_egresos[".addPageEvents"] = true;

// use timepicker for search panel
$tdataalmovconsdia_egresos[".isUseTimeForSearch"] = false;


$tdataalmovconsdia_egresos[".badgeColor"] = "e8926f";


$tdataalmovconsdia_egresos[".allSearchFields"] = array();
$tdataalmovconsdia_egresos[".filterFields"] = array();
$tdataalmovconsdia_egresos[".requiredSearchFields"] = array();

$tdataalmovconsdia_egresos[".googleLikeFields"] = array();
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "almovconsdiae_id";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "almovconsdia_id_fk";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "almovconsdiae_cantidad";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "ctrl_saldo";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "sys_user";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "sys_fecha";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "sys_time";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "sys_status";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "sys_document_func";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "sys_doclasedoc_id_fk";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "consumo_id_fk";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "mcdalmacen";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "mcdcuenta";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "mcdcodelem";
$tdataalmovconsdia_egresos[".googleLikeFields"][] = "mcdnomelem";



$tdataalmovconsdia_egresos[".tableType"] = "list";

$tdataalmovconsdia_egresos[".printerPageOrientation"] = 0;
$tdataalmovconsdia_egresos[".nPrinterPageScale"] = 100;

$tdataalmovconsdia_egresos[".nPrinterSplitRecords"] = 40;

$tdataalmovconsdia_egresos[".geocodingEnabled"] = false;










$tdataalmovconsdia_egresos[".pageSize"] = 20;

$tdataalmovconsdia_egresos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmovconsdia_egresos[".strOrderBy"] = $tstrOrderBy;

$tdataalmovconsdia_egresos[".orderindexes"] = array();


$tdataalmovconsdia_egresos[".sqlHead"] = "SELECT almovconsdiae_id,  	almovconsdia_id_fk,  	almovconsdiae_cantidad,  	ctrl_saldo,  	sys_user,  	sys_fecha,  	sys_time,  	sys_status,  	sys_document_func,  	sys_doclasedoc_id_fk,  	consumo_id_fk,  	mcdalmacen,  	mcdcuenta,  	mcdcodelem,  	mcdnomelem";
$tdataalmovconsdia_egresos[".sqlFrom"] = "FROM almovconsdiae";
$tdataalmovconsdia_egresos[".sqlWhereExpr"] = "";
$tdataalmovconsdia_egresos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmovconsdia_egresos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmovconsdia_egresos[".arrGroupsPerPage"] = $arrGPP;

$tdataalmovconsdia_egresos[".highlightSearchResults"] = true;

$tableKeysalmovconsdia_egresos = array();
$tableKeysalmovconsdia_egresos[] = "almovconsdiae_id";
$tdataalmovconsdia_egresos[".Keys"] = $tableKeysalmovconsdia_egresos;


$tdataalmovconsdia_egresos[".hideMobileList"] = array();




//	almovconsdiae_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almovconsdiae_id";
	$fdata["GoodName"] = "almovconsdiae_id";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","almovconsdiae_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "almovconsdiae_id";

		$fdata["sourceSingle"] = "almovconsdiae_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdiae_id";

	
	
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


	$tdataalmovconsdia_egresos["almovconsdiae_id"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "almovconsdiae_id";
//	almovconsdia_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "almovconsdia_id_fk";
	$fdata["GoodName"] = "almovconsdia_id_fk";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","almovconsdia_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovconsdia_id_fk";

		$fdata["sourceSingle"] = "almovconsdia_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdia_id_fk";

	
	
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
	$edata["LookupTable"] = "almovconsdia_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"ctrl_saldo", 'lookupF'=>"mcd_salddisponible");
	$edata["autoCompleteFields"][] = array('masterF'=>"consumo_id_fk", 'lookupF'=>"consumo_id_fk");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdalmacen", 'lookupF'=>"mcdalmacen");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdcuenta", 'lookupF'=>"mcdcuenta");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdcodelem", 'lookupF'=>"mcdcodelem");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdnomelem", 'lookupF'=>"mcdnomelem");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "almovconsdia_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "almovconsdia_id";

	

	
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


	$tdataalmovconsdia_egresos["almovconsdia_id_fk"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "almovconsdia_id_fk";
//	almovconsdiae_cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "almovconsdiae_cantidad";
	$fdata["GoodName"] = "almovconsdiae_cantidad";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","almovconsdiae_cantidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "almovconsdiae_cantidad";

		$fdata["sourceSingle"] = "almovconsdiae_cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdiae_cantidad";

	
	
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


	$tdataalmovconsdia_egresos["almovconsdiae_cantidad"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "almovconsdiae_cantidad";
//	ctrl_saldo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ctrl_saldo";
	$fdata["GoodName"] = "ctrl_saldo";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","ctrl_saldo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ctrl_saldo";

		$fdata["sourceSingle"] = "ctrl_saldo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctrl_saldo";

	
	
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


	$tdataalmovconsdia_egresos["ctrl_saldo"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "ctrl_saldo";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

		$fdata["sourceSingle"] = "sys_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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


	$tdataalmovconsdia_egresos["sys_user"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "sys_user";
//	sys_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sys_fecha";
	$fdata["GoodName"] = "sys_fecha";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","sys_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "sys_fecha";

		$fdata["sourceSingle"] = "sys_fecha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_fecha";

	
	
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


	$tdataalmovconsdia_egresos["sys_fecha"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "sys_fecha";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","sys_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "sys_time";

		$fdata["sourceSingle"] = "sys_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdataalmovconsdia_egresos["sys_time"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "sys_time";
//	sys_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sys_status";
	$fdata["GoodName"] = "sys_status";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","sys_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_status";

		$fdata["sourceSingle"] = "sys_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_status";

	
	
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


	$tdataalmovconsdia_egresos["sys_status"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "sys_status";
//	sys_document_func
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sys_document_func";
	$fdata["GoodName"] = "sys_document_func";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","sys_document_func");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_document_func";

		$fdata["sourceSingle"] = "sys_document_func";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_document_func";

	
	
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


	$tdataalmovconsdia_egresos["sys_document_func"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "sys_document_func";
//	sys_doclasedoc_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_doclasedoc_id_fk";
	$fdata["GoodName"] = "sys_doclasedoc_id_fk";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","sys_doclasedoc_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sys_doclasedoc_id_fk";

		$fdata["sourceSingle"] = "sys_doclasedoc_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_doclasedoc_id_fk";

	
	
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


	$tdataalmovconsdia_egresos["sys_doclasedoc_id_fk"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "sys_doclasedoc_id_fk";
//	consumo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "consumo_id_fk";
	$fdata["GoodName"] = "consumo_id_fk";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","consumo_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "consumo_id_fk";

		$fdata["sourceSingle"] = "consumo_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consumo_id_fk";

	
	
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


	$tdataalmovconsdia_egresos["consumo_id_fk"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "consumo_id_fk";
//	mcdalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mcdalmacen";
	$fdata["GoodName"] = "mcdalmacen";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","mcdalmacen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdalmacen";

		$fdata["sourceSingle"] = "mcdalmacen";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdalmacen";

	
	
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


	$tdataalmovconsdia_egresos["mcdalmacen"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "mcdalmacen";
//	mcdcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "mcdcuenta";
	$fdata["GoodName"] = "mcdcuenta";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","mcdcuenta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdcuenta";

		$fdata["sourceSingle"] = "mcdcuenta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdcuenta";

	
	
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


	$tdataalmovconsdia_egresos["mcdcuenta"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "mcdcuenta";
//	mcdcodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "mcdcodelem";
	$fdata["GoodName"] = "mcdcodelem";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","mcdcodelem");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdcodelem";

		$fdata["sourceSingle"] = "mcdcodelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdcodelem";

	
	
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


	$tdataalmovconsdia_egresos["mcdcodelem"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "mcdcodelem";
//	mcdnomelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "mcdnomelem";
	$fdata["GoodName"] = "mcdnomelem";
	$fdata["ownerTable"] = "almovconsdiae";
	$fdata["Label"] = GetFieldLabel("almovconsdia_egresos","mcdnomelem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mcdnomelem";

		$fdata["sourceSingle"] = "mcdnomelem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdnomelem";

	
	
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


	$tdataalmovconsdia_egresos["mcdnomelem"] = $fdata;
		$tdataalmovconsdia_egresos[".searchableFields"][] = "mcdnomelem";


$tables_data["almovconsdia_egresos"]=&$tdataalmovconsdia_egresos;
$field_labels["almovconsdia_egresos"] = &$fieldLabelsalmovconsdia_egresos;
$fieldToolTips["almovconsdia_egresos"] = &$fieldToolTipsalmovconsdia_egresos;
$placeHolders["almovconsdia_egresos"] = &$placeHoldersalmovconsdia_egresos;
$page_titles["almovconsdia_egresos"] = &$pageTitlesalmovconsdia_egresos;


changeTextControlsToDate( "almovconsdia_egresos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almovconsdia_egresos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almovconsdia_egresos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="gedocumentos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="gedocumentos_egresos_consumo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "gedocumentos_egresos_consumo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["almovconsdia_egresos"][0] = $masterParams;
				$masterTablesData["almovconsdia_egresos"][0]["masterKeys"] = array();
	$masterTablesData["almovconsdia_egresos"][0]["masterKeys"][]="doclasedoc_id";
				$masterTablesData["almovconsdia_egresos"][0]["masterKeys"][]="doccnit";
				$masterTablesData["almovconsdia_egresos"][0]["detailKeys"] = array();
	$masterTablesData["almovconsdia_egresos"][0]["detailKeys"][]="sys_doclasedoc_id_fk";
				$masterTablesData["almovconsdia_egresos"][0]["detailKeys"][]="sys_document_func";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almovconsdia_egresos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almovconsdiae_id,  	almovconsdia_id_fk,  	almovconsdiae_cantidad,  	ctrl_saldo,  	sys_user,  	sys_fecha,  	sys_time,  	sys_status,  	sys_document_func,  	sys_doclasedoc_id_fk,  	consumo_id_fk,  	mcdalmacen,  	mcdcuenta,  	mcdcodelem,  	mcdnomelem";
$proto0["m_strFrom"] = "FROM almovconsdiae";
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
	"m_strName" => "almovconsdiae_id",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto6["m_sql"] = "almovconsdiae_id";
$proto6["m_srcTableName"] = "almovconsdia_egresos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "almovconsdia_id_fk",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto8["m_sql"] = "almovconsdia_id_fk";
$proto8["m_srcTableName"] = "almovconsdia_egresos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "almovconsdiae_cantidad",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto10["m_sql"] = "almovconsdiae_cantidad";
$proto10["m_srcTableName"] = "almovconsdia_egresos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ctrl_saldo",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto12["m_sql"] = "ctrl_saldo";
$proto12["m_srcTableName"] = "almovconsdia_egresos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto14["m_sql"] = "sys_user";
$proto14["m_srcTableName"] = "almovconsdia_egresos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_fecha",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto16["m_sql"] = "sys_fecha";
$proto16["m_srcTableName"] = "almovconsdia_egresos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto18["m_sql"] = "sys_time";
$proto18["m_srcTableName"] = "almovconsdia_egresos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_status",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto20["m_sql"] = "sys_status";
$proto20["m_srcTableName"] = "almovconsdia_egresos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_document_func",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto22["m_sql"] = "sys_document_func";
$proto22["m_srcTableName"] = "almovconsdia_egresos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_doclasedoc_id_fk",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto24["m_sql"] = "sys_doclasedoc_id_fk";
$proto24["m_srcTableName"] = "almovconsdia_egresos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "consumo_id_fk",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto26["m_sql"] = "consumo_id_fk";
$proto26["m_srcTableName"] = "almovconsdia_egresos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdalmacen",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto28["m_sql"] = "mcdalmacen";
$proto28["m_srcTableName"] = "almovconsdia_egresos";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcuenta",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto30["m_sql"] = "mcdcuenta";
$proto30["m_srcTableName"] = "almovconsdia_egresos";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcodelem",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto32["m_sql"] = "mcdcodelem";
$proto32["m_srcTableName"] = "almovconsdia_egresos";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdnomelem",
	"m_strTable" => "almovconsdiae",
	"m_srcTableName" => "almovconsdia_egresos"
));

$proto34["m_sql"] = "mcdnomelem";
$proto34["m_srcTableName"] = "almovconsdia_egresos";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "almovconsdiae";
$proto37["m_srcTableName"] = "almovconsdia_egresos";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "almovconsdiae_id";
$proto37["m_columns"][] = "almovconsdia_id_fk";
$proto37["m_columns"][] = "almovconsdiae_cantidad";
$proto37["m_columns"][] = "ctrl_saldo";
$proto37["m_columns"][] = "sys_user";
$proto37["m_columns"][] = "sys_fecha";
$proto37["m_columns"][] = "sys_time";
$proto37["m_columns"][] = "sys_status";
$proto37["m_columns"][] = "sys_document_func";
$proto37["m_columns"][] = "sys_doclasedoc_id_fk";
$proto37["m_columns"][] = "consumo_id_fk";
$proto37["m_columns"][] = "mcdalmacen";
$proto37["m_columns"][] = "mcdcuenta";
$proto37["m_columns"][] = "mcdcodelem";
$proto37["m_columns"][] = "mcdnomelem";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "almovconsdiae";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "almovconsdia_egresos";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="almovconsdia_egresos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almovconsdia_egresos = createSqlQuery_almovconsdia_egresos();


	
								;

															

$tdataalmovconsdia_egresos[".sqlquery"] = $queryData_almovconsdia_egresos;



include_once(getabspath("include/almovconsdia_egresos_events.php"));
$tdataalmovconsdia_egresos[".hasEvents"] = true;

?>