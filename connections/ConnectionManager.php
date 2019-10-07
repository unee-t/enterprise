<?php
class ConnectionManager
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();

	
	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */	
	protected $_tablesConnectionIds;
	
	
	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}
	
	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */	
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}
	
	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */	
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}
	
	/**
	 * Get connection object by the connection id 
	 * @param String connId
	 * @return Connection
	 */	
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) )
			$this->cache[ $connId ] = $this->getConnection( $connId );

		return $this->cache[ $connId ];
	}
	
	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "unee_t_enterprise_v1_3_0_at_localhost" );
	}

	/**
	 * Get the users table db connection 
	 * @return Connection
	 */	
	public function getForLogin()
	{
		return $this->byId( "unee_t_enterprise_v1_3_0_at_localhost" );
	}
	
	/**
	 * Get the log table db connection 
	 * @return Connection
	 */	
	public function getForAudit()
	{
		return $this->byId( "unee_t_enterprise_v1_3_0_at_localhost" );
	}
	
	/**
	 * Get the locking table db connection 
	 * @return Connection
	 */		
	public function getForLocking()
	{
		return $this->getDefault();
	}	
	
	/**
	 * Get the 'ug_groups' table db connection 
	 * @return Connection
	 */	
	public function getForUserGroups()
	{
		return $this->byId( "unee_t_enterprise_v1_3_0_at_localhost" );
	}		

	/**
	 * Get the saved searches table db connection 
	 * @return Connection
	 */	
	public function getForSavedSearches()
	{
		return $this->byId( "unee_t_enterprise_v1_3_0_at_localhost" );
	}

	/**
	 * Get the webreports tables db connection 
	 * @return Connection
	 */		
	public function getForWebReports()
	{
		return $this->getDefault();
	}
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		include_once getabspath("connections/Connection.php");
		
		$data = $this->_connectionsData[ $connId ];	
		switch( $data["connStringType"] )
		{
			case "mysql":
				if( useMySQLiLib() )
				{
					include_once getabspath("connections/MySQLiConnection.php");
					return new MySQLiConnection( $data );
				}
				
				include_once getabspath("connections/MySQLConnection.php");	
				return new MySQLConnection( $data );	

			case "mssql":
			case "compact":
				if( useMSSQLWinConnect() )
				{
					include_once getabspath("connections/MSSQLWinConnection.php");
					return new MSSQLWinConnection( $data );
				}
				if( isSqlsrvExtLoaded() )
				{
					include_once getabspath("connections/MSSQLSrvConnection.php");	
					return new MSSQLSrvConnection( $data );
				}
				
				if( function_exists("mssql_connect") ) {
					include_once getabspath("connections/MSSQLUnixConnection.php");
					return new MSSQLUnixConnection( $data );			
				}

				if( class_exists("PDO") ) {
					include_once getabspath("connections/PDOConnection.php");
					$drivers = pdo_drivers();
					if( in_array( "sqlsrv", $drivers) )
					{
						$data["PDOString"] = "sqlsrv:Server=" . $data["connInfo"][0] . ";Database=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
					if( in_array( "dblib", $drivers) )
					{
						$data["PDOString"] = "dblib:host=" . $data["connInfo"][0] . ";dbname=" . $data["connInfo"][3];
						$data["PDOUser"] = $data["connInfo"][1];
						$data["PDOPass"] = $data["connInfo"][2];
						return new PDOConnection( $data );			
					}
				}
				echo "No SQL Server driver found in your PHP settings.";
				if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
					echo "<br>To enable SQL Server support add the following line to php.ini file:";
					echo "<br>extension=php_com_dotnet.dll";
				}
				exit();

			case "msaccess":
			case "odbc":
			case "odbcdsn":
			case "custom":
			case "file":
				if( stripos($data["ODBCString"], 'Provider=') !== false )
				{
					include_once getabspath("connections/ADOConnection.php");
					return new ADOConnection( $data );
				}
				
				include_once getabspath("connections/ODBCConnection.php");
				return new ODBCConnection( $data );
			
			case "oracle":
				include_once getabspath("connections/OracleConnection.php");
				return new OracleConnection( $data );

			case "postgre":
				include_once getabspath("connections/PostgreConnection.php");
				return new PostgreConnection( $data );

			case "db2":
				include_once getabspath("connections/DB2Connection.php");
				return new DB2Connection( $data );

			case "informix":
				include_once getabspath("connections/InformixConnection.php");
				return new InformixConnection( $data );

			case "sqlite":
				include_once getabspath("connections/SQLite3Connection.php");
				return new SQLite3Connection( $data );
			case "pdo":
				include_once getabspath("connections/PDOConnection.php");
				return new PDOConnection( $data );
		}
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's 
	 * db connection properties
	 */	 
	protected function _setConnectionsData()
	{
		// content of this function can be modified on demo account
		// variable names $data and $connectionsData are important

		$connectionsData = array();
		
		$data = array();
		$data["dbType"] = 0;
		$data["connId"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$data["connName"] = "unee_t_enterprise";
		$data["connStringType"] = "mysql";
		$data["connectionString"] = "mysql;bz-db-local-dev-env.c5eg6u2xj9yy.ap-southeast-1.rds.amazonaws.com;unee_t_root;6hdu9hzZq4Yi7g9YAcUN;3306;unee_t_enterprise_v1.22.8;;1"; //currently unused

		$this->_connectionsIdByName["unee_t_enterprise"] = "unee_t_enterprise_v1_3_0_at_localhost";
		
		$data["connInfo"] = array();
		$data["ODBCUID"] = "unee_t_root";
		$data["ODBCPWD"] = "6hdu9hzZq4Yi7g9YAcUN";
		$data["leftWrap"] = "`";
		$data["rightWrap"] = "`";
		
		$data["DBPath"] = "db"; //currently unused	
		$data["useServerMapPath"] = 1; //currently unused
		
		$data["connInfo"][0] = "bz-db-local-dev-env.c5eg6u2xj9yy.ap-southeast-1.rds.amazonaws.com";
		$data["connInfo"][1] = "unee_t_root";
		$data["connInfo"][2] = "6hdu9hzZq4Yi7g9YAcUN";
		$data["connInfo"][3] = "3306";
		$data["connInfo"][4] = "unee_t_enterprise_v1.22.8";
		$data["connInfo"][5] = ""; //currently unused
		$data["connInfo"][6] = "1"; //currently unused
		$data["ODBCString"] = "DRIVER={MySQL ODBC 3.51 Driver};Server=bz-db-local-dev-env.c5eg6u2xj9yy.ap-southeast-1.rds.amazonaws.com;Uid=unee_t_root;Pwd=6hdu9hzZq4Yi7g9YAcUN;Port=3306;Database=unee_t_enterprise_v1.22.8;OPTION=3";
		// encription set
		$data["EncryptInfo"] = array();
		$data["EncryptInfo"]["mode"] = 1;
		$data["EncryptInfo"]["alg"]  = 128;
		$data["EncryptInfo"]["key"]  = "927da6e51d5c41dcad422afd09736c07";

		$connectionsData["unee_t_enterprise_v1_3_0_at_localhost"] = $data;
		$this->_connectionsData = $connectionsData;
	}
	
	/**
	 * Set the data representing the correspondence between 
	 * the project's table names and db connections
	 */	 
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["Manage Unee-T Users"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["admin_rights"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["uneet_enterprise_users"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["admin_members"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["admin_users"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage Users - Unee-T Enterprise UI"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["uneet_enterprise_organizations"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_user_types"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["person_statuses"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["person_salutations"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["property_groups_countries"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage Unit Names"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_unit_types"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_property_types"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage User Types"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_user_role_types"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage User Default Visibility"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage User Default Notifications"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["person_genders"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage Areas"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage Buildings"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["property_groups_areas"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_external_sot_for_unee_t_objects"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage Units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["external_property_groups_areas"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["external_property_level_1_buildings"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Manage Rooms"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Assign Areas to User"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Search Users"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Assign Buildings to User"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["property_level_1_buildings"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Assign Units to User"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["property_level_2_units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Assign Rooms to User"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["property_level_3_rooms"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Search Rooms"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Search Units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["external_property_level_2_units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Search All Units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_map_external_source_units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Search Buildings"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Export and Import Buildings"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Export and Import Areas"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Export and Import Units"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["List of Countries"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Export and Import Rooms"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Export and Import User Types"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Export and Import Users"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Assign Rooms"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["ut_map_external_source_users"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Unee-T Enterprise Account"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["All Properties by Countries"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["SuperAdmin - manage UNTE admins"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$connectionsIds["Super Admin - Manage Organization"] = "unee_t_enterprise_v1_3_0_at_localhost";
		$this->_tablesConnectionIds = $connectionsIds;
	}
	
	/**
	 * Check if It's possible to add to one table's sql query 
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];
		
		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;
			
		return true;	
	}
	
	/**
	 * Close db connections
	 * @destructor
	 */
	function __desctruct() 
	{
		foreach( $this->cache as $connection )
		{
			$connection->close();
		}
	}
}
?>