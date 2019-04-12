<?php




$tdataManage_User_Default_Visibility = array();
$tdataManage_User_Default_Visibility[".searchableFields"] = array();
	$tdataManage_User_Default_Visibility[".truncateText"] = true;
	$tdataManage_User_Default_Visibility[".NumberOfChars"] = 80;
	$tdataManage_User_Default_Visibility[".ShortName"] = "Manage_User_Default_Visibility";
	$tdataManage_User_Default_Visibility[".OwnerID"] = "organization_id";
	$tdataManage_User_Default_Visibility[".OriginalTable"] = "ut_user_types";


$defaultPages = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataManage_User_Default_Visibility[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataManage_User_Default_Visibility[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_User_Default_Visibility = array();
$fieldToolTipsManage_User_Default_Visibility = array();
$pageTitlesManage_User_Default_Visibility = array();
$placeHoldersManage_User_Default_Visibility = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_User_Default_Visibility["English"] = array();
	$fieldToolTipsManage_User_Default_Visibility["English"] = array();
	$placeHoldersManage_User_Default_Visibility["English"] = array();
	$pageTitlesManage_User_Default_Visibility["English"] = array();
	$fieldLabelsManage_User_Default_Visibility["English"]["id_unee_t_user_type"] = "Id Unee T User Type";
	$fieldToolTipsManage_User_Default_Visibility["English"]["id_unee_t_user_type"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["id_unee_t_user_type"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_User_Default_Visibility["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_User_Default_Visibility["English"]["update_system_id"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["update_system_id"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_User_Default_Visibility["English"]["updated_by_id"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["updated_by_id"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_User_Default_Visibility["English"]["update_method"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["update_method"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsManage_User_Default_Visibility["English"]["organization_id"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["organization_id"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["can_see_role_contractor"] = "Can Invite Contractor";
	$fieldToolTipsManage_User_Default_Visibility["English"]["can_see_role_contractor"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["can_see_role_contractor"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["can_see_role_mgt_cny"] = "Can Invite Mgt Cny";
	$fieldToolTipsManage_User_Default_Visibility["English"]["can_see_role_mgt_cny"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["can_see_role_mgt_cny"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["can_see_role_agent"] = "Can Invite Agent";
	$fieldToolTipsManage_User_Default_Visibility["English"]["can_see_role_agent"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["can_see_role_agent"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["can_see_occupant"] = "Can Invite Occupant";
	$fieldToolTipsManage_User_Default_Visibility["English"]["can_see_occupant"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["can_see_occupant"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["can_see_role_landlord"] = "Can Invite Landlord";
	$fieldToolTipsManage_User_Default_Visibility["English"]["can_see_role_landlord"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["can_see_role_landlord"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["can_see_role_tenant"] = "Can Invite Tenant";
	$fieldToolTipsManage_User_Default_Visibility["English"]["can_see_role_tenant"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["can_see_role_tenant"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsManage_User_Default_Visibility["English"]["created_by_id"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["created_by_id"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["designation"] = "User Type";
	$fieldToolTipsManage_User_Default_Visibility["English"]["designation"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["designation"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["is_occupant"] = "Occupant";
	$fieldToolTipsManage_User_Default_Visibility["English"]["is_occupant"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["is_occupant"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["is_public"] = "Public";
	$fieldToolTipsManage_User_Default_Visibility["English"]["is_public"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["is_public"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["is_default_assignee"] = "Default Assignee";
	$fieldToolTipsManage_User_Default_Visibility["English"]["is_default_assignee"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["is_default_assignee"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["is_invited_all_cases"] = "Invited to All Cases";
	$fieldToolTipsManage_User_Default_Visibility["English"]["is_invited_all_cases"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["is_invited_all_cases"] = "";
	$fieldLabelsManage_User_Default_Visibility["English"]["is_dashboard_access"] = "Dashboard Access";
	$fieldToolTipsManage_User_Default_Visibility["English"]["is_dashboard_access"] = "";
	$placeHoldersManage_User_Default_Visibility["English"]["is_dashboard_access"] = "";
	if (count($fieldToolTipsManage_User_Default_Visibility["English"]))
		$tdataManage_User_Default_Visibility[".isUseToolTips"] = true;
}


	$tdataManage_User_Default_Visibility[".NCSearch"] = true;



$tdataManage_User_Default_Visibility[".shortTableName"] = "Manage_User_Default_Visibility";
$tdataManage_User_Default_Visibility[".nSecOptions"] = 1;

$tdataManage_User_Default_Visibility[".mainTableOwnerID"] = "organization_id";
$tdataManage_User_Default_Visibility[".entityType"] = 1;

$tdataManage_User_Default_Visibility[".strOriginalTableName"] = "ut_user_types";

		 



$tdataManage_User_Default_Visibility[".showAddInPopup"] = false;

$tdataManage_User_Default_Visibility[".showEditInPopup"] = false;

$tdataManage_User_Default_Visibility[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_User_Default_Visibility[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_User_Default_Visibility[".listAjax"] = true;
//	temporary
$tdataManage_User_Default_Visibility[".listAjax"] = false;

	$tdataManage_User_Default_Visibility[".audit"] = false;

	$tdataManage_User_Default_Visibility[".locking"] = false;


$pages = $tdataManage_User_Default_Visibility[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_User_Default_Visibility[".edit"] = true;
	$tdataManage_User_Default_Visibility[".afterEditAction"] = 1;
	$tdataManage_User_Default_Visibility[".closePopupAfterEdit"] = 1;
	$tdataManage_User_Default_Visibility[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_User_Default_Visibility[".add"] = true;
$tdataManage_User_Default_Visibility[".afterAddAction"] = 1;
$tdataManage_User_Default_Visibility[".closePopupAfterAdd"] = 1;
$tdataManage_User_Default_Visibility[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_User_Default_Visibility[".list"] = true;
}



$tdataManage_User_Default_Visibility[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_User_Default_Visibility[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_User_Default_Visibility[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_User_Default_Visibility[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_User_Default_Visibility[".printFriendly"] = true;
}



$tdataManage_User_Default_Visibility[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_User_Default_Visibility[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_User_Default_Visibility[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_User_Default_Visibility[".isUseAjaxSuggest"] = true;

$tdataManage_User_Default_Visibility[".rowHighlite"] = true;





$tdataManage_User_Default_Visibility[".ajaxCodeSnippetAdded"] = false;

$tdataManage_User_Default_Visibility[".buttonsAdded"] = false;

$tdataManage_User_Default_Visibility[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_User_Default_Visibility[".isUseTimeForSearch"] = false;


$tdataManage_User_Default_Visibility[".badgeColor"] = "e07878";


$tdataManage_User_Default_Visibility[".allSearchFields"] = array();
$tdataManage_User_Default_Visibility[".filterFields"] = array();
$tdataManage_User_Default_Visibility[".requiredSearchFields"] = array();

$tdataManage_User_Default_Visibility[".googleLikeFields"] = array();
$tdataManage_User_Default_Visibility[".googleLikeFields"][] = "designation";



$tdataManage_User_Default_Visibility[".tableType"] = "list";

$tdataManage_User_Default_Visibility[".printerPageOrientation"] = 0;
$tdataManage_User_Default_Visibility[".nPrinterPageScale"] = 100;

$tdataManage_User_Default_Visibility[".nPrinterSplitRecords"] = 40;

$tdataManage_User_Default_Visibility[".nPrinterPDFSplitRecords"] = 40;


$tdataManage_User_Default_Visibility[".geocodingEnabled"] = false;





$tdataManage_User_Default_Visibility[".isResizeColumns"] = true;





$tdataManage_User_Default_Visibility[".pageSize"] = 20;

$tdataManage_User_Default_Visibility[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_User_Default_Visibility[".strOrderBy"] = $tstrOrderBy;

$tdataManage_User_Default_Visibility[".orderindexes"] = array();

$tdataManage_User_Default_Visibility[".sqlHead"] = "SELECT id_unee_t_user_type,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  can_see_role_contractor,  can_see_role_mgt_cny,  can_see_occupant,  can_see_role_landlord,  can_see_role_agent,  can_see_role_tenant,  created_by_id,  organization_id,  is_occupant,  is_public,  is_default_assignee,  is_invited_all_cases,  is_dashboard_access";
$tdataManage_User_Default_Visibility[".sqlFrom"] = "FROM ut_user_types";
$tdataManage_User_Default_Visibility[".sqlWhereExpr"] = "";
$tdataManage_User_Default_Visibility[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_User_Default_Visibility[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_User_Default_Visibility[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_User_Default_Visibility[".highlightSearchResults"] = true;

$tableKeysManage_User_Default_Visibility = array();
$tableKeysManage_User_Default_Visibility[] = "id_unee_t_user_type";
$tdataManage_User_Default_Visibility[".Keys"] = $tableKeysManage_User_Default_Visibility;


$tdataManage_User_Default_Visibility[".hideMobileList"] = array();




//	id_unee_t_user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_unee_t_user_type";
	$fdata["GoodName"] = "id_unee_t_user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","id_unee_t_user_type");
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


	$tdataManage_User_Default_Visibility["id_unee_t_user_type"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "id_unee_t_user_type";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","syst_updated_datetime");
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


	$tdataManage_User_Default_Visibility["syst_updated_datetime"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","update_system_id");
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


	$tdataManage_User_Default_Visibility["update_system_id"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","updated_by_id");
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


	$tdataManage_User_Default_Visibility["updated_by_id"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","update_method");
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


	$tdataManage_User_Default_Visibility["update_method"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "update_method";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","designation");
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


	$tdataManage_User_Default_Visibility["designation"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "designation";
//	can_see_role_contractor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "can_see_role_contractor";
	$fdata["GoodName"] = "can_see_role_contractor";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","can_see_role_contractor");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_contractor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_contractor";

	
	
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


	$tdataManage_User_Default_Visibility["can_see_role_contractor"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "can_see_role_contractor";
//	can_see_role_mgt_cny
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "can_see_role_mgt_cny";
	$fdata["GoodName"] = "can_see_role_mgt_cny";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","can_see_role_mgt_cny");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_mgt_cny";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_mgt_cny";

	
	
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


	$tdataManage_User_Default_Visibility["can_see_role_mgt_cny"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "can_see_role_mgt_cny";
//	can_see_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "can_see_occupant";
	$fdata["GoodName"] = "can_see_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","can_see_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_occupant";

	
	
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


	$tdataManage_User_Default_Visibility["can_see_occupant"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "can_see_occupant";
//	can_see_role_landlord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "can_see_role_landlord";
	$fdata["GoodName"] = "can_see_role_landlord";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","can_see_role_landlord");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_landlord";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_landlord";

	
	
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


	$tdataManage_User_Default_Visibility["can_see_role_landlord"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "can_see_role_landlord";
//	can_see_role_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "can_see_role_agent";
	$fdata["GoodName"] = "can_see_role_agent";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","can_see_role_agent");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_agent";

	
	
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


	$tdataManage_User_Default_Visibility["can_see_role_agent"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "can_see_role_agent";
//	can_see_role_tenant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "can_see_role_tenant";
	$fdata["GoodName"] = "can_see_role_tenant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","can_see_role_tenant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_tenant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_tenant";

	
	
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


	$tdataManage_User_Default_Visibility["can_see_role_tenant"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "can_see_role_tenant";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","created_by_id");
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


	$tdataManage_User_Default_Visibility["created_by_id"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "created_by_id";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","organization_id");
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


	$tdataManage_User_Default_Visibility["organization_id"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "organization_id";
//	is_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_occupant";
	$fdata["GoodName"] = "is_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","is_occupant");
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


	$tdataManage_User_Default_Visibility["is_occupant"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "is_occupant";
//	is_public
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "is_public";
	$fdata["GoodName"] = "is_public";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","is_public");
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


	$tdataManage_User_Default_Visibility["is_public"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "is_public";
//	is_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_default_assignee";
	$fdata["GoodName"] = "is_default_assignee";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","is_default_assignee");
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


	$tdataManage_User_Default_Visibility["is_default_assignee"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "is_default_assignee";
//	is_invited_all_cases
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_invited_all_cases";
	$fdata["GoodName"] = "is_invited_all_cases";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","is_invited_all_cases");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_invited_all_cases";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_invited_all_cases";

	
	
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


	$tdataManage_User_Default_Visibility["is_invited_all_cases"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "is_invited_all_cases";
//	is_dashboard_access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_dashboard_access";
	$fdata["GoodName"] = "is_dashboard_access";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Manage_User_Default_Visibility","is_dashboard_access");
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


	$tdataManage_User_Default_Visibility["is_dashboard_access"] = $fdata;
		$tdataManage_User_Default_Visibility[".searchableFields"][] = "is_dashboard_access";


$tables_data["Manage User Default Visibility"]=&$tdataManage_User_Default_Visibility;
$field_labels["Manage_User_Default_Visibility"] = &$fieldLabelsManage_User_Default_Visibility;
$fieldToolTips["Manage_User_Default_Visibility"] = &$fieldToolTipsManage_User_Default_Visibility;
$placeHolders["Manage_User_Default_Visibility"] = &$placeHoldersManage_User_Default_Visibility;
$page_titles["Manage_User_Default_Visibility"] = &$pageTitlesManage_User_Default_Visibility;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage User Default Visibility"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Manage User Default Visibility"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_User_Default_Visibility()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_unee_t_user_type,  syst_updated_datetime,  update_system_id,  updated_by_id,  update_method,  designation,  can_see_role_contractor,  can_see_role_mgt_cny,  can_see_occupant,  can_see_role_landlord,  can_see_role_agent,  can_see_role_tenant,  created_by_id,  organization_id,  is_occupant,  is_public,  is_default_assignee,  is_invited_all_cases,  is_dashboard_access";
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
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto6["m_sql"] = "id_unee_t_user_type";
$proto6["m_srcTableName"] = "Manage User Default Visibility";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto8["m_sql"] = "syst_updated_datetime";
$proto8["m_srcTableName"] = "Manage User Default Visibility";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "Manage User Default Visibility";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto12["m_sql"] = "updated_by_id";
$proto12["m_srcTableName"] = "Manage User Default Visibility";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto14["m_sql"] = "update_method";
$proto14["m_srcTableName"] = "Manage User Default Visibility";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto16["m_sql"] = "designation";
$proto16["m_srcTableName"] = "Manage User Default Visibility";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_contractor",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto18["m_sql"] = "can_see_role_contractor";
$proto18["m_srcTableName"] = "Manage User Default Visibility";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_mgt_cny",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto20["m_sql"] = "can_see_role_mgt_cny";
$proto20["m_srcTableName"] = "Manage User Default Visibility";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto22["m_sql"] = "can_see_occupant";
$proto22["m_srcTableName"] = "Manage User Default Visibility";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_landlord",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto24["m_sql"] = "can_see_role_landlord";
$proto24["m_srcTableName"] = "Manage User Default Visibility";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_agent",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto26["m_sql"] = "can_see_role_agent";
$proto26["m_srcTableName"] = "Manage User Default Visibility";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_tenant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto28["m_sql"] = "can_see_role_tenant";
$proto28["m_srcTableName"] = "Manage User Default Visibility";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto30["m_sql"] = "created_by_id";
$proto30["m_srcTableName"] = "Manage User Default Visibility";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto32["m_sql"] = "organization_id";
$proto32["m_srcTableName"] = "Manage User Default Visibility";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto34["m_sql"] = "is_occupant";
$proto34["m_srcTableName"] = "Manage User Default Visibility";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "is_public",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto36["m_sql"] = "is_public";
$proto36["m_srcTableName"] = "Manage User Default Visibility";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_assignee",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto38["m_sql"] = "is_default_assignee";
$proto38["m_srcTableName"] = "Manage User Default Visibility";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_invited_all_cases",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto40["m_sql"] = "is_invited_all_cases";
$proto40["m_srcTableName"] = "Manage User Default Visibility";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_dashboard_access",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Manage User Default Visibility"
));

$proto42["m_sql"] = "is_dashboard_access";
$proto42["m_srcTableName"] = "Manage User Default Visibility";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "ut_user_types";
$proto45["m_srcTableName"] = "Manage User Default Visibility";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_unee_t_user_type";
$proto45["m_columns"][] = "syst_created_datetime";
$proto45["m_columns"][] = "creation_system_id";
$proto45["m_columns"][] = "created_by_id";
$proto45["m_columns"][] = "creation_method";
$proto45["m_columns"][] = "syst_updated_datetime";
$proto45["m_columns"][] = "update_system_id";
$proto45["m_columns"][] = "updated_by_id";
$proto45["m_columns"][] = "update_method";
$proto45["m_columns"][] = "organization_id";
$proto45["m_columns"][] = "order";
$proto45["m_columns"][] = "is_obsolete";
$proto45["m_columns"][] = "designation";
$proto45["m_columns"][] = "description";
$proto45["m_columns"][] = "ut_user_role_type_id";
$proto45["m_columns"][] = "is_occupant";
$proto45["m_columns"][] = "is_public";
$proto45["m_columns"][] = "is_default_assignee";
$proto45["m_columns"][] = "is_invited_all_cases";
$proto45["m_columns"][] = "is_unit_owner";
$proto45["m_columns"][] = "is_dashboard_access";
$proto45["m_columns"][] = "can_see_role_contractor";
$proto45["m_columns"][] = "can_see_role_mgt_cny";
$proto45["m_columns"][] = "can_see_occupant";
$proto45["m_columns"][] = "can_see_role_landlord";
$proto45["m_columns"][] = "can_see_role_agent";
$proto45["m_columns"][] = "can_see_role_tenant";
$proto45["m_columns"][] = "is_assigned_to_case";
$proto45["m_columns"][] = "is_invited_to_case";
$proto45["m_columns"][] = "is_solution_updated";
$proto45["m_columns"][] = "is_next_step_updated";
$proto45["m_columns"][] = "is_deadline_updated";
$proto45["m_columns"][] = "is_case_resolved";
$proto45["m_columns"][] = "is_case_critical";
$proto45["m_columns"][] = "is_case_blocker";
$proto45["m_columns"][] = "is_message_from_contractor";
$proto45["m_columns"][] = "is_message_from_mgt_cny";
$proto45["m_columns"][] = "is_message_from_agent";
$proto45["m_columns"][] = "is_message_from_occupant";
$proto45["m_columns"][] = "is_message_from_ll";
$proto45["m_columns"][] = "is_message_from_tenant";
$proto45["m_columns"][] = "is_any_new_message";
$proto45["m_columns"][] = "is_new_ir";
$proto45["m_columns"][] = "is_new_inventory";
$proto45["m_columns"][] = "is_new_item";
$proto45["m_columns"][] = "is_item_moved";
$proto45["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "ut_user_types";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Manage User Default Visibility";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Manage User Default Visibility";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_User_Default_Visibility = createSqlQuery_Manage_User_Default_Visibility();


	
					
;

																			

$tdataManage_User_Default_Visibility[".sqlquery"] = $queryData_Manage_User_Default_Visibility;

include_once(getabspath("include/Manage_User_Default_Visibility_events.php"));
$tableEvents["Manage User Default Visibility"] = new eventclass_Manage_User_Default_Visibility;
$tdataManage_User_Default_Visibility[".hasEvents"] = true;

?>