<?php



$tdataAssign_Rooms = array();
$tdataAssign_Rooms[".searchableFields"] = array();
$tdataAssign_Rooms[".ShortName"] = "Assign_Rooms";
$tdataAssign_Rooms[".OwnerID"] = "organization_id";
$tdataAssign_Rooms[".OriginalTable"] = "external_map_user_unit_role_permissions_level_3";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataAssign_Rooms[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataAssign_Rooms[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataAssign_Rooms[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsAssign_Rooms = array();
$fieldToolTipsAssign_Rooms = array();
$pageTitlesAssign_Rooms = array();
$placeHoldersAssign_Rooms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAssign_Rooms["English"] = array();
	$fieldToolTipsAssign_Rooms["English"] = array();
	$placeHoldersAssign_Rooms["English"] = array();
	$pageTitlesAssign_Rooms["English"] = array();
	$fieldLabelsAssign_Rooms["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsAssign_Rooms["English"]["syst_created_datetime"] = "";
	$placeHoldersAssign_Rooms["English"]["syst_created_datetime"] = "";
	$fieldLabelsAssign_Rooms["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsAssign_Rooms["English"]["creation_system_id"] = "";
	$placeHoldersAssign_Rooms["English"]["creation_system_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsAssign_Rooms["English"]["created_by_id"] = "";
	$placeHoldersAssign_Rooms["English"]["created_by_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsAssign_Rooms["English"]["creation_method"] = "";
	$placeHoldersAssign_Rooms["English"]["creation_method"] = "";
	$fieldLabelsAssign_Rooms["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsAssign_Rooms["English"]["syst_updated_datetime"] = "";
	$placeHoldersAssign_Rooms["English"]["syst_updated_datetime"] = "";
	$fieldLabelsAssign_Rooms["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsAssign_Rooms["English"]["update_system_id"] = "";
	$placeHoldersAssign_Rooms["English"]["update_system_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsAssign_Rooms["English"]["updated_by_id"] = "";
	$placeHoldersAssign_Rooms["English"]["updated_by_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["update_method"] = "Update Method";
	$fieldToolTipsAssign_Rooms["English"]["update_method"] = "";
	$placeHoldersAssign_Rooms["English"]["update_method"] = "";
	$fieldLabelsAssign_Rooms["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsAssign_Rooms["English"]["organization_id"] = "";
	$placeHoldersAssign_Rooms["English"]["organization_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["is_update_needed"] = "Is Update Needed";
	$fieldToolTipsAssign_Rooms["English"]["is_update_needed"] = "";
	$placeHoldersAssign_Rooms["English"]["is_update_needed"] = "";
	$fieldLabelsAssign_Rooms["English"]["unee_t_update_ts"] = "Unee-T Update";
	$fieldToolTipsAssign_Rooms["English"]["unee_t_update_ts"] = "";
	$placeHoldersAssign_Rooms["English"]["unee_t_update_ts"] = "";
	$fieldLabelsAssign_Rooms["English"]["unee_t_mefe_user_id"] = "Unee-T User";
	$fieldToolTipsAssign_Rooms["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersAssign_Rooms["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["unee_t_role_id"] = "Role";
	$fieldToolTipsAssign_Rooms["English"]["unee_t_role_id"] = "";
	$placeHoldersAssign_Rooms["English"]["unee_t_role_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["person_id"] = "Person";
	$fieldToolTipsAssign_Rooms["English"]["person_id"] = "";
	$placeHoldersAssign_Rooms["English"]["person_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["user_role"] = "Role";
	$fieldToolTipsAssign_Rooms["English"]["user_role"] = "";
	$placeHoldersAssign_Rooms["English"]["user_role"] = "";
	$fieldLabelsAssign_Rooms["English"]["user_type"] = "User Type";
	$fieldToolTipsAssign_Rooms["English"]["user_type"] = "";
	$placeHoldersAssign_Rooms["English"]["user_type"] = "";
	$fieldLabelsAssign_Rooms["English"]["unee_t_user_type_id"] = "User Type";
	$fieldToolTipsAssign_Rooms["English"]["unee_t_user_type_id"] = "";
	$placeHoldersAssign_Rooms["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["building_name"] = "Building";
	$fieldToolTipsAssign_Rooms["English"]["building_name"] = "";
	$placeHoldersAssign_Rooms["English"]["building_name"] = "";
	$fieldLabelsAssign_Rooms["English"]["area_id"] = "Area";
	$fieldToolTipsAssign_Rooms["English"]["area_id"] = "";
	$placeHoldersAssign_Rooms["English"]["area_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["area_name"] = "Area";
	$fieldToolTipsAssign_Rooms["English"]["area_name"] = "";
	$placeHoldersAssign_Rooms["English"]["area_name"] = "";
	$fieldLabelsAssign_Rooms["English"]["id_building"] = "Building";
	$fieldToolTipsAssign_Rooms["English"]["id_building"] = "";
	$placeHoldersAssign_Rooms["English"]["id_building"] = "";
	$fieldLabelsAssign_Rooms["English"]["unit_name"] = "Unit";
	$fieldToolTipsAssign_Rooms["English"]["unit_name"] = "";
	$placeHoldersAssign_Rooms["English"]["unit_name"] = "";
	$fieldLabelsAssign_Rooms["English"]["id_map_user_unit_permissions_level_3"] = "Id Map User Unit Permissions Level 3";
	$fieldToolTipsAssign_Rooms["English"]["id_map_user_unit_permissions_level_3"] = "";
	$placeHoldersAssign_Rooms["English"]["id_map_user_unit_permissions_level_3"] = "";
	$fieldLabelsAssign_Rooms["English"]["unee_t_level_3_id"] = "Room";
	$fieldToolTipsAssign_Rooms["English"]["unee_t_level_3_id"] = "";
	$placeHoldersAssign_Rooms["English"]["unee_t_level_3_id"] = "";
	$fieldLabelsAssign_Rooms["English"]["system_id_unit"] = "Unit";
	$fieldToolTipsAssign_Rooms["English"]["system_id_unit"] = "";
	$placeHoldersAssign_Rooms["English"]["system_id_unit"] = "";
	$fieldLabelsAssign_Rooms["English"]["room_name"] = "Room Designation";
	$fieldToolTipsAssign_Rooms["English"]["room_name"] = "";
	$placeHoldersAssign_Rooms["English"]["room_name"] = "";
	$fieldLabelsAssign_Rooms["English"]["is_permission_obsolete"] = "Is Permission Obsolete";
	$fieldToolTipsAssign_Rooms["English"]["is_permission_obsolete"] = "";
	$placeHoldersAssign_Rooms["English"]["is_permission_obsolete"] = "";
	$fieldLabelsAssign_Rooms["English"]["country_code"] = "Country Code";
	$fieldToolTipsAssign_Rooms["English"]["country_code"] = "";
	$placeHoldersAssign_Rooms["English"]["country_code"] = "";
	$fieldLabelsAssign_Rooms["English"]["country_name"] = "Country Name";
	$fieldToolTipsAssign_Rooms["English"]["country_name"] = "";
	$placeHoldersAssign_Rooms["English"]["country_name"] = "";
	$fieldLabelsAssign_Rooms["English"]["name"] = "Name";
	$fieldToolTipsAssign_Rooms["English"]["name"] = "";
	$placeHoldersAssign_Rooms["English"]["name"] = "";
	$fieldLabelsAssign_Rooms["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsAssign_Rooms["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersAssign_Rooms["English"]["unee_t_mefe_unit_id"] = "";
	if (count($fieldToolTipsAssign_Rooms["English"]))
		$tdataAssign_Rooms[".isUseToolTips"] = true;
}


	$tdataAssign_Rooms[".NCSearch"] = true;



$tdataAssign_Rooms[".shortTableName"] = "Assign_Rooms";
$tdataAssign_Rooms[".nSecOptions"] = 1;

$tdataAssign_Rooms[".mainTableOwnerID"] = "organization_id";
$tdataAssign_Rooms[".entityType"] = 1;

$tdataAssign_Rooms[".strOriginalTableName"] = "external_map_user_unit_role_permissions_level_3";

		 



$tdataAssign_Rooms[".showAddInPopup"] = false;

$tdataAssign_Rooms[".showEditInPopup"] = false;

$tdataAssign_Rooms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAssign_Rooms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataAssign_Rooms[".listAjax"] = true;
//	temporary
$tdataAssign_Rooms[".listAjax"] = false;

	$tdataAssign_Rooms[".audit"] = false;

	$tdataAssign_Rooms[".locking"] = false;


$pages = $tdataAssign_Rooms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataAssign_Rooms[".edit"] = true;
	$tdataAssign_Rooms[".afterEditAction"] = 1;
	$tdataAssign_Rooms[".closePopupAfterEdit"] = 1;
	$tdataAssign_Rooms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataAssign_Rooms[".add"] = true;
$tdataAssign_Rooms[".afterAddAction"] = 0;
$tdataAssign_Rooms[".closePopupAfterAdd"] = 1;
$tdataAssign_Rooms[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataAssign_Rooms[".list"] = true;
}



$tdataAssign_Rooms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataAssign_Rooms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataAssign_Rooms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataAssign_Rooms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataAssign_Rooms[".printFriendly"] = true;
}



$tdataAssign_Rooms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataAssign_Rooms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataAssign_Rooms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataAssign_Rooms[".isUseAjaxSuggest"] = true;

$tdataAssign_Rooms[".rowHighlite"] = true;





$tdataAssign_Rooms[".ajaxCodeSnippetAdded"] = false;

$tdataAssign_Rooms[".buttonsAdded"] = false;

$tdataAssign_Rooms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAssign_Rooms[".isUseTimeForSearch"] = false;


$tdataAssign_Rooms[".badgeColor"] = "002f6c";


$tdataAssign_Rooms[".allSearchFields"] = array();
$tdataAssign_Rooms[".filterFields"] = array();
$tdataAssign_Rooms[".requiredSearchFields"] = array();

$tdataAssign_Rooms[".googleLikeFields"] = array();
$tdataAssign_Rooms[".googleLikeFields"][] = "id_map_user_unit_permissions_level_3";
$tdataAssign_Rooms[".googleLikeFields"][] = "area_name";
$tdataAssign_Rooms[".googleLikeFields"][] = "building_name";
$tdataAssign_Rooms[".googleLikeFields"][] = "unit_name";
$tdataAssign_Rooms[".googleLikeFields"][] = "room_name";
$tdataAssign_Rooms[".googleLikeFields"][] = "user_role";
$tdataAssign_Rooms[".googleLikeFields"][] = "user_type";
$tdataAssign_Rooms[".googleLikeFields"][] = "country_code";
$tdataAssign_Rooms[".googleLikeFields"][] = "country_name";
$tdataAssign_Rooms[".googleLikeFields"][] = "name";



$tdataAssign_Rooms[".tableType"] = "list";

$tdataAssign_Rooms[".printerPageOrientation"] = 0;
$tdataAssign_Rooms[".nPrinterPageScale"] = 100;

$tdataAssign_Rooms[".nPrinterSplitRecords"] = 40;

$tdataAssign_Rooms[".geocodingEnabled"] = false;





$tdataAssign_Rooms[".isResizeColumns"] = true;





$tdataAssign_Rooms[".pageSize"] = 50;

$tdataAssign_Rooms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAssign_Rooms[".strOrderBy"] = $tstrOrderBy;

$tdataAssign_Rooms[".orderindexes"] = array();

$tdataAssign_Rooms[".sqlHead"] = "SELECT external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3,  external_map_user_unit_role_permissions_level_3.syst_created_datetime,  external_map_user_unit_role_permissions_level_3.creation_system_id,  external_map_user_unit_role_permissions_level_3.created_by_id,  external_map_user_unit_role_permissions_level_3.creation_method,  external_map_user_unit_role_permissions_level_3.syst_updated_datetime,  external_map_user_unit_role_permissions_level_3.update_system_id,  external_map_user_unit_role_permissions_level_3.updated_by_id,  external_map_user_unit_role_permissions_level_3.update_method,  external_map_user_unit_role_permissions_level_3.organization_id,  external_map_user_unit_role_permissions_level_3.is_obsolete AS is_permission_obsolete,  external_map_user_unit_role_permissions_level_3.is_update_needed,  external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  property_level_1_buildings.id_building,  property_level_1_buildings.designation AS building_name,  property_level_2_units.system_id_unit,  property_level_2_units.designation AS unit_name,  external_map_user_unit_role_permissions_level_3.unee_t_level_3_id,  property_level_3_rooms.room_designation AS room_name,  ut_map_external_source_users.person_id,  external_map_user_unit_role_permissions_level_3.unee_t_role_id,  ut_user_role_types.role_type AS user_role,  external_map_user_unit_role_permissions_level_3.unee_t_user_type_id,  ut_user_types.designation AS user_type,  ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_update_ts,  property_groups_countries.country_code,  property_groups_countries.country_name,  ut_info_mefe_users.name,  ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_mefe_unit_id";
$tdataAssign_Rooms[".sqlFrom"] = "FROM external_map_user_unit_role_permissions_level_3  LEFT OUTER JOIN property_level_3_rooms ON external_map_user_unit_role_permissions_level_3.unee_t_level_3_id = property_level_3_rooms.system_id_room AND external_map_user_unit_role_permissions_level_3.organization_id = property_level_3_rooms.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_3.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_3.unee_t_role_id = ut_user_role_types.id_role_type  INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_3.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_3.organization_id = ut_user_types.organization_id  LEFT OUTER JOIN property_level_2_units ON property_level_3_rooms.external_id = property_level_2_units.l1p_external_id AND property_level_3_rooms.organization_id = property_level_2_units.organization_id AND property_level_3_rooms.external_system_id = property_level_2_units.l1p_external_system AND property_level_3_rooms.external_table = property_level_2_units.l1p_external_table  LEFT OUTER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_external_id = property_groups_areas.external_id AND property_level_1_buildings.area_external_table = property_groups_areas.external_table AND property_level_1_buildings.organization_id = property_groups_areas.organization_id  LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_3 ON external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3 = ut_check_unee_t_update_add_user_to_unit_level_3.id_map_user_unit_permissions_level_3  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$tdataAssign_Rooms[".sqlWhereExpr"] = "";
$tdataAssign_Rooms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAssign_Rooms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAssign_Rooms[".arrGroupsPerPage"] = $arrGPP;

$tdataAssign_Rooms[".highlightSearchResults"] = true;

$tableKeysAssign_Rooms = array();
$tableKeysAssign_Rooms[] = "organization_id";
$tableKeysAssign_Rooms[] = "unee_t_mefe_user_id";
$tableKeysAssign_Rooms[] = "unee_t_level_3_id";
$tableKeysAssign_Rooms[] = "unee_t_user_type_id";
$tdataAssign_Rooms[".Keys"] = $tableKeysAssign_Rooms;


$tdataAssign_Rooms[".hideMobileList"] = array();




//	id_map_user_unit_permissions_level_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map_user_unit_permissions_level_3";
	$fdata["GoodName"] = "id_map_user_unit_permissions_level_3";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","id_map_user_unit_permissions_level_3");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map_user_unit_permissions_level_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3";

	
	
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


	$tdataAssign_Rooms["id_map_user_unit_permissions_level_3"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "id_map_user_unit_permissions_level_3";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.syst_created_datetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataAssign_Rooms["syst_created_datetime"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.creation_system_id";

	
	
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


	$tdataAssign_Rooms["creation_system_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.created_by_id";

	
	
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


	$tdataAssign_Rooms["created_by_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.creation_method";

	
	
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


	$tdataAssign_Rooms["creation_method"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.syst_updated_datetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataAssign_Rooms["syst_updated_datetime"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.update_system_id";

	
	
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


	$tdataAssign_Rooms["update_system_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.updated_by_id";

	
	
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


	$tdataAssign_Rooms["updated_by_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.update_method";

	
	
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


	$tdataAssign_Rooms["update_method"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.organization_id";

	
	
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


	$tdataAssign_Rooms["organization_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "organization_id";
//	is_permission_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_permission_obsolete";
	$fdata["GoodName"] = "is_permission_obsolete";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","is_permission_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.is_obsolete";

	
	
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


	$tdataAssign_Rooms["is_permission_obsolete"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "is_permission_obsolete";
//	is_update_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_update_needed";
	$fdata["GoodName"] = "is_update_needed";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","is_update_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_update_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.is_update_needed";

	
	
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


	$tdataAssign_Rooms["is_update_needed"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "is_update_needed";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id";

	
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "unee_t_user_type_id", "lookup" => "unee_t_user_type_id" );

	
	

	
	
	
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
	$edata["LookupTable"] = "Search Users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "name";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "unee_t_user_type_id", "lookup" => "unee_t_user_type_id" );

	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdataAssign_Rooms["unee_t_mefe_user_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unee_t_mefe_user_id";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","area_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "area_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.area_id";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "country_code", "lookup" => "country_code" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "id_building";

	
		$edata["Multiselect"] = true;

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


	$tdataAssign_Rooms["area_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","area_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_areas.area_name";

	
	
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


	$tdataAssign_Rooms["area_name"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "area_name";
//	id_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_building";
	$fdata["GoodName"] = "id_building";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","id_building");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.id_building";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "property_level_1_buildings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "area_id", "lookup" => "area_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "system_id_unit";

	
		$edata["Multiselect"] = true;

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


	$tdataAssign_Rooms["id_building"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "id_building";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","building_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.designation";

	
	
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


	$tdataAssign_Rooms["building_name"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "building_name";
//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","system_id_unit");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "system_id_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_2_units.system_id_unit";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Search Units";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "building_system_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "unit_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_building", "lookup" => "building_system_id" );

	
	

	
		$edata["Multiselect"] = true;

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


	$tdataAssign_Rooms["system_id_unit"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "system_id_unit";
//	unit_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "unit_name";
	$fdata["GoodName"] = "unit_name";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unit_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_2_units.designation";

	
	
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


	$tdataAssign_Rooms["unit_name"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unit_name";
//	unee_t_level_3_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "unee_t_level_3_id";
	$fdata["GoodName"] = "unee_t_level_3_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unee_t_level_3_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_level_3_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.unee_t_level_3_id";

	
	
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
	$edata["LookupTable"] = "Search Rooms";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "system_id_room";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "room_designation";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataAssign_Rooms["unee_t_level_3_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unee_t_level_3_id";
//	room_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "room_name";
	$fdata["GoodName"] = "room_name";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","room_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "room_designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.room_designation";

	
	
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


	$tdataAssign_Rooms["room_name"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "room_name";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","person_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.person_id";

	
	
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


	$tdataAssign_Rooms["person_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "person_id";
//	unee_t_role_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "unee_t_role_id";
	$fdata["GoodName"] = "unee_t_role_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unee_t_role_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_role_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.unee_t_role_id";

	
	
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

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "unee_t_user_type_id";

	
	
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


	$tdataAssign_Rooms["unee_t_role_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unee_t_role_id";
//	user_role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "user_role";
	$fdata["GoodName"] = "user_role";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","user_role");
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


	$tdataAssign_Rooms["user_role"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "user_role";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_3.unee_t_user_type_id";

	
	
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
				$edata["DependentLookups"][] = "unee_t_mefe_user_id";

	
	
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


	$tdataAssign_Rooms["unee_t_user_type_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unee_t_user_type_id";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","user_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.designation";

	
	
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


	$tdataAssign_Rooms["user_type"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "user_type";
//	unee_t_update_ts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "unee_t_update_ts";
	$fdata["GoodName"] = "unee_t_update_ts";
	$fdata["ownerTable"] = "ut_check_unee_t_update_add_user_to_unit_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unee_t_update_ts");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "unee_t_update_ts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_update_ts";

	
	
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


	$tdataAssign_Rooms["unee_t_update_ts"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unee_t_update_ts";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_countries.country_code";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "area_id";

	
		$edata["Multiselect"] = true;

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


	$tdataAssign_Rooms["country_code"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","country_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_countries.country_name";

	
	
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


	$tdataAssign_Rooms["country_name"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "country_name";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "ut_info_mefe_users";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","name");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_info_mefe_users.name";

	
	
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


	$tdataAssign_Rooms["name"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "name";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_check_unee_t_update_add_user_to_unit_level_3";
	$fdata["Label"] = GetFieldLabel("Assign_Rooms","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_mefe_unit_id";

	
	
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


	$tdataAssign_Rooms["unee_t_mefe_unit_id"] = $fdata;
		$tdataAssign_Rooms[".searchableFields"][] = "unee_t_mefe_unit_id";


$tables_data["Assign Rooms"]=&$tdataAssign_Rooms;
$field_labels["Assign_Rooms"] = &$fieldLabelsAssign_Rooms;
$fieldToolTips["Assign_Rooms"] = &$fieldToolTipsAssign_Rooms;
$placeHolders["Assign_Rooms"] = &$placeHoldersAssign_Rooms;
$page_titles["Assign_Rooms"] = &$pageTitlesAssign_Rooms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Assign Rooms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Assign Rooms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Assign_Rooms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3,  external_map_user_unit_role_permissions_level_3.syst_created_datetime,  external_map_user_unit_role_permissions_level_3.creation_system_id,  external_map_user_unit_role_permissions_level_3.created_by_id,  external_map_user_unit_role_permissions_level_3.creation_method,  external_map_user_unit_role_permissions_level_3.syst_updated_datetime,  external_map_user_unit_role_permissions_level_3.update_system_id,  external_map_user_unit_role_permissions_level_3.updated_by_id,  external_map_user_unit_role_permissions_level_3.update_method,  external_map_user_unit_role_permissions_level_3.organization_id,  external_map_user_unit_role_permissions_level_3.is_obsolete AS is_permission_obsolete,  external_map_user_unit_role_permissions_level_3.is_update_needed,  external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  property_level_1_buildings.id_building,  property_level_1_buildings.designation AS building_name,  property_level_2_units.system_id_unit,  property_level_2_units.designation AS unit_name,  external_map_user_unit_role_permissions_level_3.unee_t_level_3_id,  property_level_3_rooms.room_designation AS room_name,  ut_map_external_source_users.person_id,  external_map_user_unit_role_permissions_level_3.unee_t_role_id,  ut_user_role_types.role_type AS user_role,  external_map_user_unit_role_permissions_level_3.unee_t_user_type_id,  ut_user_types.designation AS user_type,  ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_update_ts,  property_groups_countries.country_code,  property_groups_countries.country_name,  ut_info_mefe_users.name,  ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_mefe_unit_id";
$proto0["m_strFrom"] = "FROM external_map_user_unit_role_permissions_level_3  LEFT OUTER JOIN property_level_3_rooms ON external_map_user_unit_role_permissions_level_3.unee_t_level_3_id = property_level_3_rooms.system_id_room AND external_map_user_unit_role_permissions_level_3.organization_id = property_level_3_rooms.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_3.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_3.unee_t_role_id = ut_user_role_types.id_role_type  INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_3.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_3.organization_id = ut_user_types.organization_id  LEFT OUTER JOIN property_level_2_units ON property_level_3_rooms.external_id = property_level_2_units.l1p_external_id AND property_level_3_rooms.organization_id = property_level_2_units.organization_id AND property_level_3_rooms.external_system_id = property_level_2_units.l1p_external_system AND property_level_3_rooms.external_table = property_level_2_units.l1p_external_table  LEFT OUTER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_external_id = property_groups_areas.external_id AND property_level_1_buildings.area_external_table = property_groups_areas.external_table AND property_level_1_buildings.organization_id = property_groups_areas.organization_id  LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_3 ON external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3 = ut_check_unee_t_update_add_user_to_unit_level_3.id_map_user_unit_permissions_level_3  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
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
	"m_strName" => "id_map_user_unit_permissions_level_3",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto6["m_sql"] = "external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3";
$proto6["m_srcTableName"] = "Assign Rooms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto8["m_sql"] = "external_map_user_unit_role_permissions_level_3.syst_created_datetime";
$proto8["m_srcTableName"] = "Assign Rooms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto10["m_sql"] = "external_map_user_unit_role_permissions_level_3.creation_system_id";
$proto10["m_srcTableName"] = "Assign Rooms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto12["m_sql"] = "external_map_user_unit_role_permissions_level_3.created_by_id";
$proto12["m_srcTableName"] = "Assign Rooms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto14["m_sql"] = "external_map_user_unit_role_permissions_level_3.creation_method";
$proto14["m_srcTableName"] = "Assign Rooms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto16["m_sql"] = "external_map_user_unit_role_permissions_level_3.syst_updated_datetime";
$proto16["m_srcTableName"] = "Assign Rooms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto18["m_sql"] = "external_map_user_unit_role_permissions_level_3.update_system_id";
$proto18["m_srcTableName"] = "Assign Rooms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto20["m_sql"] = "external_map_user_unit_role_permissions_level_3.updated_by_id";
$proto20["m_srcTableName"] = "Assign Rooms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto22["m_sql"] = "external_map_user_unit_role_permissions_level_3.update_method";
$proto22["m_srcTableName"] = "Assign Rooms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto24["m_sql"] = "external_map_user_unit_role_permissions_level_3.organization_id";
$proto24["m_srcTableName"] = "Assign Rooms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto26["m_sql"] = "external_map_user_unit_role_permissions_level_3.is_obsolete";
$proto26["m_srcTableName"] = "Assign Rooms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "is_permission_obsolete";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_needed",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto28["m_sql"] = "external_map_user_unit_role_permissions_level_3.is_update_needed";
$proto28["m_srcTableName"] = "Assign Rooms";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto30["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id";
$proto30["m_srcTableName"] = "Assign Rooms";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto32["m_sql"] = "property_level_1_buildings.area_id";
$proto32["m_srcTableName"] = "Assign Rooms";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Assign Rooms"
));

$proto34["m_sql"] = "property_groups_areas.area_name";
$proto34["m_srcTableName"] = "Assign Rooms";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_building",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto36["m_sql"] = "property_level_1_buildings.id_building";
$proto36["m_srcTableName"] = "Assign Rooms";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto38["m_sql"] = "property_level_1_buildings.designation";
$proto38["m_srcTableName"] = "Assign Rooms";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Assign Rooms"
));

$proto40["m_sql"] = "property_level_2_units.system_id_unit";
$proto40["m_srcTableName"] = "Assign Rooms";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Assign Rooms"
));

$proto42["m_sql"] = "property_level_2_units.designation";
$proto42["m_srcTableName"] = "Assign Rooms";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "unit_name";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_level_3_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto44["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_level_3_id";
$proto44["m_srcTableName"] = "Assign Rooms";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Assign Rooms"
));

$proto46["m_sql"] = "property_level_3_rooms.room_designation";
$proto46["m_srcTableName"] = "Assign Rooms";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "room_name";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Assign Rooms"
));

$proto48["m_sql"] = "ut_map_external_source_users.person_id";
$proto48["m_srcTableName"] = "Assign Rooms";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_role_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto50["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_role_id";
$proto50["m_srcTableName"] = "Assign Rooms";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Assign Rooms"
));

$proto52["m_sql"] = "ut_user_role_types.role_type";
$proto52["m_srcTableName"] = "Assign Rooms";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "user_role";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto54["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_user_type_id";
$proto54["m_srcTableName"] = "Assign Rooms";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Assign Rooms"
));

$proto56["m_sql"] = "ut_user_types.designation";
$proto56["m_srcTableName"] = "Assign Rooms";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "user_type";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_update_ts",
	"m_strTable" => "ut_check_unee_t_update_add_user_to_unit_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto58["m_sql"] = "ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_update_ts";
$proto58["m_srcTableName"] = "Assign Rooms";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Assign Rooms"
));

$proto60["m_sql"] = "property_groups_countries.country_code";
$proto60["m_srcTableName"] = "Assign Rooms";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Assign Rooms"
));

$proto62["m_sql"] = "property_groups_countries.country_name";
$proto62["m_srcTableName"] = "Assign Rooms";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "ut_info_mefe_users",
	"m_srcTableName" => "Assign Rooms"
));

$proto64["m_sql"] = "ut_info_mefe_users.name";
$proto64["m_srcTableName"] = "Assign Rooms";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_check_unee_t_update_add_user_to_unit_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto66["m_sql"] = "ut_check_unee_t_update_add_user_to_unit_level_3.unee_t_mefe_unit_id";
$proto66["m_srcTableName"] = "Assign Rooms";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "external_map_user_unit_role_permissions_level_3";
$proto69["m_srcTableName"] = "Assign Rooms";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id_map_user_unit_permissions_level_3";
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
$proto69["m_columns"][] = "is_update_needed";
$proto69["m_columns"][] = "unee_t_update_ts";
$proto69["m_columns"][] = "unee_t_mefe_user_id";
$proto69["m_columns"][] = "unee_t_level_3_id";
$proto69["m_columns"][] = "unee_t_user_type_id";
$proto69["m_columns"][] = "unee_t_role_id";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "external_map_user_unit_role_permissions_level_3";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Assign Rooms";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "property_level_3_rooms";
$proto73["m_srcTableName"] = "Assign Rooms";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "system_id_room";
$proto73["m_columns"][] = "create_api_request_id";
$proto73["m_columns"][] = "edit_api_request_id";
$proto73["m_columns"][] = "external_id";
$proto73["m_columns"][] = "external_system_id";
$proto73["m_columns"][] = "external_table";
$proto73["m_columns"][] = "syst_created_datetime";
$proto73["m_columns"][] = "creation_system_id";
$proto73["m_columns"][] = "created_by_id";
$proto73["m_columns"][] = "creation_method";
$proto73["m_columns"][] = "syst_updated_datetime";
$proto73["m_columns"][] = "update_system_id";
$proto73["m_columns"][] = "updated_by_id";
$proto73["m_columns"][] = "update_method";
$proto73["m_columns"][] = "is_update_on_duplicate_key";
$proto73["m_columns"][] = "organization_id";
$proto73["m_columns"][] = "is_obsolete";
$proto73["m_columns"][] = "is_creation_needed_in_unee_t";
$proto73["m_columns"][] = "do_not_insert";
$proto73["m_columns"][] = "unee_t_unit_type";
$proto73["m_columns"][] = "l2p_external_system";
$proto73["m_columns"][] = "l2p_external_table";
$proto73["m_columns"][] = "l2p_external_id";
$proto73["m_columns"][] = "room_type_id";
$proto73["m_columns"][] = "number_of_beds";
$proto73["m_columns"][] = "surface";
$proto73["m_columns"][] = "surface_measurment_unit";
$proto73["m_columns"][] = "room_designation";
$proto73["m_columns"][] = "room_description";
$proto73["m_columns"][] = "mgt_cny_default_assignee";
$proto73["m_columns"][] = "landlord_default_assignee";
$proto73["m_columns"][] = "tenant_default_assignee";
$proto73["m_columns"][] = "agent_default_assignee";
$proto73["m_columns"][] = "system_id_unit";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN property_level_3_rooms ON external_map_user_unit_role_permissions_level_3.unee_t_level_3_id = property_level_3_rooms.system_id_room AND external_map_user_unit_role_permissions_level_3.organization_id = property_level_3_rooms.organization_id";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "Assign Rooms";
$proto74=array();
$proto74["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_level_3_id = property_level_3_rooms.system_id_room AND external_map_user_unit_role_permissions_level_3.organization_id = property_level_3_rooms.organization_id";
$proto74["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_3.unee_t_level_3_id = property_level_3_rooms.system_id_room AND external_map_user_unit_role_permissions_level_3.organization_id = property_level_3_rooms.organization_id"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
						$proto76=array();
$proto76["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_level_3_id = property_level_3_rooms.system_id_room";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_level_3_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= property_level_3_rooms.system_id_room";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

			$proto74["m_contained"][]=$obj;
						$proto78=array();
$proto78["m_sql"] = "external_map_user_unit_role_permissions_level_3.organization_id = property_level_3_rooms.organization_id";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= property_level_3_rooms.organization_id";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

			$proto74["m_contained"][]=$obj;
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto80=array();
$proto80["m_link"] = "SQLL_LEFTJOIN";
			$proto81=array();
$proto81["m_strName"] = "ut_map_external_source_users";
$proto81["m_srcTableName"] = "Assign Rooms";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "id_map";
$proto81["m_columns"][] = "create_api_request_id";
$proto81["m_columns"][] = "edit_api_request_id";
$proto81["m_columns"][] = "syst_created_datetime";
$proto81["m_columns"][] = "creation_system_id";
$proto81["m_columns"][] = "created_by_id";
$proto81["m_columns"][] = "creation_method";
$proto81["m_columns"][] = "syst_updated_datetime";
$proto81["m_columns"][] = "update_system_id";
$proto81["m_columns"][] = "updated_by_id";
$proto81["m_columns"][] = "update_method";
$proto81["m_columns"][] = "is_update_on_duplicate_key";
$proto81["m_columns"][] = "organization_id";
$proto81["m_columns"][] = "is_obsolete";
$proto81["m_columns"][] = "is_update_needed";
$proto81["m_columns"][] = "person_id";
$proto81["m_columns"][] = "mefe_user_id_parent";
$proto81["m_columns"][] = "unee_t_mefe_user_id";
$proto81["m_columns"][] = "unee_t_mefe_user_api_key";
$proto81["m_columns"][] = "uneet_created_datetime";
$proto81["m_columns"][] = "is_mefe_api_success";
$proto81["m_columns"][] = "mefe_api_error_message";
$proto81["m_columns"][] = "is_unee_t_created_by_me";
$proto81["m_columns"][] = "uneet_login_name";
$proto81["m_columns"][] = "external_person_id";
$proto81["m_columns"][] = "external_system";
$proto81["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_3.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "Assign Rooms";
$proto82=array();
$proto82["m_sql"] = "external_map_user_unit_role_permissions_level_3.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto82["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_3.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
						$proto84=array();
$proto84["m_sql"] = "external_map_user_unit_role_permissions_level_3.organization_id = ut_map_external_source_users.organization_id";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= ut_map_external_source_users.organization_id";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

			$proto82["m_contained"][]=$obj;
						$proto86=array();
$proto86["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= ut_map_external_source_users.unee_t_mefe_user_id";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

			$proto82["m_contained"][]=$obj;
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
												$proto88=array();
$proto88["m_link"] = "SQLL_LEFTJOIN";
			$proto89=array();
$proto89["m_strName"] = "ut_user_role_types";
$proto89["m_srcTableName"] = "Assign Rooms";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id_role_type";
$proto89["m_columns"][] = "syst_created_datetime";
$proto89["m_columns"][] = "creation_system_id";
$proto89["m_columns"][] = "created_by_id";
$proto89["m_columns"][] = "syst_updated_datetime";
$proto89["m_columns"][] = "update_system_id";
$proto89["m_columns"][] = "updated_by_id";
$proto89["m_columns"][] = "order";
$proto89["m_columns"][] = "is_obsolete";
$proto89["m_columns"][] = "role_type";
$proto89["m_columns"][] = "bz_description";
$proto89["m_columns"][] = "description";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_3.unee_t_role_id = ut_user_role_types.id_role_type";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "Assign Rooms";
$proto90=array();
$proto90["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_role_id = ut_user_role_types.id_role_type";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_role_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
												$proto92=array();
$proto92["m_link"] = "SQLL_INNERJOIN";
			$proto93=array();
$proto93["m_strName"] = "ut_user_types";
$proto93["m_srcTableName"] = "Assign Rooms";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id_unee_t_user_type";
$proto93["m_columns"][] = "syst_created_datetime";
$proto93["m_columns"][] = "creation_system_id";
$proto93["m_columns"][] = "created_by_id";
$proto93["m_columns"][] = "creation_method";
$proto93["m_columns"][] = "syst_updated_datetime";
$proto93["m_columns"][] = "update_system_id";
$proto93["m_columns"][] = "updated_by_id";
$proto93["m_columns"][] = "update_method";
$proto93["m_columns"][] = "organization_id";
$proto93["m_columns"][] = "order";
$proto93["m_columns"][] = "is_obsolete";
$proto93["m_columns"][] = "designation";
$proto93["m_columns"][] = "description";
$proto93["m_columns"][] = "ut_user_role_type_id";
$proto93["m_columns"][] = "is_super_admin";
$proto93["m_columns"][] = "is_all_unit";
$proto93["m_columns"][] = "is_all_units_in_country";
$proto93["m_columns"][] = "is_all_units_in_area";
$proto93["m_columns"][] = "is_all_units_in_level_1";
$proto93["m_columns"][] = "is_all_units_in_level_2";
$proto93["m_columns"][] = "is_occupant";
$proto93["m_columns"][] = "is_public";
$proto93["m_columns"][] = "is_default_assignee";
$proto93["m_columns"][] = "is_default_invited";
$proto93["m_columns"][] = "is_unit_owner";
$proto93["m_columns"][] = "is_dashboard_access";
$proto93["m_columns"][] = "can_see_role_contractor";
$proto93["m_columns"][] = "can_see_role_mgt_cny";
$proto93["m_columns"][] = "can_see_occupant";
$proto93["m_columns"][] = "can_see_role_landlord";
$proto93["m_columns"][] = "can_see_role_agent";
$proto93["m_columns"][] = "can_see_role_tenant";
$proto93["m_columns"][] = "is_assigned_to_case";
$proto93["m_columns"][] = "is_invited_to_case";
$proto93["m_columns"][] = "is_solution_updated";
$proto93["m_columns"][] = "is_next_step_updated";
$proto93["m_columns"][] = "is_deadline_updated";
$proto93["m_columns"][] = "is_case_resolved";
$proto93["m_columns"][] = "is_case_critical";
$proto93["m_columns"][] = "is_case_blocker";
$proto93["m_columns"][] = "is_message_from_contractor";
$proto93["m_columns"][] = "is_message_from_mgt_cny";
$proto93["m_columns"][] = "is_message_from_agent";
$proto93["m_columns"][] = "is_message_from_occupant";
$proto93["m_columns"][] = "is_message_from_ll";
$proto93["m_columns"][] = "is_message_from_tenant";
$proto93["m_columns"][] = "is_any_new_message";
$proto93["m_columns"][] = "is_new_ir";
$proto93["m_columns"][] = "is_new_inventory";
$proto93["m_columns"][] = "is_new_item";
$proto93["m_columns"][] = "is_item_moved";
$proto93["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_3.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_3.organization_id = ut_user_types.organization_id";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "Assign Rooms";
$proto94=array();
$proto94["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_3.organization_id = ut_user_types.organization_id";
$proto94["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_3.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_3.organization_id = ut_user_types.organization_id"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
						$proto96=array();
$proto96["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

			$proto94["m_contained"][]=$obj;
						$proto98=array();
$proto98["m_sql"] = "external_map_user_unit_role_permissions_level_3.organization_id = ut_user_types.organization_id";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= ut_user_types.organization_id";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

			$proto94["m_contained"][]=$obj;
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
												$proto100=array();
$proto100["m_link"] = "SQLL_LEFTJOIN";
			$proto101=array();
$proto101["m_strName"] = "property_level_2_units";
$proto101["m_srcTableName"] = "Assign Rooms";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "system_id_unit";
$proto101["m_columns"][] = "create_api_request_id";
$proto101["m_columns"][] = "edit_api_request_id";
$proto101["m_columns"][] = "external_id";
$proto101["m_columns"][] = "external_system_id";
$proto101["m_columns"][] = "external_table";
$proto101["m_columns"][] = "syst_created_datetime";
$proto101["m_columns"][] = "creation_system_id";
$proto101["m_columns"][] = "created_by_id";
$proto101["m_columns"][] = "creation_method";
$proto101["m_columns"][] = "syst_updated_datetime";
$proto101["m_columns"][] = "update_system_id";
$proto101["m_columns"][] = "updated_by_id";
$proto101["m_columns"][] = "update_method";
$proto101["m_columns"][] = "is_update_on_duplicate_key";
$proto101["m_columns"][] = "organization_id";
$proto101["m_columns"][] = "activated_by_id";
$proto101["m_columns"][] = "is_obsolete";
$proto101["m_columns"][] = "is_creation_needed_in_unee_t";
$proto101["m_columns"][] = "do_not_insert";
$proto101["m_columns"][] = "unee_t_unit_type";
$proto101["m_columns"][] = "l1p_external_system";
$proto101["m_columns"][] = "l1p_external_table";
$proto101["m_columns"][] = "l1p_external_id";
$proto101["m_columns"][] = "tower";
$proto101["m_columns"][] = "unit_category_id";
$proto101["m_columns"][] = "designation";
$proto101["m_columns"][] = "count_rooms";
$proto101["m_columns"][] = "unit_id";
$proto101["m_columns"][] = "surface";
$proto101["m_columns"][] = "surface_measurment_unit";
$proto101["m_columns"][] = "description";
$proto101["m_columns"][] = "mgt_cny_default_assignee";
$proto101["m_columns"][] = "landlord_default_assignee";
$proto101["m_columns"][] = "tenant_default_assignee";
$proto101["m_columns"][] = "agent_default_assignee";
$proto101["m_columns"][] = "building_system_id";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "LEFT OUTER JOIN property_level_2_units ON property_level_3_rooms.external_id = property_level_2_units.l1p_external_id AND property_level_3_rooms.organization_id = property_level_2_units.organization_id AND property_level_3_rooms.external_system_id = property_level_2_units.l1p_external_system AND property_level_3_rooms.external_table = property_level_2_units.l1p_external_table";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "Assign Rooms";
$proto102=array();
$proto102["m_sql"] = "property_level_3_rooms.external_id = property_level_2_units.l1p_external_id AND property_level_3_rooms.organization_id = property_level_2_units.organization_id AND property_level_3_rooms.external_system_id = property_level_2_units.l1p_external_system AND property_level_3_rooms.external_table = property_level_2_units.l1p_external_table";
$proto102["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "property_level_3_rooms.external_id = property_level_2_units.l1p_external_id AND property_level_3_rooms.organization_id = property_level_2_units.organization_id AND property_level_3_rooms.external_system_id = property_level_2_units.l1p_external_system AND property_level_3_rooms.external_table = property_level_2_units.l1p_external_table"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
						$proto104=array();
$proto104["m_sql"] = "property_level_3_rooms.external_id = property_level_2_units.l1p_external_id";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Assign Rooms"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= property_level_2_units.l1p_external_id";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

			$proto102["m_contained"][]=$obj;
						$proto106=array();
$proto106["m_sql"] = "property_level_3_rooms.organization_id = property_level_2_units.organization_id";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Assign Rooms"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= property_level_2_units.organization_id";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

			$proto102["m_contained"][]=$obj;
						$proto108=array();
$proto108["m_sql"] = "property_level_3_rooms.external_system_id = property_level_2_units.l1p_external_system";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Assign Rooms"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= property_level_2_units.l1p_external_system";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

			$proto102["m_contained"][]=$obj;
						$proto110=array();
$proto110["m_sql"] = "property_level_3_rooms.external_table = property_level_2_units.l1p_external_table";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Assign Rooms"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= property_level_2_units.l1p_external_table";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

			$proto102["m_contained"][]=$obj;
$proto102["m_strCase"] = "";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_LEFTJOIN";
			$proto113=array();
$proto113["m_strName"] = "property_level_1_buildings";
$proto113["m_srcTableName"] = "Assign Rooms";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id_building";
$proto113["m_columns"][] = "create_api_request_id";
$proto113["m_columns"][] = "edit_api_request_id";
$proto113["m_columns"][] = "external_id";
$proto113["m_columns"][] = "external_system_id";
$proto113["m_columns"][] = "external_table";
$proto113["m_columns"][] = "syst_created_datetime";
$proto113["m_columns"][] = "creation_system_id";
$proto113["m_columns"][] = "created_by_id";
$proto113["m_columns"][] = "creation_method";
$proto113["m_columns"][] = "syst_updated_datetime";
$proto113["m_columns"][] = "update_system_id";
$proto113["m_columns"][] = "updated_by_id";
$proto113["m_columns"][] = "update_method";
$proto113["m_columns"][] = "is_update_on_duplicate_key";
$proto113["m_columns"][] = "organization_id";
$proto113["m_columns"][] = "is_obsolete";
$proto113["m_columns"][] = "order";
$proto113["m_columns"][] = "is_creation_needed_in_unee_t";
$proto113["m_columns"][] = "do_not_insert";
$proto113["m_columns"][] = "unee_t_unit_type";
$proto113["m_columns"][] = "area_external_system";
$proto113["m_columns"][] = "area_external_table";
$proto113["m_columns"][] = "area_external_id";
$proto113["m_columns"][] = "designation";
$proto113["m_columns"][] = "tower";
$proto113["m_columns"][] = "address_1";
$proto113["m_columns"][] = "address_2";
$proto113["m_columns"][] = "zip_postal_code";
$proto113["m_columns"][] = "state";
$proto113["m_columns"][] = "city";
$proto113["m_columns"][] = "country_code";
$proto113["m_columns"][] = "description";
$proto113["m_columns"][] = "mgt_cny_default_assignee";
$proto113["m_columns"][] = "landlord_default_assignee";
$proto113["m_columns"][] = "tenant_default_assignee";
$proto113["m_columns"][] = "agent_default_assignee";
$proto113["m_columns"][] = "area_id";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "LEFT OUTER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "Assign Rooms";
$proto114=array();
$proto114["m_sql"] = "property_level_2_units.building_system_id = property_level_1_buildings.id_building";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Assign Rooms"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "= property_level_1_buildings.id_building";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
												$proto116=array();
$proto116["m_link"] = "SQLL_LEFTJOIN";
			$proto117=array();
$proto117["m_strName"] = "property_groups_areas";
$proto117["m_srcTableName"] = "Assign Rooms";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "id_area";
$proto117["m_columns"][] = "create_api_request_id";
$proto117["m_columns"][] = "edit_api_request_id";
$proto117["m_columns"][] = "external_id";
$proto117["m_columns"][] = "external_system_id";
$proto117["m_columns"][] = "external_table";
$proto117["m_columns"][] = "syst_created_datetime";
$proto117["m_columns"][] = "creation_system_id";
$proto117["m_columns"][] = "created_by_id";
$proto117["m_columns"][] = "creation_method";
$proto117["m_columns"][] = "syst_updated_datetime";
$proto117["m_columns"][] = "update_system_id";
$proto117["m_columns"][] = "updated_by_id";
$proto117["m_columns"][] = "update_method";
$proto117["m_columns"][] = "is_update_on_duplicate_key";
$proto117["m_columns"][] = "is_creation_needed_in_unee_t";
$proto117["m_columns"][] = "organization_id";
$proto117["m_columns"][] = "country_code";
$proto117["m_columns"][] = "is_obsolete";
$proto117["m_columns"][] = "is_default";
$proto117["m_columns"][] = "order";
$proto117["m_columns"][] = "area_name";
$proto117["m_columns"][] = "area_definition";
$proto117["m_columns"][] = "mgt_cny_default_assignee";
$proto117["m_columns"][] = "landlord_default_assignee";
$proto117["m_columns"][] = "tenant_default_assignee";
$proto117["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_external_id = property_groups_areas.external_id AND property_level_1_buildings.area_external_table = property_groups_areas.external_table AND property_level_1_buildings.organization_id = property_groups_areas.organization_id";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "Assign Rooms";
$proto118=array();
$proto118["m_sql"] = "property_level_1_buildings.area_external_id = property_groups_areas.external_id AND property_level_1_buildings.area_external_table = property_groups_areas.external_table AND property_level_1_buildings.organization_id = property_groups_areas.organization_id";
$proto118["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "property_level_1_buildings.area_external_id = property_groups_areas.external_id AND property_level_1_buildings.area_external_table = property_groups_areas.external_table AND property_level_1_buildings.organization_id = property_groups_areas.organization_id"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
						$proto120=array();
$proto120["m_sql"] = "property_level_1_buildings.area_external_id = property_groups_areas.external_id";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_external_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "= property_groups_areas.external_id";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

			$proto118["m_contained"][]=$obj;
						$proto122=array();
$proto122["m_sql"] = "property_level_1_buildings.area_external_table = property_groups_areas.external_table";
$proto122["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_external_table",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto122["m_column"]=$obj;
$proto122["m_contained"] = array();
$proto122["m_strCase"] = "= property_groups_areas.external_table";
$proto122["m_havingmode"] = false;
$proto122["m_inBrackets"] = false;
$proto122["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto122);

			$proto118["m_contained"][]=$obj;
						$proto124=array();
$proto124["m_sql"] = "property_level_1_buildings.organization_id = property_groups_areas.organization_id";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "= property_groups_areas.organization_id";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

			$proto118["m_contained"][]=$obj;
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
												$proto126=array();
$proto126["m_link"] = "SQLL_LEFTJOIN";
			$proto127=array();
$proto127["m_strName"] = "ut_check_unee_t_update_add_user_to_unit_level_3";
$proto127["m_srcTableName"] = "Assign Rooms";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "id_map_user_unit_permissions_level_3";
$proto127["m_columns"][] = "external_property_type_id";
$proto127["m_columns"][] = "uneet_name";
$proto127["m_columns"][] = "unee_t_mefe_user_id";
$proto127["m_columns"][] = "unee_t_mefe_unit_id";
$proto127["m_columns"][] = "unee_t_update_ts";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_3 ON external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3 = ut_check_unee_t_update_add_user_to_unit_level_3.id_map_user_unit_permissions_level_3";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "Assign Rooms";
$proto128=array();
$proto128["m_sql"] = "external_map_user_unit_role_permissions_level_3.id_map_user_unit_permissions_level_3 = ut_check_unee_t_update_add_user_to_unit_level_3.id_map_user_unit_permissions_level_3";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_map_user_unit_permissions_level_3",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= ut_check_unee_t_update_add_user_to_unit_level_3.id_map_user_unit_permissions_level_3";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
												$proto130=array();
$proto130["m_link"] = "SQLL_LEFTJOIN";
			$proto131=array();
$proto131["m_strName"] = "property_groups_countries";
$proto131["m_srcTableName"] = "Assign Rooms";
$proto131["m_columns"] = array();
$proto131["m_columns"][] = "id_country";
$proto131["m_columns"][] = "syst_created_datetime";
$proto131["m_columns"][] = "creation_system_id";
$proto131["m_columns"][] = "created_by_id";
$proto131["m_columns"][] = "syst_updated_datetime";
$proto131["m_columns"][] = "update_system_id";
$proto131["m_columns"][] = "updated_by_id";
$proto131["m_columns"][] = "is_obsolete";
$proto131["m_columns"][] = "is_default";
$proto131["m_columns"][] = "is_system";
$proto131["m_columns"][] = "order";
$proto131["m_columns"][] = "country_code";
$proto131["m_columns"][] = "country_name";
$obj = new SQLTable($proto131);

$proto130["m_table"] = $obj;
$proto130["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto130["m_alias"] = "";
$proto130["m_srcTableName"] = "Assign Rooms";
$proto132=array();
$proto132["m_sql"] = "property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Rooms"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= property_groups_countries.country_code";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto130["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto130);

$proto0["m_fromlist"][]=$obj;
												$proto134=array();
$proto134["m_link"] = "SQLL_LEFTJOIN";
			$proto135=array();
$proto135["m_strName"] = "ut_info_mefe_users";
$proto135["m_srcTableName"] = "Assign Rooms";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "id_person";
$proto135["m_columns"][] = "unee_t_mefe_user_id";
$proto135["m_columns"][] = "external_person_id";
$proto135["m_columns"][] = "external_system";
$proto135["m_columns"][] = "table_in_external_system";
$proto135["m_columns"][] = "organization_id";
$proto135["m_columns"][] = "uneet_login_name";
$proto135["m_columns"][] = "name";
$proto135["m_columns"][] = "email";
$obj = new SQLTable($proto135);

$proto134["m_table"] = $obj;
$proto134["m_sql"] = "LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "Assign Rooms";
$proto136=array();
$proto136["m_sql"] = "external_map_user_unit_role_permissions_level_3.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_3",
	"m_srcTableName" => "Assign Rooms"
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "= ut_info_mefe_users.unee_t_mefe_user_id";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto134["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto134);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Assign Rooms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Assign_Rooms = createSqlQuery_Assign_Rooms();


	
					
;

																															

$tdataAssign_Rooms[".sqlquery"] = $queryData_Assign_Rooms;

include_once(getabspath("include/Assign_Rooms_events.php"));
$tableEvents["Assign Rooms"] = new eventclass_Assign_Rooms;
$tdataAssign_Rooms[".hasEvents"] = true;

?>