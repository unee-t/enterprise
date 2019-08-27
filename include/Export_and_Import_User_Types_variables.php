<?php
$strTableName="Export and Import User Types";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="ut_user_types";

$gstrOrderBy="ORDER BY ut_user_role_types.role_type, ut_user_types.is_obsolete, ut_user_types.`order`, ut_user_types.organization_id DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("Export and Import User Types");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["Export and Import User Types"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>