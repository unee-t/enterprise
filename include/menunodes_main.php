<?php

function getMenuNodes_main($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["main"] = array();

	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "Unee-T ressources";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Unee-T ressources";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Case";
	$menuNode["href"] = "https://case.unee-t.com/case";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
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
	$menuNode["id"] = "3";
	$menuNode["name"] = "Dashboard";
	$menuNode["href"] = "https://dashboard.unee-t.com/";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
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
	$menuNode["id"] = "4";
	$menuNode["name"] = "Documentation";
	$menuNode["href"] = "https://documentation.unee-t.com/";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = "Search";//
	$menuNode["openType"] = "NewWindow";
	
	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Documentation";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "Videos and Tutorials";
	$menuNode["href"] = "https://vimeo.com/uneet/albums";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "External";
	$menuNode["pageType"] = "Search";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "glyphicon-share";
	$menuNode["iconType"] = "2";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Videos and Tutorials";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "6";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "Unee-T Enterprise Configuration";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "View";//
	$menuNode["openType"] = "None";
	
	$menuNode["icon"] = "";
	$menuNode["iconType"] = "0";

			$menuNode["color"] = "";
	
	$menuNode["title"] = "Unee-T Enterprise Configuration";



	$menuNodesObject->menuNodes["main"][] = $menuNode;
}
?>
