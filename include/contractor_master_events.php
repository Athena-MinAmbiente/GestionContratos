<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_contractor_master  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["BeforeMoveNextList"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		DB::Exec("CALL ContracProcess");

//**********  Send email with new data  ************

$email=$values['contractor_email'];
$from=$_SESSION['correosmtp'];
$fromName="Grupo de contratos";
$msg="<img src='".$_SESSION['logo']."' width='299' height='59' alt='Logo de la empresa'>

  <table width='100%' border='0' cellpadding='0' cellspacing='0'>
    <tr>
      <td colspan='2'>&nbsp;</td>
    </tr>
    <tr>
      <td colspan='2'>¡Hola!</td>
    </tr>
    <tr>
      <td colspan='2'>Se ha creado un nuevo registro en la plataforma de contratos. Por favor, ingrese al módulo de <a href='".$_SESSION['GURLHOME']."' target='_blank'>contratistas</a> para finalizar el proceso de actualización de datos.</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan='2'>Información de acceso:</td>
    </tr>
    <tr>
      <td>Usuario:</td>
      <td>Número de documento</td>
    </tr>
    <tr>
      <td>Contraseña:</td>
      <td>4 últimos números de su documento</td>
    </tr>
  </table>

  <p>Cordialmente,</p>
  <p>".$_SESSION['GEntidad']."</p>";
$subject="Nuevo proveedor | Contratista";

//$msg.= "Name: ".$values["name"]."\r\n";
//$msg.= "Email: ".$values["email"]."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email,'cc' => $values['contractor_email_mincit'], 'bcc' => $_SESSION['EmailBCC'], 'subject' => $subject, 'htmlbody' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		//DB::Exec("CALL ContracProcess");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		
DB::Exec("CALL ContracProcess");

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
