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
		if( !isset( $lookupTableLinks["adm_tipousuario"]["usuarios.tipo_usuario"] )) {
			$lookupTableLinks["adm_tipousuario"]["usuarios.tipo_usuario"] = array();
		}
		$lookupTableLinks["adm_tipousuario"]["usuarios.tipo_usuario"]["edit"] = array("table" => "usuarios", "field" => "tipo_usuario", "page" => "edit");
		if( !isset( $lookupTableLinks["adm_plano_profissional"] ) ) {
			$lookupTableLinks["adm_plano_profissional"] = array();
		}
		if( !isset( $lookupTableLinks["adm_plano_profissional"]["usuarios.plano_tipo"] )) {
			$lookupTableLinks["adm_plano_profissional"]["usuarios.plano_tipo"] = array();
		}
		$lookupTableLinks["adm_plano_profissional"]["usuarios.plano_tipo"]["edit"] = array("table" => "usuarios", "field" => "plano_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["ibge_pais"] ) ) {
			$lookupTableLinks["ibge_pais"] = array();
		}
		if( !isset( $lookupTableLinks["ibge_pais"]["usuarios.pais"] )) {
			$lookupTableLinks["ibge_pais"]["usuarios.pais"] = array();
		}
		$lookupTableLinks["ibge_pais"]["usuarios.pais"]["edit"] = array("table" => "usuarios", "field" => "pais", "page" => "edit");
		if( !isset( $lookupTableLinks["ibge_municipios"] ) ) {
			$lookupTableLinks["ibge_municipios"] = array();
		}
		if( !isset( $lookupTableLinks["ibge_municipios"]["usuarios.municipio"] )) {
			$lookupTableLinks["ibge_municipios"]["usuarios.municipio"] = array();
		}
		$lookupTableLinks["ibge_municipios"]["usuarios.municipio"]["edit"] = array("table" => "usuarios", "field" => "municipio", "page" => "edit");
		if( !isset( $lookupTableLinks["usuarios_dados_profissionais"] ) ) {
			$lookupTableLinks["usuarios_dados_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios_dados_profissionais"]["usuarios.idEmpresa"] )) {
			$lookupTableLinks["usuarios_dados_profissionais"]["usuarios.idEmpresa"] = array();
		}
		$lookupTableLinks["usuarios_dados_profissionais"]["usuarios.idEmpresa"]["edit"] = array("table" => "usuarios", "field" => "idEmpresa", "page" => "edit");
		if( !isset( $lookupTableLinks["planos"] ) ) {
			$lookupTableLinks["planos"] = array();
		}
		if( !isset( $lookupTableLinks["planos"]["meuplano.idPlano"] )) {
			$lookupTableLinks["planos"]["meuplano.idPlano"] = array();
		}
		$lookupTableLinks["planos"]["meuplano.idPlano"]["edit"] = array("table" => "meuplano", "field" => "idPlano", "page" => "edit");
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
		if( !isset( $lookupTableLinks["usuarios_dados_profissionais"] ) ) {
			$lookupTableLinks["usuarios_dados_profissionais"] = array();
		}
		if( !isset( $lookupTableLinks["usuarios_dados_profissionais"]["busca_profissional.idEmpresa"] )) {
			$lookupTableLinks["usuarios_dados_profissionais"]["busca_profissional.idEmpresa"] = array();
		}
		$lookupTableLinks["usuarios_dados_profissionais"]["busca_profissional.idEmpresa"]["edit"] = array("table" => "Busca Profissional", "field" => "idEmpresa", "page" => "edit");
}

?>