<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'contrato' => array( 'preview' => false ),
'contrato_audit' => array( 'preview' => true ) ),
'totals' => array( 'poliza_id' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'id_att_fk' => array( 'totalsType' => '' ),
'poli_numero' => array( 'totalsType' => '' ),
'poli_compania' => array( 'totalsType' => '' ),
'poli_fechaexpedicion' => array( 'totalsType' => '' ),
'poli_codamparo' => array( 'totalsType' => '' ),
'poli_fechaaprobacion' => array( 'totalsType' => '' ),
'poli_porcentaje' => array( 'totalsType' => '' ),
'poli_valor' => array( 'totalsType' => '' ),
'poli_vigenciadesde' => array( 'totalsType' => '' ),
'poli_vigenciahasta' => array( 'totalsType' => '' ),
'sys_user' => array( 'totalsType' => '' ),
'sys_time' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'poli_numero',
'poli_compania',
'poli_fechaexpedicion',
'poli_codamparo',
'poli_fechaaprobacion',
'poli_porcentaje',
'poli_valor',
'poli_vigenciadesde',
'poli_vigenciahasta' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'poli_numero' => array( 'simple_grid_field3',
'simple_grid_field' ),
'poli_compania' => array( 'simple_grid_field4',
'simple_grid_field12' ),
'poli_fechaexpedicion' => array( 'simple_grid_field5',
'simple_grid_field13' ),
'poli_codamparo' => array( 'simple_grid_field6',
'simple_grid_field14' ),
'poli_fechaaprobacion' => array( 'simple_grid_field7',
'simple_grid_field15' ),
'poli_porcentaje' => array( 'simple_grid_field8',
'simple_grid_field16' ),
'poli_valor' => array( 'simple_grid_field9',
'simple_grid_field17' ),
'poli_vigenciadesde' => array( 'simple_grid_field10',
'simple_grid_field18' ),
'poli_vigenciahasta' => array( 'simple_grid_field11',
'simple_grid_field19' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'master_info' ),
'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field',
'simple_grid_field3',
'simple_grid_field12',
'simple_grid_field4',
'simple_grid_field13',
'simple_grid_field5',
'simple_grid_field14',
'simple_grid_field6',
'simple_grid_field15',
'simple_grid_field7',
'simple_grid_field16',
'simple_grid_field8',
'simple_grid_field17',
'simple_grid_field9',
'simple_grid_field18',
'simple_grid_field10',
'simple_grid_field19',
'simple_grid_field11' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'simple_grid_field' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field11' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'poli_numero_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'poli_compania_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'poli_fechaexpedicion_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'poli_codamparo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'poli_fechaaprobacion_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'poli_porcentaje_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'poli_valor_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'poli_vigenciadesde_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'poli_vigenciahasta_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'poli_numero_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'poli_compania_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'poli_fechaexpedicion_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'poli_codamparo_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'poli_fechaaprobacion_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'poli_porcentaje_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'poli_valor_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'poli_vigenciadesde_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'poli_vigenciahasta_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
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
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 9,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'poli_numero',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'poli_numero',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'poli_compania',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'poli_compania',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'poli_fechaexpedicion',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'poli_fechaexpedicion',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'poli_codamparo',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'poli_codamparo',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'poli_fechaaprobacion',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'poli_fechaaprobacion',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'poli_porcentaje',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'poli_porcentaje',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'poli_valor',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'poli_valor',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'poli_vigenciadesde',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'poli_vigenciadesde',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'poli_vigenciahasta',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'poli_vigenciahasta',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'contrato_audit' => 'true' ) ),
'simple_grid_field3' => array( 'field' => 'poli_numero',
'type' => 'grid_field' ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'poli_numero' ),
'simple_grid_field4' => array( 'field' => 'poli_compania',
'type' => 'grid_field' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'poli_compania' ),
'simple_grid_field5' => array( 'field' => 'poli_fechaexpedicion',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'poli_fechaexpedicion' ),
'simple_grid_field6' => array( 'field' => 'poli_codamparo',
'type' => 'grid_field' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'poli_codamparo' ),
'simple_grid_field7' => array( 'field' => 'poli_fechaaprobacion',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'poli_fechaaprobacion' ),
'simple_grid_field8' => array( 'field' => 'poli_porcentaje',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'poli_porcentaje' ),
'simple_grid_field9' => array( 'field' => 'poli_valor',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'poli_valor' ),
'simple_grid_field10' => array( 'field' => 'poli_vigenciadesde',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'poli_vigenciadesde' ),
'simple_grid_field11' => array( 'field' => 'poli_vigenciahasta',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'poli_vigenciahasta' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>