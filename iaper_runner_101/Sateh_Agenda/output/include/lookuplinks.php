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
		if( !isset( $lookupTableLinks["adm_tipousuario"]["login.tipo_usuario"] )) {
			$lookupTableLinks["adm_tipousuario"]["login.tipo_usuario"] = array();
		}
		$lookupTableLinks["adm_tipousuario"]["login.tipo_usuario"]["edit"] = array("table" => "login", "field" => "tipo_usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_agenda_config_1"] ) ) {
			$lookupTableLinks["adm_agenda_config_1"] = array();
		}
		if( !isset( $lookupTableLinks["adm_agenda_config_1"]["adm_agenda_estrutura_1.agt_config_id"] )) {
			$lookupTableLinks["adm_agenda_config_1"]["adm_agenda_estrutura_1.agt_config_id"] = array();
		}
		$lookupTableLinks["adm_agenda_config_1"]["adm_agenda_estrutura_1.agt_config_id"]["edit"] = array("table" => "adm_agenda_estrutura_1", "field" => "agt_config_id", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_horarios"] ) ) {
			$lookupTableLinks["adm_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_horarios"]["adm_agenda_estrutura_1.agt_time_inicio"] )) {
			$lookupTableLinks["adm_horarios"]["adm_agenda_estrutura_1.agt_time_inicio"] = array();
		}
		$lookupTableLinks["adm_horarios"]["adm_agenda_estrutura_1.agt_time_inicio"]["edit"] = array("table" => "adm_agenda_estrutura_1", "field" => "agt_time_inicio", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_horarios"] ) ) {
			$lookupTableLinks["adm_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_horarios"]["adm_agenda_estrutura_1.agt_time_fim"] )) {
			$lookupTableLinks["adm_horarios"]["adm_agenda_estrutura_1.agt_time_fim"] = array();
		}
		$lookupTableLinks["adm_horarios"]["adm_agenda_estrutura_1.agt_time_fim"]["edit"] = array("table" => "adm_agenda_estrutura_1", "field" => "agt_time_fim", "page" => "edit");
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
		if( !isset( $lookupTableLinks["adm_parametros_config"] ) ) {
			$lookupTableLinks["adm_parametros_config"] = array();
		}
		if( !isset( $lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_qtidade"] )) {
			$lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_qtidade"] = array();
		}
		$lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_qtidade"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_qtidade", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_parametros_config"] ) ) {
			$lookupTableLinks["adm_parametros_config"] = array();
		}
		if( !isset( $lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_duracao_media"] )) {
			$lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_duracao_media"] = array();
		}
		$lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_duracao_media"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_duracao_media", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_tipo_config"] ) ) {
			$lookupTableLinks["adm_tipo_config"] = array();
		}
		if( !isset( $lookupTableLinks["adm_tipo_config"]["adm_agenda_config_1.agc_email_automatico"] )) {
			$lookupTableLinks["adm_tipo_config"]["adm_agenda_config_1.agc_email_automatico"] = array();
		}
		$lookupTableLinks["adm_tipo_config"]["adm_agenda_config_1.agc_email_automatico"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_email_automatico", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_parametros_config"] ) ) {
			$lookupTableLinks["adm_parametros_config"] = array();
		}
		if( !isset( $lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_tempo_min_antecedencia"] )) {
			$lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_tempo_min_antecedencia"] = array();
		}
		$lookupTableLinks["adm_parametros_config"]["adm_agenda_config_1.agc_tempo_min_antecedencia"]["edit"] = array("table" => "adm_agenda_config_1", "field" => "agc_tempo_min_antecedencia", "page" => "edit");
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
		if( !isset( $lookupTableLinks["adm_horarios"] ) ) {
			$lookupTableLinks["adm_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"] )) {
			$lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"] = array();
		}
		$lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"]["edit"] = array("table" => "adm_agenda_1", "field" => "age_time_att", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_horarios"] ) ) {
			$lookupTableLinks["adm_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"] )) {
			$lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"] = array();
		}
		$lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"]["add"] = array("table" => "adm_agenda_1", "field" => "age_time_att", "page" => "add");
		if( !isset( $lookupTableLinks["adm_horarios"] ) ) {
			$lookupTableLinks["adm_horarios"] = array();
		}
		if( !isset( $lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"] )) {
			$lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"] = array();
		}
		$lookupTableLinks["adm_horarios"]["adm_agenda_1.age_time_att"]["search"] = array("table" => "adm_agenda_1", "field" => "age_time_att", "page" => "search");
		if( !isset( $lookupTableLinks["adm_parametros_config"] ) ) {
			$lookupTableLinks["adm_parametros_config"] = array();
		}
		if( !isset( $lookupTableLinks["adm_parametros_config"]["adm_agenda_1.age_retorno_data_time"] )) {
			$lookupTableLinks["adm_parametros_config"]["adm_agenda_1.age_retorno_data_time"] = array();
		}
		$lookupTableLinks["adm_parametros_config"]["adm_agenda_1.age_retorno_data_time"]["edit"] = array("table" => "adm_agenda_1", "field" => "age_retorno_data_time", "page" => "edit");
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