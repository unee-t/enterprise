<?php




$tdataList_of_Countries = array();
$tdataList_of_Countries[".searchableFields"] = array();
	$tdataList_of_Countries[".truncateText"] = true;
	$tdataList_of_Countries[".NumberOfChars"] = 80;
	$tdataList_of_Countries[".ShortName"] = "List_of_Countries";
	$tdataList_of_Countries[".OwnerID"] = "";
	$tdataList_of_Countries[".OriginalTable"] = "property_groups_countries";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"list\":\"list\"}" );

$tdataList_of_Countries[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"]}" ) );
$tdataList_of_Countries[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsList_of_Countries = array();
$fieldToolTipsList_of_Countries = array();
$pageTitlesList_of_Countries = array();
$placeHoldersList_of_Countries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsList_of_Countries["English"] = array();
	$fieldToolTipsList_of_Countries["English"] = array();
	$placeHoldersList_of_Countries["English"] = array();
	$pageTitlesList_of_Countries["English"] = array();
	$fieldLabelsList_of_Countries["English"]["country_code"] = "Country Code";
	$fieldToolTipsList_of_Countries["English"]["country_code"] = "";
	$placeHoldersList_of_Countries["English"]["country_code"] = "";
	$fieldLabelsList_of_Countries["English"]["country_name"] = "Country Name";
	$fieldToolTipsList_of_Countries["English"]["country_name"] = "";
	$placeHoldersList_of_Countries["English"]["country_name"] = "";
	if (count($fieldToolTipsList_of_Countries["English"]))
		$tdataList_of_Countries[".isUseToolTips"] = true;
}


	$tdataList_of_Countries[".NCSearch"] = true;



$tdataList_of_Countries[".shortTableName"] = "List_of_Countries";
$tdataList_of_Countries[".nSecOptions"] = 0;

$tdataList_of_Countries[".mainTableOwnerID"] = "";
$tdataList_of_Countries[".entityType"] = 1;

$tdataList_of_Countries[".strOriginalTableName"] = "property_groups_countries";

		 



$tdataList_of_Countries[".showAddInPopup"] = false;

$tdataList_of_Countries[".showEditInPopup"] = false;

$tdataList_of_Countries[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataList_of_Countries[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataList_of_Countries[".listAjax"] = true;
//	temporary
$tdataList_of_Countries[".listAjax"] = false;

	$tdataList_of_Countries[".audit"] = false;

	$tdataList_of_Countries[".locking"] = false;


$pages = $tdataList_of_Countries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataList_of_Countries[".edit"] = true;
	$tdataList_of_Countries[".afterEditAction"] = 1;
	$tdataList_of_Countries[".closePopupAfterEdit"] = 1;
	$tdataList_of_Countries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataList_of_Countries[".add"] = true;
$tdataList_of_Countries[".afterAddAction"] = 1;
$tdataList_of_Countries[".closePopupAfterAdd"] = 1;
$tdataList_of_Countries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataList_of_Countries[".list"] = true;
}



$tdataList_of_Countries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataList_of_Countries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataList_of_Countries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataList_of_Countries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataList_of_Countries[".printFriendly"] = true;
}



$tdataList_of_Countries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataList_of_Countries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataList_of_Countries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataList_of_Countries[".isUseAjaxSuggest"] = true;

$tdataList_of_Countries[".rowHighlite"] = true;





$tdataList_of_Countries[".ajaxCodeSnippetAdded"] = false;

$tdataList_of_Countries[".buttonsAdded"] = false;

$tdataList_of_Countries[".addPageEvents"] = false;

// use timepicker for search panel
$tdataList_of_Countries[".isUseTimeForSearch"] = false;


$tdataList_of_Countries[".badgeColor"] = "E67349";


$tdataList_of_Countries[".allSearchFields"] = array();
$tdataList_of_Countries[".filterFields"] = array();
$tdataList_of_Countries[".requiredSearchFields"] = array();

$tdataList_of_Countries[".googleLikeFields"] = array();
$tdataList_of_Countries[".googleLikeFields"][] = "country_code";
$tdataList_of_Countries[".googleLikeFields"][] = "country_name";



$tdataList_of_Countries[".tableType"] = "list";

$tdataList_of_Countries[".printerPageOrientation"] = 0;
$tdataList_of_Countries[".nPrinterPageScale"] = 100;

$tdataList_of_Countries[".nPrinterSplitRecords"] = 40;

$tdataList_of_Countries[".nPrinterPDFSplitRecords"] = 40;


$tdataList_of_Countries[".geocodingEnabled"] = false;





$tdataList_of_Countries[".isResizeColumns"] = true;





$tdataList_of_Countries[".pageSize"] = 20;

$tdataList_of_Countries[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY country_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataList_of_Countries[".strOrderBy"] = $tstrOrderBy;

$tdataList_of_Countries[".orderindexes"] = array();
	$tdataList_of_Countries[".orderindexes"][] = array(2, (1 ? "ASC" : "DESC"), "country_name");


$tdataList_of_Countries[".sqlHead"] = "SELECT country_code,  country_name";
$tdataList_of_Countries[".sqlFrom"] = "FROM property_groups_countries";
$tdataList_of_Countries[".sqlWhereExpr"] = "";
$tdataList_of_Countries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataList_of_Countries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataList_of_Countries[".arrGroupsPerPage"] = $arrGPP;

$tdataList_of_Countries[".highlightSearchResults"] = true;

$tableKeysList_of_Countries = array();
$tableKeysList_of_Countries[] = "country_code";
$tdataList_of_Countries[".Keys"] = $tableKeysList_of_Countries;


$tdataList_of_Countries[".hideMobileList"] = array();




//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("List_of_Countries","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_code";

	
	
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


	$tdataList_of_Countries["country_code"] = $fdata;
		$tdataList_of_Countries[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("List_of_Countries","country_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_name";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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


	$tdataList_of_Countries["country_name"] = $fdata;
		$tdataList_of_Countries[".searchableFields"][] = "country_name";


$tables_data["List of Countries"]=&$tdataList_of_Countries;
$field_labels["List_of_Countries"] = &$fieldLabelsList_of_Countries;
$fieldToolTips["List_of_Countries"] = &$fieldToolTipsList_of_Countries;
$placeHolders["List_of_Countries"] = &$placeHoldersList_of_Countries;
$page_titles["List_of_Countries"] = &$pageTitlesList_of_Countries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["List of Countries"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["List of Countries"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_List_of_Countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "country_code,  country_name";
$proto0["m_strFrom"] = "FROM property_groups_countries";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY country_name";
	
					
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
	"m_strName" => "country_code",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "List of Countries"
));

$proto6["m_sql"] = "country_code";
$proto6["m_srcTableName"] = "List of Countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "List of Countries"
));

$proto8["m_sql"] = "country_name";
$proto8["m_srcTableName"] = "List of Countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "property_groups_countries";
$proto11["m_srcTableName"] = "List of Countries";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id_country";
$proto11["m_columns"][] = "syst_created_datetime";
$proto11["m_columns"][] = "creation_system_id";
$proto11["m_columns"][] = "created_by_id";
$proto11["m_columns"][] = "syst_updated_datetime";
$proto11["m_columns"][] = "update_system_id";
$proto11["m_columns"][] = "updated_by_id";
$proto11["m_columns"][] = "is_obsolete";
$proto11["m_columns"][] = "is_default";
$proto11["m_columns"][] = "is_system";
$proto11["m_columns"][] = "order";
$proto11["m_columns"][] = "country_code";
$proto11["m_columns"][] = "country_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "property_groups_countries";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "List of Countries";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "List of Countries"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 1;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="List of Countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_List_of_Countries = createSqlQuery_List_of_Countries();


	
					
;

		

$tdataList_of_Countries[".sqlquery"] = $queryData_List_of_Countries;

$tableEvents["List of Countries"] = new eventsBase;
$tdataList_of_Countries[".hasEvents"] = false;

?>