<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'external_id',
'external_system',
'external_table',
'is_unee_t_account_needed',
'country_code',
'gender',
'salutation_id',
'given_name',
'middle_name',
'family_name',
'date_of_birth',
'alias',
'job_title',
'organization',
'email',
'tel_1',
'tel_2',
'whatsapp',
'linkedin',
'facebook',
'adr1',
'adr2',
'adr3',
'City',
'zip_postcode',
'region_or_state',
'unee_t_user_type_id',
'person_status_id',
'created_by_id' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'external_id' => array( 'import_field1' ),
'external_system' => array( 'import_field2' ),
'external_table' => array( 'import_field3' ),
'is_unee_t_account_needed' => array( 'import_field13' ),
'country_code' => array( 'import_field15' ),
'gender' => array( 'import_field16' ),
'salutation_id' => array( 'import_field17' ),
'given_name' => array( 'import_field18' ),
'middle_name' => array( 'import_field19' ),
'family_name' => array( 'import_field20' ),
'date_of_birth' => array( 'import_field21' ),
'alias' => array( 'import_field22' ),
'job_title' => array( 'import_field23' ),
'organization' => array( 'import_field24' ),
'email' => array( 'import_field25' ),
'tel_1' => array( 'import_field26' ),
'tel_2' => array( 'import_field27' ),
'whatsapp' => array( 'import_field28' ),
'linkedin' => array( 'import_field29' ),
'facebook' => array( 'import_field30' ),
'adr1' => array( 'import_field31' ),
'adr2' => array( 'import_field32' ),
'adr3' => array( 'import_field33' ),
'City' => array( 'import_field34' ),
'zip_postcode' => array( 'import_field35' ),
'region_or_state' => array( 'import_field36' ),
'unee_t_user_type_id' => array( 'import_field4' ),
'person_status_id' => array( 'import_field5' ),
'created_by_id' => array( 'import_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'import_header' ),
'grid' => array( 'import_field1',
'import_field5',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field13',
'import_field4',
'import_field25',
'import_field16',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field26',
'import_field27',
'import_field28',
'import_field29',
'import_field30',
'import_field31',
'import_field32',
'import_field33',
'import_field34',
'import_field35',
'import_field36',
'import_field15',
'import_field2',
'import_field3',
'import_field6' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'import_header' => 'top',
'import_field1' => 'grid',
'import_field5' => 'grid',
'import_field17' => 'grid',
'import_field18' => 'grid',
'import_field19' => 'grid',
'import_field20' => 'grid',
'import_field13' => 'grid',
'import_field4' => 'grid',
'import_field25' => 'grid',
'import_field16' => 'grid',
'import_field21' => 'grid',
'import_field22' => 'grid',
'import_field23' => 'grid',
'import_field24' => 'grid',
'import_field26' => 'grid',
'import_field27' => 'grid',
'import_field28' => 'grid',
'import_field29' => 'grid',
'import_field30' => 'grid',
'import_field31' => 'grid',
'import_field32' => 'grid',
'import_field33' => 'grid',
'import_field34' => 'grid',
'import_field35' => 'grid',
'import_field36' => 'grid',
'import_field15' => 'grid',
'import_field2' => 'grid',
'import_field3' => 'grid',
'import_field6' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'import_header' => array( 'import_header' ),
'import_field' => array( 'import_field1',
'import_field2',
'import_field3',
'import_field13',
'import_field15',
'import_field16',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field25',
'import_field26',
'import_field27',
'import_field28',
'import_field29',
'import_field30',
'import_field31',
'import_field32',
'import_field33',
'import_field34',
'import_field35',
'import_field36',
'import_field4',
'import_field5',
'import_field6' ) ),
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
'items' => array( 'import_field1',
'import_field5',
'import_field17',
'import_field18',
'import_field19',
'import_field20',
'import_field13',
'import_field4',
'import_field25',
'import_field16',
'import_field21',
'import_field22',
'import_field23',
'import_field24',
'import_field26',
'import_field27',
'import_field28',
'import_field29',
'import_field30',
'import_field31',
'import_field32',
'import_field33',
'import_field34',
'import_field35',
'import_field36',
'import_field15',
'import_field2',
'import_field3',
'import_field6' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'import_header' => array( 'type' => 'import_header' ),
'import_field1' => array( 'field' => 'external_id',
'type' => 'import_field' ),
'import_field2' => array( 'field' => 'external_system',
'type' => 'import_field' ),
'import_field3' => array( 'field' => 'external_table',
'type' => 'import_field' ),
'import_field13' => array( 'field' => 'is_unee_t_account_needed',
'type' => 'import_field' ),
'import_field15' => array( 'field' => 'country_code',
'type' => 'import_field' ),
'import_field16' => array( 'field' => 'gender',
'type' => 'import_field' ),
'import_field17' => array( 'field' => 'salutation_id',
'type' => 'import_field' ),
'import_field18' => array( 'field' => 'given_name',
'type' => 'import_field' ),
'import_field19' => array( 'field' => 'middle_name',
'type' => 'import_field' ),
'import_field20' => array( 'field' => 'family_name',
'type' => 'import_field' ),
'import_field21' => array( 'field' => 'date_of_birth',
'type' => 'import_field' ),
'import_field22' => array( 'field' => 'alias',
'type' => 'import_field' ),
'import_field23' => array( 'field' => 'job_title',
'type' => 'import_field' ),
'import_field24' => array( 'field' => 'organization',
'type' => 'import_field' ),
'import_field25' => array( 'field' => 'email',
'type' => 'import_field' ),
'import_field26' => array( 'field' => 'tel_1',
'type' => 'import_field' ),
'import_field27' => array( 'field' => 'tel_2',
'type' => 'import_field' ),
'import_field28' => array( 'field' => 'whatsapp',
'type' => 'import_field' ),
'import_field29' => array( 'field' => 'linkedin',
'type' => 'import_field' ),
'import_field30' => array( 'field' => 'facebook',
'type' => 'import_field' ),
'import_field31' => array( 'field' => 'adr1',
'type' => 'import_field' ),
'import_field32' => array( 'field' => 'adr2',
'type' => 'import_field' ),
'import_field33' => array( 'field' => 'adr3',
'type' => 'import_field' ),
'import_field34' => array( 'field' => 'City',
'type' => 'import_field' ),
'import_field35' => array( 'field' => 'zip_postcode',
'type' => 'import_field' ),
'import_field36' => array( 'field' => 'region_or_state',
'type' => 'import_field' ),
'import_field4' => array( 'field' => 'unee_t_user_type_id',
'type' => 'import_field' ),
'import_field5' => array( 'field' => 'person_status_id',
'type' => 'import_field' ),
'import_field6' => array( 'field' => 'created_by_id',
'type' => 'import_field' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>