<?php 
add_action('admin_menu', 'wp_insert_admin_menu');
function wp_insert_admin_menu() {
	add_menu_page('Wp Insert', 'Wp Insert', 'manage_options', 'wp-insert', 'wp_insert_admin_page', WP_INSERT_URL.'/includes/assets/images/icon.png');
}

add_action('admin_enqueue_scripts', 'wp_insert_admin_enqueue_scripts');
function wp_insert_admin_enqueue_scripts($page) {
	wp_register_script('wp-insert-global-js', WP_INSERT_URL.'includes/assets/js/wp-insert-global.js', array('jquery'), WP_INSERT_VERSION);
	wp_enqueue_script('wp-insert-global-js');
	if($page == 'toplevel_page_wp-insert') {
		wp_register_style('wp-insert-css', WP_INSERT_URL.'includes/assets/css/wp-insert.css', array(), WP_INSERT_VERSION);
		wp_enqueue_style('wp-insert-css');
		wp_register_style('wp-insert-jquery-ui', 'https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css', array(), WP_INSERT_VERSION);
		wp_enqueue_style('wp-insert-jquery-ui');
		wp_register_script('wp-insert-js', WP_INSERT_URL.'includes/assets/js/wp-insert.js', array('jquery', 'jquery-ui-core', 'jquery-ui-accordion', 'jquery-ui-dialog'), WP_INSERT_VERSION);
		wp_enqueue_script('wp-insert-js');
		smartlogixControls::enqueue_assets(WP_INSERT_URL.'includes/controls', WP_INSERT_VERSION);
		wp_enqueue_script('editor');
        wp_enqueue_script('quicktags');
		wp_enqueue_style('buttons');
	}
}

function wp_insert_admin_page() { ?>
    <div class="wrap wp-insert">
		<h1></h1>
		<div class="wp-list-table widefat plugin-install">
			<div class="plugin-card">
				<div class="plugin-card-top">
					<a id="wpInsertLogo" href="http://www.wp-insert.smartlogix.co.in"><img src="<?php echo WP_INSERT_URL; ?>/includes/assets/images/header-banner.png" /></a>
				</div>
				<div class="plugin-card-bottom">
					<div id="wpInsertMeta">
						<p><b>Donate :</b><br /><a target="_blank" href="http://wpinsert.smartlogix.co.in/support/">Click Here</a> to Donate and Promote further development of this plugin.</p>
						<p><b>Like Us :</b><br /><a target="_blank" href="https://www.facebook.com/SmartLogix/">Click here</a> to like and support us on Facebook</p>
						<p><b>Hire Me :</b><br /><a target="_blank" title="Hire me! on Freelancer.com" href="https://www.freelancer.com/affiliates/email/899781/" target="_blank">Hire Me on Freelancer</a> (<i>Hourly : $30 Minimum Hire Period 2 Hour / $60</i>)</p>
						<p><b>Rate and Review :</b><br />If you find this plugin useful do leave a honest <a target="_blank" href="http://wordpress.org/plugins/wp-insert">RATING</a> and <a target="_blank" href="https://wordpress.org/support/view/plugin-reviews/wp-insert#postform">REVIEW</a></p>
					</div>
				</div>
			</div>
			
			<div class="plugin-card">
				<div class="plugin-card-top">
					<h4>In-Post Ads</h4>
					<p>Ads shown within the post content.</p>
				</div>
				<div class="plugin-card-bottom">
					<p><a id="wp_insert_inpostads_above" href="javascript:;">Ad - Above Post Content</a></p>
					<p><a id="wp_insert_inpostads_middle" href="javascript:;">Ad - Middle of Post Content</a></p>
					<p><a id="wp_insert_inpostads_below" href="javascript:;">Ad - Below Post Content</a></p>
					<p><a id="wp_insert_inpostads_left" href="javascript:;">Ad - Left of Post Content</a></p>
					<p><a id="wp_insert_inpostads_right" href="javascript:;">Ad - Right of Post Content</a></p>
				</div>
			</div>
			
			<div class="plugin-card">
				<div class="plugin-card-top">
					<h4>Ad Widgets</h4>
					<p>Ads shown inside widget enabled areas.</p>
				</div>
				<div class="plugin-card-bottom">
					<?php 
					$adwidgets = get_option('wp_insert_adwidgets');
					if(isset($adwidgets) && is_array($adwidgets)) {
						foreach($adwidgets as $key => $value) {
							echo '<p>';
								echo '<a id="wp_insert_adwidgets_'.$key.'" href="javascript:;" onclick="wp_insert_adwidgets_click_handler(\''.$key.'\', \''.$value['title'].'\')">Ad Widget : '.$value['title'].'</a>';
								echo '<span class="dashicons dashicons-dismiss wp_insert_delete_icon" onclick="wp_insert_adwidgets_remove(\''.$key.'\')"></span>';
							echo '</p>';
						}
					}
					?>					
					<p style="text-align: center; padding: 20px 0 10px;"><a id="wp_insert_adwidgets_new" href="#" class="button-secondary">Add New Ad Widget</a></p>
				</div>
			</div>
			
			<div class="plugin-card">
				<div class="plugin-card-top">
					<h4>In-Theme Ads</h4>
					<p>Ads embedded directly inside theme files (Advanced Users Only).</p>
				</div>
				<div class="plugin-card-bottom">
					<?php 
					$inthemeads = get_option('wp_insert_inthemeads');
					if(isset($inthemeads) && is_array($inthemeads)) {
						foreach($inthemeads as $key => $value) {
							echo '<p>';
								echo '<a id="wp_insert_inthemeads_'.$key.'" href="javascript:;" onclick="wp_insert_inthemeads_click_handler(\''.$key.'\', \''.$value['title'].'\')">In-Theme Ad : '.$value['title'].'</a>';
								echo '<span class="dashicons dashicons-dismiss wp_insert_delete_icon" onclick="wp_insert_inthemeads_remove(\''.$key.'\')"></span>';
							echo '</p>';
						}
					}
					?>					
					<p style="text-align: center; padding: 20px 0 10px;"><a id="wp_insert_inthemeads_new" href="#" class="button-secondary">Add New In-Theme Ad</a></p>
				</div>
			</div>
				
			<div class="plugin-card">
				<div class="plugin-card-top">
					<h4>Legal Pages</h4>
					<p>Legal Page Templates to kick start your Legal Notices.</p>
				</div>
				<div class="plugin-card-bottom">
					<p><a id="wp_insert_legalpages_privacy_policy" href="javascript:;">Privacy Policy</a></p>
					<p><a id="wp_insert_legalpages_terms_conditions" href="javascript:;">Terms and Conditions</a></p>
					<p><a id="wp_insert_legalpages_disclaimer" href="javascript:;">Disclaimer</a></p>
					<p><a id="wp_insert_legalpages_copyright" href="javascript:;">Copyright Notice</a></p>
					<!--<p><a href="#">EU Cookie Compliance</a></p>-->
				</div>
			</div>
			
			<div class="plugin-card">
				<div class="plugin-card-top">
					<h4>Tracking Codes</h4>
					<p>Google Analytics and other embeddable codes directly inserted into the site.</p>
				</div>
				<div class="plugin-card-bottom">
					<p><a id="wp_insert_trackingcodes_google_analytics" href="javascript:;">Google Analytics</a></p>
					<p><a id="wp_insert_trackingcodes_header" href="javascript:;">Embed Code in Header</a></p>
					<p><a id="wp_insert_trackingcodes_footer" href="javascript:;">Embed Code in Footer</a></p>
				</div>
			</div>
			
			<div class="plugin-card">
				<div class="plugin-card-top">
					<h4>Multiple Ad Networks / A-B Testing</h4>
					<p>Multiple Ad Networks can be setup to display ads from different networks without infringing the terms of any network.
					At a time only ads from one network (Randomly Choosen) will be shown.
					This feature can also be used to randomly display different sized Ads from the same network.
					Please note that this option is global and applied to In-Post Ads, Ad Widgets and In-Theme Ads.</p>
				</div>
				<div class="plugin-card-bottom">
					<p><a id="wp_insert_abtesting_configuration" href="javascript:;">Configuration</a></p>
				</div>
			</div>
			
			<input type="hidden" id="wp_insert_admin_ajax" name="wp_insert_admin_ajax" value="<?php echo admin_url('admin-ajax.php'); ?>" />
			<input type="hidden" id="wp_insert_nonce" name="wp_insert_nonce" value="<?php echo wp_create_nonce('wp-insert'); ?>" />
		</div>
	</div>
<?php
}

/* Begin Admin Notice */
add_action('admin_notices', 'wp_insert_admin_notices');
function wp_insert_admin_notices() {	
	if(current_user_can('manage_options')) {
		$userId = get_current_user_id();
		if(!get_user_meta($userId, 'wp_insert_admin_notice_dismissed', true)) {
			echo '<div class="notice wp_insert_notice is-dismissible" style="padding: 15px;">';
				echo '<img style="float: left; margin-right: 20px;" src="'.WP_INSERT_URL.'includes/assets/images/wpinsert-vi.png" />';
				echo '<p style="float: left; font-size: 14px; margin: 7px 0px;">Coming soon: The next update to <b>WP-INSERT</b> plugin will feature native video ad units for upto 10x higher revenue (RPM) powered by video intelligence.<br /><a href="https://www.vi.ai/publisher-video-monetization/" target="_blank">https://www.vi.ai/publisher-video-monetization/</a></p>';
				echo '<a style="float: right; vertical-align: middle; height: 36px; font-size: 16px; padding: 0px 25px; line-height: 32px; margin: 12px 40px 0px 20px;" href="https://www.vi.ai/publisher-video-monetization/" class="button button-primary" target="_blank">Learn More</a>';
				echo '<div class="clear"></div>';
				echo '<input type="hidden" id="wp_insert_admin_notice_nonce" name="wp_insert_admin_notice_nonce" value="'.wp_create_nonce('wp-insert-admin-notice').'" />';
				echo '<input type="hidden" id="wp_insert_admin_notice_ajax" name="wp_insert_admin_notice_ajax" value="'.admin_url('admin-ajax.php').'" />';
			echo '</div>';
		}
	}
}

add_action('wp_ajax_wp_insert_admin_notice_dismiss', 'wp_insert_admin_notice_dismiss');
function wp_insert_admin_notice_dismiss() {
	check_ajax_referer('wp-insert-admin-notice', 'wp_insert_admin_notice_nonce');	
	$userId = get_current_user_id();
	update_user_meta($userId, 'wp_insert_admin_notice_dismissed', 'true');
	die();
}
/* End Admin Notice */
?>