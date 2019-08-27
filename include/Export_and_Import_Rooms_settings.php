<?php




$tdataExport_and_Import_Rooms = array();
$tdataExport_and_Import_Rooms[".searchableFields"] = array();
	$tdataExport_and_Import_Rooms[".truncateText"] = true;
	$tdataExport_and_Import_Rooms[".NumberOfChars"] = 80;
	$tdataExport_and_Import_Rooms[".ShortName"] = "Export_and_Import_Rooms";
	$tdataExport_and_Import_Rooms[".OwnerID"] = "created_by_id";
	$tdataExport_and_Import_Rooms[".OriginalTable"] = "external_property_level_3_rooms";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataExport_and_Import_Rooms[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataExport_and_Import_Rooms[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsExport_and_Import_Rooms = array();
$fieldToolTipsExport_and_Import_Rooms = array();
$pageTitlesExport_and_Import_Rooms = array();
$placeHoldersExport_and_Import_Rooms = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsExport_and_Import_Rooms["English"] = array();
	$fieldToolTipsExport_and_Import_Rooms["English"] = array();
	$placeHoldersExport_and_Import_Rooms["English"] = array();
	$pageTitlesExport_and_Import_Rooms["English"] = array();
	$fieldLabelsExport_and_Import_Rooms["English"]["system_id_room"] = "Unee-T Room ID";
	$fieldToolTipsExport_and_Import_Rooms["English"]["system_id_room"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["system_id_room"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["external_id"] = "External Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["external_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["external_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["external_system_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["external_system_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["external_table"] = "External Table";
	$fieldToolTipsExport_and_Import_Rooms["English"]["external_table"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["external_table"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsExport_and_Import_Rooms["English"]["syst_created_datetime"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["syst_created_datetime"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["creation_system_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["creation_system_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["created_by_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["created_by_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsExport_and_Import_Rooms["English"]["creation_method"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["creation_method"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsExport_and_Import_Rooms["English"]["syst_updated_datetime"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["syst_updated_datetime"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["update_system_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["update_system_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["updated_by_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["updated_by_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["update_method"] = "Update Method";
	$fieldToolTipsExport_and_Import_Rooms["English"]["update_method"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["update_method"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsExport_and_Import_Rooms["English"]["is_obsolete"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["is_obsolete"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["is_creation_needed_in_unee_t"] = "Create In Unee T";
	$fieldToolTipsExport_and_Import_Rooms["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsExport_and_Import_Rooms["English"]["do_not_insert"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["do_not_insert"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["unee_t_unit_type"] = "Unit Type";
	$fieldToolTipsExport_and_Import_Rooms["English"]["unee_t_unit_type"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["unee_t_unit_type"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["room_type_id"] = "Room Type Id";
	$fieldToolTipsExport_and_Import_Rooms["English"]["room_type_id"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["room_type_id"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["number_of_beds"] = "Number Of Beds";
	$fieldToolTipsExport_and_Import_Rooms["English"]["number_of_beds"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["number_of_beds"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["surface"] = "Surface";
	$fieldToolTipsExport_and_Import_Rooms["English"]["surface"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["surface"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["surface_measurment_unit"] = "sqf/sqm";
	$fieldToolTipsExport_and_Import_Rooms["English"]["surface_measurment_unit"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["surface_measurment_unit"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["room_designation"] = "Room Designation";
	$fieldToolTipsExport_and_Import_Rooms["English"]["room_designation"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["room_designation"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["room_description"] = "Description";
	$fieldToolTipsExport_and_Import_Rooms["English"]["room_description"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["room_description"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["unit_designation"] = "Unit";
	$fieldToolTipsExport_and_Import_Rooms["English"]["unit_designation"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["unit_designation"] = "";
	$fieldLabelsExport_and_Import_Rooms["English"]["system_id_unit"] = "Unee-T Unit ID";
	$fieldToolTipsExport_and_Import_Rooms["English"]["system_id_unit"] = "";
	$placeHoldersExport_and_Import_Rooms["English"]["system_id_unit"] = "";
	if (count($fieldToolTipsExport_and_Import_Rooms["English"]))
		$tdataExport_and_Import_Rooms[".isUseToolTips"] = true;
}


	$tdataExport_and_Import_Rooms[".NCSearch"] = true;



$tdataExport_and_Import_Rooms[".shortTableName"] = "Export_and_Import_Rooms";
$tdataExport_and_Import_Rooms[".nSecOptions"] = 1;

$tdataExport_and_Import_Rooms[".mainTableOwnerID"] = "created_by_id";
$tdataExport_and_Import_Rooms[".entityType"] = 1;

$tdataExport_and_Import_Rooms[".strOriginalTableName"] = "external_property_level_3_rooms";

		 



$tdataExport_and_Import_Rooms[".showAddInPopup"] = false;

$tdataExport_and_Import_Rooms[".showEditInPopup"] = false;

$tdataExport_and_Import_Rooms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataExport_and_Import_Rooms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataExport_and_Import_Rooms[".listAjax"] = true;
//	temporary
$tdataExport_and_Import_Rooms[".listAjax"] = false;

	$tdataExport_and_Import_Rooms[".audit"] = false;

	$tdataExport_and_Import_Rooms[".locking"] = false;


$pages = $tdataExport_and_Import_Rooms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataExport_and_Import_Rooms[".edit"] = true;
	$tdataExport_and_Import_Rooms[".afterEditAction"] = 1;
	$tdataExport_and_Import_Rooms[".closePopupAfterEdit"] = 1;
	$tdataExport_and_Import_Rooms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataExport_and_Import_Rooms[".add"] = true;
$tdataExport_and_Import_Rooms[".afterAddAction"] = 0;
$tdataExport_and_Import_Rooms[".closePopupAfterAdd"] = 1;
$tdataExport_and_Import_Rooms[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataExport_and_Import_Rooms[".list"] = true;
}



$tdataExport_and_Import_Rooms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataExport_and_Import_Rooms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataExport_and_Import_Rooms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataExport_and_Import_Rooms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataExport_and_Import_Rooms[".printFriendly"] = true;
}



$tdataExport_and_Import_Rooms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataExport_and_Import_Rooms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataExport_and_Import_Rooms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataExport_and_Import_Rooms[".isUseAjaxSuggest"] = true;

$tdataExport_and_Import_Rooms[".rowHighlite"] = true;





$tdataExport_and_Import_Rooms[".ajaxCodeSnippetAdded"] = false;

$tdataExport_and_Import_Rooms[".buttonsAdded"] = false;

$tdataExport_and_Import_Rooms[".addPageEvents"] = false;

// use timepicker for search panel
$tdataExport_and_Import_Rooms[".isUseTimeForSearch"] = false;


$tdataExport_and_Import_Rooms[".badgeColor"] = "007c91";


$tdataExport_and_Import_Rooms[".allSearchFields"] = array();
$tdataExport_and_Import_Rooms[".filterFields"] = array();
$tdataExport_and_Import_Rooms[".requiredSearchFields"] = array();

$tdataExport_and_Import_Rooms[".googleLikeFields"] = array();
$tdataExport_and_Import_Rooms[".googleLikeFields"][] = "unit_designation";
$tdataExport_and_Import_Rooms[".googleLikeFields"][] = "room_designation";
$tdataExport_and_Import_Rooms[".googleLikeFields"][] = "unee_t_unit_type";
$tdataExport_and_Import_Rooms[".googleLikeFields"][] = "room_description";



$tdataExport_and_Import_Rooms[".tableType"] = "list";

$tdataExport_and_Import_Rooms[".printerPageOrientation"] = 0;
$tdataExport_and_Import_Rooms[".nPrinterPageScale"] = 100;

$tdataExport_and_Import_Rooms[".nPrinterSplitRecords"] = 40;

$tdataExport_and_Import_Rooms[".nPrinterPDFSplitRecords"] = 40;


$tdataExport_and_Import_Rooms[".geocodingEnabled"] = false;





$tdataExport_and_Import_Rooms[".isResizeColumns"] = true;





$tdataExport_and_Import_Rooms[".pageSize"] = 50;

$tdataExport_and_Import_Rooms[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_property_level_2_units.designation ASC, external_property_level_3_rooms.room_designation ASC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataExport_and_Import_Rooms[".strOrderBy"] = $tstrOrderBy;

$tdataExport_and_Import_Rooms[".orderindexes"] = array();
	$tdataExport_and_Import_Rooms[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "external_property_level_2_units.designation");

	$tdataExport_and_Import_Rooms[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "external_property_level_3_rooms.room_designation");


$tdataExport_and_Import_Rooms[".sqlHead"] = "SELECT external_property_level_3_rooms.system_id_room,  external_property_level_3_rooms.external_id,  external_property_level_3_rooms.external_system_id,  external_property_level_3_rooms.external_table,  external_property_level_3_rooms.syst_created_datetime,  external_property_level_3_rooms.creation_system_id,  external_property_level_3_rooms.created_by_id,  external_property_level_3_rooms.creation_method,  external_property_level_3_rooms.syst_updated_datetime,  external_property_level_3_rooms.update_system_id,  external_property_level_3_rooms.updated_by_id,  external_property_level_3_rooms.update_method,  external_property_level_3_rooms.system_id_unit,  external_property_level_2_units.designation AS unit_designation,  external_property_level_3_rooms.room_designation,  external_property_level_3_rooms.unee_t_unit_type,  external_property_level_3_rooms.is_obsolete,  external_property_level_3_rooms.is_creation_needed_in_unee_t,  external_property_level_3_rooms.number_of_beds,  external_property_level_3_rooms.surface,  external_property_level_3_rooms.surface_measurment_unit,  external_property_level_3_rooms.room_description,  external_property_level_3_rooms.room_type_id,  external_property_level_3_rooms.do_not_insert";
$tdataExport_and_Import_Rooms[".sqlFrom"] = "FROM external_property_level_3_rooms  LEFT OUTER JOIN external_property_level_2_units ON external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit";
$tdataExport_and_Import_Rooms[".sqlWhereExpr"] = "";
$tdataExport_and_Import_Rooms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataExport_and_Import_Rooms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataExport_and_Import_Rooms[".arrGroupsPerPage"] = $arrGPP;

$tdataExport_and_Import_Rooms[".highlightSearchResults"] = true;

$tableKeysExport_and_Import_Rooms = array();
$tableKeysExport_and_Import_Rooms[] = "external_id";
$tableKeysExport_and_Import_Rooms[] = "external_system_id";
$tableKeysExport_and_Import_Rooms[] = "external_table";
$tableKeysExport_and_Import_Rooms[] = "created_by_id";
$tdataExport_and_Import_Rooms[".Keys"] = $tableKeysExport_and_Import_Rooms;


$tdataExport_and_Import_Rooms[".hideMobileList"] = array();




//	system_id_room
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_room";
	$fdata["GoodName"] = "system_id_room";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","system_id_room");
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

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataExport_and_Import_Rooms["system_id_room"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "system_id_room";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.external_id";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Rooms["external_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.external_system_id";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Rooms["external_system_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.external_table";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Rooms["external_table"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.syst_created_datetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["syst_created_datetime"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.creation_system_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["creation_system_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.created_by_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataExport_and_Import_Rooms["created_by_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.creation_method";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["creation_method"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.syst_updated_datetime";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["syst_updated_datetime"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.update_system_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["update_system_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.updated_by_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["updated_by_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.update_method";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["update_method"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "update_method";
//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","system_id_unit");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "system_id_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.system_id_unit";

	
	
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


	$tdataExport_and_Import_Rooms["system_id_unit"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "system_id_unit";
//	unit_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "unit_designation";
	$fdata["GoodName"] = "unit_designation";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","unit_designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.designation";

	
	
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


	$tdataExport_and_Import_Rooms["unit_designation"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "unit_designation";
//	room_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "room_designation";
	$fdata["GoodName"] = "room_designation";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","room_designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "room_designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.room_designation";

	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Rooms["room_designation"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "room_designation";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","unee_t_unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_unit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.unee_t_unit_type";

	
	
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


	$tdataExport_and_Import_Rooms["unee_t_unit_type"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "unee_t_unit_type";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.is_obsolete";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdataExport_and_Import_Rooms["is_obsolete"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "is_obsolete";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","is_creation_needed_in_unee_t");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_creation_needed_in_unee_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.is_creation_needed_in_unee_t";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdataExport_and_Import_Rooms["is_creation_needed_in_unee_t"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	number_of_beds
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "number_of_beds";
	$fdata["GoodName"] = "number_of_beds";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","number_of_beds");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "number_of_beds";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.number_of_beds";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["number_of_beds"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "number_of_beds";
//	surface
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "surface";
	$fdata["GoodName"] = "surface";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","surface");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "surface";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.surface";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["surface"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "surface";
//	surface_measurment_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "surface_measurment_unit";
	$fdata["GoodName"] = "surface_measurment_unit";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","surface_measurment_unit");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "surface_measurment_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.surface_measurment_unit";

	
	
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


	$tdataExport_and_Import_Rooms["surface_measurment_unit"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "surface_measurment_unit";
//	room_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "room_description";
	$fdata["GoodName"] = "room_description";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","room_description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "room_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.room_description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Rooms["room_description"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "room_description";
//	room_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "room_type_id";
	$fdata["GoodName"] = "room_type_id";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","room_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "room_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.room_type_id";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Rooms["room_type_id"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "room_type_id";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "external_property_level_3_rooms";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Rooms","do_not_insert");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "do_not_insert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_3_rooms.do_not_insert";

	
	
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


	$tdataExport_and_Import_Rooms["do_not_insert"] = $fdata;
		$tdataExport_and_Import_Rooms[".searchableFields"][] = "do_not_insert";


$tables_data["Export and Import Rooms"]=&$tdataExport_and_Import_Rooms;
$field_labels["Export_and_Import_Rooms"] = &$fieldLabelsExport_and_Import_Rooms;
$fieldToolTips["Export_and_Import_Rooms"] = &$fieldToolTipsExport_and_Import_Rooms;
$placeHolders["Export_and_Import_Rooms"] = &$placeHoldersExport_and_Import_Rooms;
$page_titles["Export_and_Import_Rooms"] = &$pageTitlesExport_and_Import_Rooms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Export and Import Rooms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Export and Import Rooms"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Export_and_Import_Rooms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_3_rooms.system_id_room,  external_property_level_3_rooms.external_id,  external_property_level_3_rooms.external_system_id,  external_property_level_3_rooms.external_table,  external_property_level_3_rooms.syst_created_datetime,  external_property_level_3_rooms.creation_system_id,  external_property_level_3_rooms.created_by_id,  external_property_level_3_rooms.creation_method,  external_property_level_3_rooms.syst_updated_datetime,  external_property_level_3_rooms.update_system_id,  external_property_level_3_rooms.updated_by_id,  external_property_level_3_rooms.update_method,  external_property_level_3_rooms.system_id_unit,  external_property_level_2_units.designation AS unit_designation,  external_property_level_3_rooms.room_designation,  external_property_level_3_rooms.unee_t_unit_type,  external_property_level_3_rooms.is_obsolete,  external_property_level_3_rooms.is_creation_needed_in_unee_t,  external_property_level_3_rooms.number_of_beds,  external_property_level_3_rooms.surface,  external_property_level_3_rooms.surface_measurment_unit,  external_property_level_3_rooms.room_description,  external_property_level_3_rooms.room_type_id,  external_property_level_3_rooms.do_not_insert";
$proto0["m_strFrom"] = "FROM external_property_level_3_rooms  LEFT OUTER JOIN external_property_level_2_units ON external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY external_property_level_2_units.designation ASC, external_property_level_3_rooms.room_designation ASC";
	
					
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
	"m_srcTableName" => "Export and Import Rooms"
));

$proto6["m_sql"] = "external_property_level_3_rooms.system_id_room";
$proto6["m_srcTableName"] = "Export and Import Rooms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto8["m_sql"] = "external_property_level_3_rooms.external_id";
$proto8["m_srcTableName"] = "Export and Import Rooms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto10["m_sql"] = "external_property_level_3_rooms.external_system_id";
$proto10["m_srcTableName"] = "Export and Import Rooms";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto12["m_sql"] = "external_property_level_3_rooms.external_table";
$proto12["m_srcTableName"] = "Export and Import Rooms";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto14["m_sql"] = "external_property_level_3_rooms.syst_created_datetime";
$proto14["m_srcTableName"] = "Export and Import Rooms";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto16["m_sql"] = "external_property_level_3_rooms.creation_system_id";
$proto16["m_srcTableName"] = "Export and Import Rooms";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto18["m_sql"] = "external_property_level_3_rooms.created_by_id";
$proto18["m_srcTableName"] = "Export and Import Rooms";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto20["m_sql"] = "external_property_level_3_rooms.creation_method";
$proto20["m_srcTableName"] = "Export and Import Rooms";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto22["m_sql"] = "external_property_level_3_rooms.syst_updated_datetime";
$proto22["m_srcTableName"] = "Export and Import Rooms";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto24["m_sql"] = "external_property_level_3_rooms.update_system_id";
$proto24["m_srcTableName"] = "Export and Import Rooms";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto26["m_sql"] = "external_property_level_3_rooms.updated_by_id";
$proto26["m_srcTableName"] = "Export and Import Rooms";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto28["m_sql"] = "external_property_level_3_rooms.update_method";
$proto28["m_srcTableName"] = "Export and Import Rooms";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto30["m_sql"] = "external_property_level_3_rooms.system_id_unit";
$proto30["m_srcTableName"] = "Export and Import Rooms";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto32["m_sql"] = "external_property_level_2_units.designation";
$proto32["m_srcTableName"] = "Export and Import Rooms";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "unit_designation";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto34["m_sql"] = "external_property_level_3_rooms.room_designation";
$proto34["m_srcTableName"] = "Export and Import Rooms";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto36["m_sql"] = "external_property_level_3_rooms.unee_t_unit_type";
$proto36["m_srcTableName"] = "Export and Import Rooms";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto38["m_sql"] = "external_property_level_3_rooms.is_obsolete";
$proto38["m_srcTableName"] = "Export and Import Rooms";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto40["m_sql"] = "external_property_level_3_rooms.is_creation_needed_in_unee_t";
$proto40["m_srcTableName"] = "Export and Import Rooms";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "number_of_beds",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto42["m_sql"] = "external_property_level_3_rooms.number_of_beds";
$proto42["m_srcTableName"] = "Export and Import Rooms";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "surface",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto44["m_sql"] = "external_property_level_3_rooms.surface";
$proto44["m_srcTableName"] = "Export and Import Rooms";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "surface_measurment_unit",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto46["m_sql"] = "external_property_level_3_rooms.surface_measurment_unit";
$proto46["m_srcTableName"] = "Export and Import Rooms";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "room_description",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto48["m_sql"] = "external_property_level_3_rooms.room_description";
$proto48["m_srcTableName"] = "Export and Import Rooms";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "room_type_id",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto50["m_sql"] = "external_property_level_3_rooms.room_type_id";
$proto50["m_srcTableName"] = "Export and Import Rooms";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto52["m_sql"] = "external_property_level_3_rooms.do_not_insert";
$proto52["m_srcTableName"] = "Export and Import Rooms";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "external_property_level_3_rooms";
$proto55["m_srcTableName"] = "Export and Import Rooms";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "system_id_room";
$proto55["m_columns"][] = "create_api_request_id";
$proto55["m_columns"][] = "edit_api_request_id";
$proto55["m_columns"][] = "external_id";
$proto55["m_columns"][] = "external_system_id";
$proto55["m_columns"][] = "external_table";
$proto55["m_columns"][] = "syst_created_datetime";
$proto55["m_columns"][] = "creation_system_id";
$proto55["m_columns"][] = "created_by_id";
$proto55["m_columns"][] = "creation_method";
$proto55["m_columns"][] = "syst_updated_datetime";
$proto55["m_columns"][] = "update_system_id";
$proto55["m_columns"][] = "updated_by_id";
$proto55["m_columns"][] = "update_method";
$proto55["m_columns"][] = "is_update_on_duplicate_key";
$proto55["m_columns"][] = "is_obsolete";
$proto55["m_columns"][] = "is_creation_needed_in_unee_t";
$proto55["m_columns"][] = "do_not_insert";
$proto55["m_columns"][] = "unee_t_unit_type";
$proto55["m_columns"][] = "system_id_unit";
$proto55["m_columns"][] = "room_type_id";
$proto55["m_columns"][] = "number_of_beds";
$proto55["m_columns"][] = "surface";
$proto55["m_columns"][] = "surface_measurment_unit";
$proto55["m_columns"][] = "room_designation";
$proto55["m_columns"][] = "room_description";
$proto55["m_columns"][] = "mgt_cny_default_assignee";
$proto55["m_columns"][] = "landlord_default_assignee";
$proto55["m_columns"][] = "tenant_default_assignee";
$proto55["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "external_property_level_3_rooms";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "Export and Import Rooms";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_LEFTJOIN";
			$proto59=array();
$proto59["m_strName"] = "external_property_level_2_units";
$proto59["m_srcTableName"] = "Export and Import Rooms";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "system_id_unit";
$proto59["m_columns"][] = "create_api_request_id";
$proto59["m_columns"][] = "edit_api_request_id";
$proto59["m_columns"][] = "external_id";
$proto59["m_columns"][] = "external_system_id";
$proto59["m_columns"][] = "external_table";
$proto59["m_columns"][] = "syst_created_datetime";
$proto59["m_columns"][] = "creation_system_id";
$proto59["m_columns"][] = "created_by_id";
$proto59["m_columns"][] = "creation_method";
$proto59["m_columns"][] = "syst_updated_datetime";
$proto59["m_columns"][] = "update_system_id";
$proto59["m_columns"][] = "updated_by_id";
$proto59["m_columns"][] = "update_method";
$proto59["m_columns"][] = "is_update_on_duplicate_key";
$proto59["m_columns"][] = "activated_by_id";
$proto59["m_columns"][] = "is_obsolete";
$proto59["m_columns"][] = "is_creation_needed_in_unee_t";
$proto59["m_columns"][] = "do_not_insert";
$proto59["m_columns"][] = "unee_t_unit_type";
$proto59["m_columns"][] = "building_system_id";
$proto59["m_columns"][] = "tower";
$proto59["m_columns"][] = "unit_category_id";
$proto59["m_columns"][] = "designation";
$proto59["m_columns"][] = "count_rooms";
$proto59["m_columns"][] = "unit_id";
$proto59["m_columns"][] = "surface";
$proto59["m_columns"][] = "surface_measurment_unit";
$proto59["m_columns"][] = "description";
$proto59["m_columns"][] = "mgt_cny_default_assignee";
$proto59["m_columns"][] = "landlord_default_assignee";
$proto59["m_columns"][] = "tenant_default_assignee";
$proto59["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "LEFT OUTER JOIN external_property_level_2_units ON external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "Export and Import Rooms";
$proto60=array();
$proto60["m_sql"] = "external_property_level_3_rooms.system_id_unit = external_property_level_2_units.system_id_unit";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= external_property_level_2_units.system_id_unit";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto62["m_column"]=$obj;
$proto62["m_bAsc"] = 1;
$proto62["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto62);

$proto0["m_orderby"][]=$obj;					
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "room_designation",
	"m_strTable" => "external_property_level_3_rooms",
	"m_srcTableName" => "Export and Import Rooms"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 1;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Export and Import Rooms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Export_and_Import_Rooms = createSqlQuery_Export_and_Import_Rooms();


	
					
;

																								

$tdataExport_and_Import_Rooms[".sqlquery"] = $queryData_Export_and_Import_Rooms;

include_once(getabspath("include/Export_and_Import_Rooms_events.php"));
$tableEvents["Export and Import Rooms"] = new eventclass_Export_and_Import_Rooms;
$tdataExport_and_Import_Rooms[".hasEvents"] = true;

?>