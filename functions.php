<?php
/**
 * Include custom WordPress functions
 */

/**
 * Theme setup on activation
 */
require get_template_directory() . '/functions/theme-activation.php';

/**
 * Queue up the CSS
 */
require get_template_directory() . '/functions/enqueue-css.php';

/**
 * Include random stuff that does not fit elsewhere.
 */
require get_template_directory() . '/functions/misc.php';