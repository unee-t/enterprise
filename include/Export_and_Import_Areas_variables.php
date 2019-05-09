<?php
$strTableName="Export and Import Areas";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_groups_areas";

$gstrOrderBy="ORDER BY external_property_groups_areas.country_code, external_property_groups_areas.`order`";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Export and Import Areas");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Export and Import Areas"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>