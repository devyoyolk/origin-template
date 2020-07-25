<?php

// Document Root
$app_dir = dirname( __FILE__ );

// =================
//  Include ENV File
// =================
if ( file_exists( $app_dir . '/env.php' ) ) {
    include( $app_dir . '/env.php' );
    $dev_mode = false;
    if ($WP_ENV === 'development') $dev_mode = true;
    define( 'WP_LOCAL_DEV', $dev_mode );
} 

// ========================
// Database Integration
// ========================
define( 'DB_NAME', $DB_NAME );
define( 'DB_USER', $DB_USER );
define( 'DB_PASSWORD', $DB_PASSWORD );
define( 'DB_HOST', $DB_HOST ); 
$table_prefix = $DB_PREFIX;


// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', $app_dir . '/' . $CONTENT_DIR);
define( 'WP_CONTENT_URL', $WP_HOME . '/' . $CONTENT_DIR );


// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define( 'WPLANG', '' );


define( 'AUTH_KEY',         $AUTH_KEY );
define( 'SECURE_AUTH_KEY',  $SECURE_AUTH_KEY );
define( 'LOGGED_IN_KEY',    $LOGGED_IN_KEY );
define( 'NONCE_KEY',        $NONCE_KEY );
define( 'AUTH_SALT',        $AUTH_SALT );
define( 'SECURE_AUTH_SALT', $SECURE_AUTH_SALT );
define( 'LOGGED_IN_SALT',   $LOGGED_IN_SALT );
define( 'NONCE_SALT',       $NONCE_SALT );


$config_dir = $app_dir . '/config';

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( $config_dir . '/memcached.php' ) ){
    require_once ( $config_dir . '/memcached.php' );
}

// ================================================
//     END : Change Setting as for the set Environment
// ================================================
$env_config = $config_dir . '/environments/' . $WP_ENV . '.php';
if (file_exists($env_config)) {
    require_once $env_config;
}
