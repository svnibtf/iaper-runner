<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'list_options' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item6' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_agenda_config_1',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_agenda_estrutura_1',
'page' => 'list' ),
'welcome_item7' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_agenda_1',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item6',
'welcome_item2',
'welcome_item7' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item6' => 'grid',
'welcome_item2' => 'grid',
'welcome_item7' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'list_options' => array( 'list_options' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ),
'welcome_item' => array( 'welcome_item7',
'welcome_item2',
'welcome_item6' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
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
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item6',
'welcome_item2',
'welcome_item7' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'list_options' => array( 'type' => 'list_options',
'items' => array(  ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'welcome_item7' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'adm_agenda_1',
'linkPage' => 'list',
'background' => '#dadada',
'linkComments' => array( 'text' => 'Permite gerenciar sua agenda com seus pacientes.',
'type' => 0 ) ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'adm_agenda_estrutura_1',
'linkPage' => 'list',
'linkIcon' => array( 'glyph' => '' ),
'background' => '#dadada',
'linkComments' => array( 'text' => 'Permite configurar seus horarios de atendimento.',
'type' => 0 ) ),
'welcome_item6' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'adm_agenda_config_1',
'linkPage' => 'list',
'linkIcon' => array( 'glyph' => '' ),
'background' => '#dadada',
'linkComments' => array( 'text' => 'Permite configurar sua agenda, criar textos padrões e ações para cada tipo de agenda.',
'type' => 0 ) ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>