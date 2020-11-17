<?php
$tdataadm_tipousuario = array();
$tdataadm_tipousuario[".searchableFields"] = array();
$tdataadm_tipousuario[".ShortName"] = "adm_tipousuario";
$tdataadm_tipousuario[".OwnerID"] = "";
$tdataadm_tipousuario[".OriginalTable"] = "adm_tipousuario";


$tdataadm_tipousuario[".pagesByType"] = my_json_decode( "{}" );
$tdataadm_tipousuario[".originalPagesByType"] = $tdataadm_tipousuario[".pagesByType"];
$tdataadm_tipousuario[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataadm_tipousuario[".originalPages"] = $tdataadm_tipousuario[".pages"];
$tdataadm_tipousuario[".defaultPages"] = my_json_decode( "{}" );
$tdataadm_tipousuario[".originalDefaultPages"] = $tdataadm_tipousuario[".defaultPages"];

//	field labels
$fieldLabelsadm_tipousuario = array();
$fieldToolTipsadm_tipousuario = array();
$pageTitlesadm_tipousuario = array();
$placeHoldersadm_tipousuario = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_tipousuario["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_tipousuario["Portuguese(Brazil)"] = array();
	$placeHoldersadm_tipousuario["Portuguese(Brazil)"] = array();
	$pageTitlesadm_tipousuario["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_tipousuario["Portuguese(Brazil)"]["idtipo"] = "idTipo";
	$fieldToolTipsadm_tipousuario["Portuguese(Brazil)"]["idtipo"] = "";
	$placeHoldersadm_tipousuario["Portuguese(Brazil)"]["idtipo"] = "";
	$fieldLabelsadm_tipousuario["Portuguese(Brazil)"]["Tipo"] = "Tipo";
	$fieldToolTipsadm_tipousuario["Portuguese(Brazil)"]["Tipo"] = "";
	$placeHoldersadm_tipousuario["Portuguese(Brazil)"]["Tipo"] = "";
	if (count($fieldToolTipsadm_tipousuario["Portuguese(Brazil)"]))
		$tdataadm_tipousuario[".isUseToolTips"] = true;
}


	$tdataadm_tipousuario[".NCSearch"] = true;



$tdataadm_tipousuario[".shortTableName"] = "adm_tipousuario";
$tdataadm_tipousuario[".nSecOptions"] = 0;

$tdataadm_tipousuario[".mainTableOwnerID"] = "";
$tdataadm_tipousuario[".entityType"] = 0;
$tdataadm_tipousuario[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_tipousuario[".strOriginalTableName"] = "adm_tipousuario";

	



$tdataadm_tipousuario[".showAddInPopup"] = false;

$tdataadm_tipousuario[".showEditInPopup"] = false;

$tdataadm_tipousuario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_tipousuario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_tipousuario[".listAjax"] = false;
//	temporary
//$tdataadm_tipousuario[".listAjax"] = false;

	$tdataadm_tipousuario[".audit"] = false;

	$tdataadm_tipousuario[".locking"] = false;


$pages = $tdataadm_tipousuario[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_tipousuario[".edit"] = true;
	$tdataadm_tipousuario[".afterEditAction"] = 1;
	$tdataadm_tipousuario[".closePopupAfterEdit"] = 1;
	$tdataadm_tipousuario[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_tipousuario[".add"] = true;
$tdataadm_tipousuario[".afterAddAction"] = 1;
$tdataadm_tipousuario[".closePopupAfterAdd"] = 1;
$tdataadm_tipousuario[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_tipousuario[".list"] = true;
}



$tdataadm_tipousuario[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_tipousuario[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_tipousuario[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_tipousuario[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_tipousuario[".printFriendly"] = true;
}



$tdataadm_tipousuario[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_tipousuario[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_tipousuario[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_tipousuario[".isUseAjaxSuggest"] = false;

$tdataadm_tipousuario[".rowHighlite"] = true;





$tdataadm_tipousuario[".ajaxCodeSnippetAdded"] = false;

$tdataadm_tipousuario[".buttonsAdded"] = false;

$tdataadm_tipousuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_tipousuario[".isUseTimeForSearch"] = false;


$tdataadm_tipousuario[".badgeColor"] = "5F9EA0";


$tdataadm_tipousuario[".allSearchFields"] = array();
$tdataadm_tipousuario[".filterFields"] = array();
$tdataadm_tipousuario[".requiredSearchFields"] = array();

$tdataadm_tipousuario[".googleLikeFields"] = array();
$tdataadm_tipousuario[".googleLikeFields"][] = "idtipo";
$tdataadm_tipousuario[".googleLikeFields"][] = "Tipo";



$tdataadm_tipousuario[".tableType"] = "list";

$tdataadm_tipousuario[".printerPageOrientation"] = 0;
$tdataadm_tipousuario[".nPrinterPageScale"] = 100;

$tdataadm_tipousuario[".nPrinterSplitRecords"] = 40;

$tdataadm_tipousuario[".geocodingEnabled"] = false;










$tdataadm_tipousuario[".pageSize"] = 20;

$tdataadm_tipousuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_tipousuario[".strOrderBy"] = $tstrOrderBy;

$tdataadm_tipousuario[".orderindexes"] = array();


$tdataadm_tipousuario[".sqlHead"] = "SELECT idtipo,  	Tipo";
$tdataadm_tipousuario[".sqlFrom"] = "FROM adm_tipousuario";
$tdataadm_tipousuario[".sqlWhereExpr"] = "";
$tdataadm_tipousuario[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_tipousuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_tipousuario[".arrGroupsPerPage"] = $arrGPP;


$tableKeysadm_tipousuario = array();
$tableKeysadm_tipousuario[] = "idtipo";
$tdataadm_tipousuario[".Keys"] = $tableKeysadm_tipousuario;


$tdataadm_tipousuario[".hideMobileList"] = array();




//	idtipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idtipo";
	$fdata["GoodName"] = "idtipo";
	$fdata["ownerTable"] = "adm_tipousuario";
	$fdata["Label"] = GetFieldLabel("adm_tipousuario","idtipo");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idtipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idtipo";

	
	
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


	$tdataadm_tipousuario["idtipo"] = $fdata;
		$tdataadm_tipousuario[".searchableFields"][] = "idtipo";
//	Tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Tipo";
	$fdata["GoodName"] = "Tipo";
	$fdata["ownerTable"] = "adm_tipousuario";
	$fdata["Label"] = GetFieldLabel("adm_tipousuario","Tipo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Tipo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Tipo";

	
	
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


	$tdataadm_tipousuario["Tipo"] = $fdata;
		$tdataadm_tipousuario[".searchableFields"][] = "Tipo";


$tables_data["adm_tipousuario"]=&$tdataadm_tipousuario;
$field_labels["adm_tipousuario"] = &$fieldLabelsadm_tipousuario;
$fieldToolTips["adm_tipousuario"] = &$fieldToolTipsadm_tipousuario;
$placeHolders["adm_tipousuario"] = &$placeHoldersadm_tipousuario;
$page_titles["adm_tipousuario"] = &$pageTitlesadm_tipousuario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_tipousuario"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_tipousuario"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_tipousuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idtipo,  	Tipo";
$proto0["m_strFrom"] = "FROM adm_tipousuario";
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
	"m_strName" => "idtipo",
	"m_strTable" => "adm_tipousuario",
	"m_srcTableName" => "adm_tipousuario"
));

$proto6["m_sql"] = "idtipo";
$proto6["m_srcTableName"] = "adm_tipousuario";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Tipo",
	"m_strTable" => "adm_tipousuario",
	"m_srcTableName" => "adm_tipousuario"
));

$proto8["m_sql"] = "Tipo";
$proto8["m_srcTableName"] = "adm_tipousuario";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "adm_tipousuario";
$proto11["m_srcTableName"] = "adm_tipousuario";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "idtipo";
$proto11["m_columns"][] = "Tipo";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "adm_tipousuario";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "adm_tipousuario";
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
$proto0["m_srcTableName"]="adm_tipousuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_tipousuario = createSqlQuery_adm_tipousuario();


	
		;

		

$tdataadm_tipousuario[".sqlquery"] = $queryData_adm_tipousuario;



$tableEvents["adm_tipousuario"] = new eventsBase;
$tdataadm_tipousuario[".hasEvents"] = false;

?>