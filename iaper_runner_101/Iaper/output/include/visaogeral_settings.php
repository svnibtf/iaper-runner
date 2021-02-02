<?php
require_once(getabspath("classes/cipherer.php"));



$tdatavisaogeral = array();
$tdatavisaogeral[".ShortName"] = "visaogeral";

$tdatavisaogeral[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatavisaogeral[".originalPagesByType"] = $tdatavisaogeral[".pagesByType"];
$tdatavisaogeral[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatavisaogeral[".originalPages"] = $tdatavisaogeral[".pages"];
$tdatavisaogeral[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatavisaogeral[".originalDefaultPages"] = $tdatavisaogeral[".defaultPages"];


//	field labels
$fieldLabelsvisaogeral = array();
$pageTitlesvisaogeral = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvisaogeral["Portuguese(Brazil)"] = array();
	$fieldLabelsvisaogeral["Portuguese(Brazil)"]["DashBoard_Data"] = "Data";
	$fieldLabelsvisaogeral["Portuguese(Brazil)"]["DashBoard_Valor_a_Receber"] = "Valor A Receber";
}

//	search fields
$tdatavisaogeral[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"DashBoard", "field"=>"Data" );
$tdatavisaogeral[".searchFields"]["DashBoard_Data"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"DashBoard", "field"=>"Valor_a_Receber" );
$tdatavisaogeral[".searchFields"]["DashBoard_Valor_a_Receber"] = $dashField;

// all search fields
$tdatavisaogeral[".allSearchFields"] = array();
$tdatavisaogeral[".allSearchFields"][] = "DashBoard_Data";
$tdatavisaogeral[".allSearchFields"][] = "DashBoard_Valor_a_Receber";

// good like search fields
$tdatavisaogeral[".googleLikeFields"] = array();
$tdatavisaogeral[".googleLikeFields"][] = "DashBoard_Data";
$tdatavisaogeral[".googleLikeFields"][] = "DashBoard_Valor_a_Receber";

$tdatavisaogeral[".dashElements"] = array();

	$dbelement = array( "elementName" => "dashboard_chart", "table" => "DashBoard",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdatavisaogeral[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "fluxo_de_recebimentos_list", "table" => "Fluxo de Recebimentos",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_1_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatavisaogeral[".dashElements"][] = $dbelement;

$tdatavisaogeral[".shortTableName"] = "visaogeral";
$tdatavisaogeral[".entityType"] = 4;



$tableEvents["VisaoGeral"] = new eventsBase;
$tdatavisaogeral[".hasEvents"] = false;


$tdatavisaogeral[".tableType"] = "dashboard";


	
$tdatavisaogeral[".addPageEvents"] = false;

$tdatavisaogeral[".isUseAjaxSuggest"] = true;

$tables_data["VisaoGeral"]=&$tdatavisaogeral;
$field_labels["VisaoGeral"] = &$fieldLabelsvisaogeral;
$page_titles["VisaoGeral"] = &$pageTitlesvisaogeral;

?>