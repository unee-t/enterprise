<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'system_id_unit',
'room_designation',
'country_code',
'area_id',
'building_system_id',
'is_room_obsolete' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'system_id_unit' => array( 'integrated_search_field17' ),
'room_designation' => array( 'integrated_search_field22' ),
'country_code' => array( 'integrated_search_field6' ),
'area_id' => array( 'integrated_search_field8' ),
'building_system_id' => array( 'integrated_search_field10' ),
'is_room_obsolete' => array( 'integrated_search_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'image',
'logo',
'menu' ),
'top' => array( 'search_header' ),
'above-grid' => array( 'breadcrumb' ),
'below-grid' => array( 'search_search',
'search_reset',
'search_back_list' ),
'grid' => array( 'integrated_search_field6',
'integrated_search_field8',
'integrated_search_field10',
'integrated_search_field17',
'integrated_search_field22',
'integrated_search_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'breadcrumb' ) ),
'itemForms' => array( 'image' => 'supertop',
'logo' => 'supertop',
'menu' => 'supertop',
'search_header' => 'top',
'breadcrumb' => 'above-grid',
'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'integrated_search_field6' => 'grid',
'integrated_search_field8' => 'grid',
'integrated_search_field10' => 'grid',
'integrated_search_field17' => 'grid',
'integrated_search_field22' => 'grid',
'integrated_search_field' => 'grid' ),
'itemLocations' => array( 'integrated_search_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field10' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field22' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_search' => array( 'search_search' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'integrated_search_field' => array( 'integrated_search_field17',
'integrated_search_field22',
'integrated_search_field6',
'integrated_search_field8',
'integrated_search_field10',
'integrated_search_field' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field6',
'integrated_search_field8',
'integrated_search_field10',
'integrated_search_field17',
'integrated_search_field22',
'integrated_search_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'search',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'search',
'type' => 'search',
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
'top' => array( 'modelId' => 'search-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'search-above-grid',
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
'below-grid' => array( 'modelId' => 'search-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_search',
'search_reset',
'search_back_list' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-search',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_search_field6',
'integrated_search_field8',
'integrated_search_field10',
'integrated_search_field17',
'integrated_search_field22',
'integrated_search_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_search' => array( 'type' => 'search_search' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'integrated_search_field17' => array( 'field' => 'system_id_unit',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field22' => array( 'field' => 'room_designation',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field6' => array( 'field' => 'country_code',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field8' => array( 'field' => 'area_id',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field10' => array( 'field' => 'building_system_id',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'integrated_search_field' => array( 'field' => 'is_room_obsolete',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>