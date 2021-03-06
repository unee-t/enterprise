<?php



$tdatasuper_admin___manage_api_keys = array();
$tdatasuper_admin___manage_api_keys[".searchableFields"] = array();
$tdatasuper_admin___manage_api_keys[".ShortName"] = "super_admin___manage_api_keys";
$tdatasuper_admin___manage_api_keys[".OwnerID"] = "";
$tdatasuper_admin___manage_api_keys[".OriginalTable"] = "ut_api_keys";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasuper_admin___manage_api_keys[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasuper_admin___manage_api_keys[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasuper_admin___manage_api_keys[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssuper_admin___manage_api_keys = array();
$fieldToolTipssuper_admin___manage_api_keys = array();
$pageTitlessuper_admin___manage_api_keys = array();
$placeHolderssuper_admin___manage_api_keys = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuper_admin___manage_api_keys["English"] = array();
	$fieldToolTipssuper_admin___manage_api_keys["English"] = array();
	$placeHolderssuper_admin___manage_api_keys["English"] = array();
	$pageTitlessuper_admin___manage_api_keys["English"] = array();
	$fieldLabelssuper_admin___manage_api_keys["English"]["id_api_key"] = "Id Api Key";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["id_api_key"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["id_api_key"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["syst_created_datetime"] = "Created";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["syst_created_datetime"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["syst_created_datetime"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["creation_system_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["creation_system_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["created_by_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["created_by_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["creation_method"] = "Creation Method";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["creation_method"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["creation_method"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["syst_updated_datetime"] = "Updated";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["syst_updated_datetime"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["syst_updated_datetime"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["update_system_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["update_system_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["updated_by_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["updated_by_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["update_method"] = "Update Method";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["update_method"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["update_method"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["external_system_id"] = "External System Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["external_system_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["external_system_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["revoked_datetime"] = "Revoked Datetime";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["revoked_datetime"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["revoked_datetime"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["is_obsolete"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["is_obsolete"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["api_key"] = "UNTE Api Key";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["api_key"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["api_key"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["mefe_user_id"] = "Mefe User Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["mefe_user_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["mefe_user_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["organization_id"] = "Organization Id";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["organization_id"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["organization_id"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["unee_t_mefe_user_api_key"] = "MEFE User Api Key";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["unee_t_mefe_user_api_key"] = "";
	$fieldLabelssuper_admin___manage_api_keys["English"]["designation"] = "Organization";
	$fieldToolTipssuper_admin___manage_api_keys["English"]["designation"] = "";
	$placeHolderssuper_admin___manage_api_keys["English"]["designation"] = "";
	if (count($fieldToolTipssuper_admin___manage_api_keys["English"]))
		$tdatasuper_admin___manage_api_keys[".isUseToolTips"] = true;
}


	$tdatasuper_admin___manage_api_keys[".NCSearch"] = true;



$tdatasuper_admin___manage_api_keys[".shortTableName"] = "super_admin___manage_api_keys";
$tdatasuper_admin___manage_api_keys[".nSecOptions"] = 0;

$tdatasuper_admin___manage_api_keys[".mainTableOwnerID"] = "";
$tdatasuper_admin___manage_api_keys[".entityType"] = 1;

$tdatasuper_admin___manage_api_keys[".strOriginalTableName"] = "ut_api_keys";

		 



$tdatasuper_admin___manage_api_keys[".showAddInPopup"] = false;

$tdatasuper_admin___manage_api_keys[".showEditInPopup"] = false;

$tdatasuper_admin___manage_api_keys[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuper_admin___manage_api_keys[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasuper_admin___manage_api_keys[".listAjax"] = false;
//	temporary
$tdatasuper_admin___manage_api_keys[".listAjax"] = false;

	$tdatasuper_admin___manage_api_keys[".audit"] = false;

	$tdatasuper_admin___manage_api_keys[".locking"] = false;


$pages = $tdatasuper_admin___manage_api_keys[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuper_admin___manage_api_keys[".edit"] = true;
	$tdatasuper_admin___manage_api_keys[".afterEditAction"] = 1;
	$tdatasuper_admin___manage_api_keys[".closePopupAfterEdit"] = 1;
	$tdatasuper_admin___manage_api_keys[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasuper_admin___manage_api_keys[".add"] = true;
$tdatasuper_admin___manage_api_keys[".afterAddAction"] = 1;
$tdatasuper_admin___manage_api_keys[".closePopupAfterAdd"] = 1;
$tdatasuper_admin___manage_api_keys[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuper_admin___manage_api_keys[".list"] = true;
}



$tdatasuper_admin___manage_api_keys[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuper_admin___manage_api_keys[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuper_admin___manage_api_keys[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuper_admin___manage_api_keys[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuper_admin___manage_api_keys[".printFriendly"] = true;
}



$tdatasuper_admin___manage_api_keys[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuper_admin___manage_api_keys[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuper_admin___manage_api_keys[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuper_admin___manage_api_keys[".isUseAjaxSuggest"] = true;

$tdatasuper_admin___manage_api_keys[".rowHighlite"] = true;





$tdatasuper_admin___manage_api_keys[".ajaxCodeSnippetAdded"] = false;

$tdatasuper_admin___manage_api_keys[".buttonsAdded"] = false;

$tdatasuper_admin___manage_api_keys[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuper_admin___manage_api_keys[".isUseTimeForSearch"] = false;


$tdatasuper_admin___manage_api_keys[".badgeColor"] = "d2af80";


$tdatasuper_admin___manage_api_keys[".allSearchFields"] = array();
$tdatasuper_admin___manage_api_keys[".filterFields"] = array();
$tdatasuper_admin___manage_api_keys[".requiredSearchFields"] = array();

$tdatasuper_admin___manage_api_keys[".googleLikeFields"] = array();
$tdatasuper_admin___manage_api_keys[".googleLikeFields"][] = "designation";
$tdatasuper_admin___manage_api_keys[".googleLikeFields"][] = "api_key";
$tdatasuper_admin___manage_api_keys[".googleLikeFields"][] = "mefe_user_id";



$tdatasuper_admin___manage_api_keys[".tableType"] = "list";

$tdatasuper_admin___manage_api_keys[".printerPageOrientation"] = 0;
$tdatasuper_admin___manage_api_keys[".nPrinterPageScale"] = 100;

$tdatasuper_admin___manage_api_keys[".nPrinterSplitRecords"] = 40;

$tdatasuper_admin___manage_api_keys[".geocodingEnabled"] = false;










$tdatasuper_admin___manage_api_keys[".pageSize"] = 20;

$tdatasuper_admin___manage_api_keys[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuper_admin___manage_api_keys[".strOrderBy"] = $tstrOrderBy;

$tdatasuper_admin___manage_api_keys[".orderindexes"] = array();

$tdatasuper_admin___manage_api_keys[".sqlHead"] = "SELECT ut_api_keys.id_api_key,  ut_api_keys.syst_created_datetime,  ut_api_keys.creation_system_id,  ut_api_keys.created_by_id,  ut_api_keys.creation_method,  ut_api_keys.syst_updated_datetime,  ut_api_keys.update_system_id,  ut_api_keys.updated_by_id,  ut_api_keys.update_method,  ut_api_keys.external_system_id,  ut_api_keys.revoked_datetime,  ut_api_keys.is_obsolete,  ut_api_keys.organization_id,  uneet_enterprise_organizations.designation,  ut_api_keys.api_key,  ut_api_keys.mefe_user_id,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$tdatasuper_admin___manage_api_keys[".sqlFrom"] = "FROM ut_api_keys  LEFT OUTER JOIN ut_map_external_source_users ON ut_api_keys.mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  RIGHT OUTER JOIN uneet_enterprise_organizations ON uneet_enterprise_organizations.id_organization = ut_api_keys.organization_id";
$tdatasuper_admin___manage_api_keys[".sqlWhereExpr"] = "";
$tdatasuper_admin___manage_api_keys[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuper_admin___manage_api_keys[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuper_admin___manage_api_keys[".arrGroupsPerPage"] = $arrGPP;

$tdatasuper_admin___manage_api_keys[".highlightSearchResults"] = true;

$tableKeyssuper_admin___manage_api_keys = array();
$tableKeyssuper_admin___manage_api_keys[] = "mefe_user_id";
$tableKeyssuper_admin___manage_api_keys[] = "organization_id";
$tdatasuper_admin___manage_api_keys[".Keys"] = $tableKeyssuper_admin___manage_api_keys;


$tdatasuper_admin___manage_api_keys[".hideMobileList"] = array();




//	id_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_api_key";
	$fdata["GoodName"] = "id_api_key";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","id_api_key");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.id_api_key";

	
	
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


	$tdatasuper_admin___manage_api_keys["id_api_key"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "id_api_key";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.syst_created_datetime";

	
	
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


	$tdatasuper_admin___manage_api_keys["syst_created_datetime"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","creation_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.creation_system_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["creation_system_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","created_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.created_by_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["created_by_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.creation_method";

	
	
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


	$tdatasuper_admin___manage_api_keys["creation_method"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.syst_updated_datetime";

	
	
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


	$tdatasuper_admin___manage_api_keys["syst_updated_datetime"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.update_system_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["update_system_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.updated_by_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["updated_by_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.update_method";

	
	
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


	$tdatasuper_admin___manage_api_keys["update_method"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "update_method";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","external_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.external_system_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["external_system_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "external_system_id";
//	revoked_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "revoked_datetime";
	$fdata["GoodName"] = "revoked_datetime";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","revoked_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "revoked_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.revoked_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatasuper_admin___manage_api_keys["revoked_datetime"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "revoked_datetime";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.is_obsolete";

	
	
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


	$tdatasuper_admin___manage_api_keys["is_obsolete"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "is_obsolete";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.organization_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["organization_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "organization_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.designation";

	
	
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


	$tdatasuper_admin___manage_api_keys["designation"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "designation";
//	api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "api_key";
	$fdata["GoodName"] = "api_key";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","api_key");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.api_key";

	
	
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


	$tdatasuper_admin___manage_api_keys["api_key"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "api_key";
//	mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "mefe_user_id";
	$fdata["GoodName"] = "mefe_user_id";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.mefe_user_id";

	
	
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


	$tdatasuper_admin___manage_api_keys["mefe_user_id"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "mefe_user_id";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_API_Keys","unee_t_mefe_user_api_key");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";

	
	
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


	$tdatasuper_admin___manage_api_keys["unee_t_mefe_user_api_key"] = $fdata;
		$tdatasuper_admin___manage_api_keys[".searchableFields"][] = "unee_t_mefe_user_api_key";


$tables_data["Super Admin - Manage API Keys"]=&$tdatasuper_admin___manage_api_keys;
$field_labels["Super_Admin___Manage_API_Keys"] = &$fieldLabelssuper_admin___manage_api_keys;
$fieldToolTips["Super_Admin___Manage_API_Keys"] = &$fieldToolTipssuper_admin___manage_api_keys;
$placeHolders["Super_Admin___Manage_API_Keys"] = &$placeHolderssuper_admin___manage_api_keys;
$page_titles["Super_Admin___Manage_API_Keys"] = &$pageTitlessuper_admin___manage_api_keys;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Super Admin - Manage API Keys"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Super Admin - Manage API Keys"] = array();



	
				$strOriginalDetailsTable="uneet_enterprise_organizations";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Super Admin - Manage Organization";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "super_admin___manage_organization";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Super Admin - Manage API Keys"][0] = $masterParams;
				$masterTablesData["Super Admin - Manage API Keys"][0]["masterKeys"] = array();
	$masterTablesData["Super Admin - Manage API Keys"][0]["masterKeys"][]="id_organization";
				$masterTablesData["Super Admin - Manage API Keys"][0]["detailKeys"] = array();
	$masterTablesData["Super Admin - Manage API Keys"][0]["detailKeys"][]="organization_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_super_admin___manage_api_keys()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_api_keys.id_api_key,  ut_api_keys.syst_created_datetime,  ut_api_keys.creation_system_id,  ut_api_keys.created_by_id,  ut_api_keys.creation_method,  ut_api_keys.syst_updated_datetime,  ut_api_keys.update_system_id,  ut_api_keys.updated_by_id,  ut_api_keys.update_method,  ut_api_keys.external_system_id,  ut_api_keys.revoked_datetime,  ut_api_keys.is_obsolete,  ut_api_keys.organization_id,  uneet_enterprise_organizations.designation,  ut_api_keys.api_key,  ut_api_keys.mefe_user_id,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto0["m_strFrom"] = "FROM ut_api_keys  LEFT OUTER JOIN ut_map_external_source_users ON ut_api_keys.mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  RIGHT OUTER JOIN uneet_enterprise_organizations ON uneet_enterprise_organizations.id_organization = ut_api_keys.organization_id";
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
	"m_strName" => "id_api_key",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto6["m_sql"] = "ut_api_keys.id_api_key";
$proto6["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto8["m_sql"] = "ut_api_keys.syst_created_datetime";
$proto8["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto10["m_sql"] = "ut_api_keys.creation_system_id";
$proto10["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto12["m_sql"] = "ut_api_keys.created_by_id";
$proto12["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto14["m_sql"] = "ut_api_keys.creation_method";
$proto14["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto16["m_sql"] = "ut_api_keys.syst_updated_datetime";
$proto16["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto18["m_sql"] = "ut_api_keys.update_system_id";
$proto18["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto20["m_sql"] = "ut_api_keys.updated_by_id";
$proto20["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto22["m_sql"] = "ut_api_keys.update_method";
$proto22["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto24["m_sql"] = "ut_api_keys.external_system_id";
$proto24["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "revoked_datetime",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto26["m_sql"] = "ut_api_keys.revoked_datetime";
$proto26["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto28["m_sql"] = "ut_api_keys.is_obsolete";
$proto28["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto30["m_sql"] = "ut_api_keys.organization_id";
$proto30["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto32["m_sql"] = "uneet_enterprise_organizations.designation";
$proto32["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "api_key",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto34["m_sql"] = "ut_api_keys.api_key";
$proto34["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_user_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto36["m_sql"] = "ut_api_keys.mefe_user_id";
$proto36["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto38["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto38["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "ut_api_keys";
$proto41["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id_api_key";
$proto41["m_columns"][] = "syst_created_datetime";
$proto41["m_columns"][] = "creation_system_id";
$proto41["m_columns"][] = "created_by_id";
$proto41["m_columns"][] = "creation_method";
$proto41["m_columns"][] = "syst_updated_datetime";
$proto41["m_columns"][] = "update_system_id";
$proto41["m_columns"][] = "updated_by_id";
$proto41["m_columns"][] = "update_method";
$proto41["m_columns"][] = "external_system_id";
$proto41["m_columns"][] = "revoked_datetime";
$proto41["m_columns"][] = "is_obsolete";
$proto41["m_columns"][] = "api_key";
$proto41["m_columns"][] = "mefe_user_id";
$proto41["m_columns"][] = "organization_id";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "ut_api_keys";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "ut_map_external_source_users";
$proto45["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_map";
$proto45["m_columns"][] = "create_api_request_id";
$proto45["m_columns"][] = "edit_api_request_id";
$proto45["m_columns"][] = "syst_created_datetime";
$proto45["m_columns"][] = "creation_system_id";
$proto45["m_columns"][] = "created_by_id";
$proto45["m_columns"][] = "creation_method";
$proto45["m_columns"][] = "syst_updated_datetime";
$proto45["m_columns"][] = "update_system_id";
$proto45["m_columns"][] = "updated_by_id";
$proto45["m_columns"][] = "update_method";
$proto45["m_columns"][] = "is_update_on_duplicate_key";
$proto45["m_columns"][] = "organization_id";
$proto45["m_columns"][] = "is_obsolete";
$proto45["m_columns"][] = "is_update_needed";
$proto45["m_columns"][] = "person_id";
$proto45["m_columns"][] = "mefe_user_id_parent";
$proto45["m_columns"][] = "unee_t_mefe_user_id";
$proto45["m_columns"][] = "unee_t_mefe_user_api_key";
$proto45["m_columns"][] = "uneet_created_datetime";
$proto45["m_columns"][] = "is_mefe_api_success";
$proto45["m_columns"][] = "mefe_api_error_message";
$proto45["m_columns"][] = "is_unee_t_created_by_me";
$proto45["m_columns"][] = "uneet_login_name";
$proto45["m_columns"][] = "external_person_id";
$proto45["m_columns"][] = "external_system";
$proto45["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON ut_api_keys.mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto46=array();
$proto46["m_sql"] = "ut_api_keys.mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mefe_user_id",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= ut_map_external_source_users.unee_t_mefe_user_id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_RIGHTJOIN";
			$proto49=array();
$proto49["m_strName"] = "uneet_enterprise_organizations";
$proto49["m_srcTableName"] = "Super Admin - Manage API Keys";
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
$proto48["m_sql"] = "RIGHT OUTER JOIN uneet_enterprise_organizations ON uneet_enterprise_organizations.id_organization = ut_api_keys.organization_id";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Super Admin - Manage API Keys";
$proto50=array();
$proto50["m_sql"] = "uneet_enterprise_organizations.id_organization = ut_api_keys.organization_id";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_organization",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage API Keys"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= ut_api_keys.organization_id";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Super Admin - Manage API Keys";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_super_admin___manage_api_keys = createSqlQuery_super_admin___manage_api_keys();


	
					
;

																	

$tdatasuper_admin___manage_api_keys[".sqlquery"] = $queryData_super_admin___manage_api_keys;

include_once(getabspath("include/super_admin___manage_api_keys_events.php"));
$tableEvents["Super Admin - Manage API Keys"] = new eventclass_super_admin___manage_api_keys;
$tdatasuper_admin___manage_api_keys[".hasEvents"] = true;

?>