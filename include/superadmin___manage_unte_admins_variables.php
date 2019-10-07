<?php
$strTableName="SuperAdmin - manage UNTE admins";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="uneet_enterprise_users";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("SuperAdmin - manage UNTE admins");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["SuperAdmin - manage UNTE admins"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>