<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'list_options' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item5' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_usuarios',
'page' => 'list' ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Procurar por Profissionais',
'page' => 'dashboard' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_tratamento',
'page' => 'list' ),
'welcome_item7' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_tratamento',
'page' => 'list' ),
'welcome_item8' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_tratamento',
'page' => 'list' ),
'welcome_item6' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_tratamento',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'Fluxo de Recebimentos',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'adm_pacientes',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'buscar_profissionais',
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
'grid' => array( 'welcome_item5',
'welcome_item',
'welcome_item2',
'welcome_item7',
'welcome_item8',
'welcome_item6',
'welcome_item3',
'welcome_item4',
'welcome_item1' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item5' => 'grid',
'welcome_item' => 'grid',
'welcome_item2' => 'grid',
'welcome_item7' => 'grid',
'welcome_item8' => 'grid',
'welcome_item6' => 'grid',
'welcome_item3' => 'grid',
'welcome_item4' => 'grid',
'welcome_item1' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8' ),
'list_options' => array( 'list_options' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'changepassword_link' => array( 'changepassword_link' ) ),
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
'items' => array( 'welcome_item5',
'welcome_item',
'welcome_item2',
'welcome_item7',
'welcome_item8',
'welcome_item6',
'welcome_item3',
'welcome_item4',
'welcome_item1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkTable' => 'Procurar por Profissionais',
'linkPage' => 'dashboard',
'linkText' => array( 'type' => 0,
'text' => 'Buscar Profissionais' ),
'linkComments' => array( 'text' => 'Permite realizar busca de profissionais.',
'type' => 0 ),
'background' => '#dadada' ),
'list_options' => array( 'type' => 'list_options',
'items' => array(  ) ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'changepassword_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkTable' => 'buscar_profissionais',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Quem Somos & Planos' ),
'linkComments' => array( 'text' => 'Conheça quem somos e tudo o que oferecemos.',
'type' => 0 ),
'background' => '#dadada',
'linkUrl' => 'http://site.sateh.com.br/#benefits-grid-images-left' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkTable' => 'adm_tratamento',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Minha Agenda' ),
'linkComments' => array( 'text' => 'Permite acessar a sua agenda de consultas.',
'type' => 0 ),
'background' => '#dadada' ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkTable' => 'Fluxo de Recebimentos',
'linkPage' => 'list',
'linkComments' => array( 'text' => 'Permite acessar informações administrativas.',
'type' => 0 ),
'background' => '#dadada' ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkTable' => 'adm_pacientes',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Meus Pacientes' ),
'linkComments' => array( 'text' => 'Permite acessar o Cadastro de seus Pacientes.',
'type' => 0 ),
'background' => '#dadada' ),
'welcome_item5' => array( 'type' => 'welcome_item',
'linkTable' => 'adm_usuarios',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Completar meu Cadastro' ),
'linkComments' => array( 'type' => 0,
'text' => 'Por favor complete seu cadastro.' ),
'background' => '#dadada' ),
'welcome_item6' => array( 'type' => 'welcome_item',
'linkTable' => 'adm_tratamento',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Gestão da Agenda' ),
'linkComments' => array( 'text' => 'Permite fazer a gestão completa da Agenda.',
'type' => 0 ),
'background' => '#dadada',
'linkUrl' => 'https://iaper.com.br/page-agenda-config.html?page-agenda-profissional-gestao.html' ),
'welcome_item7' => array( 'type' => 'welcome_item',
'linkTable' => 'adm_tratamento',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Configurar Agenda' ),
'linkComments' => array( 'text' => 'Permite configurar a sua agenda e inserir parametros.',
'type' => 0 ),
'background' => '#dadada',
'linkUrl' => 'https://iaper.com.br/page-agenda-config.html?num_cliente_id=1&num_usu_id=1&produto_id=1' ),
'welcome_item8' => array( 'type' => 'welcome_item',
'linkTable' => 'adm_tratamento',
'linkPage' => 'list',
'linkText' => array( 'type' => 0,
'text' => 'Marcar Consulta' ),
'linkComments' => array( 'text' => 'Permite fazer o agendamento de consultas.',
'type' => 0 ),
'background' => '#dadada',
'linkUrl' => 'https://iaper.com.br/page-agenda-config.html?page-agenda-profiss-id.html?produto_id=1&num_usu_id=1' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>