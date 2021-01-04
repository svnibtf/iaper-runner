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
		if( !isset( $lookupTableLinks["adm_pacientes"] ) ) {
			$lookupTableLinks["adm_pacientes"] = array();
		}
		if( !isset( $lookupTableLinks["adm_pacientes"]["adm_tratamento1.idPaciente"] )) {
			$lookupTableLinks["adm_pacientes"]["adm_tratamento1.idPaciente"] = array();
		}
		$lookupTableLinks["adm_pacientes"]["adm_tratamento1.idPaciente"]["edit"] = array("table" => "adm_tratamento", "field" => "idPaciente", "page" => "edit");
}

?>