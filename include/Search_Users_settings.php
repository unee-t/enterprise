<?php




$tdataSearch_Users = array();
$tdataSearch_Users[".searchableFields"] = array();
	$tdataSearch_Users[".truncateText"] = true;
	$tdataSearch_Users[".NumberOfChars"] = 80;
	$tdataSearch_Users[".ShortName"] = "Search_Users";
	$tdataSearch_Users[".OwnerID"] = "organization_id";
	$tdataSearch_Users[".OriginalTable"] = "ut_map_external_source_users";


$defaultPages = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );

$tdataSearch_Users[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataSearch_Users[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsSearch_Users = array();
$fieldToolTipsSearch_Users = array();
$pageTitlesSearch_Users = array();
$placeHoldersSearch_Users = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsSearch_Users["English"] = array();
	$fieldToolTipsSearch_Users["English"] = array();
	$placeHoldersSearch_Users["English"] = array();
	$pageTitlesSearch_Users["English"] = array();
	$fieldLabelsSearch_Users["English"]["id_map"] = "Id Map";
	$fieldToolTipsSearch_Users["English"]["id_map"] = "";
	$placeHoldersSearch_Users["English"]["id_map"] = "";
	$fieldLabelsSearch_Users["English"]["organization_id"] = "Organization Id";
	$fieldToolTipsSearch_Users["English"]["organization_id"] = "";
	$placeHoldersSearch_Users["English"]["organization_id"] = "";
	$fieldLabelsSearch_Users["English"]["person_id"] = "Person Id";
	$fieldToolTipsSearch_Users["English"]["person_id"] = "";
	$placeHoldersSearch_Users["English"]["person_id"] = "";
	$fieldLabelsSearch_Users["English"]["unee_t_mefe_user_id"] = "Unee T Mefe User Id";
	$fieldToolTipsSearch_Users["English"]["unee_t_mefe_user_id"] = "";
	$placeHoldersSearch_Users["English"]["unee_t_mefe_user_id"] = "";
	$fieldLabelsSearch_Users["English"]["external_person_id"] = "External Person Id";
	$fieldToolTipsSearch_Users["English"]["external_person_id"] = "";
	$placeHoldersSearch_Users["English"]["external_person_id"] = "";
	$fieldLabelsSearch_Users["English"]["external_system"] = "External System";
	$fieldToolTipsSearch_Users["English"]["external_system"] = "";
	$placeHoldersSearch_Users["English"]["external_system"] = "";
	$fieldLabelsSearch_Users["English"]["table_in_external_system"] = "Table In External System";
	$fieldToolTipsSearch_Users["English"]["table_in_external_system"] = "";
	$placeHoldersSearch_Users["English"]["table_in_external_system"] = "";
	$fieldLabelsSearch_Users["English"]["active_person"] = "Active";
	$fieldToolTipsSearch_Users["English"]["active_person"] = "";
	$placeHoldersSearch_Users["English"]["active_person"] = "";
	$fieldLabelsSearch_Users["English"]["person_status"] = "Person Status";
	$fieldToolTipsSearch_Users["English"]["person_status"] = "";
	$placeHoldersSearch_Users["English"]["person_status"] = "";
	$fieldLabelsSearch_Users["English"]["unee_t_user_type_id"] = "Unee-T User Type";
	$fieldToolTipsSearch_Users["English"]["unee_t_user_type_id"] = "";
	$placeHoldersSearch_Users["English"]["unee_t_user_type_id"] = "";
	$fieldLabelsSearch_Users["English"]["organization_id_person"] = "Organization Id Person";
	$fieldToolTipsSearch_Users["English"]["organization_id_person"] = "";
	$placeHoldersSearch_Users["English"]["organization_id_person"] = "";
	$fieldLabelsSearch_Users["English"]["email"] = "Email";
	$fieldToolTipsSearch_Users["English"]["email"] = "";
	$placeHoldersSearch_Users["English"]["email"] = "";
	$fieldLabelsSearch_Users["English"]["country_code"] = "Country Code";
	$fieldToolTipsSearch_Users["English"]["country_code"] = "";
	$placeHoldersSearch_Users["English"]["country_code"] = "";
	$fieldLabelsSearch_Users["English"]["obsolete_unee_t_user"] = "Obsolete Unee T User";
	$fieldToolTipsSearch_Users["English"]["obsolete_unee_t_user"] = "";
	$placeHoldersSearch_Users["English"]["obsolete_unee_t_user"] = "";
	$fieldLabelsSearch_Users["English"]["name"] = "Name";
	$fieldToolTipsSearch_Users["English"]["name"] = "";
	$placeHoldersSearch_Users["English"]["name"] = "";
	$fieldLabelsSearch_Users["English"]["phones"] = "Phones";
	$fieldToolTipsSearch_Users["English"]["phones"] = "";
	$placeHoldersSearch_Users["English"]["phones"] = "";
	$fieldLabelsSearch_Users["English"]["organization_job"] = "Organization-job";
	$fieldToolTipsSearch_Users["English"]["organization_job"] = "";
	$placeHoldersSearch_Users["English"]["organization_job"] = "";
	if (count($fieldToolTipsSearch_Users["English"]))
		$tdataSearch_Users[".isUseToolTips"] = true;
}


	$tdataSearch_Users[".NCSearch"] = true;



$tdataSearch_Users[".shortTableName"] = "Search_Users";
$tdataSearch_Users[".nSecOptions"] = 1;

$tdataSearch_Users[".mainTableOwnerID"] = "organization_id";
$tdataSearch_Users[".entityType"] = 1;

$tdataSearch_Users[".strOriginalTableName"] = "ut_map_external_source_users";

		 



$tdataSearch_Users[".showAddInPopup"] = false;

$tdataSearch_Users[".showEditInPopup"] = false;

$tdataSearch_Users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSearch_Users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataSearch_Users[".listAjax"] = true;
//	temporary
$tdataSearch_Users[".listAjax"] = false;

	$tdataSearch_Users[".audit"] = false;

	$tdataSearch_Users[".locking"] = false;


$pages = $tdataSearch_Users[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataSearch_Users[".edit"] = true;
	$tdataSearch_Users[".afterEditAction"] = 1;
	$tdataSearch_Users[".closePopupAfterEdit"] = 1;
	$tdataSearch_Users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataSearch_Users[".add"] = true;
$tdataSearch_Users[".afterAddAction"] = 1;
$tdataSearch_Users[".closePopupAfterAdd"] = 1;
$tdataSearch_Users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataSearch_Users[".list"] = true;
}



$tdataSearch_Users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataSearch_Users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataSearch_Users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataSearch_Users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataSearch_Users[".printFriendly"] = true;
}



$tdataSearch_Users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataSearch_Users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataSearch_Users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataSearch_Users[".isUseAjaxSuggest"] = true;

$tdataSearch_Users[".rowHighlite"] = true;





$tdataSearch_Users[".ajaxCodeSnippetAdded"] = false;

$tdataSearch_Users[".buttonsAdded"] = false;

$tdataSearch_Users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSearch_Users[".isUseTimeForSearch"] = false;


$tdataSearch_Users[".badgeColor"] = "6DA5C8";


$tdataSearch_Users[".allSearchFields"] = array();
$tdataSearch_Users[".filterFields"] = array();
$tdataSearch_Users[".requiredSearchFields"] = array();

$tdataSearch_Users[".googleLikeFields"] = array();
$tdataSearch_Users[".googleLikeFields"][] = "person_status";
$tdataSearch_Users[".googleLikeFields"][] = "name";
$tdataSearch_Users[".googleLikeFields"][] = "organization-job";
$tdataSearch_Users[".googleLikeFields"][] = "email";
$tdataSearch_Users[".googleLikeFields"][] = "phones";
$tdataSearch_Users[".googleLikeFields"][] = "country_code";



$tdataSearch_Users[".tableType"] = "list";

$tdataSearch_Users[".printerPageOrientation"] = 0;
$tdataSearch_Users[".nPrinterPageScale"] = 100;

$tdataSearch_Users[".nPrinterSplitRecords"] = 40;

$tdataSearch_Users[".nPrinterPDFSplitRecords"] = 40;


$tdataSearch_Users[".geocodingEnabled"] = false;





$tdataSearch_Users[".isResizeColumns"] = true;





$tdataSearch_Users[".pageSize"] = 20;

$tdataSearch_Users[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY persons.organization_id DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSearch_Users[".strOrderBy"] = $tstrOrderBy;

$tdataSearch_Users[".orderindexes"] = array();
	$tdataSearch_Users[".orderindexes"][] = array(12, (0 ? "ASC" : "DESC"), "persons.organization_id");


$tdataSearch_Users[".sqlHead"] = "SELECT ut_map_external_source_users.id_map,  ut_map_external_source_users.organization_id,  ut_map_external_source_users.is_obsolete AS obsolete_unee_t_user,  ut_map_external_source_users.person_id,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.external_person_id,  ut_map_external_source_users.external_system,  ut_map_external_source_users.table_in_external_system,  person_statuses.is_active AS active_person,  person_statuses.person_status,  persons.unee_t_user_type_id,  persons.organization_id AS organization_id_person,  CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' '  	, IFNULL(`persons`.`middle_name`  		, '')  	, ' '  	, IFNULL(`persons`.`family_name`  		, '')  	, ' ('  	, IFNULL(`persons`.`alias`  		, '')  	, ')'  	) AS `name`,  CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' - '  	, IFNULL(`persons`.`organization`  		, '')  	) AS `organization-job`,  persons.email,  CONCAT (IFNULL(`persons`.`tel_1`  		, '')  	, ' - '  	, IFNULL(`persons`.`tel_2`  		, '')  	, ' - '  	, IFNULL(`persons`.`whatsapp`  		, '')  	) AS `phones`,  persons.country_code";
$tdataSearch_Users[".sqlFrom"] = "FROM ut_map_external_source_users  LEFT OUTER JOIN persons ON ut_map_external_source_users.person_id = persons.id_person  LEFT OUTER JOIN person_statuses ON persons.person_status_id = person_statuses.id_person_status";
$tdataSearch_Users[".sqlWhereExpr"] = "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)";
$tdataSearch_Users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSearch_Users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSearch_Users[".arrGroupsPerPage"] = $arrGPP;

$tdataSearch_Users[".highlightSearchResults"] = true;

$tableKeysSearch_Users = array();
$tableKeysSearch_Users[] = "organization_id";
$tableKeysSearch_Users[] = "external_person_id";
$tableKeysSearch_Users[] = "external_system";
$tableKeysSearch_Users[] = "table_in_external_system";
$tdataSearch_Users[".Keys"] = $tableKeysSearch_Users;


$tdataSearch_Users[".hideMobileList"] = array();




//	id_map
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_map";
	$fdata["GoodName"] = "id_map";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","id_map");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_map";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.id_map";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataSearch_Users["id_map"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "id_map";
//	organization_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "organization_id";
	$fdata["GoodName"] = "organization_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","organization_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.organization_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataSearch_Users["organization_id"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "organization_id";
//	obsolete_unee_t_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "obsolete_unee_t_user";
	$fdata["GoodName"] = "obsolete_unee_t_user";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","obsolete_unee_t_user");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.is_obsolete";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataSearch_Users["obsolete_unee_t_user"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "obsolete_unee_t_user";
//	person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "person_id";
	$fdata["GoodName"] = "person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","person_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.person_id";

	
	
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


	$tdataSearch_Users["person_id"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "person_id";
//	unee_t_mefe_user_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unee_t_mefe_user_id";
	$fdata["GoodName"] = "unee_t_mefe_user_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","unee_t_mefe_user_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "unee_t_mefe_user_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.unee_t_mefe_user_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["unee_t_mefe_user_id"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "unee_t_mefe_user_id";
//	external_person_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "external_person_id";
	$fdata["GoodName"] = "external_person_id";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","external_person_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_person_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.external_person_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["external_person_id"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "external_person_id";
//	external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "external_system";
	$fdata["GoodName"] = "external_system";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.external_system";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["external_system"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "external_system";
//	table_in_external_system
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "table_in_external_system";
	$fdata["GoodName"] = "table_in_external_system";
	$fdata["ownerTable"] = "ut_map_external_source_users";
	$fdata["Label"] = GetFieldLabel("Search_Users","table_in_external_system");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "table_in_external_system";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ut_map_external_source_users.table_in_external_system";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["table_in_external_system"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "table_in_external_system";
//	active_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "active_person";
	$fdata["GoodName"] = "active_person";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Search_Users","active_person");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_statuses.is_active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataSearch_Users["active_person"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "active_person";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "person_status";
	$fdata["GoodName"] = "person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("Search_Users","person_status");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_statuses.person_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["person_status"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "person_status";
//	unee_t_user_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "unee_t_user_type_id";
	$fdata["GoodName"] = "unee_t_user_type_id";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Search_Users","unee_t_user_type_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "unee_t_user_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.unee_t_user_type_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataSearch_Users["unee_t_user_type_id"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "unee_t_user_type_id";
//	organization_id_person
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "organization_id_person";
	$fdata["GoodName"] = "organization_id_person";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Search_Users","organization_id_person");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "organization_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.organization_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



		$edata["IsRequired"] = true;

	
	
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


	$tdataSearch_Users["organization_id_person"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "organization_id_person";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Search_Users","name");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' '  	, IFNULL(`persons`.`middle_name`  		, '')  	, ' '  	, IFNULL(`persons`.`family_name`  		, '')  	, ' ('  	, IFNULL(`persons`.`alias`  		, '')  	, ')'  	)";

	
	
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


	$tdataSearch_Users["name"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "name";
//	organization-job
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "organization-job";
	$fdata["GoodName"] = "organization_job";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Search_Users","organization_job");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "organization-job";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' - '  	, IFNULL(`persons`.`organization`  		, '')  	)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["organization-job"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "organization-job";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Search_Users","email");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["email"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "email";
//	phones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "phones";
	$fdata["GoodName"] = "phones";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Search_Users","phones");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "phones";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT (IFNULL(`persons`.`tel_1`  		, '')  	, ' - '  	, IFNULL(`persons`.`tel_2`  		, '')  	, ' - '  	, IFNULL(`persons`.`whatsapp`  		, '')  	)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["phones"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "phones";
//	country_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "country_code";
	$fdata["GoodName"] = "country_code";
	$fdata["ownerTable"] = "persons";
	$fdata["Label"] = GetFieldLabel("Search_Users","country_code");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "country_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "persons.country_code";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
	
	



	
	
	
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


	$tdataSearch_Users["country_code"] = $fdata;
		$tdataSearch_Users[".searchableFields"][] = "country_code";


$tables_data["Search Users"]=&$tdataSearch_Users;
$field_labels["Search_Users"] = &$fieldLabelsSearch_Users;
$fieldToolTips["Search_Users"] = &$fieldToolTipsSearch_Users;
$placeHolders["Search_Users"] = &$placeHoldersSearch_Users;
$page_titles["Search_Users"] = &$pageTitlesSearch_Users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Search Users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Search Users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_Search_Users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ut_map_external_source_users.id_map,  ut_map_external_source_users.organization_id,  ut_map_external_source_users.is_obsolete AS obsolete_unee_t_user,  ut_map_external_source_users.person_id,  ut_map_external_source_users.unee_t_mefe_user_id,  ut_map_external_source_users.external_person_id,  ut_map_external_source_users.external_system,  ut_map_external_source_users.table_in_external_system,  person_statuses.is_active AS active_person,  person_statuses.person_status,  persons.unee_t_user_type_id,  persons.organization_id AS organization_id_person,  CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' '  	, IFNULL(`persons`.`middle_name`  		, '')  	, ' '  	, IFNULL(`persons`.`family_name`  		, '')  	, ' ('  	, IFNULL(`persons`.`alias`  		, '')  	, ')'  	) AS `name`,  CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' - '  	, IFNULL(`persons`.`organization`  		, '')  	) AS `organization-job`,  persons.email,  CONCAT (IFNULL(`persons`.`tel_1`  		, '')  	, ' - '  	, IFNULL(`persons`.`tel_2`  		, '')  	, ' - '  	, IFNULL(`persons`.`whatsapp`  		, '')  	) AS `phones`,  persons.country_code";
$proto0["m_strFrom"] = "FROM ut_map_external_source_users  LEFT OUTER JOIN persons ON ut_map_external_source_users.person_id = persons.id_person  LEFT OUTER JOIN person_statuses ON persons.person_status_id = person_statuses.id_person_status";
$proto0["m_strWhere"] = "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)";
$proto0["m_strOrderBy"] = "ORDER BY persons.organization_id DESC";
	
					
;
						$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL) AND (person_statuses.is_active = 1 OR person_statuses.is_active IS NULL)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL";
$proto4["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL OR ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
						$proto6=array();
$proto6["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "IS NOT NULL";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto4["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id IS NOT NULL";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "IS NOT NULL";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto4["m_contained"][]=$obj;
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto10=array();
$proto10["m_sql"] = "person_statuses.is_active = 1 OR person_statuses.is_active IS NULL";
$proto10["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "person_statuses.is_active = 1 OR person_statuses.is_active IS NULL"
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
						$proto12=array();
$proto12["m_sql"] = "person_statuses.is_active = 1";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Search Users"
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "= 1";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

			$proto10["m_contained"][]=$obj;
						$proto14=array();
$proto14["m_sql"] = "person_statuses.is_active IS NULL";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Search Users"
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "IS NULL";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

			$proto10["m_contained"][]=$obj;
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = true;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "id_map",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto18["m_sql"] = "ut_map_external_source_users.id_map";
$proto18["m_srcTableName"] = "Search Users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto20["m_sql"] = "ut_map_external_source_users.organization_id";
$proto20["m_srcTableName"] = "Search Users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto22["m_sql"] = "ut_map_external_source_users.is_obsolete";
$proto22["m_srcTableName"] = "Search Users";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "obsolete_unee_t_user";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto24["m_sql"] = "ut_map_external_source_users.person_id";
$proto24["m_srcTableName"] = "Search Users";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_mefe_user_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto26["m_sql"] = "ut_map_external_source_users.unee_t_mefe_user_id";
$proto26["m_srcTableName"] = "Search Users";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "external_person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto28["m_sql"] = "ut_map_external_source_users.external_person_id";
$proto28["m_srcTableName"] = "Search Users";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "external_system",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto30["m_sql"] = "ut_map_external_source_users.external_system";
$proto30["m_srcTableName"] = "Search Users";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "table_in_external_system",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto32["m_sql"] = "ut_map_external_source_users.table_in_external_system";
$proto32["m_srcTableName"] = "Search Users";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Search Users"
));

$proto34["m_sql"] = "person_statuses.is_active";
$proto34["m_srcTableName"] = "Search Users";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "active_person";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "Search Users"
));

$proto36["m_sql"] = "person_statuses.person_status";
$proto36["m_srcTableName"] = "Search Users";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "unee_t_user_type_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Search Users"
));

$proto38["m_sql"] = "persons.unee_t_user_type_id";
$proto38["m_srcTableName"] = "Search Users";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Search Users"
));

$proto40["m_sql"] = "persons.organization_id";
$proto40["m_srcTableName"] = "Search Users";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "organization_id_person";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`given_name`  		, '')"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`middle_name`  		, '')"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`family_name`  		, '')"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' ('"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`alias`  		, '')"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "')'"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' '  	, IFNULL(`persons`.`middle_name`  		, '')  	, ' '  	, IFNULL(`persons`.`family_name`  		, '')  	, ' ('  	, IFNULL(`persons`.`alias`  		, '')  	, ')'  	)";
$proto42["m_srcTableName"] = "Search Users";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "name";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`given_name`  		, '')"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto53["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`organization`  		, '')"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto53);

$proto52["m_sql"] = "CONCAT (IFNULL(`persons`.`given_name`  		, '')  	, ' - '  	, IFNULL(`persons`.`organization`  		, '')  	)";
$proto52["m_srcTableName"] = "Search Users";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "organization-job";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "persons",
	"m_srcTableName" => "Search Users"
));

$proto57["m_sql"] = "persons.email";
$proto57["m_srcTableName"] = "Search Users";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$proto60=array();
$proto60["m_functiontype"] = "SQLF_CUSTOM";
$proto60["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`tel_1`  		, '')"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`tel_2`  		, '')"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' - '"
));

$proto60["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "IFNULL(`persons`.`whatsapp`  		, '')"
));

$proto60["m_arguments"][]=$obj;
$proto60["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto60);

$proto59["m_sql"] = "CONCAT (IFNULL(`persons`.`tel_1`  		, '')  	, ' - '  	, IFNULL(`persons`.`tel_2`  		, '')  	, ' - '  	, IFNULL(`persons`.`whatsapp`  		, '')  	)";
$proto59["m_srcTableName"] = "Search Users";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "phones";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "country_code",
	"m_strTable" => "persons",
	"m_srcTableName" => "Search Users"
));

$proto66["m_sql"] = "persons.country_code";
$proto66["m_srcTableName"] = "Search Users";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "ut_map_external_source_users";
$proto69["m_srcTableName"] = "Search Users";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "id_map";
$proto69["m_columns"][] = "syst_created_datetime";
$proto69["m_columns"][] = "creation_system_id";
$proto69["m_columns"][] = "created_by_id";
$proto69["m_columns"][] = "creation_method";
$proto69["m_columns"][] = "syst_updated_datetime";
$proto69["m_columns"][] = "update_system_id";
$proto69["m_columns"][] = "updated_by_id";
$proto69["m_columns"][] = "update_method";
$proto69["m_columns"][] = "organization_id";
$proto69["m_columns"][] = "is_obsolete";
$proto69["m_columns"][] = "is_update_needed";
$proto69["m_columns"][] = "person_id";
$proto69["m_columns"][] = "unee_t_mefe_user_id";
$proto69["m_columns"][] = "uneet_created_datetime";
$proto69["m_columns"][] = "is_unee_t_created_by_me";
$proto69["m_columns"][] = "uneet_login_name";
$proto69["m_columns"][] = "external_person_id";
$proto69["m_columns"][] = "external_system";
$proto69["m_columns"][] = "table_in_external_system";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "ut_map_external_source_users";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Search Users";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_LEFTJOIN";
			$proto73=array();
$proto73["m_strName"] = "persons";
$proto73["m_srcTableName"] = "Search Users";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "id_person";
$proto73["m_columns"][] = "external_id";
$proto73["m_columns"][] = "external_system";
$proto73["m_columns"][] = "external_table";
$proto73["m_columns"][] = "syst_created_datetime";
$proto73["m_columns"][] = "creation_system_id";
$proto73["m_columns"][] = "created_by_id";
$proto73["m_columns"][] = "creation_method";
$proto73["m_columns"][] = "syst_updated_datetime";
$proto73["m_columns"][] = "update_system_id";
$proto73["m_columns"][] = "updated_by_id";
$proto73["m_columns"][] = "update_method";
$proto73["m_columns"][] = "organization_id";
$proto73["m_columns"][] = "person_status_id";
$proto73["m_columns"][] = "dupe_id";
$proto73["m_columns"][] = "handler_id";
$proto73["m_columns"][] = "is_unee_t_account_needed";
$proto73["m_columns"][] = "unee_t_user_type_id";
$proto73["m_columns"][] = "country_code";
$proto73["m_columns"][] = "gender";
$proto73["m_columns"][] = "salutation_id";
$proto73["m_columns"][] = "given_name";
$proto73["m_columns"][] = "middle_name";
$proto73["m_columns"][] = "family_name";
$proto73["m_columns"][] = "date_of_birth";
$proto73["m_columns"][] = "alias";
$proto73["m_columns"][] = "job_title";
$proto73["m_columns"][] = "organization";
$proto73["m_columns"][] = "email";
$proto73["m_columns"][] = "tel_1";
$proto73["m_columns"][] = "tel_2";
$proto73["m_columns"][] = "whatsapp";
$proto73["m_columns"][] = "linkedin";
$proto73["m_columns"][] = "facebook";
$proto73["m_columns"][] = "adr1";
$proto73["m_columns"][] = "adr2";
$proto73["m_columns"][] = "adr3";
$proto73["m_columns"][] = "City";
$proto73["m_columns"][] = "zip_postcode";
$proto73["m_columns"][] = "region_or_state";
$proto73["m_columns"][] = "country";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "LEFT OUTER JOIN persons ON ut_map_external_source_users.person_id = persons.id_person";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "Search Users";
$proto74=array();
$proto74["m_sql"] = "ut_map_external_source_users.person_id = persons.id_person";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_id",
	"m_strTable" => "ut_map_external_source_users",
	"m_srcTableName" => "Search Users"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= persons.id_person";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
												$proto76=array();
$proto76["m_link"] = "SQLL_LEFTJOIN";
			$proto77=array();
$proto77["m_strName"] = "person_statuses";
$proto77["m_srcTableName"] = "Search Users";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "id_person_status";
$proto77["m_columns"][] = "creation_system_id";
$proto77["m_columns"][] = "update_system_id";
$proto77["m_columns"][] = "is_obsolete";
$proto77["m_columns"][] = "is_default";
$proto77["m_columns"][] = "is_active";
$proto77["m_columns"][] = "order";
$proto77["m_columns"][] = "person_status";
$proto77["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "LEFT OUTER JOIN person_statuses ON persons.person_status_id = person_statuses.id_person_status";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "Search Users";
$proto78=array();
$proto78["m_sql"] = "persons.person_status_id = person_statuses.id_person_status";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "person_status_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Search Users"
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "= person_statuses.id_person_status";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto80=array();
						$obj = new SQLField(array(
	"m_strName" => "organization_id",
	"m_strTable" => "persons",
	"m_srcTableName" => "Search Users"
));

$proto80["m_column"]=$obj;
$proto80["m_bAsc"] = 0;
$proto80["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto80);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Search Users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Search_Users = createSqlQuery_Search_Users();


	
					
;

																	

$tdataSearch_Users[".sqlquery"] = $queryData_Search_Users;

$tableEvents["Search Users"] = new eventsBase;
$tdataSearch_Users[".hasEvents"] = false;

?>