<?php



$tdataunee_t_enterprise_account = array();
$tdataunee_t_enterprise_account[".searchableFields"] = array();
$tdataunee_t_enterprise_account[".ShortName"] = "unee_t_enterprise_account";
$tdataunee_t_enterprise_account[".OwnerID"] = "id_organization";
$tdataunee_t_enterprise_account[".OriginalTable"] = "uneet_enterprise_organizations";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataunee_t_enterprise_account[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataunee_t_enterprise_account[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataunee_t_enterprise_account[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsunee_t_enterprise_account = array();
$fieldToolTipsunee_t_enterprise_account = array();
$pageTitlesunee_t_enterprise_account = array();
$placeHoldersunee_t_enterprise_account = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsunee_t_enterprise_account["English"] = array();
	$fieldToolTipsunee_t_enterprise_account["English"] = array();
	$placeHoldersunee_t_enterprise_account["English"] = array();
	$pageTitlesunee_t_enterprise_account["English"] = array();
	$fieldLabelsunee_t_enterprise_account["English"]["id_organization"] = "Id Organization";
	$fieldToolTipsunee_t_enterprise_account["English"]["id_organization"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["id_organization"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["syst_created_datetime"] = "Created";
	$fieldToolTipsunee_t_enterprise_account["English"]["syst_created_datetime"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["syst_created_datetime"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsunee_t_enterprise_account["English"]["creation_system_id"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["creation_system_id"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsunee_t_enterprise_account["English"]["creation_method"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["creation_method"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["created_by_id"] = "Created By";
	$fieldToolTipsunee_t_enterprise_account["English"]["created_by_id"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["created_by_id"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["syst_updated_datetime"] = "Updated";
	$fieldToolTipsunee_t_enterprise_account["English"]["syst_updated_datetime"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["syst_updated_datetime"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsunee_t_enterprise_account["English"]["update_system_id"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["update_system_id"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["updated_by_id"] = "Updated By";
	$fieldToolTipsunee_t_enterprise_account["English"]["updated_by_id"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["updated_by_id"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["update_method"] = "Update Method";
	$fieldToolTipsunee_t_enterprise_account["English"]["update_method"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["update_method"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["order"] = "Order";
	$fieldToolTipsunee_t_enterprise_account["English"]["order"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["order"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsunee_t_enterprise_account["English"]["is_obsolete"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["is_obsolete"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["designation"] = "Designation";
	$fieldToolTipsunee_t_enterprise_account["English"]["designation"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["designation"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["description"] = "Description";
	$fieldToolTipsunee_t_enterprise_account["English"]["description"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["description"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["default_area"] = "Default Area";
	$fieldToolTipsunee_t_enterprise_account["English"]["default_area"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["default_area"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["default_building"] = "Default Building";
	$fieldToolTipsunee_t_enterprise_account["English"]["default_building"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["default_building"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["default_unit"] = "Default Unit";
	$fieldToolTipsunee_t_enterprise_account["English"]["default_unit"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["default_unit"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["default_role_type_id"] = "Default Role Type";
	$fieldToolTipsunee_t_enterprise_account["English"]["default_role_type_id"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["default_role_type_id"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["country_code"] = "Country Code";
	$fieldToolTipsunee_t_enterprise_account["English"]["country_code"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["country_code"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["unee_t_mefe_user_id"] = "MEFE Master User Id";
	$fieldToolTipsunee_t_enterprise_account["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["unee_t_mefe_user_api_key"] = "MEFE Master User Api Key";
	$fieldToolTipsunee_t_enterprise_account["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["unee_t_mefe_user_api_key"] = "";
	$fieldLabelsunee_t_enterprise_account["English"]["role_type"] = "Default Role Type";
	$fieldToolTipsunee_t_enterprise_account["English"]["role_type"] = "";
	$placeHoldersunee_t_enterprise_account["English"]["role_type"] = "";
	if (count($fieldToolTipsunee_t_enterprise_account["English"]))
		$tdataunee_t_enterprise_account[".isUseToolTips"] = true;
}


	$tdataunee_t_enterprise_account[".NCSearch"] = true;



$tdataunee_t_enterprise_account[".shortTableName"] = "unee_t_enterprise_account";
$tdataunee_t_enterprise_account[".nSecOptions"] = 1;

$tdataunee_t_enterprise_account[".mainTableOwnerID"] = "id_organization";
$tdataunee_t_enterprise_account[".entityType"] = 1;

$tdataunee_t_enterprise_account[".strOriginalTableName"] = "uneet_enterprise_organizations";

		 



$tdataunee_t_enterprise_account[".showAddInPopup"] = false;

$tdataunee_t_enterprise_account[".showEditInPopup"] = false;

$tdataunee_t_enterprise_account[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataunee_t_enterprise_account[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataunee_t_enterprise_account[".listAjax"] = true;
//	temporary
$tdataunee_t_enterprise_account[".listAjax"] = false;

	$tdataunee_t_enterprise_account[".audit"] = false;

	$tdataunee_t_enterprise_account[".locking"] = false;


$pages = $tdataunee_t_enterprise_account[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataunee_t_enterprise_account[".edit"] = true;
	$tdataunee_t_enterprise_account[".afterEditAction"] = 1;
	$tdataunee_t_enterprise_account[".closePopupAfterEdit"] = 1;
	$tdataunee_t_enterprise_account[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataunee_t_enterprise_account[".add"] = true;
$tdataunee_t_enterprise_account[".afterAddAction"] = 0;
$tdataunee_t_enterprise_account[".closePopupAfterAdd"] = 1;
$tdataunee_t_enterprise_account[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataunee_t_enterprise_account[".list"] = true;
}



$tdataunee_t_enterprise_account[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataunee_t_enterprise_account[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataunee_t_enterprise_account[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataunee_t_enterprise_account[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataunee_t_enterprise_account[".printFriendly"] = true;
}



$tdataunee_t_enterprise_account[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataunee_t_enterprise_account[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataunee_t_enterprise_account[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataunee_t_enterprise_account[".isUseAjaxSuggest"] = true;

$tdataunee_t_enterprise_account[".rowHighlite"] = true;





$tdataunee_t_enterprise_account[".ajaxCodeSnippetAdded"] = false;

$tdataunee_t_enterprise_account[".buttonsAdded"] = false;

$tdataunee_t_enterprise_account[".addPageEvents"] = false;

// use timepicker for search panel
$tdataunee_t_enterprise_account[".isUseTimeForSearch"] = false;


$tdataunee_t_enterprise_account[".badgeColor"] = "7B68EE";


$tdataunee_t_enterprise_account[".allSearchFields"] = array();
$tdataunee_t_enterprise_account[".filterFields"] = array();
$tdataunee_t_enterprise_account[".requiredSearchFields"] = array();

$tdataunee_t_enterprise_account[".googleLikeFields"] = array();
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "designation";
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "description";
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "country_code";
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "default_role_type_id";
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "role_type";
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "unee_t_mefe_user_id";
$tdataunee_t_enterprise_account[".googleLikeFields"][] = "unee_t_mefe_user_api_key";



$tdataunee_t_enterprise_account[".tableType"] = "list";

$tdataunee_t_enterprise_account[".printerPageOrientation"] = 0;
$tdataunee_t_enterprise_account[".nPrinterPageScale"] = 100;

$tdataunee_t_enterprise_account[".nPrinterSplitRecords"] = 40;

$tdataunee_t_enterprise_account[".geocodingEnabled"] = false;





$tdataunee_t_enterprise_account[".isResizeColumns"] = true;





$tdataunee_t_enterprise_account[".pageSize"] = 50;

$tdataunee_t_enterprise_account[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataunee_t_enterprise_account[".strOrderBy"] = $tstrOrderBy;

$tdataunee_t_enterprise_account[".orderindexes"] = array();

$tdataunee_t_enterprise_account[".sqlHead"] = "SELECT uneet_enterprise_organizations.id_organization,  uneet_enterprise_organizations.syst_created_datetime,  uneet_enterprise_organizations.creation_system_id,  uneet_enterprise_organizations.creation_method,  uneet_enterprise_organizations.created_by_id,  uneet_enterprise_organizations.syst_updated_datetime,  uneet_enterprise_organizations.update_system_id,  uneet_enterprise_organizations.updated_by_id,  uneet_enterprise_organizations.update_method,  uneet_enterprise_organizations.`order`,  uneet_enterprise_organizations.is_obsolete,  uneet_enterprise_organizations.designation,  uneet_enterprise_organizations.description,  uneet_enterprise_organizations.country_code,  uneet_enterprise_organizations.default_role_type_id,  ut_user_role_types.role_type,  uneet_enterprise_organizations.default_area,  uneet_enterprise_organizations.default_building,  uneet_enterprise_organizations.default_unit,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$tdataunee_t_enterprise_account[".sqlFrom"] = "FROM uneet_enterprise_organizations  INNER JOIN ut_map_external_source_users ON uneet_enterprise_organizations.id_organization = ut_map_external_source_users.organization_id AND uneet_enterprise_organizations.mefe_master_user_external_person_id = ut_map_external_source_users.external_person_id AND uneet_enterprise_organizations.mefe_master_user_external_person_system = ut_map_external_source_users.external_system AND uneet_enterprise_organizations.mefe_master_user_external_person_table = ut_map_external_source_users.table_in_external_system  INNER JOIN ut_user_role_types ON uneet_enterprise_organizations.default_role_type_id = ut_user_role_types.id_role_type";
$tdataunee_t_enterprise_account[".sqlWhereExpr"] = "";
$tdataunee_t_enterprise_account[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataunee_t_enterprise_account[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataunee_t_enterprise_account[".arrGroupsPerPage"] = $arrGPP;

$tdataunee_t_enterprise_account[".highlightSearchResults"] = true;

$tableKeysunee_t_enterprise_account = array();
$tableKeysunee_t_enterprise_account[] = "id_organization";
$tdataunee_t_enterprise_account[".Keys"] = $tableKeysunee_t_enterprise_account;


$tdataunee_t_enterprise_account[".hideMobileList"] = array();




//	id_organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_organization";
	$fdata["GoodName"] = "id_organization";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","id_organization");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.id_organization";

	
	
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


	$tdataunee_t_enterprise_account["id_organization"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "id_organization";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.syst_created_datetime";

	
	
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


	$tdataunee_t_enterprise_account["syst_created_datetime"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","creation_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.creation_system_id";

	
	
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


	$tdataunee_t_enterprise_account["creation_system_id"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "creation_system_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.creation_method";

	
	
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


	$tdataunee_t_enterprise_account["creation_method"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "creation_method";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","created_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.created_by_id";

	
	
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


	$tdataunee_t_enterprise_account["created_by_id"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "created_by_id";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.syst_updated_datetime";

	
	
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


	$tdataunee_t_enterprise_account["syst_updated_datetime"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.update_system_id";

	
	
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


	$tdataunee_t_enterprise_account["update_system_id"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.updated_by_id";

	
	
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


	$tdataunee_t_enterprise_account["updated_by_id"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.update_method";

	
	
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


	$tdataunee_t_enterprise_account["update_method"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "update_method";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","order");
	$fdata["FieldType"] = 2;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.`order`";

	
	
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


	$tdataunee_t_enterprise_account["order"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.is_obsolete";

	
	
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


	$tdataunee_t_enterprise_account["is_obsolete"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","designation");
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


	$tdataunee_t_enterprise_account["designation"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.description";

	
	
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


	$tdataunee_t_enterprise_account["description"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "description";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.country_code";

	
	
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


	$tdataunee_t_enterprise_account["country_code"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "country_code";
//	default_role_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "default_role_type_id";
	$fdata["GoodName"] = "default_role_type_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","default_role_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "default_role_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.default_role_type_id";

	
	
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


	$tdataunee_t_enterprise_account["default_role_type_id"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "default_role_type_id";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","role_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "role_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_role_types.role_type";

	
	
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


	$tdataunee_t_enterprise_account["role_type"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "role_type";
//	default_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "default_area";
	$fdata["GoodName"] = "default_area";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","default_area");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "default_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.default_area";

	
	
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

	$fdata["ViewFormats"]["print"] = $vdata;
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


	$tdataunee_t_enterprise_account["default_area"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "default_area";
//	default_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "default_building";
	$fdata["GoodName"] = "default_building";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","default_building");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "default_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.default_building";

	
	
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

	$fdata["ViewFormats"]["print"] = $vdata;
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


	$tdataunee_t_enterprise_account["default_building"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "default_building";
//	default_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "default_unit";
	$fdata["GoodName"] = "default_unit";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","default_unit");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "default_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.default_unit";

	
	
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

	$fdata["ViewFormats"]["print"] = $vdata;
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


	$tdataunee_t_enterprise_account["default_unit"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "default_unit";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_id";

	
	
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


	$tdataunee_t_enterprise_account["unee_t_mefe_user_id"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "unee_t_mefe_user_id";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Account","unee_t_mefe_user_api_key");
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


	$tdataunee_t_enterprise_account["unee_t_mefe_user_api_key"] = $fdata;
		$tdataunee_t_enterprise_account[".searchableFields"][] = "unee_t_mefe_user_api_key";


$tables_data["Unee-T Enterprise Account"]=&$tdataunee_t_enterprise_account;
$field_labels["Unee_T_Enterprise_Account"] = &$fieldLabelsunee_t_enterprise_account;
$fieldToolTips["Unee_T_Enterprise_Account"] = &$fieldToolTipsunee_t_enterprise_account;
$placeHolders["Unee_T_Enterprise_Account"] = &$placeHoldersunee_t_enterprise_account;
$page_titles["Unee_T_Enterprise_Account"] = &$pageTitlesunee_t_enterprise_account;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Unee-T Enterprise Account"] = array();
//	Sources of Truth
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Sources of Truth";
		$detailsParam["dOriginalTable"] = "ut_external_sot_for_unee_t_objects";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "sources_of_truth";
	$detailsParam["dCaptionTable"] = GetTableCaption("Sources_of_Truth");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Unee-T Enterprise Account"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Unee-T Enterprise Account"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Unee-T Enterprise Account"][$dIndex]["masterKeys"][]="id_organization";

				$detailsTablesData["Unee-T Enterprise Account"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Unee-T Enterprise Account"][$dIndex]["detailKeys"][]="organization_id";

// tables which are master tables for current table (detail)
$masterTablesData["Unee-T Enterprise Account"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_unee_t_enterprise_account()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "uneet_enterprise_organizations.id_organization,  uneet_enterprise_organizations.syst_created_datetime,  uneet_enterprise_organizations.creation_system_id,  uneet_enterprise_organizations.creation_method,  uneet_enterprise_organizations.created_by_id,  uneet_enterprise_organizations.syst_updated_datetime,  uneet_enterprise_organizations.update_system_id,  uneet_enterprise_organizations.updated_by_id,  uneet_enterprise_organizations.update_method,  uneet_enterprise_organizations.`order`,  uneet_enterprise_organizations.is_obsolete,  uneet_enterprise_organizations.designation,  uneet_enterprise_organizations.description,  uneet_enterprise_organizations.country_code,  uneet_enterprise_organizations.default_role_type_id,  ut_user_role_types.role_type,  uneet_enterprise_organizations.default_area,  uneet_enterprise_organizations.default_building,  uneet_enterprise_organizations.default_unit,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto0["m_strFrom"] = "FROM uneet_enterprise_organizations  INNER JOIN ut_map_external_source_users ON uneet_enterprise_organizations.id_organization = ut_map_external_source_users.organization_id AND uneet_enterprise_organizations.mefe_master_user_external_person_id = ut_map_external_source_users.external_person_id AND uneet_enterprise_organizations.mefe_master_user_external_person_system = ut_map_external_source_users.external_system AND uneet_enterprise_organizations.mefe_master_user_external_person_table = ut_map_external_source_users.table_in_external_system  INNER JOIN ut_user_role_types ON uneet_enterprise_organizations.default_role_type_id = ut_user_role_types.id_role_type";
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
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto6["m_sql"] = "uneet_enterprise_organizations.id_organization";
$proto6["m_srcTableName"] = "Unee-T Enterprise Account";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto8["m_sql"] = "uneet_enterprise_organizations.syst_created_datetime";
$proto8["m_srcTableName"] = "Unee-T Enterprise Account";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto10["m_sql"] = "uneet_enterprise_organizations.creation_system_id";
$proto10["m_srcTableName"] = "Unee-T Enterprise Account";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto12["m_sql"] = "uneet_enterprise_organizations.creation_method";
$proto12["m_srcTableName"] = "Unee-T Enterprise Account";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto14["m_sql"] = "uneet_enterprise_organizations.created_by_id";
$proto14["m_srcTableName"] = "Unee-T Enterprise Account";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto16["m_sql"] = "uneet_enterprise_organizations.syst_updated_datetime";
$proto16["m_srcTableName"] = "Unee-T Enterprise Account";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto18["m_sql"] = "uneet_enterprise_organizations.update_system_id";
$proto18["m_srcTableName"] = "Unee-T Enterprise Account";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto20["m_sql"] = "uneet_enterprise_organizations.updated_by_id";
$proto20["m_srcTableName"] = "Unee-T Enterprise Account";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto22["m_sql"] = "uneet_enterprise_organizations.update_method";
$proto22["m_srcTableName"] = "Unee-T Enterprise Account";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto24["m_sql"] = "uneet_enterprise_organizations.`order`";
$proto24["m_srcTableName"] = "Unee-T Enterprise Account";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto26["m_sql"] = "uneet_enterprise_organizations.is_obsolete";
$proto26["m_srcTableName"] = "Unee-T Enterprise Account";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto28["m_sql"] = "uneet_enterprise_organizations.designation";
$proto28["m_srcTableName"] = "Unee-T Enterprise Account";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto30["m_sql"] = "uneet_enterprise_organizations.description";
$proto30["m_srcTableName"] = "Unee-T Enterprise Account";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto32["m_sql"] = "uneet_enterprise_organizations.country_code";
$proto32["m_srcTableName"] = "Unee-T Enterprise Account";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "default_role_type_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto34["m_sql"] = "uneet_enterprise_organizations.default_role_type_id";
$proto34["m_srcTableName"] = "Unee-T Enterprise Account";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto36["m_sql"] = "ut_user_role_types.role_type";
$proto36["m_srcTableName"] = "Unee-T Enterprise Account";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "default_area",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto38["m_sql"] = "uneet_enterprise_organizations.default_area";
$proto38["m_srcTableName"] = "Unee-T Enterprise Account";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "default_building",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto40["m_sql"] = "uneet_enterprise_organizations.default_building";
$proto40["m_srcTableName"] = "Unee-T Enterprise Account";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "default_unit",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto42["m_sql"] = "uneet_enterprise_organizations.default_unit";
$proto42["m_srcTableName"] = "Unee-T Enterprise Account";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto44["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id";
$proto44["m_srcTableName"] = "Unee-T Enterprise Account";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto46["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto46["m_srcTableName"] = "Unee-T Enterprise Account";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "uneet_enterprise_organizations";
$proto49["m_srcTableName"] = "Unee-T Enterprise Account";
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
$proto49["m_columns"][] = "default_sot_system";
$proto49["m_columns"][] = "default_sot_persons";
$proto49["m_columns"][] = "default_sot_areas";
$proto49["m_columns"][] = "default_sot_properties";
$proto49["m_columns"][] = "default_area";
$proto49["m_columns"][] = "default_building";
$proto49["m_columns"][] = "default_unit";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "uneet_enterprise_organizations";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Unee-T Enterprise Account";
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
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "ut_map_external_source_users";
$proto53["m_srcTableName"] = "Unee-T Enterprise Account";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_map";
$proto53["m_columns"][] = "create_api_request_id";
$proto53["m_columns"][] = "edit_api_request_id";
$proto53["m_columns"][] = "syst_created_datetime";
$proto53["m_columns"][] = "creation_system_id";
$proto53["m_columns"][] = "created_by_id";
$proto53["m_columns"][] = "creation_method";
$proto53["m_columns"][] = "syst_updated_datetime";
$proto53["m_columns"][] = "update_system_id";
$proto53["m_columns"][] = "updated_by_id";
$proto53["m_columns"][] = "update_method";
$proto53["m_columns"][] = "is_update_on_duplicate_key";
$proto53["m_columns"][] = "organization_id";
$proto53["m_columns"][] = "is_obsolete";
$proto53["m_columns"][] = "is_update_needed";
$proto53["m_columns"][] = "person_id";
$proto53["m_columns"][] = "mefe_user_id_parent";
$proto53["m_columns"][] = "unee_t_mefe_user_id";
$proto53["m_columns"][] = "unee_t_mefe_user_api_key";
$proto53["m_columns"][] = "uneet_created_datetime";
$proto53["m_columns"][] = "is_mefe_api_success";
$proto53["m_columns"][] = "mefe_api_error_message";
$proto53["m_columns"][] = "is_unee_t_created_by_me";
$proto53["m_columns"][] = "uneet_login_name";
$proto53["m_columns"][] = "external_person_id";
$proto53["m_columns"][] = "external_system";
$proto53["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN ut_map_external_source_users ON uneet_enterprise_organizations.id_organization = ut_map_external_source_users.organization_id AND uneet_enterprise_organizations.mefe_master_user_external_person_id = ut_map_external_source_users.external_person_id AND uneet_enterprise_organizations.mefe_master_user_external_person_system = ut_map_external_source_users.external_system AND uneet_enterprise_organizations.mefe_master_user_external_person_table = ut_map_external_source_users.table_in_external_system";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Unee-T Enterprise Account";
$proto54=array();
$proto54["m_sql"] = "uneet_enterprise_organizations.id_organization = ut_map_external_source_users.organization_id AND uneet_enterprise_organizations.mefe_master_user_external_person_id = ut_map_external_source_users.external_person_id AND uneet_enterprise_organizations.mefe_master_user_external_person_system = ut_map_external_source_users.external_system AND uneet_enterprise_organizations.mefe_master_user_external_person_table = ut_map_external_source_users.table_in_external_system";
$proto54["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "uneet_enterprise_organizations.id_organization = ut_map_external_source_users.organization_id AND uneet_enterprise_organizations.mefe_master_user_external_person_id = ut_map_external_source_users.external_person_id AND uneet_enterprise_organizations.mefe_master_user_external_person_system = ut_map_external_source_users.external_system AND uneet_enterprise_organizations.mefe_master_user_external_person_table = ut_map_external_source_users.table_in_external_system"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
						$proto56=array();
$proto56["m_sql"] = "uneet_enterprise_organizations.id_organization = ut_map_external_source_users.organization_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_organization",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= ut_map_external_source_users.organization_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

			$proto54["m_contained"][]=$obj;
						$proto58=array();
$proto58["m_sql"] = "uneet_enterprise_organizations.mefe_master_user_external_person_id = ut_map_external_source_users.external_person_id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mefe_master_user_external_person_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= ut_map_external_source_users.external_person_id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

			$proto54["m_contained"][]=$obj;
						$proto60=array();
$proto60["m_sql"] = "uneet_enterprise_organizations.mefe_master_user_external_person_system = ut_map_external_source_users.external_system";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mefe_master_user_external_person_system",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= ut_map_external_source_users.external_system";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

			$proto54["m_contained"][]=$obj;
						$proto62=array();
$proto62["m_sql"] = "uneet_enterprise_organizations.mefe_master_user_external_person_table = ut_map_external_source_users.table_in_external_system";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mefe_master_user_external_person_table",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= ut_map_external_source_users.table_in_external_system";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

			$proto54["m_contained"][]=$obj;
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_INNERJOIN";
			$proto65=array();
$proto65["m_strName"] = "ut_user_role_types";
$proto65["m_srcTableName"] = "Unee-T Enterprise Account";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id_role_type";
$proto65["m_columns"][] = "syst_created_datetime";
$proto65["m_columns"][] = "creation_system_id";
$proto65["m_columns"][] = "created_by_id";
$proto65["m_columns"][] = "syst_updated_datetime";
$proto65["m_columns"][] = "update_system_id";
$proto65["m_columns"][] = "updated_by_id";
$proto65["m_columns"][] = "order";
$proto65["m_columns"][] = "is_obsolete";
$proto65["m_columns"][] = "role_type";
$proto65["m_columns"][] = "bz_description";
$proto65["m_columns"][] = "description";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "INNER JOIN ut_user_role_types ON uneet_enterprise_organizations.default_role_type_id = ut_user_role_types.id_role_type";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Unee-T Enterprise Account";
$proto66=array();
$proto66["m_sql"] = "uneet_enterprise_organizations.default_role_type_id = ut_user_role_types.id_role_type";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "default_role_type_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Unee-T Enterprise Account"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Unee-T Enterprise Account";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_unee_t_enterprise_account = createSqlQuery_unee_t_enterprise_account();


	
					
;

																					

$tdataunee_t_enterprise_account[".sqlquery"] = $queryData_unee_t_enterprise_account;

include_once(getabspath("include/unee_t_enterprise_account_events.php"));
$tableEvents["Unee-T Enterprise Account"] = new eventclass_unee_t_enterprise_account;
$tdataunee_t_enterprise_account[".hasEvents"] = true;

?>