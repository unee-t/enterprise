<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if( !isLogged() || isLoggedAsGuest() ) 
{
	Security::tryRelogin();
}

if( !isLogged() )
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}





require_once('include/xtempl.php');
require_once(getabspath("classes/cipherer.php"));

include_once(getabspath("include/Manage_Unee_T_Users_events.php"));
$tableEvents["Manage Unee-T Users"] = new eventclass_Manage_Unee_T_Users;
include_once(getabspath("include/admin_users_events.php"));
$tableEvents["admin_users"] = new eventclass_admin_users;
include_once(getabspath("include/Manage_Users___Unee_T_Enterprise_UI_events.php"));
$tableEvents["Manage Users - Unee-T Enterprise UI"] = new eventclass_Manage_Users___Unee_T_Enterprise_UI;
include_once(getabspath("include/Manage_Unit_Names_events.php"));
$tableEvents["Manage Unit Names"] = new eventclass_Manage_Unit_Names;
include_once(getabspath("include/Manage_User_Types_events.php"));
$tableEvents["Manage User Types"] = new eventclass_Manage_User_Types;
include_once(getabspath("include/Manage_User_Default_Visibility_events.php"));
$tableEvents["Manage User Default Visibility"] = new eventclass_Manage_User_Default_Visibility;
include_once(getabspath("include/Manage_User_Default_Notifications_events.php"));
$tableEvents["Manage User Default Notifications"] = new eventclass_Manage_User_Default_Notifications;
include_once(getabspath("include/Manage_Areas_events.php"));
$tableEvents["Manage Areas"] = new eventclass_Manage_Areas;
include_once(getabspath("include/Manage_Buildings_events.php"));
$tableEvents["Manage Buildings"] = new eventclass_Manage_Buildings;
include_once(getabspath("include/Manage_Units_events.php"));
$tableEvents["Manage Units"] = new eventclass_Manage_Units;
include_once(getabspath("include/Manage_Rooms_events.php"));
$tableEvents["Manage Rooms"] = new eventclass_Manage_Rooms;
include_once(getabspath("include/Assign_Areas_to_User_events.php"));
$tableEvents["Assign Areas to User"] = new eventclass_Assign_Areas_to_User;
include_once(getabspath("include/Assign_Buildings_to_User_events.php"));
$tableEvents["Assign Buildings to User"] = new eventclass_Assign_Buildings_to_User;
include_once(getabspath("include/Assign_Units_to_User_events.php"));
$tableEvents["Assign Units to User"] = new eventclass_Assign_Units_to_User;
include_once(getabspath("include/Assign_Rooms_to_User_events.php"));
$tableEvents["Assign Rooms to User"] = new eventclass_Assign_Rooms_to_User;
include_once(getabspath("include/Export_and_Import_Areas_events.php"));
$tableEvents["Export and Import Areas"] = new eventclass_Export_and_Import_Areas;
include_once(getabspath("include/Export_and_Import_User_Types_events.php"));
$tableEvents["Export and Import User Types"] = new eventclass_Export_and_Import_User_Types;
include_once(getabspath("include/Assign_Rooms_events.php"));
$tableEvents["Assign Rooms"] = new eventclass_Assign_Rooms;
include_once(getabspath("include/unee_t_enterprise_account_events.php"));
$tableEvents["Unee-T Enterprise Account"] = new eventclass_unee_t_enterprise_account;
include_once(getabspath("include/superadmin___manage_unte_admins_events.php"));
$tableEvents["SuperAdmin - manage UNTE admins"] = new eventclass_superadmin___manage_unte_admins;
include_once(getabspath("include/super_admin___manage_organization_events.php"));
$tableEvents["Super Admin - Manage Organization"] = new eventclass_super_admin___manage_organization;
include_once(getabspath("include/super_admin___manage_api_keys_events.php"));
$tableEvents["Super Admin - Manage API Keys"] = new eventclass_super_admin___manage_api_keys;
include_once(getabspath("include/super_admin___manage_mefe_master_user1_events.php"));
$tableEvents["Super Admin - Manage MEFE Master User"] = new eventclass_super_admin___manage_mefe_master_user1;
include_once(getabspath("include/super_admin___default_sot_for_unee_t_objects_events.php"));
$tableEvents["Super Admin - Default sot for Unee-T objects"] = new eventclass_super_admin___default_sot_for_unee_t_objects;
include_once(getabspath("include/sources_of_truth_events.php"));
$tableEvents["Sources of Truth"] = new eventclass_sources_of_truth;
include_once(getabspath("include/organization_default_area_events.php"));
$tableEvents["Organization Default Area"] = new eventclass_organization_default_area;
include_once(getabspath("include/organization_default_l1p_events.php"));
$tableEvents["Organization Default L1P"] = new eventclass_organization_default_l1p;
include_once(getabspath("include/organization_default_l2p_events.php"));
$tableEvents["Organization Default L2P"] = new eventclass_organization_default_l2p;
include_once(getabspath("include/l1p_export_events.php"));
$tableEvents["L1P Export"] = new eventclass_l1p_export;
include_once(getabspath("include/l1p_import_events.php"));
$tableEvents["L1P Import"] = new eventclass_l1p_import;
include_once(getabspath("include/l2p_export_events.php"));
$tableEvents["L2P Export"] = new eventclass_l2p_export;
include_once(getabspath("include/l2p_import_events.php"));
$tableEvents["L2P Import"] = new eventclass_l2p_import;
include_once(getabspath("include/l3p_export_events.php"));
$tableEvents["L3P Export"] = new eventclass_l3p_export;
include_once(getabspath("include/l3p_import_events.php"));
$tableEvents["L3P Import"] = new eventclass_l3p_import;
include_once(getabspath("include/users_export_events.php"));
$tableEvents["Users Export"] = new eventclass_users_export;
include_once(getabspath("include/users_import_events.php"));
$tableEvents["Users Import"] = new eventclass_users_import;

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue_number("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;
$params["pageName"] = postvalue("page"); 

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>