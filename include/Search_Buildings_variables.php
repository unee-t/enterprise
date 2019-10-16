<?php
$strTableName="Search Buildings";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="property_level_1_buildings";

$gstrOrderBy="ORDER BY 
	property_groups_countries.country_name
	, property_groups_areas.`order`
	, property_groups_areas.area_name
	, property_level_1_buildings.`order`
	, property_level_1_buildings.designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Search Buildings");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Search Buildings"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>