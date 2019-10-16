<?php
$strTableName="Export and Import Buildings";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_1_buildings";

$gstrOrderBy="ORDER BY external_property_level_1_buildings.country_code, external_property_level_1_buildings.`order`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Export and Import Buildings");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Export and Import Buildings"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>