<?php
$strTableName="Search Units";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="property_level_2_units";

$gstrOrderBy="ORDER BY property_groups_countries.country_name, property_groups_areas.`order`, property_groups_areas.area_name, property_level_1_buildings.`order`, property_level_1_buildings.designation, property_level_2_units.designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Search Units");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Search Units"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>