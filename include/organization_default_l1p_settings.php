<?php



$tdataorganization_default_l1p = array();
$tdataorganization_default_l1p[".searchableFields"] = array();
$tdataorganization_default_l1p[".ShortName"] = "organization_default_l1p";
$tdataorganization_default_l1p[".OwnerID"] = "id_organization";
$tdataorganization_default_l1p[".OriginalTable"] = "uneet_enterprise_organizations";


$defaultPages = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataorganization_default_l1p[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataorganization_default_l1p[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataorganization_default_l1p[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsorganization_default_l1p = array();
$fieldToolTipsorganization_default_l1p = array();
$pageTitlesorganization_default_l1p = array();
$placeHoldersorganization_default_l1p = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorganization_default_l1p["English"] = array();
	$fieldToolTipsorganization_default_l1p["English"] = array();
	$placeHoldersorganization_default_l1p["English"] = array();
	$pageTitlesorganization_default_l1p["English"] = array();
	$fieldLabelsorganization_default_l1p["English"]["id_organization"] = "Id Organization";
	$fieldToolTipsorganization_default_l1p["English"]["id_organization"] = "";
	$placeHoldersorganization_default_l1p["English"]["id_organization"] = "";
	$fieldLabelsorganization_default_l1p["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsorganization_default_l1p["English"]["syst_updated_datetime"] = "";
	$placeHoldersorganization_default_l1p["English"]["syst_updated_datetime"] = "";
	$fieldLabelsorganization_default_l1p["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsorganization_default_l1p["English"]["update_system_id"] = "";
	$placeHoldersorganization_default_l1p["English"]["update_system_id"] = "";
	$fieldLabelsorganization_default_l1p["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsorganization_default_l1p["English"]["updated_by_id"] = "";
	$placeHoldersorganization_default_l1p["English"]["updated_by_id"] = "";
	$fieldLabelsorganization_default_l1p["English"]["update_method"] = "Update Method";
	$fieldToolTipsorganization_default_l1p["English"]["update_method"] = "";
	$placeHoldersorganization_default_l1p["English"]["update_method"] = "";
	$fieldLabelsorganization_default_l1p["English"]["designation"] = "Designation";
	$fieldToolTipsorganization_default_l1p["English"]["designation"] = "";
	$placeHoldersorganization_default_l1p["English"]["designation"] = "";
	$fieldLabelsorganization_default_l1p["English"]["country_code"] = "Country Code";
	$fieldToolTipsorganization_default_l1p["English"]["country_code"] = "";
	$placeHoldersorganization_default_l1p["English"]["country_code"] = "";
	$fieldLabelsorganization_default_l1p["English"]["default_building"] = "Default Building";
	$fieldToolTipsorganization_default_l1p["English"]["default_building"] = "";
	$placeHoldersorganization_default_l1p["English"]["default_building"] = "";
	if (count($fieldToolTipsorganization_default_l1p["English"]))
		$tdataorganization_default_l1p[".isUseToolTips"] = true;
}


	$tdataorganization_default_l1p[".NCSearch"] = true;



$tdataorganization_default_l1p[".shortTableName"] = "organization_default_l1p";
$tdataorganization_default_l1p[".nSecOptions"] = 1;

$tdataorganization_default_l1p[".mainTableOwnerID"] = "id_organization";
$tdataorganization_default_l1p[".entityType"] = 1;

$tdataorganization_default_l1p[".strOriginalTableName"] = "uneet_enterprise_organizations";

		 



$tdataorganization_default_l1p[".showAddInPopup"] = false;

$tdataorganization_default_l1p[".showEditInPopup"] = false;

$tdataorganization_default_l1p[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataorganization_default_l1p[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataorganization_default_l1p[".listAjax"] = true;
//	temporary
$tdataorganization_default_l1p[".listAjax"] = false;

	$tdataorganization_default_l1p[".audit"] = false;

	$tdataorganization_default_l1p[".locking"] = false;


$pages = $tdataorganization_default_l1p[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorganization_default_l1p[".edit"] = true;
	$tdataorganization_default_l1p[".afterEditAction"] = 1;
	$tdataorganization_default_l1p[".closePopupAfterEdit"] = 1;
	$tdataorganization_default_l1p[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorganization_default_l1p[".add"] = true;
$tdataorganization_default_l1p[".afterAddAction"] = 1;
$tdataorganization_default_l1p[".closePopupAfterAdd"] = 1;
$tdataorganization_default_l1p[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataorganization_default_l1p[".list"] = true;
}



$tdataorganization_default_l1p[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataorganization_default_l1p[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorganization_default_l1p[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorganization_default_l1p[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorganization_default_l1p[".printFriendly"] = true;
}



$tdataorganization_default_l1p[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorganization_default_l1p[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorganization_default_l1p[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorganization_default_l1p[".isUseAjaxSuggest"] = true;

$tdataorganization_default_l1p[".rowHighlite"] = true;





$tdataorganization_default_l1p[".ajaxCodeSnippetAdded"] = false;

$tdataorganization_default_l1p[".buttonsAdded"] = false;

$tdataorganization_default_l1p[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorganization_default_l1p[".isUseTimeForSearch"] = false;


$tdataorganization_default_l1p[".badgeColor"] = "cfae83";


$tdataorganization_default_l1p[".allSearchFields"] = array();
$tdataorganization_default_l1p[".filterFields"] = array();
$tdataorganization_default_l1p[".requiredSearchFields"] = array();

$tdataorganization_default_l1p[".googleLikeFields"] = array();
$tdataorganization_default_l1p[".googleLikeFields"][] = "id_organization";
$tdataorganization_default_l1p[".googleLikeFields"][] = "syst_updated_datetime";
$tdataorganization_default_l1p[".googleLikeFields"][] = "update_system_id";
$tdataorganization_default_l1p[".googleLikeFields"][] = "updated_by_id";
$tdataorganization_default_l1p[".googleLikeFields"][] = "update_method";
$tdataorganization_default_l1p[".googleLikeFields"][] = "designation";
$tdataorganization_default_l1p[".googleLikeFields"][] = "country_code";
$tdataorganization_default_l1p[".googleLikeFields"][] = "default_building";



$tdataorganization_default_l1p[".tableType"] = "list";

$tdataorganization_default_l1p[".printerPageOrientation"] = 0;
$tdataorganization_default_l1p[".nPrinterPageScale"] = 100;

$tdataorganization_default_l1p[".nPrinterSplitRecords"] = 40;

$tdataorganization_default_l1p[".geocodingEnabled"] = false;





$tdataorganization_default_l1p[".isResizeColumns"] = true;





$tdataorganization_default_l1p[".pageSize"] = 20;

$tdataorganization_default_l1p[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorganization_default_l1p[".strOrderBy"] = $tstrOrderBy;

$tdataorganization_default_l1p[".orderindexes"] = array();

$tdataorganization_default_l1p[".sqlHead"] = "SELECT id_organization,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  country_code,  default_building";
$tdataorganization_default_l1p[".sqlFrom"] = "FROM uneet_enterprise_organizations";
$tdataorganization_default_l1p[".sqlWhereExpr"] = "";
$tdataorganization_default_l1p[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorganization_default_l1p[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorganization_default_l1p[".arrGroupsPerPage"] = $arrGPP;

$tdataorganization_default_l1p[".highlightSearchResults"] = true;

$tableKeysorganization_default_l1p = array();
$tableKeysorganization_default_l1p[] = "id_organization";
$tdataorganization_default_l1p[".Keys"] = $tableKeysorganization_default_l1p;


$tdataorganization_default_l1p[".hideMobileList"] = array();




//	id_organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_organization";
	$fdata["GoodName"] = "id_organization";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","id_organization");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_organization";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataorganization_default_l1p["id_organization"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "id_organization";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_updated_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdataorganization_default_l1p["syst_updated_datetime"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_system_id";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataorganization_default_l1p["update_system_id"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by_id";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataorganization_default_l1p["updated_by_id"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_method";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataorganization_default_l1p["update_method"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "update_method";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataorganization_default_l1p["designation"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "designation";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_code";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataorganization_default_l1p["country_code"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "country_code";
//	default_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "default_building";
	$fdata["GoodName"] = "default_building";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_L1P","default_building");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "default_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "default_building";

	
	
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
	$edata["LookupTable"] = "Search list of possible properties";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "uneet_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "uneet_name";

	
	
	
	

	
	
	
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


	$tdataorganization_default_l1p["default_building"] = $fdata;
		$tdataorganization_default_l1p[".searchableFields"][] = "default_building";


$tables_data["Organization Default L1P"]=&$tdataorganization_default_l1p;
$field_labels["Organization_Default_L1P"] = &$fieldLabelsorganization_default_l1p;
$fieldToolTips["Organization_Default_L1P"] = &$fieldToolTipsorganization_default_l1p;
$placeHolders["Organization_Default_L1P"] = &$placeHoldersorganization_default_l1p;
$page_titles["Organization_Default_L1P"] = &$pageTitlesorganization_default_l1p;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Organization Default L1P"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Organization Default L1P"] = array();



	
				$strOriginalDetailsTable="external_property_level_1_buildings";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Buildings";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Buildings";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Organization Default L1P"][0] = $masterParams;
				$masterTablesData["Organization Default L1P"][0]["masterKeys"] = array();
	$masterTablesData["Organization Default L1P"][0]["masterKeys"][]="created_by_id";
				$masterTablesData["Organization Default L1P"][0]["detailKeys"] = array();
	$masterTablesData["Organization Default L1P"][0]["detailKeys"][]="id_organization";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_organization_default_l1p()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_organization,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  country_code,  default_building";
$proto0["m_strFrom"] = "FROM uneet_enterprise_organizations";
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
	"m_strName" => "id_organization",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto6["m_sql"] = "id_organization";
$proto6["m_srcTableName"] = "Organization Default L1P";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto8["m_sql"] = "syst_updated_datetime";
$proto8["m_srcTableName"] = "Organization Default L1P";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "Organization Default L1P";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto12["m_sql"] = "updated_by_id";
$proto12["m_srcTableName"] = "Organization Default L1P";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto14["m_sql"] = "update_method";
$proto14["m_srcTableName"] = "Organization Default L1P";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto16["m_sql"] = "designation";
$proto16["m_srcTableName"] = "Organization Default L1P";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto18["m_sql"] = "country_code";
$proto18["m_srcTableName"] = "Organization Default L1P";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "default_building",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default L1P"
));

$proto20["m_sql"] = "default_building";
$proto20["m_srcTableName"] = "Organization Default L1P";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "uneet_enterprise_organizations";
$proto23["m_srcTableName"] = "Organization Default L1P";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "id_organization";
$proto23["m_columns"][] = "syst_created_datetime";
$proto23["m_columns"][] = "creation_system_id";
$proto23["m_columns"][] = "creation_method";
$proto23["m_columns"][] = "created_by_id";
$proto23["m_columns"][] = "syst_updated_datetime";
$proto23["m_columns"][] = "update_system_id";
$proto23["m_columns"][] = "updated_by_id";
$proto23["m_columns"][] = "update_method";
$proto23["m_columns"][] = "order";
$proto23["m_columns"][] = "is_obsolete";
$proto23["m_columns"][] = "designation";
$proto23["m_columns"][] = "description";
$proto23["m_columns"][] = "country_code";
$proto23["m_columns"][] = "mefe_master_user_external_person_id";
$proto23["m_columns"][] = "mefe_master_user_external_person_table";
$proto23["m_columns"][] = "mefe_master_user_external_person_system";
$proto23["m_columns"][] = "default_role_type_id";
$proto23["m_columns"][] = "default_sot_id";
$proto23["m_columns"][] = "default_area";
$proto23["m_columns"][] = "default_building";
$proto23["m_columns"][] = "default_unit";
$proto23["m_columns"][] = "default_sot_system";
$proto23["m_columns"][] = "default_sot_persons";
$proto23["m_columns"][] = "default_sot_areas";
$proto23["m_columns"][] = "default_sot_properties";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "uneet_enterprise_organizations";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Organization Default L1P";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Organization Default L1P";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_organization_default_l1p = createSqlQuery_organization_default_l1p();


	
					
;

								

$tdataorganization_default_l1p[".sqlquery"] = $queryData_organization_default_l1p;

include_once(getabspath("include/organization_default_l1p_events.php"));
$tableEvents["Organization Default L1P"] = new eventclass_organization_default_l1p;
$tdataorganization_default_l1p[".hasEvents"] = true;

?>