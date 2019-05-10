<?php




$tdataperson_salutations = array();
$tdataperson_salutations[".searchableFields"] = array();
	$tdataperson_salutations[".truncateText"] = true;
	$tdataperson_salutations[".NumberOfChars"] = 80;
	$tdataperson_salutations[".ShortName"] = "person_salutations";
	$tdataperson_salutations[".OwnerID"] = "";
	$tdataperson_salutations[".OriginalTable"] = "person_salutations";


$defaultPages = my_json_decode( "{\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\"}" );

$tdataperson_salutations[".pages"] = types2pages( my_json_decode( "{\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"]}" ) );
$tdataperson_salutations[".defaultPages"] = $defaultPages;

//	field labels
$fieldLabelsperson_salutations = array();
$fieldToolTipsperson_salutations = array();
$pageTitlesperson_salutations = array();
$placeHoldersperson_salutations = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsperson_salutations["English"] = array();
	$fieldToolTipsperson_salutations["English"] = array();
	$placeHoldersperson_salutations["English"] = array();
	$pageTitlesperson_salutations["English"] = array();
	$fieldLabelsperson_salutations["English"]["id_salutation"] = "Id Salutation";
	$fieldToolTipsperson_salutations["English"]["id_salutation"] = "";
	$placeHoldersperson_salutations["English"]["id_salutation"] = "";
	$fieldLabelsperson_salutations["English"]["creation_system_id"] = "Creation System Id";
	$fieldToolTipsperson_salutations["English"]["creation_system_id"] = "";
	$placeHoldersperson_salutations["English"]["creation_system_id"] = "";
	$fieldLabelsperson_salutations["English"]["update_system_id"] = "Update System Id";
	$fieldToolTipsperson_salutations["English"]["update_system_id"] = "";
	$placeHoldersperson_salutations["English"]["update_system_id"] = "";
	$fieldLabelsperson_salutations["English"]["is_obsolete"] = "Is Obsolete";
	$fieldToolTipsperson_salutations["English"]["is_obsolete"] = "";
	$placeHoldersperson_salutations["English"]["is_obsolete"] = "";
	$fieldLabelsperson_salutations["English"]["order"] = "Order";
	$fieldToolTipsperson_salutations["English"]["order"] = "";
	$placeHoldersperson_salutations["English"]["order"] = "";
	$fieldLabelsperson_salutations["English"]["salutation"] = "Salutation";
	$fieldToolTipsperson_salutations["English"]["salutation"] = "";
	$placeHoldersperson_salutations["English"]["salutation"] = "";
	$fieldLabelsperson_salutations["English"]["salutation_description"] = "Salutation Description";
	$fieldToolTipsperson_salutations["English"]["salutation_description"] = "";
	$placeHoldersperson_salutations["English"]["salutation_description"] = "";
	if (count($fieldToolTipsperson_salutations["English"]))
		$tdataperson_salutations[".isUseToolTips"] = true;
}


	$tdataperson_salutations[".NCSearch"] = true;



$tdataperson_salutations[".shortTableName"] = "person_salutations";
$tdataperson_salutations[".nSecOptions"] = 0;

$tdataperson_salutations[".mainTableOwnerID"] = "";
$tdataperson_salutations[".entityType"] = 0;

$tdataperson_salutations[".strOriginalTableName"] = "person_salutations";

		 



$tdataperson_salutations[".showAddInPopup"] = false;

$tdataperson_salutations[".showEditInPopup"] = false;

$tdataperson_salutations[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataperson_salutations[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


	$tdataperson_salutations[".listAjax"] = true;
//	temporary
$tdataperson_salutations[".listAjax"] = false;

	$tdataperson_salutations[".audit"] = false;

	$tdataperson_salutations[".locking"] = false;


$pages = $tdataperson_salutations[".pages"];

if( $pages[PAGE_EDIT] ) {
	$tdataperson_salutations[".edit"] = true;
	$tdataperson_salutations[".afterEditAction"] = 1;
	$tdataperson_salutations[".closePopupAfterEdit"] = 1;
	$tdataperson_salutations[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataperson_salutations[".add"] = true;
$tdataperson_salutations[".afterAddAction"] = 1;
$tdataperson_salutations[".closePopupAfterAdd"] = 1;
$tdataperson_salutations[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataperson_salutations[".list"] = true;
}



$tdataperson_salutations[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataperson_salutations[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataperson_salutations[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataperson_salutations[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataperson_salutations[".printFriendly"] = true;
}



$tdataperson_salutations[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataperson_salutations[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataperson_salutations[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataperson_salutations[".isUseAjaxSuggest"] = true;

$tdataperson_salutations[".rowHighlite"] = true;





$tdataperson_salutations[".ajaxCodeSnippetAdded"] = false;

$tdataperson_salutations[".buttonsAdded"] = false;

$tdataperson_salutations[".addPageEvents"] = false;

// use timepicker for search panel
$tdataperson_salutations[".isUseTimeForSearch"] = false;




$tdataperson_salutations[".allSearchFields"] = array();
$tdataperson_salutations[".filterFields"] = array();
$tdataperson_salutations[".requiredSearchFields"] = array();

$tdataperson_salutations[".googleLikeFields"] = array();
$tdataperson_salutations[".googleLikeFields"][] = "id_salutation";
$tdataperson_salutations[".googleLikeFields"][] = "creation_system_id";
$tdataperson_salutations[".googleLikeFields"][] = "update_system_id";
$tdataperson_salutations[".googleLikeFields"][] = "is_obsolete";
$tdataperson_salutations[".googleLikeFields"][] = "order";
$tdataperson_salutations[".googleLikeFields"][] = "salutation";
$tdataperson_salutations[".googleLikeFields"][] = "salutation_description";



$tdataperson_salutations[".tableType"] = "list";

$tdataperson_salutations[".printerPageOrientation"] = 0;
$tdataperson_salutations[".nPrinterPageScale"] = 100;

$tdataperson_salutations[".nPrinterSplitRecords"] = 40;

$tdataperson_salutations[".nPrinterPDFSplitRecords"] = 40;


$tdataperson_salutations[".geocodingEnabled"] = false;





$tdataperson_salutations[".isResizeColumns"] = true;





$tdataperson_salutations[".pageSize"] = 20;

$tdataperson_salutations[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataperson_salutations[".strOrderBy"] = $tstrOrderBy;

$tdataperson_salutations[".orderindexes"] = array();

$tdataperson_salutations[".sqlHead"] = "SELECT id_salutation,  	creation_system_id,  	update_system_id,  	is_obsolete,  	`order`,  	salutation,  	salutation_description";
$tdataperson_salutations[".sqlFrom"] = "FROM person_salutations";
$tdataperson_salutations[".sqlWhereExpr"] = "";
$tdataperson_salutations[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataperson_salutations[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataperson_salutations[".arrGroupsPerPage"] = $arrGPP;

$tdataperson_salutations[".highlightSearchResults"] = true;

$tableKeysperson_salutations = array();
$tableKeysperson_salutations[] = "id_salutation";
$tableKeysperson_salutations[] = "salutation";
$tdataperson_salutations[".Keys"] = $tableKeysperson_salutations;


$tdataperson_salutations[".hideMobileList"] = array();




//	id_salutation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_salutation";
	$fdata["GoodName"] = "id_salutation";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","id_salutation");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
										

		$fdata["strField"] = "id_salutation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_salutation";

	
	
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


	$tdataperson_salutations["id_salutation"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "id_salutation";
//	creation_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "creation_system_id";
	$fdata["GoodName"] = "creation_system_id";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","creation_system_id");
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


	$tdataperson_salutations["creation_system_id"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "creation_system_id";
//	update_system_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "update_system_id";
	$fdata["GoodName"] = "update_system_id";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","update_system_id");
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


	$tdataperson_salutations["update_system_id"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "update_system_id";
//	is_obsolete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_obsolete";
	$fdata["GoodName"] = "is_obsolete";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","is_obsolete");
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


	$tdataperson_salutations["is_obsolete"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "is_obsolete";
//	order
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "order";
	$fdata["GoodName"] = "order";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","order");
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


	$tdataperson_salutations["order"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "order";
//	salutation
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "salutation";
	$fdata["GoodName"] = "salutation";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","salutation");
	$fdata["FieldType"] = 200;

	
	
	
										

		$fdata["strField"] = "salutation";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salutation";

	
	
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


	$tdataperson_salutations["salutation"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "salutation";
//	salutation_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "salutation_description";
	$fdata["GoodName"] = "salutation_description";
	$fdata["ownerTable"] = "person_salutations";
	$fdata["Label"] = GetFieldLabel("person_salutations","salutation_description");
	$fdata["FieldType"] = 201;

	
	
	
										

		$fdata["strField"] = "salutation_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "salutation_description";

	
	
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


	$tdataperson_salutations["salutation_description"] = $fdata;
		$tdataperson_salutations[".searchableFields"][] = "salutation_description";


$tables_data["person_salutations"]=&$tdataperson_salutations;
$field_labels["person_salutations"] = &$fieldLabelsperson_salutations;
$fieldToolTips["person_salutations"] = &$fieldToolTipsperson_salutations;
$placeHolders["person_salutations"] = &$placeHoldersperson_salutations;
$page_titles["person_salutations"] = &$pageTitlesperson_salutations;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["person_salutations"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["person_salutations"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once(getabspath("classes/sql.php"));










function createSqlQuery_person_salutations()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_salutation,  	creation_system_id,  	update_system_id,  	is_obsolete,  	`order`,  	salutation,  	salutation_description";
$proto0["m_strFrom"] = "FROM person_salutations";
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
	"m_strName" => "id_salutation",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto6["m_sql"] = "id_salutation";
$proto6["m_srcTableName"] = "person_salutations";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "creation_system_id",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto8["m_sql"] = "creation_system_id";
$proto8["m_srcTableName"] = "person_salutations";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "update_system_id",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto10["m_sql"] = "update_system_id";
$proto10["m_srcTableName"] = "person_salutations";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_obsolete",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto12["m_sql"] = "is_obsolete";
$proto12["m_srcTableName"] = "person_salutations";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "order",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto14["m_sql"] = "`order`";
$proto14["m_srcTableName"] = "person_salutations";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto16["m_sql"] = "salutation";
$proto16["m_srcTableName"] = "person_salutations";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "salutation_description",
	"m_strTable" => "person_salutations",
	"m_srcTableName" => "person_salutations"
));

$proto18["m_sql"] = "salutation_description";
$proto18["m_srcTableName"] = "person_salutations";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "person_salutations";
$proto21["m_srcTableName"] = "person_salutations";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_salutation";
$proto21["m_columns"][] = "creation_system_id";
$proto21["m_columns"][] = "update_system_id";
$proto21["m_columns"][] = "is_obsolete";
$proto21["m_columns"][] = "order";
$proto21["m_columns"][] = "salutation";
$proto21["m_columns"][] = "salutation_description";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "person_salutations";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "person_salutations";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="person_salutations";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_person_salutations = createSqlQuery_person_salutations();


	
					
;

							

$tdataperson_salutations[".sqlquery"] = $queryData_person_salutations;

$tableEvents["person_salutations"] = new eventsBase;
$tdataperson_salutations[".hasEvents"] = false;

?>