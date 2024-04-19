<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'spreadsheetMode' => false,
'addToBottom' => false,
'delete' => true,
'updateSelected' => true,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false,
'fieldFilter' => false,
'hideNumberOfRecords' => false ),
'master' => array( 'q_bandejaentrada_supervisores' => array( 'preview' => true ),
'contrato_audit' => array( 'preview' => true ),
'contrato' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'inf_id' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'inf_consecutivo' => array( 'totalsType' => 'COUNT' ),
'inf_fecharep_i' => array( 'totalsType' => '' ),
'inf_fecharep_f' => array( 'totalsType' => '' ),
'inf_valorcontrato' => array( 'totalsType' => '' ),
'inf_valor_pago' => array( 'totalsType' => 'COUNT' ),
'dias_calculados' => array( 'totalsType' => '' ),
'dias_fiscales' => array( 'totalsType' => '' ),
'valor_a_pagar' => array( 'totalsType' => 'TOTAL' ),
'avgavance' => array( 'totalsType' => 'TOTAL' ),
'inf_st' => array( 'totalsType' => '' ),
'inf_mes' => array( 'totalsType' => '' ),
'inf_tipopago' => array( 'totalsType' => '' ),
'sysuser' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'inf_consecutivo',
'inf_fecharep_i',
'inf_fecharep_f',
'dias_fiscales',
'inf_valor_pago',
'valor_a_pagar',
'avgavance',
'inf_mes',
'inf_tipopago',
'sysuser',
'inf_st' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'inf_valor_pago',
'sysuser',
'inf_tipopago',
'inf_mes',
'inf_st',
'avgavance',
'inf_valorcontrato',
'id_cont_fk',
'inf_fecharep_i',
'inf_fecharep_f',
'inf_consecutivo' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'inf_consecutivo' => array( 'simple_grid_field2',
'simple_grid_field7',
'simple_grid_field8' ),
'inf_fecharep_i' => array( 'simple_grid_field3',
'simple_grid_field9' ),
'inf_fecharep_f' => array( 'simple_grid_field4',
'simple_grid_field10' ),
'dias_fiscales' => array( 'simple_grid_field6',
'simple_grid_field11' ),
'inf_valor_pago' => array( 'simple_grid_field5',
'simple_grid_field12',
'simple_grid_field13' ),
'valor_a_pagar' => array( 'grid_field3',
'grid_field4',
'grid_field5' ),
'avgavance' => array( 'simple_grid_field',
'simple_grid_field14',
'simple_grid_field15' ),
'inf_mes' => array( 'grid_field',
'grid_field6' ),
'inf_tipopago' => array( 'grid_field1',
'grid_field7' ),
'sysuser' => array( 'grid_field2',
'grid_field8' ),
'inf_st' => array( 'simple_grid_field1',
'simple_grid_field16' ) ),
'hideEmptyFields' => array(  ),
'fieldFilterFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'inline_add',
'delete',
'update_selected',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'master_info' ),
'grid' => array( 'simple_grid_field7',
'simple_grid_field2',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field3',
'simple_grid_field10',
'simple_grid_field4',
'simple_grid_field11',
'simple_grid_field6',
'simple_grid_field12',
'simple_grid_field5',
'simple_grid_field13',
'grid_field4',
'grid_field3',
'grid_field5',
'simple_grid_field14',
'simple_grid_field',
'simple_grid_field15',
'grid_field6',
'grid_field',
'grid_field7',
'grid_field1',
'grid_field8',
'grid_field2',
'simple_grid_field16',
'simple_grid_field1',
'grid_checkbox_head',
'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'updateselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'update_selected' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'master_info' => 'top',
'simple_grid_field7' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field13' => 'grid',
'grid_field4' => 'grid',
'grid_field3' => 'grid',
'grid_field5' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field15' => 'grid',
'grid_field6' => 'grid',
'grid_field' => 'grid',
'grid_field7' => 'grid',
'grid_field1' => 'grid',
'grid_field8' => 'grid',
'grid_field2' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field1' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid' ),
'itemLocations' => array( 'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'footcell_field' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'footcell_field4' ),
'grid_field4' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'grid_field5' => array( 'location' => 'grid',
'cellId' => 'footcell_field5' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'footcell_field6' ),
'grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ) ),
'itemVisiblity' => array( 'breadcrumb' => 5,
'print_panel' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field5',
'search_panel_field8',
'search_panel_field9',
'search_panel_field',
'search_panel_field4',
'search_panel_field6',
'search_panel_field7',
'search_panel_field10' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'logo' => array( 'logo1' ),
'master_info' => array( 'master_info' ),
'update_selected' => array( 'update_selected' ),
'userinfo_link' => array( 'userinfo_link' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field6',
'simple_grid_field5',
'grid_field3',
'simple_grid_field',
'grid_field',
'grid_field1',
'grid_field2',
'simple_grid_field1' ),
'grid_field_label' => array( 'simple_grid_field7',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12',
'grid_field4',
'simple_grid_field14',
'grid_field6',
'grid_field7',
'grid_field8',
'simple_grid_field16' ),
'grid_field_totals' => array( 'simple_grid_field8',
'simple_grid_field13',
'grid_field5',
'simple_grid_field15' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
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
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'inf_consecutivo_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'inf_fecharep_i_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'inf_fecharep_f_fieldheadercolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'dias_fiscales_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'inf_valor_pago_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'valor_a_pagar_fieldheadercolumn' ),
'items' => array( 'grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'avgavance_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'inf_mes_fieldheadercolumn' ),
'items' => array( 'grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'inf_tipopago_fieldheadercolumn' ),
'items' => array( 'grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'sysuser_fieldheadercolumn' ),
'items' => array( 'grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'inf_st_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
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
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'inf_consecutivo_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'inf_fecharep_i_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'inf_fecharep_f_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'dias_fiscales_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'inf_valor_pago_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'valor_a_pagar_fieldcolumn' ),
'items' => array( 'grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'avgavance_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'inf_mes_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'inf_tipopago_fieldcolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'sysuser_fieldcolumn' ),
'items' => array( 'grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'inf_st_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array( 'inf_consecutivo_fieldfootercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array( 'inf_valor_pago_fieldfootercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array( 'valor_a_pagar_fieldfootercolumn' ),
'items' => array( 'grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array( 'avgavance_fieldfootercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 13,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array( array( 'id' => 'main',
'horizontal' => false ) ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
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
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'delete',
'update_selected' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
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
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'inf_consecutivo',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'inf_consecutivo',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'inf_consecutivo',
'columnName' => 'field' ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'inf_fecharep_i',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'inf_fecharep_i',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'inf_fecharep_f',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'inf_fecharep_f',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'dias_fiscales',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'dias_fiscales',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'inf_valor_pago',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'inf_valor_pago',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'inf_valor_pago',
'columnName' => 'field' ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field4' ),
'field' => 'valor_a_pagar',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'grid_field3' ),
'field' => 'valor_a_pagar',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array( 'grid_field5' ),
'field' => 'valor_a_pagar',
'columnName' => 'field' ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'avgavance',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'avgavance',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'avgavance',
'columnName' => 'field' ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field6' ),
'field' => 'inf_mes',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'inf_mes',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field7' ),
'field' => 'inf_tipopago',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'grid_field1' ),
'field' => 'inf_tipopago',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'grid_field8' ),
'field' => 'sysuser',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'grid_field2' ),
'field' => 'sysuser',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'inf_st',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'inf_st',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field5',
'search_panel_field10',
'search_panel_field7',
'search_panel_field6',
'search_panel_field4',
'search_panel_field',
'search_panel_field9',
'search_panel_field8',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field1' => array( 'field' => 'inf_consecutivo',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'inf_fecharep_f',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'inf_fecharep_i',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'inf_valor_pago',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add',
'popup' => true ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete',
'label' => array( 'type' => 0,
'text' => 'Borrar selección' ),
'buttonStyle' => 'danger',
'buttonSize' => 'normal' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'logo1' => array( 'type' => 'logo' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'q_bandejaentrada_supervisores' => 'true',
'contrato_audit' => 'true',
'contrato' => 'true' ) ),
'search_panel_field8' => array( 'field' => 'id_cont_fk',
'type' => 'search_panel_field',
'alwaysOnPanel' => false,
'required' => false ),
'search_panel_field9' => array( 'field' => 'inf_valorcontrato',
'type' => 'search_panel_field' ),
'search_panel_field' => array( 'field' => 'avgavance',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'inf_st',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'update_selected' => array( 'type' => 'update_selected' ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'search_panel_field6' => array( 'field' => 'inf_mes',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'inf_tipopago',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'sysuser',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'simple_grid_field2' => array( 'field' => 'inf_consecutivo',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'inf_consecutivo',
'clickSort' => true ),
'simple_grid_field8' => array( 'type' => 'grid_field_totals',
'field' => 'inf_consecutivo',
'totals' => 'COUNT' ),
'simple_grid_field3' => array( 'field' => 'inf_fecharep_i',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'inf_fecharep_i',
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'inf_fecharep_f',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field10' => array( 'type' => 'grid_field_label',
'field' => 'inf_fecharep_f',
'clickSort' => true ),
'simple_grid_field6' => array( 'field' => 'dias_fiscales',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'dias_fiscales' ),
'simple_grid_field5' => array( 'field' => 'inf_valor_pago',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'label' => array( 'field' => 'inf_valor_pago',
'table' => 'informe_intersup_plan_pagos',
'type' => 3 ) ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'inf_valor_pago' ),
'simple_grid_field13' => array( 'type' => 'grid_field_totals',
'field' => 'inf_valor_pago',
'totals' => 'COUNT' ),
'grid_field3' => array( 'field' => 'valor_a_pagar',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field4' => array( 'type' => 'grid_field_label',
'field' => 'valor_a_pagar' ),
'grid_field5' => array( 'type' => 'grid_field_totals',
'field' => 'valor_a_pagar',
'totals' => 'TOTAL' ),
'simple_grid_field' => array( 'field' => 'avgavance',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'group_by' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'avgavance' ),
'simple_grid_field15' => array( 'type' => 'grid_field_totals',
'field' => 'avgavance',
'totals' => 'TOTAL' ),
'grid_field' => array( 'field' => 'inf_mes',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'inf_mes' ),
'grid_field1' => array( 'field' => 'inf_tipopago',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'inf_tipopago' ),
'grid_field2' => array( 'field' => 'sysuser',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'sysuser' ),
'simple_grid_field1' => array( 'field' => 'inf_st',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'inf_st' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true,
'buttonStyle' => 'success',
'buttonSize' => 'normal' ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true,
'buttonStyle' => 'success',
'buttonSize' => 'normal',
'icon' => array( 'fa' => 'search-plus' ) ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'spreadsheetGrid' => false,
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>