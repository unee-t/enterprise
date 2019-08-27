<?php 
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");


$table = postvalue("table");
$pageName = postvalue("pagename");
$strTableName = GetTableByShort($table);

if( !checkTableName($table) )
{
	exit(0);
}

require_once("include/".$table."_variables.php");


if(!isLogged() || !CheckSecurity(@$_SESSION["_".$strTableName."_OwnerID"],"Search"))
{ 
	return;
}

$strFilename = postvalue("filename");
$ext = substr( $strFilename, strlen($strFilename) - 4 );
$ctype = getContentTypeByExtension($ext);

$field = postvalue("field");


$pSet = new ProjectSettings( $strTableName, PAGE_LIST, $pageName );

if( !$pSet->checkFieldPermissions( $field ) )
	exit();

if( !$gQuery->HasGroupBy() )
{
	// Do not select any fields except current (file) field.
	// If query has 'group by' clause then other fields are used in it and we may not simply cut 'em off.
	// Just don't do anything in that case.
	$gQuery->RemoveAllFieldsExcept( $pSet->getFieldIndex($field) );
}

$_connection = $cman->byTable( $strTableName );

//	construct sql
$keysArr = $pSet->getTableKeys();
$keys = array();
foreach( $keysArr as $ind=>$k )
{	
	$keys[$k] = postvalue("key".($ind + 1));
}
$where = KeyWhere($keys);

if( $pSet->getAdvancedSecurityType() == ADVSECURITY_VIEW_OWN )
{
	$where = whereAdd( $where, SecuritySQL("Search") );	
}


$sql = $gQuery->gSQLWhere( $where );
$qResult = $_connection->query( $sql );
if( !$qResult || !($data = $qResult->fetchAssoc()) )
	return;

$value = $_connection->stripSlashesBinary( $data[$field ] );

header("Content-Type: ".$ctype);
header("Content-Disposition: attachment;Filename=\"".$strFilename."\"");
header("Cache-Control: private");
SendContentLength( strlen_bin($value) );
echoBinary( $value );
return;

?>
