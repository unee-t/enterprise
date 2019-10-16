<?php



$tdatauser_permissions = array();
$tdatauser_permissions[".searchableFields"] = array();
$tdatauser_permissions[".ShortName"] = "user_permissions";
$tdatauser_permissions[".OwnerID"] = "";
$tdatauser_permissions[".OriginalTable"] = "uneet_enterprise_ugmembers";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatauser_permissions[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatauser_permissions[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatauser_permissions[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsuser_permissions = array();
$fieldToolTipsuser_permissions = array();
$pageTitlesuser_permissions = array();
$placeHoldersuser_permissions = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuser_permissions["English"] = array();
	$fieldToolTipsuser_permissions["English"] = array();
	$placeHoldersuser_permissions["English"] = array();
	$pageTitlesuser_permissions["English"] = array();
	$fieldLabelsuser_permissions["English"]["UserName"] = "User Name";
	$fieldToolTipsuser_permissions["English"]["UserName"] = "";
	$placeHoldersuser_permissions["English"]["UserName"] = "";
	$fieldLabelsuser_permissions["English"]["GroupID"] = "Group";
	$fieldToolTipsuser_permissions["English"]["GroupID"] = "";
	$placeHoldersuser_permissions["English"]["GroupID"] = "";
	if (count($fieldToolTipsuser_permissions["English"]))
		$tdatauser_permissions[".isUseToolTips"] = true;
}


	$tdatauser_permissions[".NCSearch"] = true;



$tdatauser_permissions[".shortTableName"] = "user_permissions";
$tdatauser_permissions[".nSecOptions"] = 0;

$tdatauser_permissions[".mainTableOwnerID"] = "";
$tdatauser_permissions[".entityType"] = 1;

$tdatauser_permissions[".strOriginalTableName"] = "uneet_enterprise_ugmembers";

		 



$tdatauser_permissions[".showAddInPopup"] = false;

$tdatauser_permissions[".showEditInPopup"] = false;

$tdatauser_permissions[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauser_permissions[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauser_permissions[".listAjax"] = false;
//	temporary
$tdatauser_permissions[".listAjax"] = false;

	$tdatauser_permissions[".audit"] = false;

	$tdatauser_permissions[".locking"] = false;


$pages = $tdatauser_permissions[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauser_permissions[".edit"] = true;
	$tdatauser_permissions[".afterEditAction"] = 1;
	$tdatauser_permissions[".closePopupAfterEdit"] = 1;
	$tdatauser_permissions[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauser_permissions[".add"] = true;
$tdatauser_permissions[".afterAddAction"] = 1;
$tdatauser_permissions[".closePopupAfterAdd"] = 1;
$tdatauser_permissions[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauser_permissions[".list"] = true;
}



$tdatauser_permissions[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauser_permissions[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauser_permissions[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauser_permissions[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauser_permissions[".printFriendly"] = true;
}



$tdatauser_permissions[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauser_permissions[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauser_permissions[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauser_permissions[".isUseAjaxSuggest"] = true;

$tdatauser_permissions[".rowHighlite"] = true;





$tdatauser_permissions[".ajaxCodeSnippetAdded"] = false;

$tdatauser_permissions[".buttonsAdded"] = false;

$tdatauser_permissions[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauser_permissions[".isUseTimeForSearch"] = false;


$tdatauser_permissions[".badgeColor"] = "e67349";


$tdatauser_permissions[".allSearchFields"] = array();
$tdatauser_permissions[".filterFields"] = array();
$tdatauser_permissions[".requiredSearchFields"] = array();

$tdatauser_permissions[".googleLikeFields"] = array();
$tdatauser_permissions[".googleLikeFields"][] = "UserName";
$tdatauser_permissions[".googleLikeFields"][] = "GroupID";



$tdatauser_permissions[".tableType"] = "list";

$tdatauser_permissions[".printerPageOrientation"] = 0;
$tdatauser_permissions[".nPrinterPageScale"] = 100;

$tdatauser_permissions[".nPrinterSplitRecords"] = 40;

$tdatauser_permissions[".geocodingEnabled"] = false;










$tdatauser_permissions[".pageSize"] = 20;

$tdatauser_permissions[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauser_permissions[".strOrderBy"] = $tstrOrderBy;

$tdatauser_permissions[".orderindexes"] = array();

$tdatauser_permissions[".sqlHead"] = "SELECT UserName,  GroupID";
$tdatauser_permissions[".sqlFrom"] = "FROM uneet_enterprise_ugmembers";
$tdatauser_permissions[".sqlWhereExpr"] = "(GroupID != -1) AND (GroupID != 3)";
$tdatauser_permissions[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauser_permissions[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauser_permissions[".arrGroupsPerPage"] = $arrGPP;

$tdatauser_permissions[".highlightSearchResults"] = true;

$tableKeysuser_permissions = array();
$tableKeysuser_permissions[] = "UserName";
$tableKeysuser_permissions[] = "GroupID";
$tdatauser_permissions[".Keys"] = $tableKeysuser_permissions;


$tdatauser_permissions[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "uneet_enterprise_ugmembers";
	$fdata["Label"] = GetFieldLabel("User_Permissions","UserName");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatauser_permissions["UserName"] = $fdata;
		$tdatauser_permissions[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "uneet_enterprise_ugmembers";
	$fdata["Label"] = GetFieldLabel("User_Permissions","GroupID");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "uneet_enterprise_uggroups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "GroupID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Label";

				$edata["LookupWhere"] = "`GroupID` != 3";


	
	$edata["LookupOrderBy"] = "Label";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatauser_permissions["GroupID"] = $fdata;
		$tdatauser_permissions[".searchableFields"][] = "GroupID";


$tables_data["User Permissions"]=&$tdatauser_permissions;
$field_labels["User_Permissions"] = &$fieldLabelsuser_permissions;
$fieldToolTips["User_Permissions"] = &$fieldToolTipsuser_permissions;
$placeHolders["User_Permissions"] = &$placeHoldersuser_permissions;
$page_titles["User_Permissions"] = &$pageTitlesuser_permissions;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["User Permissions"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["User Permissions"] = array();



	
				$strOriginalDetailsTable="uneet_enterprise_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="SuperAdmin - manage UNTE admins";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "superadmin___manage_unte_admins";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["User Permissions"][0] = $masterParams;
				$masterTablesData["User Permissions"][0]["masterKeys"] = array();
	$masterTablesData["User Permissions"][0]["masterKeys"][]="username";
				$masterTablesData["User Permissions"][0]["detailKeys"] = array();
	$masterTablesData["User Permissions"][0]["detailKeys"][]="UserName";
		
	
				$strOriginalDetailsTable="uneet_enterprise_users";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Users - Unee-T Enterprise UI";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Users___Unee_T_Enterprise_UI";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["User Permissions"][1] = $masterParams;
				$masterTablesData["User Permissions"][1]["masterKeys"] = array();
	$masterTablesData["User Permissions"][1]["masterKeys"][]="username";
				$masterTablesData["User Permissions"][1]["detailKeys"] = array();
	$masterTablesData["User Permissions"][1]["detailKeys"][]="UserName";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_user_permissions()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  GroupID";
$proto0["m_strFrom"] = "FROM uneet_enterprise_ugmembers";
$proto0["m_strWhere"] = "(GroupID != -1) AND (GroupID != 3)";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(GroupID != -1) AND (GroupID != 3)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(GroupID != -1) AND (GroupID != 3)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "GroupID != -1";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "uneet_enterprise_ugmembers",
	"m_srcTableName" => "User Permissions"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "!= -1";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "GroupID != 3";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "uneet_enterprise_ugmembers",
	"m_srcTableName" => "User Permissions"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "!= 3";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "uneet_enterprise_ugmembers",
	"m_srcTableName" => "User Permissions"
));

$proto10["m_sql"] = "UserName";
$proto10["m_srcTableName"] = "User Permissions";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "uneet_enterprise_ugmembers",
	"m_srcTableName" => "User Permissions"
));

$proto12["m_sql"] = "GroupID";
$proto12["m_srcTableName"] = "User Permissions";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "uneet_enterprise_ugmembers";
$proto15["m_srcTableName"] = "User Permissions";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "UserName";
$proto15["m_columns"][] = "GroupID";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "uneet_enterprise_ugmembers";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "User Permissions";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="User Permissions";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_user_permissions = createSqlQuery_user_permissions();


	
					
;

		

$tdatauser_permissions[".sqlquery"] = $queryData_user_permissions;

$tableEvents["User Permissions"] = new eventsBase;
$tdatauser_permissions[".hasEvents"] = false;

?>