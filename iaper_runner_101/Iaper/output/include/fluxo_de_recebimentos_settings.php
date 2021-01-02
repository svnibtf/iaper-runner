<?php
$tdatafluxo_de_recebimentos = array();
$tdatafluxo_de_recebimentos[".searchableFields"] = array();
$tdatafluxo_de_recebimentos[".ShortName"] = "fluxo_de_recebimentos";
$tdatafluxo_de_recebimentos[".OwnerID"] = "";
$tdatafluxo_de_recebimentos[".OriginalTable"] = "tratamento";


$tdatafluxo_de_recebimentos[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatafluxo_de_recebimentos[".originalPagesByType"] = $tdatafluxo_de_recebimentos[".pagesByType"];
$tdatafluxo_de_recebimentos[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatafluxo_de_recebimentos[".originalPages"] = $tdatafluxo_de_recebimentos[".pages"];
$tdatafluxo_de_recebimentos[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatafluxo_de_recebimentos[".originalDefaultPages"] = $tdatafluxo_de_recebimentos[".defaultPages"];

//	field labels
$fieldLabelsfluxo_de_recebimentos = array();
$fieldToolTipsfluxo_de_recebimentos = array();
$pageTitlesfluxo_de_recebimentos = array();
$placeHoldersfluxo_de_recebimentos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsfluxo_de_recebimentos["Portuguese(Brazil)"] = array();
	$fieldToolTipsfluxo_de_recebimentos["Portuguese(Brazil)"] = array();
	$placeHoldersfluxo_de_recebimentos["Portuguese(Brazil)"] = array();
	$pageTitlesfluxo_de_recebimentos["Portuguese(Brazil)"] = array();
	$fieldLabelsfluxo_de_recebimentos["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsfluxo_de_recebimentos["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersfluxo_de_recebimentos["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsfluxo_de_recebimentos["Portuguese(Brazil)"]["Valor_a_Receber"] = "Valor A Receber";
	$fieldToolTipsfluxo_de_recebimentos["Portuguese(Brazil)"]["Valor_a_Receber"] = "";
	$placeHoldersfluxo_de_recebimentos["Portuguese(Brazil)"]["Valor_a_Receber"] = "";
	if (count($fieldToolTipsfluxo_de_recebimentos["Portuguese(Brazil)"]))
		$tdatafluxo_de_recebimentos[".isUseToolTips"] = true;
}


	$tdatafluxo_de_recebimentos[".NCSearch"] = true;



$tdatafluxo_de_recebimentos[".shortTableName"] = "fluxo_de_recebimentos";
$tdatafluxo_de_recebimentos[".nSecOptions"] = 0;

$tdatafluxo_de_recebimentos[".mainTableOwnerID"] = "";
$tdatafluxo_de_recebimentos[".entityType"] = 1;
$tdatafluxo_de_recebimentos[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatafluxo_de_recebimentos[".strOriginalTableName"] = "tratamento";

	



$tdatafluxo_de_recebimentos[".showAddInPopup"] = false;

$tdatafluxo_de_recebimentos[".showEditInPopup"] = false;

$tdatafluxo_de_recebimentos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatafluxo_de_recebimentos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatafluxo_de_recebimentos[".listAjax"] = false;
//	temporary
//$tdatafluxo_de_recebimentos[".listAjax"] = false;

	$tdatafluxo_de_recebimentos[".audit"] = false;

	$tdatafluxo_de_recebimentos[".locking"] = false;


$pages = $tdatafluxo_de_recebimentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatafluxo_de_recebimentos[".edit"] = true;
	$tdatafluxo_de_recebimentos[".afterEditAction"] = 0;
	$tdatafluxo_de_recebimentos[".closePopupAfterEdit"] = 1;
	$tdatafluxo_de_recebimentos[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatafluxo_de_recebimentos[".add"] = true;
$tdatafluxo_de_recebimentos[".afterAddAction"] = 0;
$tdatafluxo_de_recebimentos[".closePopupAfterAdd"] = 1;
$tdatafluxo_de_recebimentos[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatafluxo_de_recebimentos[".list"] = true;
}



$tdatafluxo_de_recebimentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatafluxo_de_recebimentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatafluxo_de_recebimentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatafluxo_de_recebimentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatafluxo_de_recebimentos[".printFriendly"] = true;
}



$tdatafluxo_de_recebimentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatafluxo_de_recebimentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatafluxo_de_recebimentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatafluxo_de_recebimentos[".isUseAjaxSuggest"] = true;

$tdatafluxo_de_recebimentos[".rowHighlite"] = true;





$tdatafluxo_de_recebimentos[".ajaxCodeSnippetAdded"] = false;

$tdatafluxo_de_recebimentos[".buttonsAdded"] = false;

$tdatafluxo_de_recebimentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatafluxo_de_recebimentos[".isUseTimeForSearch"] = false;


$tdatafluxo_de_recebimentos[".badgeColor"] = "008B8B";


$tdatafluxo_de_recebimentos[".allSearchFields"] = array();
$tdatafluxo_de_recebimentos[".filterFields"] = array();
$tdatafluxo_de_recebimentos[".requiredSearchFields"] = array();

$tdatafluxo_de_recebimentos[".googleLikeFields"] = array();
$tdatafluxo_de_recebimentos[".googleLikeFields"][] = "Data";
$tdatafluxo_de_recebimentos[".googleLikeFields"][] = "Valor_a_Receber";



$tdatafluxo_de_recebimentos[".tableType"] = "list";

$tdatafluxo_de_recebimentos[".printerPageOrientation"] = 0;
$tdatafluxo_de_recebimentos[".nPrinterPageScale"] = 100;

$tdatafluxo_de_recebimentos[".nPrinterSplitRecords"] = 40;

$tdatafluxo_de_recebimentos[".geocodingEnabled"] = false;










$tdatafluxo_de_recebimentos[".pageSize"] = 20;

$tdatafluxo_de_recebimentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatafluxo_de_recebimentos[".strOrderBy"] = $tstrOrderBy;

$tdatafluxo_de_recebimentos[".orderindexes"] = array();


$tdatafluxo_de_recebimentos[".sqlHead"] = "SELECT `Data`,  sum(Valor_Consulta) as Valor_a_Receber";
$tdatafluxo_de_recebimentos[".sqlFrom"] = "FROM tratamento";
$tdatafluxo_de_recebimentos[".sqlWhereExpr"] = "";
$tdatafluxo_de_recebimentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatafluxo_de_recebimentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatafluxo_de_recebimentos[".arrGroupsPerPage"] = $arrGPP;

$tdatafluxo_de_recebimentos[".highlightSearchResults"] = true;

$tableKeysfluxo_de_recebimentos = array();
$tdatafluxo_de_recebimentos[".Keys"] = $tableKeysfluxo_de_recebimentos;


$tdatafluxo_de_recebimentos[".hideMobileList"] = array();




//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "tratamento";
	$fdata["Label"] = GetFieldLabel("Fluxo_de_Recebimentos","Data");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "Data";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Data`";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatafluxo_de_recebimentos["Data"] = $fdata;
		$tdatafluxo_de_recebimentos[".searchableFields"][] = "Data";
//	Valor_a_Receber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Valor_a_Receber";
	$fdata["GoodName"] = "Valor_a_Receber";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Fluxo_de_Recebimentos","Valor_a_Receber");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor_a_Receber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum(Valor_Consulta)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
		
	
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


	$tdatafluxo_de_recebimentos["Valor_a_Receber"] = $fdata;
		$tdatafluxo_de_recebimentos[".searchableFields"][] = "Valor_a_Receber";


$tables_data["Fluxo de Recebimentos"]=&$tdatafluxo_de_recebimentos;
$field_labels["Fluxo_de_Recebimentos"] = &$fieldLabelsfluxo_de_recebimentos;
$fieldToolTips["Fluxo_de_Recebimentos"] = &$fieldToolTipsfluxo_de_recebimentos;
$placeHolders["Fluxo_de_Recebimentos"] = &$placeHoldersfluxo_de_recebimentos;
$page_titles["Fluxo_de_Recebimentos"] = &$pageTitlesfluxo_de_recebimentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Fluxo de Recebimentos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["Fluxo de Recebimentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_fluxo_de_recebimentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Data`,  sum(Valor_Consulta) as Valor_a_Receber";
$proto0["m_strFrom"] = "FROM tratamento";
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
	"m_strName" => "Data",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "Fluxo de Recebimentos"
));

$proto6["m_sql"] = "`Data`";
$proto6["m_srcTableName"] = "Fluxo de Recebimentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "Valor_Consulta",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "Fluxo de Recebimentos"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "sum(Valor_Consulta)";
$proto8["m_srcTableName"] = "Fluxo de Recebimentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Valor_a_Receber";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "tratamento";
$proto12["m_srcTableName"] = "Fluxo de Recebimentos";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "idTratamento";
$proto12["m_columns"][] = "idPaciente";
$proto12["m_columns"][] = "idProfissional";
$proto12["m_columns"][] = "Data";
$proto12["m_columns"][] = "Confirmado";
$proto12["m_columns"][] = "Pago";
$proto12["m_columns"][] = "Forma_Pagamento";
$proto12["m_columns"][] = "Observacoes";
$proto12["m_columns"][] = "Prescricao";
$proto12["m_columns"][] = "Online";
$proto12["m_columns"][] = "Link Consulta";
$proto12["m_columns"][] = "Hora";
$proto12["m_columns"][] = "Valor_Consulta";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "tratamento";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Fluxo de Recebimentos";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "tratamento",
	"m_srcTableName" => "Fluxo de Recebimentos"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Fluxo de Recebimentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_fluxo_de_recebimentos = createSqlQuery_fluxo_de_recebimentos();


	
		;

		

$tdatafluxo_de_recebimentos[".sqlquery"] = $queryData_fluxo_de_recebimentos;



$tableEvents["Fluxo de Recebimentos"] = new eventsBase;
$tdatafluxo_de_recebimentos[".hasEvents"] = false;

?>