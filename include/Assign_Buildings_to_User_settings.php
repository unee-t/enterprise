<?php




$tdataAssign_Buildings_to_User = array();
$tdataAssign_Buildings_to_User[".searchableFields"] = array();
	$tdataAssign_Buildings_to_User[".truncateText"] = true;
	$tdataAssign_Buildings_to_User[".NumberOfChars"] = 80;
	$tdataAssign_Buildings_to_User[".ShortName"] = "Assign_Buildings_to_User";
	$tdataAssign_Buildings_to_User[".OwnerID"] = "organization_id";
	$tdataAssign_Buildings_to_User[".OriginalTable"] = "external_map_user_unit_role_permissions_level_1";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataAssign_Buildings_to_User[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataAssign_Buildings_to_User[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsAssign_Buildings_to_User = array();
$fieldToolTipsAssign_Buildings_to_User = array();
$pageTitlesAssign_Buildings_to_User = array();
$placeHoldersAssign_Buildings_to_User = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAssign_Buildings_to_User["English"] = array();
	$fieldToolTipsAssign_Buildings_to_User["English"] = array();
	$placeHoldersAssign_Buildings_to_User["English"] = array();
	$pageTitlesAssign_Buildings_to_User["English"] = array();
	$fieldLabelsAssign_Buildings_to_User["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsAssign_Buildings_to_User["English"]["syst_created_datetime"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["syst_created_datetime"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsAssign_Buildings_to_User["English"]["creation_system_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["creation_system_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsAssign_Buildings_to_User["English"]["created_by_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["created_by_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsAssign_Buildings_to_User["English"]["creation_method"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["creation_method"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsAssign_Buildings_to_User["English"]["syst_updated_datetime"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["syst_updated_datetime"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsAssign_Buildings_to_User["English"]["update_system_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["update_system_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsAssign_Buildings_to_User["English"]["updated_by_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["updated_by_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["update_method"] = "Update Method";
	$fieldToolTipsAssign_Buildings_to_User["English"]["update_method"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["update_method"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsAssign_Buildings_to_User["English"]["organization_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["organization_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsAssign_Buildings_to_User["English"]["is_obsolete"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["is_obsolete"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["is_update_needed"] = "Is Update Needed";
	$fieldToolTipsAssign_Buildings_to_User["English"]["is_update_needed"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["is_update_needed"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["unee_t_update_ts"] = "Unee-T Update";
	$fieldToolTipsAssign_Buildings_to_User["English"]["unee_t_update_ts"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["unee_t_update_ts"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["unee_t_mefe_user_id"] = "Unee-T User";
	$fieldToolTipsAssign_Buildings_to_User["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["unee_t_role_id"] = "Role";
	$fieldToolTipsAssign_Buildings_to_User["English"]["unee_t_role_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["unee_t_role_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["person_id"] = "Person";
	$fieldToolTipsAssign_Buildings_to_User["English"]["person_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["person_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["user_role"] = "Role";
	$fieldToolTipsAssign_Buildings_to_User["English"]["user_role"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["user_role"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["user_type"] = "User Type";
	$fieldToolTipsAssign_Buildings_to_User["English"]["user_type"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["user_type"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["unee_t_user_type_id"] = "User Type";
	$fieldToolTipsAssign_Buildings_to_User["English"]["unee_t_user_type_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["propagate_level_2"] = "All Units";
	$fieldToolTipsAssign_Buildings_to_User["English"]["propagate_level_2"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["propagate_level_2"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["propagate_level_3"] = "All Rooms";
	$fieldToolTipsAssign_Buildings_to_User["English"]["propagate_level_3"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["propagate_level_3"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["id_map_user_unit_permissions_level_1"] = "Id Map User Unit Permissions Level 1";
	$fieldToolTipsAssign_Buildings_to_User["English"]["id_map_user_unit_permissions_level_1"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["id_map_user_unit_permissions_level_1"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["unee_t_level_1_id"] = "Building";
	$fieldToolTipsAssign_Buildings_to_User["English"]["unee_t_level_1_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["unee_t_level_1_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["building_name"] = "Building";
	$fieldToolTipsAssign_Buildings_to_User["English"]["building_name"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["building_name"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["area_id"] = "Area";
	$fieldToolTipsAssign_Buildings_to_User["English"]["area_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["area_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["area_name"] = "Area";
	$fieldToolTipsAssign_Buildings_to_User["English"]["area_name"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["area_name"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsAssign_Buildings_to_User["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["country_code"] = "Country";
	$fieldToolTipsAssign_Buildings_to_User["English"]["country_code"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["country_code"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["country_name"] = "Country Name";
	$fieldToolTipsAssign_Buildings_to_User["English"]["country_name"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["country_name"] = "";
	$fieldLabelsAssign_Buildings_to_User["English"]["name"] = "Name";
	$fieldToolTipsAssign_Buildings_to_User["English"]["name"] = "";
	$placeHoldersAssign_Buildings_to_User["English"]["name"] = "";
	if (count($fieldToolTipsAssign_Buildings_to_User["English"]))
		$tdataAssign_Buildings_to_User[".isUseToolTips"] = true;
}


	$tdataAssign_Buildings_to_User[".NCSearch"] = true;



$tdataAssign_Buildings_to_User[".shortTableName"] = "Assign_Buildings_to_User";
$tdataAssign_Buildings_to_User[".nSecOptions"] = 1;

$tdataAssign_Buildings_to_User[".mainTableOwnerID"] = "organization_id";
$tdataAssign_Buildings_to_User[".entityType"] = 1;

$tdataAssign_Buildings_to_User[".strOriginalTableName"] = "external_map_user_unit_role_permissions_level_1";

		 



$tdataAssign_Buildings_to_User[".showAddInPopup"] = false;

$tdataAssign_Buildings_to_User[".showEditInPopup"] = false;

$tdataAssign_Buildings_to_User[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAssign_Buildings_to_User[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataAssign_Buildings_to_User[".listAjax"] = true;
//	temporary
$tdataAssign_Buildings_to_User[".listAjax"] = false;

	$tdataAssign_Buildings_to_User[".audit"] = false;

	$tdataAssign_Buildings_to_User[".locking"] = false;


$pages = $tdataAssign_Buildings_to_User[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataAssign_Buildings_to_User[".edit"] = true;
	$tdataAssign_Buildings_to_User[".afterEditAction"] = 1;
	$tdataAssign_Buildings_to_User[".closePopupAfterEdit"] = 1;
	$tdataAssign_Buildings_to_User[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataAssign_Buildings_to_User[".add"] = true;
$tdataAssign_Buildings_to_User[".afterAddAction"] = 0;
$tdataAssign_Buildings_to_User[".closePopupAfterAdd"] = 1;
$tdataAssign_Buildings_to_User[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataAssign_Buildings_to_User[".list"] = true;
}



$tdataAssign_Buildings_to_User[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataAssign_Buildings_to_User[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataAssign_Buildings_to_User[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataAssign_Buildings_to_User[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataAssign_Buildings_to_User[".printFriendly"] = true;
}



$tdataAssign_Buildings_to_User[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataAssign_Buildings_to_User[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataAssign_Buildings_to_User[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataAssign_Buildings_to_User[".isUseAjaxSuggest"] = true;

$tdataAssign_Buildings_to_User[".rowHighlite"] = true;





$tdataAssign_Buildings_to_User[".ajaxCodeSnippetAdded"] = false;

$tdataAssign_Buildings_to_User[".buttonsAdded"] = false;

$tdataAssign_Buildings_to_User[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAssign_Buildings_to_User[".isUseTimeForSearch"] = false;


$tdataAssign_Buildings_to_User[".badgeColor"] = "cd5c5c";


$tdataAssign_Buildings_to_User[".allSearchFields"] = array();
$tdataAssign_Buildings_to_User[".filterFields"] = array();
$tdataAssign_Buildings_to_User[".requiredSearchFields"] = array();

$tdataAssign_Buildings_to_User[".googleLikeFields"] = array();
$tdataAssign_Buildings_to_User[".googleLikeFields"][] = "id_map_user_unit_permissions_level_1";
$tdataAssign_Buildings_to_User[".googleLikeFields"][] = "area_name";
$tdataAssign_Buildings_to_User[".googleLikeFields"][] = "building_name";
$tdataAssign_Buildings_to_User[".googleLikeFields"][] = "user_role";
$tdataAssign_Buildings_to_User[".googleLikeFields"][] = "user_type";
$tdataAssign_Buildings_to_User[".googleLikeFields"][] = "name";



$tdataAssign_Buildings_to_User[".tableType"] = "list";

$tdataAssign_Buildings_to_User[".printerPageOrientation"] = 0;
$tdataAssign_Buildings_to_User[".nPrinterPageScale"] = 100;

$tdataAssign_Buildings_to_User[".nPrinterSplitRecords"] = 40;

$tdataAssign_Buildings_to_User[".nPrinterPDFSplitRecords"] = 40;


$tdataAssign_Buildings_to_User[".geocodingEnabled"] = false;





$tdataAssign_Buildings_to_User[".isResizeColumns"] = true;





$tdataAssign_Buildings_to_User[".pageSize"] = 50;

$tdataAssign_Buildings_to_User[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAssign_Buildings_to_User[".strOrderBy"] = $tstrOrderBy;

$tdataAssign_Buildings_to_User[".orderindexes"] = array();

$tdataAssign_Buildings_to_User[".sqlHead"] = "SELECT external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1,  external_map_user_unit_role_permissions_level_1.syst_created_datetime,  external_map_user_unit_role_permissions_level_1.creation_system_id,  external_map_user_unit_role_permissions_level_1.created_by_id,  external_map_user_unit_role_permissions_level_1.creation_method,  external_map_user_unit_role_permissions_level_1.syst_updated_datetime,  external_map_user_unit_role_permissions_level_1.update_system_id,  external_map_user_unit_role_permissions_level_1.updated_by_id,  external_map_user_unit_role_permissions_level_1.update_method,  external_map_user_unit_role_permissions_level_1.organization_id,  external_map_user_unit_role_permissions_level_1.is_obsolete,  external_map_user_unit_role_permissions_level_1.is_update_needed,  external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  external_map_user_unit_role_permissions_level_1.unee_t_level_1_id,  property_level_1_buildings.designation AS building_name,  ut_map_external_source_users.person_id,  external_map_user_unit_role_permissions_level_1.unee_t_role_id,  ut_user_role_types.role_type AS user_role,  external_map_user_unit_role_permissions_level_1.unee_t_user_type_id,  ut_user_types.designation AS user_type,  external_map_user_unit_role_permissions_level_1.propagate_level_2,  external_map_user_unit_role_permissions_level_1.propagate_level_3,  ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_update_ts AS unee_t_update_ts,  ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_mefe_unit_id,  property_level_1_buildings.country_code,  property_groups_countries.country_name,  ut_info_mefe_users.name";
$tdataAssign_Buildings_to_User[".sqlFrom"] = "FROM external_map_user_unit_role_permissions_level_1  LEFT OUTER JOIN property_level_1_buildings ON external_map_user_unit_role_permissions_level_1.unee_t_level_1_id = property_level_1_buildings.id_building AND external_map_user_unit_role_permissions_level_1.organization_id = property_level_1_buildings.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_1.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_1.unee_t_role_id = ut_user_role_types.id_role_type  INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_1.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_1.organization_id = ut_user_types.organization_id  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_1 ON external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1 = ut_check_unee_t_update_add_user_to_unit_level_1.id_map_user_unit_permissions_level_1  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$tdataAssign_Buildings_to_User[".sqlWhereExpr"] = "";
$tdataAssign_Buildings_to_User[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAssign_Buildings_to_User[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAssign_Buildings_to_User[".arrGroupsPerPage"] = $arrGPP;

$tdataAssign_Buildings_to_User[".highlightSearchResults"] = true;

$tableKeysAssign_Buildings_to_User = array();
$tableKeysAssign_Buildings_to_User[] = "organization_id";
$tableKeysAssign_Buildings_to_User[] = "unee_t_mefe_user_id";
$tableKeysAssign_Buildings_to_User[] = "unee_t_level_1_id";
$tableKeysAssign_Buildings_to_User[] = "unee_t_user_type_id";
$tdataAssign_Buildings_to_User[".Keys"] = $tableKeysAssign_Buildings_to_User;


$tdataAssign_Buildings_to_User[".hideMobileList"] = array();




//	id_map_user_unit_permissions_level_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map_user_unit_permissions_level_1";
	$fdata["GoodName"] = "id_map_user_unit_permissions_level_1";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","id_map_user_unit_permissions_level_1");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map_user_unit_permissions_level_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1";

	
	
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


	$tdataAssign_Buildings_to_User["id_map_user_unit_permissions_level_1"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "id_map_user_unit_permissions_level_1";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.syst_created_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["syst_created_datetime"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.creation_system_id";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["creation_system_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.created_by_id";

	
	
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


	$tdataAssign_Buildings_to_User["created_by_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.creation_method";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["creation_method"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.syst_updated_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["syst_updated_datetime"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.update_system_id";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["update_system_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.updated_by_id";

	
	
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


	$tdataAssign_Buildings_to_User["updated_by_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.update_method";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["update_method"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.organization_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["organization_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "organization_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.is_obsolete";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["is_obsolete"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "is_obsolete";
//	is_update_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_update_needed";
	$fdata["GoodName"] = "is_update_needed";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","is_update_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_update_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.is_update_needed";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["is_update_needed"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "is_update_needed";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "unee_t_user_type_id", "lookup" => "unee_t_user_type_id" );

	
	

	
	
	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "name";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["unee_t_mefe_user_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "unee_t_mefe_user_id";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","area_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "area_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.area_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "property_groups_areas";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_area";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "area_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["area_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","area_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_areas.area_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["area_name"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "area_name";
//	unee_t_level_1_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unee_t_level_1_id";
	$fdata["GoodName"] = "unee_t_level_1_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","unee_t_level_1_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_level_1_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.unee_t_level_1_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Buildings";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "building_name";

	

	
	$edata["LookupOrderBy"] = "building_name";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["unee_t_level_1_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "unee_t_level_1_id";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","building_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.designation";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdataAssign_Buildings_to_User["building_name"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "building_name";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","person_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.person_id";

	
	
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


	$tdataAssign_Buildings_to_User["person_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "person_id";
//	unee_t_role_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "unee_t_role_id";
	$fdata["GoodName"] = "unee_t_role_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","unee_t_role_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_role_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.unee_t_role_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_user_role_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_role_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "role_type";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "unee_t_user_type_id";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["unee_t_role_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "unee_t_role_id";
//	user_role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "user_role";
	$fdata["GoodName"] = "user_role";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","user_role");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "role_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_role_types.role_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["user_role"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "user_role";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.unee_t_user_type_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_user_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_unee_t_user_type";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "unee_t_role_id", "lookup" => "ut_user_role_type_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "unee_t_mefe_user_id";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["unee_t_user_type_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "unee_t_user_type_id";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","user_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.designation";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["user_type"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "user_type";
//	propagate_level_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "propagate_level_2";
	$fdata["GoodName"] = "propagate_level_2";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","propagate_level_2");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "propagate_level_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.propagate_level_2";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["propagate_level_2"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "propagate_level_2";
//	propagate_level_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "propagate_level_3";
	$fdata["GoodName"] = "propagate_level_3";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","propagate_level_3");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "propagate_level_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_1.propagate_level_3";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["propagate_level_3"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "propagate_level_3";
//	unee_t_update_ts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "unee_t_update_ts";
	$fdata["GoodName"] = "unee_t_update_ts";
	$fdata["ownerTable"] = "ut_check_unee_t_update_add_user_to_unit_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","unee_t_update_ts");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "unee_t_update_ts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_update_ts";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["unee_t_update_ts"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "unee_t_update_ts";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_check_unee_t_update_add_user_to_unit_level_1";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_mefe_unit_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["unee_t_mefe_unit_id"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "unee_t_mefe_unit_id";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.country_code";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "property_groups_countries";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["country_code"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","country_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_countries.country_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["country_name"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "country_name";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "ut_info_mefe_users";
	$fdata["Label"] = GetFieldLabel("Assign_Buildings_to_User","name");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_info_mefe_users.name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataAssign_Buildings_to_User["name"] = $fdata;
		$tdataAssign_Buildings_to_User[".searchableFields"][] = "name";


$tables_data["Assign Buildings to User"]=&$tdataAssign_Buildings_to_User;
$field_labels["Assign_Buildings_to_User"] = &$fieldLabelsAssign_Buildings_to_User;
$fieldToolTips["Assign_Buildings_to_User"] = &$fieldToolTipsAssign_Buildings_to_User;
$placeHolders["Assign_Buildings_to_User"] = &$placeHoldersAssign_Buildings_to_User;
$page_titles["Assign_Buildings_to_User"] = &$pageTitlesAssign_Buildings_to_User;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Assign Buildings to User"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Assign Buildings to User"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Assign_Buildings_to_User()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1,  external_map_user_unit_role_permissions_level_1.syst_created_datetime,  external_map_user_unit_role_permissions_level_1.creation_system_id,  external_map_user_unit_role_permissions_level_1.created_by_id,  external_map_user_unit_role_permissions_level_1.creation_method,  external_map_user_unit_role_permissions_level_1.syst_updated_datetime,  external_map_user_unit_role_permissions_level_1.update_system_id,  external_map_user_unit_role_permissions_level_1.updated_by_id,  external_map_user_unit_role_permissions_level_1.update_method,  external_map_user_unit_role_permissions_level_1.organization_id,  external_map_user_unit_role_permissions_level_1.is_obsolete,  external_map_user_unit_role_permissions_level_1.is_update_needed,  external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  external_map_user_unit_role_permissions_level_1.unee_t_level_1_id,  property_level_1_buildings.designation AS building_name,  ut_map_external_source_users.person_id,  external_map_user_unit_role_permissions_level_1.unee_t_role_id,  ut_user_role_types.role_type AS user_role,  external_map_user_unit_role_permissions_level_1.unee_t_user_type_id,  ut_user_types.designation AS user_type,  external_map_user_unit_role_permissions_level_1.propagate_level_2,  external_map_user_unit_role_permissions_level_1.propagate_level_3,  ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_update_ts AS unee_t_update_ts,  ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_mefe_unit_id,  property_level_1_buildings.country_code,  property_groups_countries.country_name,  ut_info_mefe_users.name";
$proto0["m_strFrom"] = "FROM external_map_user_unit_role_permissions_level_1  LEFT OUTER JOIN property_level_1_buildings ON external_map_user_unit_role_permissions_level_1.unee_t_level_1_id = property_level_1_buildings.id_building AND external_map_user_unit_role_permissions_level_1.organization_id = property_level_1_buildings.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_1.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_1.unee_t_role_id = ut_user_role_types.id_role_type  INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_1.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_1.organization_id = ut_user_types.organization_id  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_1 ON external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1 = ut_check_unee_t_update_add_user_to_unit_level_1.id_map_user_unit_permissions_level_1  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
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
	"m_strName" => "id_map_user_unit_permissions_level_1",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto6["m_sql"] = "external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1";
$proto6["m_srcTableName"] = "Assign Buildings to User";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto8["m_sql"] = "external_map_user_unit_role_permissions_level_1.syst_created_datetime";
$proto8["m_srcTableName"] = "Assign Buildings to User";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto10["m_sql"] = "external_map_user_unit_role_permissions_level_1.creation_system_id";
$proto10["m_srcTableName"] = "Assign Buildings to User";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto12["m_sql"] = "external_map_user_unit_role_permissions_level_1.created_by_id";
$proto12["m_srcTableName"] = "Assign Buildings to User";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto14["m_sql"] = "external_map_user_unit_role_permissions_level_1.creation_method";
$proto14["m_srcTableName"] = "Assign Buildings to User";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto16["m_sql"] = "external_map_user_unit_role_permissions_level_1.syst_updated_datetime";
$proto16["m_srcTableName"] = "Assign Buildings to User";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto18["m_sql"] = "external_map_user_unit_role_permissions_level_1.update_system_id";
$proto18["m_srcTableName"] = "Assign Buildings to User";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto20["m_sql"] = "external_map_user_unit_role_permissions_level_1.updated_by_id";
$proto20["m_srcTableName"] = "Assign Buildings to User";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto22["m_sql"] = "external_map_user_unit_role_permissions_level_1.update_method";
$proto22["m_srcTableName"] = "Assign Buildings to User";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto24["m_sql"] = "external_map_user_unit_role_permissions_level_1.organization_id";
$proto24["m_srcTableName"] = "Assign Buildings to User";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto26["m_sql"] = "external_map_user_unit_role_permissions_level_1.is_obsolete";
$proto26["m_srcTableName"] = "Assign Buildings to User";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_needed",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto28["m_sql"] = "external_map_user_unit_role_permissions_level_1.is_update_needed";
$proto28["m_srcTableName"] = "Assign Buildings to User";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto30["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id";
$proto30["m_srcTableName"] = "Assign Buildings to User";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto32["m_sql"] = "property_level_1_buildings.area_id";
$proto32["m_srcTableName"] = "Assign Buildings to User";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto34["m_sql"] = "property_groups_areas.area_name";
$proto34["m_srcTableName"] = "Assign Buildings to User";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_level_1_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto36["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_level_1_id";
$proto36["m_srcTableName"] = "Assign Buildings to User";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto38["m_sql"] = "property_level_1_buildings.designation";
$proto38["m_srcTableName"] = "Assign Buildings to User";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto40["m_sql"] = "ut_map_external_source_users.person_id";
$proto40["m_srcTableName"] = "Assign Buildings to User";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_role_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto42["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_role_id";
$proto42["m_srcTableName"] = "Assign Buildings to User";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto44["m_sql"] = "ut_user_role_types.role_type";
$proto44["m_srcTableName"] = "Assign Buildings to User";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "user_role";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto46["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_user_type_id";
$proto46["m_srcTableName"] = "Assign Buildings to User";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto48["m_sql"] = "ut_user_types.designation";
$proto48["m_srcTableName"] = "Assign Buildings to User";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "user_type";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "propagate_level_2",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto50["m_sql"] = "external_map_user_unit_role_permissions_level_1.propagate_level_2";
$proto50["m_srcTableName"] = "Assign Buildings to User";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "propagate_level_3",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto52["m_sql"] = "external_map_user_unit_role_permissions_level_1.propagate_level_3";
$proto52["m_srcTableName"] = "Assign Buildings to User";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_update_ts",
	"m_strTable" => "ut_check_unee_t_update_add_user_to_unit_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto54["m_sql"] = "ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_update_ts";
$proto54["m_srcTableName"] = "Assign Buildings to User";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "unee_t_update_ts";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_check_unee_t_update_add_user_to_unit_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto56["m_sql"] = "ut_check_unee_t_update_add_user_to_unit_level_1.unee_t_mefe_unit_id";
$proto56["m_srcTableName"] = "Assign Buildings to User";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto58["m_sql"] = "property_level_1_buildings.country_code";
$proto58["m_srcTableName"] = "Assign Buildings to User";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto60["m_sql"] = "property_groups_countries.country_name";
$proto60["m_srcTableName"] = "Assign Buildings to User";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "ut_info_mefe_users",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto62["m_sql"] = "ut_info_mefe_users.name";
$proto62["m_srcTableName"] = "Assign Buildings to User";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "external_map_user_unit_role_permissions_level_1";
$proto65["m_srcTableName"] = "Assign Buildings to User";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id_map_user_unit_permissions_level_1";
$proto65["m_columns"][] = "syst_created_datetime";
$proto65["m_columns"][] = "creation_system_id";
$proto65["m_columns"][] = "created_by_id";
$proto65["m_columns"][] = "creation_method";
$proto65["m_columns"][] = "syst_updated_datetime";
$proto65["m_columns"][] = "update_system_id";
$proto65["m_columns"][] = "updated_by_id";
$proto65["m_columns"][] = "update_method";
$proto65["m_columns"][] = "organization_id";
$proto65["m_columns"][] = "is_obsolete";
$proto65["m_columns"][] = "is_update_needed";
$proto65["m_columns"][] = "unee_t_update_ts";
$proto65["m_columns"][] = "unee_t_mefe_user_id";
$proto65["m_columns"][] = "unee_t_level_1_id";
$proto65["m_columns"][] = "unee_t_user_type_id";
$proto65["m_columns"][] = "unee_t_role_id";
$proto65["m_columns"][] = "propagate_level_2";
$proto65["m_columns"][] = "propagate_level_3";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "external_map_user_unit_role_permissions_level_1";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Assign Buildings to User";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_LEFTJOIN";
			$proto69=array();
$proto69["m_strName"] = "property_level_1_buildings";
$proto69["m_srcTableName"] = "Assign Buildings to User";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id_building";
$proto69["m_columns"][] = "external_id";
$proto69["m_columns"][] = "external_system_id";
$proto69["m_columns"][] = "external_table";
$proto69["m_columns"][] = "syst_created_datetime";
$proto69["m_columns"][] = "creation_system_id";
$proto69["m_columns"][] = "created_by_id";
$proto69["m_columns"][] = "creation_method";
$proto69["m_columns"][] = "syst_updated_datetime";
$proto69["m_columns"][] = "update_system_id";
$proto69["m_columns"][] = "updated_by_id";
$proto69["m_columns"][] = "update_method";
$proto69["m_columns"][] = "organization_id";
$proto69["m_columns"][] = "is_obsolete";
$proto69["m_columns"][] = "order";
$proto69["m_columns"][] = "area_id";
$proto69["m_columns"][] = "is_creation_needed_in_unee_t";
$proto69["m_columns"][] = "do_not_insert";
$proto69["m_columns"][] = "unee_t_unit_type";
$proto69["m_columns"][] = "designation";
$proto69["m_columns"][] = "tower";
$proto69["m_columns"][] = "address_1";
$proto69["m_columns"][] = "address_2";
$proto69["m_columns"][] = "zip_postal_code";
$proto69["m_columns"][] = "state";
$proto69["m_columns"][] = "city";
$proto69["m_columns"][] = "country_code";
$proto69["m_columns"][] = "description";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "LEFT OUTER JOIN property_level_1_buildings ON external_map_user_unit_role_permissions_level_1.unee_t_level_1_id = property_level_1_buildings.id_building AND external_map_user_unit_role_permissions_level_1.organization_id = property_level_1_buildings.organization_id";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Assign Buildings to User";
$proto70=array();
$proto70["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_level_1_id = property_level_1_buildings.id_building AND external_map_user_unit_role_permissions_level_1.organization_id = property_level_1_buildings.organization_id";
$proto70["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_1.unee_t_level_1_id = property_level_1_buildings.id_building AND external_map_user_unit_role_permissions_level_1.organization_id = property_level_1_buildings.organization_id"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
						$proto72=array();
$proto72["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_level_1_id = property_level_1_buildings.id_building";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_level_1_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= property_level_1_buildings.id_building";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

			$proto70["m_contained"][]=$obj;
						$proto74=array();
$proto74["m_sql"] = "external_map_user_unit_role_permissions_level_1.organization_id = property_level_1_buildings.organization_id";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= property_level_1_buildings.organization_id";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

			$proto70["m_contained"][]=$obj;
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "ut_map_external_source_users";
$proto77["m_srcTableName"] = "Assign Buildings to User";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id_map";
$proto77["m_columns"][] = "syst_created_datetime";
$proto77["m_columns"][] = "creation_system_id";
$proto77["m_columns"][] = "created_by_id";
$proto77["m_columns"][] = "creation_method";
$proto77["m_columns"][] = "syst_updated_datetime";
$proto77["m_columns"][] = "update_system_id";
$proto77["m_columns"][] = "updated_by_id";
$proto77["m_columns"][] = "update_method";
$proto77["m_columns"][] = "organization_id";
$proto77["m_columns"][] = "is_obsolete";
$proto77["m_columns"][] = "is_update_needed";
$proto77["m_columns"][] = "person_id";
$proto77["m_columns"][] = "unee_t_mefe_user_id";
$proto77["m_columns"][] = "uneet_created_datetime";
$proto77["m_columns"][] = "is_mefe_api_success";
$proto77["m_columns"][] = "mefe_api_error_message";
$proto77["m_columns"][] = "is_unee_t_created_by_me";
$proto77["m_columns"][] = "uneet_login_name";
$proto77["m_columns"][] = "external_person_id";
$proto77["m_columns"][] = "external_system";
$proto77["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_1.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "Assign Buildings to User";
$proto78=array();
$proto78["m_sql"] = "external_map_user_unit_role_permissions_level_1.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto78["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_1.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
						$proto80=array();
$proto80["m_sql"] = "external_map_user_unit_role_permissions_level_1.organization_id = ut_map_external_source_users.organization_id";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= ut_map_external_source_users.organization_id";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

			$proto78["m_contained"][]=$obj;
						$proto82=array();
$proto82["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= ut_map_external_source_users.unee_t_mefe_user_id";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

			$proto78["m_contained"][]=$obj;
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
												$proto84=array();
$proto84["m_link"] = "SQLL_LEFTJOIN";
			$proto85=array();
$proto85["m_strName"] = "ut_user_role_types";
$proto85["m_srcTableName"] = "Assign Buildings to User";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id_role_type";
$proto85["m_columns"][] = "syst_created_datetime";
$proto85["m_columns"][] = "creation_system_id";
$proto85["m_columns"][] = "created_by_id";
$proto85["m_columns"][] = "syst_updated_datetime";
$proto85["m_columns"][] = "update_system_id";
$proto85["m_columns"][] = "updated_by_id";
$proto85["m_columns"][] = "order";
$proto85["m_columns"][] = "is_obsolete";
$proto85["m_columns"][] = "role_type";
$proto85["m_columns"][] = "bz_description";
$proto85["m_columns"][] = "description";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_1.unee_t_role_id = ut_user_role_types.id_role_type";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "Assign Buildings to User";
$proto86=array();
$proto86["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_role_id = ut_user_role_types.id_role_type";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_role_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
												$proto88=array();
$proto88["m_link"] = "SQLL_INNERJOIN";
			$proto89=array();
$proto89["m_strName"] = "ut_user_types";
$proto89["m_srcTableName"] = "Assign Buildings to User";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id_unee_t_user_type";
$proto89["m_columns"][] = "syst_created_datetime";
$proto89["m_columns"][] = "creation_system_id";
$proto89["m_columns"][] = "created_by_id";
$proto89["m_columns"][] = "creation_method";
$proto89["m_columns"][] = "syst_updated_datetime";
$proto89["m_columns"][] = "update_system_id";
$proto89["m_columns"][] = "updated_by_id";
$proto89["m_columns"][] = "update_method";
$proto89["m_columns"][] = "organization_id";
$proto89["m_columns"][] = "order";
$proto89["m_columns"][] = "is_obsolete";
$proto89["m_columns"][] = "designation";
$proto89["m_columns"][] = "description";
$proto89["m_columns"][] = "ut_user_role_type_id";
$proto89["m_columns"][] = "is_all_unit";
$proto89["m_columns"][] = "is_occupant";
$proto89["m_columns"][] = "is_public";
$proto89["m_columns"][] = "is_default_assignee";
$proto89["m_columns"][] = "is_default_invited";
$proto89["m_columns"][] = "is_unit_owner";
$proto89["m_columns"][] = "is_dashboard_access";
$proto89["m_columns"][] = "can_see_role_contractor";
$proto89["m_columns"][] = "can_see_role_mgt_cny";
$proto89["m_columns"][] = "can_see_occupant";
$proto89["m_columns"][] = "can_see_role_landlord";
$proto89["m_columns"][] = "can_see_role_agent";
$proto89["m_columns"][] = "can_see_role_tenant";
$proto89["m_columns"][] = "is_assigned_to_case";
$proto89["m_columns"][] = "is_invited_to_case";
$proto89["m_columns"][] = "is_solution_updated";
$proto89["m_columns"][] = "is_next_step_updated";
$proto89["m_columns"][] = "is_deadline_updated";
$proto89["m_columns"][] = "is_case_resolved";
$proto89["m_columns"][] = "is_case_critical";
$proto89["m_columns"][] = "is_case_blocker";
$proto89["m_columns"][] = "is_message_from_contractor";
$proto89["m_columns"][] = "is_message_from_mgt_cny";
$proto89["m_columns"][] = "is_message_from_agent";
$proto89["m_columns"][] = "is_message_from_occupant";
$proto89["m_columns"][] = "is_message_from_ll";
$proto89["m_columns"][] = "is_message_from_tenant";
$proto89["m_columns"][] = "is_any_new_message";
$proto89["m_columns"][] = "is_new_ir";
$proto89["m_columns"][] = "is_new_inventory";
$proto89["m_columns"][] = "is_new_item";
$proto89["m_columns"][] = "is_item_moved";
$proto89["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_1.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_1.organization_id = ut_user_types.organization_id";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "Assign Buildings to User";
$proto90=array();
$proto90["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_1.organization_id = ut_user_types.organization_id";
$proto90["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_1.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_1.organization_id = ut_user_types.organization_id"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
						$proto92=array();
$proto92["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

			$proto90["m_contained"][]=$obj;
						$proto94=array();
$proto94["m_sql"] = "external_map_user_unit_role_permissions_level_1.organization_id = ut_user_types.organization_id";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= ut_user_types.organization_id";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

			$proto90["m_contained"][]=$obj;
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
												$proto96=array();
$proto96["m_link"] = "SQLL_LEFTJOIN";
			$proto97=array();
$proto97["m_strName"] = "property_groups_areas";
$proto97["m_srcTableName"] = "Assign Buildings to User";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "id_area";
$proto97["m_columns"][] = "external_id";
$proto97["m_columns"][] = "external_system_id";
$proto97["m_columns"][] = "external_table";
$proto97["m_columns"][] = "syst_created_datetime";
$proto97["m_columns"][] = "creation_system_id";
$proto97["m_columns"][] = "created_by_id";
$proto97["m_columns"][] = "creation_method";
$proto97["m_columns"][] = "syst_updated_datetime";
$proto97["m_columns"][] = "update_system_id";
$proto97["m_columns"][] = "updated_by_id";
$proto97["m_columns"][] = "update_method";
$proto97["m_columns"][] = "is_creation_needed_in_unee_t";
$proto97["m_columns"][] = "organization_id";
$proto97["m_columns"][] = "country_code";
$proto97["m_columns"][] = "is_obsolete";
$proto97["m_columns"][] = "is_default";
$proto97["m_columns"][] = "order";
$proto97["m_columns"][] = "area_name";
$proto97["m_columns"][] = "area_definition";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "Assign Buildings to User";
$proto98=array();
$proto98["m_sql"] = "property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= property_groups_areas.id_area";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
												$proto100=array();
$proto100["m_link"] = "SQLL_LEFTJOIN";
			$proto101=array();
$proto101["m_strName"] = "ut_check_unee_t_update_add_user_to_unit_level_1";
$proto101["m_srcTableName"] = "Assign Buildings to User";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "id_map_user_unit_permissions_level_1";
$proto101["m_columns"][] = "external_property_type_id";
$proto101["m_columns"][] = "uneet_name";
$proto101["m_columns"][] = "unee_t_mefe_user_id";
$proto101["m_columns"][] = "unee_t_mefe_unit_id";
$proto101["m_columns"][] = "unee_t_update_ts";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_1 ON external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1 = ut_check_unee_t_update_add_user_to_unit_level_1.id_map_user_unit_permissions_level_1";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "Assign Buildings to User";
$proto102=array();
$proto102["m_sql"] = "external_map_user_unit_role_permissions_level_1.id_map_user_unit_permissions_level_1 = ut_check_unee_t_update_add_user_to_unit_level_1.id_map_user_unit_permissions_level_1";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_map_user_unit_permissions_level_1",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "= ut_check_unee_t_update_add_user_to_unit_level_1.id_map_user_unit_permissions_level_1";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
												$proto104=array();
$proto104["m_link"] = "SQLL_LEFTJOIN";
			$proto105=array();
$proto105["m_strName"] = "property_groups_countries";
$proto105["m_srcTableName"] = "Assign Buildings to User";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "id_country";
$proto105["m_columns"][] = "syst_created_datetime";
$proto105["m_columns"][] = "creation_system_id";
$proto105["m_columns"][] = "created_by_id";
$proto105["m_columns"][] = "syst_updated_datetime";
$proto105["m_columns"][] = "update_system_id";
$proto105["m_columns"][] = "updated_by_id";
$proto105["m_columns"][] = "is_obsolete";
$proto105["m_columns"][] = "is_default";
$proto105["m_columns"][] = "is_system";
$proto105["m_columns"][] = "order";
$proto105["m_columns"][] = "country_code";
$proto105["m_columns"][] = "country_name";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "Assign Buildings to User";
$proto106=array();
$proto106["m_sql"] = "property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= property_groups_countries.country_code";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
												$proto108=array();
$proto108["m_link"] = "SQLL_LEFTJOIN";
			$proto109=array();
$proto109["m_strName"] = "ut_info_mefe_users";
$proto109["m_srcTableName"] = "Assign Buildings to User";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id_person";
$proto109["m_columns"][] = "unee_t_mefe_user_id";
$proto109["m_columns"][] = "external_person_id";
$proto109["m_columns"][] = "external_system";
$proto109["m_columns"][] = "table_in_external_system";
$proto109["m_columns"][] = "uneet_login_name";
$proto109["m_columns"][] = "name";
$proto109["m_columns"][] = "email";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "Assign Buildings to User";
$proto110=array();
$proto110["m_sql"] = "external_map_user_unit_role_permissions_level_1.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_1",
	"m_srcTableName" => "Assign Buildings to User"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= ut_info_mefe_users.unee_t_mefe_user_id";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Assign Buildings to User";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Assign_Buildings_to_User = createSqlQuery_Assign_Buildings_to_User();


	
					
;

																													

$tdataAssign_Buildings_to_User[".sqlquery"] = $queryData_Assign_Buildings_to_User;

include_once(getabspath("include/Assign_Buildings_to_User_events.php"));
$tableEvents["Assign Buildings to User"] = new eventclass_Assign_Buildings_to_User;
$tdataAssign_Buildings_to_User[".hasEvents"] = true;

?>