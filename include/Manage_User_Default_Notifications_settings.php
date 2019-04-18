<?php




$tdataManage_User_Default_Notifications = array();
$tdataManage_User_Default_Notifications[".searchableFields"] = array();
	$tdataManage_User_Default_Notifications[".truncateText"] = true;
	$tdataManage_User_Default_Notifications[".NumberOfChars"] = 80;
	$tdataManage_User_Default_Notifications[".ShortName"] = "Manage_User_Default_Notifications";
	$tdataManage_User_Default_Notifications[".OwnerID"] = "organization_id";
	$tdataManage_User_Default_Notifications[".OriginalTable"] = "ut_user_types";


$defaultPages = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataManage_User_Default_Notifications[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataManage_User_Default_Notifications[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_User_Default_Notifications = array();
$fieldToolTipsManage_User_Default_Notifications = array();
$pageTitlesManage_User_Default_Notifications = array();
$placeHoldersManage_User_Default_Notifications = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_User_Default_Notifications["English"] = array();
	$fieldToolTipsManage_User_Default_Notifications["English"] = array();
	$placeHoldersManage_User_Default_Notifications["English"] = array();
	$pageTitlesManage_User_Default_Notifications["English"] = array();
	$fieldLabelsManage_User_Default_Notifications["English"]["id_unee_t_user_type"] = "Id Unee T User Type";
	$fieldToolTipsManage_User_Default_Notifications["English"]["id_unee_t_user_type"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["id_unee_t_user_type"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_User_Default_Notifications["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_User_Default_Notifications["English"]["update_system_id"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["update_system_id"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_User_Default_Notifications["English"]["updated_by_id"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["updated_by_id"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_User_Default_Notifications["English"]["update_method"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["update_method"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsManage_User_Default_Notifications["English"]["organization_id"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["organization_id"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsManage_User_Default_Notifications["English"]["created_by_id"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["created_by_id"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["designation"] = "User Type";
	$fieldToolTipsManage_User_Default_Notifications["English"]["designation"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["designation"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_occupant"] = "Occupant";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_occupant"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_occupant"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_public"] = "Public";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_public"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_public"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_default_assignee"] = "Default Assignee";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_default_assignee"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_default_assignee"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_dashboard_access"] = "Dashboard Access";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_dashboard_access"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_dashboard_access"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_assigned_to_case"] = "Assigned to the Case";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_assigned_to_case"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_assigned_to_case"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_invited_to_case"] = "Invited to the Case";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_invited_to_case"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_invited_to_case"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_solution_updated"] = "Solution is updated";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_solution_updated"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_solution_updated"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_next_step_updated"] = "Next Step is updated";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_next_step_updated"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_next_step_updated"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_deadline_updated"] = "Deadline is updated";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_deadline_updated"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_deadline_updated"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_case_resolved"] = "The Case is resolved";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_case_resolved"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_case_resolved"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_case_critical"] = "Case is Critical";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_case_critical"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_case_critical"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_case_blocker"] = "Case is Blocker";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_case_blocker"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_case_blocker"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_message_from_contractor"] = "The Contractor";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_message_from_contractor"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_message_from_contractor"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_message_from_mgt_cny"] = "The Mgt Cny";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_message_from_mgt_cny"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_message_from_mgt_cny"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_message_from_agent"] = "The Agent";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_message_from_agent"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_message_from_agent"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_message_from_occupant"] = "The Occupant";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_message_from_occupant"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_message_from_occupant"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_message_from_ll"] = "The Landlord";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_message_from_ll"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_message_from_ll"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_any_new_message"] = "Is Any New Message";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_any_new_message"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_any_new_message"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_message_from_tenant"] = "The Tenant";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_message_from_tenant"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_message_from_tenant"] = "";
	$fieldLabelsManage_User_Default_Notifications["English"]["is_default_invited"] = "Is Invited to All Cases";
	$fieldToolTipsManage_User_Default_Notifications["English"]["is_default_invited"] = "";
	$placeHoldersManage_User_Default_Notifications["English"]["is_default_invited"] = "";
	if (count($fieldToolTipsManage_User_Default_Notifications["English"]))
		$tdataManage_User_Default_Notifications[".isUseToolTips"] = true;
}


	$tdataManage_User_Default_Notifications[".NCSearch"] = true;



$tdataManage_User_Default_Notifications[".shortTableName"] = "Manage_User_Default_Notifications";
$tdataManage_User_Default_Notifications[".nSecOptions"] = 1;

$tdataManage_User_Default_Notifications[".mainTableOwnerID"] = "organization_id";
$tdataManage_User_Default_Notifications[".entityType"] = 1;

$tdataManage_User_Default_Notifications[".strOriginalTableName"] = "ut_user_types";

		 



$tdataManage_User_Default_Notifications[".showAddInPopup"] = false;

$tdataManage_User_Default_Notifications[".showEditInPopup"] = false;

$tdataManage_User_Default_Notifications[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_User_Default_Notifications[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_User_Default_Notifications[".listAjax"] = true;
//	temporary
$tdataManage_User_Default_Notifications[".listAjax"] = false;

	$tdataManage_User_Default_Notifications[".audit"] = false;

	$tdataManage_User_Default_Notifications[".locking"] = false;


$pages = $tdataManage_User_Default_Notifications[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_User_Default_Notifications[".edit"] = true;
	$tdataManage_User_Default_Notifications[".afterEditAction"] = 1;
	$tdataManage_User_Default_Notifications[".closePopupAfterEdit"] = 1;
	$tdataManage_User_Default_Notifications[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_User_Default_Notifications[".add"] = true;
$tdataManage_User_Default_Notifications[".afterAddAction"] = 1;
$tdataManage_User_Default_Notifications[".closePopupAfterAdd"] = 1;
$tdataManage_User_Default_Notifications[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_User_Default_Notifications[".list"] = true;
}



$tdataManage_User_Default_Notifications[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_User_Default_Notifications[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_User_Default_Notifications[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_User_Default_Notifications[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_User_Default_Notifications[".printFriendly"] = true;
}



$tdataManage_User_Default_Notifications[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_User_Default_Notifications[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_User_Default_Notifications[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_User_Default_Notifications[".isUseAjaxSuggest"] = true;

$tdataManage_User_Default_Notifications[".rowHighlite"] = true;





$tdataManage_User_Default_Notifications[".ajaxCodeSnippetAdded"] = false;

$tdataManage_User_Default_Notifications[".buttonsAdded"] = false;

$tdataManage_User_Default_Notifications[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_User_Default_Notifications[".isUseTimeForSearch"] = false;


$tdataManage_User_Default_Notifications[".badgeColor"] = "e07878";


$tdataManage_User_Default_Notifications[".allSearchFields"] = array();
$tdataManage_User_Default_Notifications[".filterFields"] = array();
$tdataManage_User_Default_Notifications[".requiredSearchFields"] = array();

$tdataManage_User_Default_Notifications[".googleLikeFields"] = array();
$tdataManage_User_Default_Notifications[".googleLikeFields"][] = "designation";



$tdataManage_User_Default_Notifications[".tableType"] = "list";

$tdataManage_User_Default_Notifications[".printerPageOrientation"] = 0;
$tdataManage_User_Default_Notifications[".nPrinterPageScale"] = 100;

$tdataManage_User_Default_Notifications[".nPrinterSplitRecords"] = 40;

$tdataManage_User_Default_Notifications[".nPrinterPDFSplitRecords"] = 40;


$tdataManage_User_Default_Notifications[".geocodingEnabled"] = false;





$tdataManage_User_Default_Notifications[".isResizeColumns"] = true;





$tdataManage_User_Default_Notifications[".pageSize"] = 20;

$tdataManage_User_Default_Notifications[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_User_Default_Notifications[".strOrderBy"] = $tstrOrderBy;

$tdataManage_User_Default_Notifications[".orderindexes"] = array();

$tdataManage_User_Default_Notifications[".sqlHead"] = "SELECT id_unee_t_user_type,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  created_by_id,  organization_id,  is_occupant,  is_public,  is_default_assignee,  is_default_invited,  is_dashboard_access,  is_assigned_to_case,  is_invited_to_case,  is_solution_updated,  is_next_step_updated,  is_deadline_updated,  is_case_resolved,  is_case_critical,  is_case_blocker,  is_message_from_contractor,  is_message_from_mgt_cny,  is_message_from_agent,  is_message_from_occupant,  is_message_from_ll,  is_any_new_message,  is_message_from_tenant";
$tdataManage_User_Default_Notifications[".sqlFrom"] = "FROM ut_user_types";
$tdataManage_User_Default_Notifications[".sqlWhereExpr"] = "";
$tdataManage_User_Default_Notifications[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_User_Default_Notifications[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_User_Default_Notifications[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_User_Default_Notifications[".highlightSearchResults"] = true;

$tableKeysManage_User_Default_Notifications = array();
$tableKeysManage_User_Default_Notifications[] = "id_unee_t_user_type";
$tdataManage_User_Default_Notifications[".Keys"] = $tableKeysManage_User_Default_Notifications;


$tdataManage_User_Default_Notifications[".hideMobileList"] = array();




//	id_unee_t_user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_unee_t_user_type";
	$fdata["GoodName"] = "id_unee_t_user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","id_unee_t_user_type");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_unee_t_user_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_unee_t_user_type";

	
	
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

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataManage_User_Default_Notifications["id_unee_t_user_type"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "id_unee_t_user_type";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_updated_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdataManage_User_Default_Notifications["syst_updated_datetime"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_system_id";

	
	
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


	$tdataManage_User_Default_Notifications["update_system_id"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by_id";

	
	
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


	$tdataManage_User_Default_Notifications["updated_by_id"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_method";

	
	
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


	$tdataManage_User_Default_Notifications["update_method"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "update_method";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
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


	$tdataManage_User_Default_Notifications["designation"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "designation";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by_id";

	
	
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


	$tdataManage_User_Default_Notifications["created_by_id"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "created_by_id";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organization_id";

	
	
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


	$tdataManage_User_Default_Notifications["organization_id"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "organization_id";
//	is_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "is_occupant";
	$fdata["GoodName"] = "is_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_occupant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

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


	$tdataManage_User_Default_Notifications["is_occupant"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_occupant";
//	is_public
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "is_public";
	$fdata["GoodName"] = "is_public";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_public");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_public";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_public";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

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


	$tdataManage_User_Default_Notifications["is_public"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_public";
//	is_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_default_assignee";
	$fdata["GoodName"] = "is_default_assignee";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_default_assignee");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_default_assignee";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

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


	$tdataManage_User_Default_Notifications["is_default_assignee"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_default_assignee";
//	is_default_invited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_default_invited";
	$fdata["GoodName"] = "is_default_invited";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_default_invited");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default_invited";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_default_invited";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

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


	$tdataManage_User_Default_Notifications["is_default_invited"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_default_invited";
//	is_dashboard_access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "is_dashboard_access";
	$fdata["GoodName"] = "is_dashboard_access";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_dashboard_access");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_dashboard_access";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_dashboard_access";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

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


	$tdataManage_User_Default_Notifications["is_dashboard_access"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_dashboard_access";
//	is_assigned_to_case
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "is_assigned_to_case";
	$fdata["GoodName"] = "is_assigned_to_case";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_assigned_to_case");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_assigned_to_case";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_assigned_to_case";

	
	
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


	$tdataManage_User_Default_Notifications["is_assigned_to_case"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_assigned_to_case";
//	is_invited_to_case
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_invited_to_case";
	$fdata["GoodName"] = "is_invited_to_case";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_invited_to_case");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_invited_to_case";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_invited_to_case";

	
	
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


	$tdataManage_User_Default_Notifications["is_invited_to_case"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_invited_to_case";
//	is_solution_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "is_solution_updated";
	$fdata["GoodName"] = "is_solution_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_solution_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_solution_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_solution_updated";

	
	
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


	$tdataManage_User_Default_Notifications["is_solution_updated"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_solution_updated";
//	is_next_step_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_next_step_updated";
	$fdata["GoodName"] = "is_next_step_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_next_step_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_next_step_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_next_step_updated";

	
	
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


	$tdataManage_User_Default_Notifications["is_next_step_updated"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_next_step_updated";
//	is_deadline_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_deadline_updated";
	$fdata["GoodName"] = "is_deadline_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_deadline_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_deadline_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_deadline_updated";

	
	
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


	$tdataManage_User_Default_Notifications["is_deadline_updated"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_deadline_updated";
//	is_case_resolved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_case_resolved";
	$fdata["GoodName"] = "is_case_resolved";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_case_resolved");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_resolved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_case_resolved";

	
	
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


	$tdataManage_User_Default_Notifications["is_case_resolved"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_case_resolved";
//	is_case_critical
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_case_critical";
	$fdata["GoodName"] = "is_case_critical";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_case_critical");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_critical";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_case_critical";

	
	
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


	$tdataManage_User_Default_Notifications["is_case_critical"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_case_critical";
//	is_case_blocker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "is_case_blocker";
	$fdata["GoodName"] = "is_case_blocker";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_case_blocker");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_blocker";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_case_blocker";

	
	
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


	$tdataManage_User_Default_Notifications["is_case_blocker"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_case_blocker";
//	is_message_from_contractor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "is_message_from_contractor";
	$fdata["GoodName"] = "is_message_from_contractor";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_message_from_contractor");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_contractor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_contractor";

	
	
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


	$tdataManage_User_Default_Notifications["is_message_from_contractor"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_message_from_contractor";
//	is_message_from_mgt_cny
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_message_from_mgt_cny";
	$fdata["GoodName"] = "is_message_from_mgt_cny";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_message_from_mgt_cny");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_mgt_cny";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_mgt_cny";

	
	
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


	$tdataManage_User_Default_Notifications["is_message_from_mgt_cny"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_message_from_mgt_cny";
//	is_message_from_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "is_message_from_agent";
	$fdata["GoodName"] = "is_message_from_agent";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_message_from_agent");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_agent";

	
	
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


	$tdataManage_User_Default_Notifications["is_message_from_agent"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_message_from_agent";
//	is_message_from_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "is_message_from_occupant";
	$fdata["GoodName"] = "is_message_from_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_message_from_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_occupant";

	
	
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


	$tdataManage_User_Default_Notifications["is_message_from_occupant"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_message_from_occupant";
//	is_message_from_ll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "is_message_from_ll";
	$fdata["GoodName"] = "is_message_from_ll";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_message_from_ll");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_ll";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_ll";

	
	
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


	$tdataManage_User_Default_Notifications["is_message_from_ll"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_message_from_ll";
//	is_any_new_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "is_any_new_message";
	$fdata["GoodName"] = "is_any_new_message";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_any_new_message");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_any_new_message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_any_new_message";

	
	
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


	$tdataManage_User_Default_Notifications["is_any_new_message"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_any_new_message";
//	is_message_from_tenant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "is_message_from_tenant";
	$fdata["GoodName"] = "is_message_from_tenant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Notifications","is_message_from_tenant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_tenant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_tenant";

	
	
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


	$tdataManage_User_Default_Notifications["is_message_from_tenant"] = $fdata;
		$tdataManage_User_Default_Notifications[".searchableFields"][] = "is_message_from_tenant";


$tables_data["Manage User Default Notifications"]=&$tdataManage_User_Default_Notifications;
$field_labels["Manage_User_Default_Notifications"] = &$fieldLabelsManage_User_Default_Notifications;
$fieldToolTips["Manage_User_Default_Notifications"] = &$fieldToolTipsManage_User_Default_Notifications;
$placeHolders["Manage_User_Default_Notifications"] = &$placeHoldersManage_User_Default_Notifications;
$page_titles["Manage_User_Default_Notifications"] = &$pageTitlesManage_User_Default_Notifications;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage User Default Notifications"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Manage User Default Notifications"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_User_Default_Notifications()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_unee_t_user_type,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  created_by_id,  organization_id,  is_occupant,  is_public,  is_default_assignee,  is_default_invited,  is_dashboard_access,  is_assigned_to_case,  is_invited_to_case,  is_solution_updated,  is_next_step_updated,  is_deadline_updated,  is_case_resolved,  is_case_critical,  is_case_blocker,  is_message_from_contractor,  is_message_from_mgt_cny,  is_message_from_agent,  is_message_from_occupant,  is_message_from_ll,  is_any_new_message,  is_message_from_tenant";
$proto0["m_strFrom"] = "FROM ut_user_types";
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
	"m_strName" => "id_unee_t_user_type",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto6["m_sql"] = "id_unee_t_user_type";
$proto6["m_srcTableName"] = "Manage User Default Notifications";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto8["m_sql"] = "syst_updated_datetime";
$proto8["m_srcTableName"] = "Manage User Default Notifications";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "Manage User Default Notifications";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto12["m_sql"] = "updated_by_id";
$proto12["m_srcTableName"] = "Manage User Default Notifications";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto14["m_sql"] = "update_method";
$proto14["m_srcTableName"] = "Manage User Default Notifications";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto16["m_sql"] = "designation";
$proto16["m_srcTableName"] = "Manage User Default Notifications";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto18["m_sql"] = "created_by_id";
$proto18["m_srcTableName"] = "Manage User Default Notifications";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto20["m_sql"] = "organization_id";
$proto20["m_srcTableName"] = "Manage User Default Notifications";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto22["m_sql"] = "is_occupant";
$proto22["m_srcTableName"] = "Manage User Default Notifications";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "is_public",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto24["m_sql"] = "is_public";
$proto24["m_srcTableName"] = "Manage User Default Notifications";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_assignee",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto26["m_sql"] = "is_default_assignee";
$proto26["m_srcTableName"] = "Manage User Default Notifications";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_invited",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto28["m_sql"] = "is_default_invited";
$proto28["m_srcTableName"] = "Manage User Default Notifications";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "is_dashboard_access",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto30["m_sql"] = "is_dashboard_access";
$proto30["m_srcTableName"] = "Manage User Default Notifications";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "is_assigned_to_case",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto32["m_sql"] = "is_assigned_to_case";
$proto32["m_srcTableName"] = "Manage User Default Notifications";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_invited_to_case",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto34["m_sql"] = "is_invited_to_case";
$proto34["m_srcTableName"] = "Manage User Default Notifications";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "is_solution_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto36["m_sql"] = "is_solution_updated";
$proto36["m_srcTableName"] = "Manage User Default Notifications";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_next_step_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto38["m_sql"] = "is_next_step_updated";
$proto38["m_srcTableName"] = "Manage User Default Notifications";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_deadline_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto40["m_sql"] = "is_deadline_updated";
$proto40["m_srcTableName"] = "Manage User Default Notifications";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_resolved",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto42["m_sql"] = "is_case_resolved";
$proto42["m_srcTableName"] = "Manage User Default Notifications";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_critical",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto44["m_sql"] = "is_case_critical";
$proto44["m_srcTableName"] = "Manage User Default Notifications";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_blocker",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto46["m_sql"] = "is_case_blocker";
$proto46["m_srcTableName"] = "Manage User Default Notifications";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_contractor",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto48["m_sql"] = "is_message_from_contractor";
$proto48["m_srcTableName"] = "Manage User Default Notifications";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_mgt_cny",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto50["m_sql"] = "is_message_from_mgt_cny";
$proto50["m_srcTableName"] = "Manage User Default Notifications";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_agent",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto52["m_sql"] = "is_message_from_agent";
$proto52["m_srcTableName"] = "Manage User Default Notifications";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto54["m_sql"] = "is_message_from_occupant";
$proto54["m_srcTableName"] = "Manage User Default Notifications";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_ll",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto56["m_sql"] = "is_message_from_ll";
$proto56["m_srcTableName"] = "Manage User Default Notifications";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "is_any_new_message",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto58["m_sql"] = "is_any_new_message";
$proto58["m_srcTableName"] = "Manage User Default Notifications";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_tenant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Notifications"
));

$proto60["m_sql"] = "is_message_from_tenant";
$proto60["m_srcTableName"] = "Manage User Default Notifications";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "ut_user_types";
$proto63["m_srcTableName"] = "Manage User Default Notifications";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "id_unee_t_user_type";
$proto63["m_columns"][] = "syst_created_datetime";
$proto63["m_columns"][] = "creation_system_id";
$proto63["m_columns"][] = "created_by_id";
$proto63["m_columns"][] = "creation_method";
$proto63["m_columns"][] = "syst_updated_datetime";
$proto63["m_columns"][] = "update_system_id";
$proto63["m_columns"][] = "updated_by_id";
$proto63["m_columns"][] = "update_method";
$proto63["m_columns"][] = "organization_id";
$proto63["m_columns"][] = "order";
$proto63["m_columns"][] = "is_obsolete";
$proto63["m_columns"][] = "designation";
$proto63["m_columns"][] = "description";
$proto63["m_columns"][] = "ut_user_role_type_id";
$proto63["m_columns"][] = "is_occupant";
$proto63["m_columns"][] = "is_public";
$proto63["m_columns"][] = "is_default_assignee";
$proto63["m_columns"][] = "is_default_invited";
$proto63["m_columns"][] = "is_unit_owner";
$proto63["m_columns"][] = "is_dashboard_access";
$proto63["m_columns"][] = "can_see_role_contractor";
$proto63["m_columns"][] = "can_see_role_mgt_cny";
$proto63["m_columns"][] = "can_see_occupant";
$proto63["m_columns"][] = "can_see_role_landlord";
$proto63["m_columns"][] = "can_see_role_agent";
$proto63["m_columns"][] = "can_see_role_tenant";
$proto63["m_columns"][] = "is_assigned_to_case";
$proto63["m_columns"][] = "is_invited_to_case";
$proto63["m_columns"][] = "is_solution_updated";
$proto63["m_columns"][] = "is_next_step_updated";
$proto63["m_columns"][] = "is_deadline_updated";
$proto63["m_columns"][] = "is_case_resolved";
$proto63["m_columns"][] = "is_case_critical";
$proto63["m_columns"][] = "is_case_blocker";
$proto63["m_columns"][] = "is_message_from_contractor";
$proto63["m_columns"][] = "is_message_from_mgt_cny";
$proto63["m_columns"][] = "is_message_from_agent";
$proto63["m_columns"][] = "is_message_from_occupant";
$proto63["m_columns"][] = "is_message_from_ll";
$proto63["m_columns"][] = "is_message_from_tenant";
$proto63["m_columns"][] = "is_any_new_message";
$proto63["m_columns"][] = "is_new_ir";
$proto63["m_columns"][] = "is_new_inventory";
$proto63["m_columns"][] = "is_new_item";
$proto63["m_columns"][] = "is_item_moved";
$proto63["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "ut_user_types";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "Manage User Default Notifications";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Manage User Default Notifications";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_User_Default_Notifications = createSqlQuery_Manage_User_Default_Notifications();


	
					
;

																												

$tdataManage_User_Default_Notifications[".sqlquery"] = $queryData_Manage_User_Default_Notifications;

include_once(getabspath("include/Manage_User_Default_Notifications_events.php"));
$tableEvents["Manage User Default Notifications"] = new eventclass_Manage_User_Default_Notifications;
$tdataManage_User_Default_Notifications[".hasEvents"] = true;

?>