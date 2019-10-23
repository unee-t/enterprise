<?php



$tdataproperty_level_2_units = array();
$tdataproperty_level_2_units[".searchableFields"] = array();
$tdataproperty_level_2_units[".ShortName"] = "property_level_2_units";
$tdataproperty_level_2_units[".OwnerID"] = "";
$tdataproperty_level_2_units[".OriginalTable"] = "property_level_2_units";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataproperty_level_2_units[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataproperty_level_2_units[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataproperty_level_2_units[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsproperty_level_2_units = array();
$fieldToolTipsproperty_level_2_units = array();
$pageTitlesproperty_level_2_units = array();
$placeHoldersproperty_level_2_units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproperty_level_2_units["English"] = array();
	$fieldToolTipsproperty_level_2_units["English"] = array();
	$placeHoldersproperty_level_2_units["English"] = array();
	$pageTitlesproperty_level_2_units["English"] = array();
	$fieldLabelsproperty_level_2_units["English"]["system_id_unit"] = "System Id Unit";
	$fieldToolTipsproperty_level_2_units["English"]["system_id_unit"] = "";
	$placeHoldersproperty_level_2_units["English"]["system_id_unit"] = "";
	$fieldLabelsproperty_level_2_units["English"]["external_id"] = "External Id";
	$fieldToolTipsproperty_level_2_units["English"]["external_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["external_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsproperty_level_2_units["English"]["external_system_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["external_system_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["external_table"] = "External Table";
	$fieldToolTipsproperty_level_2_units["English"]["external_table"] = "";
	$placeHoldersproperty_level_2_units["English"]["external_table"] = "";
	$fieldLabelsproperty_level_2_units["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsproperty_level_2_units["English"]["syst_created_datetime"] = "";
	$placeHoldersproperty_level_2_units["English"]["syst_created_datetime"] = "";
	$fieldLabelsproperty_level_2_units["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsproperty_level_2_units["English"]["creation_system_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["creation_system_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsproperty_level_2_units["English"]["created_by_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["created_by_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsproperty_level_2_units["English"]["creation_method"] = "";
	$placeHoldersproperty_level_2_units["English"]["creation_method"] = "";
	$fieldLabelsproperty_level_2_units["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsproperty_level_2_units["English"]["syst_updated_datetime"] = "";
	$placeHoldersproperty_level_2_units["English"]["syst_updated_datetime"] = "";
	$fieldLabelsproperty_level_2_units["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsproperty_level_2_units["English"]["update_system_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["update_system_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsproperty_level_2_units["English"]["updated_by_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["updated_by_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["update_method"] = "Update Method";
	$fieldToolTipsproperty_level_2_units["English"]["update_method"] = "";
	$placeHoldersproperty_level_2_units["English"]["update_method"] = "";
	$fieldLabelsproperty_level_2_units["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsproperty_level_2_units["English"]["organization_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["organization_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["activated_by_id"] = "Activated By Id";
	$fieldToolTipsproperty_level_2_units["English"]["activated_by_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["activated_by_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsproperty_level_2_units["English"]["is_obsolete"] = "";
	$placeHoldersproperty_level_2_units["English"]["is_obsolete"] = "";
	$fieldLabelsproperty_level_2_units["English"]["is_creation_needed_in_unee_t"] = "Is Creation Needed In Unee T";
	$fieldToolTipsproperty_level_2_units["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersproperty_level_2_units["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsproperty_level_2_units["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsproperty_level_2_units["English"]["do_not_insert"] = "";
	$placeHoldersproperty_level_2_units["English"]["do_not_insert"] = "";
	$fieldLabelsproperty_level_2_units["English"]["unee_t_unit_type"] = "Unee T Unit Type";
	$fieldToolTipsproperty_level_2_units["English"]["unee_t_unit_type"] = "";
	$placeHoldersproperty_level_2_units["English"]["unee_t_unit_type"] = "";
	$fieldLabelsproperty_level_2_units["English"]["building_system_id"] = "Building System Id";
	$fieldToolTipsproperty_level_2_units["English"]["building_system_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["building_system_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["tower"] = "Tower";
	$fieldToolTipsproperty_level_2_units["English"]["tower"] = "";
	$placeHoldersproperty_level_2_units["English"]["tower"] = "";
	$fieldLabelsproperty_level_2_units["English"]["unit_category_id"] = "Unit Category Id";
	$fieldToolTipsproperty_level_2_units["English"]["unit_category_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["unit_category_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["designation"] = "Designation";
	$fieldToolTipsproperty_level_2_units["English"]["designation"] = "";
	$placeHoldersproperty_level_2_units["English"]["designation"] = "";
	$fieldLabelsproperty_level_2_units["English"]["count_rooms"] = "Count Rooms";
	$fieldToolTipsproperty_level_2_units["English"]["count_rooms"] = "";
	$placeHoldersproperty_level_2_units["English"]["count_rooms"] = "";
	$fieldLabelsproperty_level_2_units["English"]["unit_id"] = "Unit Id";
	$fieldToolTipsproperty_level_2_units["English"]["unit_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["unit_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["surface"] = "Surface";
	$fieldToolTipsproperty_level_2_units["English"]["surface"] = "";
	$placeHoldersproperty_level_2_units["English"]["surface"] = "";
	$fieldLabelsproperty_level_2_units["English"]["surface_measurment_unit"] = "Surface Measurment Unit";
	$fieldToolTipsproperty_level_2_units["English"]["surface_measurment_unit"] = "";
	$placeHoldersproperty_level_2_units["English"]["surface_measurment_unit"] = "";
	$fieldLabelsproperty_level_2_units["English"]["description"] = "Description";
	$fieldToolTipsproperty_level_2_units["English"]["description"] = "";
	$placeHoldersproperty_level_2_units["English"]["description"] = "";
	$fieldLabelsproperty_level_2_units["English"]["mgt_cny_default_assignee"] = "Mgt Cny Default Assignee";
	$fieldToolTipsproperty_level_2_units["English"]["mgt_cny_default_assignee"] = "";
	$placeHoldersproperty_level_2_units["English"]["mgt_cny_default_assignee"] = "";
	$fieldLabelsproperty_level_2_units["English"]["landlord_default_assignee"] = "Landlord Default Assignee";
	$fieldToolTipsproperty_level_2_units["English"]["landlord_default_assignee"] = "";
	$placeHoldersproperty_level_2_units["English"]["landlord_default_assignee"] = "";
	$fieldLabelsproperty_level_2_units["English"]["tenant_default_assignee"] = "Tenant Default Assignee";
	$fieldToolTipsproperty_level_2_units["English"]["tenant_default_assignee"] = "";
	$placeHoldersproperty_level_2_units["English"]["tenant_default_assignee"] = "";
	$fieldLabelsproperty_level_2_units["English"]["agent_default_assignee"] = "Agent Default Assignee";
	$fieldToolTipsproperty_level_2_units["English"]["agent_default_assignee"] = "";
	$placeHoldersproperty_level_2_units["English"]["agent_default_assignee"] = "";
	$fieldLabelsproperty_level_2_units["English"]["create_api_request_id"] = "Create Api Request Id";
	$fieldToolTipsproperty_level_2_units["English"]["create_api_request_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["create_api_request_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["edit_api_request_id"] = "Edit Api Request Id";
	$fieldToolTipsproperty_level_2_units["English"]["edit_api_request_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["edit_api_request_id"] = "";
	$fieldLabelsproperty_level_2_units["English"]["is_update_on_duplicate_key"] = "Is Update On Duplicate Key";
	$fieldToolTipsproperty_level_2_units["English"]["is_update_on_duplicate_key"] = "";
	$placeHoldersproperty_level_2_units["English"]["is_update_on_duplicate_key"] = "";
	$fieldLabelsproperty_level_2_units["English"]["l1p_external_system"] = "L1p External System";
	$fieldToolTipsproperty_level_2_units["English"]["l1p_external_system"] = "";
	$placeHoldersproperty_level_2_units["English"]["l1p_external_system"] = "";
	$fieldLabelsproperty_level_2_units["English"]["l1p_external_table"] = "L1p External Table";
	$fieldToolTipsproperty_level_2_units["English"]["l1p_external_table"] = "";
	$placeHoldersproperty_level_2_units["English"]["l1p_external_table"] = "";
	$fieldLabelsproperty_level_2_units["English"]["l1p_external_id"] = "L1p External Id";
	$fieldToolTipsproperty_level_2_units["English"]["l1p_external_id"] = "";
	$placeHoldersproperty_level_2_units["English"]["l1p_external_id"] = "";
	if (count($fieldToolTipsproperty_level_2_units["English"]))
		$tdataproperty_level_2_units[".isUseToolTips"] = true;
}


	$tdataproperty_level_2_units[".NCSearch"] = true;



$tdataproperty_level_2_units[".shortTableName"] = "property_level_2_units";
$tdataproperty_level_2_units[".nSecOptions"] = 0;

$tdataproperty_level_2_units[".mainTableOwnerID"] = "";
$tdataproperty_level_2_units[".entityType"] = 0;

$tdataproperty_level_2_units[".strOriginalTableName"] = "property_level_2_units";

		 



$tdataproperty_level_2_units[".showAddInPopup"] = false;

$tdataproperty_level_2_units[".showEditInPopup"] = false;

$tdataproperty_level_2_units[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproperty_level_2_units[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproperty_level_2_units[".listAjax"] = false;
//	temporary
$tdataproperty_level_2_units[".listAjax"] = false;

	$tdataproperty_level_2_units[".audit"] = false;

	$tdataproperty_level_2_units[".locking"] = false;


$pages = $tdataproperty_level_2_units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproperty_level_2_units[".edit"] = true;
	$tdataproperty_level_2_units[".afterEditAction"] = 1;
	$tdataproperty_level_2_units[".closePopupAfterEdit"] = 1;
	$tdataproperty_level_2_units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproperty_level_2_units[".add"] = true;
$tdataproperty_level_2_units[".afterAddAction"] = 1;
$tdataproperty_level_2_units[".closePopupAfterAdd"] = 1;
$tdataproperty_level_2_units[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproperty_level_2_units[".list"] = true;
}



$tdataproperty_level_2_units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproperty_level_2_units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproperty_level_2_units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproperty_level_2_units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproperty_level_2_units[".printFriendly"] = true;
}



$tdataproperty_level_2_units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproperty_level_2_units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproperty_level_2_units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproperty_level_2_units[".isUseAjaxSuggest"] = true;

$tdataproperty_level_2_units[".rowHighlite"] = true;





$tdataproperty_level_2_units[".ajaxCodeSnippetAdded"] = false;

$tdataproperty_level_2_units[".buttonsAdded"] = false;

$tdataproperty_level_2_units[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproperty_level_2_units[".isUseTimeForSearch"] = false;


$tdataproperty_level_2_units[".badgeColor"] = "E07878";


$tdataproperty_level_2_units[".allSearchFields"] = array();
$tdataproperty_level_2_units[".filterFields"] = array();
$tdataproperty_level_2_units[".requiredSearchFields"] = array();

$tdataproperty_level_2_units[".googleLikeFields"] = array();
$tdataproperty_level_2_units[".googleLikeFields"][] = "system_id_unit";
$tdataproperty_level_2_units[".googleLikeFields"][] = "create_api_request_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "edit_api_request_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "external_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "external_system_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "external_table";
$tdataproperty_level_2_units[".googleLikeFields"][] = "syst_created_datetime";
$tdataproperty_level_2_units[".googleLikeFields"][] = "creation_system_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "created_by_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "creation_method";
$tdataproperty_level_2_units[".googleLikeFields"][] = "syst_updated_datetime";
$tdataproperty_level_2_units[".googleLikeFields"][] = "update_system_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "updated_by_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "update_method";
$tdataproperty_level_2_units[".googleLikeFields"][] = "is_update_on_duplicate_key";
$tdataproperty_level_2_units[".googleLikeFields"][] = "organization_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "activated_by_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "is_obsolete";
$tdataproperty_level_2_units[".googleLikeFields"][] = "is_creation_needed_in_unee_t";
$tdataproperty_level_2_units[".googleLikeFields"][] = "do_not_insert";
$tdataproperty_level_2_units[".googleLikeFields"][] = "unee_t_unit_type";
$tdataproperty_level_2_units[".googleLikeFields"][] = "l1p_external_system";
$tdataproperty_level_2_units[".googleLikeFields"][] = "l1p_external_table";
$tdataproperty_level_2_units[".googleLikeFields"][] = "l1p_external_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "tower";
$tdataproperty_level_2_units[".googleLikeFields"][] = "unit_category_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "designation";
$tdataproperty_level_2_units[".googleLikeFields"][] = "count_rooms";
$tdataproperty_level_2_units[".googleLikeFields"][] = "unit_id";
$tdataproperty_level_2_units[".googleLikeFields"][] = "surface";
$tdataproperty_level_2_units[".googleLikeFields"][] = "surface_measurment_unit";
$tdataproperty_level_2_units[".googleLikeFields"][] = "description";
$tdataproperty_level_2_units[".googleLikeFields"][] = "mgt_cny_default_assignee";
$tdataproperty_level_2_units[".googleLikeFields"][] = "landlord_default_assignee";
$tdataproperty_level_2_units[".googleLikeFields"][] = "tenant_default_assignee";
$tdataproperty_level_2_units[".googleLikeFields"][] = "agent_default_assignee";
$tdataproperty_level_2_units[".googleLikeFields"][] = "building_system_id";



$tdataproperty_level_2_units[".tableType"] = "list";

$tdataproperty_level_2_units[".printerPageOrientation"] = 0;
$tdataproperty_level_2_units[".nPrinterPageScale"] = 100;

$tdataproperty_level_2_units[".nPrinterSplitRecords"] = 40;

$tdataproperty_level_2_units[".geocodingEnabled"] = false;










$tdataproperty_level_2_units[".pageSize"] = 20;

$tdataproperty_level_2_units[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproperty_level_2_units[".strOrderBy"] = $tstrOrderBy;

$tdataproperty_level_2_units[".orderindexes"] = array();

$tdataproperty_level_2_units[".sqlHead"] = "SELECT system_id_unit,  	create_api_request_id,  	edit_api_request_id,  	external_id,  	external_system_id,  	external_table,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	is_update_on_duplicate_key,  	organization_id,  	activated_by_id,  	is_obsolete,  	is_creation_needed_in_unee_t,  	do_not_insert,  	unee_t_unit_type,  	l1p_external_system,  	l1p_external_table,  	l1p_external_id,  	tower,  	unit_category_id,  	designation,  	count_rooms,  	unit_id,  	surface,  	surface_measurment_unit,  	description,  	mgt_cny_default_assignee,  	landlord_default_assignee,  	tenant_default_assignee,  	agent_default_assignee,  	building_system_id";
$tdataproperty_level_2_units[".sqlFrom"] = "FROM property_level_2_units";
$tdataproperty_level_2_units[".sqlWhereExpr"] = "";
$tdataproperty_level_2_units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproperty_level_2_units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproperty_level_2_units[".arrGroupsPerPage"] = $arrGPP;

$tdataproperty_level_2_units[".highlightSearchResults"] = true;

$tableKeysproperty_level_2_units = array();
$tableKeysproperty_level_2_units[] = "external_id";
$tableKeysproperty_level_2_units[] = "external_system_id";
$tableKeysproperty_level_2_units[] = "external_table";
$tableKeysproperty_level_2_units[] = "organization_id";
$tdataproperty_level_2_units[".Keys"] = $tableKeysproperty_level_2_units;


$tdataproperty_level_2_units[".hideMobileList"] = array();




//	system_id_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "system_id_unit";
	$fdata["GoodName"] = "system_id_unit";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","system_id_unit");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "system_id_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "system_id_unit";

	
	
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


	$tdataproperty_level_2_units["system_id_unit"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "system_id_unit";
//	create_api_request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "create_api_request_id";
	$fdata["GoodName"] = "create_api_request_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","create_api_request_id");
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


	$tdataproperty_level_2_units["create_api_request_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "create_api_request_id";
//	edit_api_request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edit_api_request_id";
	$fdata["GoodName"] = "edit_api_request_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","edit_api_request_id");
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


	$tdataproperty_level_2_units["edit_api_request_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "edit_api_request_id";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_id";

	
	
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


	$tdataproperty_level_2_units["external_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_system_id";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataproperty_level_2_units["external_system_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","external_table");
	$fdata["FieldType"] = 13;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "external_table";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataproperty_level_2_units["external_table"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","syst_created_datetime");
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


	$tdataproperty_level_2_units["syst_created_datetime"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","creation_system_id");
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


	$tdataproperty_level_2_units["creation_system_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","created_by_id");
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


	$tdataproperty_level_2_units["created_by_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","creation_method");
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


	$tdataproperty_level_2_units["creation_method"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","syst_updated_datetime");
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


	$tdataproperty_level_2_units["syst_updated_datetime"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","update_system_id");
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


	$tdataproperty_level_2_units["update_system_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","updated_by_id");
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


	$tdataproperty_level_2_units["updated_by_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","update_method");
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


	$tdataproperty_level_2_units["update_method"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "update_method";
//	is_update_on_duplicate_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_update_on_duplicate_key";
	$fdata["GoodName"] = "is_update_on_duplicate_key";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","is_update_on_duplicate_key");
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


	$tdataproperty_level_2_units["is_update_on_duplicate_key"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "is_update_on_duplicate_key";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","organization_id");
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


	$tdataproperty_level_2_units["organization_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "organization_id";
//	activated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "activated_by_id";
	$fdata["GoodName"] = "activated_by_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","activated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "activated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "activated_by_id";

	
	
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


	$tdataproperty_level_2_units["activated_by_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "activated_by_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","is_obsolete");
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


	$tdataproperty_level_2_units["is_obsolete"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "is_obsolete";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","is_creation_needed_in_unee_t");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_creation_needed_in_unee_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_creation_needed_in_unee_t";

	
	
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


	$tdataproperty_level_2_units["is_creation_needed_in_unee_t"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","do_not_insert");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "do_not_insert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "do_not_insert";

	
	
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


	$tdataproperty_level_2_units["do_not_insert"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "do_not_insert";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","unee_t_unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_unit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unee_t_unit_type";

	
	
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
	$edata["LookupTable"] = "ut_unit_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "designation";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "designation";

	

	
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


	$tdataproperty_level_2_units["unee_t_unit_type"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "unee_t_unit_type";
//	l1p_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "l1p_external_system";
	$fdata["GoodName"] = "l1p_external_system";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","l1p_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "l1p_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "l1p_external_system";

	
	
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


	$tdataproperty_level_2_units["l1p_external_system"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "l1p_external_system";
//	l1p_external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "l1p_external_table";
	$fdata["GoodName"] = "l1p_external_table";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","l1p_external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "l1p_external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "l1p_external_table";

	
	
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


	$tdataproperty_level_2_units["l1p_external_table"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "l1p_external_table";
//	l1p_external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "l1p_external_id";
	$fdata["GoodName"] = "l1p_external_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","l1p_external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "l1p_external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "l1p_external_id";

	
	
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


	$tdataproperty_level_2_units["l1p_external_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "l1p_external_id";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","tower");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tower";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tower";

	
	
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


	$tdataproperty_level_2_units["tower"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "tower";
//	unit_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "unit_category_id";
	$fdata["GoodName"] = "unit_category_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","unit_category_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unit_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_category_id";

	
	
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


	$tdataproperty_level_2_units["unit_category_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "unit_category_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
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


	$tdataproperty_level_2_units["designation"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "designation";
//	count_rooms
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "count_rooms";
	$fdata["GoodName"] = "count_rooms";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","count_rooms");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "count_rooms";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count_rooms";

	
	
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


	$tdataproperty_level_2_units["count_rooms"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "count_rooms";
//	unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "unit_id";
	$fdata["GoodName"] = "unit_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unit_id";

	
	
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


	$tdataproperty_level_2_units["unit_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "unit_id";
//	surface
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "surface";
	$fdata["GoodName"] = "surface";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","surface");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "surface";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surface";

	
	
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


	$tdataproperty_level_2_units["surface"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "surface";
//	surface_measurment_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "surface_measurment_unit";
	$fdata["GoodName"] = "surface_measurment_unit";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","surface_measurment_unit");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "surface_measurment_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "surface_measurment_unit";

	
	
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


	$tdataproperty_level_2_units["surface_measurment_unit"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "surface_measurment_unit";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproperty_level_2_units["description"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "description";
//	mgt_cny_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "mgt_cny_default_assignee";
	$fdata["GoodName"] = "mgt_cny_default_assignee";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","mgt_cny_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mgt_cny_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mgt_cny_default_assignee";

	
	
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


	$tdataproperty_level_2_units["mgt_cny_default_assignee"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "mgt_cny_default_assignee";
//	landlord_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "landlord_default_assignee";
	$fdata["GoodName"] = "landlord_default_assignee";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","landlord_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "landlord_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "landlord_default_assignee";

	
	
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


	$tdataproperty_level_2_units["landlord_default_assignee"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "landlord_default_assignee";
//	tenant_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "tenant_default_assignee";
	$fdata["GoodName"] = "tenant_default_assignee";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","tenant_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "tenant_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tenant_default_assignee";

	
	
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


	$tdataproperty_level_2_units["tenant_default_assignee"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "tenant_default_assignee";
//	agent_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "agent_default_assignee";
	$fdata["GoodName"] = "agent_default_assignee";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","agent_default_assignee");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "agent_default_assignee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agent_default_assignee";

	
	
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


	$tdataproperty_level_2_units["agent_default_assignee"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "agent_default_assignee";
//	building_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "building_system_id";
	$fdata["GoodName"] = "building_system_id";
	$fdata["ownerTable"] = "property_level_2_units";
	$fdata["Label"] = GetFieldLabel("property_level_2_units","building_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "building_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "building_system_id";

	
	
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
	$edata["LookupTable"] = "property_level_1_buildings";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_building";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_building";

	

	
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


	$tdataproperty_level_2_units["building_system_id"] = $fdata;
		$tdataproperty_level_2_units[".searchableFields"][] = "building_system_id";


$tables_data["property_level_2_units"]=&$tdataproperty_level_2_units;
$field_labels["property_level_2_units"] = &$fieldLabelsproperty_level_2_units;
$fieldToolTips["property_level_2_units"] = &$fieldToolTipsproperty_level_2_units;
$placeHolders["property_level_2_units"] = &$placeHoldersproperty_level_2_units;
$page_titles["property_level_2_units"] = &$pageTitlesproperty_level_2_units;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["property_level_2_units"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["property_level_2_units"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_property_level_2_units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "system_id_unit,  	create_api_request_id,  	edit_api_request_id,  	external_id,  	external_system_id,  	external_table,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	is_update_on_duplicate_key,  	organization_id,  	activated_by_id,  	is_obsolete,  	is_creation_needed_in_unee_t,  	do_not_insert,  	unee_t_unit_type,  	l1p_external_system,  	l1p_external_table,  	l1p_external_id,  	tower,  	unit_category_id,  	designation,  	count_rooms,  	unit_id,  	surface,  	surface_measurment_unit,  	description,  	mgt_cny_default_assignee,  	landlord_default_assignee,  	tenant_default_assignee,  	agent_default_assignee,  	building_system_id";
$proto0["m_strFrom"] = "FROM property_level_2_units";
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
	"m_strName" => "system_id_unit",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto6["m_sql"] = "system_id_unit";
$proto6["m_srcTableName"] = "property_level_2_units";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "create_api_request_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto8["m_sql"] = "create_api_request_id";
$proto8["m_srcTableName"] = "property_level_2_units";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_api_request_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto10["m_sql"] = "edit_api_request_id";
$proto10["m_srcTableName"] = "property_level_2_units";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto12["m_sql"] = "external_id";
$proto12["m_srcTableName"] = "property_level_2_units";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto14["m_sql"] = "external_system_id";
$proto14["m_srcTableName"] = "property_level_2_units";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto16["m_sql"] = "external_table";
$proto16["m_srcTableName"] = "property_level_2_units";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto18["m_sql"] = "syst_created_datetime";
$proto18["m_srcTableName"] = "property_level_2_units";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto20["m_sql"] = "creation_system_id";
$proto20["m_srcTableName"] = "property_level_2_units";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto22["m_sql"] = "created_by_id";
$proto22["m_srcTableName"] = "property_level_2_units";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto24["m_sql"] = "creation_method";
$proto24["m_srcTableName"] = "property_level_2_units";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto26["m_sql"] = "syst_updated_datetime";
$proto26["m_srcTableName"] = "property_level_2_units";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto28["m_sql"] = "update_system_id";
$proto28["m_srcTableName"] = "property_level_2_units";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto30["m_sql"] = "updated_by_id";
$proto30["m_srcTableName"] = "property_level_2_units";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto32["m_sql"] = "update_method";
$proto32["m_srcTableName"] = "property_level_2_units";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_on_duplicate_key",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto34["m_sql"] = "is_update_on_duplicate_key";
$proto34["m_srcTableName"] = "property_level_2_units";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto36["m_sql"] = "organization_id";
$proto36["m_srcTableName"] = "property_level_2_units";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "activated_by_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto38["m_sql"] = "activated_by_id";
$proto38["m_srcTableName"] = "property_level_2_units";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto40["m_sql"] = "is_obsolete";
$proto40["m_srcTableName"] = "property_level_2_units";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto42["m_sql"] = "is_creation_needed_in_unee_t";
$proto42["m_srcTableName"] = "property_level_2_units";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto44["m_sql"] = "do_not_insert";
$proto44["m_srcTableName"] = "property_level_2_units";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto46["m_sql"] = "unee_t_unit_type";
$proto46["m_srcTableName"] = "property_level_2_units";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "l1p_external_system",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto48["m_sql"] = "l1p_external_system";
$proto48["m_srcTableName"] = "property_level_2_units";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "l1p_external_table",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto50["m_sql"] = "l1p_external_table";
$proto50["m_srcTableName"] = "property_level_2_units";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "l1p_external_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto52["m_sql"] = "l1p_external_id";
$proto52["m_srcTableName"] = "property_level_2_units";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto54["m_sql"] = "tower";
$proto54["m_srcTableName"] = "property_level_2_units";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_category_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto56["m_sql"] = "unit_category_id";
$proto56["m_srcTableName"] = "property_level_2_units";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto58["m_sql"] = "designation";
$proto58["m_srcTableName"] = "property_level_2_units";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "count_rooms",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto60["m_sql"] = "count_rooms";
$proto60["m_srcTableName"] = "property_level_2_units";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "unit_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto62["m_sql"] = "unit_id";
$proto62["m_srcTableName"] = "property_level_2_units";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "surface",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto64["m_sql"] = "surface";
$proto64["m_srcTableName"] = "property_level_2_units";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "surface_measurment_unit",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto66["m_sql"] = "surface_measurment_unit";
$proto66["m_srcTableName"] = "property_level_2_units";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto68["m_sql"] = "description";
$proto68["m_srcTableName"] = "property_level_2_units";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "mgt_cny_default_assignee",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto70["m_sql"] = "mgt_cny_default_assignee";
$proto70["m_srcTableName"] = "property_level_2_units";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "landlord_default_assignee",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto72["m_sql"] = "landlord_default_assignee";
$proto72["m_srcTableName"] = "property_level_2_units";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "tenant_default_assignee",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto74["m_sql"] = "tenant_default_assignee";
$proto74["m_srcTableName"] = "property_level_2_units";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "agent_default_assignee",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto76["m_sql"] = "agent_default_assignee";
$proto76["m_srcTableName"] = "property_level_2_units";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "building_system_id",
	"m_strTable" => "property_level_2_units",
	"m_srcTableName" => "property_level_2_units"
));

$proto78["m_sql"] = "building_system_id";
$proto78["m_srcTableName"] = "property_level_2_units";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto80=array();
$proto80["m_link"] = "SQLL_MAIN";
			$proto81=array();
$proto81["m_strName"] = "property_level_2_units";
$proto81["m_srcTableName"] = "property_level_2_units";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "system_id_unit";
$proto81["m_columns"][] = "create_api_request_id";
$proto81["m_columns"][] = "edit_api_request_id";
$proto81["m_columns"][] = "external_id";
$proto81["m_columns"][] = "external_system_id";
$proto81["m_columns"][] = "external_table";
$proto81["m_columns"][] = "syst_created_datetime";
$proto81["m_columns"][] = "creation_system_id";
$proto81["m_columns"][] = "created_by_id";
$proto81["m_columns"][] = "creation_method";
$proto81["m_columns"][] = "syst_updated_datetime";
$proto81["m_columns"][] = "update_system_id";
$proto81["m_columns"][] = "updated_by_id";
$proto81["m_columns"][] = "update_method";
$proto81["m_columns"][] = "is_update_on_duplicate_key";
$proto81["m_columns"][] = "organization_id";
$proto81["m_columns"][] = "activated_by_id";
$proto81["m_columns"][] = "is_obsolete";
$proto81["m_columns"][] = "is_creation_needed_in_unee_t";
$proto81["m_columns"][] = "do_not_insert";
$proto81["m_columns"][] = "unee_t_unit_type";
$proto81["m_columns"][] = "l1p_external_system";
$proto81["m_columns"][] = "l1p_external_table";
$proto81["m_columns"][] = "l1p_external_id";
$proto81["m_columns"][] = "tower";
$proto81["m_columns"][] = "unit_category_id";
$proto81["m_columns"][] = "designation";
$proto81["m_columns"][] = "count_rooms";
$proto81["m_columns"][] = "unit_id";
$proto81["m_columns"][] = "surface";
$proto81["m_columns"][] = "surface_measurment_unit";
$proto81["m_columns"][] = "description";
$proto81["m_columns"][] = "mgt_cny_default_assignee";
$proto81["m_columns"][] = "landlord_default_assignee";
$proto81["m_columns"][] = "tenant_default_assignee";
$proto81["m_columns"][] = "agent_default_assignee";
$proto81["m_columns"][] = "building_system_id";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "property_level_2_units";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "property_level_2_units";
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="property_level_2_units";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_property_level_2_units = createSqlQuery_property_level_2_units();


	
					
;

																																					

$tdataproperty_level_2_units[".sqlquery"] = $queryData_property_level_2_units;

$tableEvents["property_level_2_units"] = new eventsBase;
$tdataproperty_level_2_units[".hasEvents"] = false;

?>