<?php
			$optionsArray = array( 'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'co_codconcepto',
'co_ctrl',
'co_nomconcepto',
'co_otronomconcepto',
'co_tipomovto' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'co_codconcepto' => array( 'integrated_edit_field1' ),
'co_ctrl' => array( 'integrated_edit_field2' ),
'co_nomconcepto' => array( 'integrated_edit_field3' ),
'co_otronomconcepto' => array( 'integrated_edit_field4' ),
'co_tipomovto' => array( 'integrated_edit_field5' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'top' => array( 'edit_header' ),
'grid' => array( 'integrated_edit_field4',
'integrated_edit_field1',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field2' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'edit_header' => 'top',
'integrated_edit_field4' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field2' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c5' ),
'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c7' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field3',
'integrated_edit_field4',
'integrated_edit_field5' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c5' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
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
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c4' ),
array( 'cell' => 'c5' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'colspan' => 2 ) ),
'section' => '' ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ),
'useFullWidth' => true ),
'c4' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c5' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save' ),
'edit_back_list' => array( 'type' => 'edit_back_list' ),
'edit_close' => array( 'type' => 'edit_close' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field1' => array( 'field' => 'co_codconcepto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'co_ctrl',
'type' => 'integrated_edit_field',
'orientation' => 0,
'updateOnEdit' => false ),
'integrated_edit_field3' => array( 'field' => 'co_nomconcepto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'co_otronomconcepto',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field5' => array( 'field' => 'co_tipomovto',
'type' => 'integrated_edit_field',
'orientation' => 0 ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>