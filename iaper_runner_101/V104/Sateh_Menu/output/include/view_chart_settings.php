<?php
$tdataview_chart = array();
$tdataview_chart[".searchableFields"] = array();
$tdataview_chart[".ShortName"] = "view_chart";
$tdataview_chart[".OwnerID"] = "";
$tdataview_chart[".OriginalTable"] = "View Chart";


$tdataview_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"]}" );
$tdataview_chart[".originalPagesByType"] = $tdataview_chart[".pagesByType"];
$tdataview_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"]}" ) );
$tdataview_chart[".originalPages"] = $tdataview_chart[".pages"];
$tdataview_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\"}" );
$tdataview_chart[".originalDefaultPages"] = $tdataview_chart[".defaultPages"];

//	field labels
$fieldLabelsview_chart = array();
$fieldToolTipsview_chart = array();
$pageTitlesview_chart = array();
$placeHoldersview_chart = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsview_chart["Portuguese(Brazil)"] = array();
	$fieldToolTipsview_chart["Portuguese(Brazil)"] = array();
	$placeHoldersview_chart["Portuguese(Brazil)"] = array();
	$pageTitlesview_chart["Portuguese(Brazil)"] = array();
	if (count($fieldToolTipsview_chart["Portuguese(Brazil)"]))
		$tdataview_chart[".isUseToolTips"] = true;
}


	$tdataview_chart[".NCSearch"] = true;

	$tdataview_chart[".ChartRefreshTime"] = 0;


$tdataview_chart[".shortTableName"] = "view_chart";
$tdataview_chart[".nSecOptions"] = 0;

$tdataview_chart[".mainTableOwnerID"] = "";
$tdataview_chart[".entityType"] = 9;
$tdataview_chart[".connId"] = "iaperdbatrobb0254publiccloudco";


$tdataview_chart[".strOriginalTableName"] = "View Chart";

	



$tdataview_chart[".showAddInPopup"] = false;

$tdataview_chart[".showEditInPopup"] = false;

$tdataview_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataview_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataview_chart[".listAjax"] = false;
//	temporary
//$tdataview_chart[".listAjax"] = false;

	$tdataview_chart[".audit"] = false;

	$tdataview_chart[".locking"] = false;


$pages = $tdataview_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataview_chart[".edit"] = true;
	$tdataview_chart[".afterEditAction"] = 1;
	$tdataview_chart[".closePopupAfterEdit"] = 1;
	$tdataview_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataview_chart[".add"] = true;
$tdataview_chart[".afterAddAction"] = 1;
$tdataview_chart[".closePopupAfterAdd"] = 1;
$tdataview_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataview_chart[".list"] = true;
}



$tdataview_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataview_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataview_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataview_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataview_chart[".printFriendly"] = true;
}



$tdataview_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataview_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataview_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataview_chart[".isUseAjaxSuggest"] = false;




			

$tdataview_chart[".ajaxCodeSnippetAdded"] = false;

$tdataview_chart[".buttonsAdded"] = false;

$tdataview_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdataview_chart[".isUseTimeForSearch"] = false;


$tdataview_chart[".badgeColor"] = "8FBC8B";


$tdataview_chart[".allSearchFields"] = array();
$tdataview_chart[".filterFields"] = array();
$tdataview_chart[".requiredSearchFields"] = array();




$tdataview_chart[".tableType"] = "chart";

$tdataview_chart[".printerPageOrientation"] = 0;
$tdataview_chart[".nPrinterPageScale"] = 100;

$tdataview_chart[".nPrinterSplitRecords"] = 40;

$tdataview_chart[".geocodingEnabled"] = false;



// chart settings
$tdataview_chart[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataview_chart[".strOrderBy"] = $tstrOrderBy;

$tdataview_chart[".orderindexes"] = array();


$tdataview_chart[".sqlHead"] = "";
$tdataview_chart[".sqlFrom"] = "";
$tdataview_chart[".sqlWhereExpr"] = "";
$tdataview_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataview_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataview_chart[".arrGroupsPerPage"] = $arrGPP;

$tdataview_chart[".highlightSearchResults"] = true;

$tableKeysview_chart = array();
$tdataview_chart[".Keys"] = $tableKeysview_chart;


$tdataview_chart[".hideMobileList"] = array();





$tdataview_chart[".chartLabelField"] = "";
$tdataview_chart[".chartSeries"] = array();
	$tdataview_chart[".chartXml"] = "";

$tables_data["View Chart"]=&$tdataview_chart;
$field_labels["View_Chart"] = &$fieldLabelsview_chart;
$fieldToolTips["View_Chart"] = &$fieldToolTipsview_chart;
$placeHolders["View_Chart"] = &$placeHoldersview_chart;
$page_titles["View_Chart"] = &$pageTitlesview_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["View Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["View Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/view_chart_ops.php" ) );



	
		;



$tdataview_chart[".sqlquery"] = $queryData_view_chart;



$tableEvents["View Chart"] = new eventsBase;
$tdataview_chart[".hasEvents"] = false;

?>