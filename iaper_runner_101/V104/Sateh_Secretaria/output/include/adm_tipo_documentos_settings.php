<?php
$tdataadm_tipo_documentos = array();
$tdataadm_tipo_documentos[".searchableFields"] = array();
$tdataadm_tipo_documentos[".ShortName"] = "adm_tipo_documentos";
$tdataadm_tipo_documentos[".OwnerID"] = "";
$tdataadm_tipo_documentos[".OriginalTable"] = "adm_tipo_documentos";


$tdataadm_tipo_documentos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_tipo_documentos[".originalPagesByType"] = $tdataadm_tipo_documentos[".pagesByType"];
$tdataadm_tipo_documentos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_tipo_documentos[".originalPages"] = $tdataadm_tipo_documentos[".pages"];
$tdataadm_tipo_documentos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_tipo_documentos[".originalDefaultPages"] = $tdataadm_tipo_documentos[".defaultPages"];

//	field labels
$fieldLabelsadm_tipo_documentos = array();
$fieldToolTipsadm_tipo_documentos = array();
$pageTitlesadm_tipo_documentos = array();
$placeHoldersadm_tipo_documentos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_tipo_documentos["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_tipo_documentos["Portuguese(Brazil)"] = array();
	$placeHoldersadm_tipo_documentos["Portuguese(Brazil)"] = array();
	$pageTitlesadm_tipo_documentos["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_tipo_documentos["Portuguese(Brazil)"]["idTipoDoc"] = "Id";
	$fieldToolTipsadm_tipo_documentos["Portuguese(Brazil)"]["idTipoDoc"] = "";
	$placeHoldersadm_tipo_documentos["Portuguese(Brazil)"]["idTipoDoc"] = "";
	$fieldLabelsadm_tipo_documentos["Portuguese(Brazil)"]["Tipo_Documento"] = "Tipo de Documento";
	$fieldToolTipsadm_tipo_documentos["Portuguese(Brazil)"]["Tipo_Documento"] = "";
	$placeHoldersadm_tipo_documentos["Portuguese(Brazil)"]["Tipo_Documento"] = "";
	if (count($fieldToolTipsadm_tipo_documentos["Portuguese(Brazil)"]))
		$tdataadm_tipo_documentos[".isUseToolTips"] = true;
}


	$tdataadm_tipo_documentos[".NCSearch"] = true;



$tdataadm_tipo_documentos[".shortTableName"] = "adm_tipo_documentos";
$tdataadm_tipo_documentos[".nSecOptions"] = 0;

$tdataadm_tipo_documentos[".mainTableOwnerID"] = "";
$tdataadm_tipo_documentos[".entityType"] = 0;
$tdataadm_tipo_documentos[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_tipo_documentos[".strOriginalTableName"] = "adm_tipo_documentos";

	



$tdataadm_tipo_documentos[".showAddInPopup"] = false;

$tdataadm_tipo_documentos[".showEditInPopup"] = false;

$tdataadm_tipo_documentos[".showViewInPopup"] = false;

$tdataadm_tipo_documentos[".listAjax"] = false;
//	temporary
//$tdataadm_tipo_documentos[".listAjax"] = false;

	$tdataadm_tipo_documentos[".audit"] = false;

	$tdataadm_tipo_documentos[".locking"] = false;


$pages = $tdataadm_tipo_documentos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_tipo_documentos[".edit"] = true;
	$tdataadm_tipo_documentos[".afterEditAction"] = 1;
	$tdataadm_tipo_documentos[".closePopupAfterEdit"] = 1;
	$tdataadm_tipo_documentos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_tipo_documentos[".add"] = true;
$tdataadm_tipo_documentos[".afterAddAction"] = 1;
$tdataadm_tipo_documentos[".closePopupAfterAdd"] = 1;
$tdataadm_tipo_documentos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_tipo_documentos[".list"] = true;
}



$tdataadm_tipo_documentos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_tipo_documentos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_tipo_documentos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_tipo_documentos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_tipo_documentos[".printFriendly"] = true;
}



$tdataadm_tipo_documentos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_tipo_documentos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_tipo_documentos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_tipo_documentos[".isUseAjaxSuggest"] = true;

$tdataadm_tipo_documentos[".rowHighlite"] = true;



						

$tdataadm_tipo_documentos[".ajaxCodeSnippetAdded"] = false;

$tdataadm_tipo_documentos[".buttonsAdded"] = false;

$tdataadm_tipo_documentos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_tipo_documentos[".isUseTimeForSearch"] = false;


$tdataadm_tipo_documentos[".badgeColor"] = "D2691E";


$tdataadm_tipo_documentos[".allSearchFields"] = array();
$tdataadm_tipo_documentos[".filterFields"] = array();
$tdataadm_tipo_documentos[".requiredSearchFields"] = array();

$tdataadm_tipo_documentos[".googleLikeFields"] = array();
$tdataadm_tipo_documentos[".googleLikeFields"][] = "idTipoDoc";
$tdataadm_tipo_documentos[".googleLikeFields"][] = "Tipo_Documento";



$tdataadm_tipo_documentos[".tableType"] = "list";

$tdataadm_tipo_documentos[".printerPageOrientation"] = 0;
$tdataadm_tipo_documentos[".nPrinterPageScale"] = 100;

$tdataadm_tipo_documentos[".nPrinterSplitRecords"] = 40;

$tdataadm_tipo_documentos[".geocodingEnabled"] = false;










$tdataadm_tipo_documentos[".pageSize"] = 20;

$tdataadm_tipo_documentos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_tipo_documentos[".strOrderBy"] = $tstrOrderBy;

$tdataadm_tipo_documentos[".orderindexes"] = array();


$tdataadm_tipo_documentos[".sqlHead"] = "SELECT idTipoDoc,  	Tipo_Documento";
$tdataadm_tipo_documentos[".sqlFrom"] = "FROM adm_tipo_documentos";
$tdataadm_tipo_documentos[".sqlWhereExpr"] = "";
$tdataadm_tipo_documentos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_tipo_documentos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_tipo_documentos[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_tipo_documentos[".highlightSearchResults"] = true;

$tableKeysadm_tipo_documentos = array();
$tableKeysadm_tipo_documentos[] = "idTipoDoc";
$tdataadm_tipo_documentos[".Keys"] = $tableKeysadm_tipo_documentos;


$tdataadm_tipo_documentos[".hideMobileList"] = array();




//	idTipoDoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idTipoDoc";
	$fdata["GoodName"] = "idTipoDoc";
	$fdata["ownerTable"] = "adm_tipo_documentos";
	$fdata["Label"] = GetFieldLabel("adm_tipo_documentos","idTipoDoc");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idTipoDoc";

		$fdata["sourceSingle"] = "idTipoDoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idTipoDoc";

	
	
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


	$tdataadm_tipo_documentos["idTipoDoc"] = $fdata;
		$tdataadm_tipo_documentos[".searchableFields"][] = "idTipoDoc";
//	Tipo_Documento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo_Documento";
	$fdata["GoodName"] = "Tipo_Documento";
	$fdata["ownerTable"] = "adm_tipo_documentos";
	$fdata["Label"] = GetFieldLabel("adm_tipo_documentos","Tipo_Documento");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Tipo_Documento";

		$fdata["sourceSingle"] = "Tipo_Documento";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo_Documento";

	
	
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


	$tdataadm_tipo_documentos["Tipo_Documento"] = $fdata;
		$tdataadm_tipo_documentos[".searchableFields"][] = "Tipo_Documento";


$tables_data["adm_tipo_documentos"]=&$tdataadm_tipo_documentos;
$field_labels["adm_tipo_documentos"] = &$fieldLabelsadm_tipo_documentos;
$fieldToolTips["adm_tipo_documentos"] = &$fieldToolTipsadm_tipo_documentos;
$placeHolders["adm_tipo_documentos"] = &$placeHoldersadm_tipo_documentos;
$page_titles["adm_tipo_documentos"] = &$pageTitlesadm_tipo_documentos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["adm_tipo_documentos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["adm_tipo_documentos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_tipo_documentos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idTipoDoc,  	Tipo_Documento";
$proto0["m_strFrom"] = "FROM adm_tipo_documentos";
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
	"m_strName" => "idTipoDoc",
	"m_strTable" => "adm_tipo_documentos",
	"m_srcTableName" => "adm_tipo_documentos"
));

$proto6["m_sql"] = "idTipoDoc";
$proto6["m_srcTableName"] = "adm_tipo_documentos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo_Documento",
	"m_strTable" => "adm_tipo_documentos",
	"m_srcTableName" => "adm_tipo_documentos"
));

$proto8["m_sql"] = "Tipo_Documento";
$proto8["m_srcTableName"] = "adm_tipo_documentos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_tipo_documentos";
$proto11["m_srcTableName"] = "adm_tipo_documentos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idTipoDoc";
$proto11["m_columns"][] = "Tipo_Documento";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_tipo_documentos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_tipo_documentos";
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
$proto0["m_srcTableName"]="adm_tipo_documentos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_tipo_documentos = createSqlQuery_adm_tipo_documentos();


	
		;

		

$tdataadm_tipo_documentos[".sqlquery"] = $queryData_adm_tipo_documentos;



$tableEvents["adm_tipo_documentos"] = new eventsBase;
$tdataadm_tipo_documentos[".hasEvents"] = false;

?>