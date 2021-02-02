<?php
$strTableName="adm_agenda_tipos_recebimento";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="adm_agenda_tipos_recebimento";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("adm_agenda_tipos_recebimento");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["adm_agenda_tipos_recebimento"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>