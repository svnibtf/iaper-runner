<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'DayEvent',
'EndDate',
'Subject',
'EndTime',
'TimeField',
'DateField' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'DayEvent' => array( 'integrated_edit_field' ),
'EndDate' => array( 'integrated_edit_field5' ),
'Subject' => array( 'integrated_edit_field8' ),
'EndTime' => array( 'integrated_edit_field9' ),
'TimeField' => array( 'integrated_edit_field10' ),
'DateField' => array( 'integrated_edit_field6' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'snippet',
'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'custom_button' ),
'grid' => array( 'integrated_edit_field8',
'integrated_edit_field5',
'integrated_edit_field9',
'integrated_edit_field',
'integrated_edit_field6',
'integrated_edit_field10' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'snippet' => 'top',
'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'custom_button' => 'below-grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field' => 'grid',
'integrated_edit_field6' => 'grid',
'integrated_edit_field10' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c30' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c302' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c300' ),
'integrated_edit_field6' => array( 'location' => 'grid',
'cellId' => 'c3001' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c3011' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field5',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field6' ),
'snippet' => array( 'snippet' ),
'custom_button' => array( 'custom_button' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c3' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3001' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field6' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3011' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c30' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c302' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c300' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c301' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => true,
'customButtons' => array( 'Save___Edit' ) ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array( 'Save___Edit' ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'snippet',
'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
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
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'custom_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c3001',
'colspan' => 1 ),
array( 'cell' => 'c3011' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c30',
'colspan' => 1 ),
array( 'cell' => 'c302',
'colspan' => 1 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c300' ),
array( 'cell' => 'c301' ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'left' ),
'c30' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c302' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c300' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ),
'align' => 'left' ),
'c3001' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field6' ) ),
'c3011' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c' => array( 'model' => 'c3',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0,
'align' => 'left' ),
'c301' => array( 'model' => 'c3',
'items' => array(  ),
'align' => 'left' ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header',
'title' => array( 'page' => 'add',
'table' => 'calcalendar',
'type' => 7 ) ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field' => array( 'field' => 'DayEvent',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'EndDate',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'Subject',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'EndTime',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field10' => array( 'field' => 'TimeField',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'snippet' => array( 'eventId' => 'calcalendar_snippet1',
'type' => 'snippet' ),
'integrated_edit_field6' => array( 'field' => 'DateField',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'custom_button' => array( 'eventId' => 'Save___Edit',
'label' => array( 'text' => 'Save & Edit',
'type' => 0 ),
'type' => 'custom_button' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>