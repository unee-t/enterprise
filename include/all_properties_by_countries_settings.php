<?php



$tdataall_properties_by_countries = array();
$tdataall_properties_by_countries[".searchableFields"] = array();
$tdataall_properties_by_countries[".ShortName"] = "all_properties_by_countries";
$tdataall_properties_by_countries[".OwnerID"] = "organization_id";
$tdataall_properties_by_countries[".OriginalTable"] = "ut_verify_count_all_P_by_org_and_countries";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdataall_properties_by_countries[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataall_properties_by_countries[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataall_properties_by_countries[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsall_properties_by_countries = array();
$fieldToolTipsall_properties_by_countries = array();
$pageTitlesall_properties_by_countries = array();
$placeHoldersall_properties_by_countries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsall_properties_by_countries["English"] = array();
	$fieldToolTipsall_properties_by_countries["English"] = array();
	$placeHoldersall_properties_by_countries["English"] = array();
	$pageTitlesall_properties_by_countries["English"] = array();
	$fieldLabelsall_properties_by_countries["English"]["organization"] = "Organization";
	$fieldToolTipsall_properties_by_countries["English"]["organization"] = "";
	$placeHoldersall_properties_by_countries["English"]["organization"] = "";
	$fieldLabelsall_properties_by_countries["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsall_properties_by_countries["English"]["organization_id"] = "";
	$placeHoldersall_properties_by_countries["English"]["organization_id"] = "";
	$fieldLabelsall_properties_by_countries["English"]["country"] = "Country";
	$fieldToolTipsall_properties_by_countries["English"]["country"] = "";
	$placeHoldersall_properties_by_countries["English"]["country"] = "";
	$fieldLabelsall_properties_by_countries["English"]["count_L1P"] = "Level 1";
	$fieldToolTipsall_properties_by_countries["English"]["count_L1P"] = "";
	$placeHoldersall_properties_by_countries["English"]["count_L1P"] = "";
	$fieldLabelsall_properties_by_countries["English"]["count_L2P"] = "Level 2";
	$fieldToolTipsall_properties_by_countries["English"]["count_L2P"] = "";
	$placeHoldersall_properties_by_countries["English"]["count_L2P"] = "";
	$fieldLabelsall_properties_by_countries["English"]["count_L3P"] = "Level 3";
	$fieldToolTipsall_properties_by_countries["English"]["count_L3P"] = "";
	$placeHoldersall_properties_by_countries["English"]["count_L3P"] = "";
	$fieldLabelsall_properties_by_countries["English"]["total_non_obsolete_properties"] = "Total";
	$fieldToolTipsall_properties_by_countries["English"]["total_non_obsolete_properties"] = "";
	$placeHoldersall_properties_by_countries["English"]["total_non_obsolete_properties"] = "";
	if (count($fieldToolTipsall_properties_by_countries["English"]))
		$tdataall_properties_by_countries[".isUseToolTips"] = true;
}


	$tdataall_properties_by_countries[".NCSearch"] = true;



$tdataall_properties_by_countries[".shortTableName"] = "all_properties_by_countries";
$tdataall_properties_by_countries[".nSecOptions"] = 1;

$tdataall_properties_by_countries[".mainTableOwnerID"] = "organization_id";
$tdataall_properties_by_countries[".entityType"] = 1;

$tdataall_properties_by_countries[".strOriginalTableName"] = "ut_verify_count_all_P_by_org_and_countries";

		 



$tdataall_properties_by_countries[".showAddInPopup"] = false;

$tdataall_properties_by_countries[".showEditInPopup"] = false;

$tdataall_properties_by_countries[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataall_properties_by_countries[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataall_properties_by_countries[".listAjax"] = false;
//	temporary
$tdataall_properties_by_countries[".listAjax"] = false;

	$tdataall_properties_by_countries[".audit"] = false;

	$tdataall_properties_by_countries[".locking"] = false;


$pages = $tdataall_properties_by_countries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataall_properties_by_countries[".edit"] = true;
	$tdataall_properties_by_countries[".afterEditAction"] = 1;
	$tdataall_properties_by_countries[".closePopupAfterEdit"] = 1;
	$tdataall_properties_by_countries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataall_properties_by_countries[".add"] = true;
$tdataall_properties_by_countries[".afterAddAction"] = 1;
$tdataall_properties_by_countries[".closePopupAfterAdd"] = 1;
$tdataall_properties_by_countries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataall_properties_by_countries[".list"] = true;
}



$tdataall_properties_by_countries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataall_properties_by_countries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataall_properties_by_countries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataall_properties_by_countries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataall_properties_by_countries[".printFriendly"] = true;
}



$tdataall_properties_by_countries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataall_properties_by_countries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataall_properties_by_countries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataall_properties_by_countries[".isUseAjaxSuggest"] = true;

$tdataall_properties_by_countries[".rowHighlite"] = true;





$tdataall_properties_by_countries[".ajaxCodeSnippetAdded"] = false;

$tdataall_properties_by_countries[".buttonsAdded"] = false;

$tdataall_properties_by_countries[".addPageEvents"] = false;

// use timepicker for search panel
$tdataall_properties_by_countries[".isUseTimeForSearch"] = false;


$tdataall_properties_by_countries[".badgeColor"] = "EDCA00";


$tdataall_properties_by_countries[".allSearchFields"] = array();
$tdataall_properties_by_countries[".filterFields"] = array();
$tdataall_properties_by_countries[".requiredSearchFields"] = array();

$tdataall_properties_by_countries[".googleLikeFields"] = array();
$tdataall_properties_by_countries[".googleLikeFields"][] = "country";



$tdataall_properties_by_countries[".tableType"] = "list";

$tdataall_properties_by_countries[".printerPageOrientation"] = 0;
$tdataall_properties_by_countries[".nPrinterPageScale"] = 100;

$tdataall_properties_by_countries[".nPrinterSplitRecords"] = 40;

$tdataall_properties_by_countries[".geocodingEnabled"] = false;










$tdataall_properties_by_countries[".pageSize"] = 20;

$tdataall_properties_by_countries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataall_properties_by_countries[".strOrderBy"] = $tstrOrderBy;

$tdataall_properties_by_countries[".orderindexes"] = array();

$tdataall_properties_by_countries[".sqlHead"] = "SELECT `organization`,  	organization_id,  	country,  	count_L1P,  	count_L2P,  	count_L3P,  	total_non_obsolete_properties";
$tdataall_properties_by_countries[".sqlFrom"] = "FROM ut_verify_count_all_P_by_org_and_countries";
$tdataall_properties_by_countries[".sqlWhereExpr"] = "";
$tdataall_properties_by_countries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataall_properties_by_countries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataall_properties_by_countries[".arrGroupsPerPage"] = $arrGPP;

$tdataall_properties_by_countries[".highlightSearchResults"] = true;

$tableKeysall_properties_by_countries = array();
$tableKeysall_properties_by_countries[] = "organization_id";
$tableKeysall_properties_by_countries[] = "country";
$tdataall_properties_by_countries[".Keys"] = $tableKeysall_properties_by_countries;


$tdataall_properties_by_countries[".hideMobileList"] = array();




//	organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "organization";
	$fdata["GoodName"] = "organization";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","organization");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`organization`";

	
	
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


	$tdataall_properties_by_countries["organization"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "organization";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","organization_id");
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


	$tdataall_properties_by_countries["organization_id"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "organization_id";
//	country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "country";
	$fdata["GoodName"] = "country";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","country");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "country";

	
	
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


	$tdataall_properties_by_countries["country"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "country";
//	count_L1P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "count_L1P";
	$fdata["GoodName"] = "count_L1P";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","count_L1P");
	$fdata["FieldType"] = 20;

	
	
	
										

		$fdata["strField"] = "count_L1P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count_L1P";

	
	
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


	$tdataall_properties_by_countries["count_L1P"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "count_L1P";
//	count_L2P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "count_L2P";
	$fdata["GoodName"] = "count_L2P";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","count_L2P");
	$fdata["FieldType"] = 20;

	
	
	
										

		$fdata["strField"] = "count_L2P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count_L2P";

	
	
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


	$tdataall_properties_by_countries["count_L2P"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "count_L2P";
//	count_L3P
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "count_L3P";
	$fdata["GoodName"] = "count_L3P";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","count_L3P");
	$fdata["FieldType"] = 20;

	
	
	
										

		$fdata["strField"] = "count_L3P";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "count_L3P";

	
	
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


	$tdataall_properties_by_countries["count_L3P"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "count_L3P";
//	total_non_obsolete_properties
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "total_non_obsolete_properties";
	$fdata["GoodName"] = "total_non_obsolete_properties";
	$fdata["ownerTable"] = "ut_verify_count_all_P_by_org_and_countries";
	$fdata["Label"] = GetFieldLabel("All_Properties_by_Countries","total_non_obsolete_properties");
	$fdata["FieldType"] = 20;

	
	
	
										

		$fdata["strField"] = "total_non_obsolete_properties";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total_non_obsolete_properties";

	
	
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


	$tdataall_properties_by_countries["total_non_obsolete_properties"] = $fdata;
		$tdataall_properties_by_countries[".searchableFields"][] = "total_non_obsolete_properties";


$tables_data["All Properties by Countries"]=&$tdataall_properties_by_countries;
$field_labels["All_Properties_by_Countries"] = &$fieldLabelsall_properties_by_countries;
$fieldToolTips["All_Properties_by_Countries"] = &$fieldToolTipsall_properties_by_countries;
$placeHolders["All_Properties_by_Countries"] = &$placeHoldersall_properties_by_countries;
$page_titles["All_Properties_by_Countries"] = &$pageTitlesall_properties_by_countries;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["All Properties by Countries"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["All Properties by Countries"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_all_properties_by_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`organization`,  	organization_id,  	country,  	count_L1P,  	count_L2P,  	count_L3P,  	total_non_obsolete_properties";
$proto0["m_strFrom"] = "FROM ut_verify_count_all_P_by_org_and_countries";
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
	"m_strName" => "organization",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto6["m_sql"] = "`organization`";
$proto6["m_srcTableName"] = "All Properties by Countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto8["m_sql"] = "organization_id";
$proto8["m_srcTableName"] = "All Properties by Countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "country",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto10["m_sql"] = "country";
$proto10["m_srcTableName"] = "All Properties by Countries";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "count_L1P",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto12["m_sql"] = "count_L1P";
$proto12["m_srcTableName"] = "All Properties by Countries";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "count_L2P",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto14["m_sql"] = "count_L2P";
$proto14["m_srcTableName"] = "All Properties by Countries";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "count_L3P",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto16["m_sql"] = "count_L3P";
$proto16["m_srcTableName"] = "All Properties by Countries";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "total_non_obsolete_properties",
	"m_strTable" => "ut_verify_count_all_P_by_org_and_countries",
	"m_srcTableName" => "All Properties by Countries"
));

$proto18["m_sql"] = "total_non_obsolete_properties";
$proto18["m_srcTableName"] = "All Properties by Countries";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "ut_verify_count_all_P_by_org_and_countries";
$proto21["m_srcTableName"] = "All Properties by Countries";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "organization";
$proto21["m_columns"][] = "organization_id";
$proto21["m_columns"][] = "country";
$proto21["m_columns"][] = "count_L1P";
$proto21["m_columns"][] = "count_L2P";
$proto21["m_columns"][] = "count_L3P";
$proto21["m_columns"][] = "total_non_obsolete_properties";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "ut_verify_count_all_P_by_org_and_countries";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "All Properties by Countries";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="All Properties by Countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_all_properties_by_countries = createSqlQuery_all_properties_by_countries();


	
					
;

							

$tdataall_properties_by_countries[".sqlquery"] = $queryData_all_properties_by_countries;

$tableEvents["All Properties by Countries"] = new eventsBase;
$tdataall_properties_by_countries[".hasEvents"] = false;

?>