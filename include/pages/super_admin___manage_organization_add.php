<?php
			$optionsArray = array( 'details' => array( 'Super Admin - Manage API Keys' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'SuperAdmin - manage UNTE admins' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'Super Admin - Manage MEFE Master User' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'Super Admin - Default sot for Unee-T objects' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'designation',
'description',
'default_role_type_id',
'country_code' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'designation' => array( 'integrated_edit_field10' ),
'description' => array( 'integrated_edit_field11' ),
'default_role_type_id' => array( 'integrated_edit_field' ),
'country_code' => array( 'integrated_edit_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'image',
'logo',
'menu' ),
'top' => array( 'add_header' ),
'above-grid' => array( 'add_message',
'breadcrumb' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'integrated_edit_field10',
'integrated_edit_field',
'details_preview',
'integrated_edit_field1',
'integrated_edit_field11',
'details_preview1' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block',
'breadcrumb' ) ),
'itemForms' => array( 'image' => 'supertop',
'logo' => 'supertop',
'menu' => 'supertop',
'add_header' => 'top',
'add_message' => 'above-grid',
'breadcrumb' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field11' => 'grid',
'details_preview1' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c2' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'c8' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'integrated_edit_field' => array( 'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field',
'integrated_edit_field1' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ),
'details_preview' => array( 'details_preview',
'details_preview1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'add',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image',
'logo' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c1',
'colspan' => 1 ),
array( 'cell' => 'c2' ) ) ),
array( 'cells' => array( array( 'cell' => 'c7',
'colspan' => 4 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 4 ) ) ) ),
'cells' => array( 'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'details_preview' ) ),
'c2' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field11' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'details_preview1' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'integrated_edit_field10' => array( 'field' => 'designation',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'description',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'Super Admin - Manage MEFE Master User',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field' => array( 'field' => 'default_role_type_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field1' => array( 'field' => 'country_code',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'Super Admin - Default sot for Unee-T objects',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ) ),
'dbProps' => array(  ),
'version' => 4,
'fixedTopbar' => true );
		?>