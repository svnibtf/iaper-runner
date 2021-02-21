<?php
$tdataadm_campos_paciente = array();
$tdataadm_campos_paciente[".searchableFields"] = array();
$tdataadm_campos_paciente[".ShortName"] = "adm_campos_paciente";
$tdataadm_campos_paciente[".OwnerID"] = "";
$tdataadm_campos_paciente[".OriginalTable"] = "adm_campos_paciente";


$tdataadm_campos_paciente[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataadm_campos_paciente[".originalPagesByType"] = $tdataadm_campos_paciente[".pagesByType"];
$tdataadm_campos_paciente[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataadm_campos_paciente[".originalPages"] = $tdataadm_campos_paciente[".pages"];
$tdataadm_campos_paciente[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataadm_campos_paciente[".originalDefaultPages"] = $tdataadm_campos_paciente[".defaultPages"];

//	field labels
$fieldLabelsadm_campos_paciente = array();
$fieldToolTipsadm_campos_paciente = array();
$pageTitlesadm_campos_paciente = array();
$placeHoldersadm_campos_paciente = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_campos_paciente["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"] = array();
	$placeHoldersadm_campos_paciente["Portuguese(Brazil)"] = array();
	$pageTitlesadm_campos_paciente["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_campos_paciente["Portuguese(Brazil)"]["idCampoPaciente"] = "Paciente";
	$fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"]["idCampoPaciente"] = "";
	$placeHoldersadm_campos_paciente["Portuguese(Brazil)"]["idCampoPaciente"] = "";
	$fieldLabelsadm_campos_paciente["Portuguese(Brazil)"]["Campo"] = "Pergunta";
	$fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"]["Campo"] = "";
	$placeHoldersadm_campos_paciente["Portuguese(Brazil)"]["Campo"] = "";
	$fieldLabelsadm_campos_paciente["Portuguese(Brazil)"]["idProfissional"] = "Profissional";
	$fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"]["idProfissional"] = "";
	$placeHoldersadm_campos_paciente["Portuguese(Brazil)"]["idProfissional"] = "";
	$fieldLabelsadm_campos_paciente["Portuguese(Brazil)"]["Valor"] = "Resposta";
	$fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersadm_campos_paciente["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsadm_campos_paciente["Portuguese(Brazil)"]["Paciente"] = "Paciente";
	$fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"]["Paciente"] = "";
	$placeHoldersadm_campos_paciente["Portuguese(Brazil)"]["Paciente"] = "";
	if (count($fieldToolTipsadm_campos_paciente["Portuguese(Brazil)"]))
		$tdataadm_campos_paciente[".isUseToolTips"] = true;
}


	$tdataadm_campos_paciente[".NCSearch"] = true;



$tdataadm_campos_paciente[".shortTableName"] = "adm_campos_paciente";
$tdataadm_campos_paciente[".nSecOptions"] = 0;

$tdataadm_campos_paciente[".mainTableOwnerID"] = "";
$tdataadm_campos_paciente[".entityType"] = 0;
$tdataadm_campos_paciente[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_campos_paciente[".strOriginalTableName"] = "adm_campos_paciente";

	



$tdataadm_campos_paciente[".showAddInPopup"] = false;

$tdataadm_campos_paciente[".showEditInPopup"] = false;

$tdataadm_campos_paciente[".showViewInPopup"] = false;

$tdataadm_campos_paciente[".listAjax"] = false;
//	temporary
//$tdataadm_campos_paciente[".listAjax"] = false;

	$tdataadm_campos_paciente[".audit"] = false;

	$tdataadm_campos_paciente[".locking"] = false;


$pages = $tdataadm_campos_paciente[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_campos_paciente[".edit"] = true;
	$tdataadm_campos_paciente[".afterEditAction"] = 1;
	$tdataadm_campos_paciente[".closePopupAfterEdit"] = 1;
	$tdataadm_campos_paciente[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_campos_paciente[".add"] = true;
$tdataadm_campos_paciente[".afterAddAction"] = 1;
$tdataadm_campos_paciente[".closePopupAfterAdd"] = 1;
$tdataadm_campos_paciente[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_campos_paciente[".list"] = true;
}



$tdataadm_campos_paciente[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_campos_paciente[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_campos_paciente[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_campos_paciente[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_campos_paciente[".printFriendly"] = true;
}



$tdataadm_campos_paciente[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_campos_paciente[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_campos_paciente[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_campos_paciente[".isUseAjaxSuggest"] = true;

$tdataadm_campos_paciente[".rowHighlite"] = true;



												

$tdataadm_campos_paciente[".ajaxCodeSnippetAdded"] = false;

$tdataadm_campos_paciente[".buttonsAdded"] = false;

$tdataadm_campos_paciente[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_campos_paciente[".isUseTimeForSearch"] = false;


$tdataadm_campos_paciente[".badgeColor"] = "c0c0c0";


$tdataadm_campos_paciente[".allSearchFields"] = array();
$tdataadm_campos_paciente[".filterFields"] = array();
$tdataadm_campos_paciente[".requiredSearchFields"] = array();

$tdataadm_campos_paciente[".googleLikeFields"] = array();
$tdataadm_campos_paciente[".googleLikeFields"][] = "idCampoPaciente";
$tdataadm_campos_paciente[".googleLikeFields"][] = "Campo";
$tdataadm_campos_paciente[".googleLikeFields"][] = "idProfissional";
$tdataadm_campos_paciente[".googleLikeFields"][] = "Valor";
$tdataadm_campos_paciente[".googleLikeFields"][] = "Paciente";



$tdataadm_campos_paciente[".tableType"] = "list";

$tdataadm_campos_paciente[".printerPageOrientation"] = 0;
$tdataadm_campos_paciente[".nPrinterPageScale"] = 100;

$tdataadm_campos_paciente[".nPrinterSplitRecords"] = 40;

$tdataadm_campos_paciente[".geocodingEnabled"] = false;










$tdataadm_campos_paciente[".pageSize"] = 20;

$tdataadm_campos_paciente[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_campos_paciente[".strOrderBy"] = $tstrOrderBy;

$tdataadm_campos_paciente[".orderindexes"] = array();


$tdataadm_campos_paciente[".sqlHead"] = "SELECT idCampoPaciente,  	Campo,  	idProfissional,  	Valor,  	Paciente";
$tdataadm_campos_paciente[".sqlFrom"] = "FROM adm_campos_paciente";
$tdataadm_campos_paciente[".sqlWhereExpr"] = "";
$tdataadm_campos_paciente[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_campos_paciente[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_campos_paciente[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_campos_paciente[".highlightSearchResults"] = true;

$tableKeysadm_campos_paciente = array();
$tableKeysadm_campos_paciente[] = "idCampoPaciente";
$tdataadm_campos_paciente[".Keys"] = $tableKeysadm_campos_paciente;


$tdataadm_campos_paciente[".hideMobileList"] = array();




//	idCampoPaciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCampoPaciente";
	$fdata["GoodName"] = "idCampoPaciente";
	$fdata["ownerTable"] = "adm_campos_paciente";
	$fdata["Label"] = GetFieldLabel("adm_campos_paciente","idCampoPaciente");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idCampoPaciente";

		$fdata["sourceSingle"] = "idCampoPaciente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCampoPaciente";

	
	
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


	$tdataadm_campos_paciente["idCampoPaciente"] = $fdata;
		$tdataadm_campos_paciente[".searchableFields"][] = "idCampoPaciente";
//	Campo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Campo";
	$fdata["GoodName"] = "Campo";
	$fdata["ownerTable"] = "adm_campos_paciente";
	$fdata["Label"] = GetFieldLabel("adm_campos_paciente","Campo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Campo";

		$fdata["sourceSingle"] = "Campo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Campo";

	
	
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
	$edata["LookupTable"] = "adm_campos_adicionais";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idCampo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Campo";

	

	
	$edata["LookupOrderBy"] = "Campo";

	
	
	
	

	
	
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


	$tdataadm_campos_paciente["Campo"] = $fdata;
		$tdataadm_campos_paciente[".searchableFields"][] = "Campo";
//	idProfissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idProfissional";
	$fdata["GoodName"] = "idProfissional";
	$fdata["ownerTable"] = "adm_campos_paciente";
	$fdata["Label"] = GetFieldLabel("adm_campos_paciente","idProfissional");
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


	$tdataadm_campos_paciente["idProfissional"] = $fdata;
		$tdataadm_campos_paciente[".searchableFields"][] = "idProfissional";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "adm_campos_paciente";
	$fdata["Label"] = GetFieldLabel("adm_campos_paciente","Valor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
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


	$tdataadm_campos_paciente["Valor"] = $fdata;
		$tdataadm_campos_paciente[".searchableFields"][] = "Valor";
//	Paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Paciente";
	$fdata["GoodName"] = "Paciente";
	$fdata["ownerTable"] = "adm_campos_paciente";
	$fdata["Label"] = GetFieldLabel("adm_campos_paciente","Paciente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Paciente";

		$fdata["sourceSingle"] = "Paciente";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Paciente";

	
	
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
	$edata["LookupTable"] = "adm_pacientes";
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


	$tdataadm_campos_paciente["Paciente"] = $fdata;
		$tdataadm_campos_paciente[".searchableFields"][] = "Paciente";


$tables_data["adm_campos_paciente"]=&$tdataadm_campos_paciente;
$field_labels["adm_campos_paciente"] = &$fieldLabelsadm_campos_paciente;
$fieldToolTips["adm_campos_paciente"] = &$fieldToolTipsadm_campos_paciente;
$placeHolders["adm_campos_paciente"] = &$placeHoldersadm_campos_paciente;
$page_titles["adm_campos_paciente"] = &$pageTitlesadm_campos_paciente;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_campos_paciente"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_campos_paciente"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_pacientes1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_campos_paciente"][0] = $masterParams;
				$masterTablesData["adm_campos_paciente"][0]["masterKeys"] = array();
	$masterTablesData["adm_campos_paciente"][0]["masterKeys"][]="idPaciente";
				$masterTablesData["adm_campos_paciente"][0]["detailKeys"] = array();
	$masterTablesData["adm_campos_paciente"][0]["detailKeys"][]="Paciente";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_campos_paciente()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCampoPaciente,  	Campo,  	idProfissional,  	Valor,  	Paciente";
$proto0["m_strFrom"] = "FROM adm_campos_paciente";
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
	"m_strName" => "idCampoPaciente",
	"m_strTable" => "adm_campos_paciente",
	"m_srcTableName" => "adm_campos_paciente"
));

$proto6["m_sql"] = "idCampoPaciente";
$proto6["m_srcTableName"] = "adm_campos_paciente";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Campo",
	"m_strTable" => "adm_campos_paciente",
	"m_srcTableName" => "adm_campos_paciente"
));

$proto8["m_sql"] = "Campo";
$proto8["m_srcTableName"] = "adm_campos_paciente";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfissional",
	"m_strTable" => "adm_campos_paciente",
	"m_srcTableName" => "adm_campos_paciente"
));

$proto10["m_sql"] = "idProfissional";
$proto10["m_srcTableName"] = "adm_campos_paciente";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "adm_campos_paciente",
	"m_srcTableName" => "adm_campos_paciente"
));

$proto12["m_sql"] = "Valor";
$proto12["m_srcTableName"] = "adm_campos_paciente";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Paciente",
	"m_strTable" => "adm_campos_paciente",
	"m_srcTableName" => "adm_campos_paciente"
));

$proto14["m_sql"] = "Paciente";
$proto14["m_srcTableName"] = "adm_campos_paciente";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "adm_campos_paciente";
$proto17["m_srcTableName"] = "adm_campos_paciente";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idCampoPaciente";
$proto17["m_columns"][] = "Campo";
$proto17["m_columns"][] = "idProfissional";
$proto17["m_columns"][] = "Valor";
$proto17["m_columns"][] = "Paciente";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "adm_campos_paciente";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "adm_campos_paciente";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_campos_paciente";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_campos_paciente = createSqlQuery_adm_campos_paciente();


	
		;

					

$tdataadm_campos_paciente[".sqlquery"] = $queryData_adm_campos_paciente;



$tableEvents["adm_campos_paciente"] = new eventsBase;
$tdataadm_campos_paciente[".hasEvents"] = false;

?>