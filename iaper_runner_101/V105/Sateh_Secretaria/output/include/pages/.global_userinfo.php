<?php
			$optionsArray = array( 'fields' => array( 'gridFields' => array( 'email',
'nome' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'email' => array( 'integrated_user_field' ),
'nome' => array( 'integrated_user_field1' ) ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array(  ),
'supertop' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb',
'loginform_login',
'username_button' ),
'left' => array( 'logo',
'expand_button',
'menu' ),
'top' => array(  ),
'grid' => array( 'user_fields_title',
'fields_message',
'user_fields_reset',
'user_fields_save',
'changepassword_link',
'integrated_user_field',
'integrated_user_field1' ) ),
'formXtTags' => array( 'above-grid' => array(  ),
'below-grid' => array(  ),
'top' => array(  ) ),
'itemForms' => array( 'expand_menu_button' => 'supertop',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'logo' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'user_fields_title' => 'grid',
'fields_message' => 'grid',
'user_fields_reset' => 'grid',
'user_fields_save' => 'grid',
'changepassword_link' => 'grid',
'integrated_user_field' => 'grid',
'integrated_user_field1' => 'grid' ),
'itemLocations' => array( 'user_fields_title' => array( 'location' => 'grid',
'cellId' => 'fields_message' ),
'fields_message' => array( 'location' => 'grid',
'cellId' => 'fields_message' ),
'user_fields_reset' => array( 'location' => 'grid',
'cellId' => 'buttons' ),
'user_fields_save' => array( 'location' => 'grid',
'cellId' => 'buttons' ),
'changepassword_link' => array( 'location' => 'grid',
'cellId' => 'fields' ),
'integrated_user_field' => array( 'location' => 'grid',
'cellId' => 'fields' ),
'integrated_user_field1' => array( 'location' => 'grid',
'cellId' => 'fields' ) ),
'itemVisiblity' => array( 'expand_menu_button' => 2,
'breadcrumb' => 5,
'expand_button' => 5 ) ),
'itemsByType' => array( 'fields_message' => array( 'fields_message' ),
'user_fields_reset' => array( 'user_fields_reset' ),
'user_fields_save' => array( 'user_fields_save' ),
'user_fields_title' => array( 'user_fields_title' ),
'changepassword_link' => array( 'changepassword_link' ),
'breadcrumb' => array( 'breadcrumb' ),
'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'userinfo_link' => array( 'userinfo_link' ),
'logout_link' => array( 'logout_link' ),
'expand_menu_button' => array( 'expand_menu_button' ),
'collapse_button' => array( 'collapse_button' ),
'integrated_user_field' => array( 'integrated_user_field',
'integrated_user_field1' ),
'expand_button' => array( 'expand_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'fields_message' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'user_fields_title',
'fields_message' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'fields' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'changepassword_link',
'integrated_user_field',
'integrated_user_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'buttons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'user_fields_reset',
'user_fields_save' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 3 ) ) ),
'page' => array( 'verticalBar' => true,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'userinfo',
'type' => 'userinfo',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'expand_menu_button',
'collapse_button',
'breadcrumb' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ) ) ),
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
'items' => array( 'menu' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'userinfo-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'fields_message' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'fields' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'buttons' ) ),
'section' => '' ) ),
'cells' => array( 'fields_message' => array( 'model' => 'fields_message',
'items' => array( 'user_fields_title',
'fields_message' ) ),
'buttons' => array( 'model' => 'buttons',
'items' => array( 'user_fields_reset',
'user_fields_save' ) ),
'fields' => array( 'model' => 'fields',
'items' => array( 'changepassword_link',
'integrated_user_field',
'integrated_user_field1' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'fields_message' => array( 'type' => 'fields_message' ),
'user_fields_reset' => array( 'type' => 'user_fields_reset' ),
'user_fields_save' => array( 'type' => 'user_fields_save' ),
'user_fields_title' => array( 'type' => 'user_fields_title',
'font-size' => '24px' ),
'changepassword_link' => array( 'type' => 'changepassword_link' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'userinfo_link',
'logout_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'userinfo_link' => array( 'type' => 'userinfo_link' ),
'logout_link' => array( 'type' => 'logout_link' ),
'expand_menu_button' => array( 'type' => 'expand_menu_button' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'integrated_user_field' => array( 'field' => 'email',
'type' => 'integrated_user_field',
'orientation' => 0 ),
'integrated_user_field1' => array( 'field' => 'nome',
'type' => 'integrated_user_field',
'orientation' => 0 ),
'expand_button' => array( 'type' => 'expand_button' ) ),
'dbProps' => array(  ),
'version' => 7 );
		?>