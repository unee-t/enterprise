<?php
$strTableName="L1P Import";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_1_buildings";

$gstrOrderBy="ORDER BY external_property_level_1_buildings.country_code, external_property_level_1_buildings.`order`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("L1P Import");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["L1P Import"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>