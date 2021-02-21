<?php
$tdatatratamento = array();
$tdatatratamento[".searchableFields"] = array();
$tdatatratamento[".ShortName"] = "tratamento";
$tdatatratamento[".OwnerID"] = "";
$tdatatratamento[".OriginalTable"] = "tratamento";


$tdatatratamento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatratamento[".originalPagesByType"] = $tdatatratamento[".pagesByType"];
$tdatatratamento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatratamento[".originalPages"] = $tdatatratamento[".pages"];
$tdatatratamento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatratamento[".originalDefaultPages"] = $tdatatratamento[".defaultPages"];

//	field labels
$fieldLabelstratamento = array();
$fieldToolTipstratamento = array();
$pageTitlestratamento = array();
$placeHolderstratamento = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstratamento["Portuguese(Brazil)"] = array();
	$fieldToolTipstratamento["Portuguese(Brazil)"] = array();
	$placeHolderstratamento["Portuguese(Brazil)"] = array();
	$pageTitlestratamento["Portuguese(Brazil)"] = array();
	$fieldLabelstratamento["Portuguese(Brazil)"]["idTratamento"] = "Id Tratamento";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["idTratamento"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["idTratamento"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["idPaciente"] = "Paciente";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["idPaciente"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["idPaciente"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["idProfissional"] = "Id Profissional";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["idProfissional"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["idProfissional"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Data"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Confirmado"] = "Confirmado";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Confirmado"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Confirmado"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Pago"] = "Pago";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Pago"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Pago"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Forma_Pagamento"] = "Forma Pagamento";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Forma_Pagamento"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Forma_Pagamento"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Observacoes"] = "Observacoes";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Observacoes"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Observacoes"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Prescricao"] = "Prescricao";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Prescricao"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Prescricao"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Online"] = "Online";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Online"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Online"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Link_Consulta"] = "Link Consulta";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Link_Consulta"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Link_Consulta"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Hora"] = "Hora";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Hora"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Hora"] = "";
	$fieldLabelstratamento["Portuguese(Brazil)"]["Valor_Consulta"] = "Valor Consulta";
	$fieldToolTipstratamento["Portuguese(Brazil)"]["Valor_Consulta"] = "";
	$placeHolderstratamento["Portuguese(Brazil)"]["Valor_Consulta"] = "";
	if (count($fieldToolTipstratamento["Portuguese(Brazil)"]))
		$tdatatratamento[".isUseToolTips"] = true;
}


	$tdatatratamento[".NCSearch"] = true;



$tdatatratamento[".shortTableName"] = "tratamento";
$tdatatratamento[".nSecOptions"] = 0;

$tdatatratamento[".mainTableOwnerID"] = "";
$tdatatratamento[".entityType"] = 0;
$tdatatratamento[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatatratamento[".strOriginalTableName"] = "tratamento";

	



$tdatatratamento[".showAddInPopup"] = false;

$tdatatratamento[".showEditInPopup"] = false;

$tdatatratamento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatratamento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatratamento[".listAjax"] = false;
//	temporary
//$tdatatratamento[".listAjax"] = false;

	$tdatatratamento[".audit"] = false;

	$tdatatratamento[".locking"] = false;


$pages = $tdatatratamento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatratamento[".edit"] = true;
	$tdatatratamento[".afterEditAction"] = 0;
	$tdatatratamento[".closePopupAfterEdit"] = 1;
	$tdatatratamento[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatratamento[".add"] = true;
$tdatatratamento[".afterAddAction"] = 0;
$tdatatratamento[".closePopupAfterAdd"] = 1;
$tdatatratamento[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatatratamento[".list"] = true;
}



$tdatatratamento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatratamento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatratamento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatratamento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatratamento[".printFriendly"] = true;
}



$tdatatratamento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatratamento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatratamento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatratamento[".isUseAjaxSuggest"] = true;

$tdatatratamento[".rowHighlite"] = true;





$tdatatratamento[".ajaxCodeSnippetAdded"] = false;

$tdatatratamento[".buttonsAdded"] = false;

$tdatatratamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatratamento[".isUseTimeForSearch"] = false;


$tdatatratamento[".badgeColor"] = "c0c0c0";


$tdatatratamento[".allSearchFields"] = array();
$tdatatratamento[".filterFields"] = array();
$tdatatratamento[".requiredSearchFields"] = array();

$tdatatratamento[".googleLikeFields"] = array();
$tdatatratamento[".googleLikeFields"][] = "idTratamento";
$tdatatratamento[".googleLikeFields"][] = "idPaciente";
$tdatatratamento[".googleLikeFields"][] = "idProfissional";
$tdatatratamento[".googleLikeFields"][] = "Data";
$tdatatratamento[".googleLikeFields"][] = "Confirmado";
$tdatatratamento[".googleLikeFields"][] = "Pago";
$tdatatratamento[".googleLikeFields"][] = "Forma_Pagamento";
$tdatatratamento[".googleLikeFields"][] = "Observacoes";
$tdatatratamento[".googleLikeFields"][] = "Prescricao";
$tdatatratamento[".googleLikeFields"][] = "Online";
$tdatatratamento[".googleLikeFields"][] = "Link Consulta";
$tdatatratamento[".googleLikeFields"][] = "Hora";
$tdatatratamento[".googleLikeFields"][] = "Valor_Consulta";



$tdatatratamento[".tableType"] = "list";

$tdatatratamento[".printerPageOrientation"] = 0;
$tdatatratamento[".nPrinterPageScale"] = 100;

$tdatatratamento[".nPrinterSplitRecords"] = 40;

$tdatatratamento[".geocodingEnabled"] = false;










$tdatatratamento[".pageSize"] = 20;

$tdatatratamento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatratamento[".strOrderBy"] = $tstrOrderBy;

$tdatatratamento[".orderindexes"] = array();


$tdatatratamento[".sqlHead"] = "SELECT idTratamento,  	idPaciente,  	idProfissional,  	`Data`,  	Confirmado,  	Pago,  	Forma_Pagamento,  	Observacoes,  	Prescricao,  	`Online`,  	`Link Consulta`,  	Hora,  	Valor_Consulta";
$tdatatratamento[".sqlFrom"] = "FROM tratamento";
$tdatatratamento[".sqlWhereExpr"] = "";
$tdatatratamento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatratamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatratamento[".arrGroupsPerPage"] = $arrGPP;

$tdatatratamento[".highlightSearchResults"] = true;

$tableKeystratamento = array();
$tableKeystratamento[] = "idTratamento";
$tdatatratamento[".Keys"] = $tableKeystratamento;


$tdatatratamento[".hideMobileList"] = array();




//	idTratamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTratamento";
	$fdata["GoodName"] = "idTratamento";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","idTratamento");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idTratamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTratamento";

	
	
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


	$tdatatratamento["idTratamento"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "idTratamento";
//	idPaciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idPaciente";
	$fdata["GoodName"] = "idPaciente";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","idPaciente");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idPaciente";

	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pacientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idPaciente";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
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


	$tdatatratamento["idPaciente"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "idPaciente";
//	idProfissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idProfissional";
	$fdata["GoodName"] = "idProfissional";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","idProfissional");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idProfissional";

	
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


	$tdatatratamento["idProfissional"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "idProfissional";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Data");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Data";

	
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


	$tdatatratamento["Data"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Data";
//	Confirmado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Confirmado";
	$fdata["GoodName"] = "Confirmado";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Confirmado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Confirmado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Confirmado";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "S";
	$edata["LookupValues"][] = "N";

	
	
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


	$tdatatratamento["Confirmado"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Confirmado";
//	Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Pago";
	$fdata["GoodName"] = "Pago";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Pago");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Pago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pago";

	
	
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "S";
	$edata["LookupValues"][] = "N";

	
	
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


	$tdatatratamento["Pago"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Pago";
//	Forma_Pagamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Forma_Pagamento";
	$fdata["GoodName"] = "Forma_Pagamento";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Forma_Pagamento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Forma_Pagamento";

	
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


	$tdatatratamento["Forma_Pagamento"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Forma_Pagamento";
//	Observacoes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Observacoes";
	$fdata["GoodName"] = "Observacoes";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Observacoes");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Observacoes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacoes";

	
	
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


	$tdatatratamento["Observacoes"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Observacoes";
//	Prescricao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Prescricao";
	$fdata["GoodName"] = "Prescricao";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Prescricao");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Prescricao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Prescricao";

	
	
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


	$tdatatratamento["Prescricao"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Prescricao";
//	Online
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Online";
	$fdata["GoodName"] = "Online";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Online");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Online";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Online`";

	
	
			
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
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "S";
	$edata["LookupValues"][] = "N";

	
	
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


	$tdatatratamento["Online"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Online";
//	Link Consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Link Consulta";
	$fdata["GoodName"] = "Link_Consulta";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Link_Consulta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Link Consulta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Link Consulta`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link da Consulta";
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatatratamento["Link Consulta"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Link Consulta";
//	Hora
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Hora";
	$fdata["GoodName"] = "Hora";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Hora");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Hora";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hora";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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
		$fdata["filterTotalFields"] = "idTratamento";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

	
	
	
//end of Filters settings


	$tdatatratamento["Hora"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Hora";
//	Valor_Consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Valor_Consulta";
	$fdata["GoodName"] = "Valor_Consulta";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("tratamento","Valor_Consulta");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor_Consulta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor_Consulta";

	
	
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


	$tdatatratamento["Valor_Consulta"] = $fdata;
		$tdatatratamento[".searchableFields"][] = "Valor_Consulta";


$tables_data["tratamento"]=&$tdatatratamento;
$field_labels["tratamento"] = &$fieldLabelstratamento;
$fieldToolTips["tratamento"] = &$fieldToolTipstratamento;
$placeHolders["tratamento"] = &$placeHolderstratamento;
$page_titles["tratamento"] = &$pageTitlestratamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tratamento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tratamento"] = array();



	
				$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tratamento"][0] = $masterParams;
				$masterTablesData["tratamento"][0]["masterKeys"] = array();
	$masterTablesData["tratamento"][0]["masterKeys"][]="usu_id";
				$masterTablesData["tratamento"][0]["detailKeys"] = array();
	$masterTablesData["tratamento"][0]["detailKeys"][]="idProfissional";
		
	
				$strOriginalDetailsTable="pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "pacientes";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tratamento"][1] = $masterParams;
				$masterTablesData["tratamento"][1]["masterKeys"] = array();
	$masterTablesData["tratamento"][1]["masterKeys"][]="idPaciente";
				$masterTablesData["tratamento"][1]["detailKeys"] = array();
	$masterTablesData["tratamento"][1]["detailKeys"][]="idPaciente";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tratamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTratamento,  	idPaciente,  	idProfissional,  	`Data`,  	Confirmado,  	Pago,  	Forma_Pagamento,  	Observacoes,  	Prescricao,  	`Online`,  	`Link Consulta`,  	Hora,  	Valor_Consulta";
$proto0["m_strFrom"] = "FROM tratamento";
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
	"m_strName" => "idTratamento",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto6["m_sql"] = "idTratamento";
$proto6["m_srcTableName"] = "tratamento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idPaciente",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto8["m_sql"] = "idPaciente";
$proto8["m_srcTableName"] = "tratamento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfissional",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto10["m_sql"] = "idProfissional";
$proto10["m_srcTableName"] = "tratamento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto12["m_sql"] = "`Data`";
$proto12["m_srcTableName"] = "tratamento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Confirmado",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto14["m_sql"] = "Confirmado";
$proto14["m_srcTableName"] = "tratamento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Pago",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto16["m_sql"] = "Pago";
$proto16["m_srcTableName"] = "tratamento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Forma_Pagamento",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto18["m_sql"] = "Forma_Pagamento";
$proto18["m_srcTableName"] = "tratamento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacoes",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto20["m_sql"] = "Observacoes";
$proto20["m_srcTableName"] = "tratamento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Prescricao",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto22["m_sql"] = "Prescricao";
$proto22["m_srcTableName"] = "tratamento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Online",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto24["m_sql"] = "`Online`";
$proto24["m_srcTableName"] = "tratamento";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Link Consulta",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto26["m_sql"] = "`Link Consulta`";
$proto26["m_srcTableName"] = "tratamento";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Hora",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto28["m_sql"] = "Hora";
$proto28["m_srcTableName"] = "tratamento";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor_Consulta",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "tratamento"
));

$proto30["m_sql"] = "Valor_Consulta";
$proto30["m_srcTableName"] = "tratamento";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tratamento";
$proto33["m_srcTableName"] = "tratamento";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "idTratamento";
$proto33["m_columns"][] = "idPaciente";
$proto33["m_columns"][] = "idProfissional";
$proto33["m_columns"][] = "Data";
$proto33["m_columns"][] = "Confirmado";
$proto33["m_columns"][] = "Pago";
$proto33["m_columns"][] = "Forma_Pagamento";
$proto33["m_columns"][] = "Observacoes";
$proto33["m_columns"][] = "Prescricao";
$proto33["m_columns"][] = "Online";
$proto33["m_columns"][] = "Link Consulta";
$proto33["m_columns"][] = "Hora";
$proto33["m_columns"][] = "Valor_Consulta";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tratamento";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tratamento";
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
$proto0["m_srcTableName"]="tratamento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tratamento = createSqlQuery_tratamento();


	
		;

													

$tdatatratamento[".sqlquery"] = $queryData_tratamento;



$tableEvents["tratamento"] = new eventsBase;
$tdatatratamento[".hasEvents"] = false;

?>