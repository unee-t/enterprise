<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'is_creation_needed_in_unee_t',
'is_obsolete',
'country_code',
'area_name' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'is_creation_needed_in_unee_t' => array( 'integrated_search_field12' ),
'is_obsolete' => array( 'integrated_search_field13' ),
'country_code' => array( 'integrated_search_field16' ),
'area_name' => array( 'integrated_search_field17' ) ) ),
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
'grid' => array( 'integrated_search_field12',
'integrated_search_field13',
'integrated_search_field16',
'integrated_search_field17' ) ),
'formXtTags' => array( 'above-grid' => array( 'breadcrumb' ) ),
'itemForms' => array( 'image' => 'supertop',
'logo' => 'supertop',
'menu' => 'supertop',
'search_header' => 'top',
'breadcrumb' => 'above-grid',
'search_search' => 'below-grid',
'search_reset' => 'below-grid',
'search_back_list' => 'below-grid',
'integrated_search_field12' => 'grid',
'integrated_search_field13' => 'grid',
'integrated_search_field16' => 'grid',
'integrated_search_field17' => 'grid' ),
'itemLocations' => array( 'integrated_search_field12' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field13' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field16' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_search_field17' => array( 'location' => 'grid',
'cellId' => 'c3' ) ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'search_header' => array( 'search_header' ),
'search_search' => array( 'search_search' ),
'search_reset' => array( 'search_reset' ),
'search_back_list' => array( 'search_back_list' ),
'integrated_search_field' => array( 'integrated_search_field12',
'integrated_search_field13',
'integrated_search_field16',
'integrated_search_field17' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'image' => array( 'image' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_search_field12',
'integrated_search_field13',
'integrated_search_field16',
'integrated_search_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
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
'items' => array( 'integrated_search_field12',
'integrated_search_field13',
'integrated_search_field16',
'integrated_search_field17' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'separateLabels' => false ) ),
'items' => array( 'search_header' => array( 'type' => 'search_header' ),
'search_search' => array( 'type' => 'search_search' ),
'search_reset' => array( 'type' => 'search_reset' ),
'search_back_list' => array( 'type' => 'search_back_list' ),
'integrated_search_field12' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field13' => array( 'field' => 'is_obsolete',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field16' => array( 'field' => 'country_code',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'integrated_search_field17' => array( 'field' => 'area_name',
'type' => 'integrated_search_field',
'orientation' => 0,
'required' => false ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ) ),
'dbProps' => array(  ),
'version' => 2,
'fixedTopbar' => true );
		?>