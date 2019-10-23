<?php
$strTableName="L3P Import";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_3_rooms";

$gstrOrderBy="ORDER BY external_property_level_2_units.designation, external_property_level_3_rooms.room_designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("L3P Import");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["L3P Import"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>