<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}

	public static function Select($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		$sql = "SELECT * FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$queryResult = DB::CurrentConnection()->querySilent( $sql );

		return $queryResult;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$sql = "DELETE FROM ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] ) . $whereSql;
		$ret = DB::CurrentConnection()->execSilent( $sql );

		return $ret;
	}

	public static function Insert($table, $data)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$iFields = "";
		$iValues = "";
		$blobs = array();
		foreach($data as $fieldname => $value)
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$iFields.= DB::CurrentConnection()->addFieldWrappers( $field["name"] ).",";
			$iValues.= DB::_prepareValue($value, $field["type"]) . ",";

			if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if( $iFields != "" && $iValues != "" )
		{
			$iFields = substr($iFields, 0, -1);
			$iValues = substr($iValues, 0, -1);
			$sql = "INSERT INTO ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." (".$iFields.") values (".$iValues.")";

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$result = false;
		$tableInfo = DB::_getTableInfo($table);

		if ( !$tableInfo )
			return false;

		$whereSql = DB::_getWhereSql($userConditions, $tableInfo["fields"]);

		if( $whereSql == "" )
			return false;

		$updateValues = array();
		$blobs = array();
		foreach( $data as $fieldname => $value )
		{
			$field = getArrayElementNC($tableInfo["fields"], $fieldname);

			// user field not found in table
			if ( is_null($field) )
				continue;

			$prepareFieldName = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			$prepareValue = DB::_prepareValue($value, $field["type"]);
			$updateValues[] = $prepareFieldName."=".$prepareValue;

			if ( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
			{
				if ( IsBinaryType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;

				if ( DB::CurrentConnection()->dbType == nDATABASE_Informix && IsTextType( $field["type"] ) )
					$blobs[ $field["name"] ] = $value;
			}
		}

		if ( count($updateValues) > 0 )
		{
			$updateSQL = implode(",", $updateValues);
			$sql = "UPDATE ".DB::CurrentConnection()->addTableWrappers( $tableInfo['fullName'] )." SET ". $updateSQL . $whereSql;

			if ( count($blobs) > 0 )
				$result = DB::_execSilentWithBlobProcessing($blobs, $sql, $tableInfo['fields']);
			else
				$result = DB::CurrentConnection()->execSilent( $sql );
		}

		return $result;
	}

	protected static function _getWhereSql($userConditions, $founedfields)
	{
		if( !is_array( $userConditions ) )
		{
			$whereSql = trim( $userConditions );
			if( $whereSql != "")
				$whereSql = " WHERE " . $whereSql;
			return $whereSql;
		}

		$conditions = array();
		foreach($userConditions as $fieldname => $value)
		{
			$field = getArrayElementNC($founedfields, $fieldname);
			// user field not found in table
			if ( is_null($field) )
				continue;

			$wrappedField = DB::CurrentConnection()->addFieldWrappers( $field["name"] );
			if ( is_null($value) )
			{
				$conditions[] = $wrappedField . " IS NULL";
			}
			else
			{
				$conditions[] = $wrappedField . "=" . DB::_prepareValue($value, $field["type"]);
			}
		}

		$whereSql = "";
		if( count($conditions) > 0 )
		{
			$whereSql .= " WHERE " . implode(" AND ", $conditions);
		}

		return $whereSql;
	}

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	protected static function _findDalTable( $table )
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList();

		//	exact match
		foreach( $dalTables[$conn->connId] as $t )
		{
			if( $t["schema"] == $tableName["schema"] && $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( strtoupper( $t["schema"] ) == $tableName["schema"] && strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	protected static function _getTableInfo($table)
	{
		global $dal_info, $tableinfo_cache;
		$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList()
	{
		global $dalTables;
		$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "unee_t_enterprise_v1_3_0_at_localhost" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "external_map_user_unit_role_permissions_areas", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_map_user_unit_role_permissions_areas", "altvarname" => "external_map_user_unit_role_permissions_areas", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_map_user_unit_role_permissions_level_1", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_map_user_unit_role_permissions_level_1", "altvarname" => "external_map_user_unit_role_permissions_level_1", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_map_user_unit_role_permissions_level_2", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_map_user_unit_role_permissions_level_2", "altvarname" => "external_map_user_unit_role_permissions_level_2", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_map_user_unit_role_permissions_level_3", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_map_user_unit_role_permissions_level_3", "altvarname" => "external_map_user_unit_role_permissions_level_3", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_persons", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_persons", "altvarname" => "external_persons", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_property_groups_areas", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_property_groups_areas", "altvarname" => "external_property_groups_areas", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_property_level_1_buildings", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_property_level_1_buildings", "altvarname" => "external_property_level_1_buildings", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_property_level_2_units", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_property_level_2_units", "altvarname" => "external_property_level_2_units", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "external_property_level_3_rooms", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__external_property_level_3_rooms", "altvarname" => "external_property_level_3_rooms", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "person_genders", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__person_genders", "altvarname" => "person_genders", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "person_salutations", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__person_salutations", "altvarname" => "person_salutations", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "person_statuses", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__person_statuses", "altvarname" => "person_statuses", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "persons", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__persons", "altvarname" => "persons", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "property_groups_areas", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__property_groups_areas", "altvarname" => "property_groups_areas", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "property_groups_countries", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__property_groups_countries", "altvarname" => "property_groups_countries", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "property_level_1_buildings", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__property_level_1_buildings", "altvarname" => "property_level_1_buildings", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "property_level_2_units", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__property_level_2_units", "altvarname" => "property_level_2_units", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "property_level_3_rooms", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__property_level_3_rooms", "altvarname" => "property_level_3_rooms", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "property_types_level_3_rooms", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__property_types_level_3_rooms", "altvarname" => "property_types_level_3_rooms", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_audit", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_audit", "altvarname" => "uneet_enterprise_audit", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_organizations", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_organizations", "altvarname" => "uneet_enterprise_organizations", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_settings", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_settings", "altvarname" => "uneet_enterprise_settings", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_uggroups", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_uggroups", "altvarname" => "uneet_enterprise_uggroups", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_ugmembers", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_ugmembers", "altvarname" => "uneet_enterprise_ugmembers", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_ugrights", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_ugrights", "altvarname" => "uneet_enterprise_ugrights", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "uneet_enterprise_users", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__uneet_enterprise_users", "altvarname" => "uneet_enterprise_users", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_api_keys", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_api_keys", "altvarname" => "ut_api_keys", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_check_unee_t_update_add_user_to_unit_level_1", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_check_unee_t_update_add_user_to_unit_level_1", "altvarname" => "ut_check_unee_t_update_add_user_to_unit_level_1", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_check_unee_t_update_add_user_to_unit_level_2", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_check_unee_t_update_add_user_to_unit_level_2", "altvarname" => "ut_check_unee_t_update_add_user_to_unit_level_2", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_check_unee_t_update_add_user_to_unit_level_3", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_check_unee_t_update_add_user_to_unit_level_3", "altvarname" => "ut_check_unee_t_update_add_user_to_unit_level_3", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_check_unee_t_updates_property_level_1", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_check_unee_t_updates_property_level_1", "altvarname" => "ut_check_unee_t_updates_property_level_1", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_check_unee_t_updates_property_level_2", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_check_unee_t_updates_property_level_2", "altvarname" => "ut_check_unee_t_updates_property_level_2", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_check_unee_t_updates_property_level_3", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_check_unee_t_updates_property_level_3", "altvarname" => "ut_check_unee_t_updates_property_level_3", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_external_sot_for_unee_t_objects", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_external_sot_for_unee_t_objects", "altvarname" => "ut_external_sot_for_unee_t_objects", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_info_mefe_users", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_info_mefe_users", "altvarname" => "ut_info_mefe_users", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_list_possible_assignees", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_list_possible_assignees", "altvarname" => "ut_list_possible_assignees", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_list_possible_properties", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_list_possible_properties", "altvarname" => "ut_list_possible_properties", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_map_external_source_areas", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_map_external_source_areas", "altvarname" => "ut_map_external_source_areas", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_map_external_source_units", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_map_external_source_units", "altvarname" => "ut_map_external_source_units", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_map_external_source_users", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_map_external_source_users", "altvarname" => "ut_map_external_source_users", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_organization_mefe_user_id", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_organization_mefe_user_id", "altvarname" => "ut_organization_mefe_user_id", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_property_types", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_property_types", "altvarname" => "ut_property_types", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_unit_types", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_unit_types", "altvarname" => "ut_unit_types", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_user_role_types", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_user_role_types", "altvarname" => "ut_user_role_types", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_user_types", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_user_types", "altvarname" => "ut_user_types", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
			$dalTables[$conn->connId][] = array("name" => "ut_verify_count_all_P_by_org_and_countries", "varname" => "unee_t_enterprise_v1_3_0_at_localhost__ut_verify_count_all_P_by_org_and_countries", "altvarname" => "ut_verify_count_all_P_by_org_and_countries", "connId" => "unee_t_enterprise_v1_3_0_at_localhost", "schema" => "", "connName" => "unee_t_enterprise");
		}
	}


	public static function PrepareSQL($sql)
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();
		$context = RunnerContext::current();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);

			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = $context->getValue($token);
			}

			if ($conn->positionQuoted($sql, $offset))
				$repl["insert"] = $conn->addSlashes($val);
			else if(is_numeric($val))
				$repl["insert"] = DB::prepareNumberValue($val);
			else
				$repl["insert"] = $val;

			$replacements[] = $repl;
		}

		//	do replacements
		$offsetShift = 0;
		foreach ($replacements as $r) {
			$sql = substr_replace($sql, $r["insert"], $r["offset"] + $offsetShift, $r["len"]);
			$offsetShift += strlen($r["insert"]) - $r["len"];
		}
		return $sql;
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	protected static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{(.*?)\}|\:([1-9]+[0-9]*)/';


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				//	first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][3];
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = (string)$value;
		if(is_numeric($strvalue))
			return str_replace(",",".",$strvalue);
		return 0;
	}

}

?>