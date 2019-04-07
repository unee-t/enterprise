<?php




$tdataUnee_T_Enterprise_Configuration = array();
$tdataUnee_T_Enterprise_Configuration[".searchableFields"] = array();
	$tdataUnee_T_Enterprise_Configuration[".truncateText"] = true;
	$tdataUnee_T_Enterprise_Configuration[".NumberOfChars"] = 80;
	$tdataUnee_T_Enterprise_Configuration[".ShortName"] = "Unee_T_Enterprise_Configuration";
	$tdataUnee_T_Enterprise_Configuration[".OwnerID"] = "organization_id";
	$tdataUnee_T_Enterprise_Configuration[".OriginalTable"] = "ut_external_sot_for_unee_t_objects";


$defaultPages = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );

$tdataUnee_T_Enterprise_Configuration[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataUnee_T_Enterprise_Configuration[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsUnee_T_Enterprise_Configuration = array();
$fieldToolTipsUnee_T_Enterprise_Configuration = array();
$pageTitlesUnee_T_Enterprise_Configuration = array();
$placeHoldersUnee_T_Enterprise_Configuration = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsUnee_T_Enterprise_Configuration["English"] = array();
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"] = array();
	$placeHoldersUnee_T_Enterprise_Configuration["English"] = array();
	$pageTitlesUnee_T_Enterprise_Configuration["English"] = array();
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["id_external_sot_for_unee_t"] = "ID";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["id_external_sot_for_unee_t"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["id_external_sot_for_unee_t"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["syst_created_datetime"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["syst_created_datetime"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["creation_system_id"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["creation_system_id"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["created_by_id"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["created_by_id"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["creation_method"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["creation_method"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["syst_updated_datetime"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["syst_updated_datetime"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["update_system_id"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["update_system_id"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["updated_by_id"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["updated_by_id"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["update_method"] = "Update Method";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["update_method"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["update_method"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["organization_id"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["organization_id"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["order"] = "Order";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["order"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["order"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["is_obsolete"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["is_obsolete"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["associated_mefe_user"] = "Associated Mefe User";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["associated_mefe_user"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["associated_mefe_user"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["designation"] = "Designation";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["designation"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["designation"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["description"] = "Description";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["description"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["description"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["person_table"] = "Contact Source";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["person_table"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["person_table"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["area_table"] = "Area Source";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["area_table"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["area_table"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["properties_level_1_table"] = "Properties Level 1 Source";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["properties_level_1_table"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["properties_level_1_table"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["properties_level_2_table"] = "Properties Level 2 Source";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["properties_level_2_table"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["properties_level_2_table"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["properties_level_3_table"] = "Properties Level 3 Source";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["properties_level_3_table"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["properties_level_3_table"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["properties_addresses_table"] = "Properties Addresses Source";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["properties_addresses_table"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["properties_addresses_table"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["api_key"] = "Api Key";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["api_key"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["api_key"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["revoked_datetime"] = "Revoked Datetime";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["revoked_datetime"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["revoked_datetime"] = "";
	$fieldLabelsUnee_T_Enterprise_Configuration["English"]["is_obsolete_api_key"] = "Obsolete Api Key";
	$fieldToolTipsUnee_T_Enterprise_Configuration["English"]["is_obsolete_api_key"] = "";
	$placeHoldersUnee_T_Enterprise_Configuration["English"]["is_obsolete_api_key"] = "";
	if (count($fieldToolTipsUnee_T_Enterprise_Configuration["English"]))
		$tdataUnee_T_Enterprise_Configuration[".isUseToolTips"] = true;
}


	$tdataUnee_T_Enterprise_Configuration[".NCSearch"] = true;



$tdataUnee_T_Enterprise_Configuration[".shortTableName"] = "Unee_T_Enterprise_Configuration";
$tdataUnee_T_Enterprise_Configuration[".nSecOptions"] = 1;

$tdataUnee_T_Enterprise_Configuration[".mainTableOwnerID"] = "organization_id";
$tdataUnee_T_Enterprise_Configuration[".entityType"] = 1;

$tdataUnee_T_Enterprise_Configuration[".strOriginalTableName"] = "ut_external_sot_for_unee_t_objects";

		 



$tdataUnee_T_Enterprise_Configuration[".showAddInPopup"] = false;

$tdataUnee_T_Enterprise_Configuration[".showEditInPopup"] = false;

$tdataUnee_T_Enterprise_Configuration[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataUnee_T_Enterprise_Configuration[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataUnee_T_Enterprise_Configuration[".listAjax"] = true;
//	temporary
$tdataUnee_T_Enterprise_Configuration[".listAjax"] = false;

	$tdataUnee_T_Enterprise_Configuration[".audit"] = false;

	$tdataUnee_T_Enterprise_Configuration[".locking"] = false;


$pages = $tdataUnee_T_Enterprise_Configuration[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataUnee_T_Enterprise_Configuration[".edit"] = true;
	$tdataUnee_T_Enterprise_Configuration[".afterEditAction"] = 1;
	$tdataUnee_T_Enterprise_Configuration[".closePopupAfterEdit"] = 1;
	$tdataUnee_T_Enterprise_Configuration[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataUnee_T_Enterprise_Configuration[".add"] = true;
$tdataUnee_T_Enterprise_Configuration[".afterAddAction"] = 1;
$tdataUnee_T_Enterprise_Configuration[".closePopupAfterAdd"] = 1;
$tdataUnee_T_Enterprise_Configuration[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataUnee_T_Enterprise_Configuration[".list"] = true;
}



$tdataUnee_T_Enterprise_Configuration[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataUnee_T_Enterprise_Configuration[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataUnee_T_Enterprise_Configuration[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataUnee_T_Enterprise_Configuration[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataUnee_T_Enterprise_Configuration[".printFriendly"] = true;
}



$tdataUnee_T_Enterprise_Configuration[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataUnee_T_Enterprise_Configuration[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataUnee_T_Enterprise_Configuration[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataUnee_T_Enterprise_Configuration[".isUseAjaxSuggest"] = true;

$tdataUnee_T_Enterprise_Configuration[".rowHighlite"] = true;





$tdataUnee_T_Enterprise_Configuration[".ajaxCodeSnippetAdded"] = false;

$tdataUnee_T_Enterprise_Configuration[".buttonsAdded"] = false;

$tdataUnee_T_Enterprise_Configuration[".addPageEvents"] = false;

// use timepicker for search panel
$tdataUnee_T_Enterprise_Configuration[".isUseTimeForSearch"] = false;


$tdataUnee_T_Enterprise_Configuration[".badgeColor"] = "1E90FF";


$tdataUnee_T_Enterprise_Configuration[".allSearchFields"] = array();
$tdataUnee_T_Enterprise_Configuration[".filterFields"] = array();
$tdataUnee_T_Enterprise_Configuration[".requiredSearchFields"] = array();

$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"] = array();
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "designation";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "description";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "person_table";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "area_table";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "properties_level_1_table";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "properties_level_2_table";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "properties_level_3_table";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "properties_addresses_table";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "api_key";
$tdataUnee_T_Enterprise_Configuration[".googleLikeFields"][] = "is_obsolete_api_key";



$tdataUnee_T_Enterprise_Configuration[".tableType"] = "list";

$tdataUnee_T_Enterprise_Configuration[".printerPageOrientation"] = 0;
$tdataUnee_T_Enterprise_Configuration[".nPrinterPageScale"] = 100;

$tdataUnee_T_Enterprise_Configuration[".nPrinterSplitRecords"] = 40;

$tdataUnee_T_Enterprise_Configuration[".nPrinterPDFSplitRecords"] = 40;


$tdataUnee_T_Enterprise_Configuration[".geocodingEnabled"] = false;





$tdataUnee_T_Enterprise_Configuration[".isResizeColumns"] = true;





$tdataUnee_T_Enterprise_Configuration[".pageSize"] = 20;

$tdataUnee_T_Enterprise_Configuration[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataUnee_T_Enterprise_Configuration[".strOrderBy"] = $tstrOrderBy;

$tdataUnee_T_Enterprise_Configuration[".orderindexes"] = array();

$tdataUnee_T_Enterprise_Configuration[".sqlHead"] = "SELECT ut_external_sot_for_unee_t_objects.id_external_sot_for_unee_t,  ut_external_sot_for_unee_t_objects.syst_created_datetime,  ut_external_sot_for_unee_t_objects.creation_system_id,  ut_external_sot_for_unee_t_objects.created_by_id,  ut_external_sot_for_unee_t_objects.creation_method,  ut_external_sot_for_unee_t_objects.syst_updated_datetime,  ut_external_sot_for_unee_t_objects.update_system_id,  ut_external_sot_for_unee_t_objects.updated_by_id,  ut_external_sot_for_unee_t_objects.update_method,  ut_external_sot_for_unee_t_objects.organization_id,  ut_external_sot_for_unee_t_objects.`order`,  ut_external_sot_for_unee_t_objects.is_obsolete,  ut_external_sot_for_unee_t_objects.associated_mefe_user,  ut_external_sot_for_unee_t_objects.designation,  ut_external_sot_for_unee_t_objects.description,  ut_external_sot_for_unee_t_objects.person_table,  ut_external_sot_for_unee_t_objects.area_table,  ut_external_sot_for_unee_t_objects.properties_level_1_table,  ut_external_sot_for_unee_t_objects.properties_level_2_table,  ut_external_sot_for_unee_t_objects.properties_level_3_table,  ut_external_sot_for_unee_t_objects.properties_addresses_table,  ut_api_keys.api_key,  ut_api_keys.is_obsolete AS is_obsolete_api_key,  ut_api_keys.revoked_datetime";
$tdataUnee_T_Enterprise_Configuration[".sqlFrom"] = "FROM ut_external_sot_for_unee_t_objects  INNER JOIN ut_api_keys ON ut_external_sot_for_unee_t_objects.organization_id = ut_api_keys.organization_id";
$tdataUnee_T_Enterprise_Configuration[".sqlWhereExpr"] = "";
$tdataUnee_T_Enterprise_Configuration[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataUnee_T_Enterprise_Configuration[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataUnee_T_Enterprise_Configuration[".arrGroupsPerPage"] = $arrGPP;

$tdataUnee_T_Enterprise_Configuration[".highlightSearchResults"] = true;

$tableKeysUnee_T_Enterprise_Configuration = array();
$tableKeysUnee_T_Enterprise_Configuration[] = "id_external_sot_for_unee_t";
$tdataUnee_T_Enterprise_Configuration[".Keys"] = $tableKeysUnee_T_Enterprise_Configuration;


$tdataUnee_T_Enterprise_Configuration[".hideMobileList"] = array();




//	id_external_sot_for_unee_t
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_external_sot_for_unee_t";
	$fdata["GoodName"] = "id_external_sot_for_unee_t";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","id_external_sot_for_unee_t");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_external_sot_for_unee_t";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.id_external_sot_for_unee_t";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["id_external_sot_for_unee_t"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "id_external_sot_for_unee_t";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.syst_created_datetime";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["syst_created_datetime"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","creation_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.creation_system_id";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["creation_system_id"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","created_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.created_by_id";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["created_by_id"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.creation_method";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["creation_method"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.syst_updated_datetime";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["syst_updated_datetime"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.update_system_id";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["update_system_id"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.updated_by_id";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["updated_by_id"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.update_method";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["update_method"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.organization_id";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["organization_id"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "organization_id";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","order");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.`order`";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["order"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.is_obsolete";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["is_obsolete"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "is_obsolete";
//	associated_mefe_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "associated_mefe_user";
	$fdata["GoodName"] = "associated_mefe_user";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","associated_mefe_user");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "associated_mefe_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.associated_mefe_user";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["associated_mefe_user"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "associated_mefe_user";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.designation";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["designation"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.description";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["description"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "description";
//	person_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "person_table";
	$fdata["GoodName"] = "person_table";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","person_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.person_table";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["person_table"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "person_table";
//	area_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "area_table";
	$fdata["GoodName"] = "area_table";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","area_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.area_table";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["area_table"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "area_table";
//	properties_level_1_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "properties_level_1_table";
	$fdata["GoodName"] = "properties_level_1_table";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","properties_level_1_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "properties_level_1_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.properties_level_1_table";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["properties_level_1_table"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "properties_level_1_table";
//	properties_level_2_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "properties_level_2_table";
	$fdata["GoodName"] = "properties_level_2_table";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","properties_level_2_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "properties_level_2_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.properties_level_2_table";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["properties_level_2_table"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "properties_level_2_table";
//	properties_level_3_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "properties_level_3_table";
	$fdata["GoodName"] = "properties_level_3_table";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","properties_level_3_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "properties_level_3_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.properties_level_3_table";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["properties_level_3_table"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "properties_level_3_table";
//	properties_addresses_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "properties_addresses_table";
	$fdata["GoodName"] = "properties_addresses_table";
	$fdata["ownerTable"] = "ut_external_sot_for_unee_t_objects";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","properties_addresses_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "properties_addresses_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_external_sot_for_unee_t_objects.properties_addresses_table";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["properties_addresses_table"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "properties_addresses_table";
//	api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "api_key";
	$fdata["GoodName"] = "api_key";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","api_key");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.api_key";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["api_key"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "api_key";
//	is_obsolete_api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "is_obsolete_api_key";
	$fdata["GoodName"] = "is_obsolete_api_key";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","is_obsolete_api_key");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.is_obsolete";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["is_obsolete_api_key"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "is_obsolete_api_key";
//	revoked_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "revoked_datetime";
	$fdata["GoodName"] = "revoked_datetime";
	$fdata["ownerTable"] = "ut_api_keys";
	$fdata["Label"] = GetFieldLabel("Unee_T_Enterprise_Configuration","revoked_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "revoked_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_api_keys.revoked_datetime";

	
	
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


	$tdataUnee_T_Enterprise_Configuration["revoked_datetime"] = $fdata;
		$tdataUnee_T_Enterprise_Configuration[".searchableFields"][] = "revoked_datetime";


$tables_data["Unee-T Enterprise Configuration"]=&$tdataUnee_T_Enterprise_Configuration;
$field_labels["Unee_T_Enterprise_Configuration"] = &$fieldLabelsUnee_T_Enterprise_Configuration;
$fieldToolTips["Unee_T_Enterprise_Configuration"] = &$fieldToolTipsUnee_T_Enterprise_Configuration;
$placeHolders["Unee_T_Enterprise_Configuration"] = &$placeHoldersUnee_T_Enterprise_Configuration;
$page_titles["Unee_T_Enterprise_Configuration"] = &$pageTitlesUnee_T_Enterprise_Configuration;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Unee-T Enterprise Configuration"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Unee-T Enterprise Configuration"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Unee_T_Enterprise_Configuration()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_external_sot_for_unee_t_objects.id_external_sot_for_unee_t,  ut_external_sot_for_unee_t_objects.syst_created_datetime,  ut_external_sot_for_unee_t_objects.creation_system_id,  ut_external_sot_for_unee_t_objects.created_by_id,  ut_external_sot_for_unee_t_objects.creation_method,  ut_external_sot_for_unee_t_objects.syst_updated_datetime,  ut_external_sot_for_unee_t_objects.update_system_id,  ut_external_sot_for_unee_t_objects.updated_by_id,  ut_external_sot_for_unee_t_objects.update_method,  ut_external_sot_for_unee_t_objects.organization_id,  ut_external_sot_for_unee_t_objects.`order`,  ut_external_sot_for_unee_t_objects.is_obsolete,  ut_external_sot_for_unee_t_objects.associated_mefe_user,  ut_external_sot_for_unee_t_objects.designation,  ut_external_sot_for_unee_t_objects.description,  ut_external_sot_for_unee_t_objects.person_table,  ut_external_sot_for_unee_t_objects.area_table,  ut_external_sot_for_unee_t_objects.properties_level_1_table,  ut_external_sot_for_unee_t_objects.properties_level_2_table,  ut_external_sot_for_unee_t_objects.properties_level_3_table,  ut_external_sot_for_unee_t_objects.properties_addresses_table,  ut_api_keys.api_key,  ut_api_keys.is_obsolete AS is_obsolete_api_key,  ut_api_keys.revoked_datetime";
$proto0["m_strFrom"] = "FROM ut_external_sot_for_unee_t_objects  INNER JOIN ut_api_keys ON ut_external_sot_for_unee_t_objects.organization_id = ut_api_keys.organization_id";
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
	"m_strName" => "id_external_sot_for_unee_t",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto6["m_sql"] = "ut_external_sot_for_unee_t_objects.id_external_sot_for_unee_t";
$proto6["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto8["m_sql"] = "ut_external_sot_for_unee_t_objects.syst_created_datetime";
$proto8["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto10["m_sql"] = "ut_external_sot_for_unee_t_objects.creation_system_id";
$proto10["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto12["m_sql"] = "ut_external_sot_for_unee_t_objects.created_by_id";
$proto12["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto14["m_sql"] = "ut_external_sot_for_unee_t_objects.creation_method";
$proto14["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto16["m_sql"] = "ut_external_sot_for_unee_t_objects.syst_updated_datetime";
$proto16["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto18["m_sql"] = "ut_external_sot_for_unee_t_objects.update_system_id";
$proto18["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto20["m_sql"] = "ut_external_sot_for_unee_t_objects.updated_by_id";
$proto20["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto22["m_sql"] = "ut_external_sot_for_unee_t_objects.update_method";
$proto22["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto24["m_sql"] = "ut_external_sot_for_unee_t_objects.organization_id";
$proto24["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto26["m_sql"] = "ut_external_sot_for_unee_t_objects.`order`";
$proto26["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto28["m_sql"] = "ut_external_sot_for_unee_t_objects.is_obsolete";
$proto28["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "associated_mefe_user",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto30["m_sql"] = "ut_external_sot_for_unee_t_objects.associated_mefe_user";
$proto30["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto32["m_sql"] = "ut_external_sot_for_unee_t_objects.designation";
$proto32["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto34["m_sql"] = "ut_external_sot_for_unee_t_objects.description";
$proto34["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "person_table",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto36["m_sql"] = "ut_external_sot_for_unee_t_objects.person_table";
$proto36["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "area_table",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto38["m_sql"] = "ut_external_sot_for_unee_t_objects.area_table";
$proto38["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "properties_level_1_table",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto40["m_sql"] = "ut_external_sot_for_unee_t_objects.properties_level_1_table";
$proto40["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "properties_level_2_table",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto42["m_sql"] = "ut_external_sot_for_unee_t_objects.properties_level_2_table";
$proto42["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "properties_level_3_table",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto44["m_sql"] = "ut_external_sot_for_unee_t_objects.properties_level_3_table";
$proto44["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "properties_addresses_table",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto46["m_sql"] = "ut_external_sot_for_unee_t_objects.properties_addresses_table";
$proto46["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "api_key",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto48["m_sql"] = "ut_api_keys.api_key";
$proto48["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto50["m_sql"] = "ut_api_keys.is_obsolete";
$proto50["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "is_obsolete_api_key";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "revoked_datetime",
	"m_strTable" => "ut_api_keys",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto52["m_sql"] = "ut_api_keys.revoked_datetime";
$proto52["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "ut_external_sot_for_unee_t_objects";
$proto55["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "id_external_sot_for_unee_t";
$proto55["m_columns"][] = "syst_created_datetime";
$proto55["m_columns"][] = "creation_system_id";
$proto55["m_columns"][] = "created_by_id";
$proto55["m_columns"][] = "creation_method";
$proto55["m_columns"][] = "syst_updated_datetime";
$proto55["m_columns"][] = "update_system_id";
$proto55["m_columns"][] = "updated_by_id";
$proto55["m_columns"][] = "update_method";
$proto55["m_columns"][] = "organization_id";
$proto55["m_columns"][] = "order";
$proto55["m_columns"][] = "is_obsolete";
$proto55["m_columns"][] = "associated_mefe_user";
$proto55["m_columns"][] = "designation";
$proto55["m_columns"][] = "description";
$proto55["m_columns"][] = "person_table";
$proto55["m_columns"][] = "area_table";
$proto55["m_columns"][] = "properties_level_1_table";
$proto55["m_columns"][] = "properties_level_2_table";
$proto55["m_columns"][] = "properties_level_3_table";
$proto55["m_columns"][] = "properties_addresses_table";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "ut_external_sot_for_unee_t_objects";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
												$proto58=array();
$proto58["m_link"] = "SQLL_INNERJOIN";
			$proto59=array();
$proto59["m_strName"] = "ut_api_keys";
$proto59["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "id_api_key";
$proto59["m_columns"][] = "syst_created_datetime";
$proto59["m_columns"][] = "creation_system_id";
$proto59["m_columns"][] = "created_by_id";
$proto59["m_columns"][] = "creation_method";
$proto59["m_columns"][] = "syst_updated_datetime";
$proto59["m_columns"][] = "update_system_id";
$proto59["m_columns"][] = "updated_by_id";
$proto59["m_columns"][] = "update_method";
$proto59["m_columns"][] = "external_system_id";
$proto59["m_columns"][] = "revoked_datetime";
$proto59["m_columns"][] = "is_obsolete";
$proto59["m_columns"][] = "api_key";
$proto59["m_columns"][] = "mefe_user_id";
$proto59["m_columns"][] = "organization_id";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "INNER JOIN ut_api_keys ON ut_external_sot_for_unee_t_objects.organization_id = ut_api_keys.organization_id";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "Unee-T Enterprise Configuration";
$proto60=array();
$proto60["m_sql"] = "ut_external_sot_for_unee_t_objects.organization_id = ut_api_keys.organization_id";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_external_sot_for_unee_t_objects",
	"m_srcTableName" => "Unee-T Enterprise Configuration"
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "= ut_api_keys.organization_id";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Unee-T Enterprise Configuration";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Unee_T_Enterprise_Configuration = createSqlQuery_Unee_T_Enterprise_Configuration();


	
					
;

																								

$tdataUnee_T_Enterprise_Configuration[".sqlquery"] = $queryData_Unee_T_Enterprise_Configuration;

include_once(getabspath("include/Unee_T_Enterprise_Configuration_events.php"));
$tableEvents["Unee-T Enterprise Configuration"] = new eventclass_Unee_T_Enterprise_Configuration;
$tdataUnee_T_Enterprise_Configuration[".hasEvents"] = true;

?>