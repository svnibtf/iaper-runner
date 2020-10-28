<?php
$tdataadm_plano_profissional = array();
$tdataadm_plano_profissional[".searchableFields"] = array();
$tdataadm_plano_profissional[".ShortName"] = "adm_plano_profissional";
$tdataadm_plano_profissional[".OwnerID"] = "";
$tdataadm_plano_profissional[".OriginalTable"] = "adm_plano_profissional";


$tdataadm_plano_profissional[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_plano_profissional[".originalPagesByType"] = $tdataadm_plano_profissional[".pagesByType"];
$tdataadm_plano_profissional[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_plano_profissional[".originalPages"] = $tdataadm_plano_profissional[".pages"];
$tdataadm_plano_profissional[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_plano_profissional[".originalDefaultPages"] = $tdataadm_plano_profissional[".defaultPages"];

//	field labels
$fieldLabelsadm_plano_profissional = array();
$fieldToolTipsadm_plano_profissional = array();
$pageTitlesadm_plano_profissional = array();
$placeHoldersadm_plano_profissional = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"] = array();
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"] = array();
	$pageTitlesadm_plano_profissional["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_id"] = "Pla Id";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_id"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_id"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_tipo"] = "Pla Tipo";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_tipo"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_tipo"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_nome"] = "Pla Nome";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_nome"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_nome"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_pro_grupo_nome"] = "Pla Pro Grupo Nome";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_pro_grupo_nome"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_pro_grupo_nome"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_tempo"] = "Pla Tempo";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_tempo"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_tempo"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_parcelas"] = "Pla Parcelas";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_parcelas"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_parcelas"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_finalizacao"] = "Pla Finalizacao";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_finalizacao"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_finalizacao"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_obs"] = "Pla Obs";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_obs"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_obs"] = "";
	$fieldLabelsadm_plano_profissional["Portuguese(Brazil)"]["pla_deletado"] = "Pla Deletado";
	$fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]["pla_deletado"] = "";
	$placeHoldersadm_plano_profissional["Portuguese(Brazil)"]["pla_deletado"] = "";
	if (count($fieldToolTipsadm_plano_profissional["Portuguese(Brazil)"]))
		$tdataadm_plano_profissional[".isUseToolTips"] = true;
}


	$tdataadm_plano_profissional[".NCSearch"] = true;



$tdataadm_plano_profissional[".shortTableName"] = "adm_plano_profissional";
$tdataadm_plano_profissional[".nSecOptions"] = 0;

$tdataadm_plano_profissional[".mainTableOwnerID"] = "";
$tdataadm_plano_profissional[".entityType"] = 0;
$tdataadm_plano_profissional[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_plano_profissional[".strOriginalTableName"] = "adm_plano_profissional";

	



$tdataadm_plano_profissional[".showAddInPopup"] = false;

$tdataadm_plano_profissional[".showEditInPopup"] = false;

$tdataadm_plano_profissional[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_plano_profissional[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_plano_profissional[".listAjax"] = false;
//	temporary
//$tdataadm_plano_profissional[".listAjax"] = false;

	$tdataadm_plano_profissional[".audit"] = false;

	$tdataadm_plano_profissional[".locking"] = false;


$pages = $tdataadm_plano_profissional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_plano_profissional[".edit"] = true;
	$tdataadm_plano_profissional[".afterEditAction"] = 1;
	$tdataadm_plano_profissional[".closePopupAfterEdit"] = 1;
	$tdataadm_plano_profissional[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_plano_profissional[".add"] = true;
$tdataadm_plano_profissional[".afterAddAction"] = 1;
$tdataadm_plano_profissional[".closePopupAfterAdd"] = 1;
$tdataadm_plano_profissional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_plano_profissional[".list"] = true;
}



$tdataadm_plano_profissional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_plano_profissional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_plano_profissional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_plano_profissional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_plano_profissional[".printFriendly"] = true;
}



$tdataadm_plano_profissional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_plano_profissional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_plano_profissional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_plano_profissional[".isUseAjaxSuggest"] = true;

$tdataadm_plano_profissional[".rowHighlite"] = true;





$tdataadm_plano_profissional[".ajaxCodeSnippetAdded"] = false;

$tdataadm_plano_profissional[".buttonsAdded"] = false;

$tdataadm_plano_profissional[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_plano_profissional[".isUseTimeForSearch"] = false;


$tdataadm_plano_profissional[".badgeColor"] = "9ACD32";


$tdataadm_plano_profissional[".allSearchFields"] = array();
$tdataadm_plano_profissional[".filterFields"] = array();
$tdataadm_plano_profissional[".requiredSearchFields"] = array();

$tdataadm_plano_profissional[".googleLikeFields"] = array();
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_id";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_tipo";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_nome";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_pro_grupo_nome";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_tempo";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_parcelas";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_finalizacao";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_obs";
$tdataadm_plano_profissional[".googleLikeFields"][] = "pla_deletado";



$tdataadm_plano_profissional[".tableType"] = "list";

$tdataadm_plano_profissional[".printerPageOrientation"] = 0;
$tdataadm_plano_profissional[".nPrinterPageScale"] = 100;

$tdataadm_plano_profissional[".nPrinterSplitRecords"] = 40;

$tdataadm_plano_profissional[".geocodingEnabled"] = false;










$tdataadm_plano_profissional[".pageSize"] = 20;

$tdataadm_plano_profissional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_plano_profissional[".strOrderBy"] = $tstrOrderBy;

$tdataadm_plano_profissional[".orderindexes"] = array();


$tdataadm_plano_profissional[".sqlHead"] = "SELECT pla_id,  	pla_tipo,  	pla_nome,  	pla_pro_grupo_nome,  	pla_tempo,  	pla_parcelas,  	pla_finalizacao,  	pla_obs,  	pla_deletado";
$tdataadm_plano_profissional[".sqlFrom"] = "FROM adm_plano_profissional";
$tdataadm_plano_profissional[".sqlWhereExpr"] = "";
$tdataadm_plano_profissional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_plano_profissional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_plano_profissional[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_plano_profissional[".highlightSearchResults"] = true;

$tableKeysadm_plano_profissional = array();
$tableKeysadm_plano_profissional[] = "pla_id";
$tdataadm_plano_profissional[".Keys"] = $tableKeysadm_plano_profissional;


$tdataadm_plano_profissional[".hideMobileList"] = array();




//	pla_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pla_id";
	$fdata["GoodName"] = "pla_id";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "pla_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_id";

	
	
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


	$tdataadm_plano_profissional["pla_id"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_id";
//	pla_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pla_tipo";
	$fdata["GoodName"] = "pla_tipo";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_tipo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pla_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_tipo";

	
	
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


	$tdataadm_plano_profissional["pla_tipo"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_tipo";
//	pla_nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pla_nome";
	$fdata["GoodName"] = "pla_nome";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pla_nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_nome";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdataadm_plano_profissional["pla_nome"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_nome";
//	pla_pro_grupo_nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pla_pro_grupo_nome";
	$fdata["GoodName"] = "pla_pro_grupo_nome";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_pro_grupo_nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pla_pro_grupo_nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_pro_grupo_nome";

	
	
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


	$tdataadm_plano_profissional["pla_pro_grupo_nome"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_pro_grupo_nome";
//	pla_tempo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pla_tempo";
	$fdata["GoodName"] = "pla_tempo";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_tempo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pla_tempo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_tempo";

	
	
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


	$tdataadm_plano_profissional["pla_tempo"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_tempo";
//	pla_parcelas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pla_parcelas";
	$fdata["GoodName"] = "pla_parcelas";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_parcelas");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "pla_parcelas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_parcelas";

	
	
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


	$tdataadm_plano_profissional["pla_parcelas"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_parcelas";
//	pla_finalizacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pla_finalizacao";
	$fdata["GoodName"] = "pla_finalizacao";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_finalizacao");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pla_finalizacao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_finalizacao";

	
	
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


	$tdataadm_plano_profissional["pla_finalizacao"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_finalizacao";
//	pla_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pla_obs";
	$fdata["GoodName"] = "pla_obs";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_obs");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pla_obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_obs";

	
	
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


	$tdataadm_plano_profissional["pla_obs"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_obs";
//	pla_deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "pla_deletado";
	$fdata["GoodName"] = "pla_deletado";
	$fdata["ownerTable"] = "adm_plano_profissional";
	$fdata["Label"] = GetFieldLabel("adm_plano_profissional","pla_deletado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "pla_deletado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pla_deletado";

	
	
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


	$tdataadm_plano_profissional["pla_deletado"] = $fdata;
		$tdataadm_plano_profissional[".searchableFields"][] = "pla_deletado";


$tables_data["adm_plano_profissional"]=&$tdataadm_plano_profissional;
$field_labels["adm_plano_profissional"] = &$fieldLabelsadm_plano_profissional;
$fieldToolTips["adm_plano_profissional"] = &$fieldToolTipsadm_plano_profissional;
$placeHolders["adm_plano_profissional"] = &$placeHoldersadm_plano_profissional;
$page_titles["adm_plano_profissional"] = &$pageTitlesadm_plano_profissional;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_plano_profissional"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_plano_profissional"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_plano_profissional()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pla_id,  	pla_tipo,  	pla_nome,  	pla_pro_grupo_nome,  	pla_tempo,  	pla_parcelas,  	pla_finalizacao,  	pla_obs,  	pla_deletado";
$proto0["m_strFrom"] = "FROM adm_plano_profissional";
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
	"m_strName" => "pla_id",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto6["m_sql"] = "pla_id";
$proto6["m_srcTableName"] = "adm_plano_profissional";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_tipo",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto8["m_sql"] = "pla_tipo";
$proto8["m_srcTableName"] = "adm_plano_profissional";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_nome",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto10["m_sql"] = "pla_nome";
$proto10["m_srcTableName"] = "adm_plano_profissional";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_pro_grupo_nome",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto12["m_sql"] = "pla_pro_grupo_nome";
$proto12["m_srcTableName"] = "adm_plano_profissional";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_tempo",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto14["m_sql"] = "pla_tempo";
$proto14["m_srcTableName"] = "adm_plano_profissional";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_parcelas",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto16["m_sql"] = "pla_parcelas";
$proto16["m_srcTableName"] = "adm_plano_profissional";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_finalizacao",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto18["m_sql"] = "pla_finalizacao";
$proto18["m_srcTableName"] = "adm_plano_profissional";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_obs",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto20["m_sql"] = "pla_obs";
$proto20["m_srcTableName"] = "adm_plano_profissional";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "pla_deletado",
	"m_strTable" => "adm_plano_profissional",
	"m_srcTableName" => "adm_plano_profissional"
));

$proto22["m_sql"] = "pla_deletado";
$proto22["m_srcTableName"] = "adm_plano_profissional";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "adm_plano_profissional";
$proto25["m_srcTableName"] = "adm_plano_profissional";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "pla_id";
$proto25["m_columns"][] = "pla_tipo";
$proto25["m_columns"][] = "pla_nome";
$proto25["m_columns"][] = "pla_pro_grupo_nome";
$proto25["m_columns"][] = "pla_tempo";
$proto25["m_columns"][] = "pla_parcelas";
$proto25["m_columns"][] = "pla_finalizacao";
$proto25["m_columns"][] = "pla_obs";
$proto25["m_columns"][] = "pla_deletado";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "adm_plano_profissional";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "adm_plano_profissional";
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
$proto0["m_srcTableName"]="adm_plano_profissional";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_plano_profissional = createSqlQuery_adm_plano_profissional();


	
		;

									

$tdataadm_plano_profissional[".sqlquery"] = $queryData_adm_plano_profissional;



$tableEvents["adm_plano_profissional"] = new eventsBase;
$tdataadm_plano_profissional[".hasEvents"] = false;

?>