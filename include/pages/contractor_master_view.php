<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'fields' => array( 'gridFields' => array( 'contractor_type',
'contractor_doc_id',
'contractor_email',
'contractor_mobile',
'contractor_city',
'contractor_nombresfull',
'active',
'contractor_doc_dv' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'contractor_type' => array( 'integrated_edit_field' ),
'contractor_doc_id' => array( 'integrated_edit_field1' ),
'contractor_email' => array( 'integrated_edit_field8' ),
'contractor_mobile' => array( 'integrated_edit_field12' ),
'contractor_city' => array( 'integrated_edit_field13' ),
'contractor_nombresfull' => array( 'integrated_edit_field7' ),
'active' => array( 'integrated_edit_field27' ),
'contractor_doc_dv' => array( 'integrated_edit_field2' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'view_header' ),
'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field7',
'integrated_edit_field27',
'integrated_edit_field' ),
'section1' => array( 'integrated_edit_field8',
'integrated_edit_field12',
'integrated_edit_field13' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_header' => 'top',
'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field1' => 'section',
'integrated_edit_field2' => 'section',
'integrated_edit_field7' => 'section',
'integrated_edit_field27' => 'section',
'integrated_edit_field' => 'section',
'integrated_edit_field8' => 'section1',
'integrated_edit_field12' => 'section1',
'integrated_edit_field13' => 'section1' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'section',
'cellId' => 'c1' ),
'integrated_edit_field2' => array( 'location' => 'section',
'cellId' => 'c' ),
'integrated_edit_field7' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field27' => array( 'location' => 'section',
'cellId' => 'c6' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c7' ),
'integrated_edit_field8' => array( 'location' => 'section1',
'cellId' => 'c6' ),
'integrated_edit_field12' => array( 'location' => 'section1',
'cellId' => 'c7' ),
'integrated_edit_field13' => array( 'location' => 'section1',
'cellId' => 'c13' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field8',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field7',
'integrated_edit_field27',
'integrated_edit_field2' ),
'tabs' => array( 'tabs' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field27' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ),
'section1' => array( 'cells' => array( 'c6' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 2 ) ) ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'tabs' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field2' ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field7' ),
'useFullWidth' => true ),
'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field27' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section1' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c13' ),
array( 'cell' => 'c14' ) ) ) ),
'cells' => array( 'c6' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field8' ) ),
'c7' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field12' ) ),
'c13' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field13' ) ),
'c14' => array( 'model' => 'c1',
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
'integrated_edit_field' => array( 'field' => 'contractor_type',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field1' => array( 'field' => 'contractor_doc_id',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field8' => array( 'field' => 'contractor_email',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field12' => array( 'field' => 'contractor_mobile',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'contractor_city',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Datos personales',
'type' => 0 ),
array( 'text' => 'Datos de ubicación',
'type' => 0 ) ),
'locations' => array( 'section',
'section1' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'integrated_edit_field7' => array( 'field' => 'contractor_nombresfull',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field27' => array( 'field' => 'active',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field2' => array( 'field' => 'contractor_doc_dv',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>