<?php
$tdatapacientes = array();
$tdatapacientes[".searchableFields"] = array();
$tdatapacientes[".ShortName"] = "pacientes";
$tdatapacientes[".OwnerID"] = "";
$tdatapacientes[".OriginalTable"] = "pacientes";


$tdatapacientes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapacientes[".originalPagesByType"] = $tdatapacientes[".pagesByType"];
$tdatapacientes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapacientes[".originalPages"] = $tdatapacientes[".pages"];
$tdatapacientes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapacientes[".originalDefaultPages"] = $tdatapacientes[".defaultPages"];

//	field labels
$fieldLabelspacientes = array();
$fieldToolTipspacientes = array();
$pageTitlespacientes = array();
$placeHolderspacientes = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspacientes["Portuguese(Brazil)"] = array();
	$fieldToolTipspacientes["Portuguese(Brazil)"] = array();
	$placeHolderspacientes["Portuguese(Brazil)"] = array();
	$pageTitlespacientes["Portuguese(Brazil)"] = array();
	$fieldLabelspacientes["Portuguese(Brazil)"]["idPaciente"] = "Id Paciente";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["idPaciente"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["idPaciente"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Nome"] = "Nome";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Nome"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Nome"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Email"] = "Email";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Email"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Email"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Senha"] = "Senha";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Senha"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Senha"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Endereco"] = "Endereco";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Endereco"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Endereco"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Bairro"] = "Bairro";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Bairro"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Bairro"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Cidade"] = "Cidade";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Cidade"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Cidade"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Estado"] = "Estado";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Estado"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Estado"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Cep"] = "Cep";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Cep"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Cep"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Celular"] = "Celular";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Celular"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Celular"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Tel_Residencial"] = "Tel Residencial";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Tel_Residencial"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Tel_Residencial"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Data_Inicio"] = "Data Inicio";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Data_Inicio"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Data_Inicio"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Sexo"] = "Sexo";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Sexo"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Sexo"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Sintomas"] = "Sintomas";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Sintomas"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Sintomas"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["Tratamento"] = "Tratamento";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["Tratamento"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["Tratamento"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["idProfissional"] = "Id Profissional";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["idProfissional"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["idProfissional"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["CPF"] = "CPF";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["CPF"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["CPF"] = "";
	$fieldLabelspacientes["Portuguese(Brazil)"]["RG"] = "RG";
	$fieldToolTipspacientes["Portuguese(Brazil)"]["RG"] = "";
	$placeHolderspacientes["Portuguese(Brazil)"]["RG"] = "";
	if (count($fieldToolTipspacientes["Portuguese(Brazil)"]))
		$tdatapacientes[".isUseToolTips"] = true;
}


	$tdatapacientes[".NCSearch"] = true;



$tdatapacientes[".shortTableName"] = "pacientes";
$tdatapacientes[".nSecOptions"] = 0;

$tdatapacientes[".mainTableOwnerID"] = "";
$tdatapacientes[".entityType"] = 0;
$tdatapacientes[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatapacientes[".strOriginalTableName"] = "pacientes";

	



$tdatapacientes[".showAddInPopup"] = false;

$tdatapacientes[".showEditInPopup"] = false;

$tdatapacientes[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapacientes[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapacientes[".listAjax"] = false;
//	temporary
//$tdatapacientes[".listAjax"] = false;

	$tdatapacientes[".audit"] = false;

	$tdatapacientes[".locking"] = false;


$pages = $tdatapacientes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapacientes[".edit"] = true;
	$tdatapacientes[".afterEditAction"] = 0;
	$tdatapacientes[".closePopupAfterEdit"] = 1;
	$tdatapacientes[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatapacientes[".add"] = true;
$tdatapacientes[".afterAddAction"] = 0;
$tdatapacientes[".closePopupAfterAdd"] = 1;
$tdatapacientes[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatapacientes[".list"] = true;
}



$tdatapacientes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapacientes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapacientes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapacientes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapacientes[".printFriendly"] = true;
}



$tdatapacientes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapacientes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapacientes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapacientes[".isUseAjaxSuggest"] = true;

$tdatapacientes[".rowHighlite"] = true;





$tdatapacientes[".ajaxCodeSnippetAdded"] = false;

$tdatapacientes[".buttonsAdded"] = false;

$tdatapacientes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapacientes[".isUseTimeForSearch"] = false;


$tdatapacientes[".badgeColor"] = "c0c0c0";


$tdatapacientes[".allSearchFields"] = array();
$tdatapacientes[".filterFields"] = array();
$tdatapacientes[".requiredSearchFields"] = array();

$tdatapacientes[".googleLikeFields"] = array();
$tdatapacientes[".googleLikeFields"][] = "idPaciente";
$tdatapacientes[".googleLikeFields"][] = "Nome";
$tdatapacientes[".googleLikeFields"][] = "Email";
$tdatapacientes[".googleLikeFields"][] = "Senha";
$tdatapacientes[".googleLikeFields"][] = "Endereco";
$tdatapacientes[".googleLikeFields"][] = "Bairro";
$tdatapacientes[".googleLikeFields"][] = "Cidade";
$tdatapacientes[".googleLikeFields"][] = "Estado";
$tdatapacientes[".googleLikeFields"][] = "Cep";
$tdatapacientes[".googleLikeFields"][] = "Celular";
$tdatapacientes[".googleLikeFields"][] = "Tel_Residencial";
$tdatapacientes[".googleLikeFields"][] = "Data_Inicio";
$tdatapacientes[".googleLikeFields"][] = "Sexo";
$tdatapacientes[".googleLikeFields"][] = "Sintomas";
$tdatapacientes[".googleLikeFields"][] = "Tratamento";
$tdatapacientes[".googleLikeFields"][] = "idProfissional";
$tdatapacientes[".googleLikeFields"][] = "CPF";
$tdatapacientes[".googleLikeFields"][] = "RG";



$tdatapacientes[".tableType"] = "list";

$tdatapacientes[".printerPageOrientation"] = 0;
$tdatapacientes[".nPrinterPageScale"] = 100;

$tdatapacientes[".nPrinterSplitRecords"] = 40;

$tdatapacientes[".geocodingEnabled"] = false;










$tdatapacientes[".pageSize"] = 20;

$tdatapacientes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapacientes[".strOrderBy"] = $tstrOrderBy;

$tdatapacientes[".orderindexes"] = array();


$tdatapacientes[".sqlHead"] = "SELECT idPaciente,  	Nome,  	Email,  	Senha,  	Endereco,  	Bairro,  	Cidade,  	Estado,  	Cep,  	Celular,  	Tel_Residencial,  	Data_Inicio,  	Sexo,  	Sintomas,  	Tratamento,  	idProfissional,  	CPF,  	RG";
$tdatapacientes[".sqlFrom"] = "FROM pacientes";
$tdatapacientes[".sqlWhereExpr"] = "";
$tdatapacientes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapacientes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapacientes[".arrGroupsPerPage"] = $arrGPP;

$tdatapacientes[".highlightSearchResults"] = true;

$tableKeyspacientes = array();
$tableKeyspacientes[] = "idPaciente";
$tdatapacientes[".Keys"] = $tableKeyspacientes;


$tdatapacientes[".hideMobileList"] = array();




//	idPaciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idPaciente";
	$fdata["GoodName"] = "idPaciente";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","idPaciente");
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


	$tdatapacientes["idPaciente"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "idPaciente";
//	Nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome";
	$fdata["GoodName"] = "Nome";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Nome");
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


	$tdatapacientes["Nome"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Nome";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdatapacientes["Email"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Email";
//	Senha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Senha";
	$fdata["GoodName"] = "Senha";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Senha");
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


	$tdatapacientes["Senha"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Senha";
//	Endereco
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Endereco";
	$fdata["GoodName"] = "Endereco";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Endereco");
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


	$tdatapacientes["Endereco"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Endereco";
//	Bairro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Bairro";
	$fdata["GoodName"] = "Bairro";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Bairro");
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


	$tdatapacientes["Bairro"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Bairro";
//	Cidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Cidade";
	$fdata["GoodName"] = "Cidade";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Cidade");
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


	$tdatapacientes["Cidade"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Cidade";
//	Estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Estado";
	$fdata["GoodName"] = "Estado";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Estado");
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


	$tdatapacientes["Estado"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Estado";
//	Cep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Cep";
	$fdata["GoodName"] = "Cep";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Cep");
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


	$tdatapacientes["Cep"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Cep";
//	Celular
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Celular";
	$fdata["GoodName"] = "Celular";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Celular");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Celular";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Celular";

	
	
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


	$tdatapacientes["Celular"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Celular";
//	Tel_Residencial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Tel_Residencial";
	$fdata["GoodName"] = "Tel_Residencial";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Tel_Residencial");
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


	$tdatapacientes["Tel_Residencial"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Tel_Residencial";
//	Data_Inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Data_Inicio";
	$fdata["GoodName"] = "Data_Inicio";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Data_Inicio");
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


	$tdatapacientes["Data_Inicio"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Data_Inicio";
//	Sexo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Sexo";
	$fdata["GoodName"] = "Sexo";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Sexo");
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


	$tdatapacientes["Sexo"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Sexo";
//	Sintomas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Sintomas";
	$fdata["GoodName"] = "Sintomas";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Sintomas");
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


	$tdatapacientes["Sintomas"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Sintomas";
//	Tratamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Tratamento";
	$fdata["GoodName"] = "Tratamento";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","Tratamento");
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


	$tdatapacientes["Tratamento"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "Tratamento";
//	idProfissional
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "idProfissional";
	$fdata["GoodName"] = "idProfissional";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","idProfissional");
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


	$tdatapacientes["idProfissional"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "idProfissional";
//	CPF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CPF";
	$fdata["GoodName"] = "CPF";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","CPF");
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


	$tdatapacientes["CPF"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "CPF";
//	RG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RG";
	$fdata["GoodName"] = "RG";
	$fdata["ownerTable"] = "pacientes";
	$fdata["Label"] = GetFieldLabel("pacientes","RG");
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


	$tdatapacientes["RG"] = $fdata;
		$tdatapacientes[".searchableFields"][] = "RG";


$tables_data["pacientes"]=&$tdatapacientes;
$field_labels["pacientes"] = &$fieldLabelspacientes;
$fieldToolTips["pacientes"] = &$fieldToolTipspacientes;
$placeHolders["pacientes"] = &$placeHolderspacientes;
$page_titles["pacientes"] = &$pageTitlespacientes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pacientes"] = array();
//	tratamento
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tratamento";
		$detailsParam["dOriginalTable"] = "tratamento";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tratamento";
	$detailsParam["dCaptionTable"] = GetTableCaption("tratamento");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["pacientes"][$dIndex] = $detailsParam;

	
		$detailsTablesData["pacientes"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["masterKeys"][]="idPaciente";

				$detailsTablesData["pacientes"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["pacientes"][$dIndex]["detailKeys"][]="idPaciente";

// tables which are master tables for current table (detail)
$masterTablesData["pacientes"] = array();



	
				$strOriginalDetailsTable="usuarios";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuarios";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuarios";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["pacientes"][0] = $masterParams;
				$masterTablesData["pacientes"][0]["masterKeys"] = array();
	$masterTablesData["pacientes"][0]["masterKeys"][]="usu_id";
				$masterTablesData["pacientes"][0]["detailKeys"] = array();
	$masterTablesData["pacientes"][0]["detailKeys"][]="idProfissional";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pacientes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idPaciente,  	Nome,  	Email,  	Senha,  	Endereco,  	Bairro,  	Cidade,  	Estado,  	Cep,  	Celular,  	Tel_Residencial,  	Data_Inicio,  	Sexo,  	Sintomas,  	Tratamento,  	idProfissional,  	CPF,  	RG";
$proto0["m_strFrom"] = "FROM pacientes";
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
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto6["m_sql"] = "idPaciente";
$proto6["m_srcTableName"] = "pacientes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto8["m_sql"] = "Nome";
$proto8["m_srcTableName"] = "pacientes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto10["m_sql"] = "Email";
$proto10["m_srcTableName"] = "pacientes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Senha",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto12["m_sql"] = "Senha";
$proto12["m_srcTableName"] = "pacientes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Endereco",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto14["m_sql"] = "Endereco";
$proto14["m_srcTableName"] = "pacientes";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Bairro",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto16["m_sql"] = "Bairro";
$proto16["m_srcTableName"] = "pacientes";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Cidade",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto18["m_sql"] = "Cidade";
$proto18["m_srcTableName"] = "pacientes";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Estado",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto20["m_sql"] = "Estado";
$proto20["m_srcTableName"] = "pacientes";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Cep",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto22["m_sql"] = "Cep";
$proto22["m_srcTableName"] = "pacientes";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Celular",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto24["m_sql"] = "Celular";
$proto24["m_srcTableName"] = "pacientes";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Tel_Residencial",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto26["m_sql"] = "Tel_Residencial";
$proto26["m_srcTableName"] = "pacientes";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Data_Inicio",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto28["m_sql"] = "Data_Inicio";
$proto28["m_srcTableName"] = "pacientes";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Sexo",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto30["m_sql"] = "Sexo";
$proto30["m_srcTableName"] = "pacientes";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Sintomas",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto32["m_sql"] = "Sintomas";
$proto32["m_srcTableName"] = "pacientes";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Tratamento",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto34["m_sql"] = "Tratamento";
$proto34["m_srcTableName"] = "pacientes";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "idProfissional",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto36["m_sql"] = "idProfissional";
$proto36["m_srcTableName"] = "pacientes";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CPF",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto38["m_sql"] = "CPF";
$proto38["m_srcTableName"] = "pacientes";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RG",
	"m_strTable" => "pacientes",
	"m_srcTableName" => "pacientes"
));

$proto40["m_sql"] = "RG";
$proto40["m_srcTableName"] = "pacientes";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "pacientes";
$proto43["m_srcTableName"] = "pacientes";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "idPaciente";
$proto43["m_columns"][] = "Nome";
$proto43["m_columns"][] = "Email";
$proto43["m_columns"][] = "Senha";
$proto43["m_columns"][] = "Endereco";
$proto43["m_columns"][] = "Bairro";
$proto43["m_columns"][] = "Cidade";
$proto43["m_columns"][] = "Estado";
$proto43["m_columns"][] = "Cep";
$proto43["m_columns"][] = "Celular";
$proto43["m_columns"][] = "Tel_Residencial";
$proto43["m_columns"][] = "Data_Inicio";
$proto43["m_columns"][] = "Sexo";
$proto43["m_columns"][] = "Sintomas";
$proto43["m_columns"][] = "Tratamento";
$proto43["m_columns"][] = "idProfissional";
$proto43["m_columns"][] = "CPF";
$proto43["m_columns"][] = "RG";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "pacientes";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "pacientes";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pacientes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pacientes = createSqlQuery_pacientes();


	
		;

																		

$tdatapacientes[".sqlquery"] = $queryData_pacientes;



$tableEvents["pacientes"] = new eventsBase;
$tdatapacientes[".hasEvents"] = false;

?>