<?php
$strTableName="L3P Export";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_3_rooms";

$gstrOrderBy="ORDER BY external_property_level_2_units.designation, external_property_level_3_rooms.room_designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("L3P Export");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["L3P Export"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>