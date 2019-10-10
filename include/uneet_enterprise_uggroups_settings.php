<?php



$tdatauneet_enterprise_uggroups = array();
$tdatauneet_enterprise_uggroups[".searchableFields"] = array();
$tdatauneet_enterprise_uggroups[".ShortName"] = "uneet_enterprise_uggroups";
$tdatauneet_enterprise_uggroups[".OwnerID"] = "";
$tdatauneet_enterprise_uggroups[".OriginalTable"] = "uneet_enterprise_uggroups";


$defaultPages = my_json_decode( "{}" );

$tdatauneet_enterprise_uggroups[".pagesByType"] = my_json_decode( "{}" );
$tdatauneet_enterprise_uggroups[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatauneet_enterprise_uggroups[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsuneet_enterprise_uggroups = array();
$fieldToolTipsuneet_enterprise_uggroups = array();
$pageTitlesuneet_enterprise_uggroups = array();
$placeHoldersuneet_enterprise_uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuneet_enterprise_uggroups["English"] = array();
	$fieldToolTipsuneet_enterprise_uggroups["English"] = array();
	$placeHoldersuneet_enterprise_uggroups["English"] = array();
	$pageTitlesuneet_enterprise_uggroups["English"] = array();
	$fieldLabelsuneet_enterprise_uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipsuneet_enterprise_uggroups["English"]["GroupID"] = "";
	$placeHoldersuneet_enterprise_uggroups["English"]["GroupID"] = "";
	$fieldLabelsuneet_enterprise_uggroups["English"]["Label"] = "Label";
	$fieldToolTipsuneet_enterprise_uggroups["English"]["Label"] = "";
	$placeHoldersuneet_enterprise_uggroups["English"]["Label"] = "";
	if (count($fieldToolTipsuneet_enterprise_uggroups["English"]))
		$tdatauneet_enterprise_uggroups[".isUseToolTips"] = true;
}


	$tdatauneet_enterprise_uggroups[".NCSearch"] = true;



$tdatauneet_enterprise_uggroups[".shortTableName"] = "uneet_enterprise_uggroups";
$tdatauneet_enterprise_uggroups[".nSecOptions"] = 0;

$tdatauneet_enterprise_uggroups[".mainTableOwnerID"] = "";
$tdatauneet_enterprise_uggroups[".entityType"] = 0;

$tdatauneet_enterprise_uggroups[".strOriginalTableName"] = "uneet_enterprise_uggroups";

		 



$tdatauneet_enterprise_uggroups[".showAddInPopup"] = false;

$tdatauneet_enterprise_uggroups[".showEditInPopup"] = false;

$tdatauneet_enterprise_uggroups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauneet_enterprise_uggroups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauneet_enterprise_uggroups[".listAjax"] = false;
//	temporary
$tdatauneet_enterprise_uggroups[".listAjax"] = false;

	$tdatauneet_enterprise_uggroups[".audit"] = false;

	$tdatauneet_enterprise_uggroups[".locking"] = false;


$pages = $tdatauneet_enterprise_uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauneet_enterprise_uggroups[".edit"] = true;
	$tdatauneet_enterprise_uggroups[".afterEditAction"] = 1;
	$tdatauneet_enterprise_uggroups[".closePopupAfterEdit"] = 1;
	$tdatauneet_enterprise_uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauneet_enterprise_uggroups[".add"] = true;
$tdatauneet_enterprise_uggroups[".afterAddAction"] = 1;
$tdatauneet_enterprise_uggroups[".closePopupAfterAdd"] = 1;
$tdatauneet_enterprise_uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauneet_enterprise_uggroups[".list"] = true;
}



$tdatauneet_enterprise_uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauneet_enterprise_uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauneet_enterprise_uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauneet_enterprise_uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauneet_enterprise_uggroups[".printFriendly"] = true;
}



$tdatauneet_enterprise_uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauneet_enterprise_uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauneet_enterprise_uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauneet_enterprise_uggroups[".isUseAjaxSuggest"] = true;

$tdatauneet_enterprise_uggroups[".rowHighlite"] = true;





$tdatauneet_enterprise_uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatauneet_enterprise_uggroups[".buttonsAdded"] = false;

$tdatauneet_enterprise_uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauneet_enterprise_uggroups[".isUseTimeForSearch"] = false;


$tdatauneet_enterprise_uggroups[".badgeColor"] = "E07878";


$tdatauneet_enterprise_uggroups[".allSearchFields"] = array();
$tdatauneet_enterprise_uggroups[".filterFields"] = array();
$tdatauneet_enterprise_uggroups[".requiredSearchFields"] = array();

$tdatauneet_enterprise_uggroups[".googleLikeFields"] = array();
$tdatauneet_enterprise_uggroups[".googleLikeFields"][] = "GroupID";
$tdatauneet_enterprise_uggroups[".googleLikeFields"][] = "Label";



$tdatauneet_enterprise_uggroups[".tableType"] = "list";

$tdatauneet_enterprise_uggroups[".printerPageOrientation"] = 0;
$tdatauneet_enterprise_uggroups[".nPrinterPageScale"] = 100;

$tdatauneet_enterprise_uggroups[".nPrinterSplitRecords"] = 40;

$tdatauneet_enterprise_uggroups[".geocodingEnabled"] = false;










$tdatauneet_enterprise_uggroups[".pageSize"] = 20;

$tdatauneet_enterprise_uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauneet_enterprise_uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatauneet_enterprise_uggroups[".orderindexes"] = array();

$tdatauneet_enterprise_uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`";
$tdatauneet_enterprise_uggroups[".sqlFrom"] = "FROM uneet_enterprise_uggroups";
$tdatauneet_enterprise_uggroups[".sqlWhereExpr"] = "";
$tdatauneet_enterprise_uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauneet_enterprise_uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauneet_enterprise_uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatauneet_enterprise_uggroups[".highlightSearchResults"] = true;

$tableKeysuneet_enterprise_uggroups = array();
$tableKeysuneet_enterprise_uggroups[] = "GroupID";
$tdatauneet_enterprise_uggroups[".Keys"] = $tableKeysuneet_enterprise_uggroups;


$tdatauneet_enterprise_uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "uneet_enterprise_uggroups";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_uggroups","GroupID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatauneet_enterprise_uggroups["GroupID"] = $fdata;
		$tdatauneet_enterprise_uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "uneet_enterprise_uggroups";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_uggroups","Label");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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


	$tdatauneet_enterprise_uggroups["Label"] = $fdata;
		$tdatauneet_enterprise_uggroups[".searchableFields"][] = "Label";


$tables_data["uneet_enterprise_uggroups"]=&$tdatauneet_enterprise_uggroups;
$field_labels["uneet_enterprise_uggroups"] = &$fieldLabelsuneet_enterprise_uggroups;
$fieldToolTips["uneet_enterprise_uggroups"] = &$fieldToolTipsuneet_enterprise_uggroups;
$placeHolders["uneet_enterprise_uggroups"] = &$placeHoldersuneet_enterprise_uggroups;
$page_titles["uneet_enterprise_uggroups"] = &$pageTitlesuneet_enterprise_uggroups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["uneet_enterprise_uggroups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["uneet_enterprise_uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_uneet_enterprise_uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`";
$proto0["m_strFrom"] = "FROM uneet_enterprise_uggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "uneet_enterprise_uggroups",
	"m_srcTableName" => "uneet_enterprise_uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "uneet_enterprise_uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "uneet_enterprise_uggroups",
	"m_srcTableName" => "uneet_enterprise_uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "uneet_enterprise_uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "uneet_enterprise_uggroups";
$proto11["m_srcTableName"] = "uneet_enterprise_uggroups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "GroupID";
$proto11["m_columns"][] = "Label";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "uneet_enterprise_uggroups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "uneet_enterprise_uggroups";
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
$proto0["m_srcTableName"]="uneet_enterprise_uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_uneet_enterprise_uggroups = createSqlQuery_uneet_enterprise_uggroups();


	
					
;

		

$tdatauneet_enterprise_uggroups[".sqlquery"] = $queryData_uneet_enterprise_uggroups;

$tableEvents["uneet_enterprise_uggroups"] = new eventsBase;
$tdatauneet_enterprise_uggroups[".hasEvents"] = false;

?>