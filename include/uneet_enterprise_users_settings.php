<?php




$tdatauneet_enterprise_users = array();
$tdatauneet_enterprise_users[".searchableFields"] = array();
	$tdatauneet_enterprise_users[".truncateText"] = true;
	$tdatauneet_enterprise_users[".NumberOfChars"] = 80;
	$tdatauneet_enterprise_users[".ShortName"] = "uneet_enterprise_users";
	$tdatauneet_enterprise_users[".OwnerID"] = "";
	$tdatauneet_enterprise_users[".OriginalTable"] = "uneet_enterprise_users";


$defaultPages = my_json_decode( "{\"search\":\"search\"}" );

$tdatauneet_enterprise_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatauneet_enterprise_users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsuneet_enterprise_users = array();
$fieldToolTipsuneet_enterprise_users = array();
$pageTitlesuneet_enterprise_users = array();
$placeHoldersuneet_enterprise_users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuneet_enterprise_users["English"] = array();
	$fieldToolTipsuneet_enterprise_users["English"] = array();
	$placeHoldersuneet_enterprise_users["English"] = array();
	$pageTitlesuneet_enterprise_users["English"] = array();
	$fieldLabelsuneet_enterprise_users["English"]["ID"] = "ID";
	$fieldToolTipsuneet_enterprise_users["English"]["ID"] = "";
	$placeHoldersuneet_enterprise_users["English"]["ID"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["username"] = "Username";
	$fieldToolTipsuneet_enterprise_users["English"]["username"] = "";
	$placeHoldersuneet_enterprise_users["English"]["username"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["password"] = "Password";
	$fieldToolTipsuneet_enterprise_users["English"]["password"] = "";
	$placeHoldersuneet_enterprise_users["English"]["password"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["email"] = "Email";
	$fieldToolTipsuneet_enterprise_users["English"]["email"] = "";
	$placeHoldersuneet_enterprise_users["English"]["email"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["fullname"] = "Fullname";
	$fieldToolTipsuneet_enterprise_users["English"]["fullname"] = "";
	$placeHoldersuneet_enterprise_users["English"]["fullname"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["groupid"] = "Groupid";
	$fieldToolTipsuneet_enterprise_users["English"]["groupid"] = "";
	$placeHoldersuneet_enterprise_users["English"]["groupid"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["active"] = "Active";
	$fieldToolTipsuneet_enterprise_users["English"]["active"] = "";
	$placeHoldersuneet_enterprise_users["English"]["active"] = "";
	$fieldLabelsuneet_enterprise_users["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsuneet_enterprise_users["English"]["organization_id"] = "";
	$placeHoldersuneet_enterprise_users["English"]["organization_id"] = "";
	if (count($fieldToolTipsuneet_enterprise_users["English"]))
		$tdatauneet_enterprise_users[".isUseToolTips"] = true;
}


	$tdatauneet_enterprise_users[".NCSearch"] = true;



$tdatauneet_enterprise_users[".shortTableName"] = "uneet_enterprise_users";
$tdatauneet_enterprise_users[".nSecOptions"] = 0;

$tdatauneet_enterprise_users[".mainTableOwnerID"] = "";
$tdatauneet_enterprise_users[".entityType"] = 0;

$tdatauneet_enterprise_users[".strOriginalTableName"] = "uneet_enterprise_users";

		 



$tdatauneet_enterprise_users[".showAddInPopup"] = false;

$tdatauneet_enterprise_users[".showEditInPopup"] = false;

$tdatauneet_enterprise_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauneet_enterprise_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauneet_enterprise_users[".listAjax"] = false;
//	temporary
$tdatauneet_enterprise_users[".listAjax"] = false;

	$tdatauneet_enterprise_users[".audit"] = true;

	$tdatauneet_enterprise_users[".locking"] = false;


$pages = $tdatauneet_enterprise_users[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauneet_enterprise_users[".edit"] = true;
	$tdatauneet_enterprise_users[".afterEditAction"] = 1;
	$tdatauneet_enterprise_users[".closePopupAfterEdit"] = 1;
	$tdatauneet_enterprise_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauneet_enterprise_users[".add"] = true;
$tdatauneet_enterprise_users[".afterAddAction"] = 1;
$tdatauneet_enterprise_users[".closePopupAfterAdd"] = 1;
$tdatauneet_enterprise_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauneet_enterprise_users[".list"] = true;
}



$tdatauneet_enterprise_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauneet_enterprise_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauneet_enterprise_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauneet_enterprise_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauneet_enterprise_users[".printFriendly"] = true;
}



$tdatauneet_enterprise_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauneet_enterprise_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauneet_enterprise_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauneet_enterprise_users[".isUseAjaxSuggest"] = true;

$tdatauneet_enterprise_users[".rowHighlite"] = true;





$tdatauneet_enterprise_users[".ajaxCodeSnippetAdded"] = false;

$tdatauneet_enterprise_users[".buttonsAdded"] = false;

$tdatauneet_enterprise_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauneet_enterprise_users[".isUseTimeForSearch"] = false;


$tdatauneet_enterprise_users[".badgeColor"] = "6DA5C8";


$tdatauneet_enterprise_users[".allSearchFields"] = array();
$tdatauneet_enterprise_users[".filterFields"] = array();
$tdatauneet_enterprise_users[".requiredSearchFields"] = array();

$tdatauneet_enterprise_users[".googleLikeFields"] = array();
$tdatauneet_enterprise_users[".googleLikeFields"][] = "ID";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "username";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "password";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "email";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "fullname";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "groupid";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "active";
$tdatauneet_enterprise_users[".googleLikeFields"][] = "organization_id";



$tdatauneet_enterprise_users[".tableType"] = "list";

$tdatauneet_enterprise_users[".printerPageOrientation"] = 0;
$tdatauneet_enterprise_users[".nPrinterPageScale"] = 100;

$tdatauneet_enterprise_users[".nPrinterSplitRecords"] = 40;

$tdatauneet_enterprise_users[".nPrinterPDFSplitRecords"] = 40;


$tdatauneet_enterprise_users[".geocodingEnabled"] = false;










$tdatauneet_enterprise_users[".pageSize"] = 20;

$tdatauneet_enterprise_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauneet_enterprise_users[".strOrderBy"] = $tstrOrderBy;

$tdatauneet_enterprise_users[".orderindexes"] = array();

$tdatauneet_enterprise_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	organization_id";
$tdatauneet_enterprise_users[".sqlFrom"] = "FROM uneet_enterprise_users";
$tdatauneet_enterprise_users[".sqlWhereExpr"] = "";
$tdatauneet_enterprise_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauneet_enterprise_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauneet_enterprise_users[".arrGroupsPerPage"] = $arrGPP;

$tdatauneet_enterprise_users[".highlightSearchResults"] = true;

$tableKeysuneet_enterprise_users = array();
$tableKeysuneet_enterprise_users[] = "ID";
$tdatauneet_enterprise_users[".Keys"] = $tableKeysuneet_enterprise_users;


$tdatauneet_enterprise_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","ID");
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


	$tdatauneet_enterprise_users["ID"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","username");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatauneet_enterprise_users["username"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","password");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
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


	$tdatauneet_enterprise_users["password"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatauneet_enterprise_users["email"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatauneet_enterprise_users["fullname"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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


	$tdatauneet_enterprise_users["groupid"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","active");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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

			
	
	
//end of Filters settings


	$tdatauneet_enterprise_users["active"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "active";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_users","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "organization_id";

	
	
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


	$tdatauneet_enterprise_users["organization_id"] = $fdata;
		$tdatauneet_enterprise_users[".searchableFields"][] = "organization_id";


$tables_data["uneet_enterprise_users"]=&$tdatauneet_enterprise_users;
$field_labels["uneet_enterprise_users"] = &$fieldLabelsuneet_enterprise_users;
$fieldToolTips["uneet_enterprise_users"] = &$fieldToolTipsuneet_enterprise_users;
$placeHolders["uneet_enterprise_users"] = &$placeHoldersuneet_enterprise_users;
$page_titles["uneet_enterprise_users"] = &$pageTitlesuneet_enterprise_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["uneet_enterprise_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["uneet_enterprise_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_uneet_enterprise_users()
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
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "uneet_enterprise_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "uneet_enterprise_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "uneet_enterprise_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "uneet_enterprise_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "uneet_enterprise_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "uneet_enterprise_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "uneet_enterprise_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "uneet_enterprise_users"
));

$proto20["m_sql"] = "organization_id";
$proto20["m_srcTableName"] = "uneet_enterprise_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "uneet_enterprise_users";
$proto23["m_srcTableName"] = "uneet_enterprise_users";
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
$proto22["m_srcTableName"] = "uneet_enterprise_users";
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
$proto0["m_srcTableName"]="uneet_enterprise_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_uneet_enterprise_users = createSqlQuery_uneet_enterprise_users();


	
					
;

								

$tdatauneet_enterprise_users[".sqlquery"] = $queryData_uneet_enterprise_users;

$tableEvents["uneet_enterprise_users"] = new eventsBase;
$tdatauneet_enterprise_users[".hasEvents"] = false;

?>