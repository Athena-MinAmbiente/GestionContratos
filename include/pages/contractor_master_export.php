<?php
			$optionsArray = array( 'totals' => array( 'contractor_id' => array( 'totalsType' => '' ),
'contractor_type' => array( 'totalsType' => '' ),
'contractor_doc_id' => array( 'totalsType' => '' ),
'contractor_doc_dv' => array( 'totalsType' => '' ),
'contractor_nombresfull' => array( 'totalsType' => '' ),
'contractor_email' => array( 'totalsType' => '' ),
'contractor_email_mincit' => array( 'totalsType' => '' ),
'contractor_address' => array( 'totalsType' => '' ),
'contractor_phone' => array( 'totalsType' => '' ),
'contractor_mobile' => array( 'totalsType' => '' ),
'contractor_city' => array( 'totalsType' => '' ),
'bank_name' => array( 'totalsType' => '' ),
'bank_cta_type' => array( 'totalsType' => '' ),
'bank_cta_number' => array( 'totalsType' => '' ),
'groupid' => array( 'totalsType' => '' ),
'active' => array( 'totalsType' => '' ),
'iva_regimen' => array( 'totalsType' => '' ),
'ct_fecha_nacimiento' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'contractor_type',
'contractor_doc_id',
'contractor_nombresfull',
'contractor_email',
'contractor_email_mincit',
'contractor_address',
'contractor_phone',
'contractor_mobile',
'contractor_city',
'active',
'contractor_doc_dv' ),
'exportFields' => array( 'contractor_type',
'contractor_doc_id',
'contractor_nombresfull',
'contractor_email',
'contractor_email_mincit',
'contractor_address',
'contractor_phone',
'contractor_mobile',
'contractor_city',
'active',
'contractor_doc_dv' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'contractor_type' => array( 'export_field1' ),
'contractor_doc_id' => array( 'export_field2' ),
'contractor_nombresfull' => array( 'export_field8' ),
'contractor_email' => array( 'export_field9' ),
'contractor_email_mincit' => array( 'export_field10' ),
'contractor_address' => array( 'export_field11' ),
'contractor_phone' => array( 'export_field12' ),
'contractor_mobile' => array( 'export_field13' ),
'contractor_city' => array( 'export_field14' ),
'active' => array( 'export_field28' ),
'contractor_doc_dv' => array( 'export_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field1',
'export_field2',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field28',
'export_field' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_field14' => 'grid',
'export_field28' => 'grid',
'export_field' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field1',
'export_field2',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field28',
'export_field' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
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
'export_field2',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13',
'export_field14',
'export_field28',
'export_field' ),
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
'export_field1' => array( 'field' => 'contractor_type',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'contractor_doc_id',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'contractor_nombresfull',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'contractor_email',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'contractor_email_mincit',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'contractor_address',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'contractor_phone',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'contractor_mobile',
'type' => 'export_field' ),
'export_field14' => array( 'field' => 'contractor_city',
'type' => 'export_field' ),
'export_field28' => array( 'field' => 'active',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'contractor_doc_dv',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>