<?php

$tdataGLOBAL = array();


$tdataGLOBAL[".pagesByType"] = my_json_decode( "{\"login\":[\"login_Calendar1\"],\"menu\":[\"menu_Calendar1\"],\"register\":[\"register_Calendar1\"],\"register_success\":[\"register_success_Calendar1\"]}" );
$tdataGLOBAL[".originalPagesByType"] = $tdataGLOBAL[".pagesByType"];
$tdataGLOBAL[".pages"] = types2pages( my_json_decode( "{\"login\":[\"login_Calendar1\"],\"menu\":[\"menu_Calendar1\"],\"register\":[\"register_Calendar1\"],\"register_success\":[\"register_success_Calendar1\"]}" ) );
$tdataGLOBAL[".originalPages"] = $tdataGLOBAL[".pages"];
$tdataGLOBAL[".defaultPages"] = my_json_decode( "{\"login\":\"login_Calendar1\",\"menu\":\"menu_Calendar1\",\"register\":\"register_Calendar1\",\"register_success\":\"register_success_Calendar1\"}" );
$tdataGLOBAL[".originalDefaultPages"] = $tdataGLOBAL[".defaultPages"];

$tables_data["<global>"] =& $tdataGLOBAL;


$detailsTablesData["<global>"] = array();
$masterTablesData["<global>"] = array();

?>