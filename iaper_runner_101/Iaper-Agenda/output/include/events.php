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

		$this->events["ModifyMenuItem"]=true;


//	onscreen events
		$this->events["calcalendar_snippet"] = true;
		$this->events["calcalendar_snippet2"] = true;
		$this->events["calcalendar_snippet1"] = true;
		$this->events["calglobals_snippet"] = true;



		}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
				// After successful login
function AfterSuccessfulLogin($username, $password, &$data, &$pageObject)
{

		header("Location: calcalendar_list.php");
die();

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterSuccessfulLogin

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		if($_SESSION["UserID"]=="Guest" || $_SESSION["UserID"]=="")
	return false;
else
	return true;
;		
} // function ModifyMenuItem

		
		

//	onscreen events
	function event_calcalendar_snippet(&$params)
	{
	echo "<div id='calendar'></div>";
	;
}
	function event_calcalendar_snippet2(&$params)
	{
	?>
<script>
<?php
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsEdit($_REQUEST["editid1"]);
?>
</script>
<?php
	;
}
	function event_calcalendar_snippet1(&$params)
	{
	?>
<script>
<?php
calendar_getDataOfCategoryLookup();
calendar_outputTimeFieldsAdd();
?>
</script>
<?php
	;
}
	function event_calglobals_snippet(&$params)
	{
	?>
<script>
<?php
calendar_outputTimeFieldsEdit(-1);
?>
</script>
<?php
	;
}




}
?>
