<?php



$tdatal1p_export = array();
$tdatal1p_export[".searchableFields"] = array();
$tdatal1p_export[".ShortName"] = "l1p_export";
$tdatal1p_export[".OwnerID"] = "created_by_id";
$tdatal1p_export[".OriginalTable"] = "external_property_level_1_buildings";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdatal1p_export[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatal1p_export[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatal1p_export[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsl1p_export = array();
$fieldToolTipsl1p_export = array();
$pageTitlesl1p_export = array();
$placeHoldersl1p_export = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsl1p_export["English"] = array();
	$fieldToolTipsl1p_export["English"] = array();
	$placeHoldersl1p_export["English"] = array();
	$pageTitlesl1p_export["English"] = array();
	$fieldLabelsl1p_export["English"]["id_building"] = "Unee-T Building ID";
	$fieldToolTipsl1p_export["English"]["id_building"] = "";
	$placeHoldersl1p_export["English"]["id_building"] = "";
	$fieldLabelsl1p_export["English"]["external_id"] = "External Id";
	$fieldToolTipsl1p_export["English"]["external_id"] = "";
	$placeHoldersl1p_export["English"]["external_id"] = "";
	$fieldLabelsl1p_export["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsl1p_export["English"]["external_system_id"] = "";
	$placeHoldersl1p_export["English"]["external_system_id"] = "";
	$fieldLabelsl1p_export["English"]["external_table"] = "External Table";
	$fieldToolTipsl1p_export["English"]["external_table"] = "";
	$placeHoldersl1p_export["English"]["external_table"] = "";
	$fieldLabelsl1p_export["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsl1p_export["English"]["syst_created_datetime"] = "";
	$placeHoldersl1p_export["English"]["syst_created_datetime"] = "";
	$fieldLabelsl1p_export["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsl1p_export["English"]["creation_system_id"] = "";
	$placeHoldersl1p_export["English"]["creation_system_id"] = "";
	$fieldLabelsl1p_export["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsl1p_export["English"]["created_by_id"] = "";
	$placeHoldersl1p_export["English"]["created_by_id"] = "";
	$fieldLabelsl1p_export["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsl1p_export["English"]["creation_method"] = "";
	$placeHoldersl1p_export["English"]["creation_method"] = "";
	$fieldLabelsl1p_export["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsl1p_export["English"]["syst_updated_datetime"] = "";
	$placeHoldersl1p_export["English"]["syst_updated_datetime"] = "";
	$fieldLabelsl1p_export["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsl1p_export["English"]["update_system_id"] = "";
	$placeHoldersl1p_export["English"]["update_system_id"] = "";
	$fieldLabelsl1p_export["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsl1p_export["English"]["updated_by_id"] = "";
	$placeHoldersl1p_export["English"]["updated_by_id"] = "";
	$fieldLabelsl1p_export["English"]["update_method"] = "Update Method";
	$fieldToolTipsl1p_export["English"]["update_method"] = "";
	$placeHoldersl1p_export["English"]["update_method"] = "";
	$fieldLabelsl1p_export["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsl1p_export["English"]["is_obsolete"] = "";
	$placeHoldersl1p_export["English"]["is_obsolete"] = "";
	$fieldLabelsl1p_export["English"]["order"] = "Order";
	$fieldToolTipsl1p_export["English"]["order"] = "";
	$placeHoldersl1p_export["English"]["order"] = "";
	$fieldLabelsl1p_export["English"]["area_id"] = "Unee-T Area ID";
	$fieldToolTipsl1p_export["English"]["area_id"] = "";
	$placeHoldersl1p_export["English"]["area_id"] = "";
	$fieldLabelsl1p_export["English"]["is_creation_needed_in_unee_t"] = "Create In Unee-T";
	$fieldToolTipsl1p_export["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersl1p_export["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsl1p_export["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsl1p_export["English"]["do_not_insert"] = "";
	$placeHoldersl1p_export["English"]["do_not_insert"] = "";
	$fieldLabelsl1p_export["English"]["unee_t_unit_type"] = "Type";
	$fieldToolTipsl1p_export["English"]["unee_t_unit_type"] = "";
	$placeHoldersl1p_export["English"]["unee_t_unit_type"] = "";
	$fieldLabelsl1p_export["English"]["designation"] = "Building";
	$fieldToolTipsl1p_export["English"]["designation"] = "";
	$placeHoldersl1p_export["English"]["designation"] = "";
	$fieldLabelsl1p_export["English"]["tower"] = "Tower";
	$fieldToolTipsl1p_export["English"]["tower"] = "";
	$placeHoldersl1p_export["English"]["tower"] = "";
	$fieldLabelsl1p_export["English"]["description"] = "Description";
	$fieldToolTipsl1p_export["English"]["description"] = "";
	$placeHoldersl1p_export["English"]["description"] = "";
	$fieldLabelsl1p_export["English"]["country_code"] = "Country Code";
	$fieldToolTipsl1p_export["English"]["country_code"] = "";
	$placeHoldersl1p_export["English"]["country_code"] = "";
	$fieldLabelsl1p_export["English"]["address_1"] = "Address 1";
	$fieldToolTipsl1p_export["English"]["address_1"] = "";
	$placeHoldersl1p_export["English"]["address_1"] = "";
	$fieldLabelsl1p_export["English"]["address_2"] = "Address 2";
	$fieldToolTipsl1p_export["English"]["address_2"] = "";
	$placeHoldersl1p_export["English"]["address_2"] = "";
	$fieldLabelsl1p_export["English"]["zip_postal_code"] = "Zip Postal Code";
	$fieldToolTipsl1p_export["English"]["zip_postal_code"] = "";
	$placeHoldersl1p_export["English"]["zip_postal_code"] = "";
	$fieldLabelsl1p_export["English"]["state"] = "State";
	$fieldToolTipsl1p_export["English"]["state"] = "";
	$placeHoldersl1p_export["English"]["state"] = "";
	$fieldLabelsl1p_export["English"]["city"] = "City";
	$fieldToolTipsl1p_export["English"]["city"] = "";
	$placeHoldersl1p_export["English"]["city"] = "";
	$fieldLabelsl1p_export["English"]["country_name"] = "Country Name";
	$fieldToolTipsl1p_export["English"]["country_name"] = "";
	$placeHoldersl1p_export["English"]["country_name"] = "";
	$fieldLabelsl1p_export["English"]["area_name"] = "Area Name";
	$fieldToolTipsl1p_export["English"]["area_name"] = "";
	$placeHoldersl1p_export["English"]["area_name"] = "";
	$fieldLabelsl1p_export["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsl1p_export["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersl1p_export["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsl1p_export["English"]["uneet_created_datetime"] = "Uneet Created Datetime";
	$fieldToolTipsl1p_export["English"]["uneet_created_datetime"] = "";
	$placeHoldersl1p_export["English"]["uneet_created_datetime"] = "";
	$fieldLabelsl1p_export["English"]["is_mefe_api_success"] = "Is Mefe Api Success";
	$fieldToolTipsl1p_export["English"]["is_mefe_api_success"] = "";
	$placeHoldersl1p_export["English"]["is_mefe_api_success"] = "";
	if (count($fieldToolTipsl1p_export["English"]))
		$tdatal1p_export[".isUseToolTips"] = true;
}


	$tdatal1p_export[".NCSearch"] = true;



$tdatal1p_export[".shortTableName"] = "l1p_export";
$tdatal1p_export[".nSecOptions"] = 1;

$tdatal1p_export[".mainTableOwnerID"] = "created_by_id";
$tdatal1p_export[".entityType"] = 1;

$tdatal1p_export[".strOriginalTableName"] = "external_property_level_1_buildings";

		 



$tdatal1p_export[".showAddInPopup"] = false;

$tdatal1p_export[".showEditInPopup"] = false;

$tdatal1p_export[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatal1p_export[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatal1p_export[".listAjax"] = true;
//	temporary
$tdatal1p_export[".listAjax"] = false;

	$tdatal1p_export[".audit"] = false;

	$tdatal1p_export[".locking"] = false;


$pages = $tdatal1p_export[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatal1p_export[".edit"] = true;
	$tdatal1p_export[".afterEditAction"] = 1;
	$tdatal1p_export[".closePopupAfterEdit"] = 1;
	$tdatal1p_export[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatal1p_export[".add"] = true;
$tdatal1p_export[".afterAddAction"] = 0;
$tdatal1p_export[".closePopupAfterAdd"] = 1;
$tdatal1p_export[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatal1p_export[".list"] = true;
}



$tdatal1p_export[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatal1p_export[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatal1p_export[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatal1p_export[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatal1p_export[".printFriendly"] = true;
}



$tdatal1p_export[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatal1p_export[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatal1p_export[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatal1p_export[".isUseAjaxSuggest"] = true;

$tdatal1p_export[".rowHighlite"] = true;





$tdatal1p_export[".ajaxCodeSnippetAdded"] = false;

$tdatal1p_export[".buttonsAdded"] = false;

$tdatal1p_export[".addPageEvents"] = false;

// use timepicker for search panel
$tdatal1p_export[".isUseTimeForSearch"] = false;


$tdatal1p_export[".badgeColor"] = "D2691E";


$tdatal1p_export[".allSearchFields"] = array();
$tdatal1p_export[".filterFields"] = array();
$tdatal1p_export[".requiredSearchFields"] = array();

$tdatal1p_export[".googleLikeFields"] = array();
$tdatal1p_export[".googleLikeFields"][] = "country_code";
$tdatal1p_export[".googleLikeFields"][] = "country_name";
$tdatal1p_export[".googleLikeFields"][] = "area_name";
$tdatal1p_export[".googleLikeFields"][] = "designation";
$tdatal1p_export[".googleLikeFields"][] = "tower";
$tdatal1p_export[".googleLikeFields"][] = "address_1";
$tdatal1p_export[".googleLikeFields"][] = "address_2";
$tdatal1p_export[".googleLikeFields"][] = "zip_postal_code";
$tdatal1p_export[".googleLikeFields"][] = "state";
$tdatal1p_export[".googleLikeFields"][] = "city";
$tdatal1p_export[".googleLikeFields"][] = "description";
$tdatal1p_export[".googleLikeFields"][] = "unee_t_mefe_unit_id";
$tdatal1p_export[".googleLikeFields"][] = "uneet_created_datetime";
$tdatal1p_export[".googleLikeFields"][] = "is_mefe_api_success";



$tdatal1p_export[".tableType"] = "list";

$tdatal1p_export[".printerPageOrientation"] = 0;
$tdatal1p_export[".nPrinterPageScale"] = 100;

$tdatal1p_export[".nPrinterSplitRecords"] = 40;

$tdatal1p_export[".geocodingEnabled"] = false;





$tdatal1p_export[".isResizeColumns"] = true;





$tdatal1p_export[".pageSize"] = 20;

$tdatal1p_export[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_property_level_1_buildings.country_code, external_property_level_1_buildings.`order`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatal1p_export[".strOrderBy"] = $tstrOrderBy;

$tdatal1p_export[".orderindexes"] = array();
	$tdatal1p_export[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.country_code");

	$tdatal1p_export[".orderindexes"][] = array(28, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.`order`");


$tdatal1p_export[".sqlHead"] = "SELECT external_property_level_1_buildings.id_building,  external_property_level_1_buildings.external_id,  external_property_level_1_buildings.external_system_id,  external_property_level_1_buildings.external_table,  external_property_level_1_buildings.syst_created_datetime,  external_property_level_1_buildings.creation_system_id,  external_property_level_1_buildings.created_by_id,  external_property_level_1_buildings.creation_method,  external_property_level_1_buildings.syst_updated_datetime,  external_property_level_1_buildings.update_system_id,  external_property_level_1_buildings.updated_by_id,  external_property_level_1_buildings.update_method,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_groups_areas.area_name,  external_property_level_1_buildings.area_id,  external_property_level_1_buildings.designation,  external_property_level_1_buildings.unee_t_unit_type,  external_property_level_1_buildings.is_creation_needed_in_unee_t,  external_property_level_1_buildings.tower,  external_property_level_1_buildings.address_1,  external_property_level_1_buildings.address_2,  external_property_level_1_buildings.zip_postal_code,  external_property_level_1_buildings.`state`,  external_property_level_1_buildings.city,  external_property_level_1_buildings.description,  external_property_level_1_buildings.is_obsolete,  external_property_level_1_buildings.`order`,  external_property_level_1_buildings.do_not_insert,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  ut_map_external_source_units.is_mefe_api_success";
$tdatal1p_export[".sqlFrom"] = "FROM external_property_level_1_buildings  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  INNER JOIN ut_map_external_source_units ON external_property_level_1_buildings.external_id = ut_map_external_source_units.external_property_id AND external_property_level_1_buildings.external_system_id = ut_map_external_source_units.external_system AND external_property_level_1_buildings.external_table = ut_map_external_source_units.table_in_external_system AND external_property_level_1_buildings.created_by_id = ut_map_external_source_units.organization_id AND external_property_level_1_buildings.tower = ut_map_external_source_units.tower";
$tdatal1p_export[".sqlWhereExpr"] = "(ut_map_external_source_units.is_mefe_api_success = 1)";
$tdatal1p_export[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatal1p_export[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatal1p_export[".arrGroupsPerPage"] = $arrGPP;

$tdatal1p_export[".highlightSearchResults"] = true;

$tableKeysl1p_export = array();
$tableKeysl1p_export[] = "external_id";
$tableKeysl1p_export[] = "external_system_id";
$tableKeysl1p_export[] = "external_table";
$tableKeysl1p_export[] = "created_by_id";
$tableKeysl1p_export[] = "tower";
$tdatal1p_export[".Keys"] = $tableKeysl1p_export;


$tdatal1p_export[".hideMobileList"] = array();




//	id_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_building";
	$fdata["GoodName"] = "id_building";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","id_building");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.id_building";

	
	
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


	$tdatal1p_export["id_building"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "id_building";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.external_id";

	
	
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


	$tdatal1p_export["external_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.external_system_id";

	
	
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


	$tdatal1p_export["external_system_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.external_table";

	
	
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


	$tdatal1p_export["external_table"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.syst_created_datetime";

	
	
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


	$tdatal1p_export["syst_created_datetime"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.creation_system_id";

	
	
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


	$tdatal1p_export["creation_system_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.created_by_id";

	
	
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


	$tdatal1p_export["created_by_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.creation_method";

	
	
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


	$tdatal1p_export["creation_method"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.syst_updated_datetime";

	
	
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


	$tdatal1p_export["syst_updated_datetime"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.update_system_id";

	
	
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


	$tdatal1p_export["update_system_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.updated_by_id";

	
	
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


	$tdatal1p_export["updated_by_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.update_method";

	
	
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


	$tdatal1p_export["update_method"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "update_method";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","country_code");
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


	$tdatal1p_export["country_code"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("L1P_Export","country_name");
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


	$tdatal1p_export["country_name"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "country_name";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("L1P_Export","area_name");
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


	$tdatal1p_export["area_name"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "area_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","area_id");
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


	$tdatal1p_export["area_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "area_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","designation");
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


	$tdatal1p_export["designation"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "designation";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","unee_t_unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_unit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.unee_t_unit_type";

	
	
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


	$tdatal1p_export["unee_t_unit_type"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "unee_t_unit_type";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","is_creation_needed_in_unee_t");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_creation_needed_in_unee_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.is_creation_needed_in_unee_t";

	
	
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


	$tdatal1p_export["is_creation_needed_in_unee_t"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","tower");
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


	$tdatal1p_export["tower"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "tower";
//	address_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "address_1";
	$fdata["GoodName"] = "address_1";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","address_1");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "address_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.address_1";

	
	
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


	$tdatal1p_export["address_1"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "address_1";
//	address_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "address_2";
	$fdata["GoodName"] = "address_2";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","address_2");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "address_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.address_2";

	
	
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


	$tdatal1p_export["address_2"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "address_2";
//	zip_postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "zip_postal_code";
	$fdata["GoodName"] = "zip_postal_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","zip_postal_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "zip_postal_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.zip_postal_code";

	
	
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


	$tdatal1p_export["zip_postal_code"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "zip_postal_code";
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","state");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.`state`";

	
	
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


	$tdatal1p_export["state"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "state";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","city");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.city";

	
	
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


	$tdatal1p_export["city"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "city";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.description";

	
	
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


	$tdatal1p_export["description"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "description";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.is_obsolete";

	
	
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


	$tdatal1p_export["is_obsolete"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "is_obsolete";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","order");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.`order`";

	
	
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


	$tdatal1p_export["order"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "order";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("L1P_Export","do_not_insert");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "do_not_insert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.do_not_insert";

	
	
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


	$tdatal1p_export["do_not_insert"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "do_not_insert";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("L1P_Export","unee_t_mefe_unit_id");
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


	$tdatal1p_export["unee_t_mefe_unit_id"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "unee_t_mefe_unit_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("L1P_Export","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.uneet_created_datetime";

	
	
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


	$tdatal1p_export["uneet_created_datetime"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "uneet_created_datetime";
//	is_mefe_api_success
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "is_mefe_api_success";
	$fdata["GoodName"] = "is_mefe_api_success";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("L1P_Export","is_mefe_api_success");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_mefe_api_success";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.is_mefe_api_success";

	
	
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


	$tdatal1p_export["is_mefe_api_success"] = $fdata;
		$tdatal1p_export[".searchableFields"][] = "is_mefe_api_success";


$tables_data["L1P Export"]=&$tdatal1p_export;
$field_labels["L1P_Export"] = &$fieldLabelsl1p_export;
$fieldToolTips["L1P_Export"] = &$fieldToolTipsl1p_export;
$placeHolders["L1P_Export"] = &$placeHoldersl1p_export;
$page_titles["L1P_Export"] = &$pageTitlesl1p_export;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["L1P Export"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["L1P Export"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_l1p_export()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_1_buildings.id_building,  external_property_level_1_buildings.external_id,  external_property_level_1_buildings.external_system_id,  external_property_level_1_buildings.external_table,  external_property_level_1_buildings.syst_created_datetime,  external_property_level_1_buildings.creation_system_id,  external_property_level_1_buildings.created_by_id,  external_property_level_1_buildings.creation_method,  external_property_level_1_buildings.syst_updated_datetime,  external_property_level_1_buildings.update_system_id,  external_property_level_1_buildings.updated_by_id,  external_property_level_1_buildings.update_method,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_groups_areas.area_name,  external_property_level_1_buildings.area_id,  external_property_level_1_buildings.designation,  external_property_level_1_buildings.unee_t_unit_type,  external_property_level_1_buildings.is_creation_needed_in_unee_t,  external_property_level_1_buildings.tower,  external_property_level_1_buildings.address_1,  external_property_level_1_buildings.address_2,  external_property_level_1_buildings.zip_postal_code,  external_property_level_1_buildings.`state`,  external_property_level_1_buildings.city,  external_property_level_1_buildings.description,  external_property_level_1_buildings.is_obsolete,  external_property_level_1_buildings.`order`,  external_property_level_1_buildings.do_not_insert,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  ut_map_external_source_units.is_mefe_api_success";
$proto0["m_strFrom"] = "FROM external_property_level_1_buildings  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  INNER JOIN ut_map_external_source_units ON external_property_level_1_buildings.external_id = ut_map_external_source_units.external_property_id AND external_property_level_1_buildings.external_system_id = ut_map_external_source_units.external_system AND external_property_level_1_buildings.external_table = ut_map_external_source_units.table_in_external_system AND external_property_level_1_buildings.created_by_id = ut_map_external_source_units.organization_id AND external_property_level_1_buildings.tower = ut_map_external_source_units.tower";
$proto0["m_strWhere"] = "(ut_map_external_source_units.is_mefe_api_success = 1)";
$proto0["m_strOrderBy"] = "ORDER BY external_property_level_1_buildings.country_code, external_property_level_1_buildings.`order`";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ut_map_external_source_units.is_mefe_api_success = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_mefe_api_success",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "L1P Export"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_strName" => "id_building",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto6["m_sql"] = "external_property_level_1_buildings.id_building";
$proto6["m_srcTableName"] = "L1P Export";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto8["m_sql"] = "external_property_level_1_buildings.external_id";
$proto8["m_srcTableName"] = "L1P Export";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto10["m_sql"] = "external_property_level_1_buildings.external_system_id";
$proto10["m_srcTableName"] = "L1P Export";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto12["m_sql"] = "external_property_level_1_buildings.external_table";
$proto12["m_srcTableName"] = "L1P Export";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto14["m_sql"] = "external_property_level_1_buildings.syst_created_datetime";
$proto14["m_srcTableName"] = "L1P Export";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto16["m_sql"] = "external_property_level_1_buildings.creation_system_id";
$proto16["m_srcTableName"] = "L1P Export";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto18["m_sql"] = "external_property_level_1_buildings.created_by_id";
$proto18["m_srcTableName"] = "L1P Export";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto20["m_sql"] = "external_property_level_1_buildings.creation_method";
$proto20["m_srcTableName"] = "L1P Export";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto22["m_sql"] = "external_property_level_1_buildings.syst_updated_datetime";
$proto22["m_srcTableName"] = "L1P Export";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto24["m_sql"] = "external_property_level_1_buildings.update_system_id";
$proto24["m_srcTableName"] = "L1P Export";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto26["m_sql"] = "external_property_level_1_buildings.updated_by_id";
$proto26["m_srcTableName"] = "L1P Export";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto28["m_sql"] = "external_property_level_1_buildings.update_method";
$proto28["m_srcTableName"] = "L1P Export";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto30["m_sql"] = "external_property_level_1_buildings.country_code";
$proto30["m_srcTableName"] = "L1P Export";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "L1P Export"
));

$proto32["m_sql"] = "property_groups_countries.country_name";
$proto32["m_srcTableName"] = "L1P Export";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "L1P Export"
));

$proto34["m_sql"] = "external_property_groups_areas.area_name";
$proto34["m_srcTableName"] = "L1P Export";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto36["m_sql"] = "external_property_level_1_buildings.area_id";
$proto36["m_srcTableName"] = "L1P Export";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto38["m_sql"] = "external_property_level_1_buildings.designation";
$proto38["m_srcTableName"] = "L1P Export";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto40["m_sql"] = "external_property_level_1_buildings.unee_t_unit_type";
$proto40["m_srcTableName"] = "L1P Export";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto42["m_sql"] = "external_property_level_1_buildings.is_creation_needed_in_unee_t";
$proto42["m_srcTableName"] = "L1P Export";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto44["m_sql"] = "external_property_level_1_buildings.tower";
$proto44["m_srcTableName"] = "L1P Export";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "address_1",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto46["m_sql"] = "external_property_level_1_buildings.address_1";
$proto46["m_srcTableName"] = "L1P Export";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "address_2",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto48["m_sql"] = "external_property_level_1_buildings.address_2";
$proto48["m_srcTableName"] = "L1P Export";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_postal_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto50["m_sql"] = "external_property_level_1_buildings.zip_postal_code";
$proto50["m_srcTableName"] = "L1P Export";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto52["m_sql"] = "external_property_level_1_buildings.`state`";
$proto52["m_srcTableName"] = "L1P Export";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto54["m_sql"] = "external_property_level_1_buildings.city";
$proto54["m_srcTableName"] = "L1P Export";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto56["m_sql"] = "external_property_level_1_buildings.description";
$proto56["m_srcTableName"] = "L1P Export";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto58["m_sql"] = "external_property_level_1_buildings.is_obsolete";
$proto58["m_srcTableName"] = "L1P Export";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto60["m_sql"] = "external_property_level_1_buildings.`order`";
$proto60["m_srcTableName"] = "L1P Export";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto62["m_sql"] = "external_property_level_1_buildings.do_not_insert";
$proto62["m_srcTableName"] = "L1P Export";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "L1P Export"
));

$proto64["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id";
$proto64["m_srcTableName"] = "L1P Export";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "L1P Export"
));

$proto66["m_sql"] = "ut_map_external_source_units.uneet_created_datetime";
$proto66["m_srcTableName"] = "L1P Export";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "is_mefe_api_success",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "L1P Export"
));

$proto68["m_sql"] = "ut_map_external_source_units.is_mefe_api_success";
$proto68["m_srcTableName"] = "L1P Export";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "external_property_level_1_buildings";
$proto71["m_srcTableName"] = "L1P Export";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "id_building";
$proto71["m_columns"][] = "create_api_request_id";
$proto71["m_columns"][] = "edit_api_request_id";
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
$proto71["m_columns"][] = "is_update_on_duplicate_key";
$proto71["m_columns"][] = "is_obsolete";
$proto71["m_columns"][] = "order";
$proto71["m_columns"][] = "is_creation_needed_in_unee_t";
$proto71["m_columns"][] = "do_not_insert";
$proto71["m_columns"][] = "unee_t_unit_type";
$proto71["m_columns"][] = "area_external_system";
$proto71["m_columns"][] = "area_external_table";
$proto71["m_columns"][] = "area_external_id";
$proto71["m_columns"][] = "designation";
$proto71["m_columns"][] = "tower";
$proto71["m_columns"][] = "address_1";
$proto71["m_columns"][] = "address_2";
$proto71["m_columns"][] = "zip_postal_code";
$proto71["m_columns"][] = "state";
$proto71["m_columns"][] = "city";
$proto71["m_columns"][] = "country_code";
$proto71["m_columns"][] = "description";
$proto71["m_columns"][] = "mgt_cny_default_assignee";
$proto71["m_columns"][] = "landlord_default_assignee";
$proto71["m_columns"][] = "tenant_default_assignee";
$proto71["m_columns"][] = "agent_default_assignee";
$proto71["m_columns"][] = "area_id";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "external_property_level_1_buildings";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "L1P Export";
$proto72=array();
$proto72["m_sql"] = "";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
												$proto74=array();
$proto74["m_link"] = "SQLL_LEFTJOIN";
			$proto75=array();
$proto75["m_strName"] = "property_groups_countries";
$proto75["m_srcTableName"] = "L1P Export";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id_country";
$proto75["m_columns"][] = "syst_created_datetime";
$proto75["m_columns"][] = "creation_system_id";
$proto75["m_columns"][] = "created_by_id";
$proto75["m_columns"][] = "syst_updated_datetime";
$proto75["m_columns"][] = "update_system_id";
$proto75["m_columns"][] = "updated_by_id";
$proto75["m_columns"][] = "is_obsolete";
$proto75["m_columns"][] = "is_default";
$proto75["m_columns"][] = "is_system";
$proto75["m_columns"][] = "order";
$proto75["m_columns"][] = "country_code";
$proto75["m_columns"][] = "country_name";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "L1P Export";
$proto76=array();
$proto76["m_sql"] = "external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= property_groups_countries.country_code";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_LEFTJOIN";
			$proto79=array();
$proto79["m_strName"] = "external_property_groups_areas";
$proto79["m_srcTableName"] = "L1P Export";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id_area";
$proto79["m_columns"][] = "create_api_request_id";
$proto79["m_columns"][] = "edit_api_request_id";
$proto79["m_columns"][] = "external_id";
$proto79["m_columns"][] = "external_system_id";
$proto79["m_columns"][] = "external_table";
$proto79["m_columns"][] = "syst_created_datetime";
$proto79["m_columns"][] = "creation_system_id";
$proto79["m_columns"][] = "created_by_id";
$proto79["m_columns"][] = "creation_method";
$proto79["m_columns"][] = "syst_updated_datetime";
$proto79["m_columns"][] = "update_system_id";
$proto79["m_columns"][] = "updated_by_id";
$proto79["m_columns"][] = "update_method";
$proto79["m_columns"][] = "is_update_on_duplicate_key";
$proto79["m_columns"][] = "is_creation_needed_in_unee_t";
$proto79["m_columns"][] = "is_obsolete";
$proto79["m_columns"][] = "is_default";
$proto79["m_columns"][] = "order";
$proto79["m_columns"][] = "country_code";
$proto79["m_columns"][] = "area_name";
$proto79["m_columns"][] = "area_definition";
$proto79["m_columns"][] = "mgt_cny_default_assignee";
$proto79["m_columns"][] = "landlord_default_assignee";
$proto79["m_columns"][] = "tenant_default_assignee";
$proto79["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "L1P Export";
$proto80=array();
$proto80["m_sql"] = "external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= external_property_groups_areas.id_area";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_INNERJOIN";
			$proto83=array();
$proto83["m_strName"] = "ut_map_external_source_units";
$proto83["m_srcTableName"] = "L1P Export";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "id_map";
$proto83["m_columns"][] = "create_api_request_id";
$proto83["m_columns"][] = "edit_api_request_id";
$proto83["m_columns"][] = "syst_created_datetime";
$proto83["m_columns"][] = "creation_system_id";
$proto83["m_columns"][] = "created_by_id";
$proto83["m_columns"][] = "creation_method";
$proto83["m_columns"][] = "syst_updated_datetime";
$proto83["m_columns"][] = "update_system_id";
$proto83["m_columns"][] = "updated_by_id";
$proto83["m_columns"][] = "update_method";
$proto83["m_columns"][] = "is_update_on_duplicate_key";
$proto83["m_columns"][] = "organization_id";
$proto83["m_columns"][] = "datetime_latest_trigger";
$proto83["m_columns"][] = "latest_trigger";
$proto83["m_columns"][] = "is_obsolete";
$proto83["m_columns"][] = "is_update_needed";
$proto83["m_columns"][] = "area_id";
$proto83["m_columns"][] = "mefe_area_id";
$proto83["m_columns"][] = "mefe_unit_id_parent";
$proto83["m_columns"][] = "unee_t_mefe_unit_id";
$proto83["m_columns"][] = "uneet_created_datetime";
$proto83["m_columns"][] = "is_mefe_api_success";
$proto83["m_columns"][] = "mefe_api_error_message";
$proto83["m_columns"][] = "is_unee_t_created_by_me";
$proto83["m_columns"][] = "unee_t_unit_type";
$proto83["m_columns"][] = "uneet_name";
$proto83["m_columns"][] = "new_record_id";
$proto83["m_columns"][] = "external_property_type_id";
$proto83["m_columns"][] = "external_property_id";
$proto83["m_columns"][] = "external_system";
$proto83["m_columns"][] = "table_in_external_system";
$proto83["m_columns"][] = "tower";
$proto83["m_columns"][] = "parent_external_system";
$proto83["m_columns"][] = "parent_external_table";
$proto83["m_columns"][] = "parent_external_id";
$proto83["m_columns"][] = "mgt_cny_default_assignee";
$proto83["m_columns"][] = "landlord_default_assignee";
$proto83["m_columns"][] = "tenant_default_assignee";
$proto83["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "INNER JOIN ut_map_external_source_units ON external_property_level_1_buildings.external_id = ut_map_external_source_units.external_property_id AND external_property_level_1_buildings.external_system_id = ut_map_external_source_units.external_system AND external_property_level_1_buildings.external_table = ut_map_external_source_units.table_in_external_system AND external_property_level_1_buildings.created_by_id = ut_map_external_source_units.organization_id AND external_property_level_1_buildings.tower = ut_map_external_source_units.tower";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "L1P Export";
$proto84=array();
$proto84["m_sql"] = "external_property_level_1_buildings.external_id = ut_map_external_source_units.external_property_id AND external_property_level_1_buildings.external_system_id = ut_map_external_source_units.external_system AND external_property_level_1_buildings.external_table = ut_map_external_source_units.table_in_external_system AND external_property_level_1_buildings.created_by_id = ut_map_external_source_units.organization_id AND external_property_level_1_buildings.tower = ut_map_external_source_units.tower";
$proto84["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_property_level_1_buildings.external_id = ut_map_external_source_units.external_property_id AND external_property_level_1_buildings.external_system_id = ut_map_external_source_units.external_system AND external_property_level_1_buildings.external_table = ut_map_external_source_units.table_in_external_system AND external_property_level_1_buildings.created_by_id = ut_map_external_source_units.organization_id AND external_property_level_1_buildings.tower = ut_map_external_source_units.tower"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
						$proto86=array();
$proto86["m_sql"] = "external_property_level_1_buildings.external_id = ut_map_external_source_units.external_property_id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= ut_map_external_source_units.external_property_id";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

			$proto84["m_contained"][]=$obj;
						$proto88=array();
$proto88["m_sql"] = "external_property_level_1_buildings.external_system_id = ut_map_external_source_units.external_system";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= ut_map_external_source_units.external_system";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

			$proto84["m_contained"][]=$obj;
						$proto90=array();
$proto90["m_sql"] = "external_property_level_1_buildings.external_table = ut_map_external_source_units.table_in_external_system";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= ut_map_external_source_units.table_in_external_system";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

			$proto84["m_contained"][]=$obj;
						$proto92=array();
$proto92["m_sql"] = "external_property_level_1_buildings.created_by_id = ut_map_external_source_units.organization_id";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= ut_map_external_source_units.organization_id";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

			$proto84["m_contained"][]=$obj;
						$proto94=array();
$proto94["m_sql"] = "external_property_level_1_buildings.tower = ut_map_external_source_units.tower";
$proto94["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
$proto94["m_strCase"] = "= ut_map_external_source_units.tower";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

			$proto84["m_contained"][]=$obj;
$proto84["m_strCase"] = "";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto96=array();
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto96["m_column"]=$obj;
$proto96["m_bAsc"] = 1;
$proto96["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto96);

$proto0["m_orderby"][]=$obj;					
												$proto98=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "L1P Export"
));

$proto98["m_column"]=$obj;
$proto98["m_bAsc"] = 1;
$proto98["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto98);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="L1P Export";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_l1p_export = createSqlQuery_l1p_export();


	
					
;

																																

$tdatal1p_export[".sqlquery"] = $queryData_l1p_export;

include_once(getabspath("include/l1p_export_events.php"));
$tableEvents["L1P Export"] = new eventclass_l1p_export;
$tdatal1p_export[".hasEvents"] = true;

?>