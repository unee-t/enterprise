<?php




$tdataExport_and_Import_Users = array();
$tdataExport_and_Import_Users[".searchableFields"] = array();
	$tdataExport_and_Import_Users[".truncateText"] = true;
	$tdataExport_and_Import_Users[".NumberOfChars"] = 80;
	$tdataExport_and_Import_Users[".ShortName"] = "Export_and_Import_Users";
	$tdataExport_and_Import_Users[".OwnerID"] = "created_by_id";
	$tdataExport_and_Import_Users[".OriginalTable"] = "external_persons";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataExport_and_Import_Users[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataExport_and_Import_Users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsExport_and_Import_Users = array();
$fieldToolTipsExport_and_Import_Users = array();
$pageTitlesExport_and_Import_Users = array();
$placeHoldersExport_and_Import_Users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsExport_and_Import_Users["English"] = array();
	$fieldToolTipsExport_and_Import_Users["English"] = array();
	$placeHoldersExport_and_Import_Users["English"] = array();
	$pageTitlesExport_and_Import_Users["English"] = array();
	$fieldLabelsExport_and_Import_Users["English"]["id_person"] = "Unee-T User ID";
	$fieldToolTipsExport_and_Import_Users["English"]["id_person"] = "";
	$placeHoldersExport_and_Import_Users["English"]["id_person"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["external_id"] = "External Id";
	$fieldToolTipsExport_and_Import_Users["English"]["external_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["external_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["external_system"] = "External System";
	$fieldToolTipsExport_and_Import_Users["English"]["external_system"] = "";
	$placeHoldersExport_and_Import_Users["English"]["external_system"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["external_table"] = "External Table";
	$fieldToolTipsExport_and_Import_Users["English"]["external_table"] = "";
	$placeHoldersExport_and_Import_Users["English"]["external_table"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsExport_and_Import_Users["English"]["syst_created_datetime"] = "";
	$placeHoldersExport_and_Import_Users["English"]["syst_created_datetime"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsExport_and_Import_Users["English"]["creation_system_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["creation_system_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsExport_and_Import_Users["English"]["created_by_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["created_by_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsExport_and_Import_Users["English"]["syst_updated_datetime"] = "";
	$placeHoldersExport_and_Import_Users["English"]["syst_updated_datetime"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsExport_and_Import_Users["English"]["update_system_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["update_system_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsExport_and_Import_Users["English"]["updated_by_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["updated_by_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["person_status_id"] = "Status ID";
	$fieldToolTipsExport_and_Import_Users["English"]["person_status_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["person_status_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["dupe_id"] = "Dupe Id";
	$fieldToolTipsExport_and_Import_Users["English"]["dupe_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["dupe_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["handler_id"] = "Handler Id";
	$fieldToolTipsExport_and_Import_Users["English"]["handler_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["handler_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["is_unee_t_account_needed"] = "Create in Unee-T";
	$fieldToolTipsExport_and_Import_Users["English"]["is_unee_t_account_needed"] = "";
	$placeHoldersExport_and_Import_Users["English"]["is_unee_t_account_needed"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["unee_t_user_type_id"] = "Unee T User Type ID";
	$fieldToolTipsExport_and_Import_Users["English"]["unee_t_user_type_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["country_code"] = "Country Code";
	$fieldToolTipsExport_and_Import_Users["English"]["country_code"] = "";
	$placeHoldersExport_and_Import_Users["English"]["country_code"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["gender"] = "Gender ID";
	$fieldToolTipsExport_and_Import_Users["English"]["gender"] = "";
	$placeHoldersExport_and_Import_Users["English"]["gender"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["salutation_id"] = "Salutation ID";
	$fieldToolTipsExport_and_Import_Users["English"]["salutation_id"] = "";
	$placeHoldersExport_and_Import_Users["English"]["salutation_id"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["given_name"] = "Given Name";
	$fieldToolTipsExport_and_Import_Users["English"]["given_name"] = "";
	$placeHoldersExport_and_Import_Users["English"]["given_name"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["middle_name"] = "Middle Name";
	$fieldToolTipsExport_and_Import_Users["English"]["middle_name"] = "";
	$placeHoldersExport_and_Import_Users["English"]["middle_name"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["family_name"] = "Family Name";
	$fieldToolTipsExport_and_Import_Users["English"]["family_name"] = "";
	$placeHoldersExport_and_Import_Users["English"]["family_name"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["date_of_birth"] = "Date Of Birth";
	$fieldToolTipsExport_and_Import_Users["English"]["date_of_birth"] = "";
	$placeHoldersExport_and_Import_Users["English"]["date_of_birth"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["alias"] = "Alias";
	$fieldToolTipsExport_and_Import_Users["English"]["alias"] = "";
	$placeHoldersExport_and_Import_Users["English"]["alias"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["job_title"] = "Job Title";
	$fieldToolTipsExport_and_Import_Users["English"]["job_title"] = "";
	$placeHoldersExport_and_Import_Users["English"]["job_title"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["organization"] = "Organization";
	$fieldToolTipsExport_and_Import_Users["English"]["organization"] = "";
	$placeHoldersExport_and_Import_Users["English"]["organization"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["email"] = "Email";
	$fieldToolTipsExport_and_Import_Users["English"]["email"] = "";
	$placeHoldersExport_and_Import_Users["English"]["email"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["tel_1"] = "Tel 1";
	$fieldToolTipsExport_and_Import_Users["English"]["tel_1"] = "";
	$placeHoldersExport_and_Import_Users["English"]["tel_1"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["tel_2"] = "Tel 2";
	$fieldToolTipsExport_and_Import_Users["English"]["tel_2"] = "";
	$placeHoldersExport_and_Import_Users["English"]["tel_2"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["whatsapp"] = "Whatsapp";
	$fieldToolTipsExport_and_Import_Users["English"]["whatsapp"] = "";
	$placeHoldersExport_and_Import_Users["English"]["whatsapp"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["linkedin"] = "Linkedin";
	$fieldToolTipsExport_and_Import_Users["English"]["linkedin"] = "";
	$placeHoldersExport_and_Import_Users["English"]["linkedin"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["facebook"] = "Facebook";
	$fieldToolTipsExport_and_Import_Users["English"]["facebook"] = "";
	$placeHoldersExport_and_Import_Users["English"]["facebook"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["adr1"] = "Adr1";
	$fieldToolTipsExport_and_Import_Users["English"]["adr1"] = "";
	$placeHoldersExport_and_Import_Users["English"]["adr1"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["adr2"] = "Adr2";
	$fieldToolTipsExport_and_Import_Users["English"]["adr2"] = "";
	$placeHoldersExport_and_Import_Users["English"]["adr2"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["adr3"] = "Adr3";
	$fieldToolTipsExport_and_Import_Users["English"]["adr3"] = "";
	$placeHoldersExport_and_Import_Users["English"]["adr3"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["City"] = "City";
	$fieldToolTipsExport_and_Import_Users["English"]["City"] = "";
	$placeHoldersExport_and_Import_Users["English"]["City"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["zip_postcode"] = "Zip Postcode";
	$fieldToolTipsExport_and_Import_Users["English"]["zip_postcode"] = "";
	$placeHoldersExport_and_Import_Users["English"]["zip_postcode"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["region_or_state"] = "Region Or State";
	$fieldToolTipsExport_and_Import_Users["English"]["region_or_state"] = "";
	$placeHoldersExport_and_Import_Users["English"]["region_or_state"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["country"] = "Country";
	$fieldToolTipsExport_and_Import_Users["English"]["country"] = "";
	$placeHoldersExport_and_Import_Users["English"]["country"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["person_status"] = "Status";
	$fieldToolTipsExport_and_Import_Users["English"]["person_status"] = "";
	$placeHoldersExport_and_Import_Users["English"]["person_status"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["person_gender"] = "Gender";
	$fieldToolTipsExport_and_Import_Users["English"]["person_gender"] = "";
	$placeHoldersExport_and_Import_Users["English"]["person_gender"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["salutation"] = "Salutation";
	$fieldToolTipsExport_and_Import_Users["English"]["salutation"] = "";
	$placeHoldersExport_and_Import_Users["English"]["salutation"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsExport_and_Import_Users["English"]["creation_method"] = "";
	$placeHoldersExport_and_Import_Users["English"]["creation_method"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["update_method"] = "Update Method";
	$fieldToolTipsExport_and_Import_Users["English"]["update_method"] = "";
	$placeHoldersExport_and_Import_Users["English"]["update_method"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["designation"] = "User Type";
	$fieldToolTipsExport_and_Import_Users["English"]["designation"] = "";
	$placeHoldersExport_and_Import_Users["English"]["designation"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["uneet_created_datetime"] = "Created On";
	$fieldToolTipsExport_and_Import_Users["English"]["uneet_created_datetime"] = "";
	$placeHoldersExport_and_Import_Users["English"]["uneet_created_datetime"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["role_type"] = "Role Type";
	$fieldToolTipsExport_and_Import_Users["English"]["role_type"] = "";
	$placeHoldersExport_and_Import_Users["English"]["role_type"] = "";
	$fieldLabelsExport_and_Import_Users["English"]["unee_t_mefe_user_api_key"] = "User Api Key";
	$fieldToolTipsExport_and_Import_Users["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHoldersExport_and_Import_Users["English"]["unee_t_mefe_user_api_key"] = "";
	if (count($fieldToolTipsExport_and_Import_Users["English"]))
		$tdataExport_and_Import_Users[".isUseToolTips"] = true;
}


	$tdataExport_and_Import_Users[".NCSearch"] = true;



$tdataExport_and_Import_Users[".shortTableName"] = "Export_and_Import_Users";
$tdataExport_and_Import_Users[".nSecOptions"] = 1;

$tdataExport_and_Import_Users[".mainTableOwnerID"] = "created_by_id";
$tdataExport_and_Import_Users[".entityType"] = 1;

$tdataExport_and_Import_Users[".strOriginalTableName"] = "external_persons";

		 



$tdataExport_and_Import_Users[".showAddInPopup"] = false;

$tdataExport_and_Import_Users[".showEditInPopup"] = false;

$tdataExport_and_Import_Users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataExport_and_Import_Users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataExport_and_Import_Users[".listAjax"] = true;
//	temporary
$tdataExport_and_Import_Users[".listAjax"] = false;

	$tdataExport_and_Import_Users[".audit"] = true;

	$tdataExport_and_Import_Users[".locking"] = false;


$pages = $tdataExport_and_Import_Users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataExport_and_Import_Users[".edit"] = true;
	$tdataExport_and_Import_Users[".afterEditAction"] = 1;
	$tdataExport_and_Import_Users[".closePopupAfterEdit"] = 1;
	$tdataExport_and_Import_Users[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataExport_and_Import_Users[".add"] = true;
$tdataExport_and_Import_Users[".afterAddAction"] = 0;
$tdataExport_and_Import_Users[".closePopupAfterAdd"] = 1;
$tdataExport_and_Import_Users[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataExport_and_Import_Users[".list"] = true;
}



$tdataExport_and_Import_Users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataExport_and_Import_Users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataExport_and_Import_Users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataExport_and_Import_Users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataExport_and_Import_Users[".printFriendly"] = true;
}



$tdataExport_and_Import_Users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataExport_and_Import_Users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataExport_and_Import_Users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataExport_and_Import_Users[".isUseAjaxSuggest"] = true;

$tdataExport_and_Import_Users[".rowHighlite"] = true;





$tdataExport_and_Import_Users[".ajaxCodeSnippetAdded"] = false;

$tdataExport_and_Import_Users[".buttonsAdded"] = false;

$tdataExport_and_Import_Users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataExport_and_Import_Users[".isUseTimeForSearch"] = false;


$tdataExport_and_Import_Users[".badgeColor"] = "1E90FF";


$tdataExport_and_Import_Users[".allSearchFields"] = array();
$tdataExport_and_Import_Users[".filterFields"] = array();
$tdataExport_and_Import_Users[".requiredSearchFields"] = array();

$tdataExport_and_Import_Users[".googleLikeFields"] = array();
$tdataExport_and_Import_Users[".googleLikeFields"][] = "external_system";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "external_table";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "person_status";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "designation";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "role_type";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "person_gender";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "salutation";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "given_name";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "middle_name";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "family_name";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "alias";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "job_title";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "organization";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "email";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "tel_1";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "tel_2";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "whatsapp";
$tdataExport_and_Import_Users[".googleLikeFields"][] = "country_code";



$tdataExport_and_Import_Users[".tableType"] = "list";

$tdataExport_and_Import_Users[".printerPageOrientation"] = 0;
$tdataExport_and_Import_Users[".nPrinterPageScale"] = 100;

$tdataExport_and_Import_Users[".nPrinterSplitRecords"] = 40;

$tdataExport_and_Import_Users[".nPrinterPDFSplitRecords"] = 40;


$tdataExport_and_Import_Users[".geocodingEnabled"] = false;





$tdataExport_and_Import_Users[".isResizeColumns"] = true;





$tdataExport_and_Import_Users[".pageSize"] = 20;

$tdataExport_and_Import_Users[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataExport_and_Import_Users[".strOrderBy"] = $tstrOrderBy;

$tdataExport_and_Import_Users[".orderindexes"] = array();
	$tdataExport_and_Import_Users[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_persons.unee_t_user_type_id");

	$tdataExport_and_Import_Users[".orderindexes"][] = array(23, (1 ? "ASC" : "DESC"), "external_persons.given_name");


$tdataExport_and_Import_Users[".sqlHead"] = "SELECT external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.gender,  person_genders.person_gender,  external_persons.salutation_id,  person_salutations.salutation,  external_persons.given_name,  external_persons.middle_name,  external_persons.family_name,  external_persons.date_of_birth,  external_persons.`alias`,  external_persons.job_title,  external_persons.`organization`,  external_persons.email,  external_persons.tel_1,  external_persons.tel_2,  external_persons.whatsapp,  external_persons.linkedin,  external_persons.facebook,  external_persons.adr1,  external_persons.adr2,  external_persons.adr3,  external_persons.City,  external_persons.zip_postcode,  external_persons.region_or_state,  external_persons.country_code,  external_persons.country,  external_persons.dupe_id,  external_persons.handler_id,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_api_key";
$tdataExport_and_Import_Users[".sqlFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$tdataExport_and_Import_Users[".sqlWhereExpr"] = "";
$tdataExport_and_Import_Users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataExport_and_Import_Users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataExport_and_Import_Users[".arrGroupsPerPage"] = $arrGPP;

$tdataExport_and_Import_Users[".highlightSearchResults"] = true;

$tableKeysExport_and_Import_Users = array();
$tableKeysExport_and_Import_Users[] = "external_id";
$tableKeysExport_and_Import_Users[] = "external_system";
$tableKeysExport_and_Import_Users[] = "external_table";
$tableKeysExport_and_Import_Users[] = "created_by_id";
$tdataExport_and_Import_Users[".Keys"] = $tableKeysExport_and_Import_Users;


$tdataExport_and_Import_Users[".hideMobileList"] = array();




//	id_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_person";
	$fdata["GoodName"] = "id_person";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","id_person");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataExport_and_Import_Users["id_person"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "id_person";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","external_id");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Users["external_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "external_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","external_system");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["external_system"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "external_system";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","external_table");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["external_table"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","syst_created_datetime");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["syst_created_datetime"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","creation_system_id");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["creation_system_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","created_by_id");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["created_by_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","creation_method");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["creation_method"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","syst_updated_datetime");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["syst_updated_datetime"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","update_system_id");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["update_system_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","updated_by_id");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["updated_by_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","update_method");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["update_method"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "update_method";
//	person_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "person_status_id";
	$fdata["GoodName"] = "person_status_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","person_status_id");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["person_status_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "person_status_id";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "person_status";
	$fdata["GoodName"] = "person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","person_status");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["person_status"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "person_status";
//	is_unee_t_account_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_unee_t_account_needed";
	$fdata["GoodName"] = "is_unee_t_account_needed";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","is_unee_t_account_needed");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["is_unee_t_account_needed"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "is_unee_t_account_needed";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","unee_t_user_type_id");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataExport_and_Import_Users["unee_t_user_type_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "unee_t_user_type_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","designation");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["designation"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "designation";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","role_type");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["role_type"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "role_type";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","gender");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["gender"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "gender";
//	person_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "person_gender";
	$fdata["GoodName"] = "person_gender";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","person_gender");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["person_gender"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "person_gender";
//	salutation_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "salutation_id";
	$fdata["GoodName"] = "salutation_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","salutation_id");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["salutation_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "salutation_id";
//	salutation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "salutation";
	$fdata["GoodName"] = "salutation";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","salutation");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["salutation"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "salutation";
//	given_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "given_name";
	$fdata["GoodName"] = "given_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","given_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataExport_and_Import_Users["given_name"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "given_name";
//	middle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "middle_name";
	$fdata["GoodName"] = "middle_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","middle_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["middle_name"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "middle_name";
//	family_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "family_name";
	$fdata["GoodName"] = "family_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","family_name");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["family_name"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "family_name";
//	date_of_birth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "date_of_birth";
	$fdata["GoodName"] = "date_of_birth";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","date_of_birth");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["date_of_birth"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "date_of_birth";
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","alias");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["alias"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "alias";
//	job_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "job_title";
	$fdata["GoodName"] = "job_title";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","job_title");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["job_title"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "job_title";
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","organization");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["organization"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "organization";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","email");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdataExport_and_Import_Users["email"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "email";
//	tel_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "tel_1";
	$fdata["GoodName"] = "tel_1";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","tel_1");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["tel_1"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "tel_1";
//	tel_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "tel_2";
	$fdata["GoodName"] = "tel_2";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","tel_2");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["tel_2"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "tel_2";
//	whatsapp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "whatsapp";
	$fdata["GoodName"] = "whatsapp";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","whatsapp");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["whatsapp"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "whatsapp";
//	linkedin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "linkedin";
	$fdata["GoodName"] = "linkedin";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","linkedin");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["linkedin"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "linkedin";
//	facebook
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "facebook";
	$fdata["GoodName"] = "facebook";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","facebook");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["facebook"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "facebook";
//	adr1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "adr1";
	$fdata["GoodName"] = "adr1";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","adr1");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["adr1"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "adr1";
//	adr2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "adr2";
	$fdata["GoodName"] = "adr2";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","adr2");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["adr2"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "adr2";
//	adr3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "adr3";
	$fdata["GoodName"] = "adr3";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","adr3");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["adr3"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "adr3";
//	City
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "City";
	$fdata["GoodName"] = "City";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","City");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["City"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "City";
//	zip_postcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "zip_postcode";
	$fdata["GoodName"] = "zip_postcode";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","zip_postcode");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["zip_postcode"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "zip_postcode";
//	region_or_state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "region_or_state";
	$fdata["GoodName"] = "region_or_state";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","region_or_state");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["region_or_state"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "region_or_state";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","country_code");
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
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdataExport_and_Import_Users["country_code"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "country_code";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","country");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["country"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "country";
//	dupe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "dupe_id";
	$fdata["GoodName"] = "dupe_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","dupe_id");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["dupe_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "dupe_id";
//	handler_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "handler_id";
	$fdata["GoodName"] = "handler_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","handler_id");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["handler_id"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "handler_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","uneet_created_datetime");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["uneet_created_datetime"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Export_and_Import_Users","unee_t_mefe_user_api_key");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataExport_and_Import_Users["unee_t_mefe_user_api_key"] = $fdata;
		$tdataExport_and_Import_Users[".searchableFields"][] = "unee_t_mefe_user_api_key";


$tables_data["Export and Import Users"]=&$tdataExport_and_Import_Users;
$field_labels["Export_and_Import_Users"] = &$fieldLabelsExport_and_Import_Users;
$fieldToolTips["Export_and_Import_Users"] = &$fieldToolTipsExport_and_Import_Users;
$placeHolders["Export_and_Import_Users"] = &$placeHoldersExport_and_Import_Users;
$page_titles["Export_and_Import_Users"] = &$pageTitlesExport_and_Import_Users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Export and Import Users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Export and Import Users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Export_and_Import_Users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.gender,  person_genders.person_gender,  external_persons.salutation_id,  person_salutations.salutation,  external_persons.given_name,  external_persons.middle_name,  external_persons.family_name,  external_persons.date_of_birth,  external_persons.`alias`,  external_persons.job_title,  external_persons.`organization`,  external_persons.email,  external_persons.tel_1,  external_persons.tel_2,  external_persons.whatsapp,  external_persons.linkedin,  external_persons.facebook,  external_persons.adr1,  external_persons.adr2,  external_persons.adr3,  external_persons.City,  external_persons.zip_postcode,  external_persons.region_or_state,  external_persons.country_code,  external_persons.country,  external_persons.dupe_id,  external_persons.handler_id,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_api_key";
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
	"m_srcTableName" => "Export and Import Users"
));

$proto6["m_sql"] = "external_persons.id_person";
$proto6["m_srcTableName"] = "Export and Import Users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto8["m_sql"] = "external_persons.external_id";
$proto8["m_srcTableName"] = "Export and Import Users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto10["m_sql"] = "external_persons.external_system";
$proto10["m_srcTableName"] = "Export and Import Users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto12["m_sql"] = "external_persons.external_table";
$proto12["m_srcTableName"] = "Export and Import Users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto14["m_sql"] = "external_persons.syst_created_datetime";
$proto14["m_srcTableName"] = "Export and Import Users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto16["m_sql"] = "external_persons.creation_system_id";
$proto16["m_srcTableName"] = "Export and Import Users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto18["m_sql"] = "external_persons.created_by_id";
$proto18["m_srcTableName"] = "Export and Import Users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto20["m_sql"] = "external_persons.creation_method";
$proto20["m_srcTableName"] = "Export and Import Users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto22["m_sql"] = "external_persons.syst_updated_datetime";
$proto22["m_srcTableName"] = "Export and Import Users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto24["m_sql"] = "external_persons.update_system_id";
$proto24["m_srcTableName"] = "Export and Import Users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto26["m_sql"] = "external_persons.updated_by_id";
$proto26["m_srcTableName"] = "Export and Import Users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto28["m_sql"] = "external_persons.update_method";
$proto28["m_srcTableName"] = "Export and Import Users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto30["m_sql"] = "external_persons.person_status_id";
$proto30["m_srcTableName"] = "Export and Import Users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Export and Import Users"
));

$proto32["m_sql"] = "person_statuses.person_status";
$proto32["m_srcTableName"] = "Export and Import Users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_unee_t_account_needed",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto34["m_sql"] = "external_persons.is_unee_t_account_needed";
$proto34["m_srcTableName"] = "Export and Import Users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto36["m_sql"] = "external_persons.unee_t_user_type_id";
$proto36["m_srcTableName"] = "Export and Import Users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import Users"
));

$proto38["m_sql"] = "ut_user_types.designation";
$proto38["m_srcTableName"] = "Export and Import Users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Export and Import Users"
));

$proto40["m_sql"] = "ut_user_role_types.role_type";
$proto40["m_srcTableName"] = "Export and Import Users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto42["m_sql"] = "external_persons.gender";
$proto42["m_srcTableName"] = "Export and Import Users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "person_gender",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "Export and Import Users"
));

$proto44["m_sql"] = "person_genders.person_gender";
$proto44["m_srcTableName"] = "Export and Import Users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto46["m_sql"] = "external_persons.salutation_id";
$proto46["m_srcTableName"] = "Export and Import Users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "Export and Import Users"
));

$proto48["m_sql"] = "person_salutations.salutation";
$proto48["m_srcTableName"] = "Export and Import Users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto50["m_sql"] = "external_persons.given_name";
$proto50["m_srcTableName"] = "Export and Import Users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "middle_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto52["m_sql"] = "external_persons.middle_name";
$proto52["m_srcTableName"] = "Export and Import Users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "family_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto54["m_sql"] = "external_persons.family_name";
$proto54["m_srcTableName"] = "Export and Import Users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "date_of_birth",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto56["m_sql"] = "external_persons.date_of_birth";
$proto56["m_srcTableName"] = "Export and Import Users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto58["m_sql"] = "external_persons.`alias`";
$proto58["m_srcTableName"] = "Export and Import Users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "job_title",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto60["m_sql"] = "external_persons.job_title";
$proto60["m_srcTableName"] = "Export and Import Users";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto62["m_sql"] = "external_persons.`organization`";
$proto62["m_srcTableName"] = "Export and Import Users";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto64["m_sql"] = "external_persons.email";
$proto64["m_srcTableName"] = "Export and Import Users";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_1",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto66["m_sql"] = "external_persons.tel_1";
$proto66["m_srcTableName"] = "Export and Import Users";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "tel_2",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto68["m_sql"] = "external_persons.tel_2";
$proto68["m_srcTableName"] = "Export and Import Users";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "whatsapp",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto70["m_sql"] = "external_persons.whatsapp";
$proto70["m_srcTableName"] = "Export and Import Users";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "linkedin",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto72["m_sql"] = "external_persons.linkedin";
$proto72["m_srcTableName"] = "Export and Import Users";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "facebook",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto74["m_sql"] = "external_persons.facebook";
$proto74["m_srcTableName"] = "Export and Import Users";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "adr1",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto76["m_sql"] = "external_persons.adr1";
$proto76["m_srcTableName"] = "Export and Import Users";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "adr2",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto78["m_sql"] = "external_persons.adr2";
$proto78["m_srcTableName"] = "Export and Import Users";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "adr3",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto80["m_sql"] = "external_persons.adr3";
$proto80["m_srcTableName"] = "Export and Import Users";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "City",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto82["m_sql"] = "external_persons.City";
$proto82["m_srcTableName"] = "Export and Import Users";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_postcode",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto84["m_sql"] = "external_persons.zip_postcode";
$proto84["m_srcTableName"] = "Export and Import Users";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "region_or_state",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto86["m_sql"] = "external_persons.region_or_state";
$proto86["m_srcTableName"] = "Export and Import Users";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto88["m_sql"] = "external_persons.country_code";
$proto88["m_srcTableName"] = "Export and Import Users";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto90["m_sql"] = "external_persons.country";
$proto90["m_srcTableName"] = "Export and Import Users";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "dupe_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto92["m_sql"] = "external_persons.dupe_id";
$proto92["m_srcTableName"] = "Export and Import Users";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "handler_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto94["m_sql"] = "external_persons.handler_id";
$proto94["m_srcTableName"] = "Export and Import Users";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Export and Import Users"
));

$proto96["m_sql"] = "ut_map_external_source_users.uneet_created_datetime";
$proto96["m_srcTableName"] = "Export and Import Users";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Export and Import Users"
));

$proto98["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto98["m_srcTableName"] = "Export and Import Users";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto100=array();
$proto100["m_link"] = "SQLL_MAIN";
			$proto101=array();
$proto101["m_strName"] = "external_persons";
$proto101["m_srcTableName"] = "Export and Import Users";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "id_person";
$proto101["m_columns"][] = "create_api_request_id";
$proto101["m_columns"][] = "edit_api_request_id";
$proto101["m_columns"][] = "external_id";
$proto101["m_columns"][] = "external_system";
$proto101["m_columns"][] = "external_table";
$proto101["m_columns"][] = "syst_created_datetime";
$proto101["m_columns"][] = "creation_system_id";
$proto101["m_columns"][] = "created_by_id";
$proto101["m_columns"][] = "creation_method";
$proto101["m_columns"][] = "syst_updated_datetime";
$proto101["m_columns"][] = "update_system_id";
$proto101["m_columns"][] = "updated_by_id";
$proto101["m_columns"][] = "update_method";
$proto101["m_columns"][] = "is_update_on_duplicate_key";
$proto101["m_columns"][] = "person_status_id";
$proto101["m_columns"][] = "dupe_id";
$proto101["m_columns"][] = "handler_id";
$proto101["m_columns"][] = "is_unee_t_account_needed";
$proto101["m_columns"][] = "unee_t_user_type_id";
$proto101["m_columns"][] = "country_code";
$proto101["m_columns"][] = "gender";
$proto101["m_columns"][] = "salutation_id";
$proto101["m_columns"][] = "given_name";
$proto101["m_columns"][] = "middle_name";
$proto101["m_columns"][] = "family_name";
$proto101["m_columns"][] = "date_of_birth";
$proto101["m_columns"][] = "alias";
$proto101["m_columns"][] = "job_title";
$proto101["m_columns"][] = "organization";
$proto101["m_columns"][] = "email";
$proto101["m_columns"][] = "tel_1";
$proto101["m_columns"][] = "tel_2";
$proto101["m_columns"][] = "whatsapp";
$proto101["m_columns"][] = "linkedin";
$proto101["m_columns"][] = "facebook";
$proto101["m_columns"][] = "adr1";
$proto101["m_columns"][] = "adr2";
$proto101["m_columns"][] = "adr3";
$proto101["m_columns"][] = "City";
$proto101["m_columns"][] = "zip_postcode";
$proto101["m_columns"][] = "region_or_state";
$proto101["m_columns"][] = "country";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "external_persons";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "Export and Import Users";
$proto102=array();
$proto102["m_sql"] = "";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
												$proto104=array();
$proto104["m_link"] = "SQLL_LEFTJOIN";
			$proto105=array();
$proto105["m_strName"] = "person_genders";
$proto105["m_srcTableName"] = "Export and Import Users";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "id_person_gender";
$proto105["m_columns"][] = "creation_system_id";
$proto105["m_columns"][] = "update_system_id";
$proto105["m_columns"][] = "is_obsolete";
$proto105["m_columns"][] = "is_default";
$proto105["m_columns"][] = "is_active";
$proto105["m_columns"][] = "order";
$proto105["m_columns"][] = "person_gender";
$proto105["m_columns"][] = "description";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "Export and Import Users";
$proto106=array();
$proto106["m_sql"] = "external_persons.gender = person_genders.id_person_gender";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "= person_genders.id_person_gender";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto0["m_fromlist"][]=$obj;
												$proto108=array();
$proto108["m_link"] = "SQLL_LEFTJOIN";
			$proto109=array();
$proto109["m_strName"] = "person_salutations";
$proto109["m_srcTableName"] = "Export and Import Users";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id_salutation";
$proto109["m_columns"][] = "creation_system_id";
$proto109["m_columns"][] = "update_system_id";
$proto109["m_columns"][] = "is_obsolete";
$proto109["m_columns"][] = "order";
$proto109["m_columns"][] = "salutation";
$proto109["m_columns"][] = "salutation_description";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "Export and Import Users";
$proto110=array();
$proto110["m_sql"] = "external_persons.salutation_id = person_salutations.id_salutation";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "= person_salutations.id_salutation";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
												$proto112=array();
$proto112["m_link"] = "SQLL_LEFTJOIN";
			$proto113=array();
$proto113["m_strName"] = "person_statuses";
$proto113["m_srcTableName"] = "Export and Import Users";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id_person_status";
$proto113["m_columns"][] = "creation_system_id";
$proto113["m_columns"][] = "update_system_id";
$proto113["m_columns"][] = "is_obsolete";
$proto113["m_columns"][] = "is_default";
$proto113["m_columns"][] = "is_active";
$proto113["m_columns"][] = "order";
$proto113["m_columns"][] = "person_status";
$proto113["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "Export and Import Users";
$proto114=array();
$proto114["m_sql"] = "external_persons.person_status_id = person_statuses.id_person_status";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "= person_statuses.id_person_status";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
												$proto116=array();
$proto116["m_link"] = "SQLL_LEFTJOIN";
			$proto117=array();
$proto117["m_strName"] = "ut_user_types";
$proto117["m_srcTableName"] = "Export and Import Users";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "id_unee_t_user_type";
$proto117["m_columns"][] = "syst_created_datetime";
$proto117["m_columns"][] = "creation_system_id";
$proto117["m_columns"][] = "created_by_id";
$proto117["m_columns"][] = "creation_method";
$proto117["m_columns"][] = "syst_updated_datetime";
$proto117["m_columns"][] = "update_system_id";
$proto117["m_columns"][] = "updated_by_id";
$proto117["m_columns"][] = "update_method";
$proto117["m_columns"][] = "organization_id";
$proto117["m_columns"][] = "order";
$proto117["m_columns"][] = "is_obsolete";
$proto117["m_columns"][] = "designation";
$proto117["m_columns"][] = "description";
$proto117["m_columns"][] = "ut_user_role_type_id";
$proto117["m_columns"][] = "is_all_unit";
$proto117["m_columns"][] = "is_all_units_in_country";
$proto117["m_columns"][] = "is_all_units_in_area";
$proto117["m_columns"][] = "is_all_units_in_level_1";
$proto117["m_columns"][] = "is_all_units_in_level_2";
$proto117["m_columns"][] = "is_occupant";
$proto117["m_columns"][] = "is_public";
$proto117["m_columns"][] = "is_default_assignee";
$proto117["m_columns"][] = "is_default_invited";
$proto117["m_columns"][] = "is_unit_owner";
$proto117["m_columns"][] = "is_dashboard_access";
$proto117["m_columns"][] = "can_see_role_contractor";
$proto117["m_columns"][] = "can_see_role_mgt_cny";
$proto117["m_columns"][] = "can_see_occupant";
$proto117["m_columns"][] = "can_see_role_landlord";
$proto117["m_columns"][] = "can_see_role_agent";
$proto117["m_columns"][] = "can_see_role_tenant";
$proto117["m_columns"][] = "is_assigned_to_case";
$proto117["m_columns"][] = "is_invited_to_case";
$proto117["m_columns"][] = "is_solution_updated";
$proto117["m_columns"][] = "is_next_step_updated";
$proto117["m_columns"][] = "is_deadline_updated";
$proto117["m_columns"][] = "is_case_resolved";
$proto117["m_columns"][] = "is_case_critical";
$proto117["m_columns"][] = "is_case_blocker";
$proto117["m_columns"][] = "is_message_from_contractor";
$proto117["m_columns"][] = "is_message_from_mgt_cny";
$proto117["m_columns"][] = "is_message_from_agent";
$proto117["m_columns"][] = "is_message_from_occupant";
$proto117["m_columns"][] = "is_message_from_ll";
$proto117["m_columns"][] = "is_message_from_tenant";
$proto117["m_columns"][] = "is_any_new_message";
$proto117["m_columns"][] = "is_new_ir";
$proto117["m_columns"][] = "is_new_inventory";
$proto117["m_columns"][] = "is_new_item";
$proto117["m_columns"][] = "is_item_moved";
$proto117["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "Export and Import Users";
$proto118=array();
$proto118["m_sql"] = "external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
												$proto120=array();
$proto120["m_link"] = "SQLL_LEFTJOIN";
			$proto121=array();
$proto121["m_strName"] = "persons";
$proto121["m_srcTableName"] = "Export and Import Users";
$proto121["m_columns"] = array();
$proto121["m_columns"][] = "id_person";
$proto121["m_columns"][] = "create_api_request_id";
$proto121["m_columns"][] = "edit_api_request_id";
$proto121["m_columns"][] = "external_id";
$proto121["m_columns"][] = "external_system";
$proto121["m_columns"][] = "external_table";
$proto121["m_columns"][] = "syst_created_datetime";
$proto121["m_columns"][] = "creation_system_id";
$proto121["m_columns"][] = "created_by_id";
$proto121["m_columns"][] = "creation_method";
$proto121["m_columns"][] = "syst_updated_datetime";
$proto121["m_columns"][] = "update_system_id";
$proto121["m_columns"][] = "updated_by_id";
$proto121["m_columns"][] = "update_method";
$proto121["m_columns"][] = "is_update_on_duplicate_key";
$proto121["m_columns"][] = "organization_id";
$proto121["m_columns"][] = "person_status_id";
$proto121["m_columns"][] = "dupe_id";
$proto121["m_columns"][] = "handler_id";
$proto121["m_columns"][] = "is_unee_t_account_needed";
$proto121["m_columns"][] = "unee_t_user_type_id";
$proto121["m_columns"][] = "country_code";
$proto121["m_columns"][] = "gender";
$proto121["m_columns"][] = "salutation_id";
$proto121["m_columns"][] = "given_name";
$proto121["m_columns"][] = "middle_name";
$proto121["m_columns"][] = "family_name";
$proto121["m_columns"][] = "date_of_birth";
$proto121["m_columns"][] = "alias";
$proto121["m_columns"][] = "job_title";
$proto121["m_columns"][] = "organization";
$proto121["m_columns"][] = "email";
$proto121["m_columns"][] = "tel_1";
$proto121["m_columns"][] = "tel_2";
$proto121["m_columns"][] = "whatsapp";
$proto121["m_columns"][] = "linkedin";
$proto121["m_columns"][] = "facebook";
$proto121["m_columns"][] = "adr1";
$proto121["m_columns"][] = "adr2";
$proto121["m_columns"][] = "adr3";
$proto121["m_columns"][] = "City";
$proto121["m_columns"][] = "zip_postcode";
$proto121["m_columns"][] = "region_or_state";
$proto121["m_columns"][] = "country";
$obj = new SQLTable($proto121);

$proto120["m_table"] = $obj;
$proto120["m_sql"] = "LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id";
$proto120["m_alias"] = "";
$proto120["m_srcTableName"] = "Export and Import Users";
$proto122=array();
$proto122["m_sql"] = "external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id";
$proto122["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id"
));

$proto122["m_column"]=$obj;
$proto122["m_contained"] = array();
						$proto124=array();
$proto124["m_sql"] = "external_persons.external_id = persons.external_id";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "= persons.external_id";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

			$proto122["m_contained"][]=$obj;
						$proto126=array();
$proto126["m_sql"] = "external_persons.external_system = persons.external_system";
$proto126["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto126["m_column"]=$obj;
$proto126["m_contained"] = array();
$proto126["m_strCase"] = "= persons.external_system";
$proto126["m_havingmode"] = false;
$proto126["m_inBrackets"] = false;
$proto126["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto126);

			$proto122["m_contained"][]=$obj;
						$proto128=array();
$proto128["m_sql"] = "external_persons.external_table = persons.external_table";
$proto128["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto128["m_column"]=$obj;
$proto128["m_contained"] = array();
$proto128["m_strCase"] = "= persons.external_table";
$proto128["m_havingmode"] = false;
$proto128["m_inBrackets"] = false;
$proto128["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto128);

			$proto122["m_contained"][]=$obj;
						$proto130=array();
$proto130["m_sql"] = "external_persons.created_by_id = persons.organization_id";
$proto130["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto130["m_column"]=$obj;
$proto130["m_contained"] = array();
$proto130["m_strCase"] = "= persons.organization_id";
$proto130["m_havingmode"] = false;
$proto130["m_inBrackets"] = false;
$proto130["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto130);

			$proto122["m_contained"][]=$obj;
$proto122["m_strCase"] = "";
$proto122["m_havingmode"] = false;
$proto122["m_inBrackets"] = false;
$proto122["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto122);

$proto120["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto120);

$proto0["m_fromlist"][]=$obj;
												$proto132=array();
$proto132["m_link"] = "SQLL_LEFTJOIN";
			$proto133=array();
$proto133["m_strName"] = "ut_map_external_source_users";
$proto133["m_srcTableName"] = "Export and Import Users";
$proto133["m_columns"] = array();
$proto133["m_columns"][] = "id_map";
$proto133["m_columns"][] = "create_api_request_id";
$proto133["m_columns"][] = "edit_api_request_id";
$proto133["m_columns"][] = "syst_created_datetime";
$proto133["m_columns"][] = "creation_system_id";
$proto133["m_columns"][] = "created_by_id";
$proto133["m_columns"][] = "creation_method";
$proto133["m_columns"][] = "syst_updated_datetime";
$proto133["m_columns"][] = "update_system_id";
$proto133["m_columns"][] = "updated_by_id";
$proto133["m_columns"][] = "update_method";
$proto133["m_columns"][] = "is_update_on_duplicate_key";
$proto133["m_columns"][] = "organization_id";
$proto133["m_columns"][] = "is_obsolete";
$proto133["m_columns"][] = "is_update_needed";
$proto133["m_columns"][] = "person_id";
$proto133["m_columns"][] = "mefe_user_id_parent";
$proto133["m_columns"][] = "unee_t_mefe_user_id";
$proto133["m_columns"][] = "unee_t_mefe_user_api_key";
$proto133["m_columns"][] = "uneet_created_datetime";
$proto133["m_columns"][] = "is_mefe_api_success";
$proto133["m_columns"][] = "mefe_api_error_message";
$proto133["m_columns"][] = "is_unee_t_created_by_me";
$proto133["m_columns"][] = "uneet_login_name";
$proto133["m_columns"][] = "external_person_id";
$proto133["m_columns"][] = "external_system";
$proto133["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id";
$proto132["m_alias"] = "";
$proto132["m_srcTableName"] = "Export and Import Users";
$proto134=array();
$proto134["m_sql"] = "persons.id_person = ut_map_external_source_users.person_id";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_person",
	"m_strTable" => "persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "= ut_map_external_source_users.person_id";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto132["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto132);

$proto0["m_fromlist"][]=$obj;
												$proto136=array();
$proto136["m_link"] = "SQLL_LEFTJOIN";
			$proto137=array();
$proto137["m_strName"] = "ut_user_role_types";
$proto137["m_srcTableName"] = "Export and Import Users";
$proto137["m_columns"] = array();
$proto137["m_columns"][] = "id_role_type";
$proto137["m_columns"][] = "syst_created_datetime";
$proto137["m_columns"][] = "creation_system_id";
$proto137["m_columns"][] = "created_by_id";
$proto137["m_columns"][] = "syst_updated_datetime";
$proto137["m_columns"][] = "update_system_id";
$proto137["m_columns"][] = "updated_by_id";
$proto137["m_columns"][] = "order";
$proto137["m_columns"][] = "is_obsolete";
$proto137["m_columns"][] = "role_type";
$proto137["m_columns"][] = "bz_description";
$proto137["m_columns"][] = "description";
$obj = new SQLTable($proto137);

$proto136["m_table"] = $obj;
$proto136["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto136["m_alias"] = "";
$proto136["m_srcTableName"] = "Export and Import Users";
$proto138=array();
$proto138["m_sql"] = "ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto138["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Export and Import Users"
));

$proto138["m_column"]=$obj;
$proto138["m_contained"] = array();
$proto138["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto138["m_havingmode"] = false;
$proto138["m_inBrackets"] = false;
$proto138["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto138);

$proto136["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto136);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto140=array();
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto140["m_column"]=$obj;
$proto140["m_bAsc"] = 1;
$proto140["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto140);

$proto0["m_orderby"][]=$obj;					
												$proto142=array();
						$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Export and Import Users"
));

$proto142["m_column"]=$obj;
$proto142["m_bAsc"] = 1;
$proto142["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto142);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Export and Import Users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Export_and_Import_Users = createSqlQuery_Export_and_Import_Users();


	
					
;

																																															

$tdataExport_and_Import_Users[".sqlquery"] = $queryData_Export_and_Import_Users;

include_once(getabspath("include/Export_and_Import_Users_events.php"));
$tableEvents["Export and Import Users"] = new eventclass_Export_and_Import_Users;
$tdataExport_and_Import_Users[".hasEvents"] = true;

?>