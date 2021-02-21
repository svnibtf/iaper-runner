<?php
$tdataadm_tipo_config1 = array();
$tdataadm_tipo_config1[".searchableFields"] = array();
$tdataadm_tipo_config1[".ShortName"] = "adm_tipo_config1";
$tdataadm_tipo_config1[".OwnerID"] = "";
$tdataadm_tipo_config1[".OriginalTable"] = "adm_tipo_config";


$tdataadm_tipo_config1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataadm_tipo_config1[".originalPagesByType"] = $tdataadm_tipo_config1[".pagesByType"];
$tdataadm_tipo_config1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataadm_tipo_config1[".originalPages"] = $tdataadm_tipo_config1[".pages"];
$tdataadm_tipo_config1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataadm_tipo_config1[".originalDefaultPages"] = $tdataadm_tipo_config1[".defaultPages"];

//	field labels
$fieldLabelsadm_tipo_config1 = array();
$fieldToolTipsadm_tipo_config1 = array();
$pageTitlesadm_tipo_config1 = array();
$placeHoldersadm_tipo_config1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_tipo_config1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_tipo_config1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_tipo_config1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_tipo_config1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_tipo_config1["Portuguese(Brazil)"]["ID0"] = "ID0";
	$fieldToolTipsadm_tipo_config1["Portuguese(Brazil)"]["ID0"] = "";
	$placeHoldersadm_tipo_config1["Portuguese(Brazil)"]["ID0"] = "";
	$fieldLabelsadm_tipo_config1["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsadm_tipo_config1["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersadm_tipo_config1["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsadm_tipo_config1["Portuguese(Brazil)"]["Texto"] = "Texto";
	$fieldToolTipsadm_tipo_config1["Portuguese(Brazil)"]["Texto"] = "";
	$placeHoldersadm_tipo_config1["Portuguese(Brazil)"]["Texto"] = "";
	if (count($fieldToolTipsadm_tipo_config1["Portuguese(Brazil)"]))
		$tdataadm_tipo_config1[".isUseToolTips"] = true;
}


	$tdataadm_tipo_config1[".NCSearch"] = true;



$tdataadm_tipo_config1[".shortTableName"] = "adm_tipo_config1";
$tdataadm_tipo_config1[".nSecOptions"] = 0;

$tdataadm_tipo_config1[".mainTableOwnerID"] = "";
$tdataadm_tipo_config1[".entityType"] = 1;
$tdataadm_tipo_config1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_tipo_config1[".strOriginalTableName"] = "adm_tipo_config";

	



$tdataadm_tipo_config1[".showAddInPopup"] = false;

$tdataadm_tipo_config1[".showEditInPopup"] = false;

$tdataadm_tipo_config1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_tipo_config1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_tipo_config1[".listAjax"] = false;
//	temporary
//$tdataadm_tipo_config1[".listAjax"] = false;

	$tdataadm_tipo_config1[".audit"] = false;

	$tdataadm_tipo_config1[".locking"] = false;


$pages = $tdataadm_tipo_config1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_tipo_config1[".edit"] = true;
	$tdataadm_tipo_config1[".afterEditAction"] = 1;
	$tdataadm_tipo_config1[".closePopupAfterEdit"] = 1;
	$tdataadm_tipo_config1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_tipo_config1[".add"] = true;
$tdataadm_tipo_config1[".afterAddAction"] = 1;
$tdataadm_tipo_config1[".closePopupAfterAdd"] = 1;
$tdataadm_tipo_config1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_tipo_config1[".list"] = true;
}



$tdataadm_tipo_config1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_tipo_config1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_tipo_config1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_tipo_config1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_tipo_config1[".printFriendly"] = true;
}



$tdataadm_tipo_config1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_tipo_config1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_tipo_config1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_tipo_config1[".isUseAjaxSuggest"] = true;

$tdataadm_tipo_config1[".rowHighlite"] = true;



			

$tdataadm_tipo_config1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_tipo_config1[".buttonsAdded"] = false;

$tdataadm_tipo_config1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_tipo_config1[".isUseTimeForSearch"] = false;


$tdataadm_tipo_config1[".badgeColor"] = "CFAE83";


$tdataadm_tipo_config1[".allSearchFields"] = array();
$tdataadm_tipo_config1[".filterFields"] = array();
$tdataadm_tipo_config1[".requiredSearchFields"] = array();

$tdataadm_tipo_config1[".googleLikeFields"] = array();
$tdataadm_tipo_config1[".googleLikeFields"][] = "ID0";
$tdataadm_tipo_config1[".googleLikeFields"][] = "id";
$tdataadm_tipo_config1[".googleLikeFields"][] = "Texto";



$tdataadm_tipo_config1[".tableType"] = "list";

$tdataadm_tipo_config1[".printerPageOrientation"] = 0;
$tdataadm_tipo_config1[".nPrinterPageScale"] = 100;

$tdataadm_tipo_config1[".nPrinterSplitRecords"] = 40;

$tdataadm_tipo_config1[".geocodingEnabled"] = false;










$tdataadm_tipo_config1[".pageSize"] = 20;

$tdataadm_tipo_config1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_tipo_config1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_tipo_config1[".orderindexes"] = array();


$tdataadm_tipo_config1[".sqlHead"] = "SELECT ID0,  	id,  	Texto";
$tdataadm_tipo_config1[".sqlFrom"] = "FROM adm_tipo_config";
$tdataadm_tipo_config1[".sqlWhereExpr"] = "";
$tdataadm_tipo_config1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_tipo_config1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_tipo_config1[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_tipo_config1[".highlightSearchResults"] = true;

$tableKeysadm_tipo_config1 = array();
$tableKeysadm_tipo_config1[] = "ID0";
$tdataadm_tipo_config1[".Keys"] = $tableKeysadm_tipo_config1;


$tdataadm_tipo_config1[".hideMobileList"] = array();




//	ID0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID0";
	$fdata["GoodName"] = "ID0";
	$fdata["ownerTable"] = "adm_tipo_config";
	$fdata["Label"] = GetFieldLabel("adm_tipo_config1","ID0");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID0";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID0";

	
	
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


	$tdataadm_tipo_config1["ID0"] = $fdata;
		$tdataadm_tipo_config1[".searchableFields"][] = "ID0";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "adm_tipo_config";
	$fdata["Label"] = GetFieldLabel("adm_tipo_config1","id");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataadm_tipo_config1["id"] = $fdata;
		$tdataadm_tipo_config1[".searchableFields"][] = "id";
//	Texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Texto";
	$fdata["GoodName"] = "Texto";
	$fdata["ownerTable"] = "adm_tipo_config";
	$fdata["Label"] = GetFieldLabel("adm_tipo_config1","Texto");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Texto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Texto";

	
	
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


	$tdataadm_tipo_config1["Texto"] = $fdata;
		$tdataadm_tipo_config1[".searchableFields"][] = "Texto";


$tables_data["adm_tipo_config1"]=&$tdataadm_tipo_config1;
$field_labels["adm_tipo_config1"] = &$fieldLabelsadm_tipo_config1;
$fieldToolTips["adm_tipo_config1"] = &$fieldToolTipsadm_tipo_config1;
$placeHolders["adm_tipo_config1"] = &$placeHoldersadm_tipo_config1;
$page_titles["adm_tipo_config1"] = &$pageTitlesadm_tipo_config1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_tipo_config1"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_tipo_config1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_tipo_config1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID0,  	id,  	Texto";
$proto0["m_strFrom"] = "FROM adm_tipo_config";
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
	"m_strName" => "ID0",
	"m_strTable" => "adm_tipo_config",
	"m_srcTableName" => "adm_tipo_config1"
));

$proto6["m_sql"] = "ID0";
$proto6["m_srcTableName"] = "adm_tipo_config1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "adm_tipo_config",
	"m_srcTableName" => "adm_tipo_config1"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "adm_tipo_config1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto",
	"m_strTable" => "adm_tipo_config",
	"m_srcTableName" => "adm_tipo_config1"
));

$proto10["m_sql"] = "Texto";
$proto10["m_srcTableName"] = "adm_tipo_config1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "adm_tipo_config";
$proto13["m_srcTableName"] = "adm_tipo_config1";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID0";
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Texto";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "adm_tipo_config";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "adm_tipo_config1";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_tipo_config1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_tipo_config1 = createSqlQuery_adm_tipo_config1();


	
		;

			

$tdataadm_tipo_config1[".sqlquery"] = $queryData_adm_tipo_config1;



$tableEvents["adm_tipo_config1"] = new eventsBase;
$tdataadm_tipo_config1[".hasEvents"] = false;

?>