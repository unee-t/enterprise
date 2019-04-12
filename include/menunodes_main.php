<?php

function getMenuNodes_main($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["main"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Case";
	$menuNode["href"] = "https://case.unee-t.com/case";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = "Search";//
	$menuNode["openType"] = "NewWindow";
	
	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Case";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Dashboard";
	$menuNode["href"] = "https://dashboard.unee-t.com/";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = "Search";//
	$menuNode["openType"] = "NewWindow";
	
	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Dashboard";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Documentation";
	$menuNode["href"] = "https://documentation.unee-t.com/";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "NewWindow";
	
	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Documentation";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "Videos and Tutorials";
	$menuNode["href"] = "https://vimeo.com/uneet/albums";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "NewWindow";
	
	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Videos and Tutorials";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
}
?>
