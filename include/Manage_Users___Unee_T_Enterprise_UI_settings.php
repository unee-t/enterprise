<?php



$tdataManage_Users___Unee_T_Enterprise_UI = array();
$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"] = array();
$tdataManage_Users___Unee_T_Enterprise_UI[".ShortName"] = "Manage_Users___Unee_T_Enterprise_UI";
$tdataManage_Users___Unee_T_Enterprise_UI[".OwnerID"] = "organization_id";
$tdataManage_Users___Unee_T_Enterprise_UI[".OriginalTable"] = "uneet_enterprise_users";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );

$tdataManage_Users___Unee_T_Enterprise_UI[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataManage_Users___Unee_T_Enterprise_UI[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataManage_Users___Unee_T_Enterprise_UI[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsManage_Users___Unee_T_Enterprise_UI = array();
$fieldToolTipsManage_Users___Unee_T_Enterprise_UI = array();
$pageTitlesManage_Users___Unee_T_Enterprise_UI = array();
$placeHoldersManage_Users___Unee_T_Enterprise_UI = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"] = array();
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"] = array();
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"] = array();
	$pageTitlesManage_Users___Unee_T_Enterprise_UI["English"] = array();
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["ID"] = "ID";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["ID"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["ID"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["username"] = "Username";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["username"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["username"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["password"] = "Password";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["password"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["password"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["email"] = "Email";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["email"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["email"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["fullname"] = "Fullname";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["fullname"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["fullname"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["groupid"] = "Groupid";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["groupid"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["groupid"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["active"] = "Active";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["active"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["active"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["organization_id"] = "Organization";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["organization_id"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["organization_id"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["designation"] = "Organization";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["designation"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["designation"] = "";
	$fieldLabelsManage_Users___Unee_T_Enterprise_UI["English"]["order"] = "Order";
	$fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]["order"] = "";
	$placeHoldersManage_Users___Unee_T_Enterprise_UI["English"]["order"] = "";
	if (count($fieldToolTipsManage_Users___Unee_T_Enterprise_UI["English"]))
		$tdataManage_Users___Unee_T_Enterprise_UI[".isUseToolTips"] = true;
}


	$tdataManage_Users___Unee_T_Enterprise_UI[".NCSearch"] = true;



$tdataManage_Users___Unee_T_Enterprise_UI[".shortTableName"] = "Manage_Users___Unee_T_Enterprise_UI";
$tdataManage_Users___Unee_T_Enterprise_UI[".nSecOptions"] = 1;

$tdataManage_Users___Unee_T_Enterprise_UI[".mainTableOwnerID"] = "organization_id";
$tdataManage_Users___Unee_T_Enterprise_UI[".entityType"] = 1;

$tdataManage_Users___Unee_T_Enterprise_UI[".strOriginalTableName"] = "uneet_enterprise_users";

		 



$tdataManage_Users___Unee_T_Enterprise_UI[".showAddInPopup"] = false;

$tdataManage_Users___Unee_T_Enterprise_UI[".showEditInPopup"] = false;

$tdataManage_Users___Unee_T_Enterprise_UI[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataManage_Users___Unee_T_Enterprise_UI[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataManage_Users___Unee_T_Enterprise_UI[".listAjax"] = true;
//	temporary
$tdataManage_Users___Unee_T_Enterprise_UI[".listAjax"] = false;

	$tdataManage_Users___Unee_T_Enterprise_UI[".audit"] = true;

	$tdataManage_Users___Unee_T_Enterprise_UI[".locking"] = false;


$pages = $tdataManage_Users___Unee_T_Enterprise_UI[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataManage_Users___Unee_T_Enterprise_UI[".edit"] = true;
	$tdataManage_Users___Unee_T_Enterprise_UI[".afterEditAction"] = 1;
	$tdataManage_Users___Unee_T_Enterprise_UI[".closePopupAfterEdit"] = 1;
	$tdataManage_Users___Unee_T_Enterprise_UI[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataManage_Users___Unee_T_Enterprise_UI[".add"] = true;
$tdataManage_Users___Unee_T_Enterprise_UI[".afterAddAction"] = 0;
$tdataManage_Users___Unee_T_Enterprise_UI[".closePopupAfterAdd"] = 1;
$tdataManage_Users___Unee_T_Enterprise_UI[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataManage_Users___Unee_T_Enterprise_UI[".list"] = true;
}



$tdataManage_Users___Unee_T_Enterprise_UI[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataManage_Users___Unee_T_Enterprise_UI[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataManage_Users___Unee_T_Enterprise_UI[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataManage_Users___Unee_T_Enterprise_UI[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataManage_Users___Unee_T_Enterprise_UI[".printFriendly"] = true;
}



$tdataManage_Users___Unee_T_Enterprise_UI[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataManage_Users___Unee_T_Enterprise_UI[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataManage_Users___Unee_T_Enterprise_UI[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataManage_Users___Unee_T_Enterprise_UI[".isUseAjaxSuggest"] = true;

$tdataManage_Users___Unee_T_Enterprise_UI[".rowHighlite"] = true;





$tdataManage_Users___Unee_T_Enterprise_UI[".ajaxCodeSnippetAdded"] = false;

$tdataManage_Users___Unee_T_Enterprise_UI[".buttonsAdded"] = false;

$tdataManage_Users___Unee_T_Enterprise_UI[".addPageEvents"] = false;

// use timepicker for search panel
$tdataManage_Users___Unee_T_Enterprise_UI[".isUseTimeForSearch"] = false;


$tdataManage_Users___Unee_T_Enterprise_UI[".badgeColor"] = "BC8F8F";


$tdataManage_Users___Unee_T_Enterprise_UI[".allSearchFields"] = array();
$tdataManage_Users___Unee_T_Enterprise_UI[".filterFields"] = array();
$tdataManage_Users___Unee_T_Enterprise_UI[".requiredSearchFields"] = array();

$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"] = array();
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "ID";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "username";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "password";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "email";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "fullname";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "groupid";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "active";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "organization_id";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "designation";
$tdataManage_Users___Unee_T_Enterprise_UI[".googleLikeFields"][] = "order";



$tdataManage_Users___Unee_T_Enterprise_UI[".tableType"] = "list";

$tdataManage_Users___Unee_T_Enterprise_UI[".printerPageOrientation"] = 0;
$tdataManage_Users___Unee_T_Enterprise_UI[".nPrinterPageScale"] = 100;

$tdataManage_Users___Unee_T_Enterprise_UI[".nPrinterSplitRecords"] = 40;

$tdataManage_Users___Unee_T_Enterprise_UI[".geocodingEnabled"] = false;





$tdataManage_Users___Unee_T_Enterprise_UI[".isResizeColumns"] = true;





$tdataManage_Users___Unee_T_Enterprise_UI[".pageSize"] = 20;

$tdataManage_Users___Unee_T_Enterprise_UI[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY uneet_enterprise_organizations.`order`, uneet_enterprise_users.fullname";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataManage_Users___Unee_T_Enterprise_UI[".strOrderBy"] = $tstrOrderBy;

$tdataManage_Users___Unee_T_Enterprise_UI[".orderindexes"] = array();
	$tdataManage_Users___Unee_T_Enterprise_UI[".orderindexes"][] = array(10, (1 ? "ASC" : "DESC"), "uneet_enterprise_organizations.`order`");

	$tdataManage_Users___Unee_T_Enterprise_UI[".orderindexes"][] = array(5, (1 ? "ASC" : "DESC"), "uneet_enterprise_users.fullname");


$tdataManage_Users___Unee_T_Enterprise_UI[".sqlHead"] = "SELECT uneet_enterprise_users.ID,  uneet_enterprise_users.username,  uneet_enterprise_users.password,  uneet_enterprise_users.email,  uneet_enterprise_users.fullname,  uneet_enterprise_users.groupid,  uneet_enterprise_users.active,  uneet_enterprise_users.organization_id,  uneet_enterprise_organizations.designation,  uneet_enterprise_organizations.`order`";
$tdataManage_Users___Unee_T_Enterprise_UI[".sqlFrom"] = "FROM uneet_enterprise_users  LEFT OUTER JOIN uneet_enterprise_organizations ON uneet_enterprise_users.organization_id = uneet_enterprise_organizations.id_organization";
$tdataManage_Users___Unee_T_Enterprise_UI[".sqlWhereExpr"] = "";
$tdataManage_Users___Unee_T_Enterprise_UI[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataManage_Users___Unee_T_Enterprise_UI[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataManage_Users___Unee_T_Enterprise_UI[".arrGroupsPerPage"] = $arrGPP;

$tdataManage_Users___Unee_T_Enterprise_UI[".highlightSearchResults"] = true;

$tableKeysManage_Users___Unee_T_Enterprise_UI = array();
$tableKeysManage_Users___Unee_T_Enterprise_UI[] = "ID";
$tdataManage_Users___Unee_T_Enterprise_UI[".Keys"] = $tableKeysManage_Users___Unee_T_Enterprise_UI;


$tdataManage_Users___Unee_T_Enterprise_UI[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.ID";

	
	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["ID"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","username");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["username"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","password");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.password";

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataManage_Users___Unee_T_Enterprise_UI["password"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdataManage_Users___Unee_T_Enterprise_UI["email"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","fullname");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.fullname";

	
	
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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataManage_Users___Unee_T_Enterprise_UI["fullname"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","groupid");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.groupid";

	
	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["groupid"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","active");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.active";

	
	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["active"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "active";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "uneet_enterprise_users";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_users.organization_id";

	
	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["organization_id"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "organization_id";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.designation";

	
	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["designation"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "designation";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("Manage_Users___Unee_T_Enterprise_UI","order");
	$fdata["FieldType"] = 2;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uneet_enterprise_organizations.`order`";

	
	
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


	$tdataManage_Users___Unee_T_Enterprise_UI["order"] = $fdata;
		$tdataManage_Users___Unee_T_Enterprise_UI[".searchableFields"][] = "order";


$tables_data["Manage Users - Unee-T Enterprise UI"]=&$tdataManage_Users___Unee_T_Enterprise_UI;
$field_labels["Manage_Users___Unee_T_Enterprise_UI"] = &$fieldLabelsManage_Users___Unee_T_Enterprise_UI;
$fieldToolTips["Manage_Users___Unee_T_Enterprise_UI"] = &$fieldToolTipsManage_Users___Unee_T_Enterprise_UI;
$placeHolders["Manage_Users___Unee_T_Enterprise_UI"] = &$placeHoldersManage_Users___Unee_T_Enterprise_UI;
$page_titles["Manage_Users___Unee_T_Enterprise_UI"] = &$pageTitlesManage_Users___Unee_T_Enterprise_UI;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Manage Users - Unee-T Enterprise UI"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Manage Users - Unee-T Enterprise UI"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Manage_Users___Unee_T_Enterprise_UI()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "uneet_enterprise_users.ID,  uneet_enterprise_users.username,  uneet_enterprise_users.password,  uneet_enterprise_users.email,  uneet_enterprise_users.fullname,  uneet_enterprise_users.groupid,  uneet_enterprise_users.active,  uneet_enterprise_users.organization_id,  uneet_enterprise_organizations.designation,  uneet_enterprise_organizations.`order`";
$proto0["m_strFrom"] = "FROM uneet_enterprise_users  LEFT OUTER JOIN uneet_enterprise_organizations ON uneet_enterprise_users.organization_id = uneet_enterprise_organizations.id_organization";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY uneet_enterprise_organizations.`order`, uneet_enterprise_users.fullname";
	
					
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
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto6["m_sql"] = "uneet_enterprise_users.ID";
$proto6["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto8["m_sql"] = "uneet_enterprise_users.username";
$proto8["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto10["m_sql"] = "uneet_enterprise_users.password";
$proto10["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto12["m_sql"] = "uneet_enterprise_users.email";
$proto12["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto14["m_sql"] = "uneet_enterprise_users.fullname";
$proto14["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto16["m_sql"] = "uneet_enterprise_users.groupid";
$proto16["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto18["m_sql"] = "uneet_enterprise_users.active";
$proto18["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto20["m_sql"] = "uneet_enterprise_users.organization_id";
$proto20["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto22["m_sql"] = "uneet_enterprise_organizations.designation";
$proto22["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto24["m_sql"] = "uneet_enterprise_organizations.`order`";
$proto24["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "uneet_enterprise_users";
$proto27["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "ID";
$proto27["m_columns"][] = "username";
$proto27["m_columns"][] = "password";
$proto27["m_columns"][] = "email";
$proto27["m_columns"][] = "fullname";
$proto27["m_columns"][] = "groupid";
$proto27["m_columns"][] = "active";
$proto27["m_columns"][] = "organization_id";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "uneet_enterprise_users";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_LEFTJOIN";
			$proto31=array();
$proto31["m_strName"] = "uneet_enterprise_organizations";
$proto31["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id_organization";
$proto31["m_columns"][] = "syst_created_datetime";
$proto31["m_columns"][] = "creation_system_id";
$proto31["m_columns"][] = "creation_method";
$proto31["m_columns"][] = "created_by_id";
$proto31["m_columns"][] = "syst_updated_datetime";
$proto31["m_columns"][] = "update_system_id";
$proto31["m_columns"][] = "updated_by_id";
$proto31["m_columns"][] = "update_method";
$proto31["m_columns"][] = "order";
$proto31["m_columns"][] = "is_obsolete";
$proto31["m_columns"][] = "designation";
$proto31["m_columns"][] = "description";
$proto31["m_columns"][] = "default_sot_system";
$proto31["m_columns"][] = "default_sot_persons";
$proto31["m_columns"][] = "default_sot_areas";
$proto31["m_columns"][] = "default_sot_properties";
$proto31["m_columns"][] = "default_area";
$proto31["m_columns"][] = "default_building";
$proto31["m_columns"][] = "default_unit";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "LEFT OUTER JOIN uneet_enterprise_organizations ON uneet_enterprise_users.organization_id = uneet_enterprise_organizations.id_organization";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "Manage Users - Unee-T Enterprise UI";
$proto32=array();
$proto32["m_sql"] = "uneet_enterprise_users.organization_id = uneet_enterprise_organizations.id_organization";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= uneet_enterprise_organizations.id_organization";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto34=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto34["m_column"]=$obj;
$proto34["m_bAsc"] = 1;
$proto34["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto34);

$proto0["m_orderby"][]=$obj;					
												$proto36=array();
						$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "uneet_enterprise_users",
	"m_srcTableName" => "Manage Users - Unee-T Enterprise UI"
));

$proto36["m_column"]=$obj;
$proto36["m_bAsc"] = 1;
$proto36["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto36);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Manage Users - Unee-T Enterprise UI";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Manage_Users___Unee_T_Enterprise_UI = createSqlQuery_Manage_Users___Unee_T_Enterprise_UI();


	
					
;

										

$tdataManage_Users___Unee_T_Enterprise_UI[".sqlquery"] = $queryData_Manage_Users___Unee_T_Enterprise_UI;

include_once(getabspath("include/Manage_Users___Unee_T_Enterprise_UI_events.php"));
$tableEvents["Manage Users - Unee-T Enterprise UI"] = new eventclass_Manage_Users___Unee_T_Enterprise_UI;
$tdataManage_Users___Unee_T_Enterprise_UI[".hasEvents"] = true;

?>