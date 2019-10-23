<?php



$tdataorganization_default_area = array();
$tdataorganization_default_area[".searchableFields"] = array();
$tdataorganization_default_area[".ShortName"] = "organization_default_area";
$tdataorganization_default_area[".OwnerID"] = "id_organization";
$tdataorganization_default_area[".OriginalTable"] = "uneet_enterprise_organizations";


$defaultPages = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataorganization_default_area[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataorganization_default_area[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataorganization_default_area[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsorganization_default_area = array();
$fieldToolTipsorganization_default_area = array();
$pageTitlesorganization_default_area = array();
$placeHoldersorganization_default_area = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsorganization_default_area["English"] = array();
	$fieldToolTipsorganization_default_area["English"] = array();
	$placeHoldersorganization_default_area["English"] = array();
	$pageTitlesorganization_default_area["English"] = array();
	$fieldLabelsorganization_default_area["English"]["id_organization"] = "Id Organization";
	$fieldToolTipsorganization_default_area["English"]["id_organization"] = "";
	$placeHoldersorganization_default_area["English"]["id_organization"] = "";
	$fieldLabelsorganization_default_area["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsorganization_default_area["English"]["syst_updated_datetime"] = "";
	$placeHoldersorganization_default_area["English"]["syst_updated_datetime"] = "";
	$fieldLabelsorganization_default_area["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsorganization_default_area["English"]["update_system_id"] = "";
	$placeHoldersorganization_default_area["English"]["update_system_id"] = "";
	$fieldLabelsorganization_default_area["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsorganization_default_area["English"]["updated_by_id"] = "";
	$placeHoldersorganization_default_area["English"]["updated_by_id"] = "";
	$fieldLabelsorganization_default_area["English"]["update_method"] = "Update Method";
	$fieldToolTipsorganization_default_area["English"]["update_method"] = "";
	$placeHoldersorganization_default_area["English"]["update_method"] = "";
	$fieldLabelsorganization_default_area["English"]["designation"] = "Designation";
	$fieldToolTipsorganization_default_area["English"]["designation"] = "";
	$placeHoldersorganization_default_area["English"]["designation"] = "";
	$fieldLabelsorganization_default_area["English"]["default_area"] = "Default Area";
	$fieldToolTipsorganization_default_area["English"]["default_area"] = "";
	$placeHoldersorganization_default_area["English"]["default_area"] = "";
	$fieldLabelsorganization_default_area["English"]["country_code"] = "Country Code";
	$fieldToolTipsorganization_default_area["English"]["country_code"] = "";
	$placeHoldersorganization_default_area["English"]["country_code"] = "";
	if (count($fieldToolTipsorganization_default_area["English"]))
		$tdataorganization_default_area[".isUseToolTips"] = true;
}


	$tdataorganization_default_area[".NCSearch"] = true;



$tdataorganization_default_area[".shortTableName"] = "organization_default_area";
$tdataorganization_default_area[".nSecOptions"] = 1;

$tdataorganization_default_area[".mainTableOwnerID"] = "id_organization";
$tdataorganization_default_area[".entityType"] = 1;

$tdataorganization_default_area[".strOriginalTableName"] = "uneet_enterprise_organizations";

		 



$tdataorganization_default_area[".showAddInPopup"] = false;

$tdataorganization_default_area[".showEditInPopup"] = false;

$tdataorganization_default_area[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataorganization_default_area[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataorganization_default_area[".listAjax"] = true;
//	temporary
$tdataorganization_default_area[".listAjax"] = false;

	$tdataorganization_default_area[".audit"] = false;

	$tdataorganization_default_area[".locking"] = false;


$pages = $tdataorganization_default_area[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataorganization_default_area[".edit"] = true;
	$tdataorganization_default_area[".afterEditAction"] = 1;
	$tdataorganization_default_area[".closePopupAfterEdit"] = 1;
	$tdataorganization_default_area[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataorganization_default_area[".add"] = true;
$tdataorganization_default_area[".afterAddAction"] = 1;
$tdataorganization_default_area[".closePopupAfterAdd"] = 1;
$tdataorganization_default_area[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataorganization_default_area[".list"] = true;
}



$tdataorganization_default_area[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataorganization_default_area[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataorganization_default_area[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataorganization_default_area[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataorganization_default_area[".printFriendly"] = true;
}



$tdataorganization_default_area[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataorganization_default_area[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataorganization_default_area[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataorganization_default_area[".isUseAjaxSuggest"] = true;

$tdataorganization_default_area[".rowHighlite"] = true;





$tdataorganization_default_area[".ajaxCodeSnippetAdded"] = false;

$tdataorganization_default_area[".buttonsAdded"] = false;

$tdataorganization_default_area[".addPageEvents"] = false;

// use timepicker for search panel
$tdataorganization_default_area[".isUseTimeForSearch"] = false;


$tdataorganization_default_area[".badgeColor"] = "cd5c5c";


$tdataorganization_default_area[".allSearchFields"] = array();
$tdataorganization_default_area[".filterFields"] = array();
$tdataorganization_default_area[".requiredSearchFields"] = array();

$tdataorganization_default_area[".googleLikeFields"] = array();
$tdataorganization_default_area[".googleLikeFields"][] = "id_organization";
$tdataorganization_default_area[".googleLikeFields"][] = "syst_updated_datetime";
$tdataorganization_default_area[".googleLikeFields"][] = "update_system_id";
$tdataorganization_default_area[".googleLikeFields"][] = "updated_by_id";
$tdataorganization_default_area[".googleLikeFields"][] = "update_method";
$tdataorganization_default_area[".googleLikeFields"][] = "designation";
$tdataorganization_default_area[".googleLikeFields"][] = "country_code";
$tdataorganization_default_area[".googleLikeFields"][] = "default_area";



$tdataorganization_default_area[".tableType"] = "list";

$tdataorganization_default_area[".printerPageOrientation"] = 0;
$tdataorganization_default_area[".nPrinterPageScale"] = 100;

$tdataorganization_default_area[".nPrinterSplitRecords"] = 40;

$tdataorganization_default_area[".geocodingEnabled"] = false;





$tdataorganization_default_area[".isResizeColumns"] = true;





$tdataorganization_default_area[".pageSize"] = 20;

$tdataorganization_default_area[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataorganization_default_area[".strOrderBy"] = $tstrOrderBy;

$tdataorganization_default_area[".orderindexes"] = array();

$tdataorganization_default_area[".sqlHead"] = "SELECT id_organization,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  country_code,  default_area";
$tdataorganization_default_area[".sqlFrom"] = "FROM uneet_enterprise_organizations";
$tdataorganization_default_area[".sqlWhereExpr"] = "";
$tdataorganization_default_area[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataorganization_default_area[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataorganization_default_area[".arrGroupsPerPage"] = $arrGPP;

$tdataorganization_default_area[".highlightSearchResults"] = true;

$tableKeysorganization_default_area = array();
$tableKeysorganization_default_area[] = "id_organization";
$tdataorganization_default_area[".Keys"] = $tableKeysorganization_default_area;


$tdataorganization_default_area[".hideMobileList"] = array();




//	id_organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_organization";
	$fdata["GoodName"] = "id_organization";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","id_organization");
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


	$tdataorganization_default_area["id_organization"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "id_organization";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","syst_updated_datetime");
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


	$tdataorganization_default_area["syst_updated_datetime"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","update_system_id");
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


	$tdataorganization_default_area["update_system_id"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","updated_by_id");
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


	$tdataorganization_default_area["updated_by_id"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","update_method");
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


	$tdataorganization_default_area["update_method"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "update_method";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","designation");
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


	$tdataorganization_default_area["designation"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "designation";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","country_code");
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


	$tdataorganization_default_area["country_code"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "country_code";
//	default_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "default_area";
	$fdata["GoodName"] = "default_area";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Organization_Default_Area","default_area");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "default_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "default_area";

	
	
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
	$edata["LookupTable"] = "Manage Areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_area";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "area_name";

				$edata["LookupWhere"] = "`external_property_groups_areas`.`is_obsolete` = 0";


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
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


	$tdataorganization_default_area["default_area"] = $fdata;
		$tdataorganization_default_area[".searchableFields"][] = "default_area";


$tables_data["Organization Default Area"]=&$tdataorganization_default_area;
$field_labels["Organization_Default_Area"] = &$fieldLabelsorganization_default_area;
$fieldToolTips["Organization_Default_Area"] = &$fieldToolTipsorganization_default_area;
$placeHolders["Organization_Default_Area"] = &$placeHoldersorganization_default_area;
$page_titles["Organization_Default_Area"] = &$pageTitlesorganization_default_area;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Organization Default Area"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Organization Default Area"] = array();



	
				$strOriginalDetailsTable="external_property_groups_areas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Areas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Areas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Organization Default Area"][0] = $masterParams;
				$masterTablesData["Organization Default Area"][0]["masterKeys"] = array();
	$masterTablesData["Organization Default Area"][0]["masterKeys"][]="created_by_id";
				$masterTablesData["Organization Default Area"][0]["detailKeys"] = array();
	$masterTablesData["Organization Default Area"][0]["detailKeys"][]="id_organization";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_organization_default_area()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_organization,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  country_code,  default_area";
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
	"m_srcTableName" => "Organization Default Area"
));

$proto6["m_sql"] = "id_organization";
$proto6["m_srcTableName"] = "Organization Default Area";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto8["m_sql"] = "syst_updated_datetime";
$proto8["m_srcTableName"] = "Organization Default Area";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "Organization Default Area";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto12["m_sql"] = "updated_by_id";
$proto12["m_srcTableName"] = "Organization Default Area";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto14["m_sql"] = "update_method";
$proto14["m_srcTableName"] = "Organization Default Area";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto16["m_sql"] = "designation";
$proto16["m_srcTableName"] = "Organization Default Area";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto18["m_sql"] = "country_code";
$proto18["m_srcTableName"] = "Organization Default Area";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "default_area",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Organization Default Area"
));

$proto20["m_sql"] = "default_area";
$proto20["m_srcTableName"] = "Organization Default Area";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "uneet_enterprise_organizations";
$proto23["m_srcTableName"] = "Organization Default Area";
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
$proto23["m_columns"][] = "default_assignee_mgt_cny";
$proto23["m_columns"][] = "default_assignee_agent";
$proto23["m_columns"][] = "default_assignee_landlord";
$proto23["m_columns"][] = "default_assignee_tenant";
$proto23["m_columns"][] = "default_sot_system";
$proto23["m_columns"][] = "default_sot_persons";
$proto23["m_columns"][] = "default_sot_areas";
$proto23["m_columns"][] = "default_sot_properties";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "uneet_enterprise_organizations";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Organization Default Area";
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
$proto0["m_srcTableName"]="Organization Default Area";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_organization_default_area = createSqlQuery_organization_default_area();


	
					
;

								

$tdataorganization_default_area[".sqlquery"] = $queryData_organization_default_area;

include_once(getabspath("include/organization_default_area_events.php"));
$tableEvents["Organization Default Area"] = new eventclass_organization_default_area;
$tdataorganization_default_area[".hasEvents"] = true;

?>