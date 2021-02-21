<?php
$tdataadm_splits = array();
$tdataadm_splits[".searchableFields"] = array();
$tdataadm_splits[".ShortName"] = "adm_splits";
$tdataadm_splits[".OwnerID"] = "";
$tdataadm_splits[".OriginalTable"] = "adm_splits";


$tdataadm_splits[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_splits[".originalPagesByType"] = $tdataadm_splits[".pagesByType"];
$tdataadm_splits[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_splits[".originalPages"] = $tdataadm_splits[".pages"];
$tdataadm_splits[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_splits[".originalDefaultPages"] = $tdataadm_splits[".defaultPages"];

//	field labels
$fieldLabelsadm_splits = array();
$fieldToolTipsadm_splits = array();
$pageTitlesadm_splits = array();
$placeHoldersadm_splits = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_splits["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_splits["Portuguese(Brazil)"] = array();
	$placeHoldersadm_splits["Portuguese(Brazil)"] = array();
	$pageTitlesadm_splits["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["idsplit"] = "Id";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["idsplit"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["idsplit"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["NroBanco"] = "Nro Banco";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["NroBanco"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["NroBanco"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["Agencia"] = "Agencia";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["Agencia"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["Agencia"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["Conta"] = "Conta";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["Conta"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["Conta"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["CPF_CNPJ"] = "CPF CNPJ";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["CPF_CNPJ"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["CPF_CNPJ"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["Titulas"] = "Titulas";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["Titulas"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["Titulas"] = "";
	$fieldLabelsadm_splits["Portuguese(Brazil)"]["Porcentagem"] = "Porcentagem";
	$fieldToolTipsadm_splits["Portuguese(Brazil)"]["Porcentagem"] = "";
	$placeHoldersadm_splits["Portuguese(Brazil)"]["Porcentagem"] = "";
	if (count($fieldToolTipsadm_splits["Portuguese(Brazil)"]))
		$tdataadm_splits[".isUseToolTips"] = true;
}


	$tdataadm_splits[".NCSearch"] = true;



$tdataadm_splits[".shortTableName"] = "adm_splits";
$tdataadm_splits[".nSecOptions"] = 0;

$tdataadm_splits[".mainTableOwnerID"] = "";
$tdataadm_splits[".entityType"] = 0;
$tdataadm_splits[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_splits[".strOriginalTableName"] = "adm_splits";

	



$tdataadm_splits[".showAddInPopup"] = false;

$tdataadm_splits[".showEditInPopup"] = false;

$tdataadm_splits[".showViewInPopup"] = false;

$tdataadm_splits[".listAjax"] = false;
//	temporary
//$tdataadm_splits[".listAjax"] = false;

	$tdataadm_splits[".audit"] = false;

	$tdataadm_splits[".locking"] = false;


$pages = $tdataadm_splits[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_splits[".edit"] = true;
	$tdataadm_splits[".afterEditAction"] = 1;
	$tdataadm_splits[".closePopupAfterEdit"] = 1;
	$tdataadm_splits[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_splits[".add"] = true;
$tdataadm_splits[".afterAddAction"] = 1;
$tdataadm_splits[".closePopupAfterAdd"] = 1;
$tdataadm_splits[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_splits[".list"] = true;
}



$tdataadm_splits[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_splits[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_splits[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_splits[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_splits[".printFriendly"] = true;
}



$tdataadm_splits[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_splits[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_splits[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_splits[".isUseAjaxSuggest"] = true;

$tdataadm_splits[".rowHighlite"] = true;



						

$tdataadm_splits[".ajaxCodeSnippetAdded"] = false;

$tdataadm_splits[".buttonsAdded"] = false;

$tdataadm_splits[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_splits[".isUseTimeForSearch"] = false;


$tdataadm_splits[".badgeColor"] = "BC8F8F";


$tdataadm_splits[".allSearchFields"] = array();
$tdataadm_splits[".filterFields"] = array();
$tdataadm_splits[".requiredSearchFields"] = array();

$tdataadm_splits[".googleLikeFields"] = array();
$tdataadm_splits[".googleLikeFields"][] = "idsplit";
$tdataadm_splits[".googleLikeFields"][] = "Nome";
$tdataadm_splits[".googleLikeFields"][] = "NroBanco";
$tdataadm_splits[".googleLikeFields"][] = "Agencia";
$tdataadm_splits[".googleLikeFields"][] = "Conta";
$tdataadm_splits[".googleLikeFields"][] = "CPF_CNPJ";
$tdataadm_splits[".googleLikeFields"][] = "Titulas";
$tdataadm_splits[".googleLikeFields"][] = "Porcentagem";



$tdataadm_splits[".tableType"] = "list";

$tdataadm_splits[".printerPageOrientation"] = 0;
$tdataadm_splits[".nPrinterPageScale"] = 100;

$tdataadm_splits[".nPrinterSplitRecords"] = 40;

$tdataadm_splits[".geocodingEnabled"] = false;










$tdataadm_splits[".pageSize"] = 20;

$tdataadm_splits[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_splits[".strOrderBy"] = $tstrOrderBy;

$tdataadm_splits[".orderindexes"] = array();


$tdataadm_splits[".sqlHead"] = "SELECT idsplit,  	Nome,  	NroBanco,  	Agencia,  	Conta,  	CPF_CNPJ,  	Titulas,  	Porcentagem";
$tdataadm_splits[".sqlFrom"] = "FROM adm_splits";
$tdataadm_splits[".sqlWhereExpr"] = "";
$tdataadm_splits[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_splits[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_splits[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_splits[".highlightSearchResults"] = true;

$tableKeysadm_splits = array();
$tableKeysadm_splits[] = "idsplit";
$tdataadm_splits[".Keys"] = $tableKeysadm_splits;


$tdataadm_splits[".hideMobileList"] = array();




//	idsplit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idsplit";
	$fdata["GoodName"] = "idsplit";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","idsplit");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idsplit";

		$fdata["sourceSingle"] = "idsplit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idsplit";

	
	
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


	$tdataadm_splits["idsplit"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "idsplit";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

		$fdata["sourceSingle"] = "Nome";

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


	$tdataadm_splits["Nome"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "Nome";
//	NroBanco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NroBanco";
	$fdata["GoodName"] = "NroBanco";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","NroBanco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NroBanco";

		$fdata["sourceSingle"] = "NroBanco";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NroBanco";

	
	
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


	$tdataadm_splits["NroBanco"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "NroBanco";
//	Agencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Agencia";
	$fdata["GoodName"] = "Agencia";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","Agencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Agencia";

		$fdata["sourceSingle"] = "Agencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Agencia";

	
	
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


	$tdataadm_splits["Agencia"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "Agencia";
//	Conta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Conta";
	$fdata["GoodName"] = "Conta";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","Conta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Conta";

		$fdata["sourceSingle"] = "Conta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Conta";

	
	
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


	$tdataadm_splits["Conta"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "Conta";
//	CPF_CNPJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CPF_CNPJ";
	$fdata["GoodName"] = "CPF_CNPJ";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","CPF_CNPJ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CPF_CNPJ";

		$fdata["sourceSingle"] = "CPF_CNPJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CPF_CNPJ";

	
	
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


	$tdataadm_splits["CPF_CNPJ"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "CPF_CNPJ";
//	Titulas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Titulas";
	$fdata["GoodName"] = "Titulas";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","Titulas");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Titulas";

		$fdata["sourceSingle"] = "Titulas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Titulas";

	
	
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


	$tdataadm_splits["Titulas"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "Titulas";
//	Porcentagem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Porcentagem";
	$fdata["GoodName"] = "Porcentagem";
	$fdata["ownerTable"] = "adm_splits";
	$fdata["Label"] = GetFieldLabel("adm_splits","Porcentagem");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Porcentagem";

		$fdata["sourceSingle"] = "Porcentagem";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Porcentagem";

	
	
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


	$tdataadm_splits["Porcentagem"] = $fdata;
		$tdataadm_splits[".searchableFields"][] = "Porcentagem";


$tables_data["adm_splits"]=&$tdataadm_splits;
$field_labels["adm_splits"] = &$fieldLabelsadm_splits;
$fieldToolTips["adm_splits"] = &$fieldToolTipsadm_splits;
$placeHolders["adm_splits"] = &$placeHoldersadm_splits;
$page_titles["adm_splits"] = &$pageTitlesadm_splits;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_splits"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_splits"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_splits()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idsplit,  	Nome,  	NroBanco,  	Agencia,  	Conta,  	CPF_CNPJ,  	Titulas,  	Porcentagem";
$proto0["m_strFrom"] = "FROM adm_splits";
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
	"m_strName" => "idsplit",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto6["m_sql"] = "idsplit";
$proto6["m_srcTableName"] = "adm_splits";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "adm_splits";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NroBanco",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto10["m_sql"] = "NroBanco";
$proto10["m_srcTableName"] = "adm_splits";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Agencia",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto12["m_sql"] = "Agencia";
$proto12["m_srcTableName"] = "adm_splits";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Conta",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto14["m_sql"] = "Conta";
$proto14["m_srcTableName"] = "adm_splits";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CPF_CNPJ",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto16["m_sql"] = "CPF_CNPJ";
$proto16["m_srcTableName"] = "adm_splits";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Titulas",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto18["m_sql"] = "Titulas";
$proto18["m_srcTableName"] = "adm_splits";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Porcentagem",
	"m_strTable" => "adm_splits",
	"m_srcTableName" => "adm_splits"
));

$proto20["m_sql"] = "Porcentagem";
$proto20["m_srcTableName"] = "adm_splits";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "adm_splits";
$proto23["m_srcTableName"] = "adm_splits";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idsplit";
$proto23["m_columns"][] = "Nome";
$proto23["m_columns"][] = "NroBanco";
$proto23["m_columns"][] = "Agencia";
$proto23["m_columns"][] = "Conta";
$proto23["m_columns"][] = "CPF_CNPJ";
$proto23["m_columns"][] = "Titulas";
$proto23["m_columns"][] = "Porcentagem";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "adm_splits";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "adm_splits";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_splits";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_splits = createSqlQuery_adm_splits();


	
		;

								

$tdataadm_splits[".sqlquery"] = $queryData_adm_splits;



$tableEvents["adm_splits"] = new eventsBase;
$tdataadm_splits[".hasEvents"] = false;

?>