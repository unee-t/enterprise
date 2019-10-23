<?php



$tdatausers_export = array();
$tdatausers_export[".searchableFields"] = array();
$tdatausers_export[".ShortName"] = "users_export";
$tdatausers_export[".OwnerID"] = "created_by_id";
$tdatausers_export[".OriginalTable"] = "external_persons";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdatausers_export[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatausers_export[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatausers_export[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsusers_export = array();
$fieldToolTipsusers_export = array();
$pageTitlesusers_export = array();
$placeHoldersusers_export = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusers_export["English"] = array();
	$fieldToolTipsusers_export["English"] = array();
	$placeHoldersusers_export["English"] = array();
	$pageTitlesusers_export["English"] = array();
	$fieldLabelsusers_export["English"]["id_person"] = "Unee-T User ID";
	$fieldToolTipsusers_export["English"]["id_person"] = "";
	$placeHoldersusers_export["English"]["id_person"] = "";
	$fieldLabelsusers_export["English"]["external_id"] = "External Id";
	$fieldToolTipsusers_export["English"]["external_id"] = "";
	$placeHoldersusers_export["English"]["external_id"] = "";
	$fieldLabelsusers_export["English"]["external_system"] = "External System";
	$fieldToolTipsusers_export["English"]["external_system"] = "";
	$placeHoldersusers_export["English"]["external_system"] = "";
	$fieldLabelsusers_export["English"]["external_table"] = "External Table";
	$fieldToolTipsusers_export["English"]["external_table"] = "";
	$placeHoldersusers_export["English"]["external_table"] = "";
	$fieldLabelsusers_export["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsusers_export["English"]["syst_created_datetime"] = "";
	$placeHoldersusers_export["English"]["syst_created_datetime"] = "";
	$fieldLabelsusers_export["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsusers_export["English"]["creation_system_id"] = "";
	$placeHoldersusers_export["English"]["creation_system_id"] = "";
	$fieldLabelsusers_export["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsusers_export["English"]["created_by_id"] = "";
	$placeHoldersusers_export["English"]["created_by_id"] = "";
	$fieldLabelsusers_export["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsusers_export["English"]["syst_updated_datetime"] = "";
	$placeHoldersusers_export["English"]["syst_updated_datetime"] = "";
	$fieldLabelsusers_export["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsusers_export["English"]["update_system_id"] = "";
	$placeHoldersusers_export["English"]["update_system_id"] = "";
	$fieldLabelsusers_export["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsusers_export["English"]["updated_by_id"] = "";
	$placeHoldersusers_export["English"]["updated_by_id"] = "";
	$fieldLabelsusers_export["English"]["person_status_id"] = "Status ID";
	$fieldToolTipsusers_export["English"]["person_status_id"] = "";
	$placeHoldersusers_export["English"]["person_status_id"] = "";
	$fieldLabelsusers_export["English"]["dupe_id"] = "Dupe Id";
	$fieldToolTipsusers_export["English"]["dupe_id"] = "";
	$placeHoldersusers_export["English"]["dupe_id"] = "";
	$fieldLabelsusers_export["English"]["handler_id"] = "Handler Id";
	$fieldToolTipsusers_export["English"]["handler_id"] = "";
	$placeHoldersusers_export["English"]["handler_id"] = "";
	$fieldLabelsusers_export["English"]["is_unee_t_account_needed"] = "Create in Unee-T";
	$fieldToolTipsusers_export["English"]["is_unee_t_account_needed"] = "";
	$placeHoldersusers_export["English"]["is_unee_t_account_needed"] = "";
	$fieldLabelsusers_export["English"]["unee_t_user_type_id"] = "Unee T User Type ID";
	$fieldToolTipsusers_export["English"]["unee_t_user_type_id"] = "";
	$placeHoldersusers_export["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsusers_export["English"]["country_code"] = "Country Code";
	$fieldToolTipsusers_export["English"]["country_code"] = "";
	$placeHoldersusers_export["English"]["country_code"] = "";
	$fieldLabelsusers_export["English"]["gender"] = "Gender ID";
	$fieldToolTipsusers_export["English"]["gender"] = "";
	$placeHoldersusers_export["English"]["gender"] = "";
	$fieldLabelsusers_export["English"]["salutation_id"] = "Salutation ID";
	$fieldToolTipsusers_export["English"]["salutation_id"] = "";
	$placeHoldersusers_export["English"]["salutation_id"] = "";
	$fieldLabelsusers_export["English"]["given_name"] = "Given Name";
	$fieldToolTipsusers_export["English"]["given_name"] = "";
	$placeHoldersusers_export["English"]["given_name"] = "";
	$fieldLabelsusers_export["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsusers_export["English"]["middle_name"] = "";
	$placeHoldersusers_export["English"]["middle_name"] = "";
	$fieldLabelsusers_export["English"]["family_name"] = "Family Name";
	$fieldToolTipsusers_export["English"]["family_name"] = "";
	$placeHoldersusers_export["English"]["family_name"] = "";
	$fieldLabelsusers_export["English"]["date_of_birth"] = "Date Of Birth";
	$fieldToolTipsusers_export["English"]["date_of_birth"] = "";
	$placeHoldersusers_export["English"]["date_of_birth"] = "";
	$fieldLabelsusers_export["English"]["alias"] = "Alias";
	$fieldToolTipsusers_export["English"]["alias"] = "";
	$placeHoldersusers_export["English"]["alias"] = "";
	$fieldLabelsusers_export["English"]["job_title"] = "Job Title";
	$fieldToolTipsusers_export["English"]["job_title"] = "";
	$placeHoldersusers_export["English"]["job_title"] = "";
	$fieldLabelsusers_export["English"]["organization"] = "Organization";
	$fieldToolTipsusers_export["English"]["organization"] = "";
	$placeHoldersusers_export["English"]["organization"] = "";
	$fieldLabelsusers_export["English"]["email"] = "Email";
	$fieldToolTipsusers_export["English"]["email"] = "";
	$placeHoldersusers_export["English"]["email"] = "";
	$fieldLabelsusers_export["English"]["tel_1"] = "Tel 1";
	$fieldToolTipsusers_export["English"]["tel_1"] = "";
	$placeHoldersusers_export["English"]["tel_1"] = "";
	$fieldLabelsusers_export["English"]["tel_2"] = "Tel 2";
	$fieldToolTipsusers_export["English"]["tel_2"] = "";
	$placeHoldersusers_export["English"]["tel_2"] = "";
	$fieldLabelsusers_export["English"]["whatsapp"] = "Whatsapp";
	$fieldToolTipsusers_export["English"]["whatsapp"] = "";
	$placeHoldersusers_export["English"]["whatsapp"] = "";
	$fieldLabelsusers_export["English"]["linkedin"] = "Linkedin";
	$fieldToolTipsusers_export["English"]["linkedin"] = "";
	$placeHoldersusers_export["English"]["linkedin"] = "";
	$fieldLabelsusers_export["English"]["facebook"] = "Facebook";
	$fieldToolTipsusers_export["English"]["facebook"] = "";
	$placeHoldersusers_export["English"]["facebook"] = "";
	$fieldLabelsusers_export["English"]["adr1"] = "Adr1";
	$fieldToolTipsusers_export["English"]["adr1"] = "";
	$placeHoldersusers_export["English"]["adr1"] = "";
	$fieldLabelsusers_export["English"]["adr2"] = "Adr2";
	$fieldToolTipsusers_export["English"]["adr2"] = "";
	$placeHoldersusers_export["English"]["adr2"] = "";
	$fieldLabelsusers_export["English"]["adr3"] = "Adr3";
	$fieldToolTipsusers_export["English"]["adr3"] = "";
	$placeHoldersusers_export["English"]["adr3"] = "";
	$fieldLabelsusers_export["English"]["City"] = "City";
	$fieldToolTipsusers_export["English"]["City"] = "";
	$placeHoldersusers_export["English"]["City"] = "";
	$fieldLabelsusers_export["English"]["zip_postcode"] = "Zip Postcode";
	$fieldToolTipsusers_export["English"]["zip_postcode"] = "";
	$placeHoldersusers_export["English"]["zip_postcode"] = "";
	$fieldLabelsusers_export["English"]["region_or_state"] = "Region Or State";
	$fieldToolTipsusers_export["English"]["region_or_state"] = "";
	$placeHoldersusers_export["English"]["region_or_state"] = "";
	$fieldLabelsusers_export["English"]["country"] = "Country";
	$fieldToolTipsusers_export["English"]["country"] = "";
	$placeHoldersusers_export["English"]["country"] = "";
	$fieldLabelsusers_export["English"]["person_status"] = "Status";
	$fieldToolTipsusers_export["English"]["person_status"] = "";
	$placeHoldersusers_export["English"]["person_status"] = "";
	$fieldLabelsusers_export["English"]["person_gender"] = "Gender";
	$fieldToolTipsusers_export["English"]["person_gender"] = "";
	$placeHoldersusers_export["English"]["person_gender"] = "";
	$fieldLabelsusers_export["English"]["salutation"] = "Salutation";
	$fieldToolTipsusers_export["English"]["salutation"] = "";
	$placeHoldersusers_export["English"]["salutation"] = "";
	$fieldLabelsusers_export["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsusers_export["English"]["creation_method"] = "";
	$placeHoldersusers_export["English"]["creation_method"] = "";
	$fieldLabelsusers_export["English"]["update_method"] = "Update Method";
	$fieldToolTipsusers_export["English"]["update_method"] = "";
	$placeHoldersusers_export["English"]["update_method"] = "";
	$fieldLabelsusers_export["English"]["designation"] = "User Type";
	$fieldToolTipsusers_export["English"]["designation"] = "";
	$placeHoldersusers_export["English"]["designation"] = "";
	$fieldLabelsusers_export["English"]["uneet_created_datetime"] = "Created On";
	$fieldToolTipsusers_export["English"]["uneet_created_datetime"] = "";
	$placeHoldersusers_export["English"]["uneet_created_datetime"] = "";
	$fieldLabelsusers_export["English"]["role_type"] = "Role Type";
	$fieldToolTipsusers_export["English"]["role_type"] = "";
	$placeHoldersusers_export["English"]["role_type"] = "";
	$fieldLabelsusers_export["English"]["unee_t_mefe_user_api_key"] = "User Api Key";
	$fieldToolTipsusers_export["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHoldersusers_export["English"]["unee_t_mefe_user_api_key"] = "";
	$fieldLabelsusers_export["English"]["is_super_admin"] = "Is Super Admin";
	$fieldToolTipsusers_export["English"]["is_super_admin"] = "";
	$placeHoldersusers_export["English"]["is_super_admin"] = "";
	$fieldLabelsusers_export["English"]["is_mefe_api_success"] = "Is Mefe Api Success";
	$fieldToolTipsusers_export["English"]["is_mefe_api_success"] = "";
	$placeHoldersusers_export["English"]["is_mefe_api_success"] = "";
	$fieldLabelsusers_export["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipsusers_export["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersusers_export["English"]["unee_t_mefe_user_id"] = "";
	if (count($fieldToolTipsusers_export["English"]))
		$tdatausers_export[".isUseToolTips"] = true;
}


	$tdatausers_export[".NCSearch"] = true;



$tdatausers_export[".shortTableName"] = "users_export";
$tdatausers_export[".nSecOptions"] = 1;

$tdatausers_export[".mainTableOwnerID"] = "created_by_id";
$tdatausers_export[".entityType"] = 1;

$tdatausers_export[".strOriginalTableName"] = "external_persons";

		 



$tdatausers_export[".showAddInPopup"] = false;

$tdatausers_export[".showEditInPopup"] = false;

$tdatausers_export[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausers_export[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatausers_export[".listAjax"] = true;
//	temporary
$tdatausers_export[".listAjax"] = false;

	$tdatausers_export[".audit"] = true;

	$tdatausers_export[".locking"] = false;


$pages = $tdatausers_export[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausers_export[".edit"] = true;
	$tdatausers_export[".afterEditAction"] = 1;
	$tdatausers_export[".closePopupAfterEdit"] = 1;
	$tdatausers_export[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatausers_export[".add"] = true;
$tdatausers_export[".afterAddAction"] = 0;
$tdatausers_export[".closePopupAfterAdd"] = 1;
$tdatausers_export[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatausers_export[".list"] = true;
}



$tdatausers_export[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausers_export[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausers_export[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausers_export[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausers_export[".printFriendly"] = true;
}



$tdatausers_export[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausers_export[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausers_export[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausers_export[".isUseAjaxSuggest"] = true;

$tdatausers_export[".rowHighlite"] = true;





$tdatausers_export[".ajaxCodeSnippetAdded"] = false;

$tdatausers_export[".buttonsAdded"] = false;

$tdatausers_export[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausers_export[".isUseTimeForSearch"] = false;


$tdatausers_export[".badgeColor"] = "DB7093";


$tdatausers_export[".allSearchFields"] = array();
$tdatausers_export[".filterFields"] = array();
$tdatausers_export[".requiredSearchFields"] = array();

$tdatausers_export[".googleLikeFields"] = array();
$tdatausers_export[".googleLikeFields"][] = "external_system";
$tdatausers_export[".googleLikeFields"][] = "external_table";
$tdatausers_export[".googleLikeFields"][] = "person_status";
$tdatausers_export[".googleLikeFields"][] = "designation";
$tdatausers_export[".googleLikeFields"][] = "role_type";
$tdatausers_export[".googleLikeFields"][] = "person_gender";
$tdatausers_export[".googleLikeFields"][] = "salutation";
$tdatausers_export[".googleLikeFields"][] = "given_name";
$tdatausers_export[".googleLikeFields"][] = "middle_name";
$tdatausers_export[".googleLikeFields"][] = "family_name";
$tdatausers_export[".googleLikeFields"][] = "alias";
$tdatausers_export[".googleLikeFields"][] = "job_title";
$tdatausers_export[".googleLikeFields"][] = "organization";
$tdatausers_export[".googleLikeFields"][] = "email";
$tdatausers_export[".googleLikeFields"][] = "tel_1";
$tdatausers_export[".googleLikeFields"][] = "tel_2";
$tdatausers_export[".googleLikeFields"][] = "whatsapp";
$tdatausers_export[".googleLikeFields"][] = "country_code";
$tdatausers_export[".googleLikeFields"][] = "is_super_admin";
$tdatausers_export[".googleLikeFields"][] = "is_mefe_api_success";
$tdatausers_export[".googleLikeFields"][] = "unee_t_mefe_user_id";



$tdatausers_export[".tableType"] = "list";

$tdatausers_export[".printerPageOrientation"] = 0;
$tdatausers_export[".nPrinterPageScale"] = 100;

$tdatausers_export[".nPrinterSplitRecords"] = 40;

$tdatausers_export[".geocodingEnabled"] = false;





$tdatausers_export[".isResizeColumns"] = true;





$tdatausers_export[".pageSize"] = 20;

$tdatausers_export[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausers_export[".strOrderBy"] = $tstrOrderBy;

$tdatausers_export[".orderindexes"] = array();
	$tdatausers_export[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_persons.unee_t_user_type_id");

	$tdatausers_export[".orderindexes"][] = array(23, (1 ? "ASC" : "DESC"), "external_persons.given_name");


$tdatausers_export[".sqlHead"] = "SELECT external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.gender,  person_genders.person_gender,  external_persons.salutation_id,  person_salutations.salutation,  external_persons.given_name,  external_persons.middle_name,  external_persons.family_name,  external_persons.date_of_birth,  external_persons.`alias`,  external_persons.job_title,  external_persons.`organization`,  external_persons.email,  external_persons.tel_1,  external_persons.tel_2,  external_persons.whatsapp,  external_persons.linkedin,  external_persons.facebook,  external_persons.adr1,  external_persons.adr2,  external_persons.adr3,  external_persons.City,  external_persons.zip_postcode,  external_persons.region_or_state,  external_persons.country_code,  external_persons.country,  external_persons.dupe_id,  external_persons.handler_id,  ut_user_types.is_super_admin,  ut_map_external_source_users.is_mefe_api_success,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$tdatausers_export[".sqlFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type  INNER JOIN ut_map_external_source_users ON external_persons.created_by_id = ut_map_external_source_users.organization_id AND external_persons.external_id = ut_map_external_source_users.external_person_id AND external_persons.external_system = ut_map_external_source_users.external_system AND external_persons.external_table = ut_map_external_source_users.table_in_external_system";
$tdatausers_export[".sqlWhereExpr"] = "(ut_user_types.is_super_admin = 0) AND (ut_map_external_source_users.is_mefe_api_success = 1)";
$tdatausers_export[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausers_export[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausers_export[".arrGroupsPerPage"] = $arrGPP;

$tdatausers_export[".highlightSearchResults"] = true;

$tableKeysusers_export = array();
$tableKeysusers_export[] = "external_id";
$tableKeysusers_export[] = "external_system";
$tableKeysusers_export[] = "external_table";
$tableKeysusers_export[] = "created_by_id";
$tdatausers_export[".Keys"] = $tableKeysusers_export;


$tdatausers_export[".hideMobileList"] = array();




//	id_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_person";
	$fdata["GoodName"] = "id_person";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","id_person");
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


	$tdatausers_export["id_person"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "id_person";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.external_id";

	
	
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


	$tdatausers_export["external_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "external_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.external_system";

	
	
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


	$tdatausers_export["external_system"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "external_system";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.external_table";

	
	
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


	$tdatausers_export["external_table"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.syst_created_datetime";

	
	
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


	$tdatausers_export["syst_created_datetime"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.creation_system_id";

	
	
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


	$tdatausers_export["creation_system_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.created_by_id";

	
	
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


	$tdatausers_export["created_by_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.creation_method";

	
	
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


	$tdatausers_export["creation_method"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.syst_updated_datetime";

	
	
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


	$tdatausers_export["syst_updated_datetime"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.update_system_id";

	
	
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


	$tdatausers_export["update_system_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.updated_by_id";

	
	
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


	$tdatausers_export["updated_by_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.update_method";

	
	
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


	$tdatausers_export["update_method"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "update_method";
//	person_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "person_status_id";
	$fdata["GoodName"] = "person_status_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","person_status_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.person_status_id";

	
	
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


	$tdatausers_export["person_status_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "person_status_id";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "person_status";
	$fdata["GoodName"] = "person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Users_Export","person_status");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_statuses.person_status";

	
	
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


	$tdatausers_export["person_status"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "person_status";
//	is_unee_t_account_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_unee_t_account_needed";
	$fdata["GoodName"] = "is_unee_t_account_needed";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","is_unee_t_account_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_unee_t_account_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.is_unee_t_account_needed";

	
	
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


	$tdatausers_export["is_unee_t_account_needed"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "is_unee_t_account_needed";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.unee_t_user_type_id";

	
	
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


	$tdatausers_export["unee_t_user_type_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "unee_t_user_type_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Users_Export","designation");
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


	$tdatausers_export["designation"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "designation";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Users_Export","role_type");
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


	$tdatausers_export["role_type"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "role_type";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","gender");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.gender";

	
	
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


	$tdatausers_export["gender"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "gender";
//	person_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "person_gender";
	$fdata["GoodName"] = "person_gender";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("Users_Export","person_gender");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_genders.person_gender";

	
	
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


	$tdatausers_export["person_gender"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "person_gender";
//	salutation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "salutation_id";
	$fdata["GoodName"] = "salutation_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","salutation_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "salutation_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.salutation_id";

	
	
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


	$tdatausers_export["salutation_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "salutation_id";
//	salutation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "salutation";
	$fdata["GoodName"] = "salutation";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("Users_Export","salutation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "salutation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_salutations.salutation";

	
	
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


	$tdatausers_export["salutation"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "salutation";
//	given_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "given_name";
	$fdata["GoodName"] = "given_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","given_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "given_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.given_name";

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers_export["given_name"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "given_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","middle_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "middle_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.middle_name";

	
	
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


	$tdatausers_export["middle_name"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "middle_name";
//	family_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "family_name";
	$fdata["GoodName"] = "family_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","family_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "family_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.family_name";

	
	
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


	$tdatausers_export["family_name"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "family_name";
//	date_of_birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_of_birth";
	$fdata["GoodName"] = "date_of_birth";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","date_of_birth");
	$fdata["FieldType"] = 7;

	
	
	
										

		$fdata["strField"] = "date_of_birth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.date_of_birth";

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers_export["date_of_birth"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "date_of_birth";
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","alias");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "alias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.`alias`";

	
	
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


	$tdatausers_export["alias"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "alias";
//	job_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "job_title";
	$fdata["GoodName"] = "job_title";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","job_title");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "job_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.job_title";

	
	
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


	$tdatausers_export["job_title"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "job_title";
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","organization");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.`organization`";

	
	
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


	$tdatausers_export["organization"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "organization";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.email";

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatausers_export["email"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "email";
//	tel_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "tel_1";
	$fdata["GoodName"] = "tel_1";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","tel_1");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tel_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.tel_1";

	
	
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


	$tdatausers_export["tel_1"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "tel_1";
//	tel_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tel_2";
	$fdata["GoodName"] = "tel_2";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","tel_2");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tel_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.tel_2";

	
	
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


	$tdatausers_export["tel_2"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "tel_2";
//	whatsapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "whatsapp";
	$fdata["GoodName"] = "whatsapp";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","whatsapp");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "whatsapp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.whatsapp";

	
	
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


	$tdatausers_export["whatsapp"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "whatsapp";
//	linkedin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "linkedin";
	$fdata["GoodName"] = "linkedin";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","linkedin");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "linkedin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.linkedin";

	
	
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


	$tdatausers_export["linkedin"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "linkedin";
//	facebook
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "facebook";
	$fdata["GoodName"] = "facebook";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","facebook");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "facebook";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.facebook";

	
	
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


	$tdatausers_export["facebook"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "facebook";
//	adr1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "adr1";
	$fdata["GoodName"] = "adr1";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","adr1");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "adr1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.adr1";

	
	
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


	$tdatausers_export["adr1"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "adr1";
//	adr2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "adr2";
	$fdata["GoodName"] = "adr2";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","adr2");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "adr2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.adr2";

	
	
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


	$tdatausers_export["adr2"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "adr2";
//	adr3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "adr3";
	$fdata["GoodName"] = "adr3";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","adr3");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "adr3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.adr3";

	
	
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


	$tdatausers_export["adr3"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "adr3";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","City");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "City";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.City";

	
	
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


	$tdatausers_export["City"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "City";
//	zip_postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "zip_postcode";
	$fdata["GoodName"] = "zip_postcode";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","zip_postcode");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "zip_postcode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.zip_postcode";

	
	
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


	$tdatausers_export["zip_postcode"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "zip_postcode";
//	region_or_state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "region_or_state";
	$fdata["GoodName"] = "region_or_state";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","region_or_state");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "region_or_state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.region_or_state";

	
	
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


	$tdatausers_export["region_or_state"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "region_or_state";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.country_code";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatausers_export["country_code"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "country_code";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","country");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.country";

	
	
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


	$tdatausers_export["country"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "country";
//	dupe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "dupe_id";
	$fdata["GoodName"] = "dupe_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","dupe_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "dupe_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.dupe_id";

	
	
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


	$tdatausers_export["dupe_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "dupe_id";
//	handler_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "handler_id";
	$fdata["GoodName"] = "handler_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Users_Export","handler_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "handler_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_persons.handler_id";

	
	
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


	$tdatausers_export["handler_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "handler_id";
//	is_super_admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "is_super_admin";
	$fdata["GoodName"] = "is_super_admin";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Users_Export","is_super_admin");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_super_admin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_super_admin";

	
	
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


	$tdatausers_export["is_super_admin"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "is_super_admin";
//	is_mefe_api_success
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "is_mefe_api_success";
	$fdata["GoodName"] = "is_mefe_api_success";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Users_Export","is_mefe_api_success");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_mefe_api_success";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.is_mefe_api_success";

	
	
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


	$tdatausers_export["is_mefe_api_success"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "is_mefe_api_success";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Users_Export","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.uneet_created_datetime";

	
	
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


	$tdatausers_export["uneet_created_datetime"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Users_Export","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_id";

	
	
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


	$tdatausers_export["unee_t_mefe_user_id"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "unee_t_mefe_user_id";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Users_Export","unee_t_mefe_user_api_key");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";

	
	
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


	$tdatausers_export["unee_t_mefe_user_api_key"] = $fdata;
		$tdatausers_export[".searchableFields"][] = "unee_t_mefe_user_api_key";


$tables_data["Users Export"]=&$tdatausers_export;
$field_labels["Users_Export"] = &$fieldLabelsusers_export;
$fieldToolTips["Users_Export"] = &$fieldToolTipsusers_export;
$placeHolders["Users_Export"] = &$placeHoldersusers_export;
$page_titles["Users_Export"] = &$pageTitlesusers_export;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Users Export"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Users Export"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_users_export()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.gender,  person_genders.person_gender,  external_persons.salutation_id,  person_salutations.salutation,  external_persons.given_name,  external_persons.middle_name,  external_persons.family_name,  external_persons.date_of_birth,  external_persons.`alias`,  external_persons.job_title,  external_persons.`organization`,  external_persons.email,  external_persons.tel_1,  external_persons.tel_2,  external_persons.whatsapp,  external_persons.linkedin,  external_persons.facebook,  external_persons.adr1,  external_persons.adr2,  external_persons.adr3,  external_persons.City,  external_persons.zip_postcode,  external_persons.region_or_state,  external_persons.country_code,  external_persons.country,  external_persons.dupe_id,  external_persons.handler_id,  ut_user_types.is_super_admin,  ut_map_external_source_users.is_mefe_api_success,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto0["m_strFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type  INNER JOIN ut_map_external_source_users ON external_persons.created_by_id = ut_map_external_source_users.organization_id AND external_persons.external_id = ut_map_external_source_users.external_person_id AND external_persons.external_system = ut_map_external_source_users.external_system AND external_persons.external_table = ut_map_external_source_users.table_in_external_system";
$proto0["m_strWhere"] = "(ut_user_types.is_super_admin = 0) AND (ut_map_external_source_users.is_mefe_api_success = 1)";
$proto0["m_strOrderBy"] = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(ut_user_types.is_super_admin = 0) AND (ut_map_external_source_users.is_mefe_api_success = 1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ut_user_types.is_super_admin = 0) AND (ut_map_external_source_users.is_mefe_api_success = 1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ut_user_types.is_super_admin = 0";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_super_admin",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Users Export"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 0";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "ut_map_external_source_users.is_mefe_api_success = 1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_mefe_api_success",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Users Export"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_person",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto10["m_sql"] = "external_persons.id_person";
$proto10["m_srcTableName"] = "Users Export";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto12["m_sql"] = "external_persons.external_id";
$proto12["m_srcTableName"] = "Users Export";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto14["m_sql"] = "external_persons.external_system";
$proto14["m_srcTableName"] = "Users Export";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto16["m_sql"] = "external_persons.external_table";
$proto16["m_srcTableName"] = "Users Export";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto18["m_sql"] = "external_persons.syst_created_datetime";
$proto18["m_srcTableName"] = "Users Export";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto20["m_sql"] = "external_persons.creation_system_id";
$proto20["m_srcTableName"] = "Users Export";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto22["m_sql"] = "external_persons.created_by_id";
$proto22["m_srcTableName"] = "Users Export";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto24["m_sql"] = "external_persons.creation_method";
$proto24["m_srcTableName"] = "Users Export";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto26["m_sql"] = "external_persons.syst_updated_datetime";
$proto26["m_srcTableName"] = "Users Export";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto28["m_sql"] = "external_persons.update_system_id";
$proto28["m_srcTableName"] = "Users Export";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto30["m_sql"] = "external_persons.updated_by_id";
$proto30["m_srcTableName"] = "Users Export";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto32["m_sql"] = "external_persons.update_method";
$proto32["m_srcTableName"] = "Users Export";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto34["m_sql"] = "external_persons.person_status_id";
$proto34["m_srcTableName"] = "Users Export";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Users Export"
));

$proto36["m_sql"] = "person_statuses.person_status";
$proto36["m_srcTableName"] = "Users Export";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_unee_t_account_needed",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto38["m_sql"] = "external_persons.is_unee_t_account_needed";
$proto38["m_srcTableName"] = "Users Export";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto40["m_sql"] = "external_persons.unee_t_user_type_id";
$proto40["m_srcTableName"] = "Users Export";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Users Export"
));

$proto42["m_sql"] = "ut_user_types.designation";
$proto42["m_srcTableName"] = "Users Export";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Users Export"
));

$proto44["m_sql"] = "ut_user_role_types.role_type";
$proto44["m_srcTableName"] = "Users Export";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto46["m_sql"] = "external_persons.gender";
$proto46["m_srcTableName"] = "Users Export";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "person_gender",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "Users Export"
));

$proto48["m_sql"] = "person_genders.person_gender";
$proto48["m_srcTableName"] = "Users Export";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto50["m_sql"] = "external_persons.salutation_id";
$proto50["m_srcTableName"] = "Users Export";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "Users Export"
));

$proto52["m_sql"] = "person_salutations.salutation";
$proto52["m_srcTableName"] = "Users Export";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto54["m_sql"] = "external_persons.given_name";
$proto54["m_srcTableName"] = "Users Export";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto56["m_sql"] = "external_persons.middle_name";
$proto56["m_srcTableName"] = "Users Export";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "family_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto58["m_sql"] = "external_persons.family_name";
$proto58["m_srcTableName"] = "Users Export";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "date_of_birth",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto60["m_sql"] = "external_persons.date_of_birth";
$proto60["m_srcTableName"] = "Users Export";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto62["m_sql"] = "external_persons.`alias`";
$proto62["m_srcTableName"] = "Users Export";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "job_title",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto64["m_sql"] = "external_persons.job_title";
$proto64["m_srcTableName"] = "Users Export";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto66["m_sql"] = "external_persons.`organization`";
$proto66["m_srcTableName"] = "Users Export";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto68["m_sql"] = "external_persons.email";
$proto68["m_srcTableName"] = "Users Export";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_1",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto70["m_sql"] = "external_persons.tel_1";
$proto70["m_srcTableName"] = "Users Export";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_2",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto72["m_sql"] = "external_persons.tel_2";
$proto72["m_srcTableName"] = "Users Export";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "whatsapp",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto74["m_sql"] = "external_persons.whatsapp";
$proto74["m_srcTableName"] = "Users Export";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "linkedin",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto76["m_sql"] = "external_persons.linkedin";
$proto76["m_srcTableName"] = "Users Export";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "facebook",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto78["m_sql"] = "external_persons.facebook";
$proto78["m_srcTableName"] = "Users Export";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "adr1",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto80["m_sql"] = "external_persons.adr1";
$proto80["m_srcTableName"] = "Users Export";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "adr2",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto82["m_sql"] = "external_persons.adr2";
$proto82["m_srcTableName"] = "Users Export";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "adr3",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto84["m_sql"] = "external_persons.adr3";
$proto84["m_srcTableName"] = "Users Export";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto86["m_sql"] = "external_persons.City";
$proto86["m_srcTableName"] = "Users Export";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_postcode",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto88["m_sql"] = "external_persons.zip_postcode";
$proto88["m_srcTableName"] = "Users Export";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "region_or_state",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto90["m_sql"] = "external_persons.region_or_state";
$proto90["m_srcTableName"] = "Users Export";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto92["m_sql"] = "external_persons.country_code";
$proto92["m_srcTableName"] = "Users Export";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto94["m_sql"] = "external_persons.country";
$proto94["m_srcTableName"] = "Users Export";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "dupe_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto96["m_sql"] = "external_persons.dupe_id";
$proto96["m_srcTableName"] = "Users Export";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "handler_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto98["m_sql"] = "external_persons.handler_id";
$proto98["m_srcTableName"] = "Users Export";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "is_super_admin",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Users Export"
));

$proto100["m_sql"] = "ut_user_types.is_super_admin";
$proto100["m_srcTableName"] = "Users Export";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "is_mefe_api_success",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Users Export"
));

$proto102["m_sql"] = "ut_map_external_source_users.is_mefe_api_success";
$proto102["m_srcTableName"] = "Users Export";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Users Export"
));

$proto104["m_sql"] = "ut_map_external_source_users.uneet_created_datetime";
$proto104["m_srcTableName"] = "Users Export";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Users Export"
));

$proto106["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id";
$proto106["m_srcTableName"] = "Users Export";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Users Export"
));

$proto108["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto108["m_srcTableName"] = "Users Export";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto110=array();
$proto110["m_link"] = "SQLL_MAIN";
			$proto111=array();
$proto111["m_strName"] = "external_persons";
$proto111["m_srcTableName"] = "Users Export";
$proto111["m_columns"] = array();
$proto111["m_columns"][] = "id_person";
$proto111["m_columns"][] = "create_api_request_id";
$proto111["m_columns"][] = "edit_api_request_id";
$proto111["m_columns"][] = "external_id";
$proto111["m_columns"][] = "external_system";
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
$proto111["m_columns"][] = "person_status_id";
$proto111["m_columns"][] = "dupe_id";
$proto111["m_columns"][] = "handler_id";
$proto111["m_columns"][] = "is_unee_t_account_needed";
$proto111["m_columns"][] = "unee_t_user_type_id";
$proto111["m_columns"][] = "country_code";
$proto111["m_columns"][] = "gender";
$proto111["m_columns"][] = "salutation_id";
$proto111["m_columns"][] = "given_name";
$proto111["m_columns"][] = "middle_name";
$proto111["m_columns"][] = "family_name";
$proto111["m_columns"][] = "date_of_birth";
$proto111["m_columns"][] = "alias";
$proto111["m_columns"][] = "job_title";
$proto111["m_columns"][] = "organization";
$proto111["m_columns"][] = "email";
$proto111["m_columns"][] = "tel_1";
$proto111["m_columns"][] = "tel_2";
$proto111["m_columns"][] = "whatsapp";
$proto111["m_columns"][] = "linkedin";
$proto111["m_columns"][] = "facebook";
$proto111["m_columns"][] = "adr1";
$proto111["m_columns"][] = "adr2";
$proto111["m_columns"][] = "adr3";
$proto111["m_columns"][] = "City";
$proto111["m_columns"][] = "zip_postcode";
$proto111["m_columns"][] = "region_or_state";
$proto111["m_columns"][] = "country";
$obj = new SQLTable($proto111);

$proto110["m_table"] = $obj;
$proto110["m_sql"] = "external_persons";
$proto110["m_alias"] = "";
$proto110["m_srcTableName"] = "Users Export";
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
$proto115["m_strName"] = "person_genders";
$proto115["m_srcTableName"] = "Users Export";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_person_gender";
$proto115["m_columns"][] = "creation_system_id";
$proto115["m_columns"][] = "update_system_id";
$proto115["m_columns"][] = "is_obsolete";
$proto115["m_columns"][] = "is_default";
$proto115["m_columns"][] = "is_active";
$proto115["m_columns"][] = "order";
$proto115["m_columns"][] = "person_gender";
$proto115["m_columns"][] = "description";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "Users Export";
$proto116=array();
$proto116["m_sql"] = "external_persons.gender = person_genders.id_person_gender";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "= person_genders.id_person_gender";
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
$proto119["m_strName"] = "person_salutations";
$proto119["m_srcTableName"] = "Users Export";
$proto119["m_columns"] = array();
$proto119["m_columns"][] = "id_salutation";
$proto119["m_columns"][] = "creation_system_id";
$proto119["m_columns"][] = "update_system_id";
$proto119["m_columns"][] = "is_obsolete";
$proto119["m_columns"][] = "order";
$proto119["m_columns"][] = "salutation";
$proto119["m_columns"][] = "salutation_description";
$obj = new SQLTable($proto119);

$proto118["m_table"] = $obj;
$proto118["m_sql"] = "LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation";
$proto118["m_alias"] = "";
$proto118["m_srcTableName"] = "Users Export";
$proto120=array();
$proto120["m_sql"] = "external_persons.salutation_id = person_salutations.id_salutation";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "= person_salutations.id_salutation";
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
$proto123["m_strName"] = "person_statuses";
$proto123["m_srcTableName"] = "Users Export";
$proto123["m_columns"] = array();
$proto123["m_columns"][] = "id_person_status";
$proto123["m_columns"][] = "creation_system_id";
$proto123["m_columns"][] = "update_system_id";
$proto123["m_columns"][] = "is_obsolete";
$proto123["m_columns"][] = "is_default";
$proto123["m_columns"][] = "is_active";
$proto123["m_columns"][] = "order";
$proto123["m_columns"][] = "person_status";
$proto123["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto123);

$proto122["m_table"] = $obj;
$proto122["m_sql"] = "LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status";
$proto122["m_alias"] = "";
$proto122["m_srcTableName"] = "Users Export";
$proto124=array();
$proto124["m_sql"] = "external_persons.person_status_id = person_statuses.id_person_status";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "= person_statuses.id_person_status";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

$proto122["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto122);

$proto0["m_fromlist"][]=$obj;
												$proto126=array();
$proto126["m_link"] = "SQLL_LEFTJOIN";
			$proto127=array();
$proto127["m_strName"] = "ut_user_types";
$proto127["m_srcTableName"] = "Users Export";
$proto127["m_columns"] = array();
$proto127["m_columns"][] = "id_unee_t_user_type";
$proto127["m_columns"][] = "syst_created_datetime";
$proto127["m_columns"][] = "creation_system_id";
$proto127["m_columns"][] = "created_by_id";
$proto127["m_columns"][] = "creation_method";
$proto127["m_columns"][] = "syst_updated_datetime";
$proto127["m_columns"][] = "update_system_id";
$proto127["m_columns"][] = "updated_by_id";
$proto127["m_columns"][] = "update_method";
$proto127["m_columns"][] = "organization_id";
$proto127["m_columns"][] = "order";
$proto127["m_columns"][] = "is_obsolete";
$proto127["m_columns"][] = "designation";
$proto127["m_columns"][] = "description";
$proto127["m_columns"][] = "ut_user_role_type_id";
$proto127["m_columns"][] = "is_super_admin";
$proto127["m_columns"][] = "is_all_unit";
$proto127["m_columns"][] = "is_all_units_in_country";
$proto127["m_columns"][] = "is_all_units_in_area";
$proto127["m_columns"][] = "is_all_units_in_level_1";
$proto127["m_columns"][] = "is_all_units_in_level_2";
$proto127["m_columns"][] = "is_occupant";
$proto127["m_columns"][] = "is_public";
$proto127["m_columns"][] = "is_default_assignee";
$proto127["m_columns"][] = "is_default_invited";
$proto127["m_columns"][] = "is_unit_owner";
$proto127["m_columns"][] = "is_dashboard_access";
$proto127["m_columns"][] = "can_see_role_contractor";
$proto127["m_columns"][] = "can_see_role_mgt_cny";
$proto127["m_columns"][] = "can_see_occupant";
$proto127["m_columns"][] = "can_see_role_landlord";
$proto127["m_columns"][] = "can_see_role_agent";
$proto127["m_columns"][] = "can_see_role_tenant";
$proto127["m_columns"][] = "is_assigned_to_case";
$proto127["m_columns"][] = "is_invited_to_case";
$proto127["m_columns"][] = "is_solution_updated";
$proto127["m_columns"][] = "is_next_step_updated";
$proto127["m_columns"][] = "is_deadline_updated";
$proto127["m_columns"][] = "is_case_resolved";
$proto127["m_columns"][] = "is_case_critical";
$proto127["m_columns"][] = "is_case_blocker";
$proto127["m_columns"][] = "is_message_from_contractor";
$proto127["m_columns"][] = "is_message_from_mgt_cny";
$proto127["m_columns"][] = "is_message_from_agent";
$proto127["m_columns"][] = "is_message_from_occupant";
$proto127["m_columns"][] = "is_message_from_ll";
$proto127["m_columns"][] = "is_message_from_tenant";
$proto127["m_columns"][] = "is_any_new_message";
$proto127["m_columns"][] = "is_new_ir";
$proto127["m_columns"][] = "is_new_inventory";
$proto127["m_columns"][] = "is_new_item";
$proto127["m_columns"][] = "is_item_moved";
$proto127["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto127);

$proto126["m_table"] = $obj;
$proto126["m_sql"] = "LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto126["m_alias"] = "";
$proto126["m_srcTableName"] = "Users Export";
$proto128=array();
$proto128["m_sql"] = "external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

$proto126["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto126);

$proto0["m_fromlist"][]=$obj;
												$proto130=array();
$proto130["m_link"] = "SQLL_LEFTJOIN";
			$proto131=array();
$proto131["m_strName"] = "ut_user_role_types";
$proto131["m_srcTableName"] = "Users Export";
$proto131["m_columns"] = array();
$proto131["m_columns"][] = "id_role_type";
$proto131["m_columns"][] = "syst_created_datetime";
$proto131["m_columns"][] = "creation_system_id";
$proto131["m_columns"][] = "created_by_id";
$proto131["m_columns"][] = "syst_updated_datetime";
$proto131["m_columns"][] = "update_system_id";
$proto131["m_columns"][] = "updated_by_id";
$proto131["m_columns"][] = "order";
$proto131["m_columns"][] = "is_obsolete";
$proto131["m_columns"][] = "role_type";
$proto131["m_columns"][] = "bz_description";
$proto131["m_columns"][] = "description";
$obj = new SQLTable($proto131);

$proto130["m_table"] = $obj;
$proto130["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto130["m_alias"] = "";
$proto130["m_srcTableName"] = "Users Export";
$proto132=array();
$proto132["m_sql"] = "ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto132["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Users Export"
));

$proto132["m_column"]=$obj;
$proto132["m_contained"] = array();
$proto132["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto132["m_havingmode"] = false;
$proto132["m_inBrackets"] = false;
$proto132["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto132);

$proto130["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto130);

$proto0["m_fromlist"][]=$obj;
												$proto134=array();
$proto134["m_link"] = "SQLL_INNERJOIN";
			$proto135=array();
$proto135["m_strName"] = "ut_map_external_source_users";
$proto135["m_srcTableName"] = "Users Export";
$proto135["m_columns"] = array();
$proto135["m_columns"][] = "id_map";
$proto135["m_columns"][] = "create_api_request_id";
$proto135["m_columns"][] = "edit_api_request_id";
$proto135["m_columns"][] = "syst_created_datetime";
$proto135["m_columns"][] = "creation_system_id";
$proto135["m_columns"][] = "created_by_id";
$proto135["m_columns"][] = "creation_method";
$proto135["m_columns"][] = "syst_updated_datetime";
$proto135["m_columns"][] = "update_system_id";
$proto135["m_columns"][] = "updated_by_id";
$proto135["m_columns"][] = "update_method";
$proto135["m_columns"][] = "is_update_on_duplicate_key";
$proto135["m_columns"][] = "organization_id";
$proto135["m_columns"][] = "is_obsolete";
$proto135["m_columns"][] = "is_update_needed";
$proto135["m_columns"][] = "person_id";
$proto135["m_columns"][] = "mefe_user_id_parent";
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
$proto134["m_sql"] = "INNER JOIN ut_map_external_source_users ON external_persons.created_by_id = ut_map_external_source_users.organization_id AND external_persons.external_id = ut_map_external_source_users.external_person_id AND external_persons.external_system = ut_map_external_source_users.external_system AND external_persons.external_table = ut_map_external_source_users.table_in_external_system";
$proto134["m_alias"] = "";
$proto134["m_srcTableName"] = "Users Export";
$proto136=array();
$proto136["m_sql"] = "external_persons.created_by_id = ut_map_external_source_users.organization_id AND external_persons.external_id = ut_map_external_source_users.external_person_id AND external_persons.external_system = ut_map_external_source_users.external_system AND external_persons.external_table = ut_map_external_source_users.table_in_external_system";
$proto136["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_persons.created_by_id = ut_map_external_source_users.organization_id AND external_persons.external_id = ut_map_external_source_users.external_person_id AND external_persons.external_system = ut_map_external_source_users.external_system AND external_persons.external_table = ut_map_external_source_users.table_in_external_system"
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
						$proto138=array();
$proto138["m_sql"] = "external_persons.created_by_id = ut_map_external_source_users.organization_id";
$proto138["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto138["m_column"]=$obj;
$proto138["m_contained"] = array();
$proto138["m_strCase"] = "= ut_map_external_source_users.organization_id";
$proto138["m_havingmode"] = false;
$proto138["m_inBrackets"] = false;
$proto138["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto138);

			$proto136["m_contained"][]=$obj;
						$proto140=array();
$proto140["m_sql"] = "external_persons.external_id = ut_map_external_source_users.external_person_id";
$proto140["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto140["m_column"]=$obj;
$proto140["m_contained"] = array();
$proto140["m_strCase"] = "= ut_map_external_source_users.external_person_id";
$proto140["m_havingmode"] = false;
$proto140["m_inBrackets"] = false;
$proto140["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto140);

			$proto136["m_contained"][]=$obj;
						$proto142=array();
$proto142["m_sql"] = "external_persons.external_system = ut_map_external_source_users.external_system";
$proto142["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto142["m_column"]=$obj;
$proto142["m_contained"] = array();
$proto142["m_strCase"] = "= ut_map_external_source_users.external_system";
$proto142["m_havingmode"] = false;
$proto142["m_inBrackets"] = false;
$proto142["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto142);

			$proto136["m_contained"][]=$obj;
						$proto144=array();
$proto144["m_sql"] = "external_persons.external_table = ut_map_external_source_users.table_in_external_system";
$proto144["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto144["m_column"]=$obj;
$proto144["m_contained"] = array();
$proto144["m_strCase"] = "= ut_map_external_source_users.table_in_external_system";
$proto144["m_havingmode"] = false;
$proto144["m_inBrackets"] = false;
$proto144["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto144);

			$proto136["m_contained"][]=$obj;
$proto136["m_strCase"] = "";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto134["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto134);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto146=array();
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto146["m_column"]=$obj;
$proto146["m_bAsc"] = 1;
$proto146["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto146);

$proto0["m_orderby"][]=$obj;					
												$proto148=array();
						$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Users Export"
));

$proto148["m_column"]=$obj;
$proto148["m_bAsc"] = 1;
$proto148["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto148);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Users Export";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_users_export = createSqlQuery_users_export();


	
					
;

																																																		

$tdatausers_export[".sqlquery"] = $queryData_users_export;

include_once(getabspath("include/users_export_events.php"));
$tableEvents["Users Export"] = new eventclass_users_export;
$tdatausers_export[".hasEvents"] = true;

?>