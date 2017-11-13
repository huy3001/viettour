<?php
define( 'WOOHOO_THEME_NAME', 'Woohoo'   );
define( 'WOOHOO_THEME_FOLDER', 'woohoo' );
define( 'WOOHOO_THEME_VER', '1.4.3'     );

require_once ( get_template_directory() . '/framework/admin/framework-options.php'          );
require_once ( get_template_directory() . '/framework/functions/functions-theme.php'        );
require_once ( get_template_directory() . '/framework/admin/framework-default-texts.php'    );
require_once ( get_template_directory() . '/framework/functions/functions-user-rate.php'    );

/**
 # Get theme name
 * ----------------------------------------------------------------------------- */
function woohoo_get_theme_name() {
	return 'woohoo';
}

/**
 # Get theme version
 * ----------------------------------------------------------------------------- */
function woohoo_get_theme_version() {
	$current_theme = wp_get_theme( woohoo_get_theme_name() );
	return $current_theme->exists() ? $current_theme->get( 'Version' ) : WOOHOO_THEME_VER;
}

/**
# Get theme custom style
 * ----------------------------------------------------------------------------- */
function woohoo_custom_style() {
	wp_enqueue_style( 'custom',   get_template_directory_uri() . '/css/custom.css');
}

add_action( 'wp_enqueue_scripts','woohoo_custom_style' );