<?php
$strTableName="Unee-T Enterprise Configuration";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ut_external_sot_for_unee_t_objects";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Unee-T Enterprise Configuration");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Unee-T Enterprise Configuration"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>