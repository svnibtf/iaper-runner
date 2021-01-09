<?php
$tdataadm_usuarios1 = array();
$tdataadm_usuarios1[".searchableFields"] = array();
$tdataadm_usuarios1[".ShortName"] = "adm_usuarios1";
$tdataadm_usuarios1[".OwnerID"] = "usu_id";
$tdataadm_usuarios1[".OriginalTable"] = "adm_usuarios";


$tdataadm_usuarios1[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataadm_usuarios1[".originalPagesByType"] = $tdataadm_usuarios1[".pagesByType"];
$tdataadm_usuarios1[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataadm_usuarios1[".originalPages"] = $tdataadm_usuarios1[".pages"];
$tdataadm_usuarios1[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataadm_usuarios1[".originalDefaultPages"] = $tdataadm_usuarios1[".defaultPages"];

//	field labels
$fieldLabelsadm_usuarios1 = array();
$fieldToolTipsadm_usuarios1 = array();
$pageTitlesadm_usuarios1 = array();
$placeHoldersadm_usuarios1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_usuarios1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["usu_id"] = "Id";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["usu_id"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["usu_id"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["nome"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["sobrenome"] = "Sobrenome";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["sobrenome"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["sobrenome"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["senha"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["email"] = "E-mail";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["email_validado"] = "E-mail Validado";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["email_validado"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["email_validado"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["permissao"] = "Permissão";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["permissao"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["permissao"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["tipo_usuario"] = "Tipo de Usuário";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["tipo_usuario"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["tipo_usuario"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["plano_tipo"] = "Plano Tipo";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["plano_tipo"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["plano_tipo"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["data_in"] = "Data de Entrada";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["data_in"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["data_in"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["data_primeiro_acesso"] = "Data Primeiro Acesso";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["data_primeiro_acesso"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["data_primeiro_acesso"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["data_ultimo_acesso"] = "Data Ultimo Acesso";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["data_ultimo_acesso"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["data_ultimo_acesso"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["cpf"] = "Cpf";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["cpf"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["cpf"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["avatar"] = "Avatar";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["avatar"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["avatar"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["sexo"] = "Sexo";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["sexo"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["sexo"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["info_inicial"] = "Informação Inicial";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["info_inicial"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["info_inicial"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["pais"] = "Pais";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["pais"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["pais"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["estado"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["municipio"] = "Municipio";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["municipio"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["municipio"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["cep"] = "Cep";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["cep"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["cep"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["rua"] = "Rua";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["rua"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["rua"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["numero"] = "Numero";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["numero"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["numero"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["complemento"] = "Complemento";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["complemento"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["complemento"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["telefone_celular_principal"] = "Telefone Celular Principal";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["telefone_celular_principal"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["telefone_celular_principal"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["telefone_celular_secundario"] = "Telefone Celular Secundário";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["telefone_celular_secundario"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["telefone_celular_secundario"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["telefone_residencial"] = "Telefone Residencial";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["telefone_residencial"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["telefone_residencial"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["telefone_comercial"] = "Telefone Comercial";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["telefone_comercial"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["telefone_comercial"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["code_trocar_senha"] = "Code Trocar Senha";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["code_trocar_senha"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["code_trocar_senha"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["deletado"] = "Deletado";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["deletado"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["deletado"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["idEmpresa"] = "Empresa";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["idEmpresa"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["idEmpresa"] = "";
	$fieldLabelsadm_usuarios1["Portuguese(Brazil)"]["Confirma"] = "Confirma";
	$fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]["Confirma"] = "";
	$placeHoldersadm_usuarios1["Portuguese(Brazil)"]["Confirma"] = "";
	$pageTitlesadm_usuarios1["Portuguese(Brazil)"]["edit"] = "Meu Cadastro";
	if (count($fieldToolTipsadm_usuarios1["Portuguese(Brazil)"]))
		$tdataadm_usuarios1[".isUseToolTips"] = true;
}


	$tdataadm_usuarios1[".NCSearch"] = true;



$tdataadm_usuarios1[".shortTableName"] = "adm_usuarios1";
$tdataadm_usuarios1[".nSecOptions"] = 1;

$tdataadm_usuarios1[".mainTableOwnerID"] = "usu_id";
$tdataadm_usuarios1[".entityType"] = 0;
$tdataadm_usuarios1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_usuarios1[".strOriginalTableName"] = "adm_usuarios";

	



$tdataadm_usuarios1[".showAddInPopup"] = false;

$tdataadm_usuarios1[".showEditInPopup"] = false;

$tdataadm_usuarios1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_usuarios1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_usuarios1[".listAjax"] = false;
//	temporary
//$tdataadm_usuarios1[".listAjax"] = false;

	$tdataadm_usuarios1[".audit"] = false;

	$tdataadm_usuarios1[".locking"] = false;


$pages = $tdataadm_usuarios1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_usuarios1[".edit"] = true;
	$tdataadm_usuarios1[".afterEditAction"] = 0;
	$tdataadm_usuarios1[".closePopupAfterEdit"] = 1;
	$tdataadm_usuarios1[".afterEditActionDetTable"] = "usuarios_dados_profissionais";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_usuarios1[".add"] = true;
$tdataadm_usuarios1[".afterAddAction"] = 1;
$tdataadm_usuarios1[".closePopupAfterAdd"] = 1;
$tdataadm_usuarios1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_usuarios1[".list"] = true;
}



$tdataadm_usuarios1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_usuarios1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_usuarios1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_usuarios1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_usuarios1[".printFriendly"] = true;
}



$tdataadm_usuarios1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_usuarios1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_usuarios1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_usuarios1[".isUseAjaxSuggest"] = false;

$tdataadm_usuarios1[".rowHighlite"] = true;



			

$tdataadm_usuarios1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_usuarios1[".buttonsAdded"] = false;

$tdataadm_usuarios1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_usuarios1[".isUseTimeForSearch"] = false;


$tdataadm_usuarios1[".badgeColor"] = "00C2C5";


$tdataadm_usuarios1[".allSearchFields"] = array();
$tdataadm_usuarios1[".filterFields"] = array();
$tdataadm_usuarios1[".requiredSearchFields"] = array();

$tdataadm_usuarios1[".googleLikeFields"] = array();
$tdataadm_usuarios1[".googleLikeFields"][] = "Confirma";



$tdataadm_usuarios1[".tableType"] = "list";

$tdataadm_usuarios1[".printerPageOrientation"] = 0;
$tdataadm_usuarios1[".nPrinterPageScale"] = 100;

$tdataadm_usuarios1[".nPrinterSplitRecords"] = 40;

$tdataadm_usuarios1[".geocodingEnabled"] = false;










$tdataadm_usuarios1[".pageSize"] = 20;

$tdataadm_usuarios1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_usuarios1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_usuarios1[".orderindexes"] = array();


$tdataadm_usuarios1[".sqlHead"] = "SELECT usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado,  	idEmpresa,  	Confirma";
$tdataadm_usuarios1[".sqlFrom"] = "FROM adm_usuarios";
$tdataadm_usuarios1[".sqlWhereExpr"] = "";
$tdataadm_usuarios1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_usuarios1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_usuarios1[".arrGroupsPerPage"] = $arrGPP;


$tableKeysadm_usuarios1 = array();
$tableKeysadm_usuarios1[] = "usu_id";
$tdataadm_usuarios1[".Keys"] = $tableKeysadm_usuarios1;


$tdataadm_usuarios1[".hideMobileList"] = array();




//	usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usu_id";
	$fdata["GoodName"] = "usu_id";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","usu_id");
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


	$tdataadm_usuarios1["usu_id"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "usu_id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","nome");
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


	$tdataadm_usuarios1["nome"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "nome";
//	sobrenome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sobrenome";
	$fdata["GoodName"] = "sobrenome";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","sobrenome");
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


	$tdataadm_usuarios1["sobrenome"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "sobrenome";
//	senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "senha";
	$fdata["GoodName"] = "senha";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","senha");
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


	$tdataadm_usuarios1["senha"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "senha";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","email");
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


	$tdataadm_usuarios1["email"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "email";
//	email_validado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email_validado";
	$fdata["GoodName"] = "email_validado";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","email_validado");
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


	$tdataadm_usuarios1["email_validado"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "email_validado";
//	permissao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "permissao";
	$fdata["GoodName"] = "permissao";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","permissao");
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


	$tdataadm_usuarios1["permissao"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "permissao";
//	tipo_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_usuario";
	$fdata["GoodName"] = "tipo_usuario";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","tipo_usuario");
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


	$tdataadm_usuarios1["tipo_usuario"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "tipo_usuario";
//	plano_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "plano_tipo";
	$fdata["GoodName"] = "plano_tipo";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","plano_tipo");
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


	$tdataadm_usuarios1["plano_tipo"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "plano_tipo";
//	data_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data_in";
	$fdata["GoodName"] = "data_in";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","data_in");
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


	$tdataadm_usuarios1["data_in"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "data_in";
//	data_primeiro_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "data_primeiro_acesso";
	$fdata["GoodName"] = "data_primeiro_acesso";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","data_primeiro_acesso");
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


	$tdataadm_usuarios1["data_primeiro_acesso"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "data_primeiro_acesso";
//	data_ultimo_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_ultimo_acesso";
	$fdata["GoodName"] = "data_ultimo_acesso";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","data_ultimo_acesso");
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


	$tdataadm_usuarios1["data_ultimo_acesso"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "data_ultimo_acesso";
//	cpf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cpf";
	$fdata["GoodName"] = "cpf";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","cpf");
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


	$tdataadm_usuarios1["cpf"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "cpf";
//	avatar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "avatar";
	$fdata["GoodName"] = "avatar";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","avatar");
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
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
						
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
						
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
						
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterlist"] = $vdata;
	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
						
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["masterprint"] = $vdata;
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

			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdataadm_usuarios1["avatar"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "avatar";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","sexo");
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


	$tdataadm_usuarios1["sexo"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "sexo";
//	info_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "info_inicial";
	$fdata["GoodName"] = "info_inicial";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","info_inicial");
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


	$tdataadm_usuarios1["info_inicial"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "info_inicial";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","pais");
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ibge_pais";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "pais_cod_3";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "pais_nome";

	

	
	$edata["LookupOrderBy"] = "pais_nome";

	
	
	
	

	
	
	
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


	$tdataadm_usuarios1["pais"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "pais";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","estado");
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


	$tdataadm_usuarios1["estado"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "estado";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","municipio");
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ibge_municipios";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "codigo_ibge";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "nome";

	

	
	$edata["LookupOrderBy"] = "nome";

	
	
	
	

	
	
	
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


	$tdataadm_usuarios1["municipio"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "municipio";
//	cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cep";
	$fdata["GoodName"] = "cep";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","cep");
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


	$tdataadm_usuarios1["cep"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "cep";
//	rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "rua";
	$fdata["GoodName"] = "rua";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","rua");
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


	$tdataadm_usuarios1["rua"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "rua";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","numero");
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


	$tdataadm_usuarios1["numero"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "numero";
//	complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complemento";
	$fdata["GoodName"] = "complemento";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","complemento");
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


	$tdataadm_usuarios1["complemento"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "complemento";
//	telefone_celular_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "telefone_celular_principal";
	$fdata["GoodName"] = "telefone_celular_principal";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","telefone_celular_principal");
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


	$tdataadm_usuarios1["telefone_celular_principal"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "telefone_celular_principal";
//	telefone_celular_secundario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "telefone_celular_secundario";
	$fdata["GoodName"] = "telefone_celular_secundario";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","telefone_celular_secundario");
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


	$tdataadm_usuarios1["telefone_celular_secundario"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "telefone_celular_secundario";
//	telefone_residencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "telefone_residencial";
	$fdata["GoodName"] = "telefone_residencial";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","telefone_residencial");
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


	$tdataadm_usuarios1["telefone_residencial"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "telefone_residencial";
//	telefone_comercial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "telefone_comercial";
	$fdata["GoodName"] = "telefone_comercial";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","telefone_comercial");
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


	$tdataadm_usuarios1["telefone_comercial"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "telefone_comercial";
//	code_trocar_senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "code_trocar_senha";
	$fdata["GoodName"] = "code_trocar_senha";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","code_trocar_senha");
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


	$tdataadm_usuarios1["code_trocar_senha"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "code_trocar_senha";
//	deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "deletado";
	$fdata["GoodName"] = "deletado";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","deletado");
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


	$tdataadm_usuarios1["deletado"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "deletado";
//	idEmpresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "idEmpresa";
	$fdata["GoodName"] = "idEmpresa";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","idEmpresa");
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


	$tdataadm_usuarios1["idEmpresa"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "idEmpresa";
//	Confirma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Confirma";
	$fdata["GoodName"] = "Confirma";
	$fdata["ownerTable"] = "adm_usuarios";
	$fdata["Label"] = GetFieldLabel("adm_usuarios","Confirma");
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdataadm_usuarios1["Confirma"] = $fdata;
		$tdataadm_usuarios1[".searchableFields"][] = "Confirma";


$tables_data["adm_usuarios"]=&$tdataadm_usuarios1;
$field_labels["adm_usuarios"] = &$fieldLabelsadm_usuarios1;
$fieldToolTips["adm_usuarios"] = &$fieldToolTipsadm_usuarios1;
$placeHolders["adm_usuarios"] = &$placeHoldersadm_usuarios1;
$page_titles["adm_usuarios"] = &$pageTitlesadm_usuarios1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_usuarios"] = array();
//	adm_meuplano
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_meuplano";
		$detailsParam["dOriginalTable"] = "adm_meuplano";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_meuplano1";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_meuplano");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_usuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_usuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_usuarios"][$dIndex]["masterKeys"][]="usu_id";

				$detailsTablesData["adm_usuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_usuarios"][$dIndex]["detailKeys"][]="idUsuario";
//	adm_usuarios_dados_profissionais
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_usuarios_dados_profissionais";
		$detailsParam["dOriginalTable"] = "adm_usuarios_dados_profissionais";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_usuarios_dados_profissionais1";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_usuarios_dados_profissionais");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_usuarios"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_usuarios"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_usuarios"][$dIndex]["masterKeys"][]="usu_id";

				$detailsTablesData["adm_usuarios"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_usuarios"][$dIndex]["detailKeys"][]="udp_usu_id";

// tables which are master tables for current table (detail)
$masterTablesData["adm_usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_usuarios1()
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
	"m_srcTableName" => "adm_usuarios"
));

$proto6["m_sql"] = "usu_id";
$proto6["m_srcTableName"] = "adm_usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "adm_usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sobrenome",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto10["m_sql"] = "sobrenome";
$proto10["m_srcTableName"] = "adm_usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto12["m_sql"] = "senha";
$proto12["m_srcTableName"] = "adm_usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "adm_usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email_validado",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto16["m_sql"] = "email_validado";
$proto16["m_srcTableName"] = "adm_usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "permissao",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto18["m_sql"] = "permissao";
$proto18["m_srcTableName"] = "adm_usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_usuario",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto20["m_sql"] = "tipo_usuario";
$proto20["m_srcTableName"] = "adm_usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "plano_tipo",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto22["m_sql"] = "plano_tipo";
$proto22["m_srcTableName"] = "adm_usuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data_in",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto24["m_sql"] = "data_in";
$proto24["m_srcTableName"] = "adm_usuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "data_primeiro_acesso",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto26["m_sql"] = "data_primeiro_acesso";
$proto26["m_srcTableName"] = "adm_usuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_ultimo_acesso",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto28["m_sql"] = "data_ultimo_acesso";
$proto28["m_srcTableName"] = "adm_usuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cpf",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto30["m_sql"] = "cpf";
$proto30["m_srcTableName"] = "adm_usuarios";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "avatar",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto32["m_sql"] = "avatar";
$proto32["m_srcTableName"] = "adm_usuarios";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto34["m_sql"] = "sexo";
$proto34["m_srcTableName"] = "adm_usuarios";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "info_inicial",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto36["m_sql"] = "info_inicial";
$proto36["m_srcTableName"] = "adm_usuarios";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto38["m_sql"] = "pais";
$proto38["m_srcTableName"] = "adm_usuarios";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto40["m_sql"] = "estado";
$proto40["m_srcTableName"] = "adm_usuarios";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto42["m_sql"] = "municipio";
$proto42["m_srcTableName"] = "adm_usuarios";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto44["m_sql"] = "cep";
$proto44["m_srcTableName"] = "adm_usuarios";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "rua",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto46["m_sql"] = "rua";
$proto46["m_srcTableName"] = "adm_usuarios";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto48["m_sql"] = "numero";
$proto48["m_srcTableName"] = "adm_usuarios";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "complemento",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto50["m_sql"] = "complemento";
$proto50["m_srcTableName"] = "adm_usuarios";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_principal",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto52["m_sql"] = "telefone_celular_principal";
$proto52["m_srcTableName"] = "adm_usuarios";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_secundario",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto54["m_sql"] = "telefone_celular_secundario";
$proto54["m_srcTableName"] = "adm_usuarios";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_residencial",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto56["m_sql"] = "telefone_residencial";
$proto56["m_srcTableName"] = "adm_usuarios";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_comercial",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto58["m_sql"] = "telefone_comercial";
$proto58["m_srcTableName"] = "adm_usuarios";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "code_trocar_senha",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto60["m_sql"] = "code_trocar_senha";
$proto60["m_srcTableName"] = "adm_usuarios";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "deletado",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto62["m_sql"] = "deletado";
$proto62["m_srcTableName"] = "adm_usuarios";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "idEmpresa",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto64["m_sql"] = "idEmpresa";
$proto64["m_srcTableName"] = "adm_usuarios";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Confirma",
	"m_strTable" => "adm_usuarios",
	"m_srcTableName" => "adm_usuarios"
));

$proto66["m_sql"] = "Confirma";
$proto66["m_srcTableName"] = "adm_usuarios";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "adm_usuarios";
$proto69["m_srcTableName"] = "adm_usuarios";
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
$proto68["m_srcTableName"] = "adm_usuarios";
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
$proto0["m_srcTableName"]="adm_usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_usuarios1 = createSqlQuery_adm_usuarios1();


	
		;

																															

$tdataadm_usuarios1[".sqlquery"] = $queryData_adm_usuarios1;



$tableEvents["adm_usuarios"] = new eventsBase;
$tdataadm_usuarios1[".hasEvents"] = false;

?>