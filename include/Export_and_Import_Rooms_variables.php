<?php
$strTableName="Export and Import Rooms";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_3_rooms";

$gstrOrderBy="ORDER BY external_property_level_2_units.designation ASC, external_property_level_3_rooms.room_designation ASC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Export and Import Rooms");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Export and Import Rooms"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>