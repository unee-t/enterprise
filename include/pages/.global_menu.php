<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_group2' => array( 'menutItem' => true,
'group' => true,
'items' => array( 'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Manage Unee-T Users',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Manage User Types',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Manage User Default Visibility',
'page' => 'list' ),
'welcome_item5' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Manage User Default Notifications',
'page' => 'list' ) ) ),
'welcome_group1' => array( 'menutItem' => true,
'group' => true,
'items' => array( 'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Manage Unit Names',
'page' => 'list' ) ) ),
'welcome_group' => array( 'menutItem' => true,
'group' => true,
'items' => array( 'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Manage Users - Unee-T Enterprise UI',
'page' => 'list' ) ) ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_group2',
'welcome_group1',
'welcome_group' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_group2' => 'grid',
'welcome_group1' => 'grid',
'welcome_group' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'welcome_group' => array( 'welcome_group',
'welcome_group1',
'welcome_group2' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_group2' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c1',
'items' => array( 'welcome_group1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'welcome_group' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Manage Unee-T Users',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Unee-T Users' ),
'linkIcon' => array( 'glyph' => 'user' ),
'linkComments' => array( 'text' => 'Create or Edit Unee-T Users. Assign Users and User Types',
'type' => 0 ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Manage Users - Unee-T Enterprise UI',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Unee-T Enterprise' ),
'linkIcon' => array( 'glyph' => 'wrench' ),
'linkComments' => array( 'text' => 'Manage accesses to this Application',
'type' => 0 ) ),
'welcome_group' => array( 'type' => 'welcome_group',
'linkText' => array( 'text' => 'Administration',
'type' => 0 ),
'items' => array( 'welcome_item1' ) ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Manage Unit Names',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Unit Names' ),
'linkIcon' => array( 'glyph' => 'pencil' ),
'linkComments' => array( 'text' => 'Edit Unit Names and Unit types of existing units',
'type' => 0 ) ),
'welcome_group1' => array( 'type' => 'welcome_group',
'linkText' => array( 'text' => 'Properties',
'type' => 0 ),
'items' => array( 'welcome_item2' ) ),
'welcome_group2' => array( 'type' => 'welcome_group',
'linkText' => array( 'text' => 'Users and User Types',
'type' => 0 ),
'items' => array( 'welcome_item',
'welcome_item3',
'welcome_item4',
'welcome_item5' ) ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Manage User Types',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Unee-T User Types' ),
'linkIcon' => array( 'glyph' => 'th-list' ),
'linkComments' => array( 'type' => 0,
'text' => 'Manage Permissions, Visibility and Notifications preferences for each user types.' ) ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Manage User Default Visibility',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Default Visibility' ),
'linkComments' => array( 'type' => 0,
'text' => 'Edit User Visiblity parameters for each User Type.' ) ),
'welcome_item5' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'Manage User Default Notifications',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Default Notifications' ),
'linkComments' => array( 'type' => 0,
'text' => 'Edit User Visiblity parameters for each User Type.' ),
'background' => '#d38621' ) ),
'dbProps' => array(  ),
'version' => 2 );
		?>