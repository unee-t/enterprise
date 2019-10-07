<?php



$tdatasuperadmin___manage_unte_admins = array();
$tdatasuperadmin___manage_unte_admins[".searchableFields"] = array();
$tdatasuperadmin___manage_unte_admins[".ShortName"] = "superadmin___manage_unte_admins";
$tdatasuperadmin___manage_unte_admins[".OwnerID"] = "";
$tdatasuperadmin___manage_unte_admins[".OriginalTable"] = "uneet_enterprise_users";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );

$tdatasuperadmin___manage_unte_admins[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatasuperadmin___manage_unte_admins[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatasuperadmin___manage_unte_admins[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssuperadmin___manage_unte_admins = array();
$fieldToolTipssuperadmin___manage_unte_admins = array();
$pageTitlessuperadmin___manage_unte_admins = array();
$placeHolderssuperadmin___manage_unte_admins = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuperadmin___manage_unte_admins["English"] = array();
	$fieldToolTipssuperadmin___manage_unte_admins["English"] = array();
	$placeHolderssuperadmin___manage_unte_admins["English"] = array();
	$pageTitlessuperadmin___manage_unte_admins["English"] = array();
	$fieldLabelssuperadmin___manage_unte_admins["English"]["ID"] = "ID";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["ID"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["ID"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["username"] = "Username";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["username"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["username"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["password"] = "Password";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["password"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["password"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["email"] = "Email";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["email"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["email"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["fullname"] = "Fullname";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["fullname"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["fullname"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["groupid"] = "Groupid";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["groupid"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["groupid"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["active"] = "Active";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["active"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["active"] = "";
	$fieldLabelssuperadmin___manage_unte_admins["English"]["organization_id"] = "Organization Id";
	$fieldToolTipssuperadmin___manage_unte_admins["English"]["organization_id"] = "";
	$placeHolderssuperadmin___manage_unte_admins["English"]["organization_id"] = "";
	if (count($fieldToolTipssuperadmin___manage_unte_admins["English"]))
		$tdatasuperadmin___manage_unte_admins[".isUseToolTips"] = true;
}


	$tdatasuperadmin___manage_unte_admins[".NCSearch"] = true;



$tdatasuperadmin___manage_unte_admins[".shortTableName"] = "superadmin___manage_unte_admins";
$tdatasuperadmin___manage_unte_admins[".nSecOptions"] = 0;

$tdatasuperadmin___manage_unte_admins[".mainTableOwnerID"] = "";
$tdatasuperadmin___manage_unte_admins[".entityType"] = 1;

$tdatasuperadmin___manage_unte_admins[".strOriginalTableName"] = "uneet_enterprise_users";

		 



$tdatasuperadmin___manage_unte_admins[".showAddInPopup"] = false;

$tdatasuperadmin___manage_unte_admins[".showEditInPopup"] = false;

$tdatasuperadmin___manage_unte_admins[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuperadmin___manage_unte_admins[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatasuperadmin___manage_unte_admins[".listAjax"] = true;
//	temporary
$tdatasuperadmin___manage_unte_admins[".listAjax"] = false;

	$tdatasuperadmin___manage_unte_admins[".audit"] = true;

	$tdatasuperadmin___manage_unte_admins[".locking"] = false;


$pages = $tdatasuperadmin___manage_unte_admins[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuperadmin___manage_unte_admins[".edit"] = true;
	$tdatasuperadmin___manage_unte_admins[".afterEditAction"] = 1;
	$tdatasuperadmin___manage_unte_admins[".closePopupAfterEdit"] = 1;
	$tdatasuperadmin___manage_unte_admins[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasuperadmin___manage_unte_admins[".add"] = true;
$tdatasuperadmin___manage_unte_admins[".afterAddAction"] = 0;
$tdatasuperadmin___manage_unte_admins[".closePopupAfterAdd"] = 1;
$tdatasuperadmin___manage_unte_admins[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuperadmin___manage_unte_admins[".list"] = true;
}



$tdatasuperadmin___manage_unte_admins[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuperadmin___manage_unte_admins[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuperadmin___manage_unte_admins[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuperadmin___manage_unte_admins[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuperadmin___manage_unte_admins[".printFriendly"] = true;
}



$tdatasuperadmin___manage_unte_admins[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuperadmin___manage_unte_admins[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuperadmin___manage_unte_admins[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuperadmin___manage_unte_admins[".isUseAjaxSuggest"] = true;

$tdatasuperadmin___manage_unte_admins[".rowHighlite"] = true;





$tdatasuperadmin___manage_unte_admins[".ajaxCodeSnippetAdded"] = false;

$tdatasuperadmin___manage_unte_admins[".buttonsAdded"] = false;

$tdatasuperadmin___manage_unte_admins[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuperadmin___manage_unte_admins[".isUseTimeForSearch"] = false;


$tdatasuperadmin___manage_unte_admins[".badgeColor"] = "4169e1";


$tdatasuperadmin___manage_unte_admins[".allSearchFields"] = array();
$tdatasuperadmin___manage_unte_admins[".filterFields"] = array();
$tdatasuperadmin___manage_unte_admins[".requiredSearchFields"] = array();

$tdatasuperadmin___manage_unte_admins[".googleLikeFields"] = array();
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "ID";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "username";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "password";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "email";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "fullname";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "groupid";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "active";
$tdatasuperadmin___manage_unte_admins[".googleLikeFields"][] = "organization_id";



$tdatasuperadmin___manage_unte_admins[".tableType"] = "list";

$tdatasuperadmin___manage_unte_admins[".printerPageOrientation"] = 0;
$tdatasuperadmin___manage_unte_admins[".nPrinterPageScale"] = 100;

$tdatasuperadmin___manage_unte_admins[".nPrinterSplitRecords"] = 40;

$tdatasuperadmin___manage_unte_admins[".geocodingEnabled"] = false;





$tdatasuperadmin___manage_unte_admins[".isResizeColumns"] = true;





$tdatasuperadmin___manage_unte_admins[".pageSize"] = 20;

$tdatasuperadmin___manage_unte_admins[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuperadmin___manage_unte_admins[".strOrderBy"] = $tstrOrderBy;

$tdatasuperadmin___manage_unte_admins[".orderindexes"] = array();

$tdatasuperadmin___manage_unte_admins[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	organization_id";
$tdatasuperadmin___manage_unte_admins[".sqlFrom"] = "FROM uneet_enterprise_users";
$tdatasuperadmin___manage_unte_admins[".sqlWhereExpr"] = "";
$tdatasuperadmin___manage_unte_admins[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuperadmin___manage_unte_admins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuperadmin___manage_unte_admins[".arrGroupsPerPage"] = $arrGPP;

$tdatasuperadmin___manage_unte_admins[".highlightSearchResults"] = true;

$tableKeyssuperadmin___manage_unte_admins = array();
$tableKeyssuperadmin___manage_unte_admins[] = "ID";
$tdatasuperadmin___manage_unte_admins[".Keys"] = $tableKeyssuperadmin___manage_unte_admins;


$tdatasuperadmin___manage_unte_admins[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatasuperadmin___manage_unte_admins["ID"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","username");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatasuperadmin___manage_unte_admins["username"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","password");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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


	$tdatasuperadmin___manage_unte_admins["password"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","email");
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


	$tdatasuperadmin___manage_unte_admins["email"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatasuperadmin___manage_unte_admins["fullname"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatasuperadmin___manage_unte_admins["groupid"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","active");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasuperadmin___manage_unte_admins["active"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "active";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("SuperAdmin___manage_UNTE_admins","organization_id");
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
	$edata["DisplayField"] = "designation";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasuperadmin___manage_unte_admins["organization_id"] = $fdata;
		$tdatasuperadmin___manage_unte_admins[".searchableFields"][] = "organization_id";


$tables_data["SuperAdmin - manage UNTE admins"]=&$tdatasuperadmin___manage_unte_admins;
$field_labels["SuperAdmin___manage_UNTE_admins"] = &$fieldLabelssuperadmin___manage_unte_admins;
$fieldToolTips["SuperAdmin___manage_UNTE_admins"] = &$fieldToolTipssuperadmin___manage_unte_admins;
$placeHolders["SuperAdmin___manage_UNTE_admins"] = &$placeHolderssuperadmin___manage_unte_admins;
$page_titles["SuperAdmin___manage_UNTE_admins"] = &$pageTitlessuperadmin___manage_unte_admins;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SuperAdmin - manage UNTE admins"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SuperAdmin - manage UNTE admins"] = array();



	
				$strOriginalDetailsTable="uneet_enterprise_organizations";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Super Admin - Manage Organization";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "super_admin___manage_organization";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["SuperAdmin - manage UNTE admins"][0] = $masterParams;
				$masterTablesData["SuperAdmin - manage UNTE admins"][0]["masterKeys"] = array();
	$masterTablesData["SuperAdmin - manage UNTE admins"][0]["masterKeys"][]="id_organization";
				$masterTablesData["SuperAdmin - manage UNTE admins"][0]["detailKeys"] = array();
	$masterTablesData["SuperAdmin - manage UNTE admins"][0]["detailKeys"][]="organization_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_superadmin___manage_unte_admins()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	organization_id";
$proto0["m_strFrom"] = "FROM uneet_enterprise_users";
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
	"m_strName" => "ID",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "SuperAdmin - manage UNTE admins"
));

$proto20["m_sql"] = "organization_id";
$proto20["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "uneet_enterprise_users";
$proto23["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "organization_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "uneet_enterprise_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "SuperAdmin - manage UNTE admins";
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
$proto0["m_srcTableName"]="SuperAdmin - manage UNTE admins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_superadmin___manage_unte_admins = createSqlQuery_superadmin___manage_unte_admins();


	
					
;

								

$tdatasuperadmin___manage_unte_admins[".sqlquery"] = $queryData_superadmin___manage_unte_admins;

include_once(getabspath("include/superadmin___manage_unte_admins_events.php"));
$tableEvents["SuperAdmin - manage UNTE admins"] = new eventclass_superadmin___manage_unte_admins;
$tdatasuperadmin___manage_unte_admins[".hasEvents"] = true;

?>