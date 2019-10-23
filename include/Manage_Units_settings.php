<?php



$tdataManage_Units = array();
$tdataManage_Units[".searchableFields"] = array();
$tdataManage_Units[".ShortName"] = "Manage_Units";
$tdataManage_Units[".OwnerID"] = "created_by_id";
$tdataManage_Units[".OriginalTable"] = "external_property_level_2_units";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataManage_Units[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataManage_Units[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataManage_Units[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_Units = array();
$fieldToolTipsManage_Units = array();
$pageTitlesManage_Units = array();
$placeHoldersManage_Units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_Units["English"] = array();
	$fieldToolTipsManage_Units["English"] = array();
	$placeHoldersManage_Units["English"] = array();
	$pageTitlesManage_Units["English"] = array();
	$fieldLabelsManage_Units["English"]["system_id_unit"] = "System Id Unit";
	$fieldToolTipsManage_Units["English"]["system_id_unit"] = "";
	$placeHoldersManage_Units["English"]["system_id_unit"] = "";
	$fieldLabelsManage_Units["English"]["external_id"] = "External Id";
	$fieldToolTipsManage_Units["English"]["external_id"] = "";
	$placeHoldersManage_Units["English"]["external_id"] = "";
	$fieldLabelsManage_Units["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsManage_Units["English"]["external_system_id"] = "";
	$placeHoldersManage_Units["English"]["external_system_id"] = "";
	$fieldLabelsManage_Units["English"]["external_table"] = "External Table";
	$fieldToolTipsManage_Units["English"]["external_table"] = "";
	$placeHoldersManage_Units["English"]["external_table"] = "";
	$fieldLabelsManage_Units["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsManage_Units["English"]["syst_created_datetime"] = "";
	$placeHoldersManage_Units["English"]["syst_created_datetime"] = "";
	$fieldLabelsManage_Units["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsManage_Units["English"]["creation_system_id"] = "";
	$placeHoldersManage_Units["English"]["creation_system_id"] = "";
	$fieldLabelsManage_Units["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsManage_Units["English"]["created_by_id"] = "";
	$placeHoldersManage_Units["English"]["created_by_id"] = "";
	$fieldLabelsManage_Units["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsManage_Units["English"]["creation_method"] = "";
	$placeHoldersManage_Units["English"]["creation_method"] = "";
	$fieldLabelsManage_Units["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_Units["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_Units["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_Units["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_Units["English"]["update_system_id"] = "";
	$placeHoldersManage_Units["English"]["update_system_id"] = "";
	$fieldLabelsManage_Units["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_Units["English"]["updated_by_id"] = "";
	$placeHoldersManage_Units["English"]["updated_by_id"] = "";
	$fieldLabelsManage_Units["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_Units["English"]["update_method"] = "";
	$placeHoldersManage_Units["English"]["update_method"] = "";
	$fieldLabelsManage_Units["English"]["activated_by_id"] = "Activated By Id";
	$fieldToolTipsManage_Units["English"]["activated_by_id"] = "";
	$placeHoldersManage_Units["English"]["activated_by_id"] = "";
	$fieldLabelsManage_Units["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsManage_Units["English"]["is_obsolete"] = "";
	$placeHoldersManage_Units["English"]["is_obsolete"] = "";
	$fieldLabelsManage_Units["English"]["is_creation_needed_in_unee_t"] = "Create in Unee-T";
	$fieldToolTipsManage_Units["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersManage_Units["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsManage_Units["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsManage_Units["English"]["do_not_insert"] = "";
	$placeHoldersManage_Units["English"]["do_not_insert"] = "";
	$fieldLabelsManage_Units["English"]["unee_t_unit_type"] = "Property Type";
	$fieldToolTipsManage_Units["English"]["unee_t_unit_type"] = "";
	$placeHoldersManage_Units["English"]["unee_t_unit_type"] = "";
	$fieldLabelsManage_Units["English"]["building_system_id"] = "Building";
	$fieldToolTipsManage_Units["English"]["building_system_id"] = "";
	$placeHoldersManage_Units["English"]["building_system_id"] = "";
	$fieldLabelsManage_Units["English"]["tower"] = "Tower";
	$fieldToolTipsManage_Units["English"]["tower"] = "";
	$placeHoldersManage_Units["English"]["tower"] = "1";
	$fieldLabelsManage_Units["English"]["unit_category_id"] = "Unit Category";
	$fieldToolTipsManage_Units["English"]["unit_category_id"] = "";
	$placeHoldersManage_Units["English"]["unit_category_id"] = "";
	$fieldLabelsManage_Units["English"]["count_rooms"] = "Nber of Rooms";
	$fieldToolTipsManage_Units["English"]["count_rooms"] = "";
	$placeHoldersManage_Units["English"]["count_rooms"] = "";
	$fieldLabelsManage_Units["English"]["unit_id"] = "Unit Id";
	$fieldToolTipsManage_Units["English"]["unit_id"] = "";
	$placeHoldersManage_Units["English"]["unit_id"] = "";
	$fieldLabelsManage_Units["English"]["surface"] = "Surface";
	$fieldToolTipsManage_Units["English"]["surface"] = "";
	$placeHoldersManage_Units["English"]["surface"] = "";
	$fieldLabelsManage_Units["English"]["surface_measurment_unit"] = "sqf/sqm";
	$fieldToolTipsManage_Units["English"]["surface_measurment_unit"] = "";
	$placeHoldersManage_Units["English"]["surface_measurment_unit"] = "";
	$fieldLabelsManage_Units["English"]["description"] = "Description";
	$fieldToolTipsManage_Units["English"]["description"] = "";
	$placeHoldersManage_Units["English"]["description"] = "";
	$fieldLabelsManage_Units["English"]["country_code"] = "Country Code";
	$fieldToolTipsManage_Units["English"]["country_code"] = "";
	$placeHoldersManage_Units["English"]["country_code"] = "";
	$fieldLabelsManage_Units["English"]["country_name"] = "Country";
	$fieldToolTipsManage_Units["English"]["country_name"] = "";
	$placeHoldersManage_Units["English"]["country_name"] = "";
	$fieldLabelsManage_Units["English"]["area_id"] = "Area";
	$fieldToolTipsManage_Units["English"]["area_id"] = "";
	$placeHoldersManage_Units["English"]["area_id"] = "";
	$fieldLabelsManage_Units["English"]["area_name"] = "Area";
	$fieldToolTipsManage_Units["English"]["area_name"] = "";
	$placeHoldersManage_Units["English"]["area_name"] = "";
	$fieldLabelsManage_Units["English"]["building_designation"] = "Building";
	$fieldToolTipsManage_Units["English"]["building_designation"] = "";
	$placeHoldersManage_Units["English"]["building_designation"] = "";
	$fieldLabelsManage_Units["English"]["unit_designation"] = "Unit Name";
	$fieldToolTipsManage_Units["English"]["unit_designation"] = "";
	$placeHoldersManage_Units["English"]["unit_designation"] = "";
	$fieldLabelsManage_Units["English"]["order_area"] = "Order Area";
	$fieldToolTipsManage_Units["English"]["order_area"] = "";
	$placeHoldersManage_Units["English"]["order_area"] = "";
	$fieldLabelsManage_Units["English"]["order_building"] = "Order Building";
	$fieldToolTipsManage_Units["English"]["order_building"] = "";
	$placeHoldersManage_Units["English"]["order_building"] = "";
	$fieldLabelsManage_Units["English"]["unit_type"] = "Type";
	$fieldToolTipsManage_Units["English"]["unit_type"] = "";
	$placeHoldersManage_Units["English"]["unit_type"] = "";
	$fieldLabelsManage_Units["English"]["uneet_created_datetime"] = "Uneet Created Datetime";
	$fieldToolTipsManage_Units["English"]["uneet_created_datetime"] = "";
	$placeHoldersManage_Units["English"]["uneet_created_datetime"] = "";
	$fieldLabelsManage_Units["English"]["building_id"] = "Building Id";
	$fieldToolTipsManage_Units["English"]["building_id"] = "";
	$placeHoldersManage_Units["English"]["building_id"] = "";
	$fieldLabelsManage_Units["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsManage_Units["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersManage_Units["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsManage_Units["English"]["mgt_cny_default_assignee_l2p"] = "Mgt Cny";
	$fieldToolTipsManage_Units["English"]["mgt_cny_default_assignee_l2p"] = "";
	$placeHoldersManage_Units["English"]["mgt_cny_default_assignee_l2p"] = "";
	$fieldLabelsManage_Units["English"]["landlord_default_assignee_l2p"] = "Landlord";
	$fieldToolTipsManage_Units["English"]["landlord_default_assignee_l2p"] = "";
	$placeHoldersManage_Units["English"]["landlord_default_assignee_l2p"] = "";
	$fieldLabelsManage_Units["English"]["tenant_default_assignee_l2p"] = "Tenant";
	$fieldToolTipsManage_Units["English"]["tenant_default_assignee_l2p"] = "";
	$placeHoldersManage_Units["English"]["tenant_default_assignee_l2p"] = "";
	$fieldLabelsManage_Units["English"]["agent_default_assignee_l2p"] = "Agent";
	$fieldToolTipsManage_Units["English"]["agent_default_assignee_l2p"] = "";
	$placeHoldersManage_Units["English"]["agent_default_assignee_l2p"] = "";
	$fieldLabelsManage_Units["English"]["mgt_cny_default_assignee_l1p"] = "Mgt Cny Default Assignee L1p";
	$fieldToolTipsManage_Units["English"]["mgt_cny_default_assignee_l1p"] = "";
	$placeHoldersManage_Units["English"]["mgt_cny_default_assignee_l1p"] = "";
	$fieldLabelsManage_Units["English"]["landlord_default_assignee_l1p"] = "Landlord Default Assignee L1p";
	$fieldToolTipsManage_Units["English"]["landlord_default_assignee_l1p"] = "";
	$placeHoldersManage_Units["English"]["landlord_default_assignee_l1p"] = "";
	$fieldLabelsManage_Units["English"]["tenant_default_assignee_l1p"] = "Tenant Default Assignee L1p";
	$fieldToolTipsManage_Units["English"]["tenant_default_assignee_l1p"] = "";
	$placeHoldersManage_Units["English"]["tenant_default_assignee_l1p"] = "";
	$fieldLabelsManage_Units["English"]["agent_default_assignee_l1p"] = "Agent Default Assignee L1p";
	$fieldToolTipsManage_Units["English"]["agent_default_assignee_l1p"] = "";
	$placeHoldersManage_Units["English"]["agent_default_assignee_l1p"] = "";
	$fieldLabelsManage_Units["English"]["l1p_external_system"] = "L1p External System";
	$fieldToolTipsManage_Units["English"]["l1p_external_system"] = "";
	$placeHoldersManage_Units["English"]["l1p_external_system"] = "";
	$fieldLabelsManage_Units["English"]["l1p_external_table"] = "L1p External Table";
	$fieldToolTipsManage_Units["English"]["l1p_external_table"] = "";
	$placeHoldersManage_Units["English"]["l1p_external_table"] = "";
	$fieldLabelsManage_Units["English"]["l1p_external_id"] = "L1p External Id";
	$fieldToolTipsManage_Units["English"]["l1p_external_id"] = "";
	$placeHoldersManage_Units["English"]["l1p_external_id"] = "";
	if (count($fieldToolTipsManage_Units["English"]))
		$tdataManage_Units[".isUseToolTips"] = true;
}


	$tdataManage_Units[".NCSearch"] = true;



$tdataManage_Units[".shortTableName"] = "Manage_Units";
$tdataManage_Units[".nSecOptions"] = 1;

$tdataManage_Units[".mainTableOwnerID"] = "created_by_id";
$tdataManage_Units[".entityType"] = 1;

$tdataManage_Units[".strOriginalTableName"] = "external_property_level_2_units";

		 



$tdataManage_Units[".showAddInPopup"] = false;

$tdataManage_Units[".showEditInPopup"] = false;

$tdataManage_Units[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_Units[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_Units[".listAjax"] = true;
//	temporary
$tdataManage_Units[".listAjax"] = false;

	$tdataManage_Units[".audit"] = false;

	$tdataManage_Units[".locking"] = false;


$pages = $tdataManage_Units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_Units[".edit"] = true;
	$tdataManage_Units[".afterEditAction"] = 1;
	$tdataManage_Units[".closePopupAfterEdit"] = 1;
	$tdataManage_Units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_Units[".add"] = true;
$tdataManage_Units[".afterAddAction"] = 0;
$tdataManage_Units[".closePopupAfterAdd"] = 1;
$tdataManage_Units[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_Units[".list"] = true;
}



$tdataManage_Units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_Units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_Units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_Units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_Units[".printFriendly"] = true;
}



$tdataManage_Units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_Units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_Units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_Units[".isUseAjaxSuggest"] = true;

$tdataManage_Units[".rowHighlite"] = true;





$tdataManage_Units[".ajaxCodeSnippetAdded"] = false;

$tdataManage_Units[".buttonsAdded"] = false;

$tdataManage_Units[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_Units[".isUseTimeForSearch"] = false;


$tdataManage_Units[".badgeColor"] = "006978";


$tdataManage_Units[".allSearchFields"] = array();
$tdataManage_Units[".filterFields"] = array();
$tdataManage_Units[".requiredSearchFields"] = array();

$tdataManage_Units[".googleLikeFields"] = array();
$tdataManage_Units[".googleLikeFields"][] = "external_id";
$tdataManage_Units[".googleLikeFields"][] = "country_code";
$tdataManage_Units[".googleLikeFields"][] = "country_name";
$tdataManage_Units[".googleLikeFields"][] = "area_name";
$tdataManage_Units[".googleLikeFields"][] = "building_designation";
$tdataManage_Units[".googleLikeFields"][] = "unit_designation";
$tdataManage_Units[".googleLikeFields"][] = "unit_type";
$tdataManage_Units[".googleLikeFields"][] = "description";
$tdataManage_Units[".googleLikeFields"][] = "uneet_created_datetime";
$tdataManage_Units[".googleLikeFields"][] = "mgt_cny_default_assignee_l2p";
$tdataManage_Units[".googleLikeFields"][] = "landlord_default_assignee_l2p";
$tdataManage_Units[".googleLikeFields"][] = "tenant_default_assignee_l2p";
$tdataManage_Units[".googleLikeFields"][] = "agent_default_assignee_l2p";
$tdataManage_Units[".googleLikeFields"][] = "mgt_cny_default_assignee_l1p";
$tdataManage_Units[".googleLikeFields"][] = "landlord_default_assignee_l1p";
$tdataManage_Units[".googleLikeFields"][] = "tenant_default_assignee_l1p";
$tdataManage_Units[".googleLikeFields"][] = "agent_default_assignee_l1p";
$tdataManage_Units[".googleLikeFields"][] = "l1p_external_system";
$tdataManage_Units[".googleLikeFields"][] = "l1p_external_table";
$tdataManage_Units[".googleLikeFields"][] = "l1p_external_id";



$tdataManage_Units[".tableType"] = "list";

$tdataManage_Units[".printerPageOrientation"] = 0;
$tdataManage_Units[".nPrinterPageScale"] = 100;

$tdataManage_Units[".nPrinterSplitRecords"] = 40;

$tdataManage_Units[".geocodingEnabled"] = false;





$tdataManage_Units[".isResizeColumns"] = true;





$tdataManage_Units[".pageSize"] = 50;

$tdataManage_Units[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_groups_areas.area_name, external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, ut_unit_types.designation, external_property_level_2_units.designation";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_Units[".strOrderBy"] = $tstrOrderBy;

$tdataManage_Units[".orderindexes"] = array();
	$tdataManage_Units[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "property_groups_countries.country_name");

	$tdataManage_Units[".orderindexes"][] = array(34, (1 ? "ASC" : "DESC"), "external_property_groups_areas.`order`");

	$tdataManage_Units[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_property_groups_areas.area_name");

	$tdataManage_Units[".orderindexes"][] = array(35, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.`order`");

	$tdataManage_Units[".orderindexes"][] = array(19, (1 ? "ASC" : "DESC"), "external_property_level_1_buildings.designation");

	$tdataManage_Units[".orderindexes"][] = array(25, (1 ? "ASC" : "DESC"), "ut_unit_types.designation");

	$tdataManage_Units[".orderindexes"][] = array(20, (1 ? "ASC" : "DESC"), "external_property_level_2_units.designation");


$tdataManage_Units[".sqlHead"] = "SELECT external_property_level_2_units.system_id_unit,  external_property_level_2_units.external_id,  external_property_level_2_units.external_system_id,  external_property_level_2_units.external_table,  external_property_level_2_units.syst_created_datetime,  external_property_level_2_units.creation_system_id,  external_property_level_2_units.created_by_id,  external_property_level_2_units.creation_method,  external_property_level_2_units.syst_updated_datetime,  external_property_level_2_units.update_system_id,  external_property_level_2_units.updated_by_id,  external_property_level_2_units.update_method,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_2_units.building_system_id,  external_property_level_2_units.building_system_id AS building_id,  external_property_level_1_buildings.designation AS building_designation,  external_property_level_2_units.designation AS unit_designation,  external_property_level_2_units.activated_by_id,  external_property_level_2_units.is_obsolete,  external_property_level_2_units.is_creation_needed_in_unee_t,  external_property_level_2_units.unee_t_unit_type,  ut_unit_types.designation AS unit_type,  external_property_level_2_units.tower,  external_property_level_2_units.unit_category_id,  external_property_level_2_units.count_rooms,  external_property_level_2_units.unit_id,  external_property_level_2_units.surface,  external_property_level_2_units.surface_measurment_unit,  external_property_level_2_units.description,  external_property_level_2_units.do_not_insert,  external_property_groups_areas.`order` AS order_area,  external_property_level_1_buildings.`order` AS order_building,  ut_check_unee_t_updates_property_level_2.uneet_created_datetime,  ut_check_unee_t_updates_property_level_2.unee_t_mefe_unit_id,  external_property_level_2_units.mgt_cny_default_assignee AS mgt_cny_default_assignee_l2p,  external_property_level_2_units.landlord_default_assignee AS landlord_default_assignee_l2p,  external_property_level_2_units.tenant_default_assignee AS tenant_default_assignee_l2p,  external_property_level_2_units.agent_default_assignee AS agent_default_assignee_l2p,  external_property_level_1_buildings.mgt_cny_default_assignee AS mgt_cny_default_assignee_l1p,  external_property_level_1_buildings.landlord_default_assignee AS landlord_default_assignee_l1p,  external_property_level_1_buildings.tenant_default_assignee AS tenant_default_assignee_l1p,  external_property_level_1_buildings.agent_default_assignee AS agent_default_assignee_l1p,  external_property_level_2_units.l1p_external_system,  external_property_level_2_units.l1p_external_table,  external_property_level_2_units.l1p_external_id";
$tdataManage_Units[".sqlFrom"] = "FROM external_property_level_2_units  LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_unit_types ON external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation  LEFT OUTER JOIN property_level_2_units ON external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id  LEFT OUTER JOIN ut_check_unee_t_updates_property_level_2 ON property_level_2_units.system_id_unit = ut_check_unee_t_updates_property_level_2.system_id_unit";
$tdataManage_Units[".sqlWhereExpr"] = "";
$tdataManage_Units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_Units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_Units[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_Units[".highlightSearchResults"] = true;

$tableKeysManage_Units = array();
$tableKeysManage_Units[] = "external_id";
$tableKeysManage_Units[] = "external_system_id";
$tableKeysManage_Units[] = "external_table";
$tableKeysManage_Units[] = "created_by_id";
$tdataManage_Units[".Keys"] = $tableKeysManage_Units;


$tdataManage_Units[".hideMobileList"] = array();




//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","system_id_unit");
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


	$tdataManage_Units["system_id_unit"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "system_id_unit";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","external_id");
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


	$tdataManage_Units["external_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","external_system_id");
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


	$tdataManage_Units["external_system_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","external_table");
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


	$tdataManage_Units["external_table"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","syst_created_datetime");
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


	$tdataManage_Units["syst_created_datetime"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","creation_system_id");
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


	$tdataManage_Units["creation_system_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","created_by_id");
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


	$tdataManage_Units["created_by_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","creation_method");
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


	$tdataManage_Units["creation_method"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","syst_updated_datetime");
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


	$tdataManage_Units["syst_updated_datetime"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","update_system_id");
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


	$tdataManage_Units["update_system_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","updated_by_id");
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


	$tdataManage_Units["updated_by_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","update_method");
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


	$tdataManage_Units["update_method"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "update_method";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","country_code");
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


	$tdataManage_Units["country_code"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Manage_Units","country_name");
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


	$tdataManage_Units["country_name"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "country_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","area_id");
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


	$tdataManage_Units["area_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Units","area_name");
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


	$tdataManage_Units["area_name"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "area_name";
//	building_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "building_system_id";
	$fdata["GoodName"] = "building_system_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","building_system_id");
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
	$edata["LookupTable"] = "Manage Buildings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
	
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
	$edata["LookupTable"] = "Manage Buildings";
			$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
	
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


	$tdataManage_Units["building_system_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "building_system_id";
//	building_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "building_id";
	$fdata["GoodName"] = "building_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","building_id");
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


	$tdataManage_Units["building_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "building_id";
//	building_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "building_designation";
	$fdata["GoodName"] = "building_designation";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","building_designation");
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


	$tdataManage_Units["building_designation"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "building_designation";
//	unit_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "unit_designation";
	$fdata["GoodName"] = "unit_designation";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","unit_designation");
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


	$tdataManage_Units["unit_designation"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "unit_designation";
//	activated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "activated_by_id";
	$fdata["GoodName"] = "activated_by_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","activated_by_id");
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


	$tdataManage_Units["activated_by_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "activated_by_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","is_obsolete");
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


	$tdataManage_Units["is_obsolete"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "is_obsolete";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","is_creation_needed_in_unee_t");
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


	$tdataManage_Units["is_creation_needed_in_unee_t"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","unee_t_unit_type");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
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


	$tdataManage_Units["unee_t_unit_type"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "unee_t_unit_type";
//	unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "unit_type";
	$fdata["GoodName"] = "unit_type";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("Manage_Units","unit_type");
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


	$tdataManage_Units["unit_type"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "unit_type";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","tower");
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


	$tdataManage_Units["tower"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "tower";
//	unit_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "unit_category_id";
	$fdata["GoodName"] = "unit_category_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","unit_category_id");
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


	$tdataManage_Units["unit_category_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "unit_category_id";
//	count_rooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "count_rooms";
	$fdata["GoodName"] = "count_rooms";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","count_rooms");
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


	$tdataManage_Units["count_rooms"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "count_rooms";
//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","unit_id");
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


	$tdataManage_Units["unit_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "unit_id";
//	surface
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "surface";
	$fdata["GoodName"] = "surface";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","surface");
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


	$tdataManage_Units["surface"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "surface";
//	surface_measurment_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "surface_measurment_unit";
	$fdata["GoodName"] = "surface_measurment_unit";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","surface_measurment_unit");
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


	$tdataManage_Units["surface_measurment_unit"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "surface_measurment_unit";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","description");
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


	$tdataManage_Units["description"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "description";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","do_not_insert");
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


	$tdataManage_Units["do_not_insert"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "do_not_insert";
//	order_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "order_area";
	$fdata["GoodName"] = "order_area";
	$fdata["ownerTable"] = "external_property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Manage_Units","order_area");
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


	$tdataManage_Units["order_area"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "order_area";
//	order_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "order_building";
	$fdata["GoodName"] = "order_building";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","order_building");
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


	$tdataManage_Units["order_building"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "order_building";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_check_unee_t_updates_property_level_2";
	$fdata["Label"] = GetFieldLabel("Manage_Units","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_updates_property_level_2.uneet_created_datetime";

	
	
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


	$tdataManage_Units["uneet_created_datetime"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_check_unee_t_updates_property_level_2";
	$fdata["Label"] = GetFieldLabel("Manage_Units","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_check_unee_t_updates_property_level_2.unee_t_mefe_unit_id";

	
	
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


	$tdataManage_Units["unee_t_mefe_unit_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "unee_t_mefe_unit_id";
//	mgt_cny_default_assignee_l2p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "mgt_cny_default_assignee_l2p";
	$fdata["GoodName"] = "mgt_cny_default_assignee_l2p";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","mgt_cny_default_assignee_l2p");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mgt_cny_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.mgt_cny_default_assignee";

	
	
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
	$edata["LinkFieldType"] = 0;
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


	$tdataManage_Units["mgt_cny_default_assignee_l2p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "mgt_cny_default_assignee_l2p";
//	landlord_default_assignee_l2p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "landlord_default_assignee_l2p";
	$fdata["GoodName"] = "landlord_default_assignee_l2p";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","landlord_default_assignee_l2p");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "landlord_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.landlord_default_assignee";

	
	
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
	$edata["LinkFieldType"] = 0;
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


	$tdataManage_Units["landlord_default_assignee_l2p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "landlord_default_assignee_l2p";
//	tenant_default_assignee_l2p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "tenant_default_assignee_l2p";
	$fdata["GoodName"] = "tenant_default_assignee_l2p";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","tenant_default_assignee_l2p");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tenant_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.tenant_default_assignee";

	
	
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
	$edata["LinkFieldType"] = 0;
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


	$tdataManage_Units["tenant_default_assignee_l2p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "tenant_default_assignee_l2p";
//	agent_default_assignee_l2p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "agent_default_assignee_l2p";
	$fdata["GoodName"] = "agent_default_assignee_l2p";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","agent_default_assignee_l2p");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "agent_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.agent_default_assignee";

	
	
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
	$edata["LinkFieldType"] = 0;
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


	$tdataManage_Units["agent_default_assignee_l2p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "agent_default_assignee_l2p";
//	mgt_cny_default_assignee_l1p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "mgt_cny_default_assignee_l1p";
	$fdata["GoodName"] = "mgt_cny_default_assignee_l1p";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","mgt_cny_default_assignee_l1p");
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


	$tdataManage_Units["mgt_cny_default_assignee_l1p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "mgt_cny_default_assignee_l1p";
//	landlord_default_assignee_l1p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "landlord_default_assignee_l1p";
	$fdata["GoodName"] = "landlord_default_assignee_l1p";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","landlord_default_assignee_l1p");
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


	$tdataManage_Units["landlord_default_assignee_l1p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "landlord_default_assignee_l1p";
//	tenant_default_assignee_l1p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "tenant_default_assignee_l1p";
	$fdata["GoodName"] = "tenant_default_assignee_l1p";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","tenant_default_assignee_l1p");
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


	$tdataManage_Units["tenant_default_assignee_l1p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "tenant_default_assignee_l1p";
//	agent_default_assignee_l1p
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "agent_default_assignee_l1p";
	$fdata["GoodName"] = "agent_default_assignee_l1p";
	$fdata["ownerTable"] = "external_property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Manage_Units","agent_default_assignee_l1p");
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


	$tdataManage_Units["agent_default_assignee_l1p"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "agent_default_assignee_l1p";
//	l1p_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "l1p_external_system";
	$fdata["GoodName"] = "l1p_external_system";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","l1p_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "l1p_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.l1p_external_system";

	
	
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


	$tdataManage_Units["l1p_external_system"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "l1p_external_system";
//	l1p_external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "l1p_external_table";
	$fdata["GoodName"] = "l1p_external_table";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","l1p_external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "l1p_external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.l1p_external_table";

	
	
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


	$tdataManage_Units["l1p_external_table"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "l1p_external_table";
//	l1p_external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "l1p_external_id";
	$fdata["GoodName"] = "l1p_external_id";
	$fdata["ownerTable"] = "external_property_level_2_units";
	$fdata["Label"] = GetFieldLabel("Manage_Units","l1p_external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "l1p_external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_property_level_2_units.l1p_external_id";

	
	
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


	$tdataManage_Units["l1p_external_id"] = $fdata;
		$tdataManage_Units[".searchableFields"][] = "l1p_external_id";


$tables_data["Manage Units"]=&$tdataManage_Units;
$field_labels["Manage_Units"] = &$fieldLabelsManage_Units;
$fieldToolTips["Manage_Units"] = &$fieldToolTipsManage_Units;
$placeHolders["Manage_Units"] = &$placeHoldersManage_Units;
$page_titles["Manage_Units"] = &$pageTitlesManage_Units;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage Units"] = array();
//	Manage Rooms
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Manage Rooms";
		$detailsParam["dOriginalTable"] = "external_property_level_3_rooms";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Manage_Rooms";
	$detailsParam["dCaptionTable"] = GetTableCaption("Manage_Rooms");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Units"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Units"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Units"][$dIndex]["masterKeys"][]="external_id";

	$detailsTablesData["Manage Units"][$dIndex]["masterKeys"][]="external_system_id";

	$detailsTablesData["Manage Units"][$dIndex]["masterKeys"][]="external_table";

				$detailsTablesData["Manage Units"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Units"][$dIndex]["detailKeys"][]="l2p_external_id";

		
	$detailsTablesData["Manage Units"][$dIndex]["detailKeys"][]="l2p_external_system";

		
	$detailsTablesData["Manage Units"][$dIndex]["detailKeys"][]="l2p_external_table";
//	Assign Units to User
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Assign Units to User";
		$detailsParam["dOriginalTable"] = "external_map_user_unit_role_permissions_level_2";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Assign_Units_to_User";
	$detailsParam["dCaptionTable"] = GetTableCaption("Assign_Units_to_User");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Units"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Units"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Units"][$dIndex]["masterKeys"][]="unee_t_mefe_unit_id";

				$detailsTablesData["Manage Units"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Units"][$dIndex]["detailKeys"][]="unee_t_mefe_unit_id";
//	Organization Default L2P
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Organization Default L2P";
		$detailsParam["dOriginalTable"] = "uneet_enterprise_organizations";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "organization_default_l2p";
	$detailsParam["dCaptionTable"] = GetTableCaption("Organization_Default_L2P");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Units"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Units"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Units"][$dIndex]["masterKeys"][]="created_by_id";

				$detailsTablesData["Manage Units"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Units"][$dIndex]["detailKeys"][]="id_organization";

// tables which are master tables for current table (detail)
$masterTablesData["Manage Units"] = array();



	
				$strOriginalDetailsTable="external_property_level_1_buildings";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Manage Buildings";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Manage_Buildings";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Manage Units"][0] = $masterParams;
				$masterTablesData["Manage Units"][0]["masterKeys"] = array();
	$masterTablesData["Manage Units"][0]["masterKeys"][]="external_id";
				$masterTablesData["Manage Units"][0]["masterKeys"][]="external_system_id";
				$masterTablesData["Manage Units"][0]["masterKeys"][]="external_table";
				$masterTablesData["Manage Units"][0]["detailKeys"] = array();
	$masterTablesData["Manage Units"][0]["detailKeys"][]="l1p_external_id";
				$masterTablesData["Manage Units"][0]["detailKeys"][]="l1p_external_system";
				$masterTablesData["Manage Units"][0]["detailKeys"][]="l1p_external_table";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_Units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_property_level_2_units.system_id_unit,  external_property_level_2_units.external_id,  external_property_level_2_units.external_system_id,  external_property_level_2_units.external_table,  external_property_level_2_units.syst_created_datetime,  external_property_level_2_units.creation_system_id,  external_property_level_2_units.created_by_id,  external_property_level_2_units.creation_method,  external_property_level_2_units.syst_updated_datetime,  external_property_level_2_units.update_system_id,  external_property_level_2_units.updated_by_id,  external_property_level_2_units.update_method,  external_property_level_1_buildings.country_code,  property_groups_countries.country_name,  external_property_level_1_buildings.area_id,  external_property_groups_areas.area_name,  external_property_level_2_units.building_system_id,  external_property_level_2_units.building_system_id AS building_id,  external_property_level_1_buildings.designation AS building_designation,  external_property_level_2_units.designation AS unit_designation,  external_property_level_2_units.activated_by_id,  external_property_level_2_units.is_obsolete,  external_property_level_2_units.is_creation_needed_in_unee_t,  external_property_level_2_units.unee_t_unit_type,  ut_unit_types.designation AS unit_type,  external_property_level_2_units.tower,  external_property_level_2_units.unit_category_id,  external_property_level_2_units.count_rooms,  external_property_level_2_units.unit_id,  external_property_level_2_units.surface,  external_property_level_2_units.surface_measurment_unit,  external_property_level_2_units.description,  external_property_level_2_units.do_not_insert,  external_property_groups_areas.`order` AS order_area,  external_property_level_1_buildings.`order` AS order_building,  ut_check_unee_t_updates_property_level_2.uneet_created_datetime,  ut_check_unee_t_updates_property_level_2.unee_t_mefe_unit_id,  external_property_level_2_units.mgt_cny_default_assignee AS mgt_cny_default_assignee_l2p,  external_property_level_2_units.landlord_default_assignee AS landlord_default_assignee_l2p,  external_property_level_2_units.tenant_default_assignee AS tenant_default_assignee_l2p,  external_property_level_2_units.agent_default_assignee AS agent_default_assignee_l2p,  external_property_level_1_buildings.mgt_cny_default_assignee AS mgt_cny_default_assignee_l1p,  external_property_level_1_buildings.landlord_default_assignee AS landlord_default_assignee_l1p,  external_property_level_1_buildings.tenant_default_assignee AS tenant_default_assignee_l1p,  external_property_level_1_buildings.agent_default_assignee AS agent_default_assignee_l1p,  external_property_level_2_units.l1p_external_system,  external_property_level_2_units.l1p_external_table,  external_property_level_2_units.l1p_external_id";
$proto0["m_strFrom"] = "FROM external_property_level_2_units  LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building  LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area  LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code  LEFT OUTER JOIN ut_unit_types ON external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation  LEFT OUTER JOIN property_level_2_units ON external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id  LEFT OUTER JOIN ut_check_unee_t_updates_property_level_2 ON property_level_2_units.system_id_unit = ut_check_unee_t_updates_property_level_2.system_id_unit";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY property_groups_countries.country_name, external_property_groups_areas.`order`, external_property_groups_areas.area_name, external_property_level_1_buildings.`order`, external_property_level_1_buildings.designation, ut_unit_types.designation, external_property_level_2_units.designation";
	
					
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
	"m_srcTableName" => "Manage Units"
));

$proto6["m_sql"] = "external_property_level_2_units.system_id_unit";
$proto6["m_srcTableName"] = "Manage Units";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto8["m_sql"] = "external_property_level_2_units.external_id";
$proto8["m_srcTableName"] = "Manage Units";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto10["m_sql"] = "external_property_level_2_units.external_system_id";
$proto10["m_srcTableName"] = "Manage Units";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto12["m_sql"] = "external_property_level_2_units.external_table";
$proto12["m_srcTableName"] = "Manage Units";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto14["m_sql"] = "external_property_level_2_units.syst_created_datetime";
$proto14["m_srcTableName"] = "Manage Units";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto16["m_sql"] = "external_property_level_2_units.creation_system_id";
$proto16["m_srcTableName"] = "Manage Units";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto18["m_sql"] = "external_property_level_2_units.created_by_id";
$proto18["m_srcTableName"] = "Manage Units";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto20["m_sql"] = "external_property_level_2_units.creation_method";
$proto20["m_srcTableName"] = "Manage Units";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto22["m_sql"] = "external_property_level_2_units.syst_updated_datetime";
$proto22["m_srcTableName"] = "Manage Units";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto24["m_sql"] = "external_property_level_2_units.update_system_id";
$proto24["m_srcTableName"] = "Manage Units";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto26["m_sql"] = "external_property_level_2_units.updated_by_id";
$proto26["m_srcTableName"] = "Manage Units";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto28["m_sql"] = "external_property_level_2_units.update_method";
$proto28["m_srcTableName"] = "Manage Units";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto30["m_sql"] = "external_property_level_1_buildings.country_code";
$proto30["m_srcTableName"] = "Manage Units";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Manage Units"
));

$proto32["m_sql"] = "property_groups_countries.country_name";
$proto32["m_srcTableName"] = "Manage Units";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto34["m_sql"] = "external_property_level_1_buildings.area_id";
$proto34["m_srcTableName"] = "Manage Units";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Units"
));

$proto36["m_sql"] = "external_property_groups_areas.area_name";
$proto36["m_srcTableName"] = "Manage Units";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto38["m_sql"] = "external_property_level_2_units.building_system_id";
$proto38["m_srcTableName"] = "Manage Units";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto40["m_sql"] = "external_property_level_2_units.building_system_id";
$proto40["m_srcTableName"] = "Manage Units";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "building_id";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto42["m_sql"] = "external_property_level_1_buildings.designation";
$proto42["m_srcTableName"] = "Manage Units";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "building_designation";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto44["m_sql"] = "external_property_level_2_units.designation";
$proto44["m_srcTableName"] = "Manage Units";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "unit_designation";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "activated_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto46["m_sql"] = "external_property_level_2_units.activated_by_id";
$proto46["m_srcTableName"] = "Manage Units";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto48["m_sql"] = "external_property_level_2_units.is_obsolete";
$proto48["m_srcTableName"] = "Manage Units";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto50["m_sql"] = "external_property_level_2_units.is_creation_needed_in_unee_t";
$proto50["m_srcTableName"] = "Manage Units";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto52["m_sql"] = "external_property_level_2_units.unee_t_unit_type";
$proto52["m_srcTableName"] = "Manage Units";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "Manage Units"
));

$proto54["m_sql"] = "ut_unit_types.designation";
$proto54["m_srcTableName"] = "Manage Units";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "unit_type";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto56["m_sql"] = "external_property_level_2_units.tower";
$proto56["m_srcTableName"] = "Manage Units";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_category_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto58["m_sql"] = "external_property_level_2_units.unit_category_id";
$proto58["m_srcTableName"] = "Manage Units";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "count_rooms",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto60["m_sql"] = "external_property_level_2_units.count_rooms";
$proto60["m_srcTableName"] = "Manage Units";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto62["m_sql"] = "external_property_level_2_units.unit_id";
$proto62["m_srcTableName"] = "Manage Units";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "surface",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto64["m_sql"] = "external_property_level_2_units.surface";
$proto64["m_srcTableName"] = "Manage Units";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "surface_measurment_unit",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto66["m_sql"] = "external_property_level_2_units.surface_measurment_unit";
$proto66["m_srcTableName"] = "Manage Units";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto68["m_sql"] = "external_property_level_2_units.description";
$proto68["m_srcTableName"] = "Manage Units";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto70["m_sql"] = "external_property_level_2_units.do_not_insert";
$proto70["m_srcTableName"] = "Manage Units";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Units"
));

$proto72["m_sql"] = "external_property_groups_areas.`order`";
$proto72["m_srcTableName"] = "Manage Units";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "order_area";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto74["m_sql"] = "external_property_level_1_buildings.`order`";
$proto74["m_srcTableName"] = "Manage Units";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "order_building";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_check_unee_t_updates_property_level_2",
	"m_srcTableName" => "Manage Units"
));

$proto76["m_sql"] = "ut_check_unee_t_updates_property_level_2.uneet_created_datetime";
$proto76["m_srcTableName"] = "Manage Units";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_check_unee_t_updates_property_level_2",
	"m_srcTableName" => "Manage Units"
));

$proto78["m_sql"] = "ut_check_unee_t_updates_property_level_2.unee_t_mefe_unit_id";
$proto78["m_srcTableName"] = "Manage Units";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "mgt_cny_default_assignee",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto80["m_sql"] = "external_property_level_2_units.mgt_cny_default_assignee";
$proto80["m_srcTableName"] = "Manage Units";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "mgt_cny_default_assignee_l2p";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "landlord_default_assignee",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto82["m_sql"] = "external_property_level_2_units.landlord_default_assignee";
$proto82["m_srcTableName"] = "Manage Units";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "landlord_default_assignee_l2p";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "tenant_default_assignee",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto84["m_sql"] = "external_property_level_2_units.tenant_default_assignee";
$proto84["m_srcTableName"] = "Manage Units";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "tenant_default_assignee_l2p";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "agent_default_assignee",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto86["m_sql"] = "external_property_level_2_units.agent_default_assignee";
$proto86["m_srcTableName"] = "Manage Units";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "agent_default_assignee_l2p";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "mgt_cny_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto88["m_sql"] = "external_property_level_1_buildings.mgt_cny_default_assignee";
$proto88["m_srcTableName"] = "Manage Units";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "mgt_cny_default_assignee_l1p";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "landlord_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto90["m_sql"] = "external_property_level_1_buildings.landlord_default_assignee";
$proto90["m_srcTableName"] = "Manage Units";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "landlord_default_assignee_l1p";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "tenant_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto92["m_sql"] = "external_property_level_1_buildings.tenant_default_assignee";
$proto92["m_srcTableName"] = "Manage Units";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "tenant_default_assignee_l1p";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "agent_default_assignee",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto94["m_sql"] = "external_property_level_1_buildings.agent_default_assignee";
$proto94["m_srcTableName"] = "Manage Units";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "agent_default_assignee_l1p";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "l1p_external_system",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto96["m_sql"] = "external_property_level_2_units.l1p_external_system";
$proto96["m_srcTableName"] = "Manage Units";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "l1p_external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto98["m_sql"] = "external_property_level_2_units.l1p_external_table";
$proto98["m_srcTableName"] = "Manage Units";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "l1p_external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto100["m_sql"] = "external_property_level_2_units.l1p_external_id";
$proto100["m_srcTableName"] = "Manage Units";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "external_property_level_2_units";
$proto103["m_srcTableName"] = "Manage Units";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "system_id_unit";
$proto103["m_columns"][] = "create_api_request_id";
$proto103["m_columns"][] = "edit_api_request_id";
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
$proto103["m_columns"][] = "is_update_on_duplicate_key";
$proto103["m_columns"][] = "activated_by_id";
$proto103["m_columns"][] = "is_obsolete";
$proto103["m_columns"][] = "is_creation_needed_in_unee_t";
$proto103["m_columns"][] = "do_not_insert";
$proto103["m_columns"][] = "unee_t_unit_type";
$proto103["m_columns"][] = "l1p_external_system";
$proto103["m_columns"][] = "l1p_external_table";
$proto103["m_columns"][] = "l1p_external_id";
$proto103["m_columns"][] = "tower";
$proto103["m_columns"][] = "unit_category_id";
$proto103["m_columns"][] = "designation";
$proto103["m_columns"][] = "count_rooms";
$proto103["m_columns"][] = "unit_id";
$proto103["m_columns"][] = "surface";
$proto103["m_columns"][] = "surface_measurment_unit";
$proto103["m_columns"][] = "description";
$proto103["m_columns"][] = "mgt_cny_default_assignee";
$proto103["m_columns"][] = "landlord_default_assignee";
$proto103["m_columns"][] = "tenant_default_assignee";
$proto103["m_columns"][] = "agent_default_assignee";
$proto103["m_columns"][] = "building_system_id";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "external_property_level_2_units";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "Manage Units";
$proto104=array();
$proto104["m_sql"] = "";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "";
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
$proto107["m_strName"] = "external_property_level_1_buildings";
$proto107["m_srcTableName"] = "Manage Units";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "id_building";
$proto107["m_columns"][] = "create_api_request_id";
$proto107["m_columns"][] = "edit_api_request_id";
$proto107["m_columns"][] = "external_id";
$proto107["m_columns"][] = "external_system_id";
$proto107["m_columns"][] = "external_table";
$proto107["m_columns"][] = "syst_created_datetime";
$proto107["m_columns"][] = "creation_system_id";
$proto107["m_columns"][] = "created_by_id";
$proto107["m_columns"][] = "creation_method";
$proto107["m_columns"][] = "syst_updated_datetime";
$proto107["m_columns"][] = "update_system_id";
$proto107["m_columns"][] = "updated_by_id";
$proto107["m_columns"][] = "update_method";
$proto107["m_columns"][] = "is_update_on_duplicate_key";
$proto107["m_columns"][] = "is_obsolete";
$proto107["m_columns"][] = "order";
$proto107["m_columns"][] = "is_creation_needed_in_unee_t";
$proto107["m_columns"][] = "do_not_insert";
$proto107["m_columns"][] = "unee_t_unit_type";
$proto107["m_columns"][] = "area_external_system";
$proto107["m_columns"][] = "area_external_table";
$proto107["m_columns"][] = "area_external_id";
$proto107["m_columns"][] = "designation";
$proto107["m_columns"][] = "tower";
$proto107["m_columns"][] = "address_1";
$proto107["m_columns"][] = "address_2";
$proto107["m_columns"][] = "zip_postal_code";
$proto107["m_columns"][] = "state";
$proto107["m_columns"][] = "city";
$proto107["m_columns"][] = "country_code";
$proto107["m_columns"][] = "description";
$proto107["m_columns"][] = "mgt_cny_default_assignee";
$proto107["m_columns"][] = "landlord_default_assignee";
$proto107["m_columns"][] = "tenant_default_assignee";
$proto107["m_columns"][] = "agent_default_assignee";
$proto107["m_columns"][] = "area_id";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "LEFT OUTER JOIN external_property_level_1_buildings ON external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto106["m_alias"] = "";
$proto106["m_srcTableName"] = "Manage Units";
$proto108=array();
$proto108["m_sql"] = "external_property_level_2_units.building_system_id = external_property_level_1_buildings.id_building";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= external_property_level_1_buildings.id_building";
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
$proto111["m_strName"] = "external_property_groups_areas";
$proto111["m_srcTableName"] = "Manage Units";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id_area";
$proto111["m_columns"][] = "create_api_request_id";
$proto111["m_columns"][] = "edit_api_request_id";
$proto111["m_columns"][] = "external_id";
$proto111["m_columns"][] = "external_system_id";
$proto111["m_columns"][] = "external_table";
$proto111["m_columns"][] = "syst_created_datetime";
$proto111["m_columns"][] = "creation_system_id";
$proto111["m_columns"][] = "created_by_id";
$proto111["m_columns"][] = "creation_method";
$proto111["m_columns"][] = "syst_updated_datetime";
$proto111["m_columns"][] = "update_system_id";
$proto111["m_columns"][] = "updated_by_id";
$proto111["m_columns"][] = "update_method";
$proto111["m_columns"][] = "is_update_on_duplicate_key";
$proto111["m_columns"][] = "is_creation_needed_in_unee_t";
$proto111["m_columns"][] = "is_obsolete";
$proto111["m_columns"][] = "is_default";
$proto111["m_columns"][] = "order";
$proto111["m_columns"][] = "country_code";
$proto111["m_columns"][] = "area_name";
$proto111["m_columns"][] = "area_definition";
$proto111["m_columns"][] = "mgt_cny_default_assignee";
$proto111["m_columns"][] = "landlord_default_assignee";
$proto111["m_columns"][] = "tenant_default_assignee";
$proto111["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "LEFT OUTER JOIN external_property_groups_areas ON external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "Manage Units";
$proto112=array();
$proto112["m_sql"] = "external_property_level_1_buildings.area_id = external_property_groups_areas.id_area";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= external_property_groups_areas.id_area";
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
$proto115["m_strName"] = "property_groups_countries";
$proto115["m_srcTableName"] = "Manage Units";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_country";
$proto115["m_columns"][] = "syst_created_datetime";
$proto115["m_columns"][] = "creation_system_id";
$proto115["m_columns"][] = "created_by_id";
$proto115["m_columns"][] = "syst_updated_datetime";
$proto115["m_columns"][] = "update_system_id";
$proto115["m_columns"][] = "updated_by_id";
$proto115["m_columns"][] = "is_obsolete";
$proto115["m_columns"][] = "is_default";
$proto115["m_columns"][] = "is_system";
$proto115["m_columns"][] = "order";
$proto115["m_columns"][] = "country_code";
$proto115["m_columns"][] = "country_name";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "Manage Units";
$proto116=array();
$proto116["m_sql"] = "external_property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= property_groups_countries.country_code";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
												$proto118=array();
$proto118["m_link"] = "SQLL_LEFTJOIN";
			$proto119=array();
$proto119["m_strName"] = "ut_unit_types";
$proto119["m_srcTableName"] = "Manage Units";
$proto119["m_columns"] = array();
$proto119["m_columns"][] = "id_property_type";
$proto119["m_columns"][] = "syst_created_datetime";
$proto119["m_columns"][] = "creation_system_id";
$proto119["m_columns"][] = "created_by_id";
$proto119["m_columns"][] = "syst_updated_datetime";
$proto119["m_columns"][] = "update_system_id";
$proto119["m_columns"][] = "updated_by_id";
$proto119["m_columns"][] = "order";
$proto119["m_columns"][] = "is_level_1";
$proto119["m_columns"][] = "is_level_2";
$proto119["m_columns"][] = "is_level_3";
$proto119["m_columns"][] = "is_obsolete";
$proto119["m_columns"][] = "designation";
$proto119["m_columns"][] = "description";
$obj = new SQLTable($proto119);

$proto118["m_table"] = $obj;
$proto118["m_sql"] = "LEFT OUTER JOIN ut_unit_types ON external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation";
$proto118["m_alias"] = "";
$proto118["m_srcTableName"] = "Manage Units";
$proto120=array();
$proto120["m_sql"] = "external_property_level_2_units.unee_t_unit_type = ut_unit_types.designation";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "= ut_unit_types.designation";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

$proto118["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto118);

$proto0["m_fromlist"][]=$obj;
												$proto122=array();
$proto122["m_link"] = "SQLL_LEFTJOIN";
			$proto123=array();
$proto123["m_strName"] = "property_level_2_units";
$proto123["m_srcTableName"] = "Manage Units";
$proto123["m_columns"] = array();
$proto123["m_columns"][] = "system_id_unit";
$proto123["m_columns"][] = "create_api_request_id";
$proto123["m_columns"][] = "edit_api_request_id";
$proto123["m_columns"][] = "external_id";
$proto123["m_columns"][] = "external_system_id";
$proto123["m_columns"][] = "external_table";
$proto123["m_columns"][] = "syst_created_datetime";
$proto123["m_columns"][] = "creation_system_id";
$proto123["m_columns"][] = "created_by_id";
$proto123["m_columns"][] = "creation_method";
$proto123["m_columns"][] = "syst_updated_datetime";
$proto123["m_columns"][] = "update_system_id";
$proto123["m_columns"][] = "updated_by_id";
$proto123["m_columns"][] = "update_method";
$proto123["m_columns"][] = "is_update_on_duplicate_key";
$proto123["m_columns"][] = "organization_id";
$proto123["m_columns"][] = "activated_by_id";
$proto123["m_columns"][] = "is_obsolete";
$proto123["m_columns"][] = "is_creation_needed_in_unee_t";
$proto123["m_columns"][] = "do_not_insert";
$proto123["m_columns"][] = "unee_t_unit_type";
$proto123["m_columns"][] = "l1p_external_system";
$proto123["m_columns"][] = "l1p_external_table";
$proto123["m_columns"][] = "l1p_external_id";
$proto123["m_columns"][] = "tower";
$proto123["m_columns"][] = "unit_category_id";
$proto123["m_columns"][] = "designation";
$proto123["m_columns"][] = "count_rooms";
$proto123["m_columns"][] = "unit_id";
$proto123["m_columns"][] = "surface";
$proto123["m_columns"][] = "surface_measurment_unit";
$proto123["m_columns"][] = "description";
$proto123["m_columns"][] = "mgt_cny_default_assignee";
$proto123["m_columns"][] = "landlord_default_assignee";
$proto123["m_columns"][] = "tenant_default_assignee";
$proto123["m_columns"][] = "agent_default_assignee";
$proto123["m_columns"][] = "building_system_id";
$obj = new SQLTable($proto123);

$proto122["m_table"] = $obj;
$proto122["m_sql"] = "LEFT OUTER JOIN property_level_2_units ON external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto122["m_alias"] = "";
$proto122["m_srcTableName"] = "Manage Units";
$proto124=array();
$proto124["m_sql"] = "external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto124["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_property_level_2_units.external_id = property_level_2_units.external_id AND external_property_level_2_units.external_system_id = property_level_2_units.external_system_id AND external_property_level_2_units.external_table = property_level_2_units.external_table AND external_property_level_2_units.created_by_id = property_level_2_units.organization_id"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
						$proto126=array();
$proto126["m_sql"] = "external_property_level_2_units.external_id = property_level_2_units.external_id";
$proto126["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto126["m_column"]=$obj;
$proto126["m_contained"] = array();
$proto126["m_strCase"] = "= property_level_2_units.external_id";
$proto126["m_havingmode"] = false;
$proto126["m_inBrackets"] = false;
$proto126["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto126);

			$proto124["m_contained"][]=$obj;
						$proto128=array();
$proto128["m_sql"] = "external_property_level_2_units.external_system_id = property_level_2_units.external_system_id";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= property_level_2_units.external_system_id";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

			$proto124["m_contained"][]=$obj;
						$proto130=array();
$proto130["m_sql"] = "external_property_level_2_units.external_table = property_level_2_units.external_table";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "= property_level_2_units.external_table";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

			$proto124["m_contained"][]=$obj;
						$proto132=array();
$proto132["m_sql"] = "external_property_level_2_units.created_by_id = property_level_2_units.organization_id";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= property_level_2_units.organization_id";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

			$proto124["m_contained"][]=$obj;
$proto124["m_strCase"] = "";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

$proto122["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto122);

$proto0["m_fromlist"][]=$obj;
												$proto134=array();
$proto134["m_link"] = "SQLL_LEFTJOIN";
			$proto135=array();
$proto135["m_strName"] = "ut_check_unee_t_updates_property_level_2";
$proto135["m_srcTableName"] = "Manage Units";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "system_id_unit";
$proto135["m_columns"][] = "designation";
$proto135["m_columns"][] = "unee_t_mefe_unit_id";
$proto135["m_columns"][] = "uneet_name";
$proto135["m_columns"][] = "uneet_created_datetime";
$proto135["m_columns"][] = "is_unee_t_created_by_me";
$proto135["m_columns"][] = "creation_method";
$proto135["m_columns"][] = "update_method";
$proto135["m_columns"][] = "organization_id";
$obj = new SQLTable($proto135);

$proto134["m_table"] = $obj;
$proto134["m_sql"] = "LEFT OUTER JOIN ut_check_unee_t_updates_property_level_2 ON property_level_2_units.system_id_unit = ut_check_unee_t_updates_property_level_2.system_id_unit";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "Manage Units";
$proto136=array();
$proto136["m_sql"] = "property_level_2_units.system_id_unit = ut_check_unee_t_updates_property_level_2.system_id_unit";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "system_id_unit",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "= ut_check_unee_t_updates_property_level_2.system_id_unit";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto134["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto134);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto138=array();
						$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Manage Units"
));

$proto138["m_column"]=$obj;
$proto138["m_bAsc"] = 1;
$proto138["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto138);

$proto0["m_orderby"][]=$obj;					
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Units"
));

$proto140["m_column"]=$obj;
$proto140["m_bAsc"] = 1;
$proto140["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto140);

$proto0["m_orderby"][]=$obj;					
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "external_property_groups_areas",
	"m_srcTableName" => "Manage Units"
));

$proto142["m_column"]=$obj;
$proto142["m_bAsc"] = 1;
$proto142["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto142);

$proto0["m_orderby"][]=$obj;					
												$proto144=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto144["m_column"]=$obj;
$proto144["m_bAsc"] = 1;
$proto144["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto144);

$proto0["m_orderby"][]=$obj;					
												$proto146=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_1_buildings",
	"m_srcTableName" => "Manage Units"
));

$proto146["m_column"]=$obj;
$proto146["m_bAsc"] = 1;
$proto146["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto146);

$proto0["m_orderby"][]=$obj;					
												$proto148=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "Manage Units"
));

$proto148["m_column"]=$obj;
$proto148["m_bAsc"] = 1;
$proto148["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto148);

$proto0["m_orderby"][]=$obj;					
												$proto150=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "external_property_level_2_units",
	"m_srcTableName" => "Manage Units"
));

$proto150["m_column"]=$obj;
$proto150["m_bAsc"] = 1;
$proto150["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto150);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Manage Units";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_Units = createSqlQuery_Manage_Units();


	
					
;

																																																

$tdataManage_Units[".sqlquery"] = $queryData_Manage_Units;

include_once(getabspath("include/Manage_Units_events.php"));
$tableEvents["Manage Units"] = new eventclass_Manage_Units;
$tdataManage_Units[".hasEvents"] = true;

?>