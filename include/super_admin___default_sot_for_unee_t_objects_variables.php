<?php
$strTableName="Super Admin - Default sot for Unee-T objects";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ut_external_sot_for_unee_t_objects";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Super Admin - Default sot for Unee-T objects");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Super Admin - Default sot for Unee-T objects"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>