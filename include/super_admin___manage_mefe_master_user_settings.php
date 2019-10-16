<?php



$tdatasuper_admin___manage_mefe_master_user = array();
$tdatasuper_admin___manage_mefe_master_user[".searchableFields"] = array();
$tdatasuper_admin___manage_mefe_master_user[".ShortName"] = "super_admin___manage_mefe_master_user";
$tdatasuper_admin___manage_mefe_master_user[".OwnerID"] = "organization_id";
$tdatasuper_admin___manage_mefe_master_user[".OriginalTable"] = "ut_map_external_source_users";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdatasuper_admin___manage_mefe_master_user[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatasuper_admin___manage_mefe_master_user[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatasuper_admin___manage_mefe_master_user[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssuper_admin___manage_mefe_master_user = array();
$fieldToolTipssuper_admin___manage_mefe_master_user = array();
$pageTitlessuper_admin___manage_mefe_master_user = array();
$placeHolderssuper_admin___manage_mefe_master_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuper_admin___manage_mefe_master_user["English"] = array();
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"] = array();
	$placeHolderssuper_admin___manage_mefe_master_user["English"] = array();
	$pageTitlessuper_admin___manage_mefe_master_user["English"] = array();
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["id_map"] = "Id Map";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["id_map"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["id_map"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["organization_id"] = "Organization Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["organization_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["organization_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["person_id"] = "Person Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["person_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["person_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["unee_t_mefe_user_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["external_person_id"] = "External Person Id";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["external_person_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["external_person_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["external_system"] = "External System";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["external_system"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["external_system"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["table_in_external_system"] = "Table In External System";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["table_in_external_system"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["table_in_external_system"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["active_person"] = "Active";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["active_person"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["active_person"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["person_status"] = "Person Status";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["person_status"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["person_status"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["unee_t_user_type_id"] = "Unee-T User Type";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["unee_t_user_type_id"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["unee_t_user_type_id"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["organization_id_person"] = "Person";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["organization_id_person"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["organization_id_person"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["email"] = "Email";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["email"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["email"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["country_code"] = "Country Code";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["country_code"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["country_code"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["obsolete_unee_t_user"] = "Obsolete Unee T User";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["obsolete_unee_t_user"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["obsolete_unee_t_user"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["name"] = "Name";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["name"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["name"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["phones"] = "Phones";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["phones"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["phones"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["organization_job"] = "Organization-job";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["organization_job"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["organization_job"] = "";
	$fieldLabelssuper_admin___manage_mefe_master_user["English"]["user_type"] = "User Type";
	$fieldToolTipssuper_admin___manage_mefe_master_user["English"]["user_type"] = "";
	$placeHolderssuper_admin___manage_mefe_master_user["English"]["user_type"] = "";
	if (count($fieldToolTipssuper_admin___manage_mefe_master_user["English"]))
		$tdatasuper_admin___manage_mefe_master_user[".isUseToolTips"] = true;
}


	$tdatasuper_admin___manage_mefe_master_user[".NCSearch"] = true;



$tdatasuper_admin___manage_mefe_master_user[".shortTableName"] = "super_admin___manage_mefe_master_user";
$tdatasuper_admin___manage_mefe_master_user[".nSecOptions"] = 0;

$tdatasuper_admin___manage_mefe_master_user[".mainTableOwnerID"] = "organization_id";
$tdatasuper_admin___manage_mefe_master_user[".entityType"] = 1;

$tdatasuper_admin___manage_mefe_master_user[".strOriginalTableName"] = "ut_map_external_source_users";

		 



$tdatasuper_admin___manage_mefe_master_user[".showAddInPopup"] = false;

$tdatasuper_admin___manage_mefe_master_user[".showEditInPopup"] = false;

$tdatasuper_admin___manage_mefe_master_user[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuper_admin___manage_mefe_master_user[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatasuper_admin___manage_mefe_master_user[".listAjax"] = true;
//	temporary
$tdatasuper_admin___manage_mefe_master_user[".listAjax"] = false;

	$tdatasuper_admin___manage_mefe_master_user[".audit"] = false;

	$tdatasuper_admin___manage_mefe_master_user[".locking"] = false;


$pages = $tdatasuper_admin___manage_mefe_master_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuper_admin___manage_mefe_master_user[".edit"] = true;
	$tdatasuper_admin___manage_mefe_master_user[".afterEditAction"] = 1;
	$tdatasuper_admin___manage_mefe_master_user[".closePopupAfterEdit"] = 1;
	$tdatasuper_admin___manage_mefe_master_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasuper_admin___manage_mefe_master_user[".add"] = true;
$tdatasuper_admin___manage_mefe_master_user[".afterAddAction"] = 1;
$tdatasuper_admin___manage_mefe_master_user[".closePopupAfterAdd"] = 1;
$tdatasuper_admin___manage_mefe_master_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuper_admin___manage_mefe_master_user[".list"] = true;
}



$tdatasuper_admin___manage_mefe_master_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuper_admin___manage_mefe_master_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuper_admin___manage_mefe_master_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuper_admin___manage_mefe_master_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuper_admin___manage_mefe_master_user[".printFriendly"] = true;
}



$tdatasuper_admin___manage_mefe_master_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuper_admin___manage_mefe_master_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuper_admin___manage_mefe_master_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuper_admin___manage_mefe_master_user[".isUseAjaxSuggest"] = true;

$tdatasuper_admin___manage_mefe_master_user[".rowHighlite"] = true;





$tdatasuper_admin___manage_mefe_master_user[".ajaxCodeSnippetAdded"] = false;

$tdatasuper_admin___manage_mefe_master_user[".buttonsAdded"] = false;

$tdatasuper_admin___manage_mefe_master_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuper_admin___manage_mefe_master_user[".isUseTimeForSearch"] = false;


$tdatasuper_admin___manage_mefe_master_user[".badgeColor"] = "e07878";


$tdatasuper_admin___manage_mefe_master_user[".allSearchFields"] = array();
$tdatasuper_admin___manage_mefe_master_user[".filterFields"] = array();
$tdatasuper_admin___manage_mefe_master_user[".requiredSearchFields"] = array();

$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"] = array();
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "person_status";
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "user_type";
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "name";
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "organization-job";
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "email";
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "phones";
$tdatasuper_admin___manage_mefe_master_user[".googleLikeFields"][] = "country_code";



$tdatasuper_admin___manage_mefe_master_user[".tableType"] = "list";

$tdatasuper_admin___manage_mefe_master_user[".printerPageOrientation"] = 0;
$tdatasuper_admin___manage_mefe_master_user[".nPrinterPageScale"] = 100;

$tdatasuper_admin___manage_mefe_master_user[".nPrinterSplitRecords"] = 40;

$tdatasuper_admin___manage_mefe_master_user[".geocodingEnabled"] = false;





$tdatasuper_admin___manage_mefe_master_user[".isResizeColumns"] = true;





$tdatasuper_admin___manage_mefe_master_user[".pageSize"] = 20;

$tdatasuper_admin___manage_mefe_master_user[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY persons.organization_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuper_admin___manage_mefe_master_user[".strOrderBy"] = $tstrOrderBy;

$tdatasuper_admin___manage_mefe_master_user[".orderindexes"] = array();
	$tdatasuper_admin___manage_mefe_master_user[".orderindexes"][] = array(13, (0 ? "ASC" : "DESC"), "persons.organization_id");


$tdatasuper_admin___manage_mefe_master_user[".sqlHead"] = "SELECT ut_map_external_source_users.id_map,  ut_map_external_source_users.organization_id,  ut_map_external_source_users.is_obsolete AS obsolete_unee_t_user,  ut_map_external_source_users.person_id,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.external_person_id,  ut_map_external_source_users.external_system,  ut_map_external_source_users.table_in_external_system,  person_statuses.is_active AS active_person,  person_statuses.person_status,  persons.unee_t_user_type_id,  ut_user_types.designation AS user_type,  persons.organization_id AS organization_id_person,  CONCAT(IFNULL(`persons`.`given_name`  		, ''), ' ', IFNULL(`persons`.`middle_name`  		, ''), ' ', IFNULL(`persons`.`family_name`  		, ''), ' (', IFNULL(`persons`.`alias`  		, ''), ')') AS name,  CONCAT(IFNULL(`persons`.`organization`  		, ''), ' - ', IFNULL(`persons`.`job_title`  		, '')) AS `organization-job`,  persons.email,  CONCAT(IFNULL(`persons`.`tel_1`  		, ''), ' - ', IFNULL(`persons`.`tel_2`  		, ''), ' - ', IFNULL(`persons`.`whatsapp`  		, '')) AS phones,  persons.country_code";
$tdatasuper_admin___manage_mefe_master_user[".sqlFrom"] = "FROM ut_map_external_source_users  LEFT OUTER JOIN persons ON ut_map_external_source_users.person_id = persons.id_person  LEFT OUTER JOIN person_statuses ON persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$tdatasuper_admin___manage_mefe_master_user[".sqlWhereExpr"] = "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)";
$tdatasuper_admin___manage_mefe_master_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuper_admin___manage_mefe_master_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuper_admin___manage_mefe_master_user[".arrGroupsPerPage"] = $arrGPP;

$tdatasuper_admin___manage_mefe_master_user[".highlightSearchResults"] = true;

$tableKeyssuper_admin___manage_mefe_master_user = array();
$tableKeyssuper_admin___manage_mefe_master_user[] = "organization_id";
$tableKeyssuper_admin___manage_mefe_master_user[] = "external_person_id";
$tableKeyssuper_admin___manage_mefe_master_user[] = "external_system";
$tableKeyssuper_admin___manage_mefe_master_user[] = "table_in_external_system";
$tdatasuper_admin___manage_mefe_master_user[".Keys"] = $tableKeyssuper_admin___manage_mefe_master_user;


$tdatasuper_admin___manage_mefe_master_user[".hideMobileList"] = array();




//	id_map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map";
	$fdata["GoodName"] = "id_map";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","id_map");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.id_map";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["id_map"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "id_map";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.organization_id";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["organization_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "organization_id";
//	obsolete_unee_t_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "obsolete_unee_t_user";
	$fdata["GoodName"] = "obsolete_unee_t_user";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","obsolete_unee_t_user");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.is_obsolete";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["obsolete_unee_t_user"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "obsolete_unee_t_user";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","person_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.person_id";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["person_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "person_id";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
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


	$tdatasuper_admin___manage_mefe_master_user["unee_t_mefe_user_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "unee_t_mefe_user_id";
//	external_person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "external_person_id";
	$fdata["GoodName"] = "external_person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","external_person_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.external_person_id";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["external_person_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "external_person_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.external_system";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["external_system"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "external_system";
//	table_in_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "table_in_external_system";
	$fdata["GoodName"] = "table_in_external_system";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","table_in_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "table_in_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.table_in_external_system";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["table_in_external_system"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "table_in_external_system";
//	active_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "active_person";
	$fdata["GoodName"] = "active_person";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","active_person");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_statuses.is_active";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["active_person"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "active_person";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
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


	$tdatasuper_admin___manage_mefe_master_user["person_status"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "person_status";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.unee_t_user_type_id";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["unee_t_user_type_id"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "unee_t_user_type_id";
//	user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "user_type";
	$fdata["GoodName"] = "user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","user_type");
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


	$tdatasuper_admin___manage_mefe_master_user["user_type"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "user_type";
//	organization_id_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "organization_id_person";
	$fdata["GoodName"] = "organization_id_person";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","organization_id_person");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.organization_id";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["organization_id_person"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "organization_id_person";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(IFNULL(`persons`.`given_name`  		, ''), ' ', IFNULL(`persons`.`middle_name`  		, ''), ' ', IFNULL(`persons`.`family_name`  		, ''), ' (', IFNULL(`persons`.`alias`  		, ''), ')')";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["name"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "name";
//	organization-job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "organization-job";
	$fdata["GoodName"] = "organization_job";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","organization_job");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "organization-job";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(IFNULL(`persons`.`organization`  		, ''), ' - ', IFNULL(`persons`.`job_title`  		, ''))";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["organization-job"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "organization-job";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.email";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["email"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "email";
//	phones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "phones";
	$fdata["GoodName"] = "phones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","phones");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "phones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(IFNULL(`persons`.`tel_1`  		, ''), ' - ', IFNULL(`persons`.`tel_2`  		, ''), ' - ', IFNULL(`persons`.`whatsapp`  		, ''))";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["phones"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "phones";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_MEFE_Master_User","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.country_code";

	
	
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


	$tdatasuper_admin___manage_mefe_master_user["country_code"] = $fdata;
		$tdatasuper_admin___manage_mefe_master_user[".searchableFields"][] = "country_code";


$tables_data["Super Admin - Manage MEFE Master User"]=&$tdatasuper_admin___manage_mefe_master_user;
$field_labels["Super_Admin___Manage_MEFE_Master_User"] = &$fieldLabelssuper_admin___manage_mefe_master_user;
$fieldToolTips["Super_Admin___Manage_MEFE_Master_User"] = &$fieldToolTipssuper_admin___manage_mefe_master_user;
$placeHolders["Super_Admin___Manage_MEFE_Master_User"] = &$placeHolderssuper_admin___manage_mefe_master_user;
$page_titles["Super_Admin___Manage_MEFE_Master_User"] = &$pageTitlessuper_admin___manage_mefe_master_user;

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
	$masterTablesData["Super Admin - Manage MEFE Master User"][0]["detailKeys"][]="organization_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_super_admin___manage_mefe_master_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_map_external_source_users.id_map,  ut_map_external_source_users.organization_id,  ut_map_external_source_users.is_obsolete AS obsolete_unee_t_user,  ut_map_external_source_users.person_id,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.external_person_id,  ut_map_external_source_users.external_system,  ut_map_external_source_users.table_in_external_system,  person_statuses.is_active AS active_person,  person_statuses.person_status,  persons.unee_t_user_type_id,  ut_user_types.designation AS user_type,  persons.organization_id AS organization_id_person,  CONCAT(IFNULL(`persons`.`given_name`  		, ''), ' ', IFNULL(`persons`.`middle_name`  		, ''), ' ', IFNULL(`persons`.`family_name`  		, ''), ' (', IFNULL(`persons`.`alias`  		, ''), ')') AS name,  CONCAT(IFNULL(`persons`.`organization`  		, ''), ' - ', IFNULL(`persons`.`job_title`  		, '')) AS `organization-job`,  persons.email,  CONCAT(IFNULL(`persons`.`tel_1`  		, ''), ' - ', IFNULL(`persons`.`tel_2`  		, ''), ' - ', IFNULL(`persons`.`whatsapp`  		, '')) AS phones,  persons.country_code";
$proto0["m_strFrom"] = "FROM ut_map_external_source_users  LEFT OUTER JOIN persons ON ut_map_external_source_users.person_id = persons.id_person  LEFT OUTER JOIN person_statuses ON persons.person_status_id = person_statuses.id_person_status  LEFT OUTER JOIN ut_user_types ON persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto0["m_strWhere"] = "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)";
$proto0["m_strOrderBy"] = "ORDER BY persons.organization_id DESC";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL";
$proto4["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NOT NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "IS NOT NULL";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "person_statuses.is_active = 1 OR person_statuses.is_active IS NULL";
$proto10["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "person_statuses.is_active = 1 OR person_statuses.is_active IS NULL"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
						$proto12=array();
$proto12["m_sql"] = "person_statuses.is_active = 1";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 1";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto10["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "person_statuses.is_active IS NULL";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "IS NULL";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto10["m_contained"][]=$obj;
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_map",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto18["m_sql"] = "ut_map_external_source_users.id_map";
$proto18["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto20["m_sql"] = "ut_map_external_source_users.organization_id";
$proto20["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto22["m_sql"] = "ut_map_external_source_users.is_obsolete";
$proto22["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "obsolete_unee_t_user";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto24["m_sql"] = "ut_map_external_source_users.person_id";
$proto24["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto26["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id";
$proto26["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "external_person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto28["m_sql"] = "ut_map_external_source_users.external_person_id";
$proto28["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto30["m_sql"] = "ut_map_external_source_users.external_system";
$proto30["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "table_in_external_system",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto32["m_sql"] = "ut_map_external_source_users.table_in_external_system";
$proto32["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto34["m_sql"] = "person_statuses.is_active";
$proto34["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "active_person";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto36["m_sql"] = "person_statuses.person_status";
$proto36["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto38["m_sql"] = "persons.unee_t_user_type_id";
$proto38["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto40["m_sql"] = "ut_user_types.designation";
$proto40["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "user_type";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto42["m_sql"] = "persons.organization_id";
$proto42["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "organization_id_person";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_CUSTOM";
$proto45["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`given_name`  		, '')"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`middle_name`  		, '')"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`family_name`  		, '')"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' ('"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`alias`  		, '')"
));

$proto45["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "')'"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "CONCAT(IFNULL(`persons`.`given_name`  		, ''), ' ', IFNULL(`persons`.`middle_name`  		, ''), ' ', IFNULL(`persons`.`family_name`  		, ''), ' (', IFNULL(`persons`.`alias`  		, ''), ')')";
$proto44["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "name";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$proto55=array();
$proto55["m_functiontype"] = "SQLF_CUSTOM";
$proto55["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`organization`  		, '')"
));

$proto55["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto55["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`job_title`  		, '')"
));

$proto55["m_arguments"][]=$obj;
$proto55["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto55);

$proto54["m_sql"] = "CONCAT(IFNULL(`persons`.`organization`  		, ''), ' - ', IFNULL(`persons`.`job_title`  		, ''))";
$proto54["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "organization-job";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto59["m_sql"] = "persons.email";
$proto59["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$proto62=array();
$proto62["m_functiontype"] = "SQLF_CUSTOM";
$proto62["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`tel_1`  		, '')"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`tel_2`  		, '')"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto62["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`whatsapp`  		, '')"
));

$proto62["m_arguments"][]=$obj;
$proto62["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto62);

$proto61["m_sql"] = "CONCAT(IFNULL(`persons`.`tel_1`  		, ''), ' - ', IFNULL(`persons`.`tel_2`  		, ''), ' - ', IFNULL(`persons`.`whatsapp`  		, ''))";
$proto61["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "phones";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto68["m_sql"] = "persons.country_code";
$proto68["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "ut_map_external_source_users";
$proto71["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "id_map";
$proto71["m_columns"][] = "create_api_request_id";
$proto71["m_columns"][] = "edit_api_request_id";
$proto71["m_columns"][] = "syst_created_datetime";
$proto71["m_columns"][] = "creation_system_id";
$proto71["m_columns"][] = "created_by_id";
$proto71["m_columns"][] = "creation_method";
$proto71["m_columns"][] = "syst_updated_datetime";
$proto71["m_columns"][] = "update_system_id";
$proto71["m_columns"][] = "updated_by_id";
$proto71["m_columns"][] = "update_method";
$proto71["m_columns"][] = "is_update_on_duplicate_key";
$proto71["m_columns"][] = "organization_id";
$proto71["m_columns"][] = "is_obsolete";
$proto71["m_columns"][] = "is_update_needed";
$proto71["m_columns"][] = "person_id";
$proto71["m_columns"][] = "mefe_user_id_parent";
$proto71["m_columns"][] = "unee_t_mefe_user_id";
$proto71["m_columns"][] = "unee_t_mefe_user_api_key";
$proto71["m_columns"][] = "uneet_created_datetime";
$proto71["m_columns"][] = "is_mefe_api_success";
$proto71["m_columns"][] = "mefe_api_error_message";
$proto71["m_columns"][] = "is_unee_t_created_by_me";
$proto71["m_columns"][] = "uneet_login_name";
$proto71["m_columns"][] = "external_person_id";
$proto71["m_columns"][] = "external_system";
$proto71["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "ut_map_external_source_users";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto72=array();
$proto72["m_sql"] = "";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "";
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
$proto75["m_strName"] = "persons";
$proto75["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto75["m_columns"] = array();
$proto75["m_columns"][] = "id_person";
$proto75["m_columns"][] = "create_api_request_id";
$proto75["m_columns"][] = "edit_api_request_id";
$proto75["m_columns"][] = "external_id";
$proto75["m_columns"][] = "external_system";
$proto75["m_columns"][] = "external_table";
$proto75["m_columns"][] = "syst_created_datetime";
$proto75["m_columns"][] = "creation_system_id";
$proto75["m_columns"][] = "created_by_id";
$proto75["m_columns"][] = "creation_method";
$proto75["m_columns"][] = "syst_updated_datetime";
$proto75["m_columns"][] = "update_system_id";
$proto75["m_columns"][] = "updated_by_id";
$proto75["m_columns"][] = "update_method";
$proto75["m_columns"][] = "is_update_on_duplicate_key";
$proto75["m_columns"][] = "organization_id";
$proto75["m_columns"][] = "person_status_id";
$proto75["m_columns"][] = "dupe_id";
$proto75["m_columns"][] = "handler_id";
$proto75["m_columns"][] = "is_unee_t_account_needed";
$proto75["m_columns"][] = "unee_t_user_type_id";
$proto75["m_columns"][] = "country_code";
$proto75["m_columns"][] = "gender";
$proto75["m_columns"][] = "salutation_id";
$proto75["m_columns"][] = "given_name";
$proto75["m_columns"][] = "middle_name";
$proto75["m_columns"][] = "family_name";
$proto75["m_columns"][] = "date_of_birth";
$proto75["m_columns"][] = "alias";
$proto75["m_columns"][] = "job_title";
$proto75["m_columns"][] = "organization";
$proto75["m_columns"][] = "email";
$proto75["m_columns"][] = "tel_1";
$proto75["m_columns"][] = "tel_2";
$proto75["m_columns"][] = "whatsapp";
$proto75["m_columns"][] = "linkedin";
$proto75["m_columns"][] = "facebook";
$proto75["m_columns"][] = "adr1";
$proto75["m_columns"][] = "adr2";
$proto75["m_columns"][] = "adr3";
$proto75["m_columns"][] = "City";
$proto75["m_columns"][] = "zip_postcode";
$proto75["m_columns"][] = "region_or_state";
$proto75["m_columns"][] = "country";
$obj = new SQLTable($proto75);

$proto74["m_table"] = $obj;
$proto74["m_sql"] = "LEFT OUTER JOIN persons ON ut_map_external_source_users.person_id = persons.id_person";
$proto74["m_alias"] = "";
$proto74["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto76=array();
$proto76["m_sql"] = "ut_map_external_source_users.person_id = persons.id_person";
$proto76["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto76["m_column"]=$obj;
$proto76["m_contained"] = array();
$proto76["m_strCase"] = "= persons.id_person";
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
$proto79["m_strName"] = "person_statuses";
$proto79["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto79["m_columns"] = array();
$proto79["m_columns"][] = "id_person_status";
$proto79["m_columns"][] = "creation_system_id";
$proto79["m_columns"][] = "update_system_id";
$proto79["m_columns"][] = "is_obsolete";
$proto79["m_columns"][] = "is_default";
$proto79["m_columns"][] = "is_active";
$proto79["m_columns"][] = "order";
$proto79["m_columns"][] = "person_status";
$proto79["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto79);

$proto78["m_table"] = $obj;
$proto78["m_sql"] = "LEFT OUTER JOIN person_statuses ON persons.person_status_id = person_statuses.id_person_status";
$proto78["m_alias"] = "";
$proto78["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto80=array();
$proto80["m_sql"] = "persons.person_status_id = person_statuses.id_person_status";
$proto80["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto80["m_column"]=$obj;
$proto80["m_contained"] = array();
$proto80["m_strCase"] = "= person_statuses.id_person_status";
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
$proto83["m_strName"] = "ut_user_types";
$proto83["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto83["m_columns"] = array();
$proto83["m_columns"][] = "id_unee_t_user_type";
$proto83["m_columns"][] = "syst_created_datetime";
$proto83["m_columns"][] = "creation_system_id";
$proto83["m_columns"][] = "created_by_id";
$proto83["m_columns"][] = "creation_method";
$proto83["m_columns"][] = "syst_updated_datetime";
$proto83["m_columns"][] = "update_system_id";
$proto83["m_columns"][] = "updated_by_id";
$proto83["m_columns"][] = "update_method";
$proto83["m_columns"][] = "organization_id";
$proto83["m_columns"][] = "order";
$proto83["m_columns"][] = "is_obsolete";
$proto83["m_columns"][] = "designation";
$proto83["m_columns"][] = "description";
$proto83["m_columns"][] = "ut_user_role_type_id";
$proto83["m_columns"][] = "is_all_unit";
$proto83["m_columns"][] = "is_all_units_in_country";
$proto83["m_columns"][] = "is_all_units_in_area";
$proto83["m_columns"][] = "is_all_units_in_level_1";
$proto83["m_columns"][] = "is_all_units_in_level_2";
$proto83["m_columns"][] = "is_occupant";
$proto83["m_columns"][] = "is_public";
$proto83["m_columns"][] = "is_default_assignee";
$proto83["m_columns"][] = "is_default_invited";
$proto83["m_columns"][] = "is_unit_owner";
$proto83["m_columns"][] = "is_dashboard_access";
$proto83["m_columns"][] = "can_see_role_contractor";
$proto83["m_columns"][] = "can_see_role_mgt_cny";
$proto83["m_columns"][] = "can_see_occupant";
$proto83["m_columns"][] = "can_see_role_landlord";
$proto83["m_columns"][] = "can_see_role_agent";
$proto83["m_columns"][] = "can_see_role_tenant";
$proto83["m_columns"][] = "is_assigned_to_case";
$proto83["m_columns"][] = "is_invited_to_case";
$proto83["m_columns"][] = "is_solution_updated";
$proto83["m_columns"][] = "is_next_step_updated";
$proto83["m_columns"][] = "is_deadline_updated";
$proto83["m_columns"][] = "is_case_resolved";
$proto83["m_columns"][] = "is_case_critical";
$proto83["m_columns"][] = "is_case_blocker";
$proto83["m_columns"][] = "is_message_from_contractor";
$proto83["m_columns"][] = "is_message_from_mgt_cny";
$proto83["m_columns"][] = "is_message_from_agent";
$proto83["m_columns"][] = "is_message_from_occupant";
$proto83["m_columns"][] = "is_message_from_ll";
$proto83["m_columns"][] = "is_message_from_tenant";
$proto83["m_columns"][] = "is_any_new_message";
$proto83["m_columns"][] = "is_new_ir";
$proto83["m_columns"][] = "is_new_inventory";
$proto83["m_columns"][] = "is_new_item";
$proto83["m_columns"][] = "is_item_moved";
$proto83["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto83);

$proto82["m_table"] = $obj;
$proto82["m_sql"] = "LEFT OUTER JOIN ut_user_types ON persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto82["m_alias"] = "";
$proto82["m_srcTableName"] = "Super Admin - Manage MEFE Master User";
$proto84=array();
$proto84["m_sql"] = "persons.unee_t_user_type_id = ut_user_types.id_unee_t_user_type";
$proto84["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto84["m_column"]=$obj;
$proto84["m_contained"] = array();
$proto84["m_strCase"] = "= ut_user_types.id_unee_t_user_type";
$proto84["m_havingmode"] = false;
$proto84["m_inBrackets"] = false;
$proto84["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto84);

$proto82["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto82);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto86=array();
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Super Admin - Manage MEFE Master User"
));

$proto86["m_column"]=$obj;
$proto86["m_bAsc"] = 0;
$proto86["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto86);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Super Admin - Manage MEFE Master User";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_super_admin___manage_mefe_master_user = createSqlQuery_super_admin___manage_mefe_master_user();


	
					
;

																		

$tdatasuper_admin___manage_mefe_master_user[".sqlquery"] = $queryData_super_admin___manage_mefe_master_user;

$tableEvents["Super Admin - Manage MEFE Master User"] = new eventsBase;
$tdatasuper_admin___manage_mefe_master_user[".hasEvents"] = false;

?>