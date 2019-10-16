<?php
$strTableName="Super Admin - Manage MEFE Master User";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ut_map_external_source_users";

$gstrOrderBy="ORDER BY persons.organization_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Super Admin - Manage MEFE Master User");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Super Admin - Manage MEFE Master User"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>