<?php
$tdataadm_planos1 = array();
$tdataadm_planos1[".searchableFields"] = array();
$tdataadm_planos1[".ShortName"] = "adm_planos1";
$tdataadm_planos1[".OwnerID"] = "";
$tdataadm_planos1[".OriginalTable"] = "adm_planos";


$tdataadm_planos1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataadm_planos1[".originalPagesByType"] = $tdataadm_planos1[".pagesByType"];
$tdataadm_planos1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataadm_planos1[".originalPages"] = $tdataadm_planos1[".pages"];
$tdataadm_planos1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataadm_planos1[".originalDefaultPages"] = $tdataadm_planos1[".defaultPages"];

//	field labels
$fieldLabelsadm_planos1 = array();
$fieldToolTipsadm_planos1 = array();
$pageTitlesadm_planos1 = array();
$placeHoldersadm_planos1 = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsadm_planos1["Portuguese(Brazil)"] = array();
	$fieldToolTipsadm_planos1["Portuguese(Brazil)"] = array();
	$placeHoldersadm_planos1["Portuguese(Brazil)"] = array();
	$pageTitlesadm_planos1["Portuguese(Brazil)"] = array();
	$fieldLabelsadm_planos1["Portuguese(Brazil)"]["idPlano"] = "Plano";
	$fieldToolTipsadm_planos1["Portuguese(Brazil)"]["idPlano"] = "";
	$placeHoldersadm_planos1["Portuguese(Brazil)"]["idPlano"] = "";
	$fieldLabelsadm_planos1["Portuguese(Brazil)"]["Plano"] = "Plano";
	$fieldToolTipsadm_planos1["Portuguese(Brazil)"]["Plano"] = "";
	$placeHoldersadm_planos1["Portuguese(Brazil)"]["Plano"] = "";
	$fieldLabelsadm_planos1["Portuguese(Brazil)"]["Valor"] = "Valor";
	$fieldToolTipsadm_planos1["Portuguese(Brazil)"]["Valor"] = "";
	$placeHoldersadm_planos1["Portuguese(Brazil)"]["Valor"] = "";
	$fieldLabelsadm_planos1["Portuguese(Brazil)"]["Quantidade_Dia"] = "Quantidade Dia";
	$fieldToolTipsadm_planos1["Portuguese(Brazil)"]["Quantidade_Dia"] = "";
	$placeHoldersadm_planos1["Portuguese(Brazil)"]["Quantidade_Dia"] = "";
	$fieldLabelsadm_planos1["Portuguese(Brazil)"]["Combo"] = "Combo";
	$fieldToolTipsadm_planos1["Portuguese(Brazil)"]["Combo"] = "";
	$placeHoldersadm_planos1["Portuguese(Brazil)"]["Combo"] = "";
	if (count($fieldToolTipsadm_planos1["Portuguese(Brazil)"]))
		$tdataadm_planos1[".isUseToolTips"] = true;
}


	$tdataadm_planos1[".NCSearch"] = true;



$tdataadm_planos1[".shortTableName"] = "adm_planos1";
$tdataadm_planos1[".nSecOptions"] = 0;

$tdataadm_planos1[".mainTableOwnerID"] = "";
$tdataadm_planos1[".entityType"] = 0;
$tdataadm_planos1[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataadm_planos1[".strOriginalTableName"] = "adm_planos";

	



$tdataadm_planos1[".showAddInPopup"] = false;

$tdataadm_planos1[".showEditInPopup"] = false;

$tdataadm_planos1[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataadm_planos1[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataadm_planos1[".listAjax"] = false;
//	temporary
//$tdataadm_planos1[".listAjax"] = false;

	$tdataadm_planos1[".audit"] = false;

	$tdataadm_planos1[".locking"] = false;


$pages = $tdataadm_planos1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataadm_planos1[".edit"] = true;
	$tdataadm_planos1[".afterEditAction"] = 1;
	$tdataadm_planos1[".closePopupAfterEdit"] = 1;
	$tdataadm_planos1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataadm_planos1[".add"] = true;
$tdataadm_planos1[".afterAddAction"] = 1;
$tdataadm_planos1[".closePopupAfterAdd"] = 1;
$tdataadm_planos1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataadm_planos1[".list"] = true;
}



$tdataadm_planos1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataadm_planos1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataadm_planos1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataadm_planos1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataadm_planos1[".printFriendly"] = true;
}



$tdataadm_planos1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataadm_planos1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataadm_planos1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataadm_planos1[".isUseAjaxSuggest"] = false;

$tdataadm_planos1[".rowHighlite"] = true;



						

$tdataadm_planos1[".ajaxCodeSnippetAdded"] = false;

$tdataadm_planos1[".buttonsAdded"] = false;

$tdataadm_planos1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataadm_planos1[".isUseTimeForSearch"] = false;


$tdataadm_planos1[".badgeColor"] = "E8926F";


$tdataadm_planos1[".allSearchFields"] = array();
$tdataadm_planos1[".filterFields"] = array();
$tdataadm_planos1[".requiredSearchFields"] = array();

$tdataadm_planos1[".googleLikeFields"] = array();
$tdataadm_planos1[".googleLikeFields"][] = "idPlano";
$tdataadm_planos1[".googleLikeFields"][] = "Plano";
$tdataadm_planos1[".googleLikeFields"][] = "Valor";
$tdataadm_planos1[".googleLikeFields"][] = "Quantidade_Dia";
$tdataadm_planos1[".googleLikeFields"][] = "Combo";



$tdataadm_planos1[".tableType"] = "list";

$tdataadm_planos1[".printerPageOrientation"] = 0;
$tdataadm_planos1[".nPrinterPageScale"] = 100;

$tdataadm_planos1[".nPrinterSplitRecords"] = 40;

$tdataadm_planos1[".geocodingEnabled"] = false;










$tdataadm_planos1[".pageSize"] = 20;

$tdataadm_planos1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataadm_planos1[".strOrderBy"] = $tstrOrderBy;

$tdataadm_planos1[".orderindexes"] = array();


$tdataadm_planos1[".sqlHead"] = "SELECT idPlano,  	Plano,  	Valor,  	Quantidade_Dia,    Plano  as Combo";
$tdataadm_planos1[".sqlFrom"] = "FROM adm_planos";
$tdataadm_planos1[".sqlWhereExpr"] = "";
$tdataadm_planos1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataadm_planos1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataadm_planos1[".arrGroupsPerPage"] = $arrGPP;


$tableKeysadm_planos1 = array();
$tableKeysadm_planos1[] = "idPlano";
$tdataadm_planos1[".Keys"] = $tableKeysadm_planos1;


$tdataadm_planos1[".hideMobileList"] = array();




//	idPlano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idPlano";
	$fdata["GoodName"] = "idPlano";
	$fdata["ownerTable"] = "adm_planos";
	$fdata["Label"] = GetFieldLabel("adm_planos","idPlano");
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


	$tdataadm_planos1["idPlano"] = $fdata;
		$tdataadm_planos1[".searchableFields"][] = "idPlano";
//	Plano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Plano";
	$fdata["GoodName"] = "Plano";
	$fdata["ownerTable"] = "adm_planos";
	$fdata["Label"] = GetFieldLabel("adm_planos","Plano");
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


	$tdataadm_planos1["Plano"] = $fdata;
		$tdataadm_planos1[".searchableFields"][] = "Plano";
//	Valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Valor";
	$fdata["GoodName"] = "Valor";
	$fdata["ownerTable"] = "adm_planos";
	$fdata["Label"] = GetFieldLabel("adm_planos","Valor");
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


	$tdataadm_planos1["Valor"] = $fdata;
		$tdataadm_planos1[".searchableFields"][] = "Valor";
//	Quantidade_Dia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Quantidade_Dia";
	$fdata["GoodName"] = "Quantidade_Dia";
	$fdata["ownerTable"] = "adm_planos";
	$fdata["Label"] = GetFieldLabel("adm_planos","Quantidade_Dia");
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


	$tdataadm_planos1["Quantidade_Dia"] = $fdata;
		$tdataadm_planos1[".searchableFields"][] = "Quantidade_Dia";
//	Combo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Combo";
	$fdata["GoodName"] = "Combo";
	$fdata["ownerTable"] = "adm_planos";
	$fdata["Label"] = GetFieldLabel("adm_planos","Combo");
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


	$tdataadm_planos1["Combo"] = $fdata;
		$tdataadm_planos1[".searchableFields"][] = "Combo";


$tables_data["adm_planos"]=&$tdataadm_planos1;
$field_labels["adm_planos"] = &$fieldLabelsadm_planos1;
$fieldToolTips["adm_planos"] = &$fieldToolTipsadm_planos1;
$placeHolders["adm_planos"] = &$placeHoldersadm_planos1;
$page_titles["adm_planos"] = &$pageTitlesadm_planos1;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["adm_planos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["adm_planos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_adm_planos1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idPlano,  	Plano,  	Valor,  	Quantidade_Dia,    Plano  as Combo";
$proto0["m_strFrom"] = "FROM adm_planos";
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
	"m_strTable" => "adm_planos",
	"m_srcTableName" => "adm_planos"
));

$proto6["m_sql"] = "idPlano";
$proto6["m_srcTableName"] = "adm_planos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Plano",
	"m_strTable" => "adm_planos",
	"m_srcTableName" => "adm_planos"
));

$proto8["m_sql"] = "Plano";
$proto8["m_srcTableName"] = "adm_planos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Valor",
	"m_strTable" => "adm_planos",
	"m_srcTableName" => "adm_planos"
));

$proto10["m_sql"] = "Valor";
$proto10["m_srcTableName"] = "adm_planos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Quantidade_Dia",
	"m_strTable" => "adm_planos",
	"m_srcTableName" => "adm_planos"
));

$proto12["m_sql"] = "Quantidade_Dia";
$proto12["m_srcTableName"] = "adm_planos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Plano",
	"m_strTable" => "adm_planos",
	"m_srcTableName" => "adm_planos"
));

$proto14["m_sql"] = "Plano";
$proto14["m_srcTableName"] = "adm_planos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "Combo";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "adm_planos";
$proto17["m_srcTableName"] = "adm_planos";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "idPlano";
$proto17["m_columns"][] = "Plano";
$proto17["m_columns"][] = "Valor";
$proto17["m_columns"][] = "Quantidade_Dia";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "adm_planos";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "adm_planos";
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
$proto0["m_srcTableName"]="adm_planos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_adm_planos1 = createSqlQuery_adm_planos1();


	
		;

					

$tdataadm_planos1[".sqlquery"] = $queryData_adm_planos1;



$tableEvents["adm_planos"] = new eventsBase;
$tdataadm_planos1[".hasEvents"] = false;

?>