<?php
$tdataplanos = array();
$tdataplanos[".searchableFields"] = array();
$tdataplanos[".ShortName"] = "planos";
$tdataplanos[".OwnerID"] = "";
$tdataplanos[".OriginalTable"] = "planos";


$tdataplanos[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataplanos[".originalPagesByType"] = $tdataplanos[".pagesByType"];
$tdataplanos[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataplanos[".originalPages"] = $tdataplanos[".pages"];
$tdataplanos[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataplanos[".originalDefaultPages"] = $tdataplanos[".defaultPages"];

//	field labels
$fieldLabelsplanos = array();
$fieldToolTipsplanos = array();
$pageTitlesplanos = array();
$placeHoldersplanos = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsplanos["Portuguese(Brazil)"] = array();
	$fieldToolTipsplanos["Portuguese(Brazil)"] = array();
	$placeHoldersplanos["Portuguese(Brazil)"] = array();
	$pageTitlesplanos["Portuguese(Brazil)"] = array();
	$fieldLabelsplanos["Portuguese(Brazil)"]["idPlano"] = "Plano";
	$fieldToolTipsplanos["Portuguese(Brazil)"]["idPlano"] = "";
	$placeHoldersplanos["Portuguese(Brazil)"]["idPlano"] = "";
	$fieldLabelsplanos["Portuguese(Brazil)"]["Plano"] = "Plano";
	$fieldToolTipsplanos["Portuguese(Brazil)"]["Plano"] = "";
	$placeHoldersplanos["Portuguese(Brazil)"]["Plano"] = "";
	$fieldLabelsplanos["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsplanos["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersplanos["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsplanos["Portuguese(Brazil)"]["Quantidade_Dia"] = "Quantidade Dia";
	$fieldToolTipsplanos["Portuguese(Brazil)"]["Quantidade_Dia"] = "";
	$placeHoldersplanos["Portuguese(Brazil)"]["Quantidade_Dia"] = "";
	$fieldLabelsplanos["Portuguese(Brazil)"]["Combo"] = "Combo";
	$fieldToolTipsplanos["Portuguese(Brazil)"]["Combo"] = "";
	$placeHoldersplanos["Portuguese(Brazil)"]["Combo"] = "";
	if (count($fieldToolTipsplanos["Portuguese(Brazil)"]))
		$tdataplanos[".isUseToolTips"] = true;
}


	$tdataplanos[".NCSearch"] = true;



$tdataplanos[".shortTableName"] = "planos";
$tdataplanos[".nSecOptions"] = 0;

$tdataplanos[".mainTableOwnerID"] = "";
$tdataplanos[".entityType"] = 0;
$tdataplanos[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataplanos[".strOriginalTableName"] = "planos";

	



$tdataplanos[".showAddInPopup"] = false;

$tdataplanos[".showEditInPopup"] = false;

$tdataplanos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataplanos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataplanos[".listAjax"] = false;
//	temporary
//$tdataplanos[".listAjax"] = false;

	$tdataplanos[".audit"] = false;

	$tdataplanos[".locking"] = false;


$pages = $tdataplanos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataplanos[".edit"] = true;
	$tdataplanos[".afterEditAction"] = 1;
	$tdataplanos[".closePopupAfterEdit"] = 1;
	$tdataplanos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataplanos[".add"] = true;
$tdataplanos[".afterAddAction"] = 1;
$tdataplanos[".closePopupAfterAdd"] = 1;
$tdataplanos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataplanos[".list"] = true;
}



$tdataplanos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataplanos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataplanos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataplanos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataplanos[".printFriendly"] = true;
}



$tdataplanos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataplanos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataplanos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataplanos[".isUseAjaxSuggest"] = true;

$tdataplanos[".rowHighlite"] = true;





$tdataplanos[".ajaxCodeSnippetAdded"] = false;

$tdataplanos[".buttonsAdded"] = false;

$tdataplanos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataplanos[".isUseTimeForSearch"] = false;


$tdataplanos[".badgeColor"] = "E8926F";


$tdataplanos[".allSearchFields"] = array();
$tdataplanos[".filterFields"] = array();
$tdataplanos[".requiredSearchFields"] = array();

$tdataplanos[".googleLikeFields"] = array();
$tdataplanos[".googleLikeFields"][] = "idPlano";
$tdataplanos[".googleLikeFields"][] = "Plano";
$tdataplanos[".googleLikeFields"][] = "Valor";
$tdataplanos[".googleLikeFields"][] = "Quantidade_Dia";
$tdataplanos[".googleLikeFields"][] = "Combo";



$tdataplanos[".tableType"] = "list";

$tdataplanos[".printerPageOrientation"] = 0;
$tdataplanos[".nPrinterPageScale"] = 100;

$tdataplanos[".nPrinterSplitRecords"] = 40;

$tdataplanos[".geocodingEnabled"] = false;










$tdataplanos[".pageSize"] = 20;

$tdataplanos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataplanos[".strOrderBy"] = $tstrOrderBy;

$tdataplanos[".orderindexes"] = array();


$tdataplanos[".sqlHead"] = "SELECT idPlano,  	Plano,  	Valor,  	Quantidade_Dia,    Plano  as Combo";
$tdataplanos[".sqlFrom"] = "FROM planos";
$tdataplanos[".sqlWhereExpr"] = "";
$tdataplanos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataplanos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataplanos[".arrGroupsPerPage"] = $arrGPP;

$tdataplanos[".highlightSearchResults"] = true;

$tableKeysplanos = array();
$tableKeysplanos[] = "idPlano";
$tdataplanos[".Keys"] = $tableKeysplanos;


$tdataplanos[".hideMobileList"] = array();




//	idPlano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idPlano";
	$fdata["GoodName"] = "idPlano";
	$fdata["ownerTable"] = "planos";
	$fdata["Label"] = GetFieldLabel("planos","idPlano");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idPlano";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idPlano";

	
	
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


	$tdataplanos["idPlano"] = $fdata;
		$tdataplanos[".searchableFields"][] = "idPlano";
//	Plano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Plano";
	$fdata["GoodName"] = "Plano";
	$fdata["ownerTable"] = "planos";
	$fdata["Label"] = GetFieldLabel("planos","Plano");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Plano";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Plano";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdataplanos["Plano"] = $fdata;
		$tdataplanos[".searchableFields"][] = "Plano";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "planos";
	$fdata["Label"] = GetFieldLabel("planos","Valor");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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


	$tdataplanos["Valor"] = $fdata;
		$tdataplanos[".searchableFields"][] = "Valor";
//	Quantidade_Dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade_Dia";
	$fdata["GoodName"] = "Quantidade_Dia";
	$fdata["ownerTable"] = "planos";
	$fdata["Label"] = GetFieldLabel("planos","Quantidade_Dia");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Quantidade_Dia";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Quantidade_Dia";

	
	
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


	$tdataplanos["Quantidade_Dia"] = $fdata;
		$tdataplanos[".searchableFields"][] = "Quantidade_Dia";
//	Combo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Combo";
	$fdata["GoodName"] = "Combo";
	$fdata["ownerTable"] = "planos";
	$fdata["Label"] = GetFieldLabel("planos","Combo");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Plano";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Plano";

	
	
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


	$tdataplanos["Combo"] = $fdata;
		$tdataplanos[".searchableFields"][] = "Combo";


$tables_data["planos"]=&$tdataplanos;
$field_labels["planos"] = &$fieldLabelsplanos;
$fieldToolTips["planos"] = &$fieldToolTipsplanos;
$placeHolders["planos"] = &$placeHoldersplanos;
$page_titles["planos"] = &$pageTitlesplanos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["planos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["planos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_planos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idPlano,  	Plano,  	Valor,  	Quantidade_Dia,    Plano  as Combo";
$proto0["m_strFrom"] = "FROM planos";
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
	"m_strName" => "idPlano",
	"m_strTable" => "planos",
	"m_srcTableName" => "planos"
));

$proto6["m_sql"] = "idPlano";
$proto6["m_srcTableName"] = "planos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Plano",
	"m_strTable" => "planos",
	"m_srcTableName" => "planos"
));

$proto8["m_sql"] = "Plano";
$proto8["m_srcTableName"] = "planos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "planos",
	"m_srcTableName" => "planos"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "planos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade_Dia",
	"m_strTable" => "planos",
	"m_srcTableName" => "planos"
));

$proto12["m_sql"] = "Quantidade_Dia";
$proto12["m_srcTableName"] = "planos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Plano",
	"m_strTable" => "planos",
	"m_srcTableName" => "planos"
));

$proto14["m_sql"] = "Plano";
$proto14["m_srcTableName"] = "planos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Combo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "planos";
$proto17["m_srcTableName"] = "planos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idPlano";
$proto17["m_columns"][] = "Plano";
$proto17["m_columns"][] = "Valor";
$proto17["m_columns"][] = "Quantidade_Dia";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "planos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "planos";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="planos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_planos = createSqlQuery_planos();


	
		;

					

$tdataplanos[".sqlquery"] = $queryData_planos;



$tableEvents["planos"] = new eventsBase;
$tdataplanos[".hasEvents"] = false;

?>