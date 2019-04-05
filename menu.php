<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");


require_once("include/dbcommon.php");
require_once('classes/menupage.php');


Security::processLogoutRequest();
if(!isLogged())
{
	HeaderRedirect("login");
	return;
}


if (($_SESSION["MyURL"] == "") || (!isLoggedAsGuest())) {
	Security::saveRedirectURL();
}




$layout = new TLayout("menu_bootstrap1", "OfficeOffice", "MobileOffice");
$layout->version = 3;
	$layout->bootstrapTheme = "default";
		$layout->customCssPageName = "_menu";
$layout->blocks["top"] = array();
$layout->containers["menu"] = array();
$layout->container_properties["menu"] = array(  );
$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"hdr" );
$layout->containers["hdr"] = array();
$layout->container_properties["hdr"] = array(  );
$layout->containers["hdr"][] = array("name"=>"logo",
	"block"=>"logo_block", "substyle"=>1  );

$layout->containers["hdr"][] = array("name"=>"bsnavbarcollapse",
	"block"=>"collapse_block", "substyle"=>1  );

$layout->skins["hdr"] = "";


$layout->containers["menu"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"menu_1" );
$layout->containers["menu_1"] = array();
$layout->container_properties["menu_1"] = array(  );
$layout->containers["menu_1"][] = array("name"=>"hmenu",
	"block"=>"menu_block", "substyle"=>1  );

$layout->containers["menu_1"][] = array("name"=>"wrapper",
	"block"=>"", "substyle"=>1 , "container"=>"login" );
$layout->containers["login"] = array();
$layout->container_properties["login"] = array(  );
$layout->containers["login"][] = array("name"=>"morebutton",
	"block"=>"more_list", "substyle"=>1  );

$layout->containers["login"][] = array("name"=>"loggedas",
	"block"=>"security_block", "substyle"=>1  );

$layout->skins["login"] = "";


$layout->skins["menu_1"] = "";


$layout->skins["menu"] = "";

$layout->blocks["top"][] = "menu";
$layout->containers["center"] = array();
$layout->container_properties["center"] = array(  );
$layout->containers["center"][] = array("name"=>"welcome",
	"block"=>"", "substyle"=>1  );

$layout->skins["center"] = "";

$layout->blocks["top"][] = "center";
$page_layouts["menu"] = $layout;




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

$xt = new Xtempl();

//array of params for classes
$params = array();
$params["id"] = postvalue("id"); 
$params["xt"] = &$xt;
$params["tName"] = GLOBAL_PAGES;
$params["pageType"] = PAGE_MENU;
$params["isGroupSecurity"] = $isGroupSecurity;
$params["needSearchClauseObj"] = false;

$pageObject = new MenuPage($params);
$pageObject->init();

$pageObject->process();
?>