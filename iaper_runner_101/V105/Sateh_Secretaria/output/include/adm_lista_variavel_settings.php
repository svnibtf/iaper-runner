<?php
$tdataadm_lista_variavel = array();
$tdataadm_lista_variavel[".searchableFields"] = array();
$tdataadm_lista_variavel[".ShortName"] = "adm_lista_variavel";
$tdataadm_lista_variavel[".OwnerID"] = "";
$tdataadm_lista_variavel[".OriginalTable"] = "adm_lista_variavel";


$tdataadm_lista_variavel[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_lista_variavel[".originalPagesByType"] = $tdataadm_lista_variavel[".pagesByType"];
$tdataadm_lista_variavel[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_lista_variavel[".originalPages"] = $tdataadm_lista_variavel[".pages"];
$tdataadm_lista_variavel[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_lista_variavel[".originalDefaultPages"] = $tdataadm_lista_variavel[".defaultPages"];

//	field labels
$fieldLabelsadm_lista_variavel = array();
$fieldToolTipsadm_lista_variavel = array();
$pageTitlesadm_lista_variavel = array();
$placeHoldersadm_lista_variavel = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_lista_variavel["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"] = array();
	$placeHoldersadm_lista_variavel["Portuguese(Brazil)"] = array();
	$pageTitlesadm_lista_variavel["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_lista_variavel["Portuguese(Brazil)"]["idlistavariavel"] = "Idlistavariavel";
	$fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"]["idlistavariavel"] = "";
	$placeHoldersadm_lista_variavel["Portuguese(Brazil)"]["idlistavariavel"] = "";
	$fieldLabelsadm_lista_variavel["Portuguese(Brazil)"]["idCampo"] = "Campo";
	$fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"]["idCampo"] = "";
	$placeHoldersadm_lista_variavel["Portuguese(Brazil)"]["idCampo"] = "";
	$fieldLabelsadm_lista_variavel["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersadm_lista_variavel["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsadm_lista_variavel["Portuguese(Brazil)"]["Lista"] = "Lista";
	$fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"]["Lista"] = "";
	$placeHoldersadm_lista_variavel["Portuguese(Brazil)"]["Lista"] = "";
	$fieldLabelsadm_lista_variavel["Portuguese(Brazil)"]["Profissional"] = "Profissional";
	$fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"]["Profissional"] = "";
	$placeHoldersadm_lista_variavel["Portuguese(Brazil)"]["Profissional"] = "";
	if (count($fieldToolTipsadm_lista_variavel["Portuguese(Brazil)"]))
		$tdataadm_lista_variavel[".isUseToolTips"] = true;
}


	$tdataadm_lista_variavel[".NCSearch"] = true;



$tdataadm_lista_variavel[".shortTableName"] = "adm_lista_variavel";
$tdataadm_lista_variavel[".nSecOptions"] = 0;

$tdataadm_lista_variavel[".mainTableOwnerID"] = "";
$tdataadm_lista_variavel[".entityType"] = 0;
$tdataadm_lista_variavel[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_lista_variavel[".strOriginalTableName"] = "adm_lista_variavel";

	



$tdataadm_lista_variavel[".showAddInPopup"] = false;

$tdataadm_lista_variavel[".showEditInPopup"] = false;

$tdataadm_lista_variavel[".showViewInPopup"] = false;

$tdataadm_lista_variavel[".listAjax"] = false;
//	temporary
//$tdataadm_lista_variavel[".listAjax"] = false;

	$tdataadm_lista_variavel[".audit"] = false;

	$tdataadm_lista_variavel[".locking"] = false;


$pages = $tdataadm_lista_variavel[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_lista_variavel[".edit"] = true;
	$tdataadm_lista_variavel[".afterEditAction"] = 1;
	$tdataadm_lista_variavel[".closePopupAfterEdit"] = 1;
	$tdataadm_lista_variavel[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_lista_variavel[".add"] = true;
$tdataadm_lista_variavel[".afterAddAction"] = 1;
$tdataadm_lista_variavel[".closePopupAfterAdd"] = 1;
$tdataadm_lista_variavel[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_lista_variavel[".list"] = true;
}



$tdataadm_lista_variavel[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_lista_variavel[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_lista_variavel[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_lista_variavel[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_lista_variavel[".printFriendly"] = true;
}



$tdataadm_lista_variavel[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_lista_variavel[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_lista_variavel[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_lista_variavel[".isUseAjaxSuggest"] = true;

$tdataadm_lista_variavel[".rowHighlite"] = true;



																		

$tdataadm_lista_variavel[".ajaxCodeSnippetAdded"] = false;

$tdataadm_lista_variavel[".buttonsAdded"] = false;

$tdataadm_lista_variavel[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_lista_variavel[".isUseTimeForSearch"] = false;


$tdataadm_lista_variavel[".badgeColor"] = "c0c0c0";


$tdataadm_lista_variavel[".allSearchFields"] = array();
$tdataadm_lista_variavel[".filterFields"] = array();
$tdataadm_lista_variavel[".requiredSearchFields"] = array();

$tdataadm_lista_variavel[".googleLikeFields"] = array();
$tdataadm_lista_variavel[".googleLikeFields"][] = "idlistavariavel";
$tdataadm_lista_variavel[".googleLikeFields"][] = "idCampo";
$tdataadm_lista_variavel[".googleLikeFields"][] = "Valor";
$tdataadm_lista_variavel[".googleLikeFields"][] = "Lista";
$tdataadm_lista_variavel[".googleLikeFields"][] = "Profissional";



$tdataadm_lista_variavel[".tableType"] = "list";

$tdataadm_lista_variavel[".printerPageOrientation"] = 0;
$tdataadm_lista_variavel[".nPrinterPageScale"] = 100;

$tdataadm_lista_variavel[".nPrinterSplitRecords"] = 40;

$tdataadm_lista_variavel[".geocodingEnabled"] = false;










$tdataadm_lista_variavel[".pageSize"] = 20;

$tdataadm_lista_variavel[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_lista_variavel[".strOrderBy"] = $tstrOrderBy;

$tdataadm_lista_variavel[".orderindexes"] = array();


$tdataadm_lista_variavel[".sqlHead"] = "SELECT idlistavariavel,  	idCampo,  	Valor,  	Lista,  	Profissional";
$tdataadm_lista_variavel[".sqlFrom"] = "FROM adm_lista_variavel";
$tdataadm_lista_variavel[".sqlWhereExpr"] = "";
$tdataadm_lista_variavel[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_lista_variavel[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_lista_variavel[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_lista_variavel[".highlightSearchResults"] = true;

$tableKeysadm_lista_variavel = array();
$tableKeysadm_lista_variavel[] = "idlistavariavel";
$tdataadm_lista_variavel[".Keys"] = $tableKeysadm_lista_variavel;


$tdataadm_lista_variavel[".hideMobileList"] = array();




//	idlistavariavel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idlistavariavel";
	$fdata["GoodName"] = "idlistavariavel";
	$fdata["ownerTable"] = "adm_lista_variavel";
	$fdata["Label"] = GetFieldLabel("adm_lista_variavel","idlistavariavel");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idlistavariavel";

		$fdata["sourceSingle"] = "idlistavariavel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idlistavariavel";

	
	
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


	$tdataadm_lista_variavel["idlistavariavel"] = $fdata;
		$tdataadm_lista_variavel[".searchableFields"][] = "idlistavariavel";
//	idCampo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idCampo";
	$fdata["GoodName"] = "idCampo";
	$fdata["ownerTable"] = "adm_lista_variavel";
	$fdata["Label"] = GetFieldLabel("adm_lista_variavel","idCampo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idCampo";

		$fdata["sourceSingle"] = "idCampo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCampo";

	
	
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


	$tdataadm_lista_variavel["idCampo"] = $fdata;
		$tdataadm_lista_variavel[".searchableFields"][] = "idCampo";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "adm_lista_variavel";
	$fdata["Label"] = GetFieldLabel("adm_lista_variavel","Valor");
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataadm_lista_variavel["Valor"] = $fdata;
		$tdataadm_lista_variavel[".searchableFields"][] = "Valor";
//	Lista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Lista";
	$fdata["GoodName"] = "Lista";
	$fdata["ownerTable"] = "adm_lista_variavel";
	$fdata["Label"] = GetFieldLabel("adm_lista_variavel","Lista");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Lista";

		$fdata["sourceSingle"] = "Lista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lista";

	
	
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
	$edata["LookupTable"] = "adm_eventos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idLista";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Lista";

	

	
	$edata["LookupOrderBy"] = "Lista";

	
	
	
	

	
	
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


	$tdataadm_lista_variavel["Lista"] = $fdata;
		$tdataadm_lista_variavel[".searchableFields"][] = "Lista";
//	Profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Profissional";
	$fdata["GoodName"] = "Profissional";
	$fdata["ownerTable"] = "adm_lista_variavel";
	$fdata["Label"] = GetFieldLabel("adm_lista_variavel","Profissional");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Profissional";

		$fdata["sourceSingle"] = "Profissional";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Profissional";

	
	
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


	$tdataadm_lista_variavel["Profissional"] = $fdata;
		$tdataadm_lista_variavel[".searchableFields"][] = "Profissional";


$tables_data["adm_lista_variavel"]=&$tdataadm_lista_variavel;
$field_labels["adm_lista_variavel"] = &$fieldLabelsadm_lista_variavel;
$fieldToolTips["adm_lista_variavel"] = &$fieldToolTipsadm_lista_variavel;
$placeHolders["adm_lista_variavel"] = &$placeHoldersadm_lista_variavel;
$page_titles["adm_lista_variavel"] = &$pageTitlesadm_lista_variavel;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_lista_variavel"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_lista_variavel"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_eventos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_eventos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_eventos1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_lista_variavel"][0] = $masterParams;
				$masterTablesData["adm_lista_variavel"][0]["masterKeys"] = array();
	$masterTablesData["adm_lista_variavel"][0]["masterKeys"][]="idLista";
				$masterTablesData["adm_lista_variavel"][0]["detailKeys"] = array();
	$masterTablesData["adm_lista_variavel"][0]["detailKeys"][]="Lista";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_campos_adicionais";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_campos_adicionais";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_campos_adicionais";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_lista_variavel"][1] = $masterParams;
				$masterTablesData["adm_lista_variavel"][1]["masterKeys"] = array();
	$masterTablesData["adm_lista_variavel"][1]["masterKeys"][]="idCampo";
				$masterTablesData["adm_lista_variavel"][1]["detailKeys"] = array();
	$masterTablesData["adm_lista_variavel"][1]["detailKeys"][]="idCampo";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_lista_variavel()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idlistavariavel,  	idCampo,  	Valor,  	Lista,  	Profissional";
$proto0["m_strFrom"] = "FROM adm_lista_variavel";
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
	"m_strName" => "idlistavariavel",
	"m_strTable" => "adm_lista_variavel",
	"m_srcTableName" => "adm_lista_variavel"
));

$proto6["m_sql"] = "idlistavariavel";
$proto6["m_srcTableName"] = "adm_lista_variavel";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idCampo",
	"m_strTable" => "adm_lista_variavel",
	"m_srcTableName" => "adm_lista_variavel"
));

$proto8["m_sql"] = "idCampo";
$proto8["m_srcTableName"] = "adm_lista_variavel";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "adm_lista_variavel",
	"m_srcTableName" => "adm_lista_variavel"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "adm_lista_variavel";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Lista",
	"m_strTable" => "adm_lista_variavel",
	"m_srcTableName" => "adm_lista_variavel"
));

$proto12["m_sql"] = "Lista";
$proto12["m_srcTableName"] = "adm_lista_variavel";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Profissional",
	"m_strTable" => "adm_lista_variavel",
	"m_srcTableName" => "adm_lista_variavel"
));

$proto14["m_sql"] = "Profissional";
$proto14["m_srcTableName"] = "adm_lista_variavel";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "adm_lista_variavel";
$proto17["m_srcTableName"] = "adm_lista_variavel";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idlistavariavel";
$proto17["m_columns"][] = "idCampo";
$proto17["m_columns"][] = "Valor";
$proto17["m_columns"][] = "Lista";
$proto17["m_columns"][] = "Profissional";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "adm_lista_variavel";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "adm_lista_variavel";
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
$proto0["m_srcTableName"]="adm_lista_variavel";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_lista_variavel = createSqlQuery_adm_lista_variavel();


	
		;

					

$tdataadm_lista_variavel[".sqlquery"] = $queryData_adm_lista_variavel;



$tableEvents["adm_lista_variavel"] = new eventsBase;
$tdataadm_lista_variavel[".hasEvents"] = false;

?>