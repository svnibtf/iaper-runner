<?php
$tdataadm_ramos = array();
$tdataadm_ramos[".searchableFields"] = array();
$tdataadm_ramos[".ShortName"] = "adm_ramos";
$tdataadm_ramos[".OwnerID"] = "";
$tdataadm_ramos[".OriginalTable"] = "adm_ramos";


$tdataadm_ramos[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_ramos[".originalPagesByType"] = $tdataadm_ramos[".pagesByType"];
$tdataadm_ramos[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_ramos[".originalPages"] = $tdataadm_ramos[".pages"];
$tdataadm_ramos[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_ramos[".originalDefaultPages"] = $tdataadm_ramos[".defaultPages"];

//	field labels
$fieldLabelsadm_ramos = array();
$fieldToolTipsadm_ramos = array();
$pageTitlesadm_ramos = array();
$placeHoldersadm_ramos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_ramos["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_ramos["Portuguese(Brazil)"] = array();
	$placeHoldersadm_ramos["Portuguese(Brazil)"] = array();
	$pageTitlesadm_ramos["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_ramos["Portuguese(Brazil)"]["idRamo"] = "Id Ramo";
	$fieldToolTipsadm_ramos["Portuguese(Brazil)"]["idRamo"] = "";
	$placeHoldersadm_ramos["Portuguese(Brazil)"]["idRamo"] = "";
	$fieldLabelsadm_ramos["Portuguese(Brazil)"]["Ramo"] = "Ramo";
	$fieldToolTipsadm_ramos["Portuguese(Brazil)"]["Ramo"] = "";
	$placeHoldersadm_ramos["Portuguese(Brazil)"]["Ramo"] = "";
	if (count($fieldToolTipsadm_ramos["Portuguese(Brazil)"]))
		$tdataadm_ramos[".isUseToolTips"] = true;
}


	$tdataadm_ramos[".NCSearch"] = true;



$tdataadm_ramos[".shortTableName"] = "adm_ramos";
$tdataadm_ramos[".nSecOptions"] = 0;

$tdataadm_ramos[".mainTableOwnerID"] = "";
$tdataadm_ramos[".entityType"] = 0;
$tdataadm_ramos[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_ramos[".strOriginalTableName"] = "adm_ramos";

	



$tdataadm_ramos[".showAddInPopup"] = false;

$tdataadm_ramos[".showEditInPopup"] = false;

$tdataadm_ramos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_ramos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_ramos[".listAjax"] = false;
//	temporary
//$tdataadm_ramos[".listAjax"] = false;

	$tdataadm_ramos[".audit"] = false;

	$tdataadm_ramos[".locking"] = false;


$pages = $tdataadm_ramos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_ramos[".edit"] = true;
	$tdataadm_ramos[".afterEditAction"] = 1;
	$tdataadm_ramos[".closePopupAfterEdit"] = 1;
	$tdataadm_ramos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_ramos[".add"] = true;
$tdataadm_ramos[".afterAddAction"] = 1;
$tdataadm_ramos[".closePopupAfterAdd"] = 1;
$tdataadm_ramos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_ramos[".list"] = true;
}



$tdataadm_ramos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_ramos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_ramos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_ramos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_ramos[".printFriendly"] = true;
}



$tdataadm_ramos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_ramos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_ramos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_ramos[".isUseAjaxSuggest"] = false;

$tdataadm_ramos[".rowHighlite"] = true;





$tdataadm_ramos[".ajaxCodeSnippetAdded"] = false;

$tdataadm_ramos[".buttonsAdded"] = false;

$tdataadm_ramos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_ramos[".isUseTimeForSearch"] = false;


$tdataadm_ramos[".badgeColor"] = "1E90FF";


$tdataadm_ramos[".allSearchFields"] = array();
$tdataadm_ramos[".filterFields"] = array();
$tdataadm_ramos[".requiredSearchFields"] = array();

$tdataadm_ramos[".googleLikeFields"] = array();
$tdataadm_ramos[".googleLikeFields"][] = "idRamo";
$tdataadm_ramos[".googleLikeFields"][] = "Ramo";



$tdataadm_ramos[".tableType"] = "list";

$tdataadm_ramos[".printerPageOrientation"] = 0;
$tdataadm_ramos[".nPrinterPageScale"] = 100;

$tdataadm_ramos[".nPrinterSplitRecords"] = 40;

$tdataadm_ramos[".geocodingEnabled"] = false;










$tdataadm_ramos[".pageSize"] = 20;

$tdataadm_ramos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_ramos[".strOrderBy"] = $tstrOrderBy;

$tdataadm_ramos[".orderindexes"] = array();


$tdataadm_ramos[".sqlHead"] = "SELECT idRamo,  	Ramo";
$tdataadm_ramos[".sqlFrom"] = "FROM adm_ramos";
$tdataadm_ramos[".sqlWhereExpr"] = "";
$tdataadm_ramos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_ramos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_ramos[".arrGroupsPerPage"] = $arrGPP;


$tableKeysadm_ramos = array();
$tableKeysadm_ramos[] = "idRamo";
$tdataadm_ramos[".Keys"] = $tableKeysadm_ramos;


$tdataadm_ramos[".hideMobileList"] = array();




//	idRamo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idRamo";
	$fdata["GoodName"] = "idRamo";
	$fdata["ownerTable"] = "adm_ramos";
	$fdata["Label"] = GetFieldLabel("adm_ramos","idRamo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idRamo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idRamo";

	
	
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


	$tdataadm_ramos["idRamo"] = $fdata;
		$tdataadm_ramos[".searchableFields"][] = "idRamo";
//	Ramo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Ramo";
	$fdata["GoodName"] = "Ramo";
	$fdata["ownerTable"] = "adm_ramos";
	$fdata["Label"] = GetFieldLabel("adm_ramos","Ramo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Ramo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Ramo";

	
	
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


	$tdataadm_ramos["Ramo"] = $fdata;
		$tdataadm_ramos[".searchableFields"][] = "Ramo";


$tables_data["adm_ramos"]=&$tdataadm_ramos;
$field_labels["adm_ramos"] = &$fieldLabelsadm_ramos;
$fieldToolTips["adm_ramos"] = &$fieldToolTipsadm_ramos;
$placeHolders["adm_ramos"] = &$placeHoldersadm_ramos;
$page_titles["adm_ramos"] = &$pageTitlesadm_ramos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_ramos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_ramos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_ramos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idRamo,  	Ramo";
$proto0["m_strFrom"] = "FROM adm_ramos";
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
	"m_strName" => "idRamo",
	"m_strTable" => "adm_ramos",
	"m_srcTableName" => "adm_ramos"
));

$proto6["m_sql"] = "idRamo";
$proto6["m_srcTableName"] = "adm_ramos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Ramo",
	"m_strTable" => "adm_ramos",
	"m_srcTableName" => "adm_ramos"
));

$proto8["m_sql"] = "Ramo";
$proto8["m_srcTableName"] = "adm_ramos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_ramos";
$proto11["m_srcTableName"] = "adm_ramos";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idRamo";
$proto11["m_columns"][] = "Ramo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_ramos";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_ramos";
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
$proto0["m_srcTableName"]="adm_ramos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_ramos = createSqlQuery_adm_ramos();


	
		;

		

$tdataadm_ramos[".sqlquery"] = $queryData_adm_ramos;



$tableEvents["adm_ramos"] = new eventsBase;
$tdataadm_ramos[".hasEvents"] = false;

?>