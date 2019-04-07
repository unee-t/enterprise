<?php
$dalTableperson_statuses = array();
$dalTableperson_statuses["id_person_status"] = array("type"=>3,"varname"=>"id_person_status", "name" => "id_person_status");
$dalTableperson_statuses["creation_system_id"] = array("type"=>3,"varname"=>"creation_system_id", "name" => "creation_system_id");
$dalTableperson_statuses["update_system_id"] = array("type"=>3,"varname"=>"update_system_id", "name" => "update_system_id");
$dalTableperson_statuses["is_obsolete"] = array("type"=>16,"varname"=>"is_obsolete", "name" => "is_obsolete");
$dalTableperson_statuses["is_default"] = array("type"=>16,"varname"=>"is_default", "name" => "is_default");
$dalTableperson_statuses["is_active"] = array("type"=>16,"varname"=>"is_active", "name" => "is_active");
$dalTableperson_statuses["order"] = array("type"=>3,"varname"=>"order", "name" => "order");
$dalTableperson_statuses["person_status"] = array("type"=>200,"varname"=>"person_status", "name" => "person_status");
$dalTableperson_statuses["person_status_definition"] = array("type"=>201,"varname"=>"person_status_definition", "name" => "person_status_definition");
	$dalTableperson_statuses["id_person_status"]["key"]=true;
	$dalTableperson_statuses["person_status"]["key"]=true;

$dal_info["unee_t_enterprise_v1_3_0_at_localhost__person_statuses"] = &$dalTableperson_statuses;
?>