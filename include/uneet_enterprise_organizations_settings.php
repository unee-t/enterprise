<?php




$tdatauneet_enterprise_organizations = array();
$tdatauneet_enterprise_organizations[".searchableFields"] = array();
	$tdatauneet_enterprise_organizations[".truncateText"] = true;
	$tdatauneet_enterprise_organizations[".NumberOfChars"] = 80;
	$tdatauneet_enterprise_organizations[".ShortName"] = "uneet_enterprise_organizations";
	$tdatauneet_enterprise_organizations[".OwnerID"] = "";
	$tdatauneet_enterprise_organizations[".OriginalTable"] = "uneet_enterprise_organizations";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );

$tdatauneet_enterprise_organizations[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdatauneet_enterprise_organizations[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsuneet_enterprise_organizations = array();
$fieldToolTipsuneet_enterprise_organizations = array();
$pageTitlesuneet_enterprise_organizations = array();
$placeHoldersuneet_enterprise_organizations = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsuneet_enterprise_organizations["English"] = array();
	$fieldToolTipsuneet_enterprise_organizations["English"] = array();
	$placeHoldersuneet_enterprise_organizations["English"] = array();
	$pageTitlesuneet_enterprise_organizations["English"] = array();
	$fieldLabelsuneet_enterprise_organizations["English"]["id_organization"] = "Id Organization";
	$fieldToolTipsuneet_enterprise_organizations["English"]["id_organization"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["id_organization"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["syst_created_datetime"] = "Syst Created Datetime";
	$fieldToolTipsuneet_enterprise_organizations["English"]["syst_created_datetime"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["syst_created_datetime"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsuneet_enterprise_organizations["English"]["creation_system_id"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["creation_system_id"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["creation_method"] = "Creation Method";
	$fieldToolTipsuneet_enterprise_organizations["English"]["creation_method"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["creation_method"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["created_by_id"] = "Created By Id";
	$fieldToolTipsuneet_enterprise_organizations["English"]["created_by_id"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["created_by_id"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["syst_updated_datetime"] = "Syst Updated Datetime";
	$fieldToolTipsuneet_enterprise_organizations["English"]["syst_updated_datetime"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["syst_updated_datetime"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsuneet_enterprise_organizations["English"]["update_system_id"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["update_system_id"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["updated_by_id"] = "Updated By Id";
	$fieldToolTipsuneet_enterprise_organizations["English"]["updated_by_id"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["updated_by_id"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["update_method"] = "Update Method";
	$fieldToolTipsuneet_enterprise_organizations["English"]["update_method"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["update_method"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["order"] = "Order";
	$fieldToolTipsuneet_enterprise_organizations["English"]["order"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["order"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsuneet_enterprise_organizations["English"]["is_obsolete"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["is_obsolete"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["designation"] = "Designation";
	$fieldToolTipsuneet_enterprise_organizations["English"]["designation"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["designation"] = "";
	$fieldLabelsuneet_enterprise_organizations["English"]["description"] = "Description";
	$fieldToolTipsuneet_enterprise_organizations["English"]["description"] = "";
	$placeHoldersuneet_enterprise_organizations["English"]["description"] = "";
	if (count($fieldToolTipsuneet_enterprise_organizations["English"]))
		$tdatauneet_enterprise_organizations[".isUseToolTips"] = true;
}


	$tdatauneet_enterprise_organizations[".NCSearch"] = true;



$tdatauneet_enterprise_organizations[".shortTableName"] = "uneet_enterprise_organizations";
$tdatauneet_enterprise_organizations[".nSecOptions"] = 0;

$tdatauneet_enterprise_organizations[".mainTableOwnerID"] = "";
$tdatauneet_enterprise_organizations[".entityType"] = 0;

$tdatauneet_enterprise_organizations[".strOriginalTableName"] = "uneet_enterprise_organizations";

		 



$tdatauneet_enterprise_organizations[".showAddInPopup"] = false;

$tdatauneet_enterprise_organizations[".showEditInPopup"] = false;

$tdatauneet_enterprise_organizations[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatauneet_enterprise_organizations[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatauneet_enterprise_organizations[".listAjax"] = false;
//	temporary
$tdatauneet_enterprise_organizations[".listAjax"] = false;

	$tdatauneet_enterprise_organizations[".audit"] = false;

	$tdatauneet_enterprise_organizations[".locking"] = false;


$pages = $tdatauneet_enterprise_organizations[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdatauneet_enterprise_organizations[".edit"] = true;
	$tdatauneet_enterprise_organizations[".afterEditAction"] = 1;
	$tdatauneet_enterprise_organizations[".closePopupAfterEdit"] = 1;
	$tdatauneet_enterprise_organizations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatauneet_enterprise_organizations[".add"] = true;
$tdatauneet_enterprise_organizations[".afterAddAction"] = 1;
$tdatauneet_enterprise_organizations[".closePopupAfterAdd"] = 1;
$tdatauneet_enterprise_organizations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatauneet_enterprise_organizations[".list"] = true;
}



$tdatauneet_enterprise_organizations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatauneet_enterprise_organizations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatauneet_enterprise_organizations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatauneet_enterprise_organizations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatauneet_enterprise_organizations[".printFriendly"] = true;
}



$tdatauneet_enterprise_organizations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatauneet_enterprise_organizations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatauneet_enterprise_organizations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatauneet_enterprise_organizations[".isUseAjaxSuggest"] = true;

$tdatauneet_enterprise_organizations[".rowHighlite"] = true;





$tdatauneet_enterprise_organizations[".ajaxCodeSnippetAdded"] = false;

$tdatauneet_enterprise_organizations[".buttonsAdded"] = false;

$tdatauneet_enterprise_organizations[".addPageEvents"] = false;

// use timepicker for search panel
$tdatauneet_enterprise_organizations[".isUseTimeForSearch"] = false;




$tdatauneet_enterprise_organizations[".allSearchFields"] = array();
$tdatauneet_enterprise_organizations[".filterFields"] = array();
$tdatauneet_enterprise_organizations[".requiredSearchFields"] = array();

$tdatauneet_enterprise_organizations[".googleLikeFields"] = array();
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "id_organization";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "syst_created_datetime";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "creation_system_id";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "creation_method";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "created_by_id";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "syst_updated_datetime";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "update_system_id";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "updated_by_id";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "update_method";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "order";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "is_obsolete";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "designation";
$tdatauneet_enterprise_organizations[".googleLikeFields"][] = "description";



$tdatauneet_enterprise_organizations[".tableType"] = "list";

$tdatauneet_enterprise_organizations[".printerPageOrientation"] = 0;
$tdatauneet_enterprise_organizations[".nPrinterPageScale"] = 100;

$tdatauneet_enterprise_organizations[".nPrinterSplitRecords"] = 40;

$tdatauneet_enterprise_organizations[".nPrinterPDFSplitRecords"] = 40;


$tdatauneet_enterprise_organizations[".geocodingEnabled"] = false;










$tdatauneet_enterprise_organizations[".pageSize"] = 20;

$tdatauneet_enterprise_organizations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatauneet_enterprise_organizations[".strOrderBy"] = $tstrOrderBy;

$tdatauneet_enterprise_organizations[".orderindexes"] = array();

$tdatauneet_enterprise_organizations[".sqlHead"] = "SELECT id_organization,  	syst_created_datetime,  	creation_system_id,  	creation_method,  	created_by_id,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	`order`,  	is_obsolete,  	designation,  	description";
$tdatauneet_enterprise_organizations[".sqlFrom"] = "FROM uneet_enterprise_organizations";
$tdatauneet_enterprise_organizations[".sqlWhereExpr"] = "";
$tdatauneet_enterprise_organizations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatauneet_enterprise_organizations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatauneet_enterprise_organizations[".arrGroupsPerPage"] = $arrGPP;

$tdatauneet_enterprise_organizations[".highlightSearchResults"] = true;

$tableKeysuneet_enterprise_organizations = array();
$tableKeysuneet_enterprise_organizations[] = "id_organization";
$tdatauneet_enterprise_organizations[".Keys"] = $tableKeysuneet_enterprise_organizations;


$tdatauneet_enterprise_organizations[".hideMobileList"] = array();




//	id_organization
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_organization";
	$fdata["GoodName"] = "id_organization";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","id_organization");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_organization";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_organization";

	
	
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


	$tdatauneet_enterprise_organizations["id_organization"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "id_organization";
//	syst_created_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "syst_created_datetime";
	$fdata["GoodName"] = "syst_created_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","syst_created_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_created_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_created_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdatauneet_enterprise_organizations["syst_created_datetime"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "syst_created_datetime";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","creation_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "creation_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_system_id";

	
	
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


	$tdatauneet_enterprise_organizations["creation_system_id"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "creation_system_id";
//	creation_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "creation_method";
	$fdata["GoodName"] = "creation_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","creation_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "creation_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "creation_method";

	
	
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


	$tdatauneet_enterprise_organizations["creation_method"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "creation_method";
//	created_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_by_id";
	$fdata["GoodName"] = "created_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","created_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "created_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by_id";

	
	
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


	$tdatauneet_enterprise_organizations["created_by_id"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "created_by_id";
//	syst_updated_datetime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "syst_updated_datetime";
	$fdata["GoodName"] = "syst_updated_datetime";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","syst_updated_datetime");
	$fdata["FieldType"] = 135;

	
	
	
										

		$fdata["strField"] = "syst_updated_datetime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "syst_updated_datetime";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdatauneet_enterprise_organizations["syst_updated_datetime"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "syst_updated_datetime";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","update_system_id");
	$fdata["FieldType"] = 3;

	
	
	
										

		$fdata["strField"] = "update_system_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_system_id";

	
	
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


	$tdatauneet_enterprise_organizations["update_system_id"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "update_system_id";
//	updated_by_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "updated_by_id";
	$fdata["GoodName"] = "updated_by_id";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","updated_by_id");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "updated_by_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "updated_by_id";

	
	
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


	$tdatauneet_enterprise_organizations["updated_by_id"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "updated_by_id";
//	update_method
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "update_method";
	$fdata["GoodName"] = "update_method";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","update_method");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "update_method";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "update_method";

	
	
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


	$tdatauneet_enterprise_organizations["update_method"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "update_method";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","order");
	$fdata["FieldType"] = 2;

	
	
	
										

		$fdata["strField"] = "order";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`order`";

	
	
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


	$tdatauneet_enterprise_organizations["order"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "order";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","is_obsolete");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_obsolete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_obsolete";

	
	
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


	$tdatauneet_enterprise_organizations["is_obsolete"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "is_obsolete";
//	designation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "designation";
	$fdata["GoodName"] = "designation";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","designation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "designation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "designation";

	
	
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


	$tdatauneet_enterprise_organizations["designation"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "designation";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "uneet_enterprise_organizations";
	$fdata["Label"] = GetFieldLabel("uneet_enterprise_organizations","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
	
	



	
	
	
			$edata["acceptFileTypes"] = ".+$";

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

			
	
	
//end of Filters settings


	$tdatauneet_enterprise_organizations["description"] = $fdata;
		$tdatauneet_enterprise_organizations[".searchableFields"][] = "description";


$tables_data["uneet_enterprise_organizations"]=&$tdatauneet_enterprise_organizations;
$field_labels["uneet_enterprise_organizations"] = &$fieldLabelsuneet_enterprise_organizations;
$fieldToolTips["uneet_enterprise_organizations"] = &$fieldToolTipsuneet_enterprise_organizations;
$placeHolders["uneet_enterprise_organizations"] = &$placeHoldersuneet_enterprise_organizations;
$page_titles["uneet_enterprise_organizations"] = &$pageTitlesuneet_enterprise_organizations;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["uneet_enterprise_organizations"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["uneet_enterprise_organizations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_uneet_enterprise_organizations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_organization,  	syst_created_datetime,  	creation_system_id,  	creation_method,  	created_by_id,  	syst_updated_datetime,  	update_system_id,  	updated_by_id,  	update_method,  	`order`,  	is_obsolete,  	designation,  	description";
$proto0["m_strFrom"] = "FROM uneet_enterprise_organizations";
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
	"m_strName" => "id_organization",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto6["m_sql"] = "id_organization";
$proto6["m_srcTableName"] = "uneet_enterprise_organizations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_created_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto8["m_sql"] = "syst_created_datetime";
$proto8["m_srcTableName"] = "uneet_enterprise_organizations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto10["m_sql"] = "creation_system_id";
$proto10["m_srcTableName"] = "uneet_enterprise_organizations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto12["m_sql"] = "creation_method";
$proto12["m_srcTableName"] = "uneet_enterprise_organizations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto14["m_sql"] = "created_by_id";
$proto14["m_srcTableName"] = "uneet_enterprise_organizations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "syst_updated_datetime",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto16["m_sql"] = "syst_updated_datetime";
$proto16["m_srcTableName"] = "uneet_enterprise_organizations";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto18["m_sql"] = "update_system_id";
$proto18["m_srcTableName"] = "uneet_enterprise_organizations";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "updated_by_id",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto20["m_sql"] = "updated_by_id";
$proto20["m_srcTableName"] = "uneet_enterprise_organizations";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "update_method",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto22["m_sql"] = "update_method";
$proto22["m_srcTableName"] = "uneet_enterprise_organizations";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto24["m_sql"] = "`order`";
$proto24["m_srcTableName"] = "uneet_enterprise_organizations";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto26["m_sql"] = "is_obsolete";
$proto26["m_srcTableName"] = "uneet_enterprise_organizations";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "designation",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto28["m_sql"] = "designation";
$proto28["m_srcTableName"] = "uneet_enterprise_organizations";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "uneet_enterprise_organizations",
	"m_srcTableName" => "uneet_enterprise_organizations"
));

$proto30["m_sql"] = "description";
$proto30["m_srcTableName"] = "uneet_enterprise_organizations";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "uneet_enterprise_organizations";
$proto33["m_srcTableName"] = "uneet_enterprise_organizations";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_organization";
$proto33["m_columns"][] = "syst_created_datetime";
$proto33["m_columns"][] = "creation_system_id";
$proto33["m_columns"][] = "creation_method";
$proto33["m_columns"][] = "created_by_id";
$proto33["m_columns"][] = "syst_updated_datetime";
$proto33["m_columns"][] = "update_system_id";
$proto33["m_columns"][] = "updated_by_id";
$proto33["m_columns"][] = "update_method";
$proto33["m_columns"][] = "order";
$proto33["m_columns"][] = "is_obsolete";
$proto33["m_columns"][] = "designation";
$proto33["m_columns"][] = "description";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "uneet_enterprise_organizations";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "uneet_enterprise_organizations";
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
$proto0["m_srcTableName"]="uneet_enterprise_organizations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_uneet_enterprise_organizations = createSqlQuery_uneet_enterprise_organizations();


	
					
;

													

$tdatauneet_enterprise_organizations[".sqlquery"] = $queryData_uneet_enterprise_organizations;

$tableEvents["uneet_enterprise_organizations"] = new eventsBase;
$tdatauneet_enterprise_organizations[".hasEvents"] = false;

?>