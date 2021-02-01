<?php
$tdataadm_agenda_config_1 = array();
$tdataadm_agenda_config_1[".searchableFields"] = array();
$tdataadm_agenda_config_1[".ShortName"] = "adm_agenda_config_1";
$tdataadm_agenda_config_1[".OwnerID"] = "agc_usu_pro_id";
$tdataadm_agenda_config_1[".OriginalTable"] = "adm_agenda_config_1";


$tdataadm_agenda_config_1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_agenda_config_1[".originalPagesByType"] = $tdataadm_agenda_config_1[".pagesByType"];
$tdataadm_agenda_config_1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_agenda_config_1[".originalPages"] = $tdataadm_agenda_config_1[".pages"];
$tdataadm_agenda_config_1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_agenda_config_1[".originalDefaultPages"] = $tdataadm_agenda_config_1[".defaultPages"];

//	field labels
$fieldLabelsadm_agenda_config_1 = array();
$fieldToolTipsadm_agenda_config_1 = array();
$pageTitlesadm_agenda_config_1 = array();
$placeHoldersadm_agenda_config_1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_agenda_config_1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_id"] = "Id";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_id"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_id"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_usu_pro_id"] = "Profissional";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_usu_pro_id"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_usu_pro_id"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_nome"] = "Nome";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_nome"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_nome"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_tipo"] = "Tipo";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_tipo"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_tipo"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_item_pagamento_id"] = "Forma de Pagamento";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_item_pagamento_id"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_item_pagamento_id"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_qtidade"] = "Quantidade";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_qtidade"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_qtidade"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_duracao_media"] = "Duração Média";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_duracao_media"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_duracao_media"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_automatico"] = "Email Automático";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_automatico"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_automatico"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_tempo_min_antecedencia"] = "Tempo Min Antecedência";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_tempo_min_antecedencia"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_tempo_min_antecedencia"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento"] = "Email ";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete"] = "Email ";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento"] = "Email ";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_deletado"] = "Agc Deletado";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_deletado"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_deletado"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento_titulo"] = "Título";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento_titulo"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento_titulo"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento_assinatura"] = "Assinatura";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento_assinatura"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_agendamento_assinatura"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete_titulo"] = "Título";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete_titulo"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete_titulo"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete_assinatura"] = "Assinatura";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete_assinatura"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_lembrete_assinatura"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento_titulo"] = "Título";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento_titulo"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento_titulo"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento_assinatura"] = "Assinatura";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento_assinatura"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_email_cancelamento_assinatura"] = "";
	$fieldLabelsadm_agenda_config_1["Portuguese(Brazil)"]["agc_link_consulta"] = "Link Consulta";
	$fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]["agc_link_consulta"] = "";
	$placeHoldersadm_agenda_config_1["Portuguese(Brazil)"]["agc_link_consulta"] = "";
	if (count($fieldToolTipsadm_agenda_config_1["Portuguese(Brazil)"]))
		$tdataadm_agenda_config_1[".isUseToolTips"] = true;
}


	$tdataadm_agenda_config_1[".NCSearch"] = true;



$tdataadm_agenda_config_1[".shortTableName"] = "adm_agenda_config_1";
$tdataadm_agenda_config_1[".nSecOptions"] = 2;

$tdataadm_agenda_config_1[".mainTableOwnerID"] = "agc_usu_pro_id";
$tdataadm_agenda_config_1[".entityType"] = 0;
$tdataadm_agenda_config_1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_agenda_config_1[".strOriginalTableName"] = "adm_agenda_config_1";

	



$tdataadm_agenda_config_1[".showAddInPopup"] = false;

$tdataadm_agenda_config_1[".showEditInPopup"] = false;

$tdataadm_agenda_config_1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_agenda_config_1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_agenda_config_1[".listAjax"] = false;
//	temporary
//$tdataadm_agenda_config_1[".listAjax"] = false;

	$tdataadm_agenda_config_1[".audit"] = false;

	$tdataadm_agenda_config_1[".locking"] = false;


$pages = $tdataadm_agenda_config_1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_agenda_config_1[".edit"] = true;
	$tdataadm_agenda_config_1[".afterEditAction"] = 1;
	$tdataadm_agenda_config_1[".closePopupAfterEdit"] = 1;
	$tdataadm_agenda_config_1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_agenda_config_1[".add"] = true;
$tdataadm_agenda_config_1[".afterAddAction"] = 1;
$tdataadm_agenda_config_1[".closePopupAfterAdd"] = 1;
$tdataadm_agenda_config_1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_agenda_config_1[".list"] = true;
}



$tdataadm_agenda_config_1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_agenda_config_1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_agenda_config_1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_agenda_config_1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_agenda_config_1[".printFriendly"] = true;
}



$tdataadm_agenda_config_1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_agenda_config_1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_agenda_config_1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_agenda_config_1[".isUseAjaxSuggest"] = true;

$tdataadm_agenda_config_1[".rowHighlite"] = true;



			

$tdataadm_agenda_config_1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_agenda_config_1[".buttonsAdded"] = false;

$tdataadm_agenda_config_1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_agenda_config_1[".isUseTimeForSearch"] = false;


$tdataadm_agenda_config_1[".badgeColor"] = "4169E1";


$tdataadm_agenda_config_1[".allSearchFields"] = array();
$tdataadm_agenda_config_1[".filterFields"] = array();
$tdataadm_agenda_config_1[".requiredSearchFields"] = array();

$tdataadm_agenda_config_1[".googleLikeFields"] = array();
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_id";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_usu_pro_id";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_nome";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_tipo";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_item_pagamento_id";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_qtidade";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_duracao_media";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_automatico";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_tempo_min_antecedencia";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_agendamento";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_lembrete";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_cancelamento";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_deletado";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_agendamento_titulo";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_agendamento_assinatura";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_lembrete_titulo";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_lembrete_assinatura";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_cancelamento_titulo";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_email_cancelamento_assinatura";
$tdataadm_agenda_config_1[".googleLikeFields"][] = "agc_link_consulta";



$tdataadm_agenda_config_1[".tableType"] = "list";

$tdataadm_agenda_config_1[".printerPageOrientation"] = 0;
$tdataadm_agenda_config_1[".nPrinterPageScale"] = 100;

$tdataadm_agenda_config_1[".nPrinterSplitRecords"] = 40;

$tdataadm_agenda_config_1[".geocodingEnabled"] = false;










$tdataadm_agenda_config_1[".pageSize"] = 20;

$tdataadm_agenda_config_1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_agenda_config_1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_agenda_config_1[".orderindexes"] = array();


$tdataadm_agenda_config_1[".sqlHead"] = "SELECT agc_id,  	agc_usu_pro_id,  	agc_nome,  	agc_tipo,  	agc_item_pagamento_id,  	agc_qtidade,  	agc_duracao_media,  	agc_email_automatico,  	agc_tempo_min_antecedencia,  	agc_email_agendamento,  	agc_email_lembrete,  	agc_email_cancelamento,  	agc_deletado,  	agc_email_agendamento_titulo,  	agc_email_agendamento_assinatura,  	agc_email_lembrete_titulo,  	agc_email_lembrete_assinatura,  	agc_email_cancelamento_titulo,  	agc_email_cancelamento_assinatura,  	agc_link_consulta";
$tdataadm_agenda_config_1[".sqlFrom"] = "FROM adm_agenda_config_1";
$tdataadm_agenda_config_1[".sqlWhereExpr"] = "";
$tdataadm_agenda_config_1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_agenda_config_1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_agenda_config_1[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_agenda_config_1[".highlightSearchResults"] = true;

$tableKeysadm_agenda_config_1 = array();
$tableKeysadm_agenda_config_1[] = "agc_id";
$tdataadm_agenda_config_1[".Keys"] = $tableKeysadm_agenda_config_1;


$tdataadm_agenda_config_1[".hideMobileList"] = array();




//	agc_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "agc_id";
	$fdata["GoodName"] = "agc_id";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "agc_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_id";

	
	
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


	$tdataadm_agenda_config_1["agc_id"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_id";
//	agc_usu_pro_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "agc_usu_pro_id";
	$fdata["GoodName"] = "agc_usu_pro_id";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_usu_pro_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agc_usu_pro_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_usu_pro_id";

	
	
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
	$edata["LookupTable"] = "adm_usuarios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "usu_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "nome";

	
	
	
	

	
	
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


	$tdataadm_agenda_config_1["agc_usu_pro_id"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_usu_pro_id";
//	agc_nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "agc_nome";
	$fdata["GoodName"] = "agc_nome";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_nome";

	
	
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
			$edata["EditParams"].= " maxlength=31";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Nome já existe.", "messageType" => "Text");

	
	//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdataadm_agenda_config_1["agc_nome"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_nome";
//	agc_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "agc_tipo";
	$fdata["GoodName"] = "agc_tipo";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_tipo");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "agc_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_tipo";

	
	
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


	$tdataadm_agenda_config_1["agc_tipo"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_tipo";
//	agc_item_pagamento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "agc_item_pagamento_id";
	$fdata["GoodName"] = "agc_item_pagamento_id";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_item_pagamento_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agc_item_pagamento_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_item_pagamento_id";

	
	
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
	$edata["LookupTable"] = "adm_agenda_tipos_recebimento";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "atr_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "atr_nome";

	

	
	$edata["LookupOrderBy"] = "atr_nome";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdataadm_agenda_config_1["agc_item_pagamento_id"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_item_pagamento_id";
//	agc_qtidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "agc_qtidade";
	$fdata["GoodName"] = "agc_qtidade";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_qtidade");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agc_qtidade";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_qtidade";

	
	
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
	$edata["LookupTable"] = "adm_parametros_config";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idParametros";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "idParametros";

	

	
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


	$tdataadm_agenda_config_1["agc_qtidade"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_qtidade";
//	agc_duracao_media
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "agc_duracao_media";
	$fdata["GoodName"] = "agc_duracao_media";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_duracao_media");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agc_duracao_media";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_duracao_media";

	
	
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
	$edata["LookupTable"] = "adm_parametros_config";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idParametros";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "idParametros";

	

	
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


	$tdataadm_agenda_config_1["agc_duracao_media"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_duracao_media";
//	agc_email_automatico
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "agc_email_automatico";
	$fdata["GoodName"] = "agc_email_automatico";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_automatico");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agc_email_automatico";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_automatico";

	
	
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
	$edata["LookupTable"] = "adm_tipo_config";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ID0";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Texto";

	

	
	$edata["LookupOrderBy"] = "Texto";

	
	
	
	

	
	
	
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


	$tdataadm_agenda_config_1["agc_email_automatico"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_automatico";
//	agc_tempo_min_antecedencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "agc_tempo_min_antecedencia";
	$fdata["GoodName"] = "agc_tempo_min_antecedencia";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_tempo_min_antecedencia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "agc_tempo_min_antecedencia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_tempo_min_antecedencia";

	
	
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
	$edata["LookupTable"] = "adm_parametros_config";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idParametros";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "idParametros";

	

	
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


	$tdataadm_agenda_config_1["agc_tempo_min_antecedencia"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_tempo_min_antecedencia";
//	agc_email_agendamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "agc_email_agendamento";
	$fdata["GoodName"] = "agc_email_agendamento";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_agendamento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_agendamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_agendamento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_agendamento"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_agendamento";
//	agc_email_lembrete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "agc_email_lembrete";
	$fdata["GoodName"] = "agc_email_lembrete";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_lembrete");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_lembrete";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_lembrete";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_lembrete"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_lembrete";
//	agc_email_cancelamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "agc_email_cancelamento";
	$fdata["GoodName"] = "agc_email_cancelamento";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_cancelamento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_cancelamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_cancelamento";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_cancelamento"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_cancelamento";
//	agc_deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "agc_deletado";
	$fdata["GoodName"] = "agc_deletado";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_deletado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "agc_deletado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_deletado";

	
	
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


	$tdataadm_agenda_config_1["agc_deletado"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_deletado";
//	agc_email_agendamento_titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "agc_email_agendamento_titulo";
	$fdata["GoodName"] = "agc_email_agendamento_titulo";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_agendamento_titulo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_agendamento_titulo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_agendamento_titulo";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_agendamento_titulo"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_agendamento_titulo";
//	agc_email_agendamento_assinatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "agc_email_agendamento_assinatura";
	$fdata["GoodName"] = "agc_email_agendamento_assinatura";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_agendamento_assinatura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_agendamento_assinatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_agendamento_assinatura";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_agendamento_assinatura"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_agendamento_assinatura";
//	agc_email_lembrete_titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "agc_email_lembrete_titulo";
	$fdata["GoodName"] = "agc_email_lembrete_titulo";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_lembrete_titulo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_lembrete_titulo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_lembrete_titulo";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_lembrete_titulo"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_lembrete_titulo";
//	agc_email_lembrete_assinatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "agc_email_lembrete_assinatura";
	$fdata["GoodName"] = "agc_email_lembrete_assinatura";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_lembrete_assinatura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_lembrete_assinatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_lembrete_assinatura";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_lembrete_assinatura"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_lembrete_assinatura";
//	agc_email_cancelamento_titulo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "agc_email_cancelamento_titulo";
	$fdata["GoodName"] = "agc_email_cancelamento_titulo";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_cancelamento_titulo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_cancelamento_titulo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_cancelamento_titulo";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_cancelamento_titulo"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_cancelamento_titulo";
//	agc_email_cancelamento_assinatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "agc_email_cancelamento_assinatura";
	$fdata["GoodName"] = "agc_email_cancelamento_assinatura";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_email_cancelamento_assinatura");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_email_cancelamento_assinatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_email_cancelamento_assinatura";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdataadm_agenda_config_1["agc_email_cancelamento_assinatura"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_email_cancelamento_assinatura";
//	agc_link_consulta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "agc_link_consulta";
	$fdata["GoodName"] = "agc_link_consulta";
	$fdata["ownerTable"] = "adm_agenda_config_1";
	$fdata["Label"] = GetFieldLabel("adm_agenda_config_1","agc_link_consulta");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "agc_link_consulta";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agc_link_consulta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Link";
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


	$tdataadm_agenda_config_1["agc_link_consulta"] = $fdata;
		$tdataadm_agenda_config_1[".searchableFields"][] = "agc_link_consulta";


$tables_data["adm_agenda_config_1"]=&$tdataadm_agenda_config_1;
$field_labels["adm_agenda_config_1"] = &$fieldLabelsadm_agenda_config_1;
$fieldToolTips["adm_agenda_config_1"] = &$fieldToolTipsadm_agenda_config_1;
$placeHolders["adm_agenda_config_1"] = &$placeHoldersadm_agenda_config_1;
$page_titles["adm_agenda_config_1"] = &$pageTitlesadm_agenda_config_1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_agenda_config_1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_agenda_config_1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_agenda_config_1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "agc_id,  	agc_usu_pro_id,  	agc_nome,  	agc_tipo,  	agc_item_pagamento_id,  	agc_qtidade,  	agc_duracao_media,  	agc_email_automatico,  	agc_tempo_min_antecedencia,  	agc_email_agendamento,  	agc_email_lembrete,  	agc_email_cancelamento,  	agc_deletado,  	agc_email_agendamento_titulo,  	agc_email_agendamento_assinatura,  	agc_email_lembrete_titulo,  	agc_email_lembrete_assinatura,  	agc_email_cancelamento_titulo,  	agc_email_cancelamento_assinatura,  	agc_link_consulta";
$proto0["m_strFrom"] = "FROM adm_agenda_config_1";
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
	"m_strName" => "agc_id",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto6["m_sql"] = "agc_id";
$proto6["m_srcTableName"] = "adm_agenda_config_1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_usu_pro_id",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto8["m_sql"] = "agc_usu_pro_id";
$proto8["m_srcTableName"] = "adm_agenda_config_1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_nome",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto10["m_sql"] = "agc_nome";
$proto10["m_srcTableName"] = "adm_agenda_config_1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_tipo",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto12["m_sql"] = "agc_tipo";
$proto12["m_srcTableName"] = "adm_agenda_config_1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_item_pagamento_id",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto14["m_sql"] = "agc_item_pagamento_id";
$proto14["m_srcTableName"] = "adm_agenda_config_1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_qtidade",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto16["m_sql"] = "agc_qtidade";
$proto16["m_srcTableName"] = "adm_agenda_config_1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_duracao_media",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto18["m_sql"] = "agc_duracao_media";
$proto18["m_srcTableName"] = "adm_agenda_config_1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_automatico",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto20["m_sql"] = "agc_email_automatico";
$proto20["m_srcTableName"] = "adm_agenda_config_1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_tempo_min_antecedencia",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto22["m_sql"] = "agc_tempo_min_antecedencia";
$proto22["m_srcTableName"] = "adm_agenda_config_1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_agendamento",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto24["m_sql"] = "agc_email_agendamento";
$proto24["m_srcTableName"] = "adm_agenda_config_1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_lembrete",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto26["m_sql"] = "agc_email_lembrete";
$proto26["m_srcTableName"] = "adm_agenda_config_1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_cancelamento",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto28["m_sql"] = "agc_email_cancelamento";
$proto28["m_srcTableName"] = "adm_agenda_config_1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_deletado",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto30["m_sql"] = "agc_deletado";
$proto30["m_srcTableName"] = "adm_agenda_config_1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_agendamento_titulo",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto32["m_sql"] = "agc_email_agendamento_titulo";
$proto32["m_srcTableName"] = "adm_agenda_config_1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_agendamento_assinatura",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto34["m_sql"] = "agc_email_agendamento_assinatura";
$proto34["m_srcTableName"] = "adm_agenda_config_1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_lembrete_titulo",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto36["m_sql"] = "agc_email_lembrete_titulo";
$proto36["m_srcTableName"] = "adm_agenda_config_1";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_lembrete_assinatura",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto38["m_sql"] = "agc_email_lembrete_assinatura";
$proto38["m_srcTableName"] = "adm_agenda_config_1";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_cancelamento_titulo",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto40["m_sql"] = "agc_email_cancelamento_titulo";
$proto40["m_srcTableName"] = "adm_agenda_config_1";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_email_cancelamento_assinatura",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto42["m_sql"] = "agc_email_cancelamento_assinatura";
$proto42["m_srcTableName"] = "adm_agenda_config_1";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "agc_link_consulta",
	"m_strTable" => "adm_agenda_config_1",
	"m_srcTableName" => "adm_agenda_config_1"
));

$proto44["m_sql"] = "agc_link_consulta";
$proto44["m_srcTableName"] = "adm_agenda_config_1";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "adm_agenda_config_1";
$proto47["m_srcTableName"] = "adm_agenda_config_1";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "agc_id";
$proto47["m_columns"][] = "agc_usu_pro_id";
$proto47["m_columns"][] = "agc_nome";
$proto47["m_columns"][] = "agc_tipo";
$proto47["m_columns"][] = "agc_item_pagamento_id";
$proto47["m_columns"][] = "agc_qtidade";
$proto47["m_columns"][] = "agc_duracao_media";
$proto47["m_columns"][] = "agc_email_automatico";
$proto47["m_columns"][] = "agc_tempo_min_antecedencia";
$proto47["m_columns"][] = "agc_email_agendamento";
$proto47["m_columns"][] = "agc_email_lembrete";
$proto47["m_columns"][] = "agc_email_cancelamento";
$proto47["m_columns"][] = "agc_deletado";
$proto47["m_columns"][] = "agc_email_agendamento_titulo";
$proto47["m_columns"][] = "agc_email_agendamento_assinatura";
$proto47["m_columns"][] = "agc_email_lembrete_titulo";
$proto47["m_columns"][] = "agc_email_lembrete_assinatura";
$proto47["m_columns"][] = "agc_email_cancelamento_titulo";
$proto47["m_columns"][] = "agc_email_cancelamento_assinatura";
$proto47["m_columns"][] = "agc_link_consulta";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "adm_agenda_config_1";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "adm_agenda_config_1";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_agenda_config_1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_agenda_config_1 = createSqlQuery_adm_agenda_config_1();


	
		;

																				

$tdataadm_agenda_config_1[".sqlquery"] = $queryData_adm_agenda_config_1;



$tableEvents["adm_agenda_config_1"] = new eventsBase;
$tdataadm_agenda_config_1[".hasEvents"] = false;

?>