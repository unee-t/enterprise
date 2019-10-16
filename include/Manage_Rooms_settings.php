<?php



$tdataManage_Rooms = array();
$tdataManage_Rooms[".searchableFields"] = array();
$tdataManage_Rooms[".ShortName"] = "Manage_Rooms";
$tdataManage_Rooms[".OwnerID"] = "created_by_id";
$tdataManage_Rooms[".OriginalTable"] = "external_property_level_3_rooms";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataManage_Rooms[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataManage_Rooms[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataManage_Rooms[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_Rooms = array();
$fieldToolTipsManage_Rooms = array();
$pageTitlesManage_Rooms = array();
$placeHoldersManage_Rooms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_Rooms["English"] = array();
	$fieldToolTipsManage_Rooms["English"] = array();
	$placeHoldersManage_Rooms["English"] = array();
	$pageTitlesManage_Rooms["English"] = array();
	$fieldLabelsManage_Rooms["English"]["system_id_room"] = "System Id Room";
	$fieldToolTipsManage_Rooms["English"]["system_id_room"] = "";
	$placeHoldersManage_Rooms["English"]["system_id_room"] = "";
	$fieldLabelsManage_Rooms["English"]["external_id"] = "External Id";
	$fieldToolTipsManage_Rooms["English"]["external_id"] = "";
	$placeHoldersManage_Rooms["English"]["external_id"] = "";
	$fieldLabelsManage_Rooms["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsManage_Rooms["English"]["external_system_id"] = "";
	$placeHoldersManage_Rooms["English"]["external_system_id"] = "";
	$fieldLabelsManage_Rooms["English"]["external_table"] = "External Table";
	$fieldToolTipsManage_Rooms["English"]["external_table"] = "";
	$placeHoldersManage_Rooms["English"]["external_table"] = "";
	$fieldLabelsManage_Rooms["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsManage_Rooms["English"]["syst_created_datetime"] = "";
	$placeHoldersManage_Rooms["English"]["syst_created_datetime"] = "";
	$fieldLabelsManage_Rooms["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsManage_Rooms["English"]["creation_system_id"] = "";
	$placeHoldersManage_Rooms["English"]["creation_system_id"] = "";
	$fieldLabelsManage_Rooms["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsManage_Rooms["English"]["created_by_id"] = "";
	$placeHoldersManage_Rooms["English"]["created_by_id"] = "";
	$fieldLabelsManage_Rooms["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsManage_Rooms["English"]["creation_method"] = "";
	$placeHoldersManage_Rooms["English"]["creation_method"] = "";
	$fieldLabelsManage_Rooms["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_Rooms["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_Rooms["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_Rooms["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_Rooms["English"]["update_system_id"] = "";
	$placeHoldersManage_Rooms["English"]["update_system_id"] = "";
	$fieldLabelsManage_Rooms["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_Rooms["English"]["updated_by_id"] = "";
	$placeHoldersManage_Rooms["English"]["updated_by_id"] = "";
	$fieldLabelsManage_Rooms["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_Rooms["English"]["update_method"] = "";
	$placeHoldersManage_Rooms["English"]["update_method"] = "";
	$fieldLabelsManage_Rooms["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsManage_Rooms["English"]["is_obsolete"] = "";
	$placeHoldersManage_Rooms["English"]["is_obsolete"] = "";
	$fieldLabelsManage_Rooms["English"]["is_creation_needed_in_unee_t"] = "Create In Unee T";
	$fieldToolTipsManage_Rooms["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersManage_Rooms["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsManage_Rooms["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsManage_Rooms["English"]["do_not_insert"] = "";
	$placeHoldersManage_Rooms["English"]["do_not_insert"] = "";
	$fieldLabelsManage_Rooms["English"]["unee_t_unit_type"] = "Property Type";
	$fieldToolTipsManage_Rooms["English"]["unee_t_unit_type"] = "";
	$placeHoldersManage_Rooms["English"]["unee_t_unit_type"] = "";
	$fieldLabelsManage_Rooms["English"]["room_type_id"] = "Room Type Id";
	$fieldToolTipsManage_Rooms["English"]["room_type_id"] = "";
	$placeHoldersManage_Rooms["English"]["room_type_id"] = "";
	$fieldLabelsManage_Rooms["English"]["number_of_beds"] = "Number Of Beds";
	$fieldToolTipsManage_Rooms["English"]["number_of_beds"] = "";
	$placeHoldersManage_Rooms["English"]["number_of_beds"] = "";
	$fieldLabelsManage_Rooms["English"]["surface"] = "Surface";
	$fieldToolTipsManage_Rooms["English"]["surface"] = "";
	$placeHoldersManage_Rooms["English"]["surface"] = "";
	$fieldLabelsManage_Rooms["English"]["surface_measurment_unit"] = "sqf/sqm";
	$fieldToolTipsManage_Rooms["English"]["surface_measurment_unit"] = "";
	$placeHoldersManage_Rooms["English"]["surface_measurment_unit"] = "";
	$fieldLabelsManage_Rooms["English"]["room_designation"] = "Room Designation";
	$fieldToolTipsManage_Rooms["English"]["room_designation"] = "";
	$placeHoldersManage_Rooms["English"]["room_designation"] = "";
	$fieldLabelsManage_Rooms["English"]["room_description"] = "Description";
	$fieldToolTipsManage_Rooms["English"]["room_description"] = "";
	$placeHoldersManage_Rooms["English"]["room_description"] = "";
	$fieldLabelsManage_Rooms["English"]["country_code"] = "Country";
	$fieldToolTipsManage_Rooms["English"]["country_code"] = "";
	$placeHoldersManage_Rooms["English"]["country_code"] = "";
	$fieldLabelsManage_Rooms["English"]["country_name"] = "Country";
	$fieldToolTipsManage_Rooms["English"]["country_name"] = "";
	$placeHoldersManage_Rooms["English"]["country_name"] = "";
	$fieldLabelsManage_Rooms["English"]["area_id"] = "Area";
	$fieldToolTipsManage_Rooms["English"]["area_id"] = "";
	$placeHoldersManage_Rooms["English"]["area_id"] = "";
	$fieldLabelsManage_Rooms["English"]["area_name"] = "Area";
	$fieldToolTipsManage_Rooms["English"]["area_name"] = "";
	$placeHoldersManage_Rooms["English"]["area_name"] = "";
	$fieldLabelsManage_Rooms["English"]["unit_designation"] = "Unit";
	$fieldToolTipsManage_Rooms["English"]["unit_designation"] = "";
	$placeHoldersManage_Rooms["English"]["unit_designation"] = "";
	$fieldLabelsManage_Rooms["English"]["order_area"] = "Order Area";
	$fieldToolTipsManage_Rooms["English"]["order_area"] = "";
	$placeHoldersManage_Rooms["English"]["order_area"] = "";
	$fieldLabelsManage_Rooms["English"]["order_building"] = "Order Building";
	$fieldToolTipsManage_Rooms["English"]["order_building"] = "";
	$placeHoldersManage_Rooms["English"]["order_building"] = "";
	$fieldLabelsManage_Rooms["English"]["tower"] = "Tower";
	$fieldToolTipsManage_Rooms["English"]["tower"] = "";
	$placeHoldersManage_Rooms["English"]["tower"] = "";
	$fieldLabelsManage_Rooms["English"]["building_name"] = "Building";
	$fieldToolTipsManage_Rooms["English"]["building_name"] = "";
	$placeHoldersManage_Rooms["English"]["building_name"] = "";
	$fieldLabelsManage_Rooms["English"]["building_system_id"] = "Building";
	$fieldToolTipsManage_Rooms["English"]["building_system_id"] = "";
	$placeHoldersManage_Rooms["English"]["building_system_id"] = "";
	$fieldLabelsManage_Rooms["English"]["uneet_created_datetime"] = "Uneet Created Datetime";
	$fieldToolTipsManage_Rooms["English"]["uneet_created_datetime"] = "";
	$placeHoldersManage_Rooms["English"]["uneet_created_datetime"] = "";
	$fieldLabelsManage_Rooms["English"]["system_id_unit"] = "Unit";
	$fieldToolTipsManage_Rooms["English"]["system_id_unit"] = "";
	$placeHoldersManage_Rooms["English"]["system_id_unit"] = "";
	$fieldLabelsManage_Rooms["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsManage_Rooms["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersManage_Rooms["English"]["unee_t_mefe_unit_id"] = "";
	if (count($fieldToolTipsManage_Rooms["English"]))
		$tdataManage_Rooms[".isUseToolTips"] = true;
}


	$tdataManage_Rooms[".NCSearch"] = true;



$tdataManage_Rooms[".shortTableName"] = "Manage_Rooms";
$tdataManage_Rooms[".nSecOptions"] = 1;

$tdataManage_Rooms[".mainTableOwnerID"] = "created_by_id";
$tdataManage_Rooms[".entityType"] = 1;

$tdataManage_Rooms[".strOriginalTableName"] = "external_property_level_3_rooms";

		 



$tdataManage_Rooms[".showAddInPopup"] = false;

$tdataManage_Rooms[".showEditInPopup"] = false;

$tdataManage_Rooms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_Rooms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_Rooms[".listAjax"] = true;
//	temporary
$tdataManage_Rooms[".listAjax"] = false;

	$tdataManage_Rooms[".audit"] = false;

	$tdataManage_Rooms[".locking"] = false;


$pages = $tdataManage_Rooms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_Rooms[".edit"] = true;
	$tdataManage_Rooms[".afterEditAction"] = 1;
	$tdataManage_Rooms[".closePopupAfterEdit"] = 1;
	$tdataManage_Rooms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_Rooms[".add"] = true;
$tdataManage_Rooms[".afterAddAction"] = 0;
$tdataManage_Rooms[".closePopupAfterAdd"] = 1;
$tdataManage_Rooms[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_Rooms[".list"] = true;
}



$tdataManage_Rooms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_Rooms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_Rooms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_Rooms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_Rooms[".printFriendly"] = true;
}



$tdataManage_Rooms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_Rooms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_Rooms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_Rooms[".isUseAjaxSuggest"] = true;

$tdataManage_Rooms[".rowHighlite"] = true;





$tdataManage_Rooms[".ajaxCodeSnippetAdded"] = false;

$tdataManage_Rooms[".buttonsAdded"] = false;

$tdataManage_Rooms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_Rooms[".isUseTimeForSearch"] = false;


$tdataManage_Rooms[".badgeColor"] = "007c91";


$tdataManage_Rooms[".allSearchFields"] = array();
$tdataManage_Rooms[".filterFields"] = array();
$tdataManage_Rooms[".requiredSearchFields"] = array();

$tdataManage_Rooms[".googleLikeFields"] = array();
$tdataManage_Rooms[".googleLikeFields"][] = "country_code";
$tdataManage_Rooms[".googleLikeFields"][] = "country_name";
$tdataManage_Rooms[".googleLikeFields"][] = "area_name";
$tdataManage_Rooms[".googleLikeFields"][] = "building_name";
$tdataManage_Rooms[".googleLikeFields"][] = "system_id_unit";
$tdataManage_Rooms[".googleLikeFields"][] = "unit_designation";
$tdataManage_Rooms[".googleLikeFields"][] = "room_designation";
$tdataManage_Rooms[".googleLikeFields"][] = "unee_t_unit_type";
$tdataManage_Rooms[".googleLikeFields"][] = "surface";
$tdataManage_Rooms[".googleLikeFields"][] = "room_description";
$tdataManage_Rooms[".googleLikeFields"][] = "uneet_created_datetime";



$tdataManage_Rooms[".tableType"] = "list";

$tdataManage_Rooms[".printerPageOrientation"] = 0;
$tdataManage_Rooms[".nPrinterPageScale"] = 100;

$tdataManage_Rooms[".nPrinterSplitRecords"] = 40;

$tdataManage_Rooms[".geocodingEnabled"] = false;





$tdataManage_Rooms[".isResizeColumns"] = true;





$tdataManage_Rooms[".pageSize"] = 50;

$tdataManage_Rooms[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_level_1_buildings.`order`, external_property_level_1_buildings.tower, external_property_level_2_units.designation, external_property_level_3_rooms.room_designation";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_Rooms[".strOrderBy"] = $tstrOrderBy;

$tdataManage_Rooms[".orderindexes"] = array();
	$tdataManage_Rooms[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "property_groups_countries.country_name");

	$tdataManage_Rooms[".orderindexes"][] = array(30, (1 ? "ASC" : "DESC"), "external_property_groups_areas.`order`");

	$tdataManage_Rooms[".orderindexes"][] = array(31, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.`order`");

	$tdataManage_Rooms[".orderindexes"][] = array(32, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.tower");

	$tdataManage_Rooms[".orderindexes"][] = array(20, (1 ? "ASC" : "DESC"), "external_property_level_2_units.designation");

	$tdataManage_Rooms[".orderindexes"][] = array(21, (1 ? "ASC" : "DESC"), "external_property_level_3_rooms.room_designation");


$tdataManage_Rooms[".sqlHead"] = "SELECT external_property_level_3_rooms.system_id_room,  external_property_level_3_rooms.external_id,  external_property_level_3_rooms.external_system_id,  external_property_level_3_rooms.external_table,  external_property_level_3_rooms.syst_created_datetime,  external_property_level_3_rooms.creation_system_id,  external_property_level_3_rooms.created_by_id,  external_property_level_3_rooms.creation_method,  external_property_level_3_rooms.syst_updated_datetime,  external_property_level_3_rooms.update_system_id,  external_property_level_3_rooms.updated_by_id,  external_property_level_3_rooms.update_method,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_2_units.building_system_id,  external_property_level_1_buildings.designation AS building_name,  external_property_level_3_rooms.system_id_unit,  external_property_level_2_units.designation AS unit_designation,  external_property_level_3_rooms.room_designation,  external_property_level_3_rooms.unee_t_unit_type,  external_property_level_3_rooms.is_obsolete,  external_property_level_3_rooms.is_creation_needed_in_unee_t,  external_property_level_3_rooms.number_of_beds,  external_property_level_3_rooms.surface,  external_property_level_3_rooms.surface_measurment_unit,  external_property_level_3_rooms.room_description,  external_property_level_3_rooms.room_type_id,  external_property_groups_areas.`order` AS order_area,  external_property_level_1_buildings.`order` AS order_building,  external_property_level_1_buildings.tower,  external_property_level_3_rooms.do_not_insert,  ut_check_unee_t_updates_property_level_3.uneet_created_datetime,  ut_check_unee_t_updates_property_level_3.unee_t_mefe_unit_id";
$tdataManage_Rooms[".sqlFrom"] = "FROM external_property_level_3_rooms  LEFT OUTER JOIN external_property_level_2_units ON external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit  LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN property_level_3_rooms ON external_property_level_3_rooms.external_id = property_level_3_rooms.external_id AND external_property_level_3_rooms.external_system_id = property_level_3_rooms.external_system_id AND external_property_level_3_rooms.external_table = property_level_3_rooms.external_table AND external_property_level_3_rooms.created_by_id = property_level_3_rooms.organization_id  LEFT OUTER JOIN ut_check_unee_t_updates_property_level_3 ON property_level_3_rooms.system_id_room = ut_check_unee_t_updates_property_level_3.system_id_room";
$tdataManage_Rooms[".sqlWhereExpr"] = "";
$tdataManage_Rooms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_Rooms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_Rooms[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_Rooms[".highlightSearchResults"] = true;

$tableKeysManage_Rooms = array();
$tableKeysManage_Rooms[] = "external_id";
$tableKeysManage_Rooms[] = "external_system_id";
$tableKeysManage_Rooms[] = "external_table";
$tableKeysManage_Rooms[] = "created_by_id";
$tdataManage_Rooms[".Keys"] = $tableKeysManage_Rooms;


$tdataManage_Rooms[".hideMobileList"] = array();




//	system_id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_room";
	$fdata["GoodName"] = "system_id_room";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","system_id_room");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "system_id_room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.system_id_room";

	
	
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


	$tdataManage_Rooms["system_id_room"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "system_id_room";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.external_id";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdataManage_Rooms["external_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.external_system_id";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataManage_Rooms["external_system_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.external_table";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataManage_Rooms["external_table"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.syst_created_datetime";

	
	
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


	$tdataManage_Rooms["syst_created_datetime"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.creation_system_id";

	
	
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


	$tdataManage_Rooms["creation_system_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.created_by_id";

	
	
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


	$tdataManage_Rooms["created_by_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.creation_method";

	
	
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


	$tdataManage_Rooms["creation_method"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.syst_updated_datetime";

	
	
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


	$tdataManage_Rooms["syst_updated_datetime"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.update_system_id";

	
	
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


	$tdataManage_Rooms["update_system_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.updated_by_id";

	
	
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


	$tdataManage_Rooms["updated_by_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.update_method";

	
	
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


	$tdataManage_Rooms["update_method"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "update_method";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.country_code";

	
	
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


	$tdataManage_Rooms["country_code"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","country_name");
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


	$tdataManage_Rooms["country_name"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "country_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","area_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "area_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.area_id";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "external_property_groups_areas";
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


	$tdataManage_Rooms["area_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","area_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_groups_areas.area_name";

	
	
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


	$tdataManage_Rooms["area_name"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "area_name";
//	building_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "building_system_id";
	$fdata["GoodName"] = "building_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","building_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "building_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.building_system_id";

	
	
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


	$tdataManage_Rooms["building_system_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "building_system_id";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","building_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.designation";

	
	
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


	$tdataManage_Rooms["building_name"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "building_name";
//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","system_id_unit");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "system_id_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.system_id_unit";

	
	
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
	$edata["LookupTable"] = "Search All Units";
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


	$tdataManage_Rooms["system_id_unit"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "system_id_unit";
//	unit_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "unit_designation";
	$fdata["GoodName"] = "unit_designation";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","unit_designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.designation";

	
	
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


	$tdataManage_Rooms["unit_designation"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "unit_designation";
//	room_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "room_designation";
	$fdata["GoodName"] = "room_designation";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","room_designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "room_designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.room_designation";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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


	$tdataManage_Rooms["room_designation"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "room_designation";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","unee_t_unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_unit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.unee_t_unit_type";

	
	
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
	$edata["LookupTable"] = "ut_unit_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "designation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_unit_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "designation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_unit_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "designation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
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


	$tdataManage_Rooms["unee_t_unit_type"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "unee_t_unit_type";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.is_obsolete";

	
	
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


	$tdataManage_Rooms["is_obsolete"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "is_obsolete";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","is_creation_needed_in_unee_t");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_creation_needed_in_unee_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.is_creation_needed_in_unee_t";

	
	
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


	$tdataManage_Rooms["is_creation_needed_in_unee_t"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	number_of_beds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "number_of_beds";
	$fdata["GoodName"] = "number_of_beds";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","number_of_beds");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "number_of_beds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.number_of_beds";

	
	
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


	$tdataManage_Rooms["number_of_beds"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "number_of_beds";
//	surface
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "surface";
	$fdata["GoodName"] = "surface";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","surface");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "surface";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.surface";

	
	
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


	$tdataManage_Rooms["surface"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "surface";
//	surface_measurment_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "surface_measurment_unit";
	$fdata["GoodName"] = "surface_measurment_unit";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","surface_measurment_unit");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "surface_measurment_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.surface_measurment_unit";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "sqf";
	$edata["LookupValues"][] = "sqm";

	
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


	$tdataManage_Rooms["surface_measurment_unit"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "surface_measurment_unit";
//	room_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "room_description";
	$fdata["GoodName"] = "room_description";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","room_description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "room_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.room_description";

	
	
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


	$tdataManage_Rooms["room_description"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "room_description";
//	room_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "room_type_id";
	$fdata["GoodName"] = "room_type_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","room_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "room_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.room_type_id";

	
	
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


	$tdataManage_Rooms["room_type_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "room_type_id";
//	order_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "order_area";
	$fdata["GoodName"] = "order_area";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","order_area");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_groups_areas.`order`";

	
	
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


	$tdataManage_Rooms["order_area"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "order_area";
//	order_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "order_building";
	$fdata["GoodName"] = "order_building";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","order_building");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.`order`";

	
	
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


	$tdataManage_Rooms["order_building"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "order_building";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","tower");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tower";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.tower";

	
	
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


	$tdataManage_Rooms["tower"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "tower";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","do_not_insert");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "do_not_insert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.do_not_insert";

	
	
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


	$tdataManage_Rooms["do_not_insert"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "do_not_insert";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_check_unee_t_updates_property_level_3";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_updates_property_level_3.uneet_created_datetime";

	
	
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


	$tdataManage_Rooms["uneet_created_datetime"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_check_unee_t_updates_property_level_3";
	$fdata["Label"] = GetFieldLabel("Manage_Rooms","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_updates_property_level_3.unee_t_mefe_unit_id";

	
	
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


	$tdataManage_Rooms["unee_t_mefe_unit_id"] = $fdata;
		$tdataManage_Rooms[".searchableFields"][] = "unee_t_mefe_unit_id";


$tables_data["Manage Rooms"]=&$tdataManage_Rooms;
$field_labels["Manage_Rooms"] = &$fieldLabelsManage_Rooms;
$fieldToolTips["Manage_Rooms"] = &$fieldToolTipsManage_Rooms;
$placeHolders["Manage_Rooms"] = &$placeHoldersManage_Rooms;
$page_titles["Manage_Rooms"] = &$pageTitlesManage_Rooms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage Rooms"] = array();
//	Assign Rooms to User
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Assign Rooms to User";
		$detailsParam["dOriginalTable"] = "external_map_user_unit_role_permissions_level_3";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Assign_Rooms_to_User";
	$detailsParam["dCaptionTable"] = GetTableCaption("Assign_Rooms_to_User");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Rooms"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Rooms"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Rooms"][$dIndex]["masterKeys"][]="unee_t_mefe_unit_id";

				$detailsTablesData["Manage Rooms"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Rooms"][$dIndex]["detailKeys"][]="unee_t_mefe_unit_id";

// tables which are master tables for current table (detail)
$masterTablesData["Manage Rooms"] = array();



	
				$strOriginalDetailsTable="external_property_level_2_units";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Units";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Units";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Manage Rooms"][0] = $masterParams;
				$masterTablesData["Manage Rooms"][0]["masterKeys"] = array();
	$masterTablesData["Manage Rooms"][0]["masterKeys"][]="system_id_unit";
				$masterTablesData["Manage Rooms"][0]["detailKeys"] = array();
	$masterTablesData["Manage Rooms"][0]["detailKeys"][]="system_id_unit";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_Rooms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_3_rooms.system_id_room,  external_property_level_3_rooms.external_id,  external_property_level_3_rooms.external_system_id,  external_property_level_3_rooms.external_table,  external_property_level_3_rooms.syst_created_datetime,  external_property_level_3_rooms.creation_system_id,  external_property_level_3_rooms.created_by_id,  external_property_level_3_rooms.creation_method,  external_property_level_3_rooms.syst_updated_datetime,  external_property_level_3_rooms.update_system_id,  external_property_level_3_rooms.updated_by_id,  external_property_level_3_rooms.update_method,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_2_units.building_system_id,  external_property_level_1_buildings.designation AS building_name,  external_property_level_3_rooms.system_id_unit,  external_property_level_2_units.designation AS unit_designation,  external_property_level_3_rooms.room_designation,  external_property_level_3_rooms.unee_t_unit_type,  external_property_level_3_rooms.is_obsolete,  external_property_level_3_rooms.is_creation_needed_in_unee_t,  external_property_level_3_rooms.number_of_beds,  external_property_level_3_rooms.surface,  external_property_level_3_rooms.surface_measurment_unit,  external_property_level_3_rooms.room_description,  external_property_level_3_rooms.room_type_id,  external_property_groups_areas.`order` AS order_area,  external_property_level_1_buildings.`order` AS order_building,  external_property_level_1_buildings.tower,  external_property_level_3_rooms.do_not_insert,  ut_check_unee_t_updates_property_level_3.uneet_created_datetime,  ut_check_unee_t_updates_property_level_3.unee_t_mefe_unit_id";
$proto0["m_strFrom"] = "FROM external_property_level_3_rooms  LEFT OUTER JOIN external_property_level_2_units ON external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit  LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN property_level_3_rooms ON external_property_level_3_rooms.external_id = property_level_3_rooms.external_id AND external_property_level_3_rooms.external_system_id = property_level_3_rooms.external_system_id AND external_property_level_3_rooms.external_table = property_level_3_rooms.external_table AND external_property_level_3_rooms.created_by_id = property_level_3_rooms.organization_id  LEFT OUTER JOIN ut_check_unee_t_updates_property_level_3 ON property_level_3_rooms.system_id_room = ut_check_unee_t_updates_property_level_3.system_id_room";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_level_1_buildings.`order`, external_property_level_1_buildings.tower, external_property_level_2_units.designation, external_property_level_3_rooms.room_designation";
	
					
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
	"m_strName" => "system_id_room",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto6["m_sql"] = "external_property_level_3_rooms.system_id_room";
$proto6["m_srcTableName"] = "Manage Rooms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto8["m_sql"] = "external_property_level_3_rooms.external_id";
$proto8["m_srcTableName"] = "Manage Rooms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto10["m_sql"] = "external_property_level_3_rooms.external_system_id";
$proto10["m_srcTableName"] = "Manage Rooms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto12["m_sql"] = "external_property_level_3_rooms.external_table";
$proto12["m_srcTableName"] = "Manage Rooms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto14["m_sql"] = "external_property_level_3_rooms.syst_created_datetime";
$proto14["m_srcTableName"] = "Manage Rooms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto16["m_sql"] = "external_property_level_3_rooms.creation_system_id";
$proto16["m_srcTableName"] = "Manage Rooms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto18["m_sql"] = "external_property_level_3_rooms.created_by_id";
$proto18["m_srcTableName"] = "Manage Rooms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto20["m_sql"] = "external_property_level_3_rooms.creation_method";
$proto20["m_srcTableName"] = "Manage Rooms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto22["m_sql"] = "external_property_level_3_rooms.syst_updated_datetime";
$proto22["m_srcTableName"] = "Manage Rooms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto24["m_sql"] = "external_property_level_3_rooms.update_system_id";
$proto24["m_srcTableName"] = "Manage Rooms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto26["m_sql"] = "external_property_level_3_rooms.updated_by_id";
$proto26["m_srcTableName"] = "Manage Rooms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto28["m_sql"] = "external_property_level_3_rooms.update_method";
$proto28["m_srcTableName"] = "Manage Rooms";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto30["m_sql"] = "external_property_level_1_buildings.country_code";
$proto30["m_srcTableName"] = "Manage Rooms";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Manage Rooms"
));

$proto32["m_sql"] = "property_groups_countries.country_name";
$proto32["m_srcTableName"] = "Manage Rooms";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto34["m_sql"] = "external_property_level_1_buildings.area_id";
$proto34["m_srcTableName"] = "Manage Rooms";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Rooms"
));

$proto36["m_sql"] = "external_property_groups_areas.area_name";
$proto36["m_srcTableName"] = "Manage Rooms";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Rooms"
));

$proto38["m_sql"] = "external_property_level_2_units.building_system_id";
$proto38["m_srcTableName"] = "Manage Rooms";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto40["m_sql"] = "external_property_level_1_buildings.designation";
$proto40["m_srcTableName"] = "Manage Rooms";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto42["m_sql"] = "external_property_level_3_rooms.system_id_unit";
$proto42["m_srcTableName"] = "Manage Rooms";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Rooms"
));

$proto44["m_sql"] = "external_property_level_2_units.designation";
$proto44["m_srcTableName"] = "Manage Rooms";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "unit_designation";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto46["m_sql"] = "external_property_level_3_rooms.room_designation";
$proto46["m_srcTableName"] = "Manage Rooms";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto48["m_sql"] = "external_property_level_3_rooms.unee_t_unit_type";
$proto48["m_srcTableName"] = "Manage Rooms";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto50["m_sql"] = "external_property_level_3_rooms.is_obsolete";
$proto50["m_srcTableName"] = "Manage Rooms";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto52["m_sql"] = "external_property_level_3_rooms.is_creation_needed_in_unee_t";
$proto52["m_srcTableName"] = "Manage Rooms";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_beds",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto54["m_sql"] = "external_property_level_3_rooms.number_of_beds";
$proto54["m_srcTableName"] = "Manage Rooms";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "surface",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto56["m_sql"] = "external_property_level_3_rooms.surface";
$proto56["m_srcTableName"] = "Manage Rooms";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "surface_measurment_unit",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto58["m_sql"] = "external_property_level_3_rooms.surface_measurment_unit";
$proto58["m_srcTableName"] = "Manage Rooms";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "room_description",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto60["m_sql"] = "external_property_level_3_rooms.room_description";
$proto60["m_srcTableName"] = "Manage Rooms";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "room_type_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto62["m_sql"] = "external_property_level_3_rooms.room_type_id";
$proto62["m_srcTableName"] = "Manage Rooms";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Rooms"
));

$proto64["m_sql"] = "external_property_groups_areas.`order`";
$proto64["m_srcTableName"] = "Manage Rooms";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "order_area";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto66["m_sql"] = "external_property_level_1_buildings.`order`";
$proto66["m_srcTableName"] = "Manage Rooms";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "order_building";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto68["m_sql"] = "external_property_level_1_buildings.tower";
$proto68["m_srcTableName"] = "Manage Rooms";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto70["m_sql"] = "external_property_level_3_rooms.do_not_insert";
$proto70["m_srcTableName"] = "Manage Rooms";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_check_unee_t_updates_property_level_3",
	"m_srcTableName" => "Manage Rooms"
));

$proto72["m_sql"] = "ut_check_unee_t_updates_property_level_3.uneet_created_datetime";
$proto72["m_srcTableName"] = "Manage Rooms";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_check_unee_t_updates_property_level_3",
	"m_srcTableName" => "Manage Rooms"
));

$proto74["m_sql"] = "ut_check_unee_t_updates_property_level_3.unee_t_mefe_unit_id";
$proto74["m_srcTableName"] = "Manage Rooms";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "external_property_level_3_rooms";
$proto77["m_srcTableName"] = "Manage Rooms";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "system_id_room";
$proto77["m_columns"][] = "create_api_request_id";
$proto77["m_columns"][] = "edit_api_request_id";
$proto77["m_columns"][] = "external_id";
$proto77["m_columns"][] = "external_system_id";
$proto77["m_columns"][] = "external_table";
$proto77["m_columns"][] = "syst_created_datetime";
$proto77["m_columns"][] = "creation_system_id";
$proto77["m_columns"][] = "created_by_id";
$proto77["m_columns"][] = "creation_method";
$proto77["m_columns"][] = "syst_updated_datetime";
$proto77["m_columns"][] = "update_system_id";
$proto77["m_columns"][] = "updated_by_id";
$proto77["m_columns"][] = "update_method";
$proto77["m_columns"][] = "is_update_on_duplicate_key";
$proto77["m_columns"][] = "is_obsolete";
$proto77["m_columns"][] = "is_creation_needed_in_unee_t";
$proto77["m_columns"][] = "do_not_insert";
$proto77["m_columns"][] = "unee_t_unit_type";
$proto77["m_columns"][] = "system_id_unit";
$proto77["m_columns"][] = "room_type_id";
$proto77["m_columns"][] = "number_of_beds";
$proto77["m_columns"][] = "surface";
$proto77["m_columns"][] = "surface_measurment_unit";
$proto77["m_columns"][] = "room_designation";
$proto77["m_columns"][] = "room_description";
$proto77["m_columns"][] = "mgt_cny_default_assignee";
$proto77["m_columns"][] = "landlord_default_assignee";
$proto77["m_columns"][] = "tenant_default_assignee";
$proto77["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "external_property_level_3_rooms";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "Manage Rooms";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
												$proto80=array();
$proto80["m_link"] = "SQLL_LEFTJOIN";
			$proto81=array();
$proto81["m_strName"] = "external_property_level_2_units";
$proto81["m_srcTableName"] = "Manage Rooms";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "system_id_unit";
$proto81["m_columns"][] = "create_api_request_id";
$proto81["m_columns"][] = "edit_api_request_id";
$proto81["m_columns"][] = "external_id";
$proto81["m_columns"][] = "external_system_id";
$proto81["m_columns"][] = "external_table";
$proto81["m_columns"][] = "syst_created_datetime";
$proto81["m_columns"][] = "creation_system_id";
$proto81["m_columns"][] = "created_by_id";
$proto81["m_columns"][] = "creation_method";
$proto81["m_columns"][] = "syst_updated_datetime";
$proto81["m_columns"][] = "update_system_id";
$proto81["m_columns"][] = "updated_by_id";
$proto81["m_columns"][] = "update_method";
$proto81["m_columns"][] = "is_update_on_duplicate_key";
$proto81["m_columns"][] = "activated_by_id";
$proto81["m_columns"][] = "is_obsolete";
$proto81["m_columns"][] = "is_creation_needed_in_unee_t";
$proto81["m_columns"][] = "do_not_insert";
$proto81["m_columns"][] = "unee_t_unit_type";
$proto81["m_columns"][] = "building_system_id";
$proto81["m_columns"][] = "tower";
$proto81["m_columns"][] = "unit_category_id";
$proto81["m_columns"][] = "designation";
$proto81["m_columns"][] = "count_rooms";
$proto81["m_columns"][] = "unit_id";
$proto81["m_columns"][] = "surface";
$proto81["m_columns"][] = "surface_measurment_unit";
$proto81["m_columns"][] = "description";
$proto81["m_columns"][] = "mgt_cny_default_assignee";
$proto81["m_columns"][] = "landlord_default_assignee";
$proto81["m_columns"][] = "tenant_default_assignee";
$proto81["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "LEFT OUTER JOIN external_property_level_2_units ON external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "Manage Rooms";
$proto82=array();
$proto82["m_sql"] = "external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "= external_property_level_2_units.system_id_unit";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
												$proto84=array();
$proto84["m_link"] = "SQLL_LEFTJOIN";
			$proto85=array();
$proto85["m_strName"] = "external_property_level_1_buildings";
$proto85["m_srcTableName"] = "Manage Rooms";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id_building";
$proto85["m_columns"][] = "create_api_request_id";
$proto85["m_columns"][] = "edit_api_request_id";
$proto85["m_columns"][] = "external_id";
$proto85["m_columns"][] = "external_system_id";
$proto85["m_columns"][] = "external_table";
$proto85["m_columns"][] = "syst_created_datetime";
$proto85["m_columns"][] = "creation_system_id";
$proto85["m_columns"][] = "created_by_id";
$proto85["m_columns"][] = "creation_method";
$proto85["m_columns"][] = "syst_updated_datetime";
$proto85["m_columns"][] = "update_system_id";
$proto85["m_columns"][] = "updated_by_id";
$proto85["m_columns"][] = "update_method";
$proto85["m_columns"][] = "is_update_on_duplicate_key";
$proto85["m_columns"][] = "is_obsolete";
$proto85["m_columns"][] = "order";
$proto85["m_columns"][] = "area_id";
$proto85["m_columns"][] = "is_creation_needed_in_unee_t";
$proto85["m_columns"][] = "do_not_insert";
$proto85["m_columns"][] = "unee_t_unit_type";
$proto85["m_columns"][] = "designation";
$proto85["m_columns"][] = "tower";
$proto85["m_columns"][] = "address_1";
$proto85["m_columns"][] = "address_2";
$proto85["m_columns"][] = "zip_postal_code";
$proto85["m_columns"][] = "state";
$proto85["m_columns"][] = "city";
$proto85["m_columns"][] = "country_code";
$proto85["m_columns"][] = "description";
$proto85["m_columns"][] = "mgt_cny_default_assignee";
$proto85["m_columns"][] = "landlord_default_assignee";
$proto85["m_columns"][] = "tenant_default_assignee";
$proto85["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "Manage Rooms";
$proto86=array();
$proto86["m_sql"] = "external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Rooms"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= external_property_level_1_buildings.id_building";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
												$proto88=array();
$proto88["m_link"] = "SQLL_LEFTJOIN";
			$proto89=array();
$proto89["m_strName"] = "external_property_groups_areas";
$proto89["m_srcTableName"] = "Manage Rooms";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "id_area";
$proto89["m_columns"][] = "create_api_request_id";
$proto89["m_columns"][] = "edit_api_request_id";
$proto89["m_columns"][] = "external_id";
$proto89["m_columns"][] = "external_system_id";
$proto89["m_columns"][] = "external_table";
$proto89["m_columns"][] = "syst_created_datetime";
$proto89["m_columns"][] = "creation_system_id";
$proto89["m_columns"][] = "created_by_id";
$proto89["m_columns"][] = "creation_method";
$proto89["m_columns"][] = "syst_updated_datetime";
$proto89["m_columns"][] = "update_system_id";
$proto89["m_columns"][] = "updated_by_id";
$proto89["m_columns"][] = "update_method";
$proto89["m_columns"][] = "is_update_on_duplicate_key";
$proto89["m_columns"][] = "is_creation_needed_in_unee_t";
$proto89["m_columns"][] = "is_obsolete";
$proto89["m_columns"][] = "is_default";
$proto89["m_columns"][] = "order";
$proto89["m_columns"][] = "country_code";
$proto89["m_columns"][] = "area_name";
$proto89["m_columns"][] = "area_definition";
$proto89["m_columns"][] = "mgt_cny_default_assignee";
$proto89["m_columns"][] = "landlord_default_assignee";
$proto89["m_columns"][] = "tenant_default_assignee";
$proto89["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "Manage Rooms";
$proto90=array();
$proto90["m_sql"] = "external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= external_property_groups_areas.id_area";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto0["m_fromlist"][]=$obj;
												$proto92=array();
$proto92["m_link"] = "SQLL_LEFTJOIN";
			$proto93=array();
$proto93["m_strName"] = "property_groups_countries";
$proto93["m_srcTableName"] = "Manage Rooms";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "id_country";
$proto93["m_columns"][] = "syst_created_datetime";
$proto93["m_columns"][] = "creation_system_id";
$proto93["m_columns"][] = "created_by_id";
$proto93["m_columns"][] = "syst_updated_datetime";
$proto93["m_columns"][] = "update_system_id";
$proto93["m_columns"][] = "updated_by_id";
$proto93["m_columns"][] = "is_obsolete";
$proto93["m_columns"][] = "is_default";
$proto93["m_columns"][] = "is_system";
$proto93["m_columns"][] = "order";
$proto93["m_columns"][] = "country_code";
$proto93["m_columns"][] = "country_name";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "Manage Rooms";
$proto94=array();
$proto94["m_sql"] = "external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= property_groups_countries.country_code";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto0["m_fromlist"][]=$obj;
												$proto96=array();
$proto96["m_link"] = "SQLL_LEFTJOIN";
			$proto97=array();
$proto97["m_strName"] = "property_level_3_rooms";
$proto97["m_srcTableName"] = "Manage Rooms";
$proto97["m_columns"] = array();
$proto97["m_columns"][] = "system_id_room";
$proto97["m_columns"][] = "create_api_request_id";
$proto97["m_columns"][] = "edit_api_request_id";
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
$proto97["m_columns"][] = "is_update_on_duplicate_key";
$proto97["m_columns"][] = "organization_id";
$proto97["m_columns"][] = "is_obsolete";
$proto97["m_columns"][] = "is_creation_needed_in_unee_t";
$proto97["m_columns"][] = "do_not_insert";
$proto97["m_columns"][] = "unee_t_unit_type";
$proto97["m_columns"][] = "system_id_unit";
$proto97["m_columns"][] = "room_type_id";
$proto97["m_columns"][] = "number_of_beds";
$proto97["m_columns"][] = "surface";
$proto97["m_columns"][] = "surface_measurment_unit";
$proto97["m_columns"][] = "room_designation";
$proto97["m_columns"][] = "room_description";
$proto97["m_columns"][] = "mgt_cny_default_assignee";
$proto97["m_columns"][] = "landlord_default_assignee";
$proto97["m_columns"][] = "tenant_default_assignee";
$proto97["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto97);

$proto96["m_table"] = $obj;
$proto96["m_sql"] = "LEFT OUTER JOIN property_level_3_rooms ON external_property_level_3_rooms.external_id = property_level_3_rooms.external_id AND external_property_level_3_rooms.external_system_id = property_level_3_rooms.external_system_id AND external_property_level_3_rooms.external_table = property_level_3_rooms.external_table AND external_property_level_3_rooms.created_by_id = property_level_3_rooms.organization_id";
$proto96["m_alias"] = "";
$proto96["m_srcTableName"] = "Manage Rooms";
$proto98=array();
$proto98["m_sql"] = "external_property_level_3_rooms.external_id = property_level_3_rooms.external_id AND external_property_level_3_rooms.external_system_id = property_level_3_rooms.external_system_id AND external_property_level_3_rooms.external_table = property_level_3_rooms.external_table AND external_property_level_3_rooms.created_by_id = property_level_3_rooms.organization_id";
$proto98["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_property_level_3_rooms.external_id = property_level_3_rooms.external_id AND external_property_level_3_rooms.external_system_id = property_level_3_rooms.external_system_id AND external_property_level_3_rooms.external_table = property_level_3_rooms.external_table AND external_property_level_3_rooms.created_by_id = property_level_3_rooms.organization_id"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
						$proto100=array();
$proto100["m_sql"] = "external_property_level_3_rooms.external_id = property_level_3_rooms.external_id";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "= property_level_3_rooms.external_id";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

			$proto98["m_contained"][]=$obj;
						$proto102=array();
$proto102["m_sql"] = "external_property_level_3_rooms.external_system_id = property_level_3_rooms.external_system_id";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "= property_level_3_rooms.external_system_id";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

			$proto98["m_contained"][]=$obj;
						$proto104=array();
$proto104["m_sql"] = "external_property_level_3_rooms.external_table = property_level_3_rooms.external_table";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= property_level_3_rooms.external_table";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

			$proto98["m_contained"][]=$obj;
						$proto106=array();
$proto106["m_sql"] = "external_property_level_3_rooms.created_by_id = property_level_3_rooms.organization_id";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= property_level_3_rooms.organization_id";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

			$proto98["m_contained"][]=$obj;
$proto98["m_strCase"] = "";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

$proto96["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto96);

$proto0["m_fromlist"][]=$obj;
												$proto108=array();
$proto108["m_link"] = "SQLL_LEFTJOIN";
			$proto109=array();
$proto109["m_strName"] = "ut_check_unee_t_updates_property_level_3";
$proto109["m_srcTableName"] = "Manage Rooms";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "system_id_room";
$proto109["m_columns"][] = "room_designation";
$proto109["m_columns"][] = "unee_t_mefe_unit_id";
$proto109["m_columns"][] = "uneet_name";
$proto109["m_columns"][] = "uneet_created_datetime";
$proto109["m_columns"][] = "is_unee_t_created_by_me";
$proto109["m_columns"][] = "creation_method";
$proto109["m_columns"][] = "update_method";
$proto109["m_columns"][] = "organization_id";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "LEFT OUTER JOIN ut_check_unee_t_updates_property_level_3 ON property_level_3_rooms.system_id_room = ut_check_unee_t_updates_property_level_3.system_id_room";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "Manage Rooms";
$proto110=array();
$proto110["m_sql"] = "property_level_3_rooms.system_id_room = ut_check_unee_t_updates_property_level_3.system_id_room";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "system_id_room",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= ut_check_unee_t_updates_property_level_3.system_id_room";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto112=array();
						$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Manage Rooms"
));

$proto112["m_column"]=$obj;
$proto112["m_bAsc"] = 1;
$proto112["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto112);

$proto0["m_orderby"][]=$obj;					
												$proto114=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Rooms"
));

$proto114["m_column"]=$obj;
$proto114["m_bAsc"] = 1;
$proto114["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto114);

$proto0["m_orderby"][]=$obj;					
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto116["m_column"]=$obj;
$proto116["m_bAsc"] = 1;
$proto116["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto116);

$proto0["m_orderby"][]=$obj;					
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Rooms"
));

$proto118["m_column"]=$obj;
$proto118["m_bAsc"] = 1;
$proto118["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto118);

$proto0["m_orderby"][]=$obj;					
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Rooms"
));

$proto120["m_column"]=$obj;
$proto120["m_bAsc"] = 1;
$proto120["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto120);

$proto0["m_orderby"][]=$obj;					
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Manage Rooms"
));

$proto122["m_column"]=$obj;
$proto122["m_bAsc"] = 1;
$proto122["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto122);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Manage Rooms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_Rooms = createSqlQuery_Manage_Rooms();


	
					
;

																																			

$tdataManage_Rooms[".sqlquery"] = $queryData_Manage_Rooms;

include_once(getabspath("include/Manage_Rooms_events.php"));
$tableEvents["Manage Rooms"] = new eventclass_Manage_Rooms;
$tdataManage_Rooms[".hasEvents"] = true;

?>