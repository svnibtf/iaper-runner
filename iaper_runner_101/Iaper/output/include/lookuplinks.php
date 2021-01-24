<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["adm_tipousuario"] ) ) {
			$lookupTableLinks["adm_tipousuario"] = array();
		}
		if( !isset( $lookupTableLinks["adm_tipousuario"]["adm_usuarios1.tipo_usuario"] )) {
			$lookupTableLinks["adm_tipousuario"]["adm_usuarios1.tipo_usuario"] = array();
		}
		$lookupTableLinks["adm_tipousuario"]["adm_usuarios1.tipo_usuario"]["edit"] = array("table" => "adm_usuarios", "field" => "tipo_usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_plano_profissional"] ) ) {
			$lookupTableLinks["adm_plano_profissional"] = array();
		}
		if( !isset( $lookupTableLinks["adm_plano_profissional"]["adm_usuarios1.plano_tipo"] )) {
			$lookupTableLinks["adm_plano_profissional"]["adm_usuarios1.plano_tipo"] = array();
		}
		$lookupTableLinks["adm_plano_profissional"]["adm_usuarios1.plano_tipo"]["edit"] = array("table" => "adm_usuarios", "field" => "plano_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["ibge_pais"] ) ) {
			$lookupTableLinks["ibge_pais"] = array();
		}
		if( !isset( $lookupTableLinks["ibge_pais"]["adm_usuarios1.pais"] )) {
			$lookupTableLinks["ibge_pais"]["adm_usuarios1.pais"] = array();
		}
		$lookupTableLinks["ibge_pais"]["adm_usuarios1.pais"]["edit"] = array("table" => "adm_usuarios", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["ibge_municipios"] ) ) {
			$lookupTableLinks["ibge_municipios"] = array();
		}
		if( !isset( $lookupTableLinks["ibge_municipios"]["adm_usuarios1.municipio"] )) {
			$lookupTableLinks["ibge_municipios"]["adm_usuarios1.municipio"] = array();
		}
		$lookupTableLinks["ibge_municipios"]["adm_usuarios1.municipio"]["edit"] = array("table" => "adm_usuarios", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_usuarios_dados_profissionais"] ) ) {
			$lookupTableLinks["adm_usuarios_dados_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["adm_usuarios_dados_profissionais"]["adm_usuarios1.idEmpresa"] )) {
			$lookupTableLinks["adm_usuarios_dados_profissionais"]["adm_usuarios1.idEmpresa"] = array();
		}
		$lookupTableLinks["adm_usuarios_dados_profissionais"]["adm_usuarios1.idEmpresa"]["edit"] = array("table" => "adm_usuarios", "field" => "idEmpresa", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_planos"] ) ) {
			$lookupTableLinks["adm_planos"] = array();
		}
		if( !isset( $lookupTableLinks["adm_planos"]["adm_meuplano1.idPlano"] )) {
			$lookupTableLinks["adm_planos"]["adm_meuplano1.idPlano"] = array();
		}
		$lookupTableLinks["adm_planos"]["adm_meuplano1.idPlano"]["edit"] = array("table" => "adm_meuplano", "field" => "idPlano", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_tipousuario"] ) ) {
			$lookupTableLinks["adm_tipousuario"] = array();
		}
		if( !isset( $lookupTableLinks["adm_tipousuario"]["login.tipo_usuario"] )) {
			$lookupTableLinks["adm_tipousuario"]["login.tipo_usuario"] = array();
		}
		$lookupTableLinks["adm_tipousuario"]["login.tipo_usuario"]["edit"] = array("table" => "login", "field" => "tipo_usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["buscar_profissionais"] ) ) {
			$lookupTableLinks["buscar_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["buscar_profissionais"]["buscar_profissionais.atendimento_presencial"] )) {
			$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.atendimento_presencial"] = array();
		}
		$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.atendimento_presencial"]["edit"] = array("table" => "buscar_profissionais", "field" => "atendimento_presencial", "page" => "edit");
		if( !isset( $lookupTableLinks["buscar_profissionais"] ) ) {
			$lookupTableLinks["buscar_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["buscar_profissionais"]["buscar_profissionais.nome_empresa"] )) {
			$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.nome_empresa"] = array();
		}
		$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.nome_empresa"]["search"] = array("table" => "buscar_profissionais", "field" => "nome_empresa", "page" => "search");
		if( !isset( $lookupTableLinks["buscar_profissionais"] ) ) {
			$lookupTableLinks["buscar_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["buscar_profissionais"]["buscar_profissionais.ramo_empresa"] )) {
			$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.ramo_empresa"] = array();
		}
		$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.ramo_empresa"]["edit"] = array("table" => "buscar_profissionais", "field" => "ramo_empresa", "page" => "edit");
		if( !isset( $lookupTableLinks["Busca Profissional"] ) ) {
			$lookupTableLinks["Busca Profissional"] = array();
		}
		if( !isset( $lookupTableLinks["Busca Profissional"]["buscar_profissionais.estado_empresa"] )) {
			$lookupTableLinks["Busca Profissional"]["buscar_profissionais.estado_empresa"] = array();
		}
		$lookupTableLinks["Busca Profissional"]["buscar_profissionais.estado_empresa"]["search"] = array("table" => "buscar_profissionais", "field" => "estado_empresa", "page" => "search");
		if( !isset( $lookupTableLinks["buscar_profissionais"] ) ) {
			$lookupTableLinks["buscar_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["buscar_profissionais"]["buscar_profissionais.municipio_empresa"] )) {
			$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.municipio_empresa"] = array();
		}
		$lookupTableLinks["buscar_profissionais"]["buscar_profissionais.municipio_empresa"]["search"] = array("table" => "buscar_profissionais", "field" => "municipio_empresa", "page" => "search");
		if( !isset( $lookupTableLinks["adm_tipousuario"] ) ) {
			$lookupTableLinks["adm_tipousuario"] = array();
		}
		if( !isset( $lookupTableLinks["adm_tipousuario"]["busca_profissional.tipo_usuario"] )) {
			$lookupTableLinks["adm_tipousuario"]["busca_profissional.tipo_usuario"] = array();
		}
		$lookupTableLinks["adm_tipousuario"]["busca_profissional.tipo_usuario"]["edit"] = array("table" => "Busca Profissional", "field" => "tipo_usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_plano_profissional"] ) ) {
			$lookupTableLinks["adm_plano_profissional"] = array();
		}
		if( !isset( $lookupTableLinks["adm_plano_profissional"]["busca_profissional.plano_tipo"] )) {
			$lookupTableLinks["adm_plano_profissional"]["busca_profissional.plano_tipo"] = array();
		}
		$lookupTableLinks["adm_plano_profissional"]["busca_profissional.plano_tipo"]["edit"] = array("table" => "Busca Profissional", "field" => "plano_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["ibge_pais"] ) ) {
			$lookupTableLinks["ibge_pais"] = array();
		}
		if( !isset( $lookupTableLinks["ibge_pais"]["busca_profissional.pais"] )) {
			$lookupTableLinks["ibge_pais"]["busca_profissional.pais"] = array();
		}
		$lookupTableLinks["ibge_pais"]["busca_profissional.pais"]["edit"] = array("table" => "Busca Profissional", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["ibge_municipios"] ) ) {
			$lookupTableLinks["ibge_municipios"] = array();
		}
		if( !isset( $lookupTableLinks["ibge_municipios"]["busca_profissional.municipio"] )) {
			$lookupTableLinks["ibge_municipios"]["busca_profissional.municipio"] = array();
		}
		$lookupTableLinks["ibge_municipios"]["busca_profissional.municipio"]["edit"] = array("table" => "Busca Profissional", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_usuarios_dados_profissionais"] ) ) {
			$lookupTableLinks["adm_usuarios_dados_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["adm_usuarios_dados_profissionais"]["busca_profissional.idEmpresa"] )) {
			$lookupTableLinks["adm_usuarios_dados_profissionais"]["busca_profissional.idEmpresa"] = array();
		}
		$lookupTableLinks["adm_usuarios_dados_profissionais"]["busca_profissional.idEmpresa"]["edit"] = array("table" => "Busca Profissional", "field" => "idEmpresa", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_agenda_config_1"] ) ) {
			$lookupTableLinks["adm_agenda_config_1"] = array();
		}
		if( !isset( $lookupTableLinks["adm_agenda_config_1"]["adm_agenda_estrutura_1.agt_config_id"] )) {
			$lookupTableLinks["adm_agenda_config_1"]["adm_agenda_estrutura_1.agt_config_id"] = array();
		}
		$lookupTableLinks["adm_agenda_config_1"]["adm_agenda_estrutura_1.agt_config_id"]["edit"] = array("table" => "adm_agenda_estrutura_1", "field" => "agt_config_id", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_usuarios"] ) ) {
			$lookupTableLinks["adm_usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_usuarios"]["adm_agenda_config_1.agc_usu_pro_id"] )) {
			$lookupTableLinks["adm_usuarios"]["adm_agenda_config_1.agc_usu_pro_id"] = array();
		}
		$lookupTableLinks["adm_usuarios"]["adm_agenda_config_1.agc_usu_pro_id"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_usu_pro_id", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_agenda_tipos_recebimento"] ) ) {
			$lookupTableLinks["adm_agenda_tipos_recebimento"] = array();
		}
		if( !isset( $lookupTableLinks["adm_agenda_tipos_recebimento"]["adm_agenda_config_1.agc_item_pagamento_id"] )) {
			$lookupTableLinks["adm_agenda_tipos_recebimento"]["adm_agenda_config_1.agc_item_pagamento_id"] = array();
		}
		$lookupTableLinks["adm_agenda_tipos_recebimento"]["adm_agenda_config_1.agc_item_pagamento_id"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_item_pagamento_id", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_tipo_config"] ) ) {
			$lookupTableLinks["adm_tipo_config"] = array();
		}
		if( !isset( $lookupTableLinks["adm_tipo_config"]["adm_agenda_config_1.agc_email_automatico"] )) {
			$lookupTableLinks["adm_tipo_config"]["adm_agenda_config_1.agc_email_automatico"] = array();
		}
		$lookupTableLinks["adm_tipo_config"]["adm_agenda_config_1.agc_email_automatico"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_email_automatico", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_usuarios"] ) ) {
			$lookupTableLinks["adm_usuarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_usuarios"]["adm_agenda_1.age_usu_id"] )) {
			$lookupTableLinks["adm_usuarios"]["adm_agenda_1.age_usu_id"] = array();
		}
		$lookupTableLinks["adm_usuarios"]["adm_agenda_1.age_usu_id"]["edit"] = array("table" => "adm_agenda_1", "field" => "age_usu_id", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_agenda_config_1"] ) ) {
			$lookupTableLinks["adm_agenda_config_1"] = array();
		}
		if( !isset( $lookupTableLinks["adm_agenda_config_1"]["adm_agenda_1.age_config_id"] )) {
			$lookupTableLinks["adm_agenda_config_1"]["adm_agenda_1.age_config_id"] = array();
		}
		$lookupTableLinks["adm_agenda_config_1"]["adm_agenda_1.age_config_id"]["edit"] = array("table" => "adm_agenda_1", "field" => "age_config_id", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_agenda_tipos_recebimento"] ) ) {
			$lookupTableLinks["adm_agenda_tipos_recebimento"] = array();
		}
		if( !isset( $lookupTableLinks["adm_agenda_tipos_recebimento"]["adm_agenda_1.age_tipo_pagamento"] )) {
			$lookupTableLinks["adm_agenda_tipos_recebimento"]["adm_agenda_1.age_tipo_pagamento"] = array();
		}
		$lookupTableLinks["adm_agenda_tipos_recebimento"]["adm_agenda_1.age_tipo_pagamento"]["edit"] = array("table" => "adm_agenda_1", "field" => "age_tipo_pagamento", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_pacientes"] ) ) {
			$lookupTableLinks["adm_pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["adm_pacientes"]["adm_agenda_1.age_Paciente"] )) {
			$lookupTableLinks["adm_pacientes"]["adm_agenda_1.age_Paciente"] = array();
		}
		$lookupTableLinks["adm_pacientes"]["adm_agenda_1.age_Paciente"]["edit"] = array("table" => "adm_agenda_1", "field" => "age_Paciente", "page" => "edit");
}

?>