<?php



$tdataut_list_possible_assignees = array();
$tdataut_list_possible_assignees[".searchableFields"] = array();
$tdataut_list_possible_assignees[".ShortName"] = "ut_list_possible_assignees";
$tdataut_list_possible_assignees[".OwnerID"] = "";
$tdataut_list_possible_assignees[".OriginalTable"] = "ut_list_possible_assignees";


$defaultPages = my_json_decode( "{\"list\":\"list\"}" );

$tdataut_list_possible_assignees[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdataut_list_possible_assignees[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdataut_list_possible_assignees[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsut_list_possible_assignees = array();
$fieldToolTipsut_list_possible_assignees = array();
$pageTitlesut_list_possible_assignees = array();
$placeHoldersut_list_possible_assignees = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsut_list_possible_assignees["English"] = array();
	$fieldToolTipsut_list_possible_assignees["English"] = array();
	$placeHoldersut_list_possible_assignees["English"] = array();
	$pageTitlesut_list_possible_assignees["English"] = array();
	$fieldLabelsut_list_possible_assignees["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipsut_list_possible_assignees["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersut_list_possible_assignees["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsut_list_possible_assignees["English"]["is_obsolete"] = "";
	$placeHoldersut_list_possible_assignees["English"]["is_obsolete"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsut_list_possible_assignees["English"]["organization_id"] = "";
	$placeHoldersut_list_possible_assignees["English"]["organization_id"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["person_id"] = "Person Id";
	$fieldToolTipsut_list_possible_assignees["English"]["person_id"] = "";
	$placeHoldersut_list_possible_assignees["English"]["person_id"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["given_name"] = "Given Name";
	$fieldToolTipsut_list_possible_assignees["English"]["given_name"] = "";
	$placeHoldersut_list_possible_assignees["English"]["given_name"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["family_name"] = "Family Name";
	$fieldToolTipsut_list_possible_assignees["English"]["family_name"] = "";
	$placeHoldersut_list_possible_assignees["English"]["family_name"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["alias"] = "Alias";
	$fieldToolTipsut_list_possible_assignees["English"]["alias"] = "";
	$placeHoldersut_list_possible_assignees["English"]["alias"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["email"] = "Email";
	$fieldToolTipsut_list_possible_assignees["English"]["email"] = "";
	$placeHoldersut_list_possible_assignees["English"]["email"] = "";
	$fieldLabelsut_list_possible_assignees["English"]["person_designation"] = "Person Designation";
	$fieldToolTipsut_list_possible_assignees["English"]["person_designation"] = "";
	$placeHoldersut_list_possible_assignees["English"]["person_designation"] = "";
	if (count($fieldToolTipsut_list_possible_assignees["English"]))
		$tdataut_list_possible_assignees[".isUseToolTips"] = true;
}


	$tdataut_list_possible_assignees[".NCSearch"] = true;



$tdataut_list_possible_assignees[".shortTableName"] = "ut_list_possible_assignees";
$tdataut_list_possible_assignees[".nSecOptions"] = 0;

$tdataut_list_possible_assignees[".mainTableOwnerID"] = "";
$tdataut_list_possible_assignees[".entityType"] = 1;

$tdataut_list_possible_assignees[".strOriginalTableName"] = "ut_list_possible_assignees";

		 



$tdataut_list_possible_assignees[".showAddInPopup"] = false;

$tdataut_list_possible_assignees[".showEditInPopup"] = false;

$tdataut_list_possible_assignees[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataut_list_possible_assignees[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataut_list_possible_assignees[".listAjax"] = false;
//	temporary
$tdataut_list_possible_assignees[".listAjax"] = false;

	$tdataut_list_possible_assignees[".audit"] = false;

	$tdataut_list_possible_assignees[".locking"] = false;


$pages = $tdataut_list_possible_assignees[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataut_list_possible_assignees[".edit"] = true;
	$tdataut_list_possible_assignees[".afterEditAction"] = 1;
	$tdataut_list_possible_assignees[".closePopupAfterEdit"] = 1;
	$tdataut_list_possible_assignees[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataut_list_possible_assignees[".add"] = true;
$tdataut_list_possible_assignees[".afterAddAction"] = 1;
$tdataut_list_possible_assignees[".closePopupAfterAdd"] = 1;
$tdataut_list_possible_assignees[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataut_list_possible_assignees[".list"] = true;
}



$tdataut_list_possible_assignees[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataut_list_possible_assignees[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataut_list_possible_assignees[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataut_list_possible_assignees[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataut_list_possible_assignees[".printFriendly"] = true;
}



$tdataut_list_possible_assignees[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataut_list_possible_assignees[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataut_list_possible_assignees[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataut_list_possible_assignees[".isUseAjaxSuggest"] = true;

$tdataut_list_possible_assignees[".rowHighlite"] = true;





$tdataut_list_possible_assignees[".ajaxCodeSnippetAdded"] = false;

$tdataut_list_possible_assignees[".buttonsAdded"] = false;

$tdataut_list_possible_assignees[".addPageEvents"] = false;

// use timepicker for search panel
$tdataut_list_possible_assignees[".isUseTimeForSearch"] = false;


$tdataut_list_possible_assignees[".badgeColor"] = "6DA5C8";


$tdataut_list_possible_assignees[".allSearchFields"] = array();
$tdataut_list_possible_assignees[".filterFields"] = array();
$tdataut_list_possible_assignees[".requiredSearchFields"] = array();

$tdataut_list_possible_assignees[".googleLikeFields"] = array();
$tdataut_list_possible_assignees[".googleLikeFields"][] = "unee_t_mefe_user_id";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "is_obsolete";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "organization_id";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "person_id";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "given_name";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "family_name";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "alias";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "email";
$tdataut_list_possible_assignees[".googleLikeFields"][] = "person_designation";



$tdataut_list_possible_assignees[".tableType"] = "list";

$tdataut_list_possible_assignees[".printerPageOrientation"] = 0;
$tdataut_list_possible_assignees[".nPrinterPageScale"] = 100;

$tdataut_list_possible_assignees[".nPrinterSplitRecords"] = 40;

$tdataut_list_possible_assignees[".geocodingEnabled"] = false;










$tdataut_list_possible_assignees[".pageSize"] = 20;

$tdataut_list_possible_assignees[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataut_list_possible_assignees[".strOrderBy"] = $tstrOrderBy;

$tdataut_list_possible_assignees[".orderindexes"] = array();

$tdataut_list_possible_assignees[".sqlHead"] = "SELECT unee_t_mefe_user_id,  	is_obsolete,  	organization_id,  	person_id,  	given_name,  	family_name,  	`alias`,  	email,  	person_designation";
$tdataut_list_possible_assignees[".sqlFrom"] = "FROM ut_list_possible_assignees";
$tdataut_list_possible_assignees[".sqlWhereExpr"] = "";
$tdataut_list_possible_assignees[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataut_list_possible_assignees[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataut_list_possible_assignees[".arrGroupsPerPage"] = $arrGPP;

$tdataut_list_possible_assignees[".highlightSearchResults"] = true;

$tableKeysut_list_possible_assignees = array();
$tdataut_list_possible_assignees[".Keys"] = $tableKeysut_list_possible_assignees;


$tdataut_list_possible_assignees[".hideMobileList"] = array();




//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","unee_t_mefe_user_id");
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


	$tdataut_list_possible_assignees["unee_t_mefe_user_id"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "unee_t_mefe_user_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","is_obsolete");
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


	$tdataut_list_possible_assignees["is_obsolete"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "is_obsolete";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","organization_id");
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


	$tdataut_list_possible_assignees["organization_id"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "organization_id";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","person_id");
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


	$tdataut_list_possible_assignees["person_id"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "person_id";
//	given_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "given_name";
	$fdata["GoodName"] = "given_name";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","given_name");
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


	$tdataut_list_possible_assignees["given_name"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "given_name";
//	family_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "family_name";
	$fdata["GoodName"] = "family_name";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","family_name");
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


	$tdataut_list_possible_assignees["family_name"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "family_name";
//	alias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "alias";
	$fdata["GoodName"] = "alias";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","alias");
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


	$tdataut_list_possible_assignees["alias"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "alias";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","email");
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


	$tdataut_list_possible_assignees["email"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "email";
//	person_designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "person_designation";
	$fdata["GoodName"] = "person_designation";
	$fdata["ownerTable"] = "ut_list_possible_assignees";
	$fdata["Label"] = GetFieldLabel("ut_list_possible_assignees","person_designation");
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


	$tdataut_list_possible_assignees["person_designation"] = $fdata;
		$tdataut_list_possible_assignees[".searchableFields"][] = "person_designation";


$tables_data["ut_list_possible_assignees"]=&$tdataut_list_possible_assignees;
$field_labels["ut_list_possible_assignees"] = &$fieldLabelsut_list_possible_assignees;
$fieldToolTips["ut_list_possible_assignees"] = &$fieldToolTipsut_list_possible_assignees;
$placeHolders["ut_list_possible_assignees"] = &$placeHoldersut_list_possible_assignees;
$page_titles["ut_list_possible_assignees"] = &$pageTitlesut_list_possible_assignees;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ut_list_possible_assignees"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ut_list_possible_assignees"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_ut_list_possible_assignees()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "unee_t_mefe_user_id,  	is_obsolete,  	organization_id,  	person_id,  	given_name,  	family_name,  	`alias`,  	email,  	person_designation";
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
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto6["m_sql"] = "unee_t_mefe_user_id";
$proto6["m_srcTableName"] = "ut_list_possible_assignees";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto8["m_sql"] = "is_obsolete";
$proto8["m_srcTableName"] = "ut_list_possible_assignees";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto10["m_sql"] = "organization_id";
$proto10["m_srcTableName"] = "ut_list_possible_assignees";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto12["m_sql"] = "person_id";
$proto12["m_srcTableName"] = "ut_list_possible_assignees";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "given_name",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto14["m_sql"] = "given_name";
$proto14["m_srcTableName"] = "ut_list_possible_assignees";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "family_name",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto16["m_sql"] = "family_name";
$proto16["m_srcTableName"] = "ut_list_possible_assignees";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "alias",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto18["m_sql"] = "`alias`";
$proto18["m_srcTableName"] = "ut_list_possible_assignees";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto20["m_sql"] = "email";
$proto20["m_srcTableName"] = "ut_list_possible_assignees";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "person_designation",
	"m_strTable" => "ut_list_possible_assignees",
	"m_srcTableName" => "ut_list_possible_assignees"
));

$proto22["m_sql"] = "person_designation";
$proto22["m_srcTableName"] = "ut_list_possible_assignees";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "ut_list_possible_assignees";
$proto25["m_srcTableName"] = "ut_list_possible_assignees";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "unee_t_mefe_user_id";
$proto25["m_columns"][] = "is_obsolete";
$proto25["m_columns"][] = "organization_id";
$proto25["m_columns"][] = "person_id";
$proto25["m_columns"][] = "given_name";
$proto25["m_columns"][] = "family_name";
$proto25["m_columns"][] = "alias";
$proto25["m_columns"][] = "email";
$proto25["m_columns"][] = "person_designation";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "ut_list_possible_assignees";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "ut_list_possible_assignees";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ut_list_possible_assignees";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ut_list_possible_assignees = createSqlQuery_ut_list_possible_assignees();


	
					
;

									

$tdataut_list_possible_assignees[".sqlquery"] = $queryData_ut_list_possible_assignees;

$tableEvents["ut_list_possible_assignees"] = new eventsBase;
$tdataut_list_possible_assignees[".hasEvents"] = false;

?>