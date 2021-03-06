<?php



$tdataManage_Buildings = array();
$tdataManage_Buildings[".searchableFields"] = array();
$tdataManage_Buildings[".ShortName"] = "Manage_Buildings";
$tdataManage_Buildings[".OwnerID"] = "created_by_id";
$tdataManage_Buildings[".OriginalTable"] = "external_property_level_1_buildings";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataManage_Buildings[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataManage_Buildings[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataManage_Buildings[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_Buildings = array();
$fieldToolTipsManage_Buildings = array();
$pageTitlesManage_Buildings = array();
$placeHoldersManage_Buildings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_Buildings["English"] = array();
	$fieldToolTipsManage_Buildings["English"] = array();
	$placeHoldersManage_Buildings["English"] = array();
	$pageTitlesManage_Buildings["English"] = array();
	$fieldLabelsManage_Buildings["English"]["id_building"] = "ID";
	$fieldToolTipsManage_Buildings["English"]["id_building"] = "";
	$placeHoldersManage_Buildings["English"]["id_building"] = "";
	$fieldLabelsManage_Buildings["English"]["external_id"] = "External Id";
	$fieldToolTipsManage_Buildings["English"]["external_id"] = "";
	$placeHoldersManage_Buildings["English"]["external_id"] = "";
	$fieldLabelsManage_Buildings["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsManage_Buildings["English"]["external_system_id"] = "";
	$placeHoldersManage_Buildings["English"]["external_system_id"] = "";
	$fieldLabelsManage_Buildings["English"]["external_table"] = "External Table";
	$fieldToolTipsManage_Buildings["English"]["external_table"] = "";
	$placeHoldersManage_Buildings["English"]["external_table"] = "";
	$fieldLabelsManage_Buildings["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsManage_Buildings["English"]["syst_created_datetime"] = "";
	$placeHoldersManage_Buildings["English"]["syst_created_datetime"] = "";
	$fieldLabelsManage_Buildings["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsManage_Buildings["English"]["creation_system_id"] = "";
	$placeHoldersManage_Buildings["English"]["creation_system_id"] = "";
	$fieldLabelsManage_Buildings["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsManage_Buildings["English"]["created_by_id"] = "";
	$placeHoldersManage_Buildings["English"]["created_by_id"] = "";
	$fieldLabelsManage_Buildings["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsManage_Buildings["English"]["creation_method"] = "";
	$placeHoldersManage_Buildings["English"]["creation_method"] = "";
	$fieldLabelsManage_Buildings["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_Buildings["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_Buildings["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_Buildings["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_Buildings["English"]["update_system_id"] = "";
	$placeHoldersManage_Buildings["English"]["update_system_id"] = "";
	$fieldLabelsManage_Buildings["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_Buildings["English"]["updated_by_id"] = "";
	$placeHoldersManage_Buildings["English"]["updated_by_id"] = "";
	$fieldLabelsManage_Buildings["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_Buildings["English"]["update_method"] = "";
	$placeHoldersManage_Buildings["English"]["update_method"] = "";
	$fieldLabelsManage_Buildings["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsManage_Buildings["English"]["is_obsolete"] = "";
	$placeHoldersManage_Buildings["English"]["is_obsolete"] = "";
	$fieldLabelsManage_Buildings["English"]["order"] = "Order";
	$fieldToolTipsManage_Buildings["English"]["order"] = "";
	$placeHoldersManage_Buildings["English"]["order"] = "";
	$fieldLabelsManage_Buildings["English"]["area_id"] = "Area";
	$fieldToolTipsManage_Buildings["English"]["area_id"] = "";
	$placeHoldersManage_Buildings["English"]["area_id"] = "";
	$fieldLabelsManage_Buildings["English"]["is_creation_needed_in_unee_t"] = "Create In Unee-T";
	$fieldToolTipsManage_Buildings["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersManage_Buildings["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsManage_Buildings["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsManage_Buildings["English"]["do_not_insert"] = "";
	$placeHoldersManage_Buildings["English"]["do_not_insert"] = "";
	$fieldLabelsManage_Buildings["English"]["unee_t_unit_type"] = "Property Type";
	$fieldToolTipsManage_Buildings["English"]["unee_t_unit_type"] = "";
	$placeHoldersManage_Buildings["English"]["unee_t_unit_type"] = "";
	$fieldLabelsManage_Buildings["English"]["designation"] = "Building";
	$fieldToolTipsManage_Buildings["English"]["designation"] = "";
	$placeHoldersManage_Buildings["English"]["designation"] = "";
	$fieldLabelsManage_Buildings["English"]["tower"] = "Tower";
	$fieldToolTipsManage_Buildings["English"]["tower"] = "";
	$placeHoldersManage_Buildings["English"]["tower"] = "1";
	$fieldLabelsManage_Buildings["English"]["description"] = "Description";
	$fieldToolTipsManage_Buildings["English"]["description"] = "";
	$placeHoldersManage_Buildings["English"]["description"] = "";
	$fieldLabelsManage_Buildings["English"]["country_code"] = "Country";
	$fieldToolTipsManage_Buildings["English"]["country_code"] = "";
	$placeHoldersManage_Buildings["English"]["country_code"] = "";
	$fieldLabelsManage_Buildings["English"]["country_name"] = "Country";
	$fieldToolTipsManage_Buildings["English"]["country_name"] = "";
	$placeHoldersManage_Buildings["English"]["country_name"] = "";
	$fieldLabelsManage_Buildings["English"]["area_name"] = "Area";
	$fieldToolTipsManage_Buildings["English"]["area_name"] = "";
	$placeHoldersManage_Buildings["English"]["area_name"] = "";
	$fieldLabelsManage_Buildings["English"]["order_area"] = "Order Area";
	$fieldToolTipsManage_Buildings["English"]["order_area"] = "";
	$placeHoldersManage_Buildings["English"]["order_area"] = "";
	$fieldLabelsManage_Buildings["English"]["address_1"] = "Address 1";
	$fieldToolTipsManage_Buildings["English"]["address_1"] = "";
	$placeHoldersManage_Buildings["English"]["address_1"] = "";
	$fieldLabelsManage_Buildings["English"]["address_2"] = "Address 2";
	$fieldToolTipsManage_Buildings["English"]["address_2"] = "";
	$placeHoldersManage_Buildings["English"]["address_2"] = "";
	$fieldLabelsManage_Buildings["English"]["zip_postal_code"] = "Zip Postal Code";
	$fieldToolTipsManage_Buildings["English"]["zip_postal_code"] = "";
	$placeHoldersManage_Buildings["English"]["zip_postal_code"] = "";
	$fieldLabelsManage_Buildings["English"]["state"] = "State";
	$fieldToolTipsManage_Buildings["English"]["state"] = "";
	$placeHoldersManage_Buildings["English"]["state"] = "";
	$fieldLabelsManage_Buildings["English"]["city"] = "City";
	$fieldToolTipsManage_Buildings["English"]["city"] = "";
	$placeHoldersManage_Buildings["English"]["city"] = "";
	$fieldLabelsManage_Buildings["English"]["uneet_created_datetime"] = "Uneet Created Datetime";
	$fieldToolTipsManage_Buildings["English"]["uneet_created_datetime"] = "";
	$placeHoldersManage_Buildings["English"]["uneet_created_datetime"] = "";
	$fieldLabelsManage_Buildings["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsManage_Buildings["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersManage_Buildings["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsManage_Buildings["English"]["id_area"] = "Id Area";
	$fieldToolTipsManage_Buildings["English"]["id_area"] = "";
	$placeHoldersManage_Buildings["English"]["id_area"] = "";
	$fieldLabelsManage_Buildings["English"]["mgt_cny_default_assignee"] = "Mgt Cny";
	$fieldToolTipsManage_Buildings["English"]["mgt_cny_default_assignee"] = "";
	$placeHoldersManage_Buildings["English"]["mgt_cny_default_assignee"] = "";
	$fieldLabelsManage_Buildings["English"]["landlord_default_assignee"] = "Landlord";
	$fieldToolTipsManage_Buildings["English"]["landlord_default_assignee"] = "";
	$placeHoldersManage_Buildings["English"]["landlord_default_assignee"] = "";
	$fieldLabelsManage_Buildings["English"]["tenant_default_assignee"] = "Tenant";
	$fieldToolTipsManage_Buildings["English"]["tenant_default_assignee"] = "";
	$placeHoldersManage_Buildings["English"]["tenant_default_assignee"] = "";
	$fieldLabelsManage_Buildings["English"]["agent_default_assignee"] = "Agent";
	$fieldToolTipsManage_Buildings["English"]["agent_default_assignee"] = "";
	$placeHoldersManage_Buildings["English"]["agent_default_assignee"] = "";
	$fieldLabelsManage_Buildings["English"]["area_external_system"] = "Area External System";
	$fieldToolTipsManage_Buildings["English"]["area_external_system"] = "";
	$placeHoldersManage_Buildings["English"]["area_external_system"] = "";
	$fieldLabelsManage_Buildings["English"]["area_external_table"] = "Area External Table";
	$fieldToolTipsManage_Buildings["English"]["area_external_table"] = "";
	$placeHoldersManage_Buildings["English"]["area_external_table"] = "";
	$fieldLabelsManage_Buildings["English"]["area_external_id"] = "Area External Id";
	$fieldToolTipsManage_Buildings["English"]["area_external_id"] = "";
	$placeHoldersManage_Buildings["English"]["area_external_id"] = "";
	if (count($fieldToolTipsManage_Buildings["English"]))
		$tdataManage_Buildings[".isUseToolTips"] = true;
}


	$tdataManage_Buildings[".NCSearch"] = true;



$tdataManage_Buildings[".shortTableName"] = "Manage_Buildings";
$tdataManage_Buildings[".nSecOptions"] = 1;

$tdataManage_Buildings[".mainTableOwnerID"] = "created_by_id";
$tdataManage_Buildings[".entityType"] = 1;

$tdataManage_Buildings[".strOriginalTableName"] = "external_property_level_1_buildings";

		 



$tdataManage_Buildings[".showAddInPopup"] = false;

$tdataManage_Buildings[".showEditInPopup"] = false;

$tdataManage_Buildings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_Buildings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_Buildings[".listAjax"] = true;
//	temporary
$tdataManage_Buildings[".listAjax"] = false;

	$tdataManage_Buildings[".audit"] = false;

	$tdataManage_Buildings[".locking"] = false;


$pages = $tdataManage_Buildings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_Buildings[".edit"] = true;
	$tdataManage_Buildings[".afterEditAction"] = 1;
	$tdataManage_Buildings[".closePopupAfterEdit"] = 1;
	$tdataManage_Buildings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_Buildings[".add"] = true;
$tdataManage_Buildings[".afterAddAction"] = 1;
$tdataManage_Buildings[".closePopupAfterAdd"] = 1;
$tdataManage_Buildings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_Buildings[".list"] = true;
}



$tdataManage_Buildings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_Buildings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_Buildings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_Buildings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_Buildings[".printFriendly"] = true;
}



$tdataManage_Buildings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_Buildings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_Buildings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_Buildings[".isUseAjaxSuggest"] = true;

$tdataManage_Buildings[".rowHighlite"] = true;





$tdataManage_Buildings[".ajaxCodeSnippetAdded"] = false;

$tdataManage_Buildings[".buttonsAdded"] = false;

$tdataManage_Buildings[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_Buildings[".isUseTimeForSearch"] = false;


$tdataManage_Buildings[".badgeColor"] = "005662";


$tdataManage_Buildings[".allSearchFields"] = array();
$tdataManage_Buildings[".filterFields"] = array();
$tdataManage_Buildings[".requiredSearchFields"] = array();

$tdataManage_Buildings[".googleLikeFields"] = array();
$tdataManage_Buildings[".googleLikeFields"][] = "country_code";
$tdataManage_Buildings[".googleLikeFields"][] = "country_name";
$tdataManage_Buildings[".googleLikeFields"][] = "area_name";
$tdataManage_Buildings[".googleLikeFields"][] = "designation";
$tdataManage_Buildings[".googleLikeFields"][] = "tower";
$tdataManage_Buildings[".googleLikeFields"][] = "address_1";
$tdataManage_Buildings[".googleLikeFields"][] = "address_2";
$tdataManage_Buildings[".googleLikeFields"][] = "zip_postal_code";
$tdataManage_Buildings[".googleLikeFields"][] = "state";
$tdataManage_Buildings[".googleLikeFields"][] = "city";
$tdataManage_Buildings[".googleLikeFields"][] = "description";
$tdataManage_Buildings[".googleLikeFields"][] = "uneet_created_datetime";
$tdataManage_Buildings[".googleLikeFields"][] = "area_external_system";
$tdataManage_Buildings[".googleLikeFields"][] = "area_external_table";
$tdataManage_Buildings[".googleLikeFields"][] = "area_external_id";



$tdataManage_Buildings[".tableType"] = "list";

$tdataManage_Buildings[".printerPageOrientation"] = 0;
$tdataManage_Buildings[".nPrinterPageScale"] = 100;

$tdataManage_Buildings[".nPrinterSplitRecords"] = 40;

$tdataManage_Buildings[".geocodingEnabled"] = false;





$tdataManage_Buildings[".isResizeColumns"] = true;





$tdataManage_Buildings[".pageSize"] = 20;

$tdataManage_Buildings[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_property_level_1_buildings.country_code, external_property_groups_areas.`order`, external_property_level_1_buildings.`order`";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_Buildings[".strOrderBy"] = $tstrOrderBy;

$tdataManage_Buildings[".orderindexes"] = array();
	$tdataManage_Buildings[".orderindexes"][] = array(15, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.country_code");

	$tdataManage_Buildings[".orderindexes"][] = array(30, (1 ? "ASC" : "DESC"), "external_property_groups_areas.`order`");

	$tdataManage_Buildings[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.`order`");


$tdataManage_Buildings[".sqlHead"] = "SELECT external_property_level_1_buildings.id_building,  external_property_level_1_buildings.external_id,  external_property_level_1_buildings.external_system_id,  external_property_level_1_buildings.external_table,  external_property_level_1_buildings.syst_created_datetime,  external_property_level_1_buildings.creation_system_id,  external_property_level_1_buildings.created_by_id,  external_property_level_1_buildings.creation_method,  external_property_level_1_buildings.syst_updated_datetime,  external_property_level_1_buildings.update_system_id,  external_property_level_1_buildings.updated_by_id,  external_property_level_1_buildings.update_method,  external_property_level_1_buildings.is_obsolete,  external_property_level_1_buildings.`order`,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_1_buildings.designation,  external_property_level_1_buildings.unee_t_unit_type,  external_property_level_1_buildings.is_creation_needed_in_unee_t,  external_property_level_1_buildings.tower,  external_property_level_1_buildings.address_1,  external_property_level_1_buildings.address_2,  external_property_level_1_buildings.zip_postal_code,  external_property_level_1_buildings.`state`,  external_property_level_1_buildings.city,  external_property_level_1_buildings.description,  external_property_level_1_buildings.do_not_insert,  external_property_groups_areas.`order` AS order_area,  ut_check_unee_t_updates_property_level_1.uneet_created_datetime,  ut_check_unee_t_updates_property_level_1.unee_t_mefe_unit_id,  external_property_groups_areas.id_area,  external_property_level_1_buildings.mgt_cny_default_assignee,  external_property_level_1_buildings.landlord_default_assignee,  external_property_level_1_buildings.tenant_default_assignee,  external_property_level_1_buildings.agent_default_assignee,  external_property_level_1_buildings.area_external_system,  external_property_level_1_buildings.area_external_table,  external_property_level_1_buildings.area_external_id";
$tdataManage_Buildings[".sqlFrom"] = "FROM external_property_level_1_buildings  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN property_level_1_buildings ON external_property_level_1_buildings.external_id = property_level_1_buildings.external_id AND external_property_level_1_buildings.external_system_id = property_level_1_buildings.external_system_id AND external_property_level_1_buildings.external_table = property_level_1_buildings.external_table AND external_property_level_1_buildings.created_by_id = property_level_1_buildings.organization_id AND external_property_level_1_buildings.tower = property_level_1_buildings.tower  LEFT OUTER JOIN ut_check_unee_t_updates_property_level_1 ON property_level_1_buildings.id_building = ut_check_unee_t_updates_property_level_1.id_building";
$tdataManage_Buildings[".sqlWhereExpr"] = "";
$tdataManage_Buildings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_Buildings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_Buildings[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_Buildings[".highlightSearchResults"] = true;

$tableKeysManage_Buildings = array();
$tableKeysManage_Buildings[] = "external_id";
$tableKeysManage_Buildings[] = "external_system_id";
$tableKeysManage_Buildings[] = "external_table";
$tableKeysManage_Buildings[] = "created_by_id";
$tableKeysManage_Buildings[] = "tower";
$tdataManage_Buildings[".Keys"] = $tableKeysManage_Buildings;


$tdataManage_Buildings[".hideMobileList"] = array();




//	id_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_building";
	$fdata["GoodName"] = "id_building";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","id_building");
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


	$tdataManage_Buildings["id_building"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "id_building";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","external_id");
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


	$tdataManage_Buildings["external_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","external_system_id");
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


	$tdataManage_Buildings["external_system_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","external_table");
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


	$tdataManage_Buildings["external_table"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","syst_created_datetime");
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


	$tdataManage_Buildings["syst_created_datetime"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","creation_system_id");
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


	$tdataManage_Buildings["creation_system_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","created_by_id");
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


	$tdataManage_Buildings["created_by_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","creation_method");
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


	$tdataManage_Buildings["creation_method"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","syst_updated_datetime");
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


	$tdataManage_Buildings["syst_updated_datetime"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","update_system_id");
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


	$tdataManage_Buildings["update_system_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","updated_by_id");
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


	$tdataManage_Buildings["updated_by_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","update_method");
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


	$tdataManage_Buildings["update_method"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "update_method";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","is_obsolete");
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


	$tdataManage_Buildings["is_obsolete"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "is_obsolete";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","order");
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


	$tdataManage_Buildings["order"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "order";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","country_code");
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

	

	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
	
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


	$tdataManage_Buildings["country_code"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","country_name");
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


	$tdataManage_Buildings["country_name"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "country_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","area_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Manage Areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_area";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "area_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
	
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


	$tdataManage_Buildings["area_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","area_name");
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


	$tdataManage_Buildings["area_name"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "area_name";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","designation");
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


	$tdataManage_Buildings["designation"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "designation";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","unee_t_unit_type");
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


	$tdataManage_Buildings["unee_t_unit_type"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "unee_t_unit_type";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","is_creation_needed_in_unee_t");
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


	$tdataManage_Buildings["is_creation_needed_in_unee_t"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","tower");
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


	$tdataManage_Buildings["tower"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "tower";
//	address_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "address_1";
	$fdata["GoodName"] = "address_1";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","address_1");
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


	$tdataManage_Buildings["address_1"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "address_1";
//	address_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "address_2";
	$fdata["GoodName"] = "address_2";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","address_2");
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


	$tdataManage_Buildings["address_2"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "address_2";
//	zip_postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "zip_postal_code";
	$fdata["GoodName"] = "zip_postal_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","zip_postal_code");
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


	$tdataManage_Buildings["zip_postal_code"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "zip_postal_code";
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","state");
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


	$tdataManage_Buildings["state"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "state";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","city");
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


	$tdataManage_Buildings["city"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "city";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","description");
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


	$tdataManage_Buildings["description"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "description";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","do_not_insert");
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


	$tdataManage_Buildings["do_not_insert"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "do_not_insert";
//	order_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "order_area";
	$fdata["GoodName"] = "order_area";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","order_area");
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


	$tdataManage_Buildings["order_area"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "order_area";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_check_unee_t_updates_property_level_1";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_updates_property_level_1.uneet_created_datetime";

	
	
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


	$tdataManage_Buildings["uneet_created_datetime"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_check_unee_t_updates_property_level_1";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_updates_property_level_1.unee_t_mefe_unit_id";

	
	
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


	$tdataManage_Buildings["unee_t_mefe_unit_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "unee_t_mefe_unit_id";
//	id_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "id_area";
	$fdata["GoodName"] = "id_area";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","id_area");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_groups_areas.id_area";

	
	
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


	$tdataManage_Buildings["id_area"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "id_area";
//	mgt_cny_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "mgt_cny_default_assignee";
	$fdata["GoodName"] = "mgt_cny_default_assignee";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","mgt_cny_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mgt_cny_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.mgt_cny_default_assignee";

	
	
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
	$edata["LookupTable"] = "Search list of possible assignees";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "person_designation";

	

	
	$edata["LookupOrderBy"] = "person_designation";

	
	
	
	

	
	
	
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


	$tdataManage_Buildings["mgt_cny_default_assignee"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "mgt_cny_default_assignee";
//	landlord_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "landlord_default_assignee";
	$fdata["GoodName"] = "landlord_default_assignee";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","landlord_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "landlord_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.landlord_default_assignee";

	
	
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
	$edata["LookupTable"] = "Search list of possible assignees";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "person_designation";

	

	
	$edata["LookupOrderBy"] = "person_designation";

	
	
	
	

	
	
	
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


	$tdataManage_Buildings["landlord_default_assignee"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "landlord_default_assignee";
//	tenant_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "tenant_default_assignee";
	$fdata["GoodName"] = "tenant_default_assignee";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","tenant_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tenant_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.tenant_default_assignee";

	
	
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
	$edata["LookupTable"] = "Search list of possible assignees";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "person_designation";

	

	
	$edata["LookupOrderBy"] = "person_designation";

	
	
	
	

	
	
	
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


	$tdataManage_Buildings["tenant_default_assignee"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "tenant_default_assignee";
//	agent_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "agent_default_assignee";
	$fdata["GoodName"] = "agent_default_assignee";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","agent_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "agent_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.agent_default_assignee";

	
	
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
	$edata["LookupTable"] = "Search list of possible assignees";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "person_designation";

	

	
	$edata["LookupOrderBy"] = "person_designation";

	
	
	
	

	
	
	
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


	$tdataManage_Buildings["agent_default_assignee"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "agent_default_assignee";
//	area_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "area_external_system";
	$fdata["GoodName"] = "area_external_system";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","area_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.area_external_system";

	
	
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


	$tdataManage_Buildings["area_external_system"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "area_external_system";
//	area_external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "area_external_table";
	$fdata["GoodName"] = "area_external_table";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","area_external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.area_external_table";

	
	
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


	$tdataManage_Buildings["area_external_table"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "area_external_table";
//	area_external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "area_external_id";
	$fdata["GoodName"] = "area_external_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Buildings","area_external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_1_buildings.area_external_id";

	
	
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


	$tdataManage_Buildings["area_external_id"] = $fdata;
		$tdataManage_Buildings[".searchableFields"][] = "area_external_id";


$tables_data["Manage Buildings"]=&$tdataManage_Buildings;
$field_labels["Manage_Buildings"] = &$fieldLabelsManage_Buildings;
$fieldToolTips["Manage_Buildings"] = &$fieldToolTipsManage_Buildings;
$placeHolders["Manage_Buildings"] = &$placeHoldersManage_Buildings;
$page_titles["Manage_Buildings"] = &$pageTitlesManage_Buildings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage Buildings"] = array();
//	Manage Units
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Manage Units";
		$detailsParam["dOriginalTable"] = "external_property_level_2_units";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Manage_Units";
	$detailsParam["dCaptionTable"] = GetTableCaption("Manage_Units");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Buildings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Buildings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Buildings"][$dIndex]["masterKeys"][]="id_building";

				$detailsTablesData["Manage Buildings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Buildings"][$dIndex]["detailKeys"][]="building_system_id";
//	Assign Buildings to User
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Assign Buildings to User";
		$detailsParam["dOriginalTable"] = "external_map_user_unit_role_permissions_level_1";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Assign_Buildings_to_User";
	$detailsParam["dCaptionTable"] = GetTableCaption("Assign_Buildings_to_User");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Buildings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Buildings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Buildings"][$dIndex]["masterKeys"][]="unee_t_mefe_unit_id";

				$detailsTablesData["Manage Buildings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Buildings"][$dIndex]["detailKeys"][]="unee_t_mefe_unit_id";
//	Organization Default L1P
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Organization Default L1P";
		$detailsParam["dOriginalTable"] = "uneet_enterprise_organizations";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "organization_default_l1p";
	$detailsParam["dCaptionTable"] = GetTableCaption("Organization_Default_L1P");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Buildings"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Buildings"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Buildings"][$dIndex]["masterKeys"][]="created_by_id";

				$detailsTablesData["Manage Buildings"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Buildings"][$dIndex]["detailKeys"][]="id_organization";

// tables which are master tables for current table (detail)
$masterTablesData["Manage Buildings"] = array();



	
				$strOriginalDetailsTable="external_property_groups_areas";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Areas";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Areas";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Manage Buildings"][0] = $masterParams;
				$masterTablesData["Manage Buildings"][0]["masterKeys"] = array();
	$masterTablesData["Manage Buildings"][0]["masterKeys"][]="id_area";
				$masterTablesData["Manage Buildings"][0]["detailKeys"] = array();
	$masterTablesData["Manage Buildings"][0]["detailKeys"][]="id_area";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_Buildings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_1_buildings.id_building,  external_property_level_1_buildings.external_id,  external_property_level_1_buildings.external_system_id,  external_property_level_1_buildings.external_table,  external_property_level_1_buildings.syst_created_datetime,  external_property_level_1_buildings.creation_system_id,  external_property_level_1_buildings.created_by_id,  external_property_level_1_buildings.creation_method,  external_property_level_1_buildings.syst_updated_datetime,  external_property_level_1_buildings.update_system_id,  external_property_level_1_buildings.updated_by_id,  external_property_level_1_buildings.update_method,  external_property_level_1_buildings.is_obsolete,  external_property_level_1_buildings.`order`,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_1_buildings.designation,  external_property_level_1_buildings.unee_t_unit_type,  external_property_level_1_buildings.is_creation_needed_in_unee_t,  external_property_level_1_buildings.tower,  external_property_level_1_buildings.address_1,  external_property_level_1_buildings.address_2,  external_property_level_1_buildings.zip_postal_code,  external_property_level_1_buildings.`state`,  external_property_level_1_buildings.city,  external_property_level_1_buildings.description,  external_property_level_1_buildings.do_not_insert,  external_property_groups_areas.`order` AS order_area,  ut_check_unee_t_updates_property_level_1.uneet_created_datetime,  ut_check_unee_t_updates_property_level_1.unee_t_mefe_unit_id,  external_property_groups_areas.id_area,  external_property_level_1_buildings.mgt_cny_default_assignee,  external_property_level_1_buildings.landlord_default_assignee,  external_property_level_1_buildings.tenant_default_assignee,  external_property_level_1_buildings.agent_default_assignee,  external_property_level_1_buildings.area_external_system,  external_property_level_1_buildings.area_external_table,  external_property_level_1_buildings.area_external_id";
$proto0["m_strFrom"] = "FROM external_property_level_1_buildings  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN property_level_1_buildings ON external_property_level_1_buildings.external_id = property_level_1_buildings.external_id AND external_property_level_1_buildings.external_system_id = property_level_1_buildings.external_system_id AND external_property_level_1_buildings.external_table = property_level_1_buildings.external_table AND external_property_level_1_buildings.created_by_id = property_level_1_buildings.organization_id AND external_property_level_1_buildings.tower = property_level_1_buildings.tower  LEFT OUTER JOIN ut_check_unee_t_updates_property_level_1 ON property_level_1_buildings.id_building = ut_check_unee_t_updates_property_level_1.id_building";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY external_property_level_1_buildings.country_code, external_property_groups_areas.`order`, external_property_level_1_buildings.`order`";
	
					
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
	"m_strName" => "id_building",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto6["m_sql"] = "external_property_level_1_buildings.id_building";
$proto6["m_srcTableName"] = "Manage Buildings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto8["m_sql"] = "external_property_level_1_buildings.external_id";
$proto8["m_srcTableName"] = "Manage Buildings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto10["m_sql"] = "external_property_level_1_buildings.external_system_id";
$proto10["m_srcTableName"] = "Manage Buildings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto12["m_sql"] = "external_property_level_1_buildings.external_table";
$proto12["m_srcTableName"] = "Manage Buildings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto14["m_sql"] = "external_property_level_1_buildings.syst_created_datetime";
$proto14["m_srcTableName"] = "Manage Buildings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto16["m_sql"] = "external_property_level_1_buildings.creation_system_id";
$proto16["m_srcTableName"] = "Manage Buildings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto18["m_sql"] = "external_property_level_1_buildings.created_by_id";
$proto18["m_srcTableName"] = "Manage Buildings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto20["m_sql"] = "external_property_level_1_buildings.creation_method";
$proto20["m_srcTableName"] = "Manage Buildings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto22["m_sql"] = "external_property_level_1_buildings.syst_updated_datetime";
$proto22["m_srcTableName"] = "Manage Buildings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto24["m_sql"] = "external_property_level_1_buildings.update_system_id";
$proto24["m_srcTableName"] = "Manage Buildings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto26["m_sql"] = "external_property_level_1_buildings.updated_by_id";
$proto26["m_srcTableName"] = "Manage Buildings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto28["m_sql"] = "external_property_level_1_buildings.update_method";
$proto28["m_srcTableName"] = "Manage Buildings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto30["m_sql"] = "external_property_level_1_buildings.is_obsolete";
$proto30["m_srcTableName"] = "Manage Buildings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto32["m_sql"] = "external_property_level_1_buildings.`order`";
$proto32["m_srcTableName"] = "Manage Buildings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto34["m_sql"] = "external_property_level_1_buildings.country_code";
$proto34["m_srcTableName"] = "Manage Buildings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Manage Buildings"
));

$proto36["m_sql"] = "property_groups_countries.country_name";
$proto36["m_srcTableName"] = "Manage Buildings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto38["m_sql"] = "external_property_level_1_buildings.area_id";
$proto38["m_srcTableName"] = "Manage Buildings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Buildings"
));

$proto40["m_sql"] = "external_property_groups_areas.area_name";
$proto40["m_srcTableName"] = "Manage Buildings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto42["m_sql"] = "external_property_level_1_buildings.designation";
$proto42["m_srcTableName"] = "Manage Buildings";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto44["m_sql"] = "external_property_level_1_buildings.unee_t_unit_type";
$proto44["m_srcTableName"] = "Manage Buildings";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto46["m_sql"] = "external_property_level_1_buildings.is_creation_needed_in_unee_t";
$proto46["m_srcTableName"] = "Manage Buildings";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto48["m_sql"] = "external_property_level_1_buildings.tower";
$proto48["m_srcTableName"] = "Manage Buildings";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "address_1",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto50["m_sql"] = "external_property_level_1_buildings.address_1";
$proto50["m_srcTableName"] = "Manage Buildings";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "address_2",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto52["m_sql"] = "external_property_level_1_buildings.address_2";
$proto52["m_srcTableName"] = "Manage Buildings";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_postal_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto54["m_sql"] = "external_property_level_1_buildings.zip_postal_code";
$proto54["m_srcTableName"] = "Manage Buildings";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto56["m_sql"] = "external_property_level_1_buildings.`state`";
$proto56["m_srcTableName"] = "Manage Buildings";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto58["m_sql"] = "external_property_level_1_buildings.city";
$proto58["m_srcTableName"] = "Manage Buildings";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto60["m_sql"] = "external_property_level_1_buildings.description";
$proto60["m_srcTableName"] = "Manage Buildings";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto62["m_sql"] = "external_property_level_1_buildings.do_not_insert";
$proto62["m_srcTableName"] = "Manage Buildings";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Buildings"
));

$proto64["m_sql"] = "external_property_groups_areas.`order`";
$proto64["m_srcTableName"] = "Manage Buildings";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "order_area";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_check_unee_t_updates_property_level_1",
	"m_srcTableName" => "Manage Buildings"
));

$proto66["m_sql"] = "ut_check_unee_t_updates_property_level_1.uneet_created_datetime";
$proto66["m_srcTableName"] = "Manage Buildings";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_check_unee_t_updates_property_level_1",
	"m_srcTableName" => "Manage Buildings"
));

$proto68["m_sql"] = "ut_check_unee_t_updates_property_level_1.unee_t_mefe_unit_id";
$proto68["m_srcTableName"] = "Manage Buildings";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "id_area",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Buildings"
));

$proto70["m_sql"] = "external_property_groups_areas.id_area";
$proto70["m_srcTableName"] = "Manage Buildings";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "mgt_cny_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto72["m_sql"] = "external_property_level_1_buildings.mgt_cny_default_assignee";
$proto72["m_srcTableName"] = "Manage Buildings";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "landlord_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto74["m_sql"] = "external_property_level_1_buildings.landlord_default_assignee";
$proto74["m_srcTableName"] = "Manage Buildings";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "tenant_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto76["m_sql"] = "external_property_level_1_buildings.tenant_default_assignee";
$proto76["m_srcTableName"] = "Manage Buildings";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "agent_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto78["m_sql"] = "external_property_level_1_buildings.agent_default_assignee";
$proto78["m_srcTableName"] = "Manage Buildings";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "area_external_system",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto80["m_sql"] = "external_property_level_1_buildings.area_external_system";
$proto80["m_srcTableName"] = "Manage Buildings";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "area_external_table",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto82["m_sql"] = "external_property_level_1_buildings.area_external_table";
$proto82["m_srcTableName"] = "Manage Buildings";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "area_external_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto84["m_sql"] = "external_property_level_1_buildings.area_external_id";
$proto84["m_srcTableName"] = "Manage Buildings";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto86=array();
$proto86["m_link"] = "SQLL_MAIN";
			$proto87=array();
$proto87["m_strName"] = "external_property_level_1_buildings";
$proto87["m_srcTableName"] = "Manage Buildings";
$proto87["m_columns"] = array();
$proto87["m_columns"][] = "id_building";
$proto87["m_columns"][] = "create_api_request_id";
$proto87["m_columns"][] = "edit_api_request_id";
$proto87["m_columns"][] = "external_id";
$proto87["m_columns"][] = "external_system_id";
$proto87["m_columns"][] = "external_table";
$proto87["m_columns"][] = "syst_created_datetime";
$proto87["m_columns"][] = "creation_system_id";
$proto87["m_columns"][] = "created_by_id";
$proto87["m_columns"][] = "creation_method";
$proto87["m_columns"][] = "syst_updated_datetime";
$proto87["m_columns"][] = "update_system_id";
$proto87["m_columns"][] = "updated_by_id";
$proto87["m_columns"][] = "update_method";
$proto87["m_columns"][] = "is_update_on_duplicate_key";
$proto87["m_columns"][] = "is_obsolete";
$proto87["m_columns"][] = "order";
$proto87["m_columns"][] = "is_creation_needed_in_unee_t";
$proto87["m_columns"][] = "do_not_insert";
$proto87["m_columns"][] = "unee_t_unit_type";
$proto87["m_columns"][] = "area_external_system";
$proto87["m_columns"][] = "area_external_table";
$proto87["m_columns"][] = "area_external_id";
$proto87["m_columns"][] = "designation";
$proto87["m_columns"][] = "tower";
$proto87["m_columns"][] = "address_1";
$proto87["m_columns"][] = "address_2";
$proto87["m_columns"][] = "zip_postal_code";
$proto87["m_columns"][] = "state";
$proto87["m_columns"][] = "city";
$proto87["m_columns"][] = "country_code";
$proto87["m_columns"][] = "description";
$proto87["m_columns"][] = "mgt_cny_default_assignee";
$proto87["m_columns"][] = "landlord_default_assignee";
$proto87["m_columns"][] = "tenant_default_assignee";
$proto87["m_columns"][] = "agent_default_assignee";
$proto87["m_columns"][] = "area_id";
$obj = new SQLTable($proto87);

$proto86["m_table"] = $obj;
$proto86["m_sql"] = "external_property_level_1_buildings";
$proto86["m_alias"] = "";
$proto86["m_srcTableName"] = "Manage Buildings";
$proto88=array();
$proto88["m_sql"] = "";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

$proto86["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto86);

$proto0["m_fromlist"][]=$obj;
												$proto90=array();
$proto90["m_link"] = "SQLL_LEFTJOIN";
			$proto91=array();
$proto91["m_strName"] = "external_property_groups_areas";
$proto91["m_srcTableName"] = "Manage Buildings";
$proto91["m_columns"] = array();
$proto91["m_columns"][] = "id_area";
$proto91["m_columns"][] = "create_api_request_id";
$proto91["m_columns"][] = "edit_api_request_id";
$proto91["m_columns"][] = "external_id";
$proto91["m_columns"][] = "external_system_id";
$proto91["m_columns"][] = "external_table";
$proto91["m_columns"][] = "syst_created_datetime";
$proto91["m_columns"][] = "creation_system_id";
$proto91["m_columns"][] = "created_by_id";
$proto91["m_columns"][] = "creation_method";
$proto91["m_columns"][] = "syst_updated_datetime";
$proto91["m_columns"][] = "update_system_id";
$proto91["m_columns"][] = "updated_by_id";
$proto91["m_columns"][] = "update_method";
$proto91["m_columns"][] = "is_update_on_duplicate_key";
$proto91["m_columns"][] = "is_creation_needed_in_unee_t";
$proto91["m_columns"][] = "is_obsolete";
$proto91["m_columns"][] = "is_default";
$proto91["m_columns"][] = "order";
$proto91["m_columns"][] = "country_code";
$proto91["m_columns"][] = "area_name";
$proto91["m_columns"][] = "area_definition";
$proto91["m_columns"][] = "mgt_cny_default_assignee";
$proto91["m_columns"][] = "landlord_default_assignee";
$proto91["m_columns"][] = "tenant_default_assignee";
$proto91["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto91);

$proto90["m_table"] = $obj;
$proto90["m_sql"] = "LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto90["m_alias"] = "";
$proto90["m_srcTableName"] = "Manage Buildings";
$proto92=array();
$proto92["m_sql"] = "external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= external_property_groups_areas.id_area";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

$proto90["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto90);

$proto0["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_LEFTJOIN";
			$proto95=array();
$proto95["m_strName"] = "property_groups_countries";
$proto95["m_srcTableName"] = "Manage Buildings";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "id_country";
$proto95["m_columns"][] = "syst_created_datetime";
$proto95["m_columns"][] = "creation_system_id";
$proto95["m_columns"][] = "created_by_id";
$proto95["m_columns"][] = "syst_updated_datetime";
$proto95["m_columns"][] = "update_system_id";
$proto95["m_columns"][] = "updated_by_id";
$proto95["m_columns"][] = "is_obsolete";
$proto95["m_columns"][] = "is_default";
$proto95["m_columns"][] = "is_system";
$proto95["m_columns"][] = "order";
$proto95["m_columns"][] = "country_code";
$proto95["m_columns"][] = "country_name";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "Manage Buildings";
$proto96=array();
$proto96["m_sql"] = "external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= property_groups_countries.country_code";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
												$proto98=array();
$proto98["m_link"] = "SQLL_LEFTJOIN";
			$proto99=array();
$proto99["m_strName"] = "property_level_1_buildings";
$proto99["m_srcTableName"] = "Manage Buildings";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "id_building";
$proto99["m_columns"][] = "create_api_request_id";
$proto99["m_columns"][] = "edit_api_request_id";
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
$proto99["m_columns"][] = "is_update_on_duplicate_key";
$proto99["m_columns"][] = "organization_id";
$proto99["m_columns"][] = "is_obsolete";
$proto99["m_columns"][] = "order";
$proto99["m_columns"][] = "is_creation_needed_in_unee_t";
$proto99["m_columns"][] = "do_not_insert";
$proto99["m_columns"][] = "unee_t_unit_type";
$proto99["m_columns"][] = "area_external_system";
$proto99["m_columns"][] = "area_external_table";
$proto99["m_columns"][] = "area_external_id";
$proto99["m_columns"][] = "designation";
$proto99["m_columns"][] = "tower";
$proto99["m_columns"][] = "address_1";
$proto99["m_columns"][] = "address_2";
$proto99["m_columns"][] = "zip_postal_code";
$proto99["m_columns"][] = "state";
$proto99["m_columns"][] = "city";
$proto99["m_columns"][] = "country_code";
$proto99["m_columns"][] = "description";
$proto99["m_columns"][] = "mgt_cny_default_assignee";
$proto99["m_columns"][] = "landlord_default_assignee";
$proto99["m_columns"][] = "tenant_default_assignee";
$proto99["m_columns"][] = "agent_default_assignee";
$proto99["m_columns"][] = "area_id";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "LEFT OUTER JOIN property_level_1_buildings ON external_property_level_1_buildings.external_id = property_level_1_buildings.external_id AND external_property_level_1_buildings.external_system_id = property_level_1_buildings.external_system_id AND external_property_level_1_buildings.external_table = property_level_1_buildings.external_table AND external_property_level_1_buildings.created_by_id = property_level_1_buildings.organization_id AND external_property_level_1_buildings.tower = property_level_1_buildings.tower";
$proto98["m_alias"] = "";
$proto98["m_srcTableName"] = "Manage Buildings";
$proto100=array();
$proto100["m_sql"] = "external_property_level_1_buildings.external_id = property_level_1_buildings.external_id AND external_property_level_1_buildings.external_system_id = property_level_1_buildings.external_system_id AND external_property_level_1_buildings.external_table = property_level_1_buildings.external_table AND external_property_level_1_buildings.created_by_id = property_level_1_buildings.organization_id AND external_property_level_1_buildings.tower = property_level_1_buildings.tower";
$proto100["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_property_level_1_buildings.external_id = property_level_1_buildings.external_id AND external_property_level_1_buildings.external_system_id = property_level_1_buildings.external_system_id AND external_property_level_1_buildings.external_table = property_level_1_buildings.external_table AND external_property_level_1_buildings.created_by_id = property_level_1_buildings.organization_id AND external_property_level_1_buildings.tower = property_level_1_buildings.tower"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
						$proto102=array();
$proto102["m_sql"] = "external_property_level_1_buildings.external_id = property_level_1_buildings.external_id";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "= property_level_1_buildings.external_id";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

			$proto100["m_contained"][]=$obj;
						$proto104=array();
$proto104["m_sql"] = "external_property_level_1_buildings.external_system_id = property_level_1_buildings.external_system_id";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= property_level_1_buildings.external_system_id";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

			$proto100["m_contained"][]=$obj;
						$proto106=array();
$proto106["m_sql"] = "external_property_level_1_buildings.external_table = property_level_1_buildings.external_table";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= property_level_1_buildings.external_table";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

			$proto100["m_contained"][]=$obj;
						$proto108=array();
$proto108["m_sql"] = "external_property_level_1_buildings.created_by_id = property_level_1_buildings.organization_id";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= property_level_1_buildings.organization_id";
$proto108["m_havingmode"] = false;
$proto108["m_inBrackets"] = false;
$proto108["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto108);

			$proto100["m_contained"][]=$obj;
						$proto110=array();
$proto110["m_sql"] = "external_property_level_1_buildings.tower = property_level_1_buildings.tower";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= property_level_1_buildings.tower";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

			$proto100["m_contained"][]=$obj;
$proto100["m_strCase"] = "";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_LEFTJOIN";
			$proto113=array();
$proto113["m_strName"] = "ut_check_unee_t_updates_property_level_1";
$proto113["m_srcTableName"] = "Manage Buildings";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id_building";
$proto113["m_columns"][] = "designation";
$proto113["m_columns"][] = "tower";
$proto113["m_columns"][] = "unee_t_mefe_unit_id";
$proto113["m_columns"][] = "uneet_name";
$proto113["m_columns"][] = "uneet_created_datetime";
$proto113["m_columns"][] = "is_unee_t_created_by_me";
$proto113["m_columns"][] = "creation_method";
$proto113["m_columns"][] = "update_method";
$proto113["m_columns"][] = "organization_id";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "LEFT OUTER JOIN ut_check_unee_t_updates_property_level_1 ON property_level_1_buildings.id_building = ut_check_unee_t_updates_property_level_1.id_building";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "Manage Buildings";
$proto114=array();
$proto114["m_sql"] = "property_level_1_buildings.id_building = ut_check_unee_t_updates_property_level_1.id_building";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_building",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "= ut_check_unee_t_updates_property_level_1.id_building";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto116["m_column"]=$obj;
$proto116["m_bAsc"] = 1;
$proto116["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto116);

$proto0["m_orderby"][]=$obj;					
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Buildings"
));

$proto118["m_column"]=$obj;
$proto118["m_bAsc"] = 1;
$proto118["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto118);

$proto0["m_orderby"][]=$obj;					
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Buildings"
));

$proto120["m_column"]=$obj;
$proto120["m_bAsc"] = 1;
$proto120["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto120);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Manage Buildings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_Buildings = createSqlQuery_Manage_Buildings();


	
					
;

																																								

$tdataManage_Buildings[".sqlquery"] = $queryData_Manage_Buildings;

include_once(getabspath("include/Manage_Buildings_events.php"));
$tableEvents["Manage Buildings"] = new eventclass_Manage_Buildings;
$tdataManage_Buildings[".hasEvents"] = true;

?>