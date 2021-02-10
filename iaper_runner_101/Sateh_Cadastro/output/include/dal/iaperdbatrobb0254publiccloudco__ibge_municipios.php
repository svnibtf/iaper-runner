<?php
$dalTableibge_municipios = array();
$dalTableibge_municipios["codigo_ibge"] = array("type"=>3,"varname"=>"codigo_ibge", "name" => "codigo_ibge");
$dalTableibge_municipios["nome"] = array("type"=>200,"varname"=>"nome", "name" => "nome");
$dalTableibge_municipios["latitude"] = array("type"=>5,"varname"=>"latitude", "name" => "latitude");
$dalTableibge_municipios["longitude"] = array("type"=>5,"varname"=>"longitude", "name" => "longitude");
$dalTableibge_municipios["capital"] = array("type"=>16,"varname"=>"capital", "name" => "capital");
$dalTableibge_municipios["codigo_uf"] = array("type"=>3,"varname"=>"codigo_uf", "name" => "codigo_uf");
	$dalTableibge_municipios["codigo_ibge"]["key"]=true;

$dal_info["iaperdbatrobb0254publiccloudco__ibge_municipios"] = &$dalTableibge_municipios;
?>