<?php
class DB2Functions extends DBFunctions
{	
	/**
	 * @param String str
	 * @return String
	 */		
	public function escapeLIKEpattern( $str )
	{
		return $str;
	}
	
	/**
	 * @param String str
	 * @return String
	 */		
	public function addSlashes( $str )
	{
		return str_replace("'", "''", $str);
	}
	
	/**
	 * @param String str
	 * @return String
	 */	
	public function addSlashesBinary( $str )
	{
		return $str;
	}
	
	/**	
	 * @param String dbval
	 * @return String	 
	 */	
	public function upper( $dbval )
	{
		return "upper(".$dbval.")";
	}

	/**
	 * It's called for Contains and Starts with searches
	 * @param Mixed value
	 * @param Number type (oprional)
	 * @return String	 
	 */
	public function field2char($value, $type = 3)
	{
		if( IsCharType($type) )
			return $value;
		return "char(".$value.")";
	}

	/**
	 * @param Mixed value
	 * @param Number type
	 * @return String	 
	 */
	public function field2time($value, $type)
	{
		return $value;
	}

	/**
	 * Get the auto generated SQL string used in the last query
	 * @param String key
	 * @param String table
	 * @param String oraSequenceName (optional)	
	 * @return String
	 */
	public function getInsertedIdSQL( $key = null, $table = null, $oraSequenceName = false )
	{
		return "SELECT IDENTITY_VAL_LOCAL() FROM SYSIBM.SYSDUMMY1";
	}

	public function queryPage( $connection, $strSQL, $pageStart, $pageSize, $applyLimit ) 
	{
		if( $applyLimit && $connection->dbType == nDATABASE_DB2 ) 
		{
			$strSQL = "with DB2_QUERY as (".$strSQL.") select * from DB2_QUERY where DB2_ROW_NUMBER between "
				.(($pageStart - 1) * $pageSize + 1)." and ".($pageStart * $pageSize);
		}
		$qResult = $connection->query( $strSQL );
		if( $applyLimit && $connection->dbType != nDATABASE_DB2 ) {
			$qResult->seekPage( $pageSize, $pageStart );
		}
		
		return $qResult;
	}

}
?>