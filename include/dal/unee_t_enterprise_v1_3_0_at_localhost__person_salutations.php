<?php
$dalTableperson_salutations = array();
$dalTableperson_salutations["id_salutation"] = array("type"=>3,"varname"=>"id_salutation", "name" => "id_salutation");
$dalTableperson_salutations["creation_system_id"] = array("type"=>3,"varname"=>"creation_system_id", "name" => "creation_system_id");
$dalTableperson_salutations["update_system_id"] = array("type"=>3,"varname"=>"update_system_id", "name" => "update_system_id");
$dalTableperson_salutations["is_obsolete"] = array("type"=>16,"varname"=>"is_obsolete", "name" => "is_obsolete");
$dalTableperson_salutations["order"] = array("type"=>3,"varname"=>"order", "name" => "order");
$dalTableperson_salutations["salutation"] = array("type"=>200,"varname"=>"salutation", "name" => "salutation");
$dalTableperson_salutations["salutation_description"] = array("type"=>201,"varname"=>"salutation_description", "name" => "salutation_description");
	$dalTableperson_salutations["id_salutation"]["key"]=true;
	$dalTableperson_salutations["salutation"]["key"]=true;

$dal_info["unee_t_enterprise_v1_3_0_at_localhost__person_salutations"] = &$dalTableperson_salutations;
?>