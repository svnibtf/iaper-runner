<?php
$tdatausuarios = array();
$tdatausuarios[".searchableFields"] = array();
$tdatausuarios[".ShortName"] = "usuarios";
$tdatausuarios[".OwnerID"] = "";
$tdatausuarios[".OriginalTable"] = "usuarios";


$tdatausuarios[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatausuarios[".originalPagesByType"] = $tdatausuarios[".pagesByType"];
$tdatausuarios[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatausuarios[".originalPages"] = $tdatausuarios[".pages"];
$tdatausuarios[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatausuarios[".originalDefaultPages"] = $tdatausuarios[".defaultPages"];

//	field labels
$fieldLabelsusuarios = array();
$fieldToolTipsusuarios = array();
$pageTitlesusuarios = array();
$placeHoldersusuarios = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsusuarios["English"] = array();
	$fieldToolTipsusuarios["English"] = array();
	$placeHoldersusuarios["English"] = array();
	$pageTitlesusuarios["English"] = array();
	$fieldLabelsusuarios["English"]["usu_id"] = "Usu Id";
	$fieldToolTipsusuarios["English"]["usu_id"] = "";
	$placeHoldersusuarios["English"]["usu_id"] = "";
	$fieldLabelsusuarios["English"]["nome"] = "Nome";
	$fieldToolTipsusuarios["English"]["nome"] = "";
	$placeHoldersusuarios["English"]["nome"] = "";
	$fieldLabelsusuarios["English"]["sobrenome"] = "Sobrenome";
	$fieldToolTipsusuarios["English"]["sobrenome"] = "";
	$placeHoldersusuarios["English"]["sobrenome"] = "";
	$fieldLabelsusuarios["English"]["senha"] = "Senha";
	$fieldToolTipsusuarios["English"]["senha"] = "";
	$placeHoldersusuarios["English"]["senha"] = "";
	$fieldLabelsusuarios["English"]["email"] = "Email";
	$fieldToolTipsusuarios["English"]["email"] = "";
	$placeHoldersusuarios["English"]["email"] = "";
	$fieldLabelsusuarios["English"]["email_validado"] = "Email Validado";
	$fieldToolTipsusuarios["English"]["email_validado"] = "";
	$placeHoldersusuarios["English"]["email_validado"] = "";
	$fieldLabelsusuarios["English"]["permissao"] = "Permissao";
	$fieldToolTipsusuarios["English"]["permissao"] = "";
	$placeHoldersusuarios["English"]["permissao"] = "";
	$fieldLabelsusuarios["English"]["tipo_usuario"] = "Tipo Usuario";
	$fieldToolTipsusuarios["English"]["tipo_usuario"] = "";
	$placeHoldersusuarios["English"]["tipo_usuario"] = "";
	$fieldLabelsusuarios["English"]["plano_tipo"] = "Plano Tipo";
	$fieldToolTipsusuarios["English"]["plano_tipo"] = "";
	$placeHoldersusuarios["English"]["plano_tipo"] = "";
	$fieldLabelsusuarios["English"]["data_in"] = "Data In";
	$fieldToolTipsusuarios["English"]["data_in"] = "";
	$placeHoldersusuarios["English"]["data_in"] = "";
	$fieldLabelsusuarios["English"]["data_primeiro_acesso"] = "Data Primeiro Acesso";
	$fieldToolTipsusuarios["English"]["data_primeiro_acesso"] = "";
	$placeHoldersusuarios["English"]["data_primeiro_acesso"] = "";
	$fieldLabelsusuarios["English"]["data_ultimo_acesso"] = "Data Ultimo Acesso";
	$fieldToolTipsusuarios["English"]["data_ultimo_acesso"] = "";
	$placeHoldersusuarios["English"]["data_ultimo_acesso"] = "";
	$fieldLabelsusuarios["English"]["cpf"] = "Cpf";
	$fieldToolTipsusuarios["English"]["cpf"] = "";
	$placeHoldersusuarios["English"]["cpf"] = "";
	$fieldLabelsusuarios["English"]["avatar"] = "Avatar";
	$fieldToolTipsusuarios["English"]["avatar"] = "";
	$placeHoldersusuarios["English"]["avatar"] = "";
	$fieldLabelsusuarios["English"]["sexo"] = "Sexo";
	$fieldToolTipsusuarios["English"]["sexo"] = "";
	$placeHoldersusuarios["English"]["sexo"] = "";
	$fieldLabelsusuarios["English"]["info_inicial"] = "Info Inicial";
	$fieldToolTipsusuarios["English"]["info_inicial"] = "";
	$placeHoldersusuarios["English"]["info_inicial"] = "";
	$fieldLabelsusuarios["English"]["pais"] = "Pais";
	$fieldToolTipsusuarios["English"]["pais"] = "";
	$placeHoldersusuarios["English"]["pais"] = "";
	$fieldLabelsusuarios["English"]["estado"] = "Estado";
	$fieldToolTipsusuarios["English"]["estado"] = "";
	$placeHoldersusuarios["English"]["estado"] = "";
	$fieldLabelsusuarios["English"]["municipio"] = "Municipio";
	$fieldToolTipsusuarios["English"]["municipio"] = "";
	$placeHoldersusuarios["English"]["municipio"] = "";
	$fieldLabelsusuarios["English"]["cep"] = "Cep";
	$fieldToolTipsusuarios["English"]["cep"] = "";
	$placeHoldersusuarios["English"]["cep"] = "";
	$fieldLabelsusuarios["English"]["rua"] = "Rua";
	$fieldToolTipsusuarios["English"]["rua"] = "";
	$placeHoldersusuarios["English"]["rua"] = "";
	$fieldLabelsusuarios["English"]["numero"] = "Numero";
	$fieldToolTipsusuarios["English"]["numero"] = "";
	$placeHoldersusuarios["English"]["numero"] = "";
	$fieldLabelsusuarios["English"]["complemento"] = "Complemento";
	$fieldToolTipsusuarios["English"]["complemento"] = "";
	$placeHoldersusuarios["English"]["complemento"] = "";
	$fieldLabelsusuarios["English"]["telefone_celular_principal"] = "Telefone Celular Principal";
	$fieldToolTipsusuarios["English"]["telefone_celular_principal"] = "";
	$placeHoldersusuarios["English"]["telefone_celular_principal"] = "";
	$fieldLabelsusuarios["English"]["telefone_celular_secundario"] = "Telefone Celular Secundario";
	$fieldToolTipsusuarios["English"]["telefone_celular_secundario"] = "";
	$placeHoldersusuarios["English"]["telefone_celular_secundario"] = "";
	$fieldLabelsusuarios["English"]["telefone_residencial"] = "Telefone Residencial";
	$fieldToolTipsusuarios["English"]["telefone_residencial"] = "";
	$placeHoldersusuarios["English"]["telefone_residencial"] = "";
	$fieldLabelsusuarios["English"]["telefone_comercial"] = "Telefone Comercial";
	$fieldToolTipsusuarios["English"]["telefone_comercial"] = "";
	$placeHoldersusuarios["English"]["telefone_comercial"] = "";
	$fieldLabelsusuarios["English"]["code_trocar_senha"] = "Code Trocar Senha";
	$fieldToolTipsusuarios["English"]["code_trocar_senha"] = "";
	$placeHoldersusuarios["English"]["code_trocar_senha"] = "";
	$fieldLabelsusuarios["English"]["deletado"] = "Deletado";
	$fieldToolTipsusuarios["English"]["deletado"] = "";
	$placeHoldersusuarios["English"]["deletado"] = "";
	if (count($fieldToolTipsusuarios["English"]))
		$tdatausuarios[".isUseToolTips"] = true;
}


	$tdatausuarios[".NCSearch"] = true;



$tdatausuarios[".shortTableName"] = "usuarios";
$tdatausuarios[".nSecOptions"] = 0;

$tdatausuarios[".mainTableOwnerID"] = "";
$tdatausuarios[".entityType"] = 0;
$tdatausuarios[".connId"] = "iaper_runner_db_at_localhost";


$tdatausuarios[".strOriginalTableName"] = "usuarios";

	



$tdatausuarios[".showAddInPopup"] = false;

$tdatausuarios[".showEditInPopup"] = false;

$tdatausuarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuarios[".listAjax"] = false;
//	temporary
//$tdatausuarios[".listAjax"] = false;

	$tdatausuarios[".audit"] = false;

	$tdatausuarios[".locking"] = false;


$pages = $tdatausuarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatausuarios[".edit"] = true;
	$tdatausuarios[".afterEditAction"] = 1;
	$tdatausuarios[".closePopupAfterEdit"] = 1;
	$tdatausuarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatausuarios[".add"] = true;
$tdatausuarios[".afterAddAction"] = 1;
$tdatausuarios[".closePopupAfterAdd"] = 1;
$tdatausuarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatausuarios[".list"] = true;
}



$tdatausuarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatausuarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatausuarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatausuarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatausuarios[".printFriendly"] = true;
}



$tdatausuarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatausuarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatausuarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatausuarios[".isUseAjaxSuggest"] = true;

$tdatausuarios[".rowHighlite"] = true;





$tdatausuarios[".ajaxCodeSnippetAdded"] = false;

$tdatausuarios[".buttonsAdded"] = false;

$tdatausuarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuarios[".isUseTimeForSearch"] = false;


$tdatausuarios[".badgeColor"] = "E8926F";


$tdatausuarios[".allSearchFields"] = array();
$tdatausuarios[".filterFields"] = array();
$tdatausuarios[".requiredSearchFields"] = array();

$tdatausuarios[".googleLikeFields"] = array();
$tdatausuarios[".googleLikeFields"][] = "usu_id";
$tdatausuarios[".googleLikeFields"][] = "nome";
$tdatausuarios[".googleLikeFields"][] = "sobrenome";
$tdatausuarios[".googleLikeFields"][] = "senha";
$tdatausuarios[".googleLikeFields"][] = "email";
$tdatausuarios[".googleLikeFields"][] = "email_validado";
$tdatausuarios[".googleLikeFields"][] = "permissao";
$tdatausuarios[".googleLikeFields"][] = "tipo_usuario";
$tdatausuarios[".googleLikeFields"][] = "plano_tipo";
$tdatausuarios[".googleLikeFields"][] = "data_in";
$tdatausuarios[".googleLikeFields"][] = "data_primeiro_acesso";
$tdatausuarios[".googleLikeFields"][] = "data_ultimo_acesso";
$tdatausuarios[".googleLikeFields"][] = "cpf";
$tdatausuarios[".googleLikeFields"][] = "avatar";
$tdatausuarios[".googleLikeFields"][] = "sexo";
$tdatausuarios[".googleLikeFields"][] = "info_inicial";
$tdatausuarios[".googleLikeFields"][] = "pais";
$tdatausuarios[".googleLikeFields"][] = "estado";
$tdatausuarios[".googleLikeFields"][] = "municipio";
$tdatausuarios[".googleLikeFields"][] = "cep";
$tdatausuarios[".googleLikeFields"][] = "rua";
$tdatausuarios[".googleLikeFields"][] = "numero";
$tdatausuarios[".googleLikeFields"][] = "complemento";
$tdatausuarios[".googleLikeFields"][] = "telefone_celular_principal";
$tdatausuarios[".googleLikeFields"][] = "telefone_celular_secundario";
$tdatausuarios[".googleLikeFields"][] = "telefone_residencial";
$tdatausuarios[".googleLikeFields"][] = "telefone_comercial";
$tdatausuarios[".googleLikeFields"][] = "code_trocar_senha";
$tdatausuarios[".googleLikeFields"][] = "deletado";



$tdatausuarios[".tableType"] = "list";

$tdatausuarios[".printerPageOrientation"] = 0;
$tdatausuarios[".nPrinterPageScale"] = 100;

$tdatausuarios[".nPrinterSplitRecords"] = 40;

$tdatausuarios[".geocodingEnabled"] = false;










$tdatausuarios[".pageSize"] = 20;

$tdatausuarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuarios[".strOrderBy"] = $tstrOrderBy;

$tdatausuarios[".orderindexes"] = array();


$tdatausuarios[".sqlHead"] = "SELECT usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado";
$tdatausuarios[".sqlFrom"] = "FROM usuarios";
$tdatausuarios[".sqlWhereExpr"] = "";
$tdatausuarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuarios[".arrGroupsPerPage"] = $arrGPP;

$tdatausuarios[".highlightSearchResults"] = true;

$tableKeysusuarios = array();
$tdatausuarios[".Keys"] = $tableKeysusuarios;


$tdatausuarios[".hideMobileList"] = array();




//	usu_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "usu_id";
	$fdata["GoodName"] = "usu_id";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","usu_id");
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


	$tdatausuarios["usu_id"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "usu_id";
//	nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nome";
	$fdata["GoodName"] = "nome";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","nome");
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


	$tdatausuarios["nome"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "nome";
//	sobrenome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sobrenome";
	$fdata["GoodName"] = "sobrenome";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","sobrenome");
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


	$tdatausuarios["sobrenome"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "sobrenome";
//	senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "senha";
	$fdata["GoodName"] = "senha";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","senha");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatausuarios["senha"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "senha";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","email");
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


	$tdatausuarios["email"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "email";
//	email_validado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email_validado";
	$fdata["GoodName"] = "email_validado";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","email_validado");
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


	$tdatausuarios["email_validado"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "email_validado";
//	permissao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "permissao";
	$fdata["GoodName"] = "permissao";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","permissao");
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


	$tdatausuarios["permissao"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "permissao";
//	tipo_usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "tipo_usuario";
	$fdata["GoodName"] = "tipo_usuario";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","tipo_usuario");
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


	$tdatausuarios["tipo_usuario"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "tipo_usuario";
//	plano_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "plano_tipo";
	$fdata["GoodName"] = "plano_tipo";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","plano_tipo");
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


	$tdatausuarios["plano_tipo"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "plano_tipo";
//	data_in
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "data_in";
	$fdata["GoodName"] = "data_in";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","data_in");
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


	$tdatausuarios["data_in"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "data_in";
//	data_primeiro_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "data_primeiro_acesso";
	$fdata["GoodName"] = "data_primeiro_acesso";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","data_primeiro_acesso");
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


	$tdatausuarios["data_primeiro_acesso"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "data_primeiro_acesso";
//	data_ultimo_acesso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "data_ultimo_acesso";
	$fdata["GoodName"] = "data_ultimo_acesso";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","data_ultimo_acesso");
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


	$tdatausuarios["data_ultimo_acesso"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "data_ultimo_acesso";
//	cpf
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cpf";
	$fdata["GoodName"] = "cpf";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","cpf");
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


	$tdatausuarios["cpf"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "cpf";
//	avatar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "avatar";
	$fdata["GoodName"] = "avatar";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","avatar");
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


	$tdatausuarios["avatar"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "avatar";
//	sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sexo";
	$fdata["GoodName"] = "sexo";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","sexo");
	$fdata["FieldType"] = 16;

	
	
	
			

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


	$tdatausuarios["sexo"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "sexo";
//	info_inicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "info_inicial";
	$fdata["GoodName"] = "info_inicial";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","info_inicial");
	$fdata["FieldType"] = 16;

	
	
	
			

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


	$tdatausuarios["info_inicial"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "info_inicial";
//	pais
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "pais";
	$fdata["GoodName"] = "pais";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","pais");
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


	$tdatausuarios["pais"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "pais";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","estado");
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


	$tdatausuarios["estado"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "estado";
//	municipio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "municipio";
	$fdata["GoodName"] = "municipio";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","municipio");
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


	$tdatausuarios["municipio"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "municipio";
//	cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cep";
	$fdata["GoodName"] = "cep";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","cep");
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


	$tdatausuarios["cep"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "cep";
//	rua
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "rua";
	$fdata["GoodName"] = "rua";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","rua");
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


	$tdatausuarios["rua"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "rua";
//	numero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "numero";
	$fdata["GoodName"] = "numero";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","numero");
	$fdata["FieldType"] = 3;

	
	
	
			

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


	$tdatausuarios["numero"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "numero";
//	complemento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "complemento";
	$fdata["GoodName"] = "complemento";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","complemento");
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


	$tdatausuarios["complemento"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "complemento";
//	telefone_celular_principal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "telefone_celular_principal";
	$fdata["GoodName"] = "telefone_celular_principal";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","telefone_celular_principal");
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


	$tdatausuarios["telefone_celular_principal"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "telefone_celular_principal";
//	telefone_celular_secundario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "telefone_celular_secundario";
	$fdata["GoodName"] = "telefone_celular_secundario";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","telefone_celular_secundario");
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


	$tdatausuarios["telefone_celular_secundario"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "telefone_celular_secundario";
//	telefone_residencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "telefone_residencial";
	$fdata["GoodName"] = "telefone_residencial";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","telefone_residencial");
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


	$tdatausuarios["telefone_residencial"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "telefone_residencial";
//	telefone_comercial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "telefone_comercial";
	$fdata["GoodName"] = "telefone_comercial";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","telefone_comercial");
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


	$tdatausuarios["telefone_comercial"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "telefone_comercial";
//	code_trocar_senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "code_trocar_senha";
	$fdata["GoodName"] = "code_trocar_senha";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","code_trocar_senha");
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


	$tdatausuarios["code_trocar_senha"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "code_trocar_senha";
//	deletado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "deletado";
	$fdata["GoodName"] = "deletado";
	$fdata["ownerTable"] = "usuarios";
	$fdata["Label"] = GetFieldLabel("usuarios","deletado");
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


	$tdatausuarios["deletado"] = $fdata;
		$tdatausuarios[".searchableFields"][] = "deletado";


$tables_data["usuarios"]=&$tdatausuarios;
$field_labels["usuarios"] = &$fieldLabelsusuarios;
$fieldToolTips["usuarios"] = &$fieldToolTipsusuarios;
$placeHolders["usuarios"] = &$placeHoldersusuarios;
$page_titles["usuarios"] = &$pageTitlesusuarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["usuarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_usuarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "usu_id,  	nome,  	sobrenome,  	senha,  	email,  	email_validado,  	permissao,  	tipo_usuario,  	plano_tipo,  	data_in,  	data_primeiro_acesso,  	data_ultimo_acesso,  	cpf,  	avatar,  	sexo,  	info_inicial,  	pais,  	estado,  	municipio,  	cep,  	rua,  	numero,  	complemento,  	telefone_celular_principal,  	telefone_celular_secundario,  	telefone_residencial,  	telefone_comercial,  	code_trocar_senha,  	deletado";
$proto0["m_strFrom"] = "FROM usuarios";
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
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto6["m_sql"] = "usu_id";
$proto6["m_srcTableName"] = "usuarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nome",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto8["m_sql"] = "nome";
$proto8["m_srcTableName"] = "usuarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sobrenome",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto10["m_sql"] = "sobrenome";
$proto10["m_srcTableName"] = "usuarios";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "senha",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto12["m_sql"] = "senha";
$proto12["m_srcTableName"] = "usuarios";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "usuarios";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email_validado",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto16["m_sql"] = "email_validado";
$proto16["m_srcTableName"] = "usuarios";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "permissao",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto18["m_sql"] = "permissao";
$proto18["m_srcTableName"] = "usuarios";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo_usuario",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto20["m_sql"] = "tipo_usuario";
$proto20["m_srcTableName"] = "usuarios";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "plano_tipo",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto22["m_sql"] = "plano_tipo";
$proto22["m_srcTableName"] = "usuarios";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "data_in",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto24["m_sql"] = "data_in";
$proto24["m_srcTableName"] = "usuarios";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "data_primeiro_acesso",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto26["m_sql"] = "data_primeiro_acesso";
$proto26["m_srcTableName"] = "usuarios";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "data_ultimo_acesso",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto28["m_sql"] = "data_ultimo_acesso";
$proto28["m_srcTableName"] = "usuarios";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cpf",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto30["m_sql"] = "cpf";
$proto30["m_srcTableName"] = "usuarios";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "avatar",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto32["m_sql"] = "avatar";
$proto32["m_srcTableName"] = "usuarios";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sexo",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto34["m_sql"] = "sexo";
$proto34["m_srcTableName"] = "usuarios";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "info_inicial",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto36["m_sql"] = "info_inicial";
$proto36["m_srcTableName"] = "usuarios";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "pais",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto38["m_sql"] = "pais";
$proto38["m_srcTableName"] = "usuarios";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto40["m_sql"] = "estado";
$proto40["m_srcTableName"] = "usuarios";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "municipio",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto42["m_sql"] = "municipio";
$proto42["m_srcTableName"] = "usuarios";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cep",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto44["m_sql"] = "cep";
$proto44["m_srcTableName"] = "usuarios";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "rua",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto46["m_sql"] = "rua";
$proto46["m_srcTableName"] = "usuarios";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "numero",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto48["m_sql"] = "numero";
$proto48["m_srcTableName"] = "usuarios";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "complemento",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto50["m_sql"] = "complemento";
$proto50["m_srcTableName"] = "usuarios";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_principal",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto52["m_sql"] = "telefone_celular_principal";
$proto52["m_srcTableName"] = "usuarios";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_celular_secundario",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto54["m_sql"] = "telefone_celular_secundario";
$proto54["m_srcTableName"] = "usuarios";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_residencial",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto56["m_sql"] = "telefone_residencial";
$proto56["m_srcTableName"] = "usuarios";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "telefone_comercial",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto58["m_sql"] = "telefone_comercial";
$proto58["m_srcTableName"] = "usuarios";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "code_trocar_senha",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto60["m_sql"] = "code_trocar_senha";
$proto60["m_srcTableName"] = "usuarios";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "deletado",
	"m_strTable" => "usuarios",
	"m_srcTableName" => "usuarios"
));

$proto62["m_sql"] = "deletado";
$proto62["m_srcTableName"] = "usuarios";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "usuarios";
$proto65["m_srcTableName"] = "usuarios";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "usu_id";
$proto65["m_columns"][] = "nome";
$proto65["m_columns"][] = "sobrenome";
$proto65["m_columns"][] = "senha";
$proto65["m_columns"][] = "email";
$proto65["m_columns"][] = "email_validado";
$proto65["m_columns"][] = "permissao";
$proto65["m_columns"][] = "tipo_usuario";
$proto65["m_columns"][] = "plano_tipo";
$proto65["m_columns"][] = "data_in";
$proto65["m_columns"][] = "data_primeiro_acesso";
$proto65["m_columns"][] = "data_ultimo_acesso";
$proto65["m_columns"][] = "cpf";
$proto65["m_columns"][] = "avatar";
$proto65["m_columns"][] = "sexo";
$proto65["m_columns"][] = "info_inicial";
$proto65["m_columns"][] = "pais";
$proto65["m_columns"][] = "estado";
$proto65["m_columns"][] = "municipio";
$proto65["m_columns"][] = "cep";
$proto65["m_columns"][] = "rua";
$proto65["m_columns"][] = "numero";
$proto65["m_columns"][] = "complemento";
$proto65["m_columns"][] = "telefone_celular_principal";
$proto65["m_columns"][] = "telefone_celular_secundario";
$proto65["m_columns"][] = "telefone_residencial";
$proto65["m_columns"][] = "telefone_comercial";
$proto65["m_columns"][] = "code_trocar_senha";
$proto65["m_columns"][] = "deletado";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "usuarios";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "usuarios";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuarios = createSqlQuery_usuarios();


	
		;

																													

$tdatausuarios[".sqlquery"] = $queryData_usuarios;



$tableEvents["usuarios"] = new eventsBase;
$tdatausuarios[".hasEvents"] = false;

?>