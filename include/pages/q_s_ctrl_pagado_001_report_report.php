<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'fields' => array( 'gridFields' => array( 'VALOR_PAGADO',
'SALDO' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'CONTRATOID',
'sup_mailnot',
'nombresupfull',
'id_cont',
'contractor_type',
'contractor_nombresfull',
'contractor_email',
'VIGENCIA',
'VALOR_PAGADO',
'VALOR_CONTRATO',
'VALORI',
'SALDO',
'PAGO_MES',
'NUMPAGOS',
'FECHAI',
'FECHAF',
'DOCID' ),
'filterFields' => array( 'contractor_nombresfull',
'NUMPAGOS',
'contractor_type' ),
'fieldItems' => array( 'VALOR_PAGADO' => array( 'report_grid_field1',
'report_group_field3' ),
'SALDO' => array( 'report_grid_field2',
'report_group_field2' ),
'contractor_nombresfull' => array( 'report_group_field' ),
'NUMPAGOS' => array( 'report_group_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'export_report_excel',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'left' => array( 'logo',
'expand_button',
'menu',
'search_panel',
'filter_panel' ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'grid' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3',
'report_grid_field1',
'report_grid_field2' ),
'top' => array(  ) ),
'formXtTags' => array( 'above-grid' => array( 'export_link',
'details_found',
'grpsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'export_report_excel' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'filter_panel' => 'left',
'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'report_group_field' => 'grid',
'report_group_field1' => 'grid',
'report_group_field2' => 'grid',
'report_group_field3' => 'grid',
'report_grid_field1' => 'grid',
'report_grid_field2' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'expand_menu_button' => 2,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'list_options' => array( 'list_options' ),
'export_report_excel' => array( 'export_report_excel' ),
'export_report_word' => array( 'export_report_word' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
'-' => array( '-',
'-1' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11',
'search_panel_field12',
'search_panel_field13',
'search_panel_field14',
'search_panel_field15',
'search_panel_field16' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'advsearch_link' => array( 'advsearch_link' ),
'report_grid_field' => array( 'report_grid_field1',
'report_grid_field2' ),
'report_group_field' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'report',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'newreport' => array( 'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => false,
'field' => 'contractor_nombresfull',
'color' => array( 'header' => '7aca7a',
'summary' => '90ee90' ),
'axis' => 1 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'NUMPAGOS',
'color' => array( 'header' => '93b8c4',
'summary' => 'add8e6' ),
'axis' => 0 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'SALDO',
'color' => array( 'header' => 'd99ba4',
'summary' => 'ffb6c1' ),
'axis' => 0 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'VALOR_PAGADO',
'color' => array( 'header' => 'd9d5ae',
'summary' => 'fffacd' ),
'axis' => 0 ) ),
'fields' => array( array( 'field' => 'VALOR_PAGADO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => true ),
array( 'field' => 'SALDO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => true ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => false,
'crosstab' => true,
'colors' => array(  ),
'horizSummary' => true,
'layout' => 'plain',
'vertSummary' => true ) ) );
			$pageArray = array( 'id' => 'report',
'type' => 'report',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'report-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_report_excel' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'report-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo',
'expand_button' ) ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel',
'filter_panel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-chart',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'report-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'report_group_field',
'report_group_field1',
'report_group_field2',
'report_group_field3' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'report_grid_field1',
'report_grid_field2' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1,
'reportInfo' => array( 'groupFields' => array( array( 'interval' => 0,
'summary' => false,
'field' => 'contractor_nombresfull',
'color' => array( 'header' => '7aca7a',
'summary' => '90ee90' ),
'axis' => 1 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'NUMPAGOS',
'color' => array( 'header' => '93b8c4',
'summary' => 'add8e6' ),
'axis' => 0 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'SALDO',
'color' => array( 'header' => 'd99ba4',
'summary' => 'ffb6c1' ),
'axis' => 0 ),
array( 'interval' => 0,
'summary' => false,
'field' => 'VALOR_PAGADO',
'color' => array( 'header' => 'd9d5ae',
'summary' => 'fffacd' ),
'axis' => 0 ) ),
'fields' => array( array( 'field' => 'VALOR_PAGADO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => true ),
array( 'field' => 'SALDO',
'grid' => true,
'avg' => false,
'max' => false,
'min' => false,
'sum' => true ) ),
'showData' => true,
'pageSummary' => false,
'globalSummary' => false,
'crosstab' => true,
'colors' => array(  ),
'horizSummary' => true,
'layout' => 'plain',
'vertSummary' => true ) ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array(  ),
'cells' => array(  ),
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
'export_report_word' ) ),
'export_report_excel' => array( 'type' => 'export_report_excel',
'icon' => array( 'fa' => 'file-excel-o' ),
'buttonStyle' => 'info' ),
'export_report_word' => array( 'type' => 'export_report_word' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field16',
'search_panel_field15',
'search_panel_field14',
'search_panel_field13',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'-' => array( 'type' => '-' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'CONTRATOID',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field1' => array( 'field' => 'DOCID',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field2' => array( 'field' => 'FECHAF',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field3' => array( 'field' => 'FECHAI',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field4' => array( 'field' => 'NUMPAGOS',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'PAGO_MES',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field6' => array( 'field' => 'SALDO',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 'VALORI',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field8' => array( 'field' => 'VALOR_CONTRATO',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field9' => array( 'field' => 'VALOR_PAGADO',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field10' => array( 'field' => 'VIGENCIA',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field11' => array( 'field' => 'contractor_email',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field12' => array( 'field' => 'contractor_nombresfull',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field13' => array( 'field' => 'contractor_type',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field14' => array( 'field' => 'id_cont',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field15' => array( 'field' => 'nombresupfull',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field16' => array( 'field' => 'sup_mailnot',
'type' => 'search_panel_field',
'required' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-1' => array( 'type' => '-' ),
'report_grid_field1' => array( 'field' => 'VALOR_PAGADO',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => true ),
'report_grid_field2' => array( 'field' => 'SALDO',
'type' => 'report_grid_field',
'reportAvg' => false,
'reportMin' => false,
'reportMax' => false,
'reportSum' => true ),
'report_group_field' => array( 'field' => 'contractor_nombresfull',
'type' => 'report_group_field',
'summary' => false,
'axis' => 1,
'interval' => 0 ),
'report_group_field1' => array( 'field' => 'NUMPAGOS',
'type' => 'report_group_field',
'summary' => false,
'axis' => 0,
'interval' => 0 ),
'report_group_field2' => array( 'field' => 'SALDO',
'type' => 'report_group_field',
'summary' => false,
'axis' => 0,
'interval' => 0 ),
'report_group_field3' => array( 'field' => 'VALOR_PAGADO',
'type' => 'report_group_field',
'summary' => false,
'axis' => 0,
'interval' => 0 ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field2',
'filter_panel_field',
'filter_panel_field1' ) ),
'filter_panel_field' => array( 'field' => 'contractor_nombresfull',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'NUMPAGOS',
'type' => 'filter_panel_field' ),
'filter_panel_field2' => array( 'field' => 'contractor_type',
'type' => 'filter_panel_field' ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>