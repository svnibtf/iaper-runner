<?php
$dalTablecalusers = array();
$dalTablecalusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id");
$dalTablecalusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username");
$dalTablecalusers["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
	$dalTablecalusers["id"]["key"]=true;

$dal_info["Calendar_at_localhost__calusers"] = &$dalTablecalusers;
?>