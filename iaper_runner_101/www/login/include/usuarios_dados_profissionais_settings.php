<?php
$tdatausuarios_dados_profissionais = array();
$tdatausuarios_dados_profissionais[".searchableFields"] = array();
$tdatausuarios_dados_profissionais[".ShortName"] = "usuarios_dados_profissionais";
$tdatausuarios_dados_profissionais[".OwnerID"] = "udp_usu_id";
$tdatausuarios_dados_profissionais[".OriginalTable"] = "usuarios_dados_profissionais";


$tdatausuarios_dados_profissionais[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatausuarios_dados_profissionais[".originalPagesByType"] = $tdatausuarios_dados_profissionais[".pagesByType"];
$tdatausuarios_dados_profissionais[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatausuarios_dados_profissionais[".originalPages"] = $tdatausuarios_dados_profissionais[".pages"];
$tdatausuarios_dados_profissionais[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatausuarios_dados_profissionais[".originalDefaultPages"] = $tdatausuarios_dados_profissionais[".defaultPages"];

//	field labels
$fieldLabelsusuarios_dados_profissionais = array();
$fieldToolTipsusuarios_dados_profissionais = array();
$pageTitlesusuarios_dados_profissionais = array();
$placeHoldersusuarios_dados_profissionais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"] = array();
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"] = array();
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"] = array();
	$pageTitlesusuarios_dados_profissionais["Portuguese(Brazil)"] = array();
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_id"] = "Id";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_id"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_id"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_usu_id"] = "Usu Id";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_usu_id"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_usu_id"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["email_profissional"] = "Email ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["email_profissional"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["email_profissional"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["avaliacao_usuarios"] = "Avaliacao ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["avaliacao_usuarios"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["avaliacao_usuarios"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["sobre_profissional"] = "Sobre ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["sobre_profissional"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["sobre_profissional"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao"] = "Resumo ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["yt_code_apresentacao"] = "Yt Code Apresentacao";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["yt_code_apresentacao"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["yt_code_apresentacao"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["diferencial_profissional"] = "Diferencial Profissional";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["diferencial_profissional"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["diferencial_profissional"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["atendimento_presencial"] = "Atendimento Presencial";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["atendimento_presencial"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["atendimento_presencial"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["atendimento_online"] = "Atendimento Online";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["atendimento_online"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["atendimento_online"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["mini_curriculo"] = "Mini Curriculo";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["mini_curriculo"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["mini_curriculo"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao_academica"] = "Resumo Formacao Academica";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao_academica"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao_academica"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao_cursos"] = "Resumo Formacao Cursos";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao_cursos"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["resumo_formacao_cursos"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["curriculo_lattes"] = "Curriculo Lattes";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["curriculo_lattes"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["curriculo_lattes"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["nome_empresa"] = "Empresa";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["nome_empresa"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["nome_empresa"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["cnpj"] = "Cnpj";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["cnpj"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["cnpj"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["ramo_empresa"] = "Ramo ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["ramo_empresa"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["ramo_empresa"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["tipo_empresa"] = "Tipo ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["tipo_empresa"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["tipo_empresa"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["cep_profissional"] = "Cep ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["cep_profissional"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["cep_profissional"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_rua"] = "Rua";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_rua"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_rua"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_numero"] = "Numero";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_numero"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_numero"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_complemento"] = "Complemento";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_complemento"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_complemento"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_latitude"] = "Endereco Profissional Latitude";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_latitude"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_latitude"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_longitude"] = "Endereco Profissional Longitude";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_longitude"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["endereco_profissional_longitude"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["pais_empresa"] = "Pais ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["pais_empresa"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["pais_empresa"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["estado_empresa"] = "Estado ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["estado_empresa"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["estado_empresa"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["municipio_empresa"] = "Municipio ";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["municipio_empresa"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["municipio_empresa"] = "";
	$fieldLabelsusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_deletado"] = "Udp Deletado";
	$fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_deletado"] = "";
	$placeHoldersusuarios_dados_profissionais["Portuguese(Brazil)"]["udp_deletado"] = "";
	if (count($fieldToolTipsusuarios_dados_profissionais["Portuguese(Brazil)"]))
		$tdatausuarios_dados_profissionais[".isUseToolTips"] = true;
}


	$tdatausuarios_dados_profissionais[".NCSearch"] = true;



$tdatausuarios_dados_profissionais[".shortTableName"] = "usuarios_dados_profissionais";
$tdatausuarios_dados_profissionais[".nSecOptions"] = 1;

$tdatausuarios_dados_profissionais[".mainTableOwnerID"] = "udp_usu_id";
$tdatausuarios_dados_profissionais[".entityType"] = 0;
$tdatausuarios_dados_profissionais[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatausuarios_dados_profissionais[".strOriginalTableName"] = "usuarios_dados_profissionais";

	



$tdatausuarios_dados_profissionais[".showAddInPopup"] = false;

$tdatausuarios_dados_profissionais[".showEditInPopup"] = false;

$tdatausuarios_dados_profissionais[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuarios_dados_profissionais[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuarios_dados_profissionais[".listAjax"] = false;
//	temporary
//$tdatausuarios_dados_profissionais[".listAjax"] = false;

	$tdatausuarios_dados_profissionais[".audit"] = false;

	$tdatausuarios_dados_profissionais[".locking"] = false;


$pages = $tdatausuarios_dados_profissionais[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios_dados_profissionais[".edit"] = true;
	$tdatausuarios_dados_profissionais[".afterEditAction"] = 0;
	$tdatausuarios_dados_profissionais[".closePopupAfterEdit"] = 1;
	$tdatausuarios_dados_profissionais[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios_dados_profissionais[".add"] = true;
$tdatausuarios_dados_profissionais[".afterAddAction"] = 1;
$tdatausuarios_dados_profissionais[".closePopupAfterAdd"] = 1;
$tdatausuarios_dados_profissionais[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios_dados_profissionais[".list"] = true;
}



$tdatausuarios_dados_profissionais[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios_dados_profissionais[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios_dados_profissionais[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios_dados_profissionais[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios_dados_profissionais[".printFriendly"] = true;
}



$tdatausuarios_dados_profissionais[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios_dados_profissionais[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios_dados_profissionais[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios_dados_profissionais[".isUseAjaxSuggest"] = true;

$tdatausuarios_dados_profissionais[".rowHighlite"] = true;





$tdatausuarios_dados_profissionais[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios_dados_profissionais[".buttonsAdded"] = false;

$tdatausuarios_dados_profissionais[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios_dados_profissionais[".isUseTimeForSearch"] = false;


$tdatausuarios_dados_profissionais[".badgeColor"] = "c0c0c0";


$tdatausuarios_dados_profissionais[".allSearchFields"] = array();
$tdatausuarios_dados_profissionais[".filterFields"] = array();
$tdatausuarios_dados_profissionais[".requiredSearchFields"] = array();

$tdatausuarios_dados_profissionais[".googleLikeFields"] = array();
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "udp_id";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "udp_usu_id";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "email_profissional";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "avaliacao_usuarios";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "sobre_profissional";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "resumo_formacao";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "yt_code_apresentacao";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "diferencial_profissional";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "atendimento_presencial";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "atendimento_online";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "mini_curriculo";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "resumo_formacao_academica";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "resumo_formacao_cursos";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "curriculo_lattes";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "nome_empresa";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "cnpj";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "ramo_empresa";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "tipo_empresa";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "cep_profissional";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "endereco_profissional_rua";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "endereco_profissional_numero";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "endereco_profissional_complemento";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "endereco_profissional_latitude";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "endereco_profissional_longitude";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "pais_empresa";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "estado_empresa";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "municipio_empresa";
$tdatausuarios_dados_profissionais[".googleLikeFields"][] = "udp_deletado";



$tdatausuarios_dados_profissionais[".tableType"] = "list";

$tdatausuarios_dados_profissionais[".printerPageOrientation"] = 0;
$tdatausuarios_dados_profissionais[".nPrinterPageScale"] = 100;

$tdatausuarios_dados_profissionais[".nPrinterSplitRecords"] = 40;

$tdatausuarios_dados_profissionais[".geocodingEnabled"] = false;










$tdatausuarios_dados_profissionais[".pageSize"] = 20;

$tdatausuarios_dados_profissionais[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios_dados_profissionais[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios_dados_profissionais[".orderindexes"] = array();


$tdatausuarios_dados_profissionais[".sqlHead"] = "SELECT udp_id,  	udp_usu_id,  	email_profissional,  	avaliacao_usuarios,  	sobre_profissional,  	resumo_formacao,  	yt_code_apresentacao,  	diferencial_profissional,  	atendimento_presencial,  	atendimento_online,  	mini_curriculo,  	resumo_formacao_academica,  	resumo_formacao_cursos,  	curriculo_lattes,  	nome_empresa,  	cnpj,  	ramo_empresa,  	tipo_empresa,  	cep_profissional,  	endereco_profissional_rua,  	endereco_profissional_numero,  	endereco_profissional_complemento,  	endereco_profissional_latitude,  	endereco_profissional_longitude,  	pais_empresa,  	estado_empresa,  	municipio_empresa,  	udp_deletado";
$tdatausuarios_dados_profissionais[".sqlFrom"] = "FROM usuarios_dados_profissionais";
$tdatausuarios_dados_profissionais[".sqlWhereExpr"] = "";
$tdatausuarios_dados_profissionais[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios_dados_profissionais[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios_dados_profissionais[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios_dados_profissionais[".highlightSearchResults"] = true;

$tableKeysusuarios_dados_profissionais = array();
$tableKeysusuarios_dados_profissionais[] = "udp_id";
$tdatausuarios_dados_profissionais[".Keys"] = $tableKeysusuarios_dados_profissionais;


$tdatausuarios_dados_profissionais[".hideMobileList"] = array();




//	udp_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "udp_id";
	$fdata["GoodName"] = "udp_id";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","udp_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "udp_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "udp_id";

	
	
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


	$tdatausuarios_dados_profissionais["udp_id"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "udp_id";
//	udp_usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "udp_usu_id";
	$fdata["GoodName"] = "udp_usu_id";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","udp_usu_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "udp_usu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "udp_usu_id";

	
	
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


	$tdatausuarios_dados_profissionais["udp_usu_id"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "udp_usu_id";
//	email_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "email_profissional";
	$fdata["GoodName"] = "email_profissional";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","email_profissional");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "email_profissional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_profissional";

	
	
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


	$tdatausuarios_dados_profissionais["email_profissional"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "email_profissional";
//	avaliacao_usuarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "avaliacao_usuarios";
	$fdata["GoodName"] = "avaliacao_usuarios";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","avaliacao_usuarios");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "avaliacao_usuarios";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avaliacao_usuarios";

	
	
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


	$tdatausuarios_dados_profissionais["avaliacao_usuarios"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "avaliacao_usuarios";
//	sobre_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sobre_profissional";
	$fdata["GoodName"] = "sobre_profissional";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","sobre_profissional");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sobre_profissional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sobre_profissional";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["sobre_profissional"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "sobre_profissional";
//	resumo_formacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resumo_formacao";
	$fdata["GoodName"] = "resumo_formacao";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","resumo_formacao");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "resumo_formacao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resumo_formacao";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["resumo_formacao"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "resumo_formacao";
//	yt_code_apresentacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "yt_code_apresentacao";
	$fdata["GoodName"] = "yt_code_apresentacao";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","yt_code_apresentacao");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "yt_code_apresentacao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "yt_code_apresentacao";

	
	
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
			$edata["EditParams"].= " maxlength=31";

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


	$tdatausuarios_dados_profissionais["yt_code_apresentacao"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "yt_code_apresentacao";
//	diferencial_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "diferencial_profissional";
	$fdata["GoodName"] = "diferencial_profissional";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","diferencial_profissional");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "diferencial_profissional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "diferencial_profissional";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["diferencial_profissional"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "diferencial_profissional";
//	atendimento_presencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "atendimento_presencial";
	$fdata["GoodName"] = "atendimento_presencial";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","atendimento_presencial");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "atendimento_presencial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "atendimento_presencial";

	
	
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
	$edata["LookupValues"][] = "S";
	$edata["LookupValues"][] = "N";

	
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


	$tdatausuarios_dados_profissionais["atendimento_presencial"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "atendimento_presencial";
//	atendimento_online
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "atendimento_online";
	$fdata["GoodName"] = "atendimento_online";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","atendimento_online");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "atendimento_online";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "atendimento_online";

	
	
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
	$edata["LookupValues"][] = "S";
	$edata["LookupValues"][] = "N";

	
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


	$tdatausuarios_dados_profissionais["atendimento_online"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "atendimento_online";
//	mini_curriculo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "mini_curriculo";
	$fdata["GoodName"] = "mini_curriculo";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","mini_curriculo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "mini_curriculo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mini_curriculo";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["mini_curriculo"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "mini_curriculo";
//	resumo_formacao_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "resumo_formacao_academica";
	$fdata["GoodName"] = "resumo_formacao_academica";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","resumo_formacao_academica");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "resumo_formacao_academica";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resumo_formacao_academica";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["resumo_formacao_academica"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "resumo_formacao_academica";
//	resumo_formacao_cursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "resumo_formacao_cursos";
	$fdata["GoodName"] = "resumo_formacao_cursos";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","resumo_formacao_cursos");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "resumo_formacao_cursos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resumo_formacao_cursos";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["resumo_formacao_cursos"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "resumo_formacao_cursos";
//	curriculo_lattes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "curriculo_lattes";
	$fdata["GoodName"] = "curriculo_lattes";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","curriculo_lattes");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "curriculo_lattes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "curriculo_lattes";

	
	
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

	
	
	
				$edata["nRows"] = 200;
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


	$tdatausuarios_dados_profissionais["curriculo_lattes"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "curriculo_lattes";
//	nome_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "nome_empresa";
	$fdata["GoodName"] = "nome_empresa";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","nome_empresa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome_empresa";

	
	
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
			$edata["EditParams"].= " maxlength=127";

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


	$tdatausuarios_dados_profissionais["nome_empresa"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "nome_empresa";
//	cnpj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cnpj";
	$fdata["GoodName"] = "cnpj";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","cnpj");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cnpj";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cnpj";

	
	
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


	$tdatausuarios_dados_profissionais["cnpj"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "cnpj";
//	ramo_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "ramo_empresa";
	$fdata["GoodName"] = "ramo_empresa";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","ramo_empresa");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "ramo_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ramo_empresa";

	
	
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
	$edata["LookupTable"] = "adm_ramos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idRamo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Ramo";

	

	
	$edata["LookupOrderBy"] = "Ramo";

	
	
	
	

	
	
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


	$tdatausuarios_dados_profissionais["ramo_empresa"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "ramo_empresa";
//	tipo_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "tipo_empresa";
	$fdata["GoodName"] = "tipo_empresa";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","tipo_empresa");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "tipo_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_empresa";

	
	
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
	$edata["LookupTable"] = "adm_tipousuario";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idtipo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Tipo";

	

	
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


	$tdatausuarios_dados_profissionais["tipo_empresa"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "tipo_empresa";
//	cep_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cep_profissional";
	$fdata["GoodName"] = "cep_profissional";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","cep_profissional");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cep_profissional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cep_profissional";

	
	
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


	$tdatausuarios_dados_profissionais["cep_profissional"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "cep_profissional";
//	endereco_profissional_rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "endereco_profissional_rua";
	$fdata["GoodName"] = "endereco_profissional_rua";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","endereco_profissional_rua");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "endereco_profissional_rua";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco_profissional_rua";

	
	
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
			$edata["EditParams"].= " maxlength=511";

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


	$tdatausuarios_dados_profissionais["endereco_profissional_rua"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "endereco_profissional_rua";
//	endereco_profissional_numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "endereco_profissional_numero";
	$fdata["GoodName"] = "endereco_profissional_numero";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","endereco_profissional_numero");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "endereco_profissional_numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco_profissional_numero";

	
	
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


	$tdatausuarios_dados_profissionais["endereco_profissional_numero"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "endereco_profissional_numero";
//	endereco_profissional_complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "endereco_profissional_complemento";
	$fdata["GoodName"] = "endereco_profissional_complemento";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","endereco_profissional_complemento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "endereco_profissional_complemento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco_profissional_complemento";

	
	
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
			$edata["EditParams"].= " maxlength=63";

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


	$tdatausuarios_dados_profissionais["endereco_profissional_complemento"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "endereco_profissional_complemento";
//	endereco_profissional_latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "endereco_profissional_latitude";
	$fdata["GoodName"] = "endereco_profissional_latitude";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","endereco_profissional_latitude");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "endereco_profissional_latitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco_profissional_latitude";

	
	
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


	$tdatausuarios_dados_profissionais["endereco_profissional_latitude"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "endereco_profissional_latitude";
//	endereco_profissional_longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "endereco_profissional_longitude";
	$fdata["GoodName"] = "endereco_profissional_longitude";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","endereco_profissional_longitude");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "endereco_profissional_longitude";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco_profissional_longitude";

	
	
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


	$tdatausuarios_dados_profissionais["endereco_profissional_longitude"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "endereco_profissional_longitude";
//	pais_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "pais_empresa";
	$fdata["GoodName"] = "pais_empresa";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","pais_empresa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais_empresa";

	
	
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
			$edata["EditParams"].= " maxlength=63";

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


	$tdatausuarios_dados_profissionais["pais_empresa"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "pais_empresa";
//	estado_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "estado_empresa";
	$fdata["GoodName"] = "estado_empresa";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","estado_empresa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_empresa";

	
	
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
			$edata["EditParams"].= " maxlength=63";

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


	$tdatausuarios_dados_profissionais["estado_empresa"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "estado_empresa";
//	municipio_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "municipio_empresa";
	$fdata["GoodName"] = "municipio_empresa";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","municipio_empresa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "municipio_empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio_empresa";

	
	
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
			$edata["EditParams"].= " maxlength=63";

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


	$tdatausuarios_dados_profissionais["municipio_empresa"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "municipio_empresa";
//	udp_deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "udp_deletado";
	$fdata["GoodName"] = "udp_deletado";
	$fdata["ownerTable"] = "usuarios_dados_profissionais";
	$fdata["Label"] = GetFieldLabel("usuarios_dados_profissionais","udp_deletado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "udp_deletado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "udp_deletado";

	
	
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


	$tdatausuarios_dados_profissionais["udp_deletado"] = $fdata;
		$tdatausuarios_dados_profissionais[".searchableFields"][] = "udp_deletado";


$tables_data["usuarios_dados_profissionais"]=&$tdatausuarios_dados_profissionais;
$field_labels["usuarios_dados_profissionais"] = &$fieldLabelsusuarios_dados_profissionais;
$fieldToolTips["usuarios_dados_profissionais"] = &$fieldToolTipsusuarios_dados_profissionais;
$placeHolders["usuarios_dados_profissionais"] = &$placeHoldersusuarios_dados_profissionais;
$page_titles["usuarios_dados_profissionais"] = &$pageTitlesusuarios_dados_profissionais;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios_dados_profissionais"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usuarios_dados_profissionais"] = array();



	
				$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["usuarios_dados_profissionais"][0] = $masterParams;
				$masterTablesData["usuarios_dados_profissionais"][0]["masterKeys"] = array();
	$masterTablesData["usuarios_dados_profissionais"][0]["masterKeys"][]="usu_id";
				$masterTablesData["usuarios_dados_profissionais"][0]["detailKeys"] = array();
	$masterTablesData["usuarios_dados_profissionais"][0]["detailKeys"][]="udp_usu_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarios_dados_profissionais()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "udp_id,  	udp_usu_id,  	email_profissional,  	avaliacao_usuarios,  	sobre_profissional,  	resumo_formacao,  	yt_code_apresentacao,  	diferencial_profissional,  	atendimento_presencial,  	atendimento_online,  	mini_curriculo,  	resumo_formacao_academica,  	resumo_formacao_cursos,  	curriculo_lattes,  	nome_empresa,  	cnpj,  	ramo_empresa,  	tipo_empresa,  	cep_profissional,  	endereco_profissional_rua,  	endereco_profissional_numero,  	endereco_profissional_complemento,  	endereco_profissional_latitude,  	endereco_profissional_longitude,  	pais_empresa,  	estado_empresa,  	municipio_empresa,  	udp_deletado";
$proto0["m_strFrom"] = "FROM usuarios_dados_profissionais";
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
	"m_strName" => "udp_id",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto6["m_sql"] = "udp_id";
$proto6["m_srcTableName"] = "usuarios_dados_profissionais";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "udp_usu_id",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto8["m_sql"] = "udp_usu_id";
$proto8["m_srcTableName"] = "usuarios_dados_profissionais";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "email_profissional",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto10["m_sql"] = "email_profissional";
$proto10["m_srcTableName"] = "usuarios_dados_profissionais";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "avaliacao_usuarios",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto12["m_sql"] = "avaliacao_usuarios";
$proto12["m_srcTableName"] = "usuarios_dados_profissionais";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "sobre_profissional",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto14["m_sql"] = "sobre_profissional";
$proto14["m_srcTableName"] = "usuarios_dados_profissionais";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "resumo_formacao",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto16["m_sql"] = "resumo_formacao";
$proto16["m_srcTableName"] = "usuarios_dados_profissionais";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "yt_code_apresentacao",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto18["m_sql"] = "yt_code_apresentacao";
$proto18["m_srcTableName"] = "usuarios_dados_profissionais";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "diferencial_profissional",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto20["m_sql"] = "diferencial_profissional";
$proto20["m_srcTableName"] = "usuarios_dados_profissionais";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "atendimento_presencial",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto22["m_sql"] = "atendimento_presencial";
$proto22["m_srcTableName"] = "usuarios_dados_profissionais";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "atendimento_online",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto24["m_sql"] = "atendimento_online";
$proto24["m_srcTableName"] = "usuarios_dados_profissionais";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "mini_curriculo",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto26["m_sql"] = "mini_curriculo";
$proto26["m_srcTableName"] = "usuarios_dados_profissionais";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "resumo_formacao_academica",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto28["m_sql"] = "resumo_formacao_academica";
$proto28["m_srcTableName"] = "usuarios_dados_profissionais";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "resumo_formacao_cursos",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto30["m_sql"] = "resumo_formacao_cursos";
$proto30["m_srcTableName"] = "usuarios_dados_profissionais";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "curriculo_lattes",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto32["m_sql"] = "curriculo_lattes";
$proto32["m_srcTableName"] = "usuarios_dados_profissionais";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_empresa",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto34["m_sql"] = "nome_empresa";
$proto34["m_srcTableName"] = "usuarios_dados_profissionais";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto36["m_sql"] = "cnpj";
$proto36["m_srcTableName"] = "usuarios_dados_profissionais";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "ramo_empresa",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto38["m_sql"] = "ramo_empresa";
$proto38["m_srcTableName"] = "usuarios_dados_profissionais";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_empresa",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto40["m_sql"] = "tipo_empresa";
$proto40["m_srcTableName"] = "usuarios_dados_profissionais";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cep_profissional",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto42["m_sql"] = "cep_profissional";
$proto42["m_srcTableName"] = "usuarios_dados_profissionais";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_rua",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto44["m_sql"] = "endereco_profissional_rua";
$proto44["m_srcTableName"] = "usuarios_dados_profissionais";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_numero",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto46["m_sql"] = "endereco_profissional_numero";
$proto46["m_srcTableName"] = "usuarios_dados_profissionais";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_complemento",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto48["m_sql"] = "endereco_profissional_complemento";
$proto48["m_srcTableName"] = "usuarios_dados_profissionais";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_latitude",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto50["m_sql"] = "endereco_profissional_latitude";
$proto50["m_srcTableName"] = "usuarios_dados_profissionais";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_longitude",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto52["m_sql"] = "endereco_profissional_longitude";
$proto52["m_srcTableName"] = "usuarios_dados_profissionais";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_empresa",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto54["m_sql"] = "pais_empresa";
$proto54["m_srcTableName"] = "usuarios_dados_profissionais";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_empresa",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto56["m_sql"] = "estado_empresa";
$proto56["m_srcTableName"] = "usuarios_dados_profissionais";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_empresa",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto58["m_sql"] = "municipio_empresa";
$proto58["m_srcTableName"] = "usuarios_dados_profissionais";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "udp_deletado",
	"m_strTable" => "usuarios_dados_profissionais",
	"m_srcTableName" => "usuarios_dados_profissionais"
));

$proto60["m_sql"] = "udp_deletado";
$proto60["m_srcTableName"] = "usuarios_dados_profissionais";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "usuarios_dados_profissionais";
$proto63["m_srcTableName"] = "usuarios_dados_profissionais";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "udp_id";
$proto63["m_columns"][] = "udp_usu_id";
$proto63["m_columns"][] = "email_profissional";
$proto63["m_columns"][] = "avaliacao_usuarios";
$proto63["m_columns"][] = "sobre_profissional";
$proto63["m_columns"][] = "resumo_formacao";
$proto63["m_columns"][] = "yt_code_apresentacao";
$proto63["m_columns"][] = "diferencial_profissional";
$proto63["m_columns"][] = "atendimento_presencial";
$proto63["m_columns"][] = "atendimento_online";
$proto63["m_columns"][] = "mini_curriculo";
$proto63["m_columns"][] = "resumo_formacao_academica";
$proto63["m_columns"][] = "resumo_formacao_cursos";
$proto63["m_columns"][] = "curriculo_lattes";
$proto63["m_columns"][] = "nome_empresa";
$proto63["m_columns"][] = "cnpj";
$proto63["m_columns"][] = "ramo_empresa";
$proto63["m_columns"][] = "tipo_empresa";
$proto63["m_columns"][] = "cep_profissional";
$proto63["m_columns"][] = "endereco_profissional_rua";
$proto63["m_columns"][] = "endereco_profissional_numero";
$proto63["m_columns"][] = "endereco_profissional_complemento";
$proto63["m_columns"][] = "endereco_profissional_latitude";
$proto63["m_columns"][] = "endereco_profissional_longitude";
$proto63["m_columns"][] = "pais_empresa";
$proto63["m_columns"][] = "estado_empresa";
$proto63["m_columns"][] = "municipio_empresa";
$proto63["m_columns"][] = "udp_deletado";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "usuarios_dados_profissionais";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "usuarios_dados_profissionais";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuarios_dados_profissionais";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios_dados_profissionais = createSqlQuery_usuarios_dados_profissionais();


	
		;

																												

$tdatausuarios_dados_profissionais[".sqlquery"] = $queryData_usuarios_dados_profissionais;



$tableEvents["usuarios_dados_profissionais"] = new eventsBase;
$tdatausuarios_dados_profissionais[".hasEvents"] = false;

?>