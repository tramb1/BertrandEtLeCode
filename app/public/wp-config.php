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


define('AUTH_KEY',         'yE4/zc5b4OcFjHIrGzg34a3YYeggOQxUfil/zpPJfIuQfNZ6HWHd8wTIoFDmOxrqmLIg+aXakOD0HoRDBzm2xw==');
define('SECURE_AUTH_KEY',  'YQQKWccdxvbbrFTWu22rhz7DkLOBpwp7b0XTA0ls+QhcwGCnWviXMQu005wkBtCOgzaCOhIuHy4XXZS45/4+wg==');
define('LOGGED_IN_KEY',    'D2IASCvtUp8JCZNo/osWqFOXafBKitgHieu20l5tz7vgA3FRYcgb5TegUrtM7gfw7/6FMMCjM4eUUC+iT3eYcA==');
define('NONCE_KEY',        '1c1wsqlNvuWEAvKKzn/k4BsQIf2sr9/xm0wtYqweQnASBDvxG7EOV7Btjt2CiyyzNvJA2G7UBYQhwchPtu9/LQ==');
define('AUTH_SALT',        'CssUxWYs+7b/ECbbTV1NfDu2rEYM9js4/36/MIO+SlysxIzThZcidEjeit4Y3zsItiI4a03s7D+g/qHHdN9E5A==');
define('SECURE_AUTH_SALT', 'LftLKilPArkPLpBL/PhxcodDL2cPfZj/u91LgaXFjqVy/6fCcgET7mogGoedFGdK/lI854hfkhMWdbA6Awq7TA==');
define('LOGGED_IN_SALT',   'TLugoauQZKzBKrJHNALeiJcrNymXJtGKdVNB3Di03EMBBU+oBpicdm4hCqI4bTBL/7pcyZG1mU1o3x7tS8k65Q==');
define('NONCE_SALT',       'nwLne0z9W4m7Ihk58bnWvkzsEEVOwtc7CVos/issAxBR+L6G9JymG20kh+BXK/tluhY8qQPAqh3wAWTAXQYRog==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
