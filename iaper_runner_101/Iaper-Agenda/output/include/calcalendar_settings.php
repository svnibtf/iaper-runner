<?php
$tdatacalcalendar = array();
$tdatacalcalendar[".searchableFields"] = array();
$tdatacalcalendar[".ShortName"] = "calcalendar";
$tdatacalcalendar[".OwnerID"] = "OwnerID";
$tdatacalcalendar[".OriginalTable"] = "calcalendar";


$tdatacalcalendar[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalcalendar[".originalPagesByType"] = $tdatacalcalendar[".pagesByType"];
$tdatacalcalendar[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalcalendar[".originalPages"] = $tdatacalcalendar[".pages"];
$tdatacalcalendar[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalcalendar[".originalDefaultPages"] = $tdatacalcalendar[".defaultPages"];

//	field labels
$fieldLabelscalcalendar = array();
$fieldToolTipscalcalendar = array();
$pageTitlescalcalendar = array();
$placeHolderscalcalendar = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelscalcalendar["Portuguese(Brazil)"] = array();
	$fieldToolTipscalcalendar["Portuguese(Brazil)"] = array();
	$placeHolderscalcalendar["Portuguese(Brazil)"] = array();
	$pageTitlescalcalendar["Portuguese(Brazil)"] = array();
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["id"] = "Id";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["id"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["id"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["DateField"] = "Date Field";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["DateField"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["DateField"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["Description"] = "Description";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["Description"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["Description"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["Subject"] = "Subject";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["Subject"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["Subject"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["TimeField"] = "Time Field";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["TimeField"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["TimeField"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["EndTime"] = "End Time";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["EndTime"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["EndTime"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["DayEvent"] = "Day Event";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["DayEvent"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["DayEvent"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["EndDate"] = "End Date";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["EndDate"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["EndDate"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["Period"] = "Period";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["Period"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["Period"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["PeriodDays"] = "Period Days";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["PeriodDays"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["PeriodDays"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["Recurrence"] = "Recurrence";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["Recurrence"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["Recurrence"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["Category"] = "Category";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["Category"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["Category"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["OwnerID"] = "Owner ID";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["OwnerID"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["OwnerID"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["RecurType"] = "Recur Type";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["RecurType"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["RecurType"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["RecurOnValue"] = "Recur On Value";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["RecurOnValue"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["RecurOnValue"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["RecurAfterValue"] = "Recur After Value";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["RecurAfterValue"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["RecurAfterValue"] = "";
	$fieldLabelscalcalendar["Portuguese(Brazil)"]["Color"] = "Color";
	$fieldToolTipscalcalendar["Portuguese(Brazil)"]["Color"] = "";
	$placeHolderscalcalendar["Portuguese(Brazil)"]["Color"] = "";
	if (count($fieldToolTipscalcalendar["Portuguese(Brazil)"]))
		$tdatacalcalendar[".isUseToolTips"] = true;
}


	$tdatacalcalendar[".NCSearch"] = true;



$tdatacalcalendar[".shortTableName"] = "calcalendar";
$tdatacalcalendar[".nSecOptions"] = 2;

$tdatacalcalendar[".mainTableOwnerID"] = "OwnerID";
$tdatacalcalendar[".entityType"] = 0;
$tdatacalcalendar[".connId"] = "Calendar_at_localhost";


$tdatacalcalendar[".strOriginalTableName"] = "calcalendar";

	



$tdatacalcalendar[".showAddInPopup"] = false;

$tdatacalcalendar[".showEditInPopup"] = false;

$tdatacalcalendar[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalcalendar[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalcalendar[".listAjax"] = false;
//	temporary
//$tdatacalcalendar[".listAjax"] = false;

	$tdatacalcalendar[".audit"] = false;

	$tdatacalcalendar[".locking"] = false;


$pages = $tdatacalcalendar[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalcalendar[".edit"] = true;
	$tdatacalcalendar[".afterEditAction"] = 1;
	$tdatacalcalendar[".closePopupAfterEdit"] = 1;
	$tdatacalcalendar[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalcalendar[".add"] = true;
$tdatacalcalendar[".afterAddAction"] = 1;
$tdatacalcalendar[".closePopupAfterAdd"] = 1;
$tdatacalcalendar[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalcalendar[".list"] = true;
}



$tdatacalcalendar[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalcalendar[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalcalendar[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalcalendar[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalcalendar[".printFriendly"] = true;
}



$tdatacalcalendar[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalcalendar[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalcalendar[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalcalendar[".isUseAjaxSuggest"] = true;

$tdatacalcalendar[".rowHighlite"] = true;



												

$tdatacalcalendar[".ajaxCodeSnippetAdded"] = false;

$tdatacalcalendar[".buttonsAdded"] = false;

$tdatacalcalendar[".addPageEvents"] = true;

// use timepicker for search panel
$tdatacalcalendar[".isUseTimeForSearch"] = false;


$tdatacalcalendar[".badgeColor"] = "4682B4";


$tdatacalcalendar[".allSearchFields"] = array();
$tdatacalcalendar[".filterFields"] = array();
$tdatacalcalendar[".requiredSearchFields"] = array();

$tdatacalcalendar[".googleLikeFields"] = array();
$tdatacalcalendar[".googleLikeFields"][] = "Color";



$tdatacalcalendar[".tableType"] = "list";

$tdatacalcalendar[".printerPageOrientation"] = 0;
$tdatacalcalendar[".nPrinterPageScale"] = 100;

$tdatacalcalendar[".nPrinterSplitRecords"] = 40;

$tdatacalcalendar[".geocodingEnabled"] = false;










$tdatacalcalendar[".pageSize"] = 99999;

$tdatacalcalendar[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalcalendar[".strOrderBy"] = $tstrOrderBy;

$tdatacalcalendar[".orderindexes"] = array();


$tdatacalcalendar[".sqlHead"] = "select calcalendar.id,  calcalendar.DateField,  calcalendar.Description,  calcalendar.Subject,  calcalendar.TimeField,  calcalendar.EndTime,  calcalendar.DayEvent,  calcalendar.EndDate,  calcalendar.Period,  calcalendar.PeriodDays,  calcalendar.Recurrence,  calcalendar.Category,  calcalendar.OwnerID,  calcalendar.RecurType,  calcalendar.RecurOnValue,  calcalendar.RecurAfterValue,  calcategory.Color";
$tdatacalcalendar[".sqlFrom"] = "FROM calcalendar  LEFT OUTER JOIN calcategory ON calcalendar.Category = calcategory.id";
$tdatacalcalendar[".sqlWhereExpr"] = "";
$tdatacalcalendar[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalcalendar[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalcalendar[".arrGroupsPerPage"] = $arrGPP;

$tdatacalcalendar[".highlightSearchResults"] = true;

$tableKeyscalcalendar = array();
$tableKeyscalcalendar[] = "id";
$tdatacalcalendar[".Keys"] = $tableKeyscalcalendar;


$tdatacalcalendar[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.id";

	
	
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


	$tdatacalcalendar["id"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "id";
//	DateField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DateField";
	$fdata["GoodName"] = "DateField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","DateField");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "DateField";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.DateField";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacalcalendar["DateField"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "DateField";
//	Description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Description";
	$fdata["GoodName"] = "Description";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Description");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "Description";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.Description";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 500;

	
	
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


	$tdatacalcalendar["Description"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "Description";
//	Subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Subject";
	$fdata["GoodName"] = "Subject";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Subject");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Subject";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.Subject";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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
		$fdata["filterTotalFields"] = "id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacalcalendar["Subject"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "Subject";
//	TimeField
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TimeField";
	$fdata["GoodName"] = "TimeField";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","TimeField");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TimeField";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.TimeField";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calglobals";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TimePeriod";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TimePeriod";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["TimeField"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "TimeField";
//	EndTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EndTime";
	$fdata["GoodName"] = "EndTime";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","EndTime");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "EndTime";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.EndTime";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calglobals";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TimePeriod";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "TimePeriod";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["EndTime"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "EndTime";
//	DayEvent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "DayEvent";
	$fdata["GoodName"] = "DayEvent";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","DayEvent");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "DayEvent";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.DayEvent";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["DayEvent"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "DayEvent";
//	EndDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "EndDate";
	$fdata["GoodName"] = "EndDate";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","EndDate");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "EndDate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.EndDate";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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


	$tdatacalcalendar["EndDate"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "EndDate";
//	Period
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Period";
	$fdata["GoodName"] = "Period";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Period");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Period";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.Period";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calperiod";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ValueField";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Period";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["Period"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "Period";
//	PeriodDays
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PeriodDays";
	$fdata["GoodName"] = "PeriodDays";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","PeriodDays");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "PeriodDays";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.PeriodDays";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calweekdays";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 3;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "daynum";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "dayname";

	

	
	$edata["LookupOrderBy"] = "daynum";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["PeriodDays"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "PeriodDays";
//	Recurrence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Recurrence";
	$fdata["GoodName"] = "Recurrence";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Recurrence");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Recurrence";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.Recurrence";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
		
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["Recurrence"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "Recurrence";
//	Category
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Category";
	$fdata["GoodName"] = "Category";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","Category");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "Category";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.Category";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "calcategory";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Category";

	

	
	$edata["LookupOrderBy"] = "Category";

	
	
		$edata["AllowToAdd"] = true;
		
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["Category"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "Category";
//	OwnerID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "OwnerID";
	$fdata["GoodName"] = "OwnerID";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","OwnerID");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "OwnerID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.OwnerID";

	
	
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


	$tdatacalcalendar["OwnerID"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "OwnerID";
//	RecurType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "RecurType";
	$fdata["GoodName"] = "RecurType";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","RecurType");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RecurType";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.RecurType";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Never";
	$edata["LookupValues"][] = "On";
	$edata["LookupValues"][] = "After";

	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatacalcalendar["RecurType"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "RecurType";
//	RecurOnValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "RecurOnValue";
	$fdata["GoodName"] = "RecurOnValue";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","RecurOnValue");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RecurOnValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.RecurOnValue";

	
	
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

	
	
		$edata["DateEditType"] = 11;
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


	$tdatacalcalendar["RecurOnValue"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "RecurOnValue";
//	RecurAfterValue
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "RecurAfterValue";
	$fdata["GoodName"] = "RecurAfterValue";
	$fdata["ownerTable"] = "calcalendar";
	$fdata["Label"] = GetFieldLabel("calcalendar","RecurAfterValue");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "RecurAfterValue";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcalendar.RecurAfterValue";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 100;

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


	$tdatacalcalendar["RecurAfterValue"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "RecurAfterValue";
//	Color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Color";
	$fdata["GoodName"] = "Color";
	$fdata["ownerTable"] = "calcategory";
	$fdata["Label"] = GetFieldLabel("calcalendar","Color");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Color";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calcategory.Color";

	
	
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


	$tdatacalcalendar["Color"] = $fdata;
		$tdatacalcalendar[".searchableFields"][] = "Color";


$tables_data["calcalendar"]=&$tdatacalcalendar;
$field_labels["calcalendar"] = &$fieldLabelscalcalendar;
$fieldToolTips["calcalendar"] = &$fieldToolTipscalcalendar;
$placeHolders["calcalendar"] = &$placeHolderscalcalendar;
$page_titles["calcalendar"] = &$pageTitlescalcalendar;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calcalendar"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["calcalendar"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calcalendar()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "calcalendar.id,  calcalendar.DateField,  calcalendar.Description,  calcalendar.Subject,  calcalendar.TimeField,  calcalendar.EndTime,  calcalendar.DayEvent,  calcalendar.EndDate,  calcalendar.Period,  calcalendar.PeriodDays,  calcalendar.Recurrence,  calcalendar.Category,  calcalendar.OwnerID,  calcalendar.RecurType,  calcalendar.RecurOnValue,  calcalendar.RecurAfterValue,  calcategory.Color";
$proto0["m_strFrom"] = "FROM calcalendar  LEFT OUTER JOIN calcategory ON calcalendar.Category = calcategory.id";
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
	"m_strName" => "id",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto6["m_sql"] = "calcalendar.id";
$proto6["m_srcTableName"] = "calcalendar";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DateField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto8["m_sql"] = "calcalendar.DateField";
$proto8["m_srcTableName"] = "calcalendar";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Description",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto10["m_sql"] = "calcalendar.Description";
$proto10["m_srcTableName"] = "calcalendar";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Subject",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto12["m_sql"] = "calcalendar.Subject";
$proto12["m_srcTableName"] = "calcalendar";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TimeField",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto14["m_sql"] = "calcalendar.TimeField";
$proto14["m_srcTableName"] = "calcalendar";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "EndTime",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto16["m_sql"] = "calcalendar.EndTime";
$proto16["m_srcTableName"] = "calcalendar";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "DayEvent",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto18["m_sql"] = "calcalendar.DayEvent";
$proto18["m_srcTableName"] = "calcalendar";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "EndDate",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto20["m_sql"] = "calcalendar.EndDate";
$proto20["m_srcTableName"] = "calcalendar";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Period",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto22["m_sql"] = "calcalendar.Period";
$proto22["m_srcTableName"] = "calcalendar";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "PeriodDays",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto24["m_sql"] = "calcalendar.PeriodDays";
$proto24["m_srcTableName"] = "calcalendar";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Recurrence",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto26["m_sql"] = "calcalendar.Recurrence";
$proto26["m_srcTableName"] = "calcalendar";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto28["m_sql"] = "calcalendar.Category";
$proto28["m_srcTableName"] = "calcalendar";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "OwnerID",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto30["m_sql"] = "calcalendar.OwnerID";
$proto30["m_srcTableName"] = "calcalendar";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "RecurType",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto32["m_sql"] = "calcalendar.RecurType";
$proto32["m_srcTableName"] = "calcalendar";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "RecurOnValue",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto34["m_sql"] = "calcalendar.RecurOnValue";
$proto34["m_srcTableName"] = "calcalendar";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "RecurAfterValue",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto36["m_sql"] = "calcalendar.RecurAfterValue";
$proto36["m_srcTableName"] = "calcalendar";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Color",
	"m_strTable" => "calcategory",
	"m_srcTableName" => "calcalendar"
));

$proto38["m_sql"] = "calcategory.Color";
$proto38["m_srcTableName"] = "calcalendar";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "calcalendar";
$proto41["m_srcTableName"] = "calcalendar";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "DateField";
$proto41["m_columns"][] = "Description";
$proto41["m_columns"][] = "Subject";
$proto41["m_columns"][] = "TimeField";
$proto41["m_columns"][] = "EndTime";
$proto41["m_columns"][] = "DayEvent";
$proto41["m_columns"][] = "EndDate";
$proto41["m_columns"][] = "Period";
$proto41["m_columns"][] = "PeriodDays";
$proto41["m_columns"][] = "Recurrence";
$proto41["m_columns"][] = "Category";
$proto41["m_columns"][] = "OwnerID";
$proto41["m_columns"][] = "RecurType";
$proto41["m_columns"][] = "RecurOnValue";
$proto41["m_columns"][] = "RecurAfterValue";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "calcalendar";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "calcalendar";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_LEFTJOIN";
			$proto45=array();
$proto45["m_strName"] = "calcategory";
$proto45["m_srcTableName"] = "calcalendar";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "id";
$proto45["m_columns"][] = "Category";
$proto45["m_columns"][] = "Color";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "LEFT OUTER JOIN calcategory ON calcalendar.Category = calcategory.id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "calcalendar";
$proto46=array();
$proto46["m_sql"] = "calcalendar.Category = calcategory.id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Category",
	"m_strTable" => "calcalendar",
	"m_srcTableName" => "calcalendar"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= calcategory.id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calcalendar";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calcalendar = createSqlQuery_calcalendar();


	
		;

																	

$tdatacalcalendar[".sqlquery"] = $queryData_calcalendar;



include_once(getabspath("include/calcalendar_events.php"));
$tableEvents["calcalendar"] = new eventclass_calcalendar;
$tdatacalcalendar[".hasEvents"] = true;

?>