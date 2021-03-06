<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'delete' => false,
'updateSelected' => false,
'addInPopup' => null,
'editInPopup' => null,
'viewInPopup' => null,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => true,
'reorderFields' => true ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'system_id_unit' => array( 'totalsType' => '' ),
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
'area_id' => array( 'totalsType' => '' ),
'building_system_id' => array( 'totalsType' => '' ),
'building_id' => array( 'totalsType' => '' ),
'building_designation' => array( 'totalsType' => '' ),
'unit_designation' => array( 'totalsType' => '' ),
'activated_by_id' => array( 'totalsType' => '' ),
'is_obsolete' => array( 'totalsType' => '' ),
'is_creation_needed_in_unee_t' => array( 'totalsType' => '' ),
'unee_t_unit_type' => array( 'totalsType' => '' ),
'unit_type' => array( 'totalsType' => '' ),
'tower' => array( 'totalsType' => '' ),
'unit_category_id' => array( 'totalsType' => '' ),
'count_rooms' => array( 'totalsType' => '' ),
'unit_id' => array( 'totalsType' => '' ),
'surface' => array( 'totalsType' => '' ),
'surface_measurment_unit' => array( 'totalsType' => '' ),
'description' => array( 'totalsType' => '' ),
'do_not_insert' => array( 'totalsType' => '' ),
'order_building' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'unit_designation',
'unee_t_unit_type',
'building_designation',
'is_creation_needed_in_unee_t',
'is_obsolete' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'is_creation_needed_in_unee_t',
'order_building',
'do_not_insert',
'description',
'surface_measurment_unit',
'surface',
'unit_id',
'count_rooms',
'unit_category_id',
'tower',
'unit_type',
'activated_by_id',
'building_designation',
'building_id',
'update_method',
'updated_by_id',
'update_system_id',
'syst_updated_datetime',
'creation_method',
'created_by_id',
'creation_system_id',
'syst_created_datetime',
'system_id_unit',
'external_table',
'external_system_id',
'external_id',
'unee_t_unit_type',
'is_obsolete',
'unit_designation',
'building_system_id',
'area_id' ),
'filterFields' => array( 'building_designation',
'is_obsolete',
'is_creation_needed_in_unee_t',
'unee_t_unit_type' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'unit_designation' => array( 'simple_grid_field3',
'simple_grid_field' ),
'unee_t_unit_type' => array( 'simple_grid_field5',
'simple_grid_field6' ),
'building_designation' => array( 'simple_grid_field2',
'simple_grid_field8' ),
'is_creation_needed_in_unee_t' => array( 'simple_grid_field4',
'simple_grid_field9' ),
'is_obsolete' => array( 'simple_grid_field7',
'simple_grid_field10' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'image',
'logo',
'menu',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'left' => array( 'search_panel',
'filter_panel' ),
'top' => array( 'breadcrumb',
'master_info' ),
'above-grid' => array( 'details_found',
'page_size',
'print_panel',
'columns_control' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field',
'simple_grid_field3',
'simple_grid_field6',
'simple_grid_field5',
'simple_grid_field8',
'simple_grid_field2',
'simple_grid_field9',
'simple_grid_field4',
'simple_grid_field10',
'simple_grid_field7',
'details_preview',
'details_preview1',
'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ) ),
'formXtTags' => array( 'top' => array( 'breadcrumb',
'mastertable_block' ),
'below-grid' => array( 'pagination' ) ),
'itemForms' => array( 'image' => 'supertop',
'logo' => 'supertop',
'menu' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'search_panel' => 'left',
'filter_panel' => 'left',
'breadcrumb' => 'top',
'master_info' => 'top',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'columns_control' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field7' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_details_link1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_alldetails_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link' => array( 'location' => 'grid',
'cellId' => 'cell_details' ),
'grid_details_link1' => array( 'location' => 'grid',
'cellId' => 'cell_details' ) ),
'itemVisiblity' => array( 'menu' => 3,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'search_panel' => 5,
'filter_panel' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'list_options' => array( 'list_options' ),
'loginform_login' => array( 'loginform_login' ),
'username_button' => array( 'username_button' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'import' => array( 'import' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field3',
'filter_panel_field4',
'filter_panel_field5' ),
'filter_panel' => array( 'filter_panel' ),
'advsearch_link' => array( 'advsearch_link' ),
'master_info' => array( 'master_info' ),
'columns_control' => array( 'columns_control' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field',
'search_panel_field1',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field14',
'search_panel_field15',
'search_panel_field16',
'search_panel_field17',
'search_panel_field18',
'search_panel_field21',
'search_panel_field22',
'search_panel_field23',
'search_panel_field24',
'search_panel_field25',
'search_panel_field26',
'search_panel_field27',
'search_panel_field28',
'search_panel_field29',
'search_panel_field30',
'search_panel_field31',
'search_panel_field32',
'search_panel_field34' ),
'print_panel' => array( 'print_panel' ),
'print_details' => array( 'print_details' ),
'image' => array( 'image' ),
'grid_field' => array( 'simple_grid_field3',
'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field7' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field6',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10' ),
'details_preview' => array( 'details_preview',
'details_preview1' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link',
'grid_details_link1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_details' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'unit_designation_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'unee_t_unit_type_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'building_designation_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'is_creation_needed_in_unee_t_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'is_obsolete_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'unit_designation_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'unee_t_unit_type_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'building_designation_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'is_creation_needed_in_unee_t_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'is_obsolete_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'image',
'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'list-vbar',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'filter_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel',
'columns_control' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 6 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'unit_designation',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'unit_designation',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'unee_t_unit_type',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'unee_t_unit_type',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'building_designation',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'building_designation',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'is_creation_needed_in_unee_t',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'is_creation_needed_in_unee_t',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'is_obsolete',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'is_obsolete',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1' ) ),
'headcell_details' => array( 'model' => 'headcell_details',
'items' => array(  ),
'columnName' => 'details' ),
'cell_details' => array( 'model' => 'cell_details',
'items' => array( 'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ),
'columnName' => 'details' ),
'footcell_details' => array( 'model' => 'footcell_details',
'items' => array(  ),
'columnName' => 'details' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'import' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'filter_panel_field' => array( 'field' => 'building_designation',
'type' => 'filter_panel_field' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field',
'filter_panel_field5',
'filter_panel_field4',
'filter_panel_field3' ) ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'Manage Buildings' => 'true' ) ),
'columns_control' => array( 'type' => 'columns_control',
'showHide' => true,
'reorder' => true ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field7',
'search_panel_field34',
'search_panel_field32',
'search_panel_field31',
'search_panel_field30',
'search_panel_field29',
'search_panel_field28',
'search_panel_field27',
'search_panel_field26',
'search_panel_field25',
'search_panel_field24',
'search_panel_field23',
'search_panel_field22',
'search_panel_field21',
'search_panel_field18',
'search_panel_field17',
'search_panel_field16',
'search_panel_field15',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field1',
'search_panel_field',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3' ),
'_flexiblePanel' => true ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field3' => array( 'field' => 'area_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field4' => array( 'field' => 'building_system_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field5' => array( 'field' => 'unit_designation',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field6' => array( 'field' => 'is_obsolete',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field7' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'filter_panel_field3' => array( 'field' => 'is_obsolete',
'type' => 'filter_panel_field' ),
'filter_panel_field4' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'filter_panel_field' ),
'search_panel_field' => array( 'field' => 'unee_t_unit_type',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'filter_panel_field5' => array( 'field' => 'unee_t_unit_type',
'type' => 'filter_panel_field' ),
'search_panel_field1' => array( 'field' => 'external_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field8' => array( 'field' => 'external_system_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field9' => array( 'field' => 'external_table',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_details' ) ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'Manage Rooms' => true,
'Assign Units to User' => true ) ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'search_panel_field10' => array( 'field' => 'system_id_unit',
'type' => 'search_panel_field' ),
'search_panel_field11' => array( 'field' => 'syst_created_datetime',
'type' => 'search_panel_field' ),
'search_panel_field12' => array( 'field' => 'creation_system_id',
'type' => 'search_panel_field' ),
'search_panel_field13' => array( 'field' => 'created_by_id',
'type' => 'search_panel_field' ),
'search_panel_field14' => array( 'field' => 'creation_method',
'type' => 'search_panel_field' ),
'search_panel_field15' => array( 'field' => 'syst_updated_datetime',
'type' => 'search_panel_field' ),
'search_panel_field16' => array( 'field' => 'update_system_id',
'type' => 'search_panel_field' ),
'search_panel_field17' => array( 'field' => 'updated_by_id',
'type' => 'search_panel_field' ),
'search_panel_field18' => array( 'field' => 'update_method',
'type' => 'search_panel_field' ),
'search_panel_field21' => array( 'field' => 'building_id',
'type' => 'search_panel_field' ),
'search_panel_field22' => array( 'field' => 'building_designation',
'type' => 'search_panel_field' ),
'search_panel_field23' => array( 'field' => 'activated_by_id',
'type' => 'search_panel_field' ),
'search_panel_field24' => array( 'field' => 'unit_type',
'type' => 'search_panel_field' ),
'search_panel_field25' => array( 'field' => 'tower',
'type' => 'search_panel_field' ),
'search_panel_field26' => array( 'field' => 'unit_category_id',
'type' => 'search_panel_field' ),
'search_panel_field27' => array( 'field' => 'count_rooms',
'type' => 'search_panel_field' ),
'search_panel_field28' => array( 'field' => 'unit_id',
'type' => 'search_panel_field' ),
'search_panel_field29' => array( 'field' => 'surface',
'type' => 'search_panel_field' ),
'search_panel_field30' => array( 'field' => 'surface_measurment_unit',
'type' => 'search_panel_field' ),
'search_panel_field31' => array( 'field' => 'description',
'type' => 'search_panel_field' ),
'search_panel_field32' => array( 'field' => 'do_not_insert',
'type' => 'search_panel_field' ),
'search_panel_field34' => array( 'field' => 'order_building',
'type' => 'search_panel_field' ),
'simple_grid_field3' => array( 'field' => 'unit_designation',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'bold' => true,
'clickSort' => true ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'unit_designation',
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'unee_t_unit_type',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'unee_t_unit_type',
'clickSort' => true ),
'simple_grid_field2' => array( 'field' => 'building_designation',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'building_designation',
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'is_creation_needed_in_unee_t',
'clickSort' => true ),
'simple_grid_field7' => array( 'field' => 'is_obsolete',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'is_obsolete',
'clickSort' => true ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'Manage Rooms',
'items' => array(  ),
'popup' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'Assign Units to User',
'items' => array(  ),
'popup' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'Manage Rooms',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'Assign Units to User',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ) ),
'dbProps' => array(  ),
'version' => 4,
'fixedTopbar' => true );
		?>