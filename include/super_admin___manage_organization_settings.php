<?php



$tdatasuper_admin___manage_organization = array();
$tdatasuper_admin___manage_organization[".searchableFields"] = array();
$tdatasuper_admin___manage_organization[".ShortName"] = "super_admin___manage_organization";
$tdatasuper_admin___manage_organization[".OwnerID"] = "";
$tdatasuper_admin___manage_organization[".OriginalTable"] = "uneet_enterprise_organizations";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasuper_admin___manage_organization[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasuper_admin___manage_organization[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasuper_admin___manage_organization[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssuper_admin___manage_organization = array();
$fieldToolTipssuper_admin___manage_organization = array();
$pageTitlessuper_admin___manage_organization = array();
$placeHolderssuper_admin___manage_organization = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuper_admin___manage_organization["English"] = array();
	$fieldToolTipssuper_admin___manage_organization["English"] = array();
	$placeHolderssuper_admin___manage_organization["English"] = array();
	$pageTitlessuper_admin___manage_organization["English"] = array();
	$fieldLabelssuper_admin___manage_organization["English"]["id_organization"] = "Id Organization";
	$fieldToolTipssuper_admin___manage_organization["English"]["id_organization"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["id_organization"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["syst_created_datetime"] = "Created";
	$fieldToolTipssuper_admin___manage_organization["English"]["syst_created_datetime"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["syst_created_datetime"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipssuper_admin___manage_organization["English"]["creation_system_id"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["creation_system_id"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["creation_method"] = "Creation Method";
	$fieldToolTipssuper_admin___manage_organization["English"]["creation_method"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["creation_method"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["created_by_id"] = "Created By";
	$fieldToolTipssuper_admin___manage_organization["English"]["created_by_id"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["created_by_id"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["syst_updated_datetime"] = "Updated";
	$fieldToolTipssuper_admin___manage_organization["English"]["syst_updated_datetime"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["syst_updated_datetime"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipssuper_admin___manage_organization["English"]["update_system_id"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["update_system_id"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["updated_by_id"] = "Updated By";
	$fieldToolTipssuper_admin___manage_organization["English"]["updated_by_id"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["updated_by_id"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["update_method"] = "Update Method";
	$fieldToolTipssuper_admin___manage_organization["English"]["update_method"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["update_method"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["order"] = "Order";
	$fieldToolTipssuper_admin___manage_organization["English"]["order"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["order"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipssuper_admin___manage_organization["English"]["is_obsolete"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["is_obsolete"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["designation"] = "Designation";
	$fieldToolTipssuper_admin___manage_organization["English"]["designation"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["designation"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["description"] = "Description";
	$fieldToolTipssuper_admin___manage_organization["English"]["description"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["description"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["default_area"] = "Default Area";
	$fieldToolTipssuper_admin___manage_organization["English"]["default_area"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["default_area"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["default_building"] = "Default Building";
	$fieldToolTipssuper_admin___manage_organization["English"]["default_building"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["default_building"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["default_unit"] = "Default Unit";
	$fieldToolTipssuper_admin___manage_organization["English"]["default_unit"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["default_unit"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["default_role_type_id"] = "Default Role Type";
	$fieldToolTipssuper_admin___manage_organization["English"]["default_role_type_id"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["default_role_type_id"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["country_code"] = "Country Code";
	$fieldToolTipssuper_admin___manage_organization["English"]["country_code"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["country_code"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["mefe_master_user_external_person_id"] = "Mefe Master User External Person Id";
	$fieldToolTipssuper_admin___manage_organization["English"]["mefe_master_user_external_person_id"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["mefe_master_user_external_person_id"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["mefe_master_user_external_person_table"] = "Mefe Master User External Person Table";
	$fieldToolTipssuper_admin___manage_organization["English"]["mefe_master_user_external_person_table"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["mefe_master_user_external_person_table"] = "";
	$fieldLabelssuper_admin___manage_organization["English"]["mefe_master_user_external_person_system"] = "Mefe Master User External Person System";
	$fieldToolTipssuper_admin___manage_organization["English"]["mefe_master_user_external_person_system"] = "";
	$placeHolderssuper_admin___manage_organization["English"]["mefe_master_user_external_person_system"] = "";
	if (count($fieldToolTipssuper_admin___manage_organization["English"]))
		$tdatasuper_admin___manage_organization[".isUseToolTips"] = true;
}


	$tdatasuper_admin___manage_organization[".NCSearch"] = true;



$tdatasuper_admin___manage_organization[".shortTableName"] = "super_admin___manage_organization";
$tdatasuper_admin___manage_organization[".nSecOptions"] = 0;

$tdatasuper_admin___manage_organization[".mainTableOwnerID"] = "";
$tdatasuper_admin___manage_organization[".entityType"] = 1;

$tdatasuper_admin___manage_organization[".strOriginalTableName"] = "uneet_enterprise_organizations";

		 



$tdatasuper_admin___manage_organization[".showAddInPopup"] = false;

$tdatasuper_admin___manage_organization[".showEditInPopup"] = false;

$tdatasuper_admin___manage_organization[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuper_admin___manage_organization[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatasuper_admin___manage_organization[".listAjax"] = true;
//	temporary
$tdatasuper_admin___manage_organization[".listAjax"] = false;

	$tdatasuper_admin___manage_organization[".audit"] = false;

	$tdatasuper_admin___manage_organization[".locking"] = false;


$pages = $tdatasuper_admin___manage_organization[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuper_admin___manage_organization[".edit"] = true;
	$tdatasuper_admin___manage_organization[".afterEditAction"] = 1;
	$tdatasuper_admin___manage_organization[".closePopupAfterEdit"] = 1;
	$tdatasuper_admin___manage_organization[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasuper_admin___manage_organization[".add"] = true;
$tdatasuper_admin___manage_organization[".afterAddAction"] = 0;
$tdatasuper_admin___manage_organization[".closePopupAfterAdd"] = 1;
$tdatasuper_admin___manage_organization[".afterAddActionDetTable"] = "Super Admin - Default sot for Unee-T objects";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuper_admin___manage_organization[".list"] = true;
}



$tdatasuper_admin___manage_organization[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuper_admin___manage_organization[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuper_admin___manage_organization[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuper_admin___manage_organization[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuper_admin___manage_organization[".printFriendly"] = true;
}



$tdatasuper_admin___manage_organization[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuper_admin___manage_organization[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuper_admin___manage_organization[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuper_admin___manage_organization[".isUseAjaxSuggest"] = true;

$tdatasuper_admin___manage_organization[".rowHighlite"] = true;





$tdatasuper_admin___manage_organization[".ajaxCodeSnippetAdded"] = false;

$tdatasuper_admin___manage_organization[".buttonsAdded"] = false;

$tdatasuper_admin___manage_organization[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuper_admin___manage_organization[".isUseTimeForSearch"] = false;


$tdatasuper_admin___manage_organization[".badgeColor"] = "6B8E23";


$tdatasuper_admin___manage_organization[".allSearchFields"] = array();
$tdatasuper_admin___manage_organization[".filterFields"] = array();
$tdatasuper_admin___manage_organization[".requiredSearchFields"] = array();

$tdatasuper_admin___manage_organization[".googleLikeFields"] = array();
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "designation";
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "description";
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "default_role_type_id";
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "country_code";
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "mefe_master_user_external_person_id";
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "mefe_master_user_external_person_table";
$tdatasuper_admin___manage_organization[".googleLikeFields"][] = "mefe_master_user_external_person_system";



$tdatasuper_admin___manage_organization[".tableType"] = "list";

$tdatasuper_admin___manage_organization[".printerPageOrientation"] = 0;
$tdatasuper_admin___manage_organization[".nPrinterPageScale"] = 100;

$tdatasuper_admin___manage_organization[".nPrinterSplitRecords"] = 40;

$tdatasuper_admin___manage_organization[".geocodingEnabled"] = false;





$tdatasuper_admin___manage_organization[".isResizeColumns"] = true;





$tdatasuper_admin___manage_organization[".pageSize"] = 50;

$tdatasuper_admin___manage_organization[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuper_admin___manage_organization[".strOrderBy"] = $tstrOrderBy;

$tdatasuper_admin___manage_organization[".orderindexes"] = array();

$tdatasuper_admin___manage_organization[".sqlHead"] = "SELECT id_organization,  syst_created_datetime,  creation_system_id,  creation_method,  created_by_id,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  `order`,  is_obsolete,  designation,  description,  default_area,  default_building,  default_unit,  default_role_type_id,  country_code,  mefe_master_user_external_person_id,  mefe_master_user_external_person_table,  mefe_master_user_external_person_system";
$tdatasuper_admin___manage_organization[".sqlFrom"] = "FROM uneet_enterprise_organizations";
$tdatasuper_admin___manage_organization[".sqlWhereExpr"] = "(id_organization != 0)";
$tdatasuper_admin___manage_organization[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuper_admin___manage_organization[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuper_admin___manage_organization[".arrGroupsPerPage"] = $arrGPP;

$tdatasuper_admin___manage_organization[".highlightSearchResults"] = true;

$tableKeyssuper_admin___manage_organization = array();
$tableKeyssuper_admin___manage_organization[] = "id_organization";
$tdatasuper_admin___manage_organization[".Keys"] = $tableKeyssuper_admin___manage_organization;


$tdatasuper_admin___manage_organization[".hideMobileList"] = array();




//	id_organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_organization";
	$fdata["GoodName"] = "id_organization";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","id_organization");
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


	$tdatasuper_admin___manage_organization["id_organization"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "id_organization";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_created_datetime";

	
	
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


	$tdatasuper_admin___manage_organization["syst_created_datetime"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","creation_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_system_id";

	
	
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


	$tdatasuper_admin___manage_organization["creation_system_id"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "creation_system_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_method";

	
	
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


	$tdatasuper_admin___manage_organization["creation_method"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "creation_method";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","created_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by_id";

	
	
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


	$tdatasuper_admin___manage_organization["created_by_id"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "created_by_id";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","syst_updated_datetime");
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatasuper_admin___manage_organization["syst_updated_datetime"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","update_system_id");
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


	$tdatasuper_admin___manage_organization["update_system_id"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","updated_by_id");
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


	$tdatasuper_admin___manage_organization["updated_by_id"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","update_method");
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


	$tdatasuper_admin___manage_organization["update_method"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "update_method";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","order");
	$fdata["FieldType"] = 2;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`order`";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatasuper_admin___manage_organization["order"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","is_obsolete");
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

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatasuper_admin___manage_organization["is_obsolete"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","designation");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdatasuper_admin___manage_organization["designation"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasuper_admin___manage_organization["description"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "description";
//	default_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "default_area";
	$fdata["GoodName"] = "default_area";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","default_area");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_map_external_source_units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unee_t_mefe_unit_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_map_external_source_units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unee_t_mefe_unit_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_map_external_source_units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unee_t_mefe_unit_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasuper_admin___manage_organization["default_area"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "default_area";
//	default_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "default_building";
	$fdata["GoodName"] = "default_building";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","default_building");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Buildings";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "building_name";

	

	
	$edata["LookupOrderBy"] = "order_building";

	
	
	
	

	
	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Buildings";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "building_name";

	

	
	$edata["LookupOrderBy"] = "order_building";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Buildings";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "building_name";

	

	
	$edata["LookupOrderBy"] = "order_building";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasuper_admin___manage_organization["default_building"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "default_building";
//	default_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "default_unit";
	$fdata["GoodName"] = "default_unit";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","default_unit");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "default_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "default_unit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Units";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unit_name";

	

	
	$edata["LookupOrderBy"] = "unit_name";

	
	
	
	

	
	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Units";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unit_name";

	

	
	$edata["LookupOrderBy"] = "unit_name";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Units";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_unit_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unit_name";

	

	
	$edata["LookupOrderBy"] = "unit_name";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasuper_admin___manage_organization["default_unit"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "default_unit";
//	default_role_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "default_role_type_id";
	$fdata["GoodName"] = "default_role_type_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","default_role_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "default_role_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "default_role_type_id";

	
	
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
	$edata["LookupTable"] = "ut_user_role_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_role_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "role_type";

				$edata["LookupWhere"] = "`is_obsolete` = 0";


	
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


	$tdatasuper_admin___manage_organization["default_role_type_id"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "default_role_type_id";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","country_code");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "List of Countries";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "country_name";

	

	
	$edata["LookupOrderBy"] = "country_code";

	
	
	
	

	
	
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


	$tdatasuper_admin___manage_organization["country_code"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "country_code";
//	mefe_master_user_external_person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "mefe_master_user_external_person_id";
	$fdata["GoodName"] = "mefe_master_user_external_person_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","mefe_master_user_external_person_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_master_user_external_person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mefe_master_user_external_person_id";

	
	
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


	$tdatasuper_admin___manage_organization["mefe_master_user_external_person_id"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "mefe_master_user_external_person_id";
//	mefe_master_user_external_person_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "mefe_master_user_external_person_table";
	$fdata["GoodName"] = "mefe_master_user_external_person_table";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","mefe_master_user_external_person_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_master_user_external_person_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mefe_master_user_external_person_table";

	
	
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


	$tdatasuper_admin___manage_organization["mefe_master_user_external_person_table"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "mefe_master_user_external_person_table";
//	mefe_master_user_external_person_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "mefe_master_user_external_person_system";
	$fdata["GoodName"] = "mefe_master_user_external_person_system";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_Organization","mefe_master_user_external_person_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_master_user_external_person_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mefe_master_user_external_person_system";

	
	
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


	$tdatasuper_admin___manage_organization["mefe_master_user_external_person_system"] = $fdata;
		$tdatasuper_admin___manage_organization[".searchableFields"][] = "mefe_master_user_external_person_system";


$tables_data["Super Admin - Manage Organization"]=&$tdatasuper_admin___manage_organization;
$field_labels["Super_Admin___Manage_Organization"] = &$fieldLabelssuper_admin___manage_organization;
$fieldToolTips["Super_Admin___Manage_Organization"] = &$fieldToolTipssuper_admin___manage_organization;
$placeHolders["Super_Admin___Manage_Organization"] = &$placeHolderssuper_admin___manage_organization;
$page_titles["Super_Admin___Manage_Organization"] = &$pageTitlessuper_admin___manage_organization;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Super Admin - Manage Organization"] = array();
//	Super Admin - Manage API Keys
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Super Admin - Manage API Keys";
		$detailsParam["dOriginalTable"] = "ut_api_keys";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "super_admin___manage_api_keys";
	$detailsParam["dCaptionTable"] = GetTableCaption("Super_Admin___Manage_API_Keys");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Super Admin - Manage Organization"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"][]="id_organization";

				$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"][]="organization_id";
//	SuperAdmin - manage UNTE admins
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="SuperAdmin - manage UNTE admins";
		$detailsParam["dOriginalTable"] = "uneet_enterprise_users";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "superadmin___manage_unte_admins";
	$detailsParam["dCaptionTable"] = GetTableCaption("SuperAdmin___manage_UNTE_admins");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Super Admin - Manage Organization"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"][]="id_organization";

				$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"][]="organization_id";
//	Super Admin - Manage MEFE Master User
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Super Admin - Manage MEFE Master User";
		$detailsParam["dOriginalTable"] = "external_persons";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "super_admin___manage_mefe_master_user1";
	$detailsParam["dCaptionTable"] = GetTableCaption("Super_Admin___Manage_MEFE_Master_User");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Super Admin - Manage Organization"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"][]="id_organization";

				$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"][]="created_by_id";
//	Super Admin - Default sot for Unee-T objects
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Super Admin - Default sot for Unee-T objects";
		$detailsParam["dOriginalTable"] = "ut_external_sot_for_unee_t_objects";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "super_admin___default_sot_for_unee_t_objects";
	$detailsParam["dCaptionTable"] = GetTableCaption("Super_Admin___Default_sot_for_Unee_T_objects");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Super Admin - Manage Organization"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["masterKeys"][]="id_organization";

				$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Super Admin - Manage Organization"][$dIndex]["detailKeys"][]="organization_id";

// tables which are master tables for current table (detail)
$masterTablesData["Super Admin - Manage Organization"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_super_admin___manage_organization()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_organization,  syst_created_datetime,  creation_system_id,  creation_method,  created_by_id,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  `order`,  is_obsolete,  designation,  description,  default_area,  default_building,  default_unit,  default_role_type_id,  country_code,  mefe_master_user_external_person_id,  mefe_master_user_external_person_table,  mefe_master_user_external_person_system";
$proto0["m_strFrom"] = "FROM uneet_enterprise_organizations";
$proto0["m_strWhere"] = "(id_organization != 0)";
$proto0["m_strOrderBy"] = "";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "id_organization != 0";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_organization",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "!= 0";
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
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto6["m_sql"] = "id_organization";
$proto6["m_srcTableName"] = "Super Admin - Manage Organization";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto8["m_sql"] = "syst_created_datetime";
$proto8["m_srcTableName"] = "Super Admin - Manage Organization";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto10["m_sql"] = "creation_system_id";
$proto10["m_srcTableName"] = "Super Admin - Manage Organization";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto12["m_sql"] = "creation_method";
$proto12["m_srcTableName"] = "Super Admin - Manage Organization";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto14["m_sql"] = "created_by_id";
$proto14["m_srcTableName"] = "Super Admin - Manage Organization";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto16["m_sql"] = "syst_updated_datetime";
$proto16["m_srcTableName"] = "Super Admin - Manage Organization";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto18["m_sql"] = "update_system_id";
$proto18["m_srcTableName"] = "Super Admin - Manage Organization";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto20["m_sql"] = "updated_by_id";
$proto20["m_srcTableName"] = "Super Admin - Manage Organization";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto22["m_sql"] = "update_method";
$proto22["m_srcTableName"] = "Super Admin - Manage Organization";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto24["m_sql"] = "`order`";
$proto24["m_srcTableName"] = "Super Admin - Manage Organization";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto26["m_sql"] = "is_obsolete";
$proto26["m_srcTableName"] = "Super Admin - Manage Organization";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto28["m_sql"] = "designation";
$proto28["m_srcTableName"] = "Super Admin - Manage Organization";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto30["m_sql"] = "description";
$proto30["m_srcTableName"] = "Super Admin - Manage Organization";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "default_area",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto32["m_sql"] = "default_area";
$proto32["m_srcTableName"] = "Super Admin - Manage Organization";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "default_building",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto34["m_sql"] = "default_building";
$proto34["m_srcTableName"] = "Super Admin - Manage Organization";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "default_unit",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto36["m_sql"] = "default_unit";
$proto36["m_srcTableName"] = "Super Admin - Manage Organization";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "default_role_type_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto38["m_sql"] = "default_role_type_id";
$proto38["m_srcTableName"] = "Super Admin - Manage Organization";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto40["m_sql"] = "country_code";
$proto40["m_srcTableName"] = "Super Admin - Manage Organization";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_master_user_external_person_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto42["m_sql"] = "mefe_master_user_external_person_id";
$proto42["m_srcTableName"] = "Super Admin - Manage Organization";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_master_user_external_person_table",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto44["m_sql"] = "mefe_master_user_external_person_table";
$proto44["m_srcTableName"] = "Super Admin - Manage Organization";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_master_user_external_person_system",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage Organization"
));

$proto46["m_sql"] = "mefe_master_user_external_person_system";
$proto46["m_srcTableName"] = "Super Admin - Manage Organization";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "uneet_enterprise_organizations";
$proto49["m_srcTableName"] = "Super Admin - Manage Organization";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_organization";
$proto49["m_columns"][] = "syst_created_datetime";
$proto49["m_columns"][] = "creation_system_id";
$proto49["m_columns"][] = "creation_method";
$proto49["m_columns"][] = "created_by_id";
$proto49["m_columns"][] = "syst_updated_datetime";
$proto49["m_columns"][] = "update_system_id";
$proto49["m_columns"][] = "updated_by_id";
$proto49["m_columns"][] = "update_method";
$proto49["m_columns"][] = "order";
$proto49["m_columns"][] = "is_obsolete";
$proto49["m_columns"][] = "designation";
$proto49["m_columns"][] = "description";
$proto49["m_columns"][] = "country_code";
$proto49["m_columns"][] = "mefe_master_user_external_person_id";
$proto49["m_columns"][] = "mefe_master_user_external_person_table";
$proto49["m_columns"][] = "mefe_master_user_external_person_system";
$proto49["m_columns"][] = "default_role_type_id";
$proto49["m_columns"][] = "default_sot_id";
$proto49["m_columns"][] = "default_area";
$proto49["m_columns"][] = "default_building";
$proto49["m_columns"][] = "default_unit";
$proto49["m_columns"][] = "default_assignee_mgt_cny";
$proto49["m_columns"][] = "default_assignee_agent";
$proto49["m_columns"][] = "default_assignee_landlord";
$proto49["m_columns"][] = "default_assignee_tenant";
$proto49["m_columns"][] = "default_sot_system";
$proto49["m_columns"][] = "default_sot_persons";
$proto49["m_columns"][] = "default_sot_areas";
$proto49["m_columns"][] = "default_sot_properties";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "uneet_enterprise_organizations";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Super Admin - Manage Organization";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Super Admin - Manage Organization";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_super_admin___manage_organization = createSqlQuery_super_admin___manage_organization();


	
					
;

																					

$tdatasuper_admin___manage_organization[".sqlquery"] = $queryData_super_admin___manage_organization;

include_once(getabspath("include/super_admin___manage_organization_events.php"));
$tableEvents["Super Admin - Manage Organization"] = new eventclass_super_admin___manage_organization;
$tdatasuper_admin___manage_organization[".hasEvents"] = true;

?>