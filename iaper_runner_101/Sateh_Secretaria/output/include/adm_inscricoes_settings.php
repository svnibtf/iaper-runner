<?php
$tdataadm_inscricoes = array();
$tdataadm_inscricoes[".searchableFields"] = array();
$tdataadm_inscricoes[".ShortName"] = "adm_inscricoes";
$tdataadm_inscricoes[".OwnerID"] = "";
$tdataadm_inscricoes[".OriginalTable"] = "adm_inscricoes";


$tdataadm_inscricoes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_inscricoes[".originalPagesByType"] = $tdataadm_inscricoes[".pagesByType"];
$tdataadm_inscricoes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_inscricoes[".originalPages"] = $tdataadm_inscricoes[".pages"];
$tdataadm_inscricoes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_inscricoes[".originalDefaultPages"] = $tdataadm_inscricoes[".defaultPages"];

//	field labels
$fieldLabelsadm_inscricoes = array();
$fieldToolTipsadm_inscricoes = array();
$pageTitlesadm_inscricoes = array();
$placeHoldersadm_inscricoes = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_inscricoes["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_inscricoes["Portuguese(Brazil)"] = array();
	$placeHoldersadm_inscricoes["Portuguese(Brazil)"] = array();
	$pageTitlesadm_inscricoes["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_inscricoes["Portuguese(Brazil)"]["idinscricao"] = "Idinscricao";
	$fieldToolTipsadm_inscricoes["Portuguese(Brazil)"]["idinscricao"] = "";
	$placeHoldersadm_inscricoes["Portuguese(Brazil)"]["idinscricao"] = "";
	$fieldLabelsadm_inscricoes["Portuguese(Brazil)"]["idPaciente"] = "Paciente";
	$fieldToolTipsadm_inscricoes["Portuguese(Brazil)"]["idPaciente"] = "";
	$placeHoldersadm_inscricoes["Portuguese(Brazil)"]["idPaciente"] = "";
	$fieldLabelsadm_inscricoes["Portuguese(Brazil)"]["idEvento"] = "Evento";
	$fieldToolTipsadm_inscricoes["Portuguese(Brazil)"]["idEvento"] = "";
	$placeHoldersadm_inscricoes["Portuguese(Brazil)"]["idEvento"] = "";
	$fieldLabelsadm_inscricoes["Portuguese(Brazil)"]["Pago"] = "Pago";
	$fieldToolTipsadm_inscricoes["Portuguese(Brazil)"]["Pago"] = "";
	$placeHoldersadm_inscricoes["Portuguese(Brazil)"]["Pago"] = "";
	if (count($fieldToolTipsadm_inscricoes["Portuguese(Brazil)"]))
		$tdataadm_inscricoes[".isUseToolTips"] = true;
}


	$tdataadm_inscricoes[".NCSearch"] = true;



$tdataadm_inscricoes[".shortTableName"] = "adm_inscricoes";
$tdataadm_inscricoes[".nSecOptions"] = 0;

$tdataadm_inscricoes[".mainTableOwnerID"] = "";
$tdataadm_inscricoes[".entityType"] = 0;
$tdataadm_inscricoes[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_inscricoes[".strOriginalTableName"] = "adm_inscricoes";

	



$tdataadm_inscricoes[".showAddInPopup"] = false;

$tdataadm_inscricoes[".showEditInPopup"] = false;

$tdataadm_inscricoes[".showViewInPopup"] = false;

$tdataadm_inscricoes[".listAjax"] = false;
//	temporary
//$tdataadm_inscricoes[".listAjax"] = false;

	$tdataadm_inscricoes[".audit"] = false;

	$tdataadm_inscricoes[".locking"] = false;


$pages = $tdataadm_inscricoes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_inscricoes[".edit"] = true;
	$tdataadm_inscricoes[".afterEditAction"] = 1;
	$tdataadm_inscricoes[".closePopupAfterEdit"] = 1;
	$tdataadm_inscricoes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_inscricoes[".add"] = true;
$tdataadm_inscricoes[".afterAddAction"] = 1;
$tdataadm_inscricoes[".closePopupAfterAdd"] = 1;
$tdataadm_inscricoes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_inscricoes[".list"] = true;
}



$tdataadm_inscricoes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_inscricoes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_inscricoes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_inscricoes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_inscricoes[".printFriendly"] = true;
}



$tdataadm_inscricoes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_inscricoes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_inscricoes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_inscricoes[".isUseAjaxSuggest"] = true;

$tdataadm_inscricoes[".rowHighlite"] = true;



												

$tdataadm_inscricoes[".ajaxCodeSnippetAdded"] = false;

$tdataadm_inscricoes[".buttonsAdded"] = false;

$tdataadm_inscricoes[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_inscricoes[".isUseTimeForSearch"] = false;


$tdataadm_inscricoes[".badgeColor"] = "c0c0c0";


$tdataadm_inscricoes[".allSearchFields"] = array();
$tdataadm_inscricoes[".filterFields"] = array();
$tdataadm_inscricoes[".requiredSearchFields"] = array();

$tdataadm_inscricoes[".googleLikeFields"] = array();
$tdataadm_inscricoes[".googleLikeFields"][] = "idinscricao";
$tdataadm_inscricoes[".googleLikeFields"][] = "idPaciente";
$tdataadm_inscricoes[".googleLikeFields"][] = "idEvento";
$tdataadm_inscricoes[".googleLikeFields"][] = "Pago";



$tdataadm_inscricoes[".tableType"] = "list";

$tdataadm_inscricoes[".printerPageOrientation"] = 0;
$tdataadm_inscricoes[".nPrinterPageScale"] = 100;

$tdataadm_inscricoes[".nPrinterSplitRecords"] = 40;

$tdataadm_inscricoes[".geocodingEnabled"] = false;










$tdataadm_inscricoes[".pageSize"] = 20;

$tdataadm_inscricoes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_inscricoes[".strOrderBy"] = $tstrOrderBy;

$tdataadm_inscricoes[".orderindexes"] = array();


$tdataadm_inscricoes[".sqlHead"] = "SELECT idinscricao,  	idPaciente,  	idEvento,  	Pago";
$tdataadm_inscricoes[".sqlFrom"] = "FROM adm_inscricoes";
$tdataadm_inscricoes[".sqlWhereExpr"] = "";
$tdataadm_inscricoes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_inscricoes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_inscricoes[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_inscricoes[".highlightSearchResults"] = true;

$tableKeysadm_inscricoes = array();
$tableKeysadm_inscricoes[] = "idinscricao";
$tdataadm_inscricoes[".Keys"] = $tableKeysadm_inscricoes;


$tdataadm_inscricoes[".hideMobileList"] = array();




//	idinscricao
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idinscricao";
	$fdata["GoodName"] = "idinscricao";
	$fdata["ownerTable"] = "adm_inscricoes";
	$fdata["Label"] = GetFieldLabel("adm_inscricoes","idinscricao");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idinscricao";

		$fdata["sourceSingle"] = "idinscricao";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idinscricao";

	
	
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


	$tdataadm_inscricoes["idinscricao"] = $fdata;
		$tdataadm_inscricoes[".searchableFields"][] = "idinscricao";
//	idPaciente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "idPaciente";
	$fdata["GoodName"] = "idPaciente";
	$fdata["ownerTable"] = "adm_inscricoes";
	$fdata["Label"] = GetFieldLabel("adm_inscricoes","idPaciente");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idPaciente";

		$fdata["sourceSingle"] = "idPaciente";

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "adm_pacientes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idPaciente";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nome";

	

	
	$edata["LookupOrderBy"] = "Nome";

	
	
	
	

	
	
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


	$tdataadm_inscricoes["idPaciente"] = $fdata;
		$tdataadm_inscricoes[".searchableFields"][] = "idPaciente";
//	idEvento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "idEvento";
	$fdata["GoodName"] = "idEvento";
	$fdata["ownerTable"] = "adm_inscricoes";
	$fdata["Label"] = GetFieldLabel("adm_inscricoes","idEvento");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idEvento";

		$fdata["sourceSingle"] = "idEvento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idEvento";

	
	
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
	$edata["LookupTable"] = "adm_eventos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "idLista";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Lista";

	

	
	$edata["LookupOrderBy"] = "Lista";

	
	
	
	

	
	
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


	$tdataadm_inscricoes["idEvento"] = $fdata;
		$tdataadm_inscricoes[".searchableFields"][] = "idEvento";
//	Pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Pago";
	$fdata["GoodName"] = "Pago";
	$fdata["ownerTable"] = "adm_inscricoes";
	$fdata["Label"] = GetFieldLabel("adm_inscricoes","Pago");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Pago";

		$fdata["sourceSingle"] = "Pago";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pago";

	
	
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
	$edata["LookupValues"][] = "Sim";
	$edata["LookupValues"][] = "Não";

	
	
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


	$tdataadm_inscricoes["Pago"] = $fdata;
		$tdataadm_inscricoes[".searchableFields"][] = "Pago";


$tables_data["adm_inscricoes"]=&$tdataadm_inscricoes;
$field_labels["adm_inscricoes"] = &$fieldLabelsadm_inscricoes;
$fieldToolTips["adm_inscricoes"] = &$fieldToolTipsadm_inscricoes;
$placeHolders["adm_inscricoes"] = &$placeHoldersadm_inscricoes;
$page_titles["adm_inscricoes"] = &$pageTitlesadm_inscricoes;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_inscricoes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_inscricoes"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="adm_eventos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="adm_eventos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "adm_eventos1";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["adm_inscricoes"][0] = $masterParams;
				$masterTablesData["adm_inscricoes"][0]["masterKeys"] = array();
	$masterTablesData["adm_inscricoes"][0]["masterKeys"][]="idLista";
				$masterTablesData["adm_inscricoes"][0]["detailKeys"] = array();
	$masterTablesData["adm_inscricoes"][0]["detailKeys"][]="idEvento";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_inscricoes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idinscricao,  	idPaciente,  	idEvento,  	Pago";
$proto0["m_strFrom"] = "FROM adm_inscricoes";
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
	"m_strName" => "idinscricao",
	"m_strTable" => "adm_inscricoes",
	"m_srcTableName" => "adm_inscricoes"
));

$proto6["m_sql"] = "idinscricao";
$proto6["m_srcTableName"] = "adm_inscricoes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "idPaciente",
	"m_strTable" => "adm_inscricoes",
	"m_srcTableName" => "adm_inscricoes"
));

$proto8["m_sql"] = "idPaciente";
$proto8["m_srcTableName"] = "adm_inscricoes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "idEvento",
	"m_strTable" => "adm_inscricoes",
	"m_srcTableName" => "adm_inscricoes"
));

$proto10["m_sql"] = "idEvento";
$proto10["m_srcTableName"] = "adm_inscricoes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Pago",
	"m_strTable" => "adm_inscricoes",
	"m_srcTableName" => "adm_inscricoes"
));

$proto12["m_sql"] = "Pago";
$proto12["m_srcTableName"] = "adm_inscricoes";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "adm_inscricoes";
$proto15["m_srcTableName"] = "adm_inscricoes";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idinscricao";
$proto15["m_columns"][] = "idPaciente";
$proto15["m_columns"][] = "idEvento";
$proto15["m_columns"][] = "Pago";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "adm_inscricoes";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "adm_inscricoes";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_inscricoes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_inscricoes = createSqlQuery_adm_inscricoes();


	
		;

				

$tdataadm_inscricoes[".sqlquery"] = $queryData_adm_inscricoes;



$tableEvents["adm_inscricoes"] = new eventsBase;
$tdataadm_inscricoes[".hasEvents"] = false;

?>