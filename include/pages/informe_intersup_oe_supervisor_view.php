<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'informe_intersup' => array( 'preview' => false ),
'informe_intersup2' => array( 'preview' => false ) ),
'fields' => array( 'gridFields' => array( 'sup_obs',
'inf_id_fk',
'evidencia',
'sup_aprueba',
'actividad',
'oe',
'id_cont_fk' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'sup_obs' => array( 'integrated_edit_field' ),
'inf_id_fk' => array( 'integrated_edit_field5' ),
'evidencia' => array( 'integrated_edit_field6' ),
'sup_aprueba' => array( 'integrated_edit_field8' ),
'actividad' => array( 'integrated_edit_field2' ),
'oe' => array( 'integrated_edit_field3' ),
'id_cont_fk' => array( 'integrated_edit_field4' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field5',
'integrated_edit_field3' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field3' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c1' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field5',
'integrated_edit_field6',
'integrated_edit_field8',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0,
1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0,
1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4',
'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 6 ) ) ),
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
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c',
'colspan' => 1 ),
array( 'cell' => 'c2' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'useFullWidth' => true ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ),
'useFullWidth' => true ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ),
'useFullWidth' => true ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ),
'useFullWidth' => true ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4',
'integrated_edit_field5' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ),
'useFullWidth' => true ),
'c2' => array( 'model' => 'c3',
'items' => array(  ),
'useFullWidth' => true ),
'c7' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'sup_obs',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true,
'label' => array( 'field' => 'sup_obs',
'table' => 'informe_intersup_oe_supervisor',
'type' => 3 ) ),
'integrated_edit_field5' => array( 'field' => 'inf_id_fk',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field6' => array( 'field' => 'evidencia',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'sup_aprueba',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => true ),
'integrated_edit_field2' => array( 'field' => 'actividad',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'oe',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field4' => array( 'field' => 'id_cont_fk',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false,
'label' => array( 'field' => 'id_cont_fk',
'table' => 'informe_intersup_oe_supervisor',
'type' => 3 ) ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>