<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'login_header',
'image' ),
'above-grid' => array( 'login_message' ),
'grid' => array( 'username_label',
'username',
'password_label',
'password',
'remember_password' ),
'footer' => array( 'login_button',
'continue_login_button',
'guest_login' ),
'superbottom' => array(  ) ),
'formXtTags' => array( 'supertop' => array(  ),
'footer' => array( 'signin_button',
'continue_button',
'guestlink_block' ),
'superbottom' => array(  ) ),
'itemForms' => array( 'login_header' => 'top',
'image' => 'top',
'login_message' => 'above-grid',
'username_label' => 'grid',
'username' => 'grid',
'password_label' => 'grid',
'password' => 'grid',
'remember_password' => 'grid',
'login_button' => 'footer',
'continue_login_button' => 'footer',
'guest_login' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'username_label' => array( 'username_label' ),
'username' => array( 'username' ),
'password_label' => array( 'password_label' ),
'password' => array( 'password' ),
'login_message' => array( 'login_message' ),
'login_button' => array( 'login_button' ),
'guest_login' => array( 'guest_login' ),
'login_header' => array( 'login_header' ),
'remember_password' => array( 'remember_password' ),
'continue_login_button' => array( 'continue_login_button' ),
'image' => array( 'image' ) ),
'cellMaps' => array(  ) ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'login',
'type' => 'login',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'login-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'center' ),
'c2' => array( 'model' => 'c2',
'items' => array( 'image' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'center' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'login-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'login_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'login-labels',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'username_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'username' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'password_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'password' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c9' => array( 'model' => 'c9',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c10' => array( 'model' => 'c10',
'items' => array( 'remember_password' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'login-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'login_button',
'continue_login_button',
'guest_login' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'superbottom' => array( 'modelId' => 'login-superbottom',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'username_label' => array( 'type' => 'username_label' ),
'username' => array( 'type' => 'username' ),
'password_label' => array( 'type' => 'password_label' ),
'password' => array( 'type' => 'password' ),
'login_message' => array( 'type' => 'login_message' ),
'login_button' => array( 'type' => 'login_button' ),
'guest_login' => array( 'type' => 'guest_login' ),
'login_header' => array( 'type' => 'login_header' ),
'remember_password' => array( 'type' => 'remember_password' ),
'continue_login_button' => array( 'type' => 'continue_login_button' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ) ),
'dbProps' => array(  ),
'version' => 2 );
		?>