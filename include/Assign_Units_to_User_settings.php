<?php




$tdataAssign_Units_to_User = array();
$tdataAssign_Units_to_User[".searchableFields"] = array();
	$tdataAssign_Units_to_User[".truncateText"] = true;
	$tdataAssign_Units_to_User[".NumberOfChars"] = 80;
	$tdataAssign_Units_to_User[".ShortName"] = "Assign_Units_to_User";
	$tdataAssign_Units_to_User[".OwnerID"] = "organization_id";
	$tdataAssign_Units_to_User[".OriginalTable"] = "external_map_user_unit_role_permissions_level_2";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataAssign_Units_to_User[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataAssign_Units_to_User[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsAssign_Units_to_User = array();
$fieldToolTipsAssign_Units_to_User = array();
$pageTitlesAssign_Units_to_User = array();
$placeHoldersAssign_Units_to_User = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsAssign_Units_to_User["English"] = array();
	$fieldToolTipsAssign_Units_to_User["English"] = array();
	$placeHoldersAssign_Units_to_User["English"] = array();
	$pageTitlesAssign_Units_to_User["English"] = array();
	$fieldLabelsAssign_Units_to_User["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsAssign_Units_to_User["English"]["syst_created_datetime"] = "";
	$placeHoldersAssign_Units_to_User["English"]["syst_created_datetime"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsAssign_Units_to_User["English"]["creation_system_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["creation_system_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsAssign_Units_to_User["English"]["created_by_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["created_by_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsAssign_Units_to_User["English"]["creation_method"] = "";
	$placeHoldersAssign_Units_to_User["English"]["creation_method"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsAssign_Units_to_User["English"]["syst_updated_datetime"] = "";
	$placeHoldersAssign_Units_to_User["English"]["syst_updated_datetime"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsAssign_Units_to_User["English"]["update_system_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["update_system_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsAssign_Units_to_User["English"]["updated_by_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["updated_by_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["update_method"] = "Update Method";
	$fieldToolTipsAssign_Units_to_User["English"]["update_method"] = "";
	$placeHoldersAssign_Units_to_User["English"]["update_method"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsAssign_Units_to_User["English"]["organization_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["organization_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsAssign_Units_to_User["English"]["is_obsolete"] = "";
	$placeHoldersAssign_Units_to_User["English"]["is_obsolete"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["is_update_needed"] = "Is Update Needed";
	$fieldToolTipsAssign_Units_to_User["English"]["is_update_needed"] = "";
	$placeHoldersAssign_Units_to_User["English"]["is_update_needed"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unee_t_update_ts"] = "Unee-T Update";
	$fieldToolTipsAssign_Units_to_User["English"]["unee_t_update_ts"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unee_t_update_ts"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unee_t_mefe_user_id"] = "Unee-T User";
	$fieldToolTipsAssign_Units_to_User["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unee_t_role_id"] = "Role";
	$fieldToolTipsAssign_Units_to_User["English"]["unee_t_role_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unee_t_role_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["person_id"] = "User";
	$fieldToolTipsAssign_Units_to_User["English"]["person_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["person_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["user_role"] = "Role";
	$fieldToolTipsAssign_Units_to_User["English"]["user_role"] = "";
	$placeHoldersAssign_Units_to_User["English"]["user_role"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["user_type"] = "User Type";
	$fieldToolTipsAssign_Units_to_User["English"]["user_type"] = "";
	$placeHoldersAssign_Units_to_User["English"]["user_type"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unee_t_user_type_id"] = "User Type";
	$fieldToolTipsAssign_Units_to_User["English"]["unee_t_user_type_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["propagate_level_3"] = "All Rooms";
	$fieldToolTipsAssign_Units_to_User["English"]["propagate_level_3"] = "";
	$placeHoldersAssign_Units_to_User["English"]["propagate_level_3"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["building_name"] = "Building";
	$fieldToolTipsAssign_Units_to_User["English"]["building_name"] = "";
	$placeHoldersAssign_Units_to_User["English"]["building_name"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["area_id"] = "Area";
	$fieldToolTipsAssign_Units_to_User["English"]["area_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["area_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["area_name"] = "Area";
	$fieldToolTipsAssign_Units_to_User["English"]["area_name"] = "";
	$placeHoldersAssign_Units_to_User["English"]["area_name"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["id_map_user_unit_permissions_level_2"] = "Id Map User Unit Permissions Level 2";
	$fieldToolTipsAssign_Units_to_User["English"]["id_map_user_unit_permissions_level_2"] = "";
	$placeHoldersAssign_Units_to_User["English"]["id_map_user_unit_permissions_level_2"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["id_building"] = "Building";
	$fieldToolTipsAssign_Units_to_User["English"]["id_building"] = "";
	$placeHoldersAssign_Units_to_User["English"]["id_building"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unee_t_level_2_id"] = "Unit";
	$fieldToolTipsAssign_Units_to_User["English"]["unee_t_level_2_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unee_t_level_2_id"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unit_name"] = "Unit";
	$fieldToolTipsAssign_Units_to_User["English"]["unit_name"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unit_name"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["country_code"] = "Country Code";
	$fieldToolTipsAssign_Units_to_User["English"]["country_code"] = "";
	$placeHoldersAssign_Units_to_User["English"]["country_code"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["country_name"] = "Country Name";
	$fieldToolTipsAssign_Units_to_User["English"]["country_name"] = "";
	$placeHoldersAssign_Units_to_User["English"]["country_name"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["name"] = "User Name";
	$fieldToolTipsAssign_Units_to_User["English"]["name"] = "";
	$placeHoldersAssign_Units_to_User["English"]["name"] = "";
	$fieldLabelsAssign_Units_to_User["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsAssign_Units_to_User["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersAssign_Units_to_User["English"]["unee_t_mefe_unit_id"] = "";
	if (count($fieldToolTipsAssign_Units_to_User["English"]))
		$tdataAssign_Units_to_User[".isUseToolTips"] = true;
}


	$tdataAssign_Units_to_User[".NCSearch"] = true;



$tdataAssign_Units_to_User[".shortTableName"] = "Assign_Units_to_User";
$tdataAssign_Units_to_User[".nSecOptions"] = 1;

$tdataAssign_Units_to_User[".mainTableOwnerID"] = "organization_id";
$tdataAssign_Units_to_User[".entityType"] = 1;

$tdataAssign_Units_to_User[".strOriginalTableName"] = "external_map_user_unit_role_permissions_level_2";

		 



$tdataAssign_Units_to_User[".showAddInPopup"] = false;

$tdataAssign_Units_to_User[".showEditInPopup"] = false;

$tdataAssign_Units_to_User[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataAssign_Units_to_User[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataAssign_Units_to_User[".listAjax"] = true;
//	temporary
$tdataAssign_Units_to_User[".listAjax"] = false;

	$tdataAssign_Units_to_User[".audit"] = false;

	$tdataAssign_Units_to_User[".locking"] = false;


$pages = $tdataAssign_Units_to_User[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataAssign_Units_to_User[".edit"] = true;
	$tdataAssign_Units_to_User[".afterEditAction"] = 1;
	$tdataAssign_Units_to_User[".closePopupAfterEdit"] = 1;
	$tdataAssign_Units_to_User[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataAssign_Units_to_User[".add"] = true;
$tdataAssign_Units_to_User[".afterAddAction"] = 0;
$tdataAssign_Units_to_User[".closePopupAfterAdd"] = 1;
$tdataAssign_Units_to_User[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataAssign_Units_to_User[".list"] = true;
}



$tdataAssign_Units_to_User[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataAssign_Units_to_User[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataAssign_Units_to_User[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataAssign_Units_to_User[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataAssign_Units_to_User[".printFriendly"] = true;
}



$tdataAssign_Units_to_User[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataAssign_Units_to_User[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataAssign_Units_to_User[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataAssign_Units_to_User[".isUseAjaxSuggest"] = true;

$tdataAssign_Units_to_User[".rowHighlite"] = true;





$tdataAssign_Units_to_User[".ajaxCodeSnippetAdded"] = false;

$tdataAssign_Units_to_User[".buttonsAdded"] = false;

$tdataAssign_Units_to_User[".addPageEvents"] = false;

// use timepicker for search panel
$tdataAssign_Units_to_User[".isUseTimeForSearch"] = false;


$tdataAssign_Units_to_User[".badgeColor"] = "002f6c";


$tdataAssign_Units_to_User[".allSearchFields"] = array();
$tdataAssign_Units_to_User[".filterFields"] = array();
$tdataAssign_Units_to_User[".requiredSearchFields"] = array();

$tdataAssign_Units_to_User[".googleLikeFields"] = array();
$tdataAssign_Units_to_User[".googleLikeFields"][] = "id_map_user_unit_permissions_level_2";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "area_name";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "id_building";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "building_name";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "unee_t_level_2_id";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "unit_name";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "user_role";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "user_type";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "country_code";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "country_name";
$tdataAssign_Units_to_User[".googleLikeFields"][] = "name";



$tdataAssign_Units_to_User[".tableType"] = "list";

$tdataAssign_Units_to_User[".printerPageOrientation"] = 0;
$tdataAssign_Units_to_User[".nPrinterPageScale"] = 100;

$tdataAssign_Units_to_User[".nPrinterSplitRecords"] = 40;

$tdataAssign_Units_to_User[".nPrinterPDFSplitRecords"] = 40;


$tdataAssign_Units_to_User[".geocodingEnabled"] = false;





$tdataAssign_Units_to_User[".isResizeColumns"] = true;





$tdataAssign_Units_to_User[".pageSize"] = 50;

$tdataAssign_Units_to_User[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataAssign_Units_to_User[".strOrderBy"] = $tstrOrderBy;

$tdataAssign_Units_to_User[".orderindexes"] = array();

$tdataAssign_Units_to_User[".sqlHead"] = "SELECT external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2,  external_map_user_unit_role_permissions_level_2.syst_created_datetime,  external_map_user_unit_role_permissions_level_2.creation_system_id,  external_map_user_unit_role_permissions_level_2.created_by_id,  external_map_user_unit_role_permissions_level_2.creation_method,  external_map_user_unit_role_permissions_level_2.syst_updated_datetime,  external_map_user_unit_role_permissions_level_2.update_system_id,  external_map_user_unit_role_permissions_level_2.updated_by_id,  external_map_user_unit_role_permissions_level_2.update_method,  external_map_user_unit_role_permissions_level_2.organization_id,  external_map_user_unit_role_permissions_level_2.is_obsolete,  external_map_user_unit_role_permissions_level_2.is_update_needed,  external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  property_level_1_buildings.id_building,  property_level_1_buildings.designation AS building_name,  external_map_user_unit_role_permissions_level_2.unee_t_level_2_id,  property_level_2_units.designation AS unit_name,  ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_mefe_unit_id,  ut_map_external_source_users.person_id,  external_map_user_unit_role_permissions_level_2.unee_t_role_id,  ut_user_role_types.role_type AS user_role,  external_map_user_unit_role_permissions_level_2.unee_t_user_type_id,  ut_user_types.designation AS user_type,  external_map_user_unit_role_permissions_level_2.propagate_level_3,  ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_update_ts,  property_level_1_buildings.country_code,  property_groups_countries.country_name,  ut_info_mefe_users.name";
$tdataAssign_Units_to_User[".sqlFrom"] = "FROM external_map_user_unit_role_permissions_level_2  LEFT OUTER JOIN property_level_2_units ON external_map_user_unit_role_permissions_level_2.unee_t_level_2_id = property_level_2_units.system_id_unit AND external_map_user_unit_role_permissions_level_2.organization_id = property_level_2_units.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_2.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_2.unee_t_role_id = ut_user_role_types.id_role_type  INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_2.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_2.organization_id = ut_user_types.organization_id  LEFT OUTER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_2 ON external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2 = ut_check_unee_t_update_add_user_to_unit_level_2.id_map_user_unit_permissions_level_2  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$tdataAssign_Units_to_User[".sqlWhereExpr"] = "";
$tdataAssign_Units_to_User[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataAssign_Units_to_User[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataAssign_Units_to_User[".arrGroupsPerPage"] = $arrGPP;

$tdataAssign_Units_to_User[".highlightSearchResults"] = true;

$tableKeysAssign_Units_to_User = array();
$tableKeysAssign_Units_to_User[] = "organization_id";
$tableKeysAssign_Units_to_User[] = "unee_t_mefe_user_id";
$tableKeysAssign_Units_to_User[] = "unee_t_level_2_id";
$tableKeysAssign_Units_to_User[] = "unee_t_user_type_id";
$tdataAssign_Units_to_User[".Keys"] = $tableKeysAssign_Units_to_User;


$tdataAssign_Units_to_User[".hideMobileList"] = array();




//	id_map_user_unit_permissions_level_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map_user_unit_permissions_level_2";
	$fdata["GoodName"] = "id_map_user_unit_permissions_level_2";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","id_map_user_unit_permissions_level_2");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map_user_unit_permissions_level_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2";

	
	
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


	$tdataAssign_Units_to_User["id_map_user_unit_permissions_level_2"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "id_map_user_unit_permissions_level_2";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.syst_created_datetime";

	
	
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


	$tdataAssign_Units_to_User["syst_created_datetime"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.creation_system_id";

	
	
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


	$tdataAssign_Units_to_User["creation_system_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.created_by_id";

	
	
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


	$tdataAssign_Units_to_User["created_by_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.creation_method";

	
	
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


	$tdataAssign_Units_to_User["creation_method"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.syst_updated_datetime";

	
	
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


	$tdataAssign_Units_to_User["syst_updated_datetime"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.update_system_id";

	
	
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


	$tdataAssign_Units_to_User["update_system_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.updated_by_id";

	
	
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


	$tdataAssign_Units_to_User["updated_by_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.update_method";

	
	
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


	$tdataAssign_Units_to_User["update_method"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.organization_id";

	
	
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


	$tdataAssign_Units_to_User["organization_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "organization_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.is_obsolete";

	
	
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


	$tdataAssign_Units_to_User["is_obsolete"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "is_obsolete";
//	is_update_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_update_needed";
	$fdata["GoodName"] = "is_update_needed";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","is_update_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_update_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.is_update_needed";

	
	
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


	$tdataAssign_Units_to_User["is_update_needed"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "is_update_needed";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id";

	
	
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

				$edata["LookupWhereCode"] = true;


	
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

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "unee_t_user_type_id", "lookup" => "unee_t_user_type_id" );

	
	

	
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


	$tdataAssign_Units_to_User["unee_t_mefe_user_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unee_t_mefe_user_id";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","area_id");
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


	$tdataAssign_Units_to_User["area_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","area_name");
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


	$tdataAssign_Units_to_User["area_name"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "area_name";
//	id_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "id_building";
	$fdata["GoodName"] = "id_building";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","id_building");
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


	$tdataAssign_Units_to_User["id_building"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "id_building";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","building_name");
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


	$tdataAssign_Units_to_User["building_name"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "building_name";
//	unee_t_level_2_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "unee_t_level_2_id";
	$fdata["GoodName"] = "unee_t_level_2_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unee_t_level_2_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_level_2_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.unee_t_level_2_id";

	
	
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
	$edata["LookupTable"] = "Search Units";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "system_id_unit";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "unit_name";

	

	
	$edata["LookupOrderBy"] = "unit_name";

	
	
	
	

	
	
	
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


	$tdataAssign_Units_to_User["unee_t_level_2_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unee_t_level_2_id";
//	unit_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "unit_name";
	$fdata["GoodName"] = "unit_name";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unit_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_2_units.designation";

	
	
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


	$tdataAssign_Units_to_User["unit_name"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unit_name";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_check_unee_t_update_add_user_to_unit_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_mefe_unit_id";

	
	
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


	$tdataAssign_Units_to_User["unee_t_mefe_unit_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unee_t_mefe_unit_id";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","person_id");
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
	$edata["LookupTable"] = "Search Users";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "person_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "unee_t_user_type_id", "lookup" => "unee_t_user_type_id" );

	
	

	
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


	$tdataAssign_Units_to_User["person_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "person_id";
//	unee_t_role_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "unee_t_role_id";
	$fdata["GoodName"] = "unee_t_role_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unee_t_role_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_role_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.unee_t_role_id";

	
	
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


	$tdataAssign_Units_to_User["unee_t_role_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unee_t_role_id";
//	user_role
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "user_role";
	$fdata["GoodName"] = "user_role";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","user_role");
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


	$tdataAssign_Units_to_User["user_role"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "user_role";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.unee_t_user_type_id";

	
	
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
				$edata["DependentLookups"][] = "unee_t_mefe_user_id";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "person_id";

	
	
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


	$tdataAssign_Units_to_User["unee_t_user_type_id"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unee_t_user_type_id";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","user_type");
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


	$tdataAssign_Units_to_User["user_type"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "user_type";
//	propagate_level_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "propagate_level_3";
	$fdata["GoodName"] = "propagate_level_3";
	$fdata["ownerTable"] = "external_map_user_unit_role_permissions_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","propagate_level_3");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "propagate_level_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_map_user_unit_role_permissions_level_2.propagate_level_3";

	
	
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


	$tdataAssign_Units_to_User["propagate_level_3"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "propagate_level_3";
//	unee_t_update_ts
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "unee_t_update_ts";
	$fdata["GoodName"] = "unee_t_update_ts";
	$fdata["ownerTable"] = "ut_check_unee_t_update_add_user_to_unit_level_2";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","unee_t_update_ts");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "unee_t_update_ts";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_update_ts";

	
	
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


	$tdataAssign_Units_to_User["unee_t_update_ts"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "unee_t_update_ts";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","country_code");
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

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "area_id";

	
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


	$tdataAssign_Units_to_User["country_code"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","country_name");
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


	$tdataAssign_Units_to_User["country_name"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "country_name";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "ut_info_mefe_users";
	$fdata["Label"] = GetFieldLabel("Assign_Units_to_User","name");
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


	$tdataAssign_Units_to_User["name"] = $fdata;
		$tdataAssign_Units_to_User[".searchableFields"][] = "name";


$tables_data["Assign Units to User"]=&$tdataAssign_Units_to_User;
$field_labels["Assign_Units_to_User"] = &$fieldLabelsAssign_Units_to_User;
$fieldToolTips["Assign_Units_to_User"] = &$fieldToolTipsAssign_Units_to_User;
$placeHolders["Assign_Units_to_User"] = &$placeHoldersAssign_Units_to_User;
$page_titles["Assign_Units_to_User"] = &$pageTitlesAssign_Units_to_User;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Assign Units to User"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Assign Units to User"] = array();



	
				$strOriginalDetailsTable="external_property_level_2_units";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Units";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Units";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Assign Units to User"][0] = $masterParams;
				$masterTablesData["Assign Units to User"][0]["masterKeys"] = array();
	$masterTablesData["Assign Units to User"][0]["masterKeys"][]="unee_t_mefe_unit_id";
				$masterTablesData["Assign Units to User"][0]["detailKeys"] = array();
	$masterTablesData["Assign Units to User"][0]["detailKeys"][]="unee_t_mefe_unit_id";
		
	
				$strOriginalDetailsTable="external_persons";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Unee-T Users";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Unee_T_Users";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Assign Units to User"][1] = $masterParams;
				$masterTablesData["Assign Units to User"][1]["masterKeys"] = array();
	$masterTablesData["Assign Units to User"][1]["masterKeys"][]="unee_t_mefe_user_id";
				$masterTablesData["Assign Units to User"][1]["detailKeys"] = array();
	$masterTablesData["Assign Units to User"][1]["detailKeys"][]="unee_t_mefe_user_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Assign_Units_to_User()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2,  external_map_user_unit_role_permissions_level_2.syst_created_datetime,  external_map_user_unit_role_permissions_level_2.creation_system_id,  external_map_user_unit_role_permissions_level_2.created_by_id,  external_map_user_unit_role_permissions_level_2.creation_method,  external_map_user_unit_role_permissions_level_2.syst_updated_datetime,  external_map_user_unit_role_permissions_level_2.update_system_id,  external_map_user_unit_role_permissions_level_2.updated_by_id,  external_map_user_unit_role_permissions_level_2.update_method,  external_map_user_unit_role_permissions_level_2.organization_id,  external_map_user_unit_role_permissions_level_2.is_obsolete,  external_map_user_unit_role_permissions_level_2.is_update_needed,  external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  property_level_1_buildings.id_building,  property_level_1_buildings.designation AS building_name,  external_map_user_unit_role_permissions_level_2.unee_t_level_2_id,  property_level_2_units.designation AS unit_name,  ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_mefe_unit_id,  ut_map_external_source_users.person_id,  external_map_user_unit_role_permissions_level_2.unee_t_role_id,  ut_user_role_types.role_type AS user_role,  external_map_user_unit_role_permissions_level_2.unee_t_user_type_id,  ut_user_types.designation AS user_type,  external_map_user_unit_role_permissions_level_2.propagate_level_3,  ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_update_ts,  property_level_1_buildings.country_code,  property_groups_countries.country_name,  ut_info_mefe_users.name";
$proto0["m_strFrom"] = "FROM external_map_user_unit_role_permissions_level_2  LEFT OUTER JOIN property_level_2_units ON external_map_user_unit_role_permissions_level_2.unee_t_level_2_id = property_level_2_units.system_id_unit AND external_map_user_unit_role_permissions_level_2.organization_id = property_level_2_units.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_2.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id  LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_2.unee_t_role_id = ut_user_role_types.id_role_type  INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_2.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_2.organization_id = ut_user_types.organization_id  LEFT OUTER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_2 ON external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2 = ut_check_unee_t_update_add_user_to_unit_level_2.id_map_user_unit_permissions_level_2  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
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
	"m_strName" => "id_map_user_unit_permissions_level_2",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto6["m_sql"] = "external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2";
$proto6["m_srcTableName"] = "Assign Units to User";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto8["m_sql"] = "external_map_user_unit_role_permissions_level_2.syst_created_datetime";
$proto8["m_srcTableName"] = "Assign Units to User";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto10["m_sql"] = "external_map_user_unit_role_permissions_level_2.creation_system_id";
$proto10["m_srcTableName"] = "Assign Units to User";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto12["m_sql"] = "external_map_user_unit_role_permissions_level_2.created_by_id";
$proto12["m_srcTableName"] = "Assign Units to User";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto14["m_sql"] = "external_map_user_unit_role_permissions_level_2.creation_method";
$proto14["m_srcTableName"] = "Assign Units to User";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto16["m_sql"] = "external_map_user_unit_role_permissions_level_2.syst_updated_datetime";
$proto16["m_srcTableName"] = "Assign Units to User";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto18["m_sql"] = "external_map_user_unit_role_permissions_level_2.update_system_id";
$proto18["m_srcTableName"] = "Assign Units to User";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto20["m_sql"] = "external_map_user_unit_role_permissions_level_2.updated_by_id";
$proto20["m_srcTableName"] = "Assign Units to User";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto22["m_sql"] = "external_map_user_unit_role_permissions_level_2.update_method";
$proto22["m_srcTableName"] = "Assign Units to User";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto24["m_sql"] = "external_map_user_unit_role_permissions_level_2.organization_id";
$proto24["m_srcTableName"] = "Assign Units to User";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto26["m_sql"] = "external_map_user_unit_role_permissions_level_2.is_obsolete";
$proto26["m_srcTableName"] = "Assign Units to User";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_needed",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto28["m_sql"] = "external_map_user_unit_role_permissions_level_2.is_update_needed";
$proto28["m_srcTableName"] = "Assign Units to User";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto30["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id";
$proto30["m_srcTableName"] = "Assign Units to User";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Units to User"
));

$proto32["m_sql"] = "property_level_1_buildings.area_id";
$proto32["m_srcTableName"] = "Assign Units to User";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Assign Units to User"
));

$proto34["m_sql"] = "property_groups_areas.area_name";
$proto34["m_srcTableName"] = "Assign Units to User";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "id_building",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Units to User"
));

$proto36["m_sql"] = "property_level_1_buildings.id_building";
$proto36["m_srcTableName"] = "Assign Units to User";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Units to User"
));

$proto38["m_sql"] = "property_level_1_buildings.designation";
$proto38["m_srcTableName"] = "Assign Units to User";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_level_2_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto40["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_level_2_id";
$proto40["m_srcTableName"] = "Assign Units to User";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Assign Units to User"
));

$proto42["m_sql"] = "property_level_2_units.designation";
$proto42["m_srcTableName"] = "Assign Units to User";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "unit_name";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_check_unee_t_update_add_user_to_unit_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto44["m_sql"] = "ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_mefe_unit_id";
$proto44["m_srcTableName"] = "Assign Units to User";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Assign Units to User"
));

$proto46["m_sql"] = "ut_map_external_source_users.person_id";
$proto46["m_srcTableName"] = "Assign Units to User";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_role_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto48["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_role_id";
$proto48["m_srcTableName"] = "Assign Units to User";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Assign Units to User"
));

$proto50["m_sql"] = "ut_user_role_types.role_type";
$proto50["m_srcTableName"] = "Assign Units to User";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "user_role";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto52["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_user_type_id";
$proto52["m_srcTableName"] = "Assign Units to User";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Assign Units to User"
));

$proto54["m_sql"] = "ut_user_types.designation";
$proto54["m_srcTableName"] = "Assign Units to User";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "user_type";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "propagate_level_3",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto56["m_sql"] = "external_map_user_unit_role_permissions_level_2.propagate_level_3";
$proto56["m_srcTableName"] = "Assign Units to User";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_update_ts",
	"m_strTable" => "ut_check_unee_t_update_add_user_to_unit_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto58["m_sql"] = "ut_check_unee_t_update_add_user_to_unit_level_2.unee_t_update_ts";
$proto58["m_srcTableName"] = "Assign Units to User";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Units to User"
));

$proto60["m_sql"] = "property_level_1_buildings.country_code";
$proto60["m_srcTableName"] = "Assign Units to User";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Assign Units to User"
));

$proto62["m_sql"] = "property_groups_countries.country_name";
$proto62["m_srcTableName"] = "Assign Units to User";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "ut_info_mefe_users",
	"m_srcTableName" => "Assign Units to User"
));

$proto64["m_sql"] = "ut_info_mefe_users.name";
$proto64["m_srcTableName"] = "Assign Units to User";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "external_map_user_unit_role_permissions_level_2";
$proto67["m_srcTableName"] = "Assign Units to User";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id_map_user_unit_permissions_level_2";
$proto67["m_columns"][] = "syst_created_datetime";
$proto67["m_columns"][] = "creation_system_id";
$proto67["m_columns"][] = "created_by_id";
$proto67["m_columns"][] = "creation_method";
$proto67["m_columns"][] = "syst_updated_datetime";
$proto67["m_columns"][] = "update_system_id";
$proto67["m_columns"][] = "updated_by_id";
$proto67["m_columns"][] = "update_method";
$proto67["m_columns"][] = "organization_id";
$proto67["m_columns"][] = "is_obsolete";
$proto67["m_columns"][] = "is_update_needed";
$proto67["m_columns"][] = "unee_t_update_ts";
$proto67["m_columns"][] = "unee_t_mefe_user_id";
$proto67["m_columns"][] = "unee_t_level_2_id";
$proto67["m_columns"][] = "unee_t_user_type_id";
$proto67["m_columns"][] = "unee_t_role_id";
$proto67["m_columns"][] = "propagate_level_3";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "external_map_user_unit_role_permissions_level_2";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "Assign Units to User";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_LEFTJOIN";
			$proto71=array();
$proto71["m_strName"] = "property_level_2_units";
$proto71["m_srcTableName"] = "Assign Units to User";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "system_id_unit";
$proto71["m_columns"][] = "external_id";
$proto71["m_columns"][] = "external_system_id";
$proto71["m_columns"][] = "external_table";
$proto71["m_columns"][] = "syst_created_datetime";
$proto71["m_columns"][] = "creation_system_id";
$proto71["m_columns"][] = "created_by_id";
$proto71["m_columns"][] = "creation_method";
$proto71["m_columns"][] = "syst_updated_datetime";
$proto71["m_columns"][] = "update_system_id";
$proto71["m_columns"][] = "updated_by_id";
$proto71["m_columns"][] = "update_method";
$proto71["m_columns"][] = "organization_id";
$proto71["m_columns"][] = "activated_by_id";
$proto71["m_columns"][] = "is_obsolete";
$proto71["m_columns"][] = "is_creation_needed_in_unee_t";
$proto71["m_columns"][] = "do_not_insert";
$proto71["m_columns"][] = "unee_t_unit_type";
$proto71["m_columns"][] = "building_system_id";
$proto71["m_columns"][] = "tower";
$proto71["m_columns"][] = "unit_category_id";
$proto71["m_columns"][] = "designation";
$proto71["m_columns"][] = "count_rooms";
$proto71["m_columns"][] = "unit_id";
$proto71["m_columns"][] = "surface";
$proto71["m_columns"][] = "surface_measurment_unit";
$proto71["m_columns"][] = "description";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "LEFT OUTER JOIN property_level_2_units ON external_map_user_unit_role_permissions_level_2.unee_t_level_2_id = property_level_2_units.system_id_unit AND external_map_user_unit_role_permissions_level_2.organization_id = property_level_2_units.organization_id";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "Assign Units to User";
$proto72=array();
$proto72["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_level_2_id = property_level_2_units.system_id_unit AND external_map_user_unit_role_permissions_level_2.organization_id = property_level_2_units.organization_id";
$proto72["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_2.unee_t_level_2_id = property_level_2_units.system_id_unit AND external_map_user_unit_role_permissions_level_2.organization_id = property_level_2_units.organization_id"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
						$proto74=array();
$proto74["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_level_2_id = property_level_2_units.system_id_unit";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_level_2_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= property_level_2_units.system_id_unit";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

			$proto72["m_contained"][]=$obj;
						$proto76=array();
$proto76["m_sql"] = "external_map_user_unit_role_permissions_level_2.organization_id = property_level_2_units.organization_id";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= property_level_2_units.organization_id";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

			$proto72["m_contained"][]=$obj;
$proto72["m_strCase"] = "";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_LEFTJOIN";
			$proto79=array();
$proto79["m_strName"] = "ut_map_external_source_users";
$proto79["m_srcTableName"] = "Assign Units to User";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id_map";
$proto79["m_columns"][] = "syst_created_datetime";
$proto79["m_columns"][] = "creation_system_id";
$proto79["m_columns"][] = "created_by_id";
$proto79["m_columns"][] = "creation_method";
$proto79["m_columns"][] = "syst_updated_datetime";
$proto79["m_columns"][] = "update_system_id";
$proto79["m_columns"][] = "updated_by_id";
$proto79["m_columns"][] = "update_method";
$proto79["m_columns"][] = "organization_id";
$proto79["m_columns"][] = "is_obsolete";
$proto79["m_columns"][] = "is_update_needed";
$proto79["m_columns"][] = "person_id";
$proto79["m_columns"][] = "unee_t_mefe_user_id";
$proto79["m_columns"][] = "unee_t_mefe_user_api_key";
$proto79["m_columns"][] = "uneet_created_datetime";
$proto79["m_columns"][] = "is_mefe_api_success";
$proto79["m_columns"][] = "mefe_api_error_message";
$proto79["m_columns"][] = "is_unee_t_created_by_me";
$proto79["m_columns"][] = "uneet_login_name";
$proto79["m_columns"][] = "external_person_id";
$proto79["m_columns"][] = "external_system";
$proto79["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON external_map_user_unit_role_permissions_level_2.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "Assign Units to User";
$proto80=array();
$proto80["m_sql"] = "external_map_user_unit_role_permissions_level_2.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto80["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_2.organization_id = ut_map_external_source_users.organization_id AND external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
						$proto82=array();
$proto82["m_sql"] = "external_map_user_unit_role_permissions_level_2.organization_id = ut_map_external_source_users.organization_id";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= ut_map_external_source_users.organization_id";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

			$proto80["m_contained"][]=$obj;
						$proto84=array();
$proto84["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_map_external_source_users.unee_t_mefe_user_id";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= ut_map_external_source_users.unee_t_mefe_user_id";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

			$proto80["m_contained"][]=$obj;
$proto80["m_strCase"] = "";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto86=array();
$proto86["m_link"] = "SQLL_LEFTJOIN";
			$proto87=array();
$proto87["m_strName"] = "ut_user_role_types";
$proto87["m_srcTableName"] = "Assign Units to User";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id_role_type";
$proto87["m_columns"][] = "syst_created_datetime";
$proto87["m_columns"][] = "creation_system_id";
$proto87["m_columns"][] = "created_by_id";
$proto87["m_columns"][] = "syst_updated_datetime";
$proto87["m_columns"][] = "update_system_id";
$proto87["m_columns"][] = "updated_by_id";
$proto87["m_columns"][] = "order";
$proto87["m_columns"][] = "is_obsolete";
$proto87["m_columns"][] = "role_type";
$proto87["m_columns"][] = "bz_description";
$proto87["m_columns"][] = "description";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON external_map_user_unit_role_permissions_level_2.unee_t_role_id = ut_user_role_types.id_role_type";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "Assign Units to User";
$proto88=array();
$proto88["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_role_id = ut_user_role_types.id_role_type";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_role_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_INNERJOIN";
			$proto91=array();
$proto91["m_strName"] = "ut_user_types";
$proto91["m_srcTableName"] = "Assign Units to User";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "id_unee_t_user_type";
$proto91["m_columns"][] = "syst_created_datetime";
$proto91["m_columns"][] = "creation_system_id";
$proto91["m_columns"][] = "created_by_id";
$proto91["m_columns"][] = "creation_method";
$proto91["m_columns"][] = "syst_updated_datetime";
$proto91["m_columns"][] = "update_system_id";
$proto91["m_columns"][] = "updated_by_id";
$proto91["m_columns"][] = "update_method";
$proto91["m_columns"][] = "organization_id";
$proto91["m_columns"][] = "order";
$proto91["m_columns"][] = "is_obsolete";
$proto91["m_columns"][] = "designation";
$proto91["m_columns"][] = "description";
$proto91["m_columns"][] = "ut_user_role_type_id";
$proto91["m_columns"][] = "is_all_unit";
$proto91["m_columns"][] = "is_all_units_in_country";
$proto91["m_columns"][] = "is_all_units_in_area";
$proto91["m_columns"][] = "is_all_units_in_level_1";
$proto91["m_columns"][] = "is_all_units_in_level_2";
$proto91["m_columns"][] = "is_occupant";
$proto91["m_columns"][] = "is_public";
$proto91["m_columns"][] = "is_default_assignee";
$proto91["m_columns"][] = "is_default_invited";
$proto91["m_columns"][] = "is_unit_owner";
$proto91["m_columns"][] = "is_dashboard_access";
$proto91["m_columns"][] = "can_see_role_contractor";
$proto91["m_columns"][] = "can_see_role_mgt_cny";
$proto91["m_columns"][] = "can_see_occupant";
$proto91["m_columns"][] = "can_see_role_landlord";
$proto91["m_columns"][] = "can_see_role_agent";
$proto91["m_columns"][] = "can_see_role_tenant";
$proto91["m_columns"][] = "is_assigned_to_case";
$proto91["m_columns"][] = "is_invited_to_case";
$proto91["m_columns"][] = "is_solution_updated";
$proto91["m_columns"][] = "is_next_step_updated";
$proto91["m_columns"][] = "is_deadline_updated";
$proto91["m_columns"][] = "is_case_resolved";
$proto91["m_columns"][] = "is_case_critical";
$proto91["m_columns"][] = "is_case_blocker";
$proto91["m_columns"][] = "is_message_from_contractor";
$proto91["m_columns"][] = "is_message_from_mgt_cny";
$proto91["m_columns"][] = "is_message_from_agent";
$proto91["m_columns"][] = "is_message_from_occupant";
$proto91["m_columns"][] = "is_message_from_ll";
$proto91["m_columns"][] = "is_message_from_tenant";
$proto91["m_columns"][] = "is_any_new_message";
$proto91["m_columns"][] = "is_new_ir";
$proto91["m_columns"][] = "is_new_inventory";
$proto91["m_columns"][] = "is_new_item";
$proto91["m_columns"][] = "is_item_moved";
$proto91["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "INNER JOIN ut_user_types ON external_map_user_unit_role_permissions_level_2.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_2.organization_id = ut_user_types.organization_id";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "Assign Units to User";
$proto92=array();
$proto92["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_2.organization_id = ut_user_types.organization_id";
$proto92["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_map_user_unit_role_permissions_level_2.unee_t_user_type_id = ut_user_types.id_unee_t_user_type AND external_map_user_unit_role_permissions_level_2.organization_id = ut_user_types.organization_id"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
						$proto94=array();
$proto94["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

			$proto92["m_contained"][]=$obj;
						$proto96=array();
$proto96["m_sql"] = "external_map_user_unit_role_permissions_level_2.organization_id = ut_user_types.organization_id";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= ut_user_types.organization_id";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

			$proto92["m_contained"][]=$obj;
$proto92["m_strCase"] = "";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
												$proto98=array();
$proto98["m_link"] = "SQLL_LEFTJOIN";
			$proto99=array();
$proto99["m_strName"] = "property_level_1_buildings";
$proto99["m_srcTableName"] = "Assign Units to User";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "id_building";
$proto99["m_columns"][] = "external_id";
$proto99["m_columns"][] = "external_system_id";
$proto99["m_columns"][] = "external_table";
$proto99["m_columns"][] = "syst_created_datetime";
$proto99["m_columns"][] = "creation_system_id";
$proto99["m_columns"][] = "created_by_id";
$proto99["m_columns"][] = "creation_method";
$proto99["m_columns"][] = "syst_updated_datetime";
$proto99["m_columns"][] = "update_system_id";
$proto99["m_columns"][] = "updated_by_id";
$proto99["m_columns"][] = "update_method";
$proto99["m_columns"][] = "organization_id";
$proto99["m_columns"][] = "is_obsolete";
$proto99["m_columns"][] = "order";
$proto99["m_columns"][] = "area_id";
$proto99["m_columns"][] = "is_creation_needed_in_unee_t";
$proto99["m_columns"][] = "do_not_insert";
$proto99["m_columns"][] = "unee_t_unit_type";
$proto99["m_columns"][] = "designation";
$proto99["m_columns"][] = "tower";
$proto99["m_columns"][] = "address_1";
$proto99["m_columns"][] = "address_2";
$proto99["m_columns"][] = "zip_postal_code";
$proto99["m_columns"][] = "state";
$proto99["m_columns"][] = "city";
$proto99["m_columns"][] = "country_code";
$proto99["m_columns"][] = "description";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "LEFT OUTER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building";
$proto98["m_alias"] = "";
$proto98["m_srcTableName"] = "Assign Units to User";
$proto100=array();
$proto100["m_sql"] = "property_level_2_units.building_system_id = property_level_1_buildings.id_building";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Assign Units to User"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "= property_level_1_buildings.id_building";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto0["m_fromlist"][]=$obj;
												$proto102=array();
$proto102["m_link"] = "SQLL_LEFTJOIN";
			$proto103=array();
$proto103["m_strName"] = "property_groups_areas";
$proto103["m_srcTableName"] = "Assign Units to User";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_area";
$proto103["m_columns"][] = "external_id";
$proto103["m_columns"][] = "external_system_id";
$proto103["m_columns"][] = "external_table";
$proto103["m_columns"][] = "syst_created_datetime";
$proto103["m_columns"][] = "creation_system_id";
$proto103["m_columns"][] = "created_by_id";
$proto103["m_columns"][] = "creation_method";
$proto103["m_columns"][] = "syst_updated_datetime";
$proto103["m_columns"][] = "update_system_id";
$proto103["m_columns"][] = "updated_by_id";
$proto103["m_columns"][] = "update_method";
$proto103["m_columns"][] = "is_creation_needed_in_unee_t";
$proto103["m_columns"][] = "organization_id";
$proto103["m_columns"][] = "country_code";
$proto103["m_columns"][] = "is_obsolete";
$proto103["m_columns"][] = "is_default";
$proto103["m_columns"][] = "order";
$proto103["m_columns"][] = "area_name";
$proto103["m_columns"][] = "area_definition";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "Assign Units to User";
$proto104=array();
$proto104["m_sql"] = "property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Units to User"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= property_groups_areas.id_area";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
												$proto106=array();
$proto106["m_link"] = "SQLL_LEFTJOIN";
			$proto107=array();
$proto107["m_strName"] = "ut_check_unee_t_update_add_user_to_unit_level_2";
$proto107["m_srcTableName"] = "Assign Units to User";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "id_map_user_unit_permissions_level_2";
$proto107["m_columns"][] = "external_property_type_id";
$proto107["m_columns"][] = "uneet_name";
$proto107["m_columns"][] = "unee_t_mefe_user_id";
$proto107["m_columns"][] = "unee_t_mefe_unit_id";
$proto107["m_columns"][] = "unee_t_update_ts";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "LEFT OUTER JOIN ut_check_unee_t_update_add_user_to_unit_level_2 ON external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2 = ut_check_unee_t_update_add_user_to_unit_level_2.id_map_user_unit_permissions_level_2";
$proto106["m_alias"] = "";
$proto106["m_srcTableName"] = "Assign Units to User";
$proto108=array();
$proto108["m_sql"] = "external_map_user_unit_role_permissions_level_2.id_map_user_unit_permissions_level_2 = ut_check_unee_t_update_add_user_to_unit_level_2.id_map_user_unit_permissions_level_2";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_map_user_unit_permissions_level_2",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= ut_check_unee_t_update_add_user_to_unit_level_2.id_map_user_unit_permissions_level_2";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

$proto106["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto106);

$proto0["m_fromlist"][]=$obj;
												$proto110=array();
$proto110["m_link"] = "SQLL_LEFTJOIN";
			$proto111=array();
$proto111["m_strName"] = "property_groups_countries";
$proto111["m_srcTableName"] = "Assign Units to User";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id_country";
$proto111["m_columns"][] = "syst_created_datetime";
$proto111["m_columns"][] = "creation_system_id";
$proto111["m_columns"][] = "created_by_id";
$proto111["m_columns"][] = "syst_updated_datetime";
$proto111["m_columns"][] = "update_system_id";
$proto111["m_columns"][] = "updated_by_id";
$proto111["m_columns"][] = "is_obsolete";
$proto111["m_columns"][] = "is_default";
$proto111["m_columns"][] = "is_system";
$proto111["m_columns"][] = "order";
$proto111["m_columns"][] = "country_code";
$proto111["m_columns"][] = "country_name";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "Assign Units to User";
$proto112=array();
$proto112["m_sql"] = "property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Assign Units to User"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= property_groups_countries.country_code";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

$proto110["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto110);

$proto0["m_fromlist"][]=$obj;
												$proto114=array();
$proto114["m_link"] = "SQLL_LEFTJOIN";
			$proto115=array();
$proto115["m_strName"] = "ut_info_mefe_users";
$proto115["m_srcTableName"] = "Assign Units to User";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_person";
$proto115["m_columns"][] = "unee_t_mefe_user_id";
$proto115["m_columns"][] = "external_person_id";
$proto115["m_columns"][] = "external_system";
$proto115["m_columns"][] = "table_in_external_system";
$proto115["m_columns"][] = "organization_id";
$proto115["m_columns"][] = "uneet_login_name";
$proto115["m_columns"][] = "name";
$proto115["m_columns"][] = "email";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "LEFT OUTER JOIN ut_info_mefe_users ON external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "Assign Units to User";
$proto116=array();
$proto116["m_sql"] = "external_map_user_unit_role_permissions_level_2.unee_t_mefe_user_id = ut_info_mefe_users.unee_t_mefe_user_id";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "external_map_user_unit_role_permissions_level_2",
	"m_srcTableName" => "Assign Units to User"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= ut_info_mefe_users.unee_t_mefe_user_id";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Assign Units to User";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Assign_Units_to_User = createSqlQuery_Assign_Units_to_User();


	
					
;

																														

$tdataAssign_Units_to_User[".sqlquery"] = $queryData_Assign_Units_to_User;

include_once(getabspath("include/Assign_Units_to_User_events.php"));
$tableEvents["Assign Units to User"] = new eventclass_Assign_Units_to_User;
$tdataAssign_Units_to_User[".hasEvents"] = true;

?>