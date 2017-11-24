<?php
/**
 * Create your own local copy of this file called it wp-config-local.php and enter your local details there.
 */

/* Database Configuration */
define( 'DB_NAME', 'db_name_here' );
define( 'DB_USER', 'db_username_here' );
define( 'DB_PASSWORD', 'db_pass_here' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );
$table_prefix = 'wp_'; // edit this with your local table prefix

/* Multisite */
# define( 'WP_ALLOW_MULTISITE', true ); // You need to remove the "#" when you install WordPress Multisite
/* During Multisite installation WordPress will provide you those details. Simple replace them */
# define( 'MULTISITE', true );
# define( 'SUBDOMAIN_INSTALL', false );
# define( 'DOMAIN_CURRENT_SITE', '' );
# define( 'PATH_CURRENT_SITE', '/' );
# define( 'SITE_ID_CURRENT_SITE', 1 );
# define( 'BLOG_ID_CURRENT_SITE', 1 );

/* Debug Config */
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'FS_METHOD', 'direct' ); // Allows you to upload/update themes/plugins/core from your localhost

/* Enable a few more reporting/debugging stuff :) */
error_reporting( E_ALL );
ini_set( 'display_errors', 'yes' );
