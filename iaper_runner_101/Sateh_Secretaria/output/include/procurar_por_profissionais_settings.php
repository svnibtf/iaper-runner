<?php
require_once(getabspath("classes/cipherer.php"));



$tdataprocurar_por_profissionais = array();
$tdataprocurar_por_profissionais[".ShortName"] = "procurar_por_profissionais";

$tdataprocurar_por_profissionais[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdataprocurar_por_profissionais[".originalPagesByType"] = $tdataprocurar_por_profissionais[".pagesByType"];
$tdataprocurar_por_profissionais[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdataprocurar_por_profissionais[".originalPages"] = $tdataprocurar_por_profissionais[".pages"];
$tdataprocurar_por_profissionais[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdataprocurar_por_profissionais[".originalDefaultPages"] = $tdataprocurar_por_profissionais[".defaultPages"];


//	field labels
$fieldLabelsprocurar_por_profissionais = array();
$pageTitlesprocurar_por_profissionais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"] = array();
}

//	search fields
$tdataprocurar_por_profissionais[".searchFields"] = array();

// all search fields
$tdataprocurar_por_profissionais[".allSearchFields"] = array();

// good like search fields
$tdataprocurar_por_profissionais[".googleLikeFields"] = array();

$tdataprocurar_por_profissionais[".dashElements"] = array();


$tdataprocurar_por_profissionais[".shortTableName"] = "procurar_por_profissionais";
$tdataprocurar_por_profissionais[".entityType"] = 4;



$tableEvents["Procurar por Profissionais"] = new eventsBase;
$tdataprocurar_por_profissionais[".hasEvents"] = false;


$tdataprocurar_por_profissionais[".tableType"] = "dashboard";


		
$tdataprocurar_por_profissionais[".addPageEvents"] = false;

$tdataprocurar_por_profissionais[".isUseAjaxSuggest"] = true;

$tables_data["Procurar por Profissionais"]=&$tdataprocurar_por_profissionais;
$field_labels["Procurar_por_Profissionais"] = &$fieldLabelsprocurar_por_profissionais;
$page_titles["Procurar_por_Profissionais"] = &$pageTitlesprocurar_por_profissionais;

?>