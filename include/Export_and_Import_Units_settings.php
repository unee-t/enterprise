<?php



$tdataExport_and_Import_Units = array();
$tdataExport_and_Import_Units[".searchableFields"] = array();
$tdataExport_and_Import_Units[".ShortName"] = "Export_and_Import_Units";
$tdataExport_and_Import_Units[".OwnerID"] = "created_by_id";
$tdataExport_and_Import_Units[".OriginalTable"] = "external_property_level_2_units";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataExport_and_Import_Units[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataExport_and_Import_Units[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataExport_and_Import_Units[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsExport_and_Import_Units = array();
$fieldToolTipsExport_and_Import_Units = array();
$pageTitlesExport_and_Import_Units = array();
$placeHoldersExport_and_Import_Units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsExport_and_Import_Units["English"] = array();
	$fieldToolTipsExport_and_Import_Units["English"] = array();
	$placeHoldersExport_and_Import_Units["English"] = array();
	$pageTitlesExport_and_Import_Units["English"] = array();
	$fieldLabelsExport_and_Import_Units["English"]["system_id_unit"] = "Unee-T Unit ID";
	$fieldToolTipsExport_and_Import_Units["English"]["system_id_unit"] = "";
	$placeHoldersExport_and_Import_Units["English"]["system_id_unit"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["external_id"] = "External Id";
	$fieldToolTipsExport_and_Import_Units["English"]["external_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["external_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsExport_and_Import_Units["English"]["external_system_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["external_system_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["external_table"] = "External Table";
	$fieldToolTipsExport_and_Import_Units["English"]["external_table"] = "";
	$placeHoldersExport_and_Import_Units["English"]["external_table"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsExport_and_Import_Units["English"]["syst_created_datetime"] = "";
	$placeHoldersExport_and_Import_Units["English"]["syst_created_datetime"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsExport_and_Import_Units["English"]["creation_system_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["creation_system_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsExport_and_Import_Units["English"]["created_by_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["created_by_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsExport_and_Import_Units["English"]["creation_method"] = "";
	$placeHoldersExport_and_Import_Units["English"]["creation_method"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsExport_and_Import_Units["English"]["syst_updated_datetime"] = "";
	$placeHoldersExport_and_Import_Units["English"]["syst_updated_datetime"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsExport_and_Import_Units["English"]["update_system_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["update_system_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsExport_and_Import_Units["English"]["updated_by_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["updated_by_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["update_method"] = "Update Method";
	$fieldToolTipsExport_and_Import_Units["English"]["update_method"] = "";
	$placeHoldersExport_and_Import_Units["English"]["update_method"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["activated_by_id"] = "Activated By Id";
	$fieldToolTipsExport_and_Import_Units["English"]["activated_by_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["activated_by_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsExport_and_Import_Units["English"]["is_obsolete"] = "";
	$placeHoldersExport_and_Import_Units["English"]["is_obsolete"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["is_creation_needed_in_unee_t"] = "Create in Unee-T";
	$fieldToolTipsExport_and_Import_Units["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersExport_and_Import_Units["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsExport_and_Import_Units["English"]["do_not_insert"] = "";
	$placeHoldersExport_and_Import_Units["English"]["do_not_insert"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["unee_t_unit_type"] = "Type";
	$fieldToolTipsExport_and_Import_Units["English"]["unee_t_unit_type"] = "";
	$placeHoldersExport_and_Import_Units["English"]["unee_t_unit_type"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["building_system_id"] = "Building";
	$fieldToolTipsExport_and_Import_Units["English"]["building_system_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["building_system_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["tower"] = "Tower";
	$fieldToolTipsExport_and_Import_Units["English"]["tower"] = "";
	$placeHoldersExport_and_Import_Units["English"]["tower"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["unit_category_id"] = "Unit Category";
	$fieldToolTipsExport_and_Import_Units["English"]["unit_category_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["unit_category_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["count_rooms"] = "Number of Rooms";
	$fieldToolTipsExport_and_Import_Units["English"]["count_rooms"] = "";
	$placeHoldersExport_and_Import_Units["English"]["count_rooms"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["unit_id"] = "Unit Id";
	$fieldToolTipsExport_and_Import_Units["English"]["unit_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["unit_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["surface"] = "Surface";
	$fieldToolTipsExport_and_Import_Units["English"]["surface"] = "";
	$placeHoldersExport_and_Import_Units["English"]["surface"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["surface_measurment_unit"] = "sqf/sqm";
	$fieldToolTipsExport_and_Import_Units["English"]["surface_measurment_unit"] = "";
	$placeHoldersExport_and_Import_Units["English"]["surface_measurment_unit"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["description"] = "Description";
	$fieldToolTipsExport_and_Import_Units["English"]["description"] = "";
	$placeHoldersExport_and_Import_Units["English"]["description"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["area_id"] = "Area";
	$fieldToolTipsExport_and_Import_Units["English"]["area_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["area_id"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["building_designation"] = "Building";
	$fieldToolTipsExport_and_Import_Units["English"]["building_designation"] = "";
	$placeHoldersExport_and_Import_Units["English"]["building_designation"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["unit_designation"] = "Unit Name";
	$fieldToolTipsExport_and_Import_Units["English"]["unit_designation"] = "";
	$placeHoldersExport_and_Import_Units["English"]["unit_designation"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["order_building"] = "Order Building";
	$fieldToolTipsExport_and_Import_Units["English"]["order_building"] = "";
	$placeHoldersExport_and_Import_Units["English"]["order_building"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["unit_type"] = "Type";
	$fieldToolTipsExport_and_Import_Units["English"]["unit_type"] = "";
	$placeHoldersExport_and_Import_Units["English"]["unit_type"] = "";
	$fieldLabelsExport_and_Import_Units["English"]["building_id"] = "Unee-T Building ID";
	$fieldToolTipsExport_and_Import_Units["English"]["building_id"] = "";
	$placeHoldersExport_and_Import_Units["English"]["building_id"] = "";
	if (count($fieldToolTipsExport_and_Import_Units["English"]))
		$tdataExport_and_Import_Units[".isUseToolTips"] = true;
}


	$tdataExport_and_Import_Units[".NCSearch"] = true;



$tdataExport_and_Import_Units[".shortTableName"] = "Export_and_Import_Units";
$tdataExport_and_Import_Units[".nSecOptions"] = 1;

$tdataExport_and_Import_Units[".mainTableOwnerID"] = "created_by_id";
$tdataExport_and_Import_Units[".entityType"] = 1;

$tdataExport_and_Import_Units[".strOriginalTableName"] = "external_property_level_2_units";

		 



$tdataExport_and_Import_Units[".showAddInPopup"] = false;

$tdataExport_and_Import_Units[".showEditInPopup"] = false;

$tdataExport_and_Import_Units[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataExport_and_Import_Units[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataExport_and_Import_Units[".listAjax"] = true;
//	temporary
$tdataExport_and_Import_Units[".listAjax"] = false;

	$tdataExport_and_Import_Units[".audit"] = false;

	$tdataExport_and_Import_Units[".locking"] = false;


$pages = $tdataExport_and_Import_Units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataExport_and_Import_Units[".edit"] = true;
	$tdataExport_and_Import_Units[".afterEditAction"] = 1;
	$tdataExport_and_Import_Units[".closePopupAfterEdit"] = 1;
	$tdataExport_and_Import_Units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataExport_and_Import_Units[".add"] = true;
$tdataExport_and_Import_Units[".afterAddAction"] = 0;
$tdataExport_and_Import_Units[".closePopupAfterAdd"] = 1;
$tdataExport_and_Import_Units[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataExport_and_Import_Units[".list"] = true;
}



$tdataExport_and_Import_Units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataExport_and_Import_Units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataExport_and_Import_Units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataExport_and_Import_Units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataExport_and_Import_Units[".printFriendly"] = true;
}



$tdataExport_and_Import_Units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataExport_and_Import_Units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataExport_and_Import_Units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataExport_and_Import_Units[".isUseAjaxSuggest"] = true;

$tdataExport_and_Import_Units[".rowHighlite"] = true;





$tdataExport_and_Import_Units[".ajaxCodeSnippetAdded"] = false;

$tdataExport_and_Import_Units[".buttonsAdded"] = false;

$tdataExport_and_Import_Units[".addPageEvents"] = false;

// use timepicker for search panel
$tdataExport_and_Import_Units[".isUseTimeForSearch"] = false;


$tdataExport_and_Import_Units[".badgeColor"] = "006978";


$tdataExport_and_Import_Units[".allSearchFields"] = array();
$tdataExport_and_Import_Units[".filterFields"] = array();
$tdataExport_and_Import_Units[".requiredSearchFields"] = array();

$tdataExport_and_Import_Units[".googleLikeFields"] = array();
$tdataExport_and_Import_Units[".googleLikeFields"][] = "external_id";
$tdataExport_and_Import_Units[".googleLikeFields"][] = "building_designation";
$tdataExport_and_Import_Units[".googleLikeFields"][] = "unit_designation";
$tdataExport_and_Import_Units[".googleLikeFields"][] = "unit_type";
$tdataExport_and_Import_Units[".googleLikeFields"][] = "description";



$tdataExport_and_Import_Units[".tableType"] = "list";

$tdataExport_and_Import_Units[".printerPageOrientation"] = 0;
$tdataExport_and_Import_Units[".nPrinterPageScale"] = 100;

$tdataExport_and_Import_Units[".nPrinterSplitRecords"] = 40;

$tdataExport_and_Import_Units[".geocodingEnabled"] = false;





$tdataExport_and_Import_Units[".isResizeColumns"] = true;





$tdataExport_and_Import_Units[".pageSize"] = 50;

$tdataExport_and_Import_Units[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, ut_unit_types.designation, external_property_level_2_units.designation";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataExport_and_Import_Units[".strOrderBy"] = $tstrOrderBy;

$tdataExport_and_Import_Units[".orderindexes"] = array();
	$tdataExport_and_Import_Units[".orderindexes"][] = array(31, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.`order`");

	$tdataExport_and_Import_Units[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.designation");

	$tdataExport_and_Import_Units[".orderindexes"][] = array(22, (1 ? "ASC" : "DESC"), "ut_unit_types.designation");

	$tdataExport_and_Import_Units[".orderindexes"][] = array(17, (1 ? "ASC" : "DESC"), "external_property_level_2_units.designation");


$tdataExport_and_Import_Units[".sqlHead"] = "SELECT external_property_level_2_units.system_id_unit,  external_property_level_2_units.external_id,  external_property_level_2_units.external_system_id,  external_property_level_2_units.external_table,  external_property_level_2_units.syst_created_datetime,  external_property_level_2_units.creation_system_id,  external_property_level_2_units.created_by_id,  external_property_level_2_units.creation_method,  external_property_level_2_units.syst_updated_datetime,  external_property_level_2_units.update_system_id,  external_property_level_2_units.updated_by_id,  external_property_level_2_units.update_method,  external_property_level_1_buildings.area_id,  external_property_level_2_units.building_system_id,  external_property_level_2_units.building_system_id AS building_id,  external_property_level_1_buildings.designation AS building_designation,  external_property_level_2_units.designation AS unit_designation,  external_property_level_2_units.activated_by_id,  external_property_level_2_units.is_obsolete,  external_property_level_2_units.is_creation_needed_in_unee_t,  external_property_level_2_units.unee_t_unit_type,  ut_unit_types.designation AS unit_type,  external_property_level_2_units.tower,  external_property_level_2_units.unit_category_id,  external_property_level_2_units.count_rooms,  external_property_level_2_units.unit_id,  external_property_level_2_units.surface,  external_property_level_2_units.surface_measurment_unit,  external_property_level_2_units.description,  external_property_level_2_units.do_not_insert,  external_property_level_1_buildings.`order` AS order_building";
$tdataExport_and_Import_Units[".sqlFrom"] = "FROM external_property_level_2_units  LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN ut_unit_types ON external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation  LEFT OUTER JOIN property_level_2_units ON external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$tdataExport_and_Import_Units[".sqlWhereExpr"] = "";
$tdataExport_and_Import_Units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataExport_and_Import_Units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataExport_and_Import_Units[".arrGroupsPerPage"] = $arrGPP;

$tdataExport_and_Import_Units[".highlightSearchResults"] = true;

$tableKeysExport_and_Import_Units = array();
$tableKeysExport_and_Import_Units[] = "external_id";
$tableKeysExport_and_Import_Units[] = "external_system_id";
$tableKeysExport_and_Import_Units[] = "external_table";
$tableKeysExport_and_Import_Units[] = "created_by_id";
$tdataExport_and_Import_Units[".Keys"] = $tableKeysExport_and_Import_Units;


$tdataExport_and_Import_Units[".hideMobileList"] = array();




//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","system_id_unit");
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


	$tdataExport_and_Import_Units["system_id_unit"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "system_id_unit";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","external_id");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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


	$tdataExport_and_Import_Units["external_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","external_system_id");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataExport_and_Import_Units["external_system_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","external_table");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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
			$edata["EditParams"].= " maxlength=100";

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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataExport_and_Import_Units["external_table"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.syst_created_datetime";

	
	
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


	$tdataExport_and_Import_Units["syst_created_datetime"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.creation_system_id";

	
	
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


	$tdataExport_and_Import_Units["creation_system_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","created_by_id");
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


	$tdataExport_and_Import_Units["created_by_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.creation_method";

	
	
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


	$tdataExport_and_Import_Units["creation_method"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.syst_updated_datetime";

	
	
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


	$tdataExport_and_Import_Units["syst_updated_datetime"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.update_system_id";

	
	
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


	$tdataExport_and_Import_Units["update_system_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.updated_by_id";

	
	
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


	$tdataExport_and_Import_Units["updated_by_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.update_method";

	
	
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


	$tdataExport_and_Import_Units["update_method"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "update_method";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","area_id");
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
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "area_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "country_code", "lookup" => "country_code" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "building_system_id";

	
		$edata["Multiselect"] = true;

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


	$tdataExport_and_Import_Units["area_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "area_id";
//	building_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "building_system_id";
	$fdata["GoodName"] = "building_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","building_system_id");
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
	$edata["LookupTable"] = "external_property_level_1_buildings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
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
	$edata["LookupTable"] = "external_property_level_1_buildings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
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
	$edata["LookupTable"] = "external_property_level_1_buildings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "area_id", "lookup" => "area_id" );

	
	

	
		$edata["Multiselect"] = true;

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
		$fdata["filterTotalFields"] = "system_id_unit";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataExport_and_Import_Units["building_system_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "building_system_id";
//	building_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "building_id";
	$fdata["GoodName"] = "building_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","building_id");
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


	$tdataExport_and_Import_Units["building_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "building_id";
//	building_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "building_designation";
	$fdata["GoodName"] = "building_designation";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","building_designation");
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


	$tdataExport_and_Import_Units["building_designation"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "building_designation";
//	unit_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "unit_designation";
	$fdata["GoodName"] = "unit_designation";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","unit_designation");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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


	$tdataExport_and_Import_Units["unit_designation"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "unit_designation";
//	activated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "activated_by_id";
	$fdata["GoodName"] = "activated_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","activated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "activated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.activated_by_id";

	
	
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


	$tdataExport_and_Import_Units["activated_by_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "activated_by_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.is_obsolete";

	
	
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


	$tdataExport_and_Import_Units["is_obsolete"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "is_obsolete";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","is_creation_needed_in_unee_t");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_creation_needed_in_unee_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.is_creation_needed_in_unee_t";

	
	
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


	$tdataExport_and_Import_Units["is_creation_needed_in_unee_t"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","unee_t_unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_unit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.unee_t_unit_type";

	
	
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
	$edata["LookupTable"] = "ut_unit_types";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "designation";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
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


	$tdataExport_and_Import_Units["unee_t_unit_type"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "unee_t_unit_type";
//	unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "unit_type";
	$fdata["GoodName"] = "unit_type";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_unit_types.designation";

	
	
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


	$tdataExport_and_Import_Units["unit_type"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "unit_type";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","tower");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tower";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.tower";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataExport_and_Import_Units["tower"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "tower";
//	unit_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "unit_category_id";
	$fdata["GoodName"] = "unit_category_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","unit_category_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unit_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.unit_category_id";

	
	
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


	$tdataExport_and_Import_Units["unit_category_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "unit_category_id";
//	count_rooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "count_rooms";
	$fdata["GoodName"] = "count_rooms";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","count_rooms");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "count_rooms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.count_rooms";

	
	
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


	$tdataExport_and_Import_Units["count_rooms"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "count_rooms";
//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.unit_id";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataExport_and_Import_Units["unit_id"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "unit_id";
//	surface
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "surface";
	$fdata["GoodName"] = "surface";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","surface");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "surface";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.surface";

	
	
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


	$tdataExport_and_Import_Units["surface"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "surface";
//	surface_measurment_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "surface_measurment_unit";
	$fdata["GoodName"] = "surface_measurment_unit";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","surface_measurment_unit");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "surface_measurment_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.surface_measurment_unit";

	
	
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


	$tdataExport_and_Import_Units["surface_measurment_unit"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "surface_measurment_unit";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.description";

	
	
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


	$tdataExport_and_Import_Units["description"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "description";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","do_not_insert");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "do_not_insert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.do_not_insert";

	
	
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


	$tdataExport_and_Import_Units["do_not_insert"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "do_not_insert";
//	order_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "order_building";
	$fdata["GoodName"] = "order_building";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Units","order_building");
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


	$tdataExport_and_Import_Units["order_building"] = $fdata;
		$tdataExport_and_Import_Units[".searchableFields"][] = "order_building";


$tables_data["Export and Import Units"]=&$tdataExport_and_Import_Units;
$field_labels["Export_and_Import_Units"] = &$fieldLabelsExport_and_Import_Units;
$fieldToolTips["Export_and_Import_Units"] = &$fieldToolTipsExport_and_Import_Units;
$placeHolders["Export_and_Import_Units"] = &$placeHoldersExport_and_Import_Units;
$page_titles["Export_and_Import_Units"] = &$pageTitlesExport_and_Import_Units;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Export and Import Units"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Export and Import Units"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Export_and_Import_Units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_2_units.system_id_unit,  external_property_level_2_units.external_id,  external_property_level_2_units.external_system_id,  external_property_level_2_units.external_table,  external_property_level_2_units.syst_created_datetime,  external_property_level_2_units.creation_system_id,  external_property_level_2_units.created_by_id,  external_property_level_2_units.creation_method,  external_property_level_2_units.syst_updated_datetime,  external_property_level_2_units.update_system_id,  external_property_level_2_units.updated_by_id,  external_property_level_2_units.update_method,  external_property_level_1_buildings.area_id,  external_property_level_2_units.building_system_id,  external_property_level_2_units.building_system_id AS building_id,  external_property_level_1_buildings.designation AS building_designation,  external_property_level_2_units.designation AS unit_designation,  external_property_level_2_units.activated_by_id,  external_property_level_2_units.is_obsolete,  external_property_level_2_units.is_creation_needed_in_unee_t,  external_property_level_2_units.unee_t_unit_type,  ut_unit_types.designation AS unit_type,  external_property_level_2_units.tower,  external_property_level_2_units.unit_category_id,  external_property_level_2_units.count_rooms,  external_property_level_2_units.unit_id,  external_property_level_2_units.surface,  external_property_level_2_units.surface_measurment_unit,  external_property_level_2_units.description,  external_property_level_2_units.do_not_insert,  external_property_level_1_buildings.`order` AS order_building";
$proto0["m_strFrom"] = "FROM external_property_level_2_units  LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN ut_unit_types ON external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation  LEFT OUTER JOIN property_level_2_units ON external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, ut_unit_types.designation, external_property_level_2_units.designation";
	
					
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
	"m_srcTableName" => "Export and Import Units"
));

$proto6["m_sql"] = "external_property_level_2_units.system_id_unit";
$proto6["m_srcTableName"] = "Export and Import Units";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto8["m_sql"] = "external_property_level_2_units.external_id";
$proto8["m_srcTableName"] = "Export and Import Units";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto10["m_sql"] = "external_property_level_2_units.external_system_id";
$proto10["m_srcTableName"] = "Export and Import Units";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto12["m_sql"] = "external_property_level_2_units.external_table";
$proto12["m_srcTableName"] = "Export and Import Units";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto14["m_sql"] = "external_property_level_2_units.syst_created_datetime";
$proto14["m_srcTableName"] = "Export and Import Units";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto16["m_sql"] = "external_property_level_2_units.creation_system_id";
$proto16["m_srcTableName"] = "Export and Import Units";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto18["m_sql"] = "external_property_level_2_units.created_by_id";
$proto18["m_srcTableName"] = "Export and Import Units";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto20["m_sql"] = "external_property_level_2_units.creation_method";
$proto20["m_srcTableName"] = "Export and Import Units";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto22["m_sql"] = "external_property_level_2_units.syst_updated_datetime";
$proto22["m_srcTableName"] = "Export and Import Units";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto24["m_sql"] = "external_property_level_2_units.update_system_id";
$proto24["m_srcTableName"] = "Export and Import Units";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto26["m_sql"] = "external_property_level_2_units.updated_by_id";
$proto26["m_srcTableName"] = "Export and Import Units";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto28["m_sql"] = "external_property_level_2_units.update_method";
$proto28["m_srcTableName"] = "Export and Import Units";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Export and Import Units"
));

$proto30["m_sql"] = "external_property_level_1_buildings.area_id";
$proto30["m_srcTableName"] = "Export and Import Units";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto32["m_sql"] = "external_property_level_2_units.building_system_id";
$proto32["m_srcTableName"] = "Export and Import Units";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto34["m_sql"] = "external_property_level_2_units.building_system_id";
$proto34["m_srcTableName"] = "Export and Import Units";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "building_id";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Export and Import Units"
));

$proto36["m_sql"] = "external_property_level_1_buildings.designation";
$proto36["m_srcTableName"] = "Export and Import Units";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "building_designation";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto38["m_sql"] = "external_property_level_2_units.designation";
$proto38["m_srcTableName"] = "Export and Import Units";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "unit_designation";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "activated_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto40["m_sql"] = "external_property_level_2_units.activated_by_id";
$proto40["m_srcTableName"] = "Export and Import Units";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto42["m_sql"] = "external_property_level_2_units.is_obsolete";
$proto42["m_srcTableName"] = "Export and Import Units";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto44["m_sql"] = "external_property_level_2_units.is_creation_needed_in_unee_t";
$proto44["m_srcTableName"] = "Export and Import Units";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto46["m_sql"] = "external_property_level_2_units.unee_t_unit_type";
$proto46["m_srcTableName"] = "Export and Import Units";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "Export and Import Units"
));

$proto48["m_sql"] = "ut_unit_types.designation";
$proto48["m_srcTableName"] = "Export and Import Units";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "unit_type";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto50["m_sql"] = "external_property_level_2_units.tower";
$proto50["m_srcTableName"] = "Export and Import Units";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_category_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto52["m_sql"] = "external_property_level_2_units.unit_category_id";
$proto52["m_srcTableName"] = "Export and Import Units";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "count_rooms",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto54["m_sql"] = "external_property_level_2_units.count_rooms";
$proto54["m_srcTableName"] = "Export and Import Units";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto56["m_sql"] = "external_property_level_2_units.unit_id";
$proto56["m_srcTableName"] = "Export and Import Units";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "surface",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto58["m_sql"] = "external_property_level_2_units.surface";
$proto58["m_srcTableName"] = "Export and Import Units";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "surface_measurment_unit",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto60["m_sql"] = "external_property_level_2_units.surface_measurment_unit";
$proto60["m_srcTableName"] = "Export and Import Units";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto62["m_sql"] = "external_property_level_2_units.description";
$proto62["m_srcTableName"] = "Export and Import Units";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto64["m_sql"] = "external_property_level_2_units.do_not_insert";
$proto64["m_srcTableName"] = "Export and Import Units";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Export and Import Units"
));

$proto66["m_sql"] = "external_property_level_1_buildings.`order`";
$proto66["m_srcTableName"] = "Export and Import Units";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "order_building";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "external_property_level_2_units";
$proto69["m_srcTableName"] = "Export and Import Units";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "system_id_unit";
$proto69["m_columns"][] = "create_api_request_id";
$proto69["m_columns"][] = "edit_api_request_id";
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
$proto69["m_columns"][] = "is_update_on_duplicate_key";
$proto69["m_columns"][] = "activated_by_id";
$proto69["m_columns"][] = "is_obsolete";
$proto69["m_columns"][] = "is_creation_needed_in_unee_t";
$proto69["m_columns"][] = "do_not_insert";
$proto69["m_columns"][] = "unee_t_unit_type";
$proto69["m_columns"][] = "building_system_id";
$proto69["m_columns"][] = "tower";
$proto69["m_columns"][] = "unit_category_id";
$proto69["m_columns"][] = "designation";
$proto69["m_columns"][] = "count_rooms";
$proto69["m_columns"][] = "unit_id";
$proto69["m_columns"][] = "surface";
$proto69["m_columns"][] = "surface_measurment_unit";
$proto69["m_columns"][] = "description";
$proto69["m_columns"][] = "mgt_cny_default_assignee";
$proto69["m_columns"][] = "landlord_default_assignee";
$proto69["m_columns"][] = "tenant_default_assignee";
$proto69["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "external_property_level_2_units";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Export and Import Units";
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
$proto73["m_strName"] = "external_property_level_1_buildings";
$proto73["m_srcTableName"] = "Export and Import Units";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id_building";
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
$proto73["m_columns"][] = "is_obsolete";
$proto73["m_columns"][] = "order";
$proto73["m_columns"][] = "area_id";
$proto73["m_columns"][] = "is_creation_needed_in_unee_t";
$proto73["m_columns"][] = "do_not_insert";
$proto73["m_columns"][] = "unee_t_unit_type";
$proto73["m_columns"][] = "designation";
$proto73["m_columns"][] = "tower";
$proto73["m_columns"][] = "address_1";
$proto73["m_columns"][] = "address_2";
$proto73["m_columns"][] = "zip_postal_code";
$proto73["m_columns"][] = "state";
$proto73["m_columns"][] = "city";
$proto73["m_columns"][] = "country_code";
$proto73["m_columns"][] = "description";
$proto73["m_columns"][] = "mgt_cny_default_assignee";
$proto73["m_columns"][] = "landlord_default_assignee";
$proto73["m_columns"][] = "tenant_default_assignee";
$proto73["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "Export and Import Units";
$proto74=array();
$proto74["m_sql"] = "external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= external_property_level_1_buildings.id_building";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "ut_unit_types";
$proto77["m_srcTableName"] = "Export and Import Units";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id_property_type";
$proto77["m_columns"][] = "syst_created_datetime";
$proto77["m_columns"][] = "creation_system_id";
$proto77["m_columns"][] = "created_by_id";
$proto77["m_columns"][] = "syst_updated_datetime";
$proto77["m_columns"][] = "update_system_id";
$proto77["m_columns"][] = "updated_by_id";
$proto77["m_columns"][] = "order";
$proto77["m_columns"][] = "is_level_1";
$proto77["m_columns"][] = "is_level_2";
$proto77["m_columns"][] = "is_level_3";
$proto77["m_columns"][] = "is_obsolete";
$proto77["m_columns"][] = "designation";
$proto77["m_columns"][] = "description";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN ut_unit_types ON external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "Export and Import Units";
$proto78=array();
$proto78["m_sql"] = "external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= ut_unit_types.designation";
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
$proto81["m_strName"] = "property_level_2_units";
$proto81["m_srcTableName"] = "Export and Import Units";
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
$proto81["m_columns"][] = "organization_id";
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
$proto80["m_sql"] = "LEFT OUTER JOIN property_level_2_units ON external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "Export and Import Units";
$proto82=array();
$proto82["m_sql"] = "external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto82["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id"
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
						$proto84=array();
$proto84["m_sql"] = "external_property_level_2_units.external_id = property_level_2_units.external_id";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= property_level_2_units.external_id";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

			$proto82["m_contained"][]=$obj;
						$proto86=array();
$proto86["m_sql"] = "external_property_level_2_units.external_system_id = property_level_2_units.external_system_id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= property_level_2_units.external_system_id";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

			$proto82["m_contained"][]=$obj;
						$proto88=array();
$proto88["m_sql"] = "external_property_level_2_units.external_table = property_level_2_units.external_table";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= property_level_2_units.external_table";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

			$proto82["m_contained"][]=$obj;
						$proto90=array();
$proto90["m_sql"] = "external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= property_level_2_units.organization_id";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

			$proto82["m_contained"][]=$obj;
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto92=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Export and Import Units"
));

$proto92["m_column"]=$obj;
$proto92["m_bAsc"] = 1;
$proto92["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto92);

$proto0["m_orderby"][]=$obj;					
												$proto94=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Export and Import Units"
));

$proto94["m_column"]=$obj;
$proto94["m_bAsc"] = 1;
$proto94["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto94);

$proto0["m_orderby"][]=$obj;					
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "Export and Import Units"
));

$proto96["m_column"]=$obj;
$proto96["m_bAsc"] = 1;
$proto96["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto96);

$proto0["m_orderby"][]=$obj;					
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Units"
));

$proto98["m_column"]=$obj;
$proto98["m_bAsc"] = 1;
$proto98["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto98);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Export and Import Units";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Export_and_Import_Units = createSqlQuery_Export_and_Import_Units();


	
					
;

																															

$tdataExport_and_Import_Units[".sqlquery"] = $queryData_Export_and_Import_Units;

include_once(getabspath("include/Export_and_Import_Units_events.php"));
$tableEvents["Export and Import Units"] = new eventclass_Export_and_Import_Units;
$tdataExport_and_Import_Units[".hasEvents"] = true;

?>