<?php
			$optionsArray = array( 'totals' => array( 'id_area' => array( 'totalsType' => '' ),
'external_id' => array( 'totalsType' => '' ),
'external_system_id' => array( 'totalsType' => '' ),
'external_table' => array( 'totalsType' => '' ),
'syst_created_datetime' => array( 'totalsType' => '' ),
'creation_system_id' => array( 'totalsType' => '' ),
'created_by_id' => array( 'totalsType' => '' ),
'creation_method' => array( 'totalsType' => '' ),
'syst_updated_datetime' => array( 'totalsType' => '' ),
'update_system_id' => array( 'totalsType' => '' ),
'updated_by_id' => array( 'totalsType' => '' ),
'update_method' => array( 'totalsType' => '' ),
'is_creation_needed_in_unee_t' => array( 'totalsType' => '' ),
'is_obsolete' => array( 'totalsType' => '' ),
'is_default' => array( 'totalsType' => '' ),
'order' => array( 'totalsType' => '' ),
'country_code' => array( 'totalsType' => '' ),
'area_name' => array( 'totalsType' => '' ),
'area_definition' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'is_creation_needed_in_unee_t',
'is_obsolete',
'order',
'country_code',
'area_name',
'area_definition',
'external_id',
'id_area',
'external_table' ),
'exportFields' => array( 'id_area',
'external_id',
'external_table',
'area_name',
'country_code',
'is_creation_needed_in_unee_t',
'is_obsolete',
'order',
'area_definition' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'is_creation_needed_in_unee_t' => array( 'export_field12' ),
'is_obsolete' => array( 'export_field13' ),
'order' => array( 'export_field15' ),
'country_code' => array( 'export_field16' ),
'area_name' => array( 'export_field17' ),
'area_definition' => array( 'export_field18' ),
'external_id' => array( 'export_field' ),
'id_area' => array( 'export_field1' ),
'external_table' => array( 'export_field2' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field',
'export_field2',
'export_field17',
'export_field16',
'export_field12',
'export_field13',
'export_field15',
'export_field18' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field' => 'grid',
'export_field2' => 'grid',
'export_field17' => 'grid',
'export_field16' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field15' => 'grid',
'export_field18' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field12',
'export_field13',
'export_field15',
'export_field16',
'export_field17',
'export_field18',
'export_field',
'export_field1',
'export_field2' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
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
'items' => array( 'export_field1',
'export_field',
'export_field2',
'export_field17',
'export_field16',
'export_field12',
'export_field13',
'export_field15',
'export_field18' ),
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
'export_field12' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'is_obsolete',
'type' => 'export_field' ),
'export_field15' => array( 'field' => 'order',
'type' => 'export_field' ),
'export_field16' => array( 'field' => 'country_code',
'type' => 'export_field' ),
'export_field17' => array( 'field' => 'area_name',
'type' => 'export_field' ),
'export_field18' => array( 'field' => 'area_definition',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'external_id',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'id_area',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'external_table',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>