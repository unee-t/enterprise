<?php



$tdataproperty_level_1_buildings = array();
$tdataproperty_level_1_buildings[".searchableFields"] = array();
$tdataproperty_level_1_buildings[".ShortName"] = "property_level_1_buildings";
$tdataproperty_level_1_buildings[".OwnerID"] = "";
$tdataproperty_level_1_buildings[".OriginalTable"] = "property_level_1_buildings";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataproperty_level_1_buildings[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataproperty_level_1_buildings[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataproperty_level_1_buildings[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsproperty_level_1_buildings = array();
$fieldToolTipsproperty_level_1_buildings = array();
$pageTitlesproperty_level_1_buildings = array();
$placeHoldersproperty_level_1_buildings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproperty_level_1_buildings["English"] = array();
	$fieldToolTipsproperty_level_1_buildings["English"] = array();
	$placeHoldersproperty_level_1_buildings["English"] = array();
	$pageTitlesproperty_level_1_buildings["English"] = array();
	$fieldLabelsproperty_level_1_buildings["English"]["id_building"] = "Id Building";
	$fieldToolTipsproperty_level_1_buildings["English"]["id_building"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["id_building"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["external_id"] = "External Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["external_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["external_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["external_system_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["external_system_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["external_table"] = "External Table";
	$fieldToolTipsproperty_level_1_buildings["English"]["external_table"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["external_table"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsproperty_level_1_buildings["English"]["syst_created_datetime"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["syst_created_datetime"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["creation_system_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["creation_system_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["created_by_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["created_by_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsproperty_level_1_buildings["English"]["creation_method"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["creation_method"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsproperty_level_1_buildings["English"]["syst_updated_datetime"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["syst_updated_datetime"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["update_system_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["update_system_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["updated_by_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["updated_by_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["update_method"] = "Update Method";
	$fieldToolTipsproperty_level_1_buildings["English"]["update_method"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["update_method"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["organization_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["organization_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsproperty_level_1_buildings["English"]["is_obsolete"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["is_obsolete"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["order"] = "Order";
	$fieldToolTipsproperty_level_1_buildings["English"]["order"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["order"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["area_id"] = "Area Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["area_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["area_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["is_creation_needed_in_unee_t"] = "Is Creation Needed In Unee T";
	$fieldToolTipsproperty_level_1_buildings["English"]["is_creation_needed_in_unee_t"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["is_creation_needed_in_unee_t"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["do_not_insert"] = "Do Not Insert";
	$fieldToolTipsproperty_level_1_buildings["English"]["do_not_insert"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["do_not_insert"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["unee_t_unit_type"] = "Unee T Unit Type";
	$fieldToolTipsproperty_level_1_buildings["English"]["unee_t_unit_type"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["unee_t_unit_type"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["designation"] = "Designation";
	$fieldToolTipsproperty_level_1_buildings["English"]["designation"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["designation"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["tower"] = "Tower";
	$fieldToolTipsproperty_level_1_buildings["English"]["tower"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["tower"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["address_1"] = "Address 1";
	$fieldToolTipsproperty_level_1_buildings["English"]["address_1"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["address_1"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["address_2"] = "Address 2";
	$fieldToolTipsproperty_level_1_buildings["English"]["address_2"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["address_2"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["zip_postal_code"] = "Zip Postal Code";
	$fieldToolTipsproperty_level_1_buildings["English"]["zip_postal_code"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["zip_postal_code"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["state"] = "State";
	$fieldToolTipsproperty_level_1_buildings["English"]["state"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["state"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["city"] = "City";
	$fieldToolTipsproperty_level_1_buildings["English"]["city"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["city"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["country_code"] = "Country Code";
	$fieldToolTipsproperty_level_1_buildings["English"]["country_code"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["country_code"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["description"] = "Description";
	$fieldToolTipsproperty_level_1_buildings["English"]["description"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["description"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["mgt_cny_default_assignee"] = "Mgt Cny Default Assignee";
	$fieldToolTipsproperty_level_1_buildings["English"]["mgt_cny_default_assignee"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["mgt_cny_default_assignee"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["landlord_default_assignee"] = "Landlord Default Assignee";
	$fieldToolTipsproperty_level_1_buildings["English"]["landlord_default_assignee"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["landlord_default_assignee"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["tenant_default_assignee"] = "Tenant Default Assignee";
	$fieldToolTipsproperty_level_1_buildings["English"]["tenant_default_assignee"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["tenant_default_assignee"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["agent_default_assignee"] = "Agent Default Assignee";
	$fieldToolTipsproperty_level_1_buildings["English"]["agent_default_assignee"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["agent_default_assignee"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["create_api_request_id"] = "Create Api Request Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["create_api_request_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["create_api_request_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["edit_api_request_id"] = "Edit Api Request Id";
	$fieldToolTipsproperty_level_1_buildings["English"]["edit_api_request_id"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["edit_api_request_id"] = "";
	$fieldLabelsproperty_level_1_buildings["English"]["is_update_on_duplicate_key"] = "Is Update On Duplicate Key";
	$fieldToolTipsproperty_level_1_buildings["English"]["is_update_on_duplicate_key"] = "";
	$placeHoldersproperty_level_1_buildings["English"]["is_update_on_duplicate_key"] = "";
	if (count($fieldToolTipsproperty_level_1_buildings["English"]))
		$tdataproperty_level_1_buildings[".isUseToolTips"] = true;
}


	$tdataproperty_level_1_buildings[".NCSearch"] = true;



$tdataproperty_level_1_buildings[".shortTableName"] = "property_level_1_buildings";
$tdataproperty_level_1_buildings[".nSecOptions"] = 0;

$tdataproperty_level_1_buildings[".mainTableOwnerID"] = "";
$tdataproperty_level_1_buildings[".entityType"] = 0;

$tdataproperty_level_1_buildings[".strOriginalTableName"] = "property_level_1_buildings";

		 



$tdataproperty_level_1_buildings[".showAddInPopup"] = false;

$tdataproperty_level_1_buildings[".showEditInPopup"] = false;

$tdataproperty_level_1_buildings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproperty_level_1_buildings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproperty_level_1_buildings[".listAjax"] = false;
//	temporary
$tdataproperty_level_1_buildings[".listAjax"] = false;

	$tdataproperty_level_1_buildings[".audit"] = false;

	$tdataproperty_level_1_buildings[".locking"] = false;


$pages = $tdataproperty_level_1_buildings[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproperty_level_1_buildings[".edit"] = true;
	$tdataproperty_level_1_buildings[".afterEditAction"] = 1;
	$tdataproperty_level_1_buildings[".closePopupAfterEdit"] = 1;
	$tdataproperty_level_1_buildings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproperty_level_1_buildings[".add"] = true;
$tdataproperty_level_1_buildings[".afterAddAction"] = 1;
$tdataproperty_level_1_buildings[".closePopupAfterAdd"] = 1;
$tdataproperty_level_1_buildings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproperty_level_1_buildings[".list"] = true;
}



$tdataproperty_level_1_buildings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproperty_level_1_buildings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproperty_level_1_buildings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproperty_level_1_buildings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproperty_level_1_buildings[".printFriendly"] = true;
}



$tdataproperty_level_1_buildings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproperty_level_1_buildings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproperty_level_1_buildings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproperty_level_1_buildings[".isUseAjaxSuggest"] = true;

$tdataproperty_level_1_buildings[".rowHighlite"] = true;





$tdataproperty_level_1_buildings[".ajaxCodeSnippetAdded"] = false;

$tdataproperty_level_1_buildings[".buttonsAdded"] = false;

$tdataproperty_level_1_buildings[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproperty_level_1_buildings[".isUseTimeForSearch"] = false;


$tdataproperty_level_1_buildings[".badgeColor"] = "008B8B";


$tdataproperty_level_1_buildings[".allSearchFields"] = array();
$tdataproperty_level_1_buildings[".filterFields"] = array();
$tdataproperty_level_1_buildings[".requiredSearchFields"] = array();

$tdataproperty_level_1_buildings[".googleLikeFields"] = array();
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "id_building";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "create_api_request_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "edit_api_request_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "external_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "external_system_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "external_table";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "syst_created_datetime";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "creation_system_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "created_by_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "creation_method";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "syst_updated_datetime";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "update_system_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "updated_by_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "update_method";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "is_update_on_duplicate_key";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "organization_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "is_obsolete";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "order";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "area_id";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "is_creation_needed_in_unee_t";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "do_not_insert";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "unee_t_unit_type";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "designation";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "tower";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "address_1";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "address_2";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "zip_postal_code";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "state";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "city";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "country_code";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "description";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "mgt_cny_default_assignee";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "landlord_default_assignee";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "tenant_default_assignee";
$tdataproperty_level_1_buildings[".googleLikeFields"][] = "agent_default_assignee";



$tdataproperty_level_1_buildings[".tableType"] = "list";

$tdataproperty_level_1_buildings[".printerPageOrientation"] = 0;
$tdataproperty_level_1_buildings[".nPrinterPageScale"] = 100;

$tdataproperty_level_1_buildings[".nPrinterSplitRecords"] = 40;

$tdataproperty_level_1_buildings[".geocodingEnabled"] = false;










$tdataproperty_level_1_buildings[".pageSize"] = 20;

$tdataproperty_level_1_buildings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproperty_level_1_buildings[".strOrderBy"] = $tstrOrderBy;

$tdataproperty_level_1_buildings[".orderindexes"] = array();

$tdataproperty_level_1_buildings[".sqlHead"] = "SELECT id_building,  	create_api_request_id,  	edit_api_request_id,  	external_id,  	external_system_id,  	external_table,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	is_update_on_duplicate_key,  	organization_id,  	is_obsolete,  	`order`,  	area_id,  	is_creation_needed_in_unee_t,  	do_not_insert,  	unee_t_unit_type,  	designation,  	tower,  	address_1,  	address_2,  	zip_postal_code,  	`state`,  	city,  	country_code,  	description,  	mgt_cny_default_assignee,  	landlord_default_assignee,  	tenant_default_assignee,  	agent_default_assignee";
$tdataproperty_level_1_buildings[".sqlFrom"] = "FROM property_level_1_buildings";
$tdataproperty_level_1_buildings[".sqlWhereExpr"] = "";
$tdataproperty_level_1_buildings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproperty_level_1_buildings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproperty_level_1_buildings[".arrGroupsPerPage"] = $arrGPP;

$tdataproperty_level_1_buildings[".highlightSearchResults"] = true;

$tableKeysproperty_level_1_buildings = array();
$tableKeysproperty_level_1_buildings[] = "external_id";
$tableKeysproperty_level_1_buildings[] = "external_system_id";
$tableKeysproperty_level_1_buildings[] = "external_table";
$tableKeysproperty_level_1_buildings[] = "organization_id";
$tableKeysproperty_level_1_buildings[] = "tower";
$tdataproperty_level_1_buildings[".Keys"] = $tableKeysproperty_level_1_buildings;


$tdataproperty_level_1_buildings[".hideMobileList"] = array();




//	id_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_building";
	$fdata["GoodName"] = "id_building";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","id_building");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_building";

	
	
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


	$tdataproperty_level_1_buildings["id_building"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "id_building";
//	create_api_request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "create_api_request_id";
	$fdata["GoodName"] = "create_api_request_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","create_api_request_id");
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


	$tdataproperty_level_1_buildings["create_api_request_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "create_api_request_id";
//	edit_api_request_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "edit_api_request_id";
	$fdata["GoodName"] = "edit_api_request_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","edit_api_request_id");
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


	$tdataproperty_level_1_buildings["edit_api_request_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "edit_api_request_id";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","external_id");
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


	$tdataproperty_level_1_buildings["external_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","external_system_id");
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


	$tdataproperty_level_1_buildings["external_system_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

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


	$tdataproperty_level_1_buildings["external_table"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "external_table";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","syst_created_datetime");
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


	$tdataproperty_level_1_buildings["syst_created_datetime"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","creation_system_id");
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


	$tdataproperty_level_1_buildings["creation_system_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","created_by_id");
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


	$tdataproperty_level_1_buildings["created_by_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","creation_method");
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


	$tdataproperty_level_1_buildings["creation_method"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","syst_updated_datetime");
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


	$tdataproperty_level_1_buildings["syst_updated_datetime"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","update_system_id");
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


	$tdataproperty_level_1_buildings["update_system_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","updated_by_id");
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


	$tdataproperty_level_1_buildings["updated_by_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","update_method");
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


	$tdataproperty_level_1_buildings["update_method"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "update_method";
//	is_update_on_duplicate_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_update_on_duplicate_key";
	$fdata["GoodName"] = "is_update_on_duplicate_key";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","is_update_on_duplicate_key");
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


	$tdataproperty_level_1_buildings["is_update_on_duplicate_key"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "is_update_on_duplicate_key";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","organization_id");
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


	$tdataproperty_level_1_buildings["organization_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "organization_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","is_obsolete");
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


	$tdataproperty_level_1_buildings["is_obsolete"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "is_obsolete";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","order");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`order`";

	
	
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


	$tdataproperty_level_1_buildings["order"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "order";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","area_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "area_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area_id";

	
	
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
	$edata["LookupTable"] = "property_groups_areas";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_area";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_area";

	

	
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


	$tdataproperty_level_1_buildings["area_id"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "area_id";
//	is_creation_needed_in_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "is_creation_needed_in_unee_t";
	$fdata["GoodName"] = "is_creation_needed_in_unee_t";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","is_creation_needed_in_unee_t");
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


	$tdataproperty_level_1_buildings["is_creation_needed_in_unee_t"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "is_creation_needed_in_unee_t";
//	do_not_insert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "do_not_insert";
	$fdata["GoodName"] = "do_not_insert";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","do_not_insert");
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


	$tdataproperty_level_1_buildings["do_not_insert"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "do_not_insert";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","unee_t_unit_type");
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


	$tdataproperty_level_1_buildings["unee_t_unit_type"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "unee_t_unit_type";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","designation");
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


	$tdataproperty_level_1_buildings["designation"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "designation";
//	tower
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tower";
	$fdata["GoodName"] = "tower";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","tower");
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


	$tdataproperty_level_1_buildings["tower"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "tower";
//	address_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "address_1";
	$fdata["GoodName"] = "address_1";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","address_1");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "address_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_1";

	
	
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


	$tdataproperty_level_1_buildings["address_1"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "address_1";
//	address_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "address_2";
	$fdata["GoodName"] = "address_2";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","address_2");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "address_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_2";

	
	
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


	$tdataproperty_level_1_buildings["address_2"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "address_2";
//	zip_postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "zip_postal_code";
	$fdata["GoodName"] = "zip_postal_code";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","zip_postal_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "zip_postal_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "zip_postal_code";

	
	
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


	$tdataproperty_level_1_buildings["zip_postal_code"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "zip_postal_code";
//	state
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "state";
	$fdata["GoodName"] = "state";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","state");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "state";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`state`";

	
	
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


	$tdataproperty_level_1_buildings["state"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "state";
//	city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "city";
	$fdata["GoodName"] = "city";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","city");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "city";

	
	
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


	$tdataproperty_level_1_buildings["city"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "city";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_code";

	
	
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


	$tdataproperty_level_1_buildings["country_code"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "country_code";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","description");
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


	$tdataproperty_level_1_buildings["description"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "description";
//	mgt_cny_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "mgt_cny_default_assignee";
	$fdata["GoodName"] = "mgt_cny_default_assignee";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","mgt_cny_default_assignee");
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


	$tdataproperty_level_1_buildings["mgt_cny_default_assignee"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "mgt_cny_default_assignee";
//	landlord_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "landlord_default_assignee";
	$fdata["GoodName"] = "landlord_default_assignee";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","landlord_default_assignee");
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


	$tdataproperty_level_1_buildings["landlord_default_assignee"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "landlord_default_assignee";
//	tenant_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "tenant_default_assignee";
	$fdata["GoodName"] = "tenant_default_assignee";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","tenant_default_assignee");
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


	$tdataproperty_level_1_buildings["tenant_default_assignee"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "tenant_default_assignee";
//	agent_default_assignee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "agent_default_assignee";
	$fdata["GoodName"] = "agent_default_assignee";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("property_level_1_buildings","agent_default_assignee");
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


	$tdataproperty_level_1_buildings["agent_default_assignee"] = $fdata;
		$tdataproperty_level_1_buildings[".searchableFields"][] = "agent_default_assignee";


$tables_data["property_level_1_buildings"]=&$tdataproperty_level_1_buildings;
$field_labels["property_level_1_buildings"] = &$fieldLabelsproperty_level_1_buildings;
$fieldToolTips["property_level_1_buildings"] = &$fieldToolTipsproperty_level_1_buildings;
$placeHolders["property_level_1_buildings"] = &$placeHoldersproperty_level_1_buildings;
$page_titles["property_level_1_buildings"] = &$pageTitlesproperty_level_1_buildings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["property_level_1_buildings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["property_level_1_buildings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_property_level_1_buildings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_building,  	create_api_request_id,  	edit_api_request_id,  	external_id,  	external_system_id,  	external_table,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	creation_method,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	is_update_on_duplicate_key,  	organization_id,  	is_obsolete,  	`order`,  	area_id,  	is_creation_needed_in_unee_t,  	do_not_insert,  	unee_t_unit_type,  	designation,  	tower,  	address_1,  	address_2,  	zip_postal_code,  	`state`,  	city,  	country_code,  	description,  	mgt_cny_default_assignee,  	landlord_default_assignee,  	tenant_default_assignee,  	agent_default_assignee";
$proto0["m_strFrom"] = "FROM property_level_1_buildings";
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
	"m_strName" => "id_building",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto6["m_sql"] = "id_building";
$proto6["m_srcTableName"] = "property_level_1_buildings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "create_api_request_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto8["m_sql"] = "create_api_request_id";
$proto8["m_srcTableName"] = "property_level_1_buildings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_api_request_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto10["m_sql"] = "edit_api_request_id";
$proto10["m_srcTableName"] = "property_level_1_buildings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto12["m_sql"] = "external_id";
$proto12["m_srcTableName"] = "property_level_1_buildings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto14["m_sql"] = "external_system_id";
$proto14["m_srcTableName"] = "property_level_1_buildings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto16["m_sql"] = "external_table";
$proto16["m_srcTableName"] = "property_level_1_buildings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto18["m_sql"] = "syst_created_datetime";
$proto18["m_srcTableName"] = "property_level_1_buildings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto20["m_sql"] = "creation_system_id";
$proto20["m_srcTableName"] = "property_level_1_buildings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto22["m_sql"] = "created_by_id";
$proto22["m_srcTableName"] = "property_level_1_buildings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto24["m_sql"] = "creation_method";
$proto24["m_srcTableName"] = "property_level_1_buildings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto26["m_sql"] = "syst_updated_datetime";
$proto26["m_srcTableName"] = "property_level_1_buildings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto28["m_sql"] = "update_system_id";
$proto28["m_srcTableName"] = "property_level_1_buildings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto30["m_sql"] = "updated_by_id";
$proto30["m_srcTableName"] = "property_level_1_buildings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto32["m_sql"] = "update_method";
$proto32["m_srcTableName"] = "property_level_1_buildings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_on_duplicate_key",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto34["m_sql"] = "is_update_on_duplicate_key";
$proto34["m_srcTableName"] = "property_level_1_buildings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto36["m_sql"] = "organization_id";
$proto36["m_srcTableName"] = "property_level_1_buildings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto38["m_sql"] = "is_obsolete";
$proto38["m_srcTableName"] = "property_level_1_buildings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto40["m_sql"] = "`order`";
$proto40["m_srcTableName"] = "property_level_1_buildings";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto42["m_sql"] = "area_id";
$proto42["m_srcTableName"] = "property_level_1_buildings";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "is_creation_needed_in_unee_t",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto44["m_sql"] = "is_creation_needed_in_unee_t";
$proto44["m_srcTableName"] = "property_level_1_buildings";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "do_not_insert",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto46["m_sql"] = "do_not_insert";
$proto46["m_srcTableName"] = "property_level_1_buildings";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto48["m_sql"] = "unee_t_unit_type";
$proto48["m_srcTableName"] = "property_level_1_buildings";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto50["m_sql"] = "designation";
$proto50["m_srcTableName"] = "property_level_1_buildings";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tower",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto52["m_sql"] = "tower";
$proto52["m_srcTableName"] = "property_level_1_buildings";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "address_1",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto54["m_sql"] = "address_1";
$proto54["m_srcTableName"] = "property_level_1_buildings";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "address_2",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto56["m_sql"] = "address_2";
$proto56["m_srcTableName"] = "property_level_1_buildings";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "zip_postal_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto58["m_sql"] = "zip_postal_code";
$proto58["m_srcTableName"] = "property_level_1_buildings";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "state",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto60["m_sql"] = "`state`";
$proto60["m_srcTableName"] = "property_level_1_buildings";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "city",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto62["m_sql"] = "city";
$proto62["m_srcTableName"] = "property_level_1_buildings";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto64["m_sql"] = "country_code";
$proto64["m_srcTableName"] = "property_level_1_buildings";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto66["m_sql"] = "description";
$proto66["m_srcTableName"] = "property_level_1_buildings";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "mgt_cny_default_assignee",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto68["m_sql"] = "mgt_cny_default_assignee";
$proto68["m_srcTableName"] = "property_level_1_buildings";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "landlord_default_assignee",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto70["m_sql"] = "landlord_default_assignee";
$proto70["m_srcTableName"] = "property_level_1_buildings";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "tenant_default_assignee",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto72["m_sql"] = "tenant_default_assignee";
$proto72["m_srcTableName"] = "property_level_1_buildings";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "agent_default_assignee",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "property_level_1_buildings"
));

$proto74["m_sql"] = "agent_default_assignee";
$proto74["m_srcTableName"] = "property_level_1_buildings";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "property_level_1_buildings";
$proto77["m_srcTableName"] = "property_level_1_buildings";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id_building";
$proto77["m_columns"][] = "create_api_request_id";
$proto77["m_columns"][] = "edit_api_request_id";
$proto77["m_columns"][] = "external_id";
$proto77["m_columns"][] = "external_system_id";
$proto77["m_columns"][] = "external_table";
$proto77["m_columns"][] = "syst_created_datetime";
$proto77["m_columns"][] = "creation_system_id";
$proto77["m_columns"][] = "created_by_id";
$proto77["m_columns"][] = "creation_method";
$proto77["m_columns"][] = "syst_updated_datetime";
$proto77["m_columns"][] = "update_system_id";
$proto77["m_columns"][] = "updated_by_id";
$proto77["m_columns"][] = "update_method";
$proto77["m_columns"][] = "is_update_on_duplicate_key";
$proto77["m_columns"][] = "organization_id";
$proto77["m_columns"][] = "is_obsolete";
$proto77["m_columns"][] = "order";
$proto77["m_columns"][] = "area_id";
$proto77["m_columns"][] = "is_creation_needed_in_unee_t";
$proto77["m_columns"][] = "do_not_insert";
$proto77["m_columns"][] = "unee_t_unit_type";
$proto77["m_columns"][] = "designation";
$proto77["m_columns"][] = "tower";
$proto77["m_columns"][] = "address_1";
$proto77["m_columns"][] = "address_2";
$proto77["m_columns"][] = "zip_postal_code";
$proto77["m_columns"][] = "state";
$proto77["m_columns"][] = "city";
$proto77["m_columns"][] = "country_code";
$proto77["m_columns"][] = "description";
$proto77["m_columns"][] = "mgt_cny_default_assignee";
$proto77["m_columns"][] = "landlord_default_assignee";
$proto77["m_columns"][] = "tenant_default_assignee";
$proto77["m_columns"][] = "agent_default_assignee";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "property_level_1_buildings";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "property_level_1_buildings";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="property_level_1_buildings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_property_level_1_buildings = createSqlQuery_property_level_1_buildings();


	
					
;

																																			

$tdataproperty_level_1_buildings[".sqlquery"] = $queryData_property_level_1_buildings;

$tableEvents["property_level_1_buildings"] = new eventsBase;
$tdataproperty_level_1_buildings[".hasEvents"] = false;

?>