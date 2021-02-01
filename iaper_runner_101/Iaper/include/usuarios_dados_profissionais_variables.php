<?php
$strTableName="usuarios_dados_profissionais";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="usuarios_dados_profissionais";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("usuarios_dados_profissionais");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["usuarios_dados_profissionais"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>