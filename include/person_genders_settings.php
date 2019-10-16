<?php



$tdataperson_genders = array();
$tdataperson_genders[".searchableFields"] = array();
$tdataperson_genders[".ShortName"] = "person_genders";
$tdataperson_genders[".OwnerID"] = "";
$tdataperson_genders[".OriginalTable"] = "person_genders";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );

$tdataperson_genders[".pagesByType"] = my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" );
$tdataperson_genders[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataperson_genders[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsperson_genders = array();
$fieldToolTipsperson_genders = array();
$pageTitlesperson_genders = array();
$placeHoldersperson_genders = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperson_genders["English"] = array();
	$fieldToolTipsperson_genders["English"] = array();
	$placeHoldersperson_genders["English"] = array();
	$pageTitlesperson_genders["English"] = array();
	$fieldLabelsperson_genders["English"]["id_person_gender"] = "Id Person Gender";
	$fieldToolTipsperson_genders["English"]["id_person_gender"] = "";
	$placeHoldersperson_genders["English"]["id_person_gender"] = "";
	$fieldLabelsperson_genders["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsperson_genders["English"]["creation_system_id"] = "";
	$placeHoldersperson_genders["English"]["creation_system_id"] = "";
	$fieldLabelsperson_genders["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsperson_genders["English"]["update_system_id"] = "";
	$placeHoldersperson_genders["English"]["update_system_id"] = "";
	$fieldLabelsperson_genders["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsperson_genders["English"]["is_obsolete"] = "";
	$placeHoldersperson_genders["English"]["is_obsolete"] = "";
	$fieldLabelsperson_genders["English"]["is_default"] = "Is Default";
	$fieldToolTipsperson_genders["English"]["is_default"] = "";
	$placeHoldersperson_genders["English"]["is_default"] = "";
	$fieldLabelsperson_genders["English"]["is_active"] = "Is Active";
	$fieldToolTipsperson_genders["English"]["is_active"] = "";
	$placeHoldersperson_genders["English"]["is_active"] = "";
	$fieldLabelsperson_genders["English"]["order"] = "Order";
	$fieldToolTipsperson_genders["English"]["order"] = "";
	$placeHoldersperson_genders["English"]["order"] = "";
	$fieldLabelsperson_genders["English"]["person_gender"] = "Person Gender";
	$fieldToolTipsperson_genders["English"]["person_gender"] = "";
	$placeHoldersperson_genders["English"]["person_gender"] = "";
	$fieldLabelsperson_genders["English"]["description"] = "Description";
	$fieldToolTipsperson_genders["English"]["description"] = "";
	$placeHoldersperson_genders["English"]["description"] = "";
	if (count($fieldToolTipsperson_genders["English"]))
		$tdataperson_genders[".isUseToolTips"] = true;
}


	$tdataperson_genders[".NCSearch"] = true;



$tdataperson_genders[".shortTableName"] = "person_genders";
$tdataperson_genders[".nSecOptions"] = 0;

$tdataperson_genders[".mainTableOwnerID"] = "";
$tdataperson_genders[".entityType"] = 0;

$tdataperson_genders[".strOriginalTableName"] = "person_genders";

		 



$tdataperson_genders[".showAddInPopup"] = false;

$tdataperson_genders[".showEditInPopup"] = false;

$tdataperson_genders[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperson_genders[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataperson_genders[".listAjax"] = true;
//	temporary
$tdataperson_genders[".listAjax"] = false;

	$tdataperson_genders[".audit"] = false;

	$tdataperson_genders[".locking"] = false;


$pages = $tdataperson_genders[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperson_genders[".edit"] = true;
	$tdataperson_genders[".afterEditAction"] = 1;
	$tdataperson_genders[".closePopupAfterEdit"] = 1;
	$tdataperson_genders[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperson_genders[".add"] = true;
$tdataperson_genders[".afterAddAction"] = 1;
$tdataperson_genders[".closePopupAfterAdd"] = 1;
$tdataperson_genders[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperson_genders[".list"] = true;
}



$tdataperson_genders[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperson_genders[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperson_genders[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperson_genders[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperson_genders[".printFriendly"] = true;
}



$tdataperson_genders[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperson_genders[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperson_genders[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperson_genders[".isUseAjaxSuggest"] = true;

$tdataperson_genders[".rowHighlite"] = true;





$tdataperson_genders[".ajaxCodeSnippetAdded"] = false;

$tdataperson_genders[".buttonsAdded"] = false;

$tdataperson_genders[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperson_genders[".isUseTimeForSearch"] = false;




$tdataperson_genders[".allSearchFields"] = array();
$tdataperson_genders[".filterFields"] = array();
$tdataperson_genders[".requiredSearchFields"] = array();

$tdataperson_genders[".googleLikeFields"] = array();
$tdataperson_genders[".googleLikeFields"][] = "id_person_gender";
$tdataperson_genders[".googleLikeFields"][] = "creation_system_id";
$tdataperson_genders[".googleLikeFields"][] = "update_system_id";
$tdataperson_genders[".googleLikeFields"][] = "is_obsolete";
$tdataperson_genders[".googleLikeFields"][] = "is_default";
$tdataperson_genders[".googleLikeFields"][] = "is_active";
$tdataperson_genders[".googleLikeFields"][] = "order";
$tdataperson_genders[".googleLikeFields"][] = "person_gender";
$tdataperson_genders[".googleLikeFields"][] = "description";



$tdataperson_genders[".tableType"] = "list";

$tdataperson_genders[".printerPageOrientation"] = 0;
$tdataperson_genders[".nPrinterPageScale"] = 100;

$tdataperson_genders[".nPrinterSplitRecords"] = 40;

$tdataperson_genders[".geocodingEnabled"] = false;





$tdataperson_genders[".isResizeColumns"] = true;





$tdataperson_genders[".pageSize"] = 20;

$tdataperson_genders[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperson_genders[".strOrderBy"] = $tstrOrderBy;

$tdataperson_genders[".orderindexes"] = array();

$tdataperson_genders[".sqlHead"] = "SELECT id_person_gender,  	creation_system_id,  	update_system_id,  	is_obsolete,  	is_default,  	is_active,  	`order`,  	person_gender,  	description";
$tdataperson_genders[".sqlFrom"] = "FROM person_genders";
$tdataperson_genders[".sqlWhereExpr"] = "";
$tdataperson_genders[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperson_genders[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperson_genders[".arrGroupsPerPage"] = $arrGPP;

$tdataperson_genders[".highlightSearchResults"] = true;

$tableKeysperson_genders = array();
$tableKeysperson_genders[] = "id_person_gender";
$tdataperson_genders[".Keys"] = $tableKeysperson_genders;


$tdataperson_genders[".hideMobileList"] = array();




//	id_person_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_person_gender";
	$fdata["GoodName"] = "id_person_gender";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","id_person_gender");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_person_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_person_gender";

	
	
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


	$tdataperson_genders["id_person_gender"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "id_person_gender";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","creation_system_id");
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


	$tdataperson_genders["creation_system_id"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "creation_system_id";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","update_system_id");
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


	$tdataperson_genders["update_system_id"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "update_system_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","is_obsolete");
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


	$tdataperson_genders["is_obsolete"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "is_obsolete";
//	is_default
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_default";
	$fdata["GoodName"] = "is_default";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","is_default");
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


	$tdataperson_genders["is_default"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "is_default";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","is_active");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdataperson_genders["is_active"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "is_active";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","order");
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


	$tdataperson_genders["order"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "order";
//	person_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "person_gender";
	$fdata["GoodName"] = "person_gender";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","person_gender");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_gender";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataperson_genders["person_gender"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "person_gender";
//	description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "description";
	$fdata["GoodName"] = "description";
	$fdata["ownerTable"] = "person_genders";
	$fdata["Label"] = GetFieldLabel("person_genders","description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "description";

	
	
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


	$tdataperson_genders["description"] = $fdata;
		$tdataperson_genders[".searchableFields"][] = "description";


$tables_data["person_genders"]=&$tdataperson_genders;
$field_labels["person_genders"] = &$fieldLabelsperson_genders;
$fieldToolTips["person_genders"] = &$fieldToolTipsperson_genders;
$placeHolders["person_genders"] = &$placeHoldersperson_genders;
$page_titles["person_genders"] = &$pageTitlesperson_genders;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["person_genders"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["person_genders"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_person_genders()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_person_gender,  	creation_system_id,  	update_system_id,  	is_obsolete,  	is_default,  	is_active,  	`order`,  	person_gender,  	description";
$proto0["m_strFrom"] = "FROM person_genders";
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
	"m_strName" => "id_person_gender",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto6["m_sql"] = "id_person_gender";
$proto6["m_srcTableName"] = "person_genders";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto8["m_sql"] = "creation_system_id";
$proto8["m_srcTableName"] = "person_genders";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "person_genders";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto12["m_sql"] = "is_obsolete";
$proto12["m_srcTableName"] = "person_genders";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto14["m_sql"] = "is_default";
$proto14["m_srcTableName"] = "person_genders";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto16["m_sql"] = "is_active";
$proto16["m_srcTableName"] = "person_genders";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto18["m_sql"] = "`order`";
$proto18["m_srcTableName"] = "person_genders";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "person_gender",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto20["m_sql"] = "person_gender";
$proto20["m_srcTableName"] = "person_genders";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "description",
	"m_strTable" => "person_genders",
	"m_srcTableName" => "person_genders"
));

$proto22["m_sql"] = "description";
$proto22["m_srcTableName"] = "person_genders";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "person_genders";
$proto25["m_srcTableName"] = "person_genders";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_person_gender";
$proto25["m_columns"][] = "creation_system_id";
$proto25["m_columns"][] = "update_system_id";
$proto25["m_columns"][] = "is_obsolete";
$proto25["m_columns"][] = "is_default";
$proto25["m_columns"][] = "is_active";
$proto25["m_columns"][] = "order";
$proto25["m_columns"][] = "person_gender";
$proto25["m_columns"][] = "description";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "person_genders";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "person_genders";
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
$proto0["m_srcTableName"]="person_genders";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_person_genders = createSqlQuery_person_genders();


	
					
;

									

$tdataperson_genders[".sqlquery"] = $queryData_person_genders;

$tableEvents["person_genders"] = new eventsBase;
$tdataperson_genders[".hasEvents"] = false;

?>