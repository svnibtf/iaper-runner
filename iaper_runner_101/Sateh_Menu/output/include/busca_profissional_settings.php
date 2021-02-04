<?php
$tdatabusca_profissional = array();
$tdatabusca_profissional[".searchableFields"] = array();
$tdatabusca_profissional[".ShortName"] = "busca_profissional";
$tdatabusca_profissional[".OwnerID"] = "usu_id";
$tdatabusca_profissional[".OriginalTable"] = "adm_usuarios";


$tdatabusca_profissional[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdatabusca_profissional[".originalPagesByType"] = $tdatabusca_profissional[".pagesByType"];
$tdatabusca_profissional[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdatabusca_profissional[".originalPages"] = $tdatabusca_profissional[".pages"];
$tdatabusca_profissional[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdatabusca_profissional[".originalDefaultPages"] = $tdatabusca_profissional[".defaultPages"];

//	field labels
$fieldLabelsbusca_profissional = array();
$fieldToolTipsbusca_profissional = array();
$pageTitlesbusca_profissional = array();
$placeHoldersbusca_profissional = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"] = array();
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"] = array();
	$placeHoldersbusca_profissional["Portuguese(Brazil)"] = array();
	$pageTitlesbusca_profissional["Portuguese(Brazil)"] = array();
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["usu_id"] = "Id";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["usu_id"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["usu_id"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["sobrenome"] = "Sobrenome";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["sobrenome"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["sobrenome"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["senha"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["email"] = "E-mail";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["email_validado"] = "E-mail ";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["email_validado"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["email_validado"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["permissao"] = "Permissão";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["permissao"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["permissao"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["tipo_usuario"] = "Tipo de Usuário";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["tipo_usuario"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["tipo_usuario"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["plano_tipo"] = "Plano Tipo";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["plano_tipo"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["plano_tipo"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["data_in"] = "Data de Entrada";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["data_in"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["data_in"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["data_primeiro_acesso"] = "Data Primeiro Acesso";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["data_primeiro_acesso"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["data_primeiro_acesso"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["data_ultimo_acesso"] = "Data Ultimo Acesso";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["data_ultimo_acesso"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["data_ultimo_acesso"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["cpf"] = "Cpf";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["cpf"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["cpf"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["avatar"] = "Meu Cadastro";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["avatar"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["avatar"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["sexo"] = "Sexo";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["sexo"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["sexo"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["info_inicial"] = "Informação Inicial";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["info_inicial"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["info_inicial"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["pais"] = "Pais";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["pais"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["pais"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["estado"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["municipio"] = "Municipio";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["municipio"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["municipio"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["cep"] = "Cep";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["cep"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["cep"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["rua"] = "Rua";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["rua"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["rua"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["numero"] = "Numero";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["numero"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["numero"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["complemento"] = "Complemento";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["complemento"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["complemento"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["telefone_celular_principal"] = "Telefone Celular Principal";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["telefone_celular_principal"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["telefone_celular_principal"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["telefone_celular_secundario"] = "Telefone Celular Secundário";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["telefone_celular_secundario"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["telefone_celular_secundario"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["telefone_residencial"] = "Telefone Residencial";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["telefone_residencial"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["telefone_residencial"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["telefone_comercial"] = "Telefone Comercial";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["telefone_comercial"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["telefone_comercial"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["code_trocar_senha"] = "Code Trocar Senha";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["code_trocar_senha"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["code_trocar_senha"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["deletado"] = "Deletado";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["deletado"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["deletado"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["idEmpresa"] = "Empresa";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["idEmpresa"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["idEmpresa"] = "";
	$fieldLabelsbusca_profissional["Portuguese(Brazil)"]["Confirma"] = "Confirma";
	$fieldToolTipsbusca_profissional["Portuguese(Brazil)"]["Confirma"] = "";
	$placeHoldersbusca_profissional["Portuguese(Brazil)"]["Confirma"] = "";
	if (count($fieldToolTipsbusca_profissional["Portuguese(Brazil)"]))
		$tdatabusca_profissional[".isUseToolTips"] = true;
}


	$tdatabusca_profissional[".NCSearch"] = true;



$tdatabusca_profissional[".shortTableName"] = "busca_profissional";
$tdatabusca_profissional[".nSecOptions"] = 0;

$tdatabusca_profissional[".mainTableOwnerID"] = "usu_id";
$tdatabusca_profissional[".entityType"] = 1;
$tdatabusca_profissional[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatabusca_profissional[".strOriginalTableName"] = "adm_usuarios";

	



$tdatabusca_profissional[".showAddInPopup"] = false;

$tdatabusca_profissional[".showEditInPopup"] = false;

$tdatabusca_profissional[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabusca_profissional[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabusca_profissional[".listAjax"] = false;
//	temporary
//$tdatabusca_profissional[".listAjax"] = false;

	$tdatabusca_profissional[".audit"] = false;

	$tdatabusca_profissional[".locking"] = false;


$pages = $tdatabusca_profissional[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabusca_profissional[".edit"] = true;
	$tdatabusca_profissional[".afterEditAction"] = 0;
	$tdatabusca_profissional[".closePopupAfterEdit"] = 1;
	$tdatabusca_profissional[".afterEditActionDetTable"] = "usuarios_dados_profissionais";
}

if( $pages[PAGE_ADD] ) {
$tdatabusca_profissional[".add"] = true;
$tdatabusca_profissional[".afterAddAction"] = 1;
$tdatabusca_profissional[".closePopupAfterAdd"] = 1;
$tdatabusca_profissional[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabusca_profissional[".list"] = true;
}



$tdatabusca_profissional[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabusca_profissional[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabusca_profissional[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabusca_profissional[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabusca_profissional[".printFriendly"] = true;
}



$tdatabusca_profissional[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabusca_profissional[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabusca_profissional[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabusca_profissional[".isUseAjaxSuggest"] = false;

$tdatabusca_profissional[".rowHighlite"] = true;



						

$tdatabusca_profissional[".ajaxCodeSnippetAdded"] = false;

$tdatabusca_profissional[".buttonsAdded"] = false;

$tdatabusca_profissional[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabusca_profissional[".isUseTimeForSearch"] = false;


$tdatabusca_profissional[".badgeColor"] = "778899";


$tdatabusca_profissional[".allSearchFields"] = array();
$tdatabusca_profissional[".filterFields"] = array();
$tdatabusca_profissional[".requiredSearchFields"] = array();

$tdatabusca_profissional[".googleLikeFields"] = array();
$tdatabusca_profissional[".googleLikeFields"][] = "Confirma";



$tdatabusca_profissional[".tableType"] = "list";

$tdatabusca_profissional[".printerPageOrientation"] = 0;
$tdatabusca_profissional[".nPrinterPageScale"] = 100;

$tdatabusca_profissional[".nPrinterSplitRecords"] = 40;

$tdatabusca_profissional[".geocodingEnabled"] = false;










$tdatabusca_profissional[".pageSize"] = 20;

$tdatabusca_profissional[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabusca_profissional[".strOrderBy"] = $tstrOrderBy;

$tdatabusca_profissional[".orderindexes"] = array();


$tdatabusca_profissional[".sqlHead"] = "SELECT usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado,  	idEmpresa,  	Confirma";
$tdatabusca_profissional[".sqlFrom"] = "FROM adm_usuarios";
$tdatabusca_profissional[".sqlWhereExpr"] = "";
$tdatabusca_profissional[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabusca_profissional[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabusca_profissional[".arrGroupsPerPage"] = $arrGPP;


$tableKeysbusca_profissional = array();
$tableKeysbusca_profissional[] = "usu_id";
$tdatabusca_profissional[".Keys"] = $tableKeysbusca_profissional;


$tdatabusca_profissional[".hideMobileList"] = array();




//	usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usu_id";
	$fdata["GoodName"] = "usu_id";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","usu_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

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


	$tdatabusca_profissional["usu_id"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "usu_id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","nome");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatabusca_profissional["nome"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "nome";
//	sobrenome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sobrenome";
	$fdata["GoodName"] = "sobrenome";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","sobrenome");
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


	$tdatabusca_profissional["sobrenome"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "sobrenome";
//	senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "senha";
	$fdata["GoodName"] = "senha";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","senha");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "senha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "senha";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
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


	$tdatabusca_profissional["senha"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "senha";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
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


	$tdatabusca_profissional["email"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "email";
//	email_validado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email_validado";
	$fdata["GoodName"] = "email_validado";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","email_validado");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "email_validado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email_validado";

	
	
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


	$tdatabusca_profissional["email_validado"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "email_validado";
//	permissao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "permissao";
	$fdata["GoodName"] = "permissao";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","permissao");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "permissao";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "permissao";

	
	
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


	$tdatabusca_profissional["permissao"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "permissao";
//	tipo_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_usuario";
	$fdata["GoodName"] = "tipo_usuario";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","tipo_usuario");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "tipo_usuario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo_usuario";

	
	
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


	$tdatabusca_profissional["tipo_usuario"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "tipo_usuario";
//	plano_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "plano_tipo";
	$fdata["GoodName"] = "plano_tipo";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","plano_tipo");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "plano_tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "plano_tipo";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "adm_plano_profissional";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "pla_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "pla_nome";

	

	
	$edata["LookupOrderBy"] = "pla_nome";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatabusca_profissional["plano_tipo"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "plano_tipo";
//	data_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data_in";
	$fdata["GoodName"] = "data_in";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","data_in");
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


	$tdatabusca_profissional["data_in"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "data_in";
//	data_primeiro_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "data_primeiro_acesso";
	$fdata["GoodName"] = "data_primeiro_acesso";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","data_primeiro_acesso");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_primeiro_acesso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_primeiro_acesso";

	
	
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


	$tdatabusca_profissional["data_primeiro_acesso"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "data_primeiro_acesso";
//	data_ultimo_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_ultimo_acesso";
	$fdata["GoodName"] = "data_ultimo_acesso";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","data_ultimo_acesso");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "data_ultimo_acesso";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "data_ultimo_acesso";

	
	
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


	$tdatabusca_profissional["data_ultimo_acesso"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "data_ultimo_acesso";
//	cpf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cpf";
	$fdata["GoodName"] = "cpf";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","cpf");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "cpf";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cpf";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatabusca_profissional["cpf"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "cpf";
//	avatar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "avatar";
	$fdata["GoodName"] = "avatar";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","avatar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "avatar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avatar";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
						
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 150;

			
	
	
	
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


	$tdatabusca_profissional["avatar"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "avatar";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","sexo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sexo";

	
	
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
	$edata["LookupValues"][] = "M";
	$edata["LookupValues"][] = "F";

	
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


	$tdatabusca_profissional["sexo"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "sexo";
//	info_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "info_inicial";
	$fdata["GoodName"] = "info_inicial";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","info_inicial");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "info_inicial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "info_inicial";

	
	
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


	$tdatabusca_profissional["info_inicial"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "info_inicial";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","pais");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais";

	
	
			
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "ibge_pais";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "pais_cod_3";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "pais_nome";

	

	
	$edata["LookupOrderBy"] = "pais_nome";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatabusca_profissional["pais"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "pais";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","estado");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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


	$tdatabusca_profissional["estado"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "estado";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","municipio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "municipio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "municipio";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "ibge_municipios";
	$edata["LookupConnId"] = "iaperdbatrobb0254publiccloudco";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "codigo_ibge";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "nome";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
	
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


	$tdatabusca_profissional["municipio"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "municipio";
//	cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cep";
	$fdata["GoodName"] = "cep";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","cep");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "cep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cep";

	
	
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


	$tdatabusca_profissional["cep"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "cep";
//	rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "rua";
	$fdata["GoodName"] = "rua";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","rua");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "rua";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rua";

	
	
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


	$tdatabusca_profissional["rua"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "rua";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","numero");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "numero";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numero";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatabusca_profissional["numero"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "numero";
//	complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complemento";
	$fdata["GoodName"] = "complemento";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","complemento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "complemento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "complemento";

	
	
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


	$tdatabusca_profissional["complemento"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "complemento";
//	telefone_celular_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "telefone_celular_principal";
	$fdata["GoodName"] = "telefone_celular_principal";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","telefone_celular_principal");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefone_celular_principal";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefone_celular_principal";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatabusca_profissional["telefone_celular_principal"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "telefone_celular_principal";
//	telefone_celular_secundario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "telefone_celular_secundario";
	$fdata["GoodName"] = "telefone_celular_secundario";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","telefone_celular_secundario");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefone_celular_secundario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefone_celular_secundario";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatabusca_profissional["telefone_celular_secundario"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "telefone_celular_secundario";
//	telefone_residencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "telefone_residencial";
	$fdata["GoodName"] = "telefone_residencial";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","telefone_residencial");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefone_residencial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefone_residencial";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatabusca_profissional["telefone_residencial"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "telefone_residencial";
//	telefone_comercial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "telefone_comercial";
	$fdata["GoodName"] = "telefone_comercial";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","telefone_comercial");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "telefone_comercial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefone_comercial";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatabusca_profissional["telefone_comercial"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "telefone_comercial";
//	code_trocar_senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "code_trocar_senha";
	$fdata["GoodName"] = "code_trocar_senha";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","code_trocar_senha");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "code_trocar_senha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "code_trocar_senha";

	
	
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


	$tdatabusca_profissional["code_trocar_senha"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "code_trocar_senha";
//	deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "deletado";
	$fdata["GoodName"] = "deletado";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","deletado");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "deletado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deletado";

	
	
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


	$tdatabusca_profissional["deletado"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "deletado";
//	idEmpresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "idEmpresa";
	$fdata["GoodName"] = "idEmpresa";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","idEmpresa");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "idEmpresa";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEmpresa";

	
	
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
	$edata["LookupTable"] = "adm_usuarios_dados_profissionais";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "udp_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nome_empresa";

	

	
	$edata["LookupOrderBy"] = "nome_empresa";

	
	
	
	

	
	
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


	$tdatabusca_profissional["idEmpresa"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "idEmpresa";
//	Confirma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Confirma";
	$fdata["GoodName"] = "Confirma";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("Busca_Profissional","Confirma");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Confirma";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Confirma";

	
	
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


	$tdatabusca_profissional["Confirma"] = $fdata;
		$tdatabusca_profissional[".searchableFields"][] = "Confirma";


$tables_data["Busca Profissional"]=&$tdatabusca_profissional;
$field_labels["Busca_Profissional"] = &$fieldLabelsbusca_profissional;
$fieldToolTips["Busca_Profissional"] = &$fieldToolTipsbusca_profissional;
$placeHolders["Busca_Profissional"] = &$placeHoldersbusca_profissional;
$page_titles["Busca_Profissional"] = &$pageTitlesbusca_profissional;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Busca Profissional"] = array();
//	adm_usuarios_dados_profissionais
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_usuarios_dados_profissionais";
		$detailsParam["dOriginalTable"] = "adm_usuarios_dados_profissionais";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_usuarios_dados_profissionais1";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_usuarios_dados_profissionais");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["Busca Profissional"][$dIndex] = $detailsParam;

	
		$detailsTablesData["Busca Profissional"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Busca Profissional"][$dIndex]["masterKeys"][]="usu_id";

				$detailsTablesData["Busca Profissional"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Busca Profissional"][$dIndex]["detailKeys"][]="udp_usu_id";

// tables which are master tables for current table (detail)
$masterTablesData["Busca Profissional"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_busca_profissional()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado,  	idEmpresa,  	Confirma";
$proto0["m_strFrom"] = "FROM adm_usuarios";
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
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto6["m_sql"] = "usu_id";
$proto6["m_srcTableName"] = "Busca Profissional";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "Busca Profissional";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sobrenome",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto10["m_sql"] = "sobrenome";
$proto10["m_srcTableName"] = "Busca Profissional";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto12["m_sql"] = "senha";
$proto12["m_srcTableName"] = "Busca Profissional";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "Busca Profissional";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email_validado",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto16["m_sql"] = "email_validado";
$proto16["m_srcTableName"] = "Busca Profissional";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "permissao",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto18["m_sql"] = "permissao";
$proto18["m_srcTableName"] = "Busca Profissional";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_usuario",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto20["m_sql"] = "tipo_usuario";
$proto20["m_srcTableName"] = "Busca Profissional";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "plano_tipo",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto22["m_sql"] = "plano_tipo";
$proto22["m_srcTableName"] = "Busca Profissional";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data_in",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto24["m_sql"] = "data_in";
$proto24["m_srcTableName"] = "Busca Profissional";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "data_primeiro_acesso",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto26["m_sql"] = "data_primeiro_acesso";
$proto26["m_srcTableName"] = "Busca Profissional";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_ultimo_acesso",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto28["m_sql"] = "data_ultimo_acesso";
$proto28["m_srcTableName"] = "Busca Profissional";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cpf",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto30["m_sql"] = "cpf";
$proto30["m_srcTableName"] = "Busca Profissional";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "avatar",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto32["m_sql"] = "avatar";
$proto32["m_srcTableName"] = "Busca Profissional";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto34["m_sql"] = "sexo";
$proto34["m_srcTableName"] = "Busca Profissional";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "info_inicial",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto36["m_sql"] = "info_inicial";
$proto36["m_srcTableName"] = "Busca Profissional";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto38["m_sql"] = "pais";
$proto38["m_srcTableName"] = "Busca Profissional";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto40["m_sql"] = "estado";
$proto40["m_srcTableName"] = "Busca Profissional";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto42["m_sql"] = "municipio";
$proto42["m_srcTableName"] = "Busca Profissional";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto44["m_sql"] = "cep";
$proto44["m_srcTableName"] = "Busca Profissional";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "rua",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto46["m_sql"] = "rua";
$proto46["m_srcTableName"] = "Busca Profissional";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto48["m_sql"] = "numero";
$proto48["m_srcTableName"] = "Busca Profissional";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "complemento",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto50["m_sql"] = "complemento";
$proto50["m_srcTableName"] = "Busca Profissional";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_principal",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto52["m_sql"] = "telefone_celular_principal";
$proto52["m_srcTableName"] = "Busca Profissional";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_secundario",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto54["m_sql"] = "telefone_celular_secundario";
$proto54["m_srcTableName"] = "Busca Profissional";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_residencial",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto56["m_sql"] = "telefone_residencial";
$proto56["m_srcTableName"] = "Busca Profissional";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_comercial",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto58["m_sql"] = "telefone_comercial";
$proto58["m_srcTableName"] = "Busca Profissional";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "code_trocar_senha",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto60["m_sql"] = "code_trocar_senha";
$proto60["m_srcTableName"] = "Busca Profissional";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "deletado",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto62["m_sql"] = "deletado";
$proto62["m_srcTableName"] = "Busca Profissional";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "idEmpresa",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto64["m_sql"] = "idEmpresa";
$proto64["m_srcTableName"] = "Busca Profissional";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Confirma",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "Busca Profissional"
));

$proto66["m_sql"] = "Confirma";
$proto66["m_srcTableName"] = "Busca Profissional";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "adm_usuarios";
$proto69["m_srcTableName"] = "Busca Profissional";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "usu_id";
$proto69["m_columns"][] = "nome";
$proto69["m_columns"][] = "sobrenome";
$proto69["m_columns"][] = "senha";
$proto69["m_columns"][] = "email";
$proto69["m_columns"][] = "email_validado";
$proto69["m_columns"][] = "permissao";
$proto69["m_columns"][] = "tipo_usuario";
$proto69["m_columns"][] = "plano_tipo";
$proto69["m_columns"][] = "data_in";
$proto69["m_columns"][] = "data_primeiro_acesso";
$proto69["m_columns"][] = "data_ultimo_acesso";
$proto69["m_columns"][] = "cpf";
$proto69["m_columns"][] = "avatar";
$proto69["m_columns"][] = "sexo";
$proto69["m_columns"][] = "info_inicial";
$proto69["m_columns"][] = "pais";
$proto69["m_columns"][] = "estado";
$proto69["m_columns"][] = "municipio";
$proto69["m_columns"][] = "cep";
$proto69["m_columns"][] = "rua";
$proto69["m_columns"][] = "numero";
$proto69["m_columns"][] = "complemento";
$proto69["m_columns"][] = "telefone_celular_principal";
$proto69["m_columns"][] = "telefone_celular_secundario";
$proto69["m_columns"][] = "telefone_residencial";
$proto69["m_columns"][] = "telefone_comercial";
$proto69["m_columns"][] = "code_trocar_senha";
$proto69["m_columns"][] = "deletado";
$proto69["m_columns"][] = "idEmpresa";
$proto69["m_columns"][] = "Confirma";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "adm_usuarios";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "Busca Profissional";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Busca Profissional";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_busca_profissional = createSqlQuery_busca_profissional();


	
		;

																															

$tdatabusca_profissional[".sqlquery"] = $queryData_busca_profissional;



$tableEvents["Busca Profissional"] = new eventsBase;
$tdatabusca_profissional[".hasEvents"] = false;

?>