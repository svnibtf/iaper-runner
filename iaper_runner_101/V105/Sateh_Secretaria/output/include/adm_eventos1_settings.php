<?php
$tdataadm_eventos1 = array();
$tdataadm_eventos1[".searchableFields"] = array();
$tdataadm_eventos1[".ShortName"] = "adm_eventos1";
$tdataadm_eventos1[".OwnerID"] = "";
$tdataadm_eventos1[".OriginalTable"] = "adm_eventos";


$tdataadm_eventos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_eventos1[".originalPagesByType"] = $tdataadm_eventos1[".pagesByType"];
$tdataadm_eventos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_eventos1[".originalPages"] = $tdataadm_eventos1[".pages"];
$tdataadm_eventos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_eventos1[".originalDefaultPages"] = $tdataadm_eventos1[".defaultPages"];

//	field labels
$fieldLabelsadm_eventos1 = array();
$fieldToolTipsadm_eventos1 = array();
$pageTitlesadm_eventos1 = array();
$placeHoldersadm_eventos1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_eventos1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_eventos1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["idLista"] = "Lista";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["idLista"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["idLista"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Lista"] = "Lista";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Lista"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Lista"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Profissional"] = "Profissional";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Profissional"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Profissional"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Observa__o"] = "Observação";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Observa__o"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Observa__o"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Link_Evento"] = "Link Evento";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Link_Evento"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Link_Evento"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Link_Inscricao"] = "Link Inscricao";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Link_Inscricao"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Link_Inscricao"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Texto_Evento"] = "Texto Evento";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Texto_Evento"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Texto_Evento"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Banner_Evento"] = "Banner Evento";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Banner_Evento"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Banner_Evento"] = "";
	$fieldLabelsadm_eventos1["Portuguese(Brazil)"]["Video_Evento"] = "Video Evento";
	$fieldToolTipsadm_eventos1["Portuguese(Brazil)"]["Video_Evento"] = "";
	$placeHoldersadm_eventos1["Portuguese(Brazil)"]["Video_Evento"] = "";
	if (count($fieldToolTipsadm_eventos1["Portuguese(Brazil)"]))
		$tdataadm_eventos1[".isUseToolTips"] = true;
}


	$tdataadm_eventos1[".NCSearch"] = true;



$tdataadm_eventos1[".shortTableName"] = "adm_eventos1";
$tdataadm_eventos1[".nSecOptions"] = 0;

$tdataadm_eventos1[".mainTableOwnerID"] = "";
$tdataadm_eventos1[".entityType"] = 0;
$tdataadm_eventos1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_eventos1[".strOriginalTableName"] = "adm_eventos";

	



$tdataadm_eventos1[".showAddInPopup"] = false;

$tdataadm_eventos1[".showEditInPopup"] = false;

$tdataadm_eventos1[".showViewInPopup"] = false;

$tdataadm_eventos1[".listAjax"] = false;
//	temporary
//$tdataadm_eventos1[".listAjax"] = false;

	$tdataadm_eventos1[".audit"] = false;

	$tdataadm_eventos1[".locking"] = false;


$pages = $tdataadm_eventos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_eventos1[".edit"] = true;
	$tdataadm_eventos1[".afterEditAction"] = 1;
	$tdataadm_eventos1[".closePopupAfterEdit"] = 1;
	$tdataadm_eventos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_eventos1[".add"] = true;
$tdataadm_eventos1[".afterAddAction"] = 1;
$tdataadm_eventos1[".closePopupAfterAdd"] = 1;
$tdataadm_eventos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_eventos1[".list"] = true;
}



$tdataadm_eventos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_eventos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_eventos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_eventos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_eventos1[".printFriendly"] = true;
}



$tdataadm_eventos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_eventos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_eventos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_eventos1[".isUseAjaxSuggest"] = true;

$tdataadm_eventos1[".rowHighlite"] = true;



						

$tdataadm_eventos1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_eventos1[".buttonsAdded"] = false;

$tdataadm_eventos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_eventos1[".isUseTimeForSearch"] = false;


$tdataadm_eventos1[".badgeColor"] = "EDCA00";


$tdataadm_eventos1[".allSearchFields"] = array();
$tdataadm_eventos1[".filterFields"] = array();
$tdataadm_eventos1[".requiredSearchFields"] = array();

$tdataadm_eventos1[".googleLikeFields"] = array();
$tdataadm_eventos1[".googleLikeFields"][] = "idLista";
$tdataadm_eventos1[".googleLikeFields"][] = "Lista";
$tdataadm_eventos1[".googleLikeFields"][] = "Profissional";
$tdataadm_eventos1[".googleLikeFields"][] = "Data";
$tdataadm_eventos1[".googleLikeFields"][] = "Observação";
$tdataadm_eventos1[".googleLikeFields"][] = "Valor";
$tdataadm_eventos1[".googleLikeFields"][] = "Link_Evento";
$tdataadm_eventos1[".googleLikeFields"][] = "Link_Inscricao";
$tdataadm_eventos1[".googleLikeFields"][] = "Texto_Evento";



$tdataadm_eventos1[".tableType"] = "list";

$tdataadm_eventos1[".printerPageOrientation"] = 0;
$tdataadm_eventos1[".nPrinterPageScale"] = 100;

$tdataadm_eventos1[".nPrinterSplitRecords"] = 40;

$tdataadm_eventos1[".geocodingEnabled"] = false;




$tdataadm_eventos1[".isDisplayLoading"] = true;






$tdataadm_eventos1[".pageSize"] = 20;

$tdataadm_eventos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_eventos1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_eventos1[".orderindexes"] = array();


$tdataadm_eventos1[".sqlHead"] = "SELECT idLista,  	Lista,  	Profissional,  	`Data`,  	`Observação`,  	Valor,  	Link_Evento,  	Link_Inscricao,  	Texto_Evento,  	Banner_Evento,  	Video_Evento";
$tdataadm_eventos1[".sqlFrom"] = "FROM adm_eventos";
$tdataadm_eventos1[".sqlWhereExpr"] = "";
$tdataadm_eventos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_eventos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_eventos1[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_eventos1[".highlightSearchResults"] = true;

$tableKeysadm_eventos1 = array();
$tableKeysadm_eventos1[] = "idLista";
$tdataadm_eventos1[".Keys"] = $tableKeysadm_eventos1;


$tdataadm_eventos1[".hideMobileList"] = array();




//	idLista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idLista";
	$fdata["GoodName"] = "idLista";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","idLista");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idLista";

		$fdata["sourceSingle"] = "idLista";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idLista";

	
	
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


	$tdataadm_eventos1["idLista"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "idLista";
//	Lista
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Lista";
	$fdata["GoodName"] = "Lista";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Lista");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdataadm_eventos1["Lista"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Lista";
//	Profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Profissional";
	$fdata["GoodName"] = "Profissional";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Profissional");
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


	$tdataadm_eventos1["Profissional"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Profissional";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Data");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
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


	$tdataadm_eventos1["Data"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Data";
//	Observação
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Observação";
	$fdata["GoodName"] = "Observa__o";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Observa__o");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observação";

		$fdata["sourceSingle"] = "Observação";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Observação`";

	
	
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


	$tdataadm_eventos1["Observação"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Observação";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Valor";

		$fdata["sourceSingle"] = "Valor";

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


	$tdataadm_eventos1["Valor"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Valor";
//	Link_Evento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Link_Evento";
	$fdata["GoodName"] = "Link_Evento";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Link_Evento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Link_Evento";

		$fdata["sourceSingle"] = "Link_Evento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Link_Evento";

	
	
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


	$tdataadm_eventos1["Link_Evento"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Link_Evento";
//	Link_Inscricao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Link_Inscricao";
	$fdata["GoodName"] = "Link_Inscricao";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Link_Inscricao");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Link_Inscricao";

		$fdata["sourceSingle"] = "Link_Inscricao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Link_Inscricao";

	
	
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


	$tdataadm_eventos1["Link_Inscricao"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Link_Inscricao";
//	Texto_Evento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Texto_Evento";
	$fdata["GoodName"] = "Texto_Evento";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Texto_Evento");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Texto_Evento";

		$fdata["sourceSingle"] = "Texto_Evento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Texto_Evento";

	
	
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


	$tdataadm_eventos1["Texto_Evento"] = $fdata;
		$tdataadm_eventos1[".searchableFields"][] = "Texto_Evento";
//	Banner_Evento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Banner_Evento";
	$fdata["GoodName"] = "Banner_Evento";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Banner_Evento");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Banner_Evento";

		$fdata["sourceSingle"] = "Banner_Evento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Banner_Evento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdataadm_eventos1["Banner_Evento"] = $fdata;
	//	Video_Evento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Video_Evento";
	$fdata["GoodName"] = "Video_Evento";
	$fdata["ownerTable"] = "adm_eventos";
	$fdata["Label"] = GetFieldLabel("adm_eventos","Video_Evento");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Video_Evento";

		$fdata["sourceSingle"] = "Video_Evento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Video_Evento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdataadm_eventos1["Video_Evento"] = $fdata;
	

$tables_data["adm_eventos"]=&$tdataadm_eventos1;
$field_labels["adm_eventos"] = &$fieldLabelsadm_eventos1;
$fieldToolTips["adm_eventos"] = &$fieldToolTipsadm_eventos1;
$placeHolders["adm_eventos"] = &$placeHoldersadm_eventos1;
$page_titles["adm_eventos"] = &$pageTitlesadm_eventos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_eventos"] = array();
//	adm_lista_variavel
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_lista_variavel";
		$detailsParam["dOriginalTable"] = "adm_lista_variavel";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_lista_variavel";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_lista_variavel");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_eventos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_eventos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_eventos"][$dIndex]["masterKeys"][]="idLista";

				$detailsTablesData["adm_eventos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_eventos"][$dIndex]["detailKeys"][]="Lista";
//	adm_inscricoes
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_inscricoes";
		$detailsParam["dOriginalTable"] = "adm_inscricoes";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_inscricoes";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_inscricoes");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_eventos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_eventos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_eventos"][$dIndex]["masterKeys"][]="idLista";

				$detailsTablesData["adm_eventos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_eventos"][$dIndex]["detailKeys"][]="idEvento";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_eventos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_eventos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idLista,  	Lista,  	Profissional,  	`Data`,  	`Observação`,  	Valor,  	Link_Evento,  	Link_Inscricao,  	Texto_Evento,  	Banner_Evento,  	Video_Evento";
$proto0["m_strFrom"] = "FROM adm_eventos";
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
	"m_strName" => "idLista",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto6["m_sql"] = "idLista";
$proto6["m_srcTableName"] = "adm_eventos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Lista",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto8["m_sql"] = "Lista";
$proto8["m_srcTableName"] = "adm_eventos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Profissional",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto10["m_sql"] = "Profissional";
$proto10["m_srcTableName"] = "adm_eventos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto12["m_sql"] = "`Data`";
$proto12["m_srcTableName"] = "adm_eventos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Observação",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto14["m_sql"] = "`Observação`";
$proto14["m_srcTableName"] = "adm_eventos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto16["m_sql"] = "Valor";
$proto16["m_srcTableName"] = "adm_eventos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Link_Evento",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto18["m_sql"] = "Link_Evento";
$proto18["m_srcTableName"] = "adm_eventos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Link_Inscricao",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto20["m_sql"] = "Link_Inscricao";
$proto20["m_srcTableName"] = "adm_eventos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto_Evento",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto22["m_sql"] = "Texto_Evento";
$proto22["m_srcTableName"] = "adm_eventos";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Banner_Evento",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto24["m_sql"] = "Banner_Evento";
$proto24["m_srcTableName"] = "adm_eventos";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Video_Evento",
	"m_strTable" => "adm_eventos",
	"m_srcTableName" => "adm_eventos"
));

$proto26["m_sql"] = "Video_Evento";
$proto26["m_srcTableName"] = "adm_eventos";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "adm_eventos";
$proto29["m_srcTableName"] = "adm_eventos";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "idLista";
$proto29["m_columns"][] = "Lista";
$proto29["m_columns"][] = "Profissional";
$proto29["m_columns"][] = "Data";
$proto29["m_columns"][] = "Observação";
$proto29["m_columns"][] = "Valor";
$proto29["m_columns"][] = "Link_Evento";
$proto29["m_columns"][] = "Link_Inscricao";
$proto29["m_columns"][] = "Texto_Evento";
$proto29["m_columns"][] = "Banner_Evento";
$proto29["m_columns"][] = "Video_Evento";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "adm_eventos";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "adm_eventos";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_eventos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_eventos1 = createSqlQuery_adm_eventos1();


	
		;

											

$tdataadm_eventos1[".sqlquery"] = $queryData_adm_eventos1;



$tableEvents["adm_eventos"] = new eventsBase;
$tdataadm_eventos1[".hasEvents"] = false;

?>