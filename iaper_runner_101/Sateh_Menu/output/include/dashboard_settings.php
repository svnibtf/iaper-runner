<?php
$tdatadashboard = array();
$tdatadashboard[".searchableFields"] = array();
$tdatadashboard[".ShortName"] = "dashboard";
$tdatadashboard[".OwnerID"] = "";
$tdatadashboard[".OriginalTable"] = "adm_tratamento";


$tdatadashboard[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatadashboard[".originalPagesByType"] = $tdatadashboard[".pagesByType"];
$tdatadashboard[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatadashboard[".originalPages"] = $tdatadashboard[".pages"];
$tdatadashboard[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatadashboard[".originalDefaultPages"] = $tdatadashboard[".defaultPages"];

//	field labels
$fieldLabelsdashboard = array();
$fieldToolTipsdashboard = array();
$pageTitlesdashboard = array();
$placeHoldersdashboard = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsdashboard["Portuguese(Brazil)"] = array();
	$fieldToolTipsdashboard["Portuguese(Brazil)"] = array();
	$placeHoldersdashboard["Portuguese(Brazil)"] = array();
	$pageTitlesdashboard["Portuguese(Brazil)"] = array();
	$fieldLabelsdashboard["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsdashboard["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersdashboard["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsdashboard["Portuguese(Brazil)"]["Valor_a_Receber"] = "Valor A Receber";
	$fieldToolTipsdashboard["Portuguese(Brazil)"]["Valor_a_Receber"] = "";
	$placeHoldersdashboard["Portuguese(Brazil)"]["Valor_a_Receber"] = "";
	if (count($fieldToolTipsdashboard["Portuguese(Brazil)"]))
		$tdatadashboard[".isUseToolTips"] = true;
}


	$tdatadashboard[".NCSearch"] = true;

	$tdatadashboard[".ChartRefreshTime"] = 0;


$tdatadashboard[".shortTableName"] = "dashboard";
$tdatadashboard[".nSecOptions"] = 0;

$tdatadashboard[".mainTableOwnerID"] = "";
$tdatadashboard[".entityType"] = 3;
$tdatadashboard[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdatadashboard[".strOriginalTableName"] = "adm_tratamento";

	



$tdatadashboard[".showAddInPopup"] = false;

$tdatadashboard[".showEditInPopup"] = false;

$tdatadashboard[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadashboard[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadashboard[".listAjax"] = false;
//	temporary
//$tdatadashboard[".listAjax"] = false;

	$tdatadashboard[".audit"] = false;

	$tdatadashboard[".locking"] = false;


$pages = $tdatadashboard[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadashboard[".edit"] = true;
	$tdatadashboard[".afterEditAction"] = 1;
	$tdatadashboard[".closePopupAfterEdit"] = 1;
	$tdatadashboard[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadashboard[".add"] = true;
$tdatadashboard[".afterAddAction"] = 1;
$tdatadashboard[".closePopupAfterAdd"] = 1;
$tdatadashboard[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadashboard[".list"] = true;
}



$tdatadashboard[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadashboard[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadashboard[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadashboard[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadashboard[".printFriendly"] = true;
}



$tdatadashboard[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadashboard[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadashboard[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadashboard[".isUseAjaxSuggest"] = true;




			

$tdatadashboard[".ajaxCodeSnippetAdded"] = false;

$tdatadashboard[".buttonsAdded"] = false;

$tdatadashboard[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadashboard[".isUseTimeForSearch"] = false;


$tdatadashboard[".badgeColor"] = "DAA520";


$tdatadashboard[".allSearchFields"] = array();
$tdatadashboard[".filterFields"] = array();
$tdatadashboard[".requiredSearchFields"] = array();

$tdatadashboard[".googleLikeFields"] = array();
$tdatadashboard[".googleLikeFields"][] = "Data";
$tdatadashboard[".googleLikeFields"][] = "Valor_a_Receber";



$tdatadashboard[".tableType"] = "chart";

$tdatadashboard[".printerPageOrientation"] = 0;
$tdatadashboard[".nPrinterPageScale"] = 100;

$tdatadashboard[".nPrinterSplitRecords"] = 40;

$tdatadashboard[".geocodingEnabled"] = false;



// chart settings
$tdatadashboard[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadashboard[".strOrderBy"] = $tstrOrderBy;

$tdatadashboard[".orderindexes"] = array();


$tdatadashboard[".sqlHead"] = "SELECT `Data`,  sum(Valor_Consulta) as Valor_a_Receber";
$tdatadashboard[".sqlFrom"] = "FROM adm_tratamento";
$tdatadashboard[".sqlWhereExpr"] = "";
$tdatadashboard[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadashboard[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadashboard[".arrGroupsPerPage"] = $arrGPP;

$tdatadashboard[".highlightSearchResults"] = true;

$tableKeysdashboard = array();
$tdatadashboard[".Keys"] = $tableKeysdashboard;


$tdatadashboard[".hideMobileList"] = array();




//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "adm_tratamento";
	$fdata["Label"] = GetFieldLabel("DashBoard","Data");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadashboard["Data"] = $fdata;
		$tdatadashboard[".searchableFields"][] = "Data";
//	Valor_a_Receber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Valor_a_Receber";
	$fdata["GoodName"] = "Valor_a_Receber";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("DashBoard","Valor_a_Receber");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatadashboard["Valor_a_Receber"] = $fdata;
		$tdatadashboard[".searchableFields"][] = "Valor_a_Receber";

$tdatadashboard[".chartLabelField"] = "Data";
$tdatadashboard[".chartSeries"] = array();
$tdatadashboard[".chartSeries"][] = array( 
	"field" => "Valor_a_Receber",
	"total" => ""
);
	$tdatadashboard[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">DashBoard</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatadashboard[".chartXml"] .= '<attr value="0">
			<attr value="name">Valor_a_Receber</attr>';
	$tdatadashboard[".chartXml"] .= '</attr>';
	$tdatadashboard[".chartXml"] .= '<attr value="1">
		<attr value="name">Data</attr>
	</attr>';
	$tdatadashboard[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatadashboard[".chartXml"] .= '<attr value="head">'.xmlencode("DashBoard").'</attr>
<attr value="foot">'.xmlencode("Valor a Receber").'</attr>
<attr value="y_axis_label">'.xmlencode("idPaciente").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatadashboard[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatadashboard[".chartXml"] .= '<attr value="0">
		<attr value="name">Data</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DashBoard","Data")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatadashboard[".chartXml"] .= '<attr value="1">
		<attr value="name">Valor_a_Receber</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("DashBoard","Valor_a_Receber")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatadashboard[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">DashBoard</attr>
<attr value="short_table_name">dashboard</attr>
</attr>

</chart>';

$tables_data["DashBoard"]=&$tdatadashboard;
$field_labels["DashBoard"] = &$fieldLabelsdashboard;
$fieldToolTips["DashBoard"] = &$fieldToolTipsdashboard;
$placeHolders["DashBoard"] = &$placeHoldersdashboard;
$page_titles["DashBoard"] = &$pageTitlesdashboard;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["DashBoard"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["DashBoard"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_dashboard()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Data`,  sum(Valor_Consulta) as Valor_a_Receber";
$proto0["m_strFrom"] = "FROM adm_tratamento";
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
	"m_strTable" => "adm_tratamento",
	"m_srcTableName" => "DashBoard"
));

$proto6["m_sql"] = "`Data`";
$proto6["m_srcTableName"] = "DashBoard";
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
	"m_strTable" => "adm_tratamento",
	"m_srcTableName" => "DashBoard"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "sum(Valor_Consulta)";
$proto8["m_srcTableName"] = "DashBoard";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Valor_a_Receber";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "adm_tratamento";
$proto12["m_srcTableName"] = "DashBoard";
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
$proto11["m_sql"] = "adm_tratamento";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "DashBoard";
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
	"m_strTable" => "adm_tratamento",
	"m_srcTableName" => "DashBoard"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="DashBoard";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_dashboard = createSqlQuery_dashboard();


	
		;

		

$tdatadashboard[".sqlquery"] = $queryData_dashboard;



$tableEvents["DashBoard"] = new eventsBase;
$tdatadashboard[".hasEvents"] = false;

?>