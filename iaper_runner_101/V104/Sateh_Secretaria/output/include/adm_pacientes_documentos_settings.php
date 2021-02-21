<?php
$tdataadm_pacientes_documentos = array();
$tdataadm_pacientes_documentos[".searchableFields"] = array();
$tdataadm_pacientes_documentos[".ShortName"] = "adm_pacientes_documentos";
$tdataadm_pacientes_documentos[".OwnerID"] = "";
$tdataadm_pacientes_documentos[".OriginalTable"] = "adm_pacientes_documentos";


$tdataadm_pacientes_documentos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_pacientes_documentos[".originalPagesByType"] = $tdataadm_pacientes_documentos[".pagesByType"];
$tdataadm_pacientes_documentos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_pacientes_documentos[".originalPages"] = $tdataadm_pacientes_documentos[".pages"];
$tdataadm_pacientes_documentos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_pacientes_documentos[".originalDefaultPages"] = $tdataadm_pacientes_documentos[".defaultPages"];

//	field labels
$fieldLabelsadm_pacientes_documentos = array();
$fieldToolTipsadm_pacientes_documentos = array();
$pageTitlesadm_pacientes_documentos = array();
$placeHoldersadm_pacientes_documentos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"] = array();
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"] = array();
	$pageTitlesadm_pacientes_documentos["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["idPacienteDoc"] = "Id";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["idPacienteDoc"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["idPacienteDoc"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Documento"] = "Documento";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Documento"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Documento"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Observacao"] = "Observação";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Observacao"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Observacao"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Anexo1"] = "Anexo1";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Anexo1"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Anexo1"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Anexo2"] = "Anexo2";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Anexo2"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Anexo2"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Paciente"] = "Paciente";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Paciente"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Paciente"] = "";
	$fieldLabelsadm_pacientes_documentos["Portuguese(Brazil)"]["Tipo_Documento"] = "Tipo Documento";
	$fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]["Tipo_Documento"] = "";
	$placeHoldersadm_pacientes_documentos["Portuguese(Brazil)"]["Tipo_Documento"] = "";
	if (count($fieldToolTipsadm_pacientes_documentos["Portuguese(Brazil)"]))
		$tdataadm_pacientes_documentos[".isUseToolTips"] = true;
}


	$tdataadm_pacientes_documentos[".NCSearch"] = true;



$tdataadm_pacientes_documentos[".shortTableName"] = "adm_pacientes_documentos";
$tdataadm_pacientes_documentos[".nSecOptions"] = 0;

$tdataadm_pacientes_documentos[".mainTableOwnerID"] = "";
$tdataadm_pacientes_documentos[".entityType"] = 0;
$tdataadm_pacientes_documentos[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_pacientes_documentos[".strOriginalTableName"] = "adm_pacientes_documentos";

	



$tdataadm_pacientes_documentos[".showAddInPopup"] = false;

$tdataadm_pacientes_documentos[".showEditInPopup"] = false;

$tdataadm_pacientes_documentos[".showViewInPopup"] = false;

$tdataadm_pacientes_documentos[".listAjax"] = false;
//	temporary
//$tdataadm_pacientes_documentos[".listAjax"] = false;

	$tdataadm_pacientes_documentos[".audit"] = false;

	$tdataadm_pacientes_documentos[".locking"] = false;


$pages = $tdataadm_pacientes_documentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_pacientes_documentos[".edit"] = true;
	$tdataadm_pacientes_documentos[".afterEditAction"] = 1;
	$tdataadm_pacientes_documentos[".closePopupAfterEdit"] = 1;
	$tdataadm_pacientes_documentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_pacientes_documentos[".add"] = true;
$tdataadm_pacientes_documentos[".afterAddAction"] = 1;
$tdataadm_pacientes_documentos[".closePopupAfterAdd"] = 1;
$tdataadm_pacientes_documentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_pacientes_documentos[".list"] = true;
}



$tdataadm_pacientes_documentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_pacientes_documentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_pacientes_documentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_pacientes_documentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_pacientes_documentos[".printFriendly"] = true;
}



$tdataadm_pacientes_documentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_pacientes_documentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_pacientes_documentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_pacientes_documentos[".isUseAjaxSuggest"] = true;

$tdataadm_pacientes_documentos[".rowHighlite"] = true;



												

$tdataadm_pacientes_documentos[".ajaxCodeSnippetAdded"] = false;

$tdataadm_pacientes_documentos[".buttonsAdded"] = false;

$tdataadm_pacientes_documentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_pacientes_documentos[".isUseTimeForSearch"] = false;


$tdataadm_pacientes_documentos[".badgeColor"] = "c0c0c0";


$tdataadm_pacientes_documentos[".allSearchFields"] = array();
$tdataadm_pacientes_documentos[".filterFields"] = array();
$tdataadm_pacientes_documentos[".requiredSearchFields"] = array();

$tdataadm_pacientes_documentos[".googleLikeFields"] = array();
$tdataadm_pacientes_documentos[".googleLikeFields"][] = "idPacienteDoc";
$tdataadm_pacientes_documentos[".googleLikeFields"][] = "Documento";
$tdataadm_pacientes_documentos[".googleLikeFields"][] = "Observacao";
$tdataadm_pacientes_documentos[".googleLikeFields"][] = "Data";
$tdataadm_pacientes_documentos[".googleLikeFields"][] = "Paciente";
$tdataadm_pacientes_documentos[".googleLikeFields"][] = "Tipo_Documento";



$tdataadm_pacientes_documentos[".tableType"] = "list";

$tdataadm_pacientes_documentos[".printerPageOrientation"] = 0;
$tdataadm_pacientes_documentos[".nPrinterPageScale"] = 100;

$tdataadm_pacientes_documentos[".nPrinterSplitRecords"] = 40;

$tdataadm_pacientes_documentos[".geocodingEnabled"] = false;










$tdataadm_pacientes_documentos[".pageSize"] = 20;

$tdataadm_pacientes_documentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_pacientes_documentos[".strOrderBy"] = $tstrOrderBy;

$tdataadm_pacientes_documentos[".orderindexes"] = array();


$tdataadm_pacientes_documentos[".sqlHead"] = "SELECT idPacienteDoc,  	Documento,  	Observacao,  	Anexo1,  	Anexo2,  	`Data`,  	Paciente,  	Tipo_Documento";
$tdataadm_pacientes_documentos[".sqlFrom"] = "FROM adm_pacientes_documentos";
$tdataadm_pacientes_documentos[".sqlWhereExpr"] = "";
$tdataadm_pacientes_documentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_pacientes_documentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_pacientes_documentos[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_pacientes_documentos[".highlightSearchResults"] = true;

$tableKeysadm_pacientes_documentos = array();
$tableKeysadm_pacientes_documentos[] = "idPacienteDoc";
$tdataadm_pacientes_documentos[".Keys"] = $tableKeysadm_pacientes_documentos;


$tdataadm_pacientes_documentos[".hideMobileList"] = array();




//	idPacienteDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idPacienteDoc";
	$fdata["GoodName"] = "idPacienteDoc";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","idPacienteDoc");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idPacienteDoc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPacienteDoc";

	
	
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


	$tdataadm_pacientes_documentos["idPacienteDoc"] = $fdata;
		$tdataadm_pacientes_documentos[".searchableFields"][] = "idPacienteDoc";
//	Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Documento";
	$fdata["GoodName"] = "Documento";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Documento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Documento";

	
	
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


	$tdataadm_pacientes_documentos["Documento"] = $fdata;
		$tdataadm_pacientes_documentos[".searchableFields"][] = "Documento";
//	Observacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Observacao";
	$fdata["GoodName"] = "Observacao";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Observacao");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observacao";

	
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


	$tdataadm_pacientes_documentos["Observacao"] = $fdata;
		$tdataadm_pacientes_documentos[".searchableFields"][] = "Observacao";
//	Anexo1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Anexo1";
	$fdata["GoodName"] = "Anexo1";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Anexo1");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Anexo1";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Anexo1";

	
	
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

	$edata = array("EditFormat" => "Database file");

	
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


	$tdataadm_pacientes_documentos["Anexo1"] = $fdata;
	//	Anexo2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Anexo2";
	$fdata["GoodName"] = "Anexo2";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Anexo2");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Anexo2";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Anexo2";

	
	
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

	$edata = array("EditFormat" => "Database file");

	
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


	$tdataadm_pacientes_documentos["Anexo2"] = $fdata;
	//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Data");
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


	$tdataadm_pacientes_documentos["Data"] = $fdata;
		$tdataadm_pacientes_documentos[".searchableFields"][] = "Data";
//	Paciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Paciente";
	$fdata["GoodName"] = "Paciente";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Paciente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Paciente";

	
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


	$tdataadm_pacientes_documentos["Paciente"] = $fdata;
		$tdataadm_pacientes_documentos[".searchableFields"][] = "Paciente";
//	Tipo_Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Tipo_Documento";
	$fdata["GoodName"] = "Tipo_Documento";
	$fdata["ownerTable"] = "adm_pacientes_documentos";
	$fdata["Label"] = GetFieldLabel("adm_pacientes_documentos","Tipo_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Documento";

		$fdata["sourceSingle"] = "Tipo_Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo_Documento";

	
	
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
	$edata["LookupTable"] = "adm_tipo_documentos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idTipoDoc";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tipo_Documento";

	

	
	$edata["LookupOrderBy"] = "Tipo_Documento";

	
	
	
	

	
	
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


	$tdataadm_pacientes_documentos["Tipo_Documento"] = $fdata;
		$tdataadm_pacientes_documentos[".searchableFields"][] = "Tipo_Documento";


$tables_data["adm_pacientes_documentos"]=&$tdataadm_pacientes_documentos;
$field_labels["adm_pacientes_documentos"] = &$fieldLabelsadm_pacientes_documentos;
$fieldToolTips["adm_pacientes_documentos"] = &$fieldToolTipsadm_pacientes_documentos;
$placeHolders["adm_pacientes_documentos"] = &$placeHoldersadm_pacientes_documentos;
$page_titles["adm_pacientes_documentos"] = &$pageTitlesadm_pacientes_documentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_pacientes_documentos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_pacientes_documentos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_pacientes";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_pacientes";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_pacientes1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_pacientes_documentos"][0] = $masterParams;
				$masterTablesData["adm_pacientes_documentos"][0]["masterKeys"] = array();
	$masterTablesData["adm_pacientes_documentos"][0]["masterKeys"][]="idPaciente";
				$masterTablesData["adm_pacientes_documentos"][0]["detailKeys"] = array();
	$masterTablesData["adm_pacientes_documentos"][0]["detailKeys"][]="Paciente";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_pacientes_documentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idPacienteDoc,  	Documento,  	Observacao,  	Anexo1,  	Anexo2,  	`Data`,  	Paciente,  	Tipo_Documento";
$proto0["m_strFrom"] = "FROM adm_pacientes_documentos";
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
	"m_strName" => "idPacienteDoc",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto6["m_sql"] = "idPacienteDoc";
$proto6["m_srcTableName"] = "adm_pacientes_documentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Documento",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto8["m_sql"] = "Documento";
$proto8["m_srcTableName"] = "adm_pacientes_documentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacao",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto10["m_sql"] = "Observacao";
$proto10["m_srcTableName"] = "adm_pacientes_documentos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Anexo1",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto12["m_sql"] = "Anexo1";
$proto12["m_srcTableName"] = "adm_pacientes_documentos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Anexo2",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto14["m_sql"] = "Anexo2";
$proto14["m_srcTableName"] = "adm_pacientes_documentos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto16["m_sql"] = "`Data`";
$proto16["m_srcTableName"] = "adm_pacientes_documentos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Paciente",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto18["m_sql"] = "Paciente";
$proto18["m_srcTableName"] = "adm_pacientes_documentos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Documento",
	"m_strTable" => "adm_pacientes_documentos",
	"m_srcTableName" => "adm_pacientes_documentos"
));

$proto20["m_sql"] = "Tipo_Documento";
$proto20["m_srcTableName"] = "adm_pacientes_documentos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "adm_pacientes_documentos";
$proto23["m_srcTableName"] = "adm_pacientes_documentos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "idPacienteDoc";
$proto23["m_columns"][] = "Documento";
$proto23["m_columns"][] = "Observacao";
$proto23["m_columns"][] = "Anexo1";
$proto23["m_columns"][] = "Anexo2";
$proto23["m_columns"][] = "Data";
$proto23["m_columns"][] = "Paciente";
$proto23["m_columns"][] = "Tipo_Documento";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "adm_pacientes_documentos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "adm_pacientes_documentos";
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
$proto0["m_srcTableName"]="adm_pacientes_documentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_pacientes_documentos = createSqlQuery_adm_pacientes_documentos();


	
		;

								

$tdataadm_pacientes_documentos[".sqlquery"] = $queryData_adm_pacientes_documentos;



$tableEvents["adm_pacientes_documentos"] = new eventsBase;
$tdataadm_pacientes_documentos[".hasEvents"] = false;

?>