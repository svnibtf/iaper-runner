<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
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
'master' => array( 'adm_meuplano' => array( 'preview' => false ),
'Busca Profissional' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'udp_id' => array( 'totalsType' => '' ),
'udp_usu_id' => array( 'totalsType' => '' ),
'email_profissional' => array( 'totalsType' => '' ),
'avaliacao_usuarios' => array( 'totalsType' => '' ),
'sobre_profissional' => array( 'totalsType' => '' ),
'resumo_formacao' => array( 'totalsType' => '' ),
'diferencial_profissional' => array( 'totalsType' => '' ),
'atendimento_presencial' => array( 'totalsType' => '' ),
'atendimento_online' => array( 'totalsType' => '' ),
'mini_curriculo' => array( 'totalsType' => '' ),
'resumo_formacao_academica' => array( 'totalsType' => '' ),
'resumo_formacao_cursos' => array( 'totalsType' => '' ),
'nome_empresa' => array( 'totalsType' => '' ),
'cnpj' => array( 'totalsType' => '' ),
'ramo_empresa' => array( 'totalsType' => '' ),
'cep_profissional' => array( 'totalsType' => '' ),
'endereco_profissional_rua' => array( 'totalsType' => '' ),
'endereco_profissional_numero' => array( 'totalsType' => '' ),
'endereco_profissional_complemento' => array( 'totalsType' => '' ),
'endereco_profissional_latitude' => array( 'totalsType' => '' ),
'endereco_profissional_longitude' => array( 'totalsType' => '' ),
'pais_empresa' => array( 'totalsType' => '' ),
'estado_empresa' => array( 'totalsType' => '' ),
'municipio_empresa' => array( 'totalsType' => '' ),
'Foto_Fechada' => array( 'totalsType' => '' ),
'Logotipo' => array( 'totalsType' => '' ),
'Mapa' => array( 'totalsType' => '' ),
'endereco_profissional_bairro' => array( 'totalsType' => '' ),
'Horarios_de_Atendimento' => array( 'totalsType' => '' ),
'Sobre_a_Empresa' => array( 'totalsType' => '' ),
'Lat' => array( 'totalsType' => '' ),
'Lng' => array( 'totalsType' => '' ),
'idPlano' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Logotipo',
'nome_empresa',
'cnpj',
'municipio_empresa',
'endereco_profissional_bairro' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'udp_id',
'idPlano',
'Lng',
'Lat',
'Sobre_a_Empresa',
'Horarios_de_Atendimento',
'endereco_profissional_bairro',
'Mapa',
'Logotipo',
'Foto_Fechada',
'municipio_empresa',
'estado_empresa',
'pais_empresa',
'endereco_profissional_longitude',
'endereco_profissional_latitude',
'endereco_profissional_complemento',
'endereco_profissional_numero',
'endereco_profissional_rua',
'cep_profissional',
'ramo_empresa',
'cnpj',
'nome_empresa',
'resumo_formacao_cursos',
'resumo_formacao_academica',
'mini_curriculo',
'atendimento_online',
'atendimento_presencial',
'diferencial_profissional',
'resumo_formacao',
'sobre_profissional',
'avaliacao_usuarios',
'email_profissional',
'udp_usu_id' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'Logotipo' => array( 'grid_field',
'grid_field1' ),
'nome_empresa' => array( 'simple_grid_field14',
'simple_grid_field16' ),
'cnpj' => array( 'simple_grid_field15',
'simple_grid_field17' ),
'municipio_empresa' => array( 'simple_grid_field26',
'simple_grid_field27' ),
'endereco_profissional_bairro' => array( 'simple_grid_field',
'simple_grid_field1' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => false ),
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
'details_found',
'page_size' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'master_info' ),
'grid' => array( 'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view',
'grid_field1',
'grid_field',
'simple_grid_field16',
'simple_grid_field14',
'simple_grid_field17',
'simple_grid_field15',
'simple_grid_field27',
'simple_grid_field26',
'simple_grid_field1',
'simple_grid_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'details_found',
'recsPerPage' ),
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
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'pagination' => 'below-grid',
'master_info' => 'top',
'grid_checkbox' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_field1' => 'grid',
'grid_field' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field27' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field' => 'grid' ),
'itemLocations' => array( 'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_top' ),
'grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_label' ),
'grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'cell_label1' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'cell_label2' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field27' => array( 'location' => 'grid',
'cellId' => 'cell_label3' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_label4' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ) ),
'itemVisiblity' => array( 'expand_button' => 5,
'menu' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'list_options' => array( 'list_options' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'-' => array( '-',
'-1',
'-2',
'-3',
'-4' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'logo' => array( 'logo1' ),
'master_info' => array( 'master_info' ),
'search_panel' => array( 'search_panel' ),
'show_search_panel' => array( 'show_search_panel' ),
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
'search_panel_field16',
'search_panel_field17',
'search_panel_field18',
'search_panel_field19',
'search_panel_field20',
'search_panel_field21',
'search_panel_field22',
'search_panel_field23',
'search_panel_field24',
'search_panel_field25',
'search_panel_field26',
'search_panel_field27',
'search_panel_field28',
'search_panel_field29',
'search_panel_field30',
'search_panel_field31',
'search_panel_field32' ),
'changepassword_link' => array( 'changepassword_link' ),
'grid_field' => array( 'grid_field',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field26',
'simple_grid_field' ),
'grid_field_label' => array( 'grid_field1',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field27',
'simple_grid_field1' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'cell_top' => array( 'cols' => array( 0,
1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column',
'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'Logotipo_fieldheadercolumn' ),
'items' => array( 'grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'Logotipo_fieldcolumn' ),
'items' => array( 'grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label1' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array( 'nome_empresa_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array( 'nome_empresa_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label2' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array( 'cnpj_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array( 'cnpj_fieldcolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label3' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array( 'municipio_empresa_fieldheadercolumn' ),
'items' => array( 'simple_grid_field27' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array( 'municipio_empresa_fieldcolumn' ),
'items' => array( 'simple_grid_field26' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_label4' => array( 'cols' => array( 0 ),
'rows' => array( 5 ),
'tags' => array( 'endereco_profissional_bairro_fieldheadercolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 1 ),
'rows' => array( 5 ),
'tags' => array( 'endereco_profissional_bairro_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1 ),
'rows' => array( 6 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 7 ) ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 1,
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
'delete' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size' ),
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
'grid' => array( 'modelId' => 'vertical-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'cell_top',
'colspan' => 2 ) ),
'section' => 'head' ),
array( 'cells' => array( array( 'cell' => 'cell_label' ),
array( 'cell' => 'cell_field' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label1' ),
array( 'cell' => 'cell_field1' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label2' ),
array( 'cell' => 'cell_field2' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label3' ),
array( 'cell' => 'cell_field3' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_label4' ),
array( 'cell' => 'cell_field4' ) ),
'section' => 'body' ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 2 ) ),
'section' => 'foot' ) ),
'cells' => array( 'cell_top' => array( 'model' => 'cell_top',
'items' => array( 'grid_checkbox',
'grid_edit',
'grid_inline_cancel',
'grid_view' ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array(  ) ),
'cell_label' => array( 'model' => 'cell_label',
'items' => array( 'grid_field1' ),
'field' => 'Logotipo',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'grid_field' ),
'field' => 'Logotipo',
'columnName' => 'field' ),
'cell_label1' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field16' ),
'field' => 'nome_empresa',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'nome_empresa',
'columnName' => 'field' ),
'cell_label2' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field17' ),
'field' => 'cnpj',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'cnpj',
'columnName' => 'field' ),
'cell_label3' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field27' ),
'field' => 'municipio_empresa',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field26' ),
'field' => 'municipio_empresa',
'columnName' => 'field' ),
'cell_label4' => array( 'model' => 'cell_label',
'items' => array( 'simple_grid_field1' ),
'field' => 'endereco_profissional_bairro',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'endereco_profissional_bairro',
'columnName' => 'field' ) ),
'deferredItems' => array( 'grid_checkbox_head' ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'delete_selected',
'-4',
'advsearch_link',
'show_search_panel',
'hide_search_panel' ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'-' => array( 'type' => '-' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add',
'popup' => true,
'label' => array( 'type' => 0,
'text' => 'Meus Dados Profissionais' ) ),
'-1' => array( 'type' => '-' ),
'-2' => array( 'type' => '-' ),
'-3' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-4' => array( 'type' => '-' ),
'logo1' => array( 'type' => 'logo' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'meuplano' => 'true',
'Busca Profissional' => 'true' ) ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field32',
'search_panel_field31',
'search_panel_field30',
'search_panel_field29',
'search_panel_field28',
'search_panel_field27',
'search_panel_field26',
'search_panel_field25',
'search_panel_field24',
'search_panel_field23',
'search_panel_field22',
'search_panel_field21',
'search_panel_field20',
'search_panel_field19',
'search_panel_field18',
'search_panel_field17',
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
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'udp_id',
'type' => 'search_panel_field' ),
'search_panel_field1' => array( 'field' => 'udp_usu_id',
'type' => 'search_panel_field' ),
'search_panel_field2' => array( 'field' => 'email_profissional',
'type' => 'search_panel_field' ),
'search_panel_field3' => array( 'field' => 'avaliacao_usuarios',
'type' => 'search_panel_field' ),
'search_panel_field4' => array( 'field' => 'sobre_profissional',
'type' => 'search_panel_field' ),
'search_panel_field5' => array( 'field' => 'resumo_formacao',
'type' => 'search_panel_field' ),
'search_panel_field6' => array( 'field' => 'diferencial_profissional',
'type' => 'search_panel_field' ),
'search_panel_field7' => array( 'field' => 'atendimento_presencial',
'type' => 'search_panel_field' ),
'search_panel_field8' => array( 'field' => 'atendimento_online',
'type' => 'search_panel_field' ),
'search_panel_field9' => array( 'field' => 'mini_curriculo',
'type' => 'search_panel_field' ),
'search_panel_field10' => array( 'field' => 'resumo_formacao_academica',
'type' => 'search_panel_field' ),
'search_panel_field11' => array( 'field' => 'resumo_formacao_cursos',
'type' => 'search_panel_field' ),
'search_panel_field12' => array( 'field' => 'nome_empresa',
'type' => 'search_panel_field' ),
'search_panel_field13' => array( 'field' => 'cnpj',
'type' => 'search_panel_field' ),
'search_panel_field14' => array( 'field' => 'ramo_empresa',
'type' => 'search_panel_field' ),
'search_panel_field15' => array( 'field' => 'cep_profissional',
'type' => 'search_panel_field' ),
'search_panel_field16' => array( 'field' => 'endereco_profissional_rua',
'type' => 'search_panel_field' ),
'search_panel_field17' => array( 'field' => 'endereco_profissional_numero',
'type' => 'search_panel_field' ),
'search_panel_field18' => array( 'field' => 'endereco_profissional_complemento',
'type' => 'search_panel_field' ),
'search_panel_field19' => array( 'field' => 'endereco_profissional_latitude',
'type' => 'search_panel_field' ),
'search_panel_field20' => array( 'field' => 'endereco_profissional_longitude',
'type' => 'search_panel_field' ),
'search_panel_field21' => array( 'field' => 'pais_empresa',
'type' => 'search_panel_field' ),
'search_panel_field22' => array( 'field' => 'estado_empresa',
'type' => 'search_panel_field' ),
'search_panel_field23' => array( 'field' => 'municipio_empresa',
'type' => 'search_panel_field' ),
'search_panel_field24' => array( 'field' => 'Foto_Fechada',
'type' => 'search_panel_field' ),
'search_panel_field25' => array( 'field' => 'Logotipo',
'type' => 'search_panel_field' ),
'search_panel_field26' => array( 'field' => 'Mapa',
'type' => 'search_panel_field' ),
'search_panel_field27' => array( 'field' => 'endereco_profissional_bairro',
'type' => 'search_panel_field' ),
'search_panel_field28' => array( 'field' => 'Horarios_de_Atendimento',
'type' => 'search_panel_field' ),
'search_panel_field29' => array( 'field' => 'Sobre_a_Empresa',
'type' => 'search_panel_field' ),
'search_panel_field30' => array( 'field' => 'Lat',
'type' => 'search_panel_field' ),
'search_panel_field31' => array( 'field' => 'Lng',
'type' => 'search_panel_field' ),
'search_panel_field32' => array( 'field' => 'idPlano',
'type' => 'search_panel_field' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'grid_field' => array( 'field' => 'Logotipo',
'type' => 'grid_field',
'clickSort' => false ),
'grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'Logotipo',
'clickSort' => false ),
'simple_grid_field14' => array( 'field' => 'nome_empresa',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'nome_empresa',
'clickSort' => false ),
'simple_grid_field15' => array( 'field' => 'cnpj',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'cnpj',
'clickSort' => false ),
'simple_grid_field26' => array( 'field' => 'municipio_empresa',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'clickSort' => false ),
'simple_grid_field27' => array( 'type' => 'grid_field_label',
'field' => 'municipio_empresa',
'clickSort' => false ),
'simple_grid_field' => array( 'field' => 'endereco_profissional_bairro',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false,
'label' => array( 'field' => 'endereco_profissional_bairro',
'table' => 'usuarios_dados_profissionais',
'type' => 3 ),
'clickSort' => false ),
'simple_grid_field1' => array( 'type' => 'grid_field_label',
'field' => 'endereco_profissional_bairro',
'clickSort' => false ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'grid_edit' => array( 'type' => 'grid_edit',
'popup' => true ),
'grid_view' => array( 'type' => 'grid_view',
'popup' => true ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>