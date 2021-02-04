<?php
$tdataadm_parametros_config = array();
$tdataadm_parametros_config[".searchableFields"] = array();
$tdataadm_parametros_config[".ShortName"] = "adm_parametros_config";
$tdataadm_parametros_config[".OwnerID"] = "";
$tdataadm_parametros_config[".OriginalTable"] = "adm_parametros_config";


$tdataadm_parametros_config[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_parametros_config[".originalPagesByType"] = $tdataadm_parametros_config[".pagesByType"];
$tdataadm_parametros_config[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_parametros_config[".originalPages"] = $tdataadm_parametros_config[".pages"];
$tdataadm_parametros_config[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_parametros_config[".originalDefaultPages"] = $tdataadm_parametros_config[".defaultPages"];

//	field labels
$fieldLabelsadm_parametros_config = array();
$fieldToolTipsadm_parametros_config = array();
$pageTitlesadm_parametros_config = array();
$placeHoldersadm_parametros_config = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_parametros_config["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_parametros_config["Portuguese(Brazil)"] = array();
	$placeHoldersadm_parametros_config["Portuguese(Brazil)"] = array();
	$pageTitlesadm_parametros_config["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_parametros_config["Portuguese(Brazil)"]["idParametros"] = "Id Parametros";
	$fieldToolTipsadm_parametros_config["Portuguese(Brazil)"]["idParametros"] = "";
	$placeHoldersadm_parametros_config["Portuguese(Brazil)"]["idParametros"] = "";
	$fieldLabelsadm_parametros_config["Portuguese(Brazil)"]["Chave"] = "Chave";
	$fieldToolTipsadm_parametros_config["Portuguese(Brazil)"]["Chave"] = "";
	$placeHoldersadm_parametros_config["Portuguese(Brazil)"]["Chave"] = "";
	$fieldLabelsadm_parametros_config["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsadm_parametros_config["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersadm_parametros_config["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsadm_parametros_config["Portuguese(Brazil)"]["Grupo"] = "Grupo";
	$fieldToolTipsadm_parametros_config["Portuguese(Brazil)"]["Grupo"] = "";
	$placeHoldersadm_parametros_config["Portuguese(Brazil)"]["Grupo"] = "";
	if (count($fieldToolTipsadm_parametros_config["Portuguese(Brazil)"]))
		$tdataadm_parametros_config[".isUseToolTips"] = true;
}


	$tdataadm_parametros_config[".NCSearch"] = true;



$tdataadm_parametros_config[".shortTableName"] = "adm_parametros_config";
$tdataadm_parametros_config[".nSecOptions"] = 0;

$tdataadm_parametros_config[".mainTableOwnerID"] = "";
$tdataadm_parametros_config[".entityType"] = 0;
$tdataadm_parametros_config[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_parametros_config[".strOriginalTableName"] = "adm_parametros_config";

	



$tdataadm_parametros_config[".showAddInPopup"] = false;

$tdataadm_parametros_config[".showEditInPopup"] = false;

$tdataadm_parametros_config[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_parametros_config[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_parametros_config[".listAjax"] = false;
//	temporary
//$tdataadm_parametros_config[".listAjax"] = false;

	$tdataadm_parametros_config[".audit"] = false;

	$tdataadm_parametros_config[".locking"] = false;


$pages = $tdataadm_parametros_config[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_parametros_config[".edit"] = true;
	$tdataadm_parametros_config[".afterEditAction"] = 1;
	$tdataadm_parametros_config[".closePopupAfterEdit"] = 1;
	$tdataadm_parametros_config[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_parametros_config[".add"] = true;
$tdataadm_parametros_config[".afterAddAction"] = 1;
$tdataadm_parametros_config[".closePopupAfterAdd"] = 1;
$tdataadm_parametros_config[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_parametros_config[".list"] = true;
}



$tdataadm_parametros_config[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_parametros_config[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_parametros_config[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_parametros_config[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_parametros_config[".printFriendly"] = true;
}



$tdataadm_parametros_config[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_parametros_config[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_parametros_config[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_parametros_config[".isUseAjaxSuggest"] = true;

$tdataadm_parametros_config[".rowHighlite"] = true;



						

$tdataadm_parametros_config[".ajaxCodeSnippetAdded"] = false;

$tdataadm_parametros_config[".buttonsAdded"] = false;

$tdataadm_parametros_config[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_parametros_config[".isUseTimeForSearch"] = false;


$tdataadm_parametros_config[".badgeColor"] = "E67349";


$tdataadm_parametros_config[".allSearchFields"] = array();
$tdataadm_parametros_config[".filterFields"] = array();
$tdataadm_parametros_config[".requiredSearchFields"] = array();

$tdataadm_parametros_config[".googleLikeFields"] = array();
$tdataadm_parametros_config[".googleLikeFields"][] = "idParametros";
$tdataadm_parametros_config[".googleLikeFields"][] = "Chave";
$tdataadm_parametros_config[".googleLikeFields"][] = "Valor";
$tdataadm_parametros_config[".googleLikeFields"][] = "Grupo";



$tdataadm_parametros_config[".tableType"] = "list";

$tdataadm_parametros_config[".printerPageOrientation"] = 0;
$tdataadm_parametros_config[".nPrinterPageScale"] = 100;

$tdataadm_parametros_config[".nPrinterSplitRecords"] = 40;

$tdataadm_parametros_config[".geocodingEnabled"] = false;










$tdataadm_parametros_config[".pageSize"] = 20;

$tdataadm_parametros_config[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_parametros_config[".strOrderBy"] = $tstrOrderBy;

$tdataadm_parametros_config[".orderindexes"] = array();


$tdataadm_parametros_config[".sqlHead"] = "SELECT idParametros,  	Chave,  	Valor,  	Grupo";
$tdataadm_parametros_config[".sqlFrom"] = "FROM adm_parametros_config";
$tdataadm_parametros_config[".sqlWhereExpr"] = "";
$tdataadm_parametros_config[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_parametros_config[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_parametros_config[".arrGroupsPerPage"] = $arrGPP;

$tdataadm_parametros_config[".highlightSearchResults"] = true;

$tableKeysadm_parametros_config = array();
$tableKeysadm_parametros_config[] = "idParametros";
$tdataadm_parametros_config[".Keys"] = $tableKeysadm_parametros_config;


$tdataadm_parametros_config[".hideMobileList"] = array();




//	idParametros
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idParametros";
	$fdata["GoodName"] = "idParametros";
	$fdata["ownerTable"] = "adm_parametros_config";
	$fdata["Label"] = GetFieldLabel("adm_parametros_config","idParametros");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idParametros";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idParametros";

	
	
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


	$tdataadm_parametros_config["idParametros"] = $fdata;
		$tdataadm_parametros_config[".searchableFields"][] = "idParametros";
//	Chave
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Chave";
	$fdata["GoodName"] = "Chave";
	$fdata["ownerTable"] = "adm_parametros_config";
	$fdata["Label"] = GetFieldLabel("adm_parametros_config","Chave");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Chave";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Chave";

	
	
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


	$tdataadm_parametros_config["Chave"] = $fdata;
		$tdataadm_parametros_config[".searchableFields"][] = "Chave";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "adm_parametros_config";
	$fdata["Label"] = GetFieldLabel("adm_parametros_config","Valor");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
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


	$tdataadm_parametros_config["Valor"] = $fdata;
		$tdataadm_parametros_config[".searchableFields"][] = "Valor";
//	Grupo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Grupo";
	$fdata["GoodName"] = "Grupo";
	$fdata["ownerTable"] = "adm_parametros_config";
	$fdata["Label"] = GetFieldLabel("adm_parametros_config","Grupo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Grupo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Grupo";

	
	
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


	$tdataadm_parametros_config["Grupo"] = $fdata;
		$tdataadm_parametros_config[".searchableFields"][] = "Grupo";


$tables_data["adm_parametros_config"]=&$tdataadm_parametros_config;
$field_labels["adm_parametros_config"] = &$fieldLabelsadm_parametros_config;
$fieldToolTips["adm_parametros_config"] = &$fieldToolTipsadm_parametros_config;
$placeHolders["adm_parametros_config"] = &$placeHoldersadm_parametros_config;
$page_titles["adm_parametros_config"] = &$pageTitlesadm_parametros_config;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_parametros_config"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_parametros_config"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_parametros_config()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idParametros,  	Chave,  	Valor,  	Grupo";
$proto0["m_strFrom"] = "FROM adm_parametros_config";
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
	"m_strName" => "idParametros",
	"m_strTable" => "adm_parametros_config",
	"m_srcTableName" => "adm_parametros_config"
));

$proto6["m_sql"] = "idParametros";
$proto6["m_srcTableName"] = "adm_parametros_config";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Chave",
	"m_strTable" => "adm_parametros_config",
	"m_srcTableName" => "adm_parametros_config"
));

$proto8["m_sql"] = "Chave";
$proto8["m_srcTableName"] = "adm_parametros_config";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "adm_parametros_config",
	"m_srcTableName" => "adm_parametros_config"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "adm_parametros_config";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Grupo",
	"m_strTable" => "adm_parametros_config",
	"m_srcTableName" => "adm_parametros_config"
));

$proto12["m_sql"] = "Grupo";
$proto12["m_srcTableName"] = "adm_parametros_config";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "adm_parametros_config";
$proto15["m_srcTableName"] = "adm_parametros_config";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "idParametros";
$proto15["m_columns"][] = "Chave";
$proto15["m_columns"][] = "Valor";
$proto15["m_columns"][] = "Grupo";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "adm_parametros_config";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "adm_parametros_config";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="adm_parametros_config";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_parametros_config = createSqlQuery_adm_parametros_config();


	
		;

				

$tdataadm_parametros_config[".sqlquery"] = $queryData_adm_parametros_config;



$tableEvents["adm_parametros_config"] = new eventsBase;
$tdataadm_parametros_config[".hasEvents"] = false;

?>