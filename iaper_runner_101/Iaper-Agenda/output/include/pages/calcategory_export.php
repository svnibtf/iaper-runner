<?php
			$optionsArray = array( 'totals' => array( 'id' => array( 'totalsType' => '' ),
'Category' => array( 'totalsType' => '' ),
'Color' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'Category',
'Color' ),
'exportFields' => array( null ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'Category' => array( 'export_field' ),
'Color' => array( 'export_field1' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'export_header' ),
'grid' => array( 'data_range',
'all_records',
'current_page',
'fields_export_label',
'fields_export',
'data_format',
'formatted_values',
'raw_values',
'output_format',
'word',
'excel',
'csv',
'xml' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array(  ),
'itemForms' => array( 'export_header' => 'top',
'data_range' => 'grid',
'all_records' => 'grid',
'current_page' => 'grid',
'fields_export_label' => 'grid',
'fields_export' => 'grid',
'data_format' => 'grid',
'formatted_values' => 'grid',
'raw_values' => 'grid',
'output_format' => 'grid',
'word' => 'grid',
'excel' => 'grid',
'csv' => 'grid',
'xml' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'data_range' => array( 'data_range' ),
'all_records' => array( 'all_records' ),
'current_page' => array( 'current_page' ),
'fields_export_label' => array( 'fields_export_label' ),
'fields_export' => array( 'fields_export' ),
'data_format' => array( 'data_format' ),
'formatted_values' => array( 'formatted_values' ),
'raw_values' => array( 'raw_values' ),
'output_format' => array( 'output_format' ),
'word' => array( 'word' ),
'excel' => array( 'excel' ),
'csv' => array( 'csv' ),
'xml' => array( 'xml' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field',
'export_field1' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c3' ),
array( 'cell' => 'c4' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c6' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c7' ),
array( 'cell' => 'c8' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'data_range' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'all_records',
'current_page' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c3' => array( 'model' => 'c3',
'items' => array( 'fields_export_label' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'fields_export' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c5' => array( 'model' => 'c5',
'items' => array( 'data_format' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c6' => array( 'model' => 'c6',
'items' => array( 'formatted_values',
'raw_values' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c7' => array( 'model' => 'c7',
'items' => array( 'output_format' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c8' => array( 'model' => 'c8',
'items' => array( 'word',
'excel',
'csv',
'xml' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'data_range' => array( 'type' => 'data_range' ),
'all_records' => array( 'type' => 'all_records' ),
'current_page' => array( 'type' => 'current_page' ),
'fields_export_label' => array( 'type' => 'fields_export_label' ),
'fields_export' => array( 'type' => 'fields_export',
'items' => array( 'export_field',
'export_field1' ) ),
'data_format' => array( 'type' => 'data_format' ),
'formatted_values' => array( 'type' => 'formatted_values' ),
'raw_values' => array( 'type' => 'raw_values' ),
'output_format' => array( 'type' => 'output_format' ),
'word' => array( 'type' => 'word' ),
'excel' => array( 'type' => 'excel' ),
'csv' => array( 'type' => 'csv' ),
'xml' => array( 'type' => 'xml' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field' => array( 'field' => 'Category',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'Color',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 4,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>