<?php
$tdataadm_agenda_tipos_recebimento = array();
$tdataadm_agenda_tipos_recebimento[".searchableFields"] = array();
$tdataadm_agenda_tipos_recebimento[".ShortName"] = "adm_agenda_tipos_recebimento";
$tdataadm_agenda_tipos_recebimento[".OwnerID"] = "";
$tdataadm_agenda_tipos_recebimento[".OriginalTable"] = "adm_agenda_tipos_recebimento";


$tdataadm_agenda_tipos_recebimento[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_agenda_tipos_recebimento[".originalPagesByType"] = $tdataadm_agenda_tipos_recebimento[".pagesByType"];
$tdataadm_agenda_tipos_recebimento[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_agenda_tipos_recebimento[".originalPages"] = $tdataadm_agenda_tipos_recebimento[".pages"];
$tdataadm_agenda_tipos_recebimento[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_agenda_tipos_recebimento[".originalDefaultPages"] = $tdataadm_agenda_tipos_recebimento[".defaultPages"];

//	field labels
$fieldLabelsadm_agenda_tipos_recebimento = array();
$fieldToolTipsadm_agenda_tipos_recebimento = array();
$pageTitlesadm_agenda_tipos_recebimento = array();
$placeHoldersadm_agenda_tipos_recebimento = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_agenda_tipos_recebimento["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_agenda_tipos_recebimento["Portuguese(Brazil)"] = array();
	$placeHoldersadm_agenda_tipos_recebimento["Portuguese(Brazil)"] = array();
	$pageTitlesadm_agenda_tipos_recebimento["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_agenda_tipos_recebimento["Portuguese(Brazil)"]["atr_id"] = "Atr Id";
	$fieldToolTipsadm_agenda_tipos_recebimento["Portuguese(Brazil)"]["atr_id"] = "";
	$placeHoldersadm_agenda_tipos_recebimento["Portuguese(Brazil)"]["atr_id"] = "";
	$fieldLabelsadm_agenda_tipos_recebimento["Portuguese(Brazil)"]["atr_nome"] = "Atr Nome";
	$fieldToolTipsadm_agenda_tipos_recebimento["Portuguese(Brazil)"]["atr_nome"] = "";
	$placeHoldersadm_agenda_tipos_recebimento["Portuguese(Brazil)"]["atr_nome"] = "";
	if (count($fieldToolTipsadm_agenda_tipos_recebimento["Portuguese(Brazil)"]))
		$tdataadm_agenda_tipos_recebimento[".isUseToolTips"] = true;
}


	$tdataadm_agenda_tipos_recebimento[".NCSearch"] = true;



$tdataadm_agenda_tipos_recebimento[".shortTableName"] = "adm_agenda_tipos_recebimento";
$tdataadm_agenda_tipos_recebimento[".nSecOptions"] = 0;

$tdataadm_agenda_tipos_recebimento[".mainTableOwnerID"] = "";
$tdataadm_agenda_tipos_recebimento[".entityType"] = 0;
$tdataadm_agenda_tipos_recebimento[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_agenda_tipos_recebimento[".strOriginalTableName"] = "adm_agenda_tipos_recebimento";

	



$tdataadm_agenda_tipos_recebimento[".showAddInPopup"] = false;

$tdataadm_agenda_tipos_recebimento[".showEditInPopup"] = false;

$tdataadm_agenda_tipos_recebimento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_agenda_tipos_recebimento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_agenda_tipos_recebimento[".listAjax"] = false;
//	temporary
//$tdataadm_agenda_tipos_recebimento[".listAjax"] = false;

	$tdataadm_agenda_tipos_recebimento[".audit"] = false;

	$tdataadm_agenda_tipos_recebimento[".locking"] = false;


$pages = $tdataadm_agenda_tipos_recebimento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_agenda_tipos_recebimento[".edit"] = true;
	$tdataadm_agenda_tipos_recebimento[".afterEditAction"] = 1;
	$tdataadm_agenda_tipos_recebimento[".closePopupAfterEdit"] = 1;
	$tdataadm_agenda_tipos_recebimento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_agenda_tipos_recebimento[".add"] = true;
$tdataadm_agenda_tipos_recebimento[".afterAddAction"] = 1;
$tdataadm_agenda_tipos_recebimento[".closePopupAfterAdd"] = 1;
$tdataadm_agenda_tipos_recebimento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_agenda_tipos_recebimento[".list"] = true;
}



$tdataadm_agenda_tipos_recebimento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_agenda_tipos_recebimento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_agenda_tipos_recebimento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_agenda_tipos_recebimento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_agenda_tipos_recebimento[".printFriendly"] = true;
}



$tdataadm_agenda_tipos_recebimento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_agenda_tipos_recebimento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_agenda_tipos_recebimento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_agenda_tipos_recebimento[".isUseAjaxSuggest"] = true;

$tdataadm_agenda_tipos_recebimento[".rowHighlite"] = true;



			

$tdataadm_agenda_tipos_recebimento[".ajaxCodeSnippetAdded"] = false;

$tdataadm_agenda_tipos_recebimento[".buttonsAdded"] = false;

$tdataadm_agenda_tipos_recebimento[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_agenda_tipos_recebimento[".isUseTimeForSearch"] = false;


$tdataadm_agenda_tipos_recebimento[".badgeColor"] = "D2AF80";


$tdataadm_agenda_tipos_recebimento[".allSearchFields"] = array();
$tdataadm_agenda_tipos_recebimento[".filterFields"] = array();
$tdataadm_agenda_tipos_recebimento[".requiredSearchFields"] = array();

$tdataadm_agenda_tipos_recebimento[".googleLikeFields"] = array();
$tdataadm_agenda_tipos_recebimento[".googleLikeFields"][] = "atr_id";
$tdataadm_agenda_tipos_recebimento[".googleLikeFields"][] = "atr_nome";



$tdataadm_agenda_tipos_recebimento[".tableType"] = "list";

$tdataadm_agenda_tipos_recebimento[".printerPageOrientation"] = 0;
$tdataadm_agenda_tipos_recebimento[".nPrinterPageScale"] = 100;

$tdataadm_agenda_tipos_recebimento[".nPrinterSplitRecords"] = 40;

$tdataadm_agenda_tipos_recebimento[".geocodingEnabled"] = false;










$tdataadm_agenda_tipos_recebimento[".pageSize"] = 20;

$tdataadm_agenda_tipos_recebimento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_agenda_tipos_recebimento[".strOrderBy"] = $tstrOrderBy;

$tdataadm_agenda_tipos_recebimento[".orderindexes"] = array();


$tdataadm_agenda_tipos_recebimento[".sqlHead"] = "SELECT atr_id,  	atr_nome";
$tdataadm_agenda_tipos_recebimento[".sqlFrom"] = "FROM adm_agenda_tipos_recebimento";
$tdataadm_agenda_tipos_recebimento[".sqlWhereExpr"] = "";
$tdataadm_agenda_tipos_recebimento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_agenda_tipos_recebimento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_agenda_tipos_recebimento[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_agenda_tipos_recebimento[".highlightSearchResults"] = true;

$tableKeysadm_agenda_tipos_recebimento = array();
$tableKeysadm_agenda_tipos_recebimento[] = "atr_id";
$tdataadm_agenda_tipos_recebimento[".Keys"] = $tableKeysadm_agenda_tipos_recebimento;


$tdataadm_agenda_tipos_recebimento[".hideMobileList"] = array();




//	atr_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "atr_id";
	$fdata["GoodName"] = "atr_id";
	$fdata["ownerTable"] = "adm_agenda_tipos_recebimento";
	$fdata["Label"] = GetFieldLabel("adm_agenda_tipos_recebimento","atr_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "atr_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "atr_id";

	
	
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


	$tdataadm_agenda_tipos_recebimento["atr_id"] = $fdata;
		$tdataadm_agenda_tipos_recebimento[".searchableFields"][] = "atr_id";
//	atr_nome
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "atr_nome";
	$fdata["GoodName"] = "atr_nome";
	$fdata["ownerTable"] = "adm_agenda_tipos_recebimento";
	$fdata["Label"] = GetFieldLabel("adm_agenda_tipos_recebimento","atr_nome");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "atr_nome";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "atr_nome";

	
	
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


	$tdataadm_agenda_tipos_recebimento["atr_nome"] = $fdata;
		$tdataadm_agenda_tipos_recebimento[".searchableFields"][] = "atr_nome";


$tables_data["adm_agenda_tipos_recebimento"]=&$tdataadm_agenda_tipos_recebimento;
$field_labels["adm_agenda_tipos_recebimento"] = &$fieldLabelsadm_agenda_tipos_recebimento;
$fieldToolTips["adm_agenda_tipos_recebimento"] = &$fieldToolTipsadm_agenda_tipos_recebimento;
$placeHolders["adm_agenda_tipos_recebimento"] = &$placeHoldersadm_agenda_tipos_recebimento;
$page_titles["adm_agenda_tipos_recebimento"] = &$pageTitlesadm_agenda_tipos_recebimento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_agenda_tipos_recebimento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_agenda_tipos_recebimento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_agenda_tipos_recebimento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "atr_id,  	atr_nome";
$proto0["m_strFrom"] = "FROM adm_agenda_tipos_recebimento";
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
	"m_strName" => "atr_id",
	"m_strTable" => "adm_agenda_tipos_recebimento",
	"m_srcTableName" => "adm_agenda_tipos_recebimento"
));

$proto6["m_sql"] = "atr_id";
$proto6["m_srcTableName"] = "adm_agenda_tipos_recebimento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "atr_nome",
	"m_strTable" => "adm_agenda_tipos_recebimento",
	"m_srcTableName" => "adm_agenda_tipos_recebimento"
));

$proto8["m_sql"] = "atr_nome";
$proto8["m_srcTableName"] = "adm_agenda_tipos_recebimento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_agenda_tipos_recebimento";
$proto11["m_srcTableName"] = "adm_agenda_tipos_recebimento";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "atr_id";
$proto11["m_columns"][] = "atr_nome";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_agenda_tipos_recebimento";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_agenda_tipos_recebimento";
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
$proto0["m_srcTableName"]="adm_agenda_tipos_recebimento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_agenda_tipos_recebimento = createSqlQuery_adm_agenda_tipos_recebimento();


	
		;

		

$tdataadm_agenda_tipos_recebimento[".sqlquery"] = $queryData_adm_agenda_tipos_recebimento;



$tableEvents["adm_agenda_tipos_recebimento"] = new eventsBase;
$tdataadm_agenda_tipos_recebimento[".hasEvents"] = false;

?>