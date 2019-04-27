<?php




$tdataut_user_types = array();
$tdataut_user_types[".searchableFields"] = array();
	$tdataut_user_types[".truncateText"] = true;
	$tdataut_user_types[".NumberOfChars"] = 80;
	$tdataut_user_types[".ShortName"] = "ut_user_types";
	$tdataut_user_types[".OwnerID"] = "";
	$tdataut_user_types[".OriginalTable"] = "ut_user_types";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataut_user_types[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataut_user_types[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsut_user_types = array();
$fieldToolTipsut_user_types = array();
$pageTitlesut_user_types = array();
$placeHoldersut_user_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsut_user_types["English"] = array();
	$fieldToolTipsut_user_types["English"] = array();
	$placeHoldersut_user_types["English"] = array();
	$pageTitlesut_user_types["English"] = array();
	$fieldLabelsut_user_types["English"]["id_unee_t_user_type"] = "Id Unee T User Type";
	$fieldToolTipsut_user_types["English"]["id_unee_t_user_type"] = "";
	$placeHoldersut_user_types["English"]["id_unee_t_user_type"] = "";
	$fieldLabelsut_user_types["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsut_user_types["English"]["syst_created_datetime"] = "";
	$placeHoldersut_user_types["English"]["syst_created_datetime"] = "";
	$fieldLabelsut_user_types["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsut_user_types["English"]["creation_system_id"] = "";
	$placeHoldersut_user_types["English"]["creation_system_id"] = "";
	$fieldLabelsut_user_types["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsut_user_types["English"]["created_by_id"] = "";
	$placeHoldersut_user_types["English"]["created_by_id"] = "";
	$fieldLabelsut_user_types["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsut_user_types["English"]["syst_updated_datetime"] = "";
	$placeHoldersut_user_types["English"]["syst_updated_datetime"] = "";
	$fieldLabelsut_user_types["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsut_user_types["English"]["update_system_id"] = "";
	$placeHoldersut_user_types["English"]["update_system_id"] = "";
	$fieldLabelsut_user_types["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsut_user_types["English"]["updated_by_id"] = "";
	$placeHoldersut_user_types["English"]["updated_by_id"] = "";
	$fieldLabelsut_user_types["English"]["order"] = "Order";
	$fieldToolTipsut_user_types["English"]["order"] = "";
	$placeHoldersut_user_types["English"]["order"] = "";
	$fieldLabelsut_user_types["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsut_user_types["English"]["is_obsolete"] = "";
	$placeHoldersut_user_types["English"]["is_obsolete"] = "";
	$fieldLabelsut_user_types["English"]["description"] = "Description";
	$fieldToolTipsut_user_types["English"]["description"] = "";
	$placeHoldersut_user_types["English"]["description"] = "";
	$fieldLabelsut_user_types["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsut_user_types["English"]["creation_method"] = "";
	$placeHoldersut_user_types["English"]["creation_method"] = "";
	$fieldLabelsut_user_types["English"]["update_method"] = "Update Method";
	$fieldToolTipsut_user_types["English"]["update_method"] = "";
	$placeHoldersut_user_types["English"]["update_method"] = "";
	$fieldLabelsut_user_types["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsut_user_types["English"]["organization_id"] = "";
	$placeHoldersut_user_types["English"]["organization_id"] = "";
	$fieldLabelsut_user_types["English"]["ut_user_role_type_id"] = "Ut User Role Type Id";
	$fieldToolTipsut_user_types["English"]["ut_user_role_type_id"] = "";
	$placeHoldersut_user_types["English"]["ut_user_role_type_id"] = "";
	$fieldLabelsut_user_types["English"]["designation"] = "Designation";
	$fieldToolTipsut_user_types["English"]["designation"] = "";
	$placeHoldersut_user_types["English"]["designation"] = "";
	$fieldLabelsut_user_types["English"]["is_assigned_to_case"] = "Is Assigned To Case";
	$fieldToolTipsut_user_types["English"]["is_assigned_to_case"] = "";
	$placeHoldersut_user_types["English"]["is_assigned_to_case"] = "";
	$fieldLabelsut_user_types["English"]["is_invited_to_case"] = "Is Invited To Case";
	$fieldToolTipsut_user_types["English"]["is_invited_to_case"] = "";
	$placeHoldersut_user_types["English"]["is_invited_to_case"] = "";
	$fieldLabelsut_user_types["English"]["is_next_step_updated"] = "Is Next Step Updated";
	$fieldToolTipsut_user_types["English"]["is_next_step_updated"] = "";
	$placeHoldersut_user_types["English"]["is_next_step_updated"] = "";
	$fieldLabelsut_user_types["English"]["is_deadline_updated"] = "Is Deadline Updated";
	$fieldToolTipsut_user_types["English"]["is_deadline_updated"] = "";
	$placeHoldersut_user_types["English"]["is_deadline_updated"] = "";
	$fieldLabelsut_user_types["English"]["is_dashboard_access"] = "Is Dashboard Access";
	$fieldToolTipsut_user_types["English"]["is_dashboard_access"] = "";
	$placeHoldersut_user_types["English"]["is_dashboard_access"] = "";
	$fieldLabelsut_user_types["English"]["is_default_assignee"] = "Is Default Assignee";
	$fieldToolTipsut_user_types["English"]["is_default_assignee"] = "";
	$placeHoldersut_user_types["English"]["is_default_assignee"] = "";
	$fieldLabelsut_user_types["English"]["can_see_role_contractor"] = "Can See Role Contractor";
	$fieldToolTipsut_user_types["English"]["can_see_role_contractor"] = "";
	$placeHoldersut_user_types["English"]["can_see_role_contractor"] = "";
	$fieldLabelsut_user_types["English"]["can_see_role_mgt_cny"] = "Can See Role Mgt Cny";
	$fieldToolTipsut_user_types["English"]["can_see_role_mgt_cny"] = "";
	$placeHoldersut_user_types["English"]["can_see_role_mgt_cny"] = "";
	$fieldLabelsut_user_types["English"]["can_see_role_agent"] = "Can See Role Agent";
	$fieldToolTipsut_user_types["English"]["can_see_role_agent"] = "";
	$placeHoldersut_user_types["English"]["can_see_role_agent"] = "";
	$fieldLabelsut_user_types["English"]["can_see_occupant"] = "Can See Occupant";
	$fieldToolTipsut_user_types["English"]["can_see_occupant"] = "";
	$placeHoldersut_user_types["English"]["can_see_occupant"] = "";
	$fieldLabelsut_user_types["English"]["can_see_role_landlord"] = "Can See Role Landlord";
	$fieldToolTipsut_user_types["English"]["can_see_role_landlord"] = "";
	$placeHoldersut_user_types["English"]["can_see_role_landlord"] = "";
	$fieldLabelsut_user_types["English"]["can_see_role_tenant"] = "Can See Role Tenant";
	$fieldToolTipsut_user_types["English"]["can_see_role_tenant"] = "";
	$placeHoldersut_user_types["English"]["can_see_role_tenant"] = "";
	$fieldLabelsut_user_types["English"]["is_public"] = "Is Public";
	$fieldToolTipsut_user_types["English"]["is_public"] = "";
	$placeHoldersut_user_types["English"]["is_public"] = "";
	$fieldLabelsut_user_types["English"]["is_item_moved"] = "Is Item Moved";
	$fieldToolTipsut_user_types["English"]["is_item_moved"] = "";
	$placeHoldersut_user_types["English"]["is_item_moved"] = "";
	$fieldLabelsut_user_types["English"]["is_item_removed"] = "Is Item Removed";
	$fieldToolTipsut_user_types["English"]["is_item_removed"] = "";
	$placeHoldersut_user_types["English"]["is_item_removed"] = "";
	$fieldLabelsut_user_types["English"]["is_new_item"] = "Is New Item";
	$fieldToolTipsut_user_types["English"]["is_new_item"] = "";
	$placeHoldersut_user_types["English"]["is_new_item"] = "";
	$fieldLabelsut_user_types["English"]["is_new_ir"] = "Is New Ir";
	$fieldToolTipsut_user_types["English"]["is_new_ir"] = "";
	$placeHoldersut_user_types["English"]["is_new_ir"] = "";
	$fieldLabelsut_user_types["English"]["is_message_from_contractor"] = "Is Message From Contractor";
	$fieldToolTipsut_user_types["English"]["is_message_from_contractor"] = "";
	$placeHoldersut_user_types["English"]["is_message_from_contractor"] = "";
	$fieldLabelsut_user_types["English"]["is_message_from_mgt_cny"] = "Is Message From Mgt Cny";
	$fieldToolTipsut_user_types["English"]["is_message_from_mgt_cny"] = "";
	$placeHoldersut_user_types["English"]["is_message_from_mgt_cny"] = "";
	$fieldLabelsut_user_types["English"]["is_message_from_agent"] = "Is Message From Agent";
	$fieldToolTipsut_user_types["English"]["is_message_from_agent"] = "";
	$placeHoldersut_user_types["English"]["is_message_from_agent"] = "";
	$fieldLabelsut_user_types["English"]["is_message_from_occupant"] = "Is Message From Occupant";
	$fieldToolTipsut_user_types["English"]["is_message_from_occupant"] = "";
	$placeHoldersut_user_types["English"]["is_message_from_occupant"] = "";
	$fieldLabelsut_user_types["English"]["is_message_from_ll"] = "Is Message From Ll";
	$fieldToolTipsut_user_types["English"]["is_message_from_ll"] = "";
	$placeHoldersut_user_types["English"]["is_message_from_ll"] = "";
	$fieldLabelsut_user_types["English"]["is_message_from_tenant"] = "Is Message From Tenant";
	$fieldToolTipsut_user_types["English"]["is_message_from_tenant"] = "";
	$placeHoldersut_user_types["English"]["is_message_from_tenant"] = "";
	$fieldLabelsut_user_types["English"]["is_any_new_message"] = "Is Any New Message";
	$fieldToolTipsut_user_types["English"]["is_any_new_message"] = "";
	$placeHoldersut_user_types["English"]["is_any_new_message"] = "";
	$fieldLabelsut_user_types["English"]["is_case_critical"] = "Is Case Critical";
	$fieldToolTipsut_user_types["English"]["is_case_critical"] = "";
	$placeHoldersut_user_types["English"]["is_case_critical"] = "";
	$fieldLabelsut_user_types["English"]["is_case_blocker"] = "Is Case Blocker";
	$fieldToolTipsut_user_types["English"]["is_case_blocker"] = "";
	$placeHoldersut_user_types["English"]["is_case_blocker"] = "";
	$fieldLabelsut_user_types["English"]["is_case_resolved"] = "Is Case Resolved";
	$fieldToolTipsut_user_types["English"]["is_case_resolved"] = "";
	$placeHoldersut_user_types["English"]["is_case_resolved"] = "";
	$fieldLabelsut_user_types["English"]["is_solution_updated"] = "Is Solution Updated";
	$fieldToolTipsut_user_types["English"]["is_solution_updated"] = "";
	$placeHoldersut_user_types["English"]["is_solution_updated"] = "";
	$fieldLabelsut_user_types["English"]["is_new_inventory"] = "Is New Inventory";
	$fieldToolTipsut_user_types["English"]["is_new_inventory"] = "";
	$placeHoldersut_user_types["English"]["is_new_inventory"] = "";
	$fieldLabelsut_user_types["English"]["is_occupant"] = "Is Occupant";
	$fieldToolTipsut_user_types["English"]["is_occupant"] = "";
	$placeHoldersut_user_types["English"]["is_occupant"] = "";
	$fieldLabelsut_user_types["English"]["is_unit_owner"] = "Is Unit Owner";
	$fieldToolTipsut_user_types["English"]["is_unit_owner"] = "";
	$placeHoldersut_user_types["English"]["is_unit_owner"] = "";
	$fieldLabelsut_user_types["English"]["is_default_invited"] = "Is Default Invited";
	$fieldToolTipsut_user_types["English"]["is_default_invited"] = "";
	$placeHoldersut_user_types["English"]["is_default_invited"] = "";
	$fieldLabelsut_user_types["English"]["is_all_unit"] = "Is All Unit";
	$fieldToolTipsut_user_types["English"]["is_all_unit"] = "";
	$placeHoldersut_user_types["English"]["is_all_unit"] = "";
	if (count($fieldToolTipsut_user_types["English"]))
		$tdataut_user_types[".isUseToolTips"] = true;
}


	$tdataut_user_types[".NCSearch"] = true;



$tdataut_user_types[".shortTableName"] = "ut_user_types";
$tdataut_user_types[".nSecOptions"] = 0;

$tdataut_user_types[".mainTableOwnerID"] = "";
$tdataut_user_types[".entityType"] = 0;

$tdataut_user_types[".strOriginalTableName"] = "ut_user_types";

		 



$tdataut_user_types[".showAddInPopup"] = false;

$tdataut_user_types[".showEditInPopup"] = false;

$tdataut_user_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataut_user_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataut_user_types[".listAjax"] = true;
//	temporary
$tdataut_user_types[".listAjax"] = false;

	$tdataut_user_types[".audit"] = false;

	$tdataut_user_types[".locking"] = false;


$pages = $tdataut_user_types[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataut_user_types[".edit"] = true;
	$tdataut_user_types[".afterEditAction"] = 1;
	$tdataut_user_types[".closePopupAfterEdit"] = 1;
	$tdataut_user_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataut_user_types[".add"] = true;
$tdataut_user_types[".afterAddAction"] = 1;
$tdataut_user_types[".closePopupAfterAdd"] = 1;
$tdataut_user_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataut_user_types[".list"] = true;
}



$tdataut_user_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataut_user_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataut_user_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataut_user_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataut_user_types[".printFriendly"] = true;
}



$tdataut_user_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataut_user_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataut_user_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataut_user_types[".isUseAjaxSuggest"] = true;

$tdataut_user_types[".rowHighlite"] = true;





$tdataut_user_types[".ajaxCodeSnippetAdded"] = false;

$tdataut_user_types[".buttonsAdded"] = false;

$tdataut_user_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataut_user_types[".isUseTimeForSearch"] = false;




$tdataut_user_types[".allSearchFields"] = array();
$tdataut_user_types[".filterFields"] = array();
$tdataut_user_types[".requiredSearchFields"] = array();

$tdataut_user_types[".googleLikeFields"] = array();
$tdataut_user_types[".googleLikeFields"][] = "id_unee_t_user_type";
$tdataut_user_types[".googleLikeFields"][] = "syst_created_datetime";
$tdataut_user_types[".googleLikeFields"][] = "creation_system_id";
$tdataut_user_types[".googleLikeFields"][] = "created_by_id";
$tdataut_user_types[".googleLikeFields"][] = "creation_method";
$tdataut_user_types[".googleLikeFields"][] = "syst_updated_datetime";
$tdataut_user_types[".googleLikeFields"][] = "update_system_id";
$tdataut_user_types[".googleLikeFields"][] = "updated_by_id";
$tdataut_user_types[".googleLikeFields"][] = "update_method";
$tdataut_user_types[".googleLikeFields"][] = "organization_id";
$tdataut_user_types[".googleLikeFields"][] = "order";
$tdataut_user_types[".googleLikeFields"][] = "is_obsolete";
$tdataut_user_types[".googleLikeFields"][] = "designation";
$tdataut_user_types[".googleLikeFields"][] = "description";
$tdataut_user_types[".googleLikeFields"][] = "ut_user_role_type_id";
$tdataut_user_types[".googleLikeFields"][] = "is_all_unit";
$tdataut_user_types[".googleLikeFields"][] = "is_occupant";
$tdataut_user_types[".googleLikeFields"][] = "is_public";
$tdataut_user_types[".googleLikeFields"][] = "is_default_assignee";
$tdataut_user_types[".googleLikeFields"][] = "is_default_invited";
$tdataut_user_types[".googleLikeFields"][] = "is_unit_owner";
$tdataut_user_types[".googleLikeFields"][] = "is_dashboard_access";
$tdataut_user_types[".googleLikeFields"][] = "can_see_role_contractor";
$tdataut_user_types[".googleLikeFields"][] = "can_see_role_mgt_cny";
$tdataut_user_types[".googleLikeFields"][] = "can_see_occupant";
$tdataut_user_types[".googleLikeFields"][] = "can_see_role_landlord";
$tdataut_user_types[".googleLikeFields"][] = "can_see_role_agent";
$tdataut_user_types[".googleLikeFields"][] = "can_see_role_tenant";
$tdataut_user_types[".googleLikeFields"][] = "is_assigned_to_case";
$tdataut_user_types[".googleLikeFields"][] = "is_invited_to_case";
$tdataut_user_types[".googleLikeFields"][] = "is_solution_updated";
$tdataut_user_types[".googleLikeFields"][] = "is_next_step_updated";
$tdataut_user_types[".googleLikeFields"][] = "is_deadline_updated";
$tdataut_user_types[".googleLikeFields"][] = "is_case_resolved";
$tdataut_user_types[".googleLikeFields"][] = "is_case_critical";
$tdataut_user_types[".googleLikeFields"][] = "is_case_blocker";
$tdataut_user_types[".googleLikeFields"][] = "is_message_from_contractor";
$tdataut_user_types[".googleLikeFields"][] = "is_message_from_mgt_cny";
$tdataut_user_types[".googleLikeFields"][] = "is_message_from_agent";
$tdataut_user_types[".googleLikeFields"][] = "is_message_from_occupant";
$tdataut_user_types[".googleLikeFields"][] = "is_message_from_ll";
$tdataut_user_types[".googleLikeFields"][] = "is_message_from_tenant";
$tdataut_user_types[".googleLikeFields"][] = "is_any_new_message";
$tdataut_user_types[".googleLikeFields"][] = "is_new_ir";
$tdataut_user_types[".googleLikeFields"][] = "is_new_inventory";
$tdataut_user_types[".googleLikeFields"][] = "is_new_item";
$tdataut_user_types[".googleLikeFields"][] = "is_item_moved";
$tdataut_user_types[".googleLikeFields"][] = "is_item_removed";



$tdataut_user_types[".tableType"] = "list";

$tdataut_user_types[".printerPageOrientation"] = 0;
$tdataut_user_types[".nPrinterPageScale"] = 100;

$tdataut_user_types[".nPrinterSplitRecords"] = 40;

$tdataut_user_types[".nPrinterPDFSplitRecords"] = 40;


$tdataut_user_types[".geocodingEnabled"] = false;





$tdataut_user_types[".isResizeColumns"] = true;





$tdataut_user_types[".pageSize"] = 20;

$tdataut_user_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataut_user_types[".strOrderBy"] = $tstrOrderBy;

$tdataut_user_types[".orderindexes"] = array();

$tdataut_user_types[".sqlHead"] = "SELECT id_unee_t_user_type,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	organization_id,  	`order`,  	is_obsolete,  	designation,  	description,  	ut_user_role_type_id,  	is_all_unit,  	is_occupant,  	is_public,  	is_default_assignee,  	is_default_invited,  	is_unit_owner,  	is_dashboard_access,  	can_see_role_contractor,  	can_see_role_mgt_cny,  	can_see_occupant,  	can_see_role_landlord,  	can_see_role_agent,  	can_see_role_tenant,  	is_assigned_to_case,  	is_invited_to_case,  	is_solution_updated,  	is_next_step_updated,  	is_deadline_updated,  	is_case_resolved,  	is_case_critical,  	is_case_blocker,  	is_message_from_contractor,  	is_message_from_mgt_cny,  	is_message_from_agent,  	is_message_from_occupant,  	is_message_from_ll,  	is_message_from_tenant,  	is_any_new_message,  	is_new_ir,  	is_new_inventory,  	is_new_item,  	is_item_moved,  	is_item_removed";
$tdataut_user_types[".sqlFrom"] = "FROM ut_user_types";
$tdataut_user_types[".sqlWhereExpr"] = "";
$tdataut_user_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataut_user_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataut_user_types[".arrGroupsPerPage"] = $arrGPP;

$tdataut_user_types[".highlightSearchResults"] = true;

$tableKeysut_user_types = array();
$tableKeysut_user_types[] = "id_unee_t_user_type";
$tdataut_user_types[".Keys"] = $tableKeysut_user_types;


$tdataut_user_types[".hideMobileList"] = array();




//	id_unee_t_user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_unee_t_user_type";
	$fdata["GoodName"] = "id_unee_t_user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","id_unee_t_user_type");
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


	$tdataut_user_types["id_unee_t_user_type"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "id_unee_t_user_type";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_created_datetime";

	
	
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


	$tdataut_user_types["syst_created_datetime"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_system_id";

	
	
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


	$tdataut_user_types["creation_system_id"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","created_by_id");
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


	$tdataut_user_types["created_by_id"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_method";

	
	
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


	$tdataut_user_types["creation_method"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","syst_updated_datetime");
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


	$tdataut_user_types["syst_updated_datetime"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","update_system_id");
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


	$tdataut_user_types["update_system_id"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","updated_by_id");
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


	$tdataut_user_types["updated_by_id"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","update_method");
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


	$tdataut_user_types["update_method"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","organization_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

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


	$tdataut_user_types["organization_id"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "organization_id";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","order");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`order`";

	
	
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


	$tdataut_user_types["order"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_obsolete";

	
	
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


	$tdataut_user_types["is_obsolete"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","designation");
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


	$tdataut_user_types["designation"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataut_user_types["description"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "description";
//	ut_user_role_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ut_user_role_type_id";
	$fdata["GoodName"] = "ut_user_role_type_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","ut_user_role_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "ut_user_role_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_role_type_id";

	
	
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
	$edata["LookupTable"] = "ut_user_role_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_role_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_role_type";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdataut_user_types["ut_user_role_type_id"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "ut_user_role_type_id";
//	is_all_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "is_all_unit";
	$fdata["GoodName"] = "is_all_unit";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_all_unit");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_all_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_all_unit";

	
	
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


	$tdataut_user_types["is_all_unit"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_all_unit";
//	is_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_occupant";
	$fdata["GoodName"] = "is_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_occupant";

	
	
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


	$tdataut_user_types["is_occupant"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_occupant";
//	is_public
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_public";
	$fdata["GoodName"] = "is_public";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_public");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_public";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_public";

	
	
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


	$tdataut_user_types["is_public"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_public";
//	is_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_default_assignee";
	$fdata["GoodName"] = "is_default_assignee";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_default_assignee");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_default_assignee";

	
	
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


	$tdataut_user_types["is_default_assignee"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_default_assignee";
//	is_default_invited
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_default_invited";
	$fdata["GoodName"] = "is_default_invited";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_default_invited");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default_invited";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_default_invited";

	
	
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


	$tdataut_user_types["is_default_invited"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_default_invited";
//	is_unit_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "is_unit_owner";
	$fdata["GoodName"] = "is_unit_owner";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_unit_owner");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_unit_owner";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_unit_owner";

	
	
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


	$tdataut_user_types["is_unit_owner"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_unit_owner";
//	is_dashboard_access
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "is_dashboard_access";
	$fdata["GoodName"] = "is_dashboard_access";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_dashboard_access");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_dashboard_access";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_dashboard_access";

	
	
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


	$tdataut_user_types["is_dashboard_access"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_dashboard_access";
//	can_see_role_contractor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "can_see_role_contractor";
	$fdata["GoodName"] = "can_see_role_contractor";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","can_see_role_contractor");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_contractor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_contractor";

	
	
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


	$tdataut_user_types["can_see_role_contractor"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "can_see_role_contractor";
//	can_see_role_mgt_cny
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "can_see_role_mgt_cny";
	$fdata["GoodName"] = "can_see_role_mgt_cny";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","can_see_role_mgt_cny");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_mgt_cny";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_mgt_cny";

	
	
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


	$tdataut_user_types["can_see_role_mgt_cny"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "can_see_role_mgt_cny";
//	can_see_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "can_see_occupant";
	$fdata["GoodName"] = "can_see_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","can_see_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_occupant";

	
	
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


	$tdataut_user_types["can_see_occupant"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "can_see_occupant";
//	can_see_role_landlord
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "can_see_role_landlord";
	$fdata["GoodName"] = "can_see_role_landlord";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","can_see_role_landlord");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_landlord";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_landlord";

	
	
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


	$tdataut_user_types["can_see_role_landlord"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "can_see_role_landlord";
//	can_see_role_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "can_see_role_agent";
	$fdata["GoodName"] = "can_see_role_agent";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","can_see_role_agent");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_agent";

	
	
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


	$tdataut_user_types["can_see_role_agent"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "can_see_role_agent";
//	can_see_role_tenant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "can_see_role_tenant";
	$fdata["GoodName"] = "can_see_role_tenant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","can_see_role_tenant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "can_see_role_tenant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "can_see_role_tenant";

	
	
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


	$tdataut_user_types["can_see_role_tenant"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "can_see_role_tenant";
//	is_assigned_to_case
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "is_assigned_to_case";
	$fdata["GoodName"] = "is_assigned_to_case";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_assigned_to_case");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_assigned_to_case";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_assigned_to_case";

	
	
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


	$tdataut_user_types["is_assigned_to_case"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_assigned_to_case";
//	is_invited_to_case
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "is_invited_to_case";
	$fdata["GoodName"] = "is_invited_to_case";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_invited_to_case");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_invited_to_case";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_invited_to_case";

	
	
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


	$tdataut_user_types["is_invited_to_case"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_invited_to_case";
//	is_solution_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "is_solution_updated";
	$fdata["GoodName"] = "is_solution_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_solution_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_solution_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_solution_updated";

	
	
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


	$tdataut_user_types["is_solution_updated"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_solution_updated";
//	is_next_step_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "is_next_step_updated";
	$fdata["GoodName"] = "is_next_step_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_next_step_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_next_step_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_next_step_updated";

	
	
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


	$tdataut_user_types["is_next_step_updated"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_next_step_updated";
//	is_deadline_updated
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "is_deadline_updated";
	$fdata["GoodName"] = "is_deadline_updated";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_deadline_updated");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_deadline_updated";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_deadline_updated";

	
	
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


	$tdataut_user_types["is_deadline_updated"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_deadline_updated";
//	is_case_resolved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "is_case_resolved";
	$fdata["GoodName"] = "is_case_resolved";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_case_resolved");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_resolved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_case_resolved";

	
	
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


	$tdataut_user_types["is_case_resolved"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_case_resolved";
//	is_case_critical
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "is_case_critical";
	$fdata["GoodName"] = "is_case_critical";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_case_critical");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_critical";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_case_critical";

	
	
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


	$tdataut_user_types["is_case_critical"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_case_critical";
//	is_case_blocker
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "is_case_blocker";
	$fdata["GoodName"] = "is_case_blocker";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_case_blocker");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_case_blocker";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_case_blocker";

	
	
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


	$tdataut_user_types["is_case_blocker"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_case_blocker";
//	is_message_from_contractor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "is_message_from_contractor";
	$fdata["GoodName"] = "is_message_from_contractor";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_message_from_contractor");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_contractor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_contractor";

	
	
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


	$tdataut_user_types["is_message_from_contractor"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_message_from_contractor";
//	is_message_from_mgt_cny
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "is_message_from_mgt_cny";
	$fdata["GoodName"] = "is_message_from_mgt_cny";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_message_from_mgt_cny");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_mgt_cny";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_mgt_cny";

	
	
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


	$tdataut_user_types["is_message_from_mgt_cny"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_message_from_mgt_cny";
//	is_message_from_agent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "is_message_from_agent";
	$fdata["GoodName"] = "is_message_from_agent";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_message_from_agent");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_agent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_agent";

	
	
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


	$tdataut_user_types["is_message_from_agent"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_message_from_agent";
//	is_message_from_occupant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "is_message_from_occupant";
	$fdata["GoodName"] = "is_message_from_occupant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_message_from_occupant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_occupant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_occupant";

	
	
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


	$tdataut_user_types["is_message_from_occupant"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_message_from_occupant";
//	is_message_from_ll
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "is_message_from_ll";
	$fdata["GoodName"] = "is_message_from_ll";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_message_from_ll");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_ll";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_ll";

	
	
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


	$tdataut_user_types["is_message_from_ll"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_message_from_ll";
//	is_message_from_tenant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "is_message_from_tenant";
	$fdata["GoodName"] = "is_message_from_tenant";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_message_from_tenant");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_message_from_tenant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_message_from_tenant";

	
	
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


	$tdataut_user_types["is_message_from_tenant"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_message_from_tenant";
//	is_any_new_message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "is_any_new_message";
	$fdata["GoodName"] = "is_any_new_message";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_any_new_message");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_any_new_message";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_any_new_message";

	
	
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


	$tdataut_user_types["is_any_new_message"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_any_new_message";
//	is_new_ir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "is_new_ir";
	$fdata["GoodName"] = "is_new_ir";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_new_ir");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_new_ir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_new_ir";

	
	
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


	$tdataut_user_types["is_new_ir"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_new_ir";
//	is_new_inventory
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "is_new_inventory";
	$fdata["GoodName"] = "is_new_inventory";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_new_inventory");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_new_inventory";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_new_inventory";

	
	
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


	$tdataut_user_types["is_new_inventory"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_new_inventory";
//	is_new_item
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "is_new_item";
	$fdata["GoodName"] = "is_new_item";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_new_item");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_new_item";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_new_item";

	
	
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


	$tdataut_user_types["is_new_item"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_new_item";
//	is_item_moved
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "is_item_moved";
	$fdata["GoodName"] = "is_item_moved";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_item_moved");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_item_moved";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_item_moved";

	
	
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


	$tdataut_user_types["is_item_moved"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_item_moved";
//	is_item_removed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "is_item_removed";
	$fdata["GoodName"] = "is_item_removed";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("ut_user_types","is_item_removed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_item_removed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_item_removed";

	
	
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


	$tdataut_user_types["is_item_removed"] = $fdata;
		$tdataut_user_types[".searchableFields"][] = "is_item_removed";


$tables_data["ut_user_types"]=&$tdataut_user_types;
$field_labels["ut_user_types"] = &$fieldLabelsut_user_types;
$fieldToolTips["ut_user_types"] = &$fieldToolTipsut_user_types;
$placeHolders["ut_user_types"] = &$placeHoldersut_user_types;
$page_titles["ut_user_types"] = &$pageTitlesut_user_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ut_user_types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ut_user_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ut_user_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_unee_t_user_type,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	organization_id,  	`order`,  	is_obsolete,  	designation,  	description,  	ut_user_role_type_id,  	is_all_unit,  	is_occupant,  	is_public,  	is_default_assignee,  	is_default_invited,  	is_unit_owner,  	is_dashboard_access,  	can_see_role_contractor,  	can_see_role_mgt_cny,  	can_see_occupant,  	can_see_role_landlord,  	can_see_role_agent,  	can_see_role_tenant,  	is_assigned_to_case,  	is_invited_to_case,  	is_solution_updated,  	is_next_step_updated,  	is_deadline_updated,  	is_case_resolved,  	is_case_critical,  	is_case_blocker,  	is_message_from_contractor,  	is_message_from_mgt_cny,  	is_message_from_agent,  	is_message_from_occupant,  	is_message_from_ll,  	is_message_from_tenant,  	is_any_new_message,  	is_new_ir,  	is_new_inventory,  	is_new_item,  	is_item_moved,  	is_item_removed";
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
	"m_srcTableName" => "ut_user_types"
));

$proto6["m_sql"] = "id_unee_t_user_type";
$proto6["m_srcTableName"] = "ut_user_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto8["m_sql"] = "syst_created_datetime";
$proto8["m_srcTableName"] = "ut_user_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto10["m_sql"] = "creation_system_id";
$proto10["m_srcTableName"] = "ut_user_types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto12["m_sql"] = "created_by_id";
$proto12["m_srcTableName"] = "ut_user_types";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto14["m_sql"] = "creation_method";
$proto14["m_srcTableName"] = "ut_user_types";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto16["m_sql"] = "syst_updated_datetime";
$proto16["m_srcTableName"] = "ut_user_types";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto18["m_sql"] = "update_system_id";
$proto18["m_srcTableName"] = "ut_user_types";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto20["m_sql"] = "updated_by_id";
$proto20["m_srcTableName"] = "ut_user_types";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto22["m_sql"] = "update_method";
$proto22["m_srcTableName"] = "ut_user_types";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto24["m_sql"] = "organization_id";
$proto24["m_srcTableName"] = "ut_user_types";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto26["m_sql"] = "`order`";
$proto26["m_srcTableName"] = "ut_user_types";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto28["m_sql"] = "is_obsolete";
$proto28["m_srcTableName"] = "ut_user_types";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto30["m_sql"] = "designation";
$proto30["m_srcTableName"] = "ut_user_types";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto32["m_sql"] = "description";
$proto32["m_srcTableName"] = "ut_user_types";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto34["m_sql"] = "ut_user_role_type_id";
$proto34["m_srcTableName"] = "ut_user_types";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "is_all_unit",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto36["m_sql"] = "is_all_unit";
$proto36["m_srcTableName"] = "ut_user_types";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto38["m_sql"] = "is_occupant";
$proto38["m_srcTableName"] = "ut_user_types";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_public",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto40["m_sql"] = "is_public";
$proto40["m_srcTableName"] = "ut_user_types";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_assignee",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto42["m_sql"] = "is_default_assignee";
$proto42["m_srcTableName"] = "ut_user_types";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default_invited",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto44["m_sql"] = "is_default_invited";
$proto44["m_srcTableName"] = "ut_user_types";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_unit_owner",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto46["m_sql"] = "is_unit_owner";
$proto46["m_srcTableName"] = "ut_user_types";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "is_dashboard_access",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto48["m_sql"] = "is_dashboard_access";
$proto48["m_srcTableName"] = "ut_user_types";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_contractor",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto50["m_sql"] = "can_see_role_contractor";
$proto50["m_srcTableName"] = "ut_user_types";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_mgt_cny",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto52["m_sql"] = "can_see_role_mgt_cny";
$proto52["m_srcTableName"] = "ut_user_types";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto54["m_sql"] = "can_see_occupant";
$proto54["m_srcTableName"] = "ut_user_types";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_landlord",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto56["m_sql"] = "can_see_role_landlord";
$proto56["m_srcTableName"] = "ut_user_types";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_agent",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto58["m_sql"] = "can_see_role_agent";
$proto58["m_srcTableName"] = "ut_user_types";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "can_see_role_tenant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto60["m_sql"] = "can_see_role_tenant";
$proto60["m_srcTableName"] = "ut_user_types";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "is_assigned_to_case",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto62["m_sql"] = "is_assigned_to_case";
$proto62["m_srcTableName"] = "ut_user_types";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "is_invited_to_case",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto64["m_sql"] = "is_invited_to_case";
$proto64["m_srcTableName"] = "ut_user_types";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "is_solution_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto66["m_sql"] = "is_solution_updated";
$proto66["m_srcTableName"] = "ut_user_types";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "is_next_step_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto68["m_sql"] = "is_next_step_updated";
$proto68["m_srcTableName"] = "ut_user_types";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "is_deadline_updated",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto70["m_sql"] = "is_deadline_updated";
$proto70["m_srcTableName"] = "ut_user_types";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_resolved",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto72["m_sql"] = "is_case_resolved";
$proto72["m_srcTableName"] = "ut_user_types";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_critical",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto74["m_sql"] = "is_case_critical";
$proto74["m_srcTableName"] = "ut_user_types";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "is_case_blocker",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto76["m_sql"] = "is_case_blocker";
$proto76["m_srcTableName"] = "ut_user_types";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_contractor",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto78["m_sql"] = "is_message_from_contractor";
$proto78["m_srcTableName"] = "ut_user_types";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_mgt_cny",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto80["m_sql"] = "is_message_from_mgt_cny";
$proto80["m_srcTableName"] = "ut_user_types";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_agent",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto82["m_sql"] = "is_message_from_agent";
$proto82["m_srcTableName"] = "ut_user_types";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_occupant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto84["m_sql"] = "is_message_from_occupant";
$proto84["m_srcTableName"] = "ut_user_types";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_ll",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto86["m_sql"] = "is_message_from_ll";
$proto86["m_srcTableName"] = "ut_user_types";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "is_message_from_tenant",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto88["m_sql"] = "is_message_from_tenant";
$proto88["m_srcTableName"] = "ut_user_types";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "is_any_new_message",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto90["m_sql"] = "is_any_new_message";
$proto90["m_srcTableName"] = "ut_user_types";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "is_new_ir",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto92["m_sql"] = "is_new_ir";
$proto92["m_srcTableName"] = "ut_user_types";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "is_new_inventory",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto94["m_sql"] = "is_new_inventory";
$proto94["m_srcTableName"] = "ut_user_types";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "is_new_item",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto96["m_sql"] = "is_new_item";
$proto96["m_srcTableName"] = "ut_user_types";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "is_item_moved",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto98["m_sql"] = "is_item_moved";
$proto98["m_srcTableName"] = "ut_user_types";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "is_item_removed",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "ut_user_types"
));

$proto100["m_sql"] = "is_item_removed";
$proto100["m_srcTableName"] = "ut_user_types";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto102=array();
$proto102["m_link"] = "SQLL_MAIN";
			$proto103=array();
$proto103["m_strName"] = "ut_user_types";
$proto103["m_srcTableName"] = "ut_user_types";
$proto103["m_columns"] = array();
$proto103["m_columns"][] = "id_unee_t_user_type";
$proto103["m_columns"][] = "syst_created_datetime";
$proto103["m_columns"][] = "creation_system_id";
$proto103["m_columns"][] = "created_by_id";
$proto103["m_columns"][] = "creation_method";
$proto103["m_columns"][] = "syst_updated_datetime";
$proto103["m_columns"][] = "update_system_id";
$proto103["m_columns"][] = "updated_by_id";
$proto103["m_columns"][] = "update_method";
$proto103["m_columns"][] = "organization_id";
$proto103["m_columns"][] = "order";
$proto103["m_columns"][] = "is_obsolete";
$proto103["m_columns"][] = "designation";
$proto103["m_columns"][] = "description";
$proto103["m_columns"][] = "ut_user_role_type_id";
$proto103["m_columns"][] = "is_all_unit";
$proto103["m_columns"][] = "is_occupant";
$proto103["m_columns"][] = "is_public";
$proto103["m_columns"][] = "is_default_assignee";
$proto103["m_columns"][] = "is_default_invited";
$proto103["m_columns"][] = "is_unit_owner";
$proto103["m_columns"][] = "is_dashboard_access";
$proto103["m_columns"][] = "can_see_role_contractor";
$proto103["m_columns"][] = "can_see_role_mgt_cny";
$proto103["m_columns"][] = "can_see_occupant";
$proto103["m_columns"][] = "can_see_role_landlord";
$proto103["m_columns"][] = "can_see_role_agent";
$proto103["m_columns"][] = "can_see_role_tenant";
$proto103["m_columns"][] = "is_assigned_to_case";
$proto103["m_columns"][] = "is_invited_to_case";
$proto103["m_columns"][] = "is_solution_updated";
$proto103["m_columns"][] = "is_next_step_updated";
$proto103["m_columns"][] = "is_deadline_updated";
$proto103["m_columns"][] = "is_case_resolved";
$proto103["m_columns"][] = "is_case_critical";
$proto103["m_columns"][] = "is_case_blocker";
$proto103["m_columns"][] = "is_message_from_contractor";
$proto103["m_columns"][] = "is_message_from_mgt_cny";
$proto103["m_columns"][] = "is_message_from_agent";
$proto103["m_columns"][] = "is_message_from_occupant";
$proto103["m_columns"][] = "is_message_from_ll";
$proto103["m_columns"][] = "is_message_from_tenant";
$proto103["m_columns"][] = "is_any_new_message";
$proto103["m_columns"][] = "is_new_ir";
$proto103["m_columns"][] = "is_new_inventory";
$proto103["m_columns"][] = "is_new_item";
$proto103["m_columns"][] = "is_item_moved";
$proto103["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto103);

$proto102["m_table"] = $obj;
$proto102["m_sql"] = "ut_user_types";
$proto102["m_alias"] = "";
$proto102["m_srcTableName"] = "ut_user_types";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ut_user_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ut_user_types = createSqlQuery_ut_user_types();


	
					
;

																																																

$tdataut_user_types[".sqlquery"] = $queryData_ut_user_types;

$tableEvents["ut_user_types"] = new eventsBase;
$tdataut_user_types[".hasEvents"] = false;

?>