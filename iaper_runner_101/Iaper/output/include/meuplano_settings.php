<?php
$tdatameuplano = array();
$tdatameuplano[".searchableFields"] = array();
$tdatameuplano[".ShortName"] = "meuplano";
$tdatameuplano[".OwnerID"] = "idUsuario";
$tdatameuplano[".OriginalTable"] = "meuplano";


$tdatameuplano[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatameuplano[".originalPagesByType"] = $tdatameuplano[".pagesByType"];
$tdatameuplano[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatameuplano[".originalPages"] = $tdatameuplano[".pages"];
$tdatameuplano[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatameuplano[".originalDefaultPages"] = $tdatameuplano[".defaultPages"];

//	field labels
$fieldLabelsmeuplano = array();
$fieldToolTipsmeuplano = array();
$pageTitlesmeuplano = array();
$placeHoldersmeuplano = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsmeuplano["Portuguese(Brazil)"] = array();
	$fieldToolTipsmeuplano["Portuguese(Brazil)"] = array();
	$placeHoldersmeuplano["Portuguese(Brazil)"] = array();
	$pageTitlesmeuplano["Portuguese(Brazil)"] = array();
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["idMeuPlano"] = "Meu Plano";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["idMeuPlano"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["idMeuPlano"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["idUsuario"] = "Usuário";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["idUsuario"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["idUsuario"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["idPlano"] = "Plano";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["idPlano"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["idPlano"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["Data_Inicial"] = "Data Inicial";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["Data_Inicial"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["Data_Inicial"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["Cartao"] = "Cartão";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["Cartao"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["Cartao"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["Vencimento"] = "Vencimento";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["Vencimento"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["Vencimento"] = "";
	$fieldLabelsmeuplano["Portuguese(Brazil)"]["CVV"] = "CVV";
	$fieldToolTipsmeuplano["Portuguese(Brazil)"]["CVV"] = "";
	$placeHoldersmeuplano["Portuguese(Brazil)"]["CVV"] = "";
	if (count($fieldToolTipsmeuplano["Portuguese(Brazil)"]))
		$tdatameuplano[".isUseToolTips"] = true;
}


	$tdatameuplano[".NCSearch"] = true;



$tdatameuplano[".shortTableName"] = "meuplano";
$tdatameuplano[".nSecOptions"] = 1;

$tdatameuplano[".mainTableOwnerID"] = "idUsuario";
$tdatameuplano[".entityType"] = 0;
$tdatameuplano[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatameuplano[".strOriginalTableName"] = "meuplano";

	



$tdatameuplano[".showAddInPopup"] = false;

$tdatameuplano[".showEditInPopup"] = false;

$tdatameuplano[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatameuplano[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatameuplano[".listAjax"] = false;
//	temporary
//$tdatameuplano[".listAjax"] = false;

	$tdatameuplano[".audit"] = false;

	$tdatameuplano[".locking"] = false;


$pages = $tdatameuplano[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatameuplano[".edit"] = true;
	$tdatameuplano[".afterEditAction"] = 1;
	$tdatameuplano[".closePopupAfterEdit"] = 1;
	$tdatameuplano[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatameuplano[".add"] = true;
$tdatameuplano[".afterAddAction"] = 1;
$tdatameuplano[".closePopupAfterAdd"] = 1;
$tdatameuplano[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatameuplano[".list"] = true;
}



$tdatameuplano[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatameuplano[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatameuplano[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatameuplano[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatameuplano[".printFriendly"] = true;
}



$tdatameuplano[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatameuplano[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatameuplano[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatameuplano[".isUseAjaxSuggest"] = true;

$tdatameuplano[".rowHighlite"] = true;





$tdatameuplano[".ajaxCodeSnippetAdded"] = false;

$tdatameuplano[".buttonsAdded"] = false;

$tdatameuplano[".addPageEvents"] = false;

// use timepicker for search panel
$tdatameuplano[".isUseTimeForSearch"] = false;


$tdatameuplano[".badgeColor"] = "c0c0c0";


$tdatameuplano[".allSearchFields"] = array();
$tdatameuplano[".filterFields"] = array();
$tdatameuplano[".requiredSearchFields"] = array();

$tdatameuplano[".googleLikeFields"] = array();
$tdatameuplano[".googleLikeFields"][] = "idMeuPlano";
$tdatameuplano[".googleLikeFields"][] = "idUsuario";
$tdatameuplano[".googleLikeFields"][] = "idPlano";
$tdatameuplano[".googleLikeFields"][] = "Data_Inicial";
$tdatameuplano[".googleLikeFields"][] = "Valor";
$tdatameuplano[".googleLikeFields"][] = "Cartao";
$tdatameuplano[".googleLikeFields"][] = "Nome";
$tdatameuplano[".googleLikeFields"][] = "Vencimento";
$tdatameuplano[".googleLikeFields"][] = "CVV";



$tdatameuplano[".tableType"] = "list";

$tdatameuplano[".printerPageOrientation"] = 0;
$tdatameuplano[".nPrinterPageScale"] = 100;

$tdatameuplano[".nPrinterSplitRecords"] = 40;

$tdatameuplano[".geocodingEnabled"] = false;










$tdatameuplano[".pageSize"] = 20;

$tdatameuplano[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatameuplano[".strOrderBy"] = $tstrOrderBy;

$tdatameuplano[".orderindexes"] = array();


$tdatameuplano[".sqlHead"] = "SELECT idMeuPlano,  	idUsuario,  	idPlano,  	Data_Inicial,  	Valor,  	Cartao,  	Nome,  	Vencimento,  	CVV";
$tdatameuplano[".sqlFrom"] = "FROM meuplano";
$tdatameuplano[".sqlWhereExpr"] = "";
$tdatameuplano[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatameuplano[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatameuplano[".arrGroupsPerPage"] = $arrGPP;

$tdatameuplano[".highlightSearchResults"] = true;

$tableKeysmeuplano = array();
$tableKeysmeuplano[] = "idMeuPlano";
$tdatameuplano[".Keys"] = $tableKeysmeuplano;


$tdatameuplano[".hideMobileList"] = array();




//	idMeuPlano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idMeuPlano";
	$fdata["GoodName"] = "idMeuPlano";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","idMeuPlano");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idMeuPlano";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idMeuPlano";

	
	
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


	$tdatameuplano["idMeuPlano"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "idMeuPlano";
//	idUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idUsuario";
	$fdata["GoodName"] = "idUsuario";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","idUsuario");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idUsuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idUsuario";

	
	
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


	$tdatameuplano["idUsuario"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "idUsuario";
//	idPlano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idPlano";
	$fdata["GoodName"] = "idPlano";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","idPlano");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idPlano";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPlano";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "planos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idPlano";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Combo";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatameuplano["idPlano"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "idPlano";
//	Data_Inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data_Inicial";
	$fdata["GoodName"] = "Data_Inicial";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","Data_Inicial");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Data_Inicial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data_Inicial";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatameuplano["Data_Inicial"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "Data_Inicial";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","Valor");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdatameuplano["Valor"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "Valor";
//	Cartao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cartao";
	$fdata["GoodName"] = "Cartao";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","Cartao");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Cartao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cartao";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatameuplano["Cartao"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "Cartao";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","Nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nome";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatameuplano["Nome"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "Nome";
//	Vencimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Vencimento";
	$fdata["GoodName"] = "Vencimento";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","Vencimento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Vencimento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Vencimento";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

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


	$tdatameuplano["Vencimento"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "Vencimento";
//	CVV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CVV";
	$fdata["GoodName"] = "CVV";
	$fdata["ownerTable"] = "meuplano";
	$fdata["Label"] = GetFieldLabel("meuplano","CVV");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CVV";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CVV";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatameuplano["CVV"] = $fdata;
		$tdatameuplano[".searchableFields"][] = "CVV";


$tables_data["meuplano"]=&$tdatameuplano;
$field_labels["meuplano"] = &$fieldLabelsmeuplano;
$fieldToolTips["meuplano"] = &$fieldToolTipsmeuplano;
$placeHolders["meuplano"] = &$placeHoldersmeuplano;
$page_titles["meuplano"] = &$pageTitlesmeuplano;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["meuplano"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["meuplano"] = array();



	
				$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["meuplano"][0] = $masterParams;
				$masterTablesData["meuplano"][0]["masterKeys"] = array();
	$masterTablesData["meuplano"][0]["masterKeys"][]="usu_id";
				$masterTablesData["meuplano"][0]["detailKeys"] = array();
	$masterTablesData["meuplano"][0]["detailKeys"][]="idUsuario";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_meuplano()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idMeuPlano,  	idUsuario,  	idPlano,  	Data_Inicial,  	Valor,  	Cartao,  	Nome,  	Vencimento,  	CVV";
$proto0["m_strFrom"] = "FROM meuplano";
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
	"m_strName" => "idMeuPlano",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto6["m_sql"] = "idMeuPlano";
$proto6["m_srcTableName"] = "meuplano";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idUsuario",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto8["m_sql"] = "idUsuario";
$proto8["m_srcTableName"] = "meuplano";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idPlano",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto10["m_sql"] = "idPlano";
$proto10["m_srcTableName"] = "meuplano";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_Inicial",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto12["m_sql"] = "Data_Inicial";
$proto12["m_srcTableName"] = "meuplano";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto14["m_sql"] = "Valor";
$proto14["m_srcTableName"] = "meuplano";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cartao",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto16["m_sql"] = "Cartao";
$proto16["m_srcTableName"] = "meuplano";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto18["m_sql"] = "Nome";
$proto18["m_srcTableName"] = "meuplano";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Vencimento",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto20["m_sql"] = "Vencimento";
$proto20["m_srcTableName"] = "meuplano";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CVV",
	"m_strTable" => "meuplano",
	"m_srcTableName" => "meuplano"
));

$proto22["m_sql"] = "CVV";
$proto22["m_srcTableName"] = "meuplano";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "meuplano";
$proto25["m_srcTableName"] = "meuplano";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "idMeuPlano";
$proto25["m_columns"][] = "idUsuario";
$proto25["m_columns"][] = "idPlano";
$proto25["m_columns"][] = "Data_Inicial";
$proto25["m_columns"][] = "Valor";
$proto25["m_columns"][] = "Cartao";
$proto25["m_columns"][] = "Nome";
$proto25["m_columns"][] = "Vencimento";
$proto25["m_columns"][] = "CVV";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "meuplano";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "meuplano";
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
$proto0["m_srcTableName"]="meuplano";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_meuplano = createSqlQuery_meuplano();


	
		;

									

$tdatameuplano[".sqlquery"] = $queryData_meuplano;



include_once(getabspath("include/meuplano_events.php"));
$tableEvents["meuplano"] = new eventclass_meuplano;
$tdatameuplano[".hasEvents"] = true;

?>