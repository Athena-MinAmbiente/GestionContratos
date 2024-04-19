<?php
class eventsBase
{
	var $events = array();
	var $maps = array();
	function exists($event, $table = "")
	{
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
}

class class_GlobalEvents extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["AfterSuccessfulLogin"]=true;



//	onscreen events
		$this->events["CSMailServer"] = true;


		$this->events["IsRecordEditable"]["informe_intersup"] = true;
		$this->events["IsRecordEditable"]["informe_intersup_oe"] = true;
		$this->events["IsRecordEditable"]["informe_intersup_oe_supervisor"] = true;
		$this->events["IsRecordEditable"]["informe_intersup2r"] = true;

		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, $pageObject)
{

		$_SESSION["UID"]=$data["idusrglobal"]; // ID de usuario unico registrado en DB
$_SESSION["UEmail"]=$data["usr_email"]; // Session de correo electrónico
$_SESSION["UNombres"]=$data["usr_nombresfull"]; // Sesión de nombres y apellidos
$_SESSION["UDocumento"]=$data["usr_personalid"]; // Sesión de documento de identificación
$_SESSION["UDep"]=$data["usr_dep"]; // Sesión Dependencia FK dbedl (dependnecias)
$_SESSION["UCargo"]=$data["usr_cargo"]; // Sesión de cargo (Códido) FK dbedl (Cargos)



// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events
	function event_CSMailServer(&$params)
	{
	// Put your code here.
echo $_SESSION['mailserver'];
	;
}




	function IsRecordEditable($values, $isEditable, $table = "")
	{
		global $strTableName;
		if($table == "")
			$table = $strTableName;
		if($table == "informe_intersup")
		{
			if ($values['inf_estado'] == 2 and $values['qty_inf'] == $values['qty_inf_verifica'])
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		if($table == "informe_intersup_oe")
		{
			if ($values['sup_aprueba'] == 1)
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		if($table == "informe_intersup_oe_supervisor")
		{
			if ($values['sup_aprueba'] == 1)
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		if($table == "informe_intersup2r")
		{
			if ($values['inf_estado'] == 2 and $values['qty_inf'] == $values['qty_inf_verifica'])
return true;
else
return false;

// Place event code here.
// Use "Add Action" button to add code snippets.

return $isEditable;;
		}
		return $isEditable;
	}
}
?>
