<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_almovconsdia_egresos  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeAdd"]=true;


		$this->events["AfterAdd"]=true;

		$this->events["BeforeProcessList"]=true;

		$this->events["BeforeEdit"]=true;


		$this->events["AfterEdit"]=true;

		$this->events["AfterDelete"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		if($values['almovconsdiae_cantidad'] > $values['ctrl_saldo']){
$pageObject->setProxyValue("invalido",true);
//$pageObject->stopPRG = false;
//$message = "El valor solicitado, supera el valor del saldo disponible, ajuste el valor antes de continuar";
$return = false;
}
else 
{
return true;
}

;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$_SESSION["added"] = true;

DB::SetConnection("dbrf");
DB::Exec("CALL ActualizarSaldoConsumo");
DB::SetConnection("");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

				// List page: Before process
function BeforeProcessList($pageObject)
{

		IF($_SESSION["added"] == true){
	$pageObject->setProxyValue("added",true);
	unset($_SESSION["added"]);
	$pageObject->stopPRG = true;
}

IF($_SESSION["updated"] == true){
	$pageObject->setProxyValue("updated",true);
	unset($_SESSION["updated"]);
	$pageObject->stopPRG = true;
}

IF($_SESSION["deleted"] == true){
	$pageObject->setProxyValue("deleted",true);
	unset($_SESSION["deleted"]);
	$pageObject->stopPRG = true;
}
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		if($values['almovconsdiae_cantidad'] > $values['ctrl_saldo']){
$pageObject->setProxyValue("invalido",true);
//$pageObject->stopPRG = false;
//$message = "El valor solicitado, supera el valor del saldo disponible, ajuste el valor antes de continuar";
$return = false;
}
else 
{
return true;
}

;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$_SESSION["updated"] = true;

DB::SetConnection("dbrf");
DB::Exec("CALL ActualizarSaldoConsumo");
DB::SetConnection("");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record deleted
function AfterDelete($where, &$deleted_values, &$message, $pageObject)
{

		$_SESSION["deleted"] = true;


DB::SetConnection("dbrf");
DB::Exec("CALL ActualizarSaldoConsumo");
DB::SetConnection("");


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterDelete

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>