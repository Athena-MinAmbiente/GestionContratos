<?php
			$optionsArray = array( 'totals' => array( 'order_id' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'contrato_num' => array( 'totalsType' => '' ),
'contrato_vigencia' => array( 'totalsType' => '' ),
'pago_mensual' => array( 'totalsType' => '' ),
'base_liq' => array( 'totalsType' => '' ),
'tipo_administradora' => array( 'totalsType' => '' ),
'tipo_subsistema' => array( 'totalsType' => '' ),
'clase' => array( 'totalsType' => '' ),
'nombre' => array( 'totalsType' => '' ),
'valor_avg' => array( 'totalsType' => '' ),
'valor_ref' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'base_liq',
'clase',
'id_cont_fk',
'nombre',
'order_id',
'pago_mensual',
'tipo_administradora',
'valor_avg',
'valor_ref',
'contrato_num',
'contrato_vigencia',
'tipo_subsistema' ),
'exportFields' => array( 'base_liq',
'clase',
'id_cont_fk',
'nombre',
'order_id',
'pago_mensual',
'tipo_administradora',
'valor_avg',
'valor_ref',
'contrato_num',
'contrato_vigencia',
'tipo_subsistema' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'base_liq' => array( 'export_field' ),
'clase' => array( 'export_field1' ),
'id_cont_fk' => array( 'export_field2' ),
'nombre' => array( 'export_field3' ),
'order_id' => array( 'export_field4' ),
'pago_mensual' => array( 'export_field5' ),
'tipo_administradora' => array( 'export_field6' ),
'valor_avg' => array( 'export_field7' ),
'valor_ref' => array( 'export_field8' ),
'contrato_num' => array( 'export_field9' ),
'contrato_vigencia' => array( 'export_field10' ),
'tipo_subsistema' => array( 'export_field11' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ) ),
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
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'base_liq',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'clase',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'id_cont_fk',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'nombre',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'order_id',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'pago_mensual',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'tipo_administradora',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'valor_avg',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'valor_ref',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'contrato_num',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'contrato_vigencia',
'type' => 'export_field' ),
'export_field11' => array( 'field' => 'tipo_subsistema',
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