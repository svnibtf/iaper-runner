<?php
$tdataadm_agenda_estrutura_1 = array();
$tdataadm_agenda_estrutura_1[".searchableFields"] = array();
$tdataadm_agenda_estrutura_1[".ShortName"] = "adm_agenda_estrutura_1";
$tdataadm_agenda_estrutura_1[".OwnerID"] = "agt_usu_pro_id";
$tdataadm_agenda_estrutura_1[".OriginalTable"] = "adm_agenda_estrutura_1";


$tdataadm_agenda_estrutura_1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_agenda_estrutura_1[".originalPagesByType"] = $tdataadm_agenda_estrutura_1[".pagesByType"];
$tdataadm_agenda_estrutura_1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_agenda_estrutura_1[".originalPages"] = $tdataadm_agenda_estrutura_1[".pages"];
$tdataadm_agenda_estrutura_1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_agenda_estrutura_1[".originalDefaultPages"] = $tdataadm_agenda_estrutura_1[".defaultPages"];

//	field labels
$fieldLabelsadm_agenda_estrutura_1 = array();
$fieldToolTipsadm_agenda_estrutura_1 = array();
$pageTitlesadm_agenda_estrutura_1 = array();
$placeHoldersadm_agenda_estrutura_1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_agenda_estrutura_1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_id"] = "Id";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_id"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_id"] = "";
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_usu_pro_id"] = "Profissional";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_usu_pro_id"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_usu_pro_id"] = "";
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_config_id"] = "Tipo Agenda";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_config_id"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_config_id"] = "";
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_data_excluir"] = "Data ";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_data_excluir"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_data_excluir"] = "";
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_dia_sem"] = "Dia Semana";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_dia_sem"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_dia_sem"] = "";
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_time_inicio"] = "Hora Início";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_time_inicio"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_time_inicio"] = "";
	$fieldLabelsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_time_fim"] = "Hora Fim";
	$fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_time_fim"] = "";
	$placeHoldersadm_agenda_estrutura_1["Portuguese(Brazil)"]["agt_time_fim"] = "";
	if (count($fieldToolTipsadm_agenda_estrutura_1["Portuguese(Brazil)"]))
		$tdataadm_agenda_estrutura_1[".isUseToolTips"] = true;
}


	$tdataadm_agenda_estrutura_1[".NCSearch"] = true;



$tdataadm_agenda_estrutura_1[".shortTableName"] = "adm_agenda_estrutura_1";
$tdataadm_agenda_estrutura_1[".nSecOptions"] = 2;

$tdataadm_agenda_estrutura_1[".mainTableOwnerID"] = "agt_usu_pro_id";
$tdataadm_agenda_estrutura_1[".entityType"] = 0;
$tdataadm_agenda_estrutura_1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_agenda_estrutura_1[".strOriginalTableName"] = "adm_agenda_estrutura_1";

	



$tdataadm_agenda_estrutura_1[".showAddInPopup"] = false;

$tdataadm_agenda_estrutura_1[".showEditInPopup"] = false;

$tdataadm_agenda_estrutura_1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_agenda_estrutura_1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_agenda_estrutura_1[".listAjax"] = false;
//	temporary
//$tdataadm_agenda_estrutura_1[".listAjax"] = false;

	$tdataadm_agenda_estrutura_1[".audit"] = false;

	$tdataadm_agenda_estrutura_1[".locking"] = false;


$pages = $tdataadm_agenda_estrutura_1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_agenda_estrutura_1[".edit"] = true;
	$tdataadm_agenda_estrutura_1[".afterEditAction"] = 1;
	$tdataadm_agenda_estrutura_1[".closePopupAfterEdit"] = 1;
	$tdataadm_agenda_estrutura_1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_agenda_estrutura_1[".add"] = true;
$tdataadm_agenda_estrutura_1[".afterAddAction"] = 1;
$tdataadm_agenda_estrutura_1[".closePopupAfterAdd"] = 1;
$tdataadm_agenda_estrutura_1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_agenda_estrutura_1[".list"] = true;
}



$tdataadm_agenda_estrutura_1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_agenda_estrutura_1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_agenda_estrutura_1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_agenda_estrutura_1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_agenda_estrutura_1[".printFriendly"] = true;
}



$tdataadm_agenda_estrutura_1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_agenda_estrutura_1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_agenda_estrutura_1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_agenda_estrutura_1[".isUseAjaxSuggest"] = true;

$tdataadm_agenda_estrutura_1[".rowHighlite"] = true;



						

$tdataadm_agenda_estrutura_1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_agenda_estrutura_1[".buttonsAdded"] = false;

$tdataadm_agenda_estrutura_1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_agenda_estrutura_1[".isUseTimeForSearch"] = false;


$tdataadm_agenda_estrutura_1[".badgeColor"] = "6493EA";


$tdataadm_agenda_estrutura_1[".allSearchFields"] = array();
$tdataadm_agenda_estrutura_1[".filterFields"] = array();
$tdataadm_agenda_estrutura_1[".requiredSearchFields"] = array();

$tdataadm_agenda_estrutura_1[".googleLikeFields"] = array();
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_id";
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_usu_pro_id";
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_config_id";
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_data_excluir";
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_dia_sem";
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_time_inicio";
$tdataadm_agenda_estrutura_1[".googleLikeFields"][] = "agt_time_fim";



$tdataadm_agenda_estrutura_1[".tableType"] = "list";

$tdataadm_agenda_estrutura_1[".printerPageOrientation"] = 0;
$tdataadm_agenda_estrutura_1[".nPrinterPageScale"] = 100;

$tdataadm_agenda_estrutura_1[".nPrinterSplitRecords"] = 40;

$tdataadm_agenda_estrutura_1[".geocodingEnabled"] = false;










$tdataadm_agenda_estrutura_1[".pageSize"] = 20;

$tdataadm_agenda_estrutura_1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_agenda_estrutura_1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_agenda_estrutura_1[".orderindexes"] = array();


$tdataadm_agenda_estrutura_1[".sqlHead"] = "SELECT agt_id,  	agt_usu_pro_id,  	agt_config_id,  	agt_data_excluir,  	agt_dia_sem,  	agt_time_inicio,  	agt_time_fim";
$tdataadm_agenda_estrutura_1[".sqlFrom"] = "FROM adm_agenda_estrutura_1";
$tdataadm_agenda_estrutura_1[".sqlWhereExpr"] = "";
$tdataadm_agenda_estrutura_1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_agenda_estrutura_1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_agenda_estrutura_1[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_agenda_estrutura_1[".highlightSearchResults"] = true;

$tableKeysadm_agenda_estrutura_1 = array();
$tableKeysadm_agenda_estrutura_1[] = "agt_id";
$tdataadm_agenda_estrutura_1[".Keys"] = $tableKeysadm_agenda_estrutura_1;


$tdataadm_agenda_estrutura_1[".hideMobileList"] = array();




//	agt_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agt_id";
	$fdata["GoodName"] = "agt_id";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "agt_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_id";

	
	
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


	$tdataadm_agenda_estrutura_1["agt_id"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_id";
//	agt_usu_pro_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "agt_usu_pro_id";
	$fdata["GoodName"] = "agt_usu_pro_id";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_usu_pro_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agt_usu_pro_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_usu_pro_id";

	
	
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


	$tdataadm_agenda_estrutura_1["agt_usu_pro_id"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_usu_pro_id";
//	agt_config_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agt_config_id";
	$fdata["GoodName"] = "agt_config_id";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_config_id");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "agt_config_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_config_id";

	
	
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
	$edata["LookupTable"] = "adm_agenda_config_1";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "agc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "agc_nome";

	

	
	$edata["LookupOrderBy"] = "agc_nome";

	
	
	
	

	
	
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


	$tdataadm_agenda_estrutura_1["agt_config_id"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_config_id";
//	agt_data_excluir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "agt_data_excluir";
	$fdata["GoodName"] = "agt_data_excluir";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_data_excluir");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "agt_data_excluir";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_data_excluir";

	
	
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


	$tdataadm_agenda_estrutura_1["agt_data_excluir"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_data_excluir";
//	agt_dia_sem
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agt_dia_sem";
	$fdata["GoodName"] = "agt_dia_sem";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_dia_sem");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agt_dia_sem";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_dia_sem";

	
	
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

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "seg";
	$edata["LookupValues"][] = "ter";
	$edata["LookupValues"][] = "qua";
	$edata["LookupValues"][] = "qui";
	$edata["LookupValues"][] = "sex";
	$edata["LookupValues"][] = "sab";
	$edata["LookupValues"][] = "dom";

	
	
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


	$tdataadm_agenda_estrutura_1["agt_dia_sem"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_dia_sem";
//	agt_time_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "agt_time_inicio";
	$fdata["GoodName"] = "agt_time_inicio";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_time_inicio");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "agt_time_inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_time_inicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

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
	$edata["LookupTable"] = "adm_horarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "Horario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Horario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataadm_agenda_estrutura_1["agt_time_inicio"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_time_inicio";
//	agt_time_fim
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "agt_time_fim";
	$fdata["GoodName"] = "agt_time_fim";
	$fdata["ownerTable"] = "adm_agenda_estrutura_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_estrutura_1","agt_time_fim");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "agt_time_fim";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agt_time_fim";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
		
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

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
	$edata["LookupTable"] = "adm_horarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "Horario";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Horario";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdataadm_agenda_estrutura_1["agt_time_fim"] = $fdata;
		$tdataadm_agenda_estrutura_1[".searchableFields"][] = "agt_time_fim";


$tables_data["adm_agenda_estrutura_1"]=&$tdataadm_agenda_estrutura_1;
$field_labels["adm_agenda_estrutura_1"] = &$fieldLabelsadm_agenda_estrutura_1;
$fieldToolTips["adm_agenda_estrutura_1"] = &$fieldToolTipsadm_agenda_estrutura_1;
$placeHolders["adm_agenda_estrutura_1"] = &$placeHoldersadm_agenda_estrutura_1;
$page_titles["adm_agenda_estrutura_1"] = &$pageTitlesadm_agenda_estrutura_1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_agenda_estrutura_1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_agenda_estrutura_1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_agenda_estrutura_1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "agt_id,  	agt_usu_pro_id,  	agt_config_id,  	agt_data_excluir,  	agt_dia_sem,  	agt_time_inicio,  	agt_time_fim";
$proto0["m_strFrom"] = "FROM adm_agenda_estrutura_1";
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
	"m_strName" => "agt_id",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto6["m_sql"] = "agt_id";
$proto6["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "agt_usu_pro_id",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto8["m_sql"] = "agt_usu_pro_id";
$proto8["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "agt_config_id",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto10["m_sql"] = "agt_config_id";
$proto10["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "agt_data_excluir",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto12["m_sql"] = "agt_data_excluir";
$proto12["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "agt_dia_sem",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto14["m_sql"] = "agt_dia_sem";
$proto14["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "agt_time_inicio",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto16["m_sql"] = "agt_time_inicio";
$proto16["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "agt_time_fim",
	"m_strTable" => "adm_agenda_estrutura_1",
	"m_srcTableName" => "adm_agenda_estrutura_1"
));

$proto18["m_sql"] = "agt_time_fim";
$proto18["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "adm_agenda_estrutura_1";
$proto21["m_srcTableName"] = "adm_agenda_estrutura_1";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "agt_id";
$proto21["m_columns"][] = "agt_usu_pro_id";
$proto21["m_columns"][] = "agt_config_id";
$proto21["m_columns"][] = "agt_data_excluir";
$proto21["m_columns"][] = "agt_dia_sem";
$proto21["m_columns"][] = "agt_time_inicio";
$proto21["m_columns"][] = "agt_time_fim";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "adm_agenda_estrutura_1";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "adm_agenda_estrutura_1";
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
$proto0["m_srcTableName"]="adm_agenda_estrutura_1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_agenda_estrutura_1 = createSqlQuery_adm_agenda_estrutura_1();


	
		;

							

$tdataadm_agenda_estrutura_1[".sqlquery"] = $queryData_adm_agenda_estrutura_1;



$tableEvents["adm_agenda_estrutura_1"] = new eventsBase;
$tdataadm_agenda_estrutura_1[".hasEvents"] = false;

?>