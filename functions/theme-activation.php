<?php
/**
 * Theme activation/setup functions
 * Notes:
 *  - after_switch_theme is triggered on the request immediately following a theme switch.
 *  - switch_theme is triggered when the blog's theme is changed. Specifically, it fires after the theme has been switched but before the next request. Theme developers should use this hook to do things when their theme is deactivated. 
 */
