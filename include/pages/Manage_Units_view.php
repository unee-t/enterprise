<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'Manage Rooms' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'Assign Units to User' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'master' => array( 'Manage Buildings' => array( 'preview' => true ) ),
'fields' => array( 'gridFields' => array( 'external_system_id',
'external_id',
'external_table',
'building_system_id',
'unit_id',
'unee_t_unit_type',
'description',
'is_creation_needed_in_unee_t',
'is_obsolete',
'unit_designation',
'count_rooms',
'surface',
'surface_measurment_unit',
'uneet_created_datetime',
'mgt_cny_default_assignee_l2p',
'landlord_default_assignee_l2p',
'tenant_default_assignee_l2p',
'agent_default_assignee_l2p' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'external_system_id' => array( 'integrated_edit_field1' ),
'external_id' => array( 'integrated_edit_field' ),
'external_table' => array( 'integrated_edit_field2' ),
'building_system_id' => array( 'integrated_edit_field16' ),
'unit_id' => array( 'integrated_edit_field21' ),
'unee_t_unit_type' => array( 'integrated_edit_field15' ),
'description' => array( 'integrated_edit_field24' ),
'is_creation_needed_in_unee_t' => array( 'integrated_edit_field13' ),
'is_obsolete' => array( 'integrated_edit_field12' ),
'unit_designation' => array( 'integrated_edit_field5' ),
'count_rooms' => array( 'integrated_edit_field20' ),
'surface' => array( 'integrated_edit_field22' ),
'surface_measurment_unit' => array( 'integrated_edit_field23' ),
'uneet_created_datetime' => array( 'integrated_edit_field3' ),
'mgt_cny_default_assignee_l2p' => array( 'integrated_edit_field4' ),
'landlord_default_assignee_l2p' => array( 'integrated_edit_field6' ),
'tenant_default_assignee_l2p' => array( 'integrated_edit_field7' ),
'agent_default_assignee_l2p' => array( 'integrated_edit_field8' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'image',
'logo',
'menu' ),
'top' => array( 'view_header' ),
'above-grid' => array( 'breadcrumb' ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'section',
'section1',
'master_info',
'details_preview',
'details_preview1',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8' ),
'section' => array( 'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2' ),
'section1' => array( 'integrated_edit_field16',
'integrated_edit_field21',
'integrated_edit_field15',
'integrated_edit_field24',
'integrated_edit_field3',
'integrated_edit_field12',
'integrated_edit_field5',
'integrated_edit_field20',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field13' ) ),
'formXtTags' => array( 'above-grid' => array( 'breadcrumb' ) ),
'itemForms' => array( 'image' => 'supertop',
'logo' => 'supertop',
'menu' => 'supertop',
'view_header' => 'top',
'breadcrumb' => 'above-grid',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'section' => 'grid',
'section1' => 'grid',
'master_info' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field1' => 'section',
'integrated_edit_field' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field16' => 'section1',
'integrated_edit_field21' => 'section1',
'integrated_edit_field15' => 'section1',
'integrated_edit_field24' => 'section1',
'integrated_edit_field3' => 'section1',
'integrated_edit_field12' => 'section1',
'integrated_edit_field5' => 'section1',
'integrated_edit_field20' => 'section1',
'integrated_edit_field22' => 'section1',
'integrated_edit_field23' => 'section1',
'integrated_edit_field13' => 'section1' ),
'itemLocations' => array( 'section' => array( 'location' => 'grid',
'cellId' => 'c' ),
'section1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c2' ),
'integrated_edit_field16' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field21' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field15' => array( 'location' => 'section1',
'cellId' => 'c3' ),
'integrated_edit_field24' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field3' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field12' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field5' => array( 'location' => 'section1',
'cellId' => 'c8' ),
'integrated_edit_field20' => array( 'location' => 'section1',
'cellId' => 'c9' ),
'integrated_edit_field22' => array( 'location' => 'section1',
'cellId' => 'c10' ),
'integrated_edit_field23' => array( 'location' => 'section1',
'cellId' => 'c11' ),
'integrated_edit_field13' => array( 'location' => 'section1',
'cellId' => 'c5' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'section' => array( 'section',
'section1' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field16',
'integrated_edit_field21',
'integrated_edit_field15',
'integrated_edit_field24',
'integrated_edit_field13',
'integrated_edit_field12',
'integrated_edit_field5',
'integrated_edit_field20',
'integrated_edit_field22',
'integrated_edit_field23',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8' ),
'details_preview' => array( 'details_preview',
'details_preview1' ),
'master_info' => array( 'master_info' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c5' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'section1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 6 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 1 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field15' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field21' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field20' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field22' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field23' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field24' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
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
'misc' => array( 'type' => 'view',
'breadcrumb' => true,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
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
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c1' ) ) ),
array( 'cells' => array( array( 'cell' => 'c6' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'section' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'section1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'details_preview',
'details_preview1' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c3' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field16' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field21' ),
'align' => 'center' ),
'c2' => array( 'model' => 'c1',
'items' => array(  ),
'align' => 'center' ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field15' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field24' ) ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ),
'align' => 'center' ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ),
'align' => 'center' ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c9' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field20' ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field22' ),
'align' => 'center' ),
'c11' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field23' ),
'align' => 'center' ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => 'Source of the data',
'type' => 0 ),
'location' => 'section',
'label' => array( 'text' => 'Source of the data',
'type' => 0 ) ),
'integrated_edit_field1' => array( 'field' => 'external_system_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field' => array( 'field' => 'external_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'external_table',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'Manage Rooms',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'section1' => array( 'type' => 'section',
'title' => array( 'text' => 'The Unit',
'type' => 0 ),
'location' => 'section1',
'label' => array( 'text' => 'The Unit',
'type' => 0 ) ),
'integrated_edit_field16' => array( 'field' => 'building_system_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field21' => array( 'field' => 'unit_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field15' => array( 'field' => 'unee_t_unit_type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field24' => array( 'field' => 'description',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'is_obsolete',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field5' => array( 'field' => 'unit_designation',
'type' => 'integrated_edit_field',
'orientation' => 0,
'bold' => true ),
'integrated_edit_field20' => array( 'field' => 'count_rooms',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field22' => array( 'field' => 'surface',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field23' => array( 'field' => 'surface_measurment_unit',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'Manage Buildings' => 'true' ) ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'integrated_edit_field3' => array( 'field' => 'uneet_created_datetime',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'Assign Units to User',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field4' => array( 'field' => 'mgt_cny_default_assignee_l2p',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'landlord_default_assignee_l2p',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field7' => array( 'field' => 'tenant_default_assignee_l2p',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'agent_default_assignee_l2p',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 4,
'fixedTopbar' => true );
		?>