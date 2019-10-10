<?php
$strTableName="uneet_enterprise_uggroups";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="uneet_enterprise_uggroups";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("uneet_enterprise_uggroups");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["uneet_enterprise_uggroups"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>