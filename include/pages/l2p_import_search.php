<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'is_obsolete',
'unee_t_unit_type',
'building_system_id',
'unit_category_id',
'count_rooms',
'surface',
'surface_measurment_unit',
'area_id',
'unit_designation' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'is_obsolete' => array( 'integrated_search_field13' ),
'unee_t_unit_type' => array( 'integrated_search_field16' ),
'building_system_id' => array( 'integrated_search_field17' ),
'unit_category_id' => array( 'integrated_search_field19' ),
'count_rooms' => array( 'integrated_search_field21' ),
'surface' => array( 'integrated_search_field23' ),
'surface_measurment_unit' => array( 'integrated_search_field24' ),
'area_id' => array( 'integrated_search_field27' ),
'unit_designation' => array( 'integrated_search_field30' ) ) ),
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
'grid' => array( 'integrated_search_field27',
'integrated_search_field17',
'integrated_search_field16',
'integrated_search_field19',
'integrated_search_field30',
'integrated_search_field13',
'integrated_search_field21',
'integrated_search_field23',
'integrated_search_field24' ) ),
'formXtTags' => array( 'above-grid' => array( 'breadcrumb' ) ),
'itemForms' => array( 'image' => 'supertop',
'logo' => 'supertop',
'menu' => 'supertop',
'search_header' => 'top',
'breadcrumb' => 'above-grid',
'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'integrated_search_field27' => 'grid',
'integrated_search_field17' => 'grid',
'integrated_search_field16' => 'grid',
'integrated_search_field19' => 'grid',
'integrated_search_field30' => 'grid',
'integrated_search_field13' => 'grid',
'integrated_search_field21' => 'grid',
'integrated_search_field23' => 'grid',
'integrated_search_field24' => 'grid' ),
'itemLocations' => array( 'integrated_search_field27' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field19' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field30' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field21' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field23' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field24' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_search' => array( 'search_search' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'integrated_search_field' => array( 'integrated_search_field13',
'integrated_search_field16',
'integrated_search_field17',
'integrated_search_field19',
'integrated_search_field21',
'integrated_search_field23',
'integrated_search_field24',
'integrated_search_field27',
'integrated_search_field30' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field27',
'integrated_search_field17',
'integrated_search_field16',
'integrated_search_field19',
'integrated_search_field30',
'integrated_search_field13',
'integrated_search_field21',
'integrated_search_field23',
'integrated_search_field24' ),
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
'items' => array( 'integrated_search_field27',
'integrated_search_field17',
'integrated_search_field16',
'integrated_search_field19',
'integrated_search_field30',
'integrated_search_field13',
'integrated_search_field21',
'integrated_search_field23',
'integrated_search_field24' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_search' => array( 'type' => 'search_search' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'integrated_search_field13' => array( 'field' => 'is_obsolete',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field16' => array( 'field' => 'unee_t_unit_type',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field17' => array( 'field' => 'building_system_id',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field19' => array( 'field' => 'unit_category_id',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field21' => array( 'field' => 'count_rooms',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field23' => array( 'field' => 'surface',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field24' => array( 'field' => 'surface_measurment_unit',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field27' => array( 'field' => 'area_id',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field30' => array( 'field' => 'unit_designation',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>