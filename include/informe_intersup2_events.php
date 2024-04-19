<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_informe_intersup2  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


		$this->events["AfterEdit"]=true;


		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeShowEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup_plan_pagos
INNER JOIN dbct.informe_intersup ON dbct.informe_intersup_plan_pagos.id_cont_fk = dbct.informe_intersup.id_cont_fk AND dbct.informe_intersup_plan_pagos.inf_consecutivo = dbct.informe_intersup.inf_consecutivo
SET
dbct.informe_intersup_plan_pagos.inf_st = 2
WHERE
dbct.informe_intersup.inf_estado = 1;");
DB::Exec( $sql );

$sql = DB::prepareSQL("INSERT IGNORE INTO dbct.informe_intersup_oe (
dbct.informe_intersup_oe.inf_id_fk,
dbct.informe_intersup_oe.oe_id_fk,
dbct.informe_intersup_oe.id_cont_fk,
dbct.informe_intersup_oe.cont_nit_contra_ta_fk,
dbct.informe_intersup_oe.oe_ordinal,
dbct.informe_intersup_oe.oe)
SELECT
dbct.q_oe_informe.inf_id,
dbct.q_oe_informe.oe_id,
dbct.q_oe_informe.id_cont_fk,
dbct.q_oe_informe.cont_nit_contra_ta_fk,
dbct.q_oe_informe.oe_ordinal,
dbct.q_oe_informe.oe
FROM
dbct.q_oe_informe");
DB::Exec( $sql );

$sql = DB::prepareSQL("UPDATE
dbct.informe_intersup
INNER JOIN dbct.q_qty_info_inf ON dbct.informe_intersup.inf_id = dbct.q_qty_info_inf.inf_id_fk
SET
dbct.informe_intersup.qty_inf = dbct.q_qty_info_inf.qty;");
DB::Exec( $sql );
//**********  Send email with new data  ************

$email=$values['inf_mail_a'].",".$values['inf_mail_b'];
$from="notificaciones@mincit.gov.coo";
$fromName="MINCIT | INFORMES SUPERVISIÓN ";
$msg="Se ha habilitado un nuevo informe para su gestión con el código de verificación: ".$values['inf_hash']." revisa tu bandeja de entrada en el módulo de contratistas"."\r\n";
$subject="Nuevo informe de supervisión | Persona Natural :: Código de informe: ".$values['inf_hash'];

$msg.= "Número de informe: ".$values['inf_consecutivo']."\r\n";
$msg.= "Periodo: ".$values['inf_fecharep_i']." al ".$values['inf_fecharep_f']."\r\n";
//$msg.= "Asunto: ".$values['hr_asunto']."\r\n";
$msg.= "Para atender este requerimiento ingrese a: http://gestion.mincit.gov.co/Athena/GestionContratos/"."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email, 'bcc' => 'mincit.osi@gmail.com', 'subject' => $subject, 'body' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$email=$values['sign_mailnot'];
$from="notificaciones@jcc.gov.co";
$fromName="INF.SUPERVISIÓN | CLAVE DINÁMICA";
$msg="Usted está solicitando el instrumento de clave dinámica para realizar la firma del informe se supervisión con código <strong>".$values['inf_hash']."</strong>.</br>Conforme con las condiciones que establece el acuerdo; si está de acuerdo, suministre el siguiente código para validación y firma del informe de supervisión:</br><strong> ".$values['sign_hash']." </strong></br>cópielo y péguelo en el campo correspondiente de validación"."\r\n";
$subject="Se informa clave dinámica - código para validación de informe | Persona Natural";

//$msg.= "Número de nforme: ".$values['inf_consecutivo']."\r\n";
//$msg.= "Periodo: ".$values['inf_fecharep_i']." al ".$values['inf_fecharep_f']."\r\n";
//$msg.= "Asunto: ".$values['hr_asunto']."\r\n";
$msg.= "</br></br>Para atender este requerimiento ingrese a: ".$_SESSION['GURL']."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email, 'bcc' => 'mincit.osi@gmail.com', 'subject' => $subject, 'htmlbody' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		


// Verifica si el estado de la información es 2 y la cantidad de información es igual a la cantidad verificada
if ($data['inf_estado'] == 2 && $data['qty_inf'] == $data['qty_inf_verifica']) {
    // Si se cumplen ambas condiciones, muestra el elemento "grid_edit" y oculta "grid_edit1"
    $pageObject->showItem("grid_edit", $recordId);
    $pageObject->hideItem("grid_edit1", $recordId);
} else {
    // Si no se cumplen ambas condiciones, oculta "grid_edit" y muestra "grid_edit1"
    $pageObject->hideItem("grid_edit", $recordId);
    $pageObject->showItem("grid_edit1", $recordId);
}




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowEdit(&$xt, &$templatefile, $values, $pageObject)
{

		$pageObject->hideField("sign_hash");
$pageObject->hideField("sign_date");
$pageObject->hideField("sign_file");


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeShowEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
