<?php




$tdataSearch_Buildings = array();
$tdataSearch_Buildings[".searchableFields"] = array();
	$tdataSearch_Buildings[".truncateText"] = true;
	$tdataSearch_Buildings[".NumberOfChars"] = 80;
	$tdataSearch_Buildings[".ShortName"] = "Search_Buildings";
	$tdataSearch_Buildings[".OwnerID"] = "organization_id";
	$tdataSearch_Buildings[".OriginalTable"] = "property_level_1_buildings";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );

$tdataSearch_Buildings[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataSearch_Buildings[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsSearch_Buildings = array();
$fieldToolTipsSearch_Buildings = array();
$pageTitlesSearch_Buildings = array();
$placeHoldersSearch_Buildings = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSearch_Buildings["English"] = array();
	$fieldToolTipsSearch_Buildings["English"] = array();
	$placeHoldersSearch_Buildings["English"] = array();
	$pageTitlesSearch_Buildings["English"] = array();
	$fieldLabelsSearch_Buildings["English"]["external_id"] = "External Id";
	$fieldToolTipsSearch_Buildings["English"]["external_id"] = "";
	$placeHoldersSearch_Buildings["English"]["external_id"] = "";
	$fieldLabelsSearch_Buildings["English"]["external_system_id"] = "External System Id";
	$fieldToolTipsSearch_Buildings["English"]["external_system_id"] = "";
	$placeHoldersSearch_Buildings["English"]["external_system_id"] = "";
	$fieldLabelsSearch_Buildings["English"]["external_table"] = "External Table";
	$fieldToolTipsSearch_Buildings["English"]["external_table"] = "";
	$placeHoldersSearch_Buildings["English"]["external_table"] = "";
	$fieldLabelsSearch_Buildings["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsSearch_Buildings["English"]["organization_id"] = "";
	$placeHoldersSearch_Buildings["English"]["organization_id"] = "";
	$fieldLabelsSearch_Buildings["English"]["unee_t_mefe_unit_id"] = "Unee T Mefe Unit Id";
	$fieldToolTipsSearch_Buildings["English"]["unee_t_mefe_unit_id"] = "";
	$placeHoldersSearch_Buildings["English"]["unee_t_mefe_unit_id"] = "";
	$fieldLabelsSearch_Buildings["English"]["uneet_created_datetime"] = "Unee-T Creation";
	$fieldToolTipsSearch_Buildings["English"]["uneet_created_datetime"] = "";
	$placeHoldersSearch_Buildings["English"]["uneet_created_datetime"] = "";
	$fieldLabelsSearch_Buildings["English"]["country_code"] = "Country Code";
	$fieldToolTipsSearch_Buildings["English"]["country_code"] = "";
	$placeHoldersSearch_Buildings["English"]["country_code"] = "";
	$fieldLabelsSearch_Buildings["English"]["country_name"] = "Country Name";
	$fieldToolTipsSearch_Buildings["English"]["country_name"] = "";
	$placeHoldersSearch_Buildings["English"]["country_name"] = "";
	$fieldLabelsSearch_Buildings["English"]["area_id"] = "Area Id";
	$fieldToolTipsSearch_Buildings["English"]["area_id"] = "";
	$placeHoldersSearch_Buildings["English"]["area_id"] = "";
	$fieldLabelsSearch_Buildings["English"]["area_name"] = "Area Name";
	$fieldToolTipsSearch_Buildings["English"]["area_name"] = "";
	$placeHoldersSearch_Buildings["English"]["area_name"] = "";
	$fieldLabelsSearch_Buildings["English"]["building_name"] = "Building Name";
	$fieldToolTipsSearch_Buildings["English"]["building_name"] = "";
	$placeHoldersSearch_Buildings["English"]["building_name"] = "";
	$fieldLabelsSearch_Buildings["English"]["order_area"] = "Order Area";
	$fieldToolTipsSearch_Buildings["English"]["order_area"] = "";
	$placeHoldersSearch_Buildings["English"]["order_area"] = "";
	$fieldLabelsSearch_Buildings["English"]["order_building"] = "Order Building";
	$fieldToolTipsSearch_Buildings["English"]["order_building"] = "";
	$placeHoldersSearch_Buildings["English"]["order_building"] = "";
	$fieldLabelsSearch_Buildings["English"]["is_unit_obsolete"] = "Is Unit Obsolete";
	$fieldToolTipsSearch_Buildings["English"]["is_unit_obsolete"] = "";
	$placeHoldersSearch_Buildings["English"]["is_unit_obsolete"] = "";
	$fieldLabelsSearch_Buildings["English"]["id_building"] = "Id Building";
	$fieldToolTipsSearch_Buildings["English"]["id_building"] = "";
	$placeHoldersSearch_Buildings["English"]["id_building"] = "";
	if (count($fieldToolTipsSearch_Buildings["English"]))
		$tdataSearch_Buildings[".isUseToolTips"] = true;
}


	$tdataSearch_Buildings[".NCSearch"] = true;



$tdataSearch_Buildings[".shortTableName"] = "Search_Buildings";
$tdataSearch_Buildings[".nSecOptions"] = 1;

$tdataSearch_Buildings[".mainTableOwnerID"] = "organization_id";
$tdataSearch_Buildings[".entityType"] = 1;

$tdataSearch_Buildings[".strOriginalTableName"] = "property_level_1_buildings";

		 



$tdataSearch_Buildings[".showAddInPopup"] = false;

$tdataSearch_Buildings[".showEditInPopup"] = false;

$tdataSearch_Buildings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSearch_Buildings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSearch_Buildings[".listAjax"] = false;
//	temporary
$tdataSearch_Buildings[".listAjax"] = false;

	$tdataSearch_Buildings[".audit"] = false;

	$tdataSearch_Buildings[".locking"] = false;


$pages = $tdataSearch_Buildings[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataSearch_Buildings[".edit"] = true;
	$tdataSearch_Buildings[".afterEditAction"] = 1;
	$tdataSearch_Buildings[".closePopupAfterEdit"] = 1;
	$tdataSearch_Buildings[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataSearch_Buildings[".add"] = true;
$tdataSearch_Buildings[".afterAddAction"] = 1;
$tdataSearch_Buildings[".closePopupAfterAdd"] = 1;
$tdataSearch_Buildings[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataSearch_Buildings[".list"] = true;
}



$tdataSearch_Buildings[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataSearch_Buildings[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataSearch_Buildings[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataSearch_Buildings[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataSearch_Buildings[".printFriendly"] = true;
}



$tdataSearch_Buildings[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataSearch_Buildings[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataSearch_Buildings[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataSearch_Buildings[".isUseAjaxSuggest"] = true;

$tdataSearch_Buildings[".rowHighlite"] = true;





$tdataSearch_Buildings[".ajaxCodeSnippetAdded"] = false;

$tdataSearch_Buildings[".buttonsAdded"] = false;

$tdataSearch_Buildings[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSearch_Buildings[".isUseTimeForSearch"] = false;


$tdataSearch_Buildings[".badgeColor"] = "DAA520";


$tdataSearch_Buildings[".allSearchFields"] = array();
$tdataSearch_Buildings[".filterFields"] = array();
$tdataSearch_Buildings[".requiredSearchFields"] = array();

$tdataSearch_Buildings[".googleLikeFields"] = array();
$tdataSearch_Buildings[".googleLikeFields"][] = "id_building";
$tdataSearch_Buildings[".googleLikeFields"][] = "country_name";
$tdataSearch_Buildings[".googleLikeFields"][] = "area_name";
$tdataSearch_Buildings[".googleLikeFields"][] = "building_name";



$tdataSearch_Buildings[".tableType"] = "list";

$tdataSearch_Buildings[".printerPageOrientation"] = 0;
$tdataSearch_Buildings[".nPrinterPageScale"] = 100;

$tdataSearch_Buildings[".nPrinterSplitRecords"] = 40;

$tdataSearch_Buildings[".nPrinterPDFSplitRecords"] = 40;


$tdataSearch_Buildings[".geocodingEnabled"] = false;










$tdataSearch_Buildings[".pageSize"] = 20;

$tdataSearch_Buildings[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY 
	property_groups_countries.country_name
	, property_groups_areas.`order`
	, property_groups_areas.area_name
	, property_level_1_buildings.`order`
	, property_level_1_buildings.designation";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSearch_Buildings[".strOrderBy"] = $tstrOrderBy;

$tdataSearch_Buildings[".orderindexes"] = array();
	$tdataSearch_Buildings[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "property_groups_countries.country_name");

	$tdataSearch_Buildings[".orderindexes"][] = array(13, (1 ? "ASC" : "DESC"), "property_groups_areas.`order`");

	$tdataSearch_Buildings[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "property_groups_areas.area_name");

	$tdataSearch_Buildings[".orderindexes"][] = array(14, (1 ? "ASC" : "DESC"), "property_level_1_buildings.`order`");

	$tdataSearch_Buildings[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "property_level_1_buildings.designation");


$tdataSearch_Buildings[".sqlHead"] = "SELECT property_level_1_buildings.id_building,  	property_level_1_buildings.external_id,  	property_level_1_buildings.external_system_id,  	property_level_1_buildings.external_table,  	property_level_1_buildings.organization_id,  	ut_map_external_source_units.unee_t_mefe_unit_id,  	ut_map_external_source_units.uneet_created_datetime,  	property_level_1_buildings.country_code,  	property_groups_countries.country_name,  	property_level_1_buildings.area_id,  	property_groups_areas.area_name,  	property_level_1_buildings.designation AS building_name,  	property_groups_areas.`order` AS order_area,  	property_level_1_buildings.`order` AS order_building,  	property_level_1_buildings.is_obsolete AS is_unit_obsolete";
$tdataSearch_Buildings[".sqlFrom"] = "FROM property_level_1_buildings  	LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  	LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  	INNER JOIN ut_map_external_source_units ON property_level_1_buildings.id_building = ut_map_external_source_units.new_record_id AND property_level_1_buildings.organization_id = ut_map_external_source_units.organization_id";
$tdataSearch_Buildings[".sqlWhereExpr"] = "(ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL  	AND ut_map_external_source_units.external_property_type_id = 1)";
$tdataSearch_Buildings[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSearch_Buildings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSearch_Buildings[".arrGroupsPerPage"] = $arrGPP;

$tdataSearch_Buildings[".highlightSearchResults"] = true;

$tableKeysSearch_Buildings = array();
$tableKeysSearch_Buildings[] = "external_id";
$tableKeysSearch_Buildings[] = "external_system_id";
$tableKeysSearch_Buildings[] = "external_table";
$tableKeysSearch_Buildings[] = "organization_id";
$tdataSearch_Buildings[".Keys"] = $tableKeysSearch_Buildings;


$tdataSearch_Buildings[".hideMobileList"] = array();




//	id_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_building";
	$fdata["GoodName"] = "id_building";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","id_building");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_building";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.id_building";

	
	
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


	$tdataSearch_Buildings["id_building"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "id_building";
//	external_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "external_id";
	$fdata["GoodName"] = "external_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","external_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.external_id";

	
	
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


	$tdataSearch_Buildings["external_id"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "external_id";
//	external_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "external_system_id";
	$fdata["GoodName"] = "external_system_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","external_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.external_system_id";

	
	
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

			
	
	
//end of Filters settings


	$tdataSearch_Buildings["external_system_id"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "external_system_id";
//	external_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "external_table";
	$fdata["GoodName"] = "external_table";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","external_table");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.external_table";

	
	
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

			
	
	
//end of Filters settings


	$tdataSearch_Buildings["external_table"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "external_table";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.organization_id";

	
	
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


	$tdataSearch_Buildings["organization_id"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "organization_id";
//	unee_t_mefe_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "unee_t_mefe_unit_id";
	$fdata["GoodName"] = "unee_t_mefe_unit_id";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","unee_t_mefe_unit_id");
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


	$tdataSearch_Buildings["unee_t_mefe_unit_id"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "unee_t_mefe_unit_id";
//	uneet_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "uneet_created_datetime";
	$fdata["GoodName"] = "uneet_created_datetime";
	$fdata["ownerTable"] = "ut_map_external_source_units";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","uneet_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "uneet_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_units.uneet_created_datetime";

	
	
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

	
	



		$edata["IsRequired"] = true;

	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataSearch_Buildings["uneet_created_datetime"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "uneet_created_datetime";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.country_code";

	
	
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


	$tdataSearch_Buildings["country_code"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","country_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_countries.country_name";

	
	
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


	$tdataSearch_Buildings["country_name"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "country_name";
//	area_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "area_id";
	$fdata["GoodName"] = "area_id";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","area_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "area_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.area_id";

	
	
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


	$tdataSearch_Buildings["area_id"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "area_id";
//	area_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "area_name";
	$fdata["GoodName"] = "area_name";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","area_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "area_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_areas.area_name";

	
	
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


	$tdataSearch_Buildings["area_name"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "area_name";
//	building_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "building_name";
	$fdata["GoodName"] = "building_name";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","building_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.designation";

	
	
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


	$tdataSearch_Buildings["building_name"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "building_name";
//	order_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "order_area";
	$fdata["GoodName"] = "order_area";
	$fdata["ownerTable"] = "property_groups_areas";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","order_area");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_groups_areas.`order`";

	
	
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


	$tdataSearch_Buildings["order_area"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "order_area";
//	order_building
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "order_building";
	$fdata["GoodName"] = "order_building";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","order_building");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.`order`";

	
	
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


	$tdataSearch_Buildings["order_building"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "order_building";
//	is_unit_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "is_unit_obsolete";
	$fdata["GoodName"] = "is_unit_obsolete";
	$fdata["ownerTable"] = "property_level_1_buildings";
	$fdata["Label"] = GetFieldLabel("Search_Buildings","is_unit_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "property_level_1_buildings.is_obsolete";

	
	
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


	$tdataSearch_Buildings["is_unit_obsolete"] = $fdata;
		$tdataSearch_Buildings[".searchableFields"][] = "is_unit_obsolete";


$tables_data["Search Buildings"]=&$tdataSearch_Buildings;
$field_labels["Search_Buildings"] = &$fieldLabelsSearch_Buildings;
$fieldToolTips["Search_Buildings"] = &$fieldToolTipsSearch_Buildings;
$placeHolders["Search_Buildings"] = &$placeHoldersSearch_Buildings;
$page_titles["Search_Buildings"] = &$pageTitlesSearch_Buildings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Search Buildings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Search Buildings"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Search_Buildings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "property_level_1_buildings.id_building,  	property_level_1_buildings.external_id,  	property_level_1_buildings.external_system_id,  	property_level_1_buildings.external_table,  	property_level_1_buildings.organization_id,  	ut_map_external_source_units.unee_t_mefe_unit_id,  	ut_map_external_source_units.uneet_created_datetime,  	property_level_1_buildings.country_code,  	property_groups_countries.country_name,  	property_level_1_buildings.area_id,  	property_groups_areas.area_name,  	property_level_1_buildings.designation AS building_name,  	property_groups_areas.`order` AS order_area,  	property_level_1_buildings.`order` AS order_building,  	property_level_1_buildings.is_obsolete AS is_unit_obsolete";
$proto0["m_strFrom"] = "FROM property_level_1_buildings  	LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area  	LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code  	INNER JOIN ut_map_external_source_units ON property_level_1_buildings.id_building = ut_map_external_source_units.new_record_id AND property_level_1_buildings.organization_id = ut_map_external_source_units.organization_id";
$proto0["m_strWhere"] = "(ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL  	AND ut_map_external_source_units.external_property_type_id = 1)";
$proto0["m_strOrderBy"] = "ORDER BY   	property_groups_countries.country_name  	, property_groups_areas.`order`  	, property_groups_areas.area_name  	, property_level_1_buildings.`order`  	, property_level_1_buildings.designation";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL  	AND ut_map_external_source_units.external_property_type_id = 1";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL  	AND ut_map_external_source_units.external_property_type_id = 1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id IS NOT NULL";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Buildings"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "IS NOT NULL";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "ut_map_external_source_units.external_property_type_id = 1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "external_property_type_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Buildings"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= 1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
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
	"m_strName" => "id_building",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto10["m_sql"] = "property_level_1_buildings.id_building";
$proto10["m_srcTableName"] = "Search Buildings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "external_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto12["m_sql"] = "property_level_1_buildings.external_id";
$proto12["m_srcTableName"] = "Search Buildings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto14["m_sql"] = "property_level_1_buildings.external_system_id";
$proto14["m_srcTableName"] = "Search Buildings";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "external_table",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto16["m_sql"] = "property_level_1_buildings.external_table";
$proto16["m_srcTableName"] = "Search Buildings";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto18["m_sql"] = "property_level_1_buildings.organization_id";
$proto18["m_srcTableName"] = "Search Buildings";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_unit_id",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Buildings"
));

$proto20["m_sql"] = "ut_map_external_source_units.unee_t_mefe_unit_id";
$proto20["m_srcTableName"] = "Search Buildings";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "uneet_created_datetime",
	"m_strTable" => "ut_map_external_source_units",
	"m_srcTableName" => "Search Buildings"
));

$proto22["m_sql"] = "ut_map_external_source_units.uneet_created_datetime";
$proto22["m_srcTableName"] = "Search Buildings";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto24["m_sql"] = "property_level_1_buildings.country_code";
$proto24["m_srcTableName"] = "Search Buildings";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Search Buildings"
));

$proto26["m_sql"] = "property_groups_countries.country_name";
$proto26["m_srcTableName"] = "Search Buildings";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto28["m_sql"] = "property_level_1_buildings.area_id";
$proto28["m_srcTableName"] = "Search Buildings";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Buildings"
));

$proto30["m_sql"] = "property_groups_areas.area_name";
$proto30["m_srcTableName"] = "Search Buildings";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto32["m_sql"] = "property_level_1_buildings.designation";
$proto32["m_srcTableName"] = "Search Buildings";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "building_name";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Buildings"
));

$proto34["m_sql"] = "property_groups_areas.`order`";
$proto34["m_srcTableName"] = "Search Buildings";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "order_area";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto36["m_sql"] = "property_level_1_buildings.`order`";
$proto36["m_srcTableName"] = "Search Buildings";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "order_building";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto38["m_sql"] = "property_level_1_buildings.is_obsolete";
$proto38["m_srcTableName"] = "Search Buildings";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "is_unit_obsolete";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "property_level_1_buildings";
$proto41["m_srcTableName"] = "Search Buildings";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id_building";
$proto41["m_columns"][] = "external_id";
$proto41["m_columns"][] = "external_system_id";
$proto41["m_columns"][] = "external_table";
$proto41["m_columns"][] = "syst_created_datetime";
$proto41["m_columns"][] = "creation_system_id";
$proto41["m_columns"][] = "created_by_id";
$proto41["m_columns"][] = "creation_method";
$proto41["m_columns"][] = "syst_updated_datetime";
$proto41["m_columns"][] = "update_system_id";
$proto41["m_columns"][] = "updated_by_id";
$proto41["m_columns"][] = "update_method";
$proto41["m_columns"][] = "organization_id";
$proto41["m_columns"][] = "is_obsolete";
$proto41["m_columns"][] = "order";
$proto41["m_columns"][] = "area_id";
$proto41["m_columns"][] = "is_creation_needed_in_unee_t";
$proto41["m_columns"][] = "do_not_insert";
$proto41["m_columns"][] = "unee_t_unit_type";
$proto41["m_columns"][] = "designation";
$proto41["m_columns"][] = "tower";
$proto41["m_columns"][] = "address_1";
$proto41["m_columns"][] = "address_2";
$proto41["m_columns"][] = "zip_postal_code";
$proto41["m_columns"][] = "state";
$proto41["m_columns"][] = "city";
$proto41["m_columns"][] = "country_code";
$proto41["m_columns"][] = "description";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "property_level_1_buildings";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "Search Buildings";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "property_groups_areas";
$proto45["m_srcTableName"] = "Search Buildings";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id_area";
$proto45["m_columns"][] = "external_id";
$proto45["m_columns"][] = "external_system_id";
$proto45["m_columns"][] = "external_table";
$proto45["m_columns"][] = "syst_created_datetime";
$proto45["m_columns"][] = "creation_system_id";
$proto45["m_columns"][] = "created_by_id";
$proto45["m_columns"][] = "creation_method";
$proto45["m_columns"][] = "syst_updated_datetime";
$proto45["m_columns"][] = "update_system_id";
$proto45["m_columns"][] = "updated_by_id";
$proto45["m_columns"][] = "update_method";
$proto45["m_columns"][] = "is_creation_needed_in_unee_t";
$proto45["m_columns"][] = "organization_id";
$proto45["m_columns"][] = "country_code";
$proto45["m_columns"][] = "is_obsolete";
$proto45["m_columns"][] = "is_default";
$proto45["m_columns"][] = "order";
$proto45["m_columns"][] = "area_name";
$proto45["m_columns"][] = "area_definition";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN property_groups_areas ON property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "Search Buildings";
$proto46=array();
$proto46["m_sql"] = "property_level_1_buildings.area_id = property_groups_areas.id_area";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "area_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= property_groups_areas.id_area";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
												$proto48=array();
$proto48["m_link"] = "SQLL_LEFTJOIN";
			$proto49=array();
$proto49["m_strName"] = "property_groups_countries";
$proto49["m_srcTableName"] = "Search Buildings";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "id_country";
$proto49["m_columns"][] = "syst_created_datetime";
$proto49["m_columns"][] = "creation_system_id";
$proto49["m_columns"][] = "created_by_id";
$proto49["m_columns"][] = "syst_updated_datetime";
$proto49["m_columns"][] = "update_system_id";
$proto49["m_columns"][] = "updated_by_id";
$proto49["m_columns"][] = "is_obsolete";
$proto49["m_columns"][] = "is_default";
$proto49["m_columns"][] = "is_system";
$proto49["m_columns"][] = "order";
$proto49["m_columns"][] = "country_code";
$proto49["m_columns"][] = "country_name";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "LEFT OUTER JOIN property_groups_countries ON property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "Search Buildings";
$proto50=array();
$proto50["m_sql"] = "property_level_1_buildings.country_code = property_groups_countries.country_code";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= property_groups_countries.country_code";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
												$proto52=array();
$proto52["m_link"] = "SQLL_INNERJOIN";
			$proto53=array();
$proto53["m_strName"] = "ut_map_external_source_units";
$proto53["m_srcTableName"] = "Search Buildings";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "id_map";
$proto53["m_columns"][] = "syst_created_datetime";
$proto53["m_columns"][] = "creation_system_id";
$proto53["m_columns"][] = "created_by_id";
$proto53["m_columns"][] = "creation_method";
$proto53["m_columns"][] = "syst_updated_datetime";
$proto53["m_columns"][] = "update_system_id";
$proto53["m_columns"][] = "updated_by_id";
$proto53["m_columns"][] = "update_method";
$proto53["m_columns"][] = "organization_id";
$proto53["m_columns"][] = "is_obsolete";
$proto53["m_columns"][] = "is_update_needed";
$proto53["m_columns"][] = "unee_t_mefe_unit_id";
$proto53["m_columns"][] = "uneet_created_datetime";
$proto53["m_columns"][] = "is_unee_t_created_by_me";
$proto53["m_columns"][] = "unee_t_unit_type";
$proto53["m_columns"][] = "uneet_name";
$proto53["m_columns"][] = "new_record_id";
$proto53["m_columns"][] = "external_property_type_id";
$proto53["m_columns"][] = "external_property_id";
$proto53["m_columns"][] = "external_system";
$proto53["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "INNER JOIN ut_map_external_source_units ON property_level_1_buildings.id_building = ut_map_external_source_units.new_record_id AND property_level_1_buildings.organization_id = ut_map_external_source_units.organization_id";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "Search Buildings";
$proto54=array();
$proto54["m_sql"] = "property_level_1_buildings.id_building = ut_map_external_source_units.new_record_id AND property_level_1_buildings.organization_id = ut_map_external_source_units.organization_id";
$proto54["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "property_level_1_buildings.id_building = ut_map_external_source_units.new_record_id AND property_level_1_buildings.organization_id = ut_map_external_source_units.organization_id"
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
						$proto56=array();
$proto56["m_sql"] = "property_level_1_buildings.id_building = ut_map_external_source_units.new_record_id";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id_building",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "= ut_map_external_source_units.new_record_id";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

			$proto54["m_contained"][]=$obj;
						$proto58=array();
$proto58["m_sql"] = "property_level_1_buildings.organization_id = ut_map_external_source_units.organization_id";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "= ut_map_external_source_units.organization_id";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

			$proto54["m_contained"][]=$obj;
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto60=array();
						$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "Search Buildings"
));

$proto60["m_column"]=$obj;
$proto60["m_bAsc"] = 1;
$proto60["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto60);

$proto0["m_orderby"][]=$obj;					
												$proto62=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Buildings"
));

$proto62["m_column"]=$obj;
$proto62["m_bAsc"] = 1;
$proto62["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto62);

$proto0["m_orderby"][]=$obj;					
												$proto64=array();
						$obj = new SQLField(array(
	"m_strName" => "area_name",
	"m_strTable" => "property_groups_areas",
	"m_srcTableName" => "Search Buildings"
));

$proto64["m_column"]=$obj;
$proto64["m_bAsc"] = 1;
$proto64["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto64);

$proto0["m_orderby"][]=$obj;					
												$proto66=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto66["m_column"]=$obj;
$proto66["m_bAsc"] = 1;
$proto66["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto66);

$proto0["m_orderby"][]=$obj;					
												$proto68=array();
						$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "property_level_1_buildings",
	"m_srcTableName" => "Search Buildings"
));

$proto68["m_column"]=$obj;
$proto68["m_bAsc"] = 1;
$proto68["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto68);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Search Buildings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Search_Buildings = createSqlQuery_Search_Buildings();


	
					
;

															

$tdataSearch_Buildings[".sqlquery"] = $queryData_Search_Buildings;

$tableEvents["Search Buildings"] = new eventsBase;
$tdataSearch_Buildings[".hasEvents"] = false;

?>