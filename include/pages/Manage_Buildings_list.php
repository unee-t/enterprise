<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => true,
'delete' => false,
'updateSelected' => false,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => true,
'reorderFields' => true ),
'allDetails' => array( 'linkType' => 0 ),
'details' => array( 'Manage Units' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'showProceedLink' => true,
'printDetails' => true ),
'Assign Buildings to User' => array( 'displayPreview' => 1,
'previewPageId' => 'list',
'showCount' => true,
'hideEmptyChild' => false,
'showProceedLink' => true,
'printDetails' => true ) ),
'master' => array( 'Manage Areas' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'id_building' => array( 'totalsType' => '' ),
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
'is_obsolete' => array( 'totalsType' => '' ),
'order' => array( 'totalsType' => '' ),
'country_code' => array( 'totalsType' => '' ),
'country_name' => array( 'totalsType' => '' ),
'area_id' => array( 'totalsType' => '' ),
'area_name' => array( 'totalsType' => '' ),
'designation' => array( 'totalsType' => '' ),
'unee_t_unit_type' => array( 'totalsType' => '' ),
'is_creation_needed_in_unee_t' => array( 'totalsType' => '' ),
'tower' => array( 'totalsType' => '' ),
'address_1' => array( 'totalsType' => '' ),
'address_2' => array( 'totalsType' => '' ),
'zip_postal_code' => array( 'totalsType' => '' ),
'state' => array( 'totalsType' => '' ),
'city' => array( 'totalsType' => '' ),
'description' => array( 'totalsType' => '' ),
'do_not_insert' => array( 'totalsType' => '' ),
'order_area' => array( 'totalsType' => '' ),
'uneet_created_datetime' => array( 'totalsType' => '' ),
'unee_t_mefe_unit_id' => array( 'totalsType' => '' ),
'id_area' => array( 'totalsType' => '' ),
'mgt_cny_default_assignee' => array( 'totalsType' => '' ),
'landlord_default_assignee' => array( 'totalsType' => '' ),
'tenant_default_assignee' => array( 'totalsType' => '' ),
'agent_default_assignee' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'designation',
'mgt_cny_default_assignee',
'country_code',
'area_id',
'description',
'is_creation_needed_in_unee_t',
'is_obsolete',
'uneet_created_datetime' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'country_code',
'is_creation_needed_in_unee_t',
'description',
'designation',
'external_table',
'external_system_id',
'external_id',
'area_id' ),
'filterFields' => array( 'country_code',
'area_name',
'is_obsolete',
'is_creation_needed_in_unee_t' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array( 'mgt_cny_default_assignee',
'is_creation_needed_in_unee_t',
'is_obsolete' ),
'fieldItems' => array( 'designation' => array( 'simple_grid_field5',
'simple_grid_field6' ),
'mgt_cny_default_assignee' => array( 'simple_grid_field1',
'simple_grid_field2' ),
'country_code' => array( 'simple_grid_field21',
'simple_grid_field22' ),
'area_id' => array( 'simple_grid_field4',
'simple_grid_field7' ),
'description' => array( 'simple_grid_field8',
'simple_grid_field10' ),
'is_creation_needed_in_unee_t' => array( 'simple_grid_field9',
'simple_grid_field11' ),
'is_obsolete' => array( 'simple_grid_field12',
'simple_grid_field13' ),
'uneet_created_datetime' => array( 'simple_grid_field',
'simple_grid_field3' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
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
'above-grid' => array( 'add',
'inline_add',
'inline_save_all',
'inline_cancel_all',
'details_found',
'page_size',
'print_panel',
'columns_control' ),
'below-grid' => array( 'pagination' ),
'grid' => array( 'simple_grid_field6',
'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field1',
'simple_grid_field22',
'simple_grid_field21',
'simple_grid_field7',
'simple_grid_field4',
'simple_grid_field10',
'simple_grid_field8',
'simple_grid_field11',
'simple_grid_field9',
'simple_grid_field13',
'simple_grid_field12',
'simple_grid_field3',
'simple_grid_field',
'details_preview',
'details_preview1',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view',
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
'add' => 'above-grid',
'inline_add' => 'above-grid',
'inline_save_all' => 'above-grid',
'inline_cancel_all' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'columns_control' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field6' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_edit' => 'grid',
'grid_inline_save' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_alldetails_link' => 'grid',
'grid_details_link' => 'grid',
'grid_details_link1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_save' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
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
'add' => array( 'add' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'advsearch_link' => array( 'advsearch_link' ),
'master_info' => array( 'master_info' ),
'columns_control' => array( 'columns_control' ),
'search_panel' => array( 'search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field18',
'search_panel_field21',
'search_panel_field22' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2',
'filter_panel_field3' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'print_panel' => array( 'print_panel' ),
'print_details' => array( 'print_details' ),
'image' => array( 'image' ),
'edit_selected' => array( 'edit_selected' ),
'inline_save_all' => array( 'inline_save_all' ),
'inline_cancel_all' => array( 'inline_cancel_all' ),
'grid_field' => array( 'simple_grid_field5',
'simple_grid_field1',
'simple_grid_field21',
'simple_grid_field4',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field12',
'simple_grid_field' ),
'grid_field_label' => array( 'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field22',
'simple_grid_field7',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field13',
'simple_grid_field3' ),
'details_preview' => array( 'details_preview',
'details_preview1' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_edit' => array( 'grid_edit' ),
'grid_inline_edit' => array( 'grid_inline_edit' ),
'grid_inline_save' => array( 'grid_inline_save' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_alldetails_link' => array( 'grid_alldetails_link' ),
'grid_details_link' => array( 'grid_details_link',
'grid_details_link1' ),
'inline_add' => array( 'inline_add' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'designation_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'mgt_cny_default_assignee_fieldheadercolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'country_code_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'area_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'description_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'is_creation_needed_in_unee_t_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'is_obsolete_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'uneet_created_datetime_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inlineedit_column',
'inline_save',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_details' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'grid_alldetails_link',
'grid_details_link',
'grid_details_link1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'designation_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'mgt_cny_default_assignee_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'country_code_fieldcolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'area_id_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'description_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'is_creation_needed_in_unee_t_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'is_obsolete_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'uneet_created_datetime_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_details' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 11,
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
'items' => array( 'add',
'inline_add',
'inline_save_all',
'inline_cancel_all' ),
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
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_details' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_details' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 11 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_details' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'designation',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'designation',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'mgt_cny_default_assignee',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'mgt_cny_default_assignee',
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
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'area_id',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'area_id',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'description',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'description',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'is_creation_needed_in_unee_t',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'is_creation_needed_in_unee_t',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'is_obsolete',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'is_obsolete',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'uneet_created_datetime',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'uneet_created_datetime',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1' ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ),
'columnName' => 'checkbox' ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ),
'columnName' => 'checkbox' ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ),
'columnName' => 'checkbox' ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_edit',
'grid_inline_save',
'grid_inline_cancel',
'grid_view' ),
'columnName' => 'list-icons' ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
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
'items' => array( 'edit_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link',
'changepassword_link' ) ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'add' => array( 'type' => 'add',
'popup' => true ),
'-' => array( 'type' => '-' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'Manage Areas' => 'true' ) ),
'columns_control' => array( 'type' => 'columns_control',
'showHide' => true,
'reorder' => true ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field22',
'search_panel_field21',
'search_panel_field18',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field1' ),
'_flexiblePanel' => true ),
'search_panel_field' => array( 'field' => 'country_code',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field3',
'filter_panel_field2' ) ),
'filter_panel_field' => array( 'field' => 'country_code',
'type' => 'filter_panel_field' ),
'search_panel_field1' => array( 'field' => 'area_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'filter_panel_field1' => array( 'field' => 'area_name',
'type' => 'filter_panel_field' ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field3' => array( 'field' => 'external_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field4' => array( 'field' => 'external_system_id',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field5' => array( 'field' => 'external_table',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field18' => array( 'field' => 'designation',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field21' => array( 'field' => 'description',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field22' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_details' ) ),
'print_details' => array( 'type' => 'print_details',
'tables' => array( 'Manage Units' => true,
'Assign Buildings to User' => true ) ),
'filter_panel_field2' => array( 'field' => 'is_obsolete',
'type' => 'filter_panel_field' ),
'filter_panel_field3' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'filter_panel_field' ),
'image' => array( 'type' => 'image',
'imagePath' => 'Unee-T Enterprise160x50.png' ),
'edit_selected' => array( 'type' => 'edit_selected' ),
'inline_save_all' => array( 'type' => 'inline_save_all' ),
'inline_cancel_all' => array( 'type' => 'inline_cancel_all' ),
'simple_grid_field5' => array( 'field' => 'designation',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true,
'bold' => true,
'label' => array( 'field' => 'designation',
'table' => 'Manage Buildings',
'type' => 3 ) ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'designation',
'clickSort' => true ),
'simple_grid_field1' => array( 'field' => 'mgt_cny_default_assignee',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true ),
'simple_grid_field2' => array( 'type' => 'grid_field_label',
'field' => 'mgt_cny_default_assignee' ),
'simple_grid_field21' => array( 'field' => 'country_code',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'country_code',
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'area_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'area_id' ),
'simple_grid_field8' => array( 'field' => 'description',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'description',
'clickSort' => true ),
'simple_grid_field9' => array( 'field' => 'is_creation_needed_in_unee_t',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'clickSort' => true ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'is_creation_needed_in_unee_t',
'clickSort' => true ),
'simple_grid_field12' => array( 'field' => 'is_obsolete',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => true,
'clickSort' => true ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'is_obsolete',
'clickSort' => true ),
'simple_grid_field' => array( 'field' => 'uneet_created_datetime',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'uneet_created_datetime' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'Manage Units',
'items' => array(  ),
'popup' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'Assign Buildings to User',
'items' => array(  ),
'popup' => false,
'proceedLink' => true,
'pageId' => 'list' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_inline_edit' => array( 'type' => 'grid_inline_edit' ),
'grid_inline_save' => array( 'type' => 'grid_inline_save' ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_alldetails_link' => array( 'type' => 'grid_alldetails_link' ),
'grid_details_link' => array( 'type' => 'grid_details_link',
'table' => 'Manage Units',
'badge' => true,
'hideIfNone' => false,
'showCount' => true ),
'grid_details_link1' => array( 'type' => 'grid_details_link',
'table' => 'Assign Buildings to User',
'badge' => true,
'showCount' => true,
'hideIfNone' => false ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ) ),
'dbProps' => array(  ),
'version' => 4,
'fixedTopbar' => true );
		?>