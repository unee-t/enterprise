<?php 
include_once("include/dbcommon.php");

$table = postvalue("table");

if( !checkTableName($table) )
{
	exit(0);
}

include_once("include/" . $table . "_variables.php");

if( !isset($gQuery) )
{
	if( !isset($gSettings) )
		$gSettings = new ProjectSettings( GetTableByShort( $table ) );
	
	$gQuery = $gSettings->getSQLQuery();
}

$params = array();
$params["table"] = $table;
$params["field"] = postvalue("field");
$params["src"] = postvalue("src") == 1;
$params["alt"] = postvalue("alt");

$keysArr = $gSettings->getTableKeys();
$keys = array();
foreach( $keysArr as $ind => $k )
{
	$keys[ $k ] = postvalue("key".($ind + 1));
}
$params["keys"] = $keys;

$file = GetImageFromDB($gQuery, $params);
?>
