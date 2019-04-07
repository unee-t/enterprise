<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "person_status_id", "page" => "edit");
	$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"]["add"] = array("table" => "Manage Unee-T Users", "field" => "person_status_id", "page" => "add");
	$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"]["search"] = array("table" => "Manage Unee-T Users", "field" => "person_status_id", "page" => "search");
	$lookupTableLinks["ut_user_types"]["Manage_Unee_T_Users.unee_t_user_type_id"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "unee_t_user_type_id", "page" => "edit");
	$lookupTableLinks["person_genders"]["Manage_Unee_T_Users.gender"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "gender", "page" => "edit");
	$lookupTableLinks["person_salutations"]["Manage_Unee_T_Users.salutation_id"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "salutation_id", "page" => "edit");
	$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "country_code", "page" => "edit");
	$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"]["add"] = array("table" => "Manage Unee-T Users", "field" => "country_code", "page" => "add");
	$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"]["search"] = array("table" => "Manage Unee-T Users", "field" => "country_code", "page" => "search");
	$lookupTableLinks["uneet_enterprise_organizations"]["uneet_enterprise_users.organization_id"]["edit"] = array("table" => "uneet_enterprise_users", "field" => "organization_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["admin_members.organization_id"]["edit"] = array("table" => "admin_members", "field" => "organization_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["admin_users.organization_id"]["edit"] = array("table" => "admin_users", "field" => "organization_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["ut_user_types.organization_id"]["edit"] = array("table" => "ut_user_types", "field" => "organization_id", "page" => "edit");
	$lookupTableLinks["ut_user_role_types"]["ut_user_types.ut_user_role_type_id"]["edit"] = array("table" => "ut_user_types", "field" => "ut_user_role_type_id", "page" => "edit");
	$lookupTableLinks["ut_unit_types"]["Manage_Unit_Names.unee_t_unit_type"]["edit"] = array("table" => "Manage Unit Names", "field" => "unee_t_unit_type", "page" => "edit");
	$lookupTableLinks["ut_property_types"]["Manage_Unit_Names.external_property_type_id"]["search"] = array("table" => "Manage Unit Names", "field" => "external_property_type_id", "page" => "search");
	$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"]["edit"] = array("table" => "Manage User Types", "field" => "ut_user_role_type_id", "page" => "edit");
	$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"]["add"] = array("table" => "Manage User Types", "field" => "ut_user_role_type_id", "page" => "add");
	$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"]["search"] = array("table" => "Manage User Types", "field" => "ut_user_role_type_id", "page" => "search");
	$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"]["edit"] = array("table" => "Manage Areas", "field" => "external_system_id", "page" => "edit");
	$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"]["edit"] = array("table" => "Manage Areas", "field" => "external_table", "page" => "edit");
	$lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"]["edit"] = array("table" => "Manage Areas", "field" => "country_code", "page" => "edit");
	$lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"]["add"] = array("table" => "Manage Areas", "field" => "country_code", "page" => "add");
	$lookupTableLinks["property_groups_areas"]["Manage_Buildings.area_id"]["edit"] = array("table" => "Manage Buildings", "field" => "area_id", "page" => "edit");
	$lookupTableLinks["property_groups_areas"]["Manage_Buildings.area_id"]["add"] = array("table" => "Manage Buildings", "field" => "area_id", "page" => "add");
	$lookupTableLinks["property_groups_areas"]["Manage_Buildings.area_id"]["search"] = array("table" => "Manage Buildings", "field" => "area_id", "page" => "search");
	$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"]["edit"] = array("table" => "Manage Buildings", "field" => "unee_t_unit_type", "page" => "edit");
	$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"]["add"] = array("table" => "Manage Buildings", "field" => "unee_t_unit_type", "page" => "add");
	$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"]["search"] = array("table" => "Manage Buildings", "field" => "unee_t_unit_type", "page" => "search");
	$lookupTableLinks["uneet_enterprise_organizations"]["property_groups_areas.organization_id"]["edit"] = array("table" => "property_groups_areas", "field" => "organization_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["ut_external_sot_for_unee_t_objects.organization_id"]["edit"] = array("table" => "ut_external_sot_for_unee_t_objects", "field" => "organization_id", "page" => "edit");
	$lookupTableLinks["property_groups_countries"]["Manage_Units.country_code"]["search"] = array("table" => "Manage Units", "field" => "country_code", "page" => "search");
	$lookupTableLinks["external_property_groups_areas"]["Manage_Units.area_id"]["search"] = array("table" => "Manage Units", "field" => "area_id", "page" => "search");
	$lookupTableLinks["external_property_level_1_buildings"]["Manage_Units.building_system_id"]["edit"] = array("table" => "Manage Units", "field" => "building_system_id", "page" => "edit");
	$lookupTableLinks["external_property_level_1_buildings"]["Manage_Units.building_system_id"]["add"] = array("table" => "Manage Units", "field" => "building_system_id", "page" => "add");
	$lookupTableLinks["external_property_level_1_buildings"]["Manage_Units.building_system_id"]["search"] = array("table" => "Manage Units", "field" => "building_system_id", "page" => "search");
	$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"]["edit"] = array("table" => "Manage Units", "field" => "unee_t_unit_type", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.created_by_id"]["edit"] = array("table" => "external_property_groups_areas", "field" => "created_by_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.updated_by_id"]["edit"] = array("table" => "external_property_groups_areas", "field" => "updated_by_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.created_by_id"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "created_by_id", "page" => "edit");
	$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.updated_by_id"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "updated_by_id", "page" => "edit");
	$lookupTableLinks["external_property_groups_areas"]["external_property_level_1_buildings.area_id"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "area_id", "page" => "edit");
	$lookupTableLinks["ut_unit_types"]["external_property_level_1_buildings.unee_t_unit_type"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "unee_t_unit_type", "page" => "edit");
}

?>