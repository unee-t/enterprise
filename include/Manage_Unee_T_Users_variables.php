<?php
$strTableName="Manage Unee-T Users";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="external_persons";

$gstrOrderBy="ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Manage Unee-T Users");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Manage Unee-T Users"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>