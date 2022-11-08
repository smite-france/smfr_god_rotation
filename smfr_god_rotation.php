<?
/*
Plugin Name: Shortcode rotation des dieux
Description: Affiche les dieux actuellement free
Author: Tilican
Version: 0.1
*/

include 'fnc_god.php';

define( 'SMFR_GOD_ROTATION_URL', plugin_dir_url ( __FILE__ ) );
define( 'SMFR_GOD_ROTATION_URI', plugin_dir_path( __FILE__ ) );

function smfr_god_rotation_fnc() {

	wp_register_style(
		'smfr_god_rotation',
		SMFR_GOD_ROTATION_URL.'style.css'
	);
	wp_enqueue_style('smfr_god_rotation');

	$html = "";
	$free_god = array(1763, 1698, 1779, 1872, 1670);

	$god_rotation = get_current_god_rotation();

	$html .= "<div class='smfr_god_rotation' style='padding-left: 15px;' >";

	$html .= "<h2 style='color: white;'>Dieux gratuits</h2>";
	$html .= "<p> ";

	foreach ( $free_god as $v ) {
		$god_free = get_current_god_infos( $v );
		$god_free = $god_free[0];
		$html .= "<img height='55px' src='" . $god_free['icon'] . "' />";
	}
	$html .= "</p>";

	$html .= "<h2 style='color: white;'>Rotation</h2>";
	$html .= "<p>";
	foreach ( $god_rotation as $k => $v ) {
		$html .= "<img height='55 px' src='" . $v['icon'] . "' />";
	}
	$html .= "</p>";

	$html .= "</div>";
	return $html;
}

add_shortcode('smfr_god_rotation', 'smfr_god_rotation_fnc');

?>