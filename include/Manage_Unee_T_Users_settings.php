<?php




$tdataManage_Unee_T_Users = array();
$tdataManage_Unee_T_Users[".searchableFields"] = array();
	$tdataManage_Unee_T_Users[".truncateText"] = true;
	$tdataManage_Unee_T_Users[".NumberOfChars"] = 80;
	$tdataManage_Unee_T_Users[".ShortName"] = "Manage_Unee_T_Users";
	$tdataManage_Unee_T_Users[".OwnerID"] = "created_by_id";
	$tdataManage_Unee_T_Users[".OriginalTable"] = "external_persons";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataManage_Unee_T_Users[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataManage_Unee_T_Users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_Unee_T_Users = array();
$fieldToolTipsManage_Unee_T_Users = array();
$pageTitlesManage_Unee_T_Users = array();
$placeHoldersManage_Unee_T_Users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_Unee_T_Users["English"] = array();
	$fieldToolTipsManage_Unee_T_Users["English"] = array();
	$placeHoldersManage_Unee_T_Users["English"] = array();
	$pageTitlesManage_Unee_T_Users["English"] = array();
	$fieldLabelsManage_Unee_T_Users["English"]["id_person"] = "Id Person";
	$fieldToolTipsManage_Unee_T_Users["English"]["id_person"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["id_person"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["external_id"] = "External Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["external_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["external_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["external_system"] = "External System";
	$fieldToolTipsManage_Unee_T_Users["English"]["external_system"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["external_system"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["external_table"] = "External Table";
	$fieldToolTipsManage_Unee_T_Users["English"]["external_table"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["external_table"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsManage_Unee_T_Users["English"]["syst_created_datetime"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["syst_created_datetime"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["creation_system_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["creation_system_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["created_by_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["created_by_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_Unee_T_Users["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["update_system_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["update_system_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["updated_by_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["updated_by_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["person_status_id"] = "Status";
	$fieldToolTipsManage_Unee_T_Users["English"]["person_status_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["person_status_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["dupe_id"] = "Dupe Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["dupe_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["dupe_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["handler_id"] = "Handler Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["handler_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["handler_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["is_unee_t_account_needed"] = "Create in Unee-T";
	$fieldToolTipsManage_Unee_T_Users["English"]["is_unee_t_account_needed"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["is_unee_t_account_needed"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["unee_t_user_type_id"] = "Unee T User Type";
	$fieldToolTipsManage_Unee_T_Users["English"]["unee_t_user_type_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["country_code"] = "Country Code";
	$fieldToolTipsManage_Unee_T_Users["English"]["country_code"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["country_code"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["gender"] = "Gender";
	$fieldToolTipsManage_Unee_T_Users["English"]["gender"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["gender"] = "0";
	$fieldLabelsManage_Unee_T_Users["English"]["salutation_id"] = "Salutation";
	$fieldToolTipsManage_Unee_T_Users["English"]["salutation_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["salutation_id"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["given_name"] = "Given Name";
	$fieldToolTipsManage_Unee_T_Users["English"]["given_name"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["given_name"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsManage_Unee_T_Users["English"]["middle_name"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["middle_name"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["family_name"] = "Family Name";
	$fieldToolTipsManage_Unee_T_Users["English"]["family_name"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["family_name"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["date_of_birth"] = "Date Of Birth";
	$fieldToolTipsManage_Unee_T_Users["English"]["date_of_birth"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["date_of_birth"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["alias"] = "Alias";
	$fieldToolTipsManage_Unee_T_Users["English"]["alias"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["alias"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["job_title"] = "Job Title";
	$fieldToolTipsManage_Unee_T_Users["English"]["job_title"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["job_title"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["organization"] = "Organization";
	$fieldToolTipsManage_Unee_T_Users["English"]["organization"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["organization"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["email"] = "Email";
	$fieldToolTipsManage_Unee_T_Users["English"]["email"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["email"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["tel_1"] = "Tel 1";
	$fieldToolTipsManage_Unee_T_Users["English"]["tel_1"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["tel_1"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["tel_2"] = "Tel 2";
	$fieldToolTipsManage_Unee_T_Users["English"]["tel_2"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["tel_2"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["whatsapp"] = "Whatsapp";
	$fieldToolTipsManage_Unee_T_Users["English"]["whatsapp"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["whatsapp"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["linkedin"] = "Linkedin";
	$fieldToolTipsManage_Unee_T_Users["English"]["linkedin"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["linkedin"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["facebook"] = "Facebook";
	$fieldToolTipsManage_Unee_T_Users["English"]["facebook"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["facebook"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["adr1"] = "Adr1";
	$fieldToolTipsManage_Unee_T_Users["English"]["adr1"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["adr1"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["adr2"] = "Adr2";
	$fieldToolTipsManage_Unee_T_Users["English"]["adr2"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["adr2"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["adr3"] = "Adr3";
	$fieldToolTipsManage_Unee_T_Users["English"]["adr3"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["adr3"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["City"] = "City";
	$fieldToolTipsManage_Unee_T_Users["English"]["City"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["City"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["zip_postcode"] = "Zip Postcode";
	$fieldToolTipsManage_Unee_T_Users["English"]["zip_postcode"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["zip_postcode"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["region_or_state"] = "Region Or State";
	$fieldToolTipsManage_Unee_T_Users["English"]["region_or_state"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["region_or_state"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["country"] = "Country";
	$fieldToolTipsManage_Unee_T_Users["English"]["country"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["country"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["person_status"] = "Status";
	$fieldToolTipsManage_Unee_T_Users["English"]["person_status"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["person_status"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["person_gender"] = "Gender";
	$fieldToolTipsManage_Unee_T_Users["English"]["person_gender"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["person_gender"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["salutation"] = "Salutation";
	$fieldToolTipsManage_Unee_T_Users["English"]["salutation"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["salutation"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsManage_Unee_T_Users["English"]["creation_method"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["creation_method"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_Unee_T_Users["English"]["update_method"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["update_method"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["designation"] = "Designation";
	$fieldToolTipsManage_Unee_T_Users["English"]["designation"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["designation"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["uneet_created_datetime"] = "Created On";
	$fieldToolTipsManage_Unee_T_Users["English"]["uneet_created_datetime"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["uneet_created_datetime"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["role_type"] = "Role Type";
	$fieldToolTipsManage_Unee_T_Users["English"]["role_type"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["role_type"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["unee_t_mefe_user_api_key"] = "User Api Key";
	$fieldToolTipsManage_Unee_T_Users["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["unee_t_mefe_user_api_key"] = "";
	$fieldLabelsManage_Unee_T_Users["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipsManage_Unee_T_Users["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersManage_Unee_T_Users["English"]["unee_t_mefe_user_id"] = "";
	if (count($fieldToolTipsManage_Unee_T_Users["English"]))
		$tdataManage_Unee_T_Users[".isUseToolTips"] = true;
}


	$tdataManage_Unee_T_Users[".NCSearch"] = true;



$tdataManage_Unee_T_Users[".shortTableName"] = "Manage_Unee_T_Users";
$tdataManage_Unee_T_Users[".nSecOptions"] = 1;

$tdataManage_Unee_T_Users[".mainTableOwnerID"] = "created_by_id";
$tdataManage_Unee_T_Users[".entityType"] = 1;

$tdataManage_Unee_T_Users[".strOriginalTableName"] = "external_persons";

		 



$tdataManage_Unee_T_Users[".showAddInPopup"] = false;

$tdataManage_Unee_T_Users[".showEditInPopup"] = false;

$tdataManage_Unee_T_Users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_Unee_T_Users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_Unee_T_Users[".listAjax"] = true;
//	temporary
$tdataManage_Unee_T_Users[".listAjax"] = false;

	$tdataManage_Unee_T_Users[".audit"] = true;

	$tdataManage_Unee_T_Users[".locking"] = false;


$pages = $tdataManage_Unee_T_Users[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_Unee_T_Users[".edit"] = true;
	$tdataManage_Unee_T_Users[".afterEditAction"] = 1;
	$tdataManage_Unee_T_Users[".closePopupAfterEdit"] = 1;
	$tdataManage_Unee_T_Users[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_Unee_T_Users[".add"] = true;
$tdataManage_Unee_T_Users[".afterAddAction"] = 0;
$tdataManage_Unee_T_Users[".closePopupAfterAdd"] = 1;
$tdataManage_Unee_T_Users[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_Unee_T_Users[".list"] = true;
}



$tdataManage_Unee_T_Users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_Unee_T_Users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_Unee_T_Users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_Unee_T_Users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_Unee_T_Users[".printFriendly"] = true;
}



$tdataManage_Unee_T_Users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_Unee_T_Users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_Unee_T_Users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_Unee_T_Users[".isUseAjaxSuggest"] = true;

$tdataManage_Unee_T_Users[".rowHighlite"] = true;





$tdataManage_Unee_T_Users[".ajaxCodeSnippetAdded"] = false;

$tdataManage_Unee_T_Users[".buttonsAdded"] = false;

$tdataManage_Unee_T_Users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_Unee_T_Users[".isUseTimeForSearch"] = false;


$tdataManage_Unee_T_Users[".badgeColor"] = "1E90FF";


$tdataManage_Unee_T_Users[".allSearchFields"] = array();
$tdataManage_Unee_T_Users[".filterFields"] = array();
$tdataManage_Unee_T_Users[".requiredSearchFields"] = array();

$tdataManage_Unee_T_Users[".googleLikeFields"] = array();
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "external_system";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "external_table";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "person_status";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "designation";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "role_type";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "person_gender";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "salutation";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "given_name";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "middle_name";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "family_name";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "alias";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "job_title";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "organization";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "email";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "tel_1";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "tel_2";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "whatsapp";
$tdataManage_Unee_T_Users[".googleLikeFields"][] = "country_code";



$tdataManage_Unee_T_Users[".tableType"] = "list";

$tdataManage_Unee_T_Users[".printerPageOrientation"] = 0;
$tdataManage_Unee_T_Users[".nPrinterPageScale"] = 100;

$tdataManage_Unee_T_Users[".nPrinterSplitRecords"] = 40;

$tdataManage_Unee_T_Users[".nPrinterPDFSplitRecords"] = 40;


$tdataManage_Unee_T_Users[".geocodingEnabled"] = false;





$tdataManage_Unee_T_Users[".isResizeColumns"] = true;





$tdataManage_Unee_T_Users[".pageSize"] = 20;

$tdataManage_Unee_T_Users[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_Unee_T_Users[".strOrderBy"] = $tstrOrderBy;

$tdataManage_Unee_T_Users[".orderindexes"] = array();
	$tdataManage_Unee_T_Users[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_persons.unee_t_user_type_id");

	$tdataManage_Unee_T_Users[".orderindexes"][] = array(23, (1 ? "ASC" : "DESC"), "external_persons.given_name");


$tdataManage_Unee_T_Users[".sqlHead"] = "SELECT external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.gender,  person_genders.person_gender,  external_persons.salutation_id,  person_salutations.salutation,  external_persons.given_name,  external_persons.middle_name,  external_persons.family_name,  external_persons.date_of_birth,  external_persons.`alias`,  external_persons.job_title,  external_persons.`organization`,  external_persons.email,  external_persons.tel_1,  external_persons.tel_2,  external_persons.whatsapp,  external_persons.linkedin,  external_persons.facebook,  external_persons.adr1,  external_persons.adr2,  external_persons.adr3,  external_persons.City,  external_persons.zip_postcode,  external_persons.region_or_state,  external_persons.country_code,  external_persons.country,  external_persons.dupe_id,  external_persons.handler_id,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_api_key,  ut_map_external_source_users.unee_t_mefe_user_id";
$tdataManage_Unee_T_Users[".sqlFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$tdataManage_Unee_T_Users[".sqlWhereExpr"] = "";
$tdataManage_Unee_T_Users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_Unee_T_Users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_Unee_T_Users[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_Unee_T_Users[".highlightSearchResults"] = true;

$tableKeysManage_Unee_T_Users = array();
$tableKeysManage_Unee_T_Users[] = "external_id";
$tableKeysManage_Unee_T_Users[] = "external_system";
$tableKeysManage_Unee_T_Users[] = "external_table";
$tableKeysManage_Unee_T_Users[] = "created_by_id";
$tdataManage_Unee_T_Users[".Keys"] = $tableKeysManage_Unee_T_Users;


$tdataManage_Unee_T_Users[".hideMobileList"] = array();




//	id_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_person";
	$fdata["GoodName"] = "id_person";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","id_person");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_person";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.id_person";

	
	
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


	$tdataManage_Unee_T_Users["id_person"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "id_person";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.external_id";

	
	
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


	$tdataManage_Unee_T_Users["external_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "external_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.external_system";

	
	
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


	$tdataManage_Unee_T_Users["external_system"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "external_system";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.external_table";

	
	
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


	$tdataManage_Unee_T_Users["external_table"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.syst_created_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataManage_Unee_T_Users["syst_created_datetime"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.creation_system_id";

	
	
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


	$tdataManage_Unee_T_Users["creation_system_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.created_by_id";

	
	
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


	$tdataManage_Unee_T_Users["created_by_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.creation_method";

	
	
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


	$tdataManage_Unee_T_Users["creation_method"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.syst_updated_datetime";

	
	
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

		$edata["ShowTime"] = true;

	
	



	
	
	
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


	$tdataManage_Unee_T_Users["syst_updated_datetime"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.update_system_id";

	
	
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


	$tdataManage_Unee_T_Users["update_system_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.updated_by_id";

	
	
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


	$tdataManage_Unee_T_Users["updated_by_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.update_method";

	
	
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


	$tdataManage_Unee_T_Users["update_method"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "update_method";
//	person_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "person_status_id";
	$fdata["GoodName"] = "person_status_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","person_status_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.person_status_id";

	
	
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

	

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "person_statuses";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_person_status";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "person_status";

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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "person_statuses";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_person_status";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "person_status";

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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "person_statuses";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_person_status";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "person_status";

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


	$tdataManage_Unee_T_Users["person_status_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "person_status_id";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "person_status";
	$fdata["GoodName"] = "person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","person_status");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_statuses.person_status";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdataManage_Unee_T_Users["person_status"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "person_status";
//	is_unee_t_account_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_unee_t_account_needed";
	$fdata["GoodName"] = "is_unee_t_account_needed";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","is_unee_t_account_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_unee_t_account_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.is_unee_t_account_needed";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
	
	



	
	
	
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


	$tdataManage_Unee_T_Users["is_unee_t_account_needed"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "is_unee_t_account_needed";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.unee_t_user_type_id";

	
	
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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_user_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_unee_t_user_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataManage_Unee_T_Users["unee_t_user_type_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "unee_t_user_type_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.designation";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdataManage_Unee_T_Users["designation"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "designation";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","role_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "role_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_role_types.role_type";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
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


	$tdataManage_Unee_T_Users["role_type"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "role_type";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","gender");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.gender";

	
	
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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "person_genders";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_person_gender";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "person_gender";

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


	$tdataManage_Unee_T_Users["gender"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "gender";
//	person_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "person_gender";
	$fdata["GoodName"] = "person_gender";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","person_gender");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_genders.person_gender";

	
	
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


	$tdataManage_Unee_T_Users["person_gender"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "person_gender";
//	salutation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "salutation_id";
	$fdata["GoodName"] = "salutation_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","salutation_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "salutation_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.salutation_id";

	
	
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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "person_salutations";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_salutation";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "salutation";

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


	$tdataManage_Unee_T_Users["salutation_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "salutation_id";
//	salutation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "salutation";
	$fdata["GoodName"] = "salutation";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","salutation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "salutation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_salutations.salutation";

	
	
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


	$tdataManage_Unee_T_Users["salutation"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "salutation";
//	given_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "given_name";
	$fdata["GoodName"] = "given_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","given_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "given_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.given_name";

	
	
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


	$tdataManage_Unee_T_Users["given_name"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "given_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","middle_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "middle_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.middle_name";

	
	
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


	$tdataManage_Unee_T_Users["middle_name"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "middle_name";
//	family_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "family_name";
	$fdata["GoodName"] = "family_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","family_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "family_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.family_name";

	
	
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


	$tdataManage_Unee_T_Users["family_name"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "family_name";
//	date_of_birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_of_birth";
	$fdata["GoodName"] = "date_of_birth";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","date_of_birth");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "date_of_birth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.date_of_birth";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 11;
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


	$tdataManage_Unee_T_Users["date_of_birth"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "date_of_birth";
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","alias");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "alias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.`alias`";

	
	
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


	$tdataManage_Unee_T_Users["alias"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "alias";
//	job_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "job_title";
	$fdata["GoodName"] = "job_title";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","job_title");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "job_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.job_title";

	
	
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


	$tdataManage_Unee_T_Users["job_title"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "job_title";
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","organization");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.`organization`";

	
	
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


	$tdataManage_Unee_T_Users["organization"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "organization";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.email";

	
	
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


	$tdataManage_Unee_T_Users["email"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "email";
//	tel_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "tel_1";
	$fdata["GoodName"] = "tel_1";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","tel_1");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tel_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.tel_1";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataManage_Unee_T_Users["tel_1"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "tel_1";
//	tel_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tel_2";
	$fdata["GoodName"] = "tel_2";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","tel_2");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tel_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.tel_2";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataManage_Unee_T_Users["tel_2"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "tel_2";
//	whatsapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "whatsapp";
	$fdata["GoodName"] = "whatsapp";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","whatsapp");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "whatsapp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.whatsapp";

	
	
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

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataManage_Unee_T_Users["whatsapp"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "whatsapp";
//	linkedin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "linkedin";
	$fdata["GoodName"] = "linkedin";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","linkedin");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "linkedin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.linkedin";

	
	
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


	$tdataManage_Unee_T_Users["linkedin"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "linkedin";
//	facebook
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "facebook";
	$fdata["GoodName"] = "facebook";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","facebook");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "facebook";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.facebook";

	
	
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


	$tdataManage_Unee_T_Users["facebook"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "facebook";
//	adr1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "adr1";
	$fdata["GoodName"] = "adr1";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","adr1");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "adr1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.adr1";

	
	
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


	$tdataManage_Unee_T_Users["adr1"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "adr1";
//	adr2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "adr2";
	$fdata["GoodName"] = "adr2";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","adr2");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "adr2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.adr2";

	
	
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


	$tdataManage_Unee_T_Users["adr2"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "adr2";
//	adr3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "adr3";
	$fdata["GoodName"] = "adr3";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","adr3");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "adr3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.adr3";

	
	
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


	$tdataManage_Unee_T_Users["adr3"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "adr3";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","City");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "City";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.City";

	
	
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


	$tdataManage_Unee_T_Users["City"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "City";
//	zip_postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "zip_postcode";
	$fdata["GoodName"] = "zip_postcode";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","zip_postcode");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "zip_postcode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.zip_postcode";

	
	
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


	$tdataManage_Unee_T_Users["zip_postcode"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "zip_postcode";
//	region_or_state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "region_or_state";
	$fdata["GoodName"] = "region_or_state";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","region_or_state");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "region_or_state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.region_or_state";

	
	
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


	$tdataManage_Unee_T_Users["region_or_state"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "region_or_state";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.country_code";

	
	
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

	

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "property_groups_countries";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
	
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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "property_groups_countries";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
	
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

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "property_groups_countries";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "country_code";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
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


	$tdataManage_Unee_T_Users["country_code"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "country_code";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","country");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.country";

	
	
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


	$tdataManage_Unee_T_Users["country"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "country";
//	dupe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "dupe_id";
	$fdata["GoodName"] = "dupe_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","dupe_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "dupe_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.dupe_id";

	
	
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


	$tdataManage_Unee_T_Users["dupe_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "dupe_id";
//	handler_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "handler_id";
	$fdata["GoodName"] = "handler_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","handler_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "handler_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.handler_id";

	
	
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


	$tdataManage_Unee_T_Users["handler_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "handler_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.uneet_created_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataManage_Unee_T_Users["uneet_created_datetime"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","unee_t_mefe_user_api_key");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";

	
	
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


	$tdataManage_Unee_T_Users["unee_t_mefe_user_api_key"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "unee_t_mefe_user_api_key";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Manage_Unee_T_Users","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_id";

	
	
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


	$tdataManage_Unee_T_Users["unee_t_mefe_user_id"] = $fdata;
		$tdataManage_Unee_T_Users[".searchableFields"][] = "unee_t_mefe_user_id";


$tables_data["Manage Unee-T Users"]=&$tdataManage_Unee_T_Users;
$field_labels["Manage_Unee_T_Users"] = &$fieldLabelsManage_Unee_T_Users;
$fieldToolTips["Manage_Unee_T_Users"] = &$fieldToolTipsManage_Unee_T_Users;
$placeHolders["Manage_Unee_T_Users"] = &$placeHoldersManage_Unee_T_Users;
$page_titles["Manage_Unee_T_Users"] = &$pageTitlesManage_Unee_T_Users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage Unee-T Users"] = array();
//	Assign Buildings to User
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Assign Buildings to User";
		$detailsParam["dOriginalTable"] = "external_map_user_unit_role_permissions_level_1";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Assign_Buildings_to_User";
	$detailsParam["dCaptionTable"] = GetTableCaption("Assign_Buildings_to_User");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Unee-T Users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Unee-T Users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Unee-T Users"][$dIndex]["masterKeys"][]="unee_t_mefe_user_id";

				$detailsTablesData["Manage Unee-T Users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Unee-T Users"][$dIndex]["detailKeys"][]="unee_t_mefe_user_id";
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


		
	$detailsTablesData["Manage Unee-T Users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Unee-T Users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Unee-T Users"][$dIndex]["masterKeys"][]="unee_t_mefe_user_id";

				$detailsTablesData["Manage Unee-T Users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Unee-T Users"][$dIndex]["detailKeys"][]="unee_t_mefe_user_id";
//	Assign Rooms to User
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Assign Rooms to User";
		$detailsParam["dOriginalTable"] = "external_map_user_unit_role_permissions_level_3";



				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Assign_Rooms_to_User";
	$detailsParam["dCaptionTable"] = GetTableCaption("Assign_Rooms_to_User");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Manage Unee-T Users"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Manage Unee-T Users"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Manage Unee-T Users"][$dIndex]["masterKeys"][]="unee_t_mefe_user_id";

				$detailsTablesData["Manage Unee-T Users"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Manage Unee-T Users"][$dIndex]["detailKeys"][]="unee_t_mefe_user_id";

// tables which are master tables for current table (detail)
$masterTablesData["Manage Unee-T Users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_Unee_T_Users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.gender,  person_genders.person_gender,  external_persons.salutation_id,  person_salutations.salutation,  external_persons.given_name,  external_persons.middle_name,  external_persons.family_name,  external_persons.date_of_birth,  external_persons.`alias`,  external_persons.job_title,  external_persons.`organization`,  external_persons.email,  external_persons.tel_1,  external_persons.tel_2,  external_persons.whatsapp,  external_persons.linkedin,  external_persons.facebook,  external_persons.adr1,  external_persons.adr2,  external_persons.adr3,  external_persons.City,  external_persons.zip_postcode,  external_persons.region_or_state,  external_persons.country_code,  external_persons.country,  external_persons.dupe_id,  external_persons.handler_id,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_api_key,  ut_map_external_source_users.unee_t_mefe_user_id";
$proto0["m_strFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
	
					
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
	"m_strName" => "id_person",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto6["m_sql"] = "external_persons.id_person";
$proto6["m_srcTableName"] = "Manage Unee-T Users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto8["m_sql"] = "external_persons.external_id";
$proto8["m_srcTableName"] = "Manage Unee-T Users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto10["m_sql"] = "external_persons.external_system";
$proto10["m_srcTableName"] = "Manage Unee-T Users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto12["m_sql"] = "external_persons.external_table";
$proto12["m_srcTableName"] = "Manage Unee-T Users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto14["m_sql"] = "external_persons.syst_created_datetime";
$proto14["m_srcTableName"] = "Manage Unee-T Users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto16["m_sql"] = "external_persons.creation_system_id";
$proto16["m_srcTableName"] = "Manage Unee-T Users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto18["m_sql"] = "external_persons.created_by_id";
$proto18["m_srcTableName"] = "Manage Unee-T Users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto20["m_sql"] = "external_persons.creation_method";
$proto20["m_srcTableName"] = "Manage Unee-T Users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto22["m_sql"] = "external_persons.syst_updated_datetime";
$proto22["m_srcTableName"] = "Manage Unee-T Users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto24["m_sql"] = "external_persons.update_system_id";
$proto24["m_srcTableName"] = "Manage Unee-T Users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto26["m_sql"] = "external_persons.updated_by_id";
$proto26["m_srcTableName"] = "Manage Unee-T Users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto28["m_sql"] = "external_persons.update_method";
$proto28["m_srcTableName"] = "Manage Unee-T Users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto30["m_sql"] = "external_persons.person_status_id";
$proto30["m_srcTableName"] = "Manage Unee-T Users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto32["m_sql"] = "person_statuses.person_status";
$proto32["m_srcTableName"] = "Manage Unee-T Users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_unee_t_account_needed",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto34["m_sql"] = "external_persons.is_unee_t_account_needed";
$proto34["m_srcTableName"] = "Manage Unee-T Users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto36["m_sql"] = "external_persons.unee_t_user_type_id";
$proto36["m_srcTableName"] = "Manage Unee-T Users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto38["m_sql"] = "ut_user_types.designation";
$proto38["m_srcTableName"] = "Manage Unee-T Users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto40["m_sql"] = "ut_user_role_types.role_type";
$proto40["m_srcTableName"] = "Manage Unee-T Users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto42["m_sql"] = "external_persons.gender";
$proto42["m_srcTableName"] = "Manage Unee-T Users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "person_gender",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto44["m_sql"] = "person_genders.person_gender";
$proto44["m_srcTableName"] = "Manage Unee-T Users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto46["m_sql"] = "external_persons.salutation_id";
$proto46["m_srcTableName"] = "Manage Unee-T Users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto48["m_sql"] = "person_salutations.salutation";
$proto48["m_srcTableName"] = "Manage Unee-T Users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto50["m_sql"] = "external_persons.given_name";
$proto50["m_srcTableName"] = "Manage Unee-T Users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto52["m_sql"] = "external_persons.middle_name";
$proto52["m_srcTableName"] = "Manage Unee-T Users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "family_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto54["m_sql"] = "external_persons.family_name";
$proto54["m_srcTableName"] = "Manage Unee-T Users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "date_of_birth",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto56["m_sql"] = "external_persons.date_of_birth";
$proto56["m_srcTableName"] = "Manage Unee-T Users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto58["m_sql"] = "external_persons.`alias`";
$proto58["m_srcTableName"] = "Manage Unee-T Users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "job_title",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto60["m_sql"] = "external_persons.job_title";
$proto60["m_srcTableName"] = "Manage Unee-T Users";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto62["m_sql"] = "external_persons.`organization`";
$proto62["m_srcTableName"] = "Manage Unee-T Users";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto64["m_sql"] = "external_persons.email";
$proto64["m_srcTableName"] = "Manage Unee-T Users";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_1",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto66["m_sql"] = "external_persons.tel_1";
$proto66["m_srcTableName"] = "Manage Unee-T Users";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_2",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto68["m_sql"] = "external_persons.tel_2";
$proto68["m_srcTableName"] = "Manage Unee-T Users";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "whatsapp",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto70["m_sql"] = "external_persons.whatsapp";
$proto70["m_srcTableName"] = "Manage Unee-T Users";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "linkedin",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto72["m_sql"] = "external_persons.linkedin";
$proto72["m_srcTableName"] = "Manage Unee-T Users";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "facebook",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto74["m_sql"] = "external_persons.facebook";
$proto74["m_srcTableName"] = "Manage Unee-T Users";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "adr1",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto76["m_sql"] = "external_persons.adr1";
$proto76["m_srcTableName"] = "Manage Unee-T Users";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "adr2",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto78["m_sql"] = "external_persons.adr2";
$proto78["m_srcTableName"] = "Manage Unee-T Users";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "adr3",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto80["m_sql"] = "external_persons.adr3";
$proto80["m_srcTableName"] = "Manage Unee-T Users";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto82["m_sql"] = "external_persons.City";
$proto82["m_srcTableName"] = "Manage Unee-T Users";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_postcode",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto84["m_sql"] = "external_persons.zip_postcode";
$proto84["m_srcTableName"] = "Manage Unee-T Users";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "region_or_state",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto86["m_sql"] = "external_persons.region_or_state";
$proto86["m_srcTableName"] = "Manage Unee-T Users";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto88["m_sql"] = "external_persons.country_code";
$proto88["m_srcTableName"] = "Manage Unee-T Users";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto90["m_sql"] = "external_persons.country";
$proto90["m_srcTableName"] = "Manage Unee-T Users";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "dupe_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto92["m_sql"] = "external_persons.dupe_id";
$proto92["m_srcTableName"] = "Manage Unee-T Users";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "handler_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto94["m_sql"] = "external_persons.handler_id";
$proto94["m_srcTableName"] = "Manage Unee-T Users";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto96["m_sql"] = "ut_map_external_source_users.uneet_created_datetime";
$proto96["m_srcTableName"] = "Manage Unee-T Users";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto98["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto98["m_srcTableName"] = "Manage Unee-T Users";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto100["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id";
$proto100["m_srcTableName"] = "Manage Unee-T Users";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "external_persons";
$proto103["m_srcTableName"] = "Manage Unee-T Users";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_person";
$proto103["m_columns"][] = "external_id";
$proto103["m_columns"][] = "external_system";
$proto103["m_columns"][] = "external_table";
$proto103["m_columns"][] = "syst_created_datetime";
$proto103["m_columns"][] = "creation_system_id";
$proto103["m_columns"][] = "created_by_id";
$proto103["m_columns"][] = "creation_method";
$proto103["m_columns"][] = "syst_updated_datetime";
$proto103["m_columns"][] = "update_system_id";
$proto103["m_columns"][] = "updated_by_id";
$proto103["m_columns"][] = "update_method";
$proto103["m_columns"][] = "person_status_id";
$proto103["m_columns"][] = "dupe_id";
$proto103["m_columns"][] = "handler_id";
$proto103["m_columns"][] = "is_unee_t_account_needed";
$proto103["m_columns"][] = "unee_t_user_type_id";
$proto103["m_columns"][] = "country_code";
$proto103["m_columns"][] = "gender";
$proto103["m_columns"][] = "salutation_id";
$proto103["m_columns"][] = "given_name";
$proto103["m_columns"][] = "middle_name";
$proto103["m_columns"][] = "family_name";
$proto103["m_columns"][] = "date_of_birth";
$proto103["m_columns"][] = "alias";
$proto103["m_columns"][] = "job_title";
$proto103["m_columns"][] = "organization";
$proto103["m_columns"][] = "email";
$proto103["m_columns"][] = "tel_1";
$proto103["m_columns"][] = "tel_2";
$proto103["m_columns"][] = "whatsapp";
$proto103["m_columns"][] = "linkedin";
$proto103["m_columns"][] = "facebook";
$proto103["m_columns"][] = "adr1";
$proto103["m_columns"][] = "adr2";
$proto103["m_columns"][] = "adr3";
$proto103["m_columns"][] = "City";
$proto103["m_columns"][] = "zip_postcode";
$proto103["m_columns"][] = "region_or_state";
$proto103["m_columns"][] = "country";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "external_persons";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "Manage Unee-T Users";
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
$proto107["m_strName"] = "person_genders";
$proto107["m_srcTableName"] = "Manage Unee-T Users";
$proto107["m_columns"] = array();
$proto107["m_columns"][] = "id_person_gender";
$proto107["m_columns"][] = "creation_system_id";
$proto107["m_columns"][] = "update_system_id";
$proto107["m_columns"][] = "is_obsolete";
$proto107["m_columns"][] = "is_default";
$proto107["m_columns"][] = "is_active";
$proto107["m_columns"][] = "order";
$proto107["m_columns"][] = "person_gender";
$proto107["m_columns"][] = "description";
$obj = new SQLTable($proto107);

$proto106["m_table"] = $obj;
$proto106["m_sql"] = "LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender";
$proto106["m_alias"] = "";
$proto106["m_srcTableName"] = "Manage Unee-T Users";
$proto108=array();
$proto108["m_sql"] = "external_persons.gender = person_genders.id_person_gender";
$proto108["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto108["m_column"]=$obj;
$proto108["m_contained"] = array();
$proto108["m_strCase"] = "= person_genders.id_person_gender";
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
$proto111["m_strName"] = "person_salutations";
$proto111["m_srcTableName"] = "Manage Unee-T Users";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id_salutation";
$proto111["m_columns"][] = "creation_system_id";
$proto111["m_columns"][] = "update_system_id";
$proto111["m_columns"][] = "is_obsolete";
$proto111["m_columns"][] = "order";
$proto111["m_columns"][] = "salutation";
$proto111["m_columns"][] = "salutation_description";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "Manage Unee-T Users";
$proto112=array();
$proto112["m_sql"] = "external_persons.salutation_id = person_salutations.id_salutation";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= person_salutations.id_salutation";
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
$proto115["m_strName"] = "person_statuses";
$proto115["m_srcTableName"] = "Manage Unee-T Users";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_person_status";
$proto115["m_columns"][] = "creation_system_id";
$proto115["m_columns"][] = "update_system_id";
$proto115["m_columns"][] = "is_obsolete";
$proto115["m_columns"][] = "is_default";
$proto115["m_columns"][] = "is_active";
$proto115["m_columns"][] = "order";
$proto115["m_columns"][] = "person_status";
$proto115["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "Manage Unee-T Users";
$proto116=array();
$proto116["m_sql"] = "external_persons.person_status_id = person_statuses.id_person_status";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= person_statuses.id_person_status";
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
$proto119["m_strName"] = "ut_user_types";
$proto119["m_srcTableName"] = "Manage Unee-T Users";
$proto119["m_columns"] = array();
$proto119["m_columns"][] = "id_unee_t_user_type";
$proto119["m_columns"][] = "syst_created_datetime";
$proto119["m_columns"][] = "creation_system_id";
$proto119["m_columns"][] = "created_by_id";
$proto119["m_columns"][] = "creation_method";
$proto119["m_columns"][] = "syst_updated_datetime";
$proto119["m_columns"][] = "update_system_id";
$proto119["m_columns"][] = "updated_by_id";
$proto119["m_columns"][] = "update_method";
$proto119["m_columns"][] = "organization_id";
$proto119["m_columns"][] = "order";
$proto119["m_columns"][] = "is_obsolete";
$proto119["m_columns"][] = "designation";
$proto119["m_columns"][] = "description";
$proto119["m_columns"][] = "ut_user_role_type_id";
$proto119["m_columns"][] = "is_all_unit";
$proto119["m_columns"][] = "is_all_units_in_country";
$proto119["m_columns"][] = "is_all_units_in_area";
$proto119["m_columns"][] = "is_all_units_in_level_1";
$proto119["m_columns"][] = "is_all_units_in_level_2";
$proto119["m_columns"][] = "is_occupant";
$proto119["m_columns"][] = "is_public";
$proto119["m_columns"][] = "is_default_assignee";
$proto119["m_columns"][] = "is_default_invited";
$proto119["m_columns"][] = "is_unit_owner";
$proto119["m_columns"][] = "is_dashboard_access";
$proto119["m_columns"][] = "can_see_role_contractor";
$proto119["m_columns"][] = "can_see_role_mgt_cny";
$proto119["m_columns"][] = "can_see_occupant";
$proto119["m_columns"][] = "can_see_role_landlord";
$proto119["m_columns"][] = "can_see_role_agent";
$proto119["m_columns"][] = "can_see_role_tenant";
$proto119["m_columns"][] = "is_assigned_to_case";
$proto119["m_columns"][] = "is_invited_to_case";
$proto119["m_columns"][] = "is_solution_updated";
$proto119["m_columns"][] = "is_next_step_updated";
$proto119["m_columns"][] = "is_deadline_updated";
$proto119["m_columns"][] = "is_case_resolved";
$proto119["m_columns"][] = "is_case_critical";
$proto119["m_columns"][] = "is_case_blocker";
$proto119["m_columns"][] = "is_message_from_contractor";
$proto119["m_columns"][] = "is_message_from_mgt_cny";
$proto119["m_columns"][] = "is_message_from_agent";
$proto119["m_columns"][] = "is_message_from_occupant";
$proto119["m_columns"][] = "is_message_from_ll";
$proto119["m_columns"][] = "is_message_from_tenant";
$proto119["m_columns"][] = "is_any_new_message";
$proto119["m_columns"][] = "is_new_ir";
$proto119["m_columns"][] = "is_new_inventory";
$proto119["m_columns"][] = "is_new_item";
$proto119["m_columns"][] = "is_item_moved";
$proto119["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto119);

$proto118["m_table"] = $obj;
$proto118["m_sql"] = "LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto118["m_alias"] = "";
$proto118["m_srcTableName"] = "Manage Unee-T Users";
$proto120=array();
$proto120["m_sql"] = "external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
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
$proto123["m_strName"] = "persons";
$proto123["m_srcTableName"] = "Manage Unee-T Users";
$proto123["m_columns"] = array();
$proto123["m_columns"][] = "id_person";
$proto123["m_columns"][] = "external_id";
$proto123["m_columns"][] = "external_system";
$proto123["m_columns"][] = "external_table";
$proto123["m_columns"][] = "syst_created_datetime";
$proto123["m_columns"][] = "creation_system_id";
$proto123["m_columns"][] = "created_by_id";
$proto123["m_columns"][] = "creation_method";
$proto123["m_columns"][] = "syst_updated_datetime";
$proto123["m_columns"][] = "update_system_id";
$proto123["m_columns"][] = "updated_by_id";
$proto123["m_columns"][] = "update_method";
$proto123["m_columns"][] = "organization_id";
$proto123["m_columns"][] = "person_status_id";
$proto123["m_columns"][] = "dupe_id";
$proto123["m_columns"][] = "handler_id";
$proto123["m_columns"][] = "is_unee_t_account_needed";
$proto123["m_columns"][] = "unee_t_user_type_id";
$proto123["m_columns"][] = "country_code";
$proto123["m_columns"][] = "gender";
$proto123["m_columns"][] = "salutation_id";
$proto123["m_columns"][] = "given_name";
$proto123["m_columns"][] = "middle_name";
$proto123["m_columns"][] = "family_name";
$proto123["m_columns"][] = "date_of_birth";
$proto123["m_columns"][] = "alias";
$proto123["m_columns"][] = "job_title";
$proto123["m_columns"][] = "organization";
$proto123["m_columns"][] = "email";
$proto123["m_columns"][] = "tel_1";
$proto123["m_columns"][] = "tel_2";
$proto123["m_columns"][] = "whatsapp";
$proto123["m_columns"][] = "linkedin";
$proto123["m_columns"][] = "facebook";
$proto123["m_columns"][] = "adr1";
$proto123["m_columns"][] = "adr2";
$proto123["m_columns"][] = "adr3";
$proto123["m_columns"][] = "City";
$proto123["m_columns"][] = "zip_postcode";
$proto123["m_columns"][] = "region_or_state";
$proto123["m_columns"][] = "country";
$obj = new SQLTable($proto123);

$proto122["m_table"] = $obj;
$proto122["m_sql"] = "LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id";
$proto122["m_alias"] = "";
$proto122["m_srcTableName"] = "Manage Unee-T Users";
$proto124=array();
$proto124["m_sql"] = "external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id";
$proto124["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
						$proto126=array();
$proto126["m_sql"] = "external_persons.external_id = persons.external_id";
$proto126["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto126["m_column"]=$obj;
$proto126["m_contained"] = array();
$proto126["m_strCase"] = "= persons.external_id";
$proto126["m_havingmode"] = false;
$proto126["m_inBrackets"] = false;
$proto126["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto126);

			$proto124["m_contained"][]=$obj;
						$proto128=array();
$proto128["m_sql"] = "external_persons.external_system = persons.external_system";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= persons.external_system";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

			$proto124["m_contained"][]=$obj;
						$proto130=array();
$proto130["m_sql"] = "external_persons.external_table = persons.external_table";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "= persons.external_table";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

			$proto124["m_contained"][]=$obj;
						$proto132=array();
$proto132["m_sql"] = "external_persons.created_by_id = persons.organization_id";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= persons.organization_id";
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
$proto135["m_strName"] = "ut_map_external_source_users";
$proto135["m_srcTableName"] = "Manage Unee-T Users";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "id_map";
$proto135["m_columns"][] = "syst_created_datetime";
$proto135["m_columns"][] = "creation_system_id";
$proto135["m_columns"][] = "created_by_id";
$proto135["m_columns"][] = "creation_method";
$proto135["m_columns"][] = "syst_updated_datetime";
$proto135["m_columns"][] = "update_system_id";
$proto135["m_columns"][] = "updated_by_id";
$proto135["m_columns"][] = "update_method";
$proto135["m_columns"][] = "organization_id";
$proto135["m_columns"][] = "is_obsolete";
$proto135["m_columns"][] = "is_update_needed";
$proto135["m_columns"][] = "person_id";
$proto135["m_columns"][] = "unee_t_mefe_user_id";
$proto135["m_columns"][] = "unee_t_mefe_user_api_key";
$proto135["m_columns"][] = "uneet_created_datetime";
$proto135["m_columns"][] = "is_mefe_api_success";
$proto135["m_columns"][] = "mefe_api_error_message";
$proto135["m_columns"][] = "is_unee_t_created_by_me";
$proto135["m_columns"][] = "uneet_login_name";
$proto135["m_columns"][] = "external_person_id";
$proto135["m_columns"][] = "external_system";
$proto135["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto135);

$proto134["m_table"] = $obj;
$proto134["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "Manage Unee-T Users";
$proto136=array();
$proto136["m_sql"] = "persons.id_person = ut_map_external_source_users.person_id";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_person",
	"m_strTable" => "persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "= ut_map_external_source_users.person_id";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto134["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto134);

$proto0["m_fromlist"][]=$obj;
												$proto138=array();
$proto138["m_link"] = "SQLL_LEFTJOIN";
			$proto139=array();
$proto139["m_strName"] = "ut_user_role_types";
$proto139["m_srcTableName"] = "Manage Unee-T Users";
$proto139["m_columns"] = array();
$proto139["m_columns"][] = "id_role_type";
$proto139["m_columns"][] = "syst_created_datetime";
$proto139["m_columns"][] = "creation_system_id";
$proto139["m_columns"][] = "created_by_id";
$proto139["m_columns"][] = "syst_updated_datetime";
$proto139["m_columns"][] = "update_system_id";
$proto139["m_columns"][] = "updated_by_id";
$proto139["m_columns"][] = "order";
$proto139["m_columns"][] = "is_obsolete";
$proto139["m_columns"][] = "role_type";
$proto139["m_columns"][] = "bz_description";
$proto139["m_columns"][] = "description";
$obj = new SQLTable($proto139);

$proto138["m_table"] = $obj;
$proto138["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto138["m_alias"] = "";
$proto138["m_srcTableName"] = "Manage Unee-T Users";
$proto140=array();
$proto140["m_sql"] = "ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto140["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto140["m_column"]=$obj;
$proto140["m_contained"] = array();
$proto140["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto140["m_havingmode"] = false;
$proto140["m_inBrackets"] = false;
$proto140["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto140);

$proto138["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto138);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto142["m_column"]=$obj;
$proto142["m_bAsc"] = 1;
$proto142["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto142);

$proto0["m_orderby"][]=$obj;					
												$proto144=array();
						$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Manage Unee-T Users"
));

$proto144["m_column"]=$obj;
$proto144["m_bAsc"] = 1;
$proto144["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto144);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Manage Unee-T Users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_Unee_T_Users = createSqlQuery_Manage_Unee_T_Users();


	
					
;

																																																

$tdataManage_Unee_T_Users[".sqlquery"] = $queryData_Manage_Unee_T_Users;

include_once(getabspath("include/Manage_Unee_T_Users_events.php"));
$tableEvents["Manage Unee-T Users"] = new eventclass_Manage_Unee_T_Users;
$tdataManage_Unee_T_Users[".hasEvents"] = true;

?>