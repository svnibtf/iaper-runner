<?php
$strTableName="View Chart";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="View Chart";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("View Chart");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["View Chart"];

$reportCaseSensitiveGroupFields = false;

?>