<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 


if(!isLogged())
{ 
	return;
}
if(!IsAdmin())
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "Manage Unee-T Users";
$nonAdminTablesArr[] = "uneet_enterprise_users";
$nonAdminTablesArr[] = "Manage Users - Unee-T Enterprise UI";
$nonAdminTablesArr[] = "uneet_enterprise_organizations";
$nonAdminTablesArr[] = "ut_user_types";
$nonAdminTablesArr[] = "person_statuses";
$nonAdminTablesArr[] = "person_salutations";
$nonAdminTablesArr[] = "property_groups_countries";
$nonAdminTablesArr[] = "Manage Unit Names";
$nonAdminTablesArr[] = "ut_unit_types";
$nonAdminTablesArr[] = "ut_property_types";
$nonAdminTablesArr[] = "Manage User Types";
$nonAdminTablesArr[] = "ut_user_role_types";
$nonAdminTablesArr[] = "Manage User Default Visibility";
$nonAdminTablesArr[] = "Manage User Default Notifications";
$nonAdminTablesArr[] = "person_genders";
$nonAdminTablesArr[] = "Manage Areas";
$nonAdminTablesArr[] = "Manage Buildings";
$nonAdminTablesArr[] = "property_groups_areas";
$nonAdminTablesArr[] = "ut_external_sot_for_unee_t_objects";
$nonAdminTablesArr[] = "Manage Units";
$nonAdminTablesArr[] = "external_property_groups_areas";
$nonAdminTablesArr[] = "external_property_level_1_buildings";
$nonAdminTablesArr[] = "Manage Rooms";
$nonAdminTablesArr[] = "Assign Areas to User";
$nonAdminTablesArr[] = "Search Users";
$nonAdminTablesArr[] = "Assign Buildings to User";
$nonAdminTablesArr[] = "property_level_1_buildings";
$nonAdminTablesArr[] = "Assign Units to User";
$nonAdminTablesArr[] = "property_level_2_units";
$nonAdminTablesArr[] = "Assign Rooms to User";
$nonAdminTablesArr[] = "property_level_3_rooms";
$nonAdminTablesArr[] = "Search Rooms";
$nonAdminTablesArr[] = "Search Units";
$nonAdminTablesArr[] = "external_property_level_2_units";
$nonAdminTablesArr[] = "Search All Units";
$nonAdminTablesArr[] = "ut_map_external_source_units";
$nonAdminTablesArr[] = "Search Buildings";
$nonAdminTablesArr[] = "Export and Import Buildings";
$nonAdminTablesArr[] = "Export and Import Areas";
$nonAdminTablesArr[] = "Export and Import Units";
$nonAdminTablesArr[] = "List of Countries";
$nonAdminTablesArr[] = "Export and Import Rooms";
$nonAdminTablesArr[] = "Export and Import User Types";
$nonAdminTablesArr[] = "Export and Import Users";
$nonAdminTablesArr[] = "Assign Rooms";
$nonAdminTablesArr[] = "ut_map_external_source_users";
$nonAdminTablesArr[] = "Unee-T Enterprise Account";
$nonAdminTablesArr[] = "All Properties by Countries";
$nonAdminTablesArr[] = "SuperAdmin - manage UNTE admins";
$nonAdminTablesArr[] = "Super Admin - Manage Organization";
$nonAdminTablesArr[] = "Super Admin - Manage API Keys";
$nonAdminTablesArr[] = "Super Admin - Manage MEFE Master User";
$nonAdminTablesArr[] = "Super Admin - Default sot for Unee-T objects";
$nonAdminTablesArr[] = "User Permissions";
$nonAdminTablesArr[] = "uneet_enterprise_uggroups";
$nonAdminTablesArr[] = "Search list of possible assignees";
$nonAdminTablesArr[] = "Sources of Truth";
$nonAdminTablesArr[] = "Organization Default Area";
$nonAdminTablesArr[] = "Organization Default L1P";
$nonAdminTablesArr[] = "Search list of possible properties";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "uneet_enterprise_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "uneet_enterprise_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ".$ug_connection->addTableWrappers( "uneet_enterprise_ugmembers" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "uneet_enterprise_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}