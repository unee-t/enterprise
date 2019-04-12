<?php
$strTableName="Assign Buildings to User";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_map_user_unit_role_permissions_level_1";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Assign Buildings to User");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Assign Buildings to User"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>