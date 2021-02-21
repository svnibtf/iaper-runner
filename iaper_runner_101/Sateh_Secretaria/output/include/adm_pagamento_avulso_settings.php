<?php
$tdataadm_pagamento_avulso = array();
$tdataadm_pagamento_avulso[".searchableFields"] = array();
$tdataadm_pagamento_avulso[".ShortName"] = "adm_pagamento_avulso";
$tdataadm_pagamento_avulso[".OwnerID"] = "";
$tdataadm_pagamento_avulso[".OriginalTable"] = "adm_pagamento_avulso";


$tdataadm_pagamento_avulso[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_pagamento_avulso[".originalPagesByType"] = $tdataadm_pagamento_avulso[".pagesByType"];
$tdataadm_pagamento_avulso[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_pagamento_avulso[".originalPages"] = $tdataadm_pagamento_avulso[".pages"];
$tdataadm_pagamento_avulso[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_pagamento_avulso[".originalDefaultPages"] = $tdataadm_pagamento_avulso[".defaultPages"];

//	field labels
$fieldLabelsadm_pagamento_avulso = array();
$fieldToolTipsadm_pagamento_avulso = array();
$pageTitlesadm_pagamento_avulso = array();
$placeHoldersadm_pagamento_avulso = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"] = array();
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"] = array();
	$pageTitlesadm_pagamento_avulso["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["idPagAvulso"] = "Id";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["idPagAvulso"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["idPagAvulso"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Item1"] = "Item1";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Item1"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Item1"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor1"] = "Valor1";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor1"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Valor1"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Item2"] = "Item2";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Item2"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Item2"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor2"] = "Valor2";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor2"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Valor2"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Item3"] = "Item3";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Item3"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Item3"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor3"] = "Valor3";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor3"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Valor3"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Item4"] = "Item4";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Item4"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Item4"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor4"] = "Valor4";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor4"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Valor4"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor_TOTAL"] = "Valor TOTAL";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Valor_TOTAL"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Valor_TOTAL"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Link"] = "Link";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Link"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Link"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Fatura"] = "Fatura";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Fatura"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Fatura"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Status"] = "Status";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Status"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Status"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Forma_Pagamento"] = "Forma Pagamento";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Forma_Pagamento"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Forma_Pagamento"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["Observacao"] = "Observacao";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["Observacao"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["Observacao"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["idConsulta"] = "Consulta";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["idConsulta"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["idConsulta"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["idPaciente"] = "Paciente";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["idPaciente"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["idPaciente"] = "";
	$fieldLabelsadm_pagamento_avulso["Portuguese(Brazil)"]["idProfissional"] = "Profissional";
	$fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]["idProfissional"] = "";
	$placeHoldersadm_pagamento_avulso["Portuguese(Brazil)"]["idProfissional"] = "";
	if (count($fieldToolTipsadm_pagamento_avulso["Portuguese(Brazil)"]))
		$tdataadm_pagamento_avulso[".isUseToolTips"] = true;
}


	$tdataadm_pagamento_avulso[".NCSearch"] = true;



$tdataadm_pagamento_avulso[".shortTableName"] = "adm_pagamento_avulso";
$tdataadm_pagamento_avulso[".nSecOptions"] = 0;

$tdataadm_pagamento_avulso[".mainTableOwnerID"] = "";
$tdataadm_pagamento_avulso[".entityType"] = 0;
$tdataadm_pagamento_avulso[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_pagamento_avulso[".strOriginalTableName"] = "adm_pagamento_avulso";

	



$tdataadm_pagamento_avulso[".showAddInPopup"] = false;

$tdataadm_pagamento_avulso[".showEditInPopup"] = false;

$tdataadm_pagamento_avulso[".showViewInPopup"] = false;

$tdataadm_pagamento_avulso[".listAjax"] = false;
//	temporary
//$tdataadm_pagamento_avulso[".listAjax"] = false;

	$tdataadm_pagamento_avulso[".audit"] = false;

	$tdataadm_pagamento_avulso[".locking"] = false;


$pages = $tdataadm_pagamento_avulso[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_pagamento_avulso[".edit"] = true;
	$tdataadm_pagamento_avulso[".afterEditAction"] = 1;
	$tdataadm_pagamento_avulso[".closePopupAfterEdit"] = 1;
	$tdataadm_pagamento_avulso[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_pagamento_avulso[".add"] = true;
$tdataadm_pagamento_avulso[".afterAddAction"] = 1;
$tdataadm_pagamento_avulso[".closePopupAfterAdd"] = 1;
$tdataadm_pagamento_avulso[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_pagamento_avulso[".list"] = true;
}



$tdataadm_pagamento_avulso[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_pagamento_avulso[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_pagamento_avulso[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_pagamento_avulso[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_pagamento_avulso[".printFriendly"] = true;
}



$tdataadm_pagamento_avulso[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_pagamento_avulso[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_pagamento_avulso[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_pagamento_avulso[".isUseAjaxSuggest"] = true;

$tdataadm_pagamento_avulso[".rowHighlite"] = true;



																		

$tdataadm_pagamento_avulso[".ajaxCodeSnippetAdded"] = false;

$tdataadm_pagamento_avulso[".buttonsAdded"] = false;

$tdataadm_pagamento_avulso[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_pagamento_avulso[".isUseTimeForSearch"] = false;


$tdataadm_pagamento_avulso[".badgeColor"] = "c0c0c0";


$tdataadm_pagamento_avulso[".allSearchFields"] = array();
$tdataadm_pagamento_avulso[".filterFields"] = array();
$tdataadm_pagamento_avulso[".requiredSearchFields"] = array();

$tdataadm_pagamento_avulso[".googleLikeFields"] = array();
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "idPagAvulso";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Item1";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Valor1";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Item2";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Valor2";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Item3";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Valor3";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Item4";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Valor4";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Valor_TOTAL";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Link";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Data";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Fatura";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Status";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Forma_Pagamento";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "Observacao";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "idConsulta";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "idPaciente";
$tdataadm_pagamento_avulso[".googleLikeFields"][] = "idProfissional";



$tdataadm_pagamento_avulso[".tableType"] = "list";

$tdataadm_pagamento_avulso[".printerPageOrientation"] = 0;
$tdataadm_pagamento_avulso[".nPrinterPageScale"] = 100;

$tdataadm_pagamento_avulso[".nPrinterSplitRecords"] = 40;

$tdataadm_pagamento_avulso[".geocodingEnabled"] = false;










$tdataadm_pagamento_avulso[".pageSize"] = 20;

$tdataadm_pagamento_avulso[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_pagamento_avulso[".strOrderBy"] = $tstrOrderBy;

$tdataadm_pagamento_avulso[".orderindexes"] = array();


$tdataadm_pagamento_avulso[".sqlHead"] = "SELECT idPagAvulso,  	Item1,  	Valor1,  	Item2,  	Valor2,  	Item3,  	Valor3,  	Item4,  	Valor4,  	Valor_TOTAL,  	Link,  	`Data`,  	Fatura,  	Status,  	Forma_Pagamento,  	Observacao,  	idConsulta,  	idPaciente,  	idProfissional";
$tdataadm_pagamento_avulso[".sqlFrom"] = "FROM adm_pagamento_avulso";
$tdataadm_pagamento_avulso[".sqlWhereExpr"] = "";
$tdataadm_pagamento_avulso[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_pagamento_avulso[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_pagamento_avulso[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_pagamento_avulso[".highlightSearchResults"] = true;

$tableKeysadm_pagamento_avulso = array();
$tableKeysadm_pagamento_avulso[] = "idPagAvulso";
$tdataadm_pagamento_avulso[".Keys"] = $tableKeysadm_pagamento_avulso;


$tdataadm_pagamento_avulso[".hideMobileList"] = array();




//	idPagAvulso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idPagAvulso";
	$fdata["GoodName"] = "idPagAvulso";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","idPagAvulso");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idPagAvulso";

		$fdata["sourceSingle"] = "idPagAvulso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPagAvulso";

	
	
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


	$tdataadm_pagamento_avulso["idPagAvulso"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "idPagAvulso";
//	Item1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Item1";
	$fdata["GoodName"] = "Item1";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Item1");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Item1";

		$fdata["sourceSingle"] = "Item1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Item1";

	
	
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


	$tdataadm_pagamento_avulso["Item1"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Item1";
//	Valor1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor1";
	$fdata["GoodName"] = "Valor1";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Valor1");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor1";

		$fdata["sourceSingle"] = "Valor1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor1";

	
	
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


	$tdataadm_pagamento_avulso["Valor1"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Valor1";
//	Item2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Item2";
	$fdata["GoodName"] = "Item2";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Item2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Item2";

		$fdata["sourceSingle"] = "Item2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Item2";

	
	
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


	$tdataadm_pagamento_avulso["Item2"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Item2";
//	Valor2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Valor2";
	$fdata["GoodName"] = "Valor2";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Valor2");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor2";

		$fdata["sourceSingle"] = "Valor2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor2";

	
	
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


	$tdataadm_pagamento_avulso["Valor2"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Valor2";
//	Item3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Item3";
	$fdata["GoodName"] = "Item3";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Item3");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Item3";

		$fdata["sourceSingle"] = "Item3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Item3";

	
	
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


	$tdataadm_pagamento_avulso["Item3"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Item3";
//	Valor3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Valor3";
	$fdata["GoodName"] = "Valor3";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Valor3");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor3";

		$fdata["sourceSingle"] = "Valor3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor3";

	
	
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


	$tdataadm_pagamento_avulso["Valor3"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Valor3";
//	Item4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Item4";
	$fdata["GoodName"] = "Item4";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Item4");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Item4";

		$fdata["sourceSingle"] = "Item4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Item4";

	
	
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


	$tdataadm_pagamento_avulso["Item4"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Item4";
//	Valor4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Valor4";
	$fdata["GoodName"] = "Valor4";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Valor4");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor4";

		$fdata["sourceSingle"] = "Valor4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor4";

	
	
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


	$tdataadm_pagamento_avulso["Valor4"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Valor4";
//	Valor_TOTAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Valor_TOTAL";
	$fdata["GoodName"] = "Valor_TOTAL";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Valor_TOTAL");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor_TOTAL";

		$fdata["sourceSingle"] = "Valor_TOTAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor_TOTAL";

	
	
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


	$tdataadm_pagamento_avulso["Valor_TOTAL"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Valor_TOTAL";
//	Link
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Link";
	$fdata["GoodName"] = "Link";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Link");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Link";

		$fdata["sourceSingle"] = "Link";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Link";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Pagar";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
		
	
	
	
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


	$tdataadm_pagamento_avulso["Link"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Link";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Data");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Data";

		$fdata["sourceSingle"] = "Data";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Data`";

	
	
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


	$tdataadm_pagamento_avulso["Data"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Data";
//	Fatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Fatura";
	$fdata["GoodName"] = "Fatura";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Fatura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fatura";

		$fdata["sourceSingle"] = "Fatura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fatura";

	
	
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


	$tdataadm_pagamento_avulso["Fatura"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Fatura";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Aberto";
	$edata["LookupValues"][] = "Pago";

	
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


	$tdataadm_pagamento_avulso["Status"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Status";
//	Forma_Pagamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Forma_Pagamento";
	$fdata["GoodName"] = "Forma_Pagamento";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Forma_Pagamento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Forma_Pagamento";

		$fdata["sourceSingle"] = "Forma_Pagamento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Forma_Pagamento";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Dinheiro";
	$edata["LookupValues"][] = "Cartao";
	$edata["LookupValues"][] = "Debito";
	$edata["LookupValues"][] = "Pix";
	$edata["LookupValues"][] = "TED";
	$edata["LookupValues"][] = "DOC";
	$edata["LookupValues"][] = "Mensal";
	$edata["LookupValues"][] = "Convenio";

	
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


	$tdataadm_pagamento_avulso["Forma_Pagamento"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Forma_Pagamento";
//	Observacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Observacao";
	$fdata["GoodName"] = "Observacao";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","Observacao");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observacao";

		$fdata["sourceSingle"] = "Observacao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacao";

	
	
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

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataadm_pagamento_avulso["Observacao"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "Observacao";
//	idConsulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "idConsulta";
	$fdata["GoodName"] = "idConsulta";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","idConsulta");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idConsulta";

		$fdata["sourceSingle"] = "idConsulta";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idConsulta";

	
	
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


	$tdataadm_pagamento_avulso["idConsulta"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "idConsulta";
//	idPaciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "idPaciente";
	$fdata["GoodName"] = "idPaciente";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","idPaciente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idPaciente";

		$fdata["sourceSingle"] = "idPaciente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPaciente";

	
	
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


	$tdataadm_pagamento_avulso["idPaciente"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "idPaciente";
//	idProfissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "idProfissional";
	$fdata["GoodName"] = "idProfissional";
	$fdata["ownerTable"] = "adm_pagamento_avulso";
	$fdata["Label"] = GetFieldLabel("adm_pagamento_avulso","idProfissional");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idProfissional";

		$fdata["sourceSingle"] = "idProfissional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idProfissional";

	
	
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


	$tdataadm_pagamento_avulso["idProfissional"] = $fdata;
		$tdataadm_pagamento_avulso[".searchableFields"][] = "idProfissional";


$tables_data["adm_pagamento_avulso"]=&$tdataadm_pagamento_avulso;
$field_labels["adm_pagamento_avulso"] = &$fieldLabelsadm_pagamento_avulso;
$fieldToolTips["adm_pagamento_avulso"] = &$fieldToolTipsadm_pagamento_avulso;
$placeHolders["adm_pagamento_avulso"] = &$placeHoldersadm_pagamento_avulso;
$page_titles["adm_pagamento_avulso"] = &$pageTitlesadm_pagamento_avulso;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_pagamento_avulso"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_pagamento_avulso"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_pacientes1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_pagamento_avulso"][0] = $masterParams;
				$masterTablesData["adm_pagamento_avulso"][0]["masterKeys"] = array();
	$masterTablesData["adm_pagamento_avulso"][0]["masterKeys"][]="idPaciente";
				$masterTablesData["adm_pagamento_avulso"][0]["detailKeys"] = array();
	$masterTablesData["adm_pagamento_avulso"][0]["detailKeys"][]="idPaciente";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_agenda_1";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_agenda_1";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_agenda_1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_pagamento_avulso"][1] = $masterParams;
				$masterTablesData["adm_pagamento_avulso"][1]["masterKeys"] = array();
	$masterTablesData["adm_pagamento_avulso"][1]["masterKeys"][]="age_id";
				$masterTablesData["adm_pagamento_avulso"][1]["detailKeys"] = array();
	$masterTablesData["adm_pagamento_avulso"][1]["detailKeys"][]="idConsulta";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_pagamento_avulso()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idPagAvulso,  	Item1,  	Valor1,  	Item2,  	Valor2,  	Item3,  	Valor3,  	Item4,  	Valor4,  	Valor_TOTAL,  	Link,  	`Data`,  	Fatura,  	Status,  	Forma_Pagamento,  	Observacao,  	idConsulta,  	idPaciente,  	idProfissional";
$proto0["m_strFrom"] = "FROM adm_pagamento_avulso";
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
	"m_strName" => "idPagAvulso",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto6["m_sql"] = "idPagAvulso";
$proto6["m_srcTableName"] = "adm_pagamento_avulso";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Item1",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto8["m_sql"] = "Item1";
$proto8["m_srcTableName"] = "adm_pagamento_avulso";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor1",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto10["m_sql"] = "Valor1";
$proto10["m_srcTableName"] = "adm_pagamento_avulso";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Item2",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto12["m_sql"] = "Item2";
$proto12["m_srcTableName"] = "adm_pagamento_avulso";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor2",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto14["m_sql"] = "Valor2";
$proto14["m_srcTableName"] = "adm_pagamento_avulso";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Item3",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto16["m_sql"] = "Item3";
$proto16["m_srcTableName"] = "adm_pagamento_avulso";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor3",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto18["m_sql"] = "Valor3";
$proto18["m_srcTableName"] = "adm_pagamento_avulso";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Item4",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto20["m_sql"] = "Item4";
$proto20["m_srcTableName"] = "adm_pagamento_avulso";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor4",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto22["m_sql"] = "Valor4";
$proto22["m_srcTableName"] = "adm_pagamento_avulso";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_TOTAL",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto24["m_sql"] = "Valor_TOTAL";
$proto24["m_srcTableName"] = "adm_pagamento_avulso";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Link",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto26["m_sql"] = "Link";
$proto26["m_srcTableName"] = "adm_pagamento_avulso";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto28["m_sql"] = "`Data`";
$proto28["m_srcTableName"] = "adm_pagamento_avulso";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Fatura",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto30["m_sql"] = "Fatura";
$proto30["m_srcTableName"] = "adm_pagamento_avulso";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto32["m_sql"] = "Status";
$proto32["m_srcTableName"] = "adm_pagamento_avulso";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Forma_Pagamento",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto34["m_sql"] = "Forma_Pagamento";
$proto34["m_srcTableName"] = "adm_pagamento_avulso";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacao",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto36["m_sql"] = "Observacao";
$proto36["m_srcTableName"] = "adm_pagamento_avulso";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "idConsulta",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto38["m_sql"] = "idConsulta";
$proto38["m_srcTableName"] = "adm_pagamento_avulso";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "idPaciente",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto40["m_sql"] = "idPaciente";
$proto40["m_srcTableName"] = "adm_pagamento_avulso";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfissional",
	"m_strTable" => "adm_pagamento_avulso",
	"m_srcTableName" => "adm_pagamento_avulso"
));

$proto42["m_sql"] = "idProfissional";
$proto42["m_srcTableName"] = "adm_pagamento_avulso";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto44=array();
$proto44["m_link"] = "SQLL_MAIN";
			$proto45=array();
$proto45["m_strName"] = "adm_pagamento_avulso";
$proto45["m_srcTableName"] = "adm_pagamento_avulso";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "idPagAvulso";
$proto45["m_columns"][] = "Item1";
$proto45["m_columns"][] = "Valor1";
$proto45["m_columns"][] = "Item2";
$proto45["m_columns"][] = "Valor2";
$proto45["m_columns"][] = "Item3";
$proto45["m_columns"][] = "Valor3";
$proto45["m_columns"][] = "Item4";
$proto45["m_columns"][] = "Valor4";
$proto45["m_columns"][] = "Valor_TOTAL";
$proto45["m_columns"][] = "Link";
$proto45["m_columns"][] = "Data";
$proto45["m_columns"][] = "Fatura";
$proto45["m_columns"][] = "Status";
$proto45["m_columns"][] = "Forma_Pagamento";
$proto45["m_columns"][] = "Observacao";
$proto45["m_columns"][] = "idConsulta";
$proto45["m_columns"][] = "idPaciente";
$proto45["m_columns"][] = "idProfissional";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "adm_pagamento_avulso";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "adm_pagamento_avulso";
$proto46=array();
$proto46["m_sql"] = "";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_pagamento_avulso";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_pagamento_avulso = createSqlQuery_adm_pagamento_avulso();


	
		;

																			

$tdataadm_pagamento_avulso[".sqlquery"] = $queryData_adm_pagamento_avulso;



$tableEvents["adm_pagamento_avulso"] = new eventsBase;
$tdataadm_pagamento_avulso[".hasEvents"] = false;

?>