<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'protxubq_wp75' );

/** MySQL database username */
define( 'DB_USER', 'protxubq_wp75' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ze[SpO!j5!3U2)' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '57z0v9ngyas3rm8wpcdcvxg2jgrzpjseswtc8gvuyhes5qszwpwa76ygqxsorphd' );
define( 'SECURE_AUTH_KEY',  '8g2n6e6f7oa8wmdtwnwuqukc4bjmfouehcay0ipa8ueycsvclj9rmvoi7pm0bfst' );
define( 'LOGGED_IN_KEY',    'vvdgolms93t4g2in6xhttbivi6btsq0khkvgj6y7oedxdxsjl1geqp4xhp2yh7eq' );
define( 'NONCE_KEY',        'amliupgx2pyvn848ugggayt77nhqpvnic28ry9dlnv5vrudeyso4sfjfbaouyxod' );
define( 'AUTH_SALT',        'hrrkz3i0cazuavo7twcrej7vkkzix1a82fhlnahm2gm0faevcvquqp6apg0ekg8b' );
define( 'SECURE_AUTH_SALT', 'uiydn7rlvainkpksejbeztocwraoxvikatbzujnaahc9tzkl3m7x1ohm1v8ndlzu' );
define( 'LOGGED_IN_SALT',   'ekxgksuh7ljkmrle55hu63xjkbnebfcra2hupl6mtmrbau9xkmu8fwpy10tgq3lx' );
define( 'NONCE_SALT',       '8rfpoipjfli9xxjndtwz2ecqfm7lgkogzac0ba30t5dlsndczcviptghlerlzpdx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpo8_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
