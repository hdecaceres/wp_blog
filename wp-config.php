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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp505');

/** MySQL database username */
define('DB_USER', 'wp505');

/** MySQL database password */
define('DB_PASSWORD', 'S(410F-NpS');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dahrdwgdxndxuur13qjb8nsn4uk2q9llj7baig7xamsyzaohgkv3bbqmtf18yzv2');
define('SECURE_AUTH_KEY',  'itxzrcvmdlxz0mukzrctvxze1vx4av2y6fyfkgahp4epezha48yomyvftkfq7hyj');
define('LOGGED_IN_KEY',    '7a4w0ibxjvzv7y8hciuee8p6fnfdkuxdngkhd4bqdqqqitqd3qddvj1v80bh6yhl');
define('NONCE_KEY',        'ndw1ngkvoewuzqmhyrknmye5grp9lyid7uq6wbiubrt2vvi0cejd759pnrl6hlv3');
define('AUTH_SALT',        'wnlejghirrljufyzzsggknwgvp9lcltso2afkcc07l19eti3muut8aqwfyjud0n1');
define('SECURE_AUTH_SALT', 'mjxp5e2sesupafl1dt48cu30aekygxdcvxxvlkzazgvgxvjsyr0allm8ivkwlj5o');
define('LOGGED_IN_SALT',   'ipputig2npbpeznjryufpdq1sncjoej7t6gh6tjdj6xtym6ebuvd9n8hsrnqorwc');
define('NONCE_SALT',       '7j16js1n7pbozmrq5xy5goyect3jm8mfumqs1xlwppzesuhdvwt5o2juulv5mndx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpol_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '127.0.0.1');
define('PATH_CURRENT_SITE', '/wp/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
