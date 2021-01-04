<?php
$tdatalogin = array();
$tdatalogin[".searchableFields"] = array();
$tdatalogin[".ShortName"] = "login";
$tdatalogin[".OwnerID"] = "";
$tdatalogin[".OriginalTable"] = "login";


$tdatalogin[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdatalogin[".originalPagesByType"] = $tdatalogin[".pagesByType"];
$tdatalogin[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdatalogin[".originalPages"] = $tdatalogin[".pages"];
$tdatalogin[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdatalogin[".originalDefaultPages"] = $tdatalogin[".defaultPages"];

//	field labels
$fieldLabelslogin = array();
$fieldToolTipslogin = array();
$pageTitleslogin = array();
$placeHolderslogin = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelslogin["Portuguese(Brazil)"] = array();
	$fieldToolTipslogin["Portuguese(Brazil)"] = array();
	$placeHolderslogin["Portuguese(Brazil)"] = array();
	$pageTitleslogin["Portuguese(Brazil)"] = array();
	$fieldLabelslogin["Portuguese(Brazil)"]["usu_id"] = "Usu Id";
	$fieldToolTipslogin["Portuguese(Brazil)"]["usu_id"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["usu_id"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["nome"] = "Nome";
	$fieldToolTipslogin["Portuguese(Brazil)"]["nome"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["nome"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["sobrenome"] = "Sobrenome";
	$fieldToolTipslogin["Portuguese(Brazil)"]["sobrenome"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["sobrenome"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["senha"] = "Senha";
	$fieldToolTipslogin["Portuguese(Brazil)"]["senha"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["senha"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipslogin["Portuguese(Brazil)"]["email"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["email_validado"] = "Email Validado";
	$fieldToolTipslogin["Portuguese(Brazil)"]["email_validado"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["email_validado"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["permissao"] = "Permissão";
	$fieldToolTipslogin["Portuguese(Brazil)"]["permissao"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["permissao"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["tipo_usuario"] = "Tipo Usuário";
	$fieldToolTipslogin["Portuguese(Brazil)"]["tipo_usuario"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["tipo_usuario"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["plano_tipo"] = "Plano Tipo";
	$fieldToolTipslogin["Portuguese(Brazil)"]["plano_tipo"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["plano_tipo"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["data_in"] = "Data de Entrada";
	$fieldToolTipslogin["Portuguese(Brazil)"]["data_in"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["data_in"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["data_primeiro_acesso"] = "Data Primeiro Acesso";
	$fieldToolTipslogin["Portuguese(Brazil)"]["data_primeiro_acesso"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["data_primeiro_acesso"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["data_ultimo_acesso"] = "Data Ultimo Acesso";
	$fieldToolTipslogin["Portuguese(Brazil)"]["data_ultimo_acesso"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["data_ultimo_acesso"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["cpf"] = "Cpf";
	$fieldToolTipslogin["Portuguese(Brazil)"]["cpf"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["cpf"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["avatar"] = "Avatar";
	$fieldToolTipslogin["Portuguese(Brazil)"]["avatar"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["avatar"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["sexo"] = "Sexo";
	$fieldToolTipslogin["Portuguese(Brazil)"]["sexo"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["sexo"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["info_inicial"] = "Info Inicial";
	$fieldToolTipslogin["Portuguese(Brazil)"]["info_inicial"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["info_inicial"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["pais"] = "Pais";
	$fieldToolTipslogin["Portuguese(Brazil)"]["pais"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["pais"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["estado"] = "Estado";
	$fieldToolTipslogin["Portuguese(Brazil)"]["estado"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["estado"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["municipio"] = "Municipio";
	$fieldToolTipslogin["Portuguese(Brazil)"]["municipio"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["municipio"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["cep"] = "Cep";
	$fieldToolTipslogin["Portuguese(Brazil)"]["cep"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["cep"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["rua"] = "Rua";
	$fieldToolTipslogin["Portuguese(Brazil)"]["rua"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["rua"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["numero"] = "Numero";
	$fieldToolTipslogin["Portuguese(Brazil)"]["numero"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["numero"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["complemento"] = "Complemento";
	$fieldToolTipslogin["Portuguese(Brazil)"]["complemento"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["complemento"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["telefone_celular_principal"] = "Telefone Celular Principal";
	$fieldToolTipslogin["Portuguese(Brazil)"]["telefone_celular_principal"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["telefone_celular_principal"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["telefone_celular_secundario"] = "Telefone Celular Secundario";
	$fieldToolTipslogin["Portuguese(Brazil)"]["telefone_celular_secundario"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["telefone_celular_secundario"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["telefone_residencial"] = "Telefone Residencial";
	$fieldToolTipslogin["Portuguese(Brazil)"]["telefone_residencial"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["telefone_residencial"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["telefone_comercial"] = "Telefone Comercial";
	$fieldToolTipslogin["Portuguese(Brazil)"]["telefone_comercial"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["telefone_comercial"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["code_trocar_senha"] = "Code Trocar Senha";
	$fieldToolTipslogin["Portuguese(Brazil)"]["code_trocar_senha"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["code_trocar_senha"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["deletado"] = "Deletado";
	$fieldToolTipslogin["Portuguese(Brazil)"]["deletado"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["deletado"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["idEmpresa"] = "Id Empresa";
	$fieldToolTipslogin["Portuguese(Brazil)"]["idEmpresa"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["idEmpresa"] = "";
	$fieldLabelslogin["Portuguese(Brazil)"]["Confirma"] = "Confirma";
	$fieldToolTipslogin["Portuguese(Brazil)"]["Confirma"] = "";
	$placeHolderslogin["Portuguese(Brazil)"]["Confirma"] = "";
	if (count($fieldToolTipslogin["Portuguese(Brazil)"]))
		$tdatalogin[".isUseToolTips"] = true;
}


	$tdatalogin[".NCSearch"] = true;



$tdatalogin[".shortTableName"] = "login";
$tdatalogin[".nSecOptions"] = 0;

$tdatalogin[".mainTableOwnerID"] = "";
$tdatalogin[".entityType"] = 0;
$tdatalogin[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatalogin[".strOriginalTableName"] = "login";

	



$tdatalogin[".showAddInPopup"] = false;

$tdatalogin[".showEditInPopup"] = false;

$tdatalogin[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatalogin[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatalogin[".listAjax"] = false;
//	temporary
//$tdatalogin[".listAjax"] = false;

	$tdatalogin[".audit"] = false;

	$tdatalogin[".locking"] = false;


$pages = $tdatalogin[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalogin[".edit"] = true;
	$tdatalogin[".afterEditAction"] = 1;
	$tdatalogin[".closePopupAfterEdit"] = 1;
	$tdatalogin[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalogin[".add"] = true;
$tdatalogin[".afterAddAction"] = 1;
$tdatalogin[".closePopupAfterAdd"] = 1;
$tdatalogin[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalogin[".list"] = true;
}



$tdatalogin[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalogin[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalogin[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalogin[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalogin[".printFriendly"] = true;
}



$tdatalogin[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalogin[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalogin[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalogin[".isUseAjaxSuggest"] = true;

$tdatalogin[".rowHighlite"] = true;





$tdatalogin[".ajaxCodeSnippetAdded"] = false;

$tdatalogin[".buttonsAdded"] = false;

$tdatalogin[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalogin[".isUseTimeForSearch"] = false;


$tdatalogin[".badgeColor"] = "4169E1";


$tdatalogin[".allSearchFields"] = array();
$tdatalogin[".filterFields"] = array();
$tdatalogin[".requiredSearchFields"] = array();

$tdatalogin[".googleLikeFields"] = array();
$tdatalogin[".googleLikeFields"][] = "usu_id";
$tdatalogin[".googleLikeFields"][] = "nome";
$tdatalogin[".googleLikeFields"][] = "sobrenome";
$tdatalogin[".googleLikeFields"][] = "senha";
$tdatalogin[".googleLikeFields"][] = "email";
$tdatalogin[".googleLikeFields"][] = "email_validado";
$tdatalogin[".googleLikeFields"][] = "permissao";
$tdatalogin[".googleLikeFields"][] = "tipo_usuario";
$tdatalogin[".googleLikeFields"][] = "plano_tipo";
$tdatalogin[".googleLikeFields"][] = "data_in";
$tdatalogin[".googleLikeFields"][] = "data_primeiro_acesso";
$tdatalogin[".googleLikeFields"][] = "data_ultimo_acesso";
$tdatalogin[".googleLikeFields"][] = "cpf";
$tdatalogin[".googleLikeFields"][] = "avatar";
$tdatalogin[".googleLikeFields"][] = "sexo";
$tdatalogin[".googleLikeFields"][] = "info_inicial";
$tdatalogin[".googleLikeFields"][] = "pais";
$tdatalogin[".googleLikeFields"][] = "estado";
$tdatalogin[".googleLikeFields"][] = "municipio";
$tdatalogin[".googleLikeFields"][] = "cep";
$tdatalogin[".googleLikeFields"][] = "rua";
$tdatalogin[".googleLikeFields"][] = "numero";
$tdatalogin[".googleLikeFields"][] = "complemento";
$tdatalogin[".googleLikeFields"][] = "telefone_celular_principal";
$tdatalogin[".googleLikeFields"][] = "telefone_celular_secundario";
$tdatalogin[".googleLikeFields"][] = "telefone_residencial";
$tdatalogin[".googleLikeFields"][] = "telefone_comercial";
$tdatalogin[".googleLikeFields"][] = "code_trocar_senha";
$tdatalogin[".googleLikeFields"][] = "deletado";
$tdatalogin[".googleLikeFields"][] = "idEmpresa";
$tdatalogin[".googleLikeFields"][] = "Confirma";



$tdatalogin[".tableType"] = "list";

$tdatalogin[".printerPageOrientation"] = 0;
$tdatalogin[".nPrinterPageScale"] = 100;

$tdatalogin[".nPrinterSplitRecords"] = 40;

$tdatalogin[".geocodingEnabled"] = false;










$tdatalogin[".pageSize"] = 20;

$tdatalogin[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatalogin[".strOrderBy"] = $tstrOrderBy;

$tdatalogin[".orderindexes"] = array();


$tdatalogin[".sqlHead"] = "SELECT usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado,  	idEmpresa,  	Confirma";
$tdatalogin[".sqlFrom"] = "FROM login";
$tdatalogin[".sqlWhereExpr"] = "";
$tdatalogin[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalogin[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalogin[".arrGroupsPerPage"] = $arrGPP;

$tdatalogin[".highlightSearchResults"] = true;

$tableKeyslogin = array();
$tdatalogin[".Keys"] = $tableKeyslogin;


$tdatalogin[".hideMobileList"] = array();




//	usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usu_id";
	$fdata["GoodName"] = "usu_id";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","usu_id");
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


	$tdatalogin["usu_id"] = $fdata;
		$tdatalogin[".searchableFields"][] = "usu_id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","nome");
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatalogin["nome"] = $fdata;
		$tdatalogin[".searchableFields"][] = "nome";
//	sobrenome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sobrenome";
	$fdata["GoodName"] = "sobrenome";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","sobrenome");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatalogin["sobrenome"] = $fdata;
		$tdatalogin[".searchableFields"][] = "sobrenome";
//	senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "senha";
	$fdata["GoodName"] = "senha";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","senha");
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
			$edata["EditParams"].= " maxlength=250";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
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


	$tdatalogin["senha"] = $fdata;
		$tdatalogin[".searchableFields"][] = "senha";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","email");
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Email");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Seu e-mail ja existe em nosso cadastro.", "messageType" => "Text");

	
				if(count($edata["validateAs"]) && !in_array('IsRequired', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsRequired';
			if(count($edata["validateAs"]) && !in_array('IsEmail', $edata["validateAs"]['basicValidate']))
		$edata["validateAs"]['basicValidate'][] = 'IsEmail';
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


	$tdatalogin["email"] = $fdata;
		$tdatalogin[".searchableFields"][] = "email";
//	email_validado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email_validado";
	$fdata["GoodName"] = "email_validado";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","email_validado");
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


	$tdatalogin["email_validado"] = $fdata;
		$tdatalogin[".searchableFields"][] = "email_validado";
//	permissao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "permissao";
	$fdata["GoodName"] = "permissao";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","permissao");
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


	$tdatalogin["permissao"] = $fdata;
		$tdatalogin[".searchableFields"][] = "permissao";
//	tipo_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_usuario";
	$fdata["GoodName"] = "tipo_usuario";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","tipo_usuario");
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

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idtipo";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Tipo";

	

	
	$edata["LookupOrderBy"] = "Tipo";

	
	
	
	

	
	
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


	$tdatalogin["tipo_usuario"] = $fdata;
		$tdatalogin[".searchableFields"][] = "tipo_usuario";
//	plano_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "plano_tipo";
	$fdata["GoodName"] = "plano_tipo";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","plano_tipo");
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


	$tdatalogin["plano_tipo"] = $fdata;
		$tdatalogin[".searchableFields"][] = "plano_tipo";
//	data_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data_in";
	$fdata["GoodName"] = "data_in";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","data_in");
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


	$tdatalogin["data_in"] = $fdata;
		$tdatalogin[".searchableFields"][] = "data_in";
//	data_primeiro_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "data_primeiro_acesso";
	$fdata["GoodName"] = "data_primeiro_acesso";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","data_primeiro_acesso");
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


	$tdatalogin["data_primeiro_acesso"] = $fdata;
		$tdatalogin[".searchableFields"][] = "data_primeiro_acesso";
//	data_ultimo_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_ultimo_acesso";
	$fdata["GoodName"] = "data_ultimo_acesso";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","data_ultimo_acesso");
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


	$tdatalogin["data_ultimo_acesso"] = $fdata;
		$tdatalogin[".searchableFields"][] = "data_ultimo_acesso";
//	cpf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cpf";
	$fdata["GoodName"] = "cpf";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","cpf");
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


	$tdatalogin["cpf"] = $fdata;
		$tdatalogin[".searchableFields"][] = "cpf";
//	avatar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "avatar";
	$fdata["GoodName"] = "avatar";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","avatar");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "avatar";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avatar";

	
	
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


	$tdatalogin["avatar"] = $fdata;
		$tdatalogin[".searchableFields"][] = "avatar";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","sexo");
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


	$tdatalogin["sexo"] = $fdata;
		$tdatalogin[".searchableFields"][] = "sexo";
//	info_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "info_inicial";
	$fdata["GoodName"] = "info_inicial";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","info_inicial");
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


	$tdatalogin["info_inicial"] = $fdata;
		$tdatalogin[".searchableFields"][] = "info_inicial";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","pais");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "pais";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pais";

	
	
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


	$tdatalogin["pais"] = $fdata;
		$tdatalogin[".searchableFields"][] = "pais";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","estado");
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


	$tdatalogin["estado"] = $fdata;
		$tdatalogin[".searchableFields"][] = "estado";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","municipio");
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


	$tdatalogin["municipio"] = $fdata;
		$tdatalogin[".searchableFields"][] = "municipio";
//	cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cep";
	$fdata["GoodName"] = "cep";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","cep");
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


	$tdatalogin["cep"] = $fdata;
		$tdatalogin[".searchableFields"][] = "cep";
//	rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "rua";
	$fdata["GoodName"] = "rua";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","rua");
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


	$tdatalogin["rua"] = $fdata;
		$tdatalogin[".searchableFields"][] = "rua";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","numero");
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


	$tdatalogin["numero"] = $fdata;
		$tdatalogin[".searchableFields"][] = "numero";
//	complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complemento";
	$fdata["GoodName"] = "complemento";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","complemento");
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatalogin["complemento"] = $fdata;
		$tdatalogin[".searchableFields"][] = "complemento";
//	telefone_celular_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "telefone_celular_principal";
	$fdata["GoodName"] = "telefone_celular_principal";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","telefone_celular_principal");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Seu telefone ja existe em nosso cadastro.", "messageType" => "Text");

	
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


	$tdatalogin["telefone_celular_principal"] = $fdata;
		$tdatalogin[".searchableFields"][] = "telefone_celular_principal";
//	telefone_celular_secundario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "telefone_celular_secundario";
	$fdata["GoodName"] = "telefone_celular_secundario";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","telefone_celular_secundario");
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


	$tdatalogin["telefone_celular_secundario"] = $fdata;
		$tdatalogin[".searchableFields"][] = "telefone_celular_secundario";
//	telefone_residencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "telefone_residencial";
	$fdata["GoodName"] = "telefone_residencial";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","telefone_residencial");
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


	$tdatalogin["telefone_residencial"] = $fdata;
		$tdatalogin[".searchableFields"][] = "telefone_residencial";
//	telefone_comercial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "telefone_comercial";
	$fdata["GoodName"] = "telefone_comercial";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","telefone_comercial");
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


	$tdatalogin["telefone_comercial"] = $fdata;
		$tdatalogin[".searchableFields"][] = "telefone_comercial";
//	code_trocar_senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "code_trocar_senha";
	$fdata["GoodName"] = "code_trocar_senha";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","code_trocar_senha");
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


	$tdatalogin["code_trocar_senha"] = $fdata;
		$tdatalogin[".searchableFields"][] = "code_trocar_senha";
//	deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "deletado";
	$fdata["GoodName"] = "deletado";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","deletado");
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


	$tdatalogin["deletado"] = $fdata;
		$tdatalogin[".searchableFields"][] = "deletado";
//	idEmpresa
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "idEmpresa";
	$fdata["GoodName"] = "idEmpresa";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","idEmpresa");
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


	$tdatalogin["idEmpresa"] = $fdata;
		$tdatalogin[".searchableFields"][] = "idEmpresa";
//	Confirma
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Confirma";
	$fdata["GoodName"] = "Confirma";
	$fdata["ownerTable"] = "login";
	$fdata["Label"] = GetFieldLabel("login","Confirma");
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


	$tdatalogin["Confirma"] = $fdata;
		$tdatalogin[".searchableFields"][] = "Confirma";


$tables_data["login"]=&$tdatalogin;
$field_labels["login"] = &$fieldLabelslogin;
$fieldToolTips["login"] = &$fieldToolTipslogin;
$placeHolders["login"] = &$placeHolderslogin;
$page_titles["login"] = &$pageTitleslogin;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["login"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["login"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_login()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado,  	idEmpresa,  	Confirma";
$proto0["m_strFrom"] = "FROM login";
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
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto6["m_sql"] = "usu_id";
$proto6["m_srcTableName"] = "login";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "login";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sobrenome",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto10["m_sql"] = "sobrenome";
$proto10["m_srcTableName"] = "login";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto12["m_sql"] = "senha";
$proto12["m_srcTableName"] = "login";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "login";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email_validado",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto16["m_sql"] = "email_validado";
$proto16["m_srcTableName"] = "login";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "permissao",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto18["m_sql"] = "permissao";
$proto18["m_srcTableName"] = "login";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_usuario",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto20["m_sql"] = "tipo_usuario";
$proto20["m_srcTableName"] = "login";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "plano_tipo",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto22["m_sql"] = "plano_tipo";
$proto22["m_srcTableName"] = "login";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data_in",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto24["m_sql"] = "data_in";
$proto24["m_srcTableName"] = "login";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "data_primeiro_acesso",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto26["m_sql"] = "data_primeiro_acesso";
$proto26["m_srcTableName"] = "login";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_ultimo_acesso",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto28["m_sql"] = "data_ultimo_acesso";
$proto28["m_srcTableName"] = "login";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cpf",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto30["m_sql"] = "cpf";
$proto30["m_srcTableName"] = "login";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "avatar",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto32["m_sql"] = "avatar";
$proto32["m_srcTableName"] = "login";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto34["m_sql"] = "sexo";
$proto34["m_srcTableName"] = "login";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "info_inicial",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto36["m_sql"] = "info_inicial";
$proto36["m_srcTableName"] = "login";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto38["m_sql"] = "pais";
$proto38["m_srcTableName"] = "login";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto40["m_sql"] = "estado";
$proto40["m_srcTableName"] = "login";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto42["m_sql"] = "municipio";
$proto42["m_srcTableName"] = "login";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto44["m_sql"] = "cep";
$proto44["m_srcTableName"] = "login";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "rua",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto46["m_sql"] = "rua";
$proto46["m_srcTableName"] = "login";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto48["m_sql"] = "numero";
$proto48["m_srcTableName"] = "login";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "complemento",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto50["m_sql"] = "complemento";
$proto50["m_srcTableName"] = "login";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_principal",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto52["m_sql"] = "telefone_celular_principal";
$proto52["m_srcTableName"] = "login";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_secundario",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto54["m_sql"] = "telefone_celular_secundario";
$proto54["m_srcTableName"] = "login";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_residencial",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto56["m_sql"] = "telefone_residencial";
$proto56["m_srcTableName"] = "login";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_comercial",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto58["m_sql"] = "telefone_comercial";
$proto58["m_srcTableName"] = "login";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "code_trocar_senha",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto60["m_sql"] = "code_trocar_senha";
$proto60["m_srcTableName"] = "login";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "deletado",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto62["m_sql"] = "deletado";
$proto62["m_srcTableName"] = "login";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "idEmpresa",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto64["m_sql"] = "idEmpresa";
$proto64["m_srcTableName"] = "login";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Confirma",
	"m_strTable" => "login",
	"m_srcTableName" => "login"
));

$proto66["m_sql"] = "Confirma";
$proto66["m_srcTableName"] = "login";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "login";
$proto69["m_srcTableName"] = "login";
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
$proto68["m_sql"] = "login";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "login";
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
$proto0["m_srcTableName"]="login";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_login = createSqlQuery_login();


	
		;

																															

$tdatalogin[".sqlquery"] = $queryData_login;



$tableEvents["login"] = new eventsBase;
$tdatalogin[".hasEvents"] = false;

?>