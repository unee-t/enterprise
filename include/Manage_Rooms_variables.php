<?php
$strTableName="Manage Rooms";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_3_rooms";

$gstrOrderBy="ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_level_1_buildings.`order`, external_property_level_1_buildings.tower, external_property_level_2_units.designation, external_property_level_3_rooms.room_designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Manage Rooms");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Manage Rooms"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>