<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'external_id',
'external_system_id',
'external_table',
'designation',
'tower',
'unee_t_unit_type',
'description',
'is_creation_needed_in_unee_t',
'is_obsolete',
'order',
'area_id',
'address_1',
'address_2',
'zip_postal_code',
'state',
'city',
'country_code',
'created_by_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'external_id' => array( 'import_field1' ),
'external_system_id' => array( 'import_field2' ),
'external_table' => array( 'import_field3' ),
'designation' => array( 'import_field4' ),
'tower' => array( 'import_field5' ),
'unee_t_unit_type' => array( 'import_field6' ),
'description' => array( 'import_field7' ),
'is_creation_needed_in_unee_t' => array( 'import_field8' ),
'is_obsolete' => array( 'import_field12' ),
'order' => array( 'import_field13' ),
'area_id' => array( 'import_field9' ),
'address_1' => array( 'import_field10' ),
'address_2' => array( 'import_field11' ),
'zip_postal_code' => array( 'import_field14' ),
'state' => array( 'import_field15' ),
'city' => array( 'import_field16' ),
'country_code' => array( 'import_field17' ),
'created_by_id' => array( 'import_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'image',
'import_header' ),
'grid' => array( 'import_field17',
'import_field9',
'import_field1',
'import_field4',
'import_field8',
'import_field6',
'import_field12',
'import_field13',
'import_field7',
'import_field5',
'import_field10',
'import_field11',
'import_field14',
'import_field16',
'import_field15',
'import_field2',
'import_field3',
'import_field' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'image' => 'top',
'import_header' => 'top',
'import_field17' => 'grid',
'import_field9' => 'grid',
'import_field1' => 'grid',
'import_field4' => 'grid',
'import_field8' => 'grid',
'import_field6' => 'grid',
'import_field12' => 'grid',
'import_field13' => 'grid',
'import_field7' => 'grid',
'import_field5' => 'grid',
'import_field10' => 'grid',
'import_field11' => 'grid',
'import_field14' => 'grid',
'import_field16' => 'grid',
'import_field15' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field12',
'import_field13',
'import_field9',
'import_field10',
'import_field11',
'import_field14',
'import_field15',
'import_field16',
'import_field17',
'import_field' ),
'image' => array( 'image' ) ),
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
'items' => array( 'image',
'import_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'import-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'import_field17',
'import_field9',
'import_field1',
'import_field4',
'import_field8',
'import_field6',
'import_field12',
'import_field13',
'import_field7',
'import_field5',
'import_field10',
'import_field11',
'import_field14',
'import_field16',
'import_field15',
'import_field2',
'import_field3',
'import_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'external_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'external_system_id',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'external_table',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'designation',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'tower',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'unee_t_unit_type',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'description',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'is_obsolete',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'order',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'area_id',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'address_1',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'address_2',
'type' => 'import_field' ),
'import_field14' => array( 'field' => 'zip_postal_code',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'state',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'city',
'type' => 'import_field' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'import_field17' => array( 'field' => 'country_code',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'created_by_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>