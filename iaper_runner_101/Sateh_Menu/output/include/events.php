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
		$this->events["AfterSuccessfulRegistration"]=true;

		$this->events["BeforeLogin"]=true;


//	onscreen events



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
				// After successful registration
function AfterSuccessfulRegistration(&$userdata, &$pageObject)
{

		



//**********  Insert a record into another table  ************

$data = array();

$data["udp_usu_id"] = $userdata["usu_id"];

DB::Insert("usuarios_dados_profissionais", $data );




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulRegistration

		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
				// Before login
function BeforeLogin(&$username, &$password, &$message, &$pageObject, &$values)
{

		
echo "UserID: " . $_SESSION["UserID"];

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

//	onscreen events




}
?>
