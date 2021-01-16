<?php
$tdataibge_pais = array();
$tdataibge_pais[".searchableFields"] = array();
$tdataibge_pais[".ShortName"] = "ibge_pais";
$tdataibge_pais[".OwnerID"] = "";
$tdataibge_pais[".OriginalTable"] = "ibge_pais";


$tdataibge_pais[".pagesByType"] = my_json_decode( "{}" );
$tdataibge_pais[".originalPagesByType"] = $tdataibge_pais[".pagesByType"];
$tdataibge_pais[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataibge_pais[".originalPages"] = $tdataibge_pais[".pages"];
$tdataibge_pais[".defaultPages"] = my_json_decode( "{}" );
$tdataibge_pais[".originalDefaultPages"] = $tdataibge_pais[".defaultPages"];

//	field labels
$fieldLabelsibge_pais = array();
$fieldToolTipsibge_pais = array();
$pageTitlesibge_pais = array();
$placeHoldersibge_pais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsibge_pais["Portuguese(Brazil)"] = array();
	$fieldToolTipsibge_pais["Portuguese(Brazil)"] = array();
	$placeHoldersibge_pais["Portuguese(Brazil)"] = array();
	$pageTitlesibge_pais["Portuguese(Brazil)"] = array();
	$fieldLabelsibge_pais["Portuguese(Brazil)"]["pais_cod"] = "Pais Cod";
	$fieldToolTipsibge_pais["Portuguese(Brazil)"]["pais_cod"] = "";
	$placeHoldersibge_pais["Portuguese(Brazil)"]["pais_cod"] = "";
	$fieldLabelsibge_pais["Portuguese(Brazil)"]["pais_cod_2"] = "Pais Cod 2";
	$fieldToolTipsibge_pais["Portuguese(Brazil)"]["pais_cod_2"] = "";
	$placeHoldersibge_pais["Portuguese(Brazil)"]["pais_cod_2"] = "";
	$fieldLabelsibge_pais["Portuguese(Brazil)"]["pais_cod_3"] = "Pais Cod 3";
	$fieldToolTipsibge_pais["Portuguese(Brazil)"]["pais_cod_3"] = "";
	$placeHoldersibge_pais["Portuguese(Brazil)"]["pais_cod_3"] = "";
	$fieldLabelsibge_pais["Portuguese(Brazil)"]["pais_nome"] = "Pais Nome";
	$fieldToolTipsibge_pais["Portuguese(Brazil)"]["pais_nome"] = "";
	$placeHoldersibge_pais["Portuguese(Brazil)"]["pais_nome"] = "";
	$fieldLabelsibge_pais["Portuguese(Brazil)"]["pais_capital"] = "Pais Capital";
	$fieldToolTipsibge_pais["Portuguese(Brazil)"]["pais_capital"] = "";
	$placeHoldersibge_pais["Portuguese(Brazil)"]["pais_capital"] = "";
	$fieldLabelsibge_pais["Portuguese(Brazil)"]["pais_cod_area"] = "Pais Cod Area";
	$fieldToolTipsibge_pais["Portuguese(Brazil)"]["pais_cod_area"] = "";
	$placeHoldersibge_pais["Portuguese(Brazil)"]["pais_cod_area"] = "";
	if (count($fieldToolTipsibge_pais["Portuguese(Brazil)"]))
		$tdataibge_pais[".isUseToolTips"] = true;
}


	$tdataibge_pais[".NCSearch"] = true;



$tdataibge_pais[".shortTableName"] = "ibge_pais";
$tdataibge_pais[".nSecOptions"] = 0;

$tdataibge_pais[".mainTableOwnerID"] = "";
$tdataibge_pais[".entityType"] = 0;
$tdataibge_pais[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataibge_pais[".strOriginalTableName"] = "ibge_pais";

	



$tdataibge_pais[".showAddInPopup"] = false;

$tdataibge_pais[".showEditInPopup"] = false;

$tdataibge_pais[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataibge_pais[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataibge_pais[".listAjax"] = false;
//	temporary
//$tdataibge_pais[".listAjax"] = false;

	$tdataibge_pais[".audit"] = false;

	$tdataibge_pais[".locking"] = false;


$pages = $tdataibge_pais[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataibge_pais[".edit"] = true;
	$tdataibge_pais[".afterEditAction"] = 1;
	$tdataibge_pais[".closePopupAfterEdit"] = 1;
	$tdataibge_pais[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataibge_pais[".add"] = true;
$tdataibge_pais[".afterAddAction"] = 1;
$tdataibge_pais[".closePopupAfterAdd"] = 1;
$tdataibge_pais[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataibge_pais[".list"] = true;
}



$tdataibge_pais[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataibge_pais[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataibge_pais[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataibge_pais[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataibge_pais[".printFriendly"] = true;
}



$tdataibge_pais[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataibge_pais[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataibge_pais[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataibge_pais[".isUseAjaxSuggest"] = false;

$tdataibge_pais[".rowHighlite"] = true;



			

$tdataibge_pais[".ajaxCodeSnippetAdded"] = false;

$tdataibge_pais[".buttonsAdded"] = false;

$tdataibge_pais[".addPageEvents"] = false;

// use timepicker for search panel
$tdataibge_pais[".isUseTimeForSearch"] = false;


$tdataibge_pais[".badgeColor"] = "4682B4";


$tdataibge_pais[".allSearchFields"] = array();
$tdataibge_pais[".filterFields"] = array();
$tdataibge_pais[".requiredSearchFields"] = array();

$tdataibge_pais[".googleLikeFields"] = array();
$tdataibge_pais[".googleLikeFields"][] = "pais_cod";
$tdataibge_pais[".googleLikeFields"][] = "pais_cod_2";
$tdataibge_pais[".googleLikeFields"][] = "pais_cod_3";
$tdataibge_pais[".googleLikeFields"][] = "pais_nome";
$tdataibge_pais[".googleLikeFields"][] = "pais_capital";
$tdataibge_pais[".googleLikeFields"][] = "pais_cod_area";



$tdataibge_pais[".tableType"] = "list";

$tdataibge_pais[".printerPageOrientation"] = 0;
$tdataibge_pais[".nPrinterPageScale"] = 100;

$tdataibge_pais[".nPrinterSplitRecords"] = 40;

$tdataibge_pais[".geocodingEnabled"] = false;










$tdataibge_pais[".pageSize"] = 20;

$tdataibge_pais[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataibge_pais[".strOrderBy"] = $tstrOrderBy;

$tdataibge_pais[".orderindexes"] = array();


$tdataibge_pais[".sqlHead"] = "SELECT pais_cod,  	pais_cod_2,  	pais_cod_3,  	pais_nome,  	pais_capital,  	pais_cod_area";
$tdataibge_pais[".sqlFrom"] = "FROM ibge_pais";
$tdataibge_pais[".sqlWhereExpr"] = "";
$tdataibge_pais[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataibge_pais[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataibge_pais[".arrGroupsPerPage"] = $arrGPP;


$tableKeysibge_pais = array();
$tableKeysibge_pais[] = "pais_cod";
$tdataibge_pais[".Keys"] = $tableKeysibge_pais;


$tdataibge_pais[".hideMobileList"] = array();




//	pais_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pais_cod";
	$fdata["GoodName"] = "pais_cod";
	$fdata["ownerTable"] = "ibge_pais";
	$fdata["Label"] = GetFieldLabel("ibge_pais","pais_cod");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "pais_cod";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_cod";

	
	
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


	$tdataibge_pais["pais_cod"] = $fdata;
		$tdataibge_pais[".searchableFields"][] = "pais_cod";
//	pais_cod_2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pais_cod_2";
	$fdata["GoodName"] = "pais_cod_2";
	$fdata["ownerTable"] = "ibge_pais";
	$fdata["Label"] = GetFieldLabel("ibge_pais","pais_cod_2");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais_cod_2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_cod_2";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataibge_pais["pais_cod_2"] = $fdata;
		$tdataibge_pais[".searchableFields"][] = "pais_cod_2";
//	pais_cod_3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pais_cod_3";
	$fdata["GoodName"] = "pais_cod_3";
	$fdata["ownerTable"] = "ibge_pais";
	$fdata["Label"] = GetFieldLabel("ibge_pais","pais_cod_3");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais_cod_3";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_cod_3";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdataibge_pais["pais_cod_3"] = $fdata;
		$tdataibge_pais[".searchableFields"][] = "pais_cod_3";
//	pais_nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pais_nome";
	$fdata["GoodName"] = "pais_nome";
	$fdata["ownerTable"] = "ibge_pais";
	$fdata["Label"] = GetFieldLabel("ibge_pais","pais_nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais_nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_nome";

	
	
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


	$tdataibge_pais["pais_nome"] = $fdata;
		$tdataibge_pais[".searchableFields"][] = "pais_nome";
//	pais_capital
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pais_capital";
	$fdata["GoodName"] = "pais_capital";
	$fdata["ownerTable"] = "ibge_pais";
	$fdata["Label"] = GetFieldLabel("ibge_pais","pais_capital");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais_capital";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_capital";

	
	
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


	$tdataibge_pais["pais_capital"] = $fdata;
		$tdataibge_pais[".searchableFields"][] = "pais_capital";
//	pais_cod_area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pais_cod_area";
	$fdata["GoodName"] = "pais_cod_area";
	$fdata["ownerTable"] = "ibge_pais";
	$fdata["Label"] = GetFieldLabel("ibge_pais","pais_cod_area");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "pais_cod_area";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_cod_area";

	
	
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


	$tdataibge_pais["pais_cod_area"] = $fdata;
		$tdataibge_pais[".searchableFields"][] = "pais_cod_area";


$tables_data["ibge_pais"]=&$tdataibge_pais;
$field_labels["ibge_pais"] = &$fieldLabelsibge_pais;
$fieldToolTips["ibge_pais"] = &$fieldToolTipsibge_pais;
$placeHolders["ibge_pais"] = &$placeHoldersibge_pais;
$page_titles["ibge_pais"] = &$pageTitlesibge_pais;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ibge_pais"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ibge_pais"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ibge_pais()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pais_cod,  	pais_cod_2,  	pais_cod_3,  	pais_nome,  	pais_capital,  	pais_cod_area";
$proto0["m_strFrom"] = "FROM ibge_pais";
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
	"m_strName" => "pais_cod",
	"m_strTable" => "ibge_pais",
	"m_srcTableName" => "ibge_pais"
));

$proto6["m_sql"] = "pais_cod";
$proto6["m_srcTableName"] = "ibge_pais";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_cod_2",
	"m_strTable" => "ibge_pais",
	"m_srcTableName" => "ibge_pais"
));

$proto8["m_sql"] = "pais_cod_2";
$proto8["m_srcTableName"] = "ibge_pais";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_cod_3",
	"m_strTable" => "ibge_pais",
	"m_srcTableName" => "ibge_pais"
));

$proto10["m_sql"] = "pais_cod_3";
$proto10["m_srcTableName"] = "ibge_pais";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_nome",
	"m_strTable" => "ibge_pais",
	"m_srcTableName" => "ibge_pais"
));

$proto12["m_sql"] = "pais_nome";
$proto12["m_srcTableName"] = "ibge_pais";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_capital",
	"m_strTable" => "ibge_pais",
	"m_srcTableName" => "ibge_pais"
));

$proto14["m_sql"] = "pais_capital";
$proto14["m_srcTableName"] = "ibge_pais";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_cod_area",
	"m_strTable" => "ibge_pais",
	"m_srcTableName" => "ibge_pais"
));

$proto16["m_sql"] = "pais_cod_area";
$proto16["m_srcTableName"] = "ibge_pais";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "ibge_pais";
$proto19["m_srcTableName"] = "ibge_pais";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "pais_cod";
$proto19["m_columns"][] = "pais_cod_2";
$proto19["m_columns"][] = "pais_cod_3";
$proto19["m_columns"][] = "pais_nome";
$proto19["m_columns"][] = "pais_capital";
$proto19["m_columns"][] = "pais_cod_area";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "ibge_pais";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "ibge_pais";
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
$proto0["m_srcTableName"]="ibge_pais";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ibge_pais = createSqlQuery_ibge_pais();


	
		;

						

$tdataibge_pais[".sqlquery"] = $queryData_ibge_pais;



$tableEvents["ibge_pais"] = new eventsBase;
$tdataibge_pais[".hasEvents"] = false;

?>