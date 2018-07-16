<?php
/**
 * Author:      Andrei Baicus <andrei@themeisle.com>
 * Created on:  09/07/2018
 * Plugin Name: Hestia Extension Example
 * Description: This plugin is created as an example for how to use the current Hestia Core to extend / change features.
 * Text Domain: hestia-extension
 *
 * @soundtrack  Cold Fame - Band Of Skulls
 * @package     Hestia Extension
 */

/**
 * This functions changes hooks to adapt our Extension.
 * We will do the following:
 * - Remove the features section content;
 * - Replace it with the 'replace_features_section' function;
 * - Remove the related posts content;
 * - Replace it with the 'replace_related_posts' function;
 * - Remove the footer bottom content;
 * - Replace it with the 'replace_bottom_footer' function;
 */
function change_hooks() {
//	 Empty the Features Hestia Hook.
	remove_all_actions( 'hestia_do_features_section' );
//	 Empty the related posts Hook.
	remove_all_actions( 'hestia_blog_related_posts' );
//	 Empty the bottom footer.
	remove_all_actions( 'hestia_do_bottom_footer_content' );

	// Replace sections.
	add_action( 'hestia_do_features_section', 'replace_features_section' );
	add_action( 'hestia_do_bottom_footer_content', 'replace_bottom_footer' );
}
add_action( 'init', 'change_hooks' );


/**
 * Replace Features Section
 */
function replace_features_section() { ?>
	<h1 class="text-center">This replaces the features section</h1>
	<?php
}

add_action( 'hestia_blog_related_posts', 'replace_related_posts' );
/**
 * Replace Related Posts
 */
function replace_related_posts() { ?>
	<h1 class="text-center">This Replaces Related Posts</h1>
	<?php
}

function replace_bottom_footer() { ?>
	<h1>Replace Bottom Footer.</h1>
<?php
}

