<?php




$tdataadmin_rights = array();
$tdataadmin_rights[".searchableFields"] = array();
	$tdataadmin_rights[".truncateText"] = true;
	$tdataadmin_rights[".NumberOfChars"] = 80;
	$tdataadmin_rights[".ShortName"] = "admin_rights";
	$tdataadmin_rights[".OwnerID"] = "";
	$tdataadmin_rights[".OriginalTable"] = "uneet_enterprise_ugrights";


$defaultPages = my_json_decode( "{}" );

$tdataadmin_rights[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadmin_rights[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsadmin_rights = array();
$fieldToolTipsadmin_rights = array();
$pageTitlesadmin_rights = array();
$placeHoldersadmin_rights = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsadmin_rights["English"] = array();
	$fieldToolTipsadmin_rights["English"] = array();
	$placeHoldersadmin_rights["English"] = array();
	$pageTitlesadmin_rights["English"] = array();
	$fieldLabelsadmin_rights["English"]["TableName"] = "Table Name";
	$fieldToolTipsadmin_rights["English"]["TableName"] = "";
	$placeHoldersadmin_rights["English"]["TableName"] = "";
	$fieldLabelsadmin_rights["English"]["GroupID"] = "Group ID";
	$fieldToolTipsadmin_rights["English"]["GroupID"] = "";
	$placeHoldersadmin_rights["English"]["GroupID"] = "";
	$fieldLabelsadmin_rights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipsadmin_rights["English"]["AccessMask"] = "";
	$placeHoldersadmin_rights["English"]["AccessMask"] = "";
	if (count($fieldToolTipsadmin_rights["English"]))
		$tdataadmin_rights[".isUseToolTips"] = true;
}


	$tdataadmin_rights[".NCSearch"] = true;



$tdataadmin_rights[".shortTableName"] = "admin_rights";
$tdataadmin_rights[".nSecOptions"] = 0;

$tdataadmin_rights[".mainTableOwnerID"] = "";
$tdataadmin_rights[".entityType"] = 1;

$tdataadmin_rights[".strOriginalTableName"] = "uneet_enterprise_ugrights";

		 



$tdataadmin_rights[".showAddInPopup"] = false;

$tdataadmin_rights[".showEditInPopup"] = false;

$tdataadmin_rights[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadmin_rights[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadmin_rights[".listAjax"] = false;
//	temporary
$tdataadmin_rights[".listAjax"] = false;

	$tdataadmin_rights[".audit"] = true;

	$tdataadmin_rights[".locking"] = false;


$pages = $tdataadmin_rights[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadmin_rights[".edit"] = true;
	$tdataadmin_rights[".afterEditAction"] = 1;
	$tdataadmin_rights[".closePopupAfterEdit"] = 1;
	$tdataadmin_rights[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadmin_rights[".add"] = true;
$tdataadmin_rights[".afterAddAction"] = 1;
$tdataadmin_rights[".closePopupAfterAdd"] = 1;
$tdataadmin_rights[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadmin_rights[".list"] = true;
}



$tdataadmin_rights[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadmin_rights[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadmin_rights[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadmin_rights[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadmin_rights[".printFriendly"] = true;
}



$tdataadmin_rights[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadmin_rights[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadmin_rights[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadmin_rights[".isUseAjaxSuggest"] = true;

$tdataadmin_rights[".rowHighlite"] = true;





$tdataadmin_rights[".ajaxCodeSnippetAdded"] = false;

$tdataadmin_rights[".buttonsAdded"] = false;

$tdataadmin_rights[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadmin_rights[".isUseTimeForSearch"] = false;




$tdataadmin_rights[".allSearchFields"] = array();
$tdataadmin_rights[".filterFields"] = array();
$tdataadmin_rights[".requiredSearchFields"] = array();

$tdataadmin_rights[".googleLikeFields"] = array();
$tdataadmin_rights[".googleLikeFields"][] = "TableName";
$tdataadmin_rights[".googleLikeFields"][] = "GroupID";
$tdataadmin_rights[".googleLikeFields"][] = "AccessMask";



$tdataadmin_rights[".tableType"] = "list";

$tdataadmin_rights[".printerPageOrientation"] = 0;
$tdataadmin_rights[".nPrinterPageScale"] = 100;

$tdataadmin_rights[".nPrinterSplitRecords"] = 40;

$tdataadmin_rights[".nPrinterPDFSplitRecords"] = 40;


$tdataadmin_rights[".geocodingEnabled"] = false;










$tdataadmin_rights[".pageSize"] = 20;

$tdataadmin_rights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadmin_rights[".strOrderBy"] = $tstrOrderBy;

$tdataadmin_rights[".orderindexes"] = array();

$tdataadmin_rights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask";
$tdataadmin_rights[".sqlFrom"] = "FROM uneet_enterprise_ugrights";
$tdataadmin_rights[".sqlWhereExpr"] = "";
$tdataadmin_rights[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadmin_rights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadmin_rights[".arrGroupsPerPage"] = $arrGPP;

$tdataadmin_rights[".highlightSearchResults"] = true;

$tableKeysadmin_rights = array();
$tableKeysadmin_rights[] = "TableName";
$tableKeysadmin_rights[] = "GroupID";
$tdataadmin_rights[".Keys"] = $tableKeysadmin_rights;


$tdataadmin_rights[".hideMobileList"] = array();




//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "uneet_enterprise_ugrights";
	$fdata["Label"] = GetFieldLabel("admin_rights","TableName");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "TableName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataadmin_rights["TableName"] = $fdata;
		$tdataadmin_rights[".searchableFields"][] = "TableName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "uneet_enterprise_ugrights";
	$fdata["Label"] = GetFieldLabel("admin_rights","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataadmin_rights["GroupID"] = $fdata;
		$tdataadmin_rights[".searchableFields"][] = "GroupID";
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "uneet_enterprise_ugrights";
	$fdata["Label"] = GetFieldLabel("admin_rights","AccessMask");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "AccessMask";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

			
	
	
//end of Filters settings


	$tdataadmin_rights["AccessMask"] = $fdata;
		$tdataadmin_rights[".searchableFields"][] = "AccessMask";


$tables_data["admin_rights"]=&$tdataadmin_rights;
$field_labels["admin_rights"] = &$fieldLabelsadmin_rights;
$fieldToolTips["admin_rights"] = &$fieldToolTipsadmin_rights;
$placeHolders["admin_rights"] = &$placeHoldersadmin_rights;
$page_titles["admin_rights"] = &$pageTitlesadmin_rights;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["admin_rights"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["admin_rights"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_admin_rights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask";
$proto0["m_strFrom"] = "FROM uneet_enterprise_ugrights";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "TableName",
	"m_strTable" => "uneet_enterprise_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "admin_rights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "uneet_enterprise_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "admin_rights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "uneet_enterprise_ugrights",
	"m_srcTableName" => "admin_rights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "admin_rights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "uneet_enterprise_ugrights";
$proto13["m_srcTableName"] = "admin_rights";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "TableName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "AccessMask";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "uneet_enterprise_ugrights";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "admin_rights";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="admin_rights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_admin_rights = createSqlQuery_admin_rights();


	
					
;

			

$tdataadmin_rights[".sqlquery"] = $queryData_admin_rights;

$tableEvents["admin_rights"] = new eventsBase;
$tdataadmin_rights[".hasEvents"] = false;

?>