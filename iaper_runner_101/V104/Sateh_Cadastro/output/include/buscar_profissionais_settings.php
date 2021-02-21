<?php
$tdatabuscar_profissionais = array();
$tdatabuscar_profissionais[".searchableFields"] = array();
$tdatabuscar_profissionais[".ShortName"] = "buscar_profissionais";
$tdatabuscar_profissionais[".OwnerID"] = "";
$tdatabuscar_profissionais[".OriginalTable"] = "buscar_profissionais";


$tdatabuscar_profissionais[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabuscar_profissionais[".originalPagesByType"] = $tdatabuscar_profissionais[".pagesByType"];
$tdatabuscar_profissionais[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabuscar_profissionais[".originalPages"] = $tdatabuscar_profissionais[".pages"];
$tdatabuscar_profissionais[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabuscar_profissionais[".originalDefaultPages"] = $tdatabuscar_profissionais[".defaultPages"];

//	field labels
$fieldLabelsbuscar_profissionais = array();
$fieldToolTipsbuscar_profissionais = array();
$pageTitlesbuscar_profissionais = array();
$placeHoldersbuscar_profissionais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"] = array();
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"] = array();
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"] = array();
	$pageTitlesbuscar_profissionais["Portuguese(Brazil)"] = array();
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["usu_id"] = "Id";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["usu_id"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["usu_id"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["nome"] = "Profissional";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["sobrenome"] = "Sobrenome";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["sobrenome"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["sobrenome"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["data_in"] = "Data de Entrada";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["data_in"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["data_in"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["avatar"] = "Avatar";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["avatar"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["avatar"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["email_profissional"] = "Contato";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["email_profissional"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["email_profissional"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["avaliacao_usuarios"] = "Avaliação dos Usuários";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["avaliacao_usuarios"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["avaliacao_usuarios"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["sobre_profissional"] = "Sobre o Profissional";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["sobre_profissional"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["sobre_profissional"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao"] = "Resumo Formação";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["diferencial_profissional"] = "Diferencial Profissional";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["diferencial_profissional"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["diferencial_profissional"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["atendimento_presencial"] = "Atendimento Presencial";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["atendimento_presencial"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["atendimento_presencial"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["atendimento_online"] = "Atendimento Online";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["atendimento_online"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["atendimento_online"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["mini_curriculo"] = "Mini Curriculo";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["mini_curriculo"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["mini_curriculo"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao_academica"] = "Resumo Formação Academica";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao_academica"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao_academica"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao_cursos"] = "Resumo Formação Cursos";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao_cursos"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["resumo_formacao_cursos"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["curriculo_lattes"] = "Curriculo Lattes";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["curriculo_lattes"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["curriculo_lattes"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["nome_empresa"] = "Empresa";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["nome_empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["nome_empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["cnpj"] = "Cnpj";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["cnpj"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["cnpj"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["ramo_empresa"] = "Ramo da Empresa";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["ramo_empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["ramo_empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["tipo_empresa"] = "Tipo da Empresa";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["tipo_empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["tipo_empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["cep_profissional"] = "Cep Profissional";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["cep_profissional"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["cep_profissional"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_rua"] = "Endereço";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_rua"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_rua"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_numero"] = "Número";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_numero"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_numero"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_complemento"] = "Complemento";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_complemento"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_complemento"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_latitude"] = "Latitude";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_latitude"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_latitude"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_longitude"] = "Longitude";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_longitude"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_longitude"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["pais_empresa"] = "Pais ";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["pais_empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["pais_empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["estado_empresa"] = "Estado ";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["estado_empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["estado_empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["municipio_empresa"] = "Cidade";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["municipio_empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["municipio_empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Mapa"] = "Mapa";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Mapa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Mapa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Logotipo"] = "Logotipo";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Logotipo"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Logotipo"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Foto_Fechada"] = "Fechada";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Foto_Fechada"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Foto_Fechada"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_bairro"] = "Bairro";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_bairro"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["endereco_profissional_bairro"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Horarios_de_Atendimento"] = "Horarios De Atendimento";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Horarios_de_Atendimento"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Horarios_de_Atendimento"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Sobre_a_Empresa"] = "Sobre A Empresa";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Sobre_a_Empresa"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Sobre_a_Empresa"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Lng"] = "Lng";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Lng"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Lng"] = "";
	$fieldLabelsbuscar_profissionais["Portuguese(Brazil)"]["Lat"] = "Lat";
	$fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]["Lat"] = "";
	$placeHoldersbuscar_profissionais["Portuguese(Brazil)"]["Lat"] = "";
	$pageTitlesbuscar_profissionais["Portuguese(Brazil)"]["view"] = "Buscar Empresas";
	$pageTitlesbuscar_profissionais["Portuguese(Brazil)"]["search"] = "Buscar Empresas";
	if (count($fieldToolTipsbuscar_profissionais["Portuguese(Brazil)"]))
		$tdatabuscar_profissionais[".isUseToolTips"] = true;
}


	$tdatabuscar_profissionais[".NCSearch"] = true;



$tdatabuscar_profissionais[".shortTableName"] = "buscar_profissionais";
$tdatabuscar_profissionais[".nSecOptions"] = 0;

$tdatabuscar_profissionais[".mainTableOwnerID"] = "";
$tdatabuscar_profissionais[".entityType"] = 0;
$tdatabuscar_profissionais[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatabuscar_profissionais[".strOriginalTableName"] = "buscar_profissionais";

	



$tdatabuscar_profissionais[".showAddInPopup"] = false;

$tdatabuscar_profissionais[".showEditInPopup"] = false;

$tdatabuscar_profissionais[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabuscar_profissionais[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabuscar_profissionais[".listAjax"] = false;
//	temporary
//$tdatabuscar_profissionais[".listAjax"] = false;

	$tdatabuscar_profissionais[".audit"] = false;

	$tdatabuscar_profissionais[".locking"] = false;


$pages = $tdatabuscar_profissionais[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabuscar_profissionais[".edit"] = true;
	$tdatabuscar_profissionais[".afterEditAction"] = 1;
	$tdatabuscar_profissionais[".closePopupAfterEdit"] = 1;
	$tdatabuscar_profissionais[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabuscar_profissionais[".add"] = true;
$tdatabuscar_profissionais[".afterAddAction"] = 1;
$tdatabuscar_profissionais[".closePopupAfterAdd"] = 1;
$tdatabuscar_profissionais[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabuscar_profissionais[".list"] = true;
}



$tdatabuscar_profissionais[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabuscar_profissionais[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabuscar_profissionais[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabuscar_profissionais[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabuscar_profissionais[".printFriendly"] = true;
}



$tdatabuscar_profissionais[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabuscar_profissionais[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabuscar_profissionais[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabuscar_profissionais[".isUseAjaxSuggest"] = false;

$tdatabuscar_profissionais[".rowHighlite"] = true;



						

$tdatabuscar_profissionais[".ajaxCodeSnippetAdded"] = false;

$tdatabuscar_profissionais[".buttonsAdded"] = false;

$tdatabuscar_profissionais[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabuscar_profissionais[".isUseTimeForSearch"] = false;

$tdatabuscar_profissionais[".isUseFieldsMaps"] = true;

$tdatabuscar_profissionais[".badgeColor"] = "DC143C";


$tdatabuscar_profissionais[".allSearchFields"] = array();
$tdatabuscar_profissionais[".filterFields"] = array();
$tdatabuscar_profissionais[".requiredSearchFields"] = array();

$tdatabuscar_profissionais[".googleLikeFields"] = array();
$tdatabuscar_profissionais[".googleLikeFields"][] = "atendimento_presencial";
$tdatabuscar_profissionais[".googleLikeFields"][] = "atendimento_online";
$tdatabuscar_profissionais[".googleLikeFields"][] = "nome_empresa";
$tdatabuscar_profissionais[".googleLikeFields"][] = "ramo_empresa";



$tdatabuscar_profissionais[".tableType"] = "list";

$tdatabuscar_profissionais[".printerPageOrientation"] = 0;
$tdatabuscar_profissionais[".nPrinterPageScale"] = 100;

$tdatabuscar_profissionais[".nPrinterSplitRecords"] = 40;

$tdatabuscar_profissionais[".geocodingEnabled"] = true;
$tdatabuscar_profissionais[".geocodingData"] = array();
$tdatabuscar_profissionais[".geocodingData"]["latField"] = "Lat";
$tdatabuscar_profissionais[".geocodingData"]["lngField"] = "Lng";
$tdatabuscar_profissionais[".geocodingData"]["addressFields"] = array();
	$tdatabuscar_profissionais[".geocodingData"]["addressFields"][] = "cep_profissional";










$tdatabuscar_profissionais[".pageSize"] = 20;

$tdatabuscar_profissionais[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabuscar_profissionais[".strOrderBy"] = $tstrOrderBy;

$tdatabuscar_profissionais[".orderindexes"] = array();


$tdatabuscar_profissionais[".sqlHead"] = "SELECT usu_id,  nome,  sobrenome,  avatar,  email_profissional,  avaliacao_usuarios,  sobre_profissional,  resumo_formacao,  diferencial_profissional,  atendimento_presencial,  atendimento_online,  mini_curriculo,  resumo_formacao_academica,  resumo_formacao_cursos,  curriculo_lattes,  nome_empresa,  cnpj,  ramo_empresa,  tipo_empresa,  cep_profissional,  endereco_profissional_rua,  endereco_profissional_numero,  endereco_profissional_complemento,  endereco_profissional_longitude,  pais_empresa,  estado_empresa,  municipio_empresa,  data_in,  endereco_profissional_latitude,  Mapa,  Logotipo,  Foto_Fechada,  endereco_profissional_bairro,  Horarios_de_Atendimento,  Sobre_a_Empresa,  Lng,  Lat";
$tdatabuscar_profissionais[".sqlFrom"] = "FROM buscar_profissionais";
$tdatabuscar_profissionais[".sqlWhereExpr"] = "";
$tdatabuscar_profissionais[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabuscar_profissionais[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabuscar_profissionais[".arrGroupsPerPage"] = $arrGPP;


$tableKeysbuscar_profissionais = array();
$tableKeysbuscar_profissionais[] = "usu_id";
$tdatabuscar_profissionais[".Keys"] = $tableKeysbuscar_profissionais;


$tdatabuscar_profissionais[".hideMobileList"] = array();




//	usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usu_id";
	$fdata["GoodName"] = "usu_id";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","usu_id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "usu_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "usu_id";

	
	
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


	$tdatabuscar_profissionais["usu_id"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "usu_id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nome";

	
	
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


	$tdatabuscar_profissionais["nome"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "nome";
//	sobrenome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sobrenome";
	$fdata["GoodName"] = "sobrenome";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","sobrenome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sobrenome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sobrenome";

	
	
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


	$tdatabuscar_profissionais["sobrenome"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "sobrenome";
//	avatar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "avatar";
	$fdata["GoodName"] = "avatar";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","avatar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "avatar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avatar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 0;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatabuscar_profissionais["avatar"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "avatar";
//	email_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email_profissional";
	$fdata["GoodName"] = "email_profissional";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","email_profissional");
	$fdata["FieldType"] = 200;

	
	
	
			

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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatabuscar_profissionais["email_profissional"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "email_profissional";
//	avaliacao_usuarios
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "avaliacao_usuarios";
	$fdata["GoodName"] = "avaliacao_usuarios";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","avaliacao_usuarios");
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


	$tdatabuscar_profissionais["avaliacao_usuarios"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "avaliacao_usuarios";
//	sobre_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sobre_profissional";
	$fdata["GoodName"] = "sobre_profissional";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","sobre_profissional");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sobre_profissional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sobre_profissional";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=1023";

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


	$tdatabuscar_profissionais["sobre_profissional"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "sobre_profissional";
//	resumo_formacao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "resumo_formacao";
	$fdata["GoodName"] = "resumo_formacao";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","resumo_formacao");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1023";

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


	$tdatabuscar_profissionais["resumo_formacao"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "resumo_formacao";
//	diferencial_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "diferencial_profissional";
	$fdata["GoodName"] = "diferencial_profissional";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","diferencial_profissional");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1023";

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


	$tdatabuscar_profissionais["diferencial_profissional"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "diferencial_profissional";
//	atendimento_presencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "atendimento_presencial";
	$fdata["GoodName"] = "atendimento_presencial";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","atendimento_presencial");
	$fdata["FieldType"] = 200;

	
	
	
			

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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "buscar_profissionais";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "atendimento_presencial";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "atendimento_presencial";

	

	
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
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatabuscar_profissionais["atendimento_presencial"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "atendimento_presencial";
//	atendimento_online
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "atendimento_online";
	$fdata["GoodName"] = "atendimento_online";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","atendimento_online");
	$fdata["FieldType"] = 200;

	
	
	
			

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
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

	
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


	$tdatabuscar_profissionais["atendimento_online"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "atendimento_online";
//	mini_curriculo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "mini_curriculo";
	$fdata["GoodName"] = "mini_curriculo";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","mini_curriculo");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatabuscar_profissionais["mini_curriculo"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "mini_curriculo";
//	resumo_formacao_academica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "resumo_formacao_academica";
	$fdata["GoodName"] = "resumo_formacao_academica";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","resumo_formacao_academica");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatabuscar_profissionais["resumo_formacao_academica"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "resumo_formacao_academica";
//	resumo_formacao_cursos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "resumo_formacao_cursos";
	$fdata["GoodName"] = "resumo_formacao_cursos";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","resumo_formacao_cursos");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatabuscar_profissionais["resumo_formacao_cursos"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "resumo_formacao_cursos";
//	curriculo_lattes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "curriculo_lattes";
	$fdata["GoodName"] = "curriculo_lattes";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","curriculo_lattes");
	$fdata["FieldType"] = 201;

	
	
	
			

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


	$tdatabuscar_profissionais["curriculo_lattes"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "curriculo_lattes";
//	nome_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nome_empresa";
	$fdata["GoodName"] = "nome_empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","nome_empresa");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "buscar_profissionais";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "nome_empresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome_empresa";

	

	
	$edata["LookupOrderBy"] = "nome_empresa";

	
	
	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatabuscar_profissionais["nome_empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "nome_empresa";
//	cnpj
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cnpj";
	$fdata["GoodName"] = "cnpj";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","cnpj");
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


	$tdatabuscar_profissionais["cnpj"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "cnpj";
//	ramo_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "ramo_empresa";
	$fdata["GoodName"] = "ramo_empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","ramo_empresa");
	$fdata["FieldType"] = 200;

	
	
	
			

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
	$edata["LookupTable"] = "buscar_profissionais";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "ramo_empresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "ramo_empresa";

	

	
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


	$tdatabuscar_profissionais["ramo_empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "ramo_empresa";
//	tipo_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "tipo_empresa";
	$fdata["GoodName"] = "tipo_empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","tipo_empresa");
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


	$tdatabuscar_profissionais["tipo_empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "tipo_empresa";
//	cep_profissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cep_profissional";
	$fdata["GoodName"] = "cep_profissional";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","cep_profissional");
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


	$tdatabuscar_profissionais["cep_profissional"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "cep_profissional";
//	endereco_profissional_rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "endereco_profissional_rua";
	$fdata["GoodName"] = "endereco_profissional_rua";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","endereco_profissional_rua");
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


	$tdatabuscar_profissionais["endereco_profissional_rua"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "endereco_profissional_rua";
//	endereco_profissional_numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "endereco_profissional_numero";
	$fdata["GoodName"] = "endereco_profissional_numero";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","endereco_profissional_numero");
	$fdata["FieldType"] = 200;

	
	
	
			

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
			$edata["EditParams"].= " maxlength=11";

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


	$tdatabuscar_profissionais["endereco_profissional_numero"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "endereco_profissional_numero";
//	endereco_profissional_complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "endereco_profissional_complemento";
	$fdata["GoodName"] = "endereco_profissional_complemento";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","endereco_profissional_complemento");
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


	$tdatabuscar_profissionais["endereco_profissional_complemento"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "endereco_profissional_complemento";
//	endereco_profissional_longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "endereco_profissional_longitude";
	$fdata["GoodName"] = "endereco_profissional_longitude";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","endereco_profissional_longitude");
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


	$tdatabuscar_profissionais["endereco_profissional_longitude"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "endereco_profissional_longitude";
//	pais_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "pais_empresa";
	$fdata["GoodName"] = "pais_empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","pais_empresa");
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


	$tdatabuscar_profissionais["pais_empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "pais_empresa";
//	estado_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "estado_empresa";
	$fdata["GoodName"] = "estado_empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","estado_empresa");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "Busca Profissional";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "estado";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "estado";

	

	
	$edata["LookupOrderBy"] = "estado";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatabuscar_profissionais["estado_empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "estado_empresa";
//	municipio_empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "municipio_empresa";
	$fdata["GoodName"] = "municipio_empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","municipio_empresa");
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "buscar_profissionais";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "municipio_empresa";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "municipio_empresa";

	

	
	$edata["LookupOrderBy"] = "municipio_empresa";

	
	
	
	

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatabuscar_profissionais["municipio_empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "municipio_empresa";
//	data_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "data_in";
	$fdata["GoodName"] = "data_in";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","data_in");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_in";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_in";

	
	
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


	$tdatabuscar_profissionais["data_in"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "data_in";
//	endereco_profissional_latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "endereco_profissional_latitude";
	$fdata["GoodName"] = "endereco_profissional_latitude";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","endereco_profissional_latitude");
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


	$tdatabuscar_profissionais["endereco_profissional_latitude"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "endereco_profissional_latitude";
//	Mapa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Mapa";
	$fdata["GoodName"] = "Mapa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Mapa");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Mapa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mapa";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "nome_empresa";
	$vdata["mapData"]['lat'] = "Lat";
	$vdata["mapData"]['lng'] = "Lng";
	$vdata["mapData"]['desc'] = "nome_empresa";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;
	
	
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


	$tdatabuscar_profissionais["Mapa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Mapa";
//	Logotipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Logotipo";
	$fdata["GoodName"] = "Logotipo";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Logotipo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Logotipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Logotipo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 150;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatabuscar_profissionais["Logotipo"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Logotipo";
//	Foto_Fechada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Foto_Fechada";
	$fdata["GoodName"] = "Foto_Fechada";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Foto_Fechada");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Foto_Fechada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foto_Fechada";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 200;
	$vdata["ImageHeight"] = 150;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatabuscar_profissionais["Foto_Fechada"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Foto_Fechada";
//	endereco_profissional_bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "endereco_profissional_bairro";
	$fdata["GoodName"] = "endereco_profissional_bairro";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","endereco_profissional_bairro");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "endereco_profissional_bairro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "endereco_profissional_bairro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatabuscar_profissionais["endereco_profissional_bairro"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "endereco_profissional_bairro";
//	Horarios_de_Atendimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "Horarios_de_Atendimento";
	$fdata["GoodName"] = "Horarios_de_Atendimento";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Horarios_de_Atendimento");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Horarios_de_Atendimento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Horarios_de_Atendimento";

	
	
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


	$tdatabuscar_profissionais["Horarios_de_Atendimento"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Horarios_de_Atendimento";
//	Sobre_a_Empresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Sobre_a_Empresa";
	$fdata["GoodName"] = "Sobre_a_Empresa";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Sobre_a_Empresa");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Sobre_a_Empresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sobre_a_Empresa";

	
	
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


	$tdatabuscar_profissionais["Sobre_a_Empresa"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Sobre_a_Empresa";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Lng");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lng";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
		
	
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


	$tdatabuscar_profissionais["Lng"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Lng";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "buscar_profissionais";
	$fdata["Label"] = GetFieldLabel("buscar_profissionais","Lat");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Lat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
		
	
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


	$tdatabuscar_profissionais["Lat"] = $fdata;
		$tdatabuscar_profissionais[".searchableFields"][] = "Lat";


$tables_data["buscar_profissionais"]=&$tdatabuscar_profissionais;
$field_labels["buscar_profissionais"] = &$fieldLabelsbuscar_profissionais;
$fieldToolTips["buscar_profissionais"] = &$fieldToolTipsbuscar_profissionais;
$placeHolders["buscar_profissionais"] = &$placeHoldersbuscar_profissionais;
$page_titles["buscar_profissionais"] = &$pageTitlesbuscar_profissionais;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["buscar_profissionais"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["buscar_profissionais"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_buscar_profissionais()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usu_id,  nome,  sobrenome,  avatar,  email_profissional,  avaliacao_usuarios,  sobre_profissional,  resumo_formacao,  diferencial_profissional,  atendimento_presencial,  atendimento_online,  mini_curriculo,  resumo_formacao_academica,  resumo_formacao_cursos,  curriculo_lattes,  nome_empresa,  cnpj,  ramo_empresa,  tipo_empresa,  cep_profissional,  endereco_profissional_rua,  endereco_profissional_numero,  endereco_profissional_complemento,  endereco_profissional_longitude,  pais_empresa,  estado_empresa,  municipio_empresa,  data_in,  endereco_profissional_latitude,  Mapa,  Logotipo,  Foto_Fechada,  endereco_profissional_bairro,  Horarios_de_Atendimento,  Sobre_a_Empresa,  Lng,  Lat";
$proto0["m_strFrom"] = "FROM buscar_profissionais";
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
	"m_strName" => "usu_id",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto6["m_sql"] = "usu_id";
$proto6["m_srcTableName"] = "buscar_profissionais";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "buscar_profissionais";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sobrenome",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto10["m_sql"] = "sobrenome";
$proto10["m_srcTableName"] = "buscar_profissionais";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "avatar",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto12["m_sql"] = "avatar";
$proto12["m_srcTableName"] = "buscar_profissionais";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email_profissional",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto14["m_sql"] = "email_profissional";
$proto14["m_srcTableName"] = "buscar_profissionais";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "avaliacao_usuarios",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto16["m_sql"] = "avaliacao_usuarios";
$proto16["m_srcTableName"] = "buscar_profissionais";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sobre_profissional",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto18["m_sql"] = "sobre_profissional";
$proto18["m_srcTableName"] = "buscar_profissionais";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "resumo_formacao",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto20["m_sql"] = "resumo_formacao";
$proto20["m_srcTableName"] = "buscar_profissionais";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "diferencial_profissional",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto22["m_sql"] = "diferencial_profissional";
$proto22["m_srcTableName"] = "buscar_profissionais";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "atendimento_presencial",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto24["m_sql"] = "atendimento_presencial";
$proto24["m_srcTableName"] = "buscar_profissionais";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "atendimento_online",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto26["m_sql"] = "atendimento_online";
$proto26["m_srcTableName"] = "buscar_profissionais";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "mini_curriculo",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto28["m_sql"] = "mini_curriculo";
$proto28["m_srcTableName"] = "buscar_profissionais";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "resumo_formacao_academica",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto30["m_sql"] = "resumo_formacao_academica";
$proto30["m_srcTableName"] = "buscar_profissionais";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "resumo_formacao_cursos",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto32["m_sql"] = "resumo_formacao_cursos";
$proto32["m_srcTableName"] = "buscar_profissionais";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "curriculo_lattes",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto34["m_sql"] = "curriculo_lattes";
$proto34["m_srcTableName"] = "buscar_profissionais";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nome_empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto36["m_sql"] = "nome_empresa";
$proto36["m_srcTableName"] = "buscar_profissionais";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cnpj",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto38["m_sql"] = "cnpj";
$proto38["m_srcTableName"] = "buscar_profissionais";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "ramo_empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto40["m_sql"] = "ramo_empresa";
$proto40["m_srcTableName"] = "buscar_profissionais";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto42["m_sql"] = "tipo_empresa";
$proto42["m_srcTableName"] = "buscar_profissionais";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cep_profissional",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto44["m_sql"] = "cep_profissional";
$proto44["m_srcTableName"] = "buscar_profissionais";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_rua",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto46["m_sql"] = "endereco_profissional_rua";
$proto46["m_srcTableName"] = "buscar_profissionais";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_numero",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto48["m_sql"] = "endereco_profissional_numero";
$proto48["m_srcTableName"] = "buscar_profissionais";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_complemento",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto50["m_sql"] = "endereco_profissional_complemento";
$proto50["m_srcTableName"] = "buscar_profissionais";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_longitude",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto52["m_sql"] = "endereco_profissional_longitude";
$proto52["m_srcTableName"] = "buscar_profissionais";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "pais_empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto54["m_sql"] = "pais_empresa";
$proto54["m_srcTableName"] = "buscar_profissionais";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto56["m_sql"] = "estado_empresa";
$proto56["m_srcTableName"] = "buscar_profissionais";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio_empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto58["m_sql"] = "municipio_empresa";
$proto58["m_srcTableName"] = "buscar_profissionais";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "data_in",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto60["m_sql"] = "data_in";
$proto60["m_srcTableName"] = "buscar_profissionais";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_latitude",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto62["m_sql"] = "endereco_profissional_latitude";
$proto62["m_srcTableName"] = "buscar_profissionais";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Mapa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto64["m_sql"] = "Mapa";
$proto64["m_srcTableName"] = "buscar_profissionais";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Logotipo",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto66["m_sql"] = "Logotipo";
$proto66["m_srcTableName"] = "buscar_profissionais";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto_Fechada",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto68["m_sql"] = "Foto_Fechada";
$proto68["m_srcTableName"] = "buscar_profissionais";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "endereco_profissional_bairro",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto70["m_sql"] = "endereco_profissional_bairro";
$proto70["m_srcTableName"] = "buscar_profissionais";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "Horarios_de_Atendimento",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto72["m_sql"] = "Horarios_de_Atendimento";
$proto72["m_srcTableName"] = "buscar_profissionais";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Sobre_a_Empresa",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto74["m_sql"] = "Sobre_a_Empresa";
$proto74["m_srcTableName"] = "buscar_profissionais";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto76["m_sql"] = "Lng";
$proto76["m_srcTableName"] = "buscar_profissionais";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "buscar_profissionais",
	"m_srcTableName" => "buscar_profissionais"
));

$proto78["m_sql"] = "Lat";
$proto78["m_srcTableName"] = "buscar_profissionais";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto80=array();
$proto80["m_link"] = "SQLL_MAIN";
			$proto81=array();
$proto81["m_strName"] = "buscar_profissionais";
$proto81["m_srcTableName"] = "buscar_profissionais";
$proto81["m_columns"] = array();
$proto81["m_columns"][] = "usu_id";
$proto81["m_columns"][] = "nome";
$proto81["m_columns"][] = "sobrenome";
$proto81["m_columns"][] = "senha";
$proto81["m_columns"][] = "email";
$proto81["m_columns"][] = "email_validado";
$proto81["m_columns"][] = "permissao";
$proto81["m_columns"][] = "tipo_usuario";
$proto81["m_columns"][] = "plano_tipo";
$proto81["m_columns"][] = "data_in";
$proto81["m_columns"][] = "data_primeiro_acesso";
$proto81["m_columns"][] = "data_ultimo_acesso";
$proto81["m_columns"][] = "cpf";
$proto81["m_columns"][] = "avatar";
$proto81["m_columns"][] = "sexo";
$proto81["m_columns"][] = "info_inicial";
$proto81["m_columns"][] = "pais";
$proto81["m_columns"][] = "estado";
$proto81["m_columns"][] = "municipio";
$proto81["m_columns"][] = "cep";
$proto81["m_columns"][] = "rua";
$proto81["m_columns"][] = "numero";
$proto81["m_columns"][] = "complemento";
$proto81["m_columns"][] = "telefone_celular_principal";
$proto81["m_columns"][] = "telefone_celular_secundario";
$proto81["m_columns"][] = "telefone_residencial";
$proto81["m_columns"][] = "telefone_comercial";
$proto81["m_columns"][] = "code_trocar_senha";
$proto81["m_columns"][] = "deletado";
$proto81["m_columns"][] = "idEmpresa";
$proto81["m_columns"][] = "udp_id";
$proto81["m_columns"][] = "udp_usu_id";
$proto81["m_columns"][] = "email_profissional";
$proto81["m_columns"][] = "avaliacao_usuarios";
$proto81["m_columns"][] = "sobre_profissional";
$proto81["m_columns"][] = "resumo_formacao";
$proto81["m_columns"][] = "yt_code_apresentacao";
$proto81["m_columns"][] = "diferencial_profissional";
$proto81["m_columns"][] = "atendimento_presencial";
$proto81["m_columns"][] = "atendimento_online";
$proto81["m_columns"][] = "mini_curriculo";
$proto81["m_columns"][] = "resumo_formacao_academica";
$proto81["m_columns"][] = "resumo_formacao_cursos";
$proto81["m_columns"][] = "curriculo_lattes";
$proto81["m_columns"][] = "nome_empresa";
$proto81["m_columns"][] = "cnpj";
$proto81["m_columns"][] = "ramo_empresa";
$proto81["m_columns"][] = "tipo_empresa";
$proto81["m_columns"][] = "cep_profissional";
$proto81["m_columns"][] = "endereco_profissional_rua";
$proto81["m_columns"][] = "endereco_profissional_numero";
$proto81["m_columns"][] = "endereco_profissional_complemento";
$proto81["m_columns"][] = "endereco_profissional_latitude";
$proto81["m_columns"][] = "endereco_profissional_longitude";
$proto81["m_columns"][] = "pais_empresa";
$proto81["m_columns"][] = "estado_empresa";
$proto81["m_columns"][] = "municipio_empresa";
$proto81["m_columns"][] = "udp_deletado";
$proto81["m_columns"][] = "Foto_Fechada";
$proto81["m_columns"][] = "Logotipo";
$proto81["m_columns"][] = "Mapa";
$proto81["m_columns"][] = "endereco_profissional_bairro";
$proto81["m_columns"][] = "Horarios_de_Atendimento";
$proto81["m_columns"][] = "Sobre_a_Empresa";
$proto81["m_columns"][] = "Lat";
$proto81["m_columns"][] = "Lng";
$obj = new SQLTable($proto81);

$proto80["m_table"] = $obj;
$proto80["m_sql"] = "buscar_profissionais";
$proto80["m_alias"] = "";
$proto80["m_srcTableName"] = "buscar_profissionais";
$proto82=array();
$proto82["m_sql"] = "";
$proto82["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto82["m_column"]=$obj;
$proto82["m_contained"] = array();
$proto82["m_strCase"] = "";
$proto82["m_havingmode"] = false;
$proto82["m_inBrackets"] = false;
$proto82["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto82);

$proto80["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto80);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="buscar_profissionais";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_buscar_profissionais = createSqlQuery_buscar_profissionais();


	
		;

																																					

$tdatabuscar_profissionais[".sqlquery"] = $queryData_buscar_profissionais;



$tableEvents["buscar_profissionais"] = new eventsBase;
$tdatabuscar_profissionais[".hasEvents"] = false;

?>