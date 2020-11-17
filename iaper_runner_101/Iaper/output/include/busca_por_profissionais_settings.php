<?php
require_once(getabspath("classes/cipherer.php"));



$tdatabusca_por_profissionais = array();
$tdatabusca_por_profissionais[".ShortName"] = "busca_por_profissionais";

$tdatabusca_por_profissionais[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" );
$tdatabusca_por_profissionais[".originalPagesByType"] = $tdatabusca_por_profissionais[".pagesByType"];
$tdatabusca_por_profissionais[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"],\"search\":[\"search\"]}" ) );
$tdatabusca_por_profissionais[".originalPages"] = $tdatabusca_por_profissionais[".pages"];
$tdatabusca_por_profissionais[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\",\"search\":\"search\"}" );
$tdatabusca_por_profissionais[".originalDefaultPages"] = $tdatabusca_por_profissionais[".defaultPages"];


//	field labels
$fieldLabelsbusca_por_profissionais = array();
$pageTitlesbusca_por_profissionais = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"] = array();
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_usu_id"] = "Id";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_nome"] = "Profissional";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_sobrenome"] = "Sobrenome";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_avatar"] = "Avatar";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_email_profissional"] = "Contato";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_avaliacao_usuarios"] = "Avaliação dos Usuários";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_sobre_profissional"] = "Sobre o Profissional";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_resumo_formacao"] = "Resumo Formação";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_diferencial_profissional"] = "Diferencial Profissional";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_atendimento_presencial"] = "Atendimento Presencial";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_atendimento_online"] = "Atendimento Online";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_mini_curriculo"] = "Mini Curriculo";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_resumo_formacao_academica"] = "Resumo Formação Academica";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_resumo_formacao_cursos"] = "Resumo Formação Cursos";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_curriculo_lattes"] = "Curriculo Lattes";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_nome_empresa"] = "Empresa";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_cnpj"] = "Cnpj";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_ramo_empresa"] = "Ramo da Empresa";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_tipo_empresa"] = "Tipo da Empresa";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_cep_profissional"] = "Cep Profissional";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_rua"] = "Endereço";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_numero"] = "Número";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_complemento"] = "Complemento";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_longitude"] = "Longitude";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_pais_empresa"] = "Pais ";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_estado_empresa"] = "Estado ";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_municipio_empresa"] = "Cidade";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_data_in"] = "Data de Entrada";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_latitude"] = "Latitude";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Mapa"] = "Mapa";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Logotipo"] = "Logotipo";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Foto_Fechada"] = "Fechada";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_endereco_profissional_bairro"] = "Bairro";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Horarios_de_Atendimento"] = "Horarios De Atendimento";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Sobre_a_Empresa"] = "Sobre A Empresa";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Lat"] = "Lat";
	$fieldLabelsbusca_por_profissionais["Portuguese(Brazil)"]["buscar_profissionais_Lng"] = "Lng";
}

//	search fields
$tdatabusca_por_profissionais[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"usu_id" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_usu_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"nome" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_nome"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"sobrenome" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_sobrenome"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"avatar" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_avatar"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"email_profissional" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_email_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"avaliacao_usuarios" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_avaliacao_usuarios"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"sobre_profissional" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_sobre_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"resumo_formacao" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_resumo_formacao"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"diferencial_profissional" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_diferencial_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"atendimento_presencial" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_atendimento_presencial"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"atendimento_online" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_atendimento_online"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"mini_curriculo" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_mini_curriculo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"resumo_formacao_academica" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_resumo_formacao_academica"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"resumo_formacao_cursos" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_resumo_formacao_cursos"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"curriculo_lattes" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_curriculo_lattes"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"nome_empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_nome_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"cnpj" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_cnpj"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"ramo_empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_ramo_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"tipo_empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_tipo_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"cep_profissional" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_cep_profissional"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_rua" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_rua"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_numero" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_numero"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_complemento" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_complemento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_longitude" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_longitude"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"pais_empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_pais_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"estado_empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_estado_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"municipio_empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_municipio_empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"data_in" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_data_in"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_latitude" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_latitude"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Mapa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Mapa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Logotipo" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Logotipo"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Foto_Fechada" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Foto_Fechada"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"endereco_profissional_bairro" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_endereco_profissional_bairro"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Horarios_de_Atendimento" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Horarios_de_Atendimento"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Sobre_a_Empresa" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Sobre_a_Empresa"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Lat" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"buscar_profissionais", "field"=>"Lng" );
$tdatabusca_por_profissionais[".searchFields"]["buscar_profissionais_Lng"] = $dashField;

// all search fields
$tdatabusca_por_profissionais[".allSearchFields"] = array();
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_usu_id";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_nome";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_sobrenome";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_avatar";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_email_profissional";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_avaliacao_usuarios";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_sobre_profissional";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_resumo_formacao";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_diferencial_profissional";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_atendimento_presencial";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_atendimento_online";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_mini_curriculo";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_resumo_formacao_academica";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_resumo_formacao_cursos";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_curriculo_lattes";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_nome_empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_cnpj";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_ramo_empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_tipo_empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_cep_profissional";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_rua";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_numero";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_complemento";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_longitude";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_pais_empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_estado_empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_municipio_empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_data_in";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_latitude";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Mapa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Logotipo";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Foto_Fechada";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_endereco_profissional_bairro";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Horarios_de_Atendimento";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Sobre_a_Empresa";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Lat";
$tdatabusca_por_profissionais[".allSearchFields"][] = "buscar_profissionais_Lng";

// good like search fields
$tdatabusca_por_profissionais[".googleLikeFields"] = array();
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_usu_id";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_nome";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_sobrenome";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_avatar";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_email_profissional";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_avaliacao_usuarios";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_sobre_profissional";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_resumo_formacao";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_diferencial_profissional";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_atendimento_presencial";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_atendimento_online";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_mini_curriculo";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_resumo_formacao_academica";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_resumo_formacao_cursos";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_curriculo_lattes";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_nome_empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_cnpj";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_ramo_empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_tipo_empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_cep_profissional";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_endereco_profissional_rua";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_endereco_profissional_numero";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_endereco_profissional_complemento";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_endereco_profissional_longitude";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_pais_empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_estado_empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_municipio_empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_data_in";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_endereco_profissional_latitude";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Mapa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Logotipo";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Foto_Fechada";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_endereco_profissional_bairro";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Horarios_de_Atendimento";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Sobre_a_Empresa";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Lat";
$tdatabusca_por_profissionais[".googleLikeFields"][] = "buscar_profissionais_Lng";

$tdatabusca_por_profissionais[".dashElements"] = array();

	$dbelement = array( "elementName" => "buscar_profissionais_map", "table" => "buscar_profissionais",
		 "pageName" => "","type" => 6);
	$dbelement["cellName"] = "cell_0_0";

			$dbelement["width"] = 1200;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = "auto";
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "Lat";
	$dbelement["lonF"] = "Lng";
	$dbelement["descF"] = "";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 0;
			$dbelement["updateMoved"] = true;

	// Advanced map options
		$dbelement["clustering"] = (0 > 0);
	$dbelement["heatMap"] = (0 > 0);


	$tdatabusca_por_profissionais[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "buscar_profissionais_list", "table" => "buscar_profissionais",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "cell_0_1";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;
	$dbelement["copy"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;

	$dbelement["updateSelected"] = 0 > 0;


	$tdatabusca_por_profissionais[".dashElements"][] = $dbelement;

$tdatabusca_por_profissionais[".shortTableName"] = "busca_por_profissionais";
$tdatabusca_por_profissionais[".entityType"] = 4;



$tableEvents["Busca por Profissionais"] = new eventsBase;
$tdatabusca_por_profissionais[".hasEvents"] = false;


$tdatabusca_por_profissionais[".tableType"] = "dashboard";



$tdatabusca_por_profissionais[".addPageEvents"] = false;

$tdatabusca_por_profissionais[".isUseAjaxSuggest"] = true;

$tables_data["Busca por Profissionais"]=&$tdatabusca_por_profissionais;
$field_labels["Busca_por_Profissionais"] = &$fieldLabelsbusca_por_profissionais;
$page_titles["Busca_por_Profissionais"] = &$pageTitlesbusca_por_profissionais;

?>