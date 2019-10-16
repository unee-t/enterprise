<?php



$tdataSearch_All_Units = array();
$tdataSearch_All_Units[".searchableFields"] = array();
$tdataSearch_All_Units[".ShortName"] = "Search_All_Units";
$tdataSearch_All_Units[".OwnerID"] = "created_by_id";
$tdataSearch_All_Units[".OriginalTable"] = "external_property_level_2_units";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataSearch_All_Units[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataSearch_All_Units[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataSearch_All_Units[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsSearch_All_Units = array();
$fieldToolTipsSearch_All_Units = array();
$pageTitlesSearch_All_Units = array();
$placeHoldersSearch_All_Units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSearch_All_Units["English"] = array();
	$fieldToolTipsSearch_All_Units["English"] = array();
	$placeHoldersSearch_All_Units["English"] = array();
	$pageTitlesSearch_All_Units["English"] = array();
	$fieldLabelsSearch_All_Units["English"]["system_id_unit"] = "ID";
	$fieldToolTipsSearch_All_Units["English"]["system_id_unit"] = "";
	$placeHoldersSearch_All_Units["English"]["system_id_unit"] = "";
	$fieldLabelsSearch_All_Units["English"]["external_id"] = "External Id";
	$fieldToolTipsSearch_All_Units["English"]["external_id"] = "";
	$placeHoldersSearch_All_Units["English"]["external_id"] = "";
	$fieldLabelsSearch_All_Units["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsSearch_All_Units["English"]["external_system_id"] = "";
	$placeHoldersSearch_All_Units["English"]["external_system_id"] = "";
	$fieldLabelsSearch_All_Units["English"]["external_table"] = "External Table";
	$fieldToolTipsSearch_All_Units["English"]["external_table"] = "";
	$placeHoldersSearch_All_Units["English"]["external_table"] = "";
	$fieldLabelsSearch_All_Units["English"]["building_system_id"] = "Building System Id";
	$fieldToolTipsSearch_All_Units["English"]["building_system_id"] = "";
	$placeHoldersSearch_All_Units["English"]["building_system_id"] = "";
	$fieldLabelsSearch_All_Units["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsSearch_All_Units["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersSearch_All_Units["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsSearch_All_Units["English"]["uneet_created_datetime"] = "Unee-T Creation";
	$fieldToolTipsSearch_All_Units["English"]["uneet_created_datetime"] = "";
	$placeHoldersSearch_All_Units["English"]["uneet_created_datetime"] = "";
	$fieldLabelsSearch_All_Units["English"]["country_code"] = "Country Code";
	$fieldToolTipsSearch_All_Units["English"]["country_code"] = "";
	$placeHoldersSearch_All_Units["English"]["country_code"] = "";
	$fieldLabelsSearch_All_Units["English"]["country_name"] = "Country Name";
	$fieldToolTipsSearch_All_Units["English"]["country_name"] = "";
	$placeHoldersSearch_All_Units["English"]["country_name"] = "";
	$fieldLabelsSearch_All_Units["English"]["area_id"] = "Area Id";
	$fieldToolTipsSearch_All_Units["English"]["area_id"] = "";
	$placeHoldersSearch_All_Units["English"]["area_id"] = "";
	$fieldLabelsSearch_All_Units["English"]["area_name"] = "Area Name";
	$fieldToolTipsSearch_All_Units["English"]["area_name"] = "";
	$placeHoldersSearch_All_Units["English"]["area_name"] = "";
	$fieldLabelsSearch_All_Units["English"]["building_name"] = "Building Name";
	$fieldToolTipsSearch_All_Units["English"]["building_name"] = "";
	$placeHoldersSearch_All_Units["English"]["building_name"] = "";
	$fieldLabelsSearch_All_Units["English"]["unit_name"] = "Unit Name";
	$fieldToolTipsSearch_All_Units["English"]["unit_name"] = "";
	$placeHoldersSearch_All_Units["English"]["unit_name"] = "";
	$fieldLabelsSearch_All_Units["English"]["order_area"] = "Order Area";
	$fieldToolTipsSearch_All_Units["English"]["order_area"] = "";
	$placeHoldersSearch_All_Units["English"]["order_area"] = "";
	$fieldLabelsSearch_All_Units["English"]["order_building"] = "Order Building";
	$fieldToolTipsSearch_All_Units["English"]["order_building"] = "";
	$placeHoldersSearch_All_Units["English"]["order_building"] = "";
	$fieldLabelsSearch_All_Units["English"]["is_unit_obsolete"] = "Is Unit Obsolete";
	$fieldToolTipsSearch_All_Units["English"]["is_unit_obsolete"] = "";
	$placeHoldersSearch_All_Units["English"]["is_unit_obsolete"] = "";
	$fieldLabelsSearch_All_Units["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsSearch_All_Units["English"]["created_by_id"] = "";
	$placeHoldersSearch_All_Units["English"]["created_by_id"] = "";
	if (count($fieldToolTipsSearch_All_Units["English"]))
		$tdataSearch_All_Units[".isUseToolTips"] = true;
}


	$tdataSearch_All_Units[".NCSearch"] = true;



$tdataSearch_All_Units[".shortTableName"] = "Search_All_Units";
$tdataSearch_All_Units[".nSecOptions"] = 1;

$tdataSearch_All_Units[".mainTableOwnerID"] = "created_by_id";
$tdataSearch_All_Units[".entityType"] = 1;

$tdataSearch_All_Units[".strOriginalTableName"] = "external_property_level_2_units";

		 



$tdataSearch_All_Units[".showAddInPopup"] = false;

$tdataSearch_All_Units[".showEditInPopup"] = false;

$tdataSearch_All_Units[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSearch_All_Units[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSearch_All_Units[".listAjax"] = false;
//	temporary
$tdataSearch_All_Units[".listAjax"] = false;

	$tdataSearch_All_Units[".audit"] = false;

	$tdataSearch_All_Units[".locking"] = false;


$pages = $tdataSearch_All_Units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataSearch_All_Units[".edit"] = true;
	$tdataSearch_All_Units[".afterEditAction"] = 1;
	$tdataSearch_All_Units[".closePopupAfterEdit"] = 1;
	$tdataSearch_All_Units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataSearch_All_Units[".add"] = true;
$tdataSearch_All_Units[".afterAddAction"] = 1;
$tdataSearch_All_Units[".closePopupAfterAdd"] = 1;
$tdataSearch_All_Units[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataSearch_All_Units[".list"] = true;
}



$tdataSearch_All_Units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataSearch_All_Units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataSearch_All_Units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataSearch_All_Units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataSearch_All_Units[".printFriendly"] = true;
}



$tdataSearch_All_Units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataSearch_All_Units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataSearch_All_Units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataSearch_All_Units[".isUseAjaxSuggest"] = true;

$tdataSearch_All_Units[".rowHighlite"] = true;





$tdataSearch_All_Units[".ajaxCodeSnippetAdded"] = false;

$tdataSearch_All_Units[".buttonsAdded"] = false;

$tdataSearch_All_Units[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSearch_All_Units[".isUseTimeForSearch"] = false;


$tdataSearch_All_Units[".badgeColor"] = "DAA520";


$tdataSearch_All_Units[".allSearchFields"] = array();
$tdataSearch_All_Units[".filterFields"] = array();
$tdataSearch_All_Units[".requiredSearchFields"] = array();

$tdataSearch_All_Units[".googleLikeFields"] = array();
$tdataSearch_All_Units[".googleLikeFields"][] = "created_by_id";
$tdataSearch_All_Units[".googleLikeFields"][] = "country_name";
$tdataSearch_All_Units[".googleLikeFields"][] = "area_name";
$tdataSearch_All_Units[".googleLikeFields"][] = "building_name";
$tdataSearch_All_Units[".googleLikeFields"][] = "unit_name";



$tdataSearch_All_Units[".tableType"] = "list";

$tdataSearch_All_Units[".printerPageOrientation"] = 0;
$tdataSearch_All_Units[".nPrinterPageScale"] = 100;

$tdataSearch_All_Units[".nPrinterSplitRecords"] = 40;

$tdataSearch_All_Units[".geocodingEnabled"] = false;










$tdataSearch_All_Units[".pageSize"] = 20;

$tdataSearch_All_Units[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_groups_areas.area_name, external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, external_property_level_2_units.designation";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSearch_All_Units[".strOrderBy"] = $tstrOrderBy;

$tdataSearch_All_Units[".orderindexes"] = array();
	$tdataSearch_All_Units[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "property_groups_countries.country_name");

	$tdataSearch_All_Units[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "external_property_groups_areas.`order`");

	$tdataSearch_All_Units[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "external_property_groups_areas.area_name");

	$tdataSearch_All_Units[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.`order`");

	$tdataSearch_All_Units[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.designation");

	$tdataSearch_All_Units[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "external_property_level_2_units.designation");


$tdataSearch_All_Units[".sqlHead"] = "SELECT external_property_level_2_units.system_id_unit,  external_property_level_2_units.external_id,  external_property_level_2_units.external_system_id,  external_property_level_2_units.external_table,  external_property_level_2_units.created_by_id,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_2_units.building_system_id,  external_property_level_1_buildings.designation AS building_name,  external_property_level_2_units.designation AS unit_name,  external_property_groups_areas.`order` AS order_area,  external_property_level_1_buildings.`order` AS order_building,  external_property_level_2_units.is_obsolete AS is_unit_obsolete";
$tdataSearch_All_Units[".sqlFrom"] = "FROM external_property_level_2_units  INNER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_map_external_source_units   ON external_property_level_2_units.external_id = ut_map_external_source_units.external_property_id   AND external_property_level_2_units.external_system_id = ut_map_external_source_units.external_system   AND external_property_level_2_units.external_table = ut_map_external_source_units.table_in_external_system   AND external_property_level_2_units.created_by_id = ut_map_external_source_units.organization_id";
$tdataSearch_All_Units[".sqlWhereExpr"] = "";
$tdataSearch_All_Units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSearch_All_Units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSearch_All_Units[".arrGroupsPerPage"] = $arrGPP;

$tdataSearch_All_Units[".highlightSearchResults"] = true;

$tableKeysSearch_All_Units = array();
$tableKeysSearch_All_Units[] = "external_id";
$tableKeysSearch_All_Units[] = "external_system_id";
$tableKeysSearch_All_Units[] = "external_table";
$tdataSearch_All_Units[".Keys"] = $tableKeysSearch_All_Units;


$tdataSearch_All_Units[".hideMobileList"] = array();




//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","system_id_unit");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "system_id_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.system_id_unit";

	
	
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


	$tdataSearch_All_Units["system_id_unit"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "system_id_unit";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.external_id";

	
	
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


	$tdataSearch_All_Units["external_id"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.external_system_id";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataSearch_All_Units["external_system_id"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","external_table");
	$fdata["FieldType"] = 13;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.external_table";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataSearch_All_Units["external_table"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "external_table";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.created_by_id";

	
	
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


	$tdataSearch_All_Units["created_by_id"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "created_by_id";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.unee_t_mefe_unit_id";

	
	
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


	$tdataSearch_All_Units["unee_t_mefe_unit_id"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "unee_t_mefe_unit_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.uneet_created_datetime";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataSearch_All_Units["uneet_created_datetime"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "uneet_created_datetime";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","country_code");
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


	$tdataSearch_All_Units["country_code"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","country_name");
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


	$tdataSearch_All_Units["country_name"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "country_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","area_id");
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


	$tdataSearch_All_Units["area_id"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","area_name");
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


	$tdataSearch_All_Units["area_name"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "area_name";
//	building_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "building_system_id";
	$fdata["GoodName"] = "building_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","building_system_id");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_building";

	

	
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


	$tdataSearch_All_Units["building_system_id"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "building_system_id";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","building_name");
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


	$tdataSearch_All_Units["building_name"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "building_name";
//	unit_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "unit_name";
	$fdata["GoodName"] = "unit_name";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","unit_name");
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


	$tdataSearch_All_Units["unit_name"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "unit_name";
//	order_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "order_area";
	$fdata["GoodName"] = "order_area";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","order_area");
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


	$tdataSearch_All_Units["order_area"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "order_area";
//	order_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "order_building";
	$fdata["GoodName"] = "order_building";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","order_building");
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


	$tdataSearch_All_Units["order_building"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "order_building";
//	is_unit_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_unit_obsolete";
	$fdata["GoodName"] = "is_unit_obsolete";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Search_All_Units","is_unit_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.is_obsolete";

	
	
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


	$tdataSearch_All_Units["is_unit_obsolete"] = $fdata;
		$tdataSearch_All_Units[".searchableFields"][] = "is_unit_obsolete";


$tables_data["Search All Units"]=&$tdataSearch_All_Units;
$field_labels["Search_All_Units"] = &$fieldLabelsSearch_All_Units;
$fieldToolTips["Search_All_Units"] = &$fieldToolTipsSearch_All_Units;
$placeHolders["Search_All_Units"] = &$placeHoldersSearch_All_Units;
$page_titles["Search_All_Units"] = &$pageTitlesSearch_All_Units;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Search All Units"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Search All Units"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Search_All_Units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_2_units.system_id_unit,  external_property_level_2_units.external_id,  external_property_level_2_units.external_system_id,  external_property_level_2_units.external_table,  external_property_level_2_units.created_by_id,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_2_units.building_system_id,  external_property_level_1_buildings.designation AS building_name,  external_property_level_2_units.designation AS unit_name,  external_property_groups_areas.`order` AS order_area,  external_property_level_1_buildings.`order` AS order_building,  external_property_level_2_units.is_obsolete AS is_unit_obsolete";
$proto0["m_strFrom"] = "FROM external_property_level_2_units  INNER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_map_external_source_units   ON external_property_level_2_units.external_id = ut_map_external_source_units.external_property_id   AND external_property_level_2_units.external_system_id = ut_map_external_source_units.external_system   AND external_property_level_2_units.external_table = ut_map_external_source_units.table_in_external_system   AND external_property_level_2_units.created_by_id = ut_map_external_source_units.organization_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_groups_areas.area_name, external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, external_property_level_2_units.designation";
	
					
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
	"m_strName" => "system_id_unit",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto6["m_sql"] = "external_property_level_2_units.system_id_unit";
$proto6["m_srcTableName"] = "Search All Units";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto8["m_sql"] = "external_property_level_2_units.external_id";
$proto8["m_srcTableName"] = "Search All Units";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto10["m_sql"] = "external_property_level_2_units.external_system_id";
$proto10["m_srcTableName"] = "Search All Units";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto12["m_sql"] = "external_property_level_2_units.external_table";
$proto12["m_srcTableName"] = "Search All Units";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto14["m_sql"] = "external_property_level_2_units.created_by_id";
$proto14["m_srcTableName"] = "Search All Units";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search All Units"
));

$proto16["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id";
$proto16["m_srcTableName"] = "Search All Units";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search All Units"
));

$proto18["m_sql"] = "ut_map_external_source_units.uneet_created_datetime";
$proto18["m_srcTableName"] = "Search All Units";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto20["m_sql"] = "external_property_level_1_buildings.country_code";
$proto20["m_srcTableName"] = "Search All Units";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Search All Units"
));

$proto22["m_sql"] = "property_groups_countries.country_name";
$proto22["m_srcTableName"] = "Search All Units";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto24["m_sql"] = "external_property_level_1_buildings.area_id";
$proto24["m_srcTableName"] = "Search All Units";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Search All Units"
));

$proto26["m_sql"] = "external_property_groups_areas.area_name";
$proto26["m_srcTableName"] = "Search All Units";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto28["m_sql"] = "external_property_level_2_units.building_system_id";
$proto28["m_srcTableName"] = "Search All Units";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto30["m_sql"] = "external_property_level_1_buildings.designation";
$proto30["m_srcTableName"] = "Search All Units";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto32["m_sql"] = "external_property_level_2_units.designation";
$proto32["m_srcTableName"] = "Search All Units";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "unit_name";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Search All Units"
));

$proto34["m_sql"] = "external_property_groups_areas.`order`";
$proto34["m_srcTableName"] = "Search All Units";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "order_area";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto36["m_sql"] = "external_property_level_1_buildings.`order`";
$proto36["m_srcTableName"] = "Search All Units";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "order_building";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto38["m_sql"] = "external_property_level_2_units.is_obsolete";
$proto38["m_srcTableName"] = "Search All Units";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "is_unit_obsolete";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "external_property_level_2_units";
$proto41["m_srcTableName"] = "Search All Units";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "system_id_unit";
$proto41["m_columns"][] = "create_api_request_id";
$proto41["m_columns"][] = "edit_api_request_id";
$proto41["m_columns"][] = "external_id";
$proto41["m_columns"][] = "external_system_id";
$proto41["m_columns"][] = "external_table";
$proto41["m_columns"][] = "syst_created_datetime";
$proto41["m_columns"][] = "creation_system_id";
$proto41["m_columns"][] = "created_by_id";
$proto41["m_columns"][] = "creation_method";
$proto41["m_columns"][] = "syst_updated_datetime";
$proto41["m_columns"][] = "update_system_id";
$proto41["m_columns"][] = "updated_by_id";
$proto41["m_columns"][] = "update_method";
$proto41["m_columns"][] = "is_update_on_duplicate_key";
$proto41["m_columns"][] = "activated_by_id";
$proto41["m_columns"][] = "is_obsolete";
$proto41["m_columns"][] = "is_creation_needed_in_unee_t";
$proto41["m_columns"][] = "do_not_insert";
$proto41["m_columns"][] = "unee_t_unit_type";
$proto41["m_columns"][] = "building_system_id";
$proto41["m_columns"][] = "tower";
$proto41["m_columns"][] = "unit_category_id";
$proto41["m_columns"][] = "designation";
$proto41["m_columns"][] = "count_rooms";
$proto41["m_columns"][] = "unit_id";
$proto41["m_columns"][] = "surface";
$proto41["m_columns"][] = "surface_measurment_unit";
$proto41["m_columns"][] = "description";
$proto41["m_columns"][] = "mgt_cny_default_assignee";
$proto41["m_columns"][] = "landlord_default_assignee";
$proto41["m_columns"][] = "tenant_default_assignee";
$proto41["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "external_property_level_2_units";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Search All Units";
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
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "external_property_level_1_buildings";
$proto45["m_srcTableName"] = "Search All Units";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_building";
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
$proto45["m_columns"][] = "is_obsolete";
$proto45["m_columns"][] = "order";
$proto45["m_columns"][] = "area_id";
$proto45["m_columns"][] = "is_creation_needed_in_unee_t";
$proto45["m_columns"][] = "do_not_insert";
$proto45["m_columns"][] = "unee_t_unit_type";
$proto45["m_columns"][] = "designation";
$proto45["m_columns"][] = "tower";
$proto45["m_columns"][] = "address_1";
$proto45["m_columns"][] = "address_2";
$proto45["m_columns"][] = "zip_postal_code";
$proto45["m_columns"][] = "state";
$proto45["m_columns"][] = "city";
$proto45["m_columns"][] = "country_code";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "mgt_cny_default_assignee";
$proto45["m_columns"][] = "landlord_default_assignee";
$proto45["m_columns"][] = "tenant_default_assignee";
$proto45["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Search All Units";
$proto46=array();
$proto46["m_sql"] = "external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= external_property_level_1_buildings.id_building";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_LEFTJOIN";
			$proto49=array();
$proto49["m_strName"] = "external_property_groups_areas";
$proto49["m_srcTableName"] = "Search All Units";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_area";
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
$proto49["m_columns"][] = "is_creation_needed_in_unee_t";
$proto49["m_columns"][] = "is_obsolete";
$proto49["m_columns"][] = "is_default";
$proto49["m_columns"][] = "order";
$proto49["m_columns"][] = "country_code";
$proto49["m_columns"][] = "area_name";
$proto49["m_columns"][] = "area_definition";
$proto49["m_columns"][] = "mgt_cny_default_assignee";
$proto49["m_columns"][] = "landlord_default_assignee";
$proto49["m_columns"][] = "tenant_default_assignee";
$proto49["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Search All Units";
$proto50=array();
$proto50["m_sql"] = "external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= external_property_groups_areas.id_area";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_LEFTJOIN";
			$proto53=array();
$proto53["m_strName"] = "property_groups_countries";
$proto53["m_srcTableName"] = "Search All Units";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_country";
$proto53["m_columns"][] = "syst_created_datetime";
$proto53["m_columns"][] = "creation_system_id";
$proto53["m_columns"][] = "created_by_id";
$proto53["m_columns"][] = "syst_updated_datetime";
$proto53["m_columns"][] = "update_system_id";
$proto53["m_columns"][] = "updated_by_id";
$proto53["m_columns"][] = "is_obsolete";
$proto53["m_columns"][] = "is_default";
$proto53["m_columns"][] = "is_system";
$proto53["m_columns"][] = "order";
$proto53["m_columns"][] = "country_code";
$proto53["m_columns"][] = "country_name";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Search All Units";
$proto54=array();
$proto54["m_sql"] = "external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= property_groups_countries.country_code";
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
$proto57["m_strName"] = "ut_map_external_source_units";
$proto57["m_srcTableName"] = "Search All Units";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "id_map";
$proto57["m_columns"][] = "create_api_request_id";
$proto57["m_columns"][] = "edit_api_request_id";
$proto57["m_columns"][] = "syst_created_datetime";
$proto57["m_columns"][] = "creation_system_id";
$proto57["m_columns"][] = "created_by_id";
$proto57["m_columns"][] = "creation_method";
$proto57["m_columns"][] = "syst_updated_datetime";
$proto57["m_columns"][] = "update_system_id";
$proto57["m_columns"][] = "updated_by_id";
$proto57["m_columns"][] = "update_method";
$proto57["m_columns"][] = "is_update_on_duplicate_key";
$proto57["m_columns"][] = "organization_id";
$proto57["m_columns"][] = "datetime_latest_trigger";
$proto57["m_columns"][] = "latest_trigger";
$proto57["m_columns"][] = "is_obsolete";
$proto57["m_columns"][] = "is_update_needed";
$proto57["m_columns"][] = "area_id";
$proto57["m_columns"][] = "mefe_area_id";
$proto57["m_columns"][] = "mefe_unit_id_parent";
$proto57["m_columns"][] = "unee_t_mefe_unit_id";
$proto57["m_columns"][] = "uneet_created_datetime";
$proto57["m_columns"][] = "is_mefe_api_success";
$proto57["m_columns"][] = "mefe_api_error_message";
$proto57["m_columns"][] = "is_unee_t_created_by_me";
$proto57["m_columns"][] = "unee_t_unit_type";
$proto57["m_columns"][] = "uneet_name";
$proto57["m_columns"][] = "new_record_id";
$proto57["m_columns"][] = "external_property_type_id";
$proto57["m_columns"][] = "external_property_id";
$proto57["m_columns"][] = "external_system";
$proto57["m_columns"][] = "table_in_external_system";
$proto57["m_columns"][] = "tower";
$proto57["m_columns"][] = "mgt_cny_default_assignee";
$proto57["m_columns"][] = "landlord_default_assignee";
$proto57["m_columns"][] = "tenant_default_assignee";
$proto57["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_units   ON external_property_level_2_units.external_id = ut_map_external_source_units.external_property_id   AND external_property_level_2_units.external_system_id = ut_map_external_source_units.external_system   AND external_property_level_2_units.external_table = ut_map_external_source_units.table_in_external_system   AND external_property_level_2_units.created_by_id = ut_map_external_source_units.organization_id";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "Search All Units";
$proto58=array();
$proto58["m_sql"] = "external_property_level_2_units.external_id = ut_map_external_source_units.external_property_id   AND external_property_level_2_units.external_system_id = ut_map_external_source_units.external_system   AND external_property_level_2_units.external_table = ut_map_external_source_units.table_in_external_system   AND external_property_level_2_units.created_by_id = ut_map_external_source_units.organization_id";
$proto58["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_property_level_2_units.external_id = ut_map_external_source_units.external_property_id   AND external_property_level_2_units.external_system_id = ut_map_external_source_units.external_system   AND external_property_level_2_units.external_table = ut_map_external_source_units.table_in_external_system   AND external_property_level_2_units.created_by_id = ut_map_external_source_units.organization_id"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
						$proto60=array();
$proto60["m_sql"] = "external_property_level_2_units.external_id = ut_map_external_source_units.external_property_id";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= ut_map_external_source_units.external_property_id";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

			$proto58["m_contained"][]=$obj;
						$proto62=array();
$proto62["m_sql"] = "external_property_level_2_units.external_system_id = ut_map_external_source_units.external_system";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "= ut_map_external_source_units.external_system";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

			$proto58["m_contained"][]=$obj;
						$proto64=array();
$proto64["m_sql"] = "external_property_level_2_units.external_table = ut_map_external_source_units.table_in_external_system";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= ut_map_external_source_units.table_in_external_system";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

			$proto58["m_contained"][]=$obj;
						$proto66=array();
$proto66["m_sql"] = "external_property_level_2_units.created_by_id = ut_map_external_source_units.organization_id";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "= ut_map_external_source_units.organization_id";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

			$proto58["m_contained"][]=$obj;
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Search All Units"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 1;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
												$proto70=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Search All Units"
));

$proto70["m_column"]=$obj;
$proto70["m_bAsc"] = 1;
$proto70["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto70);

$proto0["m_orderby"][]=$obj;					
												$proto72=array();
						$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Search All Units"
));

$proto72["m_column"]=$obj;
$proto72["m_bAsc"] = 1;
$proto72["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto72);

$proto0["m_orderby"][]=$obj;					
												$proto74=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto74["m_column"]=$obj;
$proto74["m_bAsc"] = 1;
$proto74["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto74);

$proto0["m_orderby"][]=$obj;					
												$proto76=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Search All Units"
));

$proto76["m_column"]=$obj;
$proto76["m_bAsc"] = 1;
$proto76["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto76);

$proto0["m_orderby"][]=$obj;					
												$proto78=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Search All Units"
));

$proto78["m_column"]=$obj;
$proto78["m_bAsc"] = 1;
$proto78["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto78);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Search All Units";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Search_All_Units = createSqlQuery_Search_All_Units();


	
					
;

																	

$tdataSearch_All_Units[".sqlquery"] = $queryData_Search_All_Units;

$tableEvents["Search All Units"] = new eventsBase;
$tdataSearch_All_Units[".hasEvents"] = false;

?>