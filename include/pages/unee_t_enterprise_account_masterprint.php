<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'designation',
'description',
'country_code' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'designation' => array( 'simple_grid_field11',
'simple_grid_field' ),
'description' => array( 'simple_grid_field12',
'simple_grid_field13' ),
'country_code' => array( 'simple_grid_field21',
'simple_grid_field22' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'masterprint_header' ),
'above-grid' => array(  ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field',
'simple_grid_field11',
'simple_grid_field13',
'simple_grid_field12',
'simple_grid_field22',
'simple_grid_field21' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array(  ) ),
'itemForms' => array( 'masterprint_header' => 'top',
'simple_grid_field' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field21' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'masterprint_header' => array( 'masterprint_header' ),
'grid_field' => array( 'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field21' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field13',
'simple_grid_field22' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'designation_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'description_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'country_code_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'designation_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'description_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'country_code_fieldcolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 3,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'masterprint',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'masterprint',
'type' => 'masterprint',
'layoutId' => 'masterprint',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'masterlist-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'masterprint_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'designation',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'designation',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'description',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'description',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'country_code',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'country_code',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'masterprint_header' => array( 'type' => 'masterprint_header' ),
'simple_grid_field11' => array( 'field' => 'designation',
'type' => 'grid_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'designation' ),
'simple_grid_field12' => array( 'field' => 'description',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'description' ),
'simple_grid_field21' => array( 'field' => 'country_code',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'country_code' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>