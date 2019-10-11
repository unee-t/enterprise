<?php



$tdatasearch_list_of_possible_assignees = array();
$tdatasearch_list_of_possible_assignees[".searchableFields"] = array();
$tdatasearch_list_of_possible_assignees[".ShortName"] = "search_list_of_possible_assignees";
$tdatasearch_list_of_possible_assignees[".OwnerID"] = "organization_id";
$tdatasearch_list_of_possible_assignees[".OriginalTable"] = "ut_list_possible_assignees";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdatasearch_list_of_possible_assignees[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasearch_list_of_possible_assignees[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasearch_list_of_possible_assignees[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssearch_list_of_possible_assignees = array();
$fieldToolTipssearch_list_of_possible_assignees = array();
$pageTitlessearch_list_of_possible_assignees = array();
$placeHolderssearch_list_of_possible_assignees = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssearch_list_of_possible_assignees["English"] = array();
	$fieldToolTipssearch_list_of_possible_assignees["English"] = array();
	$placeHolderssearch_list_of_possible_assignees["English"] = array();
	$pageTitlessearch_list_of_possible_assignees["English"] = array();
	$fieldLabelssearch_list_of_possible_assignees["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["unee_t_mefe_user_id"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["organization_id"] = "Organization Id";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["organization_id"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["organization_id"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["person_id"] = "Person Id";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["person_id"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["person_id"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["given_name"] = "Given Name";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["given_name"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["given_name"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["family_name"] = "Family Name";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["family_name"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["family_name"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["alias"] = "Alias";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["alias"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["alias"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["email"] = "Email";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["email"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["email"] = "";
	$fieldLabelssearch_list_of_possible_assignees["English"]["person_designation"] = "Person";
	$fieldToolTipssearch_list_of_possible_assignees["English"]["person_designation"] = "";
	$placeHolderssearch_list_of_possible_assignees["English"]["person_designation"] = "";
	if (count($fieldToolTipssearch_list_of_possible_assignees["English"]))
		$tdatasearch_list_of_possible_assignees[".isUseToolTips"] = true;
}


	$tdatasearch_list_of_possible_assignees[".NCSearch"] = true;



$tdatasearch_list_of_possible_assignees[".shortTableName"] = "search_list_of_possible_assignees";
$tdatasearch_list_of_possible_assignees[".nSecOptions"] = 1;

$tdatasearch_list_of_possible_assignees[".mainTableOwnerID"] = "organization_id";
$tdatasearch_list_of_possible_assignees[".entityType"] = 1;

$tdatasearch_list_of_possible_assignees[".strOriginalTableName"] = "ut_list_possible_assignees";

		 



$tdatasearch_list_of_possible_assignees[".showAddInPopup"] = false;

$tdatasearch_list_of_possible_assignees[".showEditInPopup"] = false;

$tdatasearch_list_of_possible_assignees[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasearch_list_of_possible_assignees[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasearch_list_of_possible_assignees[".listAjax"] = false;
//	temporary
$tdatasearch_list_of_possible_assignees[".listAjax"] = false;

	$tdatasearch_list_of_possible_assignees[".audit"] = false;

	$tdatasearch_list_of_possible_assignees[".locking"] = false;


$pages = $tdatasearch_list_of_possible_assignees[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasearch_list_of_possible_assignees[".edit"] = true;
	$tdatasearch_list_of_possible_assignees[".afterEditAction"] = 1;
	$tdatasearch_list_of_possible_assignees[".closePopupAfterEdit"] = 1;
	$tdatasearch_list_of_possible_assignees[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasearch_list_of_possible_assignees[".add"] = true;
$tdatasearch_list_of_possible_assignees[".afterAddAction"] = 1;
$tdatasearch_list_of_possible_assignees[".closePopupAfterAdd"] = 1;
$tdatasearch_list_of_possible_assignees[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasearch_list_of_possible_assignees[".list"] = true;
}



$tdatasearch_list_of_possible_assignees[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasearch_list_of_possible_assignees[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasearch_list_of_possible_assignees[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasearch_list_of_possible_assignees[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasearch_list_of_possible_assignees[".printFriendly"] = true;
}



$tdatasearch_list_of_possible_assignees[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasearch_list_of_possible_assignees[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasearch_list_of_possible_assignees[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasearch_list_of_possible_assignees[".isUseAjaxSuggest"] = true;

$tdatasearch_list_of_possible_assignees[".rowHighlite"] = true;





$tdatasearch_list_of_possible_assignees[".ajaxCodeSnippetAdded"] = false;

$tdatasearch_list_of_possible_assignees[".buttonsAdded"] = false;

$tdatasearch_list_of_possible_assignees[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasearch_list_of_possible_assignees[".isUseTimeForSearch"] = false;


$tdatasearch_list_of_possible_assignees[".badgeColor"] = "6B8E23";


$tdatasearch_list_of_possible_assignees[".allSearchFields"] = array();
$tdatasearch_list_of_possible_assignees[".filterFields"] = array();
$tdatasearch_list_of_possible_assignees[".requiredSearchFields"] = array();

$tdatasearch_list_of_possible_assignees[".googleLikeFields"] = array();
$tdatasearch_list_of_possible_assignees[".googleLikeFields"][] = "email";



$tdatasearch_list_of_possible_assignees[".tableType"] = "list";

$tdatasearch_list_of_possible_assignees[".printerPageOrientation"] = 0;
$tdatasearch_list_of_possible_assignees[".nPrinterPageScale"] = 100;

$tdatasearch_list_of_possible_assignees[".nPrinterSplitRecords"] = 40;

$tdatasearch_list_of_possible_assignees[".geocodingEnabled"] = false;










$tdatasearch_list_of_possible_assignees[".pageSize"] = 20;

$tdatasearch_list_of_possible_assignees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasearch_list_of_possible_assignees[".strOrderBy"] = $tstrOrderBy;

$tdatasearch_list_of_possible_assignees[".orderindexes"] = array();

$tdatasearch_list_of_possible_assignees[".sqlHead"] = "SELECT unee_t_mefe_user_id,  organization_id,  person_id,  given_name,  family_name,  `alias`,  email,  person_designation";
$tdatasearch_list_of_possible_assignees[".sqlFrom"] = "FROM ut_list_possible_assignees";
$tdatasearch_list_of_possible_assignees[".sqlWhereExpr"] = "";
$tdatasearch_list_of_possible_assignees[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasearch_list_of_possible_assignees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasearch_list_of_possible_assignees[".arrGroupsPerPage"] = $arrGPP;

$tdatasearch_list_of_possible_assignees[".highlightSearchResults"] = true;

$tableKeyssearch_list_of_possible_assignees = array();
$tableKeyssearch_list_of_possible_assignees[] = "unee_t_mefe_user_id";
$tdatasearch_list_of_possible_assignees[".Keys"] = $tableKeyssearch_list_of_possible_assignees;


$tdatasearch_list_of_possible_assignees[".hideMobileList"] = array();




//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unee_t_mefe_user_id";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatasearch_list_of_possible_assignees["unee_t_mefe_user_id"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "unee_t_mefe_user_id";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","organization_id");
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatasearch_list_of_possible_assignees["organization_id"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "organization_id";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","person_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_id";

	
	
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


	$tdatasearch_list_of_possible_assignees["person_id"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "person_id";
//	given_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "given_name";
	$fdata["GoodName"] = "given_name";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","given_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "given_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "given_name";

	
	
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


	$tdatasearch_list_of_possible_assignees["given_name"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "given_name";
//	family_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "family_name";
	$fdata["GoodName"] = "family_name";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","family_name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "family_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "family_name";

	
	
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


	$tdatasearch_list_of_possible_assignees["family_name"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "family_name";
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","alias");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "alias";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`alias`";

	
	
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


	$tdatasearch_list_of_possible_assignees["alias"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "alias";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatasearch_list_of_possible_assignees["email"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "email";
//	person_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "person_designation";
	$fdata["GoodName"] = "person_designation";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("Search_list_of_possible_assignees","person_designation");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "person_designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_designation";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatasearch_list_of_possible_assignees["person_designation"] = $fdata;
		$tdatasearch_list_of_possible_assignees[".searchableFields"][] = "person_designation";


$tables_data["Search list of possible assignees"]=&$tdatasearch_list_of_possible_assignees;
$field_labels["Search_list_of_possible_assignees"] = &$fieldLabelssearch_list_of_possible_assignees;
$fieldToolTips["Search_list_of_possible_assignees"] = &$fieldToolTipssearch_list_of_possible_assignees;
$placeHolders["Search_list_of_possible_assignees"] = &$placeHolderssearch_list_of_possible_assignees;
$page_titles["Search_list_of_possible_assignees"] = &$pageTitlessearch_list_of_possible_assignees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Search list of possible assignees"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Search list of possible assignees"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_search_list_of_possible_assignees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "unee_t_mefe_user_id,  organization_id,  person_id,  given_name,  family_name,  `alias`,  email,  person_designation";
$proto0["m_strFrom"] = "FROM ut_list_possible_assignees";
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
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto6["m_sql"] = "unee_t_mefe_user_id";
$proto6["m_srcTableName"] = "Search list of possible assignees";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto8["m_sql"] = "organization_id";
$proto8["m_srcTableName"] = "Search list of possible assignees";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto10["m_sql"] = "person_id";
$proto10["m_srcTableName"] = "Search list of possible assignees";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto12["m_sql"] = "given_name";
$proto12["m_srcTableName"] = "Search list of possible assignees";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "family_name",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto14["m_sql"] = "family_name";
$proto14["m_srcTableName"] = "Search list of possible assignees";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto16["m_sql"] = "`alias`";
$proto16["m_srcTableName"] = "Search list of possible assignees";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto18["m_sql"] = "email";
$proto18["m_srcTableName"] = "Search list of possible assignees";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "person_designation",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "Search list of possible assignees"
));

$proto20["m_sql"] = "person_designation";
$proto20["m_srcTableName"] = "Search list of possible assignees";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ut_list_possible_assignees";
$proto23["m_srcTableName"] = "Search list of possible assignees";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "unee_t_mefe_user_id";
$proto23["m_columns"][] = "is_obsolete";
$proto23["m_columns"][] = "organization_id";
$proto23["m_columns"][] = "person_id";
$proto23["m_columns"][] = "given_name";
$proto23["m_columns"][] = "family_name";
$proto23["m_columns"][] = "alias";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "person_designation";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "ut_list_possible_assignees";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "Search list of possible assignees";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Search list of possible assignees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_search_list_of_possible_assignees = createSqlQuery_search_list_of_possible_assignees();


	
					
;

								

$tdatasearch_list_of_possible_assignees[".sqlquery"] = $queryData_search_list_of_possible_assignees;

$tableEvents["Search list of possible assignees"] = new eventsBase;
$tdatasearch_list_of_possible_assignees[".hasEvents"] = false;

?>