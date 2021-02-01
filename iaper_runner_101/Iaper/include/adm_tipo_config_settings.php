<?php
$tdataadm_tipo_config = array();
$tdataadm_tipo_config[".searchableFields"] = array();
$tdataadm_tipo_config[".ShortName"] = "adm_tipo_config";
$tdataadm_tipo_config[".OwnerID"] = "";
$tdataadm_tipo_config[".OriginalTable"] = "adm_tipo_config";


$tdataadm_tipo_config[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_tipo_config[".originalPagesByType"] = $tdataadm_tipo_config[".pagesByType"];
$tdataadm_tipo_config[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_tipo_config[".originalPages"] = $tdataadm_tipo_config[".pages"];
$tdataadm_tipo_config[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_tipo_config[".originalDefaultPages"] = $tdataadm_tipo_config[".defaultPages"];

//	field labels
$fieldLabelsadm_tipo_config = array();
$fieldToolTipsadm_tipo_config = array();
$pageTitlesadm_tipo_config = array();
$placeHoldersadm_tipo_config = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_tipo_config["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_tipo_config["Portuguese(Brazil)"] = array();
	$placeHoldersadm_tipo_config["Portuguese(Brazil)"] = array();
	$pageTitlesadm_tipo_config["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_tipo_config["Portuguese(Brazil)"]["ID0"] = "ID0";
	$fieldToolTipsadm_tipo_config["Portuguese(Brazil)"]["ID0"] = "";
	$placeHoldersadm_tipo_config["Portuguese(Brazil)"]["ID0"] = "";
	$fieldLabelsadm_tipo_config["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipsadm_tipo_config["Portuguese(Brazil)"]["id"] = "";
	$placeHoldersadm_tipo_config["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelsadm_tipo_config["Portuguese(Brazil)"]["Texto"] = "Texto";
	$fieldToolTipsadm_tipo_config["Portuguese(Brazil)"]["Texto"] = "";
	$placeHoldersadm_tipo_config["Portuguese(Brazil)"]["Texto"] = "";
	if (count($fieldToolTipsadm_tipo_config["Portuguese(Brazil)"]))
		$tdataadm_tipo_config[".isUseToolTips"] = true;
}


	$tdataadm_tipo_config[".NCSearch"] = true;



$tdataadm_tipo_config[".shortTableName"] = "adm_tipo_config";
$tdataadm_tipo_config[".nSecOptions"] = 0;

$tdataadm_tipo_config[".mainTableOwnerID"] = "";
$tdataadm_tipo_config[".entityType"] = 0;
$tdataadm_tipo_config[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_tipo_config[".strOriginalTableName"] = "adm_tipo_config";

	



$tdataadm_tipo_config[".showAddInPopup"] = false;

$tdataadm_tipo_config[".showEditInPopup"] = false;

$tdataadm_tipo_config[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_tipo_config[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_tipo_config[".listAjax"] = false;
//	temporary
//$tdataadm_tipo_config[".listAjax"] = false;

	$tdataadm_tipo_config[".audit"] = false;

	$tdataadm_tipo_config[".locking"] = false;


$pages = $tdataadm_tipo_config[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_tipo_config[".edit"] = true;
	$tdataadm_tipo_config[".afterEditAction"] = 1;
	$tdataadm_tipo_config[".closePopupAfterEdit"] = 1;
	$tdataadm_tipo_config[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_tipo_config[".add"] = true;
$tdataadm_tipo_config[".afterAddAction"] = 1;
$tdataadm_tipo_config[".closePopupAfterAdd"] = 1;
$tdataadm_tipo_config[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_tipo_config[".list"] = true;
}



$tdataadm_tipo_config[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_tipo_config[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_tipo_config[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_tipo_config[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_tipo_config[".printFriendly"] = true;
}



$tdataadm_tipo_config[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_tipo_config[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_tipo_config[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_tipo_config[".isUseAjaxSuggest"] = true;

$tdataadm_tipo_config[".rowHighlite"] = true;



			

$tdataadm_tipo_config[".ajaxCodeSnippetAdded"] = false;

$tdataadm_tipo_config[".buttonsAdded"] = false;

$tdataadm_tipo_config[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_tipo_config[".isUseTimeForSearch"] = false;


$tdataadm_tipo_config[".badgeColor"] = "5F9EA0";


$tdataadm_tipo_config[".allSearchFields"] = array();
$tdataadm_tipo_config[".filterFields"] = array();
$tdataadm_tipo_config[".requiredSearchFields"] = array();

$tdataadm_tipo_config[".googleLikeFields"] = array();
$tdataadm_tipo_config[".googleLikeFields"][] = "ID0";
$tdataadm_tipo_config[".googleLikeFields"][] = "id";
$tdataadm_tipo_config[".googleLikeFields"][] = "Texto";



$tdataadm_tipo_config[".tableType"] = "list";

$tdataadm_tipo_config[".printerPageOrientation"] = 0;
$tdataadm_tipo_config[".nPrinterPageScale"] = 100;

$tdataadm_tipo_config[".nPrinterSplitRecords"] = 40;

$tdataadm_tipo_config[".geocodingEnabled"] = false;










$tdataadm_tipo_config[".pageSize"] = 20;

$tdataadm_tipo_config[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_tipo_config[".strOrderBy"] = $tstrOrderBy;

$tdataadm_tipo_config[".orderindexes"] = array();


$tdataadm_tipo_config[".sqlHead"] = "SELECT ID0,  	id,  	Texto";
$tdataadm_tipo_config[".sqlFrom"] = "FROM adm_tipo_config";
$tdataadm_tipo_config[".sqlWhereExpr"] = "";
$tdataadm_tipo_config[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_tipo_config[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_tipo_config[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_tipo_config[".highlightSearchResults"] = true;

$tableKeysadm_tipo_config = array();
$tableKeysadm_tipo_config[] = "ID0";
$tdataadm_tipo_config[".Keys"] = $tableKeysadm_tipo_config;


$tdataadm_tipo_config[".hideMobileList"] = array();




//	ID0
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID0";
	$fdata["GoodName"] = "ID0";
	$fdata["ownerTable"] = "adm_tipo_config";
	$fdata["Label"] = GetFieldLabel("adm_tipo_config","ID0");
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


	$tdataadm_tipo_config["ID0"] = $fdata;
		$tdataadm_tipo_config[".searchableFields"][] = "ID0";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "adm_tipo_config";
	$fdata["Label"] = GetFieldLabel("adm_tipo_config","id");
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


	$tdataadm_tipo_config["id"] = $fdata;
		$tdataadm_tipo_config[".searchableFields"][] = "id";
//	Texto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Texto";
	$fdata["GoodName"] = "Texto";
	$fdata["ownerTable"] = "adm_tipo_config";
	$fdata["Label"] = GetFieldLabel("adm_tipo_config","Texto");
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


	$tdataadm_tipo_config["Texto"] = $fdata;
		$tdataadm_tipo_config[".searchableFields"][] = "Texto";


$tables_data["adm_tipo_config"]=&$tdataadm_tipo_config;
$field_labels["adm_tipo_config"] = &$fieldLabelsadm_tipo_config;
$fieldToolTips["adm_tipo_config"] = &$fieldToolTipsadm_tipo_config;
$placeHolders["adm_tipo_config"] = &$placeHoldersadm_tipo_config;
$page_titles["adm_tipo_config"] = &$pageTitlesadm_tipo_config;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_tipo_config"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_tipo_config"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_tipo_config()
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
	"m_srcTableName" => "adm_tipo_config"
));

$proto6["m_sql"] = "ID0";
$proto6["m_srcTableName"] = "adm_tipo_config";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "adm_tipo_config",
	"m_srcTableName" => "adm_tipo_config"
));

$proto8["m_sql"] = "id";
$proto8["m_srcTableName"] = "adm_tipo_config";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Texto",
	"m_strTable" => "adm_tipo_config",
	"m_srcTableName" => "adm_tipo_config"
));

$proto10["m_sql"] = "Texto";
$proto10["m_srcTableName"] = "adm_tipo_config";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "adm_tipo_config";
$proto13["m_srcTableName"] = "adm_tipo_config";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID0";
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "Texto";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "adm_tipo_config";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "adm_tipo_config";
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
$proto0["m_srcTableName"]="adm_tipo_config";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_tipo_config = createSqlQuery_adm_tipo_config();


	
		;

			

$tdataadm_tipo_config[".sqlquery"] = $queryData_adm_tipo_config;



$tableEvents["adm_tipo_config"] = new eventsBase;
$tdataadm_tipo_config[".hasEvents"] = false;

?>