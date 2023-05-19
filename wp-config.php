<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'PlKPt+8rJipyMGAV+wKdiRmN9BOjTxHEvjomI9rpEcSIjYKve9Sl4NFUMxtfqFMNu0gscNaYPKWmMR3/vBNP9w==');
define('SECURE_AUTH_KEY',  '63R/SK/OF/XoDEnTTLikwusjeVCK/fmt2VWsUeDL5IsptP2KSrS6nkrnIKkVxfuuDMioZu17hXgsE8Z/WxQRGw==');
define('LOGGED_IN_KEY',    '6CreIH3Ji9Wu8eiXu1/rNQdLcmwa6g5ueM8B6Tmlk3GNds71swakUXcWEnQm459AHqT/nwZb9Ad/cIYkM0PYiA==');
define('NONCE_KEY',        'Az3TRreafwxEFzln2tBmxuEvM3zOOmmXyEi0MMU5TpGJ4wQB6dNMdFt7x6aF1jORhtCHX9n1Xcyy07AqKJaHPQ==');
define('AUTH_SALT',        '/K2Ao51SdjUax7+HfeqSmlKZknUzcWWRUqPDyDRThsmsL9L5utG2QZAG1Zehd966csafOcIx/2IhFyYczHDzIA==');
define('SECURE_AUTH_SALT', 'GxOeem1W10WkPjl+jNB3DFwT783hGVguf2q+BPA2RbUlczasANM/8GXDjEYzJjHajU8ehyAhCVxKQUUSddGVxQ==');
define('LOGGED_IN_SALT',   'ov+8JqKZK8IPOmA5Hunn3fLSn7FXZKRBgxGXTl7pTyhtuCpMncYPpqdnTBhh2VB4Q/TnQGntwlo3cZCunFEx8w==');
define('NONCE_SALT',       'ZJpmU+og8phyushlHTu/PEaMyDLG/2x9wQiGO3YxfzO6fau9YZXSAeygFwKFTXGXQvLzEdAQvxvEmVNi1mAF4A==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
