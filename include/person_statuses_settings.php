<?php




$tdataperson_statuses = array();
$tdataperson_statuses[".searchableFields"] = array();
	$tdataperson_statuses[".truncateText"] = true;
	$tdataperson_statuses[".NumberOfChars"] = 80;
	$tdataperson_statuses[".ShortName"] = "person_statuses";
	$tdataperson_statuses[".OwnerID"] = "";
	$tdataperson_statuses[".OriginalTable"] = "person_statuses";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );

$tdataperson_statuses[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataperson_statuses[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsperson_statuses = array();
$fieldToolTipsperson_statuses = array();
$pageTitlesperson_statuses = array();
$placeHoldersperson_statuses = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperson_statuses["English"] = array();
	$fieldToolTipsperson_statuses["English"] = array();
	$placeHoldersperson_statuses["English"] = array();
	$pageTitlesperson_statuses["English"] = array();
	$fieldLabelsperson_statuses["English"]["id_person_status"] = "Id Person Status";
	$fieldToolTipsperson_statuses["English"]["id_person_status"] = "";
	$placeHoldersperson_statuses["English"]["id_person_status"] = "";
	$fieldLabelsperson_statuses["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsperson_statuses["English"]["creation_system_id"] = "";
	$placeHoldersperson_statuses["English"]["creation_system_id"] = "";
	$fieldLabelsperson_statuses["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsperson_statuses["English"]["update_system_id"] = "";
	$placeHoldersperson_statuses["English"]["update_system_id"] = "";
	$fieldLabelsperson_statuses["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsperson_statuses["English"]["is_obsolete"] = "";
	$placeHoldersperson_statuses["English"]["is_obsolete"] = "";
	$fieldLabelsperson_statuses["English"]["is_default"] = "Is Default";
	$fieldToolTipsperson_statuses["English"]["is_default"] = "";
	$placeHoldersperson_statuses["English"]["is_default"] = "";
	$fieldLabelsperson_statuses["English"]["is_active"] = "Is Active";
	$fieldToolTipsperson_statuses["English"]["is_active"] = "";
	$placeHoldersperson_statuses["English"]["is_active"] = "";
	$fieldLabelsperson_statuses["English"]["order"] = "Order";
	$fieldToolTipsperson_statuses["English"]["order"] = "";
	$placeHoldersperson_statuses["English"]["order"] = "";
	$fieldLabelsperson_statuses["English"]["person_status"] = "Person Status";
	$fieldToolTipsperson_statuses["English"]["person_status"] = "";
	$placeHoldersperson_statuses["English"]["person_status"] = "";
	$fieldLabelsperson_statuses["English"]["person_status_definition"] = "Person Status Definition";
	$fieldToolTipsperson_statuses["English"]["person_status_definition"] = "";
	$placeHoldersperson_statuses["English"]["person_status_definition"] = "";
	if (count($fieldToolTipsperson_statuses["English"]))
		$tdataperson_statuses[".isUseToolTips"] = true;
}


	$tdataperson_statuses[".NCSearch"] = true;



$tdataperson_statuses[".shortTableName"] = "person_statuses";
$tdataperson_statuses[".nSecOptions"] = 0;

$tdataperson_statuses[".mainTableOwnerID"] = "";
$tdataperson_statuses[".entityType"] = 0;

$tdataperson_statuses[".strOriginalTableName"] = "person_statuses";

		 



$tdataperson_statuses[".showAddInPopup"] = false;

$tdataperson_statuses[".showEditInPopup"] = false;

$tdataperson_statuses[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperson_statuses[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataperson_statuses[".listAjax"] = true;
//	temporary
$tdataperson_statuses[".listAjax"] = false;

	$tdataperson_statuses[".audit"] = false;

	$tdataperson_statuses[".locking"] = false;


$pages = $tdataperson_statuses[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperson_statuses[".edit"] = true;
	$tdataperson_statuses[".afterEditAction"] = 1;
	$tdataperson_statuses[".closePopupAfterEdit"] = 1;
	$tdataperson_statuses[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperson_statuses[".add"] = true;
$tdataperson_statuses[".afterAddAction"] = 1;
$tdataperson_statuses[".closePopupAfterAdd"] = 1;
$tdataperson_statuses[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperson_statuses[".list"] = true;
}



$tdataperson_statuses[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperson_statuses[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperson_statuses[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperson_statuses[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperson_statuses[".printFriendly"] = true;
}



$tdataperson_statuses[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperson_statuses[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperson_statuses[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperson_statuses[".isUseAjaxSuggest"] = true;

$tdataperson_statuses[".rowHighlite"] = true;





$tdataperson_statuses[".ajaxCodeSnippetAdded"] = false;

$tdataperson_statuses[".buttonsAdded"] = false;

$tdataperson_statuses[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperson_statuses[".isUseTimeForSearch"] = false;




$tdataperson_statuses[".allSearchFields"] = array();
$tdataperson_statuses[".filterFields"] = array();
$tdataperson_statuses[".requiredSearchFields"] = array();

$tdataperson_statuses[".googleLikeFields"] = array();
$tdataperson_statuses[".googleLikeFields"][] = "id_person_status";
$tdataperson_statuses[".googleLikeFields"][] = "creation_system_id";
$tdataperson_statuses[".googleLikeFields"][] = "update_system_id";
$tdataperson_statuses[".googleLikeFields"][] = "is_obsolete";
$tdataperson_statuses[".googleLikeFields"][] = "is_default";
$tdataperson_statuses[".googleLikeFields"][] = "is_active";
$tdataperson_statuses[".googleLikeFields"][] = "order";
$tdataperson_statuses[".googleLikeFields"][] = "person_status";
$tdataperson_statuses[".googleLikeFields"][] = "person_status_definition";



$tdataperson_statuses[".tableType"] = "list";

$tdataperson_statuses[".printerPageOrientation"] = 0;
$tdataperson_statuses[".nPrinterPageScale"] = 100;

$tdataperson_statuses[".nPrinterSplitRecords"] = 40;

$tdataperson_statuses[".nPrinterPDFSplitRecords"] = 40;


$tdataperson_statuses[".geocodingEnabled"] = false;





$tdataperson_statuses[".isResizeColumns"] = true;





$tdataperson_statuses[".pageSize"] = 20;

$tdataperson_statuses[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperson_statuses[".strOrderBy"] = $tstrOrderBy;

$tdataperson_statuses[".orderindexes"] = array();

$tdataperson_statuses[".sqlHead"] = "SELECT id_person_status,  	creation_system_id,  	update_system_id,  	is_obsolete,  	is_default,  	is_active,  	`order`,  	person_status,  	person_status_definition";
$tdataperson_statuses[".sqlFrom"] = "FROM person_statuses";
$tdataperson_statuses[".sqlWhereExpr"] = "";
$tdataperson_statuses[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperson_statuses[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperson_statuses[".arrGroupsPerPage"] = $arrGPP;

$tdataperson_statuses[".highlightSearchResults"] = true;

$tableKeysperson_statuses = array();
$tableKeysperson_statuses[] = "id_person_status";
$tableKeysperson_statuses[] = "person_status";
$tdataperson_statuses[".Keys"] = $tableKeysperson_statuses;


$tdataperson_statuses[".hideMobileList"] = array();




//	id_person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_person_status";
	$fdata["GoodName"] = "id_person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","id_person_status");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_person_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_person_status";

	
	
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


	$tdataperson_statuses["id_person_status"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "id_person_status";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","creation_system_id");
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


	$tdataperson_statuses["creation_system_id"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "creation_system_id";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","update_system_id");
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


	$tdataperson_statuses["update_system_id"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "update_system_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","is_obsolete");
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


	$tdataperson_statuses["is_obsolete"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "is_obsolete";
//	is_default
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_default";
	$fdata["GoodName"] = "is_default";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","is_default");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_default";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_default";

	
	
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


	$tdataperson_statuses["is_default"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "is_default";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","is_active");
	$fdata["FieldType"] = 16;

	
	
	
										

		$fdata["strField"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdataperson_statuses["is_active"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "is_active";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","order");
	$fdata["FieldType"] = 3;

	
	
	
										

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


	$tdataperson_statuses["order"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "order";
//	person_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "person_status";
	$fdata["GoodName"] = "person_status";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","person_status");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "person_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_status";

	
	
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

			
	
	
//end of Filters settings


	$tdataperson_statuses["person_status"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "person_status";
//	person_status_definition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "person_status_definition";
	$fdata["GoodName"] = "person_status_definition";
	$fdata["ownerTable"] = "person_statuses";
	$fdata["Label"] = GetFieldLabel("person_statuses","person_status_definition");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "person_status_definition";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "person_status_definition";

	
	
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


	$tdataperson_statuses["person_status_definition"] = $fdata;
		$tdataperson_statuses[".searchableFields"][] = "person_status_definition";


$tables_data["person_statuses"]=&$tdataperson_statuses;
$field_labels["person_statuses"] = &$fieldLabelsperson_statuses;
$fieldToolTips["person_statuses"] = &$fieldToolTipsperson_statuses;
$placeHolders["person_statuses"] = &$placeHoldersperson_statuses;
$page_titles["person_statuses"] = &$pageTitlesperson_statuses;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["person_statuses"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["person_statuses"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_person_statuses()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_person_status,  	creation_system_id,  	update_system_id,  	is_obsolete,  	is_default,  	is_active,  	`order`,  	person_status,  	person_status_definition";
$proto0["m_strFrom"] = "FROM person_statuses";
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
	"m_strName" => "id_person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto6["m_sql"] = "id_person_status";
$proto6["m_srcTableName"] = "person_statuses";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto8["m_sql"] = "creation_system_id";
$proto8["m_srcTableName"] = "person_statuses";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "person_statuses";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto12["m_sql"] = "is_obsolete";
$proto12["m_srcTableName"] = "person_statuses";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_default",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto14["m_sql"] = "is_default";
$proto14["m_srcTableName"] = "person_statuses";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto16["m_sql"] = "is_active";
$proto16["m_srcTableName"] = "person_statuses";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto18["m_sql"] = "`order`";
$proto18["m_srcTableName"] = "person_statuses";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto20["m_sql"] = "person_status";
$proto20["m_srcTableName"] = "person_statuses";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "person_status_definition",
	"m_strTable" => "person_statuses",
	"m_srcTableName" => "person_statuses"
));

$proto22["m_sql"] = "person_status_definition";
$proto22["m_srcTableName"] = "person_statuses";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "person_statuses";
$proto25["m_srcTableName"] = "person_statuses";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id_person_status";
$proto25["m_columns"][] = "creation_system_id";
$proto25["m_columns"][] = "update_system_id";
$proto25["m_columns"][] = "is_obsolete";
$proto25["m_columns"][] = "is_default";
$proto25["m_columns"][] = "is_active";
$proto25["m_columns"][] = "order";
$proto25["m_columns"][] = "person_status";
$proto25["m_columns"][] = "person_status_definition";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "person_statuses";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "person_statuses";
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
$proto0["m_srcTableName"]="person_statuses";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_person_statuses = createSqlQuery_person_statuses();


	
					
;

									

$tdataperson_statuses[".sqlquery"] = $queryData_person_statuses;

$tableEvents["person_statuses"] = new eventsBase;
$tdataperson_statuses[".hasEvents"] = false;

?>