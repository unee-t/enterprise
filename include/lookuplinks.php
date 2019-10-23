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

		if( !isset( $lookupTableLinks["person_statuses"] ) ) {
			$lookupTableLinks["person_statuses"] = array();
		}
		if( !isset( $lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"] )) {
			$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"] = array();
		}
		$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "person_status_id", "page" => "edit");
		if( !isset( $lookupTableLinks["person_statuses"] ) ) {
			$lookupTableLinks["person_statuses"] = array();
		}
		if( !isset( $lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"] )) {
			$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"] = array();
		}
		$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"]["add"] = array("table" => "Manage Unee-T Users", "field" => "person_status_id", "page" => "add");
		if( !isset( $lookupTableLinks["person_statuses"] ) ) {
			$lookupTableLinks["person_statuses"] = array();
		}
		if( !isset( $lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"] )) {
			$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"] = array();
		}
		$lookupTableLinks["person_statuses"]["Manage_Unee_T_Users.person_status_id"]["search"] = array("table" => "Manage Unee-T Users", "field" => "person_status_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["Manage_Unee_T_Users.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["Manage_Unee_T_Users.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["Manage_Unee_T_Users.unee_t_user_type_id"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["person_genders"] ) ) {
			$lookupTableLinks["person_genders"] = array();
		}
		if( !isset( $lookupTableLinks["person_genders"]["Manage_Unee_T_Users.gender"] )) {
			$lookupTableLinks["person_genders"]["Manage_Unee_T_Users.gender"] = array();
		}
		$lookupTableLinks["person_genders"]["Manage_Unee_T_Users.gender"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "gender", "page" => "edit");
		if( !isset( $lookupTableLinks["person_salutations"] ) ) {
			$lookupTableLinks["person_salutations"] = array();
		}
		if( !isset( $lookupTableLinks["person_salutations"]["Manage_Unee_T_Users.salutation_id"] )) {
			$lookupTableLinks["person_salutations"]["Manage_Unee_T_Users.salutation_id"] = array();
		}
		$lookupTableLinks["person_salutations"]["Manage_Unee_T_Users.salutation_id"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "salutation_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"]["edit"] = array("table" => "Manage Unee-T Users", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"]["add"] = array("table" => "Manage Unee-T Users", "field" => "country_code", "page" => "add");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Unee_T_Users.country_code"]["search"] = array("table" => "Manage Unee-T Users", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["uneet_enterprise_users.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["uneet_enterprise_users.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["uneet_enterprise_users.organization_id"]["edit"] = array("table" => "uneet_enterprise_users", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["admin_members.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["admin_members.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["admin_members.organization_id"]["edit"] = array("table" => "admin_members", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["admin_users.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["admin_users.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["admin_users.organization_id"]["edit"] = array("table" => "admin_users", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["uneet_enterprise_organizations.default_role_type_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["uneet_enterprise_organizations.default_role_type_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["uneet_enterprise_organizations.default_role_type_id"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_role_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["uneet_enterprise_organizations.default_sot_id"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["uneet_enterprise_organizations.default_sot_id"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["uneet_enterprise_organizations.default_sot_id"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_sot_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_area"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_area"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_area"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_area", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_building"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_building"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_building"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_building", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_unit"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_unit"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["uneet_enterprise_organizations.default_unit"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_unit", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_mgt_cny"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_mgt_cny"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_mgt_cny"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_assignee_mgt_cny", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_agent"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_agent"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_agent"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_assignee_agent", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_landlord"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_landlord"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_landlord"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_assignee_landlord", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_tenant"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_tenant"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["uneet_enterprise_organizations.default_assignee_tenant"]["edit"] = array("table" => "uneet_enterprise_organizations", "field" => "default_assignee_tenant", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["ut_user_types.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["ut_user_types.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["ut_user_types.organization_id"]["edit"] = array("table" => "ut_user_types", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["ut_user_types.ut_user_role_type_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["ut_user_types.ut_user_role_type_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["ut_user_types.ut_user_role_type_id"]["edit"] = array("table" => "ut_user_types", "field" => "ut_user_role_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Unit_Names.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Unit_Names.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Unit_Names.unee_t_unit_type"]["edit"] = array("table" => "Manage Unit Names", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_property_types"] ) ) {
			$lookupTableLinks["ut_property_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_property_types"]["Manage_Unit_Names.external_property_type_id"] )) {
			$lookupTableLinks["ut_property_types"]["Manage_Unit_Names.external_property_type_id"] = array();
		}
		$lookupTableLinks["ut_property_types"]["Manage_Unit_Names.external_property_type_id"]["search"] = array("table" => "Manage Unit Names", "field" => "external_property_type_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"]["edit"] = array("table" => "Manage User Types", "field" => "ut_user_role_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"]["add"] = array("table" => "Manage User Types", "field" => "ut_user_role_type_id", "page" => "add");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Manage_User_Types.ut_user_role_type_id"]["search"] = array("table" => "Manage User Types", "field" => "ut_user_role_type_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"]["add"] = array("table" => "Manage Areas", "field" => "external_system_id", "page" => "add");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_system_id"]["search"] = array("table" => "Manage Areas", "field" => "external_system_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"]["add"] = array("table" => "Manage Areas", "field" => "external_table", "page" => "add");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Manage_Areas.external_table"]["search"] = array("table" => "Manage Areas", "field" => "external_table", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"]["edit"] = array("table" => "Manage Areas", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Areas.country_code"]["add"] = array("table" => "Manage Areas", "field" => "country_code", "page" => "add");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Areas.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Areas.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Areas.mgt_cny_default_assignee"]["edit"] = array("table" => "Manage Areas", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["Manage_Areas.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["Manage_Areas.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["Manage_Areas.landlord_default_assignee"]["edit"] = array("table" => "Manage Areas", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["Manage_Areas.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["Manage_Areas.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["Manage_Areas.tenant_default_assignee"]["edit"] = array("table" => "Manage Areas", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Areas.agent_default_assignee"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Areas.agent_default_assignee"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Areas.agent_default_assignee"]["edit"] = array("table" => "Manage Areas", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Buildings.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Buildings.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Buildings.country_code"]["edit"] = array("table" => "Manage Buildings", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["Manage Areas"] ) ) {
			$lookupTableLinks["Manage Areas"] = array();
		}
		if( !isset( $lookupTableLinks["Manage Areas"]["Manage_Buildings.area_id"] )) {
			$lookupTableLinks["Manage Areas"]["Manage_Buildings.area_id"] = array();
		}
		$lookupTableLinks["Manage Areas"]["Manage_Buildings.area_id"]["edit"] = array("table" => "Manage Buildings", "field" => "area_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"]["edit"] = array("table" => "Manage Buildings", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"]["add"] = array("table" => "Manage Buildings", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Buildings.unee_t_unit_type"]["search"] = array("table" => "Manage Buildings", "field" => "unee_t_unit_type", "page" => "search");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.mgt_cny_default_assignee"]["edit"] = array("table" => "Manage Buildings", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.landlord_default_assignee"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.landlord_default_assignee"]["edit"] = array("table" => "Manage Buildings", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.tenant_default_assignee"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.tenant_default_assignee"]["edit"] = array("table" => "Manage Buildings", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.agent_default_assignee"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.agent_default_assignee"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Buildings.agent_default_assignee"]["edit"] = array("table" => "Manage Buildings", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["property_groups_areas.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["property_groups_areas.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["property_groups_areas.organization_id"]["edit"] = array("table" => "property_groups_areas", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.mgt_cny_default_assignee"]["edit"] = array("table" => "property_groups_areas", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.landlord_default_assignee"]["edit"] = array("table" => "property_groups_areas", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.tenant_default_assignee"]["edit"] = array("table" => "property_groups_areas", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_groups_areas.agent_default_assignee"]["edit"] = array("table" => "property_groups_areas", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["ut_external_sot_for_unee_t_objects.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["ut_external_sot_for_unee_t_objects.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["ut_external_sot_for_unee_t_objects.organization_id"]["edit"] = array("table" => "ut_external_sot_for_unee_t_objects", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Units.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Units.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Units.country_code"]["search"] = array("table" => "Manage Units", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["external_property_groups_areas"] ) ) {
			$lookupTableLinks["external_property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_groups_areas"]["Manage_Units.area_id"] )) {
			$lookupTableLinks["external_property_groups_areas"]["Manage_Units.area_id"] = array();
		}
		$lookupTableLinks["external_property_groups_areas"]["Manage_Units.area_id"]["search"] = array("table" => "Manage Units", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["Manage Buildings"] ) ) {
			$lookupTableLinks["Manage Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Manage Buildings"]["Manage_Units.building_system_id"] )) {
			$lookupTableLinks["Manage Buildings"]["Manage_Units.building_system_id"] = array();
		}
		$lookupTableLinks["Manage Buildings"]["Manage_Units.building_system_id"]["edit"] = array("table" => "Manage Units", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Manage Buildings"] ) ) {
			$lookupTableLinks["Manage Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Manage Buildings"]["Manage_Units.building_system_id"] )) {
			$lookupTableLinks["Manage Buildings"]["Manage_Units.building_system_id"] = array();
		}
		$lookupTableLinks["Manage Buildings"]["Manage_Units.building_system_id"]["add"] = array("table" => "Manage Units", "field" => "building_system_id", "page" => "add");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["Manage_Units.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["Manage_Units.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["Manage_Units.building_system_id"]["search"] = array("table" => "Manage Units", "field" => "building_system_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"]["edit"] = array("table" => "Manage Units", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"]["add"] = array("table" => "Manage Units", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Units.unee_t_unit_type"]["search"] = array("table" => "Manage Units", "field" => "unee_t_unit_type", "page" => "search");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Units.mgt_cny_default_assignee_l2p"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Units.mgt_cny_default_assignee_l2p"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Units.mgt_cny_default_assignee_l2p"]["edit"] = array("table" => "Manage Units", "field" => "mgt_cny_default_assignee_l2p", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Units.landlord_default_assignee_l2p"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Units.landlord_default_assignee_l2p"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Units.landlord_default_assignee_l2p"]["edit"] = array("table" => "Manage Units", "field" => "landlord_default_assignee_l2p", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Units.tenant_default_assignee_l2p"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Units.tenant_default_assignee_l2p"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Units.tenant_default_assignee_l2p"]["edit"] = array("table" => "Manage Units", "field" => "tenant_default_assignee_l2p", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible assignees"] ) ) {
			$lookupTableLinks["Search list of possible assignees"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible assignees"]["Manage_Units.agent_default_assignee_l2p"] )) {
			$lookupTableLinks["Search list of possible assignees"]["Manage_Units.agent_default_assignee_l2p"] = array();
		}
		$lookupTableLinks["Search list of possible assignees"]["Manage_Units.agent_default_assignee_l2p"]["edit"] = array("table" => "Manage Units", "field" => "agent_default_assignee_l2p", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.created_by_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.created_by_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.created_by_id"]["edit"] = array("table" => "external_property_groups_areas", "field" => "created_by_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.updated_by_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.updated_by_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["external_property_groups_areas.updated_by_id"]["edit"] = array("table" => "external_property_groups_areas", "field" => "updated_by_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.mgt_cny_default_assignee"]["edit"] = array("table" => "external_property_groups_areas", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.landlord_default_assignee"]["edit"] = array("table" => "external_property_groups_areas", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.tenant_default_assignee"]["edit"] = array("table" => "external_property_groups_areas", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_groups_areas.agent_default_assignee"]["edit"] = array("table" => "external_property_groups_areas", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.created_by_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.created_by_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.created_by_id"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "created_by_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.updated_by_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.updated_by_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_1_buildings.updated_by_id"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "updated_by_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["external_property_level_1_buildings.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["external_property_level_1_buildings.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["external_property_level_1_buildings.unee_t_unit_type"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.mgt_cny_default_assignee"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.landlord_default_assignee"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.tenant_default_assignee"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_1_buildings.agent_default_assignee"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["external_property_groups_areas"] ) ) {
			$lookupTableLinks["external_property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_groups_areas"]["external_property_level_1_buildings.area_id"] )) {
			$lookupTableLinks["external_property_groups_areas"]["external_property_level_1_buildings.area_id"] = array();
		}
		$lookupTableLinks["external_property_groups_areas"]["external_property_level_1_buildings.area_id"]["edit"] = array("table" => "external_property_level_1_buildings", "field" => "area_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Manage_Rooms.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Manage_Rooms.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Manage_Rooms.country_code"]["search"] = array("table" => "Manage Rooms", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["external_property_groups_areas"] ) ) {
			$lookupTableLinks["external_property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_groups_areas"]["Manage_Rooms.area_id"] )) {
			$lookupTableLinks["external_property_groups_areas"]["Manage_Rooms.area_id"] = array();
		}
		$lookupTableLinks["external_property_groups_areas"]["Manage_Rooms.area_id"]["search"] = array("table" => "Manage Rooms", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["Search All Units"] ) ) {
			$lookupTableLinks["Search All Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search All Units"]["Manage_Rooms.system_id_unit"] )) {
			$lookupTableLinks["Search All Units"]["Manage_Rooms.system_id_unit"] = array();
		}
		$lookupTableLinks["Search All Units"]["Manage_Rooms.system_id_unit"]["edit"] = array("table" => "Manage Rooms", "field" => "system_id_unit", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"]["edit"] = array("table" => "Manage Rooms", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"]["add"] = array("table" => "Manage Rooms", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["Manage_Rooms.unee_t_unit_type"]["search"] = array("table" => "Manage Rooms", "field" => "unee_t_unit_type", "page" => "search");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Areas_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Areas_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Areas_to_User.unee_t_mefe_user_id"]["add"] = array("table" => "Assign Areas to User", "field" => "unee_t_mefe_user_id", "page" => "add");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Areas_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Areas_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Areas_to_User.unee_t_mefe_user_id"]["search"] = array("table" => "Assign Areas to User", "field" => "unee_t_mefe_user_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["Assign_Areas_to_User.unee_t_area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["Assign_Areas_to_User.unee_t_area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["Assign_Areas_to_User.unee_t_area_id"]["edit"] = array("table" => "Assign Areas to User", "field" => "unee_t_area_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Assign_Areas_to_User.unee_t_role_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Assign_Areas_to_User.unee_t_role_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Assign_Areas_to_User.unee_t_role_id"]["edit"] = array("table" => "Assign Areas to User", "field" => "unee_t_role_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["Assign_Areas_to_User.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["Assign_Areas_to_User.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["Assign_Areas_to_User.unee_t_user_type_id"]["edit"] = array("table" => "Assign Areas to User", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Buildings_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Buildings_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Buildings_to_User.unee_t_mefe_user_id"]["add"] = array("table" => "Assign Buildings to User", "field" => "unee_t_mefe_user_id", "page" => "add");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Buildings_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Buildings_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Buildings_to_User.unee_t_mefe_user_id"]["search"] = array("table" => "Assign Buildings to User", "field" => "unee_t_mefe_user_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["Assign_Buildings_to_User.area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["Assign_Buildings_to_User.area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["Assign_Buildings_to_User.area_id"]["search"] = array("table" => "Assign Buildings to User", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["Assign_Buildings_to_User.unee_t_level_1_id"] )) {
			$lookupTableLinks["Search Buildings"]["Assign_Buildings_to_User.unee_t_level_1_id"] = array();
		}
		$lookupTableLinks["Search Buildings"]["Assign_Buildings_to_User.unee_t_level_1_id"]["edit"] = array("table" => "Assign Buildings to User", "field" => "unee_t_level_1_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Assign_Buildings_to_User.unee_t_role_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Assign_Buildings_to_User.unee_t_role_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Assign_Buildings_to_User.unee_t_role_id"]["edit"] = array("table" => "Assign Buildings to User", "field" => "unee_t_role_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["Assign_Buildings_to_User.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["Assign_Buildings_to_User.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["Assign_Buildings_to_User.unee_t_user_type_id"]["edit"] = array("table" => "Assign Buildings to User", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Assign_Buildings_to_User.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Assign_Buildings_to_User.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Assign_Buildings_to_User.country_code"]["search"] = array("table" => "Assign Buildings to User", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["property_level_1_buildings.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["property_level_1_buildings.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["property_level_1_buildings.organization_id"]["edit"] = array("table" => "property_level_1_buildings", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["property_level_1_buildings.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["property_level_1_buildings.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["property_level_1_buildings.unee_t_unit_type"]["edit"] = array("table" => "property_level_1_buildings", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.mgt_cny_default_assignee"]["edit"] = array("table" => "property_level_1_buildings", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.landlord_default_assignee"]["edit"] = array("table" => "property_level_1_buildings", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.tenant_default_assignee"]["edit"] = array("table" => "property_level_1_buildings", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_1_buildings.agent_default_assignee"]["edit"] = array("table" => "property_level_1_buildings", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["property_level_1_buildings.area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["property_level_1_buildings.area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["property_level_1_buildings.area_id"]["edit"] = array("table" => "property_level_1_buildings", "field" => "area_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Units_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Units_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Units_to_User.unee_t_mefe_user_id"]["add"] = array("table" => "Assign Units to User", "field" => "unee_t_mefe_user_id", "page" => "add");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Units_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Units_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Units_to_User.unee_t_mefe_user_id"]["search"] = array("table" => "Assign Units to User", "field" => "unee_t_mefe_user_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["Assign_Units_to_User.area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["Assign_Units_to_User.area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["Assign_Units_to_User.area_id"]["search"] = array("table" => "Assign Units to User", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_level_1_buildings"] ) ) {
			$lookupTableLinks["property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_1_buildings"]["Assign_Units_to_User.id_building"] )) {
			$lookupTableLinks["property_level_1_buildings"]["Assign_Units_to_User.id_building"] = array();
		}
		$lookupTableLinks["property_level_1_buildings"]["Assign_Units_to_User.id_building"]["search"] = array("table" => "Assign Units to User", "field" => "id_building", "page" => "search");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["Assign_Units_to_User.unee_t_level_2_id"] )) {
			$lookupTableLinks["Search Units"]["Assign_Units_to_User.unee_t_level_2_id"] = array();
		}
		$lookupTableLinks["Search Units"]["Assign_Units_to_User.unee_t_level_2_id"]["edit"] = array("table" => "Assign Units to User", "field" => "unee_t_level_2_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Units_to_User.person_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Units_to_User.person_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Units_to_User.person_id"]["search"] = array("table" => "Assign Units to User", "field" => "person_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Assign_Units_to_User.unee_t_role_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Assign_Units_to_User.unee_t_role_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Assign_Units_to_User.unee_t_role_id"]["edit"] = array("table" => "Assign Units to User", "field" => "unee_t_role_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["Assign_Units_to_User.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["Assign_Units_to_User.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["Assign_Units_to_User.unee_t_user_type_id"]["edit"] = array("table" => "Assign Units to User", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Assign_Units_to_User.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Assign_Units_to_User.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Assign_Units_to_User.country_code"]["search"] = array("table" => "Assign Units to User", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["property_level_2_units.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["property_level_2_units.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["property_level_2_units.organization_id"]["edit"] = array("table" => "property_level_2_units", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["property_level_2_units.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["property_level_2_units.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["property_level_2_units.unee_t_unit_type"]["edit"] = array("table" => "property_level_2_units", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.mgt_cny_default_assignee"]["edit"] = array("table" => "property_level_2_units", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.landlord_default_assignee"]["edit"] = array("table" => "property_level_2_units", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.tenant_default_assignee"]["edit"] = array("table" => "property_level_2_units", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_2_units.agent_default_assignee"]["edit"] = array("table" => "property_level_2_units", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["property_level_1_buildings"] ) ) {
			$lookupTableLinks["property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_1_buildings"]["property_level_2_units.building_system_id"] )) {
			$lookupTableLinks["property_level_1_buildings"]["property_level_2_units.building_system_id"] = array();
		}
		$lookupTableLinks["property_level_1_buildings"]["property_level_2_units.building_system_id"]["edit"] = array("table" => "property_level_2_units", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Rooms_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Rooms_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Rooms_to_User.unee_t_mefe_user_id"]["add"] = array("table" => "Assign Rooms to User", "field" => "unee_t_mefe_user_id", "page" => "add");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Rooms_to_User.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Rooms_to_User.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Rooms_to_User.unee_t_mefe_user_id"]["search"] = array("table" => "Assign Rooms to User", "field" => "unee_t_mefe_user_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["Assign_Rooms_to_User.area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["Assign_Rooms_to_User.area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["Assign_Rooms_to_User.area_id"]["search"] = array("table" => "Assign Rooms to User", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_level_1_buildings"] ) ) {
			$lookupTableLinks["property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_1_buildings"]["Assign_Rooms_to_User.id_building"] )) {
			$lookupTableLinks["property_level_1_buildings"]["Assign_Rooms_to_User.id_building"] = array();
		}
		$lookupTableLinks["property_level_1_buildings"]["Assign_Rooms_to_User.id_building"]["search"] = array("table" => "Assign Rooms to User", "field" => "id_building", "page" => "search");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["Assign_Rooms_to_User.system_id_unit"] )) {
			$lookupTableLinks["Search Units"]["Assign_Rooms_to_User.system_id_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["Assign_Rooms_to_User.system_id_unit"]["search"] = array("table" => "Assign Rooms to User", "field" => "system_id_unit", "page" => "search");
		if( !isset( $lookupTableLinks["Search Rooms"] ) ) {
			$lookupTableLinks["Search Rooms"] = array();
		}
		if( !isset( $lookupTableLinks["Search Rooms"]["Assign_Rooms_to_User.unee_t_level_3_id"] )) {
			$lookupTableLinks["Search Rooms"]["Assign_Rooms_to_User.unee_t_level_3_id"] = array();
		}
		$lookupTableLinks["Search Rooms"]["Assign_Rooms_to_User.unee_t_level_3_id"]["edit"] = array("table" => "Assign Rooms to User", "field" => "unee_t_level_3_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Rooms_to_User.person_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Rooms_to_User.person_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Rooms_to_User.person_id"]["search"] = array("table" => "Assign Rooms to User", "field" => "person_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Assign_Rooms_to_User.unee_t_role_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Assign_Rooms_to_User.unee_t_role_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Assign_Rooms_to_User.unee_t_role_id"]["edit"] = array("table" => "Assign Rooms to User", "field" => "unee_t_role_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["Assign_Rooms_to_User.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["Assign_Rooms_to_User.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["Assign_Rooms_to_User.unee_t_user_type_id"]["edit"] = array("table" => "Assign Rooms to User", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Assign_Rooms_to_User.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Assign_Rooms_to_User.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Assign_Rooms_to_User.country_code"]["search"] = array("table" => "Assign Rooms to User", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["property_level_3_rooms.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["property_level_3_rooms.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["property_level_3_rooms.organization_id"]["edit"] = array("table" => "property_level_3_rooms", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["property_level_3_rooms.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["property_level_3_rooms.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["property_level_3_rooms.unee_t_unit_type"]["edit"] = array("table" => "property_level_3_rooms", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["property_types_level_3_rooms"] ) ) {
			$lookupTableLinks["property_types_level_3_rooms"] = array();
		}
		if( !isset( $lookupTableLinks["property_types_level_3_rooms"]["property_level_3_rooms.room_type_id"] )) {
			$lookupTableLinks["property_types_level_3_rooms"]["property_level_3_rooms.room_type_id"] = array();
		}
		$lookupTableLinks["property_types_level_3_rooms"]["property_level_3_rooms.room_type_id"]["edit"] = array("table" => "property_level_3_rooms", "field" => "room_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.mgt_cny_default_assignee"]["edit"] = array("table" => "property_level_3_rooms", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.landlord_default_assignee"]["edit"] = array("table" => "property_level_3_rooms", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.tenant_default_assignee"]["edit"] = array("table" => "property_level_3_rooms", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["property_level_3_rooms.agent_default_assignee"]["edit"] = array("table" => "property_level_3_rooms", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["property_level_2_units"] ) ) {
			$lookupTableLinks["property_level_2_units"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_2_units"]["property_level_3_rooms.system_id_unit"] )) {
			$lookupTableLinks["property_level_2_units"]["property_level_3_rooms.system_id_unit"] = array();
		}
		$lookupTableLinks["property_level_2_units"]["property_level_3_rooms.system_id_unit"]["edit"] = array("table" => "property_level_3_rooms", "field" => "system_id_unit", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["Search_Units.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["Search_Units.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["Search_Units.organization_id"]["edit"] = array("table" => "Search Units", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_level_1_buildings"] ) ) {
			$lookupTableLinks["property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_1_buildings"]["Search_Units.building_system_id"] )) {
			$lookupTableLinks["property_level_1_buildings"]["Search_Units.building_system_id"] = array();
		}
		$lookupTableLinks["property_level_1_buildings"]["Search_Units.building_system_id"]["edit"] = array("table" => "Search Units", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_2_units.created_by_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_2_units.created_by_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_2_units.created_by_id"]["edit"] = array("table" => "external_property_level_2_units", "field" => "created_by_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_2_units.updated_by_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_2_units.updated_by_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["external_property_level_2_units.updated_by_id"]["edit"] = array("table" => "external_property_level_2_units", "field" => "updated_by_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["external_property_level_2_units.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["external_property_level_2_units.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["external_property_level_2_units.unee_t_unit_type"]["edit"] = array("table" => "external_property_level_2_units", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.mgt_cny_default_assignee"]["edit"] = array("table" => "external_property_level_2_units", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.landlord_default_assignee"]["edit"] = array("table" => "external_property_level_2_units", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.tenant_default_assignee"]["edit"] = array("table" => "external_property_level_2_units", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["external_property_level_2_units.agent_default_assignee"]["edit"] = array("table" => "external_property_level_2_units", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["external_property_level_2_units.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["external_property_level_2_units.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["external_property_level_2_units.building_system_id"]["edit"] = array("table" => "external_property_level_2_units", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_level_1_buildings"] ) ) {
			$lookupTableLinks["property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_1_buildings"]["Search_All_Units.building_system_id"] )) {
			$lookupTableLinks["property_level_1_buildings"]["Search_All_Units.building_system_id"] = array();
		}
		$lookupTableLinks["property_level_1_buildings"]["Search_All_Units.building_system_id"]["edit"] = array("table" => "Search All Units", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["ut_map_external_source_units.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["ut_map_external_source_units.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["ut_map_external_source_units.organization_id"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["ut_map_external_source_units.area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["ut_map_external_source_units.area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["ut_map_external_source_units.area_id"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "area_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_areas"] ) ) {
			$lookupTableLinks["ut_map_external_source_areas"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_areas"]["ut_map_external_source_units.mefe_area_id"] )) {
			$lookupTableLinks["ut_map_external_source_areas"]["ut_map_external_source_units.mefe_area_id"] = array();
		}
		$lookupTableLinks["ut_map_external_source_areas"]["ut_map_external_source_units.mefe_area_id"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "mefe_area_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["ut_map_external_source_units.mefe_unit_id_parent"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["ut_map_external_source_units.mefe_unit_id_parent"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["ut_map_external_source_units.mefe_unit_id_parent"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "mefe_unit_id_parent", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["ut_map_external_source_units.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["ut_map_external_source_units.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["ut_map_external_source_units.unee_t_unit_type"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_property_types"] ) ) {
			$lookupTableLinks["ut_property_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_property_types"]["ut_map_external_source_units.external_property_type_id"] )) {
			$lookupTableLinks["ut_property_types"]["ut_map_external_source_units.external_property_type_id"] = array();
		}
		$lookupTableLinks["ut_property_types"]["ut_map_external_source_units.external_property_type_id"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "external_property_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.mgt_cny_default_assignee"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.landlord_default_assignee"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.tenant_default_assignee"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_units.agent_default_assignee"]["edit"] = array("table" => "ut_map_external_source_units", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["Search_Buildings.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["Search_Buildings.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["Search_Buildings.organization_id"]["edit"] = array("table" => "Search Buildings", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_system_id"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_system_id"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_system_id"]["add"] = array("table" => "Export and Import Areas", "field" => "external_system_id", "page" => "add");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_system_id"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_system_id"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_system_id"]["search"] = array("table" => "Export and Import Areas", "field" => "external_system_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_table"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_table"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_table"]["add"] = array("table" => "Export and Import Areas", "field" => "external_table", "page" => "add");
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"] ) ) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"] = array();
		}
		if( !isset( $lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_table"] )) {
			$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_table"] = array();
		}
		$lookupTableLinks["ut_external_sot_for_unee_t_objects"]["Export_and_Import_Areas.external_table"]["search"] = array("table" => "Export and Import Areas", "field" => "external_table", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Export_and_Import_Areas.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Export_and_Import_Areas.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Export_and_Import_Areas.country_code"]["edit"] = array("table" => "Export and Import Areas", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Export_and_Import_Areas.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Export_and_Import_Areas.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Export_and_Import_Areas.country_code"]["add"] = array("table" => "Export and Import Areas", "field" => "country_code", "page" => "add");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Rooms.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Rooms.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Rooms.unee_t_mefe_user_id"]["add"] = array("table" => "Assign Rooms", "field" => "unee_t_mefe_user_id", "page" => "add");
		if( !isset( $lookupTableLinks["Search Users"] ) ) {
			$lookupTableLinks["Search Users"] = array();
		}
		if( !isset( $lookupTableLinks["Search Users"]["Assign_Rooms.unee_t_mefe_user_id"] )) {
			$lookupTableLinks["Search Users"]["Assign_Rooms.unee_t_mefe_user_id"] = array();
		}
		$lookupTableLinks["Search Users"]["Assign_Rooms.unee_t_mefe_user_id"]["search"] = array("table" => "Assign Rooms", "field" => "unee_t_mefe_user_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_groups_areas"] ) ) {
			$lookupTableLinks["property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_areas"]["Assign_Rooms.area_id"] )) {
			$lookupTableLinks["property_groups_areas"]["Assign_Rooms.area_id"] = array();
		}
		$lookupTableLinks["property_groups_areas"]["Assign_Rooms.area_id"]["search"] = array("table" => "Assign Rooms", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["property_level_1_buildings"] ) ) {
			$lookupTableLinks["property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["property_level_1_buildings"]["Assign_Rooms.id_building"] )) {
			$lookupTableLinks["property_level_1_buildings"]["Assign_Rooms.id_building"] = array();
		}
		$lookupTableLinks["property_level_1_buildings"]["Assign_Rooms.id_building"]["search"] = array("table" => "Assign Rooms", "field" => "id_building", "page" => "search");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["Assign_Rooms.system_id_unit"] )) {
			$lookupTableLinks["Search Units"]["Assign_Rooms.system_id_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["Assign_Rooms.system_id_unit"]["search"] = array("table" => "Assign Rooms", "field" => "system_id_unit", "page" => "search");
		if( !isset( $lookupTableLinks["Search Rooms"] ) ) {
			$lookupTableLinks["Search Rooms"] = array();
		}
		if( !isset( $lookupTableLinks["Search Rooms"]["Assign_Rooms.unee_t_level_3_id"] )) {
			$lookupTableLinks["Search Rooms"]["Assign_Rooms.unee_t_level_3_id"] = array();
		}
		$lookupTableLinks["Search Rooms"]["Assign_Rooms.unee_t_level_3_id"]["edit"] = array("table" => "Assign Rooms", "field" => "unee_t_level_3_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["Assign_Rooms.unee_t_role_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["Assign_Rooms.unee_t_role_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["Assign_Rooms.unee_t_role_id"]["edit"] = array("table" => "Assign Rooms", "field" => "unee_t_role_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["Assign_Rooms.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["Assign_Rooms.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["Assign_Rooms.unee_t_user_type_id"]["edit"] = array("table" => "Assign Rooms", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["Assign_Rooms.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["Assign_Rooms.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["Assign_Rooms.country_code"]["search"] = array("table" => "Assign Rooms", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["ut_map_external_source_users.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["ut_map_external_source_users.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["ut_map_external_source_users.organization_id"]["edit"] = array("table" => "ut_map_external_source_users", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["persons"] ) ) {
			$lookupTableLinks["persons"] = array();
		}
		if( !isset( $lookupTableLinks["persons"]["ut_map_external_source_users.person_id"] )) {
			$lookupTableLinks["persons"]["ut_map_external_source_users.person_id"] = array();
		}
		$lookupTableLinks["persons"]["ut_map_external_source_users.person_id"]["edit"] = array("table" => "ut_map_external_source_users", "field" => "person_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_users.mefe_user_id_parent"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_users.mefe_user_id_parent"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["ut_map_external_source_users.mefe_user_id_parent"]["edit"] = array("table" => "ut_map_external_source_users", "field" => "mefe_user_id_parent", "page" => "edit");
		if( !isset( $lookupTableLinks["List of Countries"] ) ) {
			$lookupTableLinks["List of Countries"] = array();
		}
		if( !isset( $lookupTableLinks["List of Countries"]["unee_t_enterprise_account.country_code"] )) {
			$lookupTableLinks["List of Countries"]["unee_t_enterprise_account.country_code"] = array();
		}
		$lookupTableLinks["List of Countries"]["unee_t_enterprise_account.country_code"]["edit"] = array("table" => "Unee-T Enterprise Account", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["Sources of Truth"] ) ) {
			$lookupTableLinks["Sources of Truth"] = array();
		}
		if( !isset( $lookupTableLinks["Sources of Truth"]["unee_t_enterprise_account.default_sot_id"] )) {
			$lookupTableLinks["Sources of Truth"]["unee_t_enterprise_account.default_sot_id"] = array();
		}
		$lookupTableLinks["Sources of Truth"]["unee_t_enterprise_account.default_sot_id"]["edit"] = array("table" => "Unee-T Enterprise Account", "field" => "default_sot_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Manage Areas"] ) ) {
			$lookupTableLinks["Manage Areas"] = array();
		}
		if( !isset( $lookupTableLinks["Manage Areas"]["unee_t_enterprise_account.default_area"] )) {
			$lookupTableLinks["Manage Areas"]["unee_t_enterprise_account.default_area"] = array();
		}
		$lookupTableLinks["Manage Areas"]["unee_t_enterprise_account.default_area"]["edit"] = array("table" => "Unee-T Enterprise Account", "field" => "default_area", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["unee_t_enterprise_account.default_area"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["unee_t_enterprise_account.default_area"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["unee_t_enterprise_account.default_area"]["add"] = array("table" => "Unee-T Enterprise Account", "field" => "default_area", "page" => "add");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["unee_t_enterprise_account.default_area"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["unee_t_enterprise_account.default_area"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["unee_t_enterprise_account.default_area"]["search"] = array("table" => "Unee-T Enterprise Account", "field" => "default_area", "page" => "search");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"] )) {
			$lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"] = array();
		}
		$lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"]["edit"] = array("table" => "Unee-T Enterprise Account", "field" => "default_building", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"] )) {
			$lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"] = array();
		}
		$lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"]["add"] = array("table" => "Unee-T Enterprise Account", "field" => "default_building", "page" => "add");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"] )) {
			$lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"] = array();
		}
		$lookupTableLinks["Search Buildings"]["unee_t_enterprise_account.default_building"]["search"] = array("table" => "Unee-T Enterprise Account", "field" => "default_building", "page" => "search");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"] )) {
			$lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"]["edit"] = array("table" => "Unee-T Enterprise Account", "field" => "default_unit", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"] )) {
			$lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"]["add"] = array("table" => "Unee-T Enterprise Account", "field" => "default_unit", "page" => "add");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"] )) {
			$lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["unee_t_enterprise_account.default_unit"]["search"] = array("table" => "Unee-T Enterprise Account", "field" => "default_unit", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["superadmin___manage_unte_admins.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["superadmin___manage_unte_admins.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["superadmin___manage_unte_admins.organization_id"]["edit"] = array("table" => "SuperAdmin - manage UNTE admins", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"]["edit"] = array("table" => "Super Admin - Manage Organization", "field" => "default_area", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"]["add"] = array("table" => "Super Admin - Manage Organization", "field" => "default_area", "page" => "add");
		if( !isset( $lookupTableLinks["ut_map_external_source_units"] ) ) {
			$lookupTableLinks["ut_map_external_source_units"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"] )) {
			$lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"] = array();
		}
		$lookupTableLinks["ut_map_external_source_units"]["super_admin___manage_organization.default_area"]["search"] = array("table" => "Super Admin - Manage Organization", "field" => "default_area", "page" => "search");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"] )) {
			$lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"] = array();
		}
		$lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"]["edit"] = array("table" => "Super Admin - Manage Organization", "field" => "default_building", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"] )) {
			$lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"] = array();
		}
		$lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"]["add"] = array("table" => "Super Admin - Manage Organization", "field" => "default_building", "page" => "add");
		if( !isset( $lookupTableLinks["Search Buildings"] ) ) {
			$lookupTableLinks["Search Buildings"] = array();
		}
		if( !isset( $lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"] )) {
			$lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"] = array();
		}
		$lookupTableLinks["Search Buildings"]["super_admin___manage_organization.default_building"]["search"] = array("table" => "Super Admin - Manage Organization", "field" => "default_building", "page" => "search");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"] )) {
			$lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"]["edit"] = array("table" => "Super Admin - Manage Organization", "field" => "default_unit", "page" => "edit");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"] )) {
			$lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"]["add"] = array("table" => "Super Admin - Manage Organization", "field" => "default_unit", "page" => "add");
		if( !isset( $lookupTableLinks["Search Units"] ) ) {
			$lookupTableLinks["Search Units"] = array();
		}
		if( !isset( $lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"] )) {
			$lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"] = array();
		}
		$lookupTableLinks["Search Units"]["super_admin___manage_organization.default_unit"]["search"] = array("table" => "Super Admin - Manage Organization", "field" => "default_unit", "page" => "search");
		if( !isset( $lookupTableLinks["ut_user_role_types"] ) ) {
			$lookupTableLinks["ut_user_role_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_role_types"]["super_admin___manage_organization.default_role_type_id"] )) {
			$lookupTableLinks["ut_user_role_types"]["super_admin___manage_organization.default_role_type_id"] = array();
		}
		$lookupTableLinks["ut_user_role_types"]["super_admin___manage_organization.default_role_type_id"]["edit"] = array("table" => "Super Admin - Manage Organization", "field" => "default_role_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["List of Countries"] ) ) {
			$lookupTableLinks["List of Countries"] = array();
		}
		if( !isset( $lookupTableLinks["List of Countries"]["super_admin___manage_organization.country_code"] )) {
			$lookupTableLinks["List of Countries"]["super_admin___manage_organization.country_code"] = array();
		}
		$lookupTableLinks["List of Countries"]["super_admin___manage_organization.country_code"]["edit"] = array("table" => "Super Admin - Manage Organization", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["person_statuses"] ) ) {
			$lookupTableLinks["person_statuses"] = array();
		}
		if( !isset( $lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"] )) {
			$lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"] = array();
		}
		$lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"]["edit"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "person_status_id", "page" => "edit");
		if( !isset( $lookupTableLinks["person_statuses"] ) ) {
			$lookupTableLinks["person_statuses"] = array();
		}
		if( !isset( $lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"] )) {
			$lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"] = array();
		}
		$lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"]["add"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "person_status_id", "page" => "add");
		if( !isset( $lookupTableLinks["person_statuses"] ) ) {
			$lookupTableLinks["person_statuses"] = array();
		}
		if( !isset( $lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"] )) {
			$lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"] = array();
		}
		$lookupTableLinks["person_statuses"]["super_admin___manage_mefe_master_user1.person_status_id"]["search"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "person_status_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_user_types"] ) ) {
			$lookupTableLinks["ut_user_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_user_types"]["super_admin___manage_mefe_master_user1.unee_t_user_type_id"] )) {
			$lookupTableLinks["ut_user_types"]["super_admin___manage_mefe_master_user1.unee_t_user_type_id"] = array();
		}
		$lookupTableLinks["ut_user_types"]["super_admin___manage_mefe_master_user1.unee_t_user_type_id"]["edit"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "unee_t_user_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"]["edit"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "country_code", "page" => "edit");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"]["add"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "country_code", "page" => "add");
		if( !isset( $lookupTableLinks["property_groups_countries"] ) ) {
			$lookupTableLinks["property_groups_countries"] = array();
		}
		if( !isset( $lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"] )) {
			$lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"] = array();
		}
		$lookupTableLinks["property_groups_countries"]["super_admin___manage_mefe_master_user1.country_code"]["search"] = array("table" => "Super Admin - Manage MEFE Master User", "field" => "country_code", "page" => "search");
		if( !isset( $lookupTableLinks["uneet_enterprise_uggroups"] ) ) {
			$lookupTableLinks["uneet_enterprise_uggroups"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_uggroups"]["user_permissions.GroupID"] )) {
			$lookupTableLinks["uneet_enterprise_uggroups"]["user_permissions.GroupID"] = array();
		}
		$lookupTableLinks["uneet_enterprise_uggroups"]["user_permissions.GroupID"]["edit"] = array("table" => "User Permissions", "field" => "GroupID", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["sources_of_truth.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["sources_of_truth.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["sources_of_truth.organization_id"]["edit"] = array("table" => "Sources of Truth", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Manage Areas"] ) ) {
			$lookupTableLinks["Manage Areas"] = array();
		}
		if( !isset( $lookupTableLinks["Manage Areas"]["organization_default_area.default_area"] )) {
			$lookupTableLinks["Manage Areas"]["organization_default_area.default_area"] = array();
		}
		$lookupTableLinks["Manage Areas"]["organization_default_area.default_area"]["edit"] = array("table" => "Organization Default Area", "field" => "default_area", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible properties"] ) ) {
			$lookupTableLinks["Search list of possible properties"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible properties"]["organization_default_l1p.default_building"] )) {
			$lookupTableLinks["Search list of possible properties"]["organization_default_l1p.default_building"] = array();
		}
		$lookupTableLinks["Search list of possible properties"]["organization_default_l1p.default_building"]["edit"] = array("table" => "Organization Default L1P", "field" => "default_building", "page" => "edit");
		if( !isset( $lookupTableLinks["Search list of possible properties"] ) ) {
			$lookupTableLinks["Search list of possible properties"] = array();
		}
		if( !isset( $lookupTableLinks["Search list of possible properties"]["organization_default_l2p.default_unit"] )) {
			$lookupTableLinks["Search list of possible properties"]["organization_default_l2p.default_unit"] = array();
		}
		$lookupTableLinks["Search list of possible properties"]["organization_default_l2p.default_unit"]["edit"] = array("table" => "Organization Default L2P", "field" => "default_unit", "page" => "edit");
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"] ) ) {
			$lookupTableLinks["uneet_enterprise_organizations"] = array();
		}
		if( !isset( $lookupTableLinks["uneet_enterprise_organizations"]["search_areas.organization_id"] )) {
			$lookupTableLinks["uneet_enterprise_organizations"]["search_areas.organization_id"] = array();
		}
		$lookupTableLinks["uneet_enterprise_organizations"]["search_areas.organization_id"]["edit"] = array("table" => "Search Areas", "field" => "organization_id", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["search_areas.mgt_cny_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["search_areas.mgt_cny_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["search_areas.mgt_cny_default_assignee"]["edit"] = array("table" => "Search Areas", "field" => "mgt_cny_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["search_areas.landlord_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["search_areas.landlord_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["search_areas.landlord_default_assignee"]["edit"] = array("table" => "Search Areas", "field" => "landlord_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["search_areas.tenant_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["search_areas.tenant_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["search_areas.tenant_default_assignee"]["edit"] = array("table" => "Search Areas", "field" => "tenant_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_map_external_source_users"] ) ) {
			$lookupTableLinks["ut_map_external_source_users"] = array();
		}
		if( !isset( $lookupTableLinks["ut_map_external_source_users"]["search_areas.agent_default_assignee"] )) {
			$lookupTableLinks["ut_map_external_source_users"]["search_areas.agent_default_assignee"] = array();
		}
		$lookupTableLinks["ut_map_external_source_users"]["search_areas.agent_default_assignee"]["edit"] = array("table" => "Search Areas", "field" => "agent_default_assignee", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"]["edit"] = array("table" => "L1P Export", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"]["add"] = array("table" => "L1P Export", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l1p_export.unee_t_unit_type"]["search"] = array("table" => "L1P Export", "field" => "unee_t_unit_type", "page" => "search");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"]["edit"] = array("table" => "L1P Import", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"]["add"] = array("table" => "L1P Import", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l1p_import.unee_t_unit_type"]["search"] = array("table" => "L1P Import", "field" => "unee_t_unit_type", "page" => "search");
		if( !isset( $lookupTableLinks["external_property_groups_areas"] ) ) {
			$lookupTableLinks["external_property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_groups_areas"]["l2p_export.area_id"] )) {
			$lookupTableLinks["external_property_groups_areas"]["l2p_export.area_id"] = array();
		}
		$lookupTableLinks["external_property_groups_areas"]["l2p_export.area_id"]["search"] = array("table" => "L2P Export", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"]["edit"] = array("table" => "L2P Export", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"]["add"] = array("table" => "L2P Export", "field" => "building_system_id", "page" => "add");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["l2p_export.building_system_id"]["search"] = array("table" => "L2P Export", "field" => "building_system_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l2p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l2p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l2p_export.unee_t_unit_type"]["edit"] = array("table" => "L2P Export", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["external_property_groups_areas"] ) ) {
			$lookupTableLinks["external_property_groups_areas"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_groups_areas"]["l2p_import.area_id"] )) {
			$lookupTableLinks["external_property_groups_areas"]["l2p_import.area_id"] = array();
		}
		$lookupTableLinks["external_property_groups_areas"]["l2p_import.area_id"]["search"] = array("table" => "L2P Import", "field" => "area_id", "page" => "search");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"]["edit"] = array("table" => "L2P Import", "field" => "building_system_id", "page" => "edit");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"]["add"] = array("table" => "L2P Import", "field" => "building_system_id", "page" => "add");
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"] ) ) {
			$lookupTableLinks["external_property_level_1_buildings"] = array();
		}
		if( !isset( $lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"] )) {
			$lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"] = array();
		}
		$lookupTableLinks["external_property_level_1_buildings"]["l2p_import.building_system_id"]["search"] = array("table" => "L2P Import", "field" => "building_system_id", "page" => "search");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l2p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l2p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l2p_import.unee_t_unit_type"]["edit"] = array("table" => "L2P Import", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"]["edit"] = array("table" => "L3P Export", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"]["add"] = array("table" => "L3P Export", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l3p_export.unee_t_unit_type"]["search"] = array("table" => "L3P Export", "field" => "unee_t_unit_type", "page" => "search");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"]["edit"] = array("table" => "L3P Import", "field" => "unee_t_unit_type", "page" => "edit");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"]["add"] = array("table" => "L3P Import", "field" => "unee_t_unit_type", "page" => "add");
		if( !isset( $lookupTableLinks["ut_unit_types"] ) ) {
			$lookupTableLinks["ut_unit_types"] = array();
		}
		if( !isset( $lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"] )) {
			$lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"] = array();
		}
		$lookupTableLinks["ut_unit_types"]["l3p_import.unee_t_unit_type"]["search"] = array("table" => "L3P Import", "field" => "unee_t_unit_type", "page" => "search");
}

?>