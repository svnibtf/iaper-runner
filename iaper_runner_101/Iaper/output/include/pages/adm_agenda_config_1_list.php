<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => true,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'agc_id' => array( 'totalsType' => '' ),
'agc_usu_pro_id' => array( 'totalsType' => '' ),
'agc_nome' => array( 'totalsType' => '' ),
'agc_tipo' => array( 'totalsType' => '' ),
'agc_item_pagamento_id' => array( 'totalsType' => '' ),
'agc_qtidade' => array( 'totalsType' => '' ),
'agc_duracao_media' => array( 'totalsType' => '' ),
'agc_email_automatico' => array( 'totalsType' => '' ),
'agc_tempo_min_antecedencia' => array( 'totalsType' => '' ),
'agc_email_agendamento' => array( 'totalsType' => '' ),
'agc_email_lembrete' => array( 'totalsType' => '' ),
'agc_email_cancelamento' => array( 'totalsType' => '' ),
'agc_deletado' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'agc_nome',
'agc_item_pagamento_id',
'agc_qtidade',
'agc_duracao_media' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'agc_qtidade',
'agc_deletado',
'agc_email_cancelamento',
'agc_email_lembrete',
'agc_email_agendamento',
'agc_tempo_min_antecedencia',
'agc_email_automatico',
'agc_tipo',
'agc_usu_pro_id',
'agc_id',
'agc_nome',
'agc_item_pagamento_id',
'agc_duracao_media' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'agc_nome' => array( 'simple_grid_field2',
'simple_grid_field' ),
'agc_item_pagamento_id' => array( 'simple_grid_field4',
'simple_grid_field7' ),
'agc_qtidade' => array( 'simple_grid_field5',
'simple_grid_field8' ),
'agc_duracao_media' => array( 'simple_grid_field6',
'simple_grid_field9' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ),
'grid' => array( 'simple_grid_field',
'simple_grid_field2',
'simple_grid_field7',
'simple_grid_field4',
'simple_grid_field8',
'simple_grid_field5',
'simple_grid_field9',
'simple_grid_field6',
'grid_edit',
'grid_view',
'grid_checkbox_head',
'grid_checkbox' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array(  ) ),
'itemForms' => array( 'logo1' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'simple_grid_field' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field6' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ) ),
'itemVisiblity' => array( 'menu' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field1',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field12',
'search_panel_field',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field10',
'search_panel_field11' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
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
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'logo' => array( 'logo1' ),
'grid_field' => array( 'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6' ),
'grid_field_label' => array( 'simple_grid_field',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ) ),
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
'tags' => array( 'agc_nome_fieldheadercolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'agc_item_pagamento_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'agc_qtidade_fieldheadercolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'agc_duracao_media_fieldheadercolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'view_column' ),
'items' => array( 'grid_edit',
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
'tags' => array( 'agc_nome_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'agc_item_pagamento_id_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'agc_qtidade_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'agc_duracao_media_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
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
'tags' => array(  ),
'items' => array(  ),
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
'fixedAtClient' => false ) ),
'width' => 6,
'height' => 3 ) ) ),
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
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1' ),
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
'items' => array( 'list_options',
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
'delete' ),
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
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'agc_nome' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'agc_nome' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'agc_nome' ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'agc_item_pagamento_id' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'agc_item_pagamento_id' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'agc_item_pagamento_id' ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'agc_qtidade' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'agc_qtidade' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'agc_qtidade' ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'agc_duracao_media' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'agc_duracao_media' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'agc_duracao_media' ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ) ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_view' ) ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ) ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ) ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ) ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field9',
'search_panel_field12',
'search_panel_field11',
'search_panel_field10',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field',
'search_panel_field8',
'search_panel_field7',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field1' => array( 'field' => 'agc_duracao_media',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field7' => array( 'field' => 'agc_item_pagamento_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'agc_nome',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field9' => array( 'field' => 'agc_qtidade',
'type' => 'search_panel_field',
'required' => false ),
'search_panel_field12' => array( 'field' => 'agc_deletado',
'type' => 'search_panel_field' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
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
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'logo1' => array( 'type' => 'logo' ),
'search_panel_field' => array( 'field' => 'agc_id',
'type' => 'search_panel_field' ),
'search_panel_field2' => array( 'field' => 'agc_usu_pro_id',
'type' => 'search_panel_field' ),
'search_panel_field3' => array( 'field' => 'agc_tipo',
'type' => 'search_panel_field' ),
'search_panel_field4' => array( 'field' => 'agc_email_automatico',
'type' => 'search_panel_field' ),
'search_panel_field5' => array( 'field' => 'agc_tempo_min_antecedencia',
'type' => 'search_panel_field' ),
'search_panel_field6' => array( 'field' => 'agc_email_agendamento',
'type' => 'search_panel_field' ),
'search_panel_field10' => array( 'field' => 'agc_email_lembrete',
'type' => 'search_panel_field' ),
'search_panel_field11' => array( 'field' => 'agc_email_cancelamento',
'type' => 'search_panel_field' ),
'simple_grid_field2' => array( 'field' => 'agc_nome',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field' => array( 'type' => 'grid_field_label',
'field' => 'agc_nome',
'clickSort' => true ),
'simple_grid_field4' => array( 'field' => 'agc_item_pagamento_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'agc_item_pagamento_id',
'clickSort' => true ),
'simple_grid_field5' => array( 'field' => 'agc_qtidade',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field8' => array( 'type' => 'grid_field_label',
'field' => 'agc_qtidade',
'clickSort' => true ),
'simple_grid_field6' => array( 'field' => 'agc_duracao_media',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => true ),
'simple_grid_field9' => array( 'type' => 'grid_field_label',
'field' => 'agc_duracao_media',
'clickSort' => true ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>