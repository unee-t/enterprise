<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'details' => array( 'Manage Units' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ) ),
'master' => array( 'Manage Areas' => array( 'preview' => true ) ),
'fields' => array( 'gridFields' => array( 'country_code',
'designation',
'area_id',
'unee_t_unit_type',
'is_creation_needed_in_unee_t',
'tower',
'description',
'order',
'is_obsolete',
'external_system_id',
'external_id',
'external_table' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'country_code' => array( 'integrated_edit_field4' ),
'designation' => array( 'integrated_edit_field6' ),
'area_id' => array( 'integrated_edit_field5' ),
'unee_t_unit_type' => array( 'integrated_edit_field8' ),
'is_creation_needed_in_unee_t' => array( 'integrated_edit_field10' ),
'tower' => array( 'integrated_edit_field7' ),
'description' => array( 'integrated_edit_field9' ),
'order' => array( 'integrated_edit_field12' ),
'is_obsolete' => array( 'integrated_edit_field3' ),
'external_system_id' => array( 'integrated_edit_field1' ),
'external_id' => array( 'integrated_edit_field' ),
'external_table' => array( 'integrated_edit_field2' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu' ),
'top' => array( 'view_header' ),
'above-grid' => array( 'breadcrumb' ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'section1',
'master_info',
'section',
'details_preview' ),
'section1' => array( 'integrated_edit_field4',
'integrated_edit_field10',
'integrated_edit_field5',
'integrated_edit_field8',
'integrated_edit_field6',
'integrated_edit_field7',
'integrated_edit_field3',
'integrated_edit_field12',
'integrated_edit_field9' ),
'section' => array( 'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2' ) ),
'formXtTags' => array( 'above-grid' => array( 'breadcrumb' ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'view_header' => 'top',
'breadcrumb' => 'above-grid',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'section1' => 'grid',
'master_info' => 'grid',
'section' => 'grid',
'details_preview' => 'grid',
'integrated_edit_field4' => 'section1',
'integrated_edit_field10' => 'section1',
'integrated_edit_field5' => 'section1',
'integrated_edit_field8' => 'section1',
'integrated_edit_field6' => 'section1',
'integrated_edit_field7' => 'section1',
'integrated_edit_field3' => 'section1',
'integrated_edit_field12' => 'section1',
'integrated_edit_field9' => 'section1',
'integrated_edit_field1' => 'section',
'integrated_edit_field' => 'section',
'integrated_edit_field2' => 'section' ),
'itemLocations' => array( 'section1' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c' ),
'section' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field4' => array( 'location' => 'section1',
'cellId' => 'c1' ),
'integrated_edit_field10' => array( 'location' => 'section1',
'cellId' => 'c' ),
'integrated_edit_field5' => array( 'location' => 'section1',
'cellId' => 'c2' ),
'integrated_edit_field8' => array( 'location' => 'section1',
'cellId' => 'c3' ),
'integrated_edit_field6' => array( 'location' => 'section1',
'cellId' => 'c4' ),
'integrated_edit_field7' => array( 'location' => 'section1',
'cellId' => 'c5' ),
'integrated_edit_field3' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field12' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field9' => array( 'location' => 'section1',
'cellId' => 'c8' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c2' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'section' => array( 'section1',
'section' ),
'integrated_edit_field' => array( 'integrated_edit_field4',
'integrated_edit_field6',
'integrated_edit_field5',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field7',
'integrated_edit_field9',
'integrated_edit_field12',
'integrated_edit_field3',
'integrated_edit_field1',
'integrated_edit_field',
'integrated_edit_field2' ),
'master_info' => array( 'master_info' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'section1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'section' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 4 ),
'section1' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 3 ),
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
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
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
'items' => array( 'logo' ),
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
'cells' => array( array( 'cell' => 'c' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'section1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'section' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'details_preview' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ),
array( 'cell' => 'c' ),
array( 'cell' => 'c3' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8',
'colspan' => 4 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field4' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field10' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field5' ) ),
'c3' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field6' ),
'align' => 'center' ),
'c5' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ),
'align' => 'center' ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field3' ),
'align' => 'center' ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ),
'align' => 'center' ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field9' ),
'align' => 'left' ) ),
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
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'section1' => array( 'type' => 'section',
'title' => array( 'text' => 'The building',
'type' => 0 ),
'location' => 'section1',
'label' => array( 'text' => 'The building',
'type' => 0 ) ),
'integrated_edit_field4' => array( 'field' => 'country_code',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field6' => array( 'field' => 'designation',
'type' => 'integrated_edit_field',
'orientation' => 0,
'font-size' => '1.5em',
'bold' => true ),
'integrated_edit_field5' => array( 'field' => 'area_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'unee_t_unit_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field7' => array( 'field' => 'tower',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'description',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'order',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field3' => array( 'field' => 'is_obsolete',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'Manage Areas' => 'true' ) ),
'section' => array( 'type' => 'section',
'title' => array( 'text' => 'Source of the data',
'type' => 0 ),
'location' => 'section',
'label' => array( 'text' => 'Source of the data',
'type' => 0 ) ),
'integrated_edit_field1' => array( 'field' => 'external_system_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field' => array( 'field' => 'external_id',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'external_table',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'Manage Units',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ) ),
'dbProps' => array(  ),
'version' => 2,
'fixedTopbar' => true );
		?>