<?php
			$optionsArray = array( 'details' => array( 'Super Admin - Manage API Keys' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'SuperAdmin - manage UNTE admins' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'default_sot_system',
'designation',
'description',
'default_sot_properties',
'default_sot_areas',
'default_sot_persons' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'default_sot_system' => array( 'integrated_edit_field13' ),
'designation' => array( 'integrated_edit_field10' ),
'description' => array( 'integrated_edit_field11' ),
'default_sot_properties' => array( 'integrated_edit_field16' ),
'default_sot_areas' => array( 'integrated_edit_field15' ),
'default_sot_persons' => array( 'integrated_edit_field14' ) ) ),
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
'grid' => array( 'integrated_edit_field13',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field16',
'integrated_edit_field15',
'integrated_edit_field14' ) ),
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
'integrated_edit_field13' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field15' => 'grid',
'integrated_edit_field14' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field15' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c6' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'integrated_edit_field' => array( 'integrated_edit_field13',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field16',
'integrated_edit_field15',
'integrated_edit_field14' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c' => array( 'cols' => array( 0,
1,
2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
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
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 3 ),
array( 'cell' => 'c1' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c5' ),
array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field13' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field11' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field16' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field15' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field14' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'integrated_edit_field13' => array( 'field' => 'default_sot_system',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'designation',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field11' => array( 'field' => 'description',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'default_sot_properties',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'default_sot_areas',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'default_sot_persons',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ) ),
'dbProps' => array(  ),
'version' => 4,
'fixedTopbar' => true );
		?>