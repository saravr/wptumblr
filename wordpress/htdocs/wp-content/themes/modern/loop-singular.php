<?php
/**
 * Single page/post content
 *
 * @package    Modern
 * @copyright  2015 WebMan - Oliver Juhas
 * @version    1.0
 */



wmhook_entry_before();

if ( have_posts() ) {

	the_post();

	get_template_part( 'content', get_post_format() );

	wp_reset_query();

}

wmhook_entry_after();

?>