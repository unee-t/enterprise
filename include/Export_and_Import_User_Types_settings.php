<?php



$tdataExport_and_Import_User_Types = array();
$tdataExport_and_Import_User_Types[".searchableFields"] = array();
$tdataExport_and_Import_User_Types[".ShortName"] = "Export_and_Import_User_Types";
$tdataExport_and_Import_User_Types[".OwnerID"] = "organization_id";
$tdataExport_and_Import_User_Types[".OriginalTable"] = "ut_user_types";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataExport_and_Import_User_Types[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataExport_and_Import_User_Types[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataExport_and_Import_User_Types[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsExport_and_Import_User_Types = array();
$fieldToolTipsExport_and_Import_User_Types = array();
$pageTitlesExport_and_Import_User_Types = array();
$placeHoldersExport_and_Import_User_Types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsExport_and_Import_User_Types["English"] = array();
	$fieldToolTipsExport_and_Import_User_Types["English"] = array();
	$placeHoldersExport_and_Import_User_Types["English"] = array();
	$pageTitlesExport_and_Import_User_Types["English"] = array();
	$fieldLabelsExport_and_Import_User_Types["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsExport_and_Import_User_Types["English"]["syst_created_datetime"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["syst_created_datetime"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsExport_and_Import_User_Types["English"]["creation_system_id"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["creation_system_id"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsExport_and_Import_User_Types["English"]["created_by_id"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["created_by_id"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsExport_and_Import_User_Types["English"]["syst_updated_datetime"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["syst_updated_datetime"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsExport_and_Import_User_Types["English"]["update_system_id"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["update_system_id"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsExport_and_Import_User_Types["English"]["updated_by_id"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["updated_by_id"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["order"] = "Order";
	$fieldToolTipsExport_and_Import_User_Types["English"]["order"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["order"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_obsolete"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_obsolete"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["description"] = "Description";
	$fieldToolTipsExport_and_Import_User_Types["English"]["description"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["description"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsExport_and_Import_User_Types["English"]["creation_method"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["creation_method"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["update_method"] = "Update Method";
	$fieldToolTipsExport_and_Import_User_Types["English"]["update_method"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["update_method"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsExport_and_Import_User_Types["English"]["organization_id"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["organization_id"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["id_unee_t_user_type"] = "Unee-T User Type ID";
	$fieldToolTipsExport_and_Import_User_Types["English"]["id_unee_t_user_type"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["id_unee_t_user_type"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["designation"] = "Unee-T User Type";
	$fieldToolTipsExport_and_Import_User_Types["English"]["designation"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["designation"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["ut_user_role_type_id"] = "Role ID";
	$fieldToolTipsExport_and_Import_User_Types["English"]["ut_user_role_type_id"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["ut_user_role_type_id"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["role_type"] = "Role";
	$fieldToolTipsExport_and_Import_User_Types["English"]["role_type"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["role_type"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_public"] = "Public";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_public"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_public"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_default_assignee"] = "Default Assignee";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_default_assignee"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_default_assignee"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_dashboard_access"] = "Dashboard Access";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_dashboard_access"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_dashboard_access"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_occupant"] = "Occupant";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_occupant"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_occupant"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["can_see_role_contractor"] = "Can See Role Contractor";
	$fieldToolTipsExport_and_Import_User_Types["English"]["can_see_role_contractor"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["can_see_role_contractor"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["can_see_role_mgt_cny"] = "Can See Role Mgt Cny";
	$fieldToolTipsExport_and_Import_User_Types["English"]["can_see_role_mgt_cny"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["can_see_role_mgt_cny"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["can_see_occupant"] = "Can See Occupant";
	$fieldToolTipsExport_and_Import_User_Types["English"]["can_see_occupant"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["can_see_occupant"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["can_see_role_landlord"] = "Can See Role Landlord";
	$fieldToolTipsExport_and_Import_User_Types["English"]["can_see_role_landlord"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["can_see_role_landlord"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["can_see_role_agent"] = "Can See Role Agent";
	$fieldToolTipsExport_and_Import_User_Types["English"]["can_see_role_agent"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["can_see_role_agent"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["can_see_role_tenant"] = "Can See Role Tenant";
	$fieldToolTipsExport_and_Import_User_Types["English"]["can_see_role_tenant"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["can_see_role_tenant"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_assigned_to_case"] = "Assigned To Case";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_assigned_to_case"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_assigned_to_case"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_invited_to_case"] = "Invited To Case";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_invited_to_case"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_invited_to_case"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_solution_updated"] = "Solution Updated";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_solution_updated"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_solution_updated"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_next_step_updated"] = "Next Step Updated";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_next_step_updated"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_next_step_updated"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_deadline_updated"] = "Deadline Updated";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_deadline_updated"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_deadline_updated"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_case_resolved"] = "Case Resolved";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_case_resolved"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_case_resolved"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_case_critical"] = "Critical";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_case_critical"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_case_critical"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_case_blocker"] = "Blocker";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_case_blocker"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_case_blocker"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_message_from_contractor"] = "Is Message From Contractor";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_message_from_contractor"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_message_from_contractor"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_message_from_mgt_cny"] = "Is Message From Mgt Cny";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_message_from_mgt_cny"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_message_from_mgt_cny"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_message_from_agent"] = "Is Message From Agent";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_message_from_agent"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_message_from_agent"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_message_from_occupant"] = "Is Message From Occupant";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_message_from_occupant"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_message_from_occupant"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_message_from_ll"] = "Is Message From Ll";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_message_from_ll"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_message_from_ll"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_message_from_tenant"] = "Is Message From Tenant";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_message_from_tenant"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_message_from_tenant"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_any_new_message"] = "Is Any New Message";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_any_new_message"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_any_new_message"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_new_ir"] = "Is New Ir";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_new_ir"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_new_ir"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_new_inventory"] = "Is New Inventory";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_new_inventory"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_new_inventory"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_new_item"] = "Is New Item";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_new_item"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_new_item"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_item_moved"] = "Is Item Moved";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_item_moved"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_item_moved"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_item_removed"] = "Is Item Removed";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_item_removed"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_item_removed"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_default_invited"] = "Invited to All Cases";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_default_invited"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_default_invited"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_all_unit"] = "All Properties";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_all_unit"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_all_unit"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_all_units_in_country"] = "All Properties In Country";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_all_units_in_country"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_all_units_in_country"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_all_units_in_area"] = "All Properties In Area";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_all_units_in_area"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_all_units_in_area"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_all_units_in_level_1"] = "All Properties In Building";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_all_units_in_level_1"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_all_units_in_level_1"] = "";
	$fieldLabelsExport_and_Import_User_Types["English"]["is_all_units_in_level_2"] = "All Properties In Unit";
	$fieldToolTipsExport_and_Import_User_Types["English"]["is_all_units_in_level_2"] = "";
	$placeHoldersExport_and_Import_User_Types["English"]["is_all_units_in_level_2"] = "";
	if (count($fieldToolTipsExport_and_Import_User_Types["English"]))
		$tdataExport_and_Import_User_Types[".isUseToolTips"] = true;
}


	$tdataExport_and_Import_User_Types[".NCSearch"] = true;



$tdataExport_and_Import_User_Types[".shortTableName"] = "Export_and_Import_User_Types";
$tdataExport_and_Import_User_Types[".nSecOptions"] = 1;

$tdataExport_and_Import_User_Types[".mainTableOwnerID"] = "organization_id";
$tdataExport_and_Import_User_Types[".entityType"] = 1;

$tdataExport_and_Import_User_Types[".strOriginalTableName"] = "ut_user_types";

		 



$tdataExport_and_Import_User_Types[".showAddInPopup"] = false;

$tdataExport_and_Import_User_Types[".showEditInPopup"] = false;

$tdataExport_and_Import_User_Types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataExport_and_Import_User_Types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataExport_and_Import_User_Types[".listAjax"] = true;
//	temporary
$tdataExport_and_Import_User_Types[".listAjax"] = false;

	$tdataExport_and_Import_User_Types[".audit"] = false;

	$tdataExport_and_Import_User_Types[".locking"] = false;


$pages = $tdataExport_and_Import_User_Types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataExport_and_Import_User_Types[".edit"] = true;
	$tdataExport_and_Import_User_Types[".afterEditAction"] = 1;
	$tdataExport_and_Import_User_Types[".closePopupAfterEdit"] = 1;
	$tdataExport_and_Import_User_Types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataExport_and_Import_User_Types[".add"] = true;
$tdataExport_and_Import_User_Types[".afterAddAction"] = 0;
$tdataExport_and_Import_User_Types[".closePopupAfterAdd"] = 1;
$tdataExport_and_Import_User_Types[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataExport_and_Import_User_Types[".list"] = true;
}



$tdataExport_and_Import_User_Types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataExport_and_Import_User_Types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataExport_and_Import_User_Types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataExport_and_Import_User_Types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataExport_and_Import_User_Types[".printFriendly"] = true;
}



$tdataExport_and_Import_User_Types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataExport_and_Import_User_Types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataExport_and_Import_User_Types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataExport_and_Import_User_Types[".isUseAjaxSuggest"] = true;

$tdataExport_and_Import_User_Types[".rowHighlite"] = true;





$tdataExport_and_Import_User_Types[".ajaxCodeSnippetAdded"] = false;

$tdataExport_and_Import_User_Types[".buttonsAdded"] = false;

$tdataExport_and_Import_User_Types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataExport_and_Import_User_Types[".isUseTimeForSearch"] = false;


$tdataExport_and_Import_User_Types[".badgeColor"] = "6DA5C8";


$tdataExport_and_Import_User_Types[".allSearchFields"] = array();
$tdataExport_and_Import_User_Types[".filterFields"] = array();
$tdataExport_and_Import_User_Types[".requiredSearchFields"] = array();

$tdataExport_and_Import_User_Types[".googleLikeFields"] = array();
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "id_unee_t_user_type";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "designation";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "description";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "role_type";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "is_all_units_in_country";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "is_all_units_in_area";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "is_all_units_in_level_1";
$tdataExport_and_Import_User_Types[".googleLikeFields"][] = "is_all_units_in_level_2";



$tdataExport_and_Import_User_Types[".tableType"] = "list";

$tdataExport_and_Import_User_Types[".printerPageOrientation"] = 0;
$tdataExport_and_Import_User_Types[".nPrinterPageScale"] = 100;

$tdataExport_and_Import_User_Types[".nPrinterSplitRecords"] = 40;

$tdataExport_and_Import_User_Types[".geocodingEnabled"] = false;





$tdataExport_and_Import_User_Types[".isResizeColumns"] = true;





$tdataExport_and_Import_User_Types[".pageSize"] = 20;

$tdataExport_and_Import_User_Types[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ut_user_role_types.role_type, ut_user_types.is_obsolete, ut_user_types.`order`, ut_user_types.organization_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataExport_and_Import_User_Types[".strOrderBy"] = $tstrOrderBy;

$tdataExport_and_Import_User_Types[".orderindexes"] = array();
	$tdataExport_and_Import_User_Types[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "ut_user_role_types.role_type");

	$tdataExport_and_Import_User_Types[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "ut_user_types.is_obsolete");

	$tdataExport_and_Import_User_Types[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "ut_user_types.`order`");

	$tdataExport_and_Import_User_Types[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "ut_user_types.organization_id");


$tdataExport_and_Import_User_Types[".sqlHead"] = "SELECT ut_user_types.id_unee_t_user_type,  ut_user_types.syst_created_datetime,  ut_user_types.creation_system_id,  ut_user_types.created_by_id,  ut_user_types.creation_method,  ut_user_types.syst_updated_datetime,  ut_user_types.update_system_id,  ut_user_types.updated_by_id,  ut_user_types.update_method,  ut_user_types.organization_id,  ut_user_types.`order`,  ut_user_types.is_obsolete,  ut_user_types.designation,  ut_user_types.description,  ut_user_types.ut_user_role_type_id,  ut_user_role_types.role_type,  ut_user_types.is_all_unit,  ut_user_types.is_all_units_in_country,  ut_user_types.is_all_units_in_area,  ut_user_types.is_all_units_in_level_1,  ut_user_types.is_all_units_in_level_2,  ut_user_types.is_occupant,  ut_user_types.is_public,  ut_user_types.is_default_assignee,  ut_user_types.is_default_invited,  ut_user_types.is_dashboard_access,  ut_user_types.can_see_role_contractor,  ut_user_types.can_see_role_mgt_cny,  ut_user_types.can_see_occupant,  ut_user_types.can_see_role_landlord,  ut_user_types.can_see_role_agent,  ut_user_types.can_see_role_tenant,  ut_user_types.is_assigned_to_case,  ut_user_types.is_invited_to_case,  ut_user_types.is_solution_updated,  ut_user_types.is_next_step_updated,  ut_user_types.is_deadline_updated,  ut_user_types.is_case_resolved,  ut_user_types.is_case_critical,  ut_user_types.is_case_blocker,  ut_user_types.is_message_from_contractor,  ut_user_types.is_message_from_mgt_cny,  ut_user_types.is_message_from_agent,  ut_user_types.is_message_from_occupant,  ut_user_types.is_message_from_ll,  ut_user_types.is_message_from_tenant,  ut_user_types.is_any_new_message,  ut_user_types.is_new_ir,  ut_user_types.is_new_inventory,  ut_user_types.is_new_item,  ut_user_types.is_item_moved,  ut_user_types.is_item_removed";
$tdataExport_and_Import_User_Types[".sqlFrom"] = "FROM ut_user_types  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$tdataExport_and_Import_User_Types[".sqlWhereExpr"] = "";
$tdataExport_and_Import_User_Types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataExport_and_Import_User_Types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataExport_and_Import_User_Types[".arrGroupsPerPage"] = $arrGPP;

$tdataExport_and_Import_User_Types[".highlightSearchResults"] = true;

$tableKeysExport_and_Import_User_Types = array();
$tableKeysExport_and_Import_User_Types[] = "organization_id";
$tableKeysExport_and_Import_User_Types[] = "designation";
$tdataExport_and_Import_User_Types[".Keys"] = $tableKeysExport_and_Import_User_Types;


$tdataExport_and_Import_User_Types[".hideMobileList"] = array();




//	id_unee_t_user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_unee_t_user_type";
	$fdata["GoodName"] = "id_unee_t_user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","id_unee_t_user_type");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_unee_t_user_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.id_unee_t_user_type";

	
	
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


	$tdataExport_and_Import_User_Types["id_unee_t_user_type"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "id_unee_t_user_type";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.syst_created_datetime";

	
	
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


	$tdataExport_and_Import_User_Types["syst_created_datetime"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.creation_system_id";

	
	
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


	$tdataExport_and_Import_User_Types["creation_system_id"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.created_by_id";

	
	
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


	$tdataExport_and_Import_User_Types["created_by_id"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.creation_method";

	
	
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


	$tdataExport_and_Import_User_Types["creation_method"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.syst_updated_datetime";

	
	
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


	$tdataExport_and_Import_User_Types["syst_updated_datetime"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.update_system_id";

	
	
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


	$tdataExport_and_Import_User_Types["update_system_id"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.updated_by_id";

	
	
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


	$tdataExport_and_Import_User_Types["updated_by_id"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.update_method";

	
	
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


	$tdataExport_and_Import_User_Types["update_method"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.organization_id";

	
	
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


	$tdataExport_and_Import_User_Types["organization_id"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "organization_id";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","order");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.`order`";

	
	
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


	$tdataExport_and_Import_User_Types["order"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_obsolete";

	
	
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


	$tdataExport_and_Import_User_Types["is_obsolete"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","designation");
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


	$tdataExport_and_Import_User_Types["designation"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.description";

	
	
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


	$tdataExport_and_Import_User_Types["description"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "description";
//	ut_user_role_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ut_user_role_type_id";
	$fdata["GoodName"] = "ut_user_role_type_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","ut_user_role_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "ut_user_role_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.ut_user_role_type_id";

	
	
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


	$tdataExport_and_Import_User_Types["ut_user_role_type_id"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "ut_user_role_type_id";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","role_type");
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


	$tdataExport_and_Import_User_Types["role_type"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "role_type";
//	is_all_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_all_unit";
	$fdata["GoodName"] = "is_all_unit";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_all_unit");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_all_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_all_unit";

	
	
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


	$tdataExport_and_Import_User_Types["is_all_unit"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_all_unit";
//	is_all_units_in_country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_all_units_in_country";
	$fdata["GoodName"] = "is_all_units_in_country";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_all_units_in_country");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_all_units_in_country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_all_units_in_country";

	
	
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


	$tdataExport_and_Import_User_Types["is_all_units_in_country"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_all_units_in_country";
//	is_all_units_in_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_all_units_in_area";
	$fdata["GoodName"] = "is_all_units_in_area";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_all_units_in_area");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_all_units_in_area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_all_units_in_area";

	
	
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


	$tdataExport_and_Import_User_Types["is_all_units_in_area"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_all_units_in_area";
//	is_all_units_in_level_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_all_units_in_level_1";
	$fdata["GoodName"] = "is_all_units_in_level_1";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_all_units_in_level_1");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_all_units_in_level_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_all_units_in_level_1";

	
	
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


	$tdataExport_and_Import_User_Types["is_all_units_in_level_1"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_all_units_in_level_1";
//	is_all_units_in_level_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "is_all_units_in_level_2";
	$fdata["GoodName"] = "is_all_units_in_level_2";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_all_units_in_level_2");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_all_units_in_level_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_all_units_in_level_2";

	
	
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


	$tdataExport_and_Import_User_Types["is_all_units_in_level_2"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_all_units_in_level_2";
//	is_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "is_occupant";
	$fdata["GoodName"] = "is_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_occupant";

	
	
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


	$tdataExport_and_Import_User_Types["is_occupant"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_occupant";
//	is_public
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_public";
	$fdata["GoodName"] = "is_public";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_public");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_public";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_public";

	
	
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


	$tdataExport_and_Import_User_Types["is_public"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_public";
//	is_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "is_default_assignee";
	$fdata["GoodName"] = "is_default_assignee";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_default_assignee");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_default_assignee";

	
	
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


	$tdataExport_and_Import_User_Types["is_default_assignee"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_default_assignee";
//	is_default_invited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "is_default_invited";
	$fdata["GoodName"] = "is_default_invited";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_default_invited");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default_invited";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_default_invited";

	
	
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


	$tdataExport_and_Import_User_Types["is_default_invited"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_default_invited";
//	is_dashboard_access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "is_dashboard_access";
	$fdata["GoodName"] = "is_dashboard_access";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_dashboard_access");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_dashboard_access";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_dashboard_access";

	
	
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


	$tdataExport_and_Import_User_Types["is_dashboard_access"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_dashboard_access";
//	can_see_role_contractor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "can_see_role_contractor";
	$fdata["GoodName"] = "can_see_role_contractor";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","can_see_role_contractor");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_contractor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.can_see_role_contractor";

	
	
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


	$tdataExport_and_Import_User_Types["can_see_role_contractor"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "can_see_role_contractor";
//	can_see_role_mgt_cny
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "can_see_role_mgt_cny";
	$fdata["GoodName"] = "can_see_role_mgt_cny";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","can_see_role_mgt_cny");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_mgt_cny";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.can_see_role_mgt_cny";

	
	
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


	$tdataExport_and_Import_User_Types["can_see_role_mgt_cny"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "can_see_role_mgt_cny";
//	can_see_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "can_see_occupant";
	$fdata["GoodName"] = "can_see_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","can_see_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.can_see_occupant";

	
	
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


	$tdataExport_and_Import_User_Types["can_see_occupant"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "can_see_occupant";
//	can_see_role_landlord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "can_see_role_landlord";
	$fdata["GoodName"] = "can_see_role_landlord";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","can_see_role_landlord");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_landlord";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.can_see_role_landlord";

	
	
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


	$tdataExport_and_Import_User_Types["can_see_role_landlord"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "can_see_role_landlord";
//	can_see_role_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "can_see_role_agent";
	$fdata["GoodName"] = "can_see_role_agent";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","can_see_role_agent");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.can_see_role_agent";

	
	
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


	$tdataExport_and_Import_User_Types["can_see_role_agent"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "can_see_role_agent";
//	can_see_role_tenant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "can_see_role_tenant";
	$fdata["GoodName"] = "can_see_role_tenant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","can_see_role_tenant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_tenant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.can_see_role_tenant";

	
	
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


	$tdataExport_and_Import_User_Types["can_see_role_tenant"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "can_see_role_tenant";
//	is_assigned_to_case
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "is_assigned_to_case";
	$fdata["GoodName"] = "is_assigned_to_case";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_assigned_to_case");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_assigned_to_case";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_assigned_to_case";

	
	
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


	$tdataExport_and_Import_User_Types["is_assigned_to_case"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_assigned_to_case";
//	is_invited_to_case
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "is_invited_to_case";
	$fdata["GoodName"] = "is_invited_to_case";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_invited_to_case");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_invited_to_case";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_invited_to_case";

	
	
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


	$tdataExport_and_Import_User_Types["is_invited_to_case"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_invited_to_case";
//	is_solution_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "is_solution_updated";
	$fdata["GoodName"] = "is_solution_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_solution_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_solution_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_solution_updated";

	
	
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


	$tdataExport_and_Import_User_Types["is_solution_updated"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_solution_updated";
//	is_next_step_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "is_next_step_updated";
	$fdata["GoodName"] = "is_next_step_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_next_step_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_next_step_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_next_step_updated";

	
	
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


	$tdataExport_and_Import_User_Types["is_next_step_updated"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_next_step_updated";
//	is_deadline_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "is_deadline_updated";
	$fdata["GoodName"] = "is_deadline_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_deadline_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_deadline_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_deadline_updated";

	
	
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


	$tdataExport_and_Import_User_Types["is_deadline_updated"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_deadline_updated";
//	is_case_resolved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "is_case_resolved";
	$fdata["GoodName"] = "is_case_resolved";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_case_resolved");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_resolved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_case_resolved";

	
	
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


	$tdataExport_and_Import_User_Types["is_case_resolved"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_case_resolved";
//	is_case_critical
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "is_case_critical";
	$fdata["GoodName"] = "is_case_critical";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_case_critical");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_critical";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_case_critical";

	
	
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


	$tdataExport_and_Import_User_Types["is_case_critical"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_case_critical";
//	is_case_blocker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "is_case_blocker";
	$fdata["GoodName"] = "is_case_blocker";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_case_blocker");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_blocker";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_case_blocker";

	
	
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


	$tdataExport_and_Import_User_Types["is_case_blocker"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_case_blocker";
//	is_message_from_contractor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "is_message_from_contractor";
	$fdata["GoodName"] = "is_message_from_contractor";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_message_from_contractor");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_contractor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_message_from_contractor";

	
	
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


	$tdataExport_and_Import_User_Types["is_message_from_contractor"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_message_from_contractor";
//	is_message_from_mgt_cny
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "is_message_from_mgt_cny";
	$fdata["GoodName"] = "is_message_from_mgt_cny";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_message_from_mgt_cny");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_mgt_cny";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_message_from_mgt_cny";

	
	
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


	$tdataExport_and_Import_User_Types["is_message_from_mgt_cny"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_message_from_mgt_cny";
//	is_message_from_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "is_message_from_agent";
	$fdata["GoodName"] = "is_message_from_agent";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_message_from_agent");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_message_from_agent";

	
	
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


	$tdataExport_and_Import_User_Types["is_message_from_agent"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_message_from_agent";
//	is_message_from_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "is_message_from_occupant";
	$fdata["GoodName"] = "is_message_from_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_message_from_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_message_from_occupant";

	
	
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


	$tdataExport_and_Import_User_Types["is_message_from_occupant"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_message_from_occupant";
//	is_message_from_ll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "is_message_from_ll";
	$fdata["GoodName"] = "is_message_from_ll";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_message_from_ll");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_ll";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_message_from_ll";

	
	
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


	$tdataExport_and_Import_User_Types["is_message_from_ll"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_message_from_ll";
//	is_message_from_tenant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "is_message_from_tenant";
	$fdata["GoodName"] = "is_message_from_tenant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_message_from_tenant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_tenant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_message_from_tenant";

	
	
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


	$tdataExport_and_Import_User_Types["is_message_from_tenant"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_message_from_tenant";
//	is_any_new_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "is_any_new_message";
	$fdata["GoodName"] = "is_any_new_message";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_any_new_message");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_any_new_message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_any_new_message";

	
	
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


	$tdataExport_and_Import_User_Types["is_any_new_message"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_any_new_message";
//	is_new_ir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "is_new_ir";
	$fdata["GoodName"] = "is_new_ir";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_new_ir");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_new_ir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_new_ir";

	
	
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


	$tdataExport_and_Import_User_Types["is_new_ir"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_new_ir";
//	is_new_inventory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "is_new_inventory";
	$fdata["GoodName"] = "is_new_inventory";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_new_inventory");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_new_inventory";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_new_inventory";

	
	
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


	$tdataExport_and_Import_User_Types["is_new_inventory"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_new_inventory";
//	is_new_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "is_new_item";
	$fdata["GoodName"] = "is_new_item";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_new_item");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_new_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_new_item";

	
	
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


	$tdataExport_and_Import_User_Types["is_new_item"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_new_item";
//	is_item_moved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "is_item_moved";
	$fdata["GoodName"] = "is_item_moved";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_item_moved");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_item_moved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_item_moved";

	
	
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


	$tdataExport_and_Import_User_Types["is_item_moved"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_item_moved";
//	is_item_removed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "is_item_removed";
	$fdata["GoodName"] = "is_item_removed";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_User_Types","is_item_removed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_item_removed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_item_removed";

	
	
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


	$tdataExport_and_Import_User_Types["is_item_removed"] = $fdata;
		$tdataExport_and_Import_User_Types[".searchableFields"][] = "is_item_removed";


$tables_data["Export and Import User Types"]=&$tdataExport_and_Import_User_Types;
$field_labels["Export_and_Import_User_Types"] = &$fieldLabelsExport_and_Import_User_Types;
$fieldToolTips["Export_and_Import_User_Types"] = &$fieldToolTipsExport_and_Import_User_Types;
$placeHolders["Export_and_Import_User_Types"] = &$placeHoldersExport_and_Import_User_Types;
$page_titles["Export_and_Import_User_Types"] = &$pageTitlesExport_and_Import_User_Types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Export and Import User Types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Export and Import User Types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Export_and_Import_User_Types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_user_types.id_unee_t_user_type,  ut_user_types.syst_created_datetime,  ut_user_types.creation_system_id,  ut_user_types.created_by_id,  ut_user_types.creation_method,  ut_user_types.syst_updated_datetime,  ut_user_types.update_system_id,  ut_user_types.updated_by_id,  ut_user_types.update_method,  ut_user_types.organization_id,  ut_user_types.`order`,  ut_user_types.is_obsolete,  ut_user_types.designation,  ut_user_types.description,  ut_user_types.ut_user_role_type_id,  ut_user_role_types.role_type,  ut_user_types.is_all_unit,  ut_user_types.is_all_units_in_country,  ut_user_types.is_all_units_in_area,  ut_user_types.is_all_units_in_level_1,  ut_user_types.is_all_units_in_level_2,  ut_user_types.is_occupant,  ut_user_types.is_public,  ut_user_types.is_default_assignee,  ut_user_types.is_default_invited,  ut_user_types.is_dashboard_access,  ut_user_types.can_see_role_contractor,  ut_user_types.can_see_role_mgt_cny,  ut_user_types.can_see_occupant,  ut_user_types.can_see_role_landlord,  ut_user_types.can_see_role_agent,  ut_user_types.can_see_role_tenant,  ut_user_types.is_assigned_to_case,  ut_user_types.is_invited_to_case,  ut_user_types.is_solution_updated,  ut_user_types.is_next_step_updated,  ut_user_types.is_deadline_updated,  ut_user_types.is_case_resolved,  ut_user_types.is_case_critical,  ut_user_types.is_case_blocker,  ut_user_types.is_message_from_contractor,  ut_user_types.is_message_from_mgt_cny,  ut_user_types.is_message_from_agent,  ut_user_types.is_message_from_occupant,  ut_user_types.is_message_from_ll,  ut_user_types.is_message_from_tenant,  ut_user_types.is_any_new_message,  ut_user_types.is_new_ir,  ut_user_types.is_new_inventory,  ut_user_types.is_new_item,  ut_user_types.is_item_moved,  ut_user_types.is_item_removed";
$proto0["m_strFrom"] = "FROM ut_user_types  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ut_user_role_types.role_type, ut_user_types.is_obsolete, ut_user_types.`order`, ut_user_types.organization_id DESC";
	
					
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
	"m_strName" => "id_unee_t_user_type",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto6["m_sql"] = "ut_user_types.id_unee_t_user_type";
$proto6["m_srcTableName"] = "Export and Import User Types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto8["m_sql"] = "ut_user_types.syst_created_datetime";
$proto8["m_srcTableName"] = "Export and Import User Types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto10["m_sql"] = "ut_user_types.creation_system_id";
$proto10["m_srcTableName"] = "Export and Import User Types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto12["m_sql"] = "ut_user_types.created_by_id";
$proto12["m_srcTableName"] = "Export and Import User Types";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto14["m_sql"] = "ut_user_types.creation_method";
$proto14["m_srcTableName"] = "Export and Import User Types";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto16["m_sql"] = "ut_user_types.syst_updated_datetime";
$proto16["m_srcTableName"] = "Export and Import User Types";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto18["m_sql"] = "ut_user_types.update_system_id";
$proto18["m_srcTableName"] = "Export and Import User Types";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto20["m_sql"] = "ut_user_types.updated_by_id";
$proto20["m_srcTableName"] = "Export and Import User Types";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto22["m_sql"] = "ut_user_types.update_method";
$proto22["m_srcTableName"] = "Export and Import User Types";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto24["m_sql"] = "ut_user_types.organization_id";
$proto24["m_srcTableName"] = "Export and Import User Types";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto26["m_sql"] = "ut_user_types.`order`";
$proto26["m_srcTableName"] = "Export and Import User Types";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto28["m_sql"] = "ut_user_types.is_obsolete";
$proto28["m_srcTableName"] = "Export and Import User Types";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto30["m_sql"] = "ut_user_types.designation";
$proto30["m_srcTableName"] = "Export and Import User Types";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto32["m_sql"] = "ut_user_types.description";
$proto32["m_srcTableName"] = "Export and Import User Types";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto34["m_sql"] = "ut_user_types.ut_user_role_type_id";
$proto34["m_srcTableName"] = "Export and Import User Types";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto36["m_sql"] = "ut_user_role_types.role_type";
$proto36["m_srcTableName"] = "Export and Import User Types";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_all_unit",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto38["m_sql"] = "ut_user_types.is_all_unit";
$proto38["m_srcTableName"] = "Export and Import User Types";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_all_units_in_country",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto40["m_sql"] = "ut_user_types.is_all_units_in_country";
$proto40["m_srcTableName"] = "Export and Import User Types";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_all_units_in_area",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto42["m_sql"] = "ut_user_types.is_all_units_in_area";
$proto42["m_srcTableName"] = "Export and Import User Types";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_all_units_in_level_1",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto44["m_sql"] = "ut_user_types.is_all_units_in_level_1";
$proto44["m_srcTableName"] = "Export and Import User Types";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_all_units_in_level_2",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto46["m_sql"] = "ut_user_types.is_all_units_in_level_2";
$proto46["m_srcTableName"] = "Export and Import User Types";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "is_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto48["m_sql"] = "ut_user_types.is_occupant";
$proto48["m_srcTableName"] = "Export and Import User Types";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_public",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto50["m_sql"] = "ut_user_types.is_public";
$proto50["m_srcTableName"] = "Export and Import User Types";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_assignee",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto52["m_sql"] = "ut_user_types.is_default_assignee";
$proto52["m_srcTableName"] = "Export and Import User Types";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_invited",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto54["m_sql"] = "ut_user_types.is_default_invited";
$proto54["m_srcTableName"] = "Export and Import User Types";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "is_dashboard_access",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto56["m_sql"] = "ut_user_types.is_dashboard_access";
$proto56["m_srcTableName"] = "Export and Import User Types";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_contractor",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto58["m_sql"] = "ut_user_types.can_see_role_contractor";
$proto58["m_srcTableName"] = "Export and Import User Types";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_mgt_cny",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto60["m_sql"] = "ut_user_types.can_see_role_mgt_cny";
$proto60["m_srcTableName"] = "Export and Import User Types";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto62["m_sql"] = "ut_user_types.can_see_occupant";
$proto62["m_srcTableName"] = "Export and Import User Types";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_landlord",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto64["m_sql"] = "ut_user_types.can_see_role_landlord";
$proto64["m_srcTableName"] = "Export and Import User Types";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_agent",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto66["m_sql"] = "ut_user_types.can_see_role_agent";
$proto66["m_srcTableName"] = "Export and Import User Types";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_tenant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto68["m_sql"] = "ut_user_types.can_see_role_tenant";
$proto68["m_srcTableName"] = "Export and Import User Types";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "is_assigned_to_case",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto70["m_sql"] = "ut_user_types.is_assigned_to_case";
$proto70["m_srcTableName"] = "Export and Import User Types";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "is_invited_to_case",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto72["m_sql"] = "ut_user_types.is_invited_to_case";
$proto72["m_srcTableName"] = "Export and Import User Types";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "is_solution_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto74["m_sql"] = "ut_user_types.is_solution_updated";
$proto74["m_srcTableName"] = "Export and Import User Types";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "is_next_step_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto76["m_sql"] = "ut_user_types.is_next_step_updated";
$proto76["m_srcTableName"] = "Export and Import User Types";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "is_deadline_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto78["m_sql"] = "ut_user_types.is_deadline_updated";
$proto78["m_srcTableName"] = "Export and Import User Types";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_resolved",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto80["m_sql"] = "ut_user_types.is_case_resolved";
$proto80["m_srcTableName"] = "Export and Import User Types";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_critical",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto82["m_sql"] = "ut_user_types.is_case_critical";
$proto82["m_srcTableName"] = "Export and Import User Types";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_blocker",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto84["m_sql"] = "ut_user_types.is_case_blocker";
$proto84["m_srcTableName"] = "Export and Import User Types";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_contractor",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto86["m_sql"] = "ut_user_types.is_message_from_contractor";
$proto86["m_srcTableName"] = "Export and Import User Types";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_mgt_cny",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto88["m_sql"] = "ut_user_types.is_message_from_mgt_cny";
$proto88["m_srcTableName"] = "Export and Import User Types";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_agent",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto90["m_sql"] = "ut_user_types.is_message_from_agent";
$proto90["m_srcTableName"] = "Export and Import User Types";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto92["m_sql"] = "ut_user_types.is_message_from_occupant";
$proto92["m_srcTableName"] = "Export and Import User Types";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_ll",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto94["m_sql"] = "ut_user_types.is_message_from_ll";
$proto94["m_srcTableName"] = "Export and Import User Types";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_tenant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto96["m_sql"] = "ut_user_types.is_message_from_tenant";
$proto96["m_srcTableName"] = "Export and Import User Types";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "is_any_new_message",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto98["m_sql"] = "ut_user_types.is_any_new_message";
$proto98["m_srcTableName"] = "Export and Import User Types";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "is_new_ir",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto100["m_sql"] = "ut_user_types.is_new_ir";
$proto100["m_srcTableName"] = "Export and Import User Types";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "is_new_inventory",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto102["m_sql"] = "ut_user_types.is_new_inventory";
$proto102["m_srcTableName"] = "Export and Import User Types";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "is_new_item",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto104["m_sql"] = "ut_user_types.is_new_item";
$proto104["m_srcTableName"] = "Export and Import User Types";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "is_item_moved",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto106["m_sql"] = "ut_user_types.is_item_moved";
$proto106["m_srcTableName"] = "Export and Import User Types";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "is_item_removed",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto108["m_sql"] = "ut_user_types.is_item_removed";
$proto108["m_srcTableName"] = "Export and Import User Types";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "ut_user_types";
$proto111["m_srcTableName"] = "Export and Import User Types";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id_unee_t_user_type";
$proto111["m_columns"][] = "syst_created_datetime";
$proto111["m_columns"][] = "creation_system_id";
$proto111["m_columns"][] = "created_by_id";
$proto111["m_columns"][] = "creation_method";
$proto111["m_columns"][] = "syst_updated_datetime";
$proto111["m_columns"][] = "update_system_id";
$proto111["m_columns"][] = "updated_by_id";
$proto111["m_columns"][] = "update_method";
$proto111["m_columns"][] = "organization_id";
$proto111["m_columns"][] = "order";
$proto111["m_columns"][] = "is_obsolete";
$proto111["m_columns"][] = "designation";
$proto111["m_columns"][] = "description";
$proto111["m_columns"][] = "ut_user_role_type_id";
$proto111["m_columns"][] = "is_super_admin";
$proto111["m_columns"][] = "is_all_unit";
$proto111["m_columns"][] = "is_all_units_in_country";
$proto111["m_columns"][] = "is_all_units_in_area";
$proto111["m_columns"][] = "is_all_units_in_level_1";
$proto111["m_columns"][] = "is_all_units_in_level_2";
$proto111["m_columns"][] = "is_occupant";
$proto111["m_columns"][] = "is_public";
$proto111["m_columns"][] = "is_default_assignee";
$proto111["m_columns"][] = "is_default_invited";
$proto111["m_columns"][] = "is_unit_owner";
$proto111["m_columns"][] = "is_dashboard_access";
$proto111["m_columns"][] = "can_see_role_contractor";
$proto111["m_columns"][] = "can_see_role_mgt_cny";
$proto111["m_columns"][] = "can_see_occupant";
$proto111["m_columns"][] = "can_see_role_landlord";
$proto111["m_columns"][] = "can_see_role_agent";
$proto111["m_columns"][] = "can_see_role_tenant";
$proto111["m_columns"][] = "is_assigned_to_case";
$proto111["m_columns"][] = "is_invited_to_case";
$proto111["m_columns"][] = "is_solution_updated";
$proto111["m_columns"][] = "is_next_step_updated";
$proto111["m_columns"][] = "is_deadline_updated";
$proto111["m_columns"][] = "is_case_resolved";
$proto111["m_columns"][] = "is_case_critical";
$proto111["m_columns"][] = "is_case_blocker";
$proto111["m_columns"][] = "is_message_from_contractor";
$proto111["m_columns"][] = "is_message_from_mgt_cny";
$proto111["m_columns"][] = "is_message_from_agent";
$proto111["m_columns"][] = "is_message_from_occupant";
$proto111["m_columns"][] = "is_message_from_ll";
$proto111["m_columns"][] = "is_message_from_tenant";
$proto111["m_columns"][] = "is_any_new_message";
$proto111["m_columns"][] = "is_new_ir";
$proto111["m_columns"][] = "is_new_inventory";
$proto111["m_columns"][] = "is_new_item";
$proto111["m_columns"][] = "is_item_moved";
$proto111["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "ut_user_types";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "Export and Import User Types";
$proto112=array();
$proto112["m_sql"] = "";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "";
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
$proto115["m_strName"] = "ut_user_role_types";
$proto115["m_srcTableName"] = "Export and Import User Types";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_role_type";
$proto115["m_columns"][] = "syst_created_datetime";
$proto115["m_columns"][] = "creation_system_id";
$proto115["m_columns"][] = "created_by_id";
$proto115["m_columns"][] = "syst_updated_datetime";
$proto115["m_columns"][] = "update_system_id";
$proto115["m_columns"][] = "updated_by_id";
$proto115["m_columns"][] = "order";
$proto115["m_columns"][] = "is_obsolete";
$proto115["m_columns"][] = "role_type";
$proto115["m_columns"][] = "bz_description";
$proto115["m_columns"][] = "description";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "Export and Import User Types";
$proto116=array();
$proto116["m_sql"] = "ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto118=array();
						$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto118["m_column"]=$obj;
$proto118["m_bAsc"] = 1;
$proto118["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto118);

$proto0["m_orderby"][]=$obj;					
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto120["m_column"]=$obj;
$proto120["m_bAsc"] = 1;
$proto120["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto120);

$proto0["m_orderby"][]=$obj;					
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto122["m_column"]=$obj;
$proto122["m_bAsc"] = 1;
$proto122["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto122);

$proto0["m_orderby"][]=$obj;					
												$proto124=array();
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import User Types"
));

$proto124["m_column"]=$obj;
$proto124["m_bAsc"] = 0;
$proto124["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto124);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Export and Import User Types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Export_and_Import_User_Types = createSqlQuery_Export_and_Import_User_Types();


	
					
;

																																																				

$tdataExport_and_Import_User_Types[".sqlquery"] = $queryData_Export_and_Import_User_Types;

include_once(getabspath("include/Export_and_Import_User_Types_events.php"));
$tableEvents["Export and Import User Types"] = new eventclass_Export_and_Import_User_Types;
$tdataExport_and_Import_User_Types[".hasEvents"] = true;

?>