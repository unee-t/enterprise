<?php
			$optionsArray = array( 'totals' => array( 'id_map_user_unit_permissions_level_3' => array( 'totalsType' => '' ),
'syst_created_datetime' => array( 'totalsType' => '' ),
'creation_system_id' => array( 'totalsType' => '' ),
'created_by_id' => array( 'totalsType' => '' ),
'creation_method' => array( 'totalsType' => '' ),
'syst_updated_datetime' => array( 'totalsType' => '' ),
'update_system_id' => array( 'totalsType' => '' ),
'updated_by_id' => array( 'totalsType' => '' ),
'update_method' => array( 'totalsType' => '' ),
'organization_id' => array( 'totalsType' => '' ),
'is_permission_obsolete' => array( 'totalsType' => '' ),
'is_update_needed' => array( 'totalsType' => '' ),
'unee_t_update_ts' => array( 'totalsType' => '' ),
'unee_t_mefe_user_id' => array( 'totalsType' => '' ),
'area_id' => array( 'totalsType' => '' ),
'area_name' => array( 'totalsType' => '' ),
'id_building' => array( 'totalsType' => '' ),
'building_name' => array( 'totalsType' => '' ),
'system_id_unit' => array( 'totalsType' => '' ),
'unit_name' => array( 'totalsType' => '' ),
'unee_t_level_3_id' => array( 'totalsType' => '' ),
'room_name' => array( 'totalsType' => '' ),
'person_id' => array( 'totalsType' => '' ),
'unee_t_role_id' => array( 'totalsType' => '' ),
'user_role' => array( 'totalsType' => '' ),
'unee_t_user_type_id' => array( 'totalsType' => '' ),
'user_type' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'unee_t_role_id',
'unee_t_mefe_user_id',
'unee_t_user_type_id',
'id_map_user_unit_permissions_level_3',
'unee_t_level_3_id',
'system_id_unit',
'room_name' ),
'exportFields' => array( 'unee_t_role_id',
'unee_t_mefe_user_id',
'unee_t_user_type_id',
'id_map_user_unit_permissions_level_3',
'unee_t_level_3_id',
'system_id_unit',
'room_name' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'unee_t_role_id' => array( 'export_field16' ),
'unee_t_mefe_user_id' => array( 'export_field' ),
'unee_t_user_type_id' => array( 'export_field1' ),
'id_map_user_unit_permissions_level_3' => array( 'export_field2' ),
'unee_t_level_3_id' => array( 'export_field3' ),
'system_id_unit' => array( 'export_field4' ),
'room_name' => array( 'export_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field16',
'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field6' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field16' => 'grid',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field6' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field16',
'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field6' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ) ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
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
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field16',
'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field6' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field16' => array( 'field' => 'unee_t_role_id',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'unee_t_mefe_user_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'unee_t_user_type_id',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'id_map_user_unit_permissions_level_3',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'unee_t_level_3_id',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'system_id_unit',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'room_name',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 2,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>