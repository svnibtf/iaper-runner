<?php
$tdataadm_horarios = array();
$tdataadm_horarios[".searchableFields"] = array();
$tdataadm_horarios[".ShortName"] = "adm_horarios";
$tdataadm_horarios[".OwnerID"] = "";
$tdataadm_horarios[".OriginalTable"] = "adm_horarios";


$tdataadm_horarios[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataadm_horarios[".originalPagesByType"] = $tdataadm_horarios[".pagesByType"];
$tdataadm_horarios[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataadm_horarios[".originalPages"] = $tdataadm_horarios[".pages"];
$tdataadm_horarios[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataadm_horarios[".originalDefaultPages"] = $tdataadm_horarios[".defaultPages"];

//	field labels
$fieldLabelsadm_horarios = array();
$fieldToolTipsadm_horarios = array();
$pageTitlesadm_horarios = array();
$placeHoldersadm_horarios = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_horarios["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_horarios["Portuguese(Brazil)"] = array();
	$placeHoldersadm_horarios["Portuguese(Brazil)"] = array();
	$pageTitlesadm_horarios["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_horarios["Portuguese(Brazil)"]["idHorario"] = "Horario";
	$fieldToolTipsadm_horarios["Portuguese(Brazil)"]["idHorario"] = "";
	$placeHoldersadm_horarios["Portuguese(Brazil)"]["idHorario"] = "";
	$fieldLabelsadm_horarios["Portuguese(Brazil)"]["Horario"] = "Horário";
	$fieldToolTipsadm_horarios["Portuguese(Brazil)"]["Horario"] = "";
	$placeHoldersadm_horarios["Portuguese(Brazil)"]["Horario"] = "";
	if (count($fieldToolTipsadm_horarios["Portuguese(Brazil)"]))
		$tdataadm_horarios[".isUseToolTips"] = true;
}


	$tdataadm_horarios[".NCSearch"] = true;



$tdataadm_horarios[".shortTableName"] = "adm_horarios";
$tdataadm_horarios[".nSecOptions"] = 0;

$tdataadm_horarios[".mainTableOwnerID"] = "";
$tdataadm_horarios[".entityType"] = 0;
$tdataadm_horarios[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_horarios[".strOriginalTableName"] = "adm_horarios";

	



$tdataadm_horarios[".showAddInPopup"] = false;

$tdataadm_horarios[".showEditInPopup"] = false;

$tdataadm_horarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_horarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_horarios[".listAjax"] = false;
//	temporary
//$tdataadm_horarios[".listAjax"] = false;

	$tdataadm_horarios[".audit"] = false;

	$tdataadm_horarios[".locking"] = false;


$pages = $tdataadm_horarios[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_horarios[".edit"] = true;
	$tdataadm_horarios[".afterEditAction"] = 1;
	$tdataadm_horarios[".closePopupAfterEdit"] = 1;
	$tdataadm_horarios[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_horarios[".add"] = true;
$tdataadm_horarios[".afterAddAction"] = 1;
$tdataadm_horarios[".closePopupAfterAdd"] = 1;
$tdataadm_horarios[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_horarios[".list"] = true;
}



$tdataadm_horarios[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_horarios[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_horarios[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_horarios[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_horarios[".printFriendly"] = true;
}



$tdataadm_horarios[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_horarios[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_horarios[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_horarios[".isUseAjaxSuggest"] = true;

$tdataadm_horarios[".rowHighlite"] = true;



						

$tdataadm_horarios[".ajaxCodeSnippetAdded"] = false;

$tdataadm_horarios[".buttonsAdded"] = false;

$tdataadm_horarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_horarios[".isUseTimeForSearch"] = false;


$tdataadm_horarios[".badgeColor"] = "DB7093";


$tdataadm_horarios[".allSearchFields"] = array();
$tdataadm_horarios[".filterFields"] = array();
$tdataadm_horarios[".requiredSearchFields"] = array();

$tdataadm_horarios[".googleLikeFields"] = array();
$tdataadm_horarios[".googleLikeFields"][] = "idHorario";
$tdataadm_horarios[".googleLikeFields"][] = "Horario";



$tdataadm_horarios[".tableType"] = "list";

$tdataadm_horarios[".printerPageOrientation"] = 0;
$tdataadm_horarios[".nPrinterPageScale"] = 100;

$tdataadm_horarios[".nPrinterSplitRecords"] = 40;

$tdataadm_horarios[".geocodingEnabled"] = false;










$tdataadm_horarios[".pageSize"] = 20;

$tdataadm_horarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_horarios[".strOrderBy"] = $tstrOrderBy;

$tdataadm_horarios[".orderindexes"] = array();


$tdataadm_horarios[".sqlHead"] = "SELECT idHorario,  	Horario";
$tdataadm_horarios[".sqlFrom"] = "FROM adm_horarios";
$tdataadm_horarios[".sqlWhereExpr"] = "";
$tdataadm_horarios[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_horarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_horarios[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_horarios[".highlightSearchResults"] = true;

$tableKeysadm_horarios = array();
$tableKeysadm_horarios[] = "idHorario";
$tdataadm_horarios[".Keys"] = $tableKeysadm_horarios;


$tdataadm_horarios[".hideMobileList"] = array();




//	idHorario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idHorario";
	$fdata["GoodName"] = "idHorario";
	$fdata["ownerTable"] = "adm_horarios";
	$fdata["Label"] = GetFieldLabel("adm_horarios","idHorario");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idHorario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idHorario";

	
	
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


	$tdataadm_horarios["idHorario"] = $fdata;
		$tdataadm_horarios[".searchableFields"][] = "idHorario";
//	Horario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Horario";
	$fdata["GoodName"] = "Horario";
	$fdata["ownerTable"] = "adm_horarios";
	$fdata["Label"] = GetFieldLabel("adm_horarios","Horario");
	$fdata["FieldType"] = 134;

	
	
	
			

		$fdata["strField"] = "Horario";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Horario";

	
	
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


	$tdataadm_horarios["Horario"] = $fdata;
		$tdataadm_horarios[".searchableFields"][] = "Horario";


$tables_data["adm_horarios"]=&$tdataadm_horarios;
$field_labels["adm_horarios"] = &$fieldLabelsadm_horarios;
$fieldToolTips["adm_horarios"] = &$fieldToolTipsadm_horarios;
$placeHolders["adm_horarios"] = &$placeHoldersadm_horarios;
$page_titles["adm_horarios"] = &$pageTitlesadm_horarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_horarios"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_horarios"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_horarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idHorario,  	Horario";
$proto0["m_strFrom"] = "FROM adm_horarios";
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
	"m_strName" => "idHorario",
	"m_strTable" => "adm_horarios",
	"m_srcTableName" => "adm_horarios"
));

$proto6["m_sql"] = "idHorario";
$proto6["m_srcTableName"] = "adm_horarios";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Horario",
	"m_strTable" => "adm_horarios",
	"m_srcTableName" => "adm_horarios"
));

$proto8["m_sql"] = "Horario";
$proto8["m_srcTableName"] = "adm_horarios";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_horarios";
$proto11["m_srcTableName"] = "adm_horarios";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idHorario";
$proto11["m_columns"][] = "Horario";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_horarios";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_horarios";
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
$proto0["m_srcTableName"]="adm_horarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_horarios = createSqlQuery_adm_horarios();


	
		;

		

$tdataadm_horarios[".sqlquery"] = $queryData_adm_horarios;



$tableEvents["adm_horarios"] = new eventsBase;
$tdataadm_horarios[".hasEvents"] = false;

?>