<?php



$tdatasuper_admin___manage_mefe_master_user1 = array();
$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"] = array();
$tdatasuper_admin___manage_mefe_master_user1[".ShortName"] = "super_admin___manage_mefe_master_user1";
$tdatasuper_admin___manage_mefe_master_user1[".OwnerID"] = "";
$tdatasuper_admin___manage_mefe_master_user1[".OriginalTable"] = "external_persons";


$defaultPages = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasuper_admin___manage_mefe_master_user1[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasuper_admin___manage_mefe_master_user1[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasuper_admin___manage_mefe_master_user1[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssuper_admin___manage_mefe_master_user1 = array();
$fieldToolTipssuper_admin___manage_mefe_master_user1 = array();
$pageTitlessuper_admin___manage_mefe_master_user1 = array();
$placeHolderssuper_admin___manage_mefe_master_user1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"] = array();
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"] = array();
	$placeHolderssuper_admin___manage_mefe_master_user1["English"] = array();
	$pageTitlessuper_admin___manage_mefe_master_user1["English"] = array();
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["id_person"] = "Id Person";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["id_person"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["id_person"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["external_id"] = "External Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["external_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["external_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["external_system"] = "External System";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["external_system"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["external_system"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["external_table"] = "External Table";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["external_table"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["external_table"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["syst_created_datetime"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["syst_created_datetime"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["creation_system_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["creation_system_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["created_by_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["created_by_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["creation_method"] = "Creation Method";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["creation_method"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["creation_method"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["syst_updated_datetime"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["syst_updated_datetime"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["update_system_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["update_system_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["updated_by_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["updated_by_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["update_method"] = "Update Method";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["update_method"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["update_method"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["person_status_id"] = "Person Status Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["person_status_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["person_status_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["person_status"] = "Person Status";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["person_status"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["person_status"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["is_unee_t_account_needed"] = "Is Unee T Account Needed";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["is_unee_t_account_needed"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["is_unee_t_account_needed"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["unee_t_user_type_id"] = "Unee T User Type Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["unee_t_user_type_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["unee_t_user_type_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["designation"] = "Designation";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["designation"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["designation"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["role_type"] = "Role Type";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["role_type"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["role_type"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["given_name"] = "Given Name";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["given_name"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["given_name"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["family_name"] = "Family Name";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["family_name"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["family_name"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["organization"] = "Organization";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["organization"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["organization"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["email"] = "Email";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["email"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["email"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["country_code"] = "Country Code";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["country_code"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["country_code"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["uneet_created_datetime"] = "Uneet Created Datetime";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["uneet_created_datetime"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["uneet_created_datetime"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["unee_t_mefe_user_api_key"] = "Unee T Mefe User Api Key";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["unee_t_mefe_user_api_key"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["unee_t_mefe_user_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["organization_name"] = "Organization";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["organization_name"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["organization_name"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user1["English"]["is_super_admin"] = "Is Super Admin";
	$fieldToolTipssuper_admin___manage_mefe_master_user1["English"]["is_super_admin"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user1["English"]["is_super_admin"] = "";
	if (count($fieldToolTipssuper_admin___manage_mefe_master_user1["English"]))
		$tdatasuper_admin___manage_mefe_master_user1[".isUseToolTips"] = true;
}


	$tdatasuper_admin___manage_mefe_master_user1[".NCSearch"] = true;



$tdatasuper_admin___manage_mefe_master_user1[".shortTableName"] = "super_admin___manage_mefe_master_user1";
$tdatasuper_admin___manage_mefe_master_user1[".nSecOptions"] = 0;

$tdatasuper_admin___manage_mefe_master_user1[".mainTableOwnerID"] = "";
$tdatasuper_admin___manage_mefe_master_user1[".entityType"] = 1;

$tdatasuper_admin___manage_mefe_master_user1[".strOriginalTableName"] = "external_persons";

		 



$tdatasuper_admin___manage_mefe_master_user1[".showAddInPopup"] = false;

$tdatasuper_admin___manage_mefe_master_user1[".showEditInPopup"] = false;

$tdatasuper_admin___manage_mefe_master_user1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuper_admin___manage_mefe_master_user1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatasuper_admin___manage_mefe_master_user1[".listAjax"] = true;
//	temporary
$tdatasuper_admin___manage_mefe_master_user1[".listAjax"] = false;

	$tdatasuper_admin___manage_mefe_master_user1[".audit"] = true;

	$tdatasuper_admin___manage_mefe_master_user1[".locking"] = false;


$pages = $tdatasuper_admin___manage_mefe_master_user1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuper_admin___manage_mefe_master_user1[".edit"] = true;
	$tdatasuper_admin___manage_mefe_master_user1[".afterEditAction"] = 1;
	$tdatasuper_admin___manage_mefe_master_user1[".closePopupAfterEdit"] = 1;
	$tdatasuper_admin___manage_mefe_master_user1[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatasuper_admin___manage_mefe_master_user1[".add"] = true;
$tdatasuper_admin___manage_mefe_master_user1[".afterAddAction"] = 0;
$tdatasuper_admin___manage_mefe_master_user1[".closePopupAfterAdd"] = 1;
$tdatasuper_admin___manage_mefe_master_user1[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuper_admin___manage_mefe_master_user1[".list"] = true;
}



$tdatasuper_admin___manage_mefe_master_user1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuper_admin___manage_mefe_master_user1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuper_admin___manage_mefe_master_user1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuper_admin___manage_mefe_master_user1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuper_admin___manage_mefe_master_user1[".printFriendly"] = true;
}



$tdatasuper_admin___manage_mefe_master_user1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuper_admin___manage_mefe_master_user1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuper_admin___manage_mefe_master_user1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuper_admin___manage_mefe_master_user1[".isUseAjaxSuggest"] = true;

$tdatasuper_admin___manage_mefe_master_user1[".rowHighlite"] = true;





$tdatasuper_admin___manage_mefe_master_user1[".ajaxCodeSnippetAdded"] = false;

$tdatasuper_admin___manage_mefe_master_user1[".buttonsAdded"] = false;

$tdatasuper_admin___manage_mefe_master_user1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuper_admin___manage_mefe_master_user1[".isUseTimeForSearch"] = false;


$tdatasuper_admin___manage_mefe_master_user1[".badgeColor"] = "9acd32";


$tdatasuper_admin___manage_mefe_master_user1[".allSearchFields"] = array();
$tdatasuper_admin___manage_mefe_master_user1[".filterFields"] = array();
$tdatasuper_admin___manage_mefe_master_user1[".requiredSearchFields"] = array();

$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"] = array();
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "external_system";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "external_table";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "person_status";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "designation";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "role_type";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "given_name";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "family_name";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "organization";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "organization_name";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "email";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "country_code";
$tdatasuper_admin___manage_mefe_master_user1[".googleLikeFields"][] = "is_super_admin";



$tdatasuper_admin___manage_mefe_master_user1[".tableType"] = "list";

$tdatasuper_admin___manage_mefe_master_user1[".printerPageOrientation"] = 0;
$tdatasuper_admin___manage_mefe_master_user1[".nPrinterPageScale"] = 100;

$tdatasuper_admin___manage_mefe_master_user1[".nPrinterSplitRecords"] = 40;

$tdatasuper_admin___manage_mefe_master_user1[".geocodingEnabled"] = false;





$tdatasuper_admin___manage_mefe_master_user1[".isResizeColumns"] = true;





$tdatasuper_admin___manage_mefe_master_user1[".pageSize"] = 20;

$tdatasuper_admin___manage_mefe_master_user1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuper_admin___manage_mefe_master_user1[".strOrderBy"] = $tstrOrderBy;

$tdatasuper_admin___manage_mefe_master_user1[".orderindexes"] = array();
	$tdatasuper_admin___manage_mefe_master_user1[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "external_persons.unee_t_user_type_id");

	$tdatasuper_admin___manage_mefe_master_user1[".orderindexes"][] = array(19, (1 ? "ASC" : "DESC"), "external_persons.given_name");


$tdatasuper_admin___manage_mefe_master_user1[".sqlHead"] = "SELECT external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.given_name,  external_persons.family_name,  external_persons.`organization`,  uneet_enterprise_organizations.designation AS organization_name,  external_persons.email,  external_persons.country_code,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_api_key,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_user_types.is_super_admin";
$tdatasuper_admin___manage_mefe_master_user1[".sqlFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type  LEFT OUTER JOIN uneet_enterprise_organizations ON external_persons.created_by_id = uneet_enterprise_organizations.id_organization";
$tdatasuper_admin___manage_mefe_master_user1[".sqlWhereExpr"] = "(ut_user_types.is_super_admin = 1)";
$tdatasuper_admin___manage_mefe_master_user1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuper_admin___manage_mefe_master_user1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuper_admin___manage_mefe_master_user1[".arrGroupsPerPage"] = $arrGPP;

$tdatasuper_admin___manage_mefe_master_user1[".highlightSearchResults"] = true;

$tableKeyssuper_admin___manage_mefe_master_user1 = array();
$tableKeyssuper_admin___manage_mefe_master_user1[] = "external_id";
$tableKeyssuper_admin___manage_mefe_master_user1[] = "external_system";
$tableKeyssuper_admin___manage_mefe_master_user1[] = "external_table";
$tableKeyssuper_admin___manage_mefe_master_user1[] = "created_by_id";
$tdatasuper_admin___manage_mefe_master_user1[".Keys"] = $tableKeyssuper_admin___manage_mefe_master_user1;


$tdatasuper_admin___manage_mefe_master_user1[".hideMobileList"] = array();




//	id_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_person";
	$fdata["GoodName"] = "id_person";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","id_person");
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


	$tdatasuper_admin___manage_mefe_master_user1["id_person"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "id_person";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","external_id");
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


	$tdatasuper_admin___manage_mefe_master_user1["external_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "external_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","external_system");
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


	$tdatasuper_admin___manage_mefe_master_user1["external_system"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "external_system";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","external_table");
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


	$tdatasuper_admin___manage_mefe_master_user1["external_table"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","syst_created_datetime");
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


	$tdatasuper_admin___manage_mefe_master_user1["syst_created_datetime"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","creation_system_id");
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


	$tdatasuper_admin___manage_mefe_master_user1["creation_system_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","created_by_id");
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


	$tdatasuper_admin___manage_mefe_master_user1["created_by_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","creation_method");
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


	$tdatasuper_admin___manage_mefe_master_user1["creation_method"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","syst_updated_datetime");
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


	$tdatasuper_admin___manage_mefe_master_user1["syst_updated_datetime"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","update_system_id");
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


	$tdatasuper_admin___manage_mefe_master_user1["update_system_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","updated_by_id");
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


	$tdatasuper_admin___manage_mefe_master_user1["updated_by_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","update_method");
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


	$tdatasuper_admin___manage_mefe_master_user1["update_method"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "update_method";
//	person_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "person_status_id";
	$fdata["GoodName"] = "person_status_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","person_status_id");
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

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

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
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

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


	$tdatasuper_admin___manage_mefe_master_user1["person_status_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "person_status_id";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "person_status";
	$fdata["GoodName"] = "person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","person_status");
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


	$tdatasuper_admin___manage_mefe_master_user1["person_status"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "person_status";
//	is_unee_t_account_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_unee_t_account_needed";
	$fdata["GoodName"] = "is_unee_t_account_needed";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","is_unee_t_account_needed");
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


	$tdatasuper_admin___manage_mefe_master_user1["is_unee_t_account_needed"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "is_unee_t_account_needed";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","unee_t_user_type_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

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


	$tdatasuper_admin___manage_mefe_master_user1["unee_t_user_type_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "unee_t_user_type_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","designation");
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


	$tdatasuper_admin___manage_mefe_master_user1["designation"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "designation";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","role_type");
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


	$tdatasuper_admin___manage_mefe_master_user1["role_type"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "role_type";
//	given_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "given_name";
	$fdata["GoodName"] = "given_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","given_name");
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


	$tdatasuper_admin___manage_mefe_master_user1["given_name"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "given_name";
//	family_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "family_name";
	$fdata["GoodName"] = "family_name";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","family_name");
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


	$tdatasuper_admin___manage_mefe_master_user1["family_name"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "family_name";
//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","organization");
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


	$tdatasuper_admin___manage_mefe_master_user1["organization"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "organization";
//	organization_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "organization_name";
	$fdata["GoodName"] = "organization_name";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","organization_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.designation";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user1["organization_name"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "organization_name";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","email");
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


	$tdatasuper_admin___manage_mefe_master_user1["email"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "email";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "external_persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","country_code");
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

	$fdata["ViewFormats"]["print"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
	
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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
	
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
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "country_name";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "country_name";

	
	
	
	

	
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


	$tdatasuper_admin___manage_mefe_master_user1["country_code"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "country_code";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","uneet_created_datetime");
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


	$tdatasuper_admin___manage_mefe_master_user1["uneet_created_datetime"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","unee_t_mefe_user_api_key");
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


	$tdatasuper_admin___manage_mefe_master_user1["unee_t_mefe_user_api_key"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "unee_t_mefe_user_api_key";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","unee_t_mefe_user_id");
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


	$tdatasuper_admin___manage_mefe_master_user1["unee_t_mefe_user_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "unee_t_mefe_user_id";
//	is_super_admin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "is_super_admin";
	$fdata["GoodName"] = "is_super_admin";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","is_super_admin");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_super_admin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_super_admin";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user1["is_super_admin"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user1[".searchableFields"][] = "is_super_admin";


$tables_data["Super Admin - Manage MEFE Master User"]=&$tdatasuper_admin___manage_mefe_master_user1;
$field_labels["Super_Admin___Manage_MEFE_Master_User"] = &$fieldLabelssuper_admin___manage_mefe_master_user1;
$fieldToolTips["Super_Admin___Manage_MEFE_Master_User"] = &$fieldToolTipssuper_admin___manage_mefe_master_user1;
$placeHolders["Super_Admin___Manage_MEFE_Master_User"] = &$placeHolderssuper_admin___manage_mefe_master_user1;
$page_titles["Super_Admin___Manage_MEFE_Master_User"] = &$pageTitlessuper_admin___manage_mefe_master_user1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Super Admin - Manage MEFE Master User"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Super Admin - Manage MEFE Master User"] = array();



	
				$strOriginalDetailsTable="uneet_enterprise_organizations";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Super Admin - Manage Organization";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "super_admin___manage_organization";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["Super Admin - Manage MEFE Master User"][0] = $masterParams;
				$masterTablesData["Super Admin - Manage MEFE Master User"][0]["masterKeys"] = array();
	$masterTablesData["Super Admin - Manage MEFE Master User"][0]["masterKeys"][]="id_organization";
				$masterTablesData["Super Admin - Manage MEFE Master User"][0]["detailKeys"] = array();
	$masterTablesData["Super Admin - Manage MEFE Master User"][0]["detailKeys"][]="created_by_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_super_admin___manage_mefe_master_user1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "external_persons.id_person,  external_persons.external_id,  external_persons.external_system,  external_persons.external_table,  external_persons.syst_created_datetime,  external_persons.creation_system_id,  external_persons.created_by_id,  external_persons.creation_method,  external_persons.syst_updated_datetime,  external_persons.update_system_id,  external_persons.updated_by_id,  external_persons.update_method,  external_persons.person_status_id,  person_statuses.person_status,  external_persons.is_unee_t_account_needed,  external_persons.unee_t_user_type_id,  ut_user_types.designation,  ut_user_role_types.role_type,  external_persons.given_name,  external_persons.family_name,  external_persons.`organization`,  uneet_enterprise_organizations.designation AS organization_name,  external_persons.email,  external_persons.country_code,  ut_map_external_source_users.uneet_created_datetime,  ut_map_external_source_users.unee_t_mefe_user_api_key,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_user_types.is_super_admin";
$proto0["m_strFrom"] = "FROM external_persons  LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender  LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation  LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type  LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id  LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type  LEFT OUTER JOIN uneet_enterprise_organizations ON external_persons.created_by_id = uneet_enterprise_organizations.id_organization";
$proto0["m_strWhere"] = "(ut_user_types.is_super_admin = 1)";
$proto0["m_strOrderBy"] = "ORDER BY external_persons.unee_t_user_type_id, external_persons.given_name";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ut_user_types.is_super_admin = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_super_admin",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto6["m_sql"] = "external_persons.id_person";
$proto6["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto8["m_sql"] = "external_persons.external_id";
$proto8["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto10["m_sql"] = "external_persons.external_system";
$proto10["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto12["m_sql"] = "external_persons.external_table";
$proto12["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto14["m_sql"] = "external_persons.syst_created_datetime";
$proto14["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto16["m_sql"] = "external_persons.creation_system_id";
$proto16["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto18["m_sql"] = "external_persons.created_by_id";
$proto18["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto20["m_sql"] = "external_persons.creation_method";
$proto20["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto22["m_sql"] = "external_persons.syst_updated_datetime";
$proto22["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto24["m_sql"] = "external_persons.update_system_id";
$proto24["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto26["m_sql"] = "external_persons.updated_by_id";
$proto26["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto28["m_sql"] = "external_persons.update_method";
$proto28["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto30["m_sql"] = "external_persons.person_status_id";
$proto30["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto32["m_sql"] = "person_statuses.person_status";
$proto32["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_unee_t_account_needed",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto34["m_sql"] = "external_persons.is_unee_t_account_needed";
$proto34["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto36["m_sql"] = "external_persons.unee_t_user_type_id";
$proto36["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto38["m_sql"] = "ut_user_types.designation";
$proto38["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto40["m_sql"] = "ut_user_role_types.role_type";
$proto40["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto42["m_sql"] = "external_persons.given_name";
$proto42["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "family_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto44["m_sql"] = "external_persons.family_name";
$proto44["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "organization",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto46["m_sql"] = "external_persons.`organization`";
$proto46["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto48["m_sql"] = "uneet_enterprise_organizations.designation";
$proto48["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "organization_name";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto50["m_sql"] = "external_persons.email";
$proto50["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto52["m_sql"] = "external_persons.country_code";
$proto52["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto54["m_sql"] = "ut_map_external_source_users.uneet_created_datetime";
$proto54["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto56["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_api_key";
$proto56["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto58["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id";
$proto58["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "is_super_admin",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto60["m_sql"] = "ut_user_types.is_super_admin";
$proto60["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "external_persons";
$proto63["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id_person";
$proto63["m_columns"][] = "create_api_request_id";
$proto63["m_columns"][] = "edit_api_request_id";
$proto63["m_columns"][] = "external_id";
$proto63["m_columns"][] = "external_system";
$proto63["m_columns"][] = "external_table";
$proto63["m_columns"][] = "syst_created_datetime";
$proto63["m_columns"][] = "creation_system_id";
$proto63["m_columns"][] = "created_by_id";
$proto63["m_columns"][] = "creation_method";
$proto63["m_columns"][] = "syst_updated_datetime";
$proto63["m_columns"][] = "update_system_id";
$proto63["m_columns"][] = "updated_by_id";
$proto63["m_columns"][] = "update_method";
$proto63["m_columns"][] = "is_update_on_duplicate_key";
$proto63["m_columns"][] = "person_status_id";
$proto63["m_columns"][] = "dupe_id";
$proto63["m_columns"][] = "handler_id";
$proto63["m_columns"][] = "is_unee_t_account_needed";
$proto63["m_columns"][] = "unee_t_user_type_id";
$proto63["m_columns"][] = "country_code";
$proto63["m_columns"][] = "gender";
$proto63["m_columns"][] = "salutation_id";
$proto63["m_columns"][] = "given_name";
$proto63["m_columns"][] = "middle_name";
$proto63["m_columns"][] = "family_name";
$proto63["m_columns"][] = "date_of_birth";
$proto63["m_columns"][] = "alias";
$proto63["m_columns"][] = "job_title";
$proto63["m_columns"][] = "organization";
$proto63["m_columns"][] = "email";
$proto63["m_columns"][] = "tel_1";
$proto63["m_columns"][] = "tel_2";
$proto63["m_columns"][] = "whatsapp";
$proto63["m_columns"][] = "linkedin";
$proto63["m_columns"][] = "facebook";
$proto63["m_columns"][] = "adr1";
$proto63["m_columns"][] = "adr2";
$proto63["m_columns"][] = "adr3";
$proto63["m_columns"][] = "City";
$proto63["m_columns"][] = "zip_postcode";
$proto63["m_columns"][] = "region_or_state";
$proto63["m_columns"][] = "country";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "external_persons";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_LEFTJOIN";
			$proto67=array();
$proto67["m_strName"] = "person_genders";
$proto67["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id_person_gender";
$proto67["m_columns"][] = "creation_system_id";
$proto67["m_columns"][] = "update_system_id";
$proto67["m_columns"][] = "is_obsolete";
$proto67["m_columns"][] = "is_default";
$proto67["m_columns"][] = "is_active";
$proto67["m_columns"][] = "order";
$proto67["m_columns"][] = "person_gender";
$proto67["m_columns"][] = "description";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "LEFT OUTER JOIN person_genders ON external_persons.gender = person_genders.id_person_gender";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto68=array();
$proto68["m_sql"] = "external_persons.gender = person_genders.id_person_gender";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= person_genders.id_person_gender";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_LEFTJOIN";
			$proto71=array();
$proto71["m_strName"] = "person_salutations";
$proto71["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "id_salutation";
$proto71["m_columns"][] = "creation_system_id";
$proto71["m_columns"][] = "update_system_id";
$proto71["m_columns"][] = "is_obsolete";
$proto71["m_columns"][] = "order";
$proto71["m_columns"][] = "salutation";
$proto71["m_columns"][] = "salutation_description";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "LEFT OUTER JOIN person_salutations ON external_persons.salutation_id = person_salutations.id_salutation";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto72=array();
$proto72["m_sql"] = "external_persons.salutation_id = person_salutations.id_salutation";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "salutation_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= person_salutations.id_salutation";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
												$proto74=array();
$proto74["m_link"] = "SQLL_LEFTJOIN";
			$proto75=array();
$proto75["m_strName"] = "person_statuses";
$proto75["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id_person_status";
$proto75["m_columns"][] = "creation_system_id";
$proto75["m_columns"][] = "update_system_id";
$proto75["m_columns"][] = "is_obsolete";
$proto75["m_columns"][] = "is_default";
$proto75["m_columns"][] = "is_active";
$proto75["m_columns"][] = "order";
$proto75["m_columns"][] = "person_status";
$proto75["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "LEFT OUTER JOIN person_statuses ON external_persons.person_status_id = person_statuses.id_person_status";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto76=array();
$proto76["m_sql"] = "external_persons.person_status_id = person_statuses.id_person_status";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= person_statuses.id_person_status";
$proto76["m_havingmode"] = false;
$proto76["m_inBrackets"] = false;
$proto76["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto76);

$proto74["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto74);

$proto0["m_fromlist"][]=$obj;
												$proto78=array();
$proto78["m_link"] = "SQLL_LEFTJOIN";
			$proto79=array();
$proto79["m_strName"] = "ut_user_types";
$proto79["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id_unee_t_user_type";
$proto79["m_columns"][] = "syst_created_datetime";
$proto79["m_columns"][] = "creation_system_id";
$proto79["m_columns"][] = "created_by_id";
$proto79["m_columns"][] = "creation_method";
$proto79["m_columns"][] = "syst_updated_datetime";
$proto79["m_columns"][] = "update_system_id";
$proto79["m_columns"][] = "updated_by_id";
$proto79["m_columns"][] = "update_method";
$proto79["m_columns"][] = "organization_id";
$proto79["m_columns"][] = "order";
$proto79["m_columns"][] = "is_obsolete";
$proto79["m_columns"][] = "designation";
$proto79["m_columns"][] = "description";
$proto79["m_columns"][] = "ut_user_role_type_id";
$proto79["m_columns"][] = "is_super_admin";
$proto79["m_columns"][] = "is_all_unit";
$proto79["m_columns"][] = "is_all_units_in_country";
$proto79["m_columns"][] = "is_all_units_in_area";
$proto79["m_columns"][] = "is_all_units_in_level_1";
$proto79["m_columns"][] = "is_all_units_in_level_2";
$proto79["m_columns"][] = "is_occupant";
$proto79["m_columns"][] = "is_public";
$proto79["m_columns"][] = "is_default_assignee";
$proto79["m_columns"][] = "is_default_invited";
$proto79["m_columns"][] = "is_unit_owner";
$proto79["m_columns"][] = "is_dashboard_access";
$proto79["m_columns"][] = "can_see_role_contractor";
$proto79["m_columns"][] = "can_see_role_mgt_cny";
$proto79["m_columns"][] = "can_see_occupant";
$proto79["m_columns"][] = "can_see_role_landlord";
$proto79["m_columns"][] = "can_see_role_agent";
$proto79["m_columns"][] = "can_see_role_tenant";
$proto79["m_columns"][] = "is_assigned_to_case";
$proto79["m_columns"][] = "is_invited_to_case";
$proto79["m_columns"][] = "is_solution_updated";
$proto79["m_columns"][] = "is_next_step_updated";
$proto79["m_columns"][] = "is_deadline_updated";
$proto79["m_columns"][] = "is_case_resolved";
$proto79["m_columns"][] = "is_case_critical";
$proto79["m_columns"][] = "is_case_blocker";
$proto79["m_columns"][] = "is_message_from_contractor";
$proto79["m_columns"][] = "is_message_from_mgt_cny";
$proto79["m_columns"][] = "is_message_from_agent";
$proto79["m_columns"][] = "is_message_from_occupant";
$proto79["m_columns"][] = "is_message_from_ll";
$proto79["m_columns"][] = "is_message_from_tenant";
$proto79["m_columns"][] = "is_any_new_message";
$proto79["m_columns"][] = "is_new_ir";
$proto79["m_columns"][] = "is_new_inventory";
$proto79["m_columns"][] = "is_new_item";
$proto79["m_columns"][] = "is_item_moved";
$proto79["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "LEFT OUTER JOIN ut_user_types ON external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto80=array();
$proto80["m_sql"] = "external_persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto80["m_havingmode"] = false;
$proto80["m_inBrackets"] = false;
$proto80["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto80);

$proto78["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto78);

$proto0["m_fromlist"][]=$obj;
												$proto82=array();
$proto82["m_link"] = "SQLL_LEFTJOIN";
			$proto83=array();
$proto83["m_strName"] = "persons";
$proto83["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "id_person";
$proto83["m_columns"][] = "create_api_request_id";
$proto83["m_columns"][] = "edit_api_request_id";
$proto83["m_columns"][] = "external_id";
$proto83["m_columns"][] = "external_system";
$proto83["m_columns"][] = "external_table";
$proto83["m_columns"][] = "syst_created_datetime";
$proto83["m_columns"][] = "creation_system_id";
$proto83["m_columns"][] = "created_by_id";
$proto83["m_columns"][] = "creation_method";
$proto83["m_columns"][] = "syst_updated_datetime";
$proto83["m_columns"][] = "update_system_id";
$proto83["m_columns"][] = "updated_by_id";
$proto83["m_columns"][] = "update_method";
$proto83["m_columns"][] = "is_update_on_duplicate_key";
$proto83["m_columns"][] = "organization_id";
$proto83["m_columns"][] = "person_status_id";
$proto83["m_columns"][] = "dupe_id";
$proto83["m_columns"][] = "handler_id";
$proto83["m_columns"][] = "is_unee_t_account_needed";
$proto83["m_columns"][] = "unee_t_user_type_id";
$proto83["m_columns"][] = "country_code";
$proto83["m_columns"][] = "gender";
$proto83["m_columns"][] = "salutation_id";
$proto83["m_columns"][] = "given_name";
$proto83["m_columns"][] = "middle_name";
$proto83["m_columns"][] = "family_name";
$proto83["m_columns"][] = "date_of_birth";
$proto83["m_columns"][] = "alias";
$proto83["m_columns"][] = "job_title";
$proto83["m_columns"][] = "organization";
$proto83["m_columns"][] = "email";
$proto83["m_columns"][] = "tel_1";
$proto83["m_columns"][] = "tel_2";
$proto83["m_columns"][] = "whatsapp";
$proto83["m_columns"][] = "linkedin";
$proto83["m_columns"][] = "facebook";
$proto83["m_columns"][] = "adr1";
$proto83["m_columns"][] = "adr2";
$proto83["m_columns"][] = "adr3";
$proto83["m_columns"][] = "City";
$proto83["m_columns"][] = "zip_postcode";
$proto83["m_columns"][] = "region_or_state";
$proto83["m_columns"][] = "country";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "LEFT OUTER JOIN persons ON external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto84=array();
$proto84["m_sql"] = "external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id";
$proto84["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "external_persons.external_id = persons.external_id AND external_persons.external_system = persons.external_system AND external_persons.external_table = persons.external_table AND external_persons.created_by_id = persons.organization_id"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
						$proto86=array();
$proto86["m_sql"] = "external_persons.external_id = persons.external_id";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "= persons.external_id";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

			$proto84["m_contained"][]=$obj;
						$proto88=array();
$proto88["m_sql"] = "external_persons.external_system = persons.external_system";
$proto88["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto88["m_column"]=$obj;
$proto88["m_contained"] = array();
$proto88["m_strCase"] = "= persons.external_system";
$proto88["m_havingmode"] = false;
$proto88["m_inBrackets"] = false;
$proto88["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto88);

			$proto84["m_contained"][]=$obj;
						$proto90=array();
$proto90["m_sql"] = "external_persons.external_table = persons.external_table";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "= persons.external_table";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

			$proto84["m_contained"][]=$obj;
						$proto92=array();
$proto92["m_sql"] = "external_persons.created_by_id = persons.organization_id";
$proto92["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto92["m_column"]=$obj;
$proto92["m_contained"] = array();
$proto92["m_strCase"] = "= persons.organization_id";
$proto92["m_havingmode"] = false;
$proto92["m_inBrackets"] = false;
$proto92["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto92);

			$proto84["m_contained"][]=$obj;
$proto84["m_strCase"] = "";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
												$proto94=array();
$proto94["m_link"] = "SQLL_LEFTJOIN";
			$proto95=array();
$proto95["m_strName"] = "ut_map_external_source_users";
$proto95["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto95["m_columns"] = array();
$proto95["m_columns"][] = "id_map";
$proto95["m_columns"][] = "create_api_request_id";
$proto95["m_columns"][] = "edit_api_request_id";
$proto95["m_columns"][] = "syst_created_datetime";
$proto95["m_columns"][] = "creation_system_id";
$proto95["m_columns"][] = "created_by_id";
$proto95["m_columns"][] = "creation_method";
$proto95["m_columns"][] = "syst_updated_datetime";
$proto95["m_columns"][] = "update_system_id";
$proto95["m_columns"][] = "updated_by_id";
$proto95["m_columns"][] = "update_method";
$proto95["m_columns"][] = "is_update_on_duplicate_key";
$proto95["m_columns"][] = "organization_id";
$proto95["m_columns"][] = "is_obsolete";
$proto95["m_columns"][] = "is_update_needed";
$proto95["m_columns"][] = "person_id";
$proto95["m_columns"][] = "mefe_user_id_parent";
$proto95["m_columns"][] = "unee_t_mefe_user_id";
$proto95["m_columns"][] = "unee_t_mefe_user_api_key";
$proto95["m_columns"][] = "uneet_created_datetime";
$proto95["m_columns"][] = "is_mefe_api_success";
$proto95["m_columns"][] = "mefe_api_error_message";
$proto95["m_columns"][] = "is_unee_t_created_by_me";
$proto95["m_columns"][] = "uneet_login_name";
$proto95["m_columns"][] = "external_person_id";
$proto95["m_columns"][] = "external_system";
$proto95["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto95);

$proto94["m_table"] = $obj;
$proto94["m_sql"] = "LEFT OUTER JOIN ut_map_external_source_users ON persons.id_person = ut_map_external_source_users.person_id";
$proto94["m_alias"] = "";
$proto94["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto96=array();
$proto96["m_sql"] = "persons.id_person = ut_map_external_source_users.person_id";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_person",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= ut_map_external_source_users.person_id";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

$proto94["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto94);

$proto0["m_fromlist"][]=$obj;
												$proto98=array();
$proto98["m_link"] = "SQLL_LEFTJOIN";
			$proto99=array();
$proto99["m_strName"] = "ut_user_role_types";
$proto99["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto99["m_columns"] = array();
$proto99["m_columns"][] = "id_role_type";
$proto99["m_columns"][] = "syst_created_datetime";
$proto99["m_columns"][] = "creation_system_id";
$proto99["m_columns"][] = "created_by_id";
$proto99["m_columns"][] = "syst_updated_datetime";
$proto99["m_columns"][] = "update_system_id";
$proto99["m_columns"][] = "updated_by_id";
$proto99["m_columns"][] = "order";
$proto99["m_columns"][] = "is_obsolete";
$proto99["m_columns"][] = "role_type";
$proto99["m_columns"][] = "bz_description";
$proto99["m_columns"][] = "description";
$obj = new SQLTable($proto99);

$proto98["m_table"] = $obj;
$proto98["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto98["m_alias"] = "";
$proto98["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto100=array();
$proto100["m_sql"] = "ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto100["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto100["m_column"]=$obj;
$proto100["m_contained"] = array();
$proto100["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto100["m_havingmode"] = false;
$proto100["m_inBrackets"] = false;
$proto100["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto100);

$proto98["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto98);

$proto0["m_fromlist"][]=$obj;
												$proto102=array();
$proto102["m_link"] = "SQLL_LEFTJOIN";
			$proto103=array();
$proto103["m_strName"] = "uneet_enterprise_organizations";
$proto103["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_organization";
$proto103["m_columns"][] = "syst_created_datetime";
$proto103["m_columns"][] = "creation_system_id";
$proto103["m_columns"][] = "creation_method";
$proto103["m_columns"][] = "created_by_id";
$proto103["m_columns"][] = "syst_updated_datetime";
$proto103["m_columns"][] = "update_system_id";
$proto103["m_columns"][] = "updated_by_id";
$proto103["m_columns"][] = "update_method";
$proto103["m_columns"][] = "order";
$proto103["m_columns"][] = "is_obsolete";
$proto103["m_columns"][] = "designation";
$proto103["m_columns"][] = "description";
$proto103["m_columns"][] = "country_code";
$proto103["m_columns"][] = "mefe_master_user_external_person_id";
$proto103["m_columns"][] = "mefe_master_user_external_person_table";
$proto103["m_columns"][] = "mefe_master_user_external_person_system";
$proto103["m_columns"][] = "default_role_type_id";
$proto103["m_columns"][] = "default_sot_id";
$proto103["m_columns"][] = "default_area";
$proto103["m_columns"][] = "default_building";
$proto103["m_columns"][] = "default_unit";
$proto103["m_columns"][] = "default_sot_system";
$proto103["m_columns"][] = "default_sot_persons";
$proto103["m_columns"][] = "default_sot_areas";
$proto103["m_columns"][] = "default_sot_properties";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "LEFT OUTER JOIN uneet_enterprise_organizations ON external_persons.created_by_id = uneet_enterprise_organizations.id_organization";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto104=array();
$proto104["m_sql"] = "external_persons.created_by_id = uneet_enterprise_organizations.id_organization";
$proto104["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto104["m_column"]=$obj;
$proto104["m_contained"] = array();
$proto104["m_strCase"] = "= uneet_enterprise_organizations.id_organization";
$proto104["m_havingmode"] = false;
$proto104["m_inBrackets"] = false;
$proto104["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto104);

$proto102["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto102);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto106=array();
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto106["m_column"]=$obj;
$proto106["m_bAsc"] = 1;
$proto106["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto106);

$proto0["m_orderby"][]=$obj;					
												$proto108=array();
						$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "external_persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto108["m_column"]=$obj;
$proto108["m_bAsc"] = 1;
$proto108["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto108);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Super Admin - Manage MEFE Master User";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_super_admin___manage_mefe_master_user1 = createSqlQuery_super_admin___manage_mefe_master_user1();


	
					
;

																												

$tdatasuper_admin___manage_mefe_master_user1[".sqlquery"] = $queryData_super_admin___manage_mefe_master_user1;

include_once(getabspath("include/super_admin___manage_mefe_master_user1_events.php"));
$tableEvents["Super Admin - Manage MEFE Master User"] = new eventclass_super_admin___manage_mefe_master_user1;
$tdatasuper_admin___manage_mefe_master_user1[".hasEvents"] = true;

?>