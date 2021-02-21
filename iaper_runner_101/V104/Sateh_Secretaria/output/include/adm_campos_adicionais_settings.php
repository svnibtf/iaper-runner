<?php
$tdataadm_campos_adicionais = array();
$tdataadm_campos_adicionais[".searchableFields"] = array();
$tdataadm_campos_adicionais[".ShortName"] = "adm_campos_adicionais";
$tdataadm_campos_adicionais[".OwnerID"] = "";
$tdataadm_campos_adicionais[".OriginalTable"] = "adm_campos_adicionais";


$tdataadm_campos_adicionais[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_campos_adicionais[".originalPagesByType"] = $tdataadm_campos_adicionais[".pagesByType"];
$tdataadm_campos_adicionais[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_campos_adicionais[".originalPages"] = $tdataadm_campos_adicionais[".pages"];
$tdataadm_campos_adicionais[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_campos_adicionais[".originalDefaultPages"] = $tdataadm_campos_adicionais[".defaultPages"];

//	field labels
$fieldLabelsadm_campos_adicionais = array();
$fieldToolTipsadm_campos_adicionais = array();
$pageTitlesadm_campos_adicionais = array();
$placeHoldersadm_campos_adicionais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_campos_adicionais["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_campos_adicionais["Portuguese(Brazil)"] = array();
	$placeHoldersadm_campos_adicionais["Portuguese(Brazil)"] = array();
	$pageTitlesadm_campos_adicionais["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_campos_adicionais["Portuguese(Brazil)"]["idCampo"] = "Campo";
	$fieldToolTipsadm_campos_adicionais["Portuguese(Brazil)"]["idCampo"] = "";
	$placeHoldersadm_campos_adicionais["Portuguese(Brazil)"]["idCampo"] = "";
	$fieldLabelsadm_campos_adicionais["Portuguese(Brazil)"]["Campo"] = "Campo";
	$fieldToolTipsadm_campos_adicionais["Portuguese(Brazil)"]["Campo"] = "";
	$placeHoldersadm_campos_adicionais["Portuguese(Brazil)"]["Campo"] = "";
	if (count($fieldToolTipsadm_campos_adicionais["Portuguese(Brazil)"]))
		$tdataadm_campos_adicionais[".isUseToolTips"] = true;
}


	$tdataadm_campos_adicionais[".NCSearch"] = true;



$tdataadm_campos_adicionais[".shortTableName"] = "adm_campos_adicionais";
$tdataadm_campos_adicionais[".nSecOptions"] = 0;

$tdataadm_campos_adicionais[".mainTableOwnerID"] = "";
$tdataadm_campos_adicionais[".entityType"] = 0;
$tdataadm_campos_adicionais[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_campos_adicionais[".strOriginalTableName"] = "adm_campos_adicionais";

	



$tdataadm_campos_adicionais[".showAddInPopup"] = false;

$tdataadm_campos_adicionais[".showEditInPopup"] = false;

$tdataadm_campos_adicionais[".showViewInPopup"] = false;

$tdataadm_campos_adicionais[".listAjax"] = false;
//	temporary
//$tdataadm_campos_adicionais[".listAjax"] = false;

	$tdataadm_campos_adicionais[".audit"] = false;

	$tdataadm_campos_adicionais[".locking"] = false;


$pages = $tdataadm_campos_adicionais[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_campos_adicionais[".edit"] = true;
	$tdataadm_campos_adicionais[".afterEditAction"] = 1;
	$tdataadm_campos_adicionais[".closePopupAfterEdit"] = 1;
	$tdataadm_campos_adicionais[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_campos_adicionais[".add"] = true;
$tdataadm_campos_adicionais[".afterAddAction"] = 1;
$tdataadm_campos_adicionais[".closePopupAfterAdd"] = 1;
$tdataadm_campos_adicionais[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_campos_adicionais[".list"] = true;
}



$tdataadm_campos_adicionais[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_campos_adicionais[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_campos_adicionais[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_campos_adicionais[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_campos_adicionais[".printFriendly"] = true;
}



$tdataadm_campos_adicionais[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_campos_adicionais[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_campos_adicionais[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_campos_adicionais[".isUseAjaxSuggest"] = true;

$tdataadm_campos_adicionais[".rowHighlite"] = true;



						

$tdataadm_campos_adicionais[".ajaxCodeSnippetAdded"] = false;

$tdataadm_campos_adicionais[".buttonsAdded"] = false;

$tdataadm_campos_adicionais[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_campos_adicionais[".isUseTimeForSearch"] = false;


$tdataadm_campos_adicionais[".badgeColor"] = "4682b4";


$tdataadm_campos_adicionais[".allSearchFields"] = array();
$tdataadm_campos_adicionais[".filterFields"] = array();
$tdataadm_campos_adicionais[".requiredSearchFields"] = array();




$tdataadm_campos_adicionais[".tableType"] = "list";

$tdataadm_campos_adicionais[".printerPageOrientation"] = 0;
$tdataadm_campos_adicionais[".nPrinterPageScale"] = 100;

$tdataadm_campos_adicionais[".nPrinterSplitRecords"] = 40;

$tdataadm_campos_adicionais[".geocodingEnabled"] = false;










$tdataadm_campos_adicionais[".pageSize"] = 20;

$tdataadm_campos_adicionais[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_campos_adicionais[".strOrderBy"] = $tstrOrderBy;

$tdataadm_campos_adicionais[".orderindexes"] = array();


$tdataadm_campos_adicionais[".sqlHead"] = "SELECT idCampo,  	Campo";
$tdataadm_campos_adicionais[".sqlFrom"] = "FROM adm_campos_adicionais";
$tdataadm_campos_adicionais[".sqlWhereExpr"] = "";
$tdataadm_campos_adicionais[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_campos_adicionais[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_campos_adicionais[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_campos_adicionais[".highlightSearchResults"] = true;

$tableKeysadm_campos_adicionais = array();
$tableKeysadm_campos_adicionais[] = "idCampo";
$tdataadm_campos_adicionais[".Keys"] = $tableKeysadm_campos_adicionais;


$tdataadm_campos_adicionais[".hideMobileList"] = array();




//	idCampo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idCampo";
	$fdata["GoodName"] = "idCampo";
	$fdata["ownerTable"] = "adm_campos_adicionais";
	$fdata["Label"] = GetFieldLabel("adm_campos_adicionais","idCampo");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idCampo";

		$fdata["sourceSingle"] = "idCampo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idCampo";

	
	
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


	$tdataadm_campos_adicionais["idCampo"] = $fdata;
		$tdataadm_campos_adicionais[".searchableFields"][] = "idCampo";
//	Campo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Campo";
	$fdata["GoodName"] = "Campo";
	$fdata["ownerTable"] = "adm_campos_adicionais";
	$fdata["Label"] = GetFieldLabel("adm_campos_adicionais","Campo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Campo";

		$fdata["sourceSingle"] = "Campo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Campo";

	
	
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


	$tdataadm_campos_adicionais["Campo"] = $fdata;
		$tdataadm_campos_adicionais[".searchableFields"][] = "Campo";


$tables_data["adm_campos_adicionais"]=&$tdataadm_campos_adicionais;
$field_labels["adm_campos_adicionais"] = &$fieldLabelsadm_campos_adicionais;
$fieldToolTips["adm_campos_adicionais"] = &$fieldToolTipsadm_campos_adicionais;
$placeHolders["adm_campos_adicionais"] = &$placeHoldersadm_campos_adicionais;
$page_titles["adm_campos_adicionais"] = &$pageTitlesadm_campos_adicionais;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_campos_adicionais"] = array();
//	adm_lista_variavel
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="adm_lista_variavel";
		$detailsParam["dOriginalTable"] = "adm_lista_variavel";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "adm_lista_variavel";
	$detailsParam["dCaptionTable"] = GetTableCaption("adm_lista_variavel");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["adm_campos_adicionais"][$dIndex] = $detailsParam;

	
		$detailsTablesData["adm_campos_adicionais"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["adm_campos_adicionais"][$dIndex]["masterKeys"][]="idCampo";

				$detailsTablesData["adm_campos_adicionais"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["adm_campos_adicionais"][$dIndex]["detailKeys"][]="idCampo";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_campos_adicionais"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_campos_adicionais()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idCampo,  	Campo";
$proto0["m_strFrom"] = "FROM adm_campos_adicionais";
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
	"m_strName" => "idCampo",
	"m_strTable" => "adm_campos_adicionais",
	"m_srcTableName" => "adm_campos_adicionais"
));

$proto6["m_sql"] = "idCampo";
$proto6["m_srcTableName"] = "adm_campos_adicionais";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Campo",
	"m_strTable" => "adm_campos_adicionais",
	"m_srcTableName" => "adm_campos_adicionais"
));

$proto8["m_sql"] = "Campo";
$proto8["m_srcTableName"] = "adm_campos_adicionais";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_campos_adicionais";
$proto11["m_srcTableName"] = "adm_campos_adicionais";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idCampo";
$proto11["m_columns"][] = "Campo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_campos_adicionais";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_campos_adicionais";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_campos_adicionais";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_campos_adicionais = createSqlQuery_adm_campos_adicionais();


	
		;

		

$tdataadm_campos_adicionais[".sqlquery"] = $queryData_adm_campos_adicionais;



$tableEvents["adm_campos_adicionais"] = new eventsBase;
$tdataadm_campos_adicionais[".hasEvents"] = false;

?>