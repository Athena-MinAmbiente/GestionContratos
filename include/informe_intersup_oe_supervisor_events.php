<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_informe_intersup_oe_supervisor  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["IsRecordEditable"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeProcessRowList"]=true;


		$this->events["BeforeEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Is Record Editable
function IsRecordEditable($values, $isEditable)
{

		if ($values['sup_aprueba'] == 1)
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;
;		
} // function IsRecordEditable

		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup
INNER JOIN dbct.q_qty_ctrl_inf_sup ON dbct.informe_intersup.inf_id = dbct.q_qty_ctrl_inf_sup.inf_id_fk
SET
dbct.informe_intersup.qty_inf_verifica = dbct.q_qty_ctrl_inf_sup.qty;");
DB::Exec( $sql );



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, $pageObject)
{

		DB::Exec("CALL ContracProcess");

$_SESSION["ContID"] = $data['id_cont_fk'];
$_SESSION["InfID"] = $data['inf_id_fk'];

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		$dirname= "../GesDoc/Contratos/".$values['id_cont_fk']."/informes/";
    if (is_dir($dirname)) {
    } else {
       mkdir("../GesDoc/Contratos/".$values['id_cont_fk']."/informes/", 0777);
    }

// crea segunbdo directorio

$dirnamea= "../GesDoc/Contratos/".$values['id_cont_fk']."/informes/".$values['inf_id_fk'];
    if (is_dir($dirnamea)) {
    } else {
       mkdir("../GesDoc/Contratos/".$values['id_cont_fk']."/informes/".$values['inf_id_fk'], 0777);
    }

// crea tercer directorio

$dirnamea= "../GesDoc/Contratos/".$values['id_cont_fk']."/informes/".$values['inf_id_fk']."/evidencias/";
    if (is_dir($dirnamea)) {
    } else {
       mkdir("../GesDoc/Contratos/".$values['id_cont_fk']."/informes/".$values['inf_id_fk']."/evidencias/", 0777);
    }

return true;

;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>