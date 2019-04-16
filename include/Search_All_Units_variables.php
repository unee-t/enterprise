<?php
$strTableName="Search All Units";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_2_units";

$gstrOrderBy="ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_groups_areas.area_name, external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, external_property_level_2_units.designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Search All Units");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Search All Units"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>