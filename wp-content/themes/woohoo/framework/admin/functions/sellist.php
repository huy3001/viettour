<?php
/**
 * @license For the full license information, please view the Licensing folder
 * that was distributed with this source code.
 *
 * @package Woohoo News Theme
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

function woohoo_sellist( $input, $head = true )
{
	$bd_option  = unserialize( get_option( 'bdayh_setting' ) );
	$class_name = ( isset( $input['class'] ) ) ? $input['class'] : "";
	echo '<div id="item-'. $input['id'] .'" class="bd_option_item '. $class_name .'">';

    if ( !empty( $input['tip'] ) && $input['tip'] != ' ' )
	    echo '<a class="bd_help" title="'. $input['tip'] .'"></a>';

    if ( !empty( $input['name'] ) && $input['name'] != ' ' )
	    echo '<h3 for="' . $input['id'] . '">'. $input['name'] .'</h3>';

    if ( !empty( $input['exp'] ) && $input['exp'] != ' ' )
	    echo '<p class="bd-exp">'. $input['exp'] .'</p>'; ?>

    <select name="<?php echo $input['id']; ?>" id="<?php echo $input['id']; ?>">
        <?php foreach ( $input['options'] as $key => $option ) { ?>
            <option class="r_<?php echo $input['id'];?>" value="<?php echo $key ?>" <?php if ( woohoo_get_option( $input['id'] ) == $key) { echo ' selected="selected"' ; } ?>><?php echo $option; ?></option>
        <?php } ?>
    </select>

    <?php
	if( isset( $input['js'] ) ) echo $input['js'];

    echo '</div>';
}