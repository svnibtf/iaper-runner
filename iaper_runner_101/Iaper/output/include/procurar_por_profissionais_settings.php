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
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_usu_id"] = "Id";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_nome"] = "Profissional";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_sobrenome"] = "Sobrenome";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_avatar"] = "Avatar";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_email_profissional"] = "Contato";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_avaliacao_usuarios"] = "Avaliação dos Usuários";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_sobre_profissional"] = "Sobre o Profissional";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_resumo_formacao"] = "Resumo Formação";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_diferencial_profissional"] = "Diferencial Profissional";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_atendimento_presencial"] = "Atendimento Presencial";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_atendimento_online"] = "Atendimento Online";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_mini_curriculo"] = "Mini Curriculo";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_resumo_formacao_academica"] = "Resumo Formação Academica";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_resumo_formacao_cursos"] = "Resumo Formação Cursos";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_curriculo_lattes"] = "Curriculo Lattes";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_nome_empresa"] = "Empresa";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_cnpj"] = "Cnpj";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_ramo_empresa"] = "Ramo da Empresa";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_tipo_empresa"] = "Tipo da Empresa";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_cep_profissional"] = "Cep Profissional";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_rua"] = "Endereço";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_numero"] = "Número";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_complemento"] = "Complemento";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_longitude"] = "Longitude";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_pais_empresa"] = "Pais ";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_estado_empresa"] = "Estado ";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_municipio_empresa"] = "Cidade";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_data_in"] = "Data de Entrada";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_latitude"] = "Latitude";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Mapa"] = "Mapa";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Logotipo"] = "Logotipo";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Foto_Fechada"] = "Fechada";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_bairro"] = "Bairro";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Horarios_de_Atendimento"] = "Horarios De Atendimento";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Sobre_a_Empresa"] = "Sobre A Empresa";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Lng"] = "Lng";
	$fieldLabelsprocurar_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Lat"] = "Lat";
}

//	search fields
$tdataprocurar_por_profissionais[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"nome" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_nome"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"nome_empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_nome_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_rua" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_rua"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"pais_empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_pais_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"estado_empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_estado_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"municipio_empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_municipio_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"usu_id" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_usu_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"sobrenome" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_sobrenome"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"avatar" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_avatar"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"email_profissional" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_email_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"avaliacao_usuarios" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_avaliacao_usuarios"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"sobre_profissional" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_sobre_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"resumo_formacao" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_resumo_formacao"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"diferencial_profissional" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_diferencial_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"atendimento_presencial" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_atendimento_presencial"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"atendimento_online" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_atendimento_online"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"mini_curriculo" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_mini_curriculo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"resumo_formacao_academica" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_resumo_formacao_academica"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"resumo_formacao_cursos" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_resumo_formacao_cursos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"curriculo_lattes" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_curriculo_lattes"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"cnpj" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_cnpj"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"ramo_empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_ramo_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"tipo_empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_tipo_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"cep_profissional" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_cep_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_numero" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_numero"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_complemento" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_complemento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_longitude" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_longitude"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"data_in" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_data_in"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_latitude" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_latitude"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Mapa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Mapa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Logotipo" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Logotipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Foto_Fechada" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Foto_Fechada"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_bairro" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_bairro"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Horarios_de_Atendimento" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Horarios_de_Atendimento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Sobre_a_Empresa" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Sobre_a_Empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Lng" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Lat" );
$tdataprocurar_por_profissionais[".searchFields"]["buscar_profissionais_Lat"] = $dashField;

// all search fields
$tdataprocurar_por_profissionais[".allSearchFields"] = array();
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_nome";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_nome_empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_rua";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_pais_empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_estado_empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_municipio_empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_usu_id";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_sobrenome";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_avatar";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_email_profissional";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_avaliacao_usuarios";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_sobre_profissional";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_resumo_formacao";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_diferencial_profissional";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_atendimento_presencial";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_atendimento_online";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_mini_curriculo";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_resumo_formacao_academica";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_resumo_formacao_cursos";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_curriculo_lattes";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_cnpj";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_ramo_empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_tipo_empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_cep_profissional";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_numero";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_complemento";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_longitude";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_data_in";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_latitude";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Mapa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Logotipo";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Foto_Fechada";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_bairro";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Horarios_de_Atendimento";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Sobre_a_Empresa";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Lng";
$tdataprocurar_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Lat";

// good like search fields
$tdataprocurar_por_profissionais[".googleLikeFields"] = array();

$tdataprocurar_por_profissionais[".dashElements"] = array();

	$dbelement = array( "elementName" => "buscar_profissionais_map", "table" => "buscar_profissionais",
		 "pageName" => "","type" => 6);
	$dbelement["cellName"] = "cell_1_0";

			$dbelement["width"] = 400;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = "auto";
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "Lat";
	$dbelement["lonF"] = "Lng";
	$dbelement["descF"] = "nome_empresa";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 0;
			$dbelement["updateMoved"] = true;

	// Advanced map options
		$dbelement["clustering"] = (0 > 0);
	$dbelement["heatMap"] = (0 > 0);


	$tdataprocurar_por_profissionais[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "buscar_profissionais_list", "table" => "buscar_profissionais",
		 "pageName" => "list","type" => 0);
	$dbelement["cellName"] = "cell_1_1";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 1 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdataprocurar_por_profissionais[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "buscar_profissionais_search", "table" => "buscar_profissionais",
		 "pageName" => "search","type" => 4);
	$dbelement["cellName"] = "cell_0_0";

			

	$tdataprocurar_por_profissionais[".dashElements"][] = $dbelement;

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