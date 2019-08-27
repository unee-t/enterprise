<?php




$tdataSearch_Rooms = array();
$tdataSearch_Rooms[".searchableFields"] = array();
	$tdataSearch_Rooms[".truncateText"] = true;
	$tdataSearch_Rooms[".NumberOfChars"] = 80;
	$tdataSearch_Rooms[".ShortName"] = "Search_Rooms";
	$tdataSearch_Rooms[".OwnerID"] = "organization_id";
	$tdataSearch_Rooms[".OriginalTable"] = "property_level_3_rooms";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdataSearch_Rooms[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataSearch_Rooms[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsSearch_Rooms = array();
$fieldToolTipsSearch_Rooms = array();
$pageTitlesSearch_Rooms = array();
$placeHoldersSearch_Rooms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSearch_Rooms["English"] = array();
	$fieldToolTipsSearch_Rooms["English"] = array();
	$placeHoldersSearch_Rooms["English"] = array();
	$pageTitlesSearch_Rooms["English"] = array();
	$fieldLabelsSearch_Rooms["English"]["system_id_room"] = "Id Room";
	$fieldToolTipsSearch_Rooms["English"]["system_id_room"] = "";
	$placeHoldersSearch_Rooms["English"]["system_id_room"] = "";
	$fieldLabelsSearch_Rooms["English"]["external_id"] = "External Id";
	$fieldToolTipsSearch_Rooms["English"]["external_id"] = "";
	$placeHoldersSearch_Rooms["English"]["external_id"] = "";
	$fieldLabelsSearch_Rooms["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsSearch_Rooms["English"]["external_system_id"] = "";
	$placeHoldersSearch_Rooms["English"]["external_system_id"] = "";
	$fieldLabelsSearch_Rooms["English"]["external_table"] = "External Table";
	$fieldToolTipsSearch_Rooms["English"]["external_table"] = "";
	$placeHoldersSearch_Rooms["English"]["external_table"] = "";
	$fieldLabelsSearch_Rooms["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsSearch_Rooms["English"]["organization_id"] = "";
	$placeHoldersSearch_Rooms["English"]["organization_id"] = "";
	$fieldLabelsSearch_Rooms["English"]["system_id_unit"] = "Unit";
	$fieldToolTipsSearch_Rooms["English"]["system_id_unit"] = "";
	$placeHoldersSearch_Rooms["English"]["system_id_unit"] = "";
	$fieldLabelsSearch_Rooms["English"]["room_designation"] = "Room";
	$fieldToolTipsSearch_Rooms["English"]["room_designation"] = "";
	$placeHoldersSearch_Rooms["English"]["room_designation"] = "";
	$fieldLabelsSearch_Rooms["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsSearch_Rooms["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersSearch_Rooms["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsSearch_Rooms["English"]["uneet_created_datetime"] = "Creation In Unee-T";
	$fieldToolTipsSearch_Rooms["English"]["uneet_created_datetime"] = "";
	$placeHoldersSearch_Rooms["English"]["uneet_created_datetime"] = "";
	$fieldLabelsSearch_Rooms["English"]["country_code"] = "Country";
	$fieldToolTipsSearch_Rooms["English"]["country_code"] = "";
	$placeHoldersSearch_Rooms["English"]["country_code"] = "";
	$fieldLabelsSearch_Rooms["English"]["country_name"] = "Country";
	$fieldToolTipsSearch_Rooms["English"]["country_name"] = "";
	$placeHoldersSearch_Rooms["English"]["country_name"] = "";
	$fieldLabelsSearch_Rooms["English"]["area_id"] = "Area";
	$fieldToolTipsSearch_Rooms["English"]["area_id"] = "";
	$placeHoldersSearch_Rooms["English"]["area_id"] = "";
	$fieldLabelsSearch_Rooms["English"]["area_name"] = "Area";
	$fieldToolTipsSearch_Rooms["English"]["area_name"] = "";
	$placeHoldersSearch_Rooms["English"]["area_name"] = "";
	$fieldLabelsSearch_Rooms["English"]["building_system_id"] = "Building";
	$fieldToolTipsSearch_Rooms["English"]["building_system_id"] = "";
	$placeHoldersSearch_Rooms["English"]["building_system_id"] = "";
	$fieldLabelsSearch_Rooms["English"]["building_name"] = "Building";
	$fieldToolTipsSearch_Rooms["English"]["building_name"] = "";
	$placeHoldersSearch_Rooms["English"]["building_name"] = "";
	$fieldLabelsSearch_Rooms["English"]["unit_name"] = "Unit";
	$fieldToolTipsSearch_Rooms["English"]["unit_name"] = "";
	$placeHoldersSearch_Rooms["English"]["unit_name"] = "";
	$fieldLabelsSearch_Rooms["English"]["order_area"] = "Order Area";
	$fieldToolTipsSearch_Rooms["English"]["order_area"] = "";
	$placeHoldersSearch_Rooms["English"]["order_area"] = "";
	$fieldLabelsSearch_Rooms["English"]["order_building"] = "Order Building";
	$fieldToolTipsSearch_Rooms["English"]["order_building"] = "";
	$placeHoldersSearch_Rooms["English"]["order_building"] = "";
	$fieldLabelsSearch_Rooms["English"]["is_room_obsolete"] = "Is Room Obsolete";
	$fieldToolTipsSearch_Rooms["English"]["is_room_obsolete"] = "";
	$placeHoldersSearch_Rooms["English"]["is_room_obsolete"] = "";
	if (count($fieldToolTipsSearch_Rooms["English"]))
		$tdataSearch_Rooms[".isUseToolTips"] = true;
}


	$tdataSearch_Rooms[".NCSearch"] = true;



$tdataSearch_Rooms[".shortTableName"] = "Search_Rooms";
$tdataSearch_Rooms[".nSecOptions"] = 1;

$tdataSearch_Rooms[".mainTableOwnerID"] = "organization_id";
$tdataSearch_Rooms[".entityType"] = 1;

$tdataSearch_Rooms[".strOriginalTableName"] = "property_level_3_rooms";

		 



$tdataSearch_Rooms[".showAddInPopup"] = false;

$tdataSearch_Rooms[".showEditInPopup"] = false;

$tdataSearch_Rooms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSearch_Rooms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSearch_Rooms[".listAjax"] = false;
//	temporary
$tdataSearch_Rooms[".listAjax"] = false;

	$tdataSearch_Rooms[".audit"] = false;

	$tdataSearch_Rooms[".locking"] = false;


$pages = $tdataSearch_Rooms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataSearch_Rooms[".edit"] = true;
	$tdataSearch_Rooms[".afterEditAction"] = 1;
	$tdataSearch_Rooms[".closePopupAfterEdit"] = 1;
	$tdataSearch_Rooms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataSearch_Rooms[".add"] = true;
$tdataSearch_Rooms[".afterAddAction"] = 1;
$tdataSearch_Rooms[".closePopupAfterAdd"] = 1;
$tdataSearch_Rooms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataSearch_Rooms[".list"] = true;
}



$tdataSearch_Rooms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataSearch_Rooms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataSearch_Rooms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataSearch_Rooms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataSearch_Rooms[".printFriendly"] = true;
}



$tdataSearch_Rooms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataSearch_Rooms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataSearch_Rooms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataSearch_Rooms[".isUseAjaxSuggest"] = true;

$tdataSearch_Rooms[".rowHighlite"] = true;





$tdataSearch_Rooms[".ajaxCodeSnippetAdded"] = false;

$tdataSearch_Rooms[".buttonsAdded"] = false;

$tdataSearch_Rooms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSearch_Rooms[".isUseTimeForSearch"] = false;


$tdataSearch_Rooms[".badgeColor"] = "4169E1";


$tdataSearch_Rooms[".allSearchFields"] = array();
$tdataSearch_Rooms[".filterFields"] = array();
$tdataSearch_Rooms[".requiredSearchFields"] = array();

$tdataSearch_Rooms[".googleLikeFields"] = array();
$tdataSearch_Rooms[".googleLikeFields"][] = "country_code";
$tdataSearch_Rooms[".googleLikeFields"][] = "country_name";
$tdataSearch_Rooms[".googleLikeFields"][] = "area_name";
$tdataSearch_Rooms[".googleLikeFields"][] = "building_name";
$tdataSearch_Rooms[".googleLikeFields"][] = "unit_name";
$tdataSearch_Rooms[".googleLikeFields"][] = "room_designation";
$tdataSearch_Rooms[".googleLikeFields"][] = "is_room_obsolete";



$tdataSearch_Rooms[".tableType"] = "list";

$tdataSearch_Rooms[".printerPageOrientation"] = 0;
$tdataSearch_Rooms[".nPrinterPageScale"] = 100;

$tdataSearch_Rooms[".nPrinterSplitRecords"] = 40;

$tdataSearch_Rooms[".nPrinterPDFSplitRecords"] = 40;


$tdataSearch_Rooms[".geocodingEnabled"] = false;










$tdataSearch_Rooms[".pageSize"] = 20;

$tdataSearch_Rooms[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY property_groups_countries.country_name, property_groups_areas.`order`, property_groups_areas.area_name, property_level_1_buildings.`order`, property_level_1_buildings.designation, property_level_2_units.designation, property_level_3_rooms.room_designation";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSearch_Rooms[".strOrderBy"] = $tstrOrderBy;

$tdataSearch_Rooms[".orderindexes"] = array();
	$tdataSearch_Rooms[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "property_groups_countries.country_name");

	$tdataSearch_Rooms[".orderindexes"][] = array(17, (1 ? "ASC" : "DESC"), "property_groups_areas.`order`");

	$tdataSearch_Rooms[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "property_groups_areas.area_name");

	$tdataSearch_Rooms[".orderindexes"][] = array(18, (1 ? "ASC" : "DESC"), "property_level_1_buildings.`order`");

	$tdataSearch_Rooms[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "property_level_1_buildings.designation");

	$tdataSearch_Rooms[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "property_level_2_units.designation");

	$tdataSearch_Rooms[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "property_level_3_rooms.room_designation");


$tdataSearch_Rooms[".sqlHead"] = "SELECT property_level_3_rooms.system_id_room,  property_level_3_rooms.external_id,  property_level_3_rooms.external_system_id,  property_level_3_rooms.external_table,  property_level_3_rooms.organization_id,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  property_level_1_buildings.country_code,  property_groups_countries.country_name,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  property_level_2_units.building_system_id,  property_level_1_buildings.designation AS building_name,  property_level_3_rooms.system_id_unit,  property_level_2_units.designation AS unit_name,  property_level_3_rooms.room_designation,  property_groups_areas.`order` AS order_area,  property_level_1_buildings.`order` AS order_building,  property_level_3_rooms.is_obsolete AS is_room_obsolete";
$tdataSearch_Rooms[".sqlFrom"] = "FROM property_level_3_rooms  INNER JOIN property_level_2_units ON property_level_3_rooms.system_id_unit = property_level_2_units.system_id_unit  INNER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  INNER JOIN ut_map_external_source_units ON property_level_3_rooms.external_id = ut_map_external_source_units.external_property_id AND property_level_3_rooms.external_system_id = ut_map_external_source_units.external_system AND property_level_3_rooms.external_table = ut_map_external_source_units.table_in_external_system AND property_level_3_rooms.organization_id = ut_map_external_source_units.organization_id";
$tdataSearch_Rooms[".sqlWhereExpr"] = "(ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL)";
$tdataSearch_Rooms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSearch_Rooms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSearch_Rooms[".arrGroupsPerPage"] = $arrGPP;

$tdataSearch_Rooms[".highlightSearchResults"] = true;

$tableKeysSearch_Rooms = array();
$tableKeysSearch_Rooms[] = "external_id";
$tableKeysSearch_Rooms[] = "external_system_id";
$tableKeysSearch_Rooms[] = "external_table";
$tableKeysSearch_Rooms[] = "organization_id";
$tdataSearch_Rooms[".Keys"] = $tableKeysSearch_Rooms;


$tdataSearch_Rooms[".hideMobileList"] = array();




//	system_id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_room";
	$fdata["GoodName"] = "system_id_room";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","system_id_room");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "system_id_room";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.system_id_room";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataSearch_Rooms["system_id_room"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "system_id_room";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.external_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["external_id"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.external_system_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["external_system_id"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.external_table";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["external_table"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "external_table";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.organization_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataSearch_Rooms["organization_id"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "organization_id";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.unee_t_mefe_unit_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["unee_t_mefe_unit_id"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "unee_t_mefe_unit_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.uneet_created_datetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["uneet_created_datetime"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "uneet_created_datetime";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","country_code");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["country_code"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","country_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["country_name"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "country_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","area_id");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["area_id"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","area_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["area_name"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "area_name";
//	building_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "building_system_id";
	$fdata["GoodName"] = "building_system_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","building_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "building_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_2_units.building_system_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["building_system_id"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "building_system_id";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","building_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["building_name"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "building_name";
//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","system_id_unit");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "system_id_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.system_id_unit";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["system_id_unit"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "system_id_unit";
//	unit_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "unit_name";
	$fdata["GoodName"] = "unit_name";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","unit_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["unit_name"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "unit_name";
//	room_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "room_designation";
	$fdata["GoodName"] = "room_designation";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","room_designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "room_designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.room_designation";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["room_designation"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "room_designation";
//	order_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "order_area";
	$fdata["GoodName"] = "order_area";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","order_area");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_areas.`order`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataSearch_Rooms["order_area"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "order_area";
//	order_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "order_building";
	$fdata["GoodName"] = "order_building";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","order_building");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.`order`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["order_building"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "order_building";
//	is_room_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_room_obsolete";
	$fdata["GoodName"] = "is_room_obsolete";
	$fdata["ownerTable"] = "property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Search_Rooms","is_room_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_3_rooms.is_obsolete";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataSearch_Rooms["is_room_obsolete"] = $fdata;
		$tdataSearch_Rooms[".searchableFields"][] = "is_room_obsolete";


$tables_data["Search Rooms"]=&$tdataSearch_Rooms;
$field_labels["Search_Rooms"] = &$fieldLabelsSearch_Rooms;
$fieldToolTips["Search_Rooms"] = &$fieldToolTipsSearch_Rooms;
$placeHolders["Search_Rooms"] = &$placeHoldersSearch_Rooms;
$page_titles["Search_Rooms"] = &$pageTitlesSearch_Rooms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Search Rooms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Search Rooms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Search_Rooms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "property_level_3_rooms.system_id_room,  property_level_3_rooms.external_id,  property_level_3_rooms.external_system_id,  property_level_3_rooms.external_table,  property_level_3_rooms.organization_id,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  property_level_1_buildings.country_code,  property_groups_countries.country_name,  property_level_1_buildings.area_id,  property_groups_areas.area_name,  property_level_2_units.building_system_id,  property_level_1_buildings.designation AS building_name,  property_level_3_rooms.system_id_unit,  property_level_2_units.designation AS unit_name,  property_level_3_rooms.room_designation,  property_groups_areas.`order` AS order_area,  property_level_1_buildings.`order` AS order_building,  property_level_3_rooms.is_obsolete AS is_room_obsolete";
$proto0["m_strFrom"] = "FROM property_level_3_rooms  INNER JOIN property_level_2_units ON property_level_3_rooms.system_id_unit = property_level_2_units.system_id_unit  INNER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building  LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  INNER JOIN ut_map_external_source_units ON property_level_3_rooms.external_id = ut_map_external_source_units.external_property_id AND property_level_3_rooms.external_system_id = ut_map_external_source_units.external_system AND property_level_3_rooms.external_table = ut_map_external_source_units.table_in_external_system AND property_level_3_rooms.organization_id = ut_map_external_source_units.organization_id";
$proto0["m_strWhere"] = "(ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL)";
$proto0["m_strOrderBy"] = "ORDER BY property_groups_countries.country_name, property_groups_areas.`order`, property_groups_areas.area_name, property_level_1_buildings.`order`, property_level_1_buildings.designation, property_level_2_units.designation, property_level_3_rooms.room_designation";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Rooms"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "IS NOT NULL";
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
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto6["m_sql"] = "property_level_3_rooms.system_id_room";
$proto6["m_srcTableName"] = "Search Rooms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto8["m_sql"] = "property_level_3_rooms.external_id";
$proto8["m_srcTableName"] = "Search Rooms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto10["m_sql"] = "property_level_3_rooms.external_system_id";
$proto10["m_srcTableName"] = "Search Rooms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto12["m_sql"] = "property_level_3_rooms.external_table";
$proto12["m_srcTableName"] = "Search Rooms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto14["m_sql"] = "property_level_3_rooms.organization_id";
$proto14["m_srcTableName"] = "Search Rooms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Rooms"
));

$proto16["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id";
$proto16["m_srcTableName"] = "Search Rooms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Rooms"
));

$proto18["m_sql"] = "ut_map_external_source_units.uneet_created_datetime";
$proto18["m_srcTableName"] = "Search Rooms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto20["m_sql"] = "property_level_1_buildings.country_code";
$proto20["m_srcTableName"] = "Search Rooms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Search Rooms"
));

$proto22["m_sql"] = "property_groups_countries.country_name";
$proto22["m_srcTableName"] = "Search Rooms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto24["m_sql"] = "property_level_1_buildings.area_id";
$proto24["m_srcTableName"] = "Search Rooms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Rooms"
));

$proto26["m_sql"] = "property_groups_areas.area_name";
$proto26["m_srcTableName"] = "Search Rooms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Search Rooms"
));

$proto28["m_sql"] = "property_level_2_units.building_system_id";
$proto28["m_srcTableName"] = "Search Rooms";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto30["m_sql"] = "property_level_1_buildings.designation";
$proto30["m_srcTableName"] = "Search Rooms";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto32["m_sql"] = "property_level_3_rooms.system_id_unit";
$proto32["m_srcTableName"] = "Search Rooms";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Search Rooms"
));

$proto34["m_sql"] = "property_level_2_units.designation";
$proto34["m_srcTableName"] = "Search Rooms";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "unit_name";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto36["m_sql"] = "property_level_3_rooms.room_designation";
$proto36["m_srcTableName"] = "Search Rooms";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Rooms"
));

$proto38["m_sql"] = "property_groups_areas.`order`";
$proto38["m_srcTableName"] = "Search Rooms";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "order_area";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto40["m_sql"] = "property_level_1_buildings.`order`";
$proto40["m_srcTableName"] = "Search Rooms";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "order_building";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto42["m_sql"] = "property_level_3_rooms.is_obsolete";
$proto42["m_srcTableName"] = "Search Rooms";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "is_room_obsolete";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "property_level_3_rooms";
$proto45["m_srcTableName"] = "Search Rooms";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "system_id_room";
$proto45["m_columns"][] = "create_api_request_id";
$proto45["m_columns"][] = "edit_api_request_id";
$proto45["m_columns"][] = "external_id";
$proto45["m_columns"][] = "external_system_id";
$proto45["m_columns"][] = "external_table";
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
$proto45["m_columns"][] = "is_creation_needed_in_unee_t";
$proto45["m_columns"][] = "do_not_insert";
$proto45["m_columns"][] = "unee_t_unit_type";
$proto45["m_columns"][] = "system_id_unit";
$proto45["m_columns"][] = "room_type_id";
$proto45["m_columns"][] = "number_of_beds";
$proto45["m_columns"][] = "surface";
$proto45["m_columns"][] = "surface_measurment_unit";
$proto45["m_columns"][] = "room_designation";
$proto45["m_columns"][] = "room_description";
$proto45["m_columns"][] = "mgt_cny_default_assignee";
$proto45["m_columns"][] = "landlord_default_assignee";
$proto45["m_columns"][] = "tenant_default_assignee";
$proto45["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "property_level_3_rooms";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Search Rooms";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_INNERJOIN";
			$proto49=array();
$proto49["m_strName"] = "property_level_2_units";
$proto49["m_srcTableName"] = "Search Rooms";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "system_id_unit";
$proto49["m_columns"][] = "create_api_request_id";
$proto49["m_columns"][] = "edit_api_request_id";
$proto49["m_columns"][] = "external_id";
$proto49["m_columns"][] = "external_system_id";
$proto49["m_columns"][] = "external_table";
$proto49["m_columns"][] = "syst_created_datetime";
$proto49["m_columns"][] = "creation_system_id";
$proto49["m_columns"][] = "created_by_id";
$proto49["m_columns"][] = "creation_method";
$proto49["m_columns"][] = "syst_updated_datetime";
$proto49["m_columns"][] = "update_system_id";
$proto49["m_columns"][] = "updated_by_id";
$proto49["m_columns"][] = "update_method";
$proto49["m_columns"][] = "is_update_on_duplicate_key";
$proto49["m_columns"][] = "organization_id";
$proto49["m_columns"][] = "activated_by_id";
$proto49["m_columns"][] = "is_obsolete";
$proto49["m_columns"][] = "is_creation_needed_in_unee_t";
$proto49["m_columns"][] = "do_not_insert";
$proto49["m_columns"][] = "unee_t_unit_type";
$proto49["m_columns"][] = "building_system_id";
$proto49["m_columns"][] = "tower";
$proto49["m_columns"][] = "unit_category_id";
$proto49["m_columns"][] = "designation";
$proto49["m_columns"][] = "count_rooms";
$proto49["m_columns"][] = "unit_id";
$proto49["m_columns"][] = "surface";
$proto49["m_columns"][] = "surface_measurment_unit";
$proto49["m_columns"][] = "description";
$proto49["m_columns"][] = "mgt_cny_default_assignee";
$proto49["m_columns"][] = "landlord_default_assignee";
$proto49["m_columns"][] = "tenant_default_assignee";
$proto49["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "INNER JOIN property_level_2_units ON property_level_3_rooms.system_id_unit = property_level_2_units.system_id_unit";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Search Rooms";
$proto50=array();
$proto50["m_sql"] = "property_level_3_rooms.system_id_unit = property_level_2_units.system_id_unit";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= property_level_2_units.system_id_unit";
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
$proto53["m_strName"] = "property_level_1_buildings";
$proto53["m_srcTableName"] = "Search Rooms";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_building";
$proto53["m_columns"][] = "create_api_request_id";
$proto53["m_columns"][] = "edit_api_request_id";
$proto53["m_columns"][] = "external_id";
$proto53["m_columns"][] = "external_system_id";
$proto53["m_columns"][] = "external_table";
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
$proto53["m_columns"][] = "order";
$proto53["m_columns"][] = "area_id";
$proto53["m_columns"][] = "is_creation_needed_in_unee_t";
$proto53["m_columns"][] = "do_not_insert";
$proto53["m_columns"][] = "unee_t_unit_type";
$proto53["m_columns"][] = "designation";
$proto53["m_columns"][] = "tower";
$proto53["m_columns"][] = "address_1";
$proto53["m_columns"][] = "address_2";
$proto53["m_columns"][] = "zip_postal_code";
$proto53["m_columns"][] = "state";
$proto53["m_columns"][] = "city";
$proto53["m_columns"][] = "country_code";
$proto53["m_columns"][] = "description";
$proto53["m_columns"][] = "mgt_cny_default_assignee";
$proto53["m_columns"][] = "landlord_default_assignee";
$proto53["m_columns"][] = "tenant_default_assignee";
$proto53["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN property_level_1_buildings ON property_level_2_units.building_system_id = property_level_1_buildings.id_building";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Search Rooms";
$proto54=array();
$proto54["m_sql"] = "property_level_2_units.building_system_id = property_level_1_buildings.id_building";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Search Rooms"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= property_level_1_buildings.id_building";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "property_groups_areas";
$proto57["m_srcTableName"] = "Search Rooms";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id_area";
$proto57["m_columns"][] = "create_api_request_id";
$proto57["m_columns"][] = "edit_api_request_id";
$proto57["m_columns"][] = "external_id";
$proto57["m_columns"][] = "external_system_id";
$proto57["m_columns"][] = "external_table";
$proto57["m_columns"][] = "syst_created_datetime";
$proto57["m_columns"][] = "creation_system_id";
$proto57["m_columns"][] = "created_by_id";
$proto57["m_columns"][] = "creation_method";
$proto57["m_columns"][] = "syst_updated_datetime";
$proto57["m_columns"][] = "update_system_id";
$proto57["m_columns"][] = "updated_by_id";
$proto57["m_columns"][] = "update_method";
$proto57["m_columns"][] = "is_update_on_duplicate_key";
$proto57["m_columns"][] = "is_creation_needed_in_unee_t";
$proto57["m_columns"][] = "organization_id";
$proto57["m_columns"][] = "country_code";
$proto57["m_columns"][] = "is_obsolete";
$proto57["m_columns"][] = "is_default";
$proto57["m_columns"][] = "order";
$proto57["m_columns"][] = "area_name";
$proto57["m_columns"][] = "area_definition";
$proto57["m_columns"][] = "mgt_cny_default_assignee";
$proto57["m_columns"][] = "landlord_default_assignee";
$proto57["m_columns"][] = "tenant_default_assignee";
$proto57["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "Search Rooms";
$proto58=array();
$proto58["m_sql"] = "property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= property_groups_areas.id_area";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
												$proto60=array();
$proto60["m_link"] = "SQLL_LEFTJOIN";
			$proto61=array();
$proto61["m_strName"] = "property_groups_countries";
$proto61["m_srcTableName"] = "Search Rooms";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id_country";
$proto61["m_columns"][] = "syst_created_datetime";
$proto61["m_columns"][] = "creation_system_id";
$proto61["m_columns"][] = "created_by_id";
$proto61["m_columns"][] = "syst_updated_datetime";
$proto61["m_columns"][] = "update_system_id";
$proto61["m_columns"][] = "updated_by_id";
$proto61["m_columns"][] = "is_obsolete";
$proto61["m_columns"][] = "is_default";
$proto61["m_columns"][] = "is_system";
$proto61["m_columns"][] = "order";
$proto61["m_columns"][] = "country_code";
$proto61["m_columns"][] = "country_name";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "Search Rooms";
$proto62=array();
$proto62["m_sql"] = "property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= property_groups_countries.country_code";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
												$proto64=array();
$proto64["m_link"] = "SQLL_INNERJOIN";
			$proto65=array();
$proto65["m_strName"] = "ut_map_external_source_units";
$proto65["m_srcTableName"] = "Search Rooms";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "id_map";
$proto65["m_columns"][] = "create_api_request_id";
$proto65["m_columns"][] = "edit_api_request_id";
$proto65["m_columns"][] = "syst_created_datetime";
$proto65["m_columns"][] = "creation_system_id";
$proto65["m_columns"][] = "created_by_id";
$proto65["m_columns"][] = "creation_method";
$proto65["m_columns"][] = "syst_updated_datetime";
$proto65["m_columns"][] = "update_system_id";
$proto65["m_columns"][] = "updated_by_id";
$proto65["m_columns"][] = "update_method";
$proto65["m_columns"][] = "is_update_on_duplicate_key";
$proto65["m_columns"][] = "organization_id";
$proto65["m_columns"][] = "is_obsolete";
$proto65["m_columns"][] = "is_update_needed";
$proto65["m_columns"][] = "mefe_area_id";
$proto65["m_columns"][] = "mefe_unit_id_parent";
$proto65["m_columns"][] = "unee_t_mefe_unit_id";
$proto65["m_columns"][] = "uneet_created_datetime";
$proto65["m_columns"][] = "is_mefe_api_success";
$proto65["m_columns"][] = "mefe_api_error_message";
$proto65["m_columns"][] = "is_unee_t_created_by_me";
$proto65["m_columns"][] = "unee_t_unit_type";
$proto65["m_columns"][] = "uneet_name";
$proto65["m_columns"][] = "new_record_id";
$proto65["m_columns"][] = "external_property_type_id";
$proto65["m_columns"][] = "external_property_id";
$proto65["m_columns"][] = "external_system";
$proto65["m_columns"][] = "table_in_external_system";
$proto65["m_columns"][] = "tower";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "INNER JOIN ut_map_external_source_units ON property_level_3_rooms.external_id = ut_map_external_source_units.external_property_id AND property_level_3_rooms.external_system_id = ut_map_external_source_units.external_system AND property_level_3_rooms.external_table = ut_map_external_source_units.table_in_external_system AND property_level_3_rooms.organization_id = ut_map_external_source_units.organization_id";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "Search Rooms";
$proto66=array();
$proto66["m_sql"] = "property_level_3_rooms.external_id = ut_map_external_source_units.external_property_id AND property_level_3_rooms.external_system_id = ut_map_external_source_units.external_system AND property_level_3_rooms.external_table = ut_map_external_source_units.table_in_external_system AND property_level_3_rooms.organization_id = ut_map_external_source_units.organization_id";
$proto66["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "property_level_3_rooms.external_id = ut_map_external_source_units.external_property_id AND property_level_3_rooms.external_system_id = ut_map_external_source_units.external_system AND property_level_3_rooms.external_table = ut_map_external_source_units.table_in_external_system AND property_level_3_rooms.organization_id = ut_map_external_source_units.organization_id"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
						$proto68=array();
$proto68["m_sql"] = "property_level_3_rooms.external_id = ut_map_external_source_units.external_property_id";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= ut_map_external_source_units.external_property_id";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

			$proto66["m_contained"][]=$obj;
						$proto70=array();
$proto70["m_sql"] = "property_level_3_rooms.external_system_id = ut_map_external_source_units.external_system";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= ut_map_external_source_units.external_system";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

			$proto66["m_contained"][]=$obj;
						$proto72=array();
$proto72["m_sql"] = "property_level_3_rooms.external_table = ut_map_external_source_units.table_in_external_system";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= ut_map_external_source_units.table_in_external_system";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

			$proto66["m_contained"][]=$obj;
						$proto74=array();
$proto74["m_sql"] = "property_level_3_rooms.organization_id = ut_map_external_source_units.organization_id";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= ut_map_external_source_units.organization_id";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

			$proto66["m_contained"][]=$obj;
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Search Rooms"
));

$proto76["m_column"]=$obj;
$proto76["m_bAsc"] = 1;
$proto76["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto76);

$proto0["m_orderby"][]=$obj;					
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Rooms"
));

$proto78["m_column"]=$obj;
$proto78["m_bAsc"] = 1;
$proto78["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto78);

$proto0["m_orderby"][]=$obj;					
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Rooms"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 1;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
												$proto82=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto82["m_column"]=$obj;
$proto82["m_bAsc"] = 1;
$proto82["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto82);

$proto0["m_orderby"][]=$obj;					
												$proto84=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Rooms"
));

$proto84["m_column"]=$obj;
$proto84["m_bAsc"] = 1;
$proto84["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto84);

$proto0["m_orderby"][]=$obj;					
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Search Rooms"
));

$proto86["m_column"]=$obj;
$proto86["m_bAsc"] = 1;
$proto86["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto86);

$proto0["m_orderby"][]=$obj;					
												$proto88=array();
						$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "property_level_3_rooms",
	"m_srcTableName" => "Search Rooms"
));

$proto88["m_column"]=$obj;
$proto88["m_bAsc"] = 1;
$proto88["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto88);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Search Rooms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Search_Rooms = createSqlQuery_Search_Rooms();


	
					
;

																			

$tdataSearch_Rooms[".sqlquery"] = $queryData_Search_Rooms;

$tableEvents["Search Rooms"] = new eventsBase;
$tdataSearch_Rooms[".hasEvents"] = false;

?>