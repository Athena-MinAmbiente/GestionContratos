<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_q_ctrl_entrega_acta_liquidacion_002  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeShowList"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowList(&$xt, &$templatefile, $pageObject)
{

		$sql = "select count(*) from dbct.q_ctrl_entrega_acta_liquidacion_002";
$recCount = DB::DBLookup($sql);
$pageObject->setProxyValue("recCount",$recCount);
// Place event code here.
// Use "Add Action" button to add code snippets.

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
