<?php



$tdataut_unit_types = array();
$tdataut_unit_types[".searchableFields"] = array();
$tdataut_unit_types[".ShortName"] = "ut_unit_types";
$tdataut_unit_types[".OwnerID"] = "";
$tdataut_unit_types[".OriginalTable"] = "ut_unit_types";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );

$tdataut_unit_types[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataut_unit_types[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataut_unit_types[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsut_unit_types = array();
$fieldToolTipsut_unit_types = array();
$pageTitlesut_unit_types = array();
$placeHoldersut_unit_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsut_unit_types["English"] = array();
	$fieldToolTipsut_unit_types["English"] = array();
	$placeHoldersut_unit_types["English"] = array();
	$pageTitlesut_unit_types["English"] = array();
	$fieldLabelsut_unit_types["English"]["id_property_type"] = "Id Property Type";
	$fieldToolTipsut_unit_types["English"]["id_property_type"] = "";
	$placeHoldersut_unit_types["English"]["id_property_type"] = "";
	$fieldLabelsut_unit_types["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsut_unit_types["English"]["syst_created_datetime"] = "";
	$placeHoldersut_unit_types["English"]["syst_created_datetime"] = "";
	$fieldLabelsut_unit_types["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsut_unit_types["English"]["creation_system_id"] = "";
	$placeHoldersut_unit_types["English"]["creation_system_id"] = "";
	$fieldLabelsut_unit_types["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsut_unit_types["English"]["created_by_id"] = "";
	$placeHoldersut_unit_types["English"]["created_by_id"] = "";
	$fieldLabelsut_unit_types["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsut_unit_types["English"]["syst_updated_datetime"] = "";
	$placeHoldersut_unit_types["English"]["syst_updated_datetime"] = "";
	$fieldLabelsut_unit_types["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsut_unit_types["English"]["update_system_id"] = "";
	$placeHoldersut_unit_types["English"]["update_system_id"] = "";
	$fieldLabelsut_unit_types["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsut_unit_types["English"]["updated_by_id"] = "";
	$placeHoldersut_unit_types["English"]["updated_by_id"] = "";
	$fieldLabelsut_unit_types["English"]["order"] = "Order";
	$fieldToolTipsut_unit_types["English"]["order"] = "";
	$placeHoldersut_unit_types["English"]["order"] = "";
	$fieldLabelsut_unit_types["English"]["is_level_1"] = "Is Level 1";
	$fieldToolTipsut_unit_types["English"]["is_level_1"] = "";
	$placeHoldersut_unit_types["English"]["is_level_1"] = "";
	$fieldLabelsut_unit_types["English"]["is_level_2"] = "Is Level 2";
	$fieldToolTipsut_unit_types["English"]["is_level_2"] = "";
	$placeHoldersut_unit_types["English"]["is_level_2"] = "";
	$fieldLabelsut_unit_types["English"]["is_level_3"] = "Is Level 3";
	$fieldToolTipsut_unit_types["English"]["is_level_3"] = "";
	$placeHoldersut_unit_types["English"]["is_level_3"] = "";
	$fieldLabelsut_unit_types["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsut_unit_types["English"]["is_obsolete"] = "";
	$placeHoldersut_unit_types["English"]["is_obsolete"] = "";
	$fieldLabelsut_unit_types["English"]["designation"] = "Designation";
	$fieldToolTipsut_unit_types["English"]["designation"] = "";
	$placeHoldersut_unit_types["English"]["designation"] = "";
	$fieldLabelsut_unit_types["English"]["description"] = "Description";
	$fieldToolTipsut_unit_types["English"]["description"] = "";
	$placeHoldersut_unit_types["English"]["description"] = "";
	if (count($fieldToolTipsut_unit_types["English"]))
		$tdataut_unit_types[".isUseToolTips"] = true;
}


	$tdataut_unit_types[".NCSearch"] = true;



$tdataut_unit_types[".shortTableName"] = "ut_unit_types";
$tdataut_unit_types[".nSecOptions"] = 0;

$tdataut_unit_types[".mainTableOwnerID"] = "";
$tdataut_unit_types[".entityType"] = 0;

$tdataut_unit_types[".strOriginalTableName"] = "ut_unit_types";

		 



$tdataut_unit_types[".showAddInPopup"] = false;

$tdataut_unit_types[".showEditInPopup"] = false;

$tdataut_unit_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataut_unit_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataut_unit_types[".listAjax"] = true;
//	temporary
$tdataut_unit_types[".listAjax"] = false;

	$tdataut_unit_types[".audit"] = false;

	$tdataut_unit_types[".locking"] = false;


$pages = $tdataut_unit_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataut_unit_types[".edit"] = true;
	$tdataut_unit_types[".afterEditAction"] = 1;
	$tdataut_unit_types[".closePopupAfterEdit"] = 1;
	$tdataut_unit_types[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataut_unit_types[".add"] = true;
$tdataut_unit_types[".afterAddAction"] = 1;
$tdataut_unit_types[".closePopupAfterAdd"] = 1;
$tdataut_unit_types[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataut_unit_types[".list"] = true;
}



$tdataut_unit_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataut_unit_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataut_unit_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataut_unit_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataut_unit_types[".printFriendly"] = true;
}



$tdataut_unit_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataut_unit_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataut_unit_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataut_unit_types[".isUseAjaxSuggest"] = true;

$tdataut_unit_types[".rowHighlite"] = true;





$tdataut_unit_types[".ajaxCodeSnippetAdded"] = false;

$tdataut_unit_types[".buttonsAdded"] = false;

$tdataut_unit_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdataut_unit_types[".isUseTimeForSearch"] = false;




$tdataut_unit_types[".allSearchFields"] = array();
$tdataut_unit_types[".filterFields"] = array();
$tdataut_unit_types[".requiredSearchFields"] = array();

$tdataut_unit_types[".googleLikeFields"] = array();
$tdataut_unit_types[".googleLikeFields"][] = "id_property_type";
$tdataut_unit_types[".googleLikeFields"][] = "syst_created_datetime";
$tdataut_unit_types[".googleLikeFields"][] = "creation_system_id";
$tdataut_unit_types[".googleLikeFields"][] = "created_by_id";
$tdataut_unit_types[".googleLikeFields"][] = "syst_updated_datetime";
$tdataut_unit_types[".googleLikeFields"][] = "update_system_id";
$tdataut_unit_types[".googleLikeFields"][] = "updated_by_id";
$tdataut_unit_types[".googleLikeFields"][] = "order";
$tdataut_unit_types[".googleLikeFields"][] = "is_level_1";
$tdataut_unit_types[".googleLikeFields"][] = "is_level_2";
$tdataut_unit_types[".googleLikeFields"][] = "is_level_3";
$tdataut_unit_types[".googleLikeFields"][] = "is_obsolete";
$tdataut_unit_types[".googleLikeFields"][] = "designation";
$tdataut_unit_types[".googleLikeFields"][] = "description";



$tdataut_unit_types[".tableType"] = "list";

$tdataut_unit_types[".printerPageOrientation"] = 0;
$tdataut_unit_types[".nPrinterPageScale"] = 100;

$tdataut_unit_types[".nPrinterSplitRecords"] = 40;

$tdataut_unit_types[".geocodingEnabled"] = false;





$tdataut_unit_types[".isResizeColumns"] = true;





$tdataut_unit_types[".pageSize"] = 20;

$tdataut_unit_types[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataut_unit_types[".strOrderBy"] = $tstrOrderBy;

$tdataut_unit_types[".orderindexes"] = array();

$tdataut_unit_types[".sqlHead"] = "SELECT id_property_type,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	`order`,  	is_level_1,  	is_level_2,  	is_level_3,  	is_obsolete,  	designation,  	description";
$tdataut_unit_types[".sqlFrom"] = "FROM ut_unit_types";
$tdataut_unit_types[".sqlWhereExpr"] = "";
$tdataut_unit_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataut_unit_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataut_unit_types[".arrGroupsPerPage"] = $arrGPP;

$tdataut_unit_types[".highlightSearchResults"] = true;

$tableKeysut_unit_types = array();
$tableKeysut_unit_types[] = "id_property_type";
$tdataut_unit_types[".Keys"] = $tableKeysut_unit_types;


$tdataut_unit_types[".hideMobileList"] = array();




//	id_property_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_property_type";
	$fdata["GoodName"] = "id_property_type";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","id_property_type");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_property_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_property_type";

	
	
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


	$tdataut_unit_types["id_property_type"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "id_property_type";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","syst_created_datetime");
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


	$tdataut_unit_types["syst_created_datetime"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","creation_system_id");
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


	$tdataut_unit_types["creation_system_id"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","created_by_id");
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


	$tdataut_unit_types["created_by_id"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "created_by_id";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","syst_updated_datetime");
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


	$tdataut_unit_types["syst_updated_datetime"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","update_system_id");
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


	$tdataut_unit_types["update_system_id"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","updated_by_id");
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


	$tdataut_unit_types["updated_by_id"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "updated_by_id";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","order");
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


	$tdataut_unit_types["order"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "order";
//	is_level_1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "is_level_1";
	$fdata["GoodName"] = "is_level_1";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","is_level_1");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_level_1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_level_1";

	
	
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


	$tdataut_unit_types["is_level_1"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "is_level_1";
//	is_level_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "is_level_2";
	$fdata["GoodName"] = "is_level_2";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","is_level_2");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_level_2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_level_2";

	
	
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


	$tdataut_unit_types["is_level_2"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "is_level_2";
//	is_level_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_level_3";
	$fdata["GoodName"] = "is_level_3";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","is_level_3");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_level_3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_level_3";

	
	
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


	$tdataut_unit_types["is_level_3"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "is_level_3";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","is_obsolete");
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


	$tdataut_unit_types["is_obsolete"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","designation");
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


	$tdataut_unit_types["designation"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "ut_unit_types";
	$fdata["Label"] = GetFieldLabel("ut_unit_types","description");
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


	$tdataut_unit_types["description"] = $fdata;
		$tdataut_unit_types[".searchableFields"][] = "description";


$tables_data["ut_unit_types"]=&$tdataut_unit_types;
$field_labels["ut_unit_types"] = &$fieldLabelsut_unit_types;
$fieldToolTips["ut_unit_types"] = &$fieldToolTipsut_unit_types;
$placeHolders["ut_unit_types"] = &$placeHoldersut_unit_types;
$page_titles["ut_unit_types"] = &$pageTitlesut_unit_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ut_unit_types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ut_unit_types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ut_unit_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_property_type,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	`order`,  	is_level_1,  	is_level_2,  	is_level_3,  	is_obsolete,  	designation,  	description";
$proto0["m_strFrom"] = "FROM ut_unit_types";
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
	"m_strName" => "id_property_type",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto6["m_sql"] = "id_property_type";
$proto6["m_srcTableName"] = "ut_unit_types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto8["m_sql"] = "syst_created_datetime";
$proto8["m_srcTableName"] = "ut_unit_types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto10["m_sql"] = "creation_system_id";
$proto10["m_srcTableName"] = "ut_unit_types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto12["m_sql"] = "created_by_id";
$proto12["m_srcTableName"] = "ut_unit_types";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto14["m_sql"] = "syst_updated_datetime";
$proto14["m_srcTableName"] = "ut_unit_types";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto16["m_sql"] = "update_system_id";
$proto16["m_srcTableName"] = "ut_unit_types";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto18["m_sql"] = "updated_by_id";
$proto18["m_srcTableName"] = "ut_unit_types";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto20["m_sql"] = "`order`";
$proto20["m_srcTableName"] = "ut_unit_types";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_level_1",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto22["m_sql"] = "is_level_1";
$proto22["m_srcTableName"] = "ut_unit_types";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "is_level_2",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto24["m_sql"] = "is_level_2";
$proto24["m_srcTableName"] = "ut_unit_types";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_level_3",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto26["m_sql"] = "is_level_3";
$proto26["m_srcTableName"] = "ut_unit_types";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto28["m_sql"] = "is_obsolete";
$proto28["m_srcTableName"] = "ut_unit_types";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto30["m_sql"] = "designation";
$proto30["m_srcTableName"] = "ut_unit_types";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "ut_unit_types",
	"m_srcTableName" => "ut_unit_types"
));

$proto32["m_sql"] = "description";
$proto32["m_srcTableName"] = "ut_unit_types";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "ut_unit_types";
$proto35["m_srcTableName"] = "ut_unit_types";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "id_property_type";
$proto35["m_columns"][] = "syst_created_datetime";
$proto35["m_columns"][] = "creation_system_id";
$proto35["m_columns"][] = "created_by_id";
$proto35["m_columns"][] = "syst_updated_datetime";
$proto35["m_columns"][] = "update_system_id";
$proto35["m_columns"][] = "updated_by_id";
$proto35["m_columns"][] = "order";
$proto35["m_columns"][] = "is_level_1";
$proto35["m_columns"][] = "is_level_2";
$proto35["m_columns"][] = "is_level_3";
$proto35["m_columns"][] = "is_obsolete";
$proto35["m_columns"][] = "designation";
$proto35["m_columns"][] = "description";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "ut_unit_types";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "ut_unit_types";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ut_unit_types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ut_unit_types = createSqlQuery_ut_unit_types();


	
					
;

														

$tdataut_unit_types[".sqlquery"] = $queryData_ut_unit_types;

$tableEvents["ut_unit_types"] = new eventsBase;
$tdataut_unit_types[".hasEvents"] = false;

?>