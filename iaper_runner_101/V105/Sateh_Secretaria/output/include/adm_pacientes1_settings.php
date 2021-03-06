<?php
$tdataadm_pacientes1 = array();
$tdataadm_pacientes1[".searchableFields"] = array();
$tdataadm_pacientes1[".ShortName"] = "adm_pacientes1";
$tdataadm_pacientes1[".OwnerID"] = "idProfissional";
$tdataadm_pacientes1[".OriginalTable"] = "adm_pacientes";


$tdataadm_pacientes1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_pacientes1[".originalPagesByType"] = $tdataadm_pacientes1[".pagesByType"];
$tdataadm_pacientes1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_pacientes1[".originalPages"] = $tdataadm_pacientes1[".pages"];
$tdataadm_pacientes1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_pacientes1[".originalDefaultPages"] = $tdataadm_pacientes1[".defaultPages"];

//	field labels
$fieldLabelsadm_pacientes1 = array();
$fieldToolTipsadm_pacientes1 = array();
$pageTitlesadm_pacientes1 = array();
$placeHoldersadm_pacientes1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_pacientes1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["idPaciente"] = "Id ";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["idPaciente"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["idPaciente"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Nome"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Email"] = "Email";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Email"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Email"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Senha"] = "Senha";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Senha"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Senha"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Endereco"] = "Endereco";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Endereco"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Endereco"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Estado"] = "Estado";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Estado"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Estado"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Cep"] = "Cep";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Cep"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Cep"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Celular"] = "Celular";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Celular"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Celular"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Tel_Residencial"] = "Tel Residencial";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Tel_Residencial"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Tel_Residencial"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Data_Inicio"] = "Data Inicio";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Data_Inicio"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Data_Inicio"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Sexo"] = "Sexo";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Sexo"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Sexo"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Sintomas"] = "Sintomas";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Sintomas"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Sintomas"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Tratamento"] = "Tratamento";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Tratamento"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Tratamento"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["idProfissional"] = "Id Profissional";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["idProfissional"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["idProfissional"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["CPF"] = "CPF";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["CPF"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["CPF"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["RG"] = "RG";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["RG"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["RG"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Whats"] = "Whats";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Whats"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Whats"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Foto"] = "Foto";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Foto"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Foto"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Estado_Civil"] = "Estado Civil";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Estado_Civil"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Estado_Civil"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Procedencia"] = "Procedencia";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Procedencia"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Procedencia"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Responsavel"] = "Responsavel";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Responsavel"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Responsavel"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Peso"] = "Peso";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Peso"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Peso"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Altura"] = "Altura";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Altura"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Altura"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["IMC"] = "IMC";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["IMC"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["IMC"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Tipo_Sangue"] = "Tipo Sangue";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Tipo_Sangue"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Tipo_Sangue"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Pressao"] = "Pressao";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Pressao"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Pressao"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Nascimento"] = "Nascimento";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Nascimento"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Nascimento"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Profissao"] = "Profissao";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Profissao"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Profissao"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Convenio"] = "Convenio";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Convenio"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Convenio"] = "";
	$fieldLabelsadm_pacientes1["Portuguese(Brazil)"]["Observacoes"] = "Observacoes";
	$fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]["Observacoes"] = "";
	$placeHoldersadm_pacientes1["Portuguese(Brazil)"]["Observacoes"] = "";
	if (count($fieldToolTipsadm_pacientes1["Portuguese(Brazil)"]))
		$tdataadm_pacientes1[".isUseToolTips"] = true;
}


	$tdataadm_pacientes1[".NCSearch"] = true;



$tdataadm_pacientes1[".shortTableName"] = "adm_pacientes1";
$tdataadm_pacientes1[".nSecOptions"] = 2;

$tdataadm_pacientes1[".mainTableOwnerID"] = "idProfissional";
$tdataadm_pacientes1[".entityType"] = 0;
$tdataadm_pacientes1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_pacientes1[".strOriginalTableName"] = "adm_pacientes";

	



$tdataadm_pacientes1[".showAddInPopup"] = false;

$tdataadm_pacientes1[".showEditInPopup"] = false;

$tdataadm_pacientes1[".showViewInPopup"] = false;

$tdataadm_pacientes1[".listAjax"] = false;
//	temporary
//$tdataadm_pacientes1[".listAjax"] = false;

	$tdataadm_pacientes1[".audit"] = false;

	$tdataadm_pacientes1[".locking"] = false;


$pages = $tdataadm_pacientes1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_pacientes1[".edit"] = true;
	$tdataadm_pacientes1[".afterEditAction"] = 0;
	$tdataadm_pacientes1[".closePopupAfterEdit"] = 1;
	$tdataadm_pacientes1[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_pacientes1[".add"] = true;
$tdataadm_pacientes1[".afterAddAction"] = 0;
$tdataadm_pacientes1[".closePopupAfterAdd"] = 1;
$tdataadm_pacientes1[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_pacientes1[".list"] = true;
}



$tdataadm_pacientes1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_pacientes1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_pacientes1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_pacientes1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_pacientes1[".printFriendly"] = true;
}



$tdataadm_pacientes1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_pacientes1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_pacientes1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_pacientes1[".isUseAjaxSuggest"] = false;

$tdataadm_pacientes1[".rowHighlite"] = true;



						

$tdataadm_pacientes1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_pacientes1[".buttonsAdded"] = false;

$tdataadm_pacientes1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_pacientes1[".isUseTimeForSearch"] = false;


$tdataadm_pacientes1[".badgeColor"] = "c0c0c0";


$tdataadm_pacientes1[".allSearchFields"] = array();
$tdataadm_pacientes1[".filterFields"] = array();
$tdataadm_pacientes1[".requiredSearchFields"] = array();

$tdataadm_pacientes1[".googleLikeFields"] = array();
$tdataadm_pacientes1[".googleLikeFields"][] = "Nome";



$tdataadm_pacientes1[".tableType"] = "list";

$tdataadm_pacientes1[".printerPageOrientation"] = 0;
$tdataadm_pacientes1[".nPrinterPageScale"] = 100;

$tdataadm_pacientes1[".nPrinterSplitRecords"] = 40;

$tdataadm_pacientes1[".geocodingEnabled"] = false;










$tdataadm_pacientes1[".pageSize"] = 20;

$tdataadm_pacientes1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_pacientes1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_pacientes1[".orderindexes"] = array();


$tdataadm_pacientes1[".sqlHead"] = "SELECT idPaciente,  Nome,  Email,  Senha,  Endereco,  Bairro,  Cidade,  Estado,  Cep,  Celular,  CONCAT(\"https://api.whatsapp.com/send?phone=\", CONVERT(Celular, Char)) AS Whats,  Tel_Residencial,  Data_Inicio,  Sexo,  Sintomas,  Tratamento,  idProfissional,  CPF,  RG,  Foto,  Estado_Civil,  Procedencia,  Responsavel,  Peso,  Altura,  IMC,  Tipo_Sangue,  Pressao,  Nascimento,  Profissao,  Convenio,  Observacoes";
$tdataadm_pacientes1[".sqlFrom"] = "FROM adm_pacientes";
$tdataadm_pacientes1[".sqlWhereExpr"] = "";
$tdataadm_pacientes1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_pacientes1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_pacientes1[".arrGroupsPerPage"] = $arrGPP;


$tableKeysadm_pacientes1 = array();
$tableKeysadm_pacientes1[] = "idPaciente";
$tdataadm_pacientes1[".Keys"] = $tableKeysadm_pacientes1;


$tdataadm_pacientes1[".hideMobileList"] = array();




//	idPaciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idPaciente";
	$fdata["GoodName"] = "idPaciente";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","idPaciente");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idPaciente";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPaciente";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["idPaciente"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "idPaciente";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Nome");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nome";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Nome"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Nome";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Email Hyperlink");

	
		$vdata["LinkPrefix"] ="mailto:";

	
	
	
	
	
	
	
	
	
		
	
	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Email"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Email";
//	Senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Senha";
	$fdata["GoodName"] = "Senha";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Senha");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Senha";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Senha";

	
	
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
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Senha"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Senha";
//	Endereco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Endereco";
	$fdata["GoodName"] = "Endereco";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Endereco");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Endereco";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Endereco";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Endereco"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Endereco";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Bairro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Bairro";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bairro";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Bairro"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Bairro";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Cidade");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cidade";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cidade";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Cidade"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Cidade";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "idPaciente";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataadm_pacientes1["Estado"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Estado";
//	Cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cep";
	$fdata["GoodName"] = "Cep";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Cep");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cep";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cep";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Cep"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Cep";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Celular");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Celular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Phone Number");

	
	
	
	
	
	
	
	
	
	
	
		
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Celular"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Celular";
//	Whats
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Whats";
	$fdata["GoodName"] = "Whats";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Whats");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Celular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONCAT(\"https://api.whatsapp.com/send?phone=\", CONVERT(Celular, Char))";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Whats";
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


	$tdataadm_pacientes1["Whats"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Whats";
//	Tel_Residencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Tel_Residencial";
	$fdata["GoodName"] = "Tel_Residencial";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Tel_Residencial");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tel_Residencial";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tel_Residencial";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Tel_Residencial"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Tel_Residencial";
//	Data_Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Data_Inicio";
	$fdata["GoodName"] = "Data_Inicio";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Data_Inicio");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "Data_Inicio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Data_Inicio";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Data_Inicio"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Data_Inicio";
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Sexo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Sexo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sexo";

	
	
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

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "M";
	$edata["LookupValues"][] = "F";

	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Sexo"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Sexo";
//	Sintomas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Sintomas";
	$fdata["GoodName"] = "Sintomas";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Sintomas");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Sintomas";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Sintomas";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Sintomas"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Sintomas";
//	Tratamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Tratamento";
	$fdata["GoodName"] = "Tratamento";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Tratamento");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Tratamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tratamento";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["Tratamento"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Tratamento";
//	idProfissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "idProfissional";
	$fdata["GoodName"] = "idProfissional";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","idProfissional");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idProfissional";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idProfissional";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["idProfissional"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "idProfissional";
//	CPF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CPF";
	$fdata["GoodName"] = "CPF";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","CPF");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CPF";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CPF";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["CPF"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "CPF";
//	RG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "RG";
	$fdata["GoodName"] = "RG";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","RG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RG";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Contains";
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


	$tdataadm_pacientes1["RG"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "RG";
//	Foto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Foto";
	$fdata["GoodName"] = "Foto";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Foto");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Foto";

		$fdata["sourceSingle"] = "Foto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Foto";

	
	
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


	$tdataadm_pacientes1["Foto"] = $fdata;
	//	Estado_Civil
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Estado_Civil";
	$fdata["GoodName"] = "Estado_Civil";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Estado_Civil");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Estado_Civil";

		$fdata["sourceSingle"] = "Estado_Civil";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Estado_Civil";

	
	
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
	$edata["LookupValues"][] = "Solteiro(a)";
	$edata["LookupValues"][] = "Casado(a)";
	$edata["LookupValues"][] = "Viuvo(a)";
	$edata["LookupValues"][] = "Divorciado(a)";
	$edata["LookupValues"][] = "Outros";

	
	
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


	$tdataadm_pacientes1["Estado_Civil"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Estado_Civil";
//	Procedencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Procedencia";
	$fdata["GoodName"] = "Procedencia";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Procedencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Procedencia";

		$fdata["sourceSingle"] = "Procedencia";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Procedencia";

	
	
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


	$tdataadm_pacientes1["Procedencia"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Procedencia";
//	Responsavel
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Responsavel";
	$fdata["GoodName"] = "Responsavel";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Responsavel");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Responsavel";

		$fdata["sourceSingle"] = "Responsavel";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Responsavel";

	
	
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


	$tdataadm_pacientes1["Responsavel"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Responsavel";
//	Peso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Peso";
	$fdata["GoodName"] = "Peso";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Peso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Peso";

		$fdata["sourceSingle"] = "Peso";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Peso";

	
	
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


	$tdataadm_pacientes1["Peso"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Peso";
//	Altura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Altura";
	$fdata["GoodName"] = "Altura";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Altura");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Altura";

		$fdata["sourceSingle"] = "Altura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Altura";

	
	
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


	$tdataadm_pacientes1["Altura"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Altura";
//	IMC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "IMC";
	$fdata["GoodName"] = "IMC";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","IMC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IMC";

		$fdata["sourceSingle"] = "IMC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IMC";

	
	
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


	$tdataadm_pacientes1["IMC"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "IMC";
//	Tipo_Sangue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Tipo_Sangue";
	$fdata["GoodName"] = "Tipo_Sangue";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Tipo_Sangue");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Sangue";

		$fdata["sourceSingle"] = "Tipo_Sangue";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo_Sangue";

	
	
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


	$tdataadm_pacientes1["Tipo_Sangue"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Tipo_Sangue";
//	Pressao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Pressao";
	$fdata["GoodName"] = "Pressao";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Pressao");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pressao";

		$fdata["sourceSingle"] = "Pressao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pressao";

	
	
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


	$tdataadm_pacientes1["Pressao"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Pressao";
//	Nascimento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "Nascimento";
	$fdata["GoodName"] = "Nascimento";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Nascimento");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "Nascimento";

		$fdata["sourceSingle"] = "Nascimento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nascimento";

	
	
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


	$tdataadm_pacientes1["Nascimento"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Nascimento";
//	Profissao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "Profissao";
	$fdata["GoodName"] = "Profissao";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Profissao");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Profissao";

		$fdata["sourceSingle"] = "Profissao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Profissao";

	
	
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


	$tdataadm_pacientes1["Profissao"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Profissao";
//	Convenio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "Convenio";
	$fdata["GoodName"] = "Convenio";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Convenio");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Convenio";

		$fdata["sourceSingle"] = "Convenio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Convenio";

	
	
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


	$tdataadm_pacientes1["Convenio"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Convenio";
//	Observacoes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "Observacoes";
	$fdata["GoodName"] = "Observacoes";
	$fdata["ownerTable"] = "adm_pacientes";
	$fdata["Label"] = GetFieldLabel("adm_pacientes","Observacoes");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Observacoes";

		$fdata["sourceSingle"] = "Observacoes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacoes";

	
	
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


	$tdataadm_pacientes1["Observacoes"] = $fdata;
		$tdataadm_pacientes1[".searchableFields"][] = "Observacoes";


$tables_data["adm_pacientes"]=&$tdataadm_pacientes1;
$field_labels["adm_pacientes"] = &$fieldLabelsadm_pacientes1;
$fieldToolTips["adm_pacientes"] = &$fieldToolTipsadm_pacientes1;
$placeHolders["adm_pacientes"] = &$placeHoldersadm_pacientes1;
$page_titles["adm_pacientes"] = &$pageTitlesadm_pacientes1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_pacientes"] = array();
//	adm_agenda_1
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_agenda_1";
		$detailsParam["dOriginalTable"] = "adm_agenda_1";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_agenda_1";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_agenda_1");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"][]="idPaciente";

				$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"][]="age_Paciente";
//	adm_pacientes_documentos
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_pacientes_documentos";
		$detailsParam["dOriginalTable"] = "adm_pacientes_documentos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_pacientes_documentos";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_pacientes_documentos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"][]="idPaciente";

				$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"][]="Paciente";
//	adm_pagamento_avulso
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_pagamento_avulso";
		$detailsParam["dOriginalTable"] = "adm_pagamento_avulso";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_pagamento_avulso";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_pagamento_avulso");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"][]="idPaciente";

				$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"][]="idPaciente";
//	adm_campos_paciente
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_campos_paciente";
		$detailsParam["dOriginalTable"] = "adm_campos_paciente";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_campos_paciente";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_campos_paciente");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["masterKeys"][]="idPaciente";

				$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_pacientes"][$dIndex]["detailKeys"][]="Paciente";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_pacientes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_pacientes1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idPaciente,  Nome,  Email,  Senha,  Endereco,  Bairro,  Cidade,  Estado,  Cep,  Celular,  CONCAT(\"https://api.whatsapp.com/send?phone=\", CONVERT(Celular, Char)) AS Whats,  Tel_Residencial,  Data_Inicio,  Sexo,  Sintomas,  Tratamento,  idProfissional,  CPF,  RG,  Foto,  Estado_Civil,  Procedencia,  Responsavel,  Peso,  Altura,  IMC,  Tipo_Sangue,  Pressao,  Nascimento,  Profissao,  Convenio,  Observacoes";
$proto0["m_strFrom"] = "FROM adm_pacientes";
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
	"m_strName" => "idPaciente",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto6["m_sql"] = "idPaciente";
$proto6["m_srcTableName"] = "adm_pacientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "adm_pacientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto10["m_sql"] = "Email";
$proto10["m_srcTableName"] = "adm_pacientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Senha",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto12["m_sql"] = "Senha";
$proto12["m_srcTableName"] = "adm_pacientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereco",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto14["m_sql"] = "Endereco";
$proto14["m_srcTableName"] = "adm_pacientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto16["m_sql"] = "Bairro";
$proto16["m_srcTableName"] = "adm_pacientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto18["m_sql"] = "Cidade";
$proto18["m_srcTableName"] = "adm_pacientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto20["m_sql"] = "Estado";
$proto20["m_srcTableName"] = "adm_pacientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cep",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto22["m_sql"] = "Cep";
$proto22["m_srcTableName"] = "adm_pacientes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto24["m_sql"] = "Celular";
$proto24["m_srcTableName"] = "adm_pacientes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"https://api.whatsapp.com/send?phone=\""
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "CONVERT(Celular, Char)"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "CONCAT";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "CONCAT(\"https://api.whatsapp.com/send?phone=\", CONVERT(Celular, Char))";
$proto26["m_srcTableName"] = "adm_pacientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "Whats";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Tel_Residencial",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto30["m_sql"] = "Tel_Residencial";
$proto30["m_srcTableName"] = "adm_pacientes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_Inicio",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto32["m_sql"] = "Data_Inicio";
$proto32["m_srcTableName"] = "adm_pacientes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto34["m_sql"] = "Sexo";
$proto34["m_srcTableName"] = "adm_pacientes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Sintomas",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto36["m_sql"] = "Sintomas";
$proto36["m_srcTableName"] = "adm_pacientes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Tratamento",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto38["m_sql"] = "Tratamento";
$proto38["m_srcTableName"] = "adm_pacientes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfissional",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto40["m_sql"] = "idProfissional";
$proto40["m_srcTableName"] = "adm_pacientes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CPF",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto42["m_sql"] = "CPF";
$proto42["m_srcTableName"] = "adm_pacientes";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "RG",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto44["m_sql"] = "RG";
$proto44["m_srcTableName"] = "adm_pacientes";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Foto",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto46["m_sql"] = "Foto";
$proto46["m_srcTableName"] = "adm_pacientes";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado_Civil",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto48["m_sql"] = "Estado_Civil";
$proto48["m_srcTableName"] = "adm_pacientes";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Procedencia",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto50["m_sql"] = "Procedencia";
$proto50["m_srcTableName"] = "adm_pacientes";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Responsavel",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto52["m_sql"] = "Responsavel";
$proto52["m_srcTableName"] = "adm_pacientes";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Peso",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto54["m_sql"] = "Peso";
$proto54["m_srcTableName"] = "adm_pacientes";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Altura",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto56["m_sql"] = "Altura";
$proto56["m_srcTableName"] = "adm_pacientes";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "IMC",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto58["m_sql"] = "IMC";
$proto58["m_srcTableName"] = "adm_pacientes";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Sangue",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto60["m_sql"] = "Tipo_Sangue";
$proto60["m_srcTableName"] = "adm_pacientes";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "Pressao",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto62["m_sql"] = "Pressao";
$proto62["m_srcTableName"] = "adm_pacientes";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "Nascimento",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto64["m_sql"] = "Nascimento";
$proto64["m_srcTableName"] = "adm_pacientes";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "Profissao",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto66["m_sql"] = "Profissao";
$proto66["m_srcTableName"] = "adm_pacientes";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "Convenio",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto68["m_sql"] = "Convenio";
$proto68["m_srcTableName"] = "adm_pacientes";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacoes",
	"m_strTable" => "adm_pacientes",
	"m_srcTableName" => "adm_pacientes"
));

$proto70["m_sql"] = "Observacoes";
$proto70["m_srcTableName"] = "adm_pacientes";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto72=array();
$proto72["m_link"] = "SQLL_MAIN";
			$proto73=array();
$proto73["m_strName"] = "adm_pacientes";
$proto73["m_srcTableName"] = "adm_pacientes";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "idPaciente";
$proto73["m_columns"][] = "Nome";
$proto73["m_columns"][] = "Email";
$proto73["m_columns"][] = "Senha";
$proto73["m_columns"][] = "Endereco";
$proto73["m_columns"][] = "Bairro";
$proto73["m_columns"][] = "Cidade";
$proto73["m_columns"][] = "Estado";
$proto73["m_columns"][] = "Cep";
$proto73["m_columns"][] = "Celular";
$proto73["m_columns"][] = "Tel_Residencial";
$proto73["m_columns"][] = "Data_Inicio";
$proto73["m_columns"][] = "Sexo";
$proto73["m_columns"][] = "Sintomas";
$proto73["m_columns"][] = "Tratamento";
$proto73["m_columns"][] = "idProfissional";
$proto73["m_columns"][] = "CPF";
$proto73["m_columns"][] = "RG";
$proto73["m_columns"][] = "Foto";
$proto73["m_columns"][] = "Estado_Civil";
$proto73["m_columns"][] = "Procedencia";
$proto73["m_columns"][] = "Responsavel";
$proto73["m_columns"][] = "Peso";
$proto73["m_columns"][] = "Altura";
$proto73["m_columns"][] = "IMC";
$proto73["m_columns"][] = "Tipo_Sangue";
$proto73["m_columns"][] = "Pressao";
$proto73["m_columns"][] = "Nascimento";
$proto73["m_columns"][] = "Profissao";
$proto73["m_columns"][] = "Convenio";
$proto73["m_columns"][] = "Observacoes";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "adm_pacientes";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "adm_pacientes";
$proto74=array();
$proto74["m_sql"] = "";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_pacientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_pacientes1 = createSqlQuery_adm_pacientes1();


	
		;

																																

$tdataadm_pacientes1[".sqlquery"] = $queryData_adm_pacientes1;



$tableEvents["adm_pacientes"] = new eventsBase;
$tdataadm_pacientes1[".hasEvents"] = false;

?>