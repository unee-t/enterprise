<?php
$strTableName="Export and Import Users";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_persons";

$gstrOrderBy="ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Export and Import Users");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Export and Import Users"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>