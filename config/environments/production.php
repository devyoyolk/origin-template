<?php


// Hide errors
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );


// Wordpress Auto Updates
define( 'WP_AUTO_UPDATE_CORE', 'minor' );


// Cleanup Image Edits
define( 'IMAGE_EDIT_OVERWRITE', true );


// Disable Plugin and Theme Update and Installation
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );


// Empty Trash Day limit
define( 'EMPTY_TRASH_DAYS', 30 ); // 30 days