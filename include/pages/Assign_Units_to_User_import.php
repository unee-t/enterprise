<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'is_obsolete',
'unee_t_role_id',
'unee_t_mefe_user_id',
'unee_t_user_type_id',
'id_map_user_unit_permissions_level_2',
'propagate_level_3',
'unee_t_level_2_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'is_obsolete' => array( 'import_field10' ),
'unee_t_role_id' => array( 'import_field16' ),
'unee_t_mefe_user_id' => array( 'import_field' ),
'unee_t_user_type_id' => array( 'import_field1' ),
'id_map_user_unit_permissions_level_2' => array( 'import_field2' ),
'propagate_level_3' => array( 'import_field3' ),
'unee_t_level_2_id' => array( 'import_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field10',
'import_field16',
'import_field',
'import_field1',
'import_field3',
'import_field2',
'import_field5' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field10' => 'grid',
'import_field16' => 'grid',
'import_field' => 'grid',
'import_field1' => 'grid',
'import_field3' => 'grid',
'import_field2' => 'grid',
'import_field5' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field10',
'import_field16',
'import_field',
'import_field1',
'import_field2',
'import_field3',
'import_field5' ) ),
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
'items' => array( 'import_field10',
'import_field16',
'import_field',
'import_field1',
'import_field3',
'import_field2',
'import_field5' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field10' => array( 'field' => 'is_obsolete',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'unee_t_role_id',
'type' => 'import_field' ),
'import_field' => array( 'field' => 'unee_t_mefe_user_id',
'type' => 'import_field' ),
'import_field1' => array( 'field' => 'unee_t_user_type_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'id_map_user_unit_permissions_level_2',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'propagate_level_3',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'unee_t_level_2_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>