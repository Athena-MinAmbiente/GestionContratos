<?php
			$optionsArray = array( 'details' => array( 'contrato_attached' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'polizas_master' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'interventor_interno' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_cdp' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_rp' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_oe' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica_prorroga' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica_cesion' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'contrato_modifica_track' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_dependencia' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_paa' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'informe_intersup_plan_pagos' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica_suspension' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'informe_intersup4' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'cont_nit_contra_ta',
'cont_secop_proceso',
'cont_secop_enlace',
'cont_cesion' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'cont_nit_contra_ta' => array( 'integrated_edit_field1' ),
'cont_secop_proceso' => array( 'integrated_edit_field18' ),
'cont_secop_enlace' => array( 'integrated_edit_field19' ),
'cont_cesion' => array( 'integrated_edit_field' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section3' => array( 'details_preview1',
'integrated_edit_field18',
'integrated_edit_field',
'integrated_edit_field1',
'integrated_edit_field19' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'details_preview1' => 'section3',
'integrated_edit_field18' => 'section3',
'integrated_edit_field' => 'section3',
'integrated_edit_field1' => 'section3',
'integrated_edit_field19' => 'section3' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'details_preview1' => array( 'location' => 'section3',
'cellId' => 'c1' ),
'integrated_edit_field18' => array( 'location' => 'section3',
'cellId' => 'c8' ),
'integrated_edit_field' => array( 'location' => 'section3',
'cellId' => 'c10' ),
'integrated_edit_field1' => array( 'location' => 'section3',
'cellId' => 'c11' ),
'integrated_edit_field19' => array( 'location' => 'section3',
'cellId' => 'c2' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field18',
'integrated_edit_field19',
'integrated_edit_field' ),
'tabs' => array( 'tabs' ),
'details_preview' => array( 'details_preview1' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section3' => array( 'cells' => array( 'c10' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field18' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c2' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field19' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 0,
1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'details_preview1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ) ) ),
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
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit3',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ),
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
'grid' => array( array( 'cells' => array( array( 'cell' => 'c4',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c4' => array( 'model' => 'c3',
'items' => array( 'tabs' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section3' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c2',
'colspan' => 2 ) ) ),
array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'details_preview1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field18' ) ),
'c9' => array( 'model' => 'c1',
'items' => array(  ) ),
'c10' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ) ),
'c11' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field1' ) ),
'c2' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field19' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save',
'label' => array( 'type' => 0,
'text' => 'Guardar cambios' ),
'icon' => array( 'glyph' => 'saved' ),
'buttonSize' => 'large',
'buttonStyle' => 'success' ),
'edit_back_list' => array( 'type' => 'edit_back_list',
'icon' => array( 'fa' => 'angle-double-left' ),
'buttonStyle' => 'info',
'buttonSize' => 'large' ),
'edit_close' => array( 'type' => 'edit_close',
'icon' => array( 'fa' => 'hand-stop-o' ),
'buttonStyle' => 'default',
'buttonSize' => 'large' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field1' => array( 'field' => 'cont_nit_contra_ta',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field18' => array( 'field' => 'cont_secop_proceso',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field19' => array( 'field' => 'cont_secop_enlace',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Cesión',
'type' => 0 ) ),
'locations' => array( 'section3' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'contrato_modifica_cesion',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ),
'integrated_edit_field' => array( 'field' => 'cont_cesion',
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