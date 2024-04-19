<?php
$tdataalmovconsdia_consulta = array();
$tdataalmovconsdia_consulta[".searchableFields"] = array();
$tdataalmovconsdia_consulta[".ShortName"] = "almovconsdia_consulta";
$tdataalmovconsdia_consulta[".OwnerID"] = "";
$tdataalmovconsdia_consulta[".OriginalTable"] = "almovconsdia";


$tdataalmovconsdia_consulta[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataalmovconsdia_consulta[".originalPagesByType"] = $tdataalmovconsdia_consulta[".pagesByType"];
$tdataalmovconsdia_consulta[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataalmovconsdia_consulta[".originalPages"] = $tdataalmovconsdia_consulta[".pages"];
$tdataalmovconsdia_consulta[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataalmovconsdia_consulta[".originalDefaultPages"] = $tdataalmovconsdia_consulta[".defaultPages"];

//	field labels
$fieldLabelsalmovconsdia_consulta = array();
$fieldToolTipsalmovconsdia_consulta = array();
$pageTitlesalmovconsdia_consulta = array();
$placeHoldersalmovconsdia_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsalmovconsdia_consulta["Spanish"] = array();
	$fieldToolTipsalmovconsdia_consulta["Spanish"] = array();
	$placeHoldersalmovconsdia_consulta["Spanish"] = array();
	$pageTitlesalmovconsdia_consulta["Spanish"] = array();
	$fieldLabelsalmovconsdia_consulta["Spanish"]["almovconsdia_id"] = "Seleccionar elemento";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["almovconsdia_id"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["almovconsdia_id"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcd_cantmovto"] = "Catidad ingresada";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcd_cantmovto"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcd_cantmovto"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcd_saldant"] = "Saldo disponible";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcd_saldant"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcd_saldant"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcd_valmovto"] = "Valor del movimiento";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcd_valmovto"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcd_valmovto"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcd_valunitant"] = "Valor unitario";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcd_valunitant"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcd_valunitant"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcdalmacen"] = "Almacén";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcdalmacen"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcdalmacen"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcdcodelem"] = "Código";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcdcodelem"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcdcodelem"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcdcuenta"] = "Cuenta";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcdcuenta"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcdcuenta"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcdnrodoc"] = "Número documento";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcdnrodoc"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcdnrodoc"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["consumo_id_fk"] = "ID Consumo";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["consumo_id_fk"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["consumo_id_fk"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcdnomelem"] = "Nombre del elemento";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcdnomelem"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcdnomelem"] = "";
	$fieldLabelsalmovconsdia_consulta["Spanish"]["mcd_salddisponible"] = "Mcd Salddisponible";
	$fieldToolTipsalmovconsdia_consulta["Spanish"]["mcd_salddisponible"] = "";
	$placeHoldersalmovconsdia_consulta["Spanish"]["mcd_salddisponible"] = "";
	if (count($fieldToolTipsalmovconsdia_consulta["Spanish"]))
		$tdataalmovconsdia_consulta[".isUseToolTips"] = true;
}


	$tdataalmovconsdia_consulta[".NCSearch"] = true;



$tdataalmovconsdia_consulta[".shortTableName"] = "almovconsdia_consulta";
$tdataalmovconsdia_consulta[".nSecOptions"] = 0;

$tdataalmovconsdia_consulta[".mainTableOwnerID"] = "";
$tdataalmovconsdia_consulta[".entityType"] = 1;
$tdataalmovconsdia_consulta[".connId"] = "dbrf_at_127_0_0_1";


$tdataalmovconsdia_consulta[".strOriginalTableName"] = "almovconsdia";

	



$tdataalmovconsdia_consulta[".showAddInPopup"] = false;

$tdataalmovconsdia_consulta[".showEditInPopup"] = false;

$tdataalmovconsdia_consulta[".showViewInPopup"] = false;

$tdataalmovconsdia_consulta[".listAjax"] = false;
//	temporary
//$tdataalmovconsdia_consulta[".listAjax"] = false;

	$tdataalmovconsdia_consulta[".audit"] = false;

	$tdataalmovconsdia_consulta[".locking"] = false;


$pages = $tdataalmovconsdia_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataalmovconsdia_consulta[".edit"] = true;
	$tdataalmovconsdia_consulta[".afterEditAction"] = 1;
	$tdataalmovconsdia_consulta[".closePopupAfterEdit"] = 1;
	$tdataalmovconsdia_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataalmovconsdia_consulta[".add"] = true;
$tdataalmovconsdia_consulta[".afterAddAction"] = 0;
$tdataalmovconsdia_consulta[".closePopupAfterAdd"] = 1;
$tdataalmovconsdia_consulta[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataalmovconsdia_consulta[".list"] = true;
}



$tdataalmovconsdia_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataalmovconsdia_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataalmovconsdia_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataalmovconsdia_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataalmovconsdia_consulta[".printFriendly"] = true;
}



$tdataalmovconsdia_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataalmovconsdia_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataalmovconsdia_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataalmovconsdia_consulta[".isUseAjaxSuggest"] = true;



												

$tdataalmovconsdia_consulta[".ajaxCodeSnippetAdded"] = false;

$tdataalmovconsdia_consulta[".buttonsAdded"] = false;

$tdataalmovconsdia_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataalmovconsdia_consulta[".isUseTimeForSearch"] = false;


$tdataalmovconsdia_consulta[".badgeColor"] = "CD5C5C";


$tdataalmovconsdia_consulta[".allSearchFields"] = array();
$tdataalmovconsdia_consulta[".filterFields"] = array();
$tdataalmovconsdia_consulta[".requiredSearchFields"] = array();

$tdataalmovconsdia_consulta[".googleLikeFields"] = array();
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "almovconsdia_id";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "consumo_id_fk";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcdnrodoc";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcdalmacen";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcdcuenta";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcdcodelem";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcdnomelem";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcd_cantmovto";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcd_saldant";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcd_valunitant";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcd_valmovto";
$tdataalmovconsdia_consulta[".googleLikeFields"][] = "mcd_salddisponible";



$tdataalmovconsdia_consulta[".tableType"] = "list";

$tdataalmovconsdia_consulta[".printerPageOrientation"] = 0;
$tdataalmovconsdia_consulta[".nPrinterPageScale"] = 100;

$tdataalmovconsdia_consulta[".nPrinterSplitRecords"] = 40;

$tdataalmovconsdia_consulta[".geocodingEnabled"] = false;










$tdataalmovconsdia_consulta[".pageSize"] = 20;

$tdataalmovconsdia_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataalmovconsdia_consulta[".strOrderBy"] = $tstrOrderBy;

$tdataalmovconsdia_consulta[".orderindexes"] = array();


$tdataalmovconsdia_consulta[".sqlHead"] = "SELECT almovconsdia_id,  consumo_id_fk,  mcdnrodoc,  mcdalmacen,  mcdcuenta,  mcdcodelem,  mcdnomelem,  mcd_cantmovto,  mcd_saldant,  mcd_valunitant,  mcd_valmovto,  mcd_salddisponible";
$tdataalmovconsdia_consulta[".sqlFrom"] = "FROM almovconsdia";
$tdataalmovconsdia_consulta[".sqlWhereExpr"] = "";
$tdataalmovconsdia_consulta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataalmovconsdia_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataalmovconsdia_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdataalmovconsdia_consulta[".highlightSearchResults"] = true;

$tableKeysalmovconsdia_consulta = array();
$tableKeysalmovconsdia_consulta[] = "almovconsdia_id";
$tdataalmovconsdia_consulta[".Keys"] = $tableKeysalmovconsdia_consulta;


$tdataalmovconsdia_consulta[".hideMobileList"] = array();




//	almovconsdia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "almovconsdia_id";
	$fdata["GoodName"] = "almovconsdia_id";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","almovconsdia_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "almovconsdia_id";

		$fdata["sourceSingle"] = "almovconsdia_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "almovconsdia_id";

	
	
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


	$tdataalmovconsdia_consulta["almovconsdia_id"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "almovconsdia_id";
//	consumo_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "consumo_id_fk";
	$fdata["GoodName"] = "consumo_id_fk";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","consumo_id_fk");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "alelemconsumo_consulta";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mcdcodelem", 'lookupF'=>"ec_codelem");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdcuenta", 'lookupF'=>"eccuenta");
	$edata["autoCompleteFields"][] = array('masterF'=>"mcdnomelem", 'lookupF'=>"ec_nomelemento");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "alelemenconsumo_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "alelemenconsumo_id";

	

	
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


	$tdataalmovconsdia_consulta["consumo_id_fk"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "consumo_id_fk";
//	mcdnrodoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mcdnrodoc";
	$fdata["GoodName"] = "mcdnrodoc";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcdnrodoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcdnrodoc";

		$fdata["sourceSingle"] = "mcdnrodoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcdnrodoc";

	
	
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


	$tdataalmovconsdia_consulta["mcdnrodoc"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcdnrodoc";
//	mcdalmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mcdalmacen";
	$fdata["GoodName"] = "mcdalmacen";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcdalmacen");
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


	$tdataalmovconsdia_consulta["mcdalmacen"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcdalmacen";
//	mcdcuenta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mcdcuenta";
	$fdata["GoodName"] = "mcdcuenta";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcdcuenta");
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


	$tdataalmovconsdia_consulta["mcdcuenta"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcdcuenta";
//	mcdcodelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mcdcodelem";
	$fdata["GoodName"] = "mcdcodelem";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcdcodelem");
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


	$tdataalmovconsdia_consulta["mcdcodelem"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcdcodelem";
//	mcdnomelem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mcdnomelem";
	$fdata["GoodName"] = "mcdnomelem";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcdnomelem");
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


	$tdataalmovconsdia_consulta["mcdnomelem"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcdnomelem";
//	mcd_cantmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mcd_cantmovto";
	$fdata["GoodName"] = "mcd_cantmovto";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcd_cantmovto");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcd_cantmovto";

		$fdata["sourceSingle"] = "mcd_cantmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_cantmovto";

	
	
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


	$tdataalmovconsdia_consulta["mcd_cantmovto"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcd_cantmovto";
//	mcd_saldant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "mcd_saldant";
	$fdata["GoodName"] = "mcd_saldant";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcd_saldant");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcd_saldant";

		$fdata["sourceSingle"] = "mcd_saldant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_saldant";

	
	
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


	$tdataalmovconsdia_consulta["mcd_saldant"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcd_saldant";
//	mcd_valunitant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mcd_valunitant";
	$fdata["GoodName"] = "mcd_valunitant";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcd_valunitant");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_valunitant";

		$fdata["sourceSingle"] = "mcd_valunitant";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_valunitant";

	
	
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


	$tdataalmovconsdia_consulta["mcd_valunitant"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcd_valunitant";
//	mcd_valmovto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mcd_valmovto";
	$fdata["GoodName"] = "mcd_valmovto";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcd_valmovto");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "mcd_valmovto";

		$fdata["sourceSingle"] = "mcd_valmovto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_valmovto";

	
	
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


	$tdataalmovconsdia_consulta["mcd_valmovto"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcd_valmovto";
//	mcd_salddisponible
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mcd_salddisponible";
	$fdata["GoodName"] = "mcd_salddisponible";
	$fdata["ownerTable"] = "almovconsdia";
	$fdata["Label"] = GetFieldLabel("almovconsdia_consulta","mcd_salddisponible");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mcd_salddisponible";

		$fdata["sourceSingle"] = "mcd_salddisponible";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mcd_salddisponible";

	
	
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


	$tdataalmovconsdia_consulta["mcd_salddisponible"] = $fdata;
		$tdataalmovconsdia_consulta[".searchableFields"][] = "mcd_salddisponible";


$tables_data["almovconsdia_consulta"]=&$tdataalmovconsdia_consulta;
$field_labels["almovconsdia_consulta"] = &$fieldLabelsalmovconsdia_consulta;
$fieldToolTips["almovconsdia_consulta"] = &$fieldToolTipsalmovconsdia_consulta;
$placeHolders["almovconsdia_consulta"] = &$placeHoldersalmovconsdia_consulta;
$page_titles["almovconsdia_consulta"] = &$pageTitlesalmovconsdia_consulta;


changeTextControlsToDate( "almovconsdia_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["almovconsdia_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["almovconsdia_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_almovconsdia_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "almovconsdia_id,  consumo_id_fk,  mcdnrodoc,  mcdalmacen,  mcdcuenta,  mcdcodelem,  mcdnomelem,  mcd_cantmovto,  mcd_saldant,  mcd_valunitant,  mcd_valmovto,  mcd_salddisponible";
$proto0["m_strFrom"] = "FROM almovconsdia";
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
	"m_strName" => "almovconsdia_id",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto6["m_sql"] = "almovconsdia_id";
$proto6["m_srcTableName"] = "almovconsdia_consulta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "consumo_id_fk",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto8["m_sql"] = "consumo_id_fk";
$proto8["m_srcTableName"] = "almovconsdia_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdnrodoc",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto10["m_sql"] = "mcdnrodoc";
$proto10["m_srcTableName"] = "almovconsdia_consulta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdalmacen",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto12["m_sql"] = "mcdalmacen";
$proto12["m_srcTableName"] = "almovconsdia_consulta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcuenta",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto14["m_sql"] = "mcdcuenta";
$proto14["m_srcTableName"] = "almovconsdia_consulta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdcodelem",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto16["m_sql"] = "mcdcodelem";
$proto16["m_srcTableName"] = "almovconsdia_consulta";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mcdnomelem",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto18["m_sql"] = "mcdnomelem";
$proto18["m_srcTableName"] = "almovconsdia_consulta";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_cantmovto",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto20["m_sql"] = "mcd_cantmovto";
$proto20["m_srcTableName"] = "almovconsdia_consulta";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_saldant",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto22["m_sql"] = "mcd_saldant";
$proto22["m_srcTableName"] = "almovconsdia_consulta";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_valunitant",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto24["m_sql"] = "mcd_valunitant";
$proto24["m_srcTableName"] = "almovconsdia_consulta";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_valmovto",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto26["m_sql"] = "mcd_valmovto";
$proto26["m_srcTableName"] = "almovconsdia_consulta";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mcd_salddisponible",
	"m_strTable" => "almovconsdia",
	"m_srcTableName" => "almovconsdia_consulta"
));

$proto28["m_sql"] = "mcd_salddisponible";
$proto28["m_srcTableName"] = "almovconsdia_consulta";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "almovconsdia";
$proto31["m_srcTableName"] = "almovconsdia_consulta";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "almovconsdia_id";
$proto31["m_columns"][] = "doclasedoc_id_fk";
$proto31["m_columns"][] = "consumo_id_fk";
$proto31["m_columns"][] = "mcdclasedoc";
$proto31["m_columns"][] = "mcdnrodoc";
$proto31["m_columns"][] = "mcdfechadoc";
$proto31["m_columns"][] = "mcdtipoestruc";
$proto31["m_columns"][] = "mcdalmacen";
$proto31["m_columns"][] = "mcdcuenta";
$proto31["m_columns"][] = "mcdcodelem";
$proto31["m_columns"][] = "mcdnomelem";
$proto31["m_columns"][] = "mcd_cantmovto";
$proto31["m_columns"][] = "mcd_saldant";
$proto31["m_columns"][] = "mcd_salddisponible";
$proto31["m_columns"][] = "mcd_valunitant";
$proto31["m_columns"][] = "mcd_valmovto";
$proto31["m_columns"][] = "mcd_tax";
$proto31["m_columns"][] = "geusuario";
$proto31["m_columns"][] = "mcd_cantasignada";
$proto31["m_columns"][] = "gefechaactua";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "almovconsdia";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "almovconsdia_consulta";
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
$proto0["m_srcTableName"]="almovconsdia_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_almovconsdia_consulta = createSqlQuery_almovconsdia_consulta();


	
								;

												

$tdataalmovconsdia_consulta[".sqlquery"] = $queryData_almovconsdia_consulta;



include_once(getabspath("include/almovconsdia_consulta_events.php"));
$tdataalmovconsdia_consulta[".hasEvents"] = true;

?>