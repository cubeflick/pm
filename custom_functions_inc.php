<?php
/* function custom_function_override_get_columns_to_view($p_columns_target = COLUMNS_TARGET_VIEW_PAGE) {
	$t_columns = array ();
	
	if ($p_columns_target == COLUMNS_TARGET_PRINT_PAGE) {
		$t_columns [] = 'id'; // localized: 'id',
		$t_columns [] = 'project_id'; // 'email_project'
		$t_columns [] = 'reporter_id'; // 'reporter'
		$t_columns [] = 'handler_id'; // 'assigned_to'
		$t_columns [] = 'priority'; // 'priority'
		$t_columns [] = 'severity'; // 'severity'
		$t_columns [] = 'reproducibility'; // 'reproducibility'
		$t_columns [] = 'version'; // 'version'
		$t_columns [] = 'projection'; // 'projection'
		$t_columns [] = 'category'; // 'category'
		$t_columns [] = 'date_submitted'; // 'date_submitted'
		                                 // t_columns[] = 'eta';
		                                 // t_columns[] = 'os'; // 'os'
		                                 // t_columns[] = 'os_build'; //
		                                 // 'os_version'
		$t_columns [] = 'platform'; // 'platform'
		$t_columns [] = 'view_state'; // 'view_status'
		$t_columns [] = 'last_updated'; // 'last_update'
		$t_columns [] = 'summary'; // 'summary'
		$t_columns [] = 'status'; // 'status'
		$t_columns [] = 'resolution'; // 'resolution'
		$t_columns [] = 'fixed_in_version'; // 'fixed_in_version';
		// if viewing only one Project, Add all custom fields linked to this
		                                   // project
		if (helper_get_current_project () != ALL_PROJECTS) {
			$t_custom_fields = custom_field_get_ids ( helper_get_current_project () );
			
			foreach ( $t_custom_fields as $t_field_id ) {
				$t_desc = custom_field_get_definition ( $t_field_id );
				
				$t_columns [] = 'custom_' . $t_desc ['name'];
			}
		}

		if (OFF == config_get ( 'enable_relationship' )) {
			$t_columns [] = 'duplicate_id'; // 'duplicate_id'
		}
	} else {
		$t_columns [] = 'selection';
		
		if ($p_columns_target == COLUMNS_TARGET_VIEW_PAGE) {
			$t_columns [] = 'edit';
		}
		
		$t_columns [] = 'priority';
		$t_columns [] = 'id';
		
		$t_columns [] = 'bugnotes_count';
		
		
		$t_columns [] = 'reporter_id';
		
		$t_columns [] = 'category';
		$t_columns [] = 'severity';
		$t_columns [] = 'status';
		$t_columns [] = 'last_updated';
		$t_columns [] = 'summary';
		$t_columns[] = 'custom_sort.';
		
	}
	
	return $t_columns;
} */

?>