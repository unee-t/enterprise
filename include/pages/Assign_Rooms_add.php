<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'unee_t_role_id',
'unee_t_mefe_user_id',
'unee_t_user_type_id',
'unee_t_level_3_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'unee_t_role_id' => array( 'integrated_edit_field15' ),
'unee_t_mefe_user_id' => array( 'integrated_edit_field' ),
'unee_t_user_type_id' => array( 'integrated_edit_field1' ),
'unee_t_level_3_id' => array( 'integrated_edit_field2' ) ) ),
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
'grid' => array( 'integrated_edit_field15',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2',
'master_info' ) ),
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
'integrated_edit_field15' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'master_info' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'integrated_edit_field' => array( 'integrated_edit_field15',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field2' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 2 ) ) ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 4 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ) ) ) ),
'cells' => array( 'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field15' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'integrated_edit_field15' => array( 'field' => 'unee_t_role_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'unee_t_mefe_user_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'integrated_edit_field1' => array( 'field' => 'unee_t_user_type_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'unee_t_level_3_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'Manage Rooms' => 'true' ) ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>