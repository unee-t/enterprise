<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'unee_t_role_id',
'unee_t_mefe_user_id',
'unee_t_user_type_id',
'id_map_user_unit_permissions_level_3',
'unee_t_level_3_id',
'system_id_unit',
'room_name' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'unee_t_role_id' => array( 'import_field16' ),
'unee_t_mefe_user_id' => array( 'import_field' ),
'unee_t_user_type_id' => array( 'import_field1' ),
'id_map_user_unit_permissions_level_3' => array( 'import_field2' ),
'unee_t_level_3_id' => array( 'import_field3' ),
'system_id_unit' => array( 'import_field4' ),
'room_name' => array( 'import_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field16',
'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field16' => 'grid',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field4' => 'grid',
'import_field6' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field16',
'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
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
'items' => array( 'import_field16',
'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field4',
'import_field6' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field16' => array( 'field' => 'unee_t_role_id',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'unee_t_mefe_user_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'unee_t_user_type_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'id_map_user_unit_permissions_level_3',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'unee_t_level_3_id',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'system_id_unit',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'room_name',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 2 );
		?>