<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'external_id',
'external_system_id',
'external_table',
'unee_t_unit_type',
'room_designation',
'is_obsolete',
'is_creation_needed_in_unee_t',
'number_of_beds',
'surface',
'surface_measurment_unit',
'room_description',
'created_by_id',
'system_id_unit' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'external_id' => array( 'import_field1' ),
'external_system_id' => array( 'import_field2' ),
'external_table' => array( 'import_field3' ),
'unee_t_unit_type' => array( 'import_field' ),
'room_designation' => array( 'import_field4' ),
'is_obsolete' => array( 'import_field5' ),
'is_creation_needed_in_unee_t' => array( 'import_field6' ),
'number_of_beds' => array( 'import_field7' ),
'surface' => array( 'import_field8' ),
'surface_measurment_unit' => array( 'import_field9' ),
'room_description' => array( 'import_field10' ),
'created_by_id' => array( 'import_field11' ),
'system_id_unit' => array( 'import_field12' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field12',
'import_field4',
'import_field1',
'import_field',
'import_field6',
'import_field5',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field2',
'import_field3',
'import_field11' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field12' => 'grid',
'import_field4' => 'grid',
'import_field1' => 'grid',
'import_field' => 'grid',
'import_field6' => 'grid',
'import_field5' => 'grid',
'import_field7' => 'grid',
'import_field8' => 'grid',
'import_field9' => 'grid',
'import_field10' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field11' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field',
'import_field4',
'import_field5',
'import_field6',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field11',
'import_field12' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
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
'items' => array( 'import_field12',
'import_field4',
'import_field1',
'import_field',
'import_field6',
'import_field5',
'import_field7',
'import_field8',
'import_field9',
'import_field10',
'import_field2',
'import_field3',
'import_field11' ),
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
'import_field' => array( 'field' => 'unee_t_unit_type',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'room_designation',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'is_obsolete',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'import_field' ),
'import_field7' => array( 'field' => 'number_of_beds',
'type' => 'import_field' ),
'import_field8' => array( 'field' => 'surface',
'type' => 'import_field' ),
'import_field9' => array( 'field' => 'surface_measurment_unit',
'type' => 'import_field' ),
'import_field10' => array( 'field' => 'room_description',
'type' => 'import_field' ),
'import_field11' => array( 'field' => 'created_by_id',
'type' => 'import_field' ),
'import_field12' => array( 'field' => 'system_id_unit',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>