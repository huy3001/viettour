<?php 
/* Begin AB Testing Content */
add_action('wp_ajax_wp_insert_abtesting_configuration_form_get_content', 'wp_insert_abtesting_configuration_form_get_content');
function wp_insert_abtesting_configuration_form_get_content() {
	check_ajax_referer('wp-insert', 'wp_insert_nonce');
	$abtestingMode = get_option('wp_insert_abtesting_mode', 1);
	$abtestingModes = array(
		array('value' => '1', 'text' => 'Primary Ad Network'),
		array('value' => '2', 'text' => 'Primary and Secondary Ad Networks'),
		array('value' => '3', 'text' => 'All Ad Networks'),
	);

	echo '<div class="wp_insert_popup_content_wrapper">';
		$control = new smartlogixControls(array('type' => 'radio-group', 'id' => 'wp_insert_abtesting_mode', 'name' => 'wp_insert_abtesting_mode', 'label' => 'Select the Ad Network Setup that best suits you', 'value' => $abtestingMode, 'options' => $abtestingModes));
		$control->add_control();
		echo $control->HTML;
		echo '<p>';
			echo '<b>Recommended Ad Networks</b><br /><br />';
			echo '<a href="http://google.com/adsense" target="_blank"><img src="'.WP_INSERT_URL.'/includes/assets/images/adsense-logo.png" /></a>';
			echo '<a href="https://www.vi.ai/publisher-video-monetization/" style="margin-left: 10px;" target="_blank"><img src="'.WP_INSERT_URL.'/includes/assets/images/vi-logo-square.png" /></a>';
		echo '</p>';
	echo '</div>';
	die();
}

add_action('wp_ajax_wp_insert_abtesting_configuration_form_save_action', 'wp_insert_abtesting_configuration_form_save_action');
function wp_insert_abtesting_configuration_form_save_action() {
	check_ajax_referer('wp-insert', 'wp_insert_nonce');
	
	if(isset($_POST['wp_insert_abtesting_mode'])) {
		update_option('wp_insert_abtesting_mode', $_POST['wp_insert_abtesting_mode']);
	}
	die();
}
/* End AB Testing Content */

/* Begin Database Upgrade */
add_action('wp_insert_upgrade_database', 'wp_insert_upgrade_database');
function wp_insert_upgrade_database() {
	if(!get_option('wp_insert_abtesting_mode')) {	
		$oldValues = get_option('wp_insert_multiple_network_status');		
		update_option('wp_insert_abtesting_mode', ((isset($oldValues))?$oldValues:'1'));
	}
}
/* End Database Upgrade */
?>