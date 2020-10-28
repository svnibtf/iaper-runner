<?php
$tdataibge_municipios = array();
$tdataibge_municipios[".searchableFields"] = array();
$tdataibge_municipios[".ShortName"] = "ibge_municipios";
$tdataibge_municipios[".OwnerID"] = "";
$tdataibge_municipios[".OriginalTable"] = "ibge_municipios";


$tdataibge_municipios[".pagesByType"] = my_json_decode( "{}" );
$tdataibge_municipios[".originalPagesByType"] = $tdataibge_municipios[".pagesByType"];
$tdataibge_municipios[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataibge_municipios[".originalPages"] = $tdataibge_municipios[".pages"];
$tdataibge_municipios[".defaultPages"] = my_json_decode( "{}" );
$tdataibge_municipios[".originalDefaultPages"] = $tdataibge_municipios[".defaultPages"];

//	field labels
$fieldLabelsibge_municipios = array();
$fieldToolTipsibge_municipios = array();
$pageTitlesibge_municipios = array();
$placeHoldersibge_municipios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsibge_municipios["Portuguese(Brazil)"] = array();
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"] = array();
	$placeHoldersibge_municipios["Portuguese(Brazil)"] = array();
	$pageTitlesibge_municipios["Portuguese(Brazil)"] = array();
	$fieldLabelsibge_municipios["Portuguese(Brazil)"]["codigo_ibge"] = "Codigo Ibge";
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"]["codigo_ibge"] = "";
	$placeHoldersibge_municipios["Portuguese(Brazil)"]["codigo_ibge"] = "";
	$fieldLabelsibge_municipios["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersibge_municipios["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsibge_municipios["Portuguese(Brazil)"]["latitude"] = "Latitude";
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"]["latitude"] = "";
	$placeHoldersibge_municipios["Portuguese(Brazil)"]["latitude"] = "";
	$fieldLabelsibge_municipios["Portuguese(Brazil)"]["longitude"] = "Longitude";
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"]["longitude"] = "";
	$placeHoldersibge_municipios["Portuguese(Brazil)"]["longitude"] = "";
	$fieldLabelsibge_municipios["Portuguese(Brazil)"]["capital"] = "Capital";
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"]["capital"] = "";
	$placeHoldersibge_municipios["Portuguese(Brazil)"]["capital"] = "";
	$fieldLabelsibge_municipios["Portuguese(Brazil)"]["codigo_uf"] = "Codigo Uf";
	$fieldToolTipsibge_municipios["Portuguese(Brazil)"]["codigo_uf"] = "";
	$placeHoldersibge_municipios["Portuguese(Brazil)"]["codigo_uf"] = "";
	if (count($fieldToolTipsibge_municipios["Portuguese(Brazil)"]))
		$tdataibge_municipios[".isUseToolTips"] = true;
}


	$tdataibge_municipios[".NCSearch"] = true;



$tdataibge_municipios[".shortTableName"] = "ibge_municipios";
$tdataibge_municipios[".nSecOptions"] = 0;

$tdataibge_municipios[".mainTableOwnerID"] = "";
$tdataibge_municipios[".entityType"] = 0;
$tdataibge_municipios[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataibge_municipios[".strOriginalTableName"] = "ibge_municipios";

	



$tdataibge_municipios[".showAddInPopup"] = false;

$tdataibge_municipios[".showEditInPopup"] = false;

$tdataibge_municipios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataibge_municipios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataibge_municipios[".listAjax"] = false;
//	temporary
//$tdataibge_municipios[".listAjax"] = false;

	$tdataibge_municipios[".audit"] = false;

	$tdataibge_municipios[".locking"] = false;


$pages = $tdataibge_municipios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataibge_municipios[".edit"] = true;
	$tdataibge_municipios[".afterEditAction"] = 1;
	$tdataibge_municipios[".closePopupAfterEdit"] = 1;
	$tdataibge_municipios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataibge_municipios[".add"] = true;
$tdataibge_municipios[".afterAddAction"] = 1;
$tdataibge_municipios[".closePopupAfterAdd"] = 1;
$tdataibge_municipios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataibge_municipios[".list"] = true;
}



$tdataibge_municipios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataibge_municipios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataibge_municipios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataibge_municipios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataibge_municipios[".printFriendly"] = true;
}



$tdataibge_municipios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataibge_municipios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataibge_municipios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataibge_municipios[".isUseAjaxSuggest"] = true;

$tdataibge_municipios[".rowHighlite"] = true;





$tdataibge_municipios[".ajaxCodeSnippetAdded"] = false;

$tdataibge_municipios[".buttonsAdded"] = false;

$tdataibge_municipios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataibge_municipios[".isUseTimeForSearch"] = false;


$tdataibge_municipios[".badgeColor"] = "D2AF80";


$tdataibge_municipios[".allSearchFields"] = array();
$tdataibge_municipios[".filterFields"] = array();
$tdataibge_municipios[".requiredSearchFields"] = array();

$tdataibge_municipios[".googleLikeFields"] = array();
$tdataibge_municipios[".googleLikeFields"][] = "codigo_ibge";
$tdataibge_municipios[".googleLikeFields"][] = "nome";
$tdataibge_municipios[".googleLikeFields"][] = "latitude";
$tdataibge_municipios[".googleLikeFields"][] = "longitude";
$tdataibge_municipios[".googleLikeFields"][] = "capital";
$tdataibge_municipios[".googleLikeFields"][] = "codigo_uf";



$tdataibge_municipios[".tableType"] = "list";

$tdataibge_municipios[".printerPageOrientation"] = 0;
$tdataibge_municipios[".nPrinterPageScale"] = 100;

$tdataibge_municipios[".nPrinterSplitRecords"] = 40;

$tdataibge_municipios[".geocodingEnabled"] = false;










$tdataibge_municipios[".pageSize"] = 20;

$tdataibge_municipios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataibge_municipios[".strOrderBy"] = $tstrOrderBy;

$tdataibge_municipios[".orderindexes"] = array();


$tdataibge_municipios[".sqlHead"] = "SELECT codigo_ibge,  	nome,  	latitude,  	longitude,  	capital,  	codigo_uf";
$tdataibge_municipios[".sqlFrom"] = "FROM ibge_municipios";
$tdataibge_municipios[".sqlWhereExpr"] = "";
$tdataibge_municipios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataibge_municipios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataibge_municipios[".arrGroupsPerPage"] = $arrGPP;

$tdataibge_municipios[".highlightSearchResults"] = true;

$tableKeysibge_municipios = array();
$tableKeysibge_municipios[] = "codigo_ibge";
$tdataibge_municipios[".Keys"] = $tableKeysibge_municipios;


$tdataibge_municipios[".hideMobileList"] = array();




//	codigo_ibge
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "codigo_ibge";
	$fdata["GoodName"] = "codigo_ibge";
	$fdata["ownerTable"] = "ibge_municipios";
	$fdata["Label"] = GetFieldLabel("ibge_municipios","codigo_ibge");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "codigo_ibge";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_ibge";

	
	
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


	$tdataibge_municipios["codigo_ibge"] = $fdata;
		$tdataibge_municipios[".searchableFields"][] = "codigo_ibge";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "ibge_municipios";
	$fdata["Label"] = GetFieldLabel("ibge_municipios","nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataibge_municipios["nome"] = $fdata;
		$tdataibge_municipios[".searchableFields"][] = "nome";
//	latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "latitude";
	$fdata["GoodName"] = "latitude";
	$fdata["ownerTable"] = "ibge_municipios";
	$fdata["Label"] = GetFieldLabel("ibge_municipios","latitude");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "latitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "latitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataibge_municipios["latitude"] = $fdata;
		$tdataibge_municipios[".searchableFields"][] = "latitude";
//	longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "longitude";
	$fdata["GoodName"] = "longitude";
	$fdata["ownerTable"] = "ibge_municipios";
	$fdata["Label"] = GetFieldLabel("ibge_municipios","longitude");
	$fdata["FieldType"] = 5;

	
	
	
			

		$fdata["strField"] = "longitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longitude";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdataibge_municipios["longitude"] = $fdata;
		$tdataibge_municipios[".searchableFields"][] = "longitude";
//	capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "capital";
	$fdata["GoodName"] = "capital";
	$fdata["ownerTable"] = "ibge_municipios";
	$fdata["Label"] = GetFieldLabel("ibge_municipios","capital");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "capital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capital";

	
	
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


	$tdataibge_municipios["capital"] = $fdata;
		$tdataibge_municipios[".searchableFields"][] = "capital";
//	codigo_uf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "codigo_uf";
	$fdata["GoodName"] = "codigo_uf";
	$fdata["ownerTable"] = "ibge_municipios";
	$fdata["Label"] = GetFieldLabel("ibge_municipios","codigo_uf");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "codigo_uf";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigo_uf";

	
	
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


	$tdataibge_municipios["codigo_uf"] = $fdata;
		$tdataibge_municipios[".searchableFields"][] = "codigo_uf";


$tables_data["ibge_municipios"]=&$tdataibge_municipios;
$field_labels["ibge_municipios"] = &$fieldLabelsibge_municipios;
$fieldToolTips["ibge_municipios"] = &$fieldToolTipsibge_municipios;
$placeHolders["ibge_municipios"] = &$placeHoldersibge_municipios;
$page_titles["ibge_municipios"] = &$pageTitlesibge_municipios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ibge_municipios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ibge_municipios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ibge_municipios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "codigo_ibge,  	nome,  	latitude,  	longitude,  	capital,  	codigo_uf";
$proto0["m_strFrom"] = "FROM ibge_municipios";
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
	"m_strName" => "codigo_ibge",
	"m_strTable" => "ibge_municipios",
	"m_srcTableName" => "ibge_municipios"
));

$proto6["m_sql"] = "codigo_ibge";
$proto6["m_srcTableName"] = "ibge_municipios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "ibge_municipios",
	"m_srcTableName" => "ibge_municipios"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "ibge_municipios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "latitude",
	"m_strTable" => "ibge_municipios",
	"m_srcTableName" => "ibge_municipios"
));

$proto10["m_sql"] = "latitude";
$proto10["m_srcTableName"] = "ibge_municipios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "longitude",
	"m_strTable" => "ibge_municipios",
	"m_srcTableName" => "ibge_municipios"
));

$proto12["m_sql"] = "longitude";
$proto12["m_srcTableName"] = "ibge_municipios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "capital",
	"m_strTable" => "ibge_municipios",
	"m_srcTableName" => "ibge_municipios"
));

$proto14["m_sql"] = "capital";
$proto14["m_srcTableName"] = "ibge_municipios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo_uf",
	"m_strTable" => "ibge_municipios",
	"m_srcTableName" => "ibge_municipios"
));

$proto16["m_sql"] = "codigo_uf";
$proto16["m_srcTableName"] = "ibge_municipios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ibge_municipios";
$proto19["m_srcTableName"] = "ibge_municipios";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "codigo_ibge";
$proto19["m_columns"][] = "nome";
$proto19["m_columns"][] = "latitude";
$proto19["m_columns"][] = "longitude";
$proto19["m_columns"][] = "capital";
$proto19["m_columns"][] = "codigo_uf";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ibge_municipios";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ibge_municipios";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ibge_municipios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ibge_municipios = createSqlQuery_ibge_municipios();


	
		;

						

$tdataibge_municipios[".sqlquery"] = $queryData_ibge_municipios;



$tableEvents["ibge_municipios"] = new eventsBase;
$tdataibge_municipios[".hasEvents"] = false;

?>