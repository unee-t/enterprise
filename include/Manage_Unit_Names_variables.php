<?php
$strTableName="Manage Unit Names";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ut_map_external_source_units";

$gstrOrderBy="ORDER BY ut_map_external_source_units.uneet_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Manage Unit Names");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Manage Unit Names"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>