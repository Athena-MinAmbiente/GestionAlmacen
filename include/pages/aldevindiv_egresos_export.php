<?php
			$optionsArray = array( 'totals' => array( 'aldevindiv_id' => array( 'totalsType' => '' ),
'doclasedoc_id_fk' => array( 'totalsType' => '' ),
'almovinddia_id_fk' => array( 'totalsType' => '' ),
'doclasedoc_in_fk' => array( 'totalsType' => '' ),
'legaliza' => array( 'totalsType' => '' ),
'di_almacen' => array( 'totalsType' => '' ),
'di_cuenta' => array( 'totalsType' => '' ),
'di_codelem' => array( 'totalsType' => '' ),
'cod_cta' => array( 'totalsType' => '' ),
'di_nroplaca' => array( 'totalsType' => '' ),
'di_nroserie' => array( 'totalsType' => '' ),
'di_fechacompra' => array( 'totalsType' => '' ),
'di_fecha_asigacion' => array( 'totalsType' => '' ),
'di_funcionario' => array( 'totalsType' => '' ),
'di_depsup' => array( 'totalsType' => '' ),
'di_dep' => array( 'totalsType' => '' ),
'di_valorcompra' => array( 'totalsType' => '' ),
'almovdevdia_id_fk' => array( 'totalsType' => '' ),
'alelemdevolutivo_id_fk' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'di_valorcompra',
'di_dep',
'di_depsup',
'di_funcionario',
'di_fecha_asigacion',
'di_fechacompra',
'di_nroserie',
'di_nroplaca',
'cod_cta',
'di_codelem',
'di_cuenta',
'di_almacen',
'almovdevdia_id_fk',
'alelemdevolutivo_id_fk' ),
'exportFields' => array( 'di_almacen',
'di_cuenta',
'di_codelem',
'cod_cta',
'di_nroplaca',
'di_nroserie',
'di_fechacompra',
'di_fecha_asigacion',
'di_funcionario',
'di_depsup',
'di_dep',
'di_valorcompra',
'almovdevdia_id_fk',
'alelemdevolutivo_id_fk' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'di_valorcompra' => array( 'export_field11' ),
'di_dep' => array( 'export_field10' ),
'di_depsup' => array( 'export_field9' ),
'di_funcionario' => array( 'export_field8' ),
'di_fecha_asigacion' => array( 'export_field7' ),
'di_fechacompra' => array( 'export_field6' ),
'di_nroserie' => array( 'export_field5' ),
'di_nroplaca' => array( 'export_field4' ),
'cod_cta' => array( 'export_field3' ),
'di_codelem' => array( 'export_field2' ),
'di_cuenta' => array( 'export_field1' ),
'di_almacen' => array( 'export_field' ),
'almovdevdia_id_fk' => array( 'export_field12' ),
'alelemdevolutivo_id_fk' => array( 'export_field13' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field5' => 'grid',
'export_field6' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_field9' => 'grid',
'export_field10' => 'grid',
'export_field11' => 'grid',
'export_field12' => 'grid',
'export_field13' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field11',
'export_field10',
'export_field9',
'export_field8',
'export_field7',
'export_field6',
'export_field5',
'export_field4',
'export_field3',
'export_field2',
'export_field1',
'export_field',
'export_field12',
'export_field13' ) ),
'cellMaps' => array(  ) ),
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
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field',
'export_field1',
'export_field2',
'export_field3',
'export_field4',
'export_field5',
'export_field6',
'export_field7',
'export_field8',
'export_field9',
'export_field10',
'export_field11',
'export_field12',
'export_field13' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ) ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field11' => array( 'field' => 'di_valorcompra',
'type' => 'export_field' ),
'export_field10' => array( 'field' => 'di_dep',
'type' => 'export_field' ),
'export_field9' => array( 'field' => 'di_depsup',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'di_funcionario',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'di_fecha_asigacion',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'di_fechacompra',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'di_nroserie',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'di_nroplaca',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'cod_cta',
'type' => 'export_field' ),
'export_field2' => array( 'field' => 'di_codelem',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'di_cuenta',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'di_almacen',
'type' => 'export_field' ),
'export_field12' => array( 'field' => 'almovdevdia_id_fk',
'type' => 'export_field' ),
'export_field13' => array( 'field' => 'alelemdevolutivo_id_fk',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>