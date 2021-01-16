<?php
$tdataadm_meuplano1 = array();
$tdataadm_meuplano1[".searchableFields"] = array();
$tdataadm_meuplano1[".ShortName"] = "adm_meuplano1";
$tdataadm_meuplano1[".OwnerID"] = "idUsuario";
$tdataadm_meuplano1[".OriginalTable"] = "adm_meuplano";


$tdataadm_meuplano1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_meuplano1[".originalPagesByType"] = $tdataadm_meuplano1[".pagesByType"];
$tdataadm_meuplano1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_meuplano1[".originalPages"] = $tdataadm_meuplano1[".pages"];
$tdataadm_meuplano1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_meuplano1[".originalDefaultPages"] = $tdataadm_meuplano1[".defaultPages"];

//	field labels
$fieldLabelsadm_meuplano1 = array();
$fieldToolTipsadm_meuplano1 = array();
$pageTitlesadm_meuplano1 = array();
$placeHoldersadm_meuplano1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_meuplano1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["idMeuPlano"] = "Meu Plano";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["idMeuPlano"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["idMeuPlano"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["idUsuario"] = "Usuário";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["idUsuario"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["idUsuario"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["idPlano"] = "Plano";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["idPlano"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["idPlano"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["Data_Inicial"] = "Data Inicial";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["Data_Inicial"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["Data_Inicial"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["Cartao"] = "Cartão";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["Cartao"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["Cartao"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["Vencimento"] = "Vencimento";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["Vencimento"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["Vencimento"] = "";
	$fieldLabelsadm_meuplano1["Portuguese(Brazil)"]["CVV"] = "CVV";
	$fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]["CVV"] = "";
	$placeHoldersadm_meuplano1["Portuguese(Brazil)"]["CVV"] = "";
	if (count($fieldToolTipsadm_meuplano1["Portuguese(Brazil)"]))
		$tdataadm_meuplano1[".isUseToolTips"] = true;
}


	$tdataadm_meuplano1[".NCSearch"] = true;



$tdataadm_meuplano1[".shortTableName"] = "adm_meuplano1";
$tdataadm_meuplano1[".nSecOptions"] = 1;

$tdataadm_meuplano1[".mainTableOwnerID"] = "idUsuario";
$tdataadm_meuplano1[".entityType"] = 0;
$tdataadm_meuplano1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_meuplano1[".strOriginalTableName"] = "adm_meuplano";

	



$tdataadm_meuplano1[".showAddInPopup"] = false;

$tdataadm_meuplano1[".showEditInPopup"] = false;

$tdataadm_meuplano1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_meuplano1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_meuplano1[".listAjax"] = false;
//	temporary
//$tdataadm_meuplano1[".listAjax"] = false;

	$tdataadm_meuplano1[".audit"] = false;

	$tdataadm_meuplano1[".locking"] = false;


$pages = $tdataadm_meuplano1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_meuplano1[".edit"] = true;
	$tdataadm_meuplano1[".afterEditAction"] = 1;
	$tdataadm_meuplano1[".closePopupAfterEdit"] = 1;
	$tdataadm_meuplano1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_meuplano1[".add"] = true;
$tdataadm_meuplano1[".afterAddAction"] = 1;
$tdataadm_meuplano1[".closePopupAfterAdd"] = 1;
$tdataadm_meuplano1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_meuplano1[".list"] = true;
}



$tdataadm_meuplano1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_meuplano1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_meuplano1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_meuplano1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_meuplano1[".printFriendly"] = true;
}



$tdataadm_meuplano1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_meuplano1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_meuplano1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_meuplano1[".isUseAjaxSuggest"] = false;

$tdataadm_meuplano1[".rowHighlite"] = true;



						

$tdataadm_meuplano1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_meuplano1[".buttonsAdded"] = false;

$tdataadm_meuplano1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_meuplano1[".isUseTimeForSearch"] = false;


$tdataadm_meuplano1[".badgeColor"] = "c0c0c0";


$tdataadm_meuplano1[".allSearchFields"] = array();
$tdataadm_meuplano1[".filterFields"] = array();
$tdataadm_meuplano1[".requiredSearchFields"] = array();

$tdataadm_meuplano1[".googleLikeFields"] = array();
$tdataadm_meuplano1[".googleLikeFields"][] = "idMeuPlano";
$tdataadm_meuplano1[".googleLikeFields"][] = "idUsuario";
$tdataadm_meuplano1[".googleLikeFields"][] = "idPlano";
$tdataadm_meuplano1[".googleLikeFields"][] = "Data_Inicial";
$tdataadm_meuplano1[".googleLikeFields"][] = "Valor";
$tdataadm_meuplano1[".googleLikeFields"][] = "Cartao";
$tdataadm_meuplano1[".googleLikeFields"][] = "Nome";
$tdataadm_meuplano1[".googleLikeFields"][] = "Vencimento";
$tdataadm_meuplano1[".googleLikeFields"][] = "CVV";



$tdataadm_meuplano1[".tableType"] = "list";

$tdataadm_meuplano1[".printerPageOrientation"] = 0;
$tdataadm_meuplano1[".nPrinterPageScale"] = 100;

$tdataadm_meuplano1[".nPrinterSplitRecords"] = 40;

$tdataadm_meuplano1[".geocodingEnabled"] = false;










$tdataadm_meuplano1[".pageSize"] = 20;

$tdataadm_meuplano1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_meuplano1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_meuplano1[".orderindexes"] = array();


$tdataadm_meuplano1[".sqlHead"] = "SELECT idMeuPlano,  	idUsuario,  	idPlano,  	Data_Inicial,  	Valor,  	Cartao,  	Nome,  	Vencimento,  	CVV";
$tdataadm_meuplano1[".sqlFrom"] = "FROM adm_meuplano";
$tdataadm_meuplano1[".sqlWhereExpr"] = "";
$tdataadm_meuplano1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_meuplano1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_meuplano1[".arrGroupsPerPage"] = $arrGPP;


$tableKeysadm_meuplano1 = array();
$tableKeysadm_meuplano1[] = "idMeuPlano";
$tdataadm_meuplano1[".Keys"] = $tableKeysadm_meuplano1;


$tdataadm_meuplano1[".hideMobileList"] = array();




//	idMeuPlano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idMeuPlano";
	$fdata["GoodName"] = "idMeuPlano";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","idMeuPlano");
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


	$tdataadm_meuplano1["idMeuPlano"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "idMeuPlano";
//	idUsuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idUsuario";
	$fdata["GoodName"] = "idUsuario";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","idUsuario");
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


	$tdataadm_meuplano1["idUsuario"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "idUsuario";
//	idPlano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idPlano";
	$fdata["GoodName"] = "idPlano";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","idPlano");
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
	$edata["LookupTable"] = "adm_planos";
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


	$tdataadm_meuplano1["idPlano"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "idPlano";
//	Data_Inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data_Inicial";
	$fdata["GoodName"] = "Data_Inicial";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","Data_Inicial");
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


	$tdataadm_meuplano1["Data_Inicial"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "Data_Inicial";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","Valor");
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


	$tdataadm_meuplano1["Valor"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "Valor";
//	Cartao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cartao";
	$fdata["GoodName"] = "Cartao";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","Cartao");
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


	$tdataadm_meuplano1["Cartao"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "Cartao";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","Nome");
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


	$tdataadm_meuplano1["Nome"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "Nome";
//	Vencimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Vencimento";
	$fdata["GoodName"] = "Vencimento";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","Vencimento");
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


	$tdataadm_meuplano1["Vencimento"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "Vencimento";
//	CVV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CVV";
	$fdata["GoodName"] = "CVV";
	$fdata["ownerTable"] = "adm_meuplano";
	$fdata["Label"] = GetFieldLabel("adm_meuplano","CVV");
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


	$tdataadm_meuplano1["CVV"] = $fdata;
		$tdataadm_meuplano1[".searchableFields"][] = "CVV";


$tables_data["adm_meuplano"]=&$tdataadm_meuplano1;
$field_labels["adm_meuplano"] = &$fieldLabelsadm_meuplano1;
$fieldToolTips["adm_meuplano"] = &$fieldToolTipsadm_meuplano1;
$placeHolders["adm_meuplano"] = &$placeHoldersadm_meuplano1;
$page_titles["adm_meuplano"] = &$pageTitlesadm_meuplano1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_meuplano"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_meuplano"] = array();



	
				$strOriginalDetailsTable="adm_usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_usuarios1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_meuplano"][0] = $masterParams;
				$masterTablesData["adm_meuplano"][0]["masterKeys"] = array();
	$masterTablesData["adm_meuplano"][0]["masterKeys"][]="usu_id";
				$masterTablesData["adm_meuplano"][0]["detailKeys"] = array();
	$masterTablesData["adm_meuplano"][0]["detailKeys"][]="idUsuario";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_meuplano1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idMeuPlano,  	idUsuario,  	idPlano,  	Data_Inicial,  	Valor,  	Cartao,  	Nome,  	Vencimento,  	CVV";
$proto0["m_strFrom"] = "FROM adm_meuplano";
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
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto6["m_sql"] = "idMeuPlano";
$proto6["m_srcTableName"] = "adm_meuplano";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idUsuario",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto8["m_sql"] = "idUsuario";
$proto8["m_srcTableName"] = "adm_meuplano";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idPlano",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto10["m_sql"] = "idPlano";
$proto10["m_srcTableName"] = "adm_meuplano";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_Inicial",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto12["m_sql"] = "Data_Inicial";
$proto12["m_srcTableName"] = "adm_meuplano";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto14["m_sql"] = "Valor";
$proto14["m_srcTableName"] = "adm_meuplano";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cartao",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto16["m_sql"] = "Cartao";
$proto16["m_srcTableName"] = "adm_meuplano";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto18["m_sql"] = "Nome";
$proto18["m_srcTableName"] = "adm_meuplano";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Vencimento",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto20["m_sql"] = "Vencimento";
$proto20["m_srcTableName"] = "adm_meuplano";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CVV",
	"m_strTable" => "adm_meuplano",
	"m_srcTableName" => "adm_meuplano"
));

$proto22["m_sql"] = "CVV";
$proto22["m_srcTableName"] = "adm_meuplano";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "adm_meuplano";
$proto25["m_srcTableName"] = "adm_meuplano";
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
$proto24["m_sql"] = "adm_meuplano";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "adm_meuplano";
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
$proto0["m_srcTableName"]="adm_meuplano";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_meuplano1 = createSqlQuery_adm_meuplano1();


	
		;

									

$tdataadm_meuplano1[".sqlquery"] = $queryData_adm_meuplano1;



include_once(getabspath("include/adm_meuplano1_events.php"));
$tableEvents["adm_meuplano"] = new eventclass_adm_meuplano1;
$tdataadm_meuplano1[".hasEvents"] = true;

?>