<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => false,
'inlineEdit' => false,
'delete' => true,
'updateSelected' => false,
'addInPopup' => true,
'editInPopup' => true,
'viewInPopup' => true,
'clickSort' => false,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'listSearch' => array( 'alwaysOnPanelFields' => array( 'age_config_id',
'age_data_att',
'age_time_att' ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => true ),
'totals' => array( 'age_id' => array( 'totalsType' => '' ),
'age_usu_id' => array( 'totalsType' => '' ),
'age_config_id' => array( 'totalsType' => '' ),
'age_dia_sem' => array( 'totalsType' => '' ),
'age_data_att' => array( 'totalsType' => '' ),
'age_time_att' => array( 'totalsType' => '' ),
'age_data_in' => array( 'totalsType' => '' ),
'age_acao' => array( 'totalsType' => '' ),
'age_retorno_data_time' => array( 'totalsType' => '' ),
'age_tipo_pagamento' => array( 'totalsType' => '' ),
'age_anotacoes' => array( 'totalsType' => '' ),
'age_att_campo_1' => array( 'totalsType' => '' ),
'age_att_campo_2' => array( 'totalsType' => '' ),
'age_att_campo_3' => array( 'totalsType' => '' ),
'age_att_campo_4' => array( 'totalsType' => '' ),
'age_deletado' => array( 'totalsType' => '' ),
'age_Paciente' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'age_data_att',
'age_time_att',
'age_config_id',
'age_Paciente' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'age_time_att',
'age_data_att',
'age_config_id' ),
'filterFields' => array( 'age_dia_sem',
'age_data_att',
'age_time_att',
'age_data_in',
'age_Paciente' ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'age_data_att' => array( 'simple_grid_field4',
'simple_grid_field6' ),
'age_time_att' => array( 'simple_grid_field5',
'simple_grid_field7' ),
'age_config_id' => array( 'simple_grid_field2',
'simple_grid_field3' ),
'age_Paciente' => array( 'simple_grid_field',
'simple_grid_field1' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'menu',
'search_panel',
'filter_panel' ),
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
'grid' => array( 'simple_grid_field6',
'simple_grid_field4',
'simple_grid_field7',
'simple_grid_field5',
'simple_grid_field3',
'simple_grid_field2',
'simple_grid_field1',
'simple_grid_field',
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
'filter_panel' => 'left',
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
'simple_grid_field6' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid',
'grid_edit' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field' => array( 'location' => 'grid',
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
'filter_panel' => 3,
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
'search_panel_field' => array( 'search_panel_field6',
'search_panel_field7',
'search_panel_field13' ),
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
'-' => array( '-',
'-1',
'-2',
'-3' ),
'delete' => array( 'delete' ),
'logo' => array( 'logo1' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'delete_selected' => array( 'delete_selected' ),
'save_search' => array( 'save_search' ),
'saved_searches' => array( 'saved_searches' ),
'filter_panel' => array( 'filter_panel' ),
'filter_panel_field' => array( 'filter_panel_field',
'filter_panel_field1',
'filter_panel_field2',
'filter_panel_field3',
'filter_panel_field4' ),
'grid_field' => array( 'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field2',
'simple_grid_field' ),
'grid_field_label' => array( 'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field3',
'simple_grid_field1' ),
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
'tags' => array( 'age_data_att_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'age_time_att_fieldheadercolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'age_config_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'age_Paciente_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
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
'tags' => array( 'age_data_att_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'age_time_att_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'age_config_id_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'age_Paciente_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
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
'search_panel',
'filter_panel' ),
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
'items' => array( 'simple_grid_field6' ),
'field' => 'age_data_att' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'age_data_att' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'age_data_att' ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'age_time_att' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'age_time_att' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'age_time_att' ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'age_config_id' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'age_config_id' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'age_config_id' ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'age_Paciente' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'age_Paciente' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ),
'field' => 'age_Paciente' ),
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
'recsPerRow' => 3 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field13',
'search_panel_field7',
'search_panel_field6' ),
'_flexiblePanel' => true ),
'search_panel_field6' => array( 'field' => 'age_config_id',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field7' => array( 'field' => 'age_data_att',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
'search_panel_field13' => array( 'field' => 'age_time_att',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => true ),
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
'-' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'logo1' => array( 'type' => 'logo' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'delete_selected',
'-1',
'show_search_panel',
'hide_search_panel',
'-2',
'save_search',
'-3',
'saved_searches' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'-1' => array( 'type' => '-' ),
'save_search' => array( 'type' => 'save_search' ),
'-2' => array( 'type' => '-' ),
'saved_searches' => array( 'type' => 'saved_searches' ),
'-3' => array( 'type' => '-' ),
'filter_panel' => array( 'type' => 'filter_panel',
'items' => array( 'filter_panel_field',
'filter_panel_field4',
'filter_panel_field3',
'filter_panel_field2',
'filter_panel_field1' ) ),
'filter_panel_field' => array( 'field' => 'age_dia_sem',
'type' => 'filter_panel_field' ),
'filter_panel_field1' => array( 'field' => 'age_data_att',
'type' => 'filter_panel_field' ),
'filter_panel_field2' => array( 'field' => 'age_time_att',
'type' => 'filter_panel_field' ),
'filter_panel_field3' => array( 'field' => 'age_data_in',
'type' => 'filter_panel_field' ),
'filter_panel_field4' => array( 'field' => 'age_Paciente',
'type' => 'filter_panel_field' ),
'simple_grid_field4' => array( 'field' => 'age_data_att',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'age_data_att',
'clickSort' => false ),
'simple_grid_field5' => array( 'field' => 'age_time_att',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field7' => array( 'type' => 'grid_field_label',
'field' => 'age_time_att',
'clickSort' => false ),
'simple_grid_field2' => array( 'field' => 'age_config_id',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'age_config_id',
'clickSort' => false ),
'simple_grid_field' => array( 'field' => 'age_Paciente',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'age_Paciente',
'clickSort' => false ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>