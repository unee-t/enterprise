<?php



$tdataproperty_groups_countries = array();
$tdataproperty_groups_countries[".searchableFields"] = array();
$tdataproperty_groups_countries[".ShortName"] = "property_groups_countries";
$tdataproperty_groups_countries[".OwnerID"] = "";
$tdataproperty_groups_countries[".OriginalTable"] = "property_groups_countries";


$defaultPages = my_json_decode( "{}" );

$tdataproperty_groups_countries[".pagesByType"] = my_json_decode( "{}" );
$tdataproperty_groups_countries[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataproperty_groups_countries[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsproperty_groups_countries = array();
$fieldToolTipsproperty_groups_countries = array();
$pageTitlesproperty_groups_countries = array();
$placeHoldersproperty_groups_countries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproperty_groups_countries["English"] = array();
	$fieldToolTipsproperty_groups_countries["English"] = array();
	$placeHoldersproperty_groups_countries["English"] = array();
	$pageTitlesproperty_groups_countries["English"] = array();
	$fieldLabelsproperty_groups_countries["English"]["id_country"] = "Id Country";
	$fieldToolTipsproperty_groups_countries["English"]["id_country"] = "";
	$placeHoldersproperty_groups_countries["English"]["id_country"] = "";
	$fieldLabelsproperty_groups_countries["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsproperty_groups_countries["English"]["syst_created_datetime"] = "";
	$placeHoldersproperty_groups_countries["English"]["syst_created_datetime"] = "";
	$fieldLabelsproperty_groups_countries["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsproperty_groups_countries["English"]["creation_system_id"] = "";
	$placeHoldersproperty_groups_countries["English"]["creation_system_id"] = "";
	$fieldLabelsproperty_groups_countries["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsproperty_groups_countries["English"]["created_by_id"] = "";
	$placeHoldersproperty_groups_countries["English"]["created_by_id"] = "";
	$fieldLabelsproperty_groups_countries["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsproperty_groups_countries["English"]["syst_updated_datetime"] = "";
	$placeHoldersproperty_groups_countries["English"]["syst_updated_datetime"] = "";
	$fieldLabelsproperty_groups_countries["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsproperty_groups_countries["English"]["update_system_id"] = "";
	$placeHoldersproperty_groups_countries["English"]["update_system_id"] = "";
	$fieldLabelsproperty_groups_countries["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsproperty_groups_countries["English"]["updated_by_id"] = "";
	$placeHoldersproperty_groups_countries["English"]["updated_by_id"] = "";
	$fieldLabelsproperty_groups_countries["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsproperty_groups_countries["English"]["is_obsolete"] = "";
	$placeHoldersproperty_groups_countries["English"]["is_obsolete"] = "";
	$fieldLabelsproperty_groups_countries["English"]["is_default"] = "Is Default";
	$fieldToolTipsproperty_groups_countries["English"]["is_default"] = "";
	$placeHoldersproperty_groups_countries["English"]["is_default"] = "";
	$fieldLabelsproperty_groups_countries["English"]["is_system"] = "Is System";
	$fieldToolTipsproperty_groups_countries["English"]["is_system"] = "";
	$placeHoldersproperty_groups_countries["English"]["is_system"] = "";
	$fieldLabelsproperty_groups_countries["English"]["order"] = "Order";
	$fieldToolTipsproperty_groups_countries["English"]["order"] = "";
	$placeHoldersproperty_groups_countries["English"]["order"] = "";
	$fieldLabelsproperty_groups_countries["English"]["country_code"] = "Country Code";
	$fieldToolTipsproperty_groups_countries["English"]["country_code"] = "";
	$placeHoldersproperty_groups_countries["English"]["country_code"] = "";
	$fieldLabelsproperty_groups_countries["English"]["country_name"] = "Country Name";
	$fieldToolTipsproperty_groups_countries["English"]["country_name"] = "";
	$placeHoldersproperty_groups_countries["English"]["country_name"] = "";
	if (count($fieldToolTipsproperty_groups_countries["English"]))
		$tdataproperty_groups_countries[".isUseToolTips"] = true;
}


	$tdataproperty_groups_countries[".NCSearch"] = true;



$tdataproperty_groups_countries[".shortTableName"] = "property_groups_countries";
$tdataproperty_groups_countries[".nSecOptions"] = 0;

$tdataproperty_groups_countries[".mainTableOwnerID"] = "";
$tdataproperty_groups_countries[".entityType"] = 0;

$tdataproperty_groups_countries[".strOriginalTableName"] = "property_groups_countries";

		 



$tdataproperty_groups_countries[".showAddInPopup"] = false;

$tdataproperty_groups_countries[".showEditInPopup"] = false;

$tdataproperty_groups_countries[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproperty_groups_countries[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataproperty_groups_countries[".listAjax"] = true;
//	temporary
$tdataproperty_groups_countries[".listAjax"] = false;

	$tdataproperty_groups_countries[".audit"] = false;

	$tdataproperty_groups_countries[".locking"] = false;


$pages = $tdataproperty_groups_countries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproperty_groups_countries[".edit"] = true;
	$tdataproperty_groups_countries[".afterEditAction"] = 1;
	$tdataproperty_groups_countries[".closePopupAfterEdit"] = 1;
	$tdataproperty_groups_countries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataproperty_groups_countries[".add"] = true;
$tdataproperty_groups_countries[".afterAddAction"] = 1;
$tdataproperty_groups_countries[".closePopupAfterAdd"] = 1;
$tdataproperty_groups_countries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproperty_groups_countries[".list"] = true;
}



$tdataproperty_groups_countries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproperty_groups_countries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproperty_groups_countries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproperty_groups_countries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproperty_groups_countries[".printFriendly"] = true;
}



$tdataproperty_groups_countries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproperty_groups_countries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproperty_groups_countries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproperty_groups_countries[".isUseAjaxSuggest"] = true;

$tdataproperty_groups_countries[".rowHighlite"] = true;





$tdataproperty_groups_countries[".ajaxCodeSnippetAdded"] = false;

$tdataproperty_groups_countries[".buttonsAdded"] = false;

$tdataproperty_groups_countries[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproperty_groups_countries[".isUseTimeForSearch"] = false;




$tdataproperty_groups_countries[".allSearchFields"] = array();
$tdataproperty_groups_countries[".filterFields"] = array();
$tdataproperty_groups_countries[".requiredSearchFields"] = array();

$tdataproperty_groups_countries[".googleLikeFields"] = array();
$tdataproperty_groups_countries[".googleLikeFields"][] = "id_country";
$tdataproperty_groups_countries[".googleLikeFields"][] = "syst_created_datetime";
$tdataproperty_groups_countries[".googleLikeFields"][] = "creation_system_id";
$tdataproperty_groups_countries[".googleLikeFields"][] = "created_by_id";
$tdataproperty_groups_countries[".googleLikeFields"][] = "syst_updated_datetime";
$tdataproperty_groups_countries[".googleLikeFields"][] = "update_system_id";
$tdataproperty_groups_countries[".googleLikeFields"][] = "updated_by_id";
$tdataproperty_groups_countries[".googleLikeFields"][] = "is_obsolete";
$tdataproperty_groups_countries[".googleLikeFields"][] = "is_default";
$tdataproperty_groups_countries[".googleLikeFields"][] = "is_system";
$tdataproperty_groups_countries[".googleLikeFields"][] = "order";
$tdataproperty_groups_countries[".googleLikeFields"][] = "country_code";
$tdataproperty_groups_countries[".googleLikeFields"][] = "country_name";



$tdataproperty_groups_countries[".tableType"] = "list";

$tdataproperty_groups_countries[".printerPageOrientation"] = 0;
$tdataproperty_groups_countries[".nPrinterPageScale"] = 100;

$tdataproperty_groups_countries[".nPrinterSplitRecords"] = 40;

$tdataproperty_groups_countries[".geocodingEnabled"] = false;





$tdataproperty_groups_countries[".isResizeColumns"] = true;





$tdataproperty_groups_countries[".pageSize"] = 20;

$tdataproperty_groups_countries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproperty_groups_countries[".strOrderBy"] = $tstrOrderBy;

$tdataproperty_groups_countries[".orderindexes"] = array();

$tdataproperty_groups_countries[".sqlHead"] = "SELECT id_country,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	is_obsolete,  	is_default,  	is_system,  	`order`,  	country_code,  	country_name";
$tdataproperty_groups_countries[".sqlFrom"] = "FROM property_groups_countries";
$tdataproperty_groups_countries[".sqlWhereExpr"] = "";
$tdataproperty_groups_countries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproperty_groups_countries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproperty_groups_countries[".arrGroupsPerPage"] = $arrGPP;

$tdataproperty_groups_countries[".highlightSearchResults"] = true;

$tableKeysproperty_groups_countries = array();
$tableKeysproperty_groups_countries[] = "id_country";
$tableKeysproperty_groups_countries[] = "country_code";
$tdataproperty_groups_countries[".Keys"] = $tableKeysproperty_groups_countries;


$tdataproperty_groups_countries[".hideMobileList"] = array();




//	id_country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_country";
	$fdata["GoodName"] = "id_country";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","id_country");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_country";

	
	
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


	$tdataproperty_groups_countries["id_country"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "id_country";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","syst_created_datetime");
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


	$tdataproperty_groups_countries["syst_created_datetime"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","creation_system_id");
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


	$tdataproperty_groups_countries["creation_system_id"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","created_by_id");
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


	$tdataproperty_groups_countries["created_by_id"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "created_by_id";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","syst_updated_datetime");
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


	$tdataproperty_groups_countries["syst_updated_datetime"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","update_system_id");
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


	$tdataproperty_groups_countries["update_system_id"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","updated_by_id");
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


	$tdataproperty_groups_countries["updated_by_id"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "updated_by_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","is_obsolete");
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


	$tdataproperty_groups_countries["is_obsolete"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "is_obsolete";
//	is_default
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "is_default";
	$fdata["GoodName"] = "is_default";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","is_default");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_default";

	
	
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


	$tdataproperty_groups_countries["is_default"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "is_default";
//	is_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "is_system";
	$fdata["GoodName"] = "is_system";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","is_system");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_system";

	
	
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


	$tdataproperty_groups_countries["is_system"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "is_system";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","order");
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


	$tdataproperty_groups_countries["order"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "order";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","country_code");
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


	$tdataproperty_groups_countries["country_code"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "country_code";
//	country_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "country_name";
	$fdata["GoodName"] = "country_name";
	$fdata["ownerTable"] = "property_groups_countries";
	$fdata["Label"] = GetFieldLabel("property_groups_countries","country_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country_name";

	
	
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
			$edata["EditParams"].= " maxlength=256";

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


	$tdataproperty_groups_countries["country_name"] = $fdata;
		$tdataproperty_groups_countries[".searchableFields"][] = "country_name";


$tables_data["property_groups_countries"]=&$tdataproperty_groups_countries;
$field_labels["property_groups_countries"] = &$fieldLabelsproperty_groups_countries;
$fieldToolTips["property_groups_countries"] = &$fieldToolTipsproperty_groups_countries;
$placeHolders["property_groups_countries"] = &$placeHoldersproperty_groups_countries;
$page_titles["property_groups_countries"] = &$pageTitlesproperty_groups_countries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["property_groups_countries"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["property_groups_countries"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_property_groups_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_country,  	syst_created_datetime,  	creation_system_id,  	created_by_id,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	is_obsolete,  	is_default,  	is_system,  	`order`,  	country_code,  	country_name";
$proto0["m_strFrom"] = "FROM property_groups_countries";
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
	"m_strName" => "id_country",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto6["m_sql"] = "id_country";
$proto6["m_srcTableName"] = "property_groups_countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto8["m_sql"] = "syst_created_datetime";
$proto8["m_srcTableName"] = "property_groups_countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto10["m_sql"] = "creation_system_id";
$proto10["m_srcTableName"] = "property_groups_countries";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto12["m_sql"] = "created_by_id";
$proto12["m_srcTableName"] = "property_groups_countries";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto14["m_sql"] = "syst_updated_datetime";
$proto14["m_srcTableName"] = "property_groups_countries";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto16["m_sql"] = "update_system_id";
$proto16["m_srcTableName"] = "property_groups_countries";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto18["m_sql"] = "updated_by_id";
$proto18["m_srcTableName"] = "property_groups_countries";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto20["m_sql"] = "is_obsolete";
$proto20["m_srcTableName"] = "property_groups_countries";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto22["m_sql"] = "is_default";
$proto22["m_srcTableName"] = "property_groups_countries";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "is_system",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto24["m_sql"] = "is_system";
$proto24["m_srcTableName"] = "property_groups_countries";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto26["m_sql"] = "`order`";
$proto26["m_srcTableName"] = "property_groups_countries";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto28["m_sql"] = "country_code";
$proto28["m_srcTableName"] = "property_groups_countries";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "country_name",
	"m_strTable" => "property_groups_countries",
	"m_srcTableName" => "property_groups_countries"
));

$proto30["m_sql"] = "country_name";
$proto30["m_srcTableName"] = "property_groups_countries";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "property_groups_countries";
$proto33["m_srcTableName"] = "property_groups_countries";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_country";
$proto33["m_columns"][] = "syst_created_datetime";
$proto33["m_columns"][] = "creation_system_id";
$proto33["m_columns"][] = "created_by_id";
$proto33["m_columns"][] = "syst_updated_datetime";
$proto33["m_columns"][] = "update_system_id";
$proto33["m_columns"][] = "updated_by_id";
$proto33["m_columns"][] = "is_obsolete";
$proto33["m_columns"][] = "is_default";
$proto33["m_columns"][] = "is_system";
$proto33["m_columns"][] = "order";
$proto33["m_columns"][] = "country_code";
$proto33["m_columns"][] = "country_name";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "property_groups_countries";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "property_groups_countries";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="property_groups_countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_property_groups_countries = createSqlQuery_property_groups_countries();


	
					
;

													

$tdataproperty_groups_countries[".sqlquery"] = $queryData_property_groups_countries;

$tableEvents["property_groups_countries"] = new eventsBase;
$tdataproperty_groups_countries[".hasEvents"] = false;

?>