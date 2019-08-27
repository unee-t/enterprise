<?php
$strTableName="Search Rooms";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="property_level_3_rooms";

$gstrOrderBy="ORDER BY property_groups_countries.country_name, property_groups_areas.`order`, property_groups_areas.area_name, property_level_1_buildings.`order`, property_level_1_buildings.designation, property_level_2_units.designation, property_level_3_rooms.room_designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Search Rooms");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Search Rooms"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>