<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

/*
** CUSTOMS FUNCTIONS
*/

// CONSTANTES

define ('CAT_NEWS', $polylang->model->get_translation('category', 1, pll_current_language()));
define('CAT_ARTISTS', $polylang->model->get_translation('category', 2, pll_current_language()));

// FORMATS D'IMAGES
add_image_size('slider-thumbnail', '850', '350', true);
add_image_size('cat-thumbnail', '850', '300', true);
add_image_size('news-thumbnail', '270', '270', true);

// Autres
// function custom_excerpt_length( $length ) {
// 	return 20;
// }
// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );