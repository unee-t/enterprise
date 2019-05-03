<?php




$tdataManage_Unit_Names = array();
$tdataManage_Unit_Names[".searchableFields"] = array();
	$tdataManage_Unit_Names[".truncateText"] = true;
	$tdataManage_Unit_Names[".NumberOfChars"] = 80;
	$tdataManage_Unit_Names[".ShortName"] = "Manage_Unit_Names";
	$tdataManage_Unit_Names[".OwnerID"] = "organization_id";
	$tdataManage_Unit_Names[".OriginalTable"] = "ut_map_external_source_units";


$defaultPages = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataManage_Unit_Names[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataManage_Unit_Names[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_Unit_Names = array();
$fieldToolTipsManage_Unit_Names = array();
$pageTitlesManage_Unit_Names = array();
$placeHoldersManage_Unit_Names = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_Unit_Names["English"] = array();
	$fieldToolTipsManage_Unit_Names["English"] = array();
	$placeHoldersManage_Unit_Names["English"] = array();
	$pageTitlesManage_Unit_Names["English"] = array();
	$fieldLabelsManage_Unit_Names["English"]["id_map"] = "Id Map";
	$fieldToolTipsManage_Unit_Names["English"]["id_map"] = "";
	$placeHoldersManage_Unit_Names["English"]["id_map"] = "";
	$fieldLabelsManage_Unit_Names["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsManage_Unit_Names["English"]["syst_updated_datetime"] = "";
	$placeHoldersManage_Unit_Names["English"]["syst_updated_datetime"] = "";
	$fieldLabelsManage_Unit_Names["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsManage_Unit_Names["English"]["update_system_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["update_system_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsManage_Unit_Names["English"]["updated_by_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["updated_by_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["update_method"] = "Update Method";
	$fieldToolTipsManage_Unit_Names["English"]["update_method"] = "";
	$placeHoldersManage_Unit_Names["English"]["update_method"] = "";
	$fieldLabelsManage_Unit_Names["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsManage_Unit_Names["English"]["is_obsolete"] = "";
	$placeHoldersManage_Unit_Names["English"]["is_obsolete"] = "";
	$fieldLabelsManage_Unit_Names["English"]["unee_t_mefe_unit_id"] = "Unee T Unit Id";
	$fieldToolTipsManage_Unit_Names["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["uneet_created_datetime"] = "Created On";
	$fieldToolTipsManage_Unit_Names["English"]["uneet_created_datetime"] = "";
	$placeHoldersManage_Unit_Names["English"]["uneet_created_datetime"] = "";
	$fieldLabelsManage_Unit_Names["English"]["unee_t_unit_type"] = "Unit Type";
	$fieldToolTipsManage_Unit_Names["English"]["unee_t_unit_type"] = "";
	$placeHoldersManage_Unit_Names["English"]["unee_t_unit_type"] = "";
	$fieldLabelsManage_Unit_Names["English"]["uneet_name"] = "Uneet Name";
	$fieldToolTipsManage_Unit_Names["English"]["uneet_name"] = "";
	$placeHoldersManage_Unit_Names["English"]["uneet_name"] = "";
	$fieldLabelsManage_Unit_Names["English"]["external_property_type_id"] = "Property Type Id";
	$fieldToolTipsManage_Unit_Names["English"]["external_property_type_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["external_property_type_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["external_property_id"] = "External Property Id";
	$fieldToolTipsManage_Unit_Names["English"]["external_property_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["external_property_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["external_system"] = "External System";
	$fieldToolTipsManage_Unit_Names["English"]["external_system"] = "";
	$placeHoldersManage_Unit_Names["English"]["external_system"] = "";
	$fieldLabelsManage_Unit_Names["English"]["table_in_external_system"] = "Table In External System";
	$fieldToolTipsManage_Unit_Names["English"]["table_in_external_system"] = "";
	$placeHoldersManage_Unit_Names["English"]["table_in_external_system"] = "";
	$fieldLabelsManage_Unit_Names["English"]["designation"] = "Property Type";
	$fieldToolTipsManage_Unit_Names["English"]["designation"] = "";
	$placeHoldersManage_Unit_Names["English"]["designation"] = "";
	$fieldLabelsManage_Unit_Names["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsManage_Unit_Names["English"]["organization_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["organization_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["mefe_user_id"] = "Mefe User Id";
	$fieldToolTipsManage_Unit_Names["English"]["mefe_user_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["mefe_user_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["new_record_id"] = "New Record Id";
	$fieldToolTipsManage_Unit_Names["English"]["new_record_id"] = "";
	$placeHoldersManage_Unit_Names["English"]["new_record_id"] = "";
	$fieldLabelsManage_Unit_Names["English"]["is_update_needed"] = "Is Update Needed";
	$fieldToolTipsManage_Unit_Names["English"]["is_update_needed"] = "";
	$placeHoldersManage_Unit_Names["English"]["is_update_needed"] = "";
	if (count($fieldToolTipsManage_Unit_Names["English"]))
		$tdataManage_Unit_Names[".isUseToolTips"] = true;
}


	$tdataManage_Unit_Names[".NCSearch"] = true;



$tdataManage_Unit_Names[".shortTableName"] = "Manage_Unit_Names";
$tdataManage_Unit_Names[".nSecOptions"] = 1;

$tdataManage_Unit_Names[".mainTableOwnerID"] = "organization_id";
$tdataManage_Unit_Names[".entityType"] = 1;

$tdataManage_Unit_Names[".strOriginalTableName"] = "ut_map_external_source_units";

		 



$tdataManage_Unit_Names[".showAddInPopup"] = false;

$tdataManage_Unit_Names[".showEditInPopup"] = false;

$tdataManage_Unit_Names[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_Unit_Names[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_Unit_Names[".listAjax"] = true;
//	temporary
$tdataManage_Unit_Names[".listAjax"] = false;

	$tdataManage_Unit_Names[".audit"] = false;

	$tdataManage_Unit_Names[".locking"] = false;


$pages = $tdataManage_Unit_Names[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_Unit_Names[".edit"] = true;
	$tdataManage_Unit_Names[".afterEditAction"] = 1;
	$tdataManage_Unit_Names[".closePopupAfterEdit"] = 1;
	$tdataManage_Unit_Names[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_Unit_Names[".add"] = true;
$tdataManage_Unit_Names[".afterAddAction"] = 1;
$tdataManage_Unit_Names[".closePopupAfterAdd"] = 1;
$tdataManage_Unit_Names[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_Unit_Names[".list"] = true;
}



$tdataManage_Unit_Names[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_Unit_Names[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_Unit_Names[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_Unit_Names[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_Unit_Names[".printFriendly"] = true;
}



$tdataManage_Unit_Names[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_Unit_Names[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_Unit_Names[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_Unit_Names[".isUseAjaxSuggest"] = true;

$tdataManage_Unit_Names[".rowHighlite"] = true;





$tdataManage_Unit_Names[".ajaxCodeSnippetAdded"] = false;

$tdataManage_Unit_Names[".buttonsAdded"] = false;

$tdataManage_Unit_Names[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_Unit_Names[".isUseTimeForSearch"] = false;


$tdataManage_Unit_Names[".badgeColor"] = "D2AF80";


$tdataManage_Unit_Names[".allSearchFields"] = array();
$tdataManage_Unit_Names[".filterFields"] = array();
$tdataManage_Unit_Names[".requiredSearchFields"] = array();

$tdataManage_Unit_Names[".googleLikeFields"] = array();
$tdataManage_Unit_Names[".googleLikeFields"][] = "unee_t_unit_type";
$tdataManage_Unit_Names[".googleLikeFields"][] = "uneet_name";
$tdataManage_Unit_Names[".googleLikeFields"][] = "designation";
$tdataManage_Unit_Names[".googleLikeFields"][] = "external_property_id";
$tdataManage_Unit_Names[".googleLikeFields"][] = "external_system";
$tdataManage_Unit_Names[".googleLikeFields"][] = "table_in_external_system";
$tdataManage_Unit_Names[".googleLikeFields"][] = "organization_id";
$tdataManage_Unit_Names[".googleLikeFields"][] = "new_record_id";
$tdataManage_Unit_Names[".googleLikeFields"][] = "is_update_needed";



$tdataManage_Unit_Names[".tableType"] = "list";

$tdataManage_Unit_Names[".printerPageOrientation"] = 0;
$tdataManage_Unit_Names[".nPrinterPageScale"] = 100;

$tdataManage_Unit_Names[".nPrinterSplitRecords"] = 40;

$tdataManage_Unit_Names[".nPrinterPDFSplitRecords"] = 40;


$tdataManage_Unit_Names[".geocodingEnabled"] = false;





$tdataManage_Unit_Names[".isResizeColumns"] = true;





$tdataManage_Unit_Names[".pageSize"] = 20;

$tdataManage_Unit_Names[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ut_map_external_source_units.uneet_name";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_Unit_Names[".strOrderBy"] = $tstrOrderBy;

$tdataManage_Unit_Names[".orderindexes"] = array();
	$tdataManage_Unit_Names[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "ut_map_external_source_units.uneet_name");


$tdataManage_Unit_Names[".sqlHead"] = "SELECT ut_map_external_source_units.id_map,  ut_map_external_source_units.syst_updated_datetime,  ut_map_external_source_units.update_system_id,  ut_map_external_source_units.updated_by_id,  ut_map_external_source_units.update_method,  ut_map_external_source_units.is_obsolete,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  ut_map_external_source_units.unee_t_unit_type,  ut_map_external_source_units.uneet_name,  ut_map_external_source_units.external_property_type_id,  ut_property_types.designation,  ut_map_external_source_units.external_property_id,  ut_map_external_source_units.external_system,  ut_map_external_source_units.table_in_external_system,  ut_map_external_source_units.organization_id,  ut_organization_mefe_user_id.mefe_user_id,  ut_map_external_source_units.new_record_id,  ut_map_external_source_units.is_update_needed";
$tdataManage_Unit_Names[".sqlFrom"] = "FROM ut_map_external_source_units  LEFT OUTER JOIN ut_property_types ON ut_map_external_source_units.external_property_type_id = ut_property_types.id_property_type  LEFT OUTER JOIN ut_organization_mefe_user_id ON ut_map_external_source_units.organization_id = ut_organization_mefe_user_id.organization_id";
$tdataManage_Unit_Names[".sqlWhereExpr"] = "(ut_map_external_source_units.is_obsolete = 0) AND (ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL)";
$tdataManage_Unit_Names[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_Unit_Names[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_Unit_Names[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_Unit_Names[".highlightSearchResults"] = true;

$tableKeysManage_Unit_Names = array();
$tableKeysManage_Unit_Names[] = "organization_id";
$tableKeysManage_Unit_Names[] = "external_property_id";
$tableKeysManage_Unit_Names[] = "external_system";
$tableKeysManage_Unit_Names[] = "table_in_external_system";
$tdataManage_Unit_Names[".Keys"] = $tableKeysManage_Unit_Names;


$tdataManage_Unit_Names[".hideMobileList"] = array();




//	id_map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map";
	$fdata["GoodName"] = "id_map";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","id_map");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.id_map";

	
	
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


	$tdataManage_Unit_Names["id_map"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "id_map";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.syst_updated_datetime";

	
	
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


	$tdataManage_Unit_Names["syst_updated_datetime"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.update_system_id";

	
	
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


	$tdataManage_Unit_Names["update_system_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.updated_by_id";

	
	
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


	$tdataManage_Unit_Names["updated_by_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.update_method";

	
	
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


	$tdataManage_Unit_Names["update_method"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "update_method";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.is_obsolete";

	
	
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


	$tdataManage_Unit_Names["is_obsolete"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "is_obsolete";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","unee_t_mefe_unit_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.unee_t_mefe_unit_id";

	
	
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


	$tdataManage_Unit_Names["unee_t_mefe_unit_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "unee_t_mefe_unit_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.uneet_created_datetime";

	
	
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


	$tdataManage_Unit_Names["uneet_created_datetime"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "uneet_created_datetime";
//	unee_t_unit_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "unee_t_unit_type";
	$fdata["GoodName"] = "unee_t_unit_type";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","unee_t_unit_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_unit_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.unee_t_unit_type";

	
	
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
	$edata["LookupTable"] = "ut_unit_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "designation";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
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


	$tdataManage_Unit_Names["unee_t_unit_type"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "unee_t_unit_type";
//	uneet_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "uneet_name";
	$fdata["GoodName"] = "uneet_name";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","uneet_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "uneet_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.uneet_name";

	
	
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


	$tdataManage_Unit_Names["uneet_name"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "uneet_name";
//	external_property_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "external_property_type_id";
	$fdata["GoodName"] = "external_property_type_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","external_property_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "external_property_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.external_property_type_id";

	
	
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

	

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_property_types";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_property_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataManage_Unit_Names["external_property_type_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "external_property_type_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_property_types";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_property_types.designation";

	
	
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


	$tdataManage_Unit_Names["designation"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "designation";
//	external_property_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "external_property_id";
	$fdata["GoodName"] = "external_property_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","external_property_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_property_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.external_property_id";

	
	
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


	$tdataManage_Unit_Names["external_property_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "external_property_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.external_system";

	
	
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


	$tdataManage_Unit_Names["external_system"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "external_system";
//	table_in_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "table_in_external_system";
	$fdata["GoodName"] = "table_in_external_system";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","table_in_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "table_in_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.table_in_external_system";

	
	
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


	$tdataManage_Unit_Names["table_in_external_system"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "table_in_external_system";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.organization_id";

	
	
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


	$tdataManage_Unit_Names["organization_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "organization_id";
//	mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "mefe_user_id";
	$fdata["GoodName"] = "mefe_user_id";
	$fdata["ownerTable"] = "ut_organization_mefe_user_id";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_organization_mefe_user_id.mefe_user_id";

	
	
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


	$tdataManage_Unit_Names["mefe_user_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "mefe_user_id";
//	new_record_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "new_record_id";
	$fdata["GoodName"] = "new_record_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","new_record_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "new_record_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.new_record_id";

	
	
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


	$tdataManage_Unit_Names["new_record_id"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "new_record_id";
//	is_update_needed
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "is_update_needed";
	$fdata["GoodName"] = "is_update_needed";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Manage_Unit_Names","is_update_needed");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_update_needed";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.is_update_needed";

	
	
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


	$tdataManage_Unit_Names["is_update_needed"] = $fdata;
		$tdataManage_Unit_Names[".searchableFields"][] = "is_update_needed";


$tables_data["Manage Unit Names"]=&$tdataManage_Unit_Names;
$field_labels["Manage_Unit_Names"] = &$fieldLabelsManage_Unit_Names;
$fieldToolTips["Manage_Unit_Names"] = &$fieldToolTipsManage_Unit_Names;
$placeHolders["Manage_Unit_Names"] = &$placeHoldersManage_Unit_Names;
$page_titles["Manage_Unit_Names"] = &$pageTitlesManage_Unit_Names;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage Unit Names"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Manage Unit Names"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_Unit_Names()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_map_external_source_units.id_map,  ut_map_external_source_units.syst_updated_datetime,  ut_map_external_source_units.update_system_id,  ut_map_external_source_units.updated_by_id,  ut_map_external_source_units.update_method,  ut_map_external_source_units.is_obsolete,  ut_map_external_source_units.unee_t_mefe_unit_id,  ut_map_external_source_units.uneet_created_datetime,  ut_map_external_source_units.unee_t_unit_type,  ut_map_external_source_units.uneet_name,  ut_map_external_source_units.external_property_type_id,  ut_property_types.designation,  ut_map_external_source_units.external_property_id,  ut_map_external_source_units.external_system,  ut_map_external_source_units.table_in_external_system,  ut_map_external_source_units.organization_id,  ut_organization_mefe_user_id.mefe_user_id,  ut_map_external_source_units.new_record_id,  ut_map_external_source_units.is_update_needed";
$proto0["m_strFrom"] = "FROM ut_map_external_source_units  LEFT OUTER JOIN ut_property_types ON ut_map_external_source_units.external_property_type_id = ut_property_types.id_property_type  LEFT OUTER JOIN ut_organization_mefe_user_id ON ut_map_external_source_units.organization_id = ut_organization_mefe_user_id.organization_id";
$proto0["m_strWhere"] = "(ut_map_external_source_units.is_obsolete = 0) AND (ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL)";
$proto0["m_strOrderBy"] = "ORDER BY ut_map_external_source_units.uneet_name";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(ut_map_external_source_units.is_obsolete = 0) AND (ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ut_map_external_source_units.is_obsolete = 0) AND (ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ut_map_external_source_units.is_obsolete = 0";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= 0";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NOT NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_map",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto10["m_sql"] = "ut_map_external_source_units.id_map";
$proto10["m_srcTableName"] = "Manage Unit Names";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto12["m_sql"] = "ut_map_external_source_units.syst_updated_datetime";
$proto12["m_srcTableName"] = "Manage Unit Names";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto14["m_sql"] = "ut_map_external_source_units.update_system_id";
$proto14["m_srcTableName"] = "Manage Unit Names";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto16["m_sql"] = "ut_map_external_source_units.updated_by_id";
$proto16["m_srcTableName"] = "Manage Unit Names";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto18["m_sql"] = "ut_map_external_source_units.update_method";
$proto18["m_srcTableName"] = "Manage Unit Names";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto20["m_sql"] = "ut_map_external_source_units.is_obsolete";
$proto20["m_srcTableName"] = "Manage Unit Names";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto22["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id";
$proto22["m_srcTableName"] = "Manage Unit Names";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto24["m_sql"] = "ut_map_external_source_units.uneet_created_datetime";
$proto24["m_srcTableName"] = "Manage Unit Names";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_unit_type",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto26["m_sql"] = "ut_map_external_source_units.unee_t_unit_type";
$proto26["m_srcTableName"] = "Manage Unit Names";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_name",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto28["m_sql"] = "ut_map_external_source_units.uneet_name";
$proto28["m_srcTableName"] = "Manage Unit Names";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "external_property_type_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto30["m_sql"] = "ut_map_external_source_units.external_property_type_id";
$proto30["m_srcTableName"] = "Manage Unit Names";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_property_types",
	"m_srcTableName" => "Manage Unit Names"
));

$proto32["m_sql"] = "ut_property_types.designation";
$proto32["m_srcTableName"] = "Manage Unit Names";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "external_property_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto34["m_sql"] = "ut_map_external_source_units.external_property_id";
$proto34["m_srcTableName"] = "Manage Unit Names";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto36["m_sql"] = "ut_map_external_source_units.external_system";
$proto36["m_srcTableName"] = "Manage Unit Names";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "table_in_external_system",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto38["m_sql"] = "ut_map_external_source_units.table_in_external_system";
$proto38["m_srcTableName"] = "Manage Unit Names";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto40["m_sql"] = "ut_map_external_source_units.organization_id";
$proto40["m_srcTableName"] = "Manage Unit Names";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "mefe_user_id",
	"m_strTable" => "ut_organization_mefe_user_id",
	"m_srcTableName" => "Manage Unit Names"
));

$proto42["m_sql"] = "ut_organization_mefe_user_id.mefe_user_id";
$proto42["m_srcTableName"] = "Manage Unit Names";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "new_record_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto44["m_sql"] = "ut_map_external_source_units.new_record_id";
$proto44["m_srcTableName"] = "Manage Unit Names";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "is_update_needed",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto46["m_sql"] = "ut_map_external_source_units.is_update_needed";
$proto46["m_srcTableName"] = "Manage Unit Names";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "ut_map_external_source_units";
$proto49["m_srcTableName"] = "Manage Unit Names";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_map";
$proto49["m_columns"][] = "syst_created_datetime";
$proto49["m_columns"][] = "creation_system_id";
$proto49["m_columns"][] = "created_by_id";
$proto49["m_columns"][] = "creation_method";
$proto49["m_columns"][] = "syst_updated_datetime";
$proto49["m_columns"][] = "update_system_id";
$proto49["m_columns"][] = "updated_by_id";
$proto49["m_columns"][] = "update_method";
$proto49["m_columns"][] = "organization_id";
$proto49["m_columns"][] = "is_obsolete";
$proto49["m_columns"][] = "is_update_needed";
$proto49["m_columns"][] = "unee_t_mefe_unit_id";
$proto49["m_columns"][] = "uneet_created_datetime";
$proto49["m_columns"][] = "is_mefe_api_success";
$proto49["m_columns"][] = "mefe_api_error_message";
$proto49["m_columns"][] = "is_unee_t_created_by_me";
$proto49["m_columns"][] = "unee_t_unit_type";
$proto49["m_columns"][] = "uneet_name";
$proto49["m_columns"][] = "new_record_id";
$proto49["m_columns"][] = "external_property_type_id";
$proto49["m_columns"][] = "external_property_id";
$proto49["m_columns"][] = "external_system";
$proto49["m_columns"][] = "table_in_external_system";
$proto49["m_columns"][] = "tower";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "ut_map_external_source_units";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Manage Unit Names";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_LEFTJOIN";
			$proto53=array();
$proto53["m_strName"] = "ut_property_types";
$proto53["m_srcTableName"] = "Manage Unit Names";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_property_type";
$proto53["m_columns"][] = "syst_created_datetime";
$proto53["m_columns"][] = "creation_system_id";
$proto53["m_columns"][] = "created_by_id";
$proto53["m_columns"][] = "syst_updated_datetime";
$proto53["m_columns"][] = "update_system_id";
$proto53["m_columns"][] = "updated_by_id";
$proto53["m_columns"][] = "order";
$proto53["m_columns"][] = "is_obsolete";
$proto53["m_columns"][] = "designation";
$proto53["m_columns"][] = "description";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "LEFT OUTER JOIN ut_property_types ON ut_map_external_source_units.external_property_type_id = ut_property_types.id_property_type";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Manage Unit Names";
$proto54=array();
$proto54["m_sql"] = "ut_map_external_source_units.external_property_type_id = ut_property_types.id_property_type";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_property_type_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "= ut_property_types.id_property_type";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
												$proto56=array();
$proto56["m_link"] = "SQLL_LEFTJOIN";
			$proto57=array();
$proto57["m_strName"] = "ut_organization_mefe_user_id";
$proto57["m_srcTableName"] = "Manage Unit Names";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "mefe_user_id";
$proto57["m_columns"][] = "organization_id";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "LEFT OUTER JOIN ut_organization_mefe_user_id ON ut_map_external_source_units.organization_id = ut_organization_mefe_user_id.organization_id";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "Manage Unit Names";
$proto58=array();
$proto58["m_sql"] = "ut_map_external_source_units.organization_id = ut_organization_mefe_user_id.organization_id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= ut_organization_mefe_user_id.organization_id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "uneet_name",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Manage Unit Names"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 1;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Manage Unit Names";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_Unit_Names = createSqlQuery_Manage_Unit_Names();


	
					
;

																			

$tdataManage_Unit_Names[".sqlquery"] = $queryData_Manage_Unit_Names;

include_once(getabspath("include/Manage_Unit_Names_events.php"));
$tableEvents["Manage Unit Names"] = new eventclass_Manage_Unit_Names;
$tdataManage_Unit_Names[".hasEvents"] = true;

?>