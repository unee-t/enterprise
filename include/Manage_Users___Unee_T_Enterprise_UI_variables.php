<?php
$strTableName="Manage Users - Unee-T Enterprise UI";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="uneet_enterprise_users";

$gstrOrderBy="ORDER BY uneet_enterprise_organizations.`order`, uneet_enterprise_users.fullname";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Manage Users - Unee-T Enterprise UI");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Manage Users - Unee-T Enterprise UI"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>