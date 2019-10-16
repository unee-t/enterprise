<?php
$strTableName="Export and Import Units";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_property_level_2_units";

$gstrOrderBy="ORDER BY external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, ut_unit_types.designation, external_property_level_2_units.designation";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Export and Import Units");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Export and Import Units"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>