<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'adm_pacientes' => array( 'preview' => true ) ),
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
'age_Paciente' => array( 'totalsType' => '' ),
'age_Link' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'age_Paciente',
'age_config_id',
'age_data_att',
'age_time_att',
'age_acao',
'age_retorno_data_time',
'age_tipo_pagamento',
'age_anotacoes',
'age_Link' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'age_Paciente' => array( 'simple_grid_field',
'simple_grid_field3' ),
'age_config_id' => array( 'simple_grid_field2',
'simple_grid_field6' ),
'age_data_att' => array( 'simple_grid_field4',
'simple_grid_field11' ),
'age_time_att' => array( 'simple_grid_field5',
'simple_grid_field12' ),
'age_acao' => array( 'simple_grid_field7',
'simple_grid_field13' ),
'age_retorno_data_time' => array( 'simple_grid_field8',
'simple_grid_field14' ),
'age_tipo_pagamento' => array( 'simple_grid_field9',
'simple_grid_field15' ),
'age_anotacoes' => array( 'simple_grid_field10',
'simple_grid_field16' ),
'age_Link' => array( 'simple_grid_field1',
'simple_grid_field17' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'master_info' ),
'above-grid' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field3',
'simple_grid_field',
'simple_grid_field6',
'simple_grid_field2',
'simple_grid_field11',
'simple_grid_field4',
'simple_grid_field12',
'simple_grid_field5',
'simple_grid_field13',
'simple_grid_field7',
'simple_grid_field14',
'simple_grid_field8',
'simple_grid_field15',
'simple_grid_field9',
'simple_grid_field16',
'simple_grid_field10',
'simple_grid_field17',
'simple_grid_field1' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages',
'inline_cancel',
'inlineadd_link' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'master_info' => 'top',
'print_pages' => 'above-grid',
'grid_inline_cancel' => 'above-grid',
'inline_add' => 'above-grid',
'simple_grid_field3' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field1' => 'grid' ),
'itemLocations' => array( 'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'master_info' => array( 'master_info' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field2',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field1' ),
'grid_field_label' => array( 'simple_grid_field3',
'simple_grid_field6',
'simple_grid_field11',
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'age_Paciente_fieldheadercolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'age_config_id_fieldheadercolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'age_data_att_fieldheadercolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'age_time_att_fieldheadercolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'age_acao_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'age_retorno_data_time_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'age_tipo_pagamento_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'age_anotacoes_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'age_Link_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'age_Paciente_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'age_config_id_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'age_data_att_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'age_time_att_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'age_acao_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'age_retorno_data_time_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'age_tipo_pagamento_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'age_anotacoes_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'age_Link_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 9,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c4' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c4' => array( 'model' => 'c4',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages',
'grid_inline_cancel',
'inline_add' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'age_Paciente',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'age_Paciente',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'age_config_id',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'age_config_id',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'age_data_att',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'age_data_att',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'age_time_att',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'age_time_att',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'age_acao',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'age_acao',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'age_retorno_data_time',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'age_retorno_data_time',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'age_tipo_pagamento',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'age_tipo_pagamento',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'age_anotacoes',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'age_anotacoes',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'age_Link',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'age_Link',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'adm_pacientes' => 'true' ) ),
'simple_grid_field' => array( 'field' => 'age_Paciente',
'type' => 'grid_field' ),
'simple_grid_field3' => array( 'type' => 'grid_field_label',
'field' => 'age_Paciente' ),
'simple_grid_field2' => array( 'field' => 'age_config_id',
'type' => 'grid_field' ),
'simple_grid_field6' => array( 'type' => 'grid_field_label',
'field' => 'age_config_id' ),
'simple_grid_field4' => array( 'field' => 'age_data_att',
'type' => 'grid_field' ),
'simple_grid_field11' => array( 'type' => 'grid_field_label',
'field' => 'age_data_att' ),
'simple_grid_field5' => array( 'field' => 'age_time_att',
'type' => 'grid_field' ),
'simple_grid_field12' => array( 'type' => 'grid_field_label',
'field' => 'age_time_att' ),
'simple_grid_field7' => array( 'field' => 'age_acao',
'type' => 'grid_field' ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'age_acao' ),
'simple_grid_field8' => array( 'field' => 'age_retorno_data_time',
'type' => 'grid_field' ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'age_retorno_data_time' ),
'simple_grid_field9' => array( 'field' => 'age_tipo_pagamento',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'age_tipo_pagamento' ),
'simple_grid_field10' => array( 'field' => 'age_anotacoes',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'age_anotacoes' ),
'simple_grid_field1' => array( 'field' => 'age_Link',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'age_Link' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>