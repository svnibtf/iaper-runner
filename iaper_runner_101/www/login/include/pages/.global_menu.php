<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'usuarios',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'usuarios_dados_profissionais',
'page' => 'list' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item',
'welcome_item1' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1' ) ),
'cellMaps' => array(  ) ),
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
'items' => array(  ),
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
'items' => array( 'welcome_item',
'welcome_item1' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'usuarios',
'linkPage' => 'list',
'linkText' => array( 'table' => 'usuarios',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'linkComments' => array( 'text' => 'Usuarios description',
'type' => 0 ),
'background' => '#E8926F' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'usuarios_dados_profissionais',
'linkPage' => 'list',
'linkText' => array( 'table' => 'usuarios_dados_profissionais',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'shopping-cart' ),
'linkComments' => array( 'text' => 'Usuarios Dados Profissionais description',
'type' => 0 ),
'background' => '#2F4F4F' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>