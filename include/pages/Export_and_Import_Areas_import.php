<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'is_creation_needed_in_unee_t',
'is_obsolete',
'order',
'country_code',
'area_name',
'area_definition',
'external_id',
'external_system_id',
'external_table',
'created_by_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'is_creation_needed_in_unee_t' => array( 'import_field12' ),
'is_obsolete' => array( 'import_field13' ),
'order' => array( 'import_field15' ),
'country_code' => array( 'import_field16' ),
'area_name' => array( 'import_field17' ),
'area_definition' => array( 'import_field18' ),
'external_id' => array( 'import_field' ),
'external_system_id' => array( 'import_field1' ),
'external_table' => array( 'import_field2' ),
'created_by_id' => array( 'import_field3' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field',
'import_field17',
'import_field16',
'import_field12',
'import_field13',
'import_field15',
'import_field18',
'import_field1',
'import_field2',
'import_field3' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field' => 'grid',
'import_field17' => 'grid',
'import_field16' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field15' => 'grid',
'import_field18' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field12',
'import_field13',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field',
'import_field1',
'import_field2',
'import_field3' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'import',
'type' => 'import',
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
'top' => array( 'modelId' => 'import-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field',
'import_field17',
'import_field16',
'import_field12',
'import_field13',
'import_field15',
'import_field18',
'import_field1',
'import_field2',
'import_field3' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field12' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'is_obsolete',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'order',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'country_code',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'area_name',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'area_definition',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'external_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'external_system_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'external_table',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'created_by_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>