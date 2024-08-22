<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'phamvanhuong' );

/** Database username */
define( 'DB_USER', 'PS29467' );

/** Database password */
define( 'DB_PASSWORD', '1072004khanh' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'VJZYeJFp8j8ffrYelWtHxozu3d5aIEjwHxHj6aptujRvNFIEuUP2xiZ1owInT6g2' );
define( 'SECURE_AUTH_KEY',  'FFv3DQVkeNJghjKv98vuo6eOsnYjNVZlMIrRWE9eEfF1E9wYa9Di5IDxKJTLvSSj' );
define( 'LOGGED_IN_KEY',    'tJMZ5xTUKAyocCw4p6WbQyfrTss6g9Epuj5VUX4mItRm1E3HJSZkfgCqIZusxYTK' );
define( 'NONCE_KEY',        'hGcq1PT3PmepPUlGQ3YcV8AiDMYNJmB5LQFYA0DMDOH0HeuKgfPW5BwEZzqzDObZ' );
define( 'AUTH_SALT',        'TKgg9lNr7R88m6DlVRHdQuMUQAGXo9q5ThER2mmfacBGCCm37tFbs8PpMN0itmIy' );
define( 'SECURE_AUTH_SALT', 's0EYtA1qh2cDmPrK7Skvs8OOI8PY9wVDcJeIFGHuFSs6Isu65Zcs1TJs5aDsWstR' );
define( 'LOGGED_IN_SALT',   '1x2FOOdprci0lzgahSYM5KQHAEZZTTpbvcNAi13JbyktOjB93wKKzGEwmx7Bpyeb' );
define( 'NONCE_SALT',       'kRB5IzErT9OYOzGyhESVcl10ttSUw8V0JjgPqR2RKOGzUwL4uqRr1a75xhsIl1gz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
