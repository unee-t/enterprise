<?php



$tdataut_map_external_source_users = array();
$tdataut_map_external_source_users[".searchableFields"] = array();
$tdataut_map_external_source_users[".ShortName"] = "ut_map_external_source_users";
$tdataut_map_external_source_users[".OwnerID"] = "";
$tdataut_map_external_source_users[".OriginalTable"] = "ut_map_external_source_users";


$defaultPages = my_json_decode( "{\"search\":\"search\"}" );

$tdataut_map_external_source_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataut_map_external_source_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataut_map_external_source_users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsut_map_external_source_users = array();
$fieldToolTipsut_map_external_source_users = array();
$pageTitlesut_map_external_source_users = array();
$placeHoldersut_map_external_source_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsut_map_external_source_users["English"] = array();
	$fieldToolTipsut_map_external_source_users["English"] = array();
	$placeHoldersut_map_external_source_users["English"] = array();
	$pageTitlesut_map_external_source_users["English"] = array();
	$fieldLabelsut_map_external_source_users["English"]["id_map"] = "Id Map";
	$fieldToolTipsut_map_external_source_users["English"]["id_map"] = "";
	$placeHoldersut_map_external_source_users["English"]["id_map"] = "";
	$fieldLabelsut_map_external_source_users["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsut_map_external_source_users["English"]["syst_created_datetime"] = "";
	$placeHoldersut_map_external_source_users["English"]["syst_created_datetime"] = "";
	$fieldLabelsut_map_external_source_users["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsut_map_external_source_users["English"]["creation_system_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["creation_system_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsut_map_external_source_users["English"]["created_by_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["created_by_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsut_map_external_source_users["English"]["creation_method"] = "";
	$placeHoldersut_map_external_source_users["English"]["creation_method"] = "";
	$fieldLabelsut_map_external_source_users["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsut_map_external_source_users["English"]["syst_updated_datetime"] = "";
	$placeHoldersut_map_external_source_users["English"]["syst_updated_datetime"] = "";
	$fieldLabelsut_map_external_source_users["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsut_map_external_source_users["English"]["update_system_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["update_system_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsut_map_external_source_users["English"]["updated_by_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["updated_by_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["update_method"] = "Update Method";
	$fieldToolTipsut_map_external_source_users["English"]["update_method"] = "";
	$placeHoldersut_map_external_source_users["English"]["update_method"] = "";
	$fieldLabelsut_map_external_source_users["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsut_map_external_source_users["English"]["organization_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["organization_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsut_map_external_source_users["English"]["is_obsolete"] = "";
	$placeHoldersut_map_external_source_users["English"]["is_obsolete"] = "";
	$fieldLabelsut_map_external_source_users["English"]["is_update_needed"] = "Is Update Needed";
	$fieldToolTipsut_map_external_source_users["English"]["is_update_needed"] = "";
	$placeHoldersut_map_external_source_users["English"]["is_update_needed"] = "";
	$fieldLabelsut_map_external_source_users["English"]["person_id"] = "Person Id";
	$fieldToolTipsut_map_external_source_users["English"]["person_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["person_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["mefe_user_id_parent"] = "Mefe User Id Parent";
	$fieldToolTipsut_map_external_source_users["English"]["mefe_user_id_parent"] = "";
	$placeHoldersut_map_external_source_users["English"]["mefe_user_id_parent"] = "";
	$fieldLabelsut_map_external_source_users["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipsut_map_external_source_users["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["unee_t_mefe_user_api_key"] = "Unee T Mefe User Api Key";
	$fieldToolTipsut_map_external_source_users["English"]["unee_t_mefe_user_api_key"] = "";
	$placeHoldersut_map_external_source_users["English"]["unee_t_mefe_user_api_key"] = "";
	$fieldLabelsut_map_external_source_users["English"]["uneet_created_datetime"] = "Uneet Created Datetime";
	$fieldToolTipsut_map_external_source_users["English"]["uneet_created_datetime"] = "";
	$placeHoldersut_map_external_source_users["English"]["uneet_created_datetime"] = "";
	$fieldLabelsut_map_external_source_users["English"]["is_mefe_api_success"] = "Is Mefe Api Success";
	$fieldToolTipsut_map_external_source_users["English"]["is_mefe_api_success"] = "";
	$placeHoldersut_map_external_source_users["English"]["is_mefe_api_success"] = "";
	$fieldLabelsut_map_external_source_users["English"]["mefe_api_error_message"] = "Mefe Api Error Message";
	$fieldToolTipsut_map_external_source_users["English"]["mefe_api_error_message"] = "";
	$placeHoldersut_map_external_source_users["English"]["mefe_api_error_message"] = "";
	$fieldLabelsut_map_external_source_users["English"]["is_unee_t_created_by_me"] = "Is Unee T Created By Me";
	$fieldToolTipsut_map_external_source_users["English"]["is_unee_t_created_by_me"] = "";
	$placeHoldersut_map_external_source_users["English"]["is_unee_t_created_by_me"] = "";
	$fieldLabelsut_map_external_source_users["English"]["uneet_login_name"] = "Uneet Login Name";
	$fieldToolTipsut_map_external_source_users["English"]["uneet_login_name"] = "";
	$placeHoldersut_map_external_source_users["English"]["uneet_login_name"] = "";
	$fieldLabelsut_map_external_source_users["English"]["external_person_id"] = "External Person Id";
	$fieldToolTipsut_map_external_source_users["English"]["external_person_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["external_person_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["external_system"] = "External System";
	$fieldToolTipsut_map_external_source_users["English"]["external_system"] = "";
	$placeHoldersut_map_external_source_users["English"]["external_system"] = "";
	$fieldLabelsut_map_external_source_users["English"]["table_in_external_system"] = "Table In External System";
	$fieldToolTipsut_map_external_source_users["English"]["table_in_external_system"] = "";
	$placeHoldersut_map_external_source_users["English"]["table_in_external_system"] = "";
	$fieldLabelsut_map_external_source_users["English"]["create_api_request_id"] = "Create Api Request Id";
	$fieldToolTipsut_map_external_source_users["English"]["create_api_request_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["create_api_request_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["edit_api_request_id"] = "Edit Api Request Id";
	$fieldToolTipsut_map_external_source_users["English"]["edit_api_request_id"] = "";
	$placeHoldersut_map_external_source_users["English"]["edit_api_request_id"] = "";
	$fieldLabelsut_map_external_source_users["English"]["is_update_on_duplicate_key"] = "Is Update On Duplicate Key";
	$fieldToolTipsut_map_external_source_users["English"]["is_update_on_duplicate_key"] = "";
	$placeHoldersut_map_external_source_users["English"]["is_update_on_duplicate_key"] = "";
	if (count($fieldToolTipsut_map_external_source_users["English"]))
		$tdataut_map_external_source_users[".isUseToolTips"] = true;
}


	$tdataut_map_external_source_users[".NCSearch"] = true;



$tdataut_map_external_source_users[".shortTableName"] = "ut_map_external_source_users";
$tdataut_map_external_source_users[".nSecOptions"] = 0;

$tdataut_map_external_source_users[".mainTableOwnerID"] = "";
$tdataut_map_external_source_users[".entityType"] = 1;

$tdataut_map_external_source_users[".strOriginalTableName"] = "ut_map_external_source_users";

		 



$tdataut_map_external_source_users[".showAddInPopup"] = false;

$tdataut_map_external_source_users[".showEditInPopup"] = false;

$tdataut_map_external_source_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataut_map_external_source_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataut_map_external_source_users[".listAjax"] = false;
//	temporary
$tdataut_map_external_source_users[".listAjax"] = false;

	$tdataut_map_external_source_users[".audit"] = false;

	$tdataut_map_external_source_users[".locking"] = false;


$pages = $tdataut_map_external_source_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataut_map_external_source_users[".edit"] = true;
	$tdataut_map_external_source_users[".afterEditAction"] = 1;
	$tdataut_map_external_source_users[".closePopupAfterEdit"] = 1;
	$tdataut_map_external_source_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataut_map_external_source_users[".add"] = true;
$tdataut_map_external_source_users[".afterAddAction"] = 1;
$tdataut_map_external_source_users[".closePopupAfterAdd"] = 1;
$tdataut_map_external_source_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataut_map_external_source_users[".list"] = true;
}



$tdataut_map_external_source_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataut_map_external_source_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataut_map_external_source_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataut_map_external_source_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataut_map_external_source_users[".printFriendly"] = true;
}



$tdataut_map_external_source_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataut_map_external_source_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataut_map_external_source_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataut_map_external_source_users[".isUseAjaxSuggest"] = true;

$tdataut_map_external_source_users[".rowHighlite"] = true;





$tdataut_map_external_source_users[".ajaxCodeSnippetAdded"] = false;

$tdataut_map_external_source_users[".buttonsAdded"] = false;

$tdataut_map_external_source_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataut_map_external_source_users[".isUseTimeForSearch"] = false;


$tdataut_map_external_source_users[".badgeColor"] = "CD5C5C";


$tdataut_map_external_source_users[".allSearchFields"] = array();
$tdataut_map_external_source_users[".filterFields"] = array();
$tdataut_map_external_source_users[".requiredSearchFields"] = array();

$tdataut_map_external_source_users[".googleLikeFields"] = array();
$tdataut_map_external_source_users[".googleLikeFields"][] = "id_map";
$tdataut_map_external_source_users[".googleLikeFields"][] = "create_api_request_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "edit_api_request_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "syst_created_datetime";
$tdataut_map_external_source_users[".googleLikeFields"][] = "creation_system_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "created_by_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "creation_method";
$tdataut_map_external_source_users[".googleLikeFields"][] = "syst_updated_datetime";
$tdataut_map_external_source_users[".googleLikeFields"][] = "update_system_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "updated_by_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "update_method";
$tdataut_map_external_source_users[".googleLikeFields"][] = "is_update_on_duplicate_key";
$tdataut_map_external_source_users[".googleLikeFields"][] = "organization_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "is_obsolete";
$tdataut_map_external_source_users[".googleLikeFields"][] = "is_update_needed";
$tdataut_map_external_source_users[".googleLikeFields"][] = "person_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "mefe_user_id_parent";
$tdataut_map_external_source_users[".googleLikeFields"][] = "unee_t_mefe_user_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "unee_t_mefe_user_api_key";
$tdataut_map_external_source_users[".googleLikeFields"][] = "uneet_created_datetime";
$tdataut_map_external_source_users[".googleLikeFields"][] = "is_mefe_api_success";
$tdataut_map_external_source_users[".googleLikeFields"][] = "mefe_api_error_message";
$tdataut_map_external_source_users[".googleLikeFields"][] = "is_unee_t_created_by_me";
$tdataut_map_external_source_users[".googleLikeFields"][] = "uneet_login_name";
$tdataut_map_external_source_users[".googleLikeFields"][] = "external_person_id";
$tdataut_map_external_source_users[".googleLikeFields"][] = "external_system";
$tdataut_map_external_source_users[".googleLikeFields"][] = "table_in_external_system";



$tdataut_map_external_source_users[".tableType"] = "list";

$tdataut_map_external_source_users[".printerPageOrientation"] = 0;
$tdataut_map_external_source_users[".nPrinterPageScale"] = 100;

$tdataut_map_external_source_users[".nPrinterSplitRecords"] = 40;

$tdataut_map_external_source_users[".geocodingEnabled"] = false;










$tdataut_map_external_source_users[".pageSize"] = 20;

$tdataut_map_external_source_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataut_map_external_source_users[".strOrderBy"] = $tstrOrderBy;

$tdataut_map_external_source_users[".orderindexes"] = array();

$tdataut_map_external_source_users[".sqlHead"] = "SELECT id_map,  	create_api_request_id,  	edit_api_request_id,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	is_update_on_duplicate_key,  	organization_id,  	is_obsolete,  	is_update_needed,  	person_id,  	mefe_user_id_parent,  	unee_t_mefe_user_id,  	unee_t_mefe_user_api_key,  	uneet_created_datetime,  	is_mefe_api_success,  	mefe_api_error_message,  	is_unee_t_created_by_me,  	uneet_login_name,  	external_person_id,  	external_system,  	table_in_external_system";
$tdataut_map_external_source_users[".sqlFrom"] = "FROM ut_map_external_source_users";
$tdataut_map_external_source_users[".sqlWhereExpr"] = "";
$tdataut_map_external_source_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataut_map_external_source_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataut_map_external_source_users[".arrGroupsPerPage"] = $arrGPP;

$tdataut_map_external_source_users[".highlightSearchResults"] = true;

$tableKeysut_map_external_source_users = array();
$tableKeysut_map_external_source_users[] = "organization_id";
$tableKeysut_map_external_source_users[] = "external_person_id";
$tableKeysut_map_external_source_users[] = "external_system";
$tableKeysut_map_external_source_users[] = "table_in_external_system";
$tdataut_map_external_source_users[".Keys"] = $tableKeysut_map_external_source_users;


$tdataut_map_external_source_users[".hideMobileList"] = array();




//	id_map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map";
	$fdata["GoodName"] = "id_map";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","id_map");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_map";

	
	
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


	$tdataut_map_external_source_users["id_map"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "id_map";
//	create_api_request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "create_api_request_id";
	$fdata["GoodName"] = "create_api_request_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","create_api_request_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "create_api_request_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "create_api_request_id";

	
	
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


	$tdataut_map_external_source_users["create_api_request_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "create_api_request_id";
//	edit_api_request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edit_api_request_id";
	$fdata["GoodName"] = "edit_api_request_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","edit_api_request_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "edit_api_request_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_api_request_id";

	
	
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


	$tdataut_map_external_source_users["edit_api_request_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "edit_api_request_id";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_created_datetime";

	
	
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


	$tdataut_map_external_source_users["syst_created_datetime"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","creation_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_system_id";

	
	
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


	$tdataut_map_external_source_users["creation_system_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","created_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by_id";

	
	
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


	$tdataut_map_external_source_users["created_by_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_method";

	
	
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


	$tdataut_map_external_source_users["creation_method"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_updated_datetime";

	
	
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


	$tdataut_map_external_source_users["syst_updated_datetime"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_system_id";

	
	
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


	$tdataut_map_external_source_users["update_system_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by_id";

	
	
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


	$tdataut_map_external_source_users["updated_by_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_method";

	
	
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


	$tdataut_map_external_source_users["update_method"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "update_method";
//	is_update_on_duplicate_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_update_on_duplicate_key";
	$fdata["GoodName"] = "is_update_on_duplicate_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","is_update_on_duplicate_key");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_update_on_duplicate_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_update_on_duplicate_key";

	
	
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


	$tdataut_map_external_source_users["is_update_on_duplicate_key"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "is_update_on_duplicate_key";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organization_id";

	
	
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
	$edata["LookupTable"] = "uneet_enterprise_organizations";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_organization";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_organization";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataut_map_external_source_users["organization_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "organization_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_obsolete";

	
	
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


	$tdataut_map_external_source_users["is_obsolete"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "is_obsolete";
//	is_update_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_update_needed";
	$fdata["GoodName"] = "is_update_needed";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","is_update_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_update_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_update_needed";

	
	
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


	$tdataut_map_external_source_users["is_update_needed"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "is_update_needed";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","person_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_id";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "persons";
	$edata["LookupConnId"] = "unee_t_enterprise_v1_3_0_at_localhost";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_person";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_person";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdataut_map_external_source_users["person_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "person_id";
//	mefe_user_id_parent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "mefe_user_id_parent";
	$fdata["GoodName"] = "mefe_user_id_parent";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","mefe_user_id_parent");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_user_id_parent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mefe_user_id_parent";

	
	
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
	$edata["LookupTable"] = "ut_map_external_source_users";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "unee_t_mefe_user_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "unee_t_mefe_user_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataut_map_external_source_users["mefe_user_id_parent"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "mefe_user_id_parent";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unee_t_mefe_user_id";

	
	
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


	$tdataut_map_external_source_users["unee_t_mefe_user_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "unee_t_mefe_user_id";
//	unee_t_mefe_user_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "unee_t_mefe_user_api_key";
	$fdata["GoodName"] = "unee_t_mefe_user_api_key";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","unee_t_mefe_user_api_key");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unee_t_mefe_user_api_key";

	
	
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


	$tdataut_map_external_source_users["unee_t_mefe_user_api_key"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "unee_t_mefe_user_api_key";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_created_datetime";

	
	
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


	$tdataut_map_external_source_users["uneet_created_datetime"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "uneet_created_datetime";
//	is_mefe_api_success
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "is_mefe_api_success";
	$fdata["GoodName"] = "is_mefe_api_success";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","is_mefe_api_success");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_mefe_api_success";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_mefe_api_success";

	
	
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


	$tdataut_map_external_source_users["is_mefe_api_success"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "is_mefe_api_success";
//	mefe_api_error_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "mefe_api_error_message";
	$fdata["GoodName"] = "mefe_api_error_message";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","mefe_api_error_message");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "mefe_api_error_message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mefe_api_error_message";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataut_map_external_source_users["mefe_api_error_message"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "mefe_api_error_message";
//	is_unee_t_created_by_me
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_unee_t_created_by_me";
	$fdata["GoodName"] = "is_unee_t_created_by_me";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","is_unee_t_created_by_me");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_unee_t_created_by_me";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_unee_t_created_by_me";

	
	
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


	$tdataut_map_external_source_users["is_unee_t_created_by_me"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "is_unee_t_created_by_me";
//	uneet_login_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "uneet_login_name";
	$fdata["GoodName"] = "uneet_login_name";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","uneet_login_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "uneet_login_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_login_name";

	
	
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


	$tdataut_map_external_source_users["uneet_login_name"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "uneet_login_name";
//	external_person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "external_person_id";
	$fdata["GoodName"] = "external_person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","external_person_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_person_id";

	
	
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


	$tdataut_map_external_source_users["external_person_id"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "external_person_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_system";

	
	
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


	$tdataut_map_external_source_users["external_system"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "external_system";
//	table_in_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "table_in_external_system";
	$fdata["GoodName"] = "table_in_external_system";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("ut_map_external_source_users","table_in_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "table_in_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "table_in_external_system";

	
	
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


	$tdataut_map_external_source_users["table_in_external_system"] = $fdata;
		$tdataut_map_external_source_users[".searchableFields"][] = "table_in_external_system";


$tables_data["ut_map_external_source_users"]=&$tdataut_map_external_source_users;
$field_labels["ut_map_external_source_users"] = &$fieldLabelsut_map_external_source_users;
$fieldToolTips["ut_map_external_source_users"] = &$fieldToolTipsut_map_external_source_users;
$placeHolders["ut_map_external_source_users"] = &$placeHoldersut_map_external_source_users;
$page_titles["ut_map_external_source_users"] = &$pageTitlesut_map_external_source_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ut_map_external_source_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ut_map_external_source_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ut_map_external_source_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_map,  	create_api_request_id,  	edit_api_request_id,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	is_update_on_duplicate_key,  	organization_id,  	is_obsolete,  	is_update_needed,  	person_id,  	mefe_user_id_parent,  	unee_t_mefe_user_id,  	unee_t_mefe_user_api_key,  	uneet_created_datetime,  	is_mefe_api_success,  	mefe_api_error_message,  	is_unee_t_created_by_me,  	uneet_login_name,  	external_person_id,  	external_system,  	table_in_external_system";
$proto0["m_strFrom"] = "FROM ut_map_external_source_users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
					
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
	"m_strName" => "id_map",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto6["m_sql"] = "id_map";
$proto6["m_srcTableName"] = "ut_map_external_source_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "create_api_request_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto8["m_sql"] = "create_api_request_id";
$proto8["m_srcTableName"] = "ut_map_external_source_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_api_request_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto10["m_sql"] = "edit_api_request_id";
$proto10["m_srcTableName"] = "ut_map_external_source_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto12["m_sql"] = "syst_created_datetime";
$proto12["m_srcTableName"] = "ut_map_external_source_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto14["m_sql"] = "creation_system_id";
$proto14["m_srcTableName"] = "ut_map_external_source_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto16["m_sql"] = "created_by_id";
$proto16["m_srcTableName"] = "ut_map_external_source_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto18["m_sql"] = "creation_method";
$proto18["m_srcTableName"] = "ut_map_external_source_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto20["m_sql"] = "syst_updated_datetime";
$proto20["m_srcTableName"] = "ut_map_external_source_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto22["m_sql"] = "update_system_id";
$proto22["m_srcTableName"] = "ut_map_external_source_users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto24["m_sql"] = "updated_by_id";
$proto24["m_srcTableName"] = "ut_map_external_source_users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto26["m_sql"] = "update_method";
$proto26["m_srcTableName"] = "ut_map_external_source_users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_on_duplicate_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto28["m_sql"] = "is_update_on_duplicate_key";
$proto28["m_srcTableName"] = "ut_map_external_source_users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto30["m_sql"] = "organization_id";
$proto30["m_srcTableName"] = "ut_map_external_source_users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto32["m_sql"] = "is_obsolete";
$proto32["m_srcTableName"] = "ut_map_external_source_users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_needed",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto34["m_sql"] = "is_update_needed";
$proto34["m_srcTableName"] = "ut_map_external_source_users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto36["m_sql"] = "person_id";
$proto36["m_srcTableName"] = "ut_map_external_source_users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_user_id_parent",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto38["m_sql"] = "mefe_user_id_parent";
$proto38["m_srcTableName"] = "ut_map_external_source_users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto40["m_sql"] = "unee_t_mefe_user_id";
$proto40["m_srcTableName"] = "ut_map_external_source_users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_api_key",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto42["m_sql"] = "unee_t_mefe_user_api_key";
$proto42["m_srcTableName"] = "ut_map_external_source_users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto44["m_sql"] = "uneet_created_datetime";
$proto44["m_srcTableName"] = "ut_map_external_source_users";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_mefe_api_success",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto46["m_sql"] = "is_mefe_api_success";
$proto46["m_srcTableName"] = "ut_map_external_source_users";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_api_error_message",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto48["m_sql"] = "mefe_api_error_message";
$proto48["m_srcTableName"] = "ut_map_external_source_users";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_unee_t_created_by_me",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto50["m_sql"] = "is_unee_t_created_by_me";
$proto50["m_srcTableName"] = "ut_map_external_source_users";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_login_name",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto52["m_sql"] = "uneet_login_name";
$proto52["m_srcTableName"] = "ut_map_external_source_users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "external_person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto54["m_sql"] = "external_person_id";
$proto54["m_srcTableName"] = "ut_map_external_source_users";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto56["m_sql"] = "external_system";
$proto56["m_srcTableName"] = "ut_map_external_source_users";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "table_in_external_system",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "ut_map_external_source_users"
));

$proto58["m_sql"] = "table_in_external_system";
$proto58["m_srcTableName"] = "ut_map_external_source_users";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto60=array();
$proto60["m_link"] = "SQLL_MAIN";
			$proto61=array();
$proto61["m_strName"] = "ut_map_external_source_users";
$proto61["m_srcTableName"] = "ut_map_external_source_users";
$proto61["m_columns"] = array();
$proto61["m_columns"][] = "id_map";
$proto61["m_columns"][] = "create_api_request_id";
$proto61["m_columns"][] = "edit_api_request_id";
$proto61["m_columns"][] = "syst_created_datetime";
$proto61["m_columns"][] = "creation_system_id";
$proto61["m_columns"][] = "created_by_id";
$proto61["m_columns"][] = "creation_method";
$proto61["m_columns"][] = "syst_updated_datetime";
$proto61["m_columns"][] = "update_system_id";
$proto61["m_columns"][] = "updated_by_id";
$proto61["m_columns"][] = "update_method";
$proto61["m_columns"][] = "is_update_on_duplicate_key";
$proto61["m_columns"][] = "organization_id";
$proto61["m_columns"][] = "is_obsolete";
$proto61["m_columns"][] = "is_update_needed";
$proto61["m_columns"][] = "person_id";
$proto61["m_columns"][] = "mefe_user_id_parent";
$proto61["m_columns"][] = "unee_t_mefe_user_id";
$proto61["m_columns"][] = "unee_t_mefe_user_api_key";
$proto61["m_columns"][] = "uneet_created_datetime";
$proto61["m_columns"][] = "is_mefe_api_success";
$proto61["m_columns"][] = "mefe_api_error_message";
$proto61["m_columns"][] = "is_unee_t_created_by_me";
$proto61["m_columns"][] = "uneet_login_name";
$proto61["m_columns"][] = "external_person_id";
$proto61["m_columns"][] = "external_system";
$proto61["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto61);

$proto60["m_table"] = $obj;
$proto60["m_sql"] = "ut_map_external_source_users";
$proto60["m_alias"] = "";
$proto60["m_srcTableName"] = "ut_map_external_source_users";
$proto62=array();
$proto62["m_sql"] = "";
$proto62["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto62["m_column"]=$obj;
$proto62["m_contained"] = array();
$proto62["m_strCase"] = "";
$proto62["m_havingmode"] = false;
$proto62["m_inBrackets"] = false;
$proto62["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto62);

$proto60["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto60);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ut_map_external_source_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ut_map_external_source_users = createSqlQuery_ut_map_external_source_users();


	
					
;

																											

$tdataut_map_external_source_users[".sqlquery"] = $queryData_ut_map_external_source_users;

$tableEvents["ut_map_external_source_users"] = new eventsBase;
$tdataut_map_external_source_users[".hasEvents"] = false;

?>