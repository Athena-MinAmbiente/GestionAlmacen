<?php
require_once(getabspath("classes/cipherer.php"));



$tdatadashboard = array();
$tdatadashboard[".ShortName"] = "dashboard";

$tdatadashboard[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];


//	field labels
$fieldLabelsdashboard = array();
$pageTitlesdashboard = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdashboard["Spanish"] = array();
	$fieldLabelsdashboard["Spanish"]["global_users_idusrglobal"] = "UID";
	$fieldLabelsdashboard["Spanish"]["global_users_Username"] = "Usuario";
	$fieldLabelsdashboard["Spanish"]["global_users_usr_nombresfull"] = "Nombres";
	$fieldLabelsdashboard["Spanish"]["global_users_usr_personalid"] = "Documento";
	$fieldLabelsdashboard["Spanish"]["global_users_Password"] = "Password";
	$fieldLabelsdashboard["Spanish"]["global_users_usr_email"] = "Email";
	$fieldLabelsdashboard["Spanish"]["global_users_global_rol"] = "Global Rol";
	$fieldLabelsdashboard["Spanish"]["global_users_active"] = "Active";
}

/*
//	search fields
$tdatadashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"idusrglobal" );
$tdatadashboard[".searchFields"]["global_users_idusrglobal"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"Username" );
$tdatadashboard[".searchFields"]["global_users_Username"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"usr_nombresfull" );
$tdatadashboard[".searchFields"]["global_users_usr_nombresfull"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"usr_personalid" );
$tdatadashboard[".searchFields"]["global_users_usr_personalid"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"Password" );
$tdatadashboard[".searchFields"]["global_users_Password"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"usr_email" );
$tdatadashboard[".searchFields"]["global_users_usr_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"global_rol" );
$tdatadashboard[".searchFields"]["global_users_global_rol"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"global_users", "field"=>"active" );
$tdatadashboard[".searchFields"]["global_users_active"] = $dashField;

// all search fields
$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".allSearchFields"][] = "global_users_idusrglobal";
$tdatadashboard[".allSearchFields"][] = "global_users_Username";
$tdatadashboard[".allSearchFields"][] = "global_users_usr_nombresfull";
$tdatadashboard[".allSearchFields"][] = "global_users_usr_personalid";
$tdatadashboard[".allSearchFields"][] = "global_users_Password";
$tdatadashboard[".allSearchFields"][] = "global_users_usr_email";
$tdatadashboard[".allSearchFields"][] = "global_users_global_rol";
$tdatadashboard[".allSearchFields"][] = "global_users_active";

// good like search fields
$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "global_users_idusrglobal";
$tdatadashboard[".googleLikeFields"][] = "global_users_Username";
$tdatadashboard[".googleLikeFields"][] = "global_users_usr_nombresfull";
$tdatadashboard[".googleLikeFields"][] = "global_users_usr_personalid";
$tdatadashboard[".googleLikeFields"][] = "global_users_Password";
$tdatadashboard[".googleLikeFields"][] = "global_users_usr_email";
$tdatadashboard[".googleLikeFields"][] = "global_users_global_rol";
$tdatadashboard[".googleLikeFields"][] = "global_users_active";
*/

/*
$tdatadashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "global_users_snippet", "table" => "global_users",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet";


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "global_users_snippet1", "table" => "global_users",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet1";


	$tdatadashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "global_users_snippet2", "table" => "global_users",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "Dashboard_snippet2";


	$tdatadashboard[".dashElements"][] = $dbelement;
*/
$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".entityType"] = 4;







include_once(getabspath("include/dashboard_events.php"));
$tdatadashboard[".hasEvents"] = true;


$tdatadashboard[".tableType"] = "dashboard";


				
$tdatadashboard[".addPageEvents"] = false;

$tdatadashboard[".isUseAjaxSuggest"] = true;

$tables_data["Dashboard"]=&$tdatadashboard;
$field_labels["Dashboard"] = &$fieldLabelsdashboard;
$page_titles["Dashboard"] = &$pageTitlesdashboard;

?>