<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => false ),
'master' => array( 'gedocumentos_ingresos_consumo' => array( 'preview' => true ) ),
'fields' => array( 'gridFields' => array( 'doclasedoc_id_fk',
'geusuario',
'mcd_cantmovto',
'mcd_valunitant',
'mcdalmacen',
'mcdclasedoc',
'mcdcodelem',
'mcdcuenta',
'mcdfechadoc',
'mcdnrodoc',
'consumo_id_fk',
'mcdnomelem' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'doclasedoc_id_fk' => array( 'integrated_edit_field' ),
'geusuario' => array( 'integrated_edit_field2' ),
'mcd_cantmovto' => array( 'integrated_edit_field4' ),
'mcd_valunitant' => array( 'integrated_edit_field8' ),
'mcdalmacen' => array( 'integrated_edit_field9' ),
'mcdclasedoc' => array( 'integrated_edit_field10' ),
'mcdcodelem' => array( 'integrated_edit_field11' ),
'mcdcuenta' => array( 'integrated_edit_field12' ),
'mcdfechadoc' => array( 'integrated_edit_field13' ),
'mcdnrodoc' => array( 'integrated_edit_field14' ),
'consumo_id_fk' => array( 'integrated_edit_field16' ),
'mcdnomelem' => array( 'integrated_edit_field17' ) ) ),
'pageLinks' => array( 'edit' => true,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array(  ),
'below-grid' => array( 'view_back_list',
'view_close',
'hamburger' ),
'top' => array( 'view_header' ),
'grid' => array( 'integrated_edit_field',
'integrated_edit_field16',
'integrated_edit_field12',
'integrated_edit_field4',
'integrated_edit_field9',
'integrated_edit_field11',
'integrated_edit_field8',
'integrated_edit_field10',
'integrated_edit_field14',
'integrated_edit_field13',
'integrated_edit_field2',
'master_info',
'integrated_edit_field17' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'view_back_list' => 'below-grid',
'view_close' => 'below-grid',
'hamburger' => 'below-grid',
'view_header' => 'top',
'integrated_edit_field' => 'grid',
'integrated_edit_field16' => 'grid',
'integrated_edit_field12' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field9' => 'grid',
'integrated_edit_field11' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field10' => 'grid',
'integrated_edit_field14' => 'grid',
'integrated_edit_field13' => 'grid',
'integrated_edit_field2' => 'grid',
'master_info' => 'grid',
'integrated_edit_field17' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field16' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field12' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field11' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field10' => array( 'location' => 'grid',
'cellId' => 'c1' ),
'integrated_edit_field14' => array( 'location' => 'grid',
'cellId' => 'c14' ),
'integrated_edit_field13' => array( 'location' => 'grid',
'cellId' => 'c15' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c16' ),
'master_info' => array( 'location' => 'grid',
'cellId' => 'c8' ),
'integrated_edit_field17' => array( 'location' => 'grid',
'cellId' => 'c20' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'view_header' => array( 'view_header' ),
'view_back_list' => array( 'view_back_list' ),
'view_close' => array( 'view_close' ),
'hamburger' => array( 'hamburger' ),
'view_edit' => array( 'view_edit' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field8',
'integrated_edit_field9',
'integrated_edit_field10',
'integrated_edit_field11',
'integrated_edit_field12',
'integrated_edit_field13',
'integrated_edit_field14',
'integrated_edit_field16',
'integrated_edit_field17' ),
'master_info' => array( 'master_info' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c8' => array( 'cols' => array( 0,
1,
2,
3 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'master_info' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field14' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c1' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field10' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c15' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field13' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field16' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c20' => array( 'cols' => array( 2,
3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field17' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field12' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field11' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 1 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 2 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 3 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 4,
'height' => 5 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'view',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'view',
'type' => 'view',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'view-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'view-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_back_list',
'view_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'view-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'view_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c8',
'colspan' => 4 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c' ),
array( 'cell' => 'c14' ),
array( 'cell' => 'c1' ),
array( 'cell' => 'c15' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ),
array( 'cell' => 'c20',
'colspan' => 2 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c5' ),
array( 'cell' => 'c9' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c16' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c10' ),
array( 'cell' => 'c12' ),
array( 'cell' => 'c18' ) ) ) ),
'cells' => array( 'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field16' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field12' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field11' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ) ),
'c1' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field10' ) ),
'c12' => array( 'model' => 'c3',
'items' => array(  ) ),
'c14' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field14' ) ),
'c15' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field13' ) ),
'c16' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c18' => array( 'model' => 'c3',
'items' => array(  ) ),
'c8' => array( 'model' => 'c3',
'items' => array( 'master_info' ) ),
'c20' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field17' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'view_header' => array( 'type' => 'view_header' ),
'view_back_list' => array( 'type' => 'view_back_list' ),
'view_close' => array( 'type' => 'view_close' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'view_edit' ) ),
'view_edit' => array( 'type' => 'view_edit' ),
'integrated_edit_field' => array( 'field' => 'doclasedoc_id_fk',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'doclasedoc_id_fk',
'table' => 'almovconsdia_ingresos',
'type' => 3 ) ),
'integrated_edit_field2' => array( 'field' => 'geusuario',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'mcd_cantmovto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field8' => array( 'field' => 'mcd_valunitant',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field9' => array( 'field' => 'mcdalmacen',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'mcdalmacen',
'table' => 'almovconsdia_ingresos',
'type' => 3 ) ),
'integrated_edit_field10' => array( 'field' => 'mcdclasedoc',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'mcdclasedoc',
'table' => 'almovconsdia_ingresos',
'type' => 3 ) ),
'integrated_edit_field11' => array( 'field' => 'mcdcodelem',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field12' => array( 'field' => 'mcdcuenta',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field13' => array( 'field' => 'mcdfechadoc',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field14' => array( 'field' => 'mcdnrodoc',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field16' => array( 'field' => 'consumo_id_fk',
'type' => 'integrated_edit_field',
'orientation' => 0,
'label' => array( 'field' => 'consumo_id_fk',
'table' => 'almovconsdia_ingresos',
'type' => 3 ) ),
'integrated_edit_field17' => array( 'field' => 'mcdnomelem',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'gedocumentos_ingresos_consumo' => 'true' ) ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>