<?php



$tdatasuper_admin___manage_user_types = array();
$tdatasuper_admin___manage_user_types[".searchableFields"] = array();
$tdatasuper_admin___manage_user_types[".ShortName"] = "super_admin___manage_user_types";
$tdatasuper_admin___manage_user_types[".OwnerID"] = "";
$tdatasuper_admin___manage_user_types[".OriginalTable"] = "ut_user_types";


$defaultPages = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );

$tdatasuper_admin___manage_user_types[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasuper_admin___manage_user_types[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasuper_admin___manage_user_types[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelssuper_admin___manage_user_types = array();
$fieldToolTipssuper_admin___manage_user_types = array();
$pageTitlessuper_admin___manage_user_types = array();
$placeHolderssuper_admin___manage_user_types = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssuper_admin___manage_user_types["English"] = array();
	$fieldToolTipssuper_admin___manage_user_types["English"] = array();
	$placeHolderssuper_admin___manage_user_types["English"] = array();
	$pageTitlessuper_admin___manage_user_types["English"] = array();
	$fieldLabelssuper_admin___manage_user_types["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipssuper_admin___manage_user_types["English"]["syst_created_datetime"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["syst_created_datetime"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipssuper_admin___manage_user_types["English"]["creation_system_id"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["creation_system_id"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipssuper_admin___manage_user_types["English"]["created_by_id"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["created_by_id"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipssuper_admin___manage_user_types["English"]["syst_updated_datetime"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["syst_updated_datetime"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipssuper_admin___manage_user_types["English"]["update_system_id"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["update_system_id"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipssuper_admin___manage_user_types["English"]["updated_by_id"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["updated_by_id"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["order"] = "Order";
	$fieldToolTipssuper_admin___manage_user_types["English"]["order"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["order"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["is_obsolete"] = "Obsolete";
	$fieldToolTipssuper_admin___manage_user_types["English"]["is_obsolete"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["is_obsolete"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["description"] = "Description";
	$fieldToolTipssuper_admin___manage_user_types["English"]["description"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["description"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["creation_method"] = "Creation Method";
	$fieldToolTipssuper_admin___manage_user_types["English"]["creation_method"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["creation_method"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["update_method"] = "Update Method";
	$fieldToolTipssuper_admin___manage_user_types["English"]["update_method"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["update_method"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["organization_id"] = "Organization Id";
	$fieldToolTipssuper_admin___manage_user_types["English"]["organization_id"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["organization_id"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["id_unee_t_user_type"] = "ID";
	$fieldToolTipssuper_admin___manage_user_types["English"]["id_unee_t_user_type"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["id_unee_t_user_type"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["designation"] = "Unee-T User Type";
	$fieldToolTipssuper_admin___manage_user_types["English"]["designation"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["designation"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["ut_user_role_type_id"] = "Role";
	$fieldToolTipssuper_admin___manage_user_types["English"]["ut_user_role_type_id"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["ut_user_role_type_id"] = "";
	$fieldLabelssuper_admin___manage_user_types["English"]["role_type"] = "Role";
	$fieldToolTipssuper_admin___manage_user_types["English"]["role_type"] = "";
	$placeHolderssuper_admin___manage_user_types["English"]["role_type"] = "";
	if (count($fieldToolTipssuper_admin___manage_user_types["English"]))
		$tdatasuper_admin___manage_user_types[".isUseToolTips"] = true;
}


	$tdatasuper_admin___manage_user_types[".NCSearch"] = true;



$tdatasuper_admin___manage_user_types[".shortTableName"] = "super_admin___manage_user_types";
$tdatasuper_admin___manage_user_types[".nSecOptions"] = 0;

$tdatasuper_admin___manage_user_types[".mainTableOwnerID"] = "";
$tdatasuper_admin___manage_user_types[".entityType"] = 1;

$tdatasuper_admin___manage_user_types[".strOriginalTableName"] = "ut_user_types";

		 



$tdatasuper_admin___manage_user_types[".showAddInPopup"] = false;

$tdatasuper_admin___manage_user_types[".showEditInPopup"] = false;

$tdatasuper_admin___manage_user_types[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasuper_admin___manage_user_types[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdatasuper_admin___manage_user_types[".listAjax"] = true;
//	temporary
$tdatasuper_admin___manage_user_types[".listAjax"] = false;

	$tdatasuper_admin___manage_user_types[".audit"] = false;

	$tdatasuper_admin___manage_user_types[".locking"] = false;


$pages = $tdatasuper_admin___manage_user_types[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasuper_admin___manage_user_types[".edit"] = true;
	$tdatasuper_admin___manage_user_types[".afterEditAction"] = 1;
	$tdatasuper_admin___manage_user_types[".closePopupAfterEdit"] = 1;
	$tdatasuper_admin___manage_user_types[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatasuper_admin___manage_user_types[".add"] = true;
$tdatasuper_admin___manage_user_types[".afterAddAction"] = 0;
$tdatasuper_admin___manage_user_types[".closePopupAfterAdd"] = 1;
$tdatasuper_admin___manage_user_types[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatasuper_admin___manage_user_types[".list"] = true;
}



$tdatasuper_admin___manage_user_types[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasuper_admin___manage_user_types[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasuper_admin___manage_user_types[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasuper_admin___manage_user_types[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasuper_admin___manage_user_types[".printFriendly"] = true;
}



$tdatasuper_admin___manage_user_types[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasuper_admin___manage_user_types[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasuper_admin___manage_user_types[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasuper_admin___manage_user_types[".isUseAjaxSuggest"] = true;

$tdatasuper_admin___manage_user_types[".rowHighlite"] = true;





$tdatasuper_admin___manage_user_types[".ajaxCodeSnippetAdded"] = false;

$tdatasuper_admin___manage_user_types[".buttonsAdded"] = false;

$tdatasuper_admin___manage_user_types[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasuper_admin___manage_user_types[".isUseTimeForSearch"] = false;


$tdatasuper_admin___manage_user_types[".badgeColor"] = "6DA5C8";


$tdatasuper_admin___manage_user_types[".allSearchFields"] = array();
$tdatasuper_admin___manage_user_types[".filterFields"] = array();
$tdatasuper_admin___manage_user_types[".requiredSearchFields"] = array();

$tdatasuper_admin___manage_user_types[".googleLikeFields"] = array();
$tdatasuper_admin___manage_user_types[".googleLikeFields"][] = "id_unee_t_user_type";
$tdatasuper_admin___manage_user_types[".googleLikeFields"][] = "designation";
$tdatasuper_admin___manage_user_types[".googleLikeFields"][] = "description";
$tdatasuper_admin___manage_user_types[".googleLikeFields"][] = "role_type";



$tdatasuper_admin___manage_user_types[".tableType"] = "list";

$tdatasuper_admin___manage_user_types[".printerPageOrientation"] = 0;
$tdatasuper_admin___manage_user_types[".nPrinterPageScale"] = 100;

$tdatasuper_admin___manage_user_types[".nPrinterSplitRecords"] = 40;

$tdatasuper_admin___manage_user_types[".geocodingEnabled"] = false;





$tdatasuper_admin___manage_user_types[".isResizeColumns"] = true;





$tdatasuper_admin___manage_user_types[".pageSize"] = 20;

$tdatasuper_admin___manage_user_types[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY ut_user_role_types.role_type, ut_user_types.is_obsolete, ut_user_types.`order`, ut_user_types.organization_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasuper_admin___manage_user_types[".strOrderBy"] = $tstrOrderBy;

$tdatasuper_admin___manage_user_types[".orderindexes"] = array();
	$tdatasuper_admin___manage_user_types[".orderindexes"][] = array(16, (1 ? "ASC" : "DESC"), "ut_user_role_types.role_type");

	$tdatasuper_admin___manage_user_types[".orderindexes"][] = array(12, (1 ? "ASC" : "DESC"), "ut_user_types.is_obsolete");

	$tdatasuper_admin___manage_user_types[".orderindexes"][] = array(11, (1 ? "ASC" : "DESC"), "ut_user_types.`order`");

	$tdatasuper_admin___manage_user_types[".orderindexes"][] = array(10, (0 ? "ASC" : "DESC"), "ut_user_types.organization_id");


$tdatasuper_admin___manage_user_types[".sqlHead"] = "SELECT ut_user_types.id_unee_t_user_type,  ut_user_types.syst_created_datetime,  ut_user_types.creation_system_id,  ut_user_types.created_by_id,  ut_user_types.creation_method,  ut_user_types.syst_updated_datetime,  ut_user_types.update_system_id,  ut_user_types.updated_by_id,  ut_user_types.update_method,  ut_user_types.organization_id,  ut_user_types.`order`,  ut_user_types.is_obsolete,  ut_user_types.designation,  ut_user_types.description,  ut_user_types.ut_user_role_type_id,  ut_user_role_types.role_type";
$tdatasuper_admin___manage_user_types[".sqlFrom"] = "FROM ut_user_types  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$tdatasuper_admin___manage_user_types[".sqlWhereExpr"] = "";
$tdatasuper_admin___manage_user_types[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasuper_admin___manage_user_types[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasuper_admin___manage_user_types[".arrGroupsPerPage"] = $arrGPP;

$tdatasuper_admin___manage_user_types[".highlightSearchResults"] = true;

$tableKeyssuper_admin___manage_user_types = array();
$tableKeyssuper_admin___manage_user_types[] = "organization_id";
$tableKeyssuper_admin___manage_user_types[] = "designation";
$tdatasuper_admin___manage_user_types[".Keys"] = $tableKeyssuper_admin___manage_user_types;


$tdatasuper_admin___manage_user_types[".hideMobileList"] = array();




//	id_unee_t_user_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_unee_t_user_type";
	$fdata["GoodName"] = "id_unee_t_user_type";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","id_unee_t_user_type");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_unee_t_user_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.id_unee_t_user_type";

	
	
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


	$tdatasuper_admin___manage_user_types["id_unee_t_user_type"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "id_unee_t_user_type";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.syst_created_datetime";

	
	
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


	$tdatasuper_admin___manage_user_types["syst_created_datetime"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","creation_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.creation_system_id";

	
	
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


	$tdatasuper_admin___manage_user_types["creation_system_id"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "creation_system_id";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","created_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.created_by_id";

	
	
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


	$tdatasuper_admin___manage_user_types["created_by_id"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "created_by_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.creation_method";

	
	
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


	$tdatasuper_admin___manage_user_types["creation_method"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "creation_method";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.syst_updated_datetime";

	
	
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


	$tdatasuper_admin___manage_user_types["syst_updated_datetime"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","update_system_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.update_system_id";

	
	
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


	$tdatasuper_admin___manage_user_types["update_system_id"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","updated_by_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.updated_by_id";

	
	
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


	$tdatasuper_admin___manage_user_types["updated_by_id"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.update_method";

	
	
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


	$tdatasuper_admin___manage_user_types["update_method"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "update_method";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.organization_id";

	
	
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


	$tdatasuper_admin___manage_user_types["organization_id"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "organization_id";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","order");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.`order`";

	
	
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


	$tdatasuper_admin___manage_user_types["order"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.is_obsolete";

	
	
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


	$tdatasuper_admin___manage_user_types["is_obsolete"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.designation";

	
	
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


	$tdatasuper_admin___manage_user_types["designation"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.description";

	
	
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


	$tdatasuper_admin___manage_user_types["description"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "description";
//	ut_user_role_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "ut_user_role_type_id";
	$fdata["GoodName"] = "ut_user_role_type_id";
	$fdata["ownerTable"] = "ut_user_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","ut_user_role_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "ut_user_role_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_types.ut_user_role_type_id";

	
	
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

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_user_role_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_role_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "role_type";

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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_user_role_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_role_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "role_type";

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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ut_user_role_types";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_role_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "role_type";

				$edata["LookupWhereCode"] = true;


	
	$edata["LookupOrderBy"] = "order";

	
	
	
	

	
		$edata["Multiselect"] = true;

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

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatasuper_admin___manage_user_types["ut_user_role_type_id"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "ut_user_role_type_id";
//	role_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "role_type";
	$fdata["GoodName"] = "role_type";
	$fdata["ownerTable"] = "ut_user_role_types";
	$fdata["Label"] = GetFieldLabel("Super_Admin___Manage_User_Types","role_type");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "role_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_user_role_types.role_type";

	
	
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


	$tdatasuper_admin___manage_user_types["role_type"] = $fdata;
		$tdatasuper_admin___manage_user_types[".searchableFields"][] = "role_type";


$tables_data["Super Admin - Manage User Types"]=&$tdatasuper_admin___manage_user_types;
$field_labels["Super_Admin___Manage_User_Types"] = &$fieldLabelssuper_admin___manage_user_types;
$fieldToolTips["Super_Admin___Manage_User_Types"] = &$fieldToolTipssuper_admin___manage_user_types;
$placeHolders["Super_Admin___Manage_User_Types"] = &$placeHolderssuper_admin___manage_user_types;
$page_titles["Super_Admin___Manage_User_Types"] = &$pageTitlessuper_admin___manage_user_types;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Super Admin - Manage User Types"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Super Admin - Manage User Types"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_super_admin___manage_user_types()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_user_types.id_unee_t_user_type,  ut_user_types.syst_created_datetime,  ut_user_types.creation_system_id,  ut_user_types.created_by_id,  ut_user_types.creation_method,  ut_user_types.syst_updated_datetime,  ut_user_types.update_system_id,  ut_user_types.updated_by_id,  ut_user_types.update_method,  ut_user_types.organization_id,  ut_user_types.`order`,  ut_user_types.is_obsolete,  ut_user_types.designation,  ut_user_types.description,  ut_user_types.ut_user_role_type_id,  ut_user_role_types.role_type";
$proto0["m_strFrom"] = "FROM ut_user_types  LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY ut_user_role_types.role_type, ut_user_types.is_obsolete, ut_user_types.`order`, ut_user_types.organization_id DESC";
	
					
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
	"m_strName" => "id_unee_t_user_type",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto6["m_sql"] = "ut_user_types.id_unee_t_user_type";
$proto6["m_srcTableName"] = "Super Admin - Manage User Types";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto8["m_sql"] = "ut_user_types.syst_created_datetime";
$proto8["m_srcTableName"] = "Super Admin - Manage User Types";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto10["m_sql"] = "ut_user_types.creation_system_id";
$proto10["m_srcTableName"] = "Super Admin - Manage User Types";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto12["m_sql"] = "ut_user_types.created_by_id";
$proto12["m_srcTableName"] = "Super Admin - Manage User Types";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto14["m_sql"] = "ut_user_types.creation_method";
$proto14["m_srcTableName"] = "Super Admin - Manage User Types";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto16["m_sql"] = "ut_user_types.syst_updated_datetime";
$proto16["m_srcTableName"] = "Super Admin - Manage User Types";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto18["m_sql"] = "ut_user_types.update_system_id";
$proto18["m_srcTableName"] = "Super Admin - Manage User Types";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto20["m_sql"] = "ut_user_types.updated_by_id";
$proto20["m_srcTableName"] = "Super Admin - Manage User Types";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto22["m_sql"] = "ut_user_types.update_method";
$proto22["m_srcTableName"] = "Super Admin - Manage User Types";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto24["m_sql"] = "ut_user_types.organization_id";
$proto24["m_srcTableName"] = "Super Admin - Manage User Types";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto26["m_sql"] = "ut_user_types.`order`";
$proto26["m_srcTableName"] = "Super Admin - Manage User Types";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto28["m_sql"] = "ut_user_types.is_obsolete";
$proto28["m_srcTableName"] = "Super Admin - Manage User Types";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto30["m_sql"] = "ut_user_types.designation";
$proto30["m_srcTableName"] = "Super Admin - Manage User Types";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto32["m_sql"] = "ut_user_types.description";
$proto32["m_srcTableName"] = "Super Admin - Manage User Types";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto34["m_sql"] = "ut_user_types.ut_user_role_type_id";
$proto34["m_srcTableName"] = "Super Admin - Manage User Types";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto36["m_sql"] = "ut_user_role_types.role_type";
$proto36["m_srcTableName"] = "Super Admin - Manage User Types";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "ut_user_types";
$proto39["m_srcTableName"] = "Super Admin - Manage User Types";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "id_unee_t_user_type";
$proto39["m_columns"][] = "syst_created_datetime";
$proto39["m_columns"][] = "creation_system_id";
$proto39["m_columns"][] = "created_by_id";
$proto39["m_columns"][] = "creation_method";
$proto39["m_columns"][] = "syst_updated_datetime";
$proto39["m_columns"][] = "update_system_id";
$proto39["m_columns"][] = "updated_by_id";
$proto39["m_columns"][] = "update_method";
$proto39["m_columns"][] = "organization_id";
$proto39["m_columns"][] = "order";
$proto39["m_columns"][] = "is_obsolete";
$proto39["m_columns"][] = "designation";
$proto39["m_columns"][] = "description";
$proto39["m_columns"][] = "ut_user_role_type_id";
$proto39["m_columns"][] = "is_all_unit";
$proto39["m_columns"][] = "is_all_units_in_country";
$proto39["m_columns"][] = "is_all_units_in_area";
$proto39["m_columns"][] = "is_all_units_in_level_1";
$proto39["m_columns"][] = "is_all_units_in_level_2";
$proto39["m_columns"][] = "is_occupant";
$proto39["m_columns"][] = "is_public";
$proto39["m_columns"][] = "is_default_assignee";
$proto39["m_columns"][] = "is_default_invited";
$proto39["m_columns"][] = "is_unit_owner";
$proto39["m_columns"][] = "is_dashboard_access";
$proto39["m_columns"][] = "can_see_role_contractor";
$proto39["m_columns"][] = "can_see_role_mgt_cny";
$proto39["m_columns"][] = "can_see_occupant";
$proto39["m_columns"][] = "can_see_role_landlord";
$proto39["m_columns"][] = "can_see_role_agent";
$proto39["m_columns"][] = "can_see_role_tenant";
$proto39["m_columns"][] = "is_assigned_to_case";
$proto39["m_columns"][] = "is_invited_to_case";
$proto39["m_columns"][] = "is_solution_updated";
$proto39["m_columns"][] = "is_next_step_updated";
$proto39["m_columns"][] = "is_deadline_updated";
$proto39["m_columns"][] = "is_case_resolved";
$proto39["m_columns"][] = "is_case_critical";
$proto39["m_columns"][] = "is_case_blocker";
$proto39["m_columns"][] = "is_message_from_contractor";
$proto39["m_columns"][] = "is_message_from_mgt_cny";
$proto39["m_columns"][] = "is_message_from_agent";
$proto39["m_columns"][] = "is_message_from_occupant";
$proto39["m_columns"][] = "is_message_from_ll";
$proto39["m_columns"][] = "is_message_from_tenant";
$proto39["m_columns"][] = "is_any_new_message";
$proto39["m_columns"][] = "is_new_ir";
$proto39["m_columns"][] = "is_new_inventory";
$proto39["m_columns"][] = "is_new_item";
$proto39["m_columns"][] = "is_item_moved";
$proto39["m_columns"][] = "is_item_removed";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "ut_user_types";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "Super Admin - Manage User Types";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
												$proto42=array();
$proto42["m_link"] = "SQLL_LEFTJOIN";
			$proto43=array();
$proto43["m_strName"] = "ut_user_role_types";
$proto43["m_srcTableName"] = "Super Admin - Manage User Types";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "id_role_type";
$proto43["m_columns"][] = "syst_created_datetime";
$proto43["m_columns"][] = "creation_system_id";
$proto43["m_columns"][] = "created_by_id";
$proto43["m_columns"][] = "syst_updated_datetime";
$proto43["m_columns"][] = "update_system_id";
$proto43["m_columns"][] = "updated_by_id";
$proto43["m_columns"][] = "order";
$proto43["m_columns"][] = "is_obsolete";
$proto43["m_columns"][] = "role_type";
$proto43["m_columns"][] = "bz_description";
$proto43["m_columns"][] = "description";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "LEFT OUTER JOIN ut_user_role_types ON ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "Super Admin - Manage User Types";
$proto44=array();
$proto44["m_sql"] = "ut_user_types.ut_user_role_type_id = ut_user_role_types.id_role_type";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ut_user_role_type_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= ut_user_role_types.id_role_type";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "role_type",
	"m_strTable" => "ut_user_role_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto46["m_column"]=$obj;
$proto46["m_bAsc"] = 1;
$proto46["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto46);

$proto0["m_orderby"][]=$obj;					
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto48["m_column"]=$obj;
$proto48["m_bAsc"] = 1;
$proto48["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto48);

$proto0["m_orderby"][]=$obj;					
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 1;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_user_types",
	"m_srcTableName" => "Super Admin - Manage User Types"
));

$proto52["m_column"]=$obj;
$proto52["m_bAsc"] = 0;
$proto52["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto52);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Super Admin - Manage User Types";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_super_admin___manage_user_types = createSqlQuery_super_admin___manage_user_types();


	
					
;

																

$tdatasuper_admin___manage_user_types[".sqlquery"] = $queryData_super_admin___manage_user_types;

include_once(getabspath("include/super_admin___manage_user_types_events.php"));
$tableEvents["Super Admin - Manage User Types"] = new eventclass_super_admin___manage_user_types;
$tdatasuper_admin___manage_user_types[".hasEvents"] = true;

?>