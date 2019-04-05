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
}

?>