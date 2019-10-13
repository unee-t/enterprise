<?php



$tdatasearch_list_of_possible_properties = array();
$tdatasearch_list_of_possible_properties[".searchableFields"] = array();
$tdatasearch_list_of_possible_properties[".ShortName"] = "search_list_of_possible_properties";
$tdatasearch_list_of_possible_properties[".OwnerID"] = "organization_id";
$tdatasearch_list_of_possible_properties[".OriginalTable"] = "ut_list_possible_properties";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdatasearch_list_of_possible_properties[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasearch_list_of_possible_properties[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasearch_list_of_possible_properties[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssearch_list_of_possible_properties = array();
$fieldToolTipssearch_list_of_possible_properties = array();
$pageTitlessearch_list_of_possible_properties = array();
$placeHolderssearch_list_of_possible_properties = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssearch_list_of_possible_properties["English"] = array();
	$fieldToolTipssearch_list_of_possible_properties["English"] = array();
	$placeHolderssearch_list_of_possible_properties["English"] = array();
	$pageTitlessearch_list_of_possible_properties["English"] = array();
	$fieldLabelssearch_list_of_possible_properties["English"]["organization_id"] = "Organization Id";
	$fieldToolTipssearch_list_of_possible_properties["English"]["organization_id"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["organization_id"] = "";
	$fieldLabelssearch_list_of_possible_properties["English"]["organization"] = "Organization";
	$fieldToolTipssearch_list_of_possible_properties["English"]["organization"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["organization"] = "";
	$fieldLabelssearch_list_of_possible_properties["English"]["external_property_type_id"] = "Property Type";
	$fieldToolTipssearch_list_of_possible_properties["English"]["external_property_type_id"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["external_property_type_id"] = "";
	$fieldLabelssearch_list_of_possible_properties["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipssearch_list_of_possible_properties["English"]["unee_t_mefe_unit_id"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelssearch_list_of_possible_properties["English"]["uneet_name"] = "Uneet Name";
	$fieldToolTipssearch_list_of_possible_properties["English"]["uneet_name"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["uneet_name"] = "";
	$fieldLabelssearch_list_of_possible_properties["English"]["mefe_unit_id_parent"] = "Mefe Unit Id Parent";
	$fieldToolTipssearch_list_of_possible_properties["English"]["mefe_unit_id_parent"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["mefe_unit_id_parent"] = "";
	$fieldLabelssearch_list_of_possible_properties["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipssearch_list_of_possible_properties["English"]["is_obsolete"] = "";
	$placeHolderssearch_list_of_possible_properties["English"]["is_obsolete"] = "";
	if (count($fieldToolTipssearch_list_of_possible_properties["English"]))
		$tdatasearch_list_of_possible_properties[".isUseToolTips"] = true;
}


	$tdatasearch_list_of_possible_properties[".NCSearch"] = true;



$tdatasearch_list_of_possible_properties[".shortTableName"] = "search_list_of_possible_properties";
$tdatasearch_list_of_possible_properties[".nSecOptions"] = 1;

$tdatasearch_list_of_possible_properties[".mainTableOwnerID"] = "organization_id";
$tdatasearch_list_of_possible_properties[".entityType"] = 1;

$tdatasearch_list_of_possible_properties[".strOriginalTableName"] = "ut_list_possible_properties";

		 



$tdatasearch_list_of_possible_properties[".showAddInPopup"] = false;

$tdatasearch_list_of_possible_properties[".showEditInPopup"] = false;

$tdatasearch_list_of_possible_properties[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasearch_list_of_possible_properties[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasearch_list_of_possible_properties[".listAjax"] = false;
//	temporary
$tdatasearch_list_of_possible_properties[".listAjax"] = false;

	$tdatasearch_list_of_possible_properties[".audit"] = false;

	$tdatasearch_list_of_possible_properties[".locking"] = false;


$pages = $tdatasearch_list_of_possible_properties[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasearch_list_of_possible_properties[".edit"] = true;
	$tdatasearch_list_of_possible_properties[".afterEditAction"] = 1;
	$tdatasearch_list_of_possible_properties[".closePopupAfterEdit"] = 1;
	$tdatasearch_list_of_possible_properties[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasearch_list_of_possible_properties[".add"] = true;
$tdatasearch_list_of_possible_properties[".afterAddAction"] = 1;
$tdatasearch_list_of_possible_properties[".closePopupAfterAdd"] = 1;
$tdatasearch_list_of_possible_properties[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasearch_list_of_possible_properties[".list"] = true;
}



$tdatasearch_list_of_possible_properties[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasearch_list_of_possible_properties[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasearch_list_of_possible_properties[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasearch_list_of_possible_properties[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasearch_list_of_possible_properties[".printFriendly"] = true;
}



$tdatasearch_list_of_possible_properties[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasearch_list_of_possible_properties[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasearch_list_of_possible_properties[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasearch_list_of_possible_properties[".isUseAjaxSuggest"] = true;

$tdatasearch_list_of_possible_properties[".rowHighlite"] = true;





$tdatasearch_list_of_possible_properties[".ajaxCodeSnippetAdded"] = false;

$tdatasearch_list_of_possible_properties[".buttonsAdded"] = false;

$tdatasearch_list_of_possible_properties[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasearch_list_of_possible_properties[".isUseTimeForSearch"] = false;


$tdatasearch_list_of_possible_properties[".badgeColor"] = "3CB371";


$tdatasearch_list_of_possible_properties[".allSearchFields"] = array();
$tdatasearch_list_of_possible_properties[".filterFields"] = array();
$tdatasearch_list_of_possible_properties[".requiredSearchFields"] = array();

$tdatasearch_list_of_possible_properties[".googleLikeFields"] = array();
$tdatasearch_list_of_possible_properties[".googleLikeFields"][] = "unee_t_mefe_unit_id";
$tdatasearch_list_of_possible_properties[".googleLikeFields"][] = "uneet_name";



$tdatasearch_list_of_possible_properties[".tableType"] = "list";

$tdatasearch_list_of_possible_properties[".printerPageOrientation"] = 0;
$tdatasearch_list_of_possible_properties[".nPrinterPageScale"] = 100;

$tdatasearch_list_of_possible_properties[".nPrinterSplitRecords"] = 40;

$tdatasearch_list_of_possible_properties[".geocodingEnabled"] = false;





$tdatasearch_list_of_possible_properties[".isResizeColumns"] = true;





$tdatasearch_list_of_possible_properties[".pageSize"] = 20;

$tdatasearch_list_of_possible_properties[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasearch_list_of_possible_properties[".strOrderBy"] = $tstrOrderBy;

$tdatasearch_list_of_possible_properties[".orderindexes"] = array();

$tdatasearch_list_of_possible_properties[".sqlHead"] = "SELECT organization_id,  `organization`,  external_property_type_id,  unee_t_mefe_unit_id,  uneet_name,  mefe_unit_id_parent,  is_obsolete";
$tdatasearch_list_of_possible_properties[".sqlFrom"] = "FROM ut_list_possible_properties";
$tdatasearch_list_of_possible_properties[".sqlWhereExpr"] = "(is_obsolete = 0)";
$tdatasearch_list_of_possible_properties[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasearch_list_of_possible_properties[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasearch_list_of_possible_properties[".arrGroupsPerPage"] = $arrGPP;

$tdatasearch_list_of_possible_properties[".highlightSearchResults"] = true;

$tableKeyssearch_list_of_possible_properties = array();
$tableKeyssearch_list_of_possible_properties[] = "unee_t_mefe_unit_id";
$tdatasearch_list_of_possible_properties[".Keys"] = $tableKeyssearch_list_of_possible_properties;


$tdatasearch_list_of_possible_properties[".hideMobileList"] = array();




//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organization_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatasearch_list_of_possible_properties["organization_id"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "organization_id";
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","organization");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`organization`";

	
	
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


	$tdatasearch_list_of_possible_properties["organization"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "organization";
//	external_property_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_property_type_id";
	$fdata["GoodName"] = "external_property_type_id";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","external_property_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "external_property_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_type_id";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatasearch_list_of_possible_properties["external_property_type_id"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "external_property_type_id";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unee_t_mefe_unit_id";

	
	
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


	$tdatasearch_list_of_possible_properties["unee_t_mefe_unit_id"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "unee_t_mefe_unit_id";
//	uneet_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "uneet_name";
	$fdata["GoodName"] = "uneet_name";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","uneet_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "uneet_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_name";

	
	
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


	$tdatasearch_list_of_possible_properties["uneet_name"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "uneet_name";
//	mefe_unit_id_parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mefe_unit_id_parent";
	$fdata["GoodName"] = "mefe_unit_id_parent";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","mefe_unit_id_parent");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_unit_id_parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mefe_unit_id_parent";

	
	
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


	$tdatasearch_list_of_possible_properties["mefe_unit_id_parent"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "mefe_unit_id_parent";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_list_possible_properties";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_properties","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_obsolete";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatasearch_list_of_possible_properties["is_obsolete"] = $fdata;
		$tdatasearch_list_of_possible_properties[".searchableFields"][] = "is_obsolete";


$tables_data["Search list of possible properties"]=&$tdatasearch_list_of_possible_properties;
$field_labels["Search_list_of_possible_properties"] = &$fieldLabelssearch_list_of_possible_properties;
$fieldToolTips["Search_list_of_possible_properties"] = &$fieldToolTipssearch_list_of_possible_properties;
$placeHolders["Search_list_of_possible_properties"] = &$placeHolderssearch_list_of_possible_properties;
$page_titles["Search_list_of_possible_properties"] = &$pageTitlessearch_list_of_possible_properties;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Search list of possible properties"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Search list of possible properties"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_search_list_of_possible_properties()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "organization_id,  `organization`,  external_property_type_id,  unee_t_mefe_unit_id,  uneet_name,  mefe_unit_id_parent,  is_obsolete";
$proto0["m_strFrom"] = "FROM ut_list_possible_properties";
$proto0["m_strWhere"] = "(is_obsolete = 0)";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "is_obsolete = 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 0";
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
	"m_strName" => "organization_id",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto6["m_sql"] = "organization_id";
$proto6["m_srcTableName"] = "Search list of possible properties";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto8["m_sql"] = "`organization`";
$proto8["m_srcTableName"] = "Search list of possible properties";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_property_type_id",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto10["m_sql"] = "external_property_type_id";
$proto10["m_srcTableName"] = "Search list of possible properties";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto12["m_sql"] = "unee_t_mefe_unit_id";
$proto12["m_srcTableName"] = "Search list of possible properties";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_name",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto14["m_sql"] = "uneet_name";
$proto14["m_srcTableName"] = "Search list of possible properties";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_unit_id_parent",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto16["m_sql"] = "mefe_unit_id_parent";
$proto16["m_srcTableName"] = "Search list of possible properties";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_list_possible_properties",
	"m_srcTableName" => "Search list of possible properties"
));

$proto18["m_sql"] = "is_obsolete";
$proto18["m_srcTableName"] = "Search list of possible properties";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ut_list_possible_properties";
$proto21["m_srcTableName"] = "Search list of possible properties";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "organization_id";
$proto21["m_columns"][] = "organization";
$proto21["m_columns"][] = "external_property_type_id";
$proto21["m_columns"][] = "unee_t_mefe_unit_id";
$proto21["m_columns"][] = "uneet_name";
$proto21["m_columns"][] = "mefe_unit_id_parent";
$proto21["m_columns"][] = "is_obsolete";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ut_list_possible_properties";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "Search list of possible properties";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Search list of possible properties";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_search_list_of_possible_properties = createSqlQuery_search_list_of_possible_properties();


	
					
;

							

$tdatasearch_list_of_possible_properties[".sqlquery"] = $queryData_search_list_of_possible_properties;

$tableEvents["Search list of possible properties"] = new eventsBase;
$tdatasearch_list_of_possible_properties[".hasEvents"] = false;

?>