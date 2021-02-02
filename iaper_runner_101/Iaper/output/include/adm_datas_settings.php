<?php
$tdataadm_datas = array();
$tdataadm_datas[".searchableFields"] = array();
$tdataadm_datas[".ShortName"] = "adm_datas";
$tdataadm_datas[".OwnerID"] = "";
$tdataadm_datas[".OriginalTable"] = "adm_datas";


$tdataadm_datas[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_datas[".originalPagesByType"] = $tdataadm_datas[".pagesByType"];
$tdataadm_datas[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_datas[".originalPages"] = $tdataadm_datas[".pages"];
$tdataadm_datas[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_datas[".originalDefaultPages"] = $tdataadm_datas[".defaultPages"];

//	field labels
$fieldLabelsadm_datas = array();
$fieldToolTipsadm_datas = array();
$pageTitlesadm_datas = array();
$placeHoldersadm_datas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_datas["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_datas["Portuguese(Brazil)"] = array();
	$placeHoldersadm_datas["Portuguese(Brazil)"] = array();
	$pageTitlesadm_datas["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_datas["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsadm_datas["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersadm_datas["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsadm_datas["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsadm_datas["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersadm_datas["Portuguese(Brazil)"]["Data"] = "";
	if (count($fieldToolTipsadm_datas["Portuguese(Brazil)"]))
		$tdataadm_datas[".isUseToolTips"] = true;
}


	$tdataadm_datas[".NCSearch"] = true;



$tdataadm_datas[".shortTableName"] = "adm_datas";
$tdataadm_datas[".nSecOptions"] = 0;

$tdataadm_datas[".mainTableOwnerID"] = "";
$tdataadm_datas[".entityType"] = 0;
$tdataadm_datas[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_datas[".strOriginalTableName"] = "adm_datas";

	



$tdataadm_datas[".showAddInPopup"] = false;

$tdataadm_datas[".showEditInPopup"] = false;

$tdataadm_datas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_datas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_datas[".listAjax"] = false;
//	temporary
//$tdataadm_datas[".listAjax"] = false;

	$tdataadm_datas[".audit"] = false;

	$tdataadm_datas[".locking"] = false;


$pages = $tdataadm_datas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_datas[".edit"] = true;
	$tdataadm_datas[".afterEditAction"] = 1;
	$tdataadm_datas[".closePopupAfterEdit"] = 1;
	$tdataadm_datas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_datas[".add"] = true;
$tdataadm_datas[".afterAddAction"] = 1;
$tdataadm_datas[".closePopupAfterAdd"] = 1;
$tdataadm_datas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_datas[".list"] = true;
}



$tdataadm_datas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_datas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_datas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_datas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_datas[".printFriendly"] = true;
}



$tdataadm_datas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_datas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_datas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_datas[".isUseAjaxSuggest"] = true;

$tdataadm_datas[".rowHighlite"] = true;



			

$tdataadm_datas[".ajaxCodeSnippetAdded"] = false;

$tdataadm_datas[".buttonsAdded"] = false;

$tdataadm_datas[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_datas[".isUseTimeForSearch"] = false;


$tdataadm_datas[".badgeColor"] = "2F4F4F";


$tdataadm_datas[".allSearchFields"] = array();
$tdataadm_datas[".filterFields"] = array();
$tdataadm_datas[".requiredSearchFields"] = array();

$tdataadm_datas[".googleLikeFields"] = array();
$tdataadm_datas[".googleLikeFields"][] = "ID";
$tdataadm_datas[".googleLikeFields"][] = "Data";



$tdataadm_datas[".tableType"] = "list";

$tdataadm_datas[".printerPageOrientation"] = 0;
$tdataadm_datas[".nPrinterPageScale"] = 100;

$tdataadm_datas[".nPrinterSplitRecords"] = 40;

$tdataadm_datas[".geocodingEnabled"] = false;










$tdataadm_datas[".pageSize"] = 20;

$tdataadm_datas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_datas[".strOrderBy"] = $tstrOrderBy;

$tdataadm_datas[".orderindexes"] = array();


$tdataadm_datas[".sqlHead"] = "SELECT ID,  	`Data`";
$tdataadm_datas[".sqlFrom"] = "FROM adm_datas";
$tdataadm_datas[".sqlWhereExpr"] = "";
$tdataadm_datas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_datas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_datas[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_datas[".highlightSearchResults"] = true;

$tableKeysadm_datas = array();
$tableKeysadm_datas[] = "ID";
$tdataadm_datas[".Keys"] = $tableKeysadm_datas;


$tdataadm_datas[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "adm_datas";
	$fdata["Label"] = GetFieldLabel("adm_datas","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataadm_datas["ID"] = $fdata;
		$tdataadm_datas[".searchableFields"][] = "ID";
//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "adm_datas";
	$fdata["Label"] = GetFieldLabel("adm_datas","Data");
	$fdata["FieldType"] = 7;

	
	
	
			

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


	$tdataadm_datas["Data"] = $fdata;
		$tdataadm_datas[".searchableFields"][] = "Data";


$tables_data["adm_datas"]=&$tdataadm_datas;
$field_labels["adm_datas"] = &$fieldLabelsadm_datas;
$fieldToolTips["adm_datas"] = &$fieldToolTipsadm_datas;
$placeHolders["adm_datas"] = &$placeHoldersadm_datas;
$page_titles["adm_datas"] = &$pageTitlesadm_datas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_datas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_datas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_datas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`Data`";
$proto0["m_strFrom"] = "FROM adm_datas";
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
	"m_strName" => "ID",
	"m_strTable" => "adm_datas",
	"m_srcTableName" => "adm_datas"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "adm_datas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Data",
	"m_strTable" => "adm_datas",
	"m_srcTableName" => "adm_datas"
));

$proto8["m_sql"] = "`Data`";
$proto8["m_srcTableName"] = "adm_datas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_datas";
$proto11["m_srcTableName"] = "adm_datas";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Data";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_datas";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_datas";
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
$proto0["m_srcTableName"]="adm_datas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_datas = createSqlQuery_adm_datas();


	
		;

		

$tdataadm_datas[".sqlquery"] = $queryData_adm_datas;



$tableEvents["adm_datas"] = new eventsBase;
$tdataadm_datas[".hasEvents"] = false;

?>